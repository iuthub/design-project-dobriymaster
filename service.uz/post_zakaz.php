<?php
$servername = "127.0.0.1";
$username = "root";
$password = ""; 
$dbname="service";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name = $_POST["name"];
$living = $_POST["living"];
$tel = $_POST["tel"];
$problem = $_POST["problem"];



$sql = "INSERT INTO zakaz (id, name, living, tel, problem)
VALUES ('', '$name', '$living', '$tel', '$problem')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('location: remont.html');


 ?>