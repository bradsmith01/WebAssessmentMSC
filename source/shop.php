<?php
  session_start();
  ?>
<?php
  include_once '../mainFilesHeader.php'
  ?>

        <!--Title of Page-->
        <div class="row align-items-center" style="background: grey;">
            <div class="col text-center">
                <h2 class="text-decoration-underline text-light">Shop</h2>
                <p class="text-light">Free Shipping on Orders over £50</p>
                <h1 class="text-light">___________________________________________</h1>
            </div>
        </div>
        <!--End of Title-->
        
        <!--Start of Sort and Category-->
        <!--Sort-->
        <div class="row"style="background: grey;">
            <div class="col text-center">
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Sort
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Recommended</a></li>
                    <li><a class="dropdown-item" href="#">Whats New</a></li>
                    <li><a class="dropdown-item" href="#">Price - High to Low</a></li>
                    <li><a class="dropdown-item" href="#">Price - Low to High</a></li>
                </ul>
            </div>
        </div>
            <!--End of Sort-->

            <!--Category-->
            <div class="col text-center">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                      <li><a class="dropdown-item" href="#">Bundles</a></li>
                      <li><a class="dropdown-item" href="#">Hoodies</a></li>
                      <li><a class="dropdown-item" href="#">Sweats</a></li>
                      <li><a class="dropdown-item" href="#">Tee's</a></li>
                      <li><a class="dropdown-item" href="#">Jackets</a></li>
                      <li><a class="dropdown-item" href="#">Accessories</a></li>
                    </ul>
                  </div>
            </div>
            <!--End of Category-->
        </div>
        <!--End of Sort and Category-->
        
        <!--Start of shopping Items-->
        <div class="row d-flex">
            <!--Item 1 in the Row-->
            <h3><br></h3>
            <div class="col text-center" id="card " >
                <div class="card mx-auto" style="width: 18rem;background-color:grey;">
                    <img src="../assets/BAYKOST_SUPEROVERSIZE_HOODIE_BEIGE_2.png" class="card-img-top" alt="BAYKOST SUPEROVERSIZED HOODIE BEIGE">
                    <div class="card-body">
                      <h5 class="card-title">SuperOverSized Bundle Beige</h5>
                      <h5 class="card-title text-light">£70</h5>
                      <a href="../source/subsource/superoversizedBundleBeige.php" class="btn btn-dark">Show Details</a>
                    </div>
                  </div>
            </div>
            <!--Item 2 in the Row-->
            <div class="col text-center" id="card">
                <div class="card mx-auto" style="width: 18rem;background-color:grey;">
                    <img src="../assets/BAYKOST_SUPEROVERSIZE_HOODIE_GREY_4.png" class="card-img-top" alt="BAYKOST SUPEROVERSIZED HOODIE BEIGE">
                    <div class="card-body">
                      <h5 class="card-title">SuperOverSized Bundle Grey</h5>
                      <h5 class="card-title text-light">£70</h5>
                      <a href="../source/subsource/superoversizedBundleGrey.php" class="btn btn-dark">Show Details</a>
                    </div>
                  </div>
            </div>
            <!--Item 3 in the Row-->
            <div class="col text-center" id="card">
                <div class="card mx-auto" style="width: 18rem;background-color:grey;">
                    <img src="../assets/BAYKOST_SUPEROVERSIZE_SWEATS_BEIGE_1.png" class="card-img-top" alt="BAYKOST SUPEROVERSIZED SWEATS GREY ">
                    <div class="card-body">
                      <h5 class="card-title">SuperOverSized Sweats Beige</h5>
                      <h5 class="card-title text-light">£45</h5>
                      <a href="../source/subsource/superoversizedSweatsBeige.php" class="btn btn-dark">Show Details</a>
                    </div>
                  </div>
            </div>
            <!--Item 4 in the Row-->
            <div class="col text-center" id="card">
                <div class="card mx-auto" style="width: 18rem;background-color:grey;">
                    <img src="../assets/BAYKOST_SUPEROVERSIZE_SWEATS_GREY_1.png" class="card-img-top" alt="BAYKOST SUPEROVERSIZED SWEATS Grey">
                    <div class="card-body">
                      <h5 class="card-title">SuperOverSized Sweats Grey</h5>
                      <h5 class="card-title text-light">£45</h5>
                      <a href="../source/subsource/superoversizedSweatsGrey.php" class="btn btn-dark">Show Details</a>
                    </div>
                  </div>
            </div>
        </div>

        <!--Line 2 of Shopping Items-->
        <div class="row d-flex">
          <h3><br></h3>
          <!--Item 1 in the Row-->
          <div class="col text-center" id="card">
              <div class="card mx-auto" style="width: 18rem;background-color:grey;">
                  <img src="../assets/BAYKOST_SUPEROVERSIZE_HOODIE_BEIGE_1.png" class="card-img-top" alt="BAYKOST SUPEROVERSIZED HOODIE BEIGE">
                  <div class="card-body">
                    <h5 class="card-title">SuperOverSized Hoodie Beige</h5> 
                    <h5 class="card-title text-light">£50</h5>
                    <a href="../source/subsource/superoversizedHoodieBeige.php" class="btn btn-dark">Show Details</a>
                  </div>
                </div>
          </div>
          <!--Item 2 in the Row-->
          <div class="col text-center" id="card">
              <div class="card mx-auto" style="width: 18rem;background-color:grey;">
                  <img src="../assets/BAYKOST_SUPEROVERSIZE_HOODIE_GREY_1.png" class="card-img-top" alt="BAYKOST SUPEROVERSIZED HOODIE Grey">
                  <div class="card-body">
                    <h5 class="card-title">SuperOverSized Hoodie Grey</h5>
                    <h5 class="card-title text-light">£50</h5>
                    <a href="../source/subsource/superoversizedHoodieGrey.php" class="btn btn-dark">Show Details</a>
                  </div>
                </div>
          </div>
          <!--Item 3 in the Row-->
          <div class="col text-center" id="card">
              <div class="card mx-auto" style="width: 18rem;background-color:grey;">
                  <img src="../assets/BAYKOST_SUPEROVERSIZE_TEE_BLACK_1.png" class="card-img-top" alt="BAYKOST SUPEROVERSIZED Tee Black ">
                  <div class="card-body">
                    <h5 class="card-title">SuperOverSized Black Tee</h5>
                    <h5 class="card-title"><br></h5>
                    <h5 class="card-title text-light">£25</h5>
                    <a href="../source/subsource/superoversizedTeeBlack.php" class="btn btn-dark">Show Details</a>
                  </div>
                </div>
          </div>
          <!--Item 4 in the Row-->
          <div class="col text-center" id="card">
              <div class="card mx-auto" style="width: 18rem;background-color:grey;">
                  <img src="../assets/BAYKOST_WELFARE_HOODIE_WHITE_1.png" class="card-img-top" alt="BAYKOST WELFARE HOODIE WHITE">
                  <div class="card-body">
                    <h5 class="card-title">Welfare Hoodie White</h5>
                    <h5 class="card-title"><br></h5>
                    <h5 class="card-title text-light">£60</h5>
                    <a href="../source/subsource/welfareHoodieWhite.php" class="btn btn-dark">Show Details</a>
                  </div>
                </div>
          </div>
        </div>

        <!--Line 3 of Shopping Items-->
        <div class="row d-flex">
          <h3><br></h3>
          <!--Item 1 in the Row-->
          <div class="col text-center" id="card">
            <div class="card mx-auto" style="width: 18rem;background-color:grey;">
              <img src="../assets/BAYKOST_WELFARE_HOODIE_BLACK_1.png" class="card-img-top" alt="BAYKOST WELFARE HOODIE BLACK">
              <div class="card-body">
                <h5 class="card-title">Welfare Hoodie Black</h5>
                <h5 class="card-title"><br></h5> 
                <h5 class="card-title text-light">£60</h5>
                <a href="../source/subsource/welfareHoodieBlack.php" class="btn btn-dark">Show Details</a>
              </div>
            </div>
          </div>
          <!--Item 2 in the Row-->
          <div class="col text-center" id="card">
            <div class="card mx-auto" style="width: 18rem;background-color:grey;">
              <img src="../assets/BAYKOST_PERSIST_LONG_SLEEVE_TEE_MARLGREY_1.png" class="card-img-top" alt="BAYKOST PERSIST LONG SLEEVE TEE MARL GREY">
              <div class="card-body">
                <h5 class="card-title">Persist Long Sleeve Tee Marl Grey</h5>
                <h5 class="card-title text-light">£25</h5>
                <a href="../source/subsource/persistLongSleeveTeeMarlGrey.php" class="btn btn-dark">Show Details</a>
              </div>
            </div>
          </div>
          <!--Item 3 in the Row-->
          <div class="col text-center" id="card">
            <div class="card mx-auto" style="width: 18rem;background-color:grey;">
              <img src="../assets/BAYKOST_PERSIST_LONG_SLEEVE_TEE_BLACK_1.png" class="card-img-top" alt="BAYKOST PERSIST LONG SLEEVE TEE BLACK">
              <div class="card-body">
                <h5 class="card-title">Persist Long Sleeve Tee Black</h5>
                <h5 class="card-title text-light">£25</h5>
                <a href="../source/subsource/persistLongSleeveTeeBlack.php" class="btn btn-dark">Show Details</a>
              </div>
            </div>
          </div>
          <!--Item 4 in the Row-->
          <div class="col text-center" id="card">
            <div class="card mx-auto" style="width: 18rem;background-color:grey;">
              <img src="../assets/BAYKOST_LIMITED_EDITION_DENIM_BLUE_1.png" class="card-img-top" alt="BAYKOST LIMITED EDITION DENIM JACKET">
              <div class="card-body">
                <h5 class="card-title">Limited Edition Blue Denim Jacket</h5>
                <h5 class="card-title text-light">£60</h5>
                <a href="../source/subsource/limitedEditionDenimJacket.php" class="btn btn-dark">Show Details</a>
              </div>
            </div>
          </div>
        </div>

        <!--Line 4 of Shopping Items-->
        <div class="row d-flex">
          <h3><br></h3>
        <!--Item 1 in the Row-->
          <div class="col text-center" id="card">
            <div class="card mx-auto" style="width: 18rem;background-color:grey;">
              <img src="../assets/BAYKOST_WELFARE_SHORTS_BLACK_1.png" class="card-img-top" alt="BAYKOST WELFARE SHORTS Black">
              <div class="card-body">
                <h5 class="card-title">Welfare Shorts Black</h5> 
                <h5 class="card-title"><br></h5>
                <h5 class="card-title text-light">£25</h5>
                <a href="../source/subsource/welfareShortsBlack.php" class="btn btn-dark">Show Details</a>
              </div>
            </div>
          </div>
          <!--Item 2 in the Row-->
          <div class="col text-center" id="card">
            <div class="card mx-auto" style="width: 18rem;background-color:grey;">
              <img src="../assets/BAYKOST_ORIGINAL_SOCKS_1.png" class="card-img-top" alt="BAYKOST 3 PACK OF ORIGINAL SOCKS WHITE">
              <div class="card-body">
                <h5 class="card-title">Original 3 Pack of White Socks</h5>
                <h5 class="card-title text-light">£12</h5>
                <a href="../source/subsource/originalSocksThreePack.php" class="btn btn-dark">Show Details</a>
              </div>
            </div>
          </div>
          <!--Item 3 in the Row-->
          <div class="col text-center" id="card">
            <div class="card mx-auto" style="width: 18rem;background-color:grey;">
              <img src="../assets/BAYKOST_CLASSIC_SUED_CAP_1.png" class="card-img-top" alt="BAYKOST SUEDE CAP WHITE">
              <div class="card-body">
                <h5 class="card-title">Original Suede Cap White</h5>
                <h5 class="card-title"><br></h5>
                <h5 class="card-title text-light">£25</h5>
                <a href="../source/subsource/classicSuedeCapWhite.php" class="btn btn-dark">Show Details</a>
              </div>
            </div>
          </div>
          <!--Item 4 in the Row-->
          <div class="col text-center" id="card">
            <div class="card mx-auto" style="width: 18rem;background-color:grey;">
              <img src="../assets/BAYKOST_SIMPLICITY_BEANIE_SNOWWHITE_1.png" class="card-img-top" alt="BAYKOST SIMPLICITY BEANIE SNOW WHITE">
              <div class="card-body">
                <h5 class="card-title">Simplicity Beanie - Snow White</h5>
                <h5 class="card-title text-light">£15</h5>
                <a href="../source/subsource/simplicityBeanieSnowWhite.php" class="btn btn-dark">Show Details</a>
              </div>
            </div>
          </div>
        </div>

        <!--Line 5 of Shopping Items-->
        <div class="row d-flex">
          <h3><br></h3>
          <!--Item 1 in the Row-->
            <div class="col text-center" id="card">
              <div class="card mx-auto" style="width: 18rem;background-color:grey;">
                <img src="../assets/BAYKOST_SIMPLICITY_BEANIE_STONEGREY_1.png" class="card-img-top" alt="BAYKOST SIMPLICITY BEANIE STONE GREY">
                <div class="card-body">
                  <h5 class="card-title">Simplicity Beanie - Stone Grey</h5> 
                  <h5 class="card-title"><br></h5>
                  <h5 class="card-title text-light">£15</h5>
                  <a href="../source/subsource/simplicityBeanieStoneGrey.php" class="btn btn-dark">Show Details</a>
                </div>
              </div>
            </div>
          <!--Item 2 in the Row-->
          <div class="col text-center" id="card">
            <div class="card mx-auto" style="width: 18rem;background-color:grey;">
              <img src="../assets/BAYKOST_SIMPLICITY_BEANIE_MARLGREY_1.png" class="card-img-top" alt="BAYKOST SIMPLICITY BEANIE MARL GREY">
              <div class="card-body">
                <h5 class="card-title">Simplicity Beanie - Marl Grey</h5>
                <h5 class="card-title"><br></h5>
                <h5 class="card-title text-light">£15</h5>
                <a href="../source/subsource/simplicityBeanieMarlGrey.php" class="btn btn-dark">Show Details</a>
              </div>
            </div>
          </div>
          <!--Item 3 in the Row-->
          <div class="col text-center" id="card">
            <div class="card mx-auto" style="width: 18rem;background-color:grey;">
              <img src="../assets/BAYKOST_SIMPLICITY_BEANIE_PUREBLACK_1.png" class="card-img-top" alt="BAYKOST SIMPLICITY BEANIE PURE BLACK">
              <div class="card-body">
                <h5 class="card-title">Simplicity Beanie - Pure Black</h5>
                <h5 class="card-title"><br></h5>
                <h5 class="card-title text-light">£15</h5>
                <a href="../source/subsource/simplicityBeaniePureBlack.php" class="btn btn-dark">Show Details</a>
              </div>
            </div>
          </div>
          <!--Item 4 in the Row-->
          <div class="col text-center" id="card">
            <div class="card mx-auto" style="width: 18rem;background-color:grey;">
              <img src="../assets/BAYKOST_SIMPLICITY_BEANIE_PASTELPEACH_1.png" class="card-img-top" alt="BAYKOST SIMPLICITY BEANIE Pastel Peach">
              <div class="card-body">
                <h5 class="card-title">Simplicity Beanie - Pastel Peach</h5>
                <h5 class="card-title"><br></h5>
                <h5 class="card-title text-light">£15</h5>
                <a href="../source/subsource/simplicityBeaniePastelPeach.php" class="btn btn-dark">Show Details</a>
              </div>
            </div>
          </div>
        </div>

        <!--Line 6 of Shopping Items-->
        <div class="row d-flex">
          <h3><br></h3>
          <!--Item 1 in the Row-->
            <div class="col text-center" id="card">
              <div class="card mx-auto" style="width: 18rem;background-color:grey;">
                <img src="../assets/BAYKOST_SIMPLICITY_BEANIE_BABYBLUE_1.png" class="card-img-top" alt="BAYKOST SIMPLICITY BEANIE BABY BLUE">
                <div class="card-body">
                  <h5 class="card-title">Simplicity Beanie - Baby Blue</h5> 
                  <h5 class="card-title"><br></h5>
                  <h5 class="card-title text-light">£15</h5>
                  <a href="../source/subsource/simplicityBeanieBabyBlue.php" class="btn btn-dark">Show Details</a>
                </div>
              </div>
            </div>
          <!--Item 2 in the Row-->
          <div class="col text-center" id="card">
            <div class="card mx-auto" style="width: 18rem;background-color:grey;">
              <img src="../assets/BAYKOST_SIMPLICITY_BEANIE_HOTPINK_1.png" class="card-img-top" alt="BAYKOST SIMPLICITY BEANIE HOT PINK">
              <div class="card-body">
                <h5 class="card-title">Simplicity Beanie - Hot Pink</h5>
                <h5 class="card-title"><br></h5>
                <h5 class="card-title"><br></h5>
                <h5 class="card-title text-light">£15</h5>
                <a href="../source/subsource/simplicityBeanieHotPink.php" class="btn btn-dark">Show Details</a>
              </div>
            </div>
          </div>
          <!--Item 3 in the Row-->
          <div class="col text-center" id="card">
            <div class="card mx-auto" style="width: 18rem;background-color:grey;">
              <img src="../assets/BAYKOST_HYDRATOR_1.png" class="card-img-top" alt="BAYKOST Hydrator">
              <div class="card-body">
                <h5 class="card-title">Hydrator</h5>
                <h5 class="card-title"><br></h5>
                <h5 class="card-title"><br></h5>
                <h5 class="card-title text-light">£20</h5>
                <a href="../source/subsource/hydrator.php" class="btn btn-dark">Show Details</a>
              </div>
            </div>
          </div>
        </div>
        <h1><br></h1>
        <?php
          include_once '../mainFilesFooter.php'
          ?>
           
        <!--Bootstrap Java Script-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="../../js/shop.js" async defer></script>
    </body>
</html>