<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title> -->
    <!-- BootStrap CDN -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body> -->
    
<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// include 'config.php';

// $id = isset($_GET['Id']) ? $_GET['Id'] : 0; // Provide a default value if 'Id' is not set
// $Record = mysqli_query($con, "SELECT * FROM `tblproduct` WHERE Id=$id");
// $data = mysqli_fetch_array($Record);

?>

<!-- 
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
            <?php
            // Clear form fields after first successful update
                if (isset($_GET['updated']) && $_GET['updated'] == 'true') {
                echo '<script>document.getElementById("update-form").reset();</script>';
                }   
                ?>
                <form action="update.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-info">Product Update:</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Name:</label>
                        <input type="text" value="<?php //echo $data['Pname'];?>" name="Pname" class="form-control" placeholder="Enter Product Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Price:</label>
                        <input type="text" value="<?php //echo $data['Pprice'];?>" name="Pprice" class="form-control" placeholder="Enter Product Price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Product Image:</label>
                        <input type="file" name="Pimage" class="form-control"><br>
                        <img src="<?php //echo $data['Pimage']?> " alt="" style="height: 150px;">
                    </div>
                    <input type="hidden" name="id" value="<?php //echo $data['Id'];?>">
                    <button name="update" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Update</button>
                
                </form>
            </div>
        </div>
    </div> -->
    <!-- //php update code -->
    <?php
    // if(isset($_POST['update'])){
    //     $id=$_POST['id'];
    // $product_name = $_POST['Pname'];
    // $product_price = $_POST['Pprice'];
    // $product_image = $_FILES['Pimage'];
    // $image_loc = $_FILES['Pimage']['tmp_name']; 
    // $image_name = $_FILES['Pimage']['name']; 
    // $imgage_destination ="uploadImage/".$image_name;
    
    // move_uploaded_file($image_loc,$imgage_destination);
    //     include 'config.php';
    //     mysqli_query($con,"UPDATE `tblproduct` SET
    //     `Pname`='$product_name',`Pprice`='$product_price',
    //     `Pimage`='$imgage_destination' WHERE Id=$id");
    //     header("location:index.php");


    // }
    ?>
    <?php
    // if (isset($_POST['update'])) {
    //     // include 'config.php';
        
    //     $id = $_POST['id'];
    //     // $product_name = $_POST['Pname'];
    //     // $product_price =$_POST['Pprice'];
    //     if (isset($_POST['Pname'])) {
    //         $product_name = mysqli_real_escape_string($con, $_POST['Pname']);
    //     }
    //     if (isset($_POST['Pprice'])) {
    //         $product_price = mysqli_real_escape_string($con, $_POST['Pprice']);
    //     }
        
    //     $image_name = $_FILES['Pimage']['name'];
    //     $image_destination = "uploadImage/" . $image_name;
    //     $image_temp_location = $_FILES['Pimage']['tmp_name'];
    
    //     if (move_uploaded_file($image_temp_location, $image_destination)) {
    //         echo "File uploaded successfully!";
    //         $query = "UPDATE `tblproduct` SET `Pname`='$product_name', `Pprice`='$product_price', `Pimage`='$image_destination' WHERE Id=$id";
    //         if (mysqli_query($con, $query)) {
                
    //          // header("location: update.php?Id=$id&updated=true");
    //             header("location: index.php");
    //         } else {
    //             echo "Error updating record: " . mysqli_error($con);
    //         }
    //     } else {
    //         echo "Error uploading image.";
    //     }
    // }
    ?>


<!-- </body>

</html> -->
<?php
// Check if the Id parameter is set in the query string
if (isset($_GET['Id'])) {
    $productId = $_GET['Id'];

    // Include your database connection configuration
    include "config.php";

    // Fetch the product details from the database
    $query = "SELECT * FROM `tblproduct` WHERE `Id` = $productId";
    $result = mysqli_query($con, $query);
    $product = mysqli_fetch_assoc($result);

    // Check if the form was submitted for updating
    if (isset($_POST['update'])) {
        $updatedName = $_POST['Pname'];
        $updatedPrice = $_POST['Pprice'];
        
        // Handle image update
        $updatedImage = $_FILES['Pimage'];
        if ($updatedImage['error'] === UPLOAD_ERR_OK) {
            $imageLoc = $updatedImage['tmp_name']; 
            $imageName = $updatedImage['name']; 
            $imageDestination = "uploadImage/".$imageName;
            move_uploaded_file($imageLoc, $imageDestination);
            $imageUpdateQuery = ", `Pimage` = '$imageDestination'";
        } else {
            $imageUpdateQuery = ""; // No image update
        }

        // Update the product details in the database
        $updateQuery = "UPDATE `tblproduct` SET `Pname` = '$updatedName', `Pprice` = '$updatedPrice' $imageUpdateQuery WHERE `Id` = $productId";
        if (mysqli_query($con, $updateQuery)) {
            // Update successful
            header("Location: index.php");
            exit;
        } else {
            // Handle update error
            echo "Error updating product: " . mysqli_error($con);
        }
    }

    // Close the database connection
    mysqli_close($con);
} else {
    // Handle missing Id parameter
    echo "Invalid request.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-info">Update Product:</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Name:</label>
                        <input type="text" name="Pname" class="form-control" value="<?php echo $product['Pname']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Price:</label>
                        <input type="text" name="Pprice" class="form-control" value="<?php echo $product['Pprice']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Update Product Image:</label>
                        <input type="file" name="Pimage" class="form-control">
                    </div>
                    <button name="update" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

