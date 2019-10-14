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
  <h2>Stacked form</h2>
  <form action="add_procces.php" method="POST">
    <div class="form-group">
      <label for="email">Product Code:</label>
      <input type="text" class="form-control" id="email" name="product_code">
    </div>
    <div class="form-group">
      <label for="email">Product Name:</label>
      <input type="text" class="form-control" id="email" name="product_name">
    </div>
    <div class="form-group">
      <label for="email">Product Price:</label>
      <input type="number" class="form-control" id="email" name="product_price">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
