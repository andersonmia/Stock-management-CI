<!DOCTYPE html>
<html lang="en">
<head>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    h2{
      color:blue;
    }
    label{
      color: slateblue;
    }      
  </style>
</head>
<body>
  <div class="container">
    <h2>Stock Inventory Registration</h2>
    <form method="POST" action="<?=base_url().'index.php/addInventory'?>">
      <div class="form-group">
        <label for="quantity">Quantity:</label>
        <input type="number" class="form-control" id="quantity" placeholder="Enter quantity" name="quantity">
      </div>
      <div class="form-group">
        <label for="productid">Product: </label>
        <select class="form-select" aria-label="Default select example" name="productid">
          <option selected>Choose product</option>
          <?php foreach($ed as $row): ?>
          <option value="<?php echo $row['productId']; ?>"><?php echo $row['product_Name']; ?></option>   
          <?php endforeach; ?>           
        </select>        
      </div>
      <div class="form-group">
        <label for="added_date">Added date:</label>
        <input type="date" name="added_date" id="added_date">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>