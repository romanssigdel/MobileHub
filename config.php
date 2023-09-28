<?php
require ('stripe-php-master/init.php');

$Publishablekey = "";
$Secretkey = "";

\Stripe\Stripe::setApiKey($Secretkey);
?>