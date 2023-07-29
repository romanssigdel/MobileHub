<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViewCart</title>
    <!-- BootStrap CDN -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <!-- icons -->
    <script src="https://kit.fontawesome.com/4eca1fe67d.js" crossorigin="anonymous"></script>
    
</head>
<style>
    .container-table{
        display: flex;
        justify-content: center;
    }
    table{
        /* color: grey; */
        border-collapse: collapse;
        align-self: center;
        font-size: 20px;
    }
    thead{
        background-color: black;
        color: white;
    }
    td{
        padding-top: 23px;
        padding-bottom: 23px;
    }
    th{
        padding: 15px;
    }
    td button{
        height: 42px;
        width: 55px;
    }
    
</style>
<body>
    <?php include 'header.php'?>
    <div class="container1">
        <div class="row">
            <div class="col-lg-5">
                <h1 style="text-align: center;">My Cart</h1>
            </div>
        </div>
    </div>
    <div class="container-table">
        <table border="1">
            <thead>
                <th>S.No.</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Total Price</th>
                <th>Update</th>
                <th>Delete</th>
            </thead>
            <tbody style="text-align: center;">
                <?php
                // session_start();
                $ptotal = 0;
                $total = 0;
                $i = 0;
                if(isset($_SESSION['cart'])){
                    foreach ($_SESSION['cart'] as $key => $value){
                        $ptotal = $value['pprice'] * $value['pquantity'];
                        $total += $value['pprice'] * $value['pquantity'];
                        $i = $key + 1;
                        echo "
                        <form action='insertcart.php' method='POST'>
                        <tr>
                        <td>$i</td>
                        <td><input type = 'hidden' name = 'pname' value = '$value[pname]'>$value[pname]</td>
                        <td><input type = 'hidden' name = 'pprice' value = '$value[pprice]'>Rs.$value[pprice]</td>
                        <td><input type = 'number' name = 'pquantity' min='1' max='20' value = '$value[pquantity]'></td>
                        <td>Rs.$ptotal</td>
                        <td><button name ='update' style='background-color: green; color:black'>Update</button></td>
                        <td><button name='remove' style='background-color: red; color:black'>Delete</button></td>
                        <td><input type='hidden' name ='item' value ='$value[pname]'></td>
                        </tr>
                        </form>
                        ";
                    }
                }
                ?>
                
            </tbody>
            <tfoot style="text-align: center;">
                <tr>
                    <td colspan="3"></td>
                    <td>Total</td>
                    <td>Rs.<?php echo number_format($total,2)?></td>   
                </tr>
            </tfoot>
        </table>
    </div>
    <div>
    </div>
</body>
</html>