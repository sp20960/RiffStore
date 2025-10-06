<?php 

    $connect = mysqli_connect("localhost", "root", "", "onlineshop");

    if (!$connect) {
        echo "Eror" + mysqli_connect_error();
    } else {
        echo "It works!";
    }

?>