<?php
$servername="localhost";
$username="root";
$password="";
$dbname="student";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn) { 
   echo "Connection Establised"; 
} 
else { 
   die("Error". mysqli_connect_error()); 
} 
	

$registerNumber = $_POST["regno"];
$name = $_POST["name"];
$username = $_POST["uname"];
$password = $_POST["paswd"];
$branch = $_POST["branch"];
$cellNumber = $_POST["cellnum"];
$email = $_POST["email"];


$sql = "INSERT INTO std (registerNumber, name, username, password, branch, cellNumber, email)
        VALUES ('$registerNumber', '$name', '$username', '$password', '$branch', '$cellNumber', '$email' )";

if (mysqli_query($conn, $sql) === TRUE) {
    echo "<script>alert('Registration Successful'); window.location.href='login.php';</script>";
    exit;
} else {
    echo "<script>alert('Registration Failed: " . mysqli_error($conn) . "'); window.location.href='registration.php';</script>";
    exit;
}
mysqli_close($conn);
?>