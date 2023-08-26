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
                    <center>
                        <img src="img/dessert.png" width="100px" height="100px">
                    </center>
                <div class="row mb-3 fs-3">
                    <div class="text-center"> เพิ่มเมนูอาหาร </div>
                </div>
                <div class="row mb-3">
                    <form action="php/add_menu_db.php" method="post">
                        <input type="hidden" name="accountID" value="<?php echo $_SESSION['id'] ?>">
                        <div class="row mb-3">
                            <div class="col-12 col-sm-12 col-md-4">
                                <label for="name" class="form-label">ชื่อเมนูอาหาร</label>
                                <input type="text" name="name" required placeholder="ใส่ชื่อเมนูอาหาร" class="form-control">
                            </div>
                            <div class="col-12 col-sm-12 col-md-4">
                                <label for="price" class="form-label">ราคาอาหาร</label>
                                <input type="text" name="price" required placeholder="ใส่ราคาอาหาร" class="form-control">
                            </div>
                            <div class="col-12 col-sm-12 col-md-4">
                                <label for="name" class="form-label">ประเภทอาหาร</label>
                                <select name="type" id="" class="form-select">
                                    <option value="คาว" selected>คาว</option>
                                    <option value="หวาน">หวาน</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="details" class="form-label">รายละเอียดของเมนู</label>
                            <div class="form-floating">
                                <textarea class="form-control" style="height: 100px" required name="details"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <button type="submit" class="btn btn-success w-100">เพิ่มเมนูอาหาร</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-1 col-sm-1 col-md-3">

            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>