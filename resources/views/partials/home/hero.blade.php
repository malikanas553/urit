{{--
    Hero. From lg up every spacing/size value is in design units of the 698-unit-wide
    reference canvas (see .hero-scale in app.css), so lg:left-343 means "343 units in".
    Spacing that only applies below lg is written with max-lg: so it never leaks into that scale.
--}}
<section class="hero-scale bg-hero on-dark relative z-10 overflow-x-clip text-white lg:h-573" aria-labelledby="hero-title">
    {{-- Partner band (full-bleed, sits behind the photo) --}}
    <div class="bg-hero-band absolute inset-x-0 bottom-0 max-lg:hidden lg:h-111" aria-hidden="true">
        <svg class="absolute right-0 bottom-0 h-full w-1/2 text-white/10" viewBox="0 0 400 111" preserveAspectRatio="none" fill="none" stroke="currentColor" stroke-width=".6">
            @foreach (range(0, 9) as $i)
                <path d="M{{ 140 + $i * 6 }} 111C{{ 230 + $i * 5 }} {{ 70 - $i * 3 }} {{ 330 + $i * 3 }} {{ 40 - $i * 2 }} 400 {{ 48 - $i * 4 }}"/>
            @endforeach
        </svg>
    </div>

    <div class="relative mx-auto max-lg:px-4 max-lg:pt-28 sm:max-lg:px-6 lg:h-full lg:w-698">
        {{-- Copy --}}
        <div class="relative z-10 lg:absolute lg:top-82 lg:left-18 lg:w-330">
            <h1 id="hero-title" class="font-semibold max-lg:tracking-tight max-lg:text-4xl max-lg:leading-[1.15] sm:max-lg:text-5xl lg:fs-31.5 lg:leading-[1.24]">
                The Modern Title And
                <span class="block text-lime">Closing Experience</span>
            </h1>

            <p class="text-white/85 max-lg:mt-6 max-lg:max-w-lg max-lg:text-sm max-lg:leading-relaxed lg:mt-19 lg:w-280 lg:fs-9.5 lg:leading-[1.93]">
                Combining World Class Technology With A Nationwide Team Of Experts For A Simple, Efficient, And Scalable Model.
            </p>

            <form class="flex flex-col bg-white/12 ring-1 ring-white/35 backdrop-blur max-lg:mt-10 max-lg:max-w-lg max-lg:gap-2 max-lg:rounded-3xl max-lg:p-1.5 sm:flex-row sm:items-center sm:rounded-full lg:mt-38.5 lg:h-38.5 lg:w-250 lg:p-3"
                  data-email-form novalidate>
                <label for="hero-email" class="sr-only">Email address</label>
                <input id="hero-email" name="email" type="email" required autocomplete="email"
                       placeholder="Enter Your Email"
                       class="h-full min-w-0 flex-1 bg-transparent text-white placeholder:text-white/40 focus:outline-none max-lg:px-5 max-lg:py-3 max-lg:text-sm lg:pl-13 lg:fs-9.5">
                <button type="submit"
                        class="shrink-0 rounded-full bg-lime font-semibold whitespace-nowrap text-ink transition hover:bg-lime-dark max-lg:px-9 max-lg:py-3.5 max-lg:text-sm lg:h-full lg:w-83.5 lg:fs-7.75">
                    Get Started
                </button>
                <p class="hidden text-xs text-lime max-lg:px-5 max-lg:pb-2 sm:basis-full lg:absolute lg:top-full lg:left-13 lg:mt-2 lg:fs-6" role="alert" data-email-error></p>
            </form>

            <p class="flex items-center font-medium text-lime max-lg:mt-5 max-lg:gap-2 max-lg:text-sm lg:mt-17 lg:h-11 lg:gap-7 lg:fs-9.5">
                <span class="grid shrink-0 place-items-center rounded-full bg-ink-soft max-lg:size-4.5 lg:size-11">
                    <x-icon name="check" class="max-lg:size-3 lg:size-7 [stroke-width:3]" />
                </span>
                Try It For Free 30 Minutes Consultation
            </p>

            <div class="flex items-center max-lg:mt-12 max-lg:gap-5 lg:mt-43.5 lg:gap-13.5">
                <div class="flex max-lg:-space-x-3 lg:-space-x-1">
                    @foreach (['avatar-1.jpg', 'avatar-2.jpg'] as $i => $avatar)
                        <img src="{{ asset('images/'.$avatar) }}" alt="" width="60" height="60"
                             class="rounded-full object-cover max-lg:size-12 lg:size-29.5 {{ $i === 0 ? 'bg-[#f3c9a6]' : 'bg-[#f2c25a]' }}">
                    @endforeach
                    <span class="z-10 flex flex-col items-center justify-center rounded-full bg-ink-soft font-semibold leading-none text-lime max-lg:size-12 max-lg:text-sm lg:size-31 lg:fs-8.25"
                          aria-label="Rated 4.8 out of 5">
                        <span aria-hidden="true">4.8</span>
                        <x-icon name="star" class="max-lg:mt-0.5 max-lg:size-3 lg:mt-1.5 lg:size-5.5" />
                    </span>
                </div>
                <div>
                    <p class="font-semibold max-lg:text-sm lg:fs-7.5">Customer Review</p>
                    <p class="text-white/45 max-lg:text-xs lg:mt-3 lg:fs-7">They fell satisfied and helped</p>
                </div>
            </div>
        </div>

        {{-- Visual: photo + floating stat cards --}}
        <div class="relative max-lg:mx-auto max-lg:mt-14 max-lg:aspect-[698/573] max-lg:max-w-[560px] lg:absolute lg:inset-0 lg:pointer-events-none">
            {{-- New clients (behind the photo) --}}
            <div class="glass absolute flex items-center shadow-float max-lg:top-[22%] max-lg:left-[2%] max-lg:gap-3 max-lg:rounded-2xl max-lg:px-3 max-lg:py-2.5 lg:top-175 lg:left-343 lg:h-57 lg:w-142 lg:gap-11 lg:radius-10 lg:pl-9 lg:pointer-events-auto">
                <span class="grid shrink-0 place-items-center rounded-full bg-ink-soft text-lime max-lg:size-10 lg:size-33">
                    <x-icon name="users" class="max-lg:size-5 lg:size-15" />
                </span>
                <span class="leading-tight text-white/85 max-lg:text-xs lg:fs-9.25">
                    New clients
                    <span class="block font-semibold text-lime max-lg:text-base lg:mt-2 lg:fs-10.25">321</span>
                </span>
                <svg class="absolute text-lime max-lg:hidden lg:top-22 lg:left-99 lg:h-17 lg:w-25" viewBox="0 0 25 17" fill="none" aria-hidden="true">
                    <path d="M.5 16.3c4.5.2 7.3-.4 9.6-3.4C13.4 8.7 14 2.4 24.5.6" stroke="currentColor" stroke-width="1" stroke-linecap="round"/>
                </svg>
            </div>

            {{-- Monthly report (behind the photo) --}}
            <div class="glass absolute shadow-float max-lg:top-[2%] max-lg:right-0 max-lg:w-[30%] max-lg:rounded-2xl max-lg:p-3 lg:top-125 lg:left-578.5 lg:h-104 lg:w-93 lg:radius-10 lg:pt-11">
                <p class="text-center font-medium text-white/90 max-lg:text-[10px] lg:fs-6.25">Monthly Report</p>
                <div class="flex justify-center text-white/45 max-lg:hidden lg:mt-8 lg:gap-4 lg:fs-3.5" aria-hidden="true">
                    @foreach (['Feb', 'Mar', 'May', 'Jun', 'Aug', 'Dec'] as $month)
                        <span class="text-center lg:w-10">{{ $month }}</span>
                    @endforeach
                </div>
                <div class="flex items-end justify-center max-lg:mt-3 max-lg:h-16 max-lg:gap-2 lg:mt-4 lg:h-43 lg:gap-8" aria-hidden="true">
                    @foreach ([36, 34, 29, 32.5, 33, 42.5] as $h)
                        <span class="rounded-full bg-[linear-gradient(180deg,var(--color-lime)_0%,var(--color-lime)_42%,#2b2b2b_62%)] max-lg:w-2 lg:w-6"
                              style="height: {{ round($h / 43 * 100, 1) }}%"></span>
                    @endforeach
                </div>
            </div>

            {{-- Photo: placed exactly as in the reference; her front foot overflows the hero into the next section --}}
            <img src="{{ asset('images/hero-woman-laptop.png') }}"
                 alt="Delighted woman sitting on a chair with a laptop"
                 width="783" height="1206" fetchpriority="high"
                 class="absolute z-10 h-auto max-w-none max-lg:top-[11.6%] max-lg:left-[33%] max-lg:w-[56.2%] lg:top-66.5 lg:left-230.75 lg:w-392">

            {{-- Earnings (in front of the photo) --}}
            <div class="bg-hero-earnings absolute z-20 flex flex-col items-center text-center text-ink shadow-float ring-1 ring-white/40 max-lg:right-0 max-lg:top-[46%] max-lg:w-[27%] max-lg:min-w-24 max-lg:rounded-2xl max-lg:p-2.5 lg:top-273.5 lg:left-550 lg:h-124 lg:w-102.5 lg:radius-12 lg:pt-17.5 lg:pointer-events-auto">
                <span class="grid place-items-center rounded-full bg-[#2b2b2b] text-white max-lg:size-10 lg:size-38">
                    <x-icon name="money-bag" class="max-lg:size-5 lg:size-19" />
                </span>
                <p class="font-bold leading-none max-lg:mt-2 max-lg:text-xl lg:mt-13 lg:fs-12.25">$189.5</p>
                <p class="text-ink/55 max-lg:mt-1.5 max-lg:text-[10px] max-lg:leading-snug lg:mt-7.5 lg:w-82 lg:fs-4.75 lg:leading-[1.65]">
                    Congratulations you have reached your earnings target today
                </p>
            </div>
        </div>

        {{-- Partner logos --}}
        <ul class="flex items-center text-white/45 max-lg:relative max-lg:-mx-4 max-lg:mt-0 max-lg:flex-wrap max-lg:gap-x-10 max-lg:gap-y-4 max-lg:bg-[#0b4f54] max-lg:px-4 max-lg:py-8 sm:max-lg:-mx-6 sm:max-lg:px-6 lg:absolute lg:bottom-0 lg:left-18 lg:h-111"
            aria-label="Trusted by">
            <li class="flex items-center max-lg:gap-2 lg:gap-10">
                <svg viewBox="0 0 36 19" class="max-lg:h-6 max-lg:w-11 lg:h-18.5 lg:w-35" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M2 14.5C2 9 5.3 4.5 9.6 4.5c3.6 0 5.3 3 7.2 6.4 1.9 3.4 3.4 6.4 7 6.4 4 0 7.4-3.5 7.4-7.5S28.2 2 24.4 2c-3.5 0-5.1 2.8-6.9 5.9"/>
                    <path d="M2 14.5c0 1.6 1.2 2.8 2.8 2.8 3.4 0 4.5-3.6 6.6-6.6"/>
                </svg>
                <span class="font-semibold tracking-tight max-lg:text-2xl lg:fs-17">maze</span>
            </li>
            <li class="font-medium tracking-[0.08em] max-lg:text-3xl lg:ml-34 lg:fs-25">miro</li>
            <li class="flex items-center max-lg:gap-2 lg:ml-36.5 lg:gap-7.5">
                <svg viewBox="0 0 24 24" class="max-lg:size-7 lg:size-22.5" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" aria-hidden="true">
                    <circle cx="12" cy="12" r="3.2"/>
                    @foreach (range(0, 11) as $i)
                        <path d="M12 2.2v4.4" transform="rotate({{ $i * 30 }} 12 12)"/>
                    @endforeach
                </svg>
                <span class="font-semibold tracking-tight max-lg:text-2xl lg:fs-20">loom</span>
            </li>
        </ul>
    </div>
</section>
