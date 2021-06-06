<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>UTESA - Application Form</title>


</head>
<body>

<header>
    <!-- Intro settings -->
    <style>
        /* Default height for small devices */
        #intro-example {
            height: 400px;
        }

        /* Height for devices larger than 992px */
        @media (min-width: 992px) {
            #intro-example {
                height: 600px;
            }
        }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white nav__header">
        <div class="container-fluid">
            <button
                    class="navbar-toggler"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01"
                    aria-controls="navbarExample01"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse container" id="navbarExample01">


                <ul class="navbar-nav me-auto mb-2 mb-lg-0 " >

                    <a class="navbar-brand" href="#"><strong class="title__header">UTESA</strong></a>


                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Actividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contáctenos</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-link link-button__header btn-rounded px-3 me-2">
                        Iniciar Sesión
                    </button>
                    <button type="button" class="btn btn-primary button__header btn-rounded me-3">
                        Crear una cuenta
                    </button>
                    <a
                            class="btn btn-dark btn-rounded px-3"
                            href="https://github.com/mdbootstrap/mdb-ui-kit"
                            role="button"
                    ><i class="fab fa-github"></i
                        ></a>
                </div>

            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image
    <div
            id="intro-example"
            class="p-5 text-center bg-image"
            style="background-image: url('https://pbs.twimg.com/media/EJLz4HgXkAM4Z9V.jpg');"
    >
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">Learn Bootstrap 5 with MDB</h1>
                    <h5 class="mb-4">Best & free guide of responsive web design</h5>
                    <a
                            class="btn btn-outline-light btn-lg m-2"
                            href="#"
                            role="button"
                            rel="nofollow"

                    >Start tutorial</a
                    >
                    <a
                            class="btn btn-outline-light btn-lg m-2"
                            href="#"

                            role="button"
                    >Download MDB UI KIT</a
                    >
                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->


    <!-- Carousel wrapper -->
    <div
            id="carouselBasicExample"
            class="carousel slide carousel-fade carousel__header"
            data-mdb-ride="carousel"

    >
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button
                    type="button"
                    data-mdb-target="#carouselBasicExample"
                    data-mdb-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
            ></button>
            <button
                    type="button"
                    data-mdb-target="#carouselBasicExample"
                    data-mdb-slide-to="1"
                    aria-label="Slide 2"
            ></button>

        </div>

        <!-- Inner -->
        <div class="carousel-inner" >
            <!-- Single item -->
            <div class="carousel-item active">
                <img
                        src="img/slideshow/1.png"
                        class="d-block w-100"
                        alt="..."
                />
                <div class="carousel-caption d-none d-md-block d-flex justify-content-center align-items-center h-50" style="margin-bottom: 5rem">

                    <div class="text-white">
                        <h1 class="mb-3" style="font-family: Raleway; font-size: 75px; ">Tu carrera hacia el éxito!</h1>
                        <h5 class="mb-4">Inscribete en UTESA y se parte de la experiencia.😎</h5>
                        <a type="button" class="btn btn-warning btn-rounded btn-lg btn__slide">Inscribirme</a>
                    </div>


                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img
                        src="img/slideshow/2.png"
                        class="d-block w-100"
                        alt="..."
                />
                <div class="carousel-caption d-none d-md-block d-flex justify-content-center align-items-center h-50" style="margin-bottom: 5rem">
                    <div class="text-white">
                        <h1 class="mb-3" style="font-family: Raleway; font-size: 75px; ">Tenemos campus virtual!</h1>
                        <h5 class="mb-4">Visita nuestro campus virtual si ya eres estudiante de UTESA.😎</h5>
                        <a type="button" href="https://nube.utesa.edu/login/index.php" target="_blank" class="btn btn-warning btn-rounded btn-lg btn__slide">Campus Virtual</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button
                class="carousel-control-prev"
                type="button"
                data-mdb-target="#carouselBasicExample"
                data-mdb-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
                class="carousel-control-next"
                type="button"
                data-mdb-target="#carouselBasicExample"
                data-mdb-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel wrapper -->

    <section class="container" style="margin-top: 3rem; margin-bottom: 3rem">

        <div align="center" style="margin-bottom: 3rem">
        <h1 class="mb-3" style="font-family: Raleway; font-size: 35px; ">Carreras</h1>
        <h5 class="mb-4">Diferentes carreras universitarias.</h5>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img
                            src="https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80"
                            class="card-img-top"
                            alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">Ingeniería en Software</h5>
                        <p class="card-text">
                            Conviertete en un verdadero ingeniero del software con nuestro programa especializado en 4 años!
                        </p>
                        <button type="button" class="btn btn-primary button__header btn-rounded me-3">
                            Ver pénsum
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img
                            src="https://images.unsplash.com/photo-1593115057322-e94b77572f20?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80"
                            class="card-img-top"
                            alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">Licenciatura en derecho</h5>
                        <p class="card-text">Conviertete en un verdadero abogado con nuestro programa especializado en 4 años!</p>
                        <button type="button" class="btn btn-primary button__header btn-rounded me-3">
                            Ver pénsum
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img
                            src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                            class="card-img-top"
                            alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">Medicina</h5>
                        <p class="card-text">
                            Conviertete en un verdadero doctor con nuestro programa especializado en 20 años!
                        </p>
                        <button type="button" class="btn btn-primary button__header btn-rounded me-3">
                            Ver pénsum
                        </button>

                    </div>

                </div>
            </div>

        </div>


    </section>



    <!-- Footer -->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-facebook-f"></i
                    ></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-twitter"></i
                    ></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-google"></i
                    ></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-instagram"></i
                    ></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-linkedin-in"></i
                    ></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="fab fa-github"></i
                    ></a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Form -->
            <section class="">
                <form action="">
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center">
                        <!--Grid column-->
                        <div class="col-auto">
                            <p class="pt-2">
                                <strong>Sign up for our newsletter</strong>
                            </p>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-5 col-12">
                            <!-- Email input -->
                            <div class="form-outline form-white mb-4">
                                <input type="email" id="form5Example2" class="form-control" />
                                <label class="form-label" for="form5Example2">Email address</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-auto">
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-outline-light mb-4">
                                Subscribe
                            </button>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </form>
            </section>
            <!-- Section: Form -->

            <!-- Section: Text -->
            <section class="mb-4">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
                    repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
                    eum harum corrupti dicta, aliquam sequi voluptate quas.
                </p>
            </section>
            <!-- Section: Text -->

            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</header>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>