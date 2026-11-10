@php
    $features = [
        ['icon' => 'investors', 'title' => 'Investors', 'text' => 'Acquire properties nationwide with tech-driven efficiency. Scale into new markets with confidence.', 'cta' => true],
        ['icon' => 'lender', 'title' => 'Lender', 'text' => 'Close loans faster and deliver a best-in-class experience for borrowers.', 'cta' => false],
        ['icon' => 'proptech', 'title' => 'Proptech', 'text' => 'Automate outdated processes and engineer seamless real estate transactions with Spruce.', 'cta' => false],
    ];

    // Values in the reference's "Detail Investment" card are too small to read — illustrative placeholders except Income.
    $investment = [
        ['Name', 'Paul Lewis'],
        ['Total Return', '$ 150,000.00'],
        ['Duration', '8 Years'],
        ['Growth', '+2.7%'],
    ];
@endphp

<section id="scale" class="scroll-mt-8 py-16 lg:py-24" aria-labelledby="scale-title">
    <div class="container-page">
        <div class="mx-auto max-w-xl text-center">
            <h2 id="scale-title" class="text-3xl font-bold tracking-tight sm:text-4xl lg:text-[2.6rem]">Built for scale &amp; efficiency</h2>
            <p class="mx-auto mt-5 max-w-md text-sm leading-relaxed text-muted">
                Whether you're handling individual transactions or 1,000, simplicity is key. We've built a frictionless
            </p>
        </div>

        <div class="mt-16 grid items-center gap-16 lg:mt-24 lg:grid-cols-2 lg:gap-20">
            {{-- Visual --}}
            <div class="relative mx-auto w-full max-w-[540px] pl-8 sm:pb-20 sm:pl-10 lg:mx-0">
                <div class="bg-swirl relative aspect-[540/600] overflow-hidden rounded-[2rem]">
                    <img src="{{ asset('images/businessman.jpg') }}" alt="Investor in a suit, portrait"
                         width="800" height="900" loading="lazy"
                         class="absolute inset-x-[12%] bottom-0 h-[92%] w-[76%] rounded-t-[6rem] object-cover object-top">

                    <span class="absolute left-[16%] top-[22%] grid size-10 place-items-center rounded-xl bg-ink/80 text-lime" aria-hidden="true">
                        <x-icon name="chat" class="size-4" />
                    </span>

                    <div class="glass absolute right-[6%] top-[24%] rounded-2xl px-4 py-2.5 text-right text-white">
                        <p class="text-xl font-bold leading-none text-lime">$350.40</p>
                        <p class="mt-1 text-[10px] text-white/80">Earnings</p>
                    </div>
                </div>

                {{-- Calculator controls --}}
                <div class="absolute left-0 top-[14%] flex flex-col gap-3 rounded-full bg-white p-2 shadow-card" role="group" aria-label="Calculator operations">
                    <button type="button" class="grid size-10 place-items-center rounded-full bg-ink text-white transition hover:bg-brand-700" aria-label="Divide">
                        <x-icon name="divide" class="size-4" />
                    </button>
                    <button type="button" class="grid size-10 place-items-center rounded-full bg-lime text-ink transition hover:bg-lime-dark" aria-label="Percent">
                        <x-icon name="percent" class="size-4" />
                    </button>
                    <button type="button" class="grid size-10 place-items-center rounded-full bg-ink text-white transition hover:bg-brand-700" aria-label="Clear">
                        <x-icon name="close" class="size-4" />
                    </button>
                </div>

                {{-- Detail investment card --}}
                <div class="relative z-10 -mt-10 ml-auto w-full max-w-64 rounded-2xl bg-white p-5 shadow-card sm:absolute sm:bottom-0 sm:right-[-8%] sm:mt-0 sm:w-64">
                    <h3 class="text-center text-xs font-bold">Detail Investment</h3>
                    <dl class="mt-4 space-y-2 text-[10px]">
                        @foreach ($investment as [$label, $value])
                            <div class="flex justify-between gap-4">
                                <dt class="text-muted">{{ $label }}</dt>
                                <dd class="font-medium">{{ $value }}</dd>
                            </div>
                        @endforeach
                        <div class="flex justify-between gap-4 border-t border-line pt-2">
                            <dt class="text-muted">Income</dt>
                            <dd class="font-bold">$197,274.12</dd>
                        </div>
                    </dl>
                    <label class="mt-4 flex items-center gap-2 text-[9px] text-muted">
                        <input type="checkbox" class="size-3 accent-brand-500">
                        Please check to our <a href="#" class="font-semibold text-ink underline-offset-2 hover:underline">Privacy &amp; Terms Policy</a>
                    </label>
                    <button type="button" class="mt-4 w-full rounded-lg bg-lime py-2.5 text-[10px] font-semibold text-ink transition hover:bg-lime-dark">
                        Invest Your Money $ 100.000.00
                    </button>
                </div>
            </div>

            {{-- Features --}}
            <ul class="divide-y divide-line">
                @foreach ($features as $feature)
                    <li class="flex gap-5 py-8 first:pt-0 last:pb-0">
                        <span class="grid size-10 shrink-0 place-items-center rounded-xl bg-brand-50 text-brand-500">
                            <x-icon :name="$feature['icon']" class="size-6" />
                        </span>
                        <div>
                            <h3 class="text-lg font-bold">{{ $feature['title'] }}</h3>
                            <p class="mt-3 max-w-sm text-xs leading-6 text-muted">{{ $feature['text'] }}</p>
                            @if ($feature['cta'])
                                <x-pill-button href="#coverage" size="sm" class="mt-5">Learn More</x-pill-button>
                            @endif
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
