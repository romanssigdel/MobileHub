<?php

use Stripe\Terminal\Location;

require("../config.php");

if(isset($_POST['stripeToken']))
\Stripe\Stripe:: setVerifySslCerts(false);

$token = $_POST['stripeToken'];
$amount = $_POST['amount'];



$data = \Stripe\Charge::create(array(
    "amount"=>intval($amount)*100,
    "currency"=>"inr",
    "description"=> "Bought",
    "source"=> $token,
));

echo "<pre>";
if($data){
    echo "
    <script>
    alert('Successfully Transaction completed');
    window.location.href='index.php';
    </script>";
}

?>