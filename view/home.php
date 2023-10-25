<main class="catalog  mb">
      <div class="boxleft">           
        <div class="banner">
          <img id="banner" src="./img/anh0.jpg" alt="">
          <button class="pre" onclick="pre()">&#10094;</button>
          <button class="next" onclick="next()">&#10095;</button>
        </div>
        <div class="items">   
          <?php foreach ($spnew as $sp) { 
            extract($sp);
            $hinh = $img_path.$img;
            ?> 
          <div class="box_items">
            <div class="box_items_img">
              <a href="index.php?act=chitietsanpham&idsp=<?php echo $id ?>"><img src="<?php echo $hinh ?>"></a>
              <div class="add">
                <form action="index.php?act=giohang" method="post">
                  <input type="hidden" name="idsp" value="<?php echo $id ?>">
                  <input type="hidden" name="user" value="<?php if(isset($_SESSION['user'])) {echo $_SESSION['user'];} ?>">
                  <input type="submit" name="submit" value="ADD TO CART" style="color: white; border: none; background-color: aqua; padding: 6px 70px; " >
                </form>
              </div>
            </div>
            <a class="item_name" href="index.php?act=chitietsanpham&idsp=<?php echo $id ?>"><?php echo $name ?></a>
            <p class="price"><?php echo $price ?></p>
          </div>
          <?php } ?>
          <!-- <div class="box_items">
            <div class="box_items_img">
              <img src="img/thantien.jpg">
              <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href="">Thần tiên ai cập</a>
            <p class="price">$4000</p>             
          </div>
          <div class="box_items">
            <div class="box_items_img">
              <img src="img/pingpong.jpg">
              <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href="">Ping pong</a>
            <p class="price">$4000</p>             
          </div>
          <div class="box_items">
            <div class="box_items_img">
            <img src="img/thuysinh1.jpg">
              <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href="">layout suối</a>
            <p class="price">$4000</p>             
          </div>
          <div class="box_items">
            <div class="box_items_img">
            <img src="img/thuysinh2.jpg">
              <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href="">Layout đơn giản</a>
            <p class="price">$4000</p>             
          </div>
          <div class="box_items">
            <div class="box_items_img">
            <img src="img/thuysinh3.jpg">
              <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href="">Combo 2 layout</a>
            <p class="price">$4000</p>             
          </div>
          <div class="box_items">
            <div class="box_items_img">
            <img src="img/vatlieu1.jpg">
              <a class="add" href="">ADD TO CART</a>
            </div>
            <a class="item_name" href="">Đá nham thạch</a>
            <p class="price">$4000</p>             
          </div>
          <div class="box_items">
            <div class="box_items_img">
            <img src="img/vatlieu2.jpg">
              <div class="add" href="">ADD TO CART</div>
            </div>
            <a class="item_name" href="">Lọc thác</a>
            <p class="price">$4000</p>             
          </div>
          <div class="box_items">
            <div class="box_items_img">
            <img src="img/vatlieu3.jpg">                  
            <div class="add"><a href="danhsach.html">ADD TO CART</a></div>
            </div>
            <a class="item_name" href="">Đèn led</a>
            <p class="price">$4000</p>             
          </div> -->
        </div>
      </div>
    <?php include 'boxright.php' ?>
    </main>
      <!-- BANNER 2 -->