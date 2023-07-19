<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Description page</title>
    <!-- <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<style>
.product-image-photo{
    /* height: 390px;
    width: 320px; */
    height: 100px;
    width: 200px;
}
.product-items{
    display: inline-block;
}
.product-item{
    width: 100%;
}
</style>
<body>
    <div class="container">
        <div class="toolbar-product_items">
            <div class="toolbar">
                        <a href="index.php">Home</a>
                    </div>
                    <div class="product-items" >
                        <!-- Database connection and fetching the data-->
                        <?php include "config.php";
                        $query = mysqli_query($con, "SELECT * FROM `tblproduct`");
                        $check = mysqli_num_rows($query)>0;

                        if($check){
                            ($row = mysqli_fetch_assoc($query))
                                ?>
                                <div class="product-item">
                                    <div class="product-item-info">
                                        <a href="#">
                                            <span class="product-image-container" style="width:1000px">
                                                <span class="product-image-wrapper">
                                                    <img class="product-image-photo" src="../admin/product/<?php echo $row['Pimage']; ?>" >
                                                </span>
                                            </span>
                                        </a>
                                        <div class="product-details">
                                            <div class="product-item-name">
                                                <!-- <a class="product-item-link" href="home.php" onclick="loadContent('home.php');return false;"><?php echo $row['Pname']; ?> -->
                                                <!-- </a> -->
                                            </div>
                                            <div class="price-review">
                                                <span class="price"><?php echo $row['Pprice']; ?></span>
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
                        
                        else{
                            echo "nothing";
                        }
                            ?>
                    </div>
                </div>
            </div>
</body>
</html>