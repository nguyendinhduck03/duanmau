<div class="row2">
         <div class="row2 font_title">
          <h1>Chi tiết bình luận</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th>Nội dung</th>
                <th>Ngày bình luận</th>
                <th>Người bình luận</th>
                <th></th>
            </tr>
                <?php foreach ($comments as $cmt) {
                        extract($cmt);
                    ?>
                <tr>
                    <td><?php echo $noidung ?></td>
                    <td><?php echo $ngaybinhluan ?></td>
                    <td><?php echo $user ?></td>
                    <td><button><a href="index.php?act=binhluan&idbl=<?php echo $id ?>&id=<?php echo $_GET['id'] ?>">Xóa</a></button></td>
                </tr> 
                <?php } ?>  
           </table>
           </div>
          </form>
         </div>
        </div>
    </div>