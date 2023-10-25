<?php 
include './model/pdo.php';
include './model/sanpham.php';
include './model/danhmuc.php';
include './model/binhluan.php';
include './model/taikhoan.php';
include './model/giohang.php';
include 'global.php';
if (isset($_SESSION['user'])) {
  $id_user = load_taikhoan($_SESSION['user']);
  $soluong = sp_giohang($id_user['id']);
}
include './view/header.php';
$spnew = loadall_sanpham_home();
$dstop10 = loadall_sanpham_top10();
$dsdm = loadall_danhmuc();
if (isset($_GET['act']) && ($_GET['act'] != '')) {
  $act = $_GET['act'];
  switch ($act) {
    case 'chitietsanpham':
      if(isset($_POST['guibinhluan'])) {
        insert_binhluan($_POST['idpro'], $_POST['noidung'], $_POST['iduser']);
      }
      if(isset($_GET['idsp']) && $_GET['idsp'] > 0) {
        $sp = loadone_sanpham($_GET['idsp']);
        $sp_cungloai = loadsp_cungloai($_GET['idsp'], $sp['iddm']);
        $binhluan = load_binhluan($_GET['idsp']);
        include './view/chitietsanpham.php';
      } 
      break;
    case 'dangky':
      if (isset($_POST['dangky'])) {
        $email = $_POST['email'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $validate_email = validate_email($email);
        $validate_user = validate_user($user);
        $validate_pass = validate_pass($pass);
        if (isset($email,$user,$pass)) {
          insert_taikhoan($user,$pass,$email);
          $thongbao = 'Đăng ký người dùng thành công';
        }
      }
      include './view/dangky.php';
      break;
    case 'dangnhap':
      if (isset($_POST['dangnhap'])) {
        $mess_dangnhap = confirm_dangnhap($_POST['user'],$_POST['pass']);
      }
      include './view/home.php';
      break;
    case 'quenmatkhau':
      if (isset($_POST['guiemail'])) {
        $mess_email = send_email($_POST['email']);
      }
      include './view/quenmatkhau.php';
      break;
    case 'dangxuat':
      dangxuat();
      include './view/home.php';
      break;
    case 'sanpham':
      if (isset($_GET['iddm'])) {
        $spnew= loadall_spdm($_GET['iddm']);
        include './view/home.php';
        break;
      } else {
        $spnew= search_sanpham($_POST['namesp']);
        include './view/home.php';
        break;
      }
    case 'giohang':
      if (isset($_SESSION['user'])) {
        $id_user = load_taikhoan($_SESSION['user']);
      }
      if(isset($_GET['done'])){
        delall_giohang($id_user['id']);
        header('location: index.php');
      }
      if (!isset($_SESSION['user'])) {
        echo "Tiếc rằng tôi không làm SESSION, bạn cần đăng nhập để có thể thêm sản phẩm vào giỏ hàng, vui lòng quay lại trang chủ để xem tiếp sản phẩm hoặc đăng nhập or đăng ký tài khoản ở phía bên phải chúng tôi";
        break;
      }
      if(isset($_POST['submit'])) {
        $id_user = load_taikhoan($_POST['user']);
        insert_giohang($id_user['id'], $_POST['idsp']);
      }
      if(isset($_GET['less']) && isset($_GET['id'])) {
        lesssp_giohang($_GET['id'], $id_user['id']);
      } 
      if(isset($_GET['more']) && isset($_GET['id'])) {
        moresp_giohang($_GET['id'], $id_user['id']);
      }
      if (isset($_GET['del'])) {
        delsp_giohang($_GET['idsp'], $id_user['id']);
      }
      $giohang = load_giohang($id_user['id']);
      include "./view/giohang.php";
      break;
    case 'taikhoan':
      $id_user = load_taikhoan($_SESSION['user']);
      if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        if ($_POST['pass'] == '') {
          $pass = $_POST['passold'];
        } else {
          $pass = $_POST['pass'];
        }
        $mess = update_taikhoan($email,$address,$phone,$pass,$id_user['id']);
      }
      $info = loadone_taikhoan($id_user['id']);
      extract($info);
      include "./view/capnhattaikhoan.php";
      break;
    case 'trang':
      include './view/trang.php';
      break;
    default:
      # code...
      break;
  }
} else {
  include './view/home.php'; 
}
  

include './view/footer.php'; 
?>