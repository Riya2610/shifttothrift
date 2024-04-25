<?php
// Include your database connection code here (similar to your initial PHP script)

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

// Check if a product ID is provided in the URL
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Perform a SQL query to fetch product details based on the provided product ID
    $sql = "SELECT `product-name`, `product-price` FROM `products` WHERE `id` = $productId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the product details
        $row = $result->fetch_assoc();

        // Create an array to store product details
        $productDetails = array(
            'id' => $productId,
            'name' => $row["product-name"],
            'price' => $row["product-price"]
            // Add more fields as needed
        );

        // Return product details as JSON
        echo json_encode($productDetails);
    } else {
        // Product not found
        echo json_encode(array('error' => 'Product not found'));
    }
} else {
    // No product ID provided
    echo json_encode(array('error' => 'Product ID not provided'));
}

// Close the database connection
$conn->close();
?>
