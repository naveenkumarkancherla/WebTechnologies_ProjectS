<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "todoApp";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $taskId = $_POST['taskId'];
    $taskDescription = $_POST['taskDescription'];
    $responsible = $_POST['responsible'];
    $eta = $_POST['eta'];

    // SQL query to update data in the database
    $sql = "UPDATE tasks SET taskDescription = '$taskDescription', responsible = '$responsible', eta = '$eta' WHERE id = $taskId";

    if ($conn->query($sql) === TRUE) {
        echo "Task updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
