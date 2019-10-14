<?php 
    include 'connect.php';
    $data = mysqli_query($connect,"SELECT *FROM product");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Product List</h2>
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Product Code</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
    <?php $no = 0; foreach($data as $value){ $no++ ?>
      <tr>
        <td><?php echo $no?></td>
        <td><?php echo $value['product_code']?></td>
        <td><?php echo $value['product_name']?></td>
        <td><?php echo $value['product_price']?></td>
        <td>
            <a href="update_view.php?product_code=<?php echo $value['product_code'] ?>" class="btn btn-primary" role="button">Update</a>
            <a href="delete_procces.php?product_code=<?php echo $value['product_code'] ?>" class="btn btn-danger" role="button">Delete</a>
        </td>
      </tr>
    <?php }?>
    </tbody>
  </table>
  <a href="add_product.php" class="btn btn-info" role="button">Add Product</a>
</div>

</body>
</html>
