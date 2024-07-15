<?php 
require_once('../../core/db.php');
require_once('../../core/helpers.php');

$name = xss($_POST['name']);
$percent = xss($_POST['percent']);

if (!isset($_POST['id'])) {
    exit(json_encode(array('title' => 'Thất bại', 'status' => 'error', 'msg' => 'Vật phẩm không tồn tại')));
}

if ($getUser['admin'] != 1) {
    exit(json_encode(array('title' => 'Thất bại', 'status' => 'error', 'msg' => 'Không thể thực hiện')));
}

if (empty($name) || empty($percent)) {
    exit(json_encode(array('title' => 'Thất bại', 'status' => 'error', 'msg' => 'Vui lòng điền đầy đủ thông tin')));
}

$isUpdate = $PTDUNG->update("vong_quay", [
            'name' => $name,
            'percent' => $percent
        ], " `id` = '" . $_POST['id'] . "' ");
        
if ($isUpdate) {
    exit(json_encode(array('title' => 'Thành công', 'status' => 'success', 'msg' => 'Lưu thành công')));
} else {
    exit(json_encode(array('title' => 'Thất bại', 'status' => 'error', 'msg' => 'Lưu thất bại')));
}