<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $db = "time"; //имя бд, не таблицы
    $conn = mysqli_connect($servername, $username, $password, $db);
    $conn->set_charset("utf8");
?>
