<?php 
    session_start();
    include "./connect.php";
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_user = mysqli_query($connect, "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            'email' => $user['email'],
            'password' => $user['password']
        ];
        header("Location: ../main.php");
    } else {
        $_SESSION['error'] = "Не правильный логин или пароль";
        header("Location: ../index.php");
        exit();
    }

?>