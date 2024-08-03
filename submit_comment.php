<?php
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "comments_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the comment from the POST request
    $comment = $_POST['comment'];

    // Directly use the comment in the SQL query
    $sql = "INSERT INTO comments (comment) VALUES ('$comment')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?status=success");
    } else {
        header("Location: index.php?status=error");
    }
}

$conn->close();
?>
