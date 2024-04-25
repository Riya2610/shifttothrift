<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include("db.php");

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $gender = $_POST['gender'];
    $num = $_POST['number'];
    $address = $_POST['add'];
    $email = $_POST['mail'];
    $password = $_POST['pass'];

    $query = mysqli_query($db, "INSERT INTO form (fname, lname, gender, cnum, address, email, pass) VALUES ('$firstname', '$lastname', '$gender', '$num', '$address', '$email', '$password')");

    if ($query) {
        // Registration success, set a success message
        $successMessage = "Successfully registered!";
        // Redirect to login page after displaying the message
        header("refresh:2;url=login.html"); // Redirect after 0.1 seconds
    } else {
        // Registration failed, show an error message
        $errorMessage = "Error: " . mysqli_error($db);
    }
}
?>
