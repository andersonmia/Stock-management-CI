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
  <h2>Show outgoings</h2>
    <table class="table table-striped table-dark">
    <thead>
        <tr>
        <th scope="col">outgoing name</th>
        <th scope="col">Brand</th>
        <th scope="col">Supplier phone</th>
        <th scope="col">Supplier</th>        
        </tr>
    </thead>
    <tbody>
        <?php
        $query= $this->db->get('outgoing');
        foreach($query->result_array() as $row){?>
        <tr>
            <td><?=$row['outgoing_Name']?></td>
            <td><?=$row['brand']?></td>
            <td><?=$row['supplier_phone']?></td>
            <td><?=$row['supplier']?></td>
            <td><a class="btn btn-primary" href="outgoing_controller/edit/<?=$row['outgoingId']?>">Update</a></td>
            <td><a class="btn btn-danger" href="outgoing_controller/delete/<?=$row['outgoingId']?>">Delete</a></td>
        </tr>
        <?php }?>
    </tbody>
    </table>
</div>
</body>
</html>