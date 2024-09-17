<?php
$servername = "localhost"; 
$username = "root";        
$password = "";           
$dbname = "oswt";  

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT username FROM login WHERE username = '221FJ01071'");

if ($stmt->num_rows == 1) {
 

    if (password_verify($pass, $pwd)) {
        echo "Login successful!";
        session_start();
        $_SESSION['pwd'] = $pwd;
        $_SESSION['username'] = $username;
        header("Location: 18HTMLRegistration.php");
        exit();
    } else {
        echo "Invalid password.";
    }
} else {
    echo "No user found with that username.";
}

$stmt->close();
$conn->close();
?>
