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
    <script src = "https://maps.googleapis.com/maps/api/js"></script>
      
    <script>
       function loadMap() {
          
          var mapOptions = {
             center:new google.maps.LatLng(17.609993, 83.221436), 
             zoom:12, 
             mapTypeId:google.maps.MapTypeId.ROADMAP
          };
              
          var map = new google.maps.Map(document.getElementById("sample"),mapOptions);
       }
          
       google.maps.event.addDomListener(window, 'load', loadMap);
    </script>
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
      <li><a class="text-primary "> --> </a></li>
      <li><a class="text-primary " href="contacto.php">Contacto</a></li>
      <li><a class="text-primary "> --> </a></li>
      <li><a class="text-primary " href="ubi.php">Ubicacion</a></li>
    </ul>

    <div class="container py-5">
        <div class="row d-flex justify-content-center text-center">
            <div id = "sample" style = "width:580px; height:400px;">
            </div>
        </div>
    </div>




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