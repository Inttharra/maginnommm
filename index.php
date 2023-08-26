<?php
    include 'php/server.php';

    if (isset($_GET['logout'])) {
        echo "<script>alert('ออกจากระบบสำเร็จไว้เจอกันใหม่ค่ะ'); window.location = 'index.php';</script>";
        session_destroy();
    } else {

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>มากินหนม</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'php/navbar.php' ?>
    <div class="container-fluid">
        <div class="row my-5">
            <div class="col-1 col-sm-1 col-md-3">

            </div>
            <div class="col-10 col-sm-10 col-md-6">
                <div class="row mb-4">
                    <div class="justify-content-center">
                        <a href="add_menu.php" style="text-decoration: none;">
                        <div class="d-flex card">
                            <div class="card-body">
                                <div class="d-inline-flex align-items-center">
                                <div class="">
                                    <img src="img/order-food.png" height="70px" width="70px">
                                </div>
                                <div class="flex-grow-1 ms-3" style="color: #606C5D;">
                                    เพิ่มเมนูอาหาร
                                </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="justify-content-center">
                    <a href="menu.php" style="text-decoration: none;">
                        <div class="d-flex card">
                            <div class="card-body">
                                <div class="d-inline-flex align-items-center">
                                <div class="">
                                    <img src="img/hot.png" height="70px" width="70px">
                                </div>
                                <div class="flex-grow-1 ms-3" style="color: #606C5D;">
                                    แก้ไข/ลบเมนูอาหาร
                                </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-1 col-sm-1 col-md-3">

            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>