<?php

    include 'server.php';

    $name = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $detail = $_POST['details'];
    $id = $_POST['accountID'];
    $menu_id = $_POST['menu_id'];

    $edit = "UPDATE menu SET `foodname` = '$name', `price` = '$price', `type` = '$type', `details` = '$detail', `account_id` = '$id' WHERE `id` = '$menu_id'";
    $edit_result = mysqli_query($conn, $edit);

    if ($edit_result) {
        echo "<script>alert('แก้ไขเมนูสำเร็จ'); window.location = '../menu.php'</script>";
    } else {
        echo "<script>alert('แก้ไขไม่สำเร็จกรุณาลองใหม่อีกครั้ง'); window.location = '../menu.php'</script>";
    }

?>