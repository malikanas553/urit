@props([
    'href' => null,
    'variant' => 'dark',    // dark | lime
    'size' => 'md',         // sm | md | lg
])

@php
    $classes = \Illuminate\Support\Arr::toCssClasses([
        'inline-flex shrink-0 items-center justify-center rounded-full font-semibold whitespace-nowrap transition duration-200',
        'bg-ink text-white hover:bg-brand-800' => $variant === 'dark',
        'bg-lime text-ink hover:bg-lime-dark' => $variant === 'lime',
        'px-4 py-2 text-[11px]' => $size === 'sm',
        'px-6 py-2.5 text-xs' => $size === 'md',
        'px-9 py-3.5 text-sm' => $size === 'lg',
    ]);
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
@else
    <button {{ $attributes->merge(['type' => 'button', 'class' => $classes]) }}>{{ $slot }}</button>
@endif
