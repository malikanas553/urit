@extends('layouts.auth')

@section('title', 'Create Account — Urit')
@section('panel-title', 'Simple, efficient and scalable closings — start in minutes.')

@section('form')
    <h1 class="text-3xl font-semibold tracking-tight text-ink sm:text-4xl">Create your account</h1>
    <p class="mt-3 text-sm text-muted">Join Urit and run every closing from one place.</p>

    <x-google-button class="mt-8">Sign up with Google</x-google-button>

    <div class="my-7 flex items-center gap-4 text-xs font-medium tracking-wide text-muted uppercase" aria-hidden="true">
        <span class="h-px flex-1 bg-line"></span>or<span class="h-px flex-1 bg-line"></span>
    </div>

    <form class="space-y-5" data-auth-form novalidate>
        <x-auth-field name="name" label="Full name" autocomplete="name" placeholder="Jane Cooper" required />
        <x-auth-field name="email" label="Email" type="email" autocomplete="email" placeholder="you@company.com" required />
        <x-auth-field name="password" label="Password" type="password" autocomplete="new-password" placeholder="At least 8 characters" required minlength="8" />
        <x-auth-field name="password_confirmation" label="Confirm password" type="password" autocomplete="new-password" placeholder="Repeat your password" required data-match="password" />

        <div>
            <label class="flex items-start gap-2.5 text-sm text-ink/80">
                <input id="terms" type="checkbox" name="terms" required aria-describedby="terms-error" class="mt-0.5 size-4 shrink-0 rounded accent-brand-500">
                <span>I agree to the <a href="#" class="font-medium text-brand-600 hover:underline">Terms of Service</a> and <a href="#" class="font-medium text-brand-600 hover:underline">Privacy Policy</a></span>
            </label>
            <p id="terms-error" class="mt-1.5 hidden text-xs text-red-500" data-field-error></p>
        </div>

        <button type="submit" class="btn-shine h-13 w-full rounded-full bg-lime font-semibold text-ink transition hover:bg-lime-dark">Create Account</button>
        <p class="hidden rounded-2xl bg-brand-50 px-4 py-3 text-center text-sm text-brand-800" role="status" data-auth-notice></p>
    </form>

    <p class="mt-8 text-center text-sm text-muted">
        Already have an account?
        <a href="{{ route('login') }}" class="rounded font-semibold text-ink underline-offset-4 hover:underline">Log in</a>
    </p>
@endsection
