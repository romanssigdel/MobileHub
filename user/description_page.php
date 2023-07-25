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
        /* width: 100%; */
        border: 1px solid rgb(219, 219, 222);
        margin:100px;
    }

    .first-col {
        width: 50vh;
        padding-top: 10px;
        border-right: 1px solid rgb(219, 219, 222);

    }

    .product-image-container {
        width: 100%;
    }

    .product-image-wrapper {
        padding-top: 83%;
    }

    .product-image-photo {
        height: 357px;
        width: 227px;
        margin: 15%;
    }

    .second-col {
        width: 75%;
    }

    .third-col {
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

    .product-details {
        display: flex;
        width: 65vh;
        /* height: 92.5%; */
        flex-direction: column;
        align-items: flex-start;
        border: 2px solid red;
        padding: 20px;
    }
    .price {
        height: 15px;
        width: 90px;
        font-family: 'Montserra', sans-serif;
    }

    .price-review {
        margin: 15px 0;
        display: flex;
        justify-content: space-between;
    }

    .review {
        width: 10vh;
    }

    .rate {
        display: inline-block;
    }

    .star-icon {
        display: inline-block;
    }
</style>

<body>
    <?php
    include "header.php";
    ?>
    <div class="main-container">
        <a style="display:inline-block" href="index.php">Home</a>
        <!-- fetching data -->
        <?php
        include "config.php";
        $id = $_GET['myid'];

        $query = mysqli_query($con, "SELECT * FROM `tblproduct` WHERE  $id = id");
        $check = mysqli_num_rows($query) > 0;

        if ($check) {
            while ($row = mysqli_fetch_assoc($query)) {
                $pname = $row['Pname'];
                $pprice = $row['Pprice'];
                $pimg = $row['Pimage'];
        ?>
                <div class="first-col">
                    <div class="product-image">
                        <!-- <span class="product-image-container" style="width: 240px;"> -->
                        <!-- <span class="product-image-wrapper"> -->
                        <img class="product-image-photo" src="../admin/product/<?php echo $pimg ?>" max-width="240" max-height="300">
                        <!-- </span> -->
                        </span>
                    </div>
                </div>
                <div class="second-col">
                    <div class="product-details">
                        <div class="product-item-name">
                            <a class="product-item-link" href=""><?php echo $pname; ?></a>
                        </div>
                        <div class="price-review">
                            <span class="price"><?php echo $pprice; ?></span>
                        </div>
                        <div class="review">
                            <span class="rate">Rating: </span>
                            <span class="star-icon"><img src='../img/star-icon.png' alt=''></span>
                            <span class="rating-result">4.2</span>
                        </div>
                        <input type="text" name="Pname" value="" id="">
                        <input type="number" name="" id="" min='1' max ='20' placeholder="Quantity">
                        <input type="submit" class="btn-cart" value="Add to cart"></input>
                        
                    </div>
                </div>

    </div>
<?php
            }
        } else {
            echo "nothing";
        }

?>
</body>

</html>