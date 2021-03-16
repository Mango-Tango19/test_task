<?php

require_once('open_connection_database.php');

$conn = OpenCon();

if (!$conn) {
    exit('CAnnot connect to database');
}

$sql = "CREATE TABLE test(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    value1 INT(6) NOT NULL,
    value2 INT(6) NOT NULL,
    value3 INT(6) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table test created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();