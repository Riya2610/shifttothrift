<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
</head>
<body>
    <h1>Product Listing</h1>

    <?php
    // Include your database connection code here
    $servername = "localhost"; // Replace with your database server name or IP address
    $username = "root";     // Replace with your database username
    $password = "";     // Replace with your database password
    $dbname = "Resgister"; // Replace with your database name

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Perform a SQL query to fetch seller information from the database
    $sql = "SELECT `product-name`, `mobile-number`, `address`, `product-details`, `product-category`, `product-price`, `product-image`, `id`
            FROM `products`";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '<div class="product-container">';
            echo "<p>Product Name: " . $row["product-name"] . "</p>";
            echo "<p>Mobile Number: " . $row["mobile-number"] . "</p>";
            echo "<p>Address: " . $row["address"] . "</p>";
            echo "<p>Product Details: " . $row["product-details"] . "</p>";
            echo "<p>Product Category: " . $row["product-category"] . "</p>";
            echo "<p>Product Price: Rs" . $row["product-price"] . "</p>";
            echo '<p>Product Image: <img src="upload/' . $row["product-image"] . '" alt="Product Image" style="max-width: 100px; max-height: 100px;"></p>';
            
            // Pass product name and price as parameters to addToCart
            echo '<button class="btn btn-primary" onclick="addToCart(' . $row["id"] . ', \'' . $row["product-name"] . '\', ' . $row["product-price"] . ')">Add to Cart</button>';
            
            echo "</div>"; // Close the product-container div
            echo "<hr>";
        }
    } else {
        echo "<p>No seller information found.</p>";
    }

    // Close the database connection
    $conn->close();
    ?>

    <script>
        // Function to add a product to the cart
        function addToCart(productId, productName, productPrice) {
            // Get the cart items from localStorage or initialize an empty array
            let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

            // Check if the product is already in the cart
            const existingProduct = cartItems.find(item => item.id === productId);

            if (existingProduct) {
                existingProduct.quantity++;
            } else {
                cartItems.push({ id: productId, name: productName, price: productPrice, quantity: 1 });
            }

            // Update the cart in localStorage
            localStorage.setItem('cartItems', JSON.stringify(cartItems));

            alert('Product added to cart!');
            
            // Redirect to the cart.html page after adding to the cart
            window.location.href = 'cart.html';
        }
    </script>
</body>
</html>
