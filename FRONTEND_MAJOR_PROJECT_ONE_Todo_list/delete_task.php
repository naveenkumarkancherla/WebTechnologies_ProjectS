<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "todoApp"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle task deletion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $taskId = $_POST['taskId'];

    // Delete task
    $sql = "DELETE FROM tasks WHERE id = $taskId";

    if ($conn->query($sql) === TRUE) {
        echo "Task deleted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
