<?php
$db = mysqli_connect("localhost", "root", "", "Resgister");

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
