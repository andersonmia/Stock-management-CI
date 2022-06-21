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
  <h2>User Display</h2>
    <table class="table table-striped table-dark">
    <thead>
        <tr>
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col">Telephone</th>
        <th scope="col">Gender</th>
        <th>Nationality</th>
        <th>Username</th>
        <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query= $this->db->get('users');
        foreach($query->result_array() as $row){?>
        <tr>
            <td><?=$row['firstName']?></td>
            <td><?=$row['lastName']?></td>
            <td><?=$row['telephone']?></td>
            <td><?=$row['gender']?></td>
            <td><?=$row['nationality']?></td>
            <td><?=$row['username']?></td>
            <td><?=$row['email']?></td>
            <td><a class="btn btn-primary" href="user_controller/edit/<?=$row['userId']?>">Update</a></td>
            <td><a class="btn btn-danger" href="user_controller/delete/<?=$row['userId']?>">Delete</a></td>
        </tr>
        <?php }?>
    </tbody>
    </table>
</div>
</body>
</html>
