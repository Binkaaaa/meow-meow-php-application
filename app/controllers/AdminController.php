<?php
session_start();

require_once(__DIR__ . '/../models/admin.php');

class AdminController {
    private $model;

    public function __construct() {
        $this->model = new AdminModel();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($this->model->checkCredentials($username, $password)) {
                // Set session variables
                $_SESSION['loggedIn'] = true;
                $_SESSION['username'] = $username;

                // Redirect to the admin dashboard
                header("Location: admin-dashboard.php");
                exit();
            } else {
                // Login failed
                $_SESSION['loginError'] = "Invalid username or password.";
                header("Location: admin-login.php");
                exit();
            }
        }
    }
    
}


