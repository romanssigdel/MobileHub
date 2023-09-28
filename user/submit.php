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
    print_r("Transaction sucessfull!");
}
?>