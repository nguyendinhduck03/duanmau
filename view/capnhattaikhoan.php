<main class="catalog  mb">
      <div class="boxleft">           
        <h1>TÀI KHOẢN CỦA BẠN</h1>
        <br>
        <h2>Thông tin cá nhân</h2>
        <form action="index.php?act=taikhoan" method="post">
            <div style="padding: 10px 0px;">
                <label for="" style="float: left;">Tên đăng nhập / User:</label>
                <input type="text" name="name"  value="<?php echo $user ?>" style="padding: 3px 200px; float: right; background-color: darkgrey;" readonly>
            </div>
            <div style="clear: both; padding: 15px 0px;">
                <label for="" style="float: left;">Tài khoản Email</label>
                <input type="text" name="email"  value="<?php echo $email ?>" style="padding: 3px 200px; float: right; background-color: darkgrey;" readonly>
            </div><br>
            <div style="clear: both; padding: 15px 0px;">
                <label for="" style="float: left;">Địa chỉ</label>
                <input type="text" name="address"  value="<?php echo $address ?>" style="padding: 3px 200px; float: right">
            </div><br>
            <div style="clear: both; padding: 15px 0px;">
                <label for="" style="float: left;">Số điện thoại</label>
                <input type="text" name="phone"  value="<?php echo $phone ?>" style="padding: 3px 200px; float: right;">
            </div> 
            <div style="clear: both; padding: 15px 0px;">
                <label for="" style="float: left;">Mật khẩu</label>
                <input type="password" name="passold"  value="<?php echo $pass ?>" style="padding: 3px 200px; float: right;">
            </div> 
            <div style="clear: both; padding: 15px 0px;">
                <label for="" style="float: left;">Đổi mật khẩu</label>
                <input type="text" name="pass"  value="" style="padding: 3px 200px; float: right;">
            </div> 
            <br><br>
            <input type="submit" name="submit" value="Cập nhật" style="background-color: red; border-radius: 10px; color: white; border: none; padding: 10px;"> 
            <?php if (isset($mess)) {
                echo "<p style ='color: red; float: right;'>".$mess."</p>";
            }
            ?>
        </form>
      </div>
      <!-- <h2>Đổi mật khẩu</h2><br>
      <form action="" style="clear: both;">
        <label for="">Mật khẩu hiện tại</label>
        <input type="text">
        <label for="">Mật khẩu mới</label>
        <input type="text">
      </form> -->
    <?php include 'boxright.php' ?>
    </main>
