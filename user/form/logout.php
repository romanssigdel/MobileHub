<?php
session_start();
session_destroy();
echo "
    <script>
    confirm('Are you sure you want to logout?');
    window.location.href='../index.php';
    </script>";
?>