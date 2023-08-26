<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'php/navbar.php' ?>
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-1 col-sm-1 col-md-2">

            </div>
            <div class="col-10 col-sm-10 col-md-8">
                <div class="my-3 fs-4 text-center">
                    เข้าสู่ระบบ
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="php/login_db.php" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">ชื่อบัญชีผู้ใช้งาน</label>
                                <input type="text" name="username" id="" placeholder="กรอกชื่อบัญชีผู้ใช้งาน" required class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">รหัสผ่าน</label>
                                <input type="password" name="password" id="" placeholder="กรอกรหัสผ่าน" required class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success w-100">เข้าสู่ระบบ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-1 col-sm-1 col-md-2">

            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>