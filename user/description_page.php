<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    .main-container {
        display: flex;
        height: 500px;
        width: 100%;
        background-color: red;
    }

    .first-col {
        width: 50vh;
        /* height: 75%; */
        border: 2px solid black;
        /* padding: 10px; */
        padding-top: 10px;

    }

    .product-image-container {
        width: 100%;

        /* height: 200; */
    }

    .product-image-wrapper {
        padding-top: 83%;
        /* padding-bottom: 83%; */
        border: 2px solid black;
        /* margin: 15%; */
    }

    .product-image-photo {
        height: 357px;
        width: 227px;
        margin: 15%;
    }

    /* .img {
        height: 100px;
        width: 200px;
    } */

    .second-col {
        border: 2px solid blue;
        width: 75%;
    }

    .third-col {
        border: 2px solid aqua;
        width: 50%;
    }

    a {
        text-decoration: none;
        color: black;
        padding-right: 5px;
    }

    a:hover {
        font-weight: bold;
    }
</style>

<body>
    <div class="esc"><a style="display:inline-block" href="index.php">Home</a>
        <p style="display:inline-block"> > Smartphone</p>
    </div>
    <div class="main-container">
        <!-- fetching data -->
        <?php include "config.php";
        $query = mysqli_query($con, "SELECT * FROM `tblproduct` WHERE  ID='1'");
        $check = mysqli_num_rows($query) > 0;

        if ($check) {
            while ($row = mysqli_fetch_assoc($query)) {
        ?>
                <div class="first-col">
                    <div class="product-image">
                        <!-- <span class="product-image-container" style="width: 240px;"> -->
                        <!-- <span class="product-image-wrapper"> -->
                        <img class="product-image-photo" src="../1.png" max-width="240" max-height="300">
                        <!-- </span> -->
                        </span>
                    </div>
                </div>
                <div class="second-col">
                    <div class="product-details">
                        <div class="product-item-name">
                            <a class="product-item-link" href="home.php" onclick="loadContent('description_page.php');return false;"><?php echo $row['Pname']; ?>
                            </a>
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
        } else {
            echo "nothing";
        }
        // while ($row = mysqli_fetch_array($query)) {
?>
</body>

</html>