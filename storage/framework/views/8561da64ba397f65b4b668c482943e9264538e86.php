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
	$id = $_POST["id"];
 	$answer = $_POST["answer"];


$sql = "INSERT INTO questions (id, name, email, question, answer)
VALUES ('$id', '', '', '', '$answer')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('location: vopros');


 ?>