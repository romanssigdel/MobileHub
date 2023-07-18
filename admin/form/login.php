<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- BootStrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class = "bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow m-auto bg-white p-3 border border-secondary mt-3">

                <form action="login1.php" method="POST">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-info">Product Details:</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name:</label>
                        <input type="text" name="Username" class="form-control" placeholder="Enter Email Address">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password:</label>
                        <input type="Password" name="Password" class="form-control" placeholder="Enter your Password">
                    </div>
                    <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Login</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>