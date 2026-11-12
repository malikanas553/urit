@props(['name'])

{{-- Small inline SVG icon set (stroke icons on a 24×24 grid). Decorative by default. --}}
<svg {{ $attributes->merge(['class' => 'size-5', 'aria-hidden' => 'true', 'focusable' => 'false']) }}
     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
    @switch($name)
        @case('bolt')
            <path d="M13 2 4.5 13.2a.6.6 0 0 0 .48.96H11l-1 7.84L18.5 10.8a.6.6 0 0 0-.48-.96H12L13 2Z" fill="currentColor" stroke="none"/>
            @break
        @case('check')
            <path d="m5 12.5 4.2 4L19 7"/>
            @break
        @case('check-circle')
            <circle cx="12" cy="12" r="10" fill="currentColor" stroke="none"/>
            <path d="m7.5 12.3 3 2.9 6-6.2" stroke="#fff" stroke-width="2.2"/>
            @break
        @case('user')
            <circle cx="12" cy="8" r="4" fill="currentColor" stroke="none"/>
            <path d="M4 21c.8-4 4-6 8-6s7.2 2 8 6" fill="currentColor" stroke="none"/>
            @break
        @case('users')
            <circle cx="9" cy="8" r="3.4" fill="currentColor" stroke="none"/>
            <circle cx="17" cy="9.5" r="2.6" fill="currentColor" stroke="none" opacity=".6"/>
            <path d="M2.5 20c.6-3.6 3.2-5.6 6.5-5.6s5.9 2 6.5 5.6" fill="currentColor" stroke="none"/>
            <path d="M15.5 14.6c3 .1 5.2 1.8 6 5" opacity=".6"/>
            @break
        @case('closing')
            <circle cx="8" cy="7" r="2.6" fill="currentColor" stroke="none"/>
            <circle cx="16" cy="7" r="2.6" fill="currentColor" stroke="none" opacity=".55"/>
            <circle cx="8" cy="15" r="2.6" fill="currentColor" stroke="none" opacity=".55"/>
            <circle cx="16" cy="15" r="2.6" fill="currentColor" stroke="none"/>
            <path d="M12 19.5v2.5"/>
            @break
        @case('transaction')
            <rect x="3" y="4" width="18" height="13" rx="2.5" fill="currentColor" stroke="none" opacity=".55"/>
            <rect x="6.5" y="7.5" width="8" height="2" rx="1" fill="#fff" stroke="none"/>
            <rect x="6.5" y="11" width="5" height="2" rx="1" fill="#fff" stroke="none"/>
            <path d="M9 21h6M12 17v4"/>
            @break
        @case('team')
            <path d="M4 15.5 12.5 7l4.5 4.5L8.5 20H4v-4.5Z" fill="currentColor" stroke="none"/>
            <path d="m14.5 5 2-2 4.5 4.5-2 2" />
            <circle cx="18.5" cy="18.5" r="2.5" fill="currentColor" stroke="none" opacity=".55"/>
            @break
        @case('api')
            <rect x="3" y="3" width="18" height="18" rx="3.5" fill="currentColor" stroke="none" opacity=".55"/>
            <path d="M7 15.5 8.5 9l1.5 6.5M7.4 13.5h2.2M12 15.5V9h1.6a1.7 1.7 0 0 1 0 3.4H12M17 9v6.5" stroke="#fff" stroke-width="1.5"/>
            @break
        {{-- Two-tone feature icons (light body + currentColor accents), drawn after the reference --}}
        @case('investors')
            <path d="M8.6 7.2V5.4a1.6 1.6 0 0 1 1.6-1.6h3.6a1.6 1.6 0 0 1 1.6 1.6v1.8" stroke-width="1.7"/>
            <rect x="2.6" y="7" width="18.8" height="14" rx="3.4" fill="#98d9de" stroke="none"/>
            <path d="M14 11.6c-.3-.7-1-1.1-2-1.1-1.2 0-2 .6-2 1.5 0 2.2 4.1 1.1 4.1 3.4 0 .9-.9 1.6-2.2 1.6-1 0-1.8-.4-2.1-1.2M12 9.3v1.2m0 6.6v1.2" stroke-width="1.6"/>
            @break
        @case('lender')
            <path d="M12 2.4 9.7 3.6H7.4l.6 2.4L7.4 8.4h2.3L12 9.6l2.3-1.2h2.3L16 6l.6-2.4h-2.3L12 2.4Z" fill="currentColor" stroke="none"/>
            <circle cx="12" cy="6" r="1.1" fill="#fff" stroke="none"/>
            <path d="M5.6 4.2 4.4 5.4M18.4 4.2l1.2 1.2M5.6 7.8 4.4 6.6M18.4 7.8l1.2-1.2" stroke-width="1.6"/>
            <path d="M2 15.4c0-.9.7-1.6 1.6-1.6h6.2c1 0 1.9.3 2.6.9l.8.6h3.3c.9 0 1.6.6 1.6 1.5l2.5-1.3c.9-.5 2.1-.2 2.6.7.3.5.1 1.2-.4 1.5l-5.1 3.2c-.8.5-1.7.7-2.6.7H3.6c-.9 0-1.6-.7-1.6-1.6v-4.6Z" fill="#98d9de" stroke="none"/>
            @break
        @case('proptech')
            <path d="M6.4 2.6h8.2l6 6v9.6a3.2 3.2 0 0 1-3.2 3.2H6.4a3.2 3.2 0 0 1-3.2-3.2V5.8a3.2 3.2 0 0 1 3.2-3.2Z" fill="#98d9de" stroke="none"/>
            <path d="M14.6 2.6v3.8a2.2 2.2 0 0 0 2.2 2.2h3.8l-6-6Z" fill="currentColor" stroke="none"/>
            <path d="m9.4 12.6-1.8 1.8 1.8 1.8m5.2-3.6 1.8 1.8-1.8 1.8m-1.8-4.4-1.6 5.2" stroke-width="1.5"/>
            @break
        @case('wallet')
            <path d="M5 8.2A2.2 2.2 0 0 1 7.2 6h9.6A2.2 2.2 0 0 1 19 8.2v8.6a2.2 2.2 0 0 1-2.2 2.2H7.2A2.2 2.2 0 0 1 5 16.8V8.2Z" fill="currentColor" stroke="none"/>
            <path d="M8 6 9.6 4.3a1.4 1.4 0 0 1 2 0L13.4 6" fill="currentColor" stroke="none"/>
            <path d="M5 10.3h2.6a2.2 2.2 0 0 1 0 4.4H5" stroke="#202020" stroke-width="1.4"/>
            <circle cx="7.6" cy="12.5" r=".8" fill="#202020" stroke="none"/>
            <path d="M14 9.2h2.6" stroke="#202020" stroke-width="1.4"/>
            @break
        @case('plus-minus')
            <path d="M5 8.5h4.6M7.3 6.2v4.6M16.2 5.6 8.3 18.4M14.4 15.6h4.6" stroke-width="2"/>
            @break
        @case('divide')
            <path d="M6 12h12"/><circle cx="12" cy="7" r="1.2" fill="currentColor"/><circle cx="12" cy="17" r="1.2" fill="currentColor"/>
            @break
        @case('percent')
            <path d="M18 6 6 18"/><circle cx="7.5" cy="7.5" r="2"/><circle cx="16.5" cy="16.5" r="2"/>
            @break
        @case('close')
            <path d="M6 6l12 12M18 6 6 18"/>
            @break
        @case('menu')
            <path d="M4 7h16M4 12h16M4 17h16"/>
            @break
        @case('dollar')
            <path d="M15.5 8.5c-.5-1.2-1.8-2-3.5-2-2 0-3.5 1-3.5 2.6 0 3.8 7 2 7 5.8 0 1.5-1.5 2.6-3.6 2.6-1.7 0-3.1-.8-3.6-2M12 4.5v2m0 11v2"/>
            @break
        @case('wallet')
            <rect x="3" y="6" width="18" height="13" rx="3"/><path d="M3 10h18M16 14.5h2"/><path d="M6 6 15 3l1 3"/>
            @break
        @case('money-bag')
            <path d="M9 4.5h6l-1.4 3h-3.2L9 4.5Z"/>
            <path d="M10.4 7.5C6.5 9.2 4.5 12.4 4.5 15.6c0 2.7 2 4.4 5 4.4h5c3 0 5-1.7 5-4.4 0-3.2-2-6.4-5.9-8.1"/>
            <path d="M13.6 11.6c-.3-.6-.9-.9-1.6-.9-.9 0-1.6.5-1.6 1.2 0 1.7 3.3.9 3.3 2.7 0 .7-.7 1.2-1.7 1.2-.8 0-1.4-.3-1.7-.9M12 9.9v.8m0 5.2v.8"/>
            @break
        @case('chat')
            <path d="M4 5h16v11H9l-5 4V5Z" fill="currentColor" stroke="none"/>
            @break
        @case('star')
            <path d="m12 3 2.8 5.7 6.2.9-4.5 4.4 1.1 6.2L12 17.3 6.4 20.2l1.1-6.2L3 9.6l6.2-.9L12 3Z" fill="currentColor" stroke="none"/>
            @break
        @case('instagram')
            <rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>
            @break
        @case('twitter')
            <path d="M22 5.8c-.7.3-1.5.5-2.3.6.8-.5 1.5-1.3 1.8-2.2-.8.5-1.7.8-2.6 1a4 4 0 0 0-6.9 3.6A11.4 11.4 0 0 1 3.7 4.6a4 4 0 0 0 1.2 5.4c-.6 0-1.3-.2-1.8-.5 0 2 1.4 3.6 3.2 4a4 4 0 0 1-1.8.1 4 4 0 0 0 3.8 2.8A8 8 0 0 1 2 18c1.8 1.2 4 1.8 6.2 1.8 7.4 0 11.5-6.2 11.5-11.5v-.5c.9-.6 1.6-1.3 2.3-2Z" fill="currentColor" stroke="none"/>
            @break
        @case('linkedin')
            <rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10.5V16M8 7.8v.2M11.5 16v-5.5M11.5 13c0-1.6 1-2.6 2.3-2.6s2.2.9 2.2 2.6v3"/>
            @break
        @case('grid')
            <rect x="4" y="4" width="7" height="7" rx="2" fill="currentColor" stroke="none"/>
            <rect x="13" y="4" width="7" height="7" rx="2" fill="currentColor" stroke="none" opacity=".55"/>
            <rect x="4" y="13" width="7" height="7" rx="2" fill="currentColor" stroke="none" opacity=".55"/>
            <rect x="13" y="13" width="7" height="7" rx="2" fill="currentColor" stroke="none"/>
            @break
        @case('board')
            <rect x="3" y="3" width="18" height="18" rx="3.5" fill="currentColor" stroke="none"/>
            <rect x="6.5" y="6.5" width="4.2" height="10" rx="1" fill="#fff" stroke="none"/>
            <rect x="13.3" y="6.5" width="4.2" height="6" rx="1" fill="#fff" stroke="none"/>
            @break
        @case('dots')
            <circle cx="12" cy="7" r="3.6" fill="currentColor" stroke="none"/>
            <circle cx="6.5" cy="16" r="3.6" fill="currentColor" stroke="none"/>
            <circle cx="17.5" cy="16" r="3.6" fill="currentColor" stroke="none"/>
            @break
        @case('arrow-left')
            <path d="M15 5 8 12l7 7"/>
            @break
        @case('arrow-right')
            <path d="m9 5 7 7-7 7"/>
            @break
    @endswitch
</svg>
