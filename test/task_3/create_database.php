<?php

$user = 'root';
$password = 'root';
$host = 'localhost';
$port = 8889;


$conn = new mysqli($host, $user, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE teremTest";
if ($conn->query($sql) === TRUE) {
  echo "Database created";
} else {
  echo "Error database: " . $conn->error;
}

$conn->close();
