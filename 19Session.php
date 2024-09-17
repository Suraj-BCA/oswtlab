<?php
session_start();

$_SESSION['userid'] = 10020;

echo "Session variable 'userid' has been set to " . $_SESSION['userid'];
?>
