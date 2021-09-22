<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Portafolio de Proyectos</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Luis Angel</a>
                <button class="text-white rounded navbar-toggler text-uppercase font-weight-bold bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="mx-0 nav-item mx-lg-1"><a class="px-0 py-3 rounded nav-link px-lg-3" href="#portfolio">PORTAFOLIO</a></li>
                        <li class="mx-0 nav-item mx-lg-1"><a class="px-0 py-3 rounded nav-link px-lg-3" href="#about">QUIEN SOY</a></li>
                        <li class="mx-0 nav-item mx-lg-1"><a class="px-0 py-3 rounded nav-link px-lg-3" href="#contact">CONTACTAME</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="text-center text-white masthead">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="mb-5 masthead-avatar" src="assets/img/avataaars.svg" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="mb-0 masthead-heading text-uppercase">Ing. Luis Angel</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="mb-0 masthead-subheading font-weight-light">Ingeniero programador de apps  y full stack</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                
                <!-- Portfolio Section Heading-->
                <h2 class="mb-0 text-center page-section-heading text-uppercase text-secondary">Portafolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    @yield('content')                   
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="mb-0 text-white page-section bg-primary" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="text-center text-white page-section-heading text-uppercase">Sobre Mi</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Originario del estado de Veracruz, Egresado de 2015 del Instituto Tecnologico Superior de Zongolica</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Autodidacta y perseverante</p></div>
                </div>
                <!-- About Section Button-->
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="mb-0 text-center page-section-heading text-uppercase text-secondary">Contactame</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="mb-5 text-center">
                                <label for="name" >luis.w0587@gmail.com</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="mb-3 text-center">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="mb-3 text-center text-danger">Error sending message!</div></div>
                            <!-- Submit Button-->
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="text-center footer">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="mb-5 col-lg-4 mb-lg-0">
                        <h4 class="mb-4 text-uppercase">Localizacion</h4>
                        <p class="mb-0 lead">
                            CARR. A MORELIA
                            <br />
                            Tlajomulco de Zuñiga Jalisco
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="mb-5 col-lg-4 mb-lg-0">
                        <h4 class="mb-4 text-uppercase">Around the Web</h4>
                        <a class="mx-1 btn btn-outline-light btn-social" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="mx-1 btn btn-outline-light btn-social" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="mx-1 btn btn-outline-light btn-social" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="mx-1 btn btn-outline-light btn-social" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="mb-4 text-uppercase">About Freelancer</h4>
                        <p class="mb-0 lead">
                            Freelance is a free to use, MIT licensed Bootstrap theme created by
                            <a href="http://startbootstrap.com">Start Bootstrap</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="py-4 text-center text-white copyright">
            <div class="container"><small>Copyright &copy; Your Website 2021</small></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
   
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
