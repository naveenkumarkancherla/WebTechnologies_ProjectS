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

if(isset($_POST['submit'])) {
    $email = $_POST['uemail'];
    $password = $_POST['password'];

    $check_query = "SELECT Name, Password FROM form WHERE email = ?";
    $stmt_check = mysqli_prepare($conn, $check_query);
    mysqli_stmt_bind_param($stmt_check, "s", $email);
    mysqli_stmt_execute($stmt_check);
    mysqli_stmt_store_result($stmt_check);

    if (mysqli_stmt_num_rows($stmt_check) > 0) {
        mysqli_stmt_bind_result($stmt_check, $Name, $storedPassword);
        mysqli_stmt_fetch($stmt_check);

        if ($password === $storedPassword) {
            $_SESSION['user_email'] = $email;
            $_SESSION['user_name'] = $Name;
            mysqli_stmt_close($stmt_check);
            mysqli_close($conn);
            header("Location: movies.php");
            exit();
        } else {
            echo "<script>
                alert('Invalid password. Please try again.');
                window.location='signin.html';
              </script>";
            exit();
        }
    } else {
        echo "<script>
                alert('You don\\'t have an account yet. Kindly sign up!');
                window.location='signup.html';
              </script>";
        exit();
    }
}

mysqli_close($conn);
?>
