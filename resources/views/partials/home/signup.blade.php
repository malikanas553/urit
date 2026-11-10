<section class="on-dark bg-[linear-gradient(to_bottom,#fff_50%,var(--color-ink-soft)_50%)] pt-16" aria-labelledby="signup-title">
    <div class="container-page">
        <div class="bg-hero relative grid items-center gap-8 rounded-[2rem] px-6 py-10 text-white shadow-float sm:px-10 lg:grid-cols-[1fr_auto_1fr] lg:gap-6 lg:px-14 lg:py-0">
            <h2 id="signup-title" class="text-3xl font-bold leading-tight tracking-tight sm:text-4xl lg:py-16 lg:text-[2.75rem]">
                Sign Up For
                <span class="block">Special Offer</span>
            </h2>

            {{-- Photo pops out of the top of the banner on large screens --}}
            <div class="hidden self-end lg:block">
                <img src="{{ asset('images/signup-woman.jpg') }}" alt="Smiling Urit advisor" width="700" height="800" loading="lazy"
                     class="-mt-20 h-80 w-64 rounded-t-[8rem] object-cover object-top">
            </div>

            <div class="lg:py-16">
                <p class="max-w-sm text-sm leading-relaxed text-white/85 lg:ml-auto lg:text-right">
                    Mattis ante vel malesuada vestibulum sed. Ac velit eget dis nunc vulputate felis.
                </p>
                <form class="mt-6 flex max-w-md flex-col gap-2 rounded-3xl bg-white/12 p-1.5 ring-1 ring-white/25 sm:flex-row sm:items-center sm:rounded-full lg:ml-auto"
                      data-email-form novalidate>
                    <label for="signup-email" class="sr-only">Email address</label>
                    <input id="signup-email" name="email" type="email" required autocomplete="email"
                           placeholder="Enter Your Email"
                           class="min-w-0 flex-1 bg-transparent px-5 py-3 text-sm text-white placeholder:text-white/60 focus:outline-none">
                    <x-pill-button type="submit" variant="lime" size="lg" class="sm:py-3">Get Started</x-pill-button>
                    <p class="hidden px-5 pb-2 text-xs text-lime sm:basis-full" role="alert" data-email-error></p>
                </form>
            </div>
        </div>
    </div>
</section>
