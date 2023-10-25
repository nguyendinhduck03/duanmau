<H1>Giỏ hàng</H1>
<table style="border: 1px solid black; border-collapse: collapse;">
    <tr >
        <th style="border: 1px solid black; padding: 8px;">Tên sản phẩm</th>
        <th style="border: 1px solid black; padding: 8px;">Số lượng</th>
        <th style="border: 1px solid black; padding: 8px;">Giá</th>
        <th style="border: 1px solid black; padding: 8px;"></th>
    </tr>
    <?php 
        $sum = 0;
        foreach ($giohang as $gh) { 
        extract($gh);
        $sum += $tatol_price;
        ?>    
    <tr>
        <td style="border: 1px solid black; padding: 8px;"><?php echo $name ?></td>
        <td style="border: 1px solid black; padding: 8px;">
            <button style="border: none; padding: 5px 10px;  background-color: red"><a href="index.php?act=giohang&id=<?php echo $id_pro ?>&less"style="text-decoration: none">-</a></button>
            <?php echo $soluong ?>
            <button style="border: none; padding: 5px 10px;  background-color: aqua"><a href="index.php?act=giohang&id=<?php echo $id_pro ?>&more"style="text-decoration: none">+</a></button>
        </td>
        <td style="border: 1px solid black; padding: 8px;"><?php echo $tatol_price ?></td>
        <td style="border: 1px solid black; padding: 8px;"><a href="index.php?act=giohang&idsp=<?php echo $id_pro ?>&del">Xóa</a></td>
        
    </tr>
    <?php } ?>
</table>
<br>
<h3>Tổng chi tiêu của bạn trong tháng này là: <?php echo $sum ?></h3>
<br>
<button style="border: none; padding: 10px;  background-color: orangered; color: white;"  onclick="check()" >Thanh toán</button>
<script>
    function check() {
        var result =  confirm('Chắc chắn bạn muốn mua loại hàng này :))?');
        if (result) {  
            alert("Cảm ơn quý khách") ;
            window.location.href = "index.php?act=giohang&done";
        }
    }
</script>
