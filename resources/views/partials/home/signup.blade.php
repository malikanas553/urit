{{--
    Sign-up banner. From lg up it sits on the shared 698-unit canvas (.hero-scale); positions are taken from the design.
    The page background switches to the footer colour 113.75 units below the card's top edge, as in the design,
    and the photo rises 21.5 units above the card.
--}}
<section class="hero-scale on-dark max-lg:bg-[linear-gradient(to_bottom,var(--color-page)_50%,var(--color-ink-soft)_50%)] max-lg:pt-16 lg:pt-40 lg:bg-[linear-gradient(to_bottom,var(--color-page)_calc(var(--spacing)*153.75),var(--color-ink-soft)_0)]"
         aria-labelledby="signup-title">
    <div class="relative mx-auto max-lg:px-4 sm:max-lg:px-6 lg:w-698">
        <div class="bg-signup relative text-white shadow-float max-lg:grid max-lg:gap-8 max-lg:rounded-[2rem] max-lg:px-6 max-lg:py-10 sm:max-lg:px-10 lg:ml-28.5 lg:h-182.75 lg:w-640.5 lg:radius-24">
            <h2 id="signup-title" class="font-semibold max-lg:text-3xl max-lg:leading-tight sm:max-lg:text-4xl lg:absolute lg:top-50 lg:left-33.5 lg:fs-29 lg:leading-[1.43] lg:[word-spacing:calc(var(--spacing)*2.5)]">
                Sign Up For
                <span class="block">Special Offer</span>
            </h2>

            {{-- Photo: sharpened cut-out from the design, stands on the card's bottom edge --}}
            <img src="{{ asset('images/signup-woman.png') }}" alt="Smiling Urit advisor pointing at you"
                 width="736" height="816" loading="lazy"
                 class="pointer-events-none max-lg:hidden lg:absolute lg:bottom-0 lg:left-228.25 lg:w-184.25">

            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-230">
                <p class="text-white/90 max-lg:max-w-sm max-lg:text-sm max-lg:leading-relaxed lg:absolute lg:top-53 lg:right-32.5 lg:w-185 lg:text-right lg:fs-8.5 lg:leading-[1.7]">
                    Mattis ante vel malesuada vestibulum sed. Ac velit eget dis nunc vulputate felis.
                </p>
                <form class="flex flex-col bg-white/12 ring-1 ring-white/35 max-lg:mt-6 max-lg:max-w-md max-lg:gap-2 max-lg:rounded-3xl max-lg:p-1.5 sm:flex-row sm:items-center sm:rounded-full lg:absolute lg:top-95 lg:right-31 lg:h-36 lg:w-197.75 lg:py-3.5 lg:pr-4"
                      data-email-form novalidate>
                    <label for="signup-email" class="sr-only">Email address</label>
                    <input id="signup-email" name="email" type="email" required autocomplete="email"
                           placeholder="Enter Your Email"
                           class="h-full min-w-0 flex-1 bg-transparent text-white placeholder:text-white/45 focus:outline-none max-lg:px-5 max-lg:py-3 max-lg:text-sm lg:pl-12 lg:fs-8">
                    <button type="submit"
                            class="shrink-0 rounded-full bg-lime font-semibold whitespace-nowrap text-ink transition hover:bg-lime-dark max-lg:px-9 max-lg:py-3.5 max-lg:text-sm lg:h-full lg:w-77 lg:fs-7.5">
                        Get Started
                    </button>
                    <p class="hidden text-xs text-lime max-lg:px-5 max-lg:pb-2 sm:basis-full lg:absolute lg:top-full lg:left-12 lg:mt-2 lg:fs-6" role="alert" data-email-error></p>
                </form>
            </div>
        </div>
    </div>
</section>
