<?php
// Hiển thị 9 sản phẩm mới nhất
function loadall_sanpham_home() {
    $sql = "select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// Hiển thị top 10 sản phẩm có lượt xem cao nhất
function loadall_sanpham_top10() {
    $sql = "select * from sanpham order by luotxem desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
} 
// Hiển thị chi tiết sản phẩm
function loadone_sanpham($id) {
    $sql = "SELECT * FROM sanpham WHERE id = $id";
    $result = pdo_query_one($sql);
    return $result;
}
// Hiển thị sản phẩm cùng loại
function loadsp_cungloai($id, $iddm) {
    $sql = "SELECT * FROM sanpham WHERE iddm = $iddm and id <> $id limit 0,5";
    $result = pdo_query($sql);
    return $result;
}
// Hiển thị toàn bộ sản phẩm trong danh mục
function loadall_spdm($id) {
    $sql = "SELECT * FROM sanpham WHERE iddm = $id";
    $result = pdo_query($sql);
    return $result;
}
//Load tấ cả sản phẩm
function loadall_sanpham() {
    $sql = "SELECT * FROM sanpham";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// Thêm sản phẩm
function add_sanpham($name,$price,$img,$mota,$iddm) {
    $sql = "INSERT INTO sanpham(name,price,img,mota,iddm)
            VALUES ('$name','$price','$img','$mota','$iddm')";
    pdo_execute($sql);
}
// Upload ảnh
function upload_anh($target_f,$tmp_file) {
    $target = "../img/".$target_f;
    move_uploaded_file($tmp_file,$target);
}
// Xóa 1 sản phẩm
function xoa_sanpham($id) {
    $sql = "DELETE FROM sanpham WHERE id = '$id'";
    pdo_execute($sql);
}
// UPDATE sản phẩm
function update_sanpham($id,$name,$price,$img,$mota) {
    $sql = "UPDATE sanpham SET name = '$name', price = '$price', img = '$img', mota = '$mota' WHERE id = '$id'";
    pdo_execute($sql);
}
// Tìm kiếm sản phẩm theo tên
function search_sanpham($name) {
    $sql = "SELECT * FROM sanpham WHERE name LIKE '%$name%'";
    $result = pdo_query($sql);
    return $result;
}