<?php
$Id = $_GET['id'];

# Connecting to database and fetching the user table.
$con = mysqli_connect('localhost', 'root', '', 'ecommerce1');
mysqli_query($con,"DELETE FROM `tbluser` WHERE Id ='$Id'");
header("location:user.php");
?>