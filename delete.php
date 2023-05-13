<?php 
    session_start();
    include './inc/connect.php';
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
        if ($password == $cpassword) {
            $sql = "DELETE FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
            $result = mysqli_query($connect, $sql);
            if ($result) {
                header ("Location: ./index.php");
            } else {
                echo "Failed";
            }
        } else {
            $_SESSION['error'] = "Какая то ошибка, повторите пожалуйста еще раз";
            header ("Location: ./delete.php");
            exit();
        }
        }
        $connect->close();
    ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete user</title>
</head>
<style>
    .msg {
            margin-left: 20px;
            color: red;
            width: 100%;
        }
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 400px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 94%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #292929;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .text-center {
            text-align: center;
        }

        .text-center a {
            color: #292929;
            text-decoration: none;
        }
    </style>
<body>
<div class="container">
        <h2>Delete account</h2>
        <form action="#" method="POST">
            <input type="text" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="password" placeholder="Confirm Password" name="cpassword" required>
            <button type="submit" name="submit">Delete</button>
            <?php 
            if (isset($_SESSION['error'])) {
                echo "<p class='msg'>" . $_SESSION['error'] . "</p>";
                unset($_SESSION['error']);
            }
            ?>
        </form>
    </div>
    
</body>
</html>