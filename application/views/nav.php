<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href ="<?php echo base_url('assets/navigation1.css'); ?>" type = "text/css">
    <link rel = "stylesheet" href ="<?php echo base_url('assets/navigation2.css'); ?>" type = "text/css">
</head>
<body>
    <nav>
        <div class="header">
            <h1>Stock management system</h1>
            <p id="subtitle">EXPLORING MINIMALISM IN LIFE</p>
        </div>
        <div class="links">
            <ul>
                <li><a href="<?php echo base_url().'index.php/User_controller'; ?>">USERS</a></li>
                <li><a href="<?php echo base_url().'index.php/Product_controller'; ?>">PRODUCTS</a></li>
                <li><a href="<?php echo base_url().'index.php/Inventory_controller'; ?>">STOCK INVENTORY</a></li>
                <li><a href="<?php echo base_url().'index.php/Outgoing_controller'; ?>">OUTGOING PRODUCTS</a></li>
            </ul>
        </div>        
    </nav>
</body>
</html>