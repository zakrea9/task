<?php
include('C:\xampp\htdocs\index\index.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=$_POST['user'];
    $password=$_POST['pass'];
    
    $sql = "INSERT INTO users ( zakrea , password)
    VALUES ('$name', '$password')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}