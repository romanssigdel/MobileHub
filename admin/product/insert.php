<?php
if(isset($_POST['submit'])){
    include "config.php";
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name']; 
    $image_name = $_FILES['Pimage']['name']; 
    $image_destination ="uploadImage/".$image_name;
    $product_display = $_POST['Pdisplay'];
    $product_cpu = $_POST['Pcpu'];
    $product_ram = $_POST['Pram'];
    $product_storage = $_POST['Pstorage'];
    $product_battery = $_POST['Pbattery'];

    move_uploaded_file($image_loc,$image_destination);

    //insert Product
    mysqli_query($con, "INSERT INTO `tblproduct`(`id`, `Pname`, `Pprice`, `Pimage`,`Display`, `Ram`, `Cpu`, `Storage`, `Battery`) VALUES ('$id','$product_name','$product_price','$image_destination','$product_display','$product_ram','$product_cpu','$product_storage','$product_battery')");
    
    header("Location: index.php");
    exit;
}

?>