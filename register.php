<?php 
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login / Sign Up</title>
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
        .msg {
            margin-left: 120px;
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form action="./inc/signup.php" method="POST">
            <input type="text" placeholder="Full Name" name="name" required>
            <input type="text" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="password" placeholder="Confirm Password" name="cpassword" required>
            <button type="submit" name="submit">Sign Up</button>
        </form>
        <p class="text-center">Already have an account? <a href="./index.php">Log in</a></p>
        <p><?php 
            if (isset($_SESSION['error'])) {
                echo "<p class='msg'>" . $_SESSION['error'] . "</p>";
                unset($_SESSION['error']);
            }
        ?></p>
    </div>
   
</body>

</html>
