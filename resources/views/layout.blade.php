<?php

$has_session = session_status() == PHP_SESSION_ACTIVE;
if (!$has_session){
    session_start();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>


    <!-- Bootstrap CSS & JS -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <script src="{{url('js/bootstrap.bundle.min.js')}}" ></script>
    <!-- END Bootstrap -->

    <!-- additional  CSS  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- END additional CSS -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--  Header -->
<div class="container-fluid p-0">
    <img src = "{{url('img/banner.jpg')}}" style="width: 100%;" >
</div>
<!-- End Header -->

<!--   Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/personnages">Personnages</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Partie
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/nouvellePartie">Nouvelle partie</a></li>
                        <li><a class="dropdown-item" href="/historiquePartie">Historique des parties</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<!--  End Navbar-->

<!-- Sidenav & Body & Sidbar  -->
<div class = "container" >
    <div class ="row" style = "margin-top: 20px;">


        <!-- BODY avec 8 colonnes-->
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary" style="color:white; font-size: 18px; font-weight:bold;">
                    Partie en cours
                </div>


                       @yield('content')


            </div>
        </div>
    </div>
</div>
<br />

<script src="public/js/formSubmitAndChangeChoice.js"></script>
</body>
</html>
