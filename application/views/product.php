<!DOCTYPE html>
<html lang="en">
<head>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
  <h2>Product Registration</h2>
  <form method="POST" action="<?=base_url().'index.php/addProduct'?>" >
    <div class="form-group">
      <label for="product_Name">product_Name:</label>
      <input type="text" class="form-control" id="product_Name" placeholder="Enter product_Name" name="product_Name">
    </div>
    <div class="form-group">
      <label for="brand">Brand:</label>
      <input type="text" class="form-control" id="brand" placeholder="Enter brand" name="brand">
    </div>
    <div class="form-group">
        <label for="supplier_phone">Supplier phone: </label>
        <input type="number" name="supplier_phone" id="supplier_phone">
    </div>   
    <div class="form-group">
        <label for="supplier">Supplier:</label>
        <input type="text" name="supplier" id="supplier">
    </div>    
    <div class="form-group">
        <label for="added-date">Added date:</label>
        <input type="date" name="added-date" id="added-date">
    </div>
    <button type="submit" class="btn btn-primary">Add product</button>
  </form>
</div>
</body>
</html>
