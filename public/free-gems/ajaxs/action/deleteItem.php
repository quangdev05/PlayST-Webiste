<?php
require_once('../../core/db.php');
require_once('../../core/helpers.php');

if (!isset($_POST['id'])) {
    exit(json_encode(array('title' => 'Thất bại', 'status' => 'error', 'msg' => 'Vật phẩm không tồn tại')));
}

if ($getUser['admin'] != 1) {
    exit(json_encode(array('title' => 'Thất bại', 'status' => 'error', 'msg' => 'Không thể thực hiện')));
}

$isRemove = $PTDUNG->remove("vong_quay", " `id` = '".$_POST['id']."' ");

if ($isRemove) {
    exit(json_encode(array('title' => 'Thành công', 'status' => 'success', 'msg' => 'Xóa thành công')));
} else {
    exit(json_encode(array('title' => 'Thất bại', 'status' => 'error', 'msg' => 'Xóa thất bại')));
}
