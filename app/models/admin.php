<?php
class AdminModel {
    private $adminUsername = "admin";
    private $adminPassword = "admin123";

    public function checkCredentials($username, $password) {
        return ($username === $this->adminUsername && $password === $this->adminPassword);
    }
}
?>
