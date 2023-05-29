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
        <link rel="manifest" href="../manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!--End Of Favicons-->
        <link rel="stylesheet" hre="../css/styles.css">

        <!--Title of my page-->
        <title>BAYKOST &dash; Brand</title>

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
                      <li class="nav-item active">
                          <a href="../index.php" class="nav-link">Home</a>
                      </li>
                      <li class="nav-item">
                          <a href="../source/shop.php" class="nav-link">Shop</a>
                      </li>
                      <li class="nav-item">
                          <a href="../source/brand.php" class="nav-link active">Brand</a>
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
        
        <!--Start of Brand Info-->

        <div class="row">
            <div class="col">
                <h2><br></h2>
                <h2 class="text-center">Brand</h2>
                
                <h3 class="text-center">_______________</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="../assets/BAYKOST_MEASURE.avif" style='width:19rem;'>
            </div>
            <div class="col-md-6 text-center">
                <img src="../assets/BAYKOST_BRANDIMG.webp" style="width:15rem;">
            </div>
        </div>
        <!--About BAYKOST Start-->
        <div class="row">
            <div class="col">
                <span><h3 class="text-center" style="color:grey;">About </h3></span>
                <span><h3 class="text-center text-decoration-bold">BAYKOST</h3></span>
                <h4 class="text-center" style="color:grey;">Baykost. That's who we are. <br>We exist to support people Exploit Their Passion.<br>

                    The name Baykost derives from the Czech word Uzkost, <br>translating to a word that sits very close to the heart with the founder. Anxiety.<br><br>
                    
                    The founder, Jordan, believed that following and creating a lifestyle around what you do, <br>can be a pathway to a happier and healthier life, <br>and relieve many of the worries and negative beliefs we have in our minds. <br>And by following his passion for design, creation and business, <br>Baykost was born. <br>And with an aim to help as many people exploit their passion too.<br>
                    
                    Through clothes and through our message, we hope to inspire change for the good.</h4>
            </div>
        </div>
        <!--About BAYKOST End-->
        <!--Divider-->
        <div class="row">
            <div class="col">
                <h3 class="text-center"></h3>
                <h3 class="text-center">_______________</h3>
                <h3 class="text-center"></h3>
            </div>
        </div>
        <!--End of Divider-->


        <!--BAYKOST Values Start-->
        <div class="row">
            <div class="col">
                <span><h3 class="text-center" style="color:grey;">What We Value at </h3></span>
                <span><h3 class="text-center text-decoration-bold">BAYKOST</h3></span>
                <h4 class="text-center" style="color:grey;">Since starting out in a young and driven 18 year old's room back in 2020, <br>
                    we fully understand that everyone has a journey, and we're all on our own path. <br>
                    We're still early in ours, on our way to becoming not only one of the largest clothing <br>
                    brands but has the deepest connection with it's customers.<br><br>

                    HONESTY - It's the forefront of all solid relationships. <br>Honesty with everyone involved in the business and honesty with each and every customer. <br>If you're not honest, then you're living as someone or something you're not!<br><br>
                    
                    COMMUNICATION - It's great being honest, but if we can't communicate it, <br>what's the point! <br>Being able to communicate honestly with our customers is TOP priority. <bR>From customers service to promoting our message on the socials!<br><br>
                    
                    KINDNESS - This triumphs all. Simple as. Makes your world better and everyone else's world better.<br><br>
                    
                    DRIVE - No, we don't mean how well you can drive. <br>We mean the burning desire to improve and become a better version of you. <br>And to do something you truly love and further fuels that drive. <br>There may be different ingredients that make up the drive within us, <br>but we're all on the same path to become that better version of ourselves, <br>and to find and exploit our passion.</h4>
            </div>
        </div>
        <h1><br></h1>

        <!--Start Of Footer-->
        <footer class="text-center text-lg-start bg-light text-muted">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
              <!-- Left -->
              <div class="me-5 d-none d-lg-block">
                <span>Find Us On Social Media:</span>
              </div>
              <!-- Left -->
          
              <!-- Right -->
              <div>
                <!--Facebook-->
                <a href="https://en-gb.facebook.com" class="me-4 text-reset">
                  <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                  </svg></i>
                </a>
                <!--Instagram-->
                <a href="https://www.instagram.com" class="me-4 text-reset">
                  <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                  </svg></i>
                </a>
                <!--Instagram-->
                <a href="https://www.tiktok.com" class="me-4 text-reset">
                  <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                    <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
                  </svg></i>
                </a>
              </div>
              <!-- Right -->
            </section>
            <!-- Section: Social media -->
          
            <!--Section: Links-->
            <section class="">
              <div class="container text-center text-md-start mt-5">
                <!--Grid row-->
                <div class="row mt-3">
                  <!--Grid column-->
                  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!--Content-->
                    <h6 class="text-uppercase fw-bold mb-4">
                      <i class="fas fa-gem me-3"></i>BAYKOST
                    </h6>
                    <p>
                      Exploit Your Passion.
                    </p>
                  </div>
                  <!--Grid column-->
          
                  <!--Grid column-->
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!--Links-->
                    <h6 class="text-uppercase fw-bold mb-4">
                      Product Lines
                    </h6>
                    <p>
                      <a href="../source/subsource/superoversizedBundleGrey.php" class="text-reset">SuperOverSized®</a>
                    </p>
                    <p>
                      <a href="../source/subsource/welfareHoodieBlack.php" class="text-reset">Welfare</a>
                    </p>
                  </div>
                  <!--Grid column-->
          
                  <!--Grid column-->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                      Useful links
                    </h6>
                    <p>
                      <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Orders</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Help</a>
                    </p>
                  </div>
                  <!--Grid column-->
          
                  <!-- Grid column -->
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contact Info</h6>
                    
                    <p><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                      <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                    </svg></i>109 Comiston Terrace, Edinburgh, <br>Midlothian, EH10 6AQ, UK.</p>
                    <p>
                      <!--Letter Icon Next To Email-->
                      <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                      </svg></i>
                      info@baykost.com
                    </p>
                    <p><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                      <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg></i> + 01 234 567 88</p>
                    <p><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                      <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg></i> + 01 234 567 89</p>
                  </div>
                  <!-- Grid column -->
                </div>
                <!-- Grid row -->
              </div>
            </section>
            <!-- Section: Links  -->
          
            <!--Start of Copyright-->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
              © 2023 Copyright:
              <a class="text-reset fw-bold" href="https://baykost.com/">baykost.com</a>
            </div>
            <!--End of Copyright-->
          </footer>
          <!--End of Footer-->
        <!--Bootstrap Java Script-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>