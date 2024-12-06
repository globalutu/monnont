@extends('welcome')
@section('title', 'Contactez-nous')
@section('content')
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">
                Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('index') }}">Accueil</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Contactez-nous</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Contactez-nous</h6>
                <h1 class="display-6 mb-4">Besoin d'un service juridique ? Envoyez-nous votre demande</h1>
            </div>
            <div class="row g-0 justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">
                    <form id="serviceForm" action="submit_service_request.php" method="POST">
                        <div class="row g-3">
                            <!-- Sélection du service -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select" id="serviceType" name="serviceType" required>
                                        <option value="" disabled selected>Choisissez un service</option>
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->libelle }}</option>
                                        @endforeach
                                    </select>
                                    <label for="serviceType">Type de Service</label>
                                </div>
                            </div>
                            <!-- Nom complet -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="fullName" name="fullName"
                                        placeholder="Votre nom complet" required>
                                    <label for="fullName">Nom complet</label>
                                </div>
                            </div>
                            <!-- Adresse email -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Votre email" required>
                                    <label for="email">Adresse email</label>
                                </div>
                            </div>
                            <!-- Numéro de téléphone -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="Votre téléphone" required>
                                    <label for="phone">Numéro de téléphone</label>
                                </div>
                            </div>
                            <!-- Message optionnel -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Laissez un message ici" id="message" name="message" style="height: 150px"></textarea>
                                    <label for="message">Message (facultatif)</label>
                                </div>
                            </div>
                            <!-- Bouton d'envoi -->
                            <div class="col-12 text-center">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Envoyer la
                                    demande</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
