<?php
$host = "localhost";
$user = "root";   
$pass = "5995";       
$db   = "taskdb";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
