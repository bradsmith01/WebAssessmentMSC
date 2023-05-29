<?php
//The Details of the Server for MYSQLi
//MySQL is not beign used as the NEwer MySQLi is more secure and uptodate. 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');//no password required
define('DB_NAME', 'testlogin');//Database name
 
//Connect to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
//Check connection if there is an error it will print the error message.
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
