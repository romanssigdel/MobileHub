<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobilehub</title>
    <link rel="shortcut icon" href="image/icon.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/utils.css">
    <link rel="stylesheet" href="../css/responsive.css">
</head>
<script src="../js/script.js"></script>
<!-- icons -->
<script src="https://kit.fontawesome.com/4eca1fe67d.js" crossorigin="anonymous"></script>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.php">
                    <img src="image/
                    logo.png" alt="logo ">
                </a>
            </div>
            <div class="search">
                <input type="text" name="" id="" placeholder="Search for products">
                <button class="btn"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
            </div>
            <ul>
                <li><a href=""><i class="fa-solid fa-house"></i> Home</a></li>
                <li><a href=""><i class="fa-solid fa-cart-shopping"></i> Cart(0)</a></li>
                <li> <a href=""><i class="fa-solid fa-user"></i> Hello,</a></li>
                <li><a href="">Login</a></li>
                <li><a href="../admin/mystore.php">Admin</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="sidebar-toolbar-product_items">
                <div class="menu">
                    <h3>Categories</h3>
                    <h3>Categories</h3>
                    <h3>Categories</h3>
                    <h3>Categories</h3>
                    <h3>Categories</h3>
                    <h3>Categories</h3>
                    <h3>Categories</h3>
                </div>
                <div class="toolbar-product_items">
                    <div class="toolbar">
                        <h3>Smartphones(0)</h3>
                    </div>
                    <div class="product-items" id="content">
                        <div class="product-item">
                            <div class="product-item-info">
                                <a href="#">
                                    <span class="product-image-container" style="width: 240px;">
                                        <span class="product-image-wrapper">
                                            <img class="product-image-photo" src="../1.png" max-width="240" max-height="300" alt="">
                                        </span>
                                    </span>
                                </a>
                                <div class="product-details">
                                    <div class="product-item-name">
                                        <a class="product-item-link" href="#" onclick="loadContent('home.html');return false;">Samsung Galaxy M52-5g
                                        </a>
                                    </div>
                                    <div class="price-review">
                                        <span class="price">Rs.40000</span>
                                        <span class="review-summary">
                                            <img src="../img/star-icon.png" alt="">
                                            <span class="rating-result">4.2</span>
                                        </span>
                                    </div>
                                    <span class="arrives">Arrives: </span>
                                    <span class="two-days">Within 2 days</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-item-info">
                                <a href="#">
                                    <span class="product-image-container">
                                        <span class="product-image-wrapper">
                                            <img class="product-image-photo" src="../img/moto-e7-power-price-in-nepal_2.png" max-width="240" max-height="300" alt="Motorola Moto E7 Power">
                                        </span>
                                    </span>
                                </a>
                                <div class="product-details">
                                    <div class="product-item-name">
                                        <a class="product-item-link" href="#">Moto e7 Power
                                        </a>
                                    </div>
                                    <div class="price-review">
                                        <span class="price">Rs.40000</span>
                                        <span class="review-summary">
                                            <img src="../img/star-icon.png" alt="">
                                            <span class="rating-result">4.2</span>
                                        </span>
                                    </div>
                                    <span class="arrives">Arrives: </span>
                                    <span class="two-days">Within 2 days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="flex-all-center">
        <p>Copyright &copy; Mycart.com</p>
    </footer>
</body>

</html>