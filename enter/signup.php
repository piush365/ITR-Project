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
$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_BCRYPT);

// Insert data into database
$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $user, $email, $pass);

if ($stmt->execute()) {
    // Start session
    session_start();

    // Set session variables
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $user; // Optionally store username in session

    // Redirect to the index.php or home page
    header('Location: ../home/index.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close statement and database connection
$stmt->close();
$conn->close();
?>
