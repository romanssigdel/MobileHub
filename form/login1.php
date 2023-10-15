<?php
include '../connect.php';


$Name=$_POST['name'];
$Password=$_POST['password'];


$result=mysqli_query($con,"SELECT * FROM `tbluser` WHERE 
(UserName= '$Name' OR Email='$Name') AND 
Password='$Password'  ");


session_start();

if(mysqli_num_rows($result)){

    $_SESSION['user']=$Name;

    echo "
    <script>
    alert('Successfully Login');
    window.location.href='../index.php';
    </script>   ";
}else{
    echo "
    <script>
    alert('Incorrect UserName/Email/Password');
    window.location.href='login.php';
    </script>   ";
}
?>
