<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="buydashboard.css">
    
</head>
<body>
<header class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Shift to Thrift</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        
                    <a class="nav-link" href="about.html">Home</a>
                </li>
               
                <li class="nav-item">
                        <a class="nav-link" href="buydashboard.php">Buy</a>
                 </li>
                <li class="nav-item">
                    <a class="nav-link" href="sell.html">Sell</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.html">Cart</a>
                </li>
              
                <li class="nav-item">
                    <a class="nav-link" href="feedback.html">Feedback</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.html">Logout</a>
                </li>
                
            </ul>
        </div>
    </nav>
         
    </header>
    <div class="container mt-5">
        <h2> BUY WHAT YOU WANT</h2>
        <div class="row">
            <div class="col-md-6">
                <h3></h3>
                <div class="container product-log">
                        
                    
                        <?php require('buy.php'); ?>
                </div>  
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white mt-5 py-3">
        <div class="container text-center">
            <p>&copy; 2023 Shift to Thrift. All rights reserved.</p>
            <p><a href="contact.html">Contact Us <br> Email: contact@shifttothrift.com<br>
                Phone: +1 (123) 456-7890<br>  Address: Symbiosis Institute of Computer Studies and Research</a></p>
        </div>
    </footer>

</body>
</html>
