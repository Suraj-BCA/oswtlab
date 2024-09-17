<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;

    header("Location: Submitt.php");
    exit();
} else {
    echo "Invalid request.";
}
?>
