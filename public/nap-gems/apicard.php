<?php
require_once('../free-gems/core/db.php');
require_once('../free-gems/core/helpers.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  	$username = xss($_POST['username']);
    $telco = xss($_POST['card_type']);
    $amount = xss($_POST['amount']);
    $gems = xss($_POST['gems']);
    $serial = xss($_POST['seri']);
    $pin = xss($_POST['code']);

    if (empty($username)) {
        die(json_encode([
            'title'     => 'Thất bại',
            'status'    => 'error',
            'msg'       => 'Vui lòng đăng nhập',
            'redirect' => '/login',
        ]));
    }
    if (empty($telco)) {
        die(json_encode([
            'title'     => 'Thất bại',
            'status'    => 'error',
            'msg'       => 'Vui lòng chọn loại thẻ'
        ]));
    }
    if (empty($amount)) {
        die(json_encode([
            'title'     => 'Thất bại',
            'status'    => 'error',
            'msg'       => 'Vui lòng chọn mệnh giá'
        ]));
    }
    if (empty($serial)) {
        die(json_encode([
            'title'     => 'Thất bại',
            'status'    => 'error',
            'msg'       => 'Vui lòng nhập seri thẻ'
        ]));
    }
    if (empty($pin)) {
        die(json_encode([
            'title'     => 'Thất bại',
            'status'    => 'error',
            'msg'       => 'Vui lòng nhập mã thẻ'
        ]));
    }

    if (strlen($serial) < 5 || strlen($pin) < 5) {
        die(json_encode([
            'title'     => 'Thất bại',
            'status'    => 'error',
            'msg'       => 'Mã thẻ hoặc seri không đúng định dạng!'
        ]));
    }
    $code = rand(100000000, 999999999);
  	$data = Doithe($telco, $amount, $serial, $pin, $code);
    if ($data['status'] == '99') {
            $isInsert = $PTDUNG->insert("recharge_logs", array(
              	'user_id'   => $_SESSION['user_id'],
              	'trans_id'	=> $code,
                'amount'    => $amount,
                'gems'    => $gems,
                'method'    => "Card",
                'status'    => 0,
                'create_time' => get_time(),
            ));
            die(json_encode([
                    'title'     => 'Thành công',
                    'status'    => 'success',
                    'msg'       => 'Gửi thẻ thành công, vui lòng đợi kết quả',
                    'redirect' => '/profile',
                ]));
          } else {
            die(json_encode([
                'title'     => 'Thất bại',
                'status'    => 'error',
                'msg'       => '' . $data['message'] . ''
            ]));
    }
}
