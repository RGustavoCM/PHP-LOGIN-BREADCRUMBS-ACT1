<?php
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if($_SESSION["username"] == "admin"){
    header("location: ../cliente/homeadmin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Entrega De Mi Global</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="../assets/img/apple-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
        <!-- Load Require CSS -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font CSS -->
        <link href="../assets/css/boxicon.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
        <!-- Load Tempalte CSS -->
        <link rel="stylesheet" href="../assets/css/templatemo.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="../assets/css/custom.css">
    <!--
        
    TemplateMo 561 Purple Buzz
    
    https://templatemo.com/tm-561-purple-buzz
    
    -->
    </head>

<body>
    <!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="home.php">
                <i class='bx bx-task bx-sm text-dark'></i>
                <span class="text-dark h4">Actividad</span> <span class="text-primary h4">Uno</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="home.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="servicios.php">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="contacto.php">Contáctanos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="ubi.php">Ubicación</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <a class="nav-link" href="find.php"><i class='bx bx-search-alt-2 bx-sm bx-tada-hover text-primary'></i></a>
                    <a class="nav-link" href="reset-password.php"><i class='bx bx-cog bx-sm text-primary'></i></a>
                    <a class="nav-link" href="logout.php"><i class='bx bx-log-out bx-sm text-primary'></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->

    <ul class="breadcrumb">
        <li><a class="text-primary " href="home.php">Inicio</a></li>
        <li><a class="text-primary "> --> </a></li>
        <li><a class="text-primary " href="servicios.php">Servicios</a></li>

      </ul>
    <!-- Start Banner Hero -->
    <section class="bg-light w-100">
        <div class="container">
            <div class="row d-flex align-items-center py-5">
                <div class="col-lg-6 text-start">
                    <h1 class="h2 py-5 text-primary typo-space-line">Servicios</h1>
                    <p class="light-300">
                       Soy TSU En Desarrollo De Software y Hago Tareas Por El Momento
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="../assets/img/banner-img-02.svg">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Hero -->


    <!-- Start Team Member -->
    <section class="container py-5">
        <div class="pt-5 pb-3 d-lg-flex align-items-center gx-5">

            <div class="col-lg-3">
                <h2 class="h2 py-5 typo-space-line">Mi Equipo</h2>
                <p class="text-muted light-300">
                    Para Esta Entrega Soy Solo Yo Pero Si Me Gusta Trabajar En Equipo!!
                </p>
            </div>

            <div class="col-lg-9 row">
                <div class="team-member col-md-4">
                    <img class="team-member-img img-fluid rounded-circle p-4" src="../assets/img/yo.jpg" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li>Ramiro Gustavo Cabrera Mendiola</li>
                        <li>TSU En Desarrollo De Software</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- End Team Member -->



    <!-- Start Progress -->
    <section class="bg-white py-5">
        <div class="container my-4">

            <h1 class="creative-heading h2 pb-3">Especialidades</h1>

            <div class="creative-content row py-3">
                <div class="col-md-5">
                    <p class="text-muted col-lg-8 light-300">
                        Soy Algo Estandard En Cuestion De Desarrollo Aqui Muestro En Porcentaje La Manera En La Que Se Podria Definir Mis Habilidades
                    </p>
                </div>
                <div class="creative-progress col-md-7">

                    <div class="row mt-4 mt-sm-2">
                        <div class="col-6">
                            <h4 class="h5">Desarrollo</h4>
                        </div>
                        <div class="col-6 text-right">66%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="row mt-4 mt-sm-2">
                        <div class="col-6">
                            <h4 class="h5">Disenio</h4>
                        </div>
                        <div class="col-6 text-right">90%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>


                    <div class="row mt-4 mt-sm-2">
                        <div class="col-6">
                            <h4 class="h5">Marketing</h4>
                        </div>
                        <div class="col-6 text-right">74%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Progress -->







    <!-- Start Footer -->
    <footer class="bg-secondary pt-4">


        <div class="w-100 bg-primary py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-start text-center text-light light-300">
                            © Copyright 2021 Gustavo Mendiola.
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-end text-center text-light light-300">
                            Diseniado Por <a rel="sponsored" class="text-decoration-none text-light" href="#" target="_blank"><strong>Gustavo</strong></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->


    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Templatemo -->
    <script src="assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="assets/js/custom.js"></script>

</body>

</html>