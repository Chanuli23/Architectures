<?php
// business_logic.php

include_once 'data_access.php';

$action = $_POST['action'];

if ($action == 'login') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = authenticateUser($username, $password);

    if ($user) {
        echo "Login successful! Welcome, $username!";
    } else {
        echo "Login failed. Please check your username and password.";
    }
} elseif ($action == 'register') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (registerUser($username, $password)) {
        echo "Registration successful! You can now login.";
    } else {
        echo "Registration failed. Please try again.";
    }
}
?>
