<?php

require_once('open_connection_database.php');

$conn = OpenCon();

if(($handle = fopen("test.csv", "r")) !== FALSE){
    while(($row = fgetcsv($handle)) !== FALSE){
            $result = $conn->query('SELECT COUNT(1) FROM test WHERE ID = ' . $row[0]);
            if ($result) {
                $conn->query("UPDATE test SET name = '{$row[1]}', value1 = {$row[2]}, value2 = {$row[2]}, value3 = {$row[4]} WHERE ID = {$row[0]}");
                echo $conn -> error;
            } else {
                $conn->query('INSERT INTO `test`( `name`, `value1`, `value2`, `value3`) VALUES ("'.$row[1].'","'.$row[2].'","'.$row[3].'","'.$row[4].'")'); 
            } 
    }
    fclose($handle);
}

