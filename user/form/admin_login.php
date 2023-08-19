<?php
include '../config.php';

if (isset($_POST['admin_login'])) {
    $username = $_POST['name'];
    $password = $_POST['password'];

    // Perform the database query to check if the admin credentials are correct
    $query = "SELECT * FROM `admin` WHERE Username = '$username' AND Password = '$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        // Admin login successful, set the session variable to indicate admin status
        session_start();
        $_SESSION['admin'] = $username;

        // Redirect to the admin page
        header('Location: ../../admin/mystore.php');
        exit();
    } else {
        // Admin login failed, redirect back to the login page with an error message
        header('Location: login.php?error=1');
        exit();
    }
}
?>
