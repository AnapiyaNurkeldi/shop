<?php 
    session_start();
    include "./inc/connect.php";
    $sql = "SELECT * FROM `user`";
    $result = mysqli_query($connect, $sql);
    foreach ($result as $row) {
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
<style>

body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}
span {
    cursor: pointer;
}
header {
    background-color: #292929;
    color: #fff;
    padding: 20px;
}

header div {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header div span {
    margin-right: 10px;
    font-size: 14px;
}

header div img {
    height: 40px;
    width: auto;
}

header div input[type="text"] {
    padding: 5px;
    border-radius: 5px;
    border: none;
    background-color: #fff;
    color: #292929;
    font-size: 14px;
    outline: none;
}

header div input[type="text"]::placeholder {
    color: #888;
}

header div a {
    margin-left: 10px;
}

header div a img {
    height: 30px;
    width: auto;
}

@keyframes fade-in {
    0% {
        opacity: 0;
        transform: translateY(-20px);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

header div {
    animation: fade-in 1s ease-in-out;
}

.user-profile {
  background-color: #f5f5f5;
  padding: 20px;
  border-radius: 5px;
}

.user-profile h2 {
  text-align: center;
  font-size: 24px;
  margin-bottom: 20px;
}

.profile-details p {
  font-size: 16px;
  margin-bottom: 10px;
}

.profile-actions {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.profile-actions button {
  padding: 10px 20px;
  margin-right: 10px;
  background-color: #ff5f6d;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.profile-actions button:hover {
  background-color: #e34c5a;
}

</style>
<body>
<header>
        <div>
            <div>
            <span><a href="./main.php" style="text-decoration: none; color: #fff">Home</a></span>
                <span><a href="./products.php" style="text-decoration: none; color: #fff">Products</a></span>
                <span>Service</span>
                <span>Contect</span>
            </div>
            <div>
                <!-- <img src="./img/50.jpeg" alt="ANM Logo"> -->
                <input type="text" placeholder="Search">
                <a href="#"><img src="./icons/basket.png" alt="Basket"></a>
                <a href="#"><img src="./icons/account.png" alt="Account"></a>
            </div>
        </div>
    </header>

<div class="user-profile">
  <h2>User Profile</h2>
  <div class="profile-details">
    <p><strong>Username:</strong><?php echo " " .$row['name'].""; ?></p>
    <p><strong>Email:</strong><?php echo " " .$row['email'].""; ?></p>
    <p><strong>Last online:</strong><?php echo date(" Y-m-d H:i:s") 
    
    ?></p>
    <p><strong>Location:</strong> New York, USA</p>
    <!-- Add more profile details as needed -->
  </div>
  <form action="./inc/logout.php" method="POST">
  <div class="profile-actions">
    <button name="exit">Exit Profile</></button>
    <button type="submit"><a href="./delete.php" style="text-decoration: none; color: white">Delete Account</a></button>
  </div>
  </form>
</div>
</body>
</html>