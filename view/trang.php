<?php
$mess;
if (isset($_GET['trang'])) {
    if ($_GET['trang'] == 'gioithieu') {
        $mess = "Trang giới thiệu";
    } elseif($_GET['trang'] == 'lienhe') {
        $mess = "Trang liên hệ";
    } elseif ($_GET['trang'] == 'hoidap') {
        $mess = "Trang hỏi đáp";
    } elseif ($_GET['trang'] == 'gopy') {
        $mess = "Trang góp ý";
    } 
}
echo '<h1>'.$mess.'</h1>'
?>
