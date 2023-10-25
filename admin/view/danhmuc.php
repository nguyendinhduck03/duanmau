<div class="row2">
      <div class="row2 font_title">
      <h1>THÊM MỚI DANH MỤC</h1>
      </div>
      <div class="row2 form_content ">
        <form action="./index.php?act=danhmuc" method="POST">
          <div class="row2 mb10 form_content_container">
          <label> Mã loại </label> <br>
          <input type="text" name="maloai" value="Auto number" placeholder="nhập vào mã loại(chỉ nhập số)" required oninvalid="setCustomValidity('Bạn không thể thêm sản phẩm nếu để trống nó')" readonly>
          </div>
          <div class="row2 mb10">
          <label>Tên loại </label> <br>
          <input type="text" name="tenloai" placeholder="nhập vào tên" required oninvalid="setCustomValidity('Bạn không thể thêm sản phẩm nếu để trống nó')">
          </div>
          <div class="row mb10 ">
          <input class="mr20" type="submit" value="THÊM MỚI" name="submit">
          <input  class="mr20" type="reset" value="NHẬP LẠI">
          <a href="index.php?act=danhmuc&list"><input  class="mr20" type="button" value="DANH SÁCH"></a>
          </div>
        </form>
      </div>
    </div>