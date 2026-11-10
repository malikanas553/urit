@php
    $columns = [
        'Company' => ['About Us', 'Careers', 'Contact Us', 'Customer Care'],
        'Who We Help' => ['Lenders', 'Investors', 'Proptech'],
        'Resources' => ['API', 'Blog', 'Reports'],
    ];
    $socials = ['instagram' => 'Instagram', 'twitter' => 'Twitter', 'linkedin' => 'LinkedIn'];
@endphp

<footer class="on-dark bg-ink-soft text-white">
    <div class="container-page grid gap-12 pb-14 pt-16 lg:grid-cols-[1fr_1.4fr] lg:pt-20">
        <div>
            <a href="{{ route('home') }}" class="inline-flex items-center gap-2.5 rounded-full text-xl font-bold tracking-tight">
                <span class="grid size-9 place-items-center rounded-full bg-white text-ink">
                    <x-icon name="bolt" class="size-5" />
                </span>
                Urit
            </a>
            <p class="mt-6 max-w-xs text-xs leading-6 text-white/55">
                Libero bibendum lorem vulputate vel faucibus sit pretium sed. Sed purus eros pretium egestas fermentum vitae commodo egestas tellus.
            </p>
            <ul class="mt-8 flex gap-5">
                @foreach ($socials as $icon => $label)
                    <li>
                        <a href="#" class="grid size-9 place-items-center rounded-full text-white/80 transition hover:bg-white/10 hover:text-lime">
                            <x-icon :name="$icon" class="size-5" />
                            <span class="sr-only">{{ $label }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="grid grid-cols-2 gap-10 sm:grid-cols-3">
            @foreach ($columns as $heading => $links)
                <nav aria-labelledby="footer-{{ Str::slug($heading) }}">
                    <h2 id="footer-{{ Str::slug($heading) }}" class="text-sm font-semibold">{{ $heading }}</h2>
                    <ul class="mt-5 space-y-3 text-xs text-white/55">
                        @foreach ($links as $link)
                            <li><a href="#" class="rounded transition hover:text-lime">{{ $link }}</a></li>
                        @endforeach
                    </ul>
                </nav>
            @endforeach
        </div>
    </div>

    <div class="border-t border-white/10">
        <div class="container-page flex flex-col gap-4 py-7 text-xs text-white/55 sm:flex-row sm:items-center sm:justify-between">
            <ul class="flex gap-8">
                <li><a href="#" class="rounded hover:text-lime">Privacy Policy</a></li>
                <li><a href="#" class="rounded hover:text-lime">Terms &amp; Conditions</a></li>
            </ul>
            <p>&copy; 2023 All rights reserved</p>
        </div>
    </div>
</footer>
