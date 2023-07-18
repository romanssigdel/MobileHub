<?php
include "../product/config.php";

$A_name = $_POST['Username'];
$A_password = $_POST['Password'];

$query = "SELECT * FROM `admin` WHERE Username = '$A_name' AND Password = '$A_password'";
$check = mysqli_query($con, $query);

session_start();


if(mysqli_num_rows($check)){
    
    $_SESSION['admin'] = $A_name;

    echo "
    <script>
    // alert ('login successfully!');
    window.location.href='../mystore.php';
    </script>
    ";
}
else{
    echo "
    <script>
    alert ('Invalid username/password');
    window.location.href='login.php';
    </script>
    ";
}
?>