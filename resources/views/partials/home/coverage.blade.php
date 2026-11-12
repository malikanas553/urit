<section id="coverage" class="on-dark scroll-mt-8 overflow-hidden bg-[linear-gradient(180deg,#115a5f_0%,#115a5f_64.7%,#0c3e42_100%)] py-20 text-white lg:pt-28 lg:pb-0" aria-labelledby="coverage-title">
    <div class="container-page">
        <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
            <x-section-heading id="coverage-title" accent="Coast To coast" title="To Coverage" dark />

            <div class="max-w-xs">
                <p class="text-sm leading-relaxed text-white/75">Erat nibh etiam diam sapien phasellus vulputate aenean. Pretium dictumst ultrices.</p>
                <x-pill-button href="#expertise" variant="lime" class="mt-5">Learn More</x-pill-button>
            </div>
        </div>

    </div>

    {{-- Map spans the same 698-unit canvas as the hero (1380 of the design's 1440px, starting 40px in) --}}
    <figure class="hero-scale mx-auto mt-14 max-lg:px-4 sm:max-lg:px-6 lg:mt-32.75 lg:mb-52.5 lg:w-698">
        <div class="lg:ml-8.5 lg:w-691">
            @include('partials.home.coverage-map')
        </div>
    </figure>
</section>
