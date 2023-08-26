<nav class="navbar navbar-expand-lg" style="background-color: #606C5D;">
  <div class="container-fluid">
    <a href="index.php" class="navbar-brand" style="color: #FFF4F4;">
        <img src="img/cake.png" height="48px" width="48px">
        มากินหนม
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color: #FFF4F4;">หน้าหลัก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="add_menu.php" style="color: #FFF4F4;">เพิ่มเมนูอาหาร</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="menu.php" style="color: #FFF4F4;">แก้ไข/ลบเมนูอาหาร</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <?php if(isset($_SESSION['accountName'])) { ?>
            <span class="navbar-text me-4" style="color: #FFF4F4;">
                ชื่อผู้ใช้งาน : <?php echo $_SESSION['accountName']; ?>
            </span>
            <a href="index.php?logout='0'" class="btn btn-danger">ออกจากระบบ</a>
        <?php } else { ?>
            <a href="login.php" class="btn" style="background-color: #F7E6C4;">เข้าสู่ระบบ</a>
        <?php } ?>
      </form>
    </div>
  </div>
</nav>