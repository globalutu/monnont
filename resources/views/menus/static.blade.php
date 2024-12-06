  <div class="container-xxl py-5">
      <div class="container">
          <div class="row g-4">
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="fact-item bg-light rounded text-center h-100 p-5">
                      <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                      <h5 class="mb-3">Années d'Expérience</h5>
                      <h1 class="display-5 mb-0" data-toggle="counter-up">15</h1>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="fact-item bg-light rounded text-center h-100 p-5">
                      <i class="fa fa-users-cog fa-4x text-primary mb-4"></i>
                      <h5 class="mb-3">Membres de l'Équipe</h5>
                      <h1 class="display-5 mb-0" data-toggle="counter-up">25</h1>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="fact-item bg-light rounded text-center h-100 p-5">
                      <i class="fa fa-users fa-4x text-primary mb-4"></i>
                      <h5 class="mb-3">Clients Satisfaits</h5>
                      <h1 class="display-5 mb-0" data-toggle="counter-up">{{ $dossierCount }}</h1>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                  <div class="fact-item bg-light rounded text-center h-100 p-5">
                      <i class="fa fa-check fa-4x text-primary mb-4"></i>
                      <h5 class="mb-3">Projets Réalisés</h5>
                      <h1 class="display-5 mb-0" data-toggle="counter-up">{{ $dossierWithDateCount }}</h1>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- About Start -->
  <!-- About Section -->
  <!-- About Section -->
  <div class="container-xxl py-5" id="Àpropos">
      <div class="container">
          <div class="row g-5">
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="img-border">
                      <img class="img-fluid" src="img/about.jpg" alt="Cabinet ONONTIO Services Juridiques">
                  </div>
              </div>
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="h-100">
                      <h6 class="section-title bg-white text-start text-primary pe-3">À Propos de Nous</h6>
                      <h1 class="display-6 mb-4">Votre Partenaire Juridique de Confiance pour un Accompagnement Sur
                          Mesure</h1>
                      <p>Le cabinet <strong>ONONTIO</strong> est bien plus qu'un prestataire de services juridiques.
                          Nous sommes un partenaire stratégique, dédié à accompagner nos clients dans leurs démarches
                          juridiques, quels que soient leurs défis ou leurs objectifs. Notre approche repose sur
                          l’écoute, la transparence, et l’excellence, avec pour mission de défendre vos intérêts et de
                          sécuriser vos projets.</p>
                      <p class="mb-4">Nous mettons à votre disposition une équipe hautement qualifiée et polyvalente,
                          spécialisée dans des domaines variés tels que :</p>
                      <ul>
                          <li><strong>Médiation et Résolution de Conflits :</strong> Évitez les longs procès et trouvez
                              des solutions gagnant-gagnant.</li>
                          <li><strong>Gestion des Litiges :</strong> Une prise en charge complète pour protéger vos
                              droits.</li>
                          <li><strong>Recouvrement de Créances :</strong> Nous vous aidons à récupérer vos fonds dans
                              les meilleurs délais.</li>
                          <li><strong>Conseils Juridiques :</strong> Une expertise sur mesure pour sécuriser vos
                              décisions.</li>
                      </ul>
                      <p>Chez <strong>ONONTIO</strong>, nous croyons que chaque client est unique et mérite une solution
                          personnalisée. Notre objectif est de vous offrir des résultats concrets, avec une approche
                          proactive et efficace.</p>
                      <div class="d-flex align-items-center mb-4 pb-2">
                          <img class="flex-shrink-0 rounded-circle" src="img/team-1.jpg" alt="Omer Eddie Guendehou"
                              style="width: 50px; height: 50px;">
                          <div class="ps-4">
                              <h6>Omer Eddie GUENDEHOU</h6>
                              <small>Fondateur & Expert Juridique</small>
                          </div>
                      </div>
                      <!-- Button with anchor link -->
                      <a class="btn btn-primary rounded-pill py-3 px-5" href="#nos-services">Découvrir Nos Services</a>
                  </div>
              </div>
          </div>
      </div>
  </div>


  <!-- Services Section -->
  <div class="container-xxl py-5" id="nos-services">
      <div class="container">
          <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
              <h6 class="section-title bg-white text-center text-primary px-3">Nos Services</h6>
              <h1 class="display-6 mb-4">Des Solutions Juridiques Complètes et Personnalisées</h1>
          </div>
          <div class="row g-4">
              @foreach ($services as $service)
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                      <a class="service-item d-block rounded text-center h-100 p-4" href="">
                          <img class="img-fluid rounded mb-4" src="{{ asset('storage/' . $service->image) }}"
                              alt="{{ $service->libelle }}">
                          <h4 class="mb-0">{{ $service->libelle }}</h4>
                      </a>
                  </div>
              @endforeach
          </div>
      </div>
  </div>



  <!-- Service End -->


  <!-- Feature Start -->
  <div class="container-xxl py-5">
      <div class="container">
          <div class="row g-5">
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="h-100">
                      <h6 class="section-title bg-white text-start text-primary pe-3">Pourquoi Choisir ONONTIO</h6>
                      <h1 class="display-6 mb-4">Découvrez les raisons pour lesquelles nos clients nous accordent leur
                          confiance</h1>
                      <p class="mb-4">
                          Chez <span style="font-weight: bold;">ONONTIO</span>, notre engagement est de vous accompagner
                          dans
                          la résolution de vos problématiques juridiques avec professionnalisme et célérité. Nous
                          mettons un
                          point d'honneur à offrir des prestations sur mesure, adaptées à chaque situation, dans un
                          cadre
                          marqué par la transparence et la confiance mutuelle. Animés par la conviction d'une justice
                          accessible
                          et équitable, nous nous employons à être votre partenaire privilégié dans la recherche de
                          solutions
                          pérennes.
                      </p>
                      <div class="row g-4">
                          <div class="col-12">
                              <div class="skill">
                                  <div class="d-flex justify-content-between">
                                      <p class="mb-2">Consultation juridique</p>
                                      <p class="mb-2">95%</p>
                                  </div>
                                  <div class="progress">
                                      <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="skill">
                                  <div class="d-flex justify-content-between">
                                      <p class="mb-2">Médiation et Résolution de Conflits</p>
                                      <p class="mb-2">90%</p>
                                  </div>
                                  <div class="progress">
                                      <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="skill">
                                  <div class="d-flex justify-content-between">
                                      <p class="mb-2">Gestion des Litiges</p>
                                      <p class="mb-2">85%</p>
                                  </div>
                                  <div class="progress">
                                      <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="skill">
                                  <div class="d-flex justify-content-between">
                                      <p class="mb-2">Suivi Juridique et Conseils</p>
                                      <p class="mb-2">88%</p>
                                  </div>
                                  <div class="progress">
                                      <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="88"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="img-border">
                      <img class="img-fluid" src="img/feature.jpg" alt="Services juridiques ONONTIO">
                  </div>
              </div>
          </div>
      </div>
  </div>


  <!-- Feature End -->


  <!-- Project Start -->
  <div class="container-xxl py-5">
      <div class="container">
          <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
              <h6 class="section-title bg-white text-center text-primary px-3">Nos Projets</h6>
              <h1 class="display-6 mb-4">Découvrez Nos Projets Juridiques et de Gestion</h1>
          </div>
          <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
              <div class="project-item border rounded h-100 p-4" data-dot="01">
                  <div class="position-relative mb-4">
                      <img class="img-fluid rounded" src="img/project-1.jpg" alt="">
                      <a href="img/project-1.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                  </div>
                  <h6>Résolution des Conflits</h6>
                  <span>Nous aidons à régler les différends juridiques grâce à des approches basées sur la négociation
                      et la médiation.</span>
              </div>
              <div class="project-item border rounded h-100 p-4" data-dot="02">
                  <div class="position-relative mb-4">
                      <img class="img-fluid rounded" src="img/project-2.jpg" alt="">
                      <a href="img/project-2.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                  </div>
                  <h6>Stratégie Juridique pour les Entreprises</h6>
                  <span>Accompagnement des entreprises pour garantir leur conformité légale et optimiser leur
                      gouvernance.</span>
              </div>
              <div class="project-item border rounded h-100 p-4" data-dot="03">
                  <div class="position-relative mb-4">
                      <img class="img-fluid rounded" src="img/project-3.jpg" alt="">
                      <a href="img/project-3.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                  </div>
                  <h6>Rédaction et Suivi de Contrats</h6>
                  <span>Conception de contrats solides et adaptés pour sécuriser vos transactions commerciales et
                      collaborations.</span>
              </div>
              <div class="project-item border rounded h-100 p-4" data-dot="04">
                  <div class="position-relative mb-4">
                      <img class="img-fluid rounded" src="img/project-4.jpg" alt="">
                      <a href="img/project-4.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                  </div>
                  <h6>Gestion de Conformité</h6>
                  <span>Assistance dans la mise en conformité avec les régulations légales locales et
                      internationales.</span>
              </div>
              <div class="project-item border rounded h-100 p-4" data-dot="05">
                  <div class="position-relative mb-4">
                      <img class="img-fluid rounded" src="img/project-5.jpg" alt="">
                      <a href="img/project-5.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                  </div>
                  <h6>Optimisation Juridique et Fiscale</h6>
                  <span>Solutions stratégiques pour réduire les risques fiscaux tout en optimisant vos opérations
                      financières.</span>
              </div>
              <div class="project-item border rounded h-100 p-4" data-dot="06">
                  <div class="position-relative mb-4">
                      <img class="img-fluid rounded" src="img/project-6.jpg" alt="">
                      <a href="img/project-6.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                  </div>
                  <h6>Accompagnement Juridique International</h6>
                  <span>Soutien dans les transactions transfrontalières et les négociations d'accords
                      internationaux.</span>
              </div>
              <div class="project-item border rounded h-100 p-4" data-dot="07">
                  <div class="position-relative mb-4">
                      <img class="img-fluid rounded" src="img/project-7.jpg" alt="">
                      <a href="img/project-7.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                  </div>
                  <h6>Droit Immobilier</h6>
                  <span>Conseils et assistance pour l'acquisition, la gestion et la résolution de litiges
                      immobiliers.</span>
              </div>
              <div class="project-item border rounded h-100 p-4" data-dot="08">
                  <div class="position-relative mb-4">
                      <img class="img-fluid rounded" src="img/project-8.jpg" alt="">
                      <a href="img/project-8.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                  </div>
                  <h6>Propriété Intellectuelle</h6>
                  <span>Protection juridique de vos marques, brevets et créations originales.</span>
              </div>
              <div class="project-item border rounded h-100 p-4" data-dot="09">
                  <div class="position-relative mb-4">
                      <img class="img-fluid rounded" src="img/project-9.jpg" alt="">
                      <a href="img/project-9.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                  </div>
                  <h6>Recouvrement de Créances</h6>
                  <span>Gestion professionnelle et stratégique pour récupérer vos créances rapidement et
                      efficacement.</span>
              </div>
              <div class="project-item border rounded h-100 p-4" data-dot="10">
                  <div class="position-relative mb-4">
                      <img class="img-fluid rounded" src="img/project-10.jpg" alt="">
                      <a href="img/project-10.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                  </div>
                  <h6>Protection des Données</h6>
                  <span>Accompagnement dans la mise en conformité avec les régulations sur la protection des données
                      personnelles (RGPD).</span>
              </div>
          </div>
      </div>
  </div>

  <div class="container-xxl py-5">
      <div class="container">
          <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
              <h6 class="section-title bg-white text-center text-primary px-3">Notre Équipe</h6>
              <h1 class="display-6 mb-4">Des Experts Juridiques et Gestionnaires Dévoués à Votre Service</h1>
          </div>
          <div class="row g-4">
              @foreach ($teamMembers as $team)
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{ $loop->iteration * 2 }}s">
                      <div class="team-item text-center p-4">
                          <img class="img-fluid border rounded-circle w-75 p-2 mb-4"
                              src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}">
                          <div class="team-text">
                              <div class="team-title">
                                  <h5>{{ $team->name }}</h5>
                                  <span>{{ $team->position }}</span>
                              </div>
                              <div class="team-social">
                                  <!-- Facebook -->
                                  @if ($team->facebook_url)
                                      <a class="btn btn-square btn-primary rounded-circle"
                                          href="{{ $team->facebook_url }}" target="_blank">
                                          <i class="fab fa-facebook-f"></i>
                                      </a>
                                  @else
                                      <a class="btn btn-square btn-secondary rounded-circle" href="#">
                                          <i class="fab fa-facebook-f"></i> <!-- Icône par défaut -->
                                      </a>
                                  @endif

                                  <!-- Twitter -->
                                  @if ($team->twitter_url)
                                      <a class="btn btn-square btn-primary rounded-circle"
                                          href="{{ $team->twitter_url }}" target="_blank">
                                          <i class="fab fa-twitter"></i>
                                      </a>
                                  @else
                                      <a class="btn btn-square btn-secondary rounded-circle" href="#">
                                          <i class="fab fa-twitter"></i> <!-- Icône par défaut -->
                                      </a>
                                  @endif

                                  <!-- LinkedIn -->
                                  @if ($team->linkedin_url)
                                      <a class="btn btn-square btn-primary rounded-circle"
                                          href="{{ $team->linkedin_url }}" target="_blank">
                                          <i class="fab fa-linkedin-in"></i>
                                      </a>
                                  @else
                                      <a class="btn btn-square btn-secondary rounded-circle" href="#">
                                          <i class="fab fa-linkedin-in"></i> <!-- Icône par défaut -->
                                      </a>
                                  @endif
                              </div>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </div>
