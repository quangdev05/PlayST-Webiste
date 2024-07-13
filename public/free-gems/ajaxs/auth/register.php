<?php
require_once('../../core/db.php');
require_once('../../core/helpers.php');

$user_email = xss($_POST['email']);
$user_name = xss($_POST['user']);
$user_pass = xss($_POST['pass']);
$user_repass = xss($_POST['repass']);

if (empty($user_email) || empty($user_name) || empty($user_pass) || empty($user_repass)) {
    exit(json_encode(array('title' => 'Thất bại', 'status' => 'error', 'msg' => 'Vui lòng điền đầy đủ thông tin')));
}
if (check_email($user_email) != true) {
    exit(json_encode(array('title'=>'Thất bại','status'=>'error','msg' => 'Email không đúng định dạng')));
}
if (strlen($user_name) < 6) {
    exit(json_encode(array('title'=>'Thất bại','status'=>'error','msg' => 'Tài khoản đăng nhập không được ngắn hơn 6 ký tự')));
}
if (strlen($user_pass) < 6) {
    exit(json_encode(array('title'=>'Thất bại','status'=>'error','msg' => 'Mật khẩu đăng nhập không được ngắn hơn 6 ký tự')));
}
if ($user_pass != $user_repass) {
    exit(json_encode(array('title'=>'Thất bại','status'=>'error','msg' => 'Mật khẩu nhập lại không trùng khớp')));
}
if ($PTDUNG->get_row("SELECT * FROM `authme` WHERE `email`='$user_email'")) {
    exit(json_encode(array('title'=>'Thất bại','status'=>'error','msg' => 'Email này đã có người sử dụng')));
}
if ($PTDUNG->get_row("SELECT * FROM `authme` WHERE `username`='$user_name'")) {
    exit(json_encode(array('title'=>'Thất bại','status'=>'error','msg' => 'Tài khoản này đã có người sử dụng')));
}

$salt = bin2hex(random_bytes(8));
$user_pass_hash = '$SHA$'.$salt.'$'.hash('SHA256',hash('SHA256',$user_pass).$salt);

$create = $PTDUNG->insert("authme", [
    'username'      => strtolower($user_name),
    'realname'      => $user_name,
    'password'      => $user_pass_hash,
    'email'         => $user_email
]);

if ($create) {
  	$_SESSION['username'] = $user_name;
    exit(json_encode(array('title'=>'Thành công','status'=>'success','msg' => 'Tạo tài khoản thành công. Hãy Xác Minh Tài Khoản', 'redirect'=>'/free-gems/verify.php')));
} else {
    exit(json_encode(array('title'=>'Thất bại','status'=>'error','msg' => 'Đã xảy ra lỗi!, vui lòng liên hệ admin để xử lý')));
}
