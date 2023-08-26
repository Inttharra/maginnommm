<?php 

    session_start();

    $conn = new mysqli('localhost', 'root', '', 'dessert');

    if ($conn->connect_error) {
        die("connection failed" . $conn->connect_error);
    } else {
        // echo "connection success";
    }
    
?>