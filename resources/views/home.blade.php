@extends('layouts.app')

@section('title', 'Urit — The Modern Title And Closing Experience')

@section('content')
    {{-- Size container: header/hero scale against its width (cqw), see .hero-scale --}}
    <div class="@container relative">
        @include('partials.home.header')

        <main id="main" tabindex="-1" class="focus:outline-none">
            @include('partials.home.hero')
            @include('partials.home.services')
            @include('partials.home.scale')
            @include('partials.home.coverage')
            @include('partials.home.expertise')
            @include('partials.home.testimonials')
            @include('partials.home.signup')
        </main>

        @include('partials.home.footer')
    </div>
@endsection
