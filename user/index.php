<!DOCTYPE html>
<html lang="en">

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

<script src="js/script.js"></script>

<!-- icons -->
<script src="https://kit.fontawesome.com/4eca1fe67d.js" crossorigin="anonymous"></script>

<body>
    <!-- Imported header file -->
    <?php 
    include "header.php";
     ?>


    <main>
        <div class="container" id="content">
            <div class="sidebar-toolbar-product_items" >
                <div class="menu">
                    <h3>Categories</h3>
                </div>
                <div class="toolbar-product_items" >
                    <div class="toolbar">
                        <h3>Smartphones</h3>
                    </div>
                    <div class="product-items" >

                        <!-- Database connection and fetching the data-->
                        <?php include "config.php";
                        $query = mysqli_query($con, "SELECT * FROM `tblproduct`");
                        $check = mysqli_num_rows($query)>0;

                        if($check){
                            while($row = mysqli_fetch_assoc($query)){
                                $pid = $row['id'];
                                $pname = $row['Pname'];
                                $pprice = $row['Pprice'];
                                $pimg = $row['Pimage'];

                                ?>
                                
                                <div class="product-item">
                                    <div class="product-item-info">
                                        <a href="#">
                                            <span class="product-image-container" style="width: 240px;">
                                                <span class="product-image-wrapper">
                                                    <img class="product-image-photo" src="../admin/product/<?php echo $pimg?>" max-width="240" max-height="300">
                                                </span>
                                            </span>
                                        </a>
                                        <div class="product-details">
                                            <div class="product-item-name">
                                                <a class="product-item-link" href="description_page.php?myid=<?php echo $pid; ?>" ><?php echo $pname; ?>
                                                </a>
                                            </div>
                                            <div class="price-review">
                                                <span class="price">Rs.<?php echo number_format($pprice,2); ?></span>
                                                <span class="review-summary">
                                                    <img src='../img/star-icon.png' alt=''>
                                                    <span class="rating-result">4.2</span>
                                                </span>
                                            </div>
                                            <span class='arrives'>Arrives: </span>
                                            <span class='two-days'>Within 2 days</span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }else{
                            echo "nothing";
                        }
                        // while ($row = mysqli_fetch_array($query)) {
                            ?>
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