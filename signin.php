<?php

    session_start();
    require_once 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `username` = '$username'");
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);
        $hash = $user['password'];
        if (password_verify($password,$hash)){
            $_SESSION['user'] = [
                "id" => $user['id'],
                "username" => $user['username'],
                "email" => $user['email']
            ];
    
            header('Location: ../profile.php');
        } else {
            $_SESSION['message'] =  "Невернй пароль";
            header('Location: ../login.php');
        }



    } else {
        $_SESSION['message'] = 'Такого пользователя не существует';
        header('Location: ../login.php');
    }
    ?>
