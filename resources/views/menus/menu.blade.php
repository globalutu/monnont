<nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a>
    <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav me-auto p-3 p-lg-0">
            <a href="{{ route('index') }}" class="nav-item nav-link">Accueil</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">À Propos</a>
            <a href="{{ route('Services') }}" class="nav-item nav-link">Services</a>
            <a href="{{ route('Contact') }}" class="nav-item nav-link">Contact</a>
        </div>
        <button class="btn btn-sm btn-light rounded-pill py-2 px-4 d-none d-lg-block" data-bs-toggle="modal"
            data-bs-target="#serviceModal">Demander un Service</button>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- En-tête du modal -->
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="serviceModalLabel">Demander un Service Juridique</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <!-- Corps du modal -->
            <div class="modal-body">
                <form id="serviceForm" action="submit_service_request.php" method="POST">
                    <div class="row g-3">
                        <!-- Choix du service -->
                        <div class="col-12">
                            <label for="serviceType" class="form-label">Type de Service</label>
                            <select class="form-select" id="serviceType" name="serviceType" required>
                                <option value="" disabled selected>Choisissez un service</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->libelle }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Nom complet -->
                        <div class="col-md-6">
                            <label for="fullName" class="form-label">Nom complet</label>
                            <input type="text" class="form-control" id="fullName" name="fullName"
                                placeholder="Votre nom complet" required>
                        </div>

                        <!-- Adresse email -->
                        <div class="col-md-6">
                            <label for="email" class="form-label">Adresse email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Votre email" required>
                        </div>

                        <!-- Téléphone -->
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Téléphone</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="Votre téléphone" required>
                        </div>

                        <!-- Message optionnel -->
                        <div class="col-12">
                            <label for="message" class="form-label">Message (facultatif)</label>
                            <textarea class="form-control" id="message" name="message" rows="4"
                                placeholder="Expliquez brièvement votre besoin..."></textarea>
                        </div>

                        <!-- Bouton d'envoi -->
                        <div class="col-12 text-center mt-3">
                            <button type="submit" class="btn btn-primary rounded-pill px-4 py-2">Envoyer la
                                demande</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Script pour activer le menu en fonction de la page actuelle
    document.addEventListener('DOMContentLoaded', function() {
        // Obtenir tous les liens du menu
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

        // Récupérer l'URL actuelle
        const currentUrl = window.location.href;

        // Boucler sur chaque lien du menu
        navLinks.forEach(link => {
            // Si l'URL du lien correspond à l'URL actuelle
            if (link.href === currentUrl) {
                // Ajouter la classe 'active' au lien correspondant
                link.classList.add('active');
            } else {
                // Supprimer la classe 'active' des autres liens (au cas où)
                link.classList.remove('active');
            }
        });
    });
</script>
