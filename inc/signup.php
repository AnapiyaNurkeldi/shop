<?php 
    session_start();
    include "./connect.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $submit = $_POST['submit'];
    if ($password == $cpassword) {
        $sql = "INSERT INTO `user` (`name`, `email`, `password`) VALUES ('$name','$email','$password')";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            header ("Location: ../index.php");
        } else {
            echo "Failed";
        }
    } else {
        $_SESSION['error'] = "Пароли не совпадают.";
        header ("Location: ../register.php");
        exit();
    }
    
?>