<?php

class UserModel {
    private $conn;

    // constructor to establish the database connection
    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "users");

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // register a new user
    public function registerUser($username, $password) {
        $stmt = $this->conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password); // Store the plain text password
        $stmt->execute();
        $stmt->close();
    }

    // check user credentials
    public function checkCredentials($inputUsername, $inputPassword) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $inputUsername, $inputPassword);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return true;
        }

        return false;
    }

    // get user information
    public function getUserInfo($inputUsername, $inputPassword) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $inputUsername, $inputPassword);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        }

        return null;
    }

    // close the database connection
    public function closeConnection() {
        $this->conn->close();
    }
}
?>
