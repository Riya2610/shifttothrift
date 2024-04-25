<?php
// Debugging output
echo "Before database connection";




// Database connection details
$host = "localhost";
$username = "root";
$password = "";
$database = "Resgister";

// Create a database connection
$db_connection = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Debugging output
echo "Database connection successful";
?>
