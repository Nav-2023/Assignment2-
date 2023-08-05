<?php
// login.php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle user login form submission
    $username = $_POST['username'];
    $password = $_POST['password']; // You should hash the password for security

    // Query the database to check if the user exists and the password is correct
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->execute([$username, $password]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Start a session and store user data (you may also set cookies)
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // Redirect the user to the homepage or a restricted area
        header('Location: index.php');
        exit();
    } else {
        // Display an error message for invalid login
        $error = "Invalid username or password.";
    }
}
?>

<!-- Create a login form in HTML with necessary fields (username, password, etc.) -->
<!-- Ensure proper form attributes, method, and action -->
