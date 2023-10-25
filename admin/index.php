<?php 
include 'header.php'; 
include '../model/pdo.php';
include '../model/danhmuc.php';
include '../model/sanpham.php';
include '../model/taikhoan.php';
include '../model/binhluan.php';
$danhmuc = loadall_danhmuc();

if (isset($_GET['act']) && ($_GET['act'] != '')) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_GET['idsp'])) {
                if(isset($_GET['value']) && $_GET['value'] == 'del') {
                    echo $_GET['idsp'];
                    xoa_sanpham($_GET['idsp']);
                } else {
                    if (isset($_POST['edit_sp'])) {
                        $id = $_GET['idsp'];
                        $name = $_POST['name'];
                        $price = $_POST['price'];
                        $img = $_FILES['file_up']['name'];
                        $tmp = $_FILES['file_up']['tmp_name'];
                        $mota = $_POST['mota'];
                        upload_anh($img,$tmp);
                        update_sanpham($id,$name,$price,$img,$mota);
                    }
                    $sp = loadone_sanpham($_GET['idsp']);
                    extract($sp);
                    include './view/editsanpham.php';
                    break;
                }
            }
            if (isset($_POST['add_sp'])) {
                upload_anh($_FILES['file_up']['name'],$_FILES['file_up']['tmp_name']);
                $name = $_POST['name'];
                $price = $_POST['price'];
                $img = $_FILES['file_up']['name'];
                $mota = $_POST['mota'];
                $iddm = $_POST['iddm'];
                add_sanpham($name,$price,$img,$mota,$iddm);
                include './view/addsanpham.php';
                break;
             }
            if (isset($_GET['btn_add'])) {
                include './view/addsanpham.php';
            } else {
                $danhmuc = loadall_sanpham();
                include './view/sanpham.php';
            }
            break;
        case 'danhmuc':
            if (isset($_POST['submit'])) {
                add_danhmuc($_POST['maloai'], $_POST['tenloai']);
            }
            if (isset($_GET['list'])) {
                $danhmuc = loadall_danhmuc();
                include './view/listdanhmuc.php';
                break;
            }
            include './view/danhmuc.php';
            break;
        case 'taikhoan':
            if (isset($_GET['idtk'])) {
                xoa_taikhoan($_GET['idtk']);
            }
            if (isset($_GET['btn_add'])) {
                include './view/addtaikhoan.php';
                break;
            }
            if (isset($_POST['add_tk'])) {
                $name = $_POST['name'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $vaitro = $_POST['vaitro'];
                admin_taikhoan($name,$pass,$email,$vaitro);
            }
            $taikhoan = loadall_taikhoan();
            include './view/taikhoan.php';
            break;
        case 'binhluan':
            if (isset($_GET['idbl'])) {
                xoa_binhluan($_GET['idbl']);
            }
            if (isset($_GET['id'])) {
                $comments = chitiet_binhluan($_GET['id']);
                include './view/chitietbinhluan.php';
                break;
            } 
            $sanpham = loadall_sanpham();
            include './view/binhluan.php';
            break;
        case 'thongke':
            if (isset($_GET['chart'])){
                $danhmuc = loadall_danhmuc();
                include "./view/bieudo.php";
                break;
            }
            $danhmuc = loadall_danhmuc();
            include './view/thongke.php';
            break;
    }
} else {
    include 'home.php';
}

include 'footer.php';

?>

    
