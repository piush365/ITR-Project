<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Checking connection
if ($conn->connect_error == true) {
    die("Connection failed: " . $conn->connect_error);
}

// Getting user data from the sign up form
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

// Inserting user's submitted data in users database
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

// Executing insert command
if ($conn->query($sql) === TRUE) {
    // Starting session
    session_start();

    // Set session variables so user can access other pages throughout
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

    // send user to home page
    header('Location: ../home/index.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// closing users database connection
$conn->close();
?>
