<?php
session_start();

$valid_userFirstname = 'Viktoriia';
$valid_userLastname = 'Bakakina';
$valid_password = '123123';


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['password'])) {
        if ($_POST['first_name'] === $valid_userFirstname &&  $_POST['last_name'] === $valid_userLastname && $_POST['password'] === $valid_password) {
            $_SESSION['first_name'] = $_POST['first_name'];           
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Invalid username or password. Please try again.";
        }
    } else {
        echo "Please enter both username and password.";
    }
}
?>