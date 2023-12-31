<?php
// Clear form fields after first successful update
if (isset($_GET['updated']) && $_GET['updated'] == 'true') {
    echo '<script>document.getElementById("update-form").reset();</script>';
}
?>
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
        $updatedQuantity = $_POST['Pquantity'];
        $updatedDisplay = $_POST['Pdisplay'];
        $updatedCpu = $_POST['Pcpu'];
        $updatedRam = $_POST['Pram'];
        $updatedStorage = $_POST['Pstorage'];
        $updatedBattery = $_POST['Pbattery'];

        // Handle image update
        $updatedImage = $_FILES['Pimage'];
        if ($updatedImage['error'] === UPLOAD_ERR_OK) {
            $imageLoc = $updatedImage['tmp_name'];
            $imageName = $updatedImage['name'];
            $imageDestination = "uploadImage/" . $imageName;
            move_uploaded_file($imageLoc, $imageDestination);
            $imageUpdateQuery = ", `Pimage` = '$imageDestination'";
        } else {
            $imageUpdateQuery = ""; // No image update
        }

        // Update the product details in the database
        $updateQuery = "UPDATE `tblproduct` SET `Pname` = '$updatedName', `Pprice` = '$updatedPrice',`Pquantity`='$updatedQuantity', `Display` = '$updatedDisplay',`Ram` = '$updatedRam',`Cpu` = '$updatedCpu',`Battery` = '$updatedBattery',`Storage` = '$updatedStorage' $imageUpdateQuery WHERE `Id` = $productId";
        if (mysqli_query($con, $updateQuery)) {
            // Update successful
            echo "
            <script>
                alert('Successfully Updated.');
                window.location.href='../productdetails.php';
            </script>";
            exit;
        } else {
            // Handle update error
            echo "
            <script>
                alert('Update unsucessful.');
            </script>" . mysqli_error($con);
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
<style>
    .product-image {
        height: 200px;
    }
</style>

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
                        <label class="form-label">Add Product Quantity:</label>
                        <input type="text" name="Pquantity" class="form-control" value="<?php echo $product['Pquantity']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Update Product Image:</label>
                        <span class="product-image-container">
                            <span class="product-image-wrapper">
                                <img class="product-image" src="../../admin/product/<?php echo  $product['Pimage']; ?>" max-width="40" max-height="30">
                            </span>
                        </span>
                        <input type="file" name="Pimage" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Display:</label>
                        <input type="text" name="Pdisplay" class="form-control" placeholder="Enter Display specs" value="<?php echo $product['Display']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product CPU:</label>
                        <input type="text" name="Pcpu" class="form-control" placeholder="Enter CPU Name" value="<?php echo $product['Cpu']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">RAM:</label>
                        <input type="text" name="Pram" class="form-control" placeholder="Enter RAM" value="<?php echo $product['Ram']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Storage:</label>
                        <input type="text" name="Pstorage" class="form-control" placeholder="Enter Storage Capacity" value="<?php echo $product['Storage']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Battery:</label>
                        <input type="text" name="Pbattery" class="form-control" placeholder="Enter battery Wattage" value="<?php echo $product['Battery']; ?>">
                    </div>
                    <div class="mb-3">
                        <button name="update" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>