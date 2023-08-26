<?php

    include 'server.php';

    $name = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $detail = $_POST['details'];
    $id = $_POST['accountID'];

    $add_query = "INSERT INTO menu (`foodname`, `price`, `type`, `details`, `account_id`) VALUES ('$name', '$price', '$type', '$detail', '$id')";
    $add_result = mysqli_query($conn, $add_query);

    if ($add_result) {
        echo "<script>alert('เพิ่มเมนูอาหารสำเร็จ'); window.location = '../add_menu.php'</script>";
    } else {
        echo "<script>alert('เพิ่มเมนูไม่สำเร็จลองใหม่อีกครั้ง'); window.location = '../add_menu.php'</script>";
    }

?>