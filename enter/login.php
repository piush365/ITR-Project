<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$user = $_POST['username'];
$pass = $_POST['password'];

// Retrieve user from database
$sql = "SELECT * FROM users WHERE username='$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($pass, $row['password'])) {
        echo "Login successful. Welcome, " . $row['username'];
    } else {
        echo "Invalid password. <a href='login.html'>Try again</a>";
    }
} else {
    echo "No user found with that username. <a href='login.html'>Try again</a>";
}

$conn->close();
?>
