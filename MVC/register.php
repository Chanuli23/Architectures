<?php

require_once 'user_model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newUsername = $_POST['newUsername'];
    $newPassword = $_POST['newPassword'];

    $model = new UserModel();
    $model->registerUser($newUsername, $newPassword);

    // Redirect to login page or show a success message
    header('Location: login_view.php');
    exit();
}

// Load the registration view
require 'register_view.php';
?>
