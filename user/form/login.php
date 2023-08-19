<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace border border-info">
                <p class="text-warning text-center fs-3 fw-bold my-3">User Register</p>
                <form id="myForm" action="login1.php" method="POST">
                    <div class="mb-3">
                        <label for="name">UserName:</label>
                        <input type="text" name="name" id="name" placeholder="Enter User Name or Email" class="form-control" >
                    </div>  
                    <div class="mb-3">
                        <label for="password">UserPassword:</label>
                        <input type="password" name="password" id="password" placeholder="Enter User Password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button name="" class="w-100 bg-danger fs-4 text-white">Login</button>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="submit" class="w-100 bg-warning fs-4 text-white"><a href="register.php" class="text-decoration-none text-white">Create an Account</a></button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        const form = document.getElementById("myForm");

                        form.addEventListener("submit", function(event) {
                            const nameInput = document.getElementById("name");
                            const emailInput = document.getElementById("email");
                            const passwordInput = document.getElementById("password");

                            const nameValue = nameInput.value.trim();
                            const emailValue = emailInput.value.trim();
                            const passwordValue = passwordInput.value.trim();

                            if (nameValue === "") {
                                alert("Please enter a valid UserName.");
                                nameInput.focus();
                                event.preventDefault();
                                return;
                            }

                            if (emailValue === "") {
                                alert("Please enter a valid Email.");
                                emailInput.focus();
                                event.preventDefault();
                                return;
                            }

                            if (!isValidEmail(emailValue)) {
                                alert("Please enter a valid Email.");
                                emailInput.focus();
                                event.preventDefault();
                                return;
                            }

                            // if (numValue === "") {
                            //     alert("Please Enter your Phone Number");
                            //     numInput.focus();
                            //     event.preventDefault();
                            //     return;
                            // }

                            // if (numValue.length !== 10) {
                            //     alert("Please enter a valid 10-digit Phone Number");
                            //     numInput.focus();
                            //     event.preventDefault();
                            //     return;
                            // }

                            // if (!isValidNepaliPhoneNumber(numValue)) {
                            //     alert("Please enter a valid Nepali Phone Number");
                            //     numInput.focus();
                            //     event.preventDefault();
                            //     return;
                            // }

                            if (passwordValue === "") {
                                alert("Please enter a Password");
                                passwordInput.focus();
                                event.preventDefault();
                                return;
                            }

                            if (passwordValue.length < 8) {
                                alert("Password should be at least 8 characters long");
                                passwordInput.focus();
                                event.preventDefault();
                                return;
                            }
                        });
                    });
                </script>

</body>
</html>
