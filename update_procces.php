<?php 
include 'connect.php';
$code = $_POST['product_code'];
$name = $_POST['product_name'];
$price = $_POST['product_price'];

mysqli_query($connect, "UPDATE product SET product_name='$name', product_price='$price' 
WHERE product_code='$code'");
header('location:index.php');
?>