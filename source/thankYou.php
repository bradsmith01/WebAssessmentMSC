<?php 
session_start();
?>
<?php
  include_once '../mainFilesHeader.php'
  
  ?>

        <!--Start Of Thank You Message-->
        <div class="continaer text-center align-items-center" id="thankYouMessage">
            <div class="row">
                <div class="col" id="thankYouMessage">
                    <h1><br></h1>
                    <h2>Thank You For Your Order</h2>    
                </div>
            </div>
            <div class="row">
                <div class="col" id="thankYouMessage">
                    <p>Your Order will be dispatched within 2 working days.<br>You will receive a tracking email to track your parcel <br>up until it is delivered.</p>
                    <p>ORDER REFERENCE NUMBER: <a href="/source/error404.php">#123451234555</a></p>
                    <!--Break in Page-->
                    <h1><br></h1>
                    <h1><br></h1>
                    <h1><br></h1>
                    <h1><br></h1>
                    <h1><br></h1>
                    <h1><br></h1>
                    <h1><br></h1>
                    <h1><br></h1>
                    <!--End of Break In Page-->
                </div>
            </div>
        </div>
        <!--End Of Thank You Prompt-->
        <?php
          include_once '../mainFilesFooter.php'
          ?>
        
        <!--Bootstrap Java Script-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>