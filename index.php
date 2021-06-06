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
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
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


                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

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
                    <button type="button" class="btn btn-link link-button__header px-3 me-2">
                        Iniciar Sesión
                    </button>
                    <button type="button" class="btn btn-primary button__header me-3">
                        Crear una cuenta
                    </button>
                    <a
                            class="btn btn-dark px-3"
                            href="https://github.com/mdbootstrap/mdb-ui-kit"
                            role="button"
                    ><i class="fab fa-github"></i
                        ></a>
                </div>

            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
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
            class="carousel slide carousel-fade"
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
            <button
                    type="button"
                    data-mdb-target="#carouselBasicExample"
                    data-mdb-slide-to="2"
                    aria-label="Slide 3"
            ></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
                <img
                        src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg"
                        class="d-block w-100"
                        alt="..."
                />
                <div class="carousel-caption d-none d-md-block d-flex justify-content-center align-items-center h-50">

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

            <!-- Single item -->
            <div class="carousel-item">
                <img
                        src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg"
                        class="d-block w-100"
                        alt="..."
                />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img
                        src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg"
                        class="d-block w-100"
                        alt="..."
                />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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



</header>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>