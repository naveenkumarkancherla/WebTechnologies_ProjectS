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

// Fetch tasks from the database
$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

$tasks = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tasks[] = array(
            'taskDescription' => $row['taskDescription'],
            'responsible' => $row['responsible'],
            'eta' => $row['eta']
        );
    }
}

// Close the database connection
$conn->close();

// Return tasks as JSON
echo json_encode($tasks);
?>
