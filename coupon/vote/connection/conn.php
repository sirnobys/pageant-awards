<?php


$servername = "sql204.ezyro.com";
$username = "ezyro_25144411";
$password = "vpbbo4ddwev";



$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
