<?php
session_start();

// Check if the product ID is set
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Initialize the cart array if it doesn't exist
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Add the product to the cart
    if (!in_array($productId, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $productId;
    }

    // Respond with the updated cart count (optional)
    echo count($_SESSION['cart']);
}
?>
