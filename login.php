<?php

    session_start();
    
    

    if (isset($_POST['username']) && isset($_POST['password'])){
       /* $uname = $_POST['username'];
        $pword = $_POST['password'];*/
        $_SESSION['uname'] = $_POST['username'];
        $_SESSION['pword'] = $_POST['password'];
        echo $_SESSION['uname']." your password is ". $_SESSION['pword'];
        }

            session_unset();

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #857e7e;">
    <div style="text-align:center; color: azure; font-size: 20px;">
        <form action="login.php" method="POST">
            <p>Username</p>
            <input type="text" name="username" style="width:200px; height:30px;">
            <p>Password</p>
            <input type="password" name="password" style="width:200px; height:30px;">
            <p><a href="#">Forgot password?</a></p>
            <button type="submit" name="submit" style="width:100px; height:30px;">Login</button>
        </form>
        <form action="login.php" method="POST">
            <button type="submit" name="submit" style="width:100px; height:30px;"> 
            Or Sign Up
            </button>
        </form>
        
    </div>
    
</body>
</html>
