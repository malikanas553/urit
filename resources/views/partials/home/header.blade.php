@php
    $navLinks = [
        ['label' => 'About Us', 'href' => '#expertise'],
        ['label' => 'Product', 'href' => '#services'],
        ['label' => 'Services', 'href' => '#scale'],
        ['label' => 'Resources', 'href' => '#testimonials'],
    ];
@endphp

<header class="on-dark absolute inset-x-0 top-0 z-30 text-white">
    <div class="container-page flex h-20 items-center justify-between gap-6 lg:h-24">
        <a href="{{ route('home') }}" class="flex items-center gap-2.5 rounded-full text-xl font-bold tracking-tight">
            <span class="grid size-9 place-items-center rounded-full bg-lime text-ink">
                <x-icon name="bolt" class="size-5" />
            </span>
            Urit
        </a>

        <nav aria-label="Primary" class="hidden md:block">
            <ul class="flex items-center gap-10 text-sm font-medium text-white/85">
                @foreach ($navLinks as $link)
                    <li><a href="{{ $link['href'] }}" class="rounded transition hover:text-lime">{{ $link['label'] }}</a></li>
                @endforeach
            </ul>
        </nav>

        <div class="flex items-center gap-3">
            <a href="#"
               class="inline-flex items-center gap-2.5 rounded-full bg-ink/80 py-1.5 pl-1.5 pr-5 text-xs font-semibold ring-2 ring-lime transition hover:bg-ink">
                <span class="grid size-7 place-items-center rounded-full bg-lime text-ink">
                    <x-icon name="user" class="size-3.5" />
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
