<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">

  <title>Update</title>
</head>
<body>
  
  <div class="container mt-5">
  <?php

  $conn = mysqli_connect("localhost", "root", "", "crud-app");
  $id = $_GET['id'];

  $sql = "SELECT * FROM product WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0){

  while($row = mysqli_fetch_assoc($result)){

  ?>
    <form action="php/update.php" method="POST" class="border p-5 border-primary rounded">
      <div class="row ">
      <input style='display: none' type="text" name='id' value='<?php echo $id; ?>' />
        <div class="col">
          <input class="form-control form-control-sm" required  value='<?php echo $row['name']; ?>'  type="text" name="name" placeholder="product-name" aria-label=".form-control-sm example">
        </div>
        <div class="col">
          <input class="form-control form-control-sm" required  value='<?php echo $row['price']; ?>'  type="number" name="price" placeholder="product-price" aria-label=".form-control-sm example">
        </div>
        <div class="col">
          <input class="form-control form-control-sm" required  type="text" value='<?php echo $row['description']; ?>'  name="description" placeholder="product-description" aria-label=".form-control-sm example">
        </div>
        <div class="col">
          <input class="form-control form-control-sm" required  type="number" value='<?php echo $row['quantity']; ?>'  name="quantity" placeholder="product-quantity" aria-label=".form-control-sm example">
        </div>
        <div class="col">
          <input class="form-control form-control-sm" required  type="date" value='<?php echo $row['date']; ?>'  name="expire_date" aria-label=".form-control-sm example">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-sm btn-primary">Update Product</button>
        </div>
      </div>
    </form>
    
    <?php
    }
  }

  ?>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>