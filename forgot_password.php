<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Ordering - Shift to Thrift</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="forgot_password.css">
</head>
        
       


<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Shift to Thrift</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
                
            </ul>
        </div>
    </nav>


    <!-- Page Content -->
    <div class="container mt-5">
        <h1>Forgot Password</h1>
        <form action="" method="POST">
            <label for="email">Enter your email:</label>
            <input type="email" name="email" id="email" required>
            <button type="submit" name="submit">Submit</button>
        </form>

        <!-- Display the password here -->
        <div id="password" style="display: none;" class="output-message">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Get the user's entered email address
                $email = $_POST["email"];

                // Connect to your database (replace with your database credentials)
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "Resgister";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Query to fetch the user's password (assuming email is unique)
                $sql = "SELECT pass FROM form WHERE email = '$email'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $userPassword = $row["pass"];
                    echo "Your password is: " . $userPassword;
                    echo '<script>document.getElementById("password").style.display = "block";</script>';
                } else {
                    echo "Email not found in the database.";
                }

                $conn->close();
            }
            ?>
        </div>
    </div>
</body>
</html>
