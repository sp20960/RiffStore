<?php 
    $connect = mysqli_connect("localhost", "root", "", "online_shop");

    if (!$connect) {
        echo "Eror" + mysqli_connect_error();
    } else {
        echo "It works!";
    }
?>