<?php

// use Stripe\Terminal\Location;

// require("../config.php");

// if(isset($_POST['stripeToken']))
// \Stripe\Stripe:: setVerifySslCerts(false);

// $token = $_POST['stripeToken'];
// $amount = $_POST['amount'];



// $data = \Stripe\Charge::create(array(
//     "amount"=>intval($amount)*100,
//     "currency"=>"inr",
//     "description"=> "Bought",
//     "source"=> $token,
// ));

// echo "<pre>";
// if($data){
//     echo "
//     <script>
//     alert('Successfully Transaction completed');
//     window.location.href='index.php';
//     </script>";
// }

?>
<?php
session_start();
use Stripe\Terminal\Location;

require("../config.php");

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
        require('config.php');
        $username = $_SESSION['user'];

        foreach ($_SESSION['cart'] as $cartItem) {
            $pname = $cartItem['pname'];
            $pprice = $cartItem['pprice'];
            $pquantity = $cartItem['pquantity'];
            $prating = $cartItem['prating'];

            // Insert product details along with the username after successful payment
            $query = mysqli_query($con, "INSERT INTO boughtproduct (Name, pname, pprice, pquantity,prating) VALUES ('$username', '$pname', '$pprice', '$pquantity','$prating')");

            if (!$query) {
                echo "Error: " . mysqli_error($con);
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