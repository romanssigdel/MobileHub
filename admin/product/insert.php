<?php
if(isset($_POST['submit'])){
    include "config.php";
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name']; 
    $image_name = $_FILES['Pimage']['name']; 
    $imgage_destination ="uploadImage/".$image_name;
    
    move_uploaded_file($image_loc,$imgage_destination);

    //insert Product
    
    mysqli_query($con, "INSERT INTO `tblproduct`(`Pname`, `Pprice`, `Pimage`) VALUES ('$product_name','$product_price','$imgage_destination')");
    
    header("Location: index.php");
    exit;
}

?>