<?php
session_start();

// Output the number of items in the cart (for demonstration purposes)
echo count($_SESSION['cart']);
?>