<?php
require_once(__DIR__ . '/../../include/db_connect.php');
require_once(__DIR__ . '/../../app/controllers/ProductController.php');

$productController = new ProductController();
$productController->createProduct();

?>
