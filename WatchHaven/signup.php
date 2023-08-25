<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    echo("Connection failed: " . mysqli_connect_error());
}

function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['submit'])) {
    $Name = sanitize_input($_POST['uname']);
    $email = sanitize_input($_POST['uemail']);
    $phone = sanitize_input($_POST['phone']);
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format. Please provide a valid email.'); 
        window.location='signup.html';</script>";
        exit();
    }

    if (strlen($password) < 5) {
        echo "<script>alert('Password must be at least 5 characters long.'); 
        window.location='signup.html';</script>";
        exit();
    }

    if (!preg_match("/^[a-zA-Z ]{4,}$/", $Name)) {
        echo "<script>alert('Invalid name format. Please provide a valid name (more than 3 characters).'); 
        window.location='signup.html';</script>";
        exit();
    }

    if (!preg_match("/^[6-9][0-9]{9}$/", $phone)) {
        echo "<script>alert('Invalid Number format. Please provide a valid Number.'); 
        window.location='signup.html';</script>";
        exit();
    }

    $check_query = "SELECT * FROM form WHERE email = ?";
    $stmt_check = mysqli_prepare($conn, $check_query);
    mysqli_stmt_bind_param($stmt_check, "s", $email);
    mysqli_stmt_execute($stmt_check);
    mysqli_stmt_store_result($stmt_check);

    if (mysqli_stmt_num_rows($stmt_check) > 0) {
        echo "<script>alert('You have already registered. Kindly sign in.'); 
        window.location='signin.html';</script>";
    } else {
        $insert_query = "INSERT INTO form (Name, email, phone, password) VALUES (?, ?, ?, ?)";
        $stmt_insert = mysqli_prepare($conn, $insert_query);
        mysqli_stmt_bind_param($stmt_insert, "ssss", $Name, $email, $phone, $password);

        if (mysqli_stmt_execute($stmt_insert)) {
            echo "<script>
                alert('You are successfully registered!');
                window.location='signin.html';
            </script>";
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt_insert);
    }

    mysqli_stmt_close($stmt_check);
}

if (isset($_GET['logout'])) {
    session_unset(); 
    session_destroy();
    echo "<script>alert('You have been logged out.'); 
    window.location='signin.html';</script>";
    exit();
}
?>
