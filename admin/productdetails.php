<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productdetails</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4eca1fe67d.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- fetch data -->
    
    <?php include "mystore.php"; ?>
    <div class="container ">
            <div class="row">
                <div class="col-md-8 m-auto">
                    <table class=" table border table-bordered border-secondary table-hover border my-5">
                        <thead class="table-dark bg-dark text-white fs-5 text-center">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Quantity</th>
                                <th>Delete</th>
                                <th>Update</th>
                            </tr>
                        </thead>
                        
                        <tbody class="text-center">
                            <?php
                            //fetch data
                            include "product/config.php";
                            $query = "SELECT * FROM `tblproduct`";
                            $check = mysqli_query($con, $query);
                            if (mysqli_num_rows($check) > 0) {
                                $i = 0;
                                while ($rows = mysqli_fetch_assoc($check)) {
                                    echo "
                                    <tr>
                                        <td>"?><?php echo ++$i;?><?php echo "</td>
                                        <td>$rows[Pname]</td>
                                        <td>Rs.$rows[Pprice]</td>
                                        <td><img src='../admin/product/$rows[Pimage]' height = '90px' width= '200px' alt='Image'></td>
                                        <td>$rows[Pquantity]</td>
                                        <td><a href='product/delete.php?Id=$rows[id]' class='btn btn-danger'>Delete</a></td>
                                        <td><a href='product/update.php?Id=$rows[id]' class='btn btn-danger'>Update</a></td>
                                    </tr>
                                    ";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
</body>
</html>