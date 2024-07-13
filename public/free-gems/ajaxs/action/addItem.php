<?php
require_once('../../core/db.php');
require_once('../../core/helpers.php');

$name = xss($_POST['name']);
$percent = xss($_POST['percent']);

if ($getUser['admin'] != 1) {
    exit(json_encode(array('title' => 'Thất bại', 'status' => 'error', 'msg' => 'Không thể thực hiện')));
}

if (empty($name) || empty($percent)) {
    exit(json_encode(array('title' => 'Thất bại', 'status' => 'error', 'msg' => 'Vui lòng điền đầy đủ thông tin')));
}

$PTDUNG->insert("vong_quay", array(
    'name' => $name,
    'percent' => $percent
));

exit(json_encode(array('title' => 'Thành công', 'status' => 'success', 'msg' => 'Thêm thành công')));