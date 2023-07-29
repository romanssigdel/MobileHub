<?php
session_start();

// Initialize 'cart' as an empty array
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
// session_destroy();
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pquantity = $_POST['pquantity'];

if (isset($_POST['addCart'])) {
    $check_product = array_column($_SESSION['cart'], 'pname');
    if(in_array($pname, $check_product)){
        echo "
        <script>
        alert('Product already added.');
        window.location.href='index.php';
        </script>
        ";
    }
    else{
    $_SESSION['cart'][]= array(
        'pname' => $pname,
        'pprice' => $pprice,
        'pquantity' => $pquantity);
    header("location:viewCart.php");
}
}

// remove product
if(isset($_POST['remove'])){
    foreach($_SESSION['cart'] as $key => $value){
        if($value['pname'] === $_POST['item']){
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            header('location:viewCart.php');
        }
    }
}

// update product
if(isset($_POST['update'])){
    foreach($_SESSION['cart'] as $key => $value){
        if($value['pname'] === $_POST['item']){
            $_SESSION['cart'][$key] = array(
                'pname' => $pname,
                'pprice' => $pprice,
                'pquantity' => $pquantity);
                header("location:viewCart.php");
        }
    }
}

?>