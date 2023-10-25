<div class="row2">
      <div class="row2 font_title">
      <h1>THÊM TÀI KHOẢN</h1>
      </div>
      <div class="row2 form_content ">
        <form action="index.php?act=taikhoan" method="POST" enctype="multipart/form-data">
          <div class="row2 mb10 form_content_container">
          <div class="row2 mb10">
            <label>Tên người dùng</label> <br>
            <input type="text" name="name" placeholder="nhập vào tên" required>
            <label>Mật khẩu</label> <br>
            <input type="text" name="pass" placeholder="nhập vào mật khẩu" required>
            <label>Email</label>
            <input type="text" name="email" placeholder="nhập vào email" required>
            <label>Vai trò</label>
            <input type="radio" name="vaitro" value="" checked>Khách hàng <br>
            <input type="radio" name="vaitro" value="1">Admin
          <div class="row mb10 ">
          <input class="mr20" type="submit" value="THÊM MỚI" name="add_tk">
          <input  class="mr20" type="reset" value="NHẬP LẠI">
          <a href="index.php?act=taikhoan"><input  class="mr20" type="button" value="DANH SÁCH"></a>
          </div>
        </form>
        
      </div>
    </div>