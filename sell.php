<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root"; // Replace with your database username
    $password = ""; // Replace with your database password
    $dbname = "Resgister";   // Replace with your database name

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $productName = $_POST["product-name"];
    $mobileNumber = $_POST["mobile-number"];
    $address = $_POST["address"];
    $productDetails = $_POST["product-details"];
    $productCategory = $_POST["product-category"];
    $productPrice = $_POST["product-price"];
    $photo = $_FILES['product-image']['name'];
    $tmp_name = $_FILES['product-image']['tmp_name'];

    // SQL query to insert data into the database
    move_uploaded_file($tmp_name, "upload/$photo");
    $sql = "INSERT INTO products (`product-name`, `mobile-number`, `address`, `product-details`, `product-category`, `product-price`, `product-image`)
    VALUES ('$productName', '$mobileNumber', '$address', '$productDetails', '$productCategory', '$productPrice','$photo')";

    if ($conn->query($sql) === TRUE) {
        // Start a session
        session_start();
        
        // Set a session variable with the success message
        $_SESSION['success_message'] = "Product listing added successfully!";
        
        // Redirect to the sell.html page
        header("Location: sell.html");
        exit(); // Ensure that no other code is executed after the redirection
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Form not submitted.";
}

?>