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
  <h2>User Registration</h2>
  <?=validation_errors("<div class ='alert alert-danger'><div>")?>
  <form method="POST" action="<?=base_url().'index.php/addUser'?>">
    <div class="form-group">
      <label for="firstname">firstname:</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname" required>
    </div>
    <div class="form-group">
      <label for="lastname">lastname:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname" required>
    </div>
    <div class="form-group">
        <label for="telephone">telephone: </label>
        <input type="number" name="telephone" id="telephone" required>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
        <label class="form-check-label" for="male">
           Male
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
        <label class="form-check-label" for="female">
            Female
        </label>
    </div>
    <div class="form-group">
        <label for="nationality">nationality: </label>
        <select class="form-select" aria-label="Default select example" name="nationality" required>
            <option selected>Choose nationality</option>
            <option value="Tanzania">Tanzania</option>
            <option value="Rwanda">Rwanda</option>
            <option value="Uganda">Uganda</option>
        </select>        
    </div>
    <div class="form-group">
        <label for="username">username:</label>
        <input type="text" name="username" id="username" required>
    </div>
    <div class="form-group">
        <label for="email">email:</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div class="form-group">
        <label for="password">password:</label>
        <input type="password" name="password" id="password" required>
    </div>
    <div class="form-group">
        <label for="added-time">added-time:</label>
        <input type="date" name="added-time" id="added-time">
    </div>
    <button type="submit" class="btn btn-primary" name="addUser">Add user</button>
  </form>
</div>
</body>
</html>
