<!DOCTYPE html>
<html><body>
<?php

$servername = "localhost";
$dbname = "id19185552_score_database";
$username = "id19185552_admin";
$password = "lxpdfI^%[L?p3[^e";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT uid, date, score FROM score ORDER BY score DESC";

if ($result = $conn->query($sql)) {
    $count = 1;
    while ($row = $result->fetch_assoc()) {
        $row_id = $row["uid"];
        $row_date = $row["date"];
        $row_score = $row["score"];

        echo '<tr> 
                <th scope="row">' . $count . '</th>
                <td>' . $row_id . '</td> 
                <td>' . $row_date . '</td> 
                <td>' . $row_score . '</td> 
              </tr>';
        
        $count += 1;
    }
    $result->free();
}

$conn->close();
?> 
</body>
</html>