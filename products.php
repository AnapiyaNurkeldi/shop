<?php
session_start();
include './inc/connect.php';

// Обработка поискового запроса
$search = isset($_GET['search']) ? $_GET['search'] : '';
$search = strtolower($search);

$sql = "SELECT * FROM `products`";
$result = mysqli_query($connect, $sql);

if ($result->num_rows > 0) {
    $products = array();

    while ($row = $result->fetch_assoc()) {
        $productName = strtolower($row['name']);

        if (strpos($productName, $search) !== false) {
            $products[] = $row;
        }
    }

    if (!empty($products)) {
        $productsHtml = '';

        foreach ($products as $product) {
            $productId = $product['id'];
            $productName = $product['name'];
            $productImage = $product['photo'];
            $productDescription = $product['dis'];
            $productPrice = $product['price'];

            $productHtml = '<div class="product">';
            $productHtml .= '<img src="' . $productImage . '" alt="' . $productName . '">';
            $productHtml .= '<h3>' . $productName . '</h3>';
            // $productHtml .= '<p>' . $productDescription . '</p>';
            $productHtml .= '<p>$' . $productPrice . '</p>';
            $productHtml .= '<a href="buy.php?id=' . $productId . '">Buy Now</a>';
            $productHtml .= '</div>';

            $productsHtml .= $productHtml;
        }

        // echo $productsHtml;]
    } else {
        $_SESSION['msg'] = "Ничего не найдено";
        // echo $_SESSION['msg'];
    }
} else {
    $_SESSION['msg'] = "Ничего не найдено";
    // echo $_SESSION['msg'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link rel="stylesheet" href="./css/products.css">
</head>
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
            <form method="get" action="./products.php">
                <input type="text" name="search" placeholder="Search">
                <button type="submit">Search</button>
            </form>
            <a href="#"><img src="./icons/basket.png" alt="Basket"></a>
            <a href="./user.php"><img src="./icons/account.png" alt="Account"></a>
        </div>
    </div>
</header>

<div class="products">
    <h2>Products</h2>
        <div class="search-filter" style="margin-left: 100px; margin-top: 10px;">
        <form method="get" action="./products.php">
                <input type="text" name="search" style="border: solid; margin-left: 56px; border-color: #e34c5a;" placeholder="Search">
                <button type="submit" class="button" style="  padding: 10px 20px; margin-right: 10px; background-color: #ff5f6d; color: #fff; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease;"><img src="./icons/search.png" width="15px" alt="Search"></button>
            </form>
        </div>
    <?php
    if (!empty($productsHtml)) {
        echo $productsHtml;
    } else {
        echo '<p class="msg" style="
            text-align: center;
            font-size: 20px;
            margin-left: 400px;
            margin-bottom: 20px;z
            color: red;">Ничего не найдено</p>';
    }
    ?>
</div>

<footer>
   

<footer>
    <p>&copy; 2023 ANM Gaming Shop. All rights reserved.</p>
</footer>
</body>
</html>
