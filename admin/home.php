<?php
session_start();
error_reporting(0);
include("include/config.php");

 

?>



<?php include('include/header.php');?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
   
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
#col{
  font-size:20px;
  background-color:grey;
  color:black;
}


</style>
   
	
</head>
<body>

<div class="container">
    <div class="row">
        <center>
        <ul>
         <br>
            
            <a id="col" href="delivered-orders.php">Delivered Orders</a><br><br>

            <a id="col" href="todays-orders.php">Today's Orders</a><br><br>

            <a id="col" href="updateorder.php">Update Order</a><br><br>

            <a id="col" href="category.php">Category</a><br><br>
            <a id="col" href="edit-category.php">Edit Category</a><br><br>

            <a id="col" href="subcategory.php">Sub Category</a><br><br>

            <a id="col" href="edit-subcategory.php">Edit Sub-Category</a><br><br>


            <a id="col" href="insert-product.php">Insert New Product</a><br><br>

            <a id="col" href="manage-products.php">Manage Product</a><br><br>

            <a id="col" href="manage-users.php">Manage Users</a><br><br>
</ul>
</center>
</div>


</div>









<div class="container">

<?php include('include/footer.php');?>
</div>
<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	
</body>
</html>