<div class="row2">
         <div class="row2 font_title">
          <h1>Tổng hợp bình luận</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th>Sản phẩm</th>
                <th>Số BL</th>
                <th>Mới nhất</th>
                <th>Cũ nhất</th>
            </tr>
            
            <?php 
                foreach ($sanpham as $sp ) { 
                $sobinhluan = loadbinhluan_sanpham($sp['id']);
                $blmoinhat = binhluan_moinhat($sp['id']);
                $blcunhat = binhluan_cunhat($sp['id']);
            ?>
                <tr>
                    <td><?php echo $sp['name'] ?></td>
                    <td><?php echo $sobinhluan['soluong']?></td>
                    <td><?php echo $blmoinhat['ngaybinhluan'] ?? '0000-00-00'?></td>
                    <td><?php echo $blcunhat['ngaybinhluan'] ?? '0000-00-00'?></td>
                    <td>
                        <button><a href="index.php?act=binhluan&id=<?php echo $sp['id'] ?>">Chi tiết</a></button>
                    </td>
                </tr>
            <?php } ?>
                
            
           </table>
           </div>
          </form>
         </div>
        </div>
    </div>