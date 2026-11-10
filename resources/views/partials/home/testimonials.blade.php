@php
    $lorem = 'Lorem ipsum dolor sit amet, facilisis euismod sit nisl. Vulputate elit pellentesque purus et elit urna vitae. Mattis ante vel malesuada vestibulum sed.';

    // Only the centre testimonial is legible in the reference; the others are clearly-marked placeholders.
    $testimonials = [
        ['photo' => 'testimonial-1.jpg', 'company' => 'Company', 'quote' => $lorem, 'name' => 'Client Name', 'role' => 'Position, Company'],
        ['photo' => 'testimonial-2.jpg', 'company' => 'Company', 'quote' => $lorem, 'name' => 'Client Name', 'role' => 'Position, Company'],
        ['photo' => 'testimonial-1.jpg', 'company' => 'roofstock', 'quote' => 'As the leading experts in single-family rentals, Roofstock has combined some of the smartest people in the business with robust data science', 'name' => 'Gary Beasley', 'role' => 'CEO & Co-Founder Roofstock'],
        ['photo' => 'testimonial-3.jpg', 'company' => 'Company', 'quote' => $lorem, 'name' => 'Client Name', 'role' => 'Position, Company'],
        ['photo' => 'testimonial-2.jpg', 'company' => 'Company', 'quote' => $lorem, 'name' => 'Client Name', 'role' => 'Position, Company'],
    ];
    $start = 2;
@endphp

<section id="testimonials" class="scroll-mt-8 overflow-hidden pb-24 pt-6 lg:pb-36" aria-labelledby="testimonials-title">
    <div class="container-page">
        <div class="text-center">
            <x-section-heading id="testimonials-title" accent="What They" title="Saying About Us" align="center" />
            <p class="mx-auto mt-5 max-w-56 text-sm leading-relaxed text-muted">Join with another customer and client satisfied with our service</p>
        </div>
    </div>

    <div class="mt-14 lg:mt-16" data-carousel data-start="{{ $start }}"
         role="region" aria-roledescription="carousel" aria-label="Customer testimonials">
        <ul class="flex gap-6 py-6 lg:gap-8" data-carousel-track>
            @foreach ($testimonials as $i => $t)
                <li class="w-[calc(100vw-2rem)] shrink-0 cursor-pointer transition-opacity duration-500 aria-hidden:opacity-50 sm:w-[min(57rem,calc(100vw-6rem))]"
                    aria-roledescription="slide" aria-label="{{ $i + 1 }} of {{ count($testimonials) }}"
                    data-carousel-slide>
                    <figure class="flex h-full flex-col gap-8 rounded-[1.75rem] bg-white p-6 shadow-card sm:flex-row sm:items-center sm:p-8 lg:gap-12">
                        <img src="{{ asset('images/'.$t['photo']) }}" alt="Portrait of {{ $t['name'] }}" width="500" height="500" loading="lazy"
                             class="aspect-square w-full rounded-2xl object-cover sm:w-56 lg:w-60">
                        <div class="flex-1">
                            <p class="flex items-center gap-1.5 text-base font-bold tracking-tight">
                                <span class="inline-block h-5 w-1.5 -skew-x-12 rounded-sm bg-[#f26b21]" aria-hidden="true"></span>
                                {{ $t['company'] }}
                            </p>
                            <blockquote class="mt-5 text-sm leading-7 text-muted">
                                <p>{{ $t['quote'] }}</p>
                            </blockquote>
                            <figcaption class="mt-8">
                                <span class="block text-sm font-bold text-ink">{{ $t['name'] }}</span>
                                <span class="mt-1 block text-xs text-muted">{{ $t['role'] }}</span>
                            </figcaption>
                        </div>
                    </figure>
                </li>
            @endforeach
        </ul>

        <div class="mt-10 flex items-center justify-center gap-2.5" role="group" aria-label="Choose testimonial">
            @foreach ($testimonials as $i => $t)
                <button type="button"
                        class="relative h-2 w-2 rounded-full after:absolute after:-inset-3 after:content-[''] bg-line transition-all duration-300 aria-[current=true]:w-9 aria-[current=true]:bg-brand-500 hover:bg-brand-300"
                        aria-label="Show testimonial {{ $i + 1 }}" @if ($i === $start) aria-current="true" @endif
                        data-carousel-dot="{{ $i }}"></button>
            @endforeach
        </div>
    </div>
</section>
