@php
    $services = [
        ['icon' => 'closing', 'title' => 'Closing Experience', 'text' => 'Schedule signing appointment View closing documents Send and receive closing funds', 'active' => false],
        ['icon' => 'transaction', 'title' => 'Digital Transaction', 'text' => 'Customizable status updates Progress tracker Order creation', 'active' => false],
        ['icon' => 'team', 'title' => 'Dedicated Team', 'text' => 'Access a nationwide team with decades of experience handling transactions', 'active' => false],
        ['icon' => 'api', 'title' => 'API Intergation', 'text' => "Integrate your systems and develop workflows with Spruce's open API", 'active' => false],
    ];
@endphp

<section id="services" class="scroll-mt-8 py-20 lg:pt-36 lg:pb-28" aria-labelledby="services-title">
    <div class="container-page">
        <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
            <x-section-heading id="services-title" accent="End to end title" title="& closing services" />

            <div class="max-w-xs md:text-left">
                <p class="text-sm leading-relaxed text-muted">Spruce provides title insurance, coordination, escrow, and recording services.</p>
                <x-pill-button href="#scale" class="mt-5">Learn More</x-pill-button>
            </div>
        </div>

        <ul class="mt-14 grid gap-6 sm:grid-cols-2 lg:mt-20 lg:grid-cols-4 lg:items-center">
            @foreach ($services as $service)
                <li @class([
                    'group relative rounded-3xl p-8 transition duration-300 lg:min-h-[19rem]',
                    // Featured card (as in the reference); the others pick up the same look on hover/focus.
                    'bg-brand-400 text-white shadow-[0_30px_60px_-20px_rgb(38_167_161/0.55)] lg:min-h-[22rem]' => $service['active'],
                    'bg-white text-ink shadow-card hover:bg-brand-400 hover:text-white focus-within:bg-brand-400 focus-within:text-white' => ! $service['active'],
                ])>
                    <span @class([
                        'grid size-12 place-items-center rounded-xl transition',
                        'bg-white/20 text-lime' => $service['active'],
                        'bg-brand-50 text-brand-500 group-hover:bg-white/20 group-hover:text-lime' => ! $service['active'],
                    ])>
                        <x-icon :name="$service['icon']" class="size-6" />
                    </span>

                    <h3 @class([
                        'mt-12 border-l-2 pl-3 text-[15px] font-semibold leading-tight',
                        'border-lime text-lime' => $service['active'],
                        'border-brand-500 group-hover:border-lime group-hover:text-lime' => ! $service['active'],
                    ])>
                        <a href="#scale" class="rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-lime after:absolute after:inset-0 after:rounded-3xl">
                            {{ $service['title'] }}
                        </a>
                    </h3>

                    <p @class([
                        'mt-5 text-xs leading-6',
                        'text-white/80' => $service['active'],
                        'text-muted group-hover:text-white/80' => ! $service['active'],
                    ])>{{ $service['text'] }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</section>
