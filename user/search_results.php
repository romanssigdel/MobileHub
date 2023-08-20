<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobilehub - Search Results</title>
    <!-- Include your CSS files here -->
</head>

<body>
    <!-- Include the header -->
    <?php include "header.php"; ?>

    <main>
        <div class="container" id="content">
            <div class="product-items">
                <?php
                // Include the "config.php" file to establish a database connection
                include "config.php";

                // Check if the search form is submitted and the search query is provided
                if (isset($_GET['search']) && !empty($_GET['search'])) {
                    // Sanitize the search query to prevent SQL injection
                    $searchQuery = mysqli_real_escape_string($con, $_GET['search']);

                    // Perform the database query to search for products based on the product name
                    $query = "SELECT * FROM tblproduct WHERE Pname LIKE '%$searchQuery%'";
                    $result = mysqli_query($con, $query);

                    // Check if there are any search results
                    if (mysqli_num_rows($result) > 0) {
                        // Display the search results
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Display the product details, e.g., product name, price, etc.
                            echo "<div class='product-item'>";
                            echo "<div class='product-item-info'>";
                            echo "<a href='description_page.php?myid=" . $row['id'] . "'>";
                            echo "<span class='product-image-container' style='width: 240px;'>";
                            echo "<span class='product-image-wrapper'>";
                            echo "<img class='product-image-photo' src='../admin/product/" . $row['Pimage'] . "' max-width='240' max-height='300'>";
                            echo "</span>";
                            echo "</span>";
                            echo "</a>";
                            echo "<div class='product-details'>";
                            echo "<div class='product-item-name'>";
                            echo "<a class='product-item-link' href='description_page.php?myid=" . $row['id'] . "'>" . $row['Pname'] . "</a>";
                            echo "</div>";
                            echo "<div class='price-review'>";
                            echo "<span class='price'>" . $row['Pprice'] . "</span>";
                            echo "<span class='review-summary'>";
                            echo "<img src='../img/star-icon.png' alt=''>";
                            echo "<span class='rating-result'>4.2</span>";
                            echo "</span>";
                            echo "</div>";
                            echo "<span class='arrives'>Arrives: </span>";
                            echo "<span class='two-days'>Within 2 days</span>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                        }
                    } else {
                        // No search results found
                        echo "No products found matching the search query.";
                    }
                } else {
                    // If no search query, display a message asking the user to enter a search query
                    echo "Please enter a product name in the search box above.";
                }
                ?>
            </div>
        </div>
    </main>

    <!-- Include the footer -->
    <footer class="flex-all-center">
        <p>Copyright &copy; Mycart.com</p>
    </footer>
</body>

</html>
