<?php
// register.php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle user registration form submission
    $username = $_POST['username'];
    $password = $_POST['password']; // You should hash the password for security

    // Insert the user data into the database (you should add more validation and error handling)
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->execute([$username, $password]);

    // Redirect the user to the login page after successful registration
    header('Location: login.php');
    exit();
}
?>

<!-- Create a registration form in HTML with necessary fields (username, password, etc.) -->
<!-- Ensure proper form attributes, method, and action -->
