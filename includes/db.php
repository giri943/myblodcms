<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dataBase="myblog";

// Create connection
$db = mysqli_connect($servername, $username, $password,$dataBase);

// Check connection
// if (!$connection) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>