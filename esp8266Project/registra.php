<?php
    include 'conecta.php';
    $temp = $_GET['temp'];
    $sql = "INSERT INTO `controlador1` (`id`, `data`, `temperatura`) VALUES (NULL, current_timestamp(), '23'), (NULL, current_timestamp(), '$temp');";
    mysqli_query($conn,$sql);
?>