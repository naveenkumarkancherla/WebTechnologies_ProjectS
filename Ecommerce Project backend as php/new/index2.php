<?php
session_start();
include "conn.php";
/*$username = "";
$username_err ="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $sql = "SELECT username FROM sample WHERE username = ?";
        if($stmt = mysqli_prepare($connection, $sql)){
            $param_username = trim($_POST["uname"]);
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                    echo "username already taken";
                } else{
                    $username = trim($_POST["uname"]);
                   
                }
            } 
            else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }*/
    

    if(empty($username_err)){
    $name = $_POST['uname'];
    $password = $_POST['pwd'];
    $mail=$_POST['email'];
    $phone=$_POST['phone'];
    $_SESSION['login_user'] = $name;       
    $query = "CREATE TABLE sample (username VARCHAR(20) NOT NULL, password CHAR(15) NOT NULL,mailid VARCHAR(20),phone INT);";
    if(mysqli_query($connection, $query))
    {
        echo "<h4 style='color:green'>Table Created </h4>";
    }
    else
    {
        echo "<h4 style='color:red'>Table not Created . ".mysqli_error($connection)."</h4>";
    }

    $query = "INSERT INTO sample VALUES(?,?,?,?);";
    $initialize = mysqli_stmt_init($connection);
    if(mysqli_stmt_prepare($initialize, $query))
    {
        mysqli_stmt_bind_param($initialize, "sssi", $name, $password,$mail,$phone);
        mysqli_stmt_execute($initialize);
        echo "hi";
        //header('location:ind1.php');
    }
    else
    {
        echo "<h4 style='color:red'>Record Not Inserted</h4><br>";
    }

    /*$query = "SELECT * FROM sample;";
    $check = mysqli_query($connection, $query);
    if(mysqli_num_rows($check))
    {
    while($row = mysqli_fetch_assoc($check))
    {
        echo  "<b style='color:orange'>".$row["username"]."<b>"."   "."<b style='color:blue'>".$row["password"]."<b><br>";
    }
    }*/
}
?>
