@php
    $navLinks = [
        ['label' => 'About Us', 'href' => '#expertise'],
        ['label' => 'Product', 'href' => '#services'],
        ['label' => 'Services', 'href' => '#scale'],
        ['label' => 'Resources', 'href' => '#testimonials'],
    ];
@endphp

{{-- Desktop sizes are design units (see .hero-scale in app.css); mobile spacing uses max-lg:. --}}
<header class="hero-scale on-dark absolute inset-x-0 top-0 z-30 text-white">
    <div class="relative mx-auto flex items-center justify-between max-lg:h-20 max-sm:px-4 sm:max-lg:px-6 lg:h-46 lg:w-698 lg:pl-19 lg:pr-39">
        <a href="{{ route('home') }}" class="flex items-center rounded-full font-bold tracking-tight max-lg:gap-2.5 max-lg:text-xl lg:gap-8 lg:fs-15">
            <span class="grid place-items-center rounded-full bg-ink-soft text-lime max-lg:size-9 lg:size-24">
                <x-icon name="bolt" class="max-lg:size-5 lg:size-13" />
            </span>
            Urit
        </a>

        <nav aria-label="Primary" class="hidden md:block lg:absolute lg:top-1/2 lg:left-225.5 lg:-translate-y-1/2">
            <ul class="flex items-center font-normal text-white/90 md:max-lg:gap-8 md:max-lg:text-sm lg:gap-24.5 lg:fs-9">
                @foreach ($navLinks as $link)
                    <li><a href="{{ $link['href'] }}" class="rounded transition hover:text-lime">{{ $link['label'] }}</a></li>
                @endforeach
            </ul>
        </nav>

        <div class="flex items-center max-lg:gap-3">
            <a href="#"
               class="inline-flex items-center rounded-full bg-ink-soft font-semibold text-lime transition hover:bg-ink max-lg:gap-2.5 max-lg:py-1.5 max-lg:pl-1.5 max-lg:pr-5 max-lg:text-xs lg:h-26 lg:gap-7.5 lg:pl-3 lg:pr-12.5 lg:fs-7.75">
                <span class="grid place-items-center rounded-full bg-lime text-ink max-lg:size-7 lg:size-20">
                    <x-icon name="user" class="max-lg:size-3.5 lg:size-10" />
                </span>
                Login
            </a>

            <button type="button"
                    class="grid size-10 place-items-center rounded-full bg-white/10 md:hidden"
                    aria-controls="mobile-nav" aria-expanded="false" data-nav-toggle>
                <span class="sr-only" data-nav-label>Open menu</span>
                <x-icon name="menu" class="size-5" data-nav-icon-open />
                <x-icon name="close" class="hidden size-5" data-nav-icon-close />
            </button>
        </div>
    </div>

    <nav id="mobile-nav" aria-label="Mobile" class="container-page hidden md:hidden" data-nav-panel>
        <ul class="space-y-1 rounded-3xl bg-brand-950/95 p-3 text-base font-medium shadow-float backdrop-blur">
            @foreach ($navLinks as $link)
                <li>
                    <a href="{{ $link['href'] }}" class="block rounded-2xl px-4 py-3 hover:bg-white/10" data-nav-link>{{ $link['label'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
