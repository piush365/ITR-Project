<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$user = $_POST['username'];
$pass = $_POST['password'];

// Prepare and bind SQL statement with parameters
$sql = "SELECT * FROM users WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // User found, verify password
    $row = $result->fetch_assoc();
    if (password_verify($pass, $row['password'])) {
        // Start session
        session_start();

        // Set session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $user; // Optionally store username in session

        // Redirect to the index.php or home page
        header('Location: ../home/index.php');
        exit();
    } else {
        // Invalid password
        echo "Invalid password. <a href='login.html'>Try again</a>";
    }
} else {
    // No user found with that username
    echo "No user found with that username. <a href='login.html'>Try again</a>";
}

// Close statement and database connection
$stmt->close();
$conn->close();
?>
