@php
    $features = [
        ['icon' => 'investors', 'title' => 'Investors', 'text' => 'Acquire properties nationwide with tech-driven efficiency. Scale into new markets with confidence.'],
        ['icon' => 'lender', 'title' => 'Lender', 'text' => 'Close loans faster and deliver a best-in-class experience for borrowers.'],
        ['icon' => 'proptech', 'title' => 'Proptech', 'text' => 'Automate outdated processes and engineer seamless real estate transactions with Spruce.'],
    ];

    // Rows of the "Detail Investment" card, as in the reference.
    $investment = [
        ['label' => 'Value', 'value' => '$ 100.000,00', 'center' => 10],
        ['label' => 'Time Period', 'value' => '4 Years', 'center' => 20, 'note' => '48 Month'],
        ['label' => 'Growth', 'value' => '+8,7%', 'center' => 31],
    ];
@endphp

{{--
    Desktop (lg+): laid out on the same 698-unit canvas as the hero (.hero-scale), positions taken from the design.
    The photo group is its own size container: inside it one spacing unit = 1/319 of its width, so the
    card, glass cards, calculator and "Detail Investment" card keep their exact proportions at every width.
--}}
<section id="scale" class="hero-scale relative scroll-mt-8 max-lg:py-16 lg:-mt-19 lg:h-605" aria-labelledby="scale-title">
    <div class="relative mx-auto max-lg:px-4 sm:max-lg:px-6 lg:h-full lg:w-698">
        <div class="text-center lg:absolute lg:inset-x-0 lg:top-47.5">
            <h2 id="scale-title" class="font-semibold text-ink max-lg:text-3xl max-lg:tracking-tight sm:max-lg:text-4xl lg:fs-26 lg:leading-[1.2]">Built for scale &amp; efficiency</h2>
            <p class="mx-auto text-[#8f8f8f] max-lg:mt-4 max-lg:max-w-sm max-lg:text-sm max-lg:leading-relaxed lg:mt-16 lg:w-242 lg:fs-9 lg:leading-[1.61]">
                Whether you're handling individual transactions or 1,000, simplicity is key. We've built a frictionless
            </p>
        </div>

        {{-- Photo group --}}
        <div class="@container relative aspect-[319/388.6] max-lg:mx-auto max-lg:mt-12 max-lg:w-full max-lg:max-w-[480px] lg:absolute lg:top-158.75 lg:left-28.5 lg:w-319">
            <div class="absolute inset-0 [--spacing:calc(100cqw/319)]">
                {{-- Teal card: background plate, glass cards, then the man in front of them --}}
                <div class="absolute top-0 left-27.5 h-355.5 w-268 overflow-hidden radius-33">
                    <img src="{{ asset('images/scale-card-bg.jpg') }}" alt="" width="536" height="711" loading="lazy" class="absolute inset-0 size-full object-cover">

                    <div class="glass absolute top-160 left-61 h-28 w-145 radius-8 opacity-35" aria-hidden="true"></div>

                    <div class="glass absolute top-116.75 left-49 h-43 w-168.75 radius-9 opacity-80" aria-hidden="true">
                        <span class="absolute top-1/2 left-9.5 grid size-23 -translate-y-1/2 place-items-center rounded-full bg-[#4c8387]/85 text-[#8fe3a2]">
                            <x-icon name="wallet" class="size-12" />
                        </span>
                        <span class="absolute top-6 right-10 text-right leading-none">
                            <span class="block font-bold text-[#a6ef7a]/70 fs-9.75">$350.40</span>
                            <span class="mt-4.5 block text-white/45 fs-6">Earnings</span>
                        </span>
                    </div>

                    <div class="glass absolute top-65.5 left-37.5 h-55 w-191.25 radius-10">
                        <span class="absolute top-1/2 left-10 grid size-27 -translate-y-1/2 place-items-center rounded-full bg-[#232323] text-lime">
                            <x-icon name="wallet" class="size-14" />
                        </span>
                        <span class="absolute top-14 right-10 text-right leading-none">
                            <span class="block font-bold text-lime fs-10">$350.40</span>
                            <span class="mt-5.5 block text-white/75 fs-6.5">Earnings</span>
                        </span>
                    </div>

                    <img src="{{ asset('images/scale-man.png') }}" alt="Smiling investor in a suit with his arms crossed"
                         width="536" height="711" loading="lazy" class="absolute inset-0 size-full object-cover">
                </div>

                {{-- Calculator controls --}}
                <div class="absolute top-51.5 left-0 flex h-126.25 w-48 flex-col items-center justify-center gap-8 rounded-full bg-white shadow-[0_10px_30px_-8px_rgb(16_40_40/0.18)]"
                     role="group" aria-label="Calculator operations">
                    <button type="button" class="grid size-32 place-items-center rounded-full bg-[linear-gradient(180deg,#4b4b4b,#262626)] text-white transition hover:brightness-125" aria-label="Divide">
                        <x-icon name="divide" class="size-14" />
                    </button>
                    <button type="button" class="grid size-32 place-items-center rounded-full bg-[linear-gradient(180deg,#d6ff6c,#b2d853)] text-ink transition hover:brightness-105" aria-label="Plus or minus">
                        <x-icon name="plus-minus" class="size-15" />
                    </button>
                    <button type="button" class="grid size-32 place-items-center rounded-full bg-[linear-gradient(180deg,#4b4b4b,#262626)] text-white transition hover:brightness-125" aria-label="Clear">
                        <x-icon name="close" class="size-13 [stroke-width:2.2]" />
                    </button>
                </div>

                {{-- Detail investment card --}}
                <div class="absolute top-242 left-195.25 z-10 h-146.75 w-123.75 bg-white radius-11 shadow-[0_18px_40px_-14px_rgb(16_40_40/0.22)]">
                    <h3 class="pt-15 text-center leading-none font-semibold text-ink fs-6.25">Detail Investment</h3>

                    <dl class="relative mx-10 mt-8.75 h-62.5 bg-[#f6f6f6] radius-5">
                        @foreach ($investment as $row)
                            <div class="absolute inset-x-7.5 flex items-start justify-between leading-none fs-4" style="top: calc(var(--spacing) * {{ $row['center'] - 2 }})">
                                <dt class="text-ink/80">{{ $row['label'] }}</dt>
                                <dd class="text-right text-[#8a8a8a]">
                                    {{ $row['value'] }}
                                    @isset($row['note'])
                                        <span class="mt-1.5 block text-brand-400 fs-2.75">{{ $row['note'] }}</span>
                                    @endisset
                                </dd>
                            </div>
                        @endforeach
                        <div class="absolute inset-x-7.5 top-39 h-px bg-[#e4e4e4]"></div>
                        <div class="absolute inset-x-7.5 top-48 flex items-center justify-between leading-none">
                            <dt class="text-ink/80 fs-4">Income</dt>
                            <dd class="font-bold text-ink fs-5">$197.376,12</dd>
                        </div>
                    </dl>

                    <label class="absolute top-99 left-10 flex items-center gap-2.5 leading-none text-ink/80 fs-4">
                        <input type="checkbox" checked class="size-5 accent-ink">
                        <span>Please check to our <a href="#" class="font-semibold text-ink underline underline-offset-2">Privacy &amp; Terms Policy</a></span>
                    </label>

                    <button type="button" class="absolute inset-x-10 top-118.5 h-18 bg-[#c9f562] font-medium text-ink transition radius-4 fs-4.25 hover:bg-lime">
                        Invest Your Money $100.000,00
                    </button>
                </div>
            </div>
        </div>

        {{-- Features --}}
        <ul class="max-lg:mx-auto max-lg:mt-14 max-lg:max-w-lg lg:absolute lg:top-187 lg:left-374 lg:w-298">
            {{-- Each item's "Learn More" stays collapsed and slides open on hover (or keyboard focus).
                 Devices without hover (touch screens) always show it. --}}
            @foreach ($features as $i => $feature)
                <li @class([
                    'group flex border-[#ececec] max-lg:gap-5 max-lg:py-7 lg:gap-14 lg:pb-24.75',
                    'border-t' => $i > 0,
                    'max-lg:pt-0' => $i === 0,
                    'lg:pt-23.25' => $i === 1,
                    'lg:pt-22.75' => $i === 2,
                ])>
                    <span class="shrink-0 text-[#35b8c2] max-lg:mt-0.5 lg:mt-0.75">
                        <x-icon :name="$feature['icon']" class="max-lg:size-11 lg:size-27.5" />
                    </span>
                    <div>
                        <h3 class="font-semibold text-ink max-lg:text-xl lg:fs-13.75 lg:leading-[1.2]">{{ $feature['title'] }}</h3>
                        <p class="text-[#9b9b9b] max-lg:mt-2 max-lg:text-sm max-lg:leading-relaxed lg:mt-11.5 lg:w-245 lg:text-[calc(var(--spacing)*8.62)] lg:leading-[1.7]">{{ $feature['text'] }}</p>
                        <div class="grid grid-rows-[0fr] opacity-0 transition-[grid-template-rows,opacity] duration-300 ease-out group-hover:grid-rows-[1fr] group-hover:opacity-100 group-focus-within:grid-rows-[1fr] group-focus-within:opacity-100 motion-reduce:transition-none [@media(hover:none)]:grid-rows-[1fr] [@media(hover:none)]:opacity-100">
                            <div class="-m-2.5 min-h-0 overflow-hidden p-2.5">{{-- padding keeps the focus ring from being clipped --}}
                                <a href="#coverage" aria-label="Learn more about {{ $feature['title'] }}"
                                   class="inline-flex items-center justify-center rounded-full bg-ink-soft font-semibold text-white transition hover:bg-brand-800 max-lg:mt-5 max-lg:px-6 max-lg:py-2.5 max-lg:text-xs lg:mt-15 lg:h-18.5 lg:w-60 lg:fs-6">Learn More</a>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
