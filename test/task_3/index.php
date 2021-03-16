<?php

require_once('open_connection_database.php');

$conn = OpenCon();

$sql = "SELECT * FROM test";

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['value1'] . "</td>";
                echo "<td>" . $row['value2'] . "</td>";
                echo "<td>" . $row['value3'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);