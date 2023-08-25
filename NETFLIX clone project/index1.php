<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location:index.html");
    exit;
}

    $connection=mysqli_connect('127.0.0.1','phpmyadmin','iiits123','sample'); 
    $username = $_POST['uemail'];  
    $password = $_POST['pswd'];  
      
        //to prevent from mysqli injection  
       
        $username = mysqli_real_escape_string($connection, $username);  
        $password = mysqli_real_escape_string($connection, $password);  
      
        $sql = "select *from sample where useremail = '$useremail' and password = '$password'";  
        $result = mysqli_query($connection, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1) {
           
            $_SESSION['login_user'] = $useremail;
            
            header("location: ind1.php");
         }else {
            $error = "Your Login Email or Password is invalid";
            echo "$error";
   
         }    
?>  
