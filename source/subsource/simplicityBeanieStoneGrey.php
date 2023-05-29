<?php
  session_start();
  ?>
<?php
  include_once '../../subFilesHeader.php'
  ?>
        <!--Start of Free Shipping Row-->
        <div class="row">
            <div class="col">
                <h3 class="text-center bg-dark text-light " id="freeShipping">Free Shipping On Orders Over £50</h3>
            </div>
        </div>



        
        <div class="container">
            <div class="row">
                <!--Start Of Carousel-->
                <!--example taken from bootstrap website-->
                <div class="col-md-5">
                    <div id="carouselExampleControls" class="carousel slide w-75 align" data-bs-ride="carousel" style="border-color: 2px black;">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="../../assets/BAYKOST_SIMPLICITY_BEANIE_STONEGREY_1.png" class="d-block w-100 h-100" alt="BAYKOST SuperOverSized Sweats in Beige">
                          </div>
                          <div class="carousel-item">
                            <img src="../../assets/BAYKOST_SIMPLICITY_BEANIE_STONEGREY_2.png" class="d-block w-100 h-100" alt="BAYKOST SuperOverSized Sweats in Beige">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
                <!--End Of Carousel-->

                <!--Start Of Text Side(Right)-->
                <div class="col-md-7">
                    <h3><br></h3>
                    <h3 class="text-center">Simplicity Beanie Stone Grey</h3>
                    <p class="text-center" style="color:grey;">Product Code: 345ASDF</p>
                    <!--End Of Title-->                

                    <!--Start Of Reviews-->
                    <div class="text-center">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span>12 Reviews</span>
                    </div>
                    <!--End Of Reviews-->

                    <!--Start Of Size Selector Buttons-->
                    <div class="text-center">
                        <span>Select Size:</span>
                        <span><button id="xsButton" class="bg-dark text-light">XS</button></span>
                        <span><button id="sButton" class="bg-dark text-light">S</button></span>
                        <span><button id="mButton" class="bg-dark text-light">M</button></span>
                        <span><button id="lButton" class="bg-dark text-light">L</button></span>
                        <span><button id="xlButton" class="bg-dark text-light">XL</button></span>
                    </div>
                    <!--End Of Size Selector Buttons-->

                    <!--Start Of Price-->
                    <div class="text-center">
                        <h4><br></h4>
                        <h4>£15</h4>
                    </div>
                    <!--End Of Pricing-->

                    <!--Buttons for Cart, Favourites and Quantity-->
                    <div class="buttons text-center">
                        <h3><br></h3><!--Gap-->
                        <h3><br></h3><!--Gap-->

                        <!--Quantity Buttons-->
                        <form id='myform' method='POST' class='quantity' action='#'>
                            <input type='button' value='-' class='qtyminus minus bg-dark text-light' field='quantity' />
                            <input type='text' name='quantity' value='0' class='qty text-center' />
                            <input type='button' value='+' class='qtyplus plus bg-dark text-light' field='quantity' />
                            <span>Quantity</span>
                          </form>
                        <span><button class="bg-dark text-light">Add To Cart</button></span>
                        <span><button class="fa fa-heart-o bg-dark text-light">Add To Favourites</button></span>
                        
                    </div>
                    <!--End Of Buttons for Cart, Favourites and Quantity-->

                    <!--Start Of Description-->
                    <div class="text-center">
                        <span>Description<button class="fa fa-arrow-circle-down bg-dark text-light" onclick="myFunction()"></button></span>
                        <div id="myDIV" style="display:none;"><p><br>Keep it simple with the basic beanie. <br>Nothing over the top. <bR>Sleek and minimalistic..just like this description.<br>

                            – Thick and premium material (gives that cosy feel)<br>
                            
                            – Classic turnover style<br>
                            
                            – Baykost leather label<br>
                            
                            – 100% acrylic<br></p></div>
                    </div>
                    <!--End Of Description-->

                    <!--Start Of Shipping And Returns-->
                    <div class="text-center">
                        <span>Shipping & Returns<button class="fa fa-arrow-circle-down bg-dark text-light" onclick="myFunction1()"></button></span>
                        <div id="myDIV1" style="display:none;"><p><br> - Spend £50 or over for Free Standard Shipping.<br>
                            - Free Returns on all UK orders</p></div>
                    </div>
                    <!--End Of Shipping And Returns-->
                    
                </div>
            </div>

            <!--Featured Items-->
            <div class="row">
              <div class="col text-center">
                  <h2><br></h2>
                  <h2 class="text-decoration-underline">Other Also Bought</h2>
                  <h2><br></h2>
              </div>
          </div>
          <div class="row">
              <div class="col text-center" id="card">
                  <div class="card mx-auto" style="width: 10rem;height: 15rem;background-color:grey;">
                      <img src="../../assets/BAYKOST_SUPEROVERSIZE_SWEATS_GREY_1.png" class="card-img-top" alt="BAYKOST SIMPLICITY BEANIE Pastel Peach">
                      <div class="card-body">
                        <h5 class="card-title">SuperOver Size Sweats Grey</h5>
                        <h5 class="card-title"><br></h5>
                        <h5 class="card-title text-light">£15</h5>
                        <a href="../../source/subsource/superoversizedSweatsGrey.php" class="btn btn-dark">Show Details</a>
                      </div>
                    </div>
              </div>
              <div class="col text-center" id="card">
                  <div class="card mx-auto" style="width: 10rem;height: 15rem;background-color:grey;">
                      <img src="../../assets/BAYKOST_SIMPLICITY_BEANIE_PASTELPEACH_1.png" class="card-img-top" alt="BAYKOST SIMPLICITY BEANIE Pastel Peach">
                      <div class="card-body">
                        <h5 class="card-title">Simplicity Beanie - Pastel Peach</h5>
                        <h5 class="card-title"><br></h5>
                        <h5 class="card-title text-light">£15</h5>
                        <a href="../../source/subsource/simplicityBeaniePastelPeach.php" class="btn btn-dark">Show Details</a>
                      </div>
                    </div>
              </div>
              <div class="col text-center" id="card">
                  <div class="card mx-auto" style="width: 10rem;height: 15rem;background-color:grey;">
                      <img src="../../assets/BAYKOST_HYDRATOR_1.png" class="card-img-top" alt="BAYKOST SIMPLICITY BEANIE Pastel Peach">
                      <div class="card-body">
                        <h5 class="card-title">Hydrator</h5>
                        <h5 class="card-title"><br></h5>
                        <h5 class="card-title"><br></h5>
                        <h5 class="card-title"><br></h5>
                        <h5 class="card-title"><br></h5>
                        <h5 class="card-title text-light">£15</h5>
                        <a href="../../source/subsource/hydrator.php" class="btn btn-dark">Show Details</a>
                      </div>
                    </div>
              </div>
              <div class="col text-center" id="card">
                  <div class="card mx-auto" style="width: 10rem;height: 15rem;background-color:grey;">
                      <img src="../../assets/BAYKOST_SIMPLICITY_BEANIE_BABYBLUE_1.png" class="card-img-top" alt="BAYKOST SIMPLICITY BEANIE Pastel Peach">
                      <div class="card-body">
                        <h5 class="card-title">Simplicity Beanie - Baby Blue</h5>
                        <h5 class="card-title"><br></h5>
                        <h5 class="card-title text-light">£15</h5>
                        <a href="../../source/subsource/simplicityBeanieBabyBlue.php" class="btn btn-dark">Show Details</a>
                      </div>
                    </div>
              </div>
          </div>
          <!--End Of Features-->
        </div>
        <!--End Of Container-->
        <?php
          include_once '../../subFilesFooter.php'
          ?>
        
        <!--Bootstrap Java Script-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="../../js/productPage.js" async defer></script>
    </body>
    
</html>
