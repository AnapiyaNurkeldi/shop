<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login to GAMING SHOP</title>
    <style>
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
            width: 96%;
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
        .msg {
            margin-left: 70px;
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Логин</h2>
        <form action="./inc/signin.php" method="POST">
            <input type="text" placeholder="Email" required name="email">
            <input type="password" placeholder="Пароль" required name="password">
            <button type="submit" name="submit">Войти</button>
        </form>     
        <p class="text-center">У вас нет учетной записи? <a href="./register.php">Зарегистрироваться</a></p>
        <p><?php 
            if (isset($_SESSION['error'])) {
                echo "<p class='msg'>" . $_SESSION['error'] . "</p>";
                unset($_SESSION['error']);
            }
        ?></p>
    </div>
</body>

</html>
