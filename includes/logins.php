<?php

if (isset($_POST['submitButton'])){
    include_once 'dbh.php';
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password =  mysqli_real_escape_string($connect, $_POST['password']);

    //errors
    if(empty($username) || empty($password)){
        header("Location: ../login.php?login=empty");
        exit();
    }else{
        //checks
        if(!preg_match("/^[a-zA-Z]*$/", $username) || !preg_match("/^[a-zA-Z]*$/", $password)){
            header("Location: ../login.php?login=invalid");
            exit();
        }else{
            $sql ="SELECT * FROM login WHERE username='$username'";
            $result = mysqli_query($connect, $sql);
            $resultCheck = mysqli_num_rows($result);
            if(!$resultCheck > 0){
                header("Location: ../login.php?login=notinsystem");
                exit(); 
            }else{
                //hash
                $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
                //inserting into DB
                $sql = "INSERT INTO login (username, password) VALUES ('$username', '$hashedpwd');";
                mysqli_query($connect, $sql);
                header("Location: ../login.php?login=sucess");
                exit();
            }
        }
    }
}else{
    header("Location: ../login.php");
    exit();
}
