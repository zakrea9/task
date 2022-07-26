<?php
include('C:\xampp\htdocs\index\index.php');
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=$_POST['user'];
    $password=$_POST['pass'];
    echo $name . $password;
}