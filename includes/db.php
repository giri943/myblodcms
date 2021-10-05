<?php
session_start();
//Remote DB connection
$servername = "remotemysql.com";
$username = "tVX10USt5C";
$password = "IKtIqo4r2t";
$dataBase="tVX10USt5C";

//Dev DB Connection
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dataBase="myblog";

// Create connection
$db = mysqli_connect($servername, $username, $password,$dataBase);

// Check connection
// if (!$connection) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>