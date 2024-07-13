<?php
require_once('../../core/db.php');
require_once('../../core/helpers.php');

if ($getUser['admin'] != 1) {
    exit(json_encode(array('title' => 'Thất bại', 'status' => 'error', 'msg' => 'Không thể thực hiện')));
}

foreach ($_POST as $name => $value) {
    $isInsert = $PTDUNG->update("settings", array(
        'value' => $value
    ), " `name` = '$name' ");
}

if ($isInsert) {
    exit(json_encode(array('title' => 'Thành công', 'status' => 'success', 'msg' => 'Lưu thành công!')));
} else {
    exit(json_encode(array('title' => 'Thất bại', 'status' => 'error', 'msg' => 'Lưu thất bại!')));
}