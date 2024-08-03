<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";

// Creating connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Gettinng data
$user = $_POST['username'];
$pass = $_POST['password'];

// selecting user data from users db
$sql = "SELECT * FROM users WHERE username='$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // storing sqlresult object ie reterived user data username,emal,password in row array
    $row = $result->fetch_assoc();
    // check if user stored password match entered password
    if ($pass === $row['password']) {
        // Starting session
        session_start();

        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $user; 

        // jump user to  home page
        header('Location: index.php');
        exit();
    } else {
        echo "Invalid password. <a href='Signup.html'>Try again</a>";
    }
} else {
    // if username not found
    echo "No user found with that username. <a href='Signup.html'>Try again</a>";
}

// Close database connection
$conn->close();
?>
