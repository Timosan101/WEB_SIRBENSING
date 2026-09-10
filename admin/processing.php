<?php
session_start();
require_once __DIR__ . '/../db_connect.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = intval($_POST['product_id']);
    $name = trim($_POST['name']);
    $category = trim($_POST['category']);
    $price = floatval($_POST['price']);
    $stock = intval($_POST['stock']);
    $remove_image = isset($_POST['remove_image']) ? 1 : 0;

    $image_path = null;
    if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] === UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['product_image']['tmp_name'];
        $file_name = time() . '_' . basename($_FILES['product_image']['name']);
        $upload_dir = '../images/fourth/';
        
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        
        $image_path = 'images/fourth/' . $file_name;
        move_uploaded_file($file_tmp, '../' . $image_path);
    }

    if ($product_id === 0) {
        $stmt = $conn->prepare("INSERT INTO products (name, category, price, stock, image) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssdis", $name, $category, $price, $stock, $image_path);
    } else {
        if ($remove_image) {
            $stmt = $conn->prepare("UPDATE products SET name=?, category=?, price=?, stock=?, image='' WHERE id=?");
            $stmt->bind_param("ssdii", $name, $category, $price, $stock, $product_id);
        } elseif ($image_path) {
            $stmt = $conn->prepare("UPDATE products SET name=?, category=?, price=?, stock=?, image=? WHERE id=?");
            $stmt->bind_param("ssdiis", $name, $category, $price, $stock, $image_path, $product_id);
        } else {
            $stmt = $conn->prepare("UPDATE products SET name=?, category=?, price=?, stock=? WHERE id=?");
            $stmt->bind_param("ssdii", $name, $category, $price, $stock, $product_id);
        }
    }

    $stmt->execute();
    $stmt->close();
}

header("Location: manageproducts.php");
exit();