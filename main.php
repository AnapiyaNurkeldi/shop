<!DOCTYPE html>
<html>
<head>
    <title>ANM Gaming Shop</title>
    <link rel="stylesheet" href="./css/main.css">
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

    <div class="product-section">
        <div>
            <img src="./img/PC.webp" alt="Gaming PC">
            <a href="./products.php">BUY NOW</a>
        </div>
        <div>
            <img src="./img/chair.avif" alt="Chair">
            <a href="./products.php">BUY NOW</a>
        </div>
        <div>
            <img src="./img/key.avif" alt="Keyboard">
            <a href="./products.php">BUY NOW</a>
        </div>
    </div>

    <div class="categories">
        <h2>Categories</h2>
        <ul>
            <li><a href="./products.php?search=mouse"><img src="./icons/mouse.png" alt="Mouse Icon">Mouse</a></li>
            <li><a href="./products.php?search=keyboard"><img src="./icons/keyboard.png" alt="Keyboard Icon">Keyboard</a></li>
            <li><a href="./products.php?search=monitor"><img src="./icons/moniitor.png" alt="PC Monitor Icon">Monitor</a></li>
            <li><a href="./products.php?search=PC"><img src="./icons/pc.png" alt="PC Icon">PC</a></li>
            <li><a href="./products.php?search=headset"><img src="./icons/headset.png" alt="Headset Icon">Headset</a></li>
        </ul>
    </div>
    
    <div class="about-us fade-in">
        <h2>About Us</h2>
        <p>Welcome to ANM Gaming Shop, your ultimate destination for all your gaming needs. We are dedicated to providing gamers with top-quality products that enhance their gaming experience.</p>
        <p>At ANM Gaming Shop, you'll find a wide range of gaming peripherals, accessories, and hardware. We offer high-performance gaming PCs, cutting-edge keyboards, ergonomic chairs, immersive headsets, precision mice, and much more.</p>
        <p>Our mission is to empower gamers and provide them with the tools they need to achieve their gaming goals. We strive to deliver exceptional customer service and ensure that every purchase meets your expectations.</p>
        <p>Join our community of passionate gamers and stay updated with the latest gaming trends, news, and promotions. Connect with us on social media, subscribe to our newsletter, and be part of the ANM Gaming Shop family.</p>
    </div>
    
    

    <footer>
        <p>&copy; 2023 ANM Gaming Shop. All rights reserved.</p>
    </footer>
</body>

</html>
