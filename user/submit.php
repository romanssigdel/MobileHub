<?php
require("../config.php");

\Stripe\Stripe:: setVerifySslCerts(false);

$token = $_POST['stripeToken'];


$data = \Stripe\Charge::create(array(
    "amount"=>10500,
    "currency"=>"inr",
    "description"=> "Mobilehub",
    "source"=> $token,
));

echo "<pre>";
print_r($data);
?>