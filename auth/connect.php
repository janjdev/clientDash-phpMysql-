<?php
$servername = "mysql1003.mochahost.com";
$username =  'brklyn31_DS';
$password =  "8e2aFA8naRhRzav";
$dbname = "brklyn31_dsClientDash";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
