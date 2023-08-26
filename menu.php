<?php
    include 'php/server.php';

    if (isset($_GET['logout'])) {
        echo "<script>alert('ออกจากระบบสำเร็จไว้เจอกันใหม่ค่ะ'); window.location = 'index.php';</script>";
        session_destroy();
    } else {

    }

    $id = $_SESSION['id'];
    $menu = "SELECT * FROM menu WHERE account_id = '$id'";
    $result = mysqli_query($conn, $menu);

    if(isset($_GET['del'])) {
        $id = $_GET['del'];
        $del = "DELETE FROM menu WHERE id = '$id'";
        $del_result = mysqli_query($conn, $del);

        if ($del_result) {
            echo "<script>alert('ลบเมนูอาหารสำเร็จ'); window.location = 'menu.php';</script>";
        } else {
            echo "<script>alert('ลบเมนูอาหารไม่สำเร็จกรุณาลองใหม่อีกครั้ง'); window.location = 'menu.php';</script>";
        }
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
            <div class="col col-sm col-md-3">

            </div>
            <div class="col-12 col-sm-12 col-md-6">
                
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>ชื่อเมนูอาหาร</th>
                                <th>ราคา(บาท)</th>
                                <th>ลบ/แก้ไข/ราบละเอียด</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($menuuser = $result->fetch_assoc()) { ?>
                            <tr class="justify-content-end">
                                <td><?php echo $menuuser['foodname']; ?></td>
                                <td><?php echo $menuuser['price']; ?></td>
                                <td>
                                    <a href="menu.php?del=<?php echo $menuuser['id']; ?>" class="btn btn-danger"><img src="img/delete.png" width="28px" height="28px"></a>
                                    <a href="edit.php?edit=<?php echo $menuuser['id']; ?>" class="btn btn-warning"><img src="img/pencil.png" width="28px" height="28px"></a>
                                    <a href="..." class="btn btn-info"><img src="img/information.png" width="28px" height="28px"></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                
            </div>
            <div class="col col-sm col-md-3">

            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>