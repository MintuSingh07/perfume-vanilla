<?php
$productId = isset($_GET['id']) ? $_GET['id'] : null;

// Connect to your MySQL database (replace these with your actual database credentials)
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch product details from the database
$sql = "SELECT * FROM products WHERE id = $productId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $productName = $row['product_name'];
    $productDescription = $row['product_description'];
    $productPrice = $row['product_price'];
} else {
    // Handle the case where the product is not found
    $productName = "Product Not Found";
    $productDescription = "Sorry, the product details are not available.";
    $productPrice = "$0.00";
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Product Details</title>
</head>

<body>
    <!-- Display fetched product details -->
    <h1><?php echo $productName; ?></h1>
    <p><?php echo $productDescription; ?></p>
    <h3><?php echo $productPrice; ?></h3>
    <button id="addToCartBtn">Add to Cart</button>

    <script src="script.js"></script>
</body>

</html>
