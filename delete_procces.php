<?php 
include 'connect.php';
$code = $_GET['product_code'];
mysqli_query($connect, "DELETE FROM product WHERE product_code='$code'");
header('location:index.php');
?>