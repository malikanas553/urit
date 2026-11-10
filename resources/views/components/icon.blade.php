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
        @case('investors')
            <path d="M12 2.5 4 6v5.5c0 4.6 3.4 8.6 8 10 4.6-1.4 8-5.4 8-10V6l-8-3.5Z" fill="currentColor" stroke="none" opacity=".3"/>
            <path d="M14.4 9.2c-.4-.8-1.3-1.2-2.4-1.2-1.4 0-2.4.7-2.4 1.8 0 2.6 5 1.4 5 4.1 0 1.1-1.1 1.9-2.6 1.9-1.2 0-2.2-.5-2.6-1.4M12 6.8v1.2m0 7.9v1.3"/>
            @break
        @case('lender')
            <path d="M4 9a8 8 0 0 1 14-3.5L20 7.5" />
            <path d="M20 3.5v4h-4"/>
            <path d="M20 15a8 8 0 0 1-14 3.5L4 16.5"/>
            <path d="M4 20.5v-4h4"/>
            <circle cx="12" cy="12" r="3" fill="currentColor" stroke="none"/>
            @break
        @case('proptech')
            <path d="M5 3h10l4 4v14H5V3Z" fill="currentColor" stroke="none" opacity=".3"/>
            <path d="M15 3v4h4M8.5 12h7M8.5 15.5h5"/>
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
