<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // Use your MySQL password (default is empty on XAMPP)
$dbname = 'assignment_db';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
