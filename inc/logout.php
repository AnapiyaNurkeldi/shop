<?php
session_start();
include './connect.php';
    if (isset($_POST['exit'])) {
        session_unset();
        session_destroy();
        header("Location: ../index.php");
        exit();
    }
    $connect->close();
?>