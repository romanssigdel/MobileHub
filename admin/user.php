<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <!-- BootStrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <?php
    include "mystore.php";
    # Connecting to database and fetching the user table.
    $con = mysqli_connect('localhost', 'root', '', 'ecommerce1');
    $record = mysqli_query($con, "SELECT * FROM `tbluser`");
    $user_count = mysqli_num_rows($record);
    ?>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">

                <table class="table table-secondary table-bordered">
                    <thead class="text-center">
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone no.</th>
                        <th>Delete</th>

                    </thead>
                    <tbody class="text-center">
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($record)) {
                            echo "<tr>
                            <td>"?><?php echo ++$i;?><?php echo "</td>
                            <td>$row[UserName]</td>
                            <td>$row[Email]</td>
                            <td>$row[Number]</td>
                            <td><a href='delete.php?id=$row[Id]' class = 'btn btn-outline-danger'>Delete</a></td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                    <tfoot style="text-align: center;">
                        <tr>
                            <td colspan="3"></td>
                            <td>Total no of User:</td>
                            <td><?php echo $user_count ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</body>

</html>