import './bootstrap';

/* ---------------------------------------------------------------
 | Mobile navigation
 * ------------------------------------------------------------- */
function initMobileNav() {
    const toggle = document.querySelector('[data-nav-toggle]');
    const panel = document.querySelector('[data-nav-panel]');
    if (!toggle || !panel) return;

    const label = toggle.querySelector('[data-nav-label]');
    const iconOpen = toggle.querySelector('[data-nav-icon-open]');
    const iconClose = toggle.querySelector('[data-nav-icon-close]');

    const setOpen = (open) => {
        toggle.setAttribute('aria-expanded', String(open));
        panel.classList.toggle('hidden', !open);
        iconOpen?.classList.toggle('hidden', open);
        iconClose?.classList.toggle('hidden', !open);
        if (label) label.textContent = open ? 'Close menu' : 'Open menu';
    };

    toggle.addEventListener('click', () => setOpen(toggle.getAttribute('aria-expanded') !== 'true'));

    panel.querySelectorAll('[data-nav-link]').forEach((link) => link.addEventListener('click', () => setOpen(false)));

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && toggle.getAttribute('aria-expanded') === 'true') {
            setOpen(false);
            toggle.focus();
        }
    });

    // Close if the viewport grows past the mobile breakpoint.
    window.matchMedia('(min-width: 768px)').addEventListener('change', (e) => e.matches && setOpen(false));
}

/* ---------------------------------------------------------------
 | Testimonial carousel — centres the active card, neighbours peek in.
 * ------------------------------------------------------------- */
function initCarousel(root) {
    const track = root.querySelector('[data-carousel-track]');
    const slides = [...root.querySelectorAll('[data-carousel-slide]')];
    const dots = [...root.querySelectorAll('[data-carousel-dot]')];
    if (!track || slides.length === 0) return;

    let index = Number(root.dataset.start ?? 0);

    const render = () => {
        const slide = slides[index];
        const offset = root.clientWidth / 2 - (slide.offsetLeft + slide.offsetWidth / 2);
        track.style.transform = `translateX(${offset}px)`;

        slides.forEach((s, i) => {
            const active = i === index;
            // Off-screen/peeking slides are not interactive for keyboard or screen-reader users.
            s.inert = !active;
            s.setAttribute('aria-hidden', String(!active));
        });

        dots.forEach((d, i) => {
            if (i === index) d.setAttribute('aria-current', 'true');
            else d.removeAttribute('aria-current');
        });
    };

    const go = (i) => {
        index = (i + slides.length) % slides.length;
        render();
    };

    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => go(i));
        dot.addEventListener('keydown', (event) => {
            if (event.key !== 'ArrowRight' && event.key !== 'ArrowLeft') return;
            event.preventDefault();
            go(index + (event.key === 'ArrowRight' ? 1 : -1));
            dots[index].focus();
        });
    });

    // Basic swipe support.
    let startX = null;
    let swiped = false;
    track.addEventListener('pointerdown', (e) => {
        startX = e.clientX;
        swiped = false;
    });
    track.addEventListener('pointerup', (e) => {
        if (startX === null) return;
        const dx = e.clientX - startX;
        startX = null;
        if (Math.abs(dx) > 50) {
            swiped = true;
            go(index + (dx < 0 ? 1 : -1));
        }
    });

    // Clicking a peeking neighbour brings it to the centre. Inert slides don't receive
    // events themselves, so resolve the clicked slide from the pointer position.
    track.addEventListener('click', (event) => {
        if (swiped) return;
        const i = slides.findIndex((s) => {
            const r = s.getBoundingClientRect();
            return event.clientX >= r.left && event.clientX <= r.right;
        });
        if (i !== -1 && i !== index) go(i);
    });

    window.addEventListener('resize', render);
    render();
    // Position instantly on load, then enable the slide animation for later moves.
    requestAnimationFrame(() => requestAnimationFrame(() => track.classList.add('testimonial-track')));
}

/* ---------------------------------------------------------------
 | Email capture forms — client-side validation only.
 * ------------------------------------------------------------- */
function initEmailForms() {
    document.querySelectorAll('[data-email-form]').forEach((form) => {
        const input = form.querySelector('input[type="email"]');
        const error = form.querySelector('[data-email-error]');

        form.addEventListener('submit', (event) => {
            event.preventDefault();
            const valid = input.checkValidity();

            input.setAttribute('aria-invalid', String(!valid));
            if (error) {
                error.textContent = valid ? '' : 'Please enter a valid email address.';
                error.classList.toggle('hidden', valid);
            }
            if (!valid) {
                input.focus();
                return;
            }

            // TODO: wire to a real endpoint (e.g. POST /subscribe) — no backend exists for this page yet.
        });
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initMobileNav();
    document.querySelectorAll('[data-carousel]').forEach(initCarousel);
    initEmailForms();
});
