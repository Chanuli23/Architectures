<?php

require_once 'user_model.php';

class LoginController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function login($username, $password) {
        $userInfo = $this->model->getUserInfo($username, $password);
    
        if ($userInfo) {
            echo "Login successful! Welcome, " . $userInfo['username'] . "!";
        } else {
            $error = "Invalid username or password.";
            require 'login_view.php';
        }
    
        $this->model->closeConnection();
    }
}

?>
