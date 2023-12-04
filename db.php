<?php

$servername = "shopniki.mysql.database.azure.com";
$username = "nikhitha";
$password = "Lifeisbeautiful@1";
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
