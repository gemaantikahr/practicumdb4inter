<?php 
include 'connect.php';
$code = $_POST['product_code'];
$name = $_POST['product_name'];
$price = $_POST['product_price'];

mysqli_query($connect, "INSERT INTO product VALUES('$code','$name','$price')");

header('location:index.php');

?>