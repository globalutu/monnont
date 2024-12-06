@extends('welcome')
@section('title', 'Services')
@section('content')
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('index') }}">Accueil</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Services</li>
                </ol>
            </nav>
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

    <link rel="stylesheet" href="path/to/owl.carousel.min.css">
    <link rel="stylesheet" href="path/to/owl.theme.default.min.css">
    <script src="path/to/jquery.min.js"></script>
    <script src="path/to/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 5000,
                dots: true,
            });
        });
    </script>





@endsection
