<?php
session_start();

if (isset($_SESSION['first_name']) && !empty($_SESSION['first_name'])) {
    echo "Welcome, " . $_SESSION['first_name'] . "!";
} else {
    header("Location: index.html");
    exit();
}
?>
