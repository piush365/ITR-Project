<?php
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

// Get user data from the sign-up form
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

// Insert user's submitted data into the users database
$sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$pass')";

// Execute insert command
if ($conn->query($sql) === TRUE) {
    // Start session
    session_start();

    // Set session variables so user can access other pages throughout
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $user;

    // Send user to home page
    header('Location: home.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close users database connection
$conn->close();
?>
