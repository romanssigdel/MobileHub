<?php
require ('stripe-php-master/init.php');

$Publishablekey = "pk_test_51NvE3BBJfYGwNsoj7K7iy4ljWLAwqpFGW5KjjwvtD3pv4Yx2Irrkk4DNuMOlGRxor4XKlWnZ7UPc1ISBxIUuAwXs00wZfYXrEV";
$Secretkey = "";

\Stripe\Stripe::setApiKey($Secretkey);
?>