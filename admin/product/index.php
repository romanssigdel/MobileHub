<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>
    <!-- BootStrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4eca1fe67d.js" crossorigin="anonymous"></script>
</head>

<body>
<?php
  session_start();
  if(!$_SESSION['admin']){
    header('location: form/login.php');
    exit();
  }
?>
<nav class="navbar  bg-dark">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white">My Store</a>
    <span>
    <i class="fas fa-user-shield"></i>
        <?php echo ucwords($_SESSION['admin']);?> |
        <i class="fa-solid fa-right-to-bracket"></i>
    <a href="../form/logout.php" class="text-decoration-none text-white">Logout</a> |
    <a href="../../user/index.php" class="text-decoration-none text-white">Userpanel</a>
    </span>
  </div>
</nav>

<div>
    <h2 class="text-center">Dashboard</h2>
</div>
<div class="col-md-6 bg-danger text-center m-auto">
    <a href="index.php" class="text-white text-decoration-none fs-4 fw-bold px-5 py-5 ">Add Product</a>
    <a href="../user.php" class="text-white text-decoration-none fs-4 fw-bold px-5 py-5" >Users</a>
</div>

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
                    <div class="mb-3">
                        <label class="form-label">Display:</label>
                        <input type="text" name="Pdisplay" class="form-control" placeholder="Enter Display specs">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product CPU:</label>
                        <input type="text" name="Pcpu" class="form-control" placeholder="Enter CPU Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">RAM:</label>
                        <select name="Pram" id="">
                            <option value="2GB">2GB</option>
                            <option value="4GB">4GB</option>
                            <option value="8GB">8GB</option>
                            <option value="16GB">16GB</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Storage:</label>
                        <select name="Pstorage" id="">
                            <option value="16GB">16GB</option>
                            <option value="32GB">32GB</option>
                            <option value="64GB">64GB</option>
                            <option value="128GB">128GB</option>
                            <option value="256GB">256GB</option>
                            <option value="512GB">512GB</option>
                        </select>
                        <div class="mb-3">
                        <label class="form-label">Battery:</label>
                        <input type="text" name="Pbattery" class="form-control" placeholder="Enter battery Wattage">
                    </div>
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
                            $i = 0;
                            while ($rows = mysqli_fetch_assoc($check)) {
                                echo "
                                <tr>
                                    <td>"?><?php echo ++$i;?><?php echo "</td>
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