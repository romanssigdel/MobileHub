<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MobileHub</title>
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
        margin: 100px 100px 0 100px;
    }

    .img-des {
        display: flex;
        flex-direction: row;
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

    .product-image {
        height: 288px;
        width: 197px;
        margin: 15%;
    }

    .second-col {
        border-right: 1px solid rgb(219, 219, 222);

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
        height: 92.5%;
        flex-direction: column;
        align-items: flex-start;
        padding: 20px;
    }

    .price {
        height: 15px;
        width: 90px;
        font-family: 'Montserra', sans-serif;
    }

    .price-review {
        /* margin: 15px 0; */
        display: flex;
        justify-content: space-between;
    }

    .review {
        width: 10vh;
        display: flex;
        flex-direction: row;
    }

    .quantity {
        margin-top: 10px;
        padding-top: 20px;
    }

    .quantity input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        transition: border-color 0.3s ease;
    }

    .add-cart {
        margin-top: 30px;
        /* padding: 20px; */
    }

    .rate {
        /* display: inline-block; */
    }

    .star-icon {
        display: inline-block;
    }

    /* Button styles */
    .add-to-cart-button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        color: #fff;
        background-color: rgb(33, 28, 62);
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .add-to-cart-button:hover {
        background-color: #2980b9;
    }

    /* Optional: Add a subtle shadow for depth */
    .add-to-cart-button {
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }


    .third-col {
        width: 315px;
    }

    .row1 {
        display: flex;
        flex-direction: row;
        margin: 35px;
    }

    .row1 p {
        margin-left: 20px;
    }

    .specs {
        margin: 0 0 0 100px;
    }
    /* Style the table */
  table {
    border-collapse: collapse;
    width: 93%;
    border: 1px solid #e0e0e0;
    font-family: Arial, sans-serif;
  }

  /* Style table header */
  th, td {
    padding: 12px 15px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
    font-weight: bold;
    color: #333;
  }

  /* Style alternate rows */
  tr:nth-child(even) {
    background-color: #f9f9f9;
  }

  /* Add a hover effect */
  tr:hover {
    background-color: #e0e0e0;
  }

  /* Add some box-shadow to the table */
  table {
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }
</style>

<body>
    <?php
    include "header.php";
    ?>
    <div class="main-container">
        <a href="index.php">Home</a>
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
                $pram = $row['Ram'];
                $pcpu = $row['Cpu'];
                $pstorage = $row['Storage'];
                $pbattery = $row['Battery'];
                $pdisplay = $row['Display'];

        ?>
                <form class="img-des" action="insertcart.php" method="post">
                    <div class="first-col">
                        <div class="product-img">
                            <img class="product-image" src="../admin/product/<?php echo $pimg ?>" max-width="240" max-height="300">
                        </div>
                    </div>
                    <div class="second-col">
                        <div class="product-details">
                            <div class="product-item-name">
                                <a class="product-item-link" href=""><?php echo ucwords($pname); ?></a>
                            </div>
                            <div class="price-review">
                                <span class="price"><?php echo 'Rs.' . number_format($pprice, 2); ?></span>
                            </div>
                            <div class="review">
                                <span class="rate">Rating: </span>
                                <span class="star-icon"><img src='../img/star-icon.png' alt=''></span>
                                <span class="rating-result">4.2</span>
                            </div>
                            <input type="hidden" name="pname" value="<?php echo $pname ?>" id="">
                            <input type="hidden" name="pprice" value="<?php echo $pprice ?>" id="">
                            <div class="quantity">
                                <input type="number" name="pquantity" id="" min='1' max='20' placeholder="Quantity">
                            </div>
                            <div class="add-cart">
                                <input type="submit" name="addCart" class="add-to-cart-button" value="Add to cart"></input>
                            </div>
                        </div>
                    </div>
                    <div class="third-col">
                        <h3>Why buy from us? </h3>
                        <div class="row1">
                            <img src="image/tag.png" alt="">
                            <p>1 Year Warranty</p>
                        </div>
                        <div class="row1">
                            <img src="image/free.png" alt="">
                            <p>Quick Delivery & Free Shiping</p>
                        </div>
                        <div class="row1">
                            <img src="image/return.png" alt="">
                            <p>Easy Return</p>
                        </div>
                        <div class="row1">
                            <img src="image/warranty.png" alt="">
                            <p>100% Geniune</p>
                        </div>
                    </div>
                </form>
    </div>
    <div class="specs">
        <table border='1'>
            <thead>
                <th colspan="2">Specifications</th>
            </thead>
            <tbody>
                <tr>
                    <td>Display</td>
                    <td><?php echo $pdisplay ?></td>
                </tr>
                <tr>
                    <td>RAM</td>
                    <td><?php echo $pram ?></td>
                </tr>
                <tr>
                    <td>CPU</td>
                    <td><?php echo $pcpu ?></td>
                </tr>
                <tr>
                    <td>Storage</td>
                    <td><?php echo $pstorage ?></td>
                </tr>
                <tr>
                    <td>Battery</td>
                    <td><?php echo $pbattery ?></td>
                </tr>
            </tbody>
        </table>
    </div>

<?php
            }
        } else {
            echo "nothing";
        }

?>
</body>

</html>