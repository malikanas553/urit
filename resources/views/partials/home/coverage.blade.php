@php
    /*
     | Simplified world land mask on a 5° grid (72 columns × 28 rows, 80°N → 55°S).
     | Each row lists inclusive [startColumn, endColumn] land ranges; column = (lon + 180) / 5.
     | Rendered as rectangles filled with a dot pattern → a lightweight "dotted map".
     */
    $land = [
        [[16, 22], [24, 32], [55, 57]],
        [[12, 21], [23, 32], [47, 47], [54, 59]],
        [[3, 8], [8, 22], [25, 31], [39, 42], [48, 71]],
        [[3, 8], [8, 23], [26, 28], [31, 33], [38, 42], [42, 71]],
        [[4, 8], [9, 17], [20, 23], [27, 27], [37, 42], [42, 69]],
        [[10, 17], [20, 24], [35, 35], [37, 44], [44, 64], [67, 67]],
        [[11, 25], [35, 36], [36, 44], [44, 64], [64, 65]],
        [[11, 23], [36, 41], [44, 44], [45, 63], [64, 64]],
        [[11, 21], [34, 36], [38, 41], [41, 45], [48, 60], [61, 61], [63, 64]],
        [[12, 20], [35, 38], [43, 48], [48, 60], [62, 63]],
        [[13, 19], [34, 42], [43, 48], [48, 60]],
        [[14, 16], [33, 43], [43, 47], [49, 54], [55, 60]],
        [[15, 18], [19, 20], [32, 43], [44, 47], [50, 53], [55, 57]],
        [[17, 19], [32, 44], [45, 45], [50, 52], [55, 57], [60, 60]],
        [[19, 20], [21, 23], [33, 45], [51, 51], [55, 57], [61, 61]],
        [[20, 25], [34, 45], [56, 56], [58, 59]],
        [[20, 26], [38, 44], [56, 56], [58, 59], [60, 60]],
        [[20, 29], [38, 44], [63, 65]],
        [[21, 28], [38, 44], [57, 58], [62, 65]],
        [[21, 28], [38, 44], [45, 46], [61, 65]],
        [[22, 28], [38, 43], [45, 46], [59, 66]],
        [[22, 26], [39, 42], [58, 66]],
        [[21, 25], [39, 42], [59, 66]],
        [[21, 24], [39, 41], [59, 60], [64, 66], [70, 70]],
        [[21, 23], [65, 65], [70, 71]],
        [[21, 23], [69, 70]],
        [[21, 22]],
        [[22, 22]],
    ];

    // Markers at approximate geographic positions: x = (lon + 180) * 2, y = (80 - lat) * 2.
    $markers = [
        'us' => ['United States', 164, 82],
        'ca' => ['Canada', 150, 46],
        'br' => ['Brazil', 260, 180],
        'gb' => ['United Kingdom', 356, 54],
        'de' => ['Germany', 380, 62],
        'es' => ['Spain', 352, 82],
        'ru' => ['Russia', 540, 36],
        'za' => ['South Africa', 410, 218],
        'in' => ['India', 516, 116],
        'th' => ['Thailand', 562, 130],
        'id' => ['Indonesia', 586, 166],
        'kr' => ['South Korea', 612, 86],
        'jp' => ['Japan', 638, 92],
        'au' => ['Australia', 628, 210],
    ];

    $routes = [['us', 'gb'], ['ca', 'ru'], ['us', 'br'], ['br', 'za'], ['es', 'in'], ['in', 'jp'], ['za', 'id'], ['id', 'au'], ['de', 'kr']];
@endphp

<section id="coverage" class="on-dark scroll-mt-8 overflow-hidden bg-brand-900 py-20 text-white lg:py-28" aria-labelledby="coverage-title">
    <div class="container-page">
        <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
            <x-section-heading id="coverage-title" accent="Coast To coast" title="To Coverage" dark />

            <div class="max-w-xs">
                <p class="text-sm leading-relaxed text-white/75">Erat nibh etiam diam sapien phasellus vulputate aenean. Pretium dictumst ultrices.</p>
                <x-pill-button href="#expertise" variant="lime" class="mt-5">Learn More</x-pill-button>
            </div>
        </div>

        <figure class="mt-14 lg:mt-20">
            <svg viewBox="0 0 720 280" class="h-auto w-full" role="img" aria-labelledby="map-title">
                <title id="map-title">World map highlighting Urit coverage in {{ collect($markers)->pluck(0)->join(', ', ' and ') }}</title>
                <defs>
                    <pattern id="map-dots" width="5" height="5" patternUnits="userSpaceOnUse">
                        <circle cx="2.5" cy="2.5" r="1.25" fill="#3d8f8f" />
                    </pattern>
                    <radialGradient id="map-glow">
                        <stop offset="0" stop-color="#6fd0c9" stop-opacity=".9" />
                        <stop offset="1" stop-color="#6fd0c9" stop-opacity="0" />
                    </radialGradient>
                    <clipPath id="flag-clip" clipPathUnits="objectBoundingBox">
                        <circle cx=".5" cy=".5" r=".5" />
                    </clipPath>
                </defs>

                <g aria-hidden="true">
                    @foreach ($land as $row => $ranges)
                        @foreach ($ranges as [$from, $to])
                            <rect x="{{ $from * 10 }}" y="{{ $row * 10 }}" width="{{ ($to - $from + 1) * 10 }}" height="10" fill="url(#map-dots)" />
                        @endforeach
                    @endforeach

                    @foreach ($routes as [$a, $b])
                        @php
                            [, $x1, $y1] = $markers[$a];
                            [, $x2, $y2] = $markers[$b];
                            $cx = ($x1 + $x2) / 2;
                            $cy = min($y1, $y2) - abs($x2 - $x1) * 0.18 - 10;
                        @endphp
                        <path d="M{{ $x1 }} {{ $y1 }} Q{{ $cx }} {{ $cy }} {{ $x2 }} {{ $y2 }}" fill="none" stroke="#9fe3dd" stroke-opacity=".55" stroke-width=".8" stroke-dasharray="2 3" />
                    @endforeach

                    @foreach ([[230, 120], [318, 230], [470, 70], [600, 140], [690, 236], [100, 52], [450, 150]] as [$gx, $gy])
                        <circle cx="{{ $gx }}" cy="{{ $gy }}" r="7" fill="url(#map-glow)" />
                        <circle cx="{{ $gx }}" cy="{{ $gy }}" r="1.8" fill="#9fe3dd" />
                    @endforeach

                    @foreach ($markers as $code => [$name, $x, $y])
                        <circle cx="{{ $x }}" cy="{{ $y }}" r="9.5" fill="#fff" fill-opacity=".9" />
                        <image href="https://flagcdn.com/w40/{{ $code }}.png" x="{{ $x - 8 }}" y="{{ $y - 8 }}" width="16" height="16"
                               preserveAspectRatio="xMidYMid slice" clip-path="url(#flag-clip)" />
                    @endforeach
                </g>
            </svg>
        </figure>
    </div>
</section>
