
<?php
// Check if the Id parameter is set in the query string
if (isset($_GET['Id'])) {
    $productId = $_GET['Id'];

    // Include your database connection configuration
    include "config.php";

    // Delete the product from the database
    $query = "DELETE FROM `tblproduct` WHERE `Id` = $productId";
    if (mysqli_query($con, $query)) {
        // Deletion successful
        header("Location: index.php");
        exit;
    } else {
        // Handle deletion error
        echo "Error deleting product: " . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
} else {
    // Handle missing Id parameter
    echo "Invalid request.";
}
?>
