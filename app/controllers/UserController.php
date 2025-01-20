<?php
// Start session only if it's not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start(); 
}
 
// Include dependencies
require_once(__DIR__ . '/../models/user.php');
require_once(__DIR__ . '/../../include/db_connect.php');

class Users {
    private $userModel;

    public function __construct($dbConnection) {
        $this->userModel = new User($dbConnection);
    }

    // Flash message method
    public function flash($key, $message) {
        $_SESSION[$key] = $message;
    }

    // Redirect method
    public function redirect($url) {
        header("Location: $url");
        exit();
    }

    public function register() {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $data = [
            'firstName' => trim($_POST['firstName']),
            'lastName' => trim($_POST['lastName']),
            'username' => trim($_POST['username']),
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'repeatPassword' => trim($_POST['repeatPassword'])
        ];

        // Check for empty fields
        if (empty($data['firstName']) || empty($data['lastName']) || empty($data['username']) || empty($data['email']) || empty($data['password']) || empty($data['repeatPassword'])) {
            $this->flash("register", "Please fill in all the fields.");
            $this->redirect("/petstore/views/register.php");
        }

        // Check if passwords match
        if ($data['password'] !== $data['repeatPassword']) {
            $this->flash("register", "Passwords do not match.");
            $this->redirect("/petstore/views/register.php");
        } 

        // Check if the email already exists
        if ($this->userModel->checkEmailExists($data['email'])) {
            $this->flash("register", "Email already exists. Please use a different email.");
            $this->redirect("/petstore/views/register.php");
        }

        // Attempt to register user
        if ($this->userModel->register(
            $data['firstName'],
            $data['lastName'],
            $data['username'],
            $data['email'],
            $data['password'] // Use plain password here
        )) {
            echo "<script>
                alert('Registration successful! Please log in.');
                window.location.href = '/petstore/views/login.php';
            </script>";
            exit();
        } else {
            $this->flash("register", "Registration failed. Please try again.");
            $this->redirect("/petstore/views/register.php");
        }
    }
    
    public function login() {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    
        if (empty($username) || empty($password)) {
            $this->flash("login", "Please fill in all fields.");
            $this->redirect("/petstore/views/login.php");
        }
    
        // Debugging: Verify input
        echo "Username: $username, Password: $password<br>";
    
        $users = $this->userModel->login($username, $password);
        if ($users) {
            echo "User found: " . print_r($users, true); // Debugging
    
            $_SESSION['userID'] = $users['userID'];
            $_SESSION['username'] = $users['username'];
            $_SESSION['logged_in'] = true;
    
            // Alert message and redirect to user-dashboard.php
            echo "<script>
                alert('Login successful!');
                window.location.href = '/petstore/views/user-dashboard.php';
            </script>";
            exit();
        } else {
            echo "<script>
                alert('Login successful!');
                window.location.href = '/petstore/views/user-dashboard.php';
            </script>";
        }
    }
    
}    
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['type'])) {
    $init = new Users($conn);

    switch ($_POST['type']) {
        case 'register':
            $init->register();
            break;
        case 'login':
            $init->login();
            break;
    }
}
?>
