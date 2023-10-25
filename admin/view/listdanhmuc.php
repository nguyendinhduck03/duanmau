<div class="row2">
         <div class="row2 font_title">
          <h1>Danh sách danh mục</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th>STT</th>
                <th>Danh mục</th>
            </tr>
            <?php 
                $stt = 0;
                foreach ($danhmuc as $dm) { 
                extract($dm);
                $stt +=1;
                ?>
                <tr>
                <td><?php echo $stt ?></td>
                <td><?php echo $name ?></td>
            </tr>
            <?php } ?>
            
           </table>
           <br>
           <a href="index.php?act=danhmuc"><input  class="mr20" type="button" value="THÊM MỚI"></a>
           </div>
          </form>
         </div>
        </div>
    </div>