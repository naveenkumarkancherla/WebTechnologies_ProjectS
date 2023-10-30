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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs to prevent SQL injection
    $taskDescription = mysqli_real_escape_string($conn, $_POST['taskDescription']);
    $responsible = mysqli_real_escape_string($conn, $_POST['responsible']);
    $eta = mysqli_real_escape_string($conn, $_POST['eta']);

    // SQL query to insert data into the database
    $sql = "INSERT INTO tasks (taskDescription, responsible, eta) VALUES ('$taskDescription', '$responsible', '$eta')";

    if ($conn->query($sql) === TRUE) {
        echo "Task added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
