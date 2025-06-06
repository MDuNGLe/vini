<?php
$conn = new mysqli('localhost', 'root', '', 'bookworm2');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>