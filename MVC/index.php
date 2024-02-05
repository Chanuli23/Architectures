<?php

require_once 'login_controller.php';

$model = new UserModel();
$controller = new LoginController($model);

if (isset($_POST['username']) && isset($_POST['password'])) {
    $controller->login($_POST['username'], $_POST['password']);
} else {
    require 'login_view.php';
}

?>
