<?php
//Initialize the session
session_start();
 


//Check if the user is already logged in, if yes then redirect them to their account page instead of the login page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../source/accountDemo.php");
    exit;
}
 
//Include config file
require_once "../includes/config.php";
 
//Define variables and initialize with empty values so they can start as blank then the values will change depending on the different errors shown
$username = $password = "";
$usernameErr = $passwordErr = $loginErr = "";
 
//Processing form data when form is submitted usign submit variable from the button.
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    //Check if username is empty if so will return error
    if(empty(trim($_POST["username"]))){
        $usernameErr = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    //Check if password is empty
    if(empty(trim($_POST["password"]))){
        $passwordErr = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    //CHECK users details against the details of any mantching user in the database.
    if(empty($usernameErr) && empty($passwordErr)){
        //Prepare a select statement. This is done to avoid SQL code getting input into the text input and running.
        //EG. Drop Users would remove the entire
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            //Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $username;
            
            //Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                //Store result
                mysqli_stmt_store_result($stmt);
                
                //Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    //Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            //Password is correct, so start a new session
                            session_start();
                            
                            //Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            //Redirect user to account page
                            header("location: ../source/accountDemo.php");
                        } else{
                            //If the password is not valid then the error messaage that is displayed is ...
                            $loginErr = "Invalid username or password.";
                        }
                    }
                } else{

                    //If the USername doesnt exsist it will sisplay this error message.
                    $loginErr = "Invalid username or password.";
                }
            } else{
                echo "Error Please Try again";
            }

            //Close statement in the DataBase Connection
            mysqli_stmt_close($stmt);
        }
    }
    
    //Close connection to the database
    mysqli_close($conn);
}
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
        <!--End Of Favicons Compatibility-->

        <link rel="stylesheet" hre="../css/styles.css">
        <link rel="stylesheet" href="../css/logIn.css">

        <!--Title of my page-->
        <title>BAYKOST &dash; Log-In</title>

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

        <!--Creat Account Overlay Starts Here-->
        <div id="form">
          <div class="container text-center input-control">
          <h1>Log In</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <?php 
                if(!empty($login_err)){
                echo '<div class="alert alert-danger">' . $login_err . '</div>';
                }        
                ?>

                <label>Username</label>
                <!--If the USername input is invalid then the Error Message becomes visible -->
                <input type="text" name="username" class="form-control <?php echo (!empty($usernameErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $usernameErr; ?></span>


              <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($passwordErr)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $passwordErr; ?></span>


              <button type="submit" name="submit" class="bg-dark text-light" value="Login">Log In</button>
                <div id="creatAccountPrompt">
                    <p class="text-align-center" >Don't have an account? <br><a href="../source/createAccount.php">Create Account Here?</a></p>
                    <a href="../source/forgotPassword.php">Reset Password?</a>
                </div>
            </form>
          </div>
        </div>

        <h2><br></h2>
        <h2><br></h2>
        <h2><br></h2>
        <!--End of Login Overlay-->
        <!--No HEader On Login File -->

        <!--Bootstrap Java Script-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>