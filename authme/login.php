<?php
session_start();
require_once(__DIR__ . '/../config/db.php');
require_once(__DIR__ . '/../includes/helpers.php');

$login_input = xss($_POST['user']);
$user_pass = xss($_POST['pass']);

if (empty($login_input) || empty($user_pass)) {
    exit(json_encode(array('title' => 'Thất bại', 'status' => 'error', 'msg' => 'Bạn chưa nhập Tài Khoản/Email hoặc Mật Khẩu')));
}

// Kiểm tra xem người dùng nhập email hay tên người dùng
if (filter_var($login_input, FILTER_VALIDATE_EMAIL)) {
    // Người dùng nhập email
    $row = $PTDUNG->get_row("SELECT * FROM `authme` WHERE `email`='" . $login_input . "'");
} else {
    // Người dùng nhập tên người dùng
    $row = $PTDUNG->get_row("SELECT * FROM `authme` WHERE `username`='" . $login_input . "'");
}

if (!$row) {
    exit(json_encode(array('title' => 'Thất bại', 'status' => 'error', 'msg' => 'Tài Khoản, Email hoặc Mật Khẩu sai')));
}

$user_id = $row['id'];
$salt = get_salt($row['password']);
$hash_pass = '$SHA$'.$salt.'$'.hash('SHA256',hash('SHA256',$user_pass).$salt);

if (!$row2 = $PTDUNG->get_row("SELECT * FROM `authme` WHERE (`username`='" . $login_input . "' OR `email`='" . $login_input . "') AND `password`='" . $hash_pass. "'")) {
    exit(json_encode(array('title' => 'Thất bại', 'status' => 'error', 'msg' => 'Tài Khoản, Email hoặc Mật Khẩu sai')));
}

if (empty($row2['ip']) && empty($row2['lastlogin'])) {
    $_SESSION['username'] = ucfirst($row2['username']); // Chữ cái đầu viết hoa
    exit(json_encode(array('title'=>'Thành Công','status'=>'success','msg' => 'Vui Lòng Xác Minh Tài Khoản', 'redirect' => '/verify.php')));
}

if (!$PTDUNG->get_row("SELECT * FROM `freegems_info` WHERE `user_id`='$user_id'")) {
    $isInsert = $PTDUNG->insert("freegems_info", array(
        'user_id' => $user_id,
        'count' => 0,
        'turns' => 0,
        'total' => 0
    ));
    if (!$isInsert) {
        exit(json_encode(array('title' => 'Thất bại', 'status' => 'error', 'msg' => 'Xảy ra lỗi khi đăng nhập!')));
    }
}

if (!$PTDUNG->get_row("SELECT * FROM `tong_nap` WHERE `user_id`='$user_id'")) {
    $isInsert = $PTDUNG->insert("tong_nap", array(
        'user_id' => $user_id,
        'tongnap' => 0,
    ));
    if (!$isInsert) {
        exit(json_encode(array('title' => 'Thất bại', 'status' => 'error', 'msg' => 'Xảy ra lỗi khi đăng nhập!')));
    }
}

$_SESSION['username'] = $row2['realname']; // Chữ cái đầu viết hoa
$_SESSION['user_id'] = $user_id;
$_SESSION['email'] = $row2['email'];

$PTDUNG->insert("login_logs", array(
        'user_id' => $user_id,
        'ip' => $_SERVER['REMOTE_ADDR'],
        'nation' => "VN",
        'source' => "Website",
        'create_time' => get_time()
));

// Kiểm tra và chuyển hướng nếu có URL trong session
if (isset($_SESSION['redirect_url'])) {
    $redirect_url = $_SESSION['redirect_url'];
    unset($_SESSION['redirect_url']);
    exit(json_encode(array('status' => 'success', 'msg' => 'Chào mừng bạn đã quay trở lại!', 'redirect' => $redirect_url)));
} else {
    exit(json_encode(array('status' => 'success', 'redirect' => '/profile', 'msg' => 'Chào mừng bạn đã quay trở lại!')));
}
?>