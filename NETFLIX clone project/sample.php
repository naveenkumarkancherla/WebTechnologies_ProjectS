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
    $email = $_POST['uemail'];
    $password = $_POST['password'];

    // Check if the email already exists in the database
    $check_query = "SELECT * FROM form WHERE email = ?";
    $stmt_check = mysqli_prepare($conn, $check_query);
    mysqli_stmt_bind_param($stmt_check, "s", $email);
    mysqli_stmt_execute($stmt_check);
    mysqli_stmt_store_result($stmt_check);

    if (mysqli_stmt_num_rows($stmt_check) > 0) {
        // Email is already registered
        echo "<script>alert('You have already registered.')</script>";
    } else {
        // Insert the email into the database
        $insert_query = "INSERT INTO form (email, password) VALUES (?, ?)";
        $stmt_insert = mysqli_prepare($conn, $insert_query);
        mysqli_stmt_bind_param($stmt_insert, "ss", $email, $password);

        if (mysqli_stmt_execute($stmt_insert)) {
            echo "<script> <h1 style='color:green'>alert('Successfully registered!')</h1></script>";
        } else {
            // Error occurred during registration
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt_insert);
    }

    mysqli_stmt_close($stmt_check);
    mysqli_close($conn);
}
?>
