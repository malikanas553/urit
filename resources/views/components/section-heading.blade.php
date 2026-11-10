@props([
    'accent',               // first line, rendered in brand teal
    'title',                // second line
    'tag' => 'h2',
    'align' => 'left',      // left | center
    'dark' => false,        // true when placed on a dark background
])

<{{ $tag }} {{ $attributes->class([
    'text-3xl font-bold leading-[1.2] tracking-tight sm:text-4xl lg:text-[2.75rem]',
    'text-center' => $align === 'center',
    'text-white' => $dark,
    'text-ink' => ! $dark,
]) }}>
    <span @class(['block', 'text-brand-500' => ! $dark, 'text-brand-300' => $dark])>{{ $accent }}</span>
    <span class="block">{{ $title }}</span>
</{{ $tag }}>
