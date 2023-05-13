<?php 
    include './connect.php';
    $pc_img = "PC.webp";
    $img_keyboard = 'key.avif';
    $gamingpcs = array(
        array("https://3dnews.ru/assets/external/illustrations/2019/11/26/998490/cc1.jpg", "Cougar Conquer 2 GAMING PC", "Новинка относится к изделиям Full Tower. При этом основное шасси, на которое устанавливаются компоненты, закрывается «панцирем» — внешним кожухом, который и придаёт системе футуристический вид. Этот «панцирь» снабжён четырьмя секциями из закалённого стекла. Реализована адресуемая RGB-подсветка Trelux.", "4138.100"),
        array("https://object.pscloud.io/cms/cms/Photo/img_0_65_437_0_1.webp", "Monitor Xiaomi 34 Mi Curved Gaming", "Сверхширокий монитор Xiaomi Mi Gaming Monitor 34 Curved (XMMNTWQ34) идеально подойдет для игр, монтажа и работы с графикой. 34-дюймовый дисплей с разрешением WQHD (3440х1440 пикселей) и соотношением сторон 21:9 дает ощущение полного погружения в происходящее на экране. Визуальное пространство дисплея расширяется на 30%, что дает преимущество в стратегиях и гонках.", "280.990"),
        array("https://object.pscloud.io/cms/cms/Photo/img_0_83_1436_0_6.webp", "HyperX Cloud Alpha S HX-HSCAS-BL/WW Black", "Тип наушников: Полноразмерные / Тип подключения: Проводное / Активное шумоподавление: Да / Bluetooth: Нет / Вес: 968 г", "61.990"),
        array("https://object.pscloud.io/cms/cms/Photo/img_0_65_524_12_6.webp", "Samsung 24 Monitor", "Диагональ: 24″ - 61 см / Разрешение: 1920х1080 (FullHD) / Время отклика: 1 мс / Яркость (Кд): 250 кд/м2 / Частота обновления: 144 Гц", "99.999"),

        array("https://object.pscloud.io/cms/cms/Photo/img_0_83_666_0.webp", " HyperX Cloud II Headset", "Тип наушников: Полноразмерные / Тип подключения: Проводное / Активное шумоподавление: Нет / Bluetooth: Нет / Вес: 302 г", "51.990"),

        array("https://object.pscloud.io/cms/cms/Photo/img_0_89_509_0_6.webp", "HyperX Pulsefire Surge RGB HX-MC002B Mouse", "Категория: Игровая / Соединение: Проводное / Количество клавиш: 6 / Страна производителя: Китай / Длина кабеля: 1,8 м", "30.990"),
    );
    // foreach ($gamingpcs as $row) {
    //     $photo = $row[0];
    //     $name = $row[1];
    //     $dis = $row[2];
    //     $price = $row[3];
    // }
    // $sql = "INSERT  INTO `products` (`photo`, `name`, `dis`, `price`) VALUES ('$photo', '$name', '$dis', '$price')";
    // $result = mysqli_query($connect, $sql);
    // if ($connect->query($sql) === TRUE) {
    //     echo "Record inserted successfully. <br>";
    // } else {
    //     echo "Error inserting record: " . $conn->error() . "<br>";
    // }
    foreach ($gamingpcs as $row) {
        $photo = $row[0];
        $name = $row[1];
        $dis = $row[2];
        $price = $row[3];
    
        $sql = "INSERT INTO `products` (`photo`, `name`, `dis`, `price`) VALUES ('$photo', '$name', '$dis', '$price')";
        $result = mysqli_query($connect, $sql);
    
        if ($result) {
            echo "Record inserted successfully. <br>";
        } else {
            echo "Error inserting record: " . mysqli_error($connect) . "<br>";
        }
    }
    
?>