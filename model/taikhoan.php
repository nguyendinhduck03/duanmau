<?php
//insert tài khoản 
function insert_taikhoan($user, $pass, $email) {
    $sql = "INSERT INTO taikhoan(user, pass, email) VALUES ('$user', '$pass', '$email');";
    pdo_execute($sql);
}
// Validate email
function validate_email($email){
    // $pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    if ($email != '') {
        // if (preg_match($email,$pattern)) {
        //     $error = false;
        // }
        $error = false;
    } else {
        $error = true;
    }
    return $error;
}
// Validate user
function validate_user($user){
    if (strlen($user) > 2 && $user != '') {
        $error = false;
    } else {
        $error = true;
    }
    return $error;
}
// Validate password
function validate_pass($pass){
    if (strlen($pass) > 2 && $pass != '') {
        $error = false;
    } else {
        $error = true;
    }
    return $error;
}
// Xác nhận đăng nhập
session_start();
function confirm_dangnhap($user,$pass) {
    $sql = "SELECT * FROM taikhoan WHERE user = '$user' AND pass = '$pass'";
    $taikhoan = pdo_query_one($sql);
    if ($taikhoan != false) {
        $_SESSION['user'] = $user;
    } else {
        return 'Tài khoản hoặc mật khẩu sai';
    }
    return '';
}
// Đăng xuất tài khoản
function dangxuat(){
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
}
// Gửi email mật khẩu
function send_email($email) {
    if ($email != '') {
        $sql = "SELECT * FROM taikhoan WHERE email = '$email'";
        $result = pdo_query_one($sql);
        if ($result != false) {
            extract($result);
            send_email_pass($email,$user,$pass);
            return 'Mật khẩu đã được gửi về địa chỉ email nếu tồn tại';
        } else {
            return 'Không tìm thấy email';
        }
    } else {
        return "Bạn không thể lấy lại mật khẩu nếu để trống email";
    }
}
// Hiển thị tất cả thông tin tài khoản
function loadall_taikhoan() {
    $sql = "SELECT * FROM taikhoan";
    $result = pdo_query($sql);
    return $result;
}
// Xóa 1 tài khoản 
function xoa_taikhoan($id) {
    $sql = "DELETE FROM taikhoan WHERE id = $id";
    pdo_execute($sql);
} 
// Thêm một tài khoản phía admin 
function admin_taikhoan($user, $pass, $email,$vaitro) {
    $sql = "INSERT INTO taikhoan(user, pass, email, role) VALUES ('$user', '$pass', '$email','$vaitro');";
    pdo_execute($sql);
}

// Gửi nội dung đến email bằng php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
function send_email_pass($email,$user,$pass) {
    require './PHPMailer-master/src/Exception.php';
    require './PHPMailer-master/src/PHPMailer.php';
    require './PHPMailer-master/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'doyouknowkun21@gmail.com';                     //SMTP username
    $mail->Password   = 'ohbw uuji emsr kjur';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $mail->setFrom('doyouknowkun21@gmail.com', 'Shop');
    $mail->addAddress($email, $user);
    $mail->addCC('doyouknowkun21@gmail.com.com');
    //Recipients
    // $mail->setFrom('from@example.com', 'Mailer');
    // $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Give password';
    $mail->Body    = 'Mật khẩu của bạn là: '.$pass;

    $mail->send();
    // echo 'Message has been sent';
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
// Hiển thị vai trò của user
function load_vaitro($user){
    $sql = "SELECT role FROM taikhoan WHERE user = '$user'";
    $result = pdo_query_one($sql);
    return $result;
}
// Hiển id tài khoản 
function load_taikhoan($user) {
    $sql = "SELECT id FROM taikhoan WHERE user = '$user'";
    $result = pdo_query_one($sql);
    return $result;
}
// Hiển thị tất cả thông tin cảu 1 tài khoản
function loadone_taikhoan($id) {
    $sql = "SELECT * FROM taikhoan WHERE id = $id";
    $result = pdo_query_one($sql);
    return $result;
}
// Cập nhật tài khoản
function update_taikhoan( $email, $address, $phone, $pass,$id) {
    $sql = "UPDATE taikhoan
            SET  email = '$email', address = '$address', phone = '$phone', pass = '$pass'
            WHERE id = $id";
    pdo_execute($sql);
    return "Đã cập nhật thành công";
}
?>