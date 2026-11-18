@extends('layouts.auth')

@section('title', 'Log In — Urit')
@section('panel-title', 'Welcome back. Your closings are right where you left them.')

@section('form')
    <h1 class="text-3xl font-semibold tracking-tight text-ink sm:text-4xl">Welcome back</h1>
    <p class="mt-3 text-sm text-muted">Log in to manage your transactions and closings.</p>

    <x-google-button id="signInWithGoogleButton" class="mt-8">Sign in with Google</x-google-button>

    <div class="my-7 flex items-center gap-4 text-xs font-medium tracking-wide text-muted uppercase" aria-hidden="true">
        <span class="h-px flex-1 bg-line"></span>or<span class="h-px flex-1 bg-line"></span>
    </div>

    <form class="space-y-5" data-auth-form novalidate>
        <x-auth-field name="email" label="Email" type="email" autocomplete="email" placeholder="you@company.com" required />
        <x-auth-field name="password" label="Password" type="password" autocomplete="current-password" placeholder="Enter your password" required />

        <div class="flex items-center justify-between text-sm">
            <label class="flex items-center gap-2.5 text-ink/80">
                <input type="checkbox" name="remember" class="size-4 rounded accent-brand-500">
                Remember me
            </label>
            <a href="#" class="rounded font-medium text-brand-600 hover:underline" data-auth-stub>Forgot password?</a>
        </div>

        <button type="submit" class="btn-shine h-13 w-full rounded-full bg-lime font-semibold text-ink transition hover:bg-lime-dark">Log In</button>
        <p class="hidden rounded-2xl bg-brand-50 px-4 py-3 text-center text-sm text-brand-800" role="status" data-auth-notice></p>
    </form>

    <p class="mt-8 text-center text-sm text-muted">
        Don't have an account?
        <a href="{{ route('register') }}" class="rounded font-semibold text-ink underline-offset-4 hover:underline">Sign up</a>
    </p>
@endsection
