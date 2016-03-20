<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 15/03/2016
 * Time: 21:39
 */

$servername = "ap-cdbr-azure-east-c.cloudapp.net";
$username = "bccb84f33826f0";
$password = "7b0e4bef";
$db = "Nonso1514414";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>