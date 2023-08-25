<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $pname = rand(1000, 10000) . '-' . $_FILES['file']['name'];
    $tname = $_FILES['file']['tmp_name'];
    $uploads_dir = './images'; 

    move_uploaded_file($tname, $uploads_dir . '/' . $pname);
    $sql = "INSERT INTO fileup(title, image) VALUES('$title', '$pname');";
    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("File successfully uploaded");
              window.location="movies.php";</script>';
    } else {
        echo "Error uploading file";
    }
}
?>
