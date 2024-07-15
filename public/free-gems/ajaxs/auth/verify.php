<?php
require_once('../../core/db.php');
require_once('../../core/helpers.php');

$username = xss($_POST['user']);

$row = $PTDUNG->get_row("SELECT * FROM `authme` WHERE `username`='" . $username . "'");

if (empty($row['ip']) && empty($row['lastlogin'])) {
    exit(json_encode(array('title'=>'Xác Minh Thất Bại!','status'=>'error','msg' => 'Vui lòng thử lại hoặc liên hệ admin')));
}

exit(json_encode(array('title' => 'Xác Minh Thành Công!', 'status' => 'success', 'msg' => 'Vui lòng đăng nhập lại!', 'redirect' => '/login.php')));