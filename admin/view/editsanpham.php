<div class="row2">
      <div class="row2 font_title">
      <h1>SỬA SẢN PHẨM</h1>
      </div>
      <div class="row2 form_content ">
        <form action="index.php?act=sanpham&idsp=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
          <div class="row2 mb10 form_content_container">
          <div class="row2 mb10">
            <label>Tên sản phẩm</label> <br>
            <input type="text" name="name" placeholder="nhập vào tên" value="<?php echo $name ?>" required>
            <label>Giá </label> <br>
            <input type="text" name="price" placeholder="nhập vào tên" value="<?php echo $price ?>" required>
            <label>Ảnh</label> 
            <img src="../img/<?php echo $img ?>" alt="" style="max-width: 100px">
            <input type="file" name="file_up" required value="<?php echo $img ?>">  <?php //Cần fixxx ?>
            <label>Mô tả</label>
            <textarea name="mota" id="" cols="170" rows="5" required><?php echo $mota ?></textarea>
            <!-- <label for="">ID danh mục</label>
            <select name="iddm" id="">
                <?php foreach ($danhmuc as $dm) { 
                    extract($dm);
                    ?>        
                    <option value="<?php echo $id ?>"><?php echo $name ?></option>
                 <?php } ?>
            </select> -->
          </div>
          <div class="row mb10 ">
          <input class="mr20" type="submit" value="SỬA" name="edit_sp">
          <a href="index.php?act=sanpham"><input  class="mr20" type="button" value="DANH SÁCH"></a>
          </div>
        </form>
        
      </div>
    </div>