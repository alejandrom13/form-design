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
    <link rel="stylesheet" href="css/form.css">


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

                    <a class="navbar-brand" href="index.php"><strong class="title__header">UTESA</strong></a>


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

    <div class="navbar navbar-expand-lg navbar-light bg-light container breadcumb__header">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="#">Crear una cuenta</a></li>
                </ol>
            </nav>
        </div>
    </div>
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


    <!-- MultiStep Form -->
    <div class="multisteps-form container-fluid">
        <!--progress bar-->
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                <div class="multisteps-form__progress">
                    <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">User Info</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Address">Address</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Order Info">Order Info</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Comments">Comments        </button>
                </div>
            </div>
        </div>
        <!--form panels-->
        <div class="row">
            <div class="col-12 col-lg-8 m-auto">
                <form class="multisteps-form__form">
                    <!--single form panel-->
                    <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active " data-animation="scaleIn">
                        <h3 class="multisteps-form__title">Datos Generales</h3>
                        <br>
                        <div class="multisteps-form__content">

                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="form6Example1" class="form-control" />
                                            <label class="form-label" for="form6Example1">First name</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="form6Example2" class="form-control" />
                                            <label class="form-label" for="form6Example2">Last name</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Text input -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="form6Example3" class="form-control" />
                                    <label class="form-label" for="form6Example3">Company name</label>
                                </div>

                                <!-- Text input -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="form6Example4" class="form-control" />
                                    <label class="form-label" for="form6Example4">Address</label>
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="form6Example5" class="form-control" />
                                    <label class="form-label" for="form6Example5">Email</label>
                                </div>

                                <!-- Number input -->
                                <div class="form-outline mb-4">
                                    <input type="number" id="form6Example6" class="form-control" />
                                    <label class="form-label" for="form6Example6">Phone</label>
                                </div>

                                <!-- Message input -->
                                <div class="form-outline mb-4">
                                    <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                                    <label class="form-label" for="form6Example7">Additional information</label>
                                </div>


                                <div class="form-outline mb-4">
                                    <div class="form-outline">
                                        <input type="password" id="typePassword" class="form-control" />
                                        <label class="form-label" for="typePassword">Password</label>
                                    </div>
                                </div>

                            <div class="button-row d-flex mt-4">
                                <button class="btn btn-primary btn-block mb-4 ml-auto js-btn-next button__header" type="button" title="Next">Next</button>
                            </div>
                        </div>
                    </div>
                    <!--single form panel-->
                    <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                        <h3 class="multisteps-form__title">Your Address</h3>
                        <div class="multisteps-form__content">
                            <div class="form-row mt-4">
                                <div class="col">
                                    <input class="multisteps-form__input form-control" type="text" placeholder="Address 1"/>
                                </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col">
                                    <input class="multisteps-form__input form-control" type="text" placeholder="Address 2"/>
                                </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col-12 col-sm-6">
                                    <input class="multisteps-form__input form-control" type="text" placeholder="City"/>
                                </div>
                                <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                    <select class="multisteps-form__select form-control">
                                        <option selected="selected">State...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                    <input class="multisteps-form__input form-control" type="text" placeholder="Zip"/>
                                </div>
                            </div>
                            <div class="button-row d-flex mt-4">
                                <button class="btn btn-primary js-btn-prev button__header" type="button" title="Prev">Prev</button>
                                <button class="btn btn-primary ml-auto js-btn-next button__header" type="button" title="Next">Next</button>
                            </div>
                        </div>
                    </div>
                    <!--single form panel-->
                    <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                        <h3 class="multisteps-form__title">Your Order Info</h3>
                        <div class="multisteps-form__content">
                            <div class="row">
                                <div class="col-12 col-md-6 mt-4">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <h5 class="card-title">Item Title</h5>
                                            <p class="card-text">Small and nice item description</p><a class="btn btn-primary" href="#" title="Item Link">Item Link</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mt-4">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <h5 class="card-title">Item Title</h5>
                                            <p class="card-text">Small and nice item description</p><a class="btn btn-primary" href="#" title="Item Link">Item Link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="button-row d-flex mt-4 col-12">
                                    <button class="btn btn-primary js-btn-prev button__header" type="button" title="Prev">Prev</button>
                                    <button class="btn btn-primary ml-auto js-btn-next button__header" type="button" title="Next">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--single form panel-->
                    <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                        <h3 class="multisteps-form__title">Additional Comments</h3>
                        <div class="multisteps-form__content">
                            <div class="form-row mt-4">
                                <textarea class="multisteps-form__textarea form-control" placeholder="Additional Comments and Requirements"></textarea>
                            </div>
                            <div class="button-row d-flex mt-4">
                                <button class="btn btn-primary js-btn-prev button__header" type="button" title="Prev">Prev</button>

                                <button class="btn btn-success ml-auto button__header" type="button" title="Send" style="margin-left: 2rem">Send</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.MultiStep Form -->
</header>


<script type="text/javascript" src="js/form.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>