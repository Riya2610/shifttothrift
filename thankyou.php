<?php
// Generate a random delivery day between 10 to 15 days
$deliveryDay = rand(10, 15);

// Generate a random order ID (for example, a 6-digit number)
$orderID = rand(100000, 999999);

// Process the form data if needed (e.g., storing it in a database)

// Display the thank you message
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Ordering - Shift to Thrift</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="thankyou.css">
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
                    <a class="nav-link" href="buydashboard.php">Buy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
                
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h2>Thank You for Your Order!</h2>
        <p>Your order has been successfully placed.</p>
        <p>Estimated Delivery Day: <?php echo $deliveryDay; ?> days</p>
        <p>Order ID: <?php echo $orderID; ?></p>
    </div>

    

</body>
</html>
