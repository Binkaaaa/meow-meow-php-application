<?php
require_once(__DIR__ . '/../../include/db_connect.php');

class Product
{
    private $conn;

    public function __construct()
    {
        global $conn; 
        $this->conn = $conn;
    }

    public function addProduct($name, $description, $price, $image, $stock)
    {
        $sql = "INSERT INTO product (productName, productDescription, productPrice, productImage, stockQuantity) 
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssdsi", $name, $description, $price, $image, $stock);

        return $stmt->execute();
    }

    public function getAllProducts()
    {
        $sql = "SELECT * FROM product";
        $result = $this->conn->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function getProductById($id)
    {
        $sql = "SELECT * FROM product WHERE productID = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function updateProduct($id, $name, $description, $price, $stock)
    {
        $sql = "UPDATE product SET productName = ?, productDescription = ?, productPrice = ?, stockQuantity = ? WHERE productID = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssdsi", $name, $description, $price, $stock, $id);
        
        return $stmt->execute();
    }


}
?>