<?php
require_once('../../core/db.php');
require_once('../../core/helpers.php');

$username = xss($_POST['username']);
$old_pass = xss($_POST['old_pass']);
$new_pass = xss($_POST['new_pass']);
$retype_pass = xss($_POST['retype_pass']);

if (empty($username)) {
  exit(json_encode(array('title' => 'Thất bại', 'status' => 'error', 'msg' => 'Bạn chưa đăng nhập')));
}
if (strlen($new_pass) < 6) {
    exit(json_encode(array('title'=>'Thất bại','status'=>'error','msg' => 'Mật khẩu mới không được ngắn hơn 6 ký tự')));
}
if ($new_pass != $retype_pass) {
  exit(json_encode(array('title' => 'Thất bại', 'status' => 'error', 'msg' => 'Mật khẩu không trùng khớp')));
}

$row = $PTDUNG->get_row("SELECT * FROM `authme` WHERE `username`='" . $username . "'");
$salt = get_salt($row['password']);
$hash_pass = '$SHA$'.$salt.'$'.hash('SHA256',hash('SHA256',$old_pass).$salt);

if (!$row = $PTDUNG->get_row("SELECT * FROM `authme` WHERE `username`='" . $username . "' AND `password`='" . $hash_pass . "'")) {
    exit(json_encode(array('title' => 'Thất bại', 'status' => 'error', 'msg' => 'Mật khẩu cũ không chính xác')));
}

$new_salt = bin2hex(random_bytes(8));
$new_pass_hash = '$SHA$'.$new_salt.'$'.hash('SHA256',hash('SHA256',$new_pass).$new_salt);
$isUpdate = $PTDUNG->update("authme", array(
        'password' => $new_pass_hash
    ), " `username` = '$username' ");

if (!$isUpdate) {
  exit(json_encode(array('title' => 'Thất bại', 'status' => 'error', 'msg' => 'Đã xảy ra lỗi!, vui lòng liên hệ admin để xử lý')));
}
  
exit(json_encode(array('title' => 'Thành công', 'status' => 'success', 'msg' => 'Đổi mật khẩu thành công!')));