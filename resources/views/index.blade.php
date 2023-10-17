<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Maison De jeunes Rouhia</title>
  
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="stylesheet" href="file/css/index.css">

  <!-- Favicons -->
  <link href="file/img/favicon.png" rel="icon">
  <link href="file/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="file/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="file/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="file/vendor/aos/aos.css" rel="stylesheet">
  <link href="file/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="file/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="file/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="file/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="file/vendor/remixicon/remixicon.css" rel="stylesheet">
  <!-- Favicons -->
  <link href="file/img/favicon.png" rel="icon">
  <link href="file/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>

  {{-- Slide --}}

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>MDJ Rouhia<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#Accueil" class="active">Acceuil</a></li>
          <li><a href="À propos">À propos</a></li>
          <li><a href="équipe">équipe</a></li>
          <li><a href="Activité">Activité</a></li>
          <li><a href="testimoniale">testimoniale</a></li>
          <li><a href="Contact">Contact</a></li>
          <li>
            @if (Route::has('login'))
          <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
          @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
          @else
          <li>
            <a href="{{ route('login') }}">Log in</a>
          </li>
          <li>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
          @endauth
          </div>
          @endif
          </li>
          </ul>
          {{-- @if (Route::has('login'))
          <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
              @auth
                  <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
              @else
                  <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                  @endif
              @endauth
          </div>
      @endif --}}

        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero" id="Accueill">

    <div class="info d-flex align-items-center" id="Accueil">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>LA MAISON DE JEUNES DE Rouhia
              <span>VOUS SOUHAITE LA BIENVENUE!</span></h2>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(file/images/tbarka.JPG)"></div>
      <div class="carousel-item active" style="background-image: url(file/images/ein-drahim.jpg)"></div>
      <div class="carousel-item" style="background-image: url(file/images/background.jpg)"></div>
      <div class="carousel-item" style="background-image: url(file/images/background-trois.jpg)"></div>
      <div class="carousel-item" style="background-image: url(file/images/bg.jpg)"></div>
      <div class="carousel-item" style="background-image: url(file/images/slide-background.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">



    <section id="features" class="features" id="À propos">

      <!--  Section Title -->
      {{-- <div class="container section-title aos-init aos-animate" data-aos="fade-up"> --}}
        <div class="main-title text-center mt-5 mb-5 position-relative">
        <h2>à Propos</h2>
      </div><!-- End Section Title -->

      <div class="container" id="À propos">
        <div class="row gy-4 align-items-center features-item">
          <div class="text text-center mt-5 mb-5 position-relative">
            <p>
              Les maisons de jeunes sont des associations de jeunes et d'adultes qui se sont données comme mission,
              sur une base volontaire, dans leur communauté, de tenir un lieu de rencontre animé où des jeunes de 15 à 35 ans,
              au contact d'adultes représentatifs, pourront devenir des citoyens critiques, actifs et responsables. La Maison de jeunes
              de Ebn ljazzare Rouhia a vu le jour le 01 janvier 1988 grâce au soutien du Collectif Jeunesse de Ebn ljazzare Rouhia.
            </p>
          </div>
          </div>
        </div><!-- Features Item -->

        {{-- ==== NOS VALEURS ==== --}}
        <div class="main-title text-center mt-5 mb-5 position-relative">
          <h2>NOS VALEURS</h2>
        <div class="techs pt-5 pb-5 text-center">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-sm-6 col-md-4 col-lg-2 mt-3 mb-3 mx-auto">
                      <img class="img-fluid" src="file/images/icon_actif.png" alt="">
                      <h2>Actif</h2>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-2 mt-3 mb-3 mx-auto">
                      <img class="img-fluid" src="file/images/icon_critique.png" alt="">
                      <h2>Critique</h2>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-2 mt-3 mb-3 mx-auto">
                      <img class="img-fluid" src="file/images/icon_respect.png" alt="">
                      <h2>Respect</h2>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-2 mt-3 mb-3 mx-auto">
                      <img class="img-fluid" src="file/images/icon_responsable.png" alt="">
                      <h2>Responsable</h2>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-2 mt-3 mb-3 mx-auto">
                      <img class="img-fluid" src="file/images/icon_energique.png" alt="">
                      <h2>Énergique</h2>
                  </div>
              </div>
          </div>
      </div>

    </section>

    {{-- =================== 
           NOS STATISTIQUES 
        ==================== --}}

     <!-- <section id="counts" class="counts">
      <div class="container position-relative">

        <div class="text-center title">
          <h3>NOS STATISTIQUES</h3>
        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="0" class="purecounter">232</span>
            <p>JOURS D’OUVERTURE CETTE ANNÉE</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="0" class="purecounter">521</span>
            <p>FILLES</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="0" class="purecounter">1 463</span>
            <p>GARÇONS</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="0" class="purecounter">15</span>
            <p>MOYENNE DE JEUNES ANNUELLEMENT</p>
          </div>

        </div>

      </div>
    </section> -->

    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="text-center title">
          <h3>NOS STATISTIQUES <br><br></h3>
        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="0" class="purecounter">1 232</span>
            <p>JOURS D’OUVERTURE CETTE ANNÉE</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="0" class="purecounter">64</span>
            <p>FILLES</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="0" class="purecounter">42</span>
            <p>GARÇONS</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="0" class="purecounter">15</span>
            <p>MOYENNE DE JEUNES ANNUELLEMENT</p>
          </div>

        </div>

      </div>
    </section>

    <!-- Team Section - Home Page -->
    <section id="team" class="team" id="équipe">

        <div class="container text-center mt-5 mb-5 position-relative">
          <h2>NOTRE ÉQUIPE</h2>
      </div><!-- End Section Title -->
        

      <div class="container">

        <div class="row gy-5">
          
          <div class="col-lg-4 col-md-6 member aos-init aos-animate" data-aos="fade-up" >
            <div class="member-img">
              <img src="file/images/hafedh.ben.hammouda.png" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Hafedh Ben Hamouda</h4>
              <span>Directeur</span>
              <p>je suis hafedh directeur Ayant grandi à Rouhia, je peux dire que je connais bien le quartier
                 et les gens qui y habitent. Je suis à la Maison de jeunes depuis déjà plusieurs années et je suis
                  fière de ce que l'organisme est devenu!</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="3000">
            <div class="member-img">
              <img src="file/images/bahri.sonia.png" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Bahri Sonia</h4>
              <span>Animatrice</span>
              <p>Je m'appelle Sonia et Je suis une animatrice á la maison de jeune rouhia et je suis responsable
                 du club de basket ball et de tennis
              </p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member aos-init aos-animate" data-aos="fade-up" >
            <div class="member-img">
              <img src="file/images/lamia-kareoui.png" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Karoui Lamia</h4>
              <span>Animatrice</span>
              <p>Moi c'est Lamia, je suis animatrice de Club de développement des compétences
              de vie pour les jeunes et club d'anglais</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member aos-init aos-animate" data-aos="fade-up" >
            <div class="member-img">
              <img src="file/images/monia-smii.png" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Smii Monia</h4>
              <span>Animatrice</span>
              <p>Je m'appelle Monia et je suis animatrice á la maison de jeune rouhia et je suis 
                responsable du Club de citoyenneté</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member aos-init aos-animate" data-aos="fade-up" >
            <div class="member-img">
              <img src="file/images/chourabi.png" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Chourabi Nour</h4>
              <span>Animatrice</span>
              <p>Je m'appelle nour et je suis animatrice á la maison de jeune rouhia et je suis
                responsable du club dance et sports pour les femmes</p>
            </div>
          </div><!-- End Team Member -->

          
          <div class="col-lg-4 col-md-6 member aos-init aos-animate" data-aos="fade-up" >
            <div class="member-img">
              <img src="file/images/khadhraoui.faisel.png" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Faisel Khadhraoui</h4>
              <span>Animateur</span>
              <p></p>
            </div>
          </div><!-- End Team Member -->
        </div>
      </div>

    </section><!-- End Team Section --> 

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container">

        <div class="section-header">
          <h2>Nos Activités</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters">
            <li data-filter="*" class="filter-active">Tous</li>
            <li data-filter=".filter-remodeling">Activités Sportives</li>
            <li data-filter=".filter-construction">Les Club</li>
            <li data-filter=".filter-repairs">Formations Apec</li>
            <li data-filter=".filter-design">Sortie</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="file/images/Apec-01.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="file/images/Apec-01.jpg" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="file/images/apec-02.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="file/images/apec-02.jpg" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="file/images/sport_01jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="file/images/sport_01jpg" title="Repairs 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="file/images/Apec-03.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="file/images/Apec-03.jpg" title="Repairs 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="file/images/sport-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="file/images/sport-2.jpg" title="Remodeling 2" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="file/images/anglais-01.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="file/images/anglais-01.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="file/images/anglais-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="file/images/anglais-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="file/images/formations.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="file/images/formations.jpg" title="Repairs 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="file/images/formations-deux.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="file/images/formations-deux.jpg" title="Remodeling 3" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="file/images/sports_01.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="file/images/sports_01.jpg" title="Construction 3" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="file/images/sport-05.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="file/images/sport-05.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="file/images/sport.deux.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="file/images/sport.deux.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="file/images/formation-03.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="file/images/formation-03.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="file/images/apec-11.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="file/images/apec-11.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="file/images/.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="file/images/.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="file/images/apec-11.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="file/images/apec-11.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="file/images/apec-11.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="file/images/apec-11.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="file/images/apec-11.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="file/images/apec-11.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="file/images/apec-11.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="file/images/apec-11.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="file/images/apec-11.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="file/images/apec-11.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="file/images/apec-11.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="file/images/apec-11.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

          </div>

          {{-- yyyyyyyyyggggggggggggkkkkkkkk --}}

          <main id="main">

            <!-- ======= Hero Slider Section ======= -->
            <section id="hero-slider" class="hero-slider">
              <div class="container-md">
                <div class="row">
                  <div class="col-12">
                    <div class="swiper sliderFeaturedPosts">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('file/images/nous.jpg');">
                            <div class="img-bg-inner">
                              <h2>QU'EST-CE QU'UNE MAISON DE JEUNES ?</h2>
                              <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                « C’est un endroit où les jeunes peuvent se faire de nouveaux amis. Une place où tu peux avoir du confort, 
                                les animateurs peuvent toujours nous soutenir et nous sentons qu’ils seront toujours présents pour nous. 
                                Tout le monde s’accepte, c’est comme une grande famille. Divers sujets de prévention y sont offerts 
                                (toxicomanie). Il y a beaucoup d’activités que le groupe de jeunes choisit. » —
                                <i class="bi bi-quote quote-icon-left"></i>
                              </p>
                            </div>
                          </a>
                        </div>
        
                        <div class="swiper-slide">
                          <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('file/images/nous.jpg');">
                            <div class="img-bg-inner">
                              <h2>QU'EST-CE QU'UNE MAISON DE JEUNES ?</h2>
                              <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                            « C’est une maison qui aide les jeunes à s’améliorer, à développer leur capacité,
                             leur mentalité et leur esprit critique. » —
                            <i class="bi bi-quote quote-icon-right"></i>
                          </p>
                            </div>
                          </a>
                        </div>
        
                        <div class="swiper-slide">
                          <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('file/images/nous.jpg');">
                          <div class="img-bg-inner">
                              <h2>QU'EST-CE QU'UNE MAISON DE JEUNES ?</h2>
                              <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                            « Un endroit où les jeunes peuvent se sentir bien, où on peut venir quand on a besoin de parler 
                            quand on ne veut pas rentrer chez nous, et se rassembler. Grâce aux intervenants et aux activités, 
                            on peut devenir de meilleurs citoyens. » —
                            <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                          </a>
                        </div>
        
                        <div class="swiper-slide">
                          <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('file/images/nous.jpg');">
                          <div class="img-bg-inner">
                              <h2>QU'EST-CE QU'UNE MAISON DE JEUNES ?</h2>
                              <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                    « Un milieu de vie où les jeunes peuvent s’épanouir par divers moyens. » —
                    <i class="bi bi-quote quote-icon-right"></i>
                              </p>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="custom-swiper-button-next">
                        <span class="bi-chevron-right"></span>
                      </div>
                      <div class="custom-swiper-button-prev">
                        <span class="bi-chevron-left"></span>
                      </div>
        
                      <div class="swiper-pagination"></div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- file/images/background-slide.png -->

            

          {{-- Testimonials --}}

    <section class="testimonial">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
                  <ol class="carousel-indicators tabs">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                          <figure>
                              <img src="file/images/un.jfif" class="img-fluid" alt="">
                          </figure>
                      </li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1">
                          <figure>
                              <img src="file/images/deux.png" class="img-fluid" alt="">
                          </figure>
                      </li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2">
                          <figure>
                              <img src="file/images/trois.jfif" class="img-fluid" alt="">
                          </figure>
                      </li>
                  </ol>
              </div>
              <div class="col-lg-6 d-flex justify-content-center align-items-center">
                  <div id="carouselExampleIndicators" data-interval="false" class="carousel slide" data-ride="carousel">
                      <h1>TESTIMONIALS</h1>
                      <h3>les jeunes sont invités à donner leur avis</h3>
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                              <div class="quote-wrapper">
                                  {{-- <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                            « C’est une maison qui aide les jeunes à s’améliorer, à développer leur capacité, leur mentalité et leur esprit critique. » —
                            <i class="bi bi-quote quote-icon-right"></i>
                                  </p> --}}
                                  <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    « les animateurs Cool, plaisant, encourageant, ils nous aident à poursuivre nos rêves,
                                    ils nous conseillent et nous rendre responsables. Ils nous aident dans nos travaux scolaires
                                     et savent que notre priorité c’est nos études. »
                                    <i class="bi bi-quote quote-icon-right"></i>
                                  </p>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="quote-wrapper">
                                  {{-- <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                            « Un endroit où les jeunes peuvent se sentir bien, où on peut venir quand on a besoin de parler quand on ne veut pas rentrer chez nous, et se rassembler. Grâce aux intervenants et aux activités, on peut devenir de meilleurs citoyens. » —
                            <i class="bi bi-quote quote-icon-right"></i>
                                  </p> --}}
                                  <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    « J’aime qu’il y ait des règles et du respect. J’aime qu’il y ait des activités
                                     et des voyages fournis par la MDJ qui permettent de rencontrer de nouvelles personnes. »
                                    <i class="bi bi-quote quote-icon-right"></i>
                                  </p>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="quote-wrapper">
                                  {{-- <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                    « Un milieu de vie où les jeunes peuvent s’épanouir par divers moyens. » —
                    <i class="bi bi-quote quote-icon-right"></i>
                                  </p> --}}
                                  <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    « J’aimerais donner des conseils aux nouveaux jeunes et les aider sur les situations de la vie.
                                     Tout comme les animateurs et les anciens jeunes ont fait pour nous. »
                    <i class="bi bi-quote quote-icon-right"></i>
                                  </p>

                              </div>
                          </div>
                      </div>
                      <ol class="carousel-indicators indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                  </div>
              </div>
          </div>
      </div>
  </section>






    <!--The div element for the map -->

    <h2>My Google Maps </h2>
    <div class="map">
      <iframe style="border:0; width: 110%; height: 500
      px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div>

    {{-- <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
      <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
          var setting = {"query":"Maison de la Jeunesse Ibn Al Jazzar, Ar-Rawhiyah, Tunisie","width":800,"height":600,"satellite":false,"zoom":12,"placeId":"ChIJMdBq1nH9-xIRG2VXnSicc_I","cid":"0xf2739c289d57651b","coords":[35.6483935,9.0546974],"lang":"fr","queryString":"Maison de la Jeunesse Ibn Al Jazzar, Ar-Rawhiyah, Tunisie","centerCoord":[35.6483935,9.0546974],"id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"1003330"};
          var d = document;
          var s = d.createElement('script');
          s.src = 'https://1map.com/js/script-for-user.js?embed_id=1003330';
          s.async = true;
          s.onload = function (e) {
            window.OneMap.initMap(setting)
          };
          var to = d.getElementsByTagName('script')[0];
          to.parentNode.insertBefore(s, to);
        })();</script><a href="https://1map.com/fr/map-embed">1 Map</a></div> --}}

    <!--  Section Title ----------- Contact ------------>

    <section id="contact" class="contact">
      {{-- <div class="container section-title aos-init aos-animate" data-aos="fade-up"> --}}
        <div class="main-title text-center mt-5 mb-5 position-relative">
        <h2>NOUS JOINDRE</h2>
      </div><!-- End Section Title -->

      <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item aos-init aos-animate">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Addresse</h3>
                  <p>Maison de jeunes ibn aljazzar Rouhia</p>
                  <p>Rouhia, 6150</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item aos-init aos-animate" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>TÉLÉPHONE</h3>
                  <br>
                  <p>+216 78 893 600</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item aos-init aos-animate" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>COURRIEL</h3>
                  <p>info@example.com</p>
                  <p>contact@example.com</p>
                </div>
              </div><!-- End Info Item -->

               <div class="col-md-6">
                <div class="info-item aos-init aos-animate" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>HEURES D'OUVERTURE</h3>
                  <p>Mardi - Dimenche</p>
                  <p>9:00AM - 05:00PM</p>
                </div>
              </div> <!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-6">
            <form action="{{url('contact_mail')}}" method="post" class="php-mail-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
              {{csrf_field()}}
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nom" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Sujets" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section>

    <!--Footer design-->

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">

    <div class="container copyright text-center mt-4">
      <p>&copy; <span>2023</span> <strong class="px-1">Maison de jeunes de Rouhia .</strong> <span>Tous droits réservés.</span></p>
      <div class="credits">

        Crée par <a href="https://www.facebook.com/profile.php?id=100039188242227">Sana Mannai</a>
      </div>
    </div>

  </footer><!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#Accueil" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

    

































  
  <!-- Vendor JS Files -->
  <script src="file/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="file/vendor/aos/aos.js"></script>
  <script src="file/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="file/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="file/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="file/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="file/vendor/php-email-form/validate.js"></script>

  {{-- Maps --}}
  <script async src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>

  
  <!-- Template Main JS File -->
  
  <script src="file/js/index.js"></script>

  <!-- maps -->
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
    defer></script>

 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>

</body>
</html>

