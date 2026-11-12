@php
    $points = [
        'We partner with forward-thinking companies to scale',
        'Empower their customers with transparency and predictability',
        'Consultative approach on emerging technology.',
    ];

    // Integration logos (from thesvg.org)
    $tools = [
        ['file' => 'slack.svg', 'name' => 'Slack'],
        ['file' => 'trello.svg', 'name' => 'Trello'],
        ['file' => 'asana.svg', 'name' => 'Asana'],
    ];
@endphp

{{--
    From lg up this section sits on the shared 698-unit canvas (.hero-scale); every position and size is taken from the design.
    The photo card is a size container: inside it one spacing unit = 1/298.5 of its width, so the chips, cursors and
    tools pill keep their exact place on the photo at every screen width.
--}}
<section id="expertise" class="hero-scale relative scroll-mt-8 max-lg:py-20 lg:h-562" aria-labelledby="expertise-title">
    <div class="relative mx-auto max-lg:px-4 sm:max-lg:px-6 lg:h-full lg:w-698">
        {{-- Copy --}}
        <div data-reveal="left" class="lg:absolute lg:top-121 lg:left-27 lg:w-306.5">
            <h2 id="expertise-title" class="font-semibold max-lg:text-3xl max-lg:leading-[1.2] max-lg:tracking-tight sm:max-lg:text-4xl lg:fs-26 lg:leading-[1.346]">
                <span class="block text-[#35b8c2]">Powered By</span>
                <span class="block text-ink">Dedicated Expertise</span>
            </h2>

            <p class="text-[#797979] max-lg:mt-5 max-lg:max-w-md max-lg:text-sm max-lg:leading-relaxed lg:mt-17 lg:w-258 lg:fs-9 lg:leading-[1.61]">
                We’re seasoned real estate experts who understand that the landscape is changing–and believe it’s for the better.
            </p>

            <hr class="border-[#efefef] max-lg:my-8 lg:mt-30.5 lg:mb-0 lg:w-306.5">

            <ul class="max-lg:space-y-4 lg:mt-32">
                @foreach ($points as $i => $point)
                    <li class="flex items-center font-medium text-ink max-lg:gap-3 max-lg:text-sm lg:h-14 lg:gap-8.5 lg:fs-8.75 {{ $i > 0 ? 'lg:mt-12.5' : '' }}">
                        <span class="grid shrink-0 place-items-center rounded-full bg-[#c3ee5d] text-ink max-lg:size-6 lg:size-14">
                            <x-icon name="check" class="max-lg:size-3.5 lg:size-8 [stroke-width:2.6]" />
                        </span>
                        {{ $point }}
                    </li>
                @endforeach
            </ul>

            <a href="#testimonials"
               class="inline-flex items-center justify-center rounded-full bg-[#232323] font-semibold text-white transition hover:bg-brand-800 max-lg:mt-10 max-lg:px-10 max-lg:py-4 max-lg:text-sm lg:absolute lg:top-279 lg:left-0 lg:h-35.5 lg:w-129.25 lg:fs-9">
                Learn More
            </a>
        </div>

        {{-- Photo card --}}
        <div data-reveal="right" style="--d: 120ms" class="@container relative aspect-[298.5/376.5] max-lg:mx-auto max-lg:mt-14 max-lg:w-full max-lg:max-w-[480px] lg:absolute lg:top-90 lg:left-354 lg:w-298.5">
            <div class="absolute inset-0 [--spacing:calc(100cqw/298.5)]">
                <img src="{{ asset('images/expertise-team.jpg') }}" alt="Two Urit colleagues reviewing a closing together on a laptop"
                     width="1192" height="1504" loading="lazy"
                     class="absolute inset-0 size-full object-cover radius-30.5">

                {{-- Kenneth Allen chip + white cursor --}}
                <div class="float-a absolute top-200.25 left-51 flex h-31.5 w-86 items-center gap-4.5 rounded-full bg-white pl-4.5 shadow-[0_8px_20px_-8px_rgb(0_0_0/0.25)]">
                    <img src="{{ asset('images/avatar-kenneth.jpg') }}" alt="" width="96" height="96" class="size-23.5 shrink-0 rounded-full object-cover">
                    <span class="leading-tight">
                        <span class="block font-semibold text-ink fs-6.75">Kenneth Allen</span>
                        <span class="mt-1 block text-[#9b9b9b] fs-5.75">Online</span>
                    </span>
                </div>
                <svg class="float-a absolute top-232.5 left-135 h-9.5 w-10" viewBox="0 0 20 19" aria-hidden="true">
                    <path d="M1 8.6 14.6 1.2c.8-.4 1.6.3 1.4 1.1l-3.6 14.9c-.2.9-1.4 1-1.8.2L8.3 11 2 10.4c-1-.1-1.3-1.3-1-1.8Z" fill="#fff"/>
                </svg>

                {{-- James Hall chip + lime cursor --}}
                <div class="float-b absolute top-186.25 left-173.75 flex h-31 w-86 items-center gap-4.5 rounded-full bg-[#c9f562] pl-4 shadow-[0_8px_20px_-8px_rgb(0_0_0/0.25)]">
                    <img src="{{ asset('images/avatar-james.jpg') }}" alt="" width="96" height="96" class="size-24 shrink-0 rounded-full object-cover">
                    <span class="leading-tight">
                        <span class="block font-semibold text-ink fs-6.75">James Hall</span>
                        <span class="mt-1 block text-ink/45 fs-5.75">Online</span>
                    </span>
                </div>
                <svg class="float-b absolute top-216.75 left-166 h-10.5 w-11" viewBox="0 0 22 21" aria-hidden="true">
                    <path d="M1.4 19.6 5.2 1.8c.2-.9 1.3-1.1 1.8-.4l3.6 5.4 9.8 3.9c.9.4.8 1.6-.1 1.9L2.6 20.9c-.7.2-1.4-.5-1.2-1.3Z" fill="#c9f562"/>
                </svg>

                {{-- Tools pill --}}
                <ul class="float-c absolute top-349.5 left-83.5 flex h-55 w-152.25 items-center justify-center gap-9 rounded-full bg-white shadow-[0_18px_40px_-12px_rgb(16_40_40/0.22)]"
                    aria-label="Works with your tools">
                    @foreach ($tools as $tool)
                        <li class="grid size-39 place-items-center rounded-full bg-white shadow-[0_4px_14px_-2px_rgb(16_40_40/0.12)]">
                            <img src="{{ asset('images/logos/'.$tool['file']) }}" alt="{{ $tool['name'] }}" width="36" height="36" class="size-18 object-contain">
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
