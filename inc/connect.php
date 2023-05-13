<?php  
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "root");
    define("DB_NAME", "store");
    
    $connect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    // if(!$connect){
    //     die("Connection failed: " . mysqli_connect_error());
    // } else {
    //     echo "Connected successfully";
    // }

?>