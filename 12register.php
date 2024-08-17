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
	

$registerno = $_POST["registerno"];
$name = $_POST["name"];
$email = $_POST["email"];
$cellno = $_POST["cellno"];
$branch = $_POST["branch"];

$sql = "INSERT INTO class2 (registerno, name, email, cellno ,branch)
        VALUES ('$registerno', '$name', '$email', '$cellno', '$branch')";

if (mysqli_query($conn, $sql) === TRUE) {
    echo "<script>alert('Registration Successful'); window.location.href='login.php';</script>";
    exit;
} else {
    echo "<script>alert('Registration Failed: " . mysqli_error($conn) . "'); window.location.href='registration.php';</script>";
    exit;
}
mysqli_close($conn);
?>




