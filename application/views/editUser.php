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
  <h2>User Edit</h2>
  <?php echo form_open(base_url()."index.php/edit/".$ed[0]['userId']) ?>
    <p><?= validation_errors() ?></p>
    <div class="form-group">
      <label for="firstName">firstName:</label>
      <input type="text" class="form-control" id="firstName"  name="firstName" value="<?php echo $ed[0]['firstName']; ?>">
    </div>
    <div class="form-group">
      <label for="lastName">lastName:</label>
      <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $ed[0]['lastName']; ?>">
    </div>
    <div class="form-group">
        <label for="telephone">Telephone: </label>
        <input type="number" name="telephone" id="telephone" value="<?php echo $ed[0]['telephone']; ?>">
    </div> 
    <div class="form-group">
        <label for="gender">gender: </label>
        <input type="text" name="gender" id="gender" value="<?php echo $ed[0]['gender']; ?>">
    </div>
    <div class="form-group">
        <label for="nationality">nationality: </label>
        <input type="text" name="nationality" id="nationality" value="<?php echo $ed[0]['nationality']; ?>">
    </div> 
    <div class="form-group">
        <label for="email">email:</label>
        <input type="email" name="email" id="email" value="<?php echo $ed[0]['email']; ?>">
    </div>  
    <div class="form-group">
        <label for="username">username:</label>
        <input type="text" name="username" id="username" value="<?php echo $ed[0]['username']; ?>">
    </div>
    <div class="form-group">
        <label for="password">password:</label>
        <input type="password" name="password" id="password" value="<?php echo $ed[0]['password']; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <?php echo form_close(); ?>
</div>
</body>
</html>