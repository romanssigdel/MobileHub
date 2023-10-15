<?php
session_start();
use Stripe\Terminal\Location;

require("configApi.php");

if (isset($_POST['stripeToken']))
    \Stripe\Stripe::setVerifySslCerts(false);

$token = $_POST['stripeToken'];
$amount = $_POST['amount'];

$data = \Stripe\Charge::create(array(
    "amount" => intval($amount) * 100,
    "currency" => "inr",
    "description" => "Bought",
    "source" => $token,
));

if ($data) {
    if (isset($_SESSION['cart'])) {
        require('connect.php');
        $username = $_SESSION['user'];

        foreach ($_SESSION['cart'] as $cartItem) {
            $pname = $cartItem['pname'];
            $pprice = $cartItem['pprice'];
            $pquantity = $cartItem['pquantity'];

            // Insert product details along with the username after successful payment
            $query = mysqli_query($con, "INSERT INTO soldproduct (username, pname, pprice, pquantity) VALUES ('$username', '$pname', '$pprice', '$pquantity')");

            if (!$query) {
                echo "Error: " . mysqli_error($con);
            }
            // Update pquantity in tblproduct
            $updateQuery = mysqli_query($con, "UPDATE tblproduct SET pquantity = pquantity - $pquantity WHERE pname = '$pname'");
            if (!$updateQuery) {
                echo "Error updating product quantity: " . mysqli_error($con);
            }
        }

        mysqli_close($con); // Close the database connection

        // Clear the cart after successful payment
        unset($_SESSION['cart']);

        echo "
        <script>
        alert('Successfully Transaction completed');
        window.location.href='index.php';
        </script>";
    } else {
        echo "
        <script>
        alert('Error: Cart is empty.');
        window.location.href='index.php';
        </script>";
    }
}
?>