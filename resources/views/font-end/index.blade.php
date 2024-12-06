@extends('welcome')
@section('title', 'Accueil')
@section('content')


    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                    <img class="img-fluid" src="img/carousel-3.jpg" alt="Image">
                </button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Votre quietude, Notre Engagement
                            </h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Des Solutions Juridiques Fiables et
                                Innovantes</h1>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Votre Paix, Notre Engagement
                            </h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Des Solutions Juridiques Fiables et
                                Innovantes</h1>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Votre Paix, Notre Engagement
                            </h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Des Solutions Juridiques Fiables et
                                Innovantes</h1>

                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    @include('menus.static')

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Témoignages</h6>
                <h1 class="display-6 mb-4">Ce Que Disent Nos Clients</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach ($testimonials as $testimonial)
                    <div class="testimonial-item bg-light rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="flex-shrink-0 rounded-circle border p-1"
                                src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->clientName }}">
                            <div class="ms-4">
                                <h5 class="mb-1">{{ $testimonial->clientName }}</h5>
                                <span>{{ $testimonial->clientProfession }}</span>
                            </div>
                        </div>
                        <p class="mb-0">"{{ $testimonial->testimonialText }}"</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
