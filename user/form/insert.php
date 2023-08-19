<?php
// Error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include the database configuration file
include '../config.php';

if (isset($_POST['submit'])) {
    // Get form data and sanitize them
    $Name = mysqli_real_escape_string($con, $_POST['name']);
    $Email = mysqli_real_escape_string($con, $_POST['email']);
    $Number = mysqli_real_escape_string($con, $_POST['number']);
    $Password = mysqli_real_escape_string($con, $_POST['password']);

    // Perform basic validation on form inputs
    if (empty($Name) || empty($Email) || empty($Number) || empty($Password)) {
        // Handle empty fields error
        echo "All fields are required.";
    } else {
        // Insert data into the database
        $query = "INSERT INTO tbluser (`UserName`, `Email`, `Number`, `Password`) 
                  VALUES ('$Name', '$Email', '$Number', '$Password')";

        $Dup_Email=mysqli_query($con,"SELECT * FROM `tbluser` WHERE Email='$Email'");
        $Dup_UserName=mysqli_query($con,"SELECT * FROM `tbluser` WHERE UserName='$Name'");
        if(mysqli_num_rows($Dup_Email)){
            echo "
            <script>
            alert('Email is already taken');
            window.location.href='register.php';
            </script>
            ";
        }
        if(mysqli_num_rows($Dup_UserName)){
            echo "
            <script>
            alert('UserName is already taken');
            window.location.href='register.php';
            </script>
            ";
        }else{
            // mysqli_query($con,"INSERT INTO tbluser (`UserName`, `Email`, `Number`, `Password`) 
            //     --   VALUES ('$Name', '$Email', '$Number', '$Password')");
                 echo "<script>
                 alert('Registered successfully');
                 window.location.href='login.php';
                 </script>";
        }
        if (mysqli_query($con, $query)) {
            // Insertion successful
            echo "Record inserted successfully.";
        } else {
            // Insertion failed, display the MySQL error message
            echo "Error: " . mysqli_error($con);
        }
    }
}
?>
