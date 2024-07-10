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
$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_BCRYPT);

// Insert data into database
$sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Signup successful. <a href='login.html'>Login here</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
