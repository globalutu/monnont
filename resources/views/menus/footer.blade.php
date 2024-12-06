<div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Address and Contact Information -->
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Contactez-nous</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ old('adresse', $contact->adresse) }}</p>
                <p class="mb-2">
                    <i
                        class="fa fa-phone-alt me-3"></i>{{ old('telephone_1', $contact->telephone_1) }}/{{ old('telephone_2', $contact->telephone_2) }}
                </p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ old('email', $contact->email) }}</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href="#"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href="#"><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-0" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Liens Utiles</h5>
                <a class="btn btn-link text-light" href="#Àpropos"
                    onclick="navigateOrRedirect(event, '#Àpropos', '{{ route('about') }}')">À propos de nous</a>
                <a class="btn btn-link text-light" href="#contact"
                    onclick="navigateOrRedirect(event, '#contact', '{{ route('Contact') }}')">Contactez-nous</a>
                <a class="btn btn-link text-light" href="#nos-services"
                    onclick="navigateOrRedirect(event, '#nos-services', '{{ route('Services') }}')">Nos Services</a>


            </div>

            <!-- Newsletter Signup -->
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Abonnez-vous à notre Newsletter</h5>
                <p>Recevez nos dernières actualités juridiques, des conseils pratiques et des informations sur nos
                    services, directement dans votre boîte mail.</p>
                <form id="newsletter-form" action="{{ route('newsletter.subscribe') }}" method="POST">
                    @csrf
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" type="email"
                            name="email" placeholder="Votre email" required>
                        <button type="submit"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">{{ config('app.name') }}</a>, Tous droits réservés.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('newsletter-form').addEventListener('submit', function(e) {
        e.preventDefault();

        let form = e.target;
        let formData = new FormData(form);

        console.log('Formulaire soumis');

        fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                console.log(data); // Vérifiez si la réponse contient le bon message
                Swal.fire({
                    title: 'Succès !',
                    text: data.message,
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
                form.reset();
            })
            .catch(error => {
                console.error('Erreur lors de la requête :', error);
                Swal.fire({
                    title: 'Erreur !',
                    text: 'Une erreur est survenue. Veuillez réessayer.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
    });

    function navigateOrRedirect(event, targetId, fallbackUrl) {
        event.preventDefault(); // Empêche le comportement par défaut du lien
        const targetElement = document.querySelector(targetId);

        if (targetElement) {
            // Si l'élément avec l'ID existe, on fait défiler jusqu'à lui
            targetElement.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        } else {
            // Si l'élément n'existe pas, on redirige vers la page correspondante
            window.location.href = fallbackUrl;
        }
    }
</script>
