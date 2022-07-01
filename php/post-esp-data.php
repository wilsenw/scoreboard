<?php

$servername = "localhost";

$dbname = "id19185552_score_database";
$username = "id19185552_admin";
$password = "lxpdfI^%[L?p3[^e";

$api_key_value = "tPmAT5Ab3j7F9";

$api_key= $uid = $score = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $api_key = test_input($_POST["api_key"]);
    if($api_key == $api_key_value) {
        $uid = test_input($_POST["uid"]);
        $score = test_input($_POST["score"]);
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $sql = "INSERT INTO score (uid, score)
        VALUES ('" . $uid . "', '" . $score . "')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }
    else {
        echo "Wrong API Key provided.";
    }

}
else {
    echo "No data posted with HTTP POST.";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}