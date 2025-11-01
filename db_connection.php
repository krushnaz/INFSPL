<?php

$servername = "89.117.157.204";
$username = "u156619954_infs";
$password = "Investments2023@";
$database = "u156619954_infs";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // print('connected');
}

//get result

// function getResult($sql, $connection)
// {
//     $sql = "SELECT * FROM basic_settings WHERE language_id=169";
//     $result = $connection->query($sql);
//     return $result;


// }
?>