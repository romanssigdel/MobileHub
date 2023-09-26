<?php
$pname = $_POST['pname'];
$pprice = $_POST['pprice'];
$pquantity = $_POST['pquantity'];
$prating = $_POST['prating'];

include 'config.php';

$query = mysqli_query($con,"INSERT INTO `boughtproduct`(`pname`, `pprice`, `pquantity`, `prating`) VALUES ('$pname','$pprice','$pquantity','$prating");

?>