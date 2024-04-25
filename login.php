<?php
// Replace these values with your actual database credentials
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'Resgister';

// Create a database connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the submitted email and password
$email = $_POST['email'];
$password = $_POST['password'];

// Perform a database query to check the credentials in the "form" table
$query = "SELECT * FROM form WHERE email = '$email' AND pass = '$password'"; // Adjust column names as needed

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

// Check if a matching user was found
if (mysqli_num_rows($result) == 1) {
    // Successful login, redirect to dashboard.html
    header("Location: dashboard.html");
    exit();
} else {
    // Invalid credentials, display an error message or redirect to a login error page
    echo "Invalid email or password. Please try again.";
}

// Close the database connection
mysqli_close($conn);
?>
