<section class="bg-hero on-dark relative overflow-hidden text-white" aria-labelledby="hero-title">
    <div class="container-page grid items-end gap-12 pt-28 lg:grid-cols-[1.05fr_1fr] lg:gap-6 lg:pt-36">
        {{-- Copy --}}
        <div class="pb-10 lg:pb-24">
            <h1 id="hero-title" class="text-4xl font-bold leading-[1.15] tracking-tight sm:text-5xl xl:text-[3.6rem]">
                The Modern Title And
                <span class="block text-lime">Closing Experience</span>
            </h1>

            <p class="mt-6 max-w-lg text-sm leading-relaxed text-white/80 sm:text-base">
                Combining World Class Technology With A Nationwide Team Of Experts For A Simple, Efficient, And Scalable Model.
            </p>

            <form class="mt-10 flex max-w-lg flex-col gap-2 rounded-3xl bg-white/12 p-1.5 ring-1 ring-white/25 backdrop-blur sm:flex-row sm:items-center sm:rounded-full"
                  data-email-form novalidate>
                <label for="hero-email" class="sr-only">Email address</label>
                <input id="hero-email" name="email" type="email" required autocomplete="email"
                       placeholder="Enter Your Email"
                       class="min-w-0 flex-1 bg-transparent px-5 py-3 text-sm text-white placeholder:text-white/60 focus:outline-none">
                <x-pill-button type="submit" variant="lime" size="lg" class="sm:py-3">Get Started</x-pill-button>
                <p class="hidden px-5 pb-2 text-xs text-lime sm:basis-full" role="alert" data-email-error></p>
            </form>

            <p class="mt-5 flex items-center gap-2 text-sm text-lime">
                <x-icon name="check-circle" class="size-4.5 text-lime [&_path]:stroke-ink" />
                Try It For Free 30 Minutes Consultation
            </p>

            <div class="mt-12 flex items-center gap-5">
                <div class="flex -space-x-3">
                    @foreach (['avatar-1.jpg', 'avatar-2.jpg', 'avatar-3.jpg'] as $avatar)
                        <img src="{{ asset('images/'.$avatar) }}" alt="" width="48" height="48"
                             class="size-12 rounded-full object-cover ring-2 ring-brand-600">
                    @endforeach
                    <span class="z-10 grid size-12 place-items-center rounded-full bg-lime text-sm font-bold text-ink ring-2 ring-brand-600"
                          aria-label="Rated 4.8 out of 5">4.8</span>
                </div>
                <div>
                    <p class="text-sm font-semibold">Customer Review</p>
                    <p class="text-xs text-white/60">They fell satisfied and helpful</p>
                </div>
            </div>
        </div>

        {{-- Visual --}}
        <div class="relative mx-auto w-full max-w-[600px] lg:mx-0 lg:ml-auto">
            <div class="relative mx-auto aspect-[4/5] w-[78%] overflow-hidden rounded-t-[14rem] bg-brand-400/40 sm:w-[74%]">
                <img src="{{ asset('images/hero-woman.jpg') }}"
                     alt="Smiling Urit client representative"
                     width="900" height="1100"
                     class="size-full object-cover object-top">
            </div>

            {{-- New clients --}}
            <div class="glass absolute left-0 top-[34%] flex items-center gap-3 rounded-2xl px-4 py-3 shadow-float sm:left-[2%]">
                <span class="grid size-10 place-items-center rounded-full bg-white/90 text-brand-600">
                    <x-icon name="users" class="size-5" />
                </span>
                <span class="text-xs leading-tight text-white/85">
                    New clients
                    <span class="block text-base font-semibold text-lime">321</span>
                </span>
            </div>

            {{-- Monthly report --}}
            <div class="glass absolute right-0 top-[6%] hidden w-40 rounded-2xl p-4 shadow-float sm:block">
                <p class="text-[10px] font-medium text-white/85">Monthly Report</p>
                <div class="mt-4 flex h-20 items-end gap-2" aria-hidden="true">
                    @foreach ([45, 70, 40, 85, 60, 95] as $i => $h)
                        <span class="w-2.5 rounded-full {{ $i >= 4 ? 'bg-lime' : 'bg-white/70' }}" style="height: {{ $h }}%"></span>
                    @endforeach
                </div>
            </div>

            {{-- Balance --}}
            <div class="absolute bottom-[6%] right-0 w-32 rounded-2xl bg-lime p-3.5 text-ink shadow-float sm:bottom-[14%] sm:right-[-2%] sm:w-48 sm:rounded-3xl sm:p-5">
                <span class="mx-auto grid size-9 place-items-center rounded-full bg-ink text-white sm:size-11">
                    <x-icon name="wallet" class="size-5" />
                </span>
                <p class="mt-3 text-center text-xl font-bold sm:mt-4 sm:text-2xl">$189.5</p>
                <p class="mt-1 hidden text-center text-[10px] leading-snug text-ink/60 sm:block">Congratulation on your recent purchase and financial goal.</p>
            </div>
        </div>
    </div>

    {{-- Partner wordmarks (text substitutes for the original logos) --}}
    <div class="relative bg-brand-950/35">
        <ul class="container-page flex flex-wrap items-center gap-x-14 gap-y-4 py-9 text-3xl font-semibold tracking-tight text-white/55 lg:py-12"
            aria-label="Trusted by">
            <li class="flex items-center gap-2">
                <svg viewBox="0 0 32 20" class="h-6 w-9" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><path d="M3 15 10 5l7 10 7-10 5 7"/></svg>
                maze
            </li>
            <li class="font-mono tracking-wider">miro</li>
            <li class="flex items-center gap-2">
                <svg viewBox="0 0 24 24" class="size-7" fill="none" stroke="currentColor" stroke-width="2.4" aria-hidden="true"><path d="M12 2v20M2 12h20M5 5l14 14M19 5 5 19"/></svg>
                loom
            </li>
        </ul>
    </div>
</section>
