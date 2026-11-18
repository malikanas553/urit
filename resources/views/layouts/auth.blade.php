{{--
    Shared shell for the login / register pages (front end only — no auth backend yet).
    Desktop: form on the left, teal brand panel with the hero photo on the right.
    Phones/tablets: the panel is hidden and the form fills the screen.
--}}
@extends('layouts.app')

@section('content')
    <div class="min-h-dvh lg:grid lg:grid-cols-[1fr_minmax(0,1.05fr)] lg:gap-6 lg:p-6">
        {{-- Form column --}}
        <div class="flex min-h-dvh flex-col px-5 py-6 sm:px-10 lg:min-h-0 lg:px-14 lg:py-4">
            <header class="flex items-center justify-between">
                <a href="{{ route('home') }}" class="flex items-center gap-2.5 rounded-full text-xl font-bold tracking-tight">
                    <span class="grid size-9 place-items-center rounded-full bg-ink-soft text-lime">
                        <x-icon name="bolt" class="size-5" />
                    </span>
                    Urit
                </a>
                <a href="{{ route('home') }}" class="inline-flex items-center gap-1.5 rounded-full text-sm font-medium text-muted transition hover:text-ink">
                    <x-icon name="arrow-left" class="size-4" />
                    Back to home
                </a>
            </header>

            <main id="main" tabindex="-1" class="flex flex-1 items-center justify-center py-10 focus:outline-none">
                <div class="w-full max-w-[26rem]" data-reveal>
                    @yield('form')
                </div>
            </main>

            <p class="text-center text-xs text-muted">© {{ date('Y') }} Urit. All rights reserved.</p>
        </div>

        {{-- Brand panel (desktop only) --}}
        <aside class="bg-hero on-dark relative hidden overflow-hidden rounded-[2rem] text-white lg:block" data-reveal="zoom" style="--d: 120ms" aria-hidden="true">
            <div class="relative z-10 max-w-md px-12 pt-14">
                <p class="text-sm font-medium text-lime">The Modern Title And Closing Experience</p>
                <p class="mt-4 text-3xl leading-tight font-semibold">@yield('panel-title', 'Close faster with a nationwide team behind you.')</p>
            </div>

            <img src="{{ asset('images/hero-woman-laptop.png') }}" alt="" width="783" height="1206"
                 class="absolute bottom-[-12%] left-[12%] w-[72%] max-w-[560px]">

            <div class="float-a glass absolute top-[38%] left-[8%] z-20 flex items-center gap-3 rounded-2xl px-4 py-3 shadow-float">
                <span class="grid size-11 place-items-center rounded-full bg-ink-soft text-lime">
                    <x-icon name="users" class="size-5" />
                </span>
                <span class="text-sm leading-tight text-white/85">
                    New clients
                    <span class="block text-lg font-semibold text-lime">321</span>
                </span>
            </div>

            <div class="float-c bg-hero-earnings absolute right-[7%] bottom-[16%] z-20 w-44 rounded-3xl p-5 text-center text-ink shadow-float ring-1 ring-white/40">
                <span class="mx-auto grid size-12 place-items-center rounded-full bg-[#2b2b2b] text-white">
                    <x-icon name="money-bag" class="size-6" />
                </span>
                <p class="mt-3 text-2xl leading-none font-bold">$189.5</p>
                <p class="mt-2 text-[10px] leading-snug text-ink/55">Congratulations you have reached your earnings target today</p>
            </div>
        </aside>
    </div>
@endsection
