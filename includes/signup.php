<?php

if (isset($_POST['submitButton'])){
    include_once 'dbh.php';
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password =  mysqli_real_escape_string($connect, $_POST['password']);
    $email =  mysqli_real_escape_string($connect, $_POST['email']);

    //errors
    if(empty($username) || empty($password)){
        header("Location: ../signuppage.php?signuppage=empty");
        exit();
    }else{
        //checks
        if(!preg_match("/^[a-zA-Z]*$/", $username) || !preg_match("/^[a-zA-Z]*$/", $password)){
            header("Location: ../login.php?signuppage=invalid");
            exit();
        }else{
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../signuppage.php?signuppage=invalidemail");
                exit(); 
            }else{
                 //hash
                $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
                //inserting into DB
                $sql = "INSERT INTO login (username, password, email) VALUES ('$username', '$hashedpwd', '$email');";
                mysqli_query($connect, $sql);
                header("Location: ../signuppage.php?signuppage=success");
                exit();
            }
            }
        }
}else{
    header("Location: ../signuppage.php");
    exit();
}
