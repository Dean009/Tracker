<?php

if (isset($_POST['submitButton'])){
    include_once 'dbh.php';
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    //errors
    if(empty($username) || empty($password) || !preg_match("/^[a-zA-Z]*$/", $username) || !preg_match("/^[a-zA-Z]*$/", $password)){
        header("Location: ../login.php?login=fail");
        exit();
    }else{
            $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
            $query ="SELECT * FROM login WHERE username='$username' AND password='$hashedpwd'";
            $result = mysqli_query($connect, $query);
            if($result == true){
                header("Location: ../login.php?login=sucess");
                exit();
                }else{
                    header("Location: ../login.php?login=notinsystem");
                    exit(); 
                    }
                }
}else{
    header("Location: ../login.php");
    exit();
}
