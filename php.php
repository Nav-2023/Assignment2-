<?php
// db_connection.php

$host = 'localhost'; // Your database host (usually localhost)
$db_name = 'my_website_db';
$username = 'your_db_username';
$password = 'your_db_password';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
