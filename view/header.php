<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="css/css.css">
    <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
  <!-- BIGIN HEADER -->
  <div class="boxcenter">
    <header>
      <div class="row mb header">
          <h1>Béo Aquarium</h1>
      </div>
      <div class="row mb menu">
        <ul>
            <li class="dropdown"> <a class="dropdownbtn" href="index.php">Trang chủ</a> </li>
            <li class="dropdown">
              <a class="dropdownbtn" href="index.php?act=trang&trang=gioithieu">Giới thiệu</a> </li>
              <!-- <div class="dropdown_content">
                  <a href="">Cá cảnh</a>
                  <a href="">Bể cá</a>
                  <a href="">Đèn</a>
                  <a href="">Vật liệu lọc</a>
                  <a href="">Đồ trang trí</a>
              </div> -->
            <li class="dropdown"> <a class="dropdownbtn" href="index.php?act=trang&trang=lienhe">Liên hệ</a> </li>
            <li class="dropdown"> <a class="dropdownbtn" href="index.php?act=trang&trang=gopy">Góp ý</a> </li>
            <li class="dropdown"> <a class="dropdownbtn" href="index.php?act=trang&trang=hoidap">Hỏi đáp</a> </li>
            <li class="dropdown"> <a class="dropdownbtn" href="index.php?act=giohang">Giỏ hàng (<?php if (isset($soluong)) {echo $soluong['soluong'];}  ?>)</a> </li>
        </ul>
      </div>
    </header>
    <!-- END HEADER -->
