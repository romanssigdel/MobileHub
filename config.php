<?php
require ('stripe-php-master/init.php');

$Publishablekey = "pk_test_51NvE3BBJfYGwNsoj7K7iy4ljWLAwqpFGW5KjjwvtD3pv4Yx2Irrkk4DNuMOlGRxor4XKlWnZ7UPc1ISBxIUuAwXs00wZfYXrEV";
$Secretkey = "sk_test_51NvE3BBJfYGwNsojfU9xb2gMQi10Xmj83q7n5MEGd9ygb310TF2rWfyv5inJUbbTfQz6kDX56SeZqzXvrd5ybk8J00VU2xJbdN";

\Stripe\Stripe::setApiKey($Secretkey);
?>