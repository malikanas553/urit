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

    let baseOffset = 0;

    const render = (dragDx = 0) => {
        const slide = slides[index];
        baseOffset = root.clientWidth / 2 - (slide.offsetLeft + slide.offsetWidth / 2);
        track.style.transform = `translateX(${baseOffset + dragDx}px)`;

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

    /* ---- Autoplay: advances every few seconds, pauses while the user is hovering, focused inside,
            dragging, or the tab is hidden; off entirely for prefers-reduced-motion. ---- */
    const AUTOPLAY_MS = 5000;
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    let timer = null;
    let hovering = false;
    let dragging = false;
    const stop = () => { clearInterval(timer); timer = null; };
    const start = () => {
        stop();
        if (reduceMotion.matches || hovering || dragging || root.querySelector(':focus-visible') || document.hidden) return;
        timer = setInterval(() => go(index + 1), AUTOPLAY_MS);
    };
    root.addEventListener('pointerenter', (e) => { if (e.pointerType === 'mouse') { hovering = true; stop(); } });
    root.addEventListener('pointerleave', (e) => { if (e.pointerType === 'mouse') { hovering = false; start(); } });
    root.addEventListener('focusin', stop);
    root.addEventListener('focusout', () => setTimeout(start));
    document.addEventListener('visibilitychange', start);
    reduceMotion.addEventListener?.('change', start);

    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => { go(i); start(); });
        dot.addEventListener('keydown', (event) => {
            if (event.key !== 'ArrowRight' && event.key !== 'ArrowLeft') return;
            event.preventDefault();
            go(index + (event.key === 'ArrowRight' ? 1 : -1));
            dots[index].focus();
        });
    });

    /* ---- Swipe / drag: the track follows the finger or mouse, then snaps to the next or previous card.
            touch-action: pan-y keeps vertical page scrolling working on phones. ---- */
    track.style.touchAction = 'pan-y';
    track.querySelectorAll('img').forEach((img) => (img.draggable = false));
    let startX = 0;
    let startY = 0;
    let dx = 0;
    let pointerId = null;
    let swiped = false;

    track.addEventListener('pointerdown', (e) => {
        if (e.button !== 0) return;
        pointerId = e.pointerId;
        startX = e.clientX;
        startY = e.clientY;
        dx = 0;
        swiped = false;
    });
    track.addEventListener('pointermove', (e) => {
        if (e.pointerId !== pointerId) return;
        const mx = e.clientX - startX;
        if (!dragging) {
            // Only start dragging on a clearly horizontal move, so vertical scrolls aren't hijacked.
            if (Math.abs(mx) < 8 || Math.abs(mx) < Math.abs(e.clientY - startY)) return;
            dragging = true;
            stop();
            try { track.setPointerCapture(e.pointerId); } catch { /* pointer already gone */ }
            track.classList.remove('testimonial-track');      // follow the pointer without easing
        }
        dx = mx;
        render(dx);
    });
    const endDrag = (e) => {
        if (e.pointerId !== pointerId) return;
        pointerId = null;
        if (!dragging) return;
        dragging = false;
        track.classList.add('testimonial-track');
        const threshold = Math.min(80, slides[index].offsetWidth * 0.15);
        if (Math.abs(dx) > threshold) {
            swiped = true;
            go(index + (dx < 0 ? 1 : -1));
        } else {
            render();
        }
        start();
    };
    track.addEventListener('pointerup', endDrag);
    track.addEventListener('pointercancel', endDrag);

    // Clicking a peeking neighbour brings it to the centre. Inert slides don't receive
    // events themselves, so resolve the clicked slide from the pointer position.
    track.addEventListener('click', (event) => {
        if (swiped) { swiped = false; return; }
        const i = slides.findIndex((s) => {
            const r = s.getBoundingClientRect();
            return event.clientX >= r.left && event.clientX <= r.right;
        });
        if (i !== -1 && i !== index) { go(i); start(); }
    });

    window.addEventListener('resize', () => render());
    render();
    start();
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

/* ---------------------------------------------------------------
 | Scroll reveals ([data-reveal], [data-bars], [data-draw]) and count-ups ([data-count]).
 * ------------------------------------------------------------- */
function initMotion() {
    const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const targets = document.querySelectorAll('[data-reveal], [data-bars], [data-draw], [data-count]');

    const countUp = (el) => {
        if (reduce) return;
        const to = parseFloat(el.dataset.count);
        const decimals = Number(el.dataset.decimals ?? 0);
        const prefix = el.dataset.prefix ?? '';
        const final = el.textContent;
        const t0 = performance.now();
        const dur = 1600;
        const step = (now) => {
            const p = Math.min(1, (now - t0) / dur);
            const eased = 1 - Math.pow(1 - p, 3);
            el.textContent = p < 1 ? prefix + (to * eased).toFixed(decimals) : final;
            if (p < 1) requestAnimationFrame(step);
        };
        requestAnimationFrame(step);
    };

    if (!('IntersectionObserver' in window)) {
        targets.forEach((el) => el.classList.add('is-visible'));
        return;
    }

    const io = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            const el = entry.target;
            el.classList.add('is-visible');
            if (el.dataset.count !== undefined) countUp(el);
            io.unobserve(el);
        });
    }, { threshold: 0.15, rootMargin: '0px 0px -6% 0px' });

    targets.forEach((el) => io.observe(el));
}

/* Reading-progress bar */
function initScrollProgress() {
    const bar = document.querySelector('[data-scroll-progress]');
    if (!bar) return;
    let ticking = false;
    const update = () => {
        const max = document.documentElement.scrollHeight - innerHeight;
        bar.style.setProperty('--progress', max > 0 ? (scrollY / max).toFixed(4) : 0);
        ticking = false;
    };
    addEventListener('scroll', () => {
        if (!ticking) {
            ticking = true;
            requestAnimationFrame(update);
        }
    }, { passive: true });
    update();
}

/* Cursor-following spotlight on .spotlight cards */
function initSpotlights() {
    document.querySelectorAll('.spotlight').forEach((card) => {
        card.addEventListener('pointermove', (e) => {
            const r = card.getBoundingClientRect();
            card.style.setProperty('--mx', `${e.clientX - r.left}px`);
            card.style.setProperty('--my', `${e.clientY - r.top}px`);
        });
    });
}

/* ---------------------------------------------------------------
 | Map pins: tap/click/Enter toggles an "active" pin (one at a time); hover just previews it.
 | The pin being hovered or activated is moved to the end of its group so it draws on top.
 * ------------------------------------------------------------- */
function initMapPins() {
    const group = document.querySelector('[data-map-pins]');
    if (!group) return;
    const pins = [...group.querySelectorAll('.map-pin')];
    const raise = (pin) => {
        if (group.lastElementChild !== pin) group.appendChild(pin);
    };

    const setActive = (pin) => {
        pins.forEach((p) => {
            const on = p === pin;
            p.classList.toggle('is-active', on);
            p.setAttribute('aria-pressed', String(on));
        });
        if (pin) raise(pin);
    };

    pins.forEach((pin) => {
        pin.addEventListener('pointerenter', (e) => {
            if (e.pointerType === 'mouse') raise(pin);
        });
        pin.addEventListener('click', (e) => {
            e.stopPropagation();
            setActive(pin.classList.contains('is-active') ? null : pin);
        });
        pin.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                setActive(pin.classList.contains('is-active') ? null : pin);
                pin.focus();
            } else if (e.key === 'Escape') {
                setActive(null);
            }
        });
    });

    // Tapping anywhere else clears the active pin.
    document.addEventListener('click', (e) => {
        if (!group.contains(e.target)) setActive(null);
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initMapPins();
    initMotion();
    initScrollProgress();
    initSpotlights();
    initMobileNav();
    document.querySelectorAll('[data-carousel]').forEach(initCarousel);
    initEmailForms();
});
