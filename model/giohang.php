<?php
// Thêm sản phẩm vào giỏ hàng 
function insert_giohang($id_user, $idsp) {
    $sql = "SELECT * FROM giohang WHERE id_user = '$id_user'";
    $result = pdo_query($sql);
    echo ($result != null) ? "đúng" : "sai";
    if ($result != null) {
        foreach ($result as $key) {
            if($key['id_pro'] == $idsp) {
                $sl = $key['soluong'] + 1;
                update_soluong($sl,$idsp);
                $en = 1; 
                header("location: index.php");
            }
        } 
        if(!isset($en)) {
            insert_newsp($id_user,$idsp);
            header("location: index.php");
        }
    } else {
        insert_newsp($id_user,$idsp);
        header("location: index.php");
    }
}
function update_soluong($sl,$idsp) {
    $sql = "UPDATE giohang SET soluong = $sl where id_pro = $idsp";
    pdo_execute($sql);
}

function insert_newsp($idu, $ids) {
    $sql = "INSERT INTO giohang(id_user, id_pro)
            VALUES ('$idu', '$ids')";
    pdo_execute($sql);
}
// Hiển thị giỏ hàng
function load_giohang($id){
    $sql = "SELECT giohang.id_pro, sanpham.name, giohang.soluong, (giohang.soluong * sanpham.price) AS tatol_price 
    FROM giohang INNER JOIN sanpham ON giohang.id_pro = sanpham.id 
    WHERE giohang.id_user = $id ";
    $result = pdo_query($sql);
    return $result;
}
// Xóa giỏ hàng của một user
function delall_giohang($id) {
    $sql = "DELETE FROM giohang WHERE id_user = $id";
    pdo_execute($sql);
}
// Xóa toàn bộ một sản phẩm khỏi giỏ hàng
function delsp_giohang($id,$id_user) {
    $sql = "DELETE FROM giohang WHERE id_pro = $id AND id_user = $id_user";
    pdo_execute($sql);
}
// Thêm số lượng cho sản phẩm
function moresp_giohang($id, $id_user){
    $sql = "UPDATE giohang SET soluong = soluong + 1 WHERE id_pro = $id AND id_user = $id_user"; 
    pdo_execute($sql);
}
// Thêm số lượng cho sản phẩm
function lesssp_giohang($id, $id_user){
    $sql = "UPDATE giohang
    SET soluong = CASE 
                   WHEN soluong > 0 THEN soluong - 1 
                   ELSE 0 
                 END
    WHERE id_pro = $id AND id_user = $id_user;
    
    DELETE FROM giohang WHERE soluong = 0;"; 
    pdo_execute($sql);
}
// Đếm số lượng sản phẩm trong giỏ hàng
function sp_giohang($id) {
    $sql = "SELECT COUNT(id_pro) AS soluong FROM `giohang` WHERE id_user = $id";
    $result = pdo_query_one($sql);
    return $result;
}
?>