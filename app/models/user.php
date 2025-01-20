<?php
// Include DB connection
require_once(__DIR__ . '/../../include/db_connect.php');
 
class User { 
    private $conn;
    private $table = 'users';

    // Constructor to initialize DB connection
    public function __construct($db) {
        $this->conn = $db;
    }

    // Register method (without password_hash)
    public function register($firstName, $lastName, $username, $email, $password) {
        $sql = "INSERT INTO " . $this->table . " (firstName, lastName, username, email, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssss", $firstName, $lastName, $username, $email, $password);
    
        return $stmt->execute();
    }

    // Check if email already exists
    public function checkEmailExists($email) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->num_rows > 0;
    }
    
    // Add this method to the User class in user.php
    public function login($username, $password) {
        $sql = "SELECT * FROM " . $this->table . " WHERE username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            // Directly compare the password (no password verification)
            if ($password === $user['password']) {
                return $user; // Return user data on successful login
            }
        }
        return false; // Return false if login fails
    }


}
?>
