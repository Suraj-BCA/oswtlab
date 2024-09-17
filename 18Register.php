<?php
$servername="localhost";
$username="root";
$password="";
$dbname="oswt";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn) { 
   echo "Connection Establised"; 
} 
else { 
   die("Error". mysqli_connect_error()); 
} 
	

$username = $_POST["username"];
$pwd = $_POST["pwd"];

$sql = "INSERT INTO login (username, pwd)
        VALUES ('$username', '$pwd')";

if (mysqli_query($conn, $sql) === TRUE) {
    echo "<script>alert('Registration Successful'); window.location.href='login.php';</script>";
    exit;
} else {
    echo "<script>alert('Registration Failed: " . mysqli_error($conn) . "'); window.location.href='registration.php';</script>";
    exit;
}
mysqli_close($conn);
?>




