<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
    <!-- Add your CSS and other head content here -->
</head>
<body>
    <div class="container mt-5">
        <h2>Product Listing</h2>
        <div class="row">
            <?php
            // Include your database connection code here

            // Check if a product was added to the cart
            if (isset($_GET['added'])) {
                echo "<p>Product added to cart successfully.</p>";
            }

            // Query and display products from your database
            $sql = "SELECT product_id, product_name, product_price FROM products";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $row["product_name"] . '</h5>';
                    echo '<p class="card-text">$' . $row["product_price"] . '</p>';
                    
                    // Add to Cart button
                    echo '<form action="cart_functions.php" method="post">';
                    echo '<input type="hidden" name="product_id" value="' . $row["product_id"] . '">';
                    echo '<button type="submit" name="add_to_cart" class="btn btn-primary">Add to Cart</button>';
                    echo '</form>';
                    
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No products found.</p>';
            }
            ?>
        </div>
    </div>
</body>
</html>
