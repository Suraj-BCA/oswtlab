<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vignan";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(mysqli_error($conn)){
    die("Connection failed: " .mysqli_error($conn));

}
else{
    echo "Database Connection Established!!";
}
?>