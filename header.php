<!-- session_start -->
    <?php
    session_start();
    $count = 0;
    if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
    }
    ?>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobilehub</title>
    <link rel="shortcut icon" href="image/icon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<style>
</style>
<!-- icons -->
<script src="https://kit.fontawesome.com/4eca1fe67d.js" crossorigin="anonymous"></script>

<header>
    <nav>
        <div class="logo">
            <a href="index.php">
                <img src="image/logo.png" alt="logo ">
            </a>
        </div>
        <div class="search">
            <form action="search_results.php" method="GET">
                <input type="search" name="search" id="search" placeholder="Search for products">
                <button class="btn" type="submit" name="submit"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
            </form>
        </div>
        <ul>
            <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
            <li><a href="viewCart.php"><i class="fa-solid fa-cart-shopping"></i> Cart(<?php echo $count ?>)</a></li>
            <li> <a href=""><i class="fa-solid fa-user"></i>
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo "Hello, ".$_SESSION['user'];
                        echo '<li><a href="form/logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li>';
                    } else {
                        echo '<a href="form/login.php">Login</a>';
                    }
                    ?>
                </a></li>
        </ul>
    </nav>
</header>