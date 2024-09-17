<?php
session_start();

if (isset($_SESSION['userid'])) {
    echo "The value of the session variable 'userid' is " . $_SESSION['userid'];
} else {
    echo "Session variable 'userid' is not set.";
}
?>
