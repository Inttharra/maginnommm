<?php

    include 'server.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $login_query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $login_result = mysqli_query($conn, $login_query);

    while ($user = $login_result->fetch_assoc()) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['accountName'] = $user['account_name'];
        $_SESSION['role'] = $user['role'];
    }

    if (mysqli_num_rows($login_result)) {
        echo "<script>alert('ยินดีต้อนรับเข้าสู่ระบบค่ะ'); window.location = '../index.php';</script>";
    } else {
        echo "<script>alert('ชื่อบัญชีหรือรหัสผ่านผิด กรุณาลองใหม่อีกครั้งค่ะ'); window.location = '../login.php';</script>";
    }

?>