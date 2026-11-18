@props([
    'name',
    'label',
    'type' => 'text',
    'autocomplete' => null,
    'placeholder' => null,
])

{{-- Labelled input in the site's pill style, with an inline error slot. Password fields get a show/hide toggle. --}}
<div>
    <label for="{{ $name }}" class="mb-2 block text-sm font-medium text-ink">{{ $label }}</label>
    <div class="relative">
        <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" placeholder="{{ $placeholder }}"
               @if ($autocomplete) autocomplete="{{ $autocomplete }}" @endif
               aria-describedby="{{ $name }}-error"
               {{ $attributes->merge(['class' => 'h-13 w-full rounded-full border border-line bg-white px-5 text-sm text-ink shadow-soft transition outline-none placeholder:text-muted/70 focus:border-brand-400 focus:ring-4 focus:ring-brand-400/15 aria-invalid:border-red-400 aria-invalid:focus:ring-red-400/15'.($type === 'password' ? ' pr-13' : '')]) }}>
        @if ($type === 'password')
            <button type="button" class="absolute top-1/2 right-2 grid size-10 -translate-y-1/2 place-items-center rounded-full text-muted transition hover:bg-ink/5 hover:text-ink"
                    aria-controls="{{ $name }}" aria-pressed="false" aria-label="Show password" data-password-toggle>
                <x-icon name="eye" class="size-5" data-eye-show />
                <x-icon name="eye-off" class="hidden size-5" data-eye-hide />
            </button>
        @endif
    </div>
    <p id="{{ $name }}-error" class="mt-1.5 hidden px-5 text-xs text-red-500" data-field-error></p>
</div>
