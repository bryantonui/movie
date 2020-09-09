<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="movieshop";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";


// Create database
// $sql = "CREATE DATABASE MOVIESHOP";
//if ($conn->query($sql) === TRUE) {
//    echo "Database created successfully";
//} else {
//    echo "Error creating database: " . $conn->error;
//}
//
//$conn->close();

// sql to create table
$sql = "CREATE TABLE movie_details (
movieid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
moviename VARCHAR(20),
moviegenre VARCHAR(20),
releasedate date (),
movierating int (2)
)";

//if ($conn->query($sql) === TRUE) {
//    echo "Table MyGuests created successfully";
//} else {
//    echo "Error creating table: " . $conn->error;
//}
//
//$conn->close();

$sql = "CREATE TABLE movie_bookings (
movieid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
moviename VARCHAR(20),
moviegenre VARCHAR(20),
payment int (20),
noofcopies int (15)
)";
//if ($conn->query($sql) === TRUE) {
//    echo "Table MyGuests created successfully";
//} else {
//    echo "Error creating table: " . $conn->error;
//}
//
//$conn->close();
?>