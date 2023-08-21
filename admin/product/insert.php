<?php
if(isset($_POST['submit'])){
    include "config.php";
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name']; 
    $image_name = $_FILES['Pimage']['name']; 
    $image_destination ="uploadImage/".$image_name;
    $product_specs = $_POST['Pspecs'];
    
    move_uploaded_file($image_loc,$image_destination);

    //insert Product
    
    mysqli_query($con, "INSERT INTO `tblproduct`(`Pname`, `Pprice`, `Pimage`,`Specs`) VALUES ('$product_name','$product_price','$image_destination','$product_specs')");
    
    header("Location: index.php");
    exit;
}

?>