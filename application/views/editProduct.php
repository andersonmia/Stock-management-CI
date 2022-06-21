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
  <h2>Product Edit</h2>
  <?php echo form_open(base_url()."index.php/edit/".$ed[0]['productId']) ?>
    <p><?= validation_errors() ?></p>
    <div class="form-group">
      <label for="product_Name">product_Name:</label>
      <input type="text" class="form-control" id="product_Name"  name="product_Name" value="<?php echo $ed[0]['product_Name']; ?>">
    </div>
    <div class="form-group">
      <label for="brand">Brand:</label>
      <input type="text" class="form-control" id="brand" name="brand" value="<?php echo $ed[0]['brand']; ?>">
    </div>
    <div class="form-group">
        <label for="supplier_phone">Supplier phone: </label>
        <input type="number" name="supplier_phone" id="supplier_phone" value="<?php echo $ed[0]['supplier_phone']; ?>">
    </div>   
    <div class="form-group">
        <label for="supplier">Supplier:</label>
        <input type="text" name="supplier" id="supplier" value="<?php echo $ed[0]['supplier']; ?>">
    </div>        
    <button type="submit" class="btn btn-primary">Save</button>
    <?php echo form_close(); ?>
</div>
</body>
</html>