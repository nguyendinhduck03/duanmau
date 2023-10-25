<main class="catalog  mb ">
  <?php 
  extract($sp); 
  ?>
    <div class="boxleft">
      <div class="  mb">
        <div class="box_title"><?php echo $name ?></div>
        <div class="box_content">
          <img src="img/<?php echo $img ?>" style="width: 300px">
          <p><?php echo $mota ?></p>
        </div>
      </div>
      <div class="mb">
        <div class="box_title">BÌNH LUẬN</div>
        <div class="box_content2  product_portfolio binhluan ">
          <table>
            
            <?php foreach ($binhluan as $bl) { 
              extract($bl) 
              ?>
              <tr>
                <td><?php echo $noidung ?></td>
                <td><?php echo $user ?></td>
                <td><?php echo date("d/m/Y", strtotime($ngaybinhluan)) ?></td>
              </tr>
            <?php } ?>
          </table>
        </div>
        <?php 
        if (isset($_SESSION['user'])) { 
          $iduser = load_taikhoan($_SESSION['user']);
          ?>
          <div class="box_search">
            <form action="index.php?act=chitietsanpham&idsp=<?php echo $id?>" method="POST">
            <input type="hidden" name="iduser" value="<?php echo $iduser['id'] ?>">
              <input type="hidden" name="idpro" value="<?php echo $id?>">
              <input type="text" name="noidung"  >
              <input type="submit" name="guibinhluan" value="Gửi bình luận">
            </form>
          </div>
        <?php } ?>
      </div>
      <div class=" mb">
        <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
        <div class="box_content">
          <?php foreach ($sp_cungloai as $sp) { 
            extract($sp);
            ?>
            <li>
              <img src="img/<?php echo $img ?>" alt="" width="50px">
              <a href="index.php?act=chitietsanpham&idsp=<?php echo $id ?>"><?php echo $name ?></a>
            </li>
          <?php } ?>
          <!-- <li><a href="">Sản phẩm 1</a></li>
          <li><a href="">Sản phẩm 1</a></li>
          <li><a href="">Sản phẩm 1</a></li>
          <li><a href="">Sản phẩm 1</a></li> -->
        </div>
      </div>
    </div>
   <?php include 'boxright.php' ?>
  </main>