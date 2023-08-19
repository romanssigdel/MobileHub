<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>
    <!-- BootStrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">

                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-info">Product Details:</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Name:</label>
                        <input type="text" name="Pname" class="form-control" placeholder="Enter Product Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Price:</label>
                        <input type="text" name="Pprice" class="form-control" placeholder="Enter Product Price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Product Image:</label>
                        <input type="file" name="Pimage" class="form-control">
                    </div>
                    <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>
                </form>
            </div>
        </div>
    </div>

    <!-- fetch data -->
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
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    
                    <tbody class=" text-center">
                        <?php
                        //fetch data
                        include "config.php";
                        $query = "SELECT * FROM `tblproduct`";
                        $check = mysqli_query($con, $query);
                        if (mysqli_num_rows($check) > 0) {
                            while ($rows = mysqli_fetch_assoc($check)) {
                                echo "
                                <tr>
                                    <td>$rows[id]</td>
                                    <td>$rows[Pname]</td>
                                    <td>Rs.$rows[Pprice]</td>
                                    <td><img src='$rows[Pimage]' height = '90px' width= '200px' alt='Image'></td>
                                    <td><a href='delete.php?Id=$rows[id]' class='btn btn-danger'>Delete</a></td>
                                    <td><a href='update.php?Id=$rows[id]' class='btn btn-danger'>Update</a></td>
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