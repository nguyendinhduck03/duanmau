<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH LOẠI SẢN PHẨM</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th></th>
                <th>Id</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Ảnh</th>
                <th>Lượt xem</th>
            </tr>
            <?php foreach ($danhmuc as $dm) { 
                extract($dm);
                ?>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $price; ?></td>
                    <td><img src="../img/<?php echo $img; ?>" alt="" style="max-width: 50px"></td>
                    <td><?php echo $luotxem; ?></td>
                    <td>
                        <button><a href="index.php?act=sanpham&idsp=<?php echo $id ?>">Edit</a></button>
                        <button><a href="index.php?act=sanpham&value=del&idsp=<?php echo $id ?>">Delete</a></button>
                    </td>
                </tr>
            <?php } ?>
           </table>
           </div>
           <div class="row mb10 ">
        <input class="mr20" type="button" value="CHỌN TẤT CẢ">
        <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
        <a href="index.php?act=sanpham&btn_add"> <input  class="mr20" type="button" value="NHẬP THÊM" ></a>
           </div>
          </form>
         </div>
        </div>
    </div>