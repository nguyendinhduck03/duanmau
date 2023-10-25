<?php
function loadall_danhmuc() {
    $sql = "SELECT * FROM danhmuc order by id ";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function load_ten_dm($iddm) {
    $sql = "SELECT * FROM danhmuc WHERE id =".$iddm;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $name;
}

// Thêm danh mục 
function add_danhmuc($id,$name) {
    $sql = "INSERT INTO danhmuc(id,name) 
            VALUES ('$id','$name')";
    pdo_execute($sql);
}

// Hiển thị số lượng sản phầm trong danh mục
function loadnum_danhmuc($id) {
    $sql = "SELECT COUNT(name) AS soluong FROM sanpham WHERE iddm = $id";
    $result = pdo_query_one($sql);
    return $result;
}
// Hiển thị giá đắt nhất
function loadgia_datnhat($id) {
    $sql = "SELECT price FROM sanpham WHERE iddm = $id ORDER BY price DESC LIMIT 1";
    $result = pdo_query_one($sql);
    return $result;
}
// Hiển thị giá re nhất
function loadgia_renhat($id) {
    $sql = "SELECT price FROM sanpham WHERE iddm = $id ORDER BY price ASC LIMIT 1";
    $result = pdo_query_one($sql);
    return $result;
}
// Hiển thị danh mục và số lượng sản phẩm cảu danh mục đó
function load_bieudo($id) {
    $sql = "SELECT danhmuc.name, COUNT(sanpham.iddm) AS soluong FROM danhmuc INNER JOIN sanpham ON danhmuc.id = sanpham.iddm 
    WHERE sanpham.iddm = $id";
    $result = pdo_query_one($sql);
    return $result;
}