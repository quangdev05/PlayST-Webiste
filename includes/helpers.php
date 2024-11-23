<?php

require_once(__DIR__."/../libs/rcon.php");

$PTDUNG = new PTDUNG;

function get_salt($string)
{
    preg_match('/\$SHA\$(.*?)\$/', $string, $matches);
    
    $salt = $matches[1];
    
    return $salt;
}
function get_date()
{
    return date('d/m/Y');
}
function get_time()
{
    return date('H:i d/m/Y');
}
function curl_get($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // Cho phép cURL tự động theo dõi chuyển hướng
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // Bỏ qua xác thực SSL (nếu cần thiết)
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    $data = curl_exec($ch);
    if ($data === false) {
        echo 'cURL Error: ' . curl_error($ch);
    }
    curl_close($ch);
    return $data;
}
function xss($data)
{
    // Fix &entity\n;
    $data = str_replace(array('&amp;', '&lt;', '&gt;'), array('&amp;amp;', '&amp;lt;', '&amp;gt;'), $data);
    $data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
    $data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
    $data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');

    // Remove any attribute starting with "on" or xmlns
    $data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);

    // Remove javascript: and vbscript: protocols
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);

    // Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);

    // Remove namespaced elements (we do not need them)
    $data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

    do {
        // Remove really unwanted tags
        $old_data = $data;
        $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
    } while ($old_data !== $data);

    // we are done...
    $result = htmlspecialchars(addslashes(trim($data)));

    return $result;
}

function check_email($data)
{
    if (preg_match('/^.+@gmail\.com$/', $data, $matches)) {
        return True;
    } else {
        return False;
    }
}

function getUser($id, $row)
{
    global $PTDUNG;
    return $PTDUNG->get_row("SELECT * FROM `authme` WHERE `id` = '$id' ")[$row];
}

function extract_number($string)
{
    preg_match_all('/\d+/', $string, $matches);
    if (empty($matches[0])) {
        return '0';
    }
    return implode('', $matches[0]);
}

function getGift1($listGift) {
    $totalPercent = array_sum(array_column($listGift, 'percent'));
    $cumulative = [];
    $currentPercent = 0;
    foreach ($listGift as $index => $item) {
        $currentPercent += $item['percent'] / $totalPercent * 100;
        $cumulative[$index] = $currentPercent;
    }
    $randomPercent = mt_rand(0, 9999) / 100;
    foreach ($cumulative as $index => $cumProb) {
        if ($randomPercent < $cumProb) {
            return ['index' => $index, 'text' => $listGift[$index]['text']];
        }
    }
    return ['index' => count($listGift) - 1, 'text' => $listGift[count($listGift) - 1]['text']];
}

function getGift2($listGift) {
    $totalPercent = array_sum(array_column($listGift, 'percent'));
    $cumulative = [];
    $currentPercent = 0;
    foreach ($listGift as $index => $item) {
        $currentPercent += $item['percent'] / $totalPercent * 100;
        $cumulative[$index] = $currentPercent;
    }
    $randomPercent = mt_rand(0, 9999) / 100;
    $left = 0;
    $right = count($cumulative) - 1;
    while ($left <= $right) {
        $mid = (int) (($left + $right) / 2);
        if ($randomPercent < $cumulative[$mid]) {
            $right = $mid - 1;
        } else {
            $left = $mid + 1;
        }
    }

    $selectedGiftIndex = $left;
    return ['index' => $selectedGiftIndex, 'text' => $listGift[$selectedGiftIndex]['text']];
}


function plus_money($username,$money)
{
    global $PTDUNG;
    $host = $PTDUNG->site('host_rcon');
    $port = $PTDUNG->site('port_rcon');
    $password = $PTDUNG->site('pass_rcon');
    $timeout = $PTDUNG->site('timeout_rcon');
    
    $rcon = new Rcon($host, $port, $password, $timeout);
    if ($rcon->connect()) {
        $rcon->send_command("points give $username $money");
        $rcon->disconnect();
        return true;
    } else {
        return false;
    }
}

function rcon_nap($username,$money)
{
    global $PTDUNG;
    $host = $PTDUNG->site('host_rcon');
    $port = $PTDUNG->site('port_rcon');
    $password = $PTDUNG->site('pass_rcon');
    $timeout = $PTDUNG->site('timeout_rcon');
    
    $rcon = new Rcon($host, $port, $password, $timeout);
    if ($rcon->connect()) {
        $rcon->send_command("dotman manual $username $money -d AutoCard -f");
        $rcon->disconnect();
        return true;
    } else {
        return false;
    }
}


function getSkinURL($player_name) {
    $uuid_url = "https://api.mojang.com/users/profiles/minecraft/$player_name";
    $uuid_response = file_get_contents($uuid_url);
    if ($uuid_response === FALSE) {
        return "/assets/images/steve.png";
    }
    $uuid_data = json_decode($uuid_response, true);
    $uuid = $uuid_data['id'] ?? null;
    
    if ($uuid === null) {
        return "/assets/images/steve.png";
    }
    $profile_url = "https://sessionserver.mojang.com/session/minecraft/profile/$uuid";
    $profile_response = file_get_contents($profile_url);
    if ($profile_response === FALSE) {
        return "/assets/images/steve.png";
    }
    $profile_data = json_decode($profile_response, true);
    if (!isset($profile_data['properties'])) {
        return "/assets/images/steve.png";
    }
    foreach ($profile_data['properties'] as $property) {
        if ($property['name'] === 'textures') {
            $textures = json_decode(base64_decode($property['value']), true);
            return $textures['textures']['SKIN']['url'] ?? null;
        }
    }
    return "/assets/images/steve.png";
}
function checklogin() {
 	if (!isset($_SESSION['username']) || !isset($_SESSION['user_id'])) {
    	header('Location: /login');
	}
}
function Doithe($loaithe, $menhgia, $seri, $pin, $code)
{
    global $PTDUNG;
    $partner_id = $PTDUNG->site('card_partner_id');
    $partner_key = $PTDUNG->site('card_partner_key');
    
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_CONNECTTIMEOUT => 0,
        CURLOPT_TIMEOUT => 16,
        CURLOPT_URL => 'http://thesieuviet.net/chargingws/v2',
        CURLOPT_USERAGENT => 'PTD',
        CURLOPT_POST => 1,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_POSTFIELDS => http_build_query(array(
            'sign' => md5($partner_key.$pin.$seri),
            'telco' => $loaithe,
            'code' => $pin,
            'serial' => $seri,
            'amount' => $menhgia,
            'request_id' => $code,
            'partner_id' => $partner_id,
            'command'   => 'charging'
        ))
    ));
    $result = curl_exec($ch);
    curl_close($ch);

    $json = json_decode($result, true);
    return $json;
}
function freegemsUser($user_id, $row)
{
    global $PTDUNG;
    return $PTDUNG->get_row("SELECT * FROM `freegems_info` WHERE `user_id` = '$user_id' ")[$row];
}