<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <!--BAYKOST Shopping Website by Bradley Smith(19110956)-->

        <!--Meta Data-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Bootstrap Version 5.3 - CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!--FAVICONS for Most Compatible Search Engines-->
        <link rel="apple-touch-icon" sizes="57x57" href="../favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="../favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../favicons/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!--End Of Favicons Compatibility-->

        <link rel="stylesheet" hre="/css/styles.css">

        <!--Title of my page-->
        <title>BAYKOST &dash; Error 404</title>

    </head>

    <body>

        <!--Navbar with Resizing Using Bootstrap-->
        <nav class="navbar navbar-fixed-top navbar-expand-sm navbar-light bg-light">
            <div class="container">
                <a href="../index.php"
                class="navbar-brand mb-0 h1">
                <img 
                class="d-inline-block align-top"
                src="../assets/short_logo.png" width="30px" height="30px">BAYKOST</a>

                <button 
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                class="navbar-toggler"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle Navigation"><span class="navbar-toggler-icon"></span></button>
                
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a href="../index.php" class="nav-link ">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="../source/shop.php" class="nav-link">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a href="../source/brand.php" class="nav-link">Brand</a>
                        </li>
                    </ul>
                </div>
                <!--Search Form, Login and Cart Icons-->
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search BAYKOST" aria-label="Search">
                    <button class="btn btn-outline-dark" id="searchButton"type="submit">Search</button>
                </form>
                <div class="justify-content-center">
                    <a href="../source/login.php"><img src="../assets/account_icon.png" width="50px" height="50px"></a>
                    <a href="../source/cart.php" alt="shopping cart"><img src="../assets/basket_icon.png" width="40px" height="40px"></a>
                </div>
            </div>
        </nav>
        <!--End Of Navbar-->
        <h1><br></h1>
        <h1 class="text-center text-decoration-underline">Error 404 Page Not Found</h1>

        <!--Bootstrap Java Script-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>