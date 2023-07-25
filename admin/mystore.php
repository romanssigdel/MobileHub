<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home page</title>

    <!-- BootStrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- icons -->
    <script src="https://kit.fontawesome.com/4eca1fe67d.js" crossorigin="anonymous"></script>
</head>

<?php
  session_start();
  if(!$_SESSION['admin']){
    header('location: form/login.php');
    exit();
  }
?>

<body>
<nav class="navbar  bg-dark">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white">My Store</a>
    <span>
    <i class="fas fa-user-shield"></i>
        <?php echo ucwords($_SESSION['admin']);?> |
        <i class="fa-solid fa-right-to-bracket"></i>
    <a href="form/logout.php" class="text-decoration-none text-white">Logout</a> |
    <a href="../user/index.php" class="text-decoration-none text-white">Userpanel</a>
    </span>
  </div>
</nav>

<div>
    <h2 class="text-center">Dashboard</h2>
</div>
<div class="col-md-6 bg-danger text-center m-auto">
    <a href="product/index.php" class="text-white text-decoration-none fs-4 fw-bold px-5 py-5 ">Add Product</a>
    <a href="" class="text-white text-decoration-none fs-4 fw-bold px-5 py-5" >Users</a>
</div>
</body>
</html>