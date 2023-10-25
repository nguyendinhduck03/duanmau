<div class="boxright">     
        <div class="mb">
          <div class="box_title">TÀI KHOẢN</div>
          <?php if (!isset($_SESSION['user'])) { ?>
          <div class="box_content form_account">
              <form action="./index.php?act=dangnhap" method="POST">
                <h4>Tên đăng nhập</h4>
                <input type="text" name="user" id="">
                <h4>Mật khẩu</h4>
                <input type="password" name="pass" id=""><br>
                <?php if(isset($mess_dangnhap)) { ?>
                <span style="color: red"><?php echo $mess_dangnhap ?></span><br>
                <?php } ?>
                <input type="checkbox" name="" id="">Ghi nhớ tài khoản?<br>
                <input type="submit" name="dangnhap" value="Đăng nhập">
              </form>
              <li class="form_li"><a href="./index.php?act=quenmatkhau">Quên mật khẩu</a></li>
              <li class="form_li"><a href="./index.php?act=dangky">Đăng kí thành viên</a></li>
          </div>
          <?php } else { ?>
              <br>
              <?php 
              $tk = load_vaitro($_SESSION['user']);
              if($tk['role'] == 1) { ?>
                <button><a href="./admin/index.php">Trang quản trị</a></button> <br><br>
              <?php } ?>
              <button><a href="index.php?act=taikhoan">Cập nhật tài khoản</a></button><br><br>
              <button><a href="index.php?act=dangxuat">Đăng xuất</a></button>
              
        <?php } ?>
        </div>
        <div class="mb">
          <div class="box_title">DANH MỤC</div>
          <div class="box_content2 product_portfolio">
            <ul >
              <?php foreach ($dsdm as $dm) { 
                extract($dm);
                ?>
                <li><a href="index.php?act=sanpham&iddm=<?php echo $id ?>"><?php echo $name ?></a></li>
              <?php } ?>
                <!-- <li><a href="">Bể cá</a></li>
                <li><a href="">Đèn</a></li>
                <li><a href="">Vật liệu lọc</a></li>
                <li><a href="">Đồ trang trí</a></li> -->
            </ul>
          </div>
        </div>
        <div class="mb">
          <form action="index.php?act=sanpham" method="post">
            <button type="submit" name="submit">Tìm kiếm</button>
            <input type="search" name="namesp" value="<?php if(isset($_POST['namesp'])) {echo $_POST['namesp'];} ?>">
          </form>
        </div>
        <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
        <div class="mb">
          <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
          <div class="box_content">
            <?php foreach ($dstop10 as $ds) { 
              extract($ds);
              ?>
              <div class="selling_products" style="width:100%;">
                <img src="img/<?php echo $img ?>">
                <a href="index.php?act=chitietsanpham&idsp=<?php echo $id ?>"><?php echo $name ?></a>
              </div>
            <?php } ?>
            
            <!-- <div class="selling_products" style="width:100%;">
              <img src="img/anh1.jpg">
              <a href="">Đồng hồ đeo tay nữ</a>
            </div>
            <div class="selling_products" style="width:100%;">
              <img src="img/anh1.jpg">
              <a href="">Đồng hồ đeo tay nữ</a>
            </div>
            <div class="selling_products" style="width:100%;">
              <img src="img/anh1.jpg">
              <a href="">Đồng hồ đeo tay nữ</a>
            </div>
            <div class="selling_products" style="width:100%;">
              <img src="img/anh1.jpg">
              <a href="">Đồng hồ đeo tay nữ</a>
            </div> -->
          </div>
        </div>
      </div>