<?php
require_once(__DIR__."/../../../../config/db.php");
require_once(__DIR__."/../../../../includes/helpers.php");

$user_id = xss($_POST['user_id']);

$listGift = $PTDUNG->get_list("SELECT * FROM `vong_quay` ORDER BY `id`");
$listGift = array_map(function($row) {
    return [
        'text' => $row['name'],
        'percent' => $row['percent']
    ];
}, $listGift);

$action = isset($_GET['action']) ? $_GET['action'] : '';
header('Content-Type: application/json');

if ($action === 'getGift') {
    $turns = freegemsUser($user_id, 'turns');
    if ($turns > 0) {
        // Có 2 function random, tự chọn cái phù hợp!
        $gift = getGift2($listGift);
        // Gửi tiền, trả kết quả - tự thêm logic check player khi gửi!
        $money = extract_number($gift['text']);
        $username = getUser($user_id, 'username');
        $isRcon = plus_money($username, $money);
        if ($isRcon) {    
            $turns_new = $turns - 1;
            $isUpdate = $PTDUNG->update("freegems_info", [
                'turns' => $turns_new
            ], " `user_id` = '" . $user_id . "' ");
            if ($isUpdate) {
                $PTDUNG->insert("logs", array(
                    'user_id' => $user_id,
                    'reward' => "Đã quay được ".$gift['text'],
                ));
                exit(json_encode(['gift' => $gift, 'turns' => $turns_new]));
            } else {
                exit(json_encode(['error' => 'Có lỗi xảy ra khi quay! Liên hệ Admin']));
            }
        } else {
            exit(json_encode(['error' => 'Không thể kết nối Rcon!']));
        }
    } else {
        exit(json_encode(['error' => 'Bạn đã hết lượt quay!']));
    }
} else {
    exit(json_encode($listGift));
}
?>
