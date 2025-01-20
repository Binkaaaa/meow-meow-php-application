<?php
require_once(__DIR__ . '/../models/product.php');

class ProductController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new Product();
    }

    public function createProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addProduct'])) {
            $productName = $_POST['productName'];
            $productDescription = $_POST['productDescription'];
            $productPrice = $_POST['productPrice'];
            $stockQuantity = $_POST['stockQuantity'];

            // Handle file upload
            $productImage = $_FILES['productImage']['name'];
            $targetDirectory = __DIR__ . "/../../public/uploads/";  // Use relative path for uploads

            // File extension validation
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
            $fileExtension = strtolower(pathinfo($productImage, PATHINFO_EXTENSION));

            if (!in_array($fileExtension, $allowedExtensions)) {
                echo "Invalid file type. Only JPG, JPEG, PNG, WEBP and GIF are allowed.";
                return;
            }

            $targetFile = $targetDirectory . basename($productImage);

            // Debugging the file paths
            echo "Target Directory: " . $targetDirectory;
            echo "Target File: " . $targetFile;

            // Attempt to upload the image
            if (move_uploaded_file($_FILES['productImage']['tmp_name'], $targetFile)) {
                // Pass data to the model for database insertion
                $success = $this->productModel->addProduct($productName, $productDescription, $productPrice, $productImage, $stockQuantity);
                
                if ($success) {
                    header("Location: ../../views/product/view_product.php?message=Product added successfully!");
                    exit;
                } else {
                    echo "Error: Failed to add product to the database.";
                }
            } else {
                echo "Error uploading image. Check the target directory path and permissions.";
            }
        }
    }

    public function updateProduct($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updateProduct'])) {
            $productName = $_POST['productName'];
            $productDescription = $_POST['productDescription'];
            $productPrice = $_POST['productPrice'];
            $stockQuantity = $_POST['stockQuantity'];

            // Update product details in the database (excluding the image)
            $success = $this->productModel->updateProduct($id, $productName, $productDescription, $productPrice, $stockQuantity);
            
            if ($success) {
                header("Location: ../../views/product/view_product.php?message=Product updated successfully!");
                exit;
            } else {
                echo "Error: Failed to update product in the database.";
            }
        }
    }
    
    public function getProductById($id)
    {
        return $this->productModel->getProductById($id);
    }

    public function showProducts()
    {
        // Get all products from the model
        $products = $this->productModel->getAllProducts();
        
        // Return the products to the view (no need to include the whole page)
        return $products;
    }
    


}
