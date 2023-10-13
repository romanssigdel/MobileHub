<?php
$Id = $_GET['id'];

# Connecting to database and fetching the user table.
$con = mysqli_connect('localhost', 'root', '', 'mobilehub');
$query = mysqli_query($con,"DELETE FROM `tbluser` WHERE Id ='$Id'");
if ($query){
    echo "
        <script>
            alert('Successfully deleted.');
            window.location.href='user.php';
        </script>";
}

?>