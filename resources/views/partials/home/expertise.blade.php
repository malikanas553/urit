@php
    $points = [
        'We partner with forward-thinking companies to scale',
        'Empower their customers with transparency and predictability',
        'Consultative approach on emerging technology.',
    ];
@endphp

<section id="expertise" class="scroll-mt-8 py-20 lg:py-32" aria-labelledby="expertise-title">
    <div class="container-page grid items-center gap-16 lg:grid-cols-2 lg:gap-24">
        <div>
            <x-section-heading id="expertise-title" accent="Powered By" title="Dedicated Expertise" />

            <p class="mt-6 max-w-md text-sm leading-relaxed text-muted">
                We're seasoned real estate experts who understand that the landscape is changing–and believe it's for the better.
            </p>

            <hr class="my-9 max-w-xl border-line">

            <ul class="space-y-5">
                @foreach ($points as $point)
                    <li class="flex items-center gap-3 text-sm font-medium">
                        <x-icon name="check-circle" class="size-5 shrink-0 text-brand-500" />
                        {{ $point }}
                    </li>
                @endforeach
            </ul>

            <x-pill-button href="#testimonials" size="lg" class="mt-12">Learn More</x-pill-button>
        </div>

        <div class="relative mx-auto w-full max-w-[540px] pb-10 lg:ml-auto lg:mr-0">
            <div class="bg-swirl relative aspect-[540/620] overflow-hidden rounded-[2rem]">
                <img src="{{ asset('images/team.jpg') }}" alt="Two Urit colleagues celebrating while reviewing a closing on a laptop"
                     width="900" height="1000" loading="lazy"
                     class="absolute inset-x-[6%] bottom-0 h-[88%] w-[88%] rounded-t-[2rem] object-cover">

                <div class="absolute left-[12%] top-[42%] flex items-center gap-2 rounded-full bg-white py-1.5 pl-1.5 pr-4 shadow-float">
                    <img src="{{ asset('images/testimonial-2.jpg') }}" alt="" width="32" height="32" class="size-8 rounded-full object-cover">
                    <span class="text-[11px] font-semibold leading-tight text-ink">Kenneth Allen
                        <span class="block text-[9px] font-normal text-muted">Online</span>
                    </span>
                </div>

                <div class="absolute right-[10%] top-[36%] flex items-center gap-2 rounded-full bg-lime py-1.5 pl-1.5 pr-4 shadow-float">
                    <img src="{{ asset('images/testimonial-3.jpg') }}" alt="" width="32" height="32" class="size-8 rounded-full object-cover">
                    <span class="text-[11px] font-semibold leading-tight text-ink">James Hall
                        <span class="block text-[9px] font-normal text-ink/60">Chirag</span>
                    </span>
                </div>
            </div>

            {{-- Integration logos (from thesvg.org): white pill holding one white circle per logo --}}
            @php
                $tools = [
                    ['file' => 'slack.svg', 'name' => 'Slack'],
                    ['file' => 'trello.svg', 'name' => 'Trello'],
                    ['file' => 'asana.svg', 'name' => 'Asana'],
                ];
            @endphp
            <ul class="absolute bottom-0 left-1/2 flex -translate-x-1/2 items-center gap-3 rounded-full bg-white p-2.5 shadow-card" aria-label="Works with your tools">
                @foreach ($tools as $tool)
                    <li class="grid size-16 place-items-center rounded-full bg-white shadow-soft">
                        <img src="{{ asset('images/logos/'.$tool['file']) }}" alt="{{ $tool['name'] }}" width="28" height="28" class="size-7 object-contain">
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
