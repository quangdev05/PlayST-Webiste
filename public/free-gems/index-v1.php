<?php
require_once(__DIR__ . '/core/db.php');
require_once(__DIR__ . '/core/rcon.php');
require_once(__DIR__ . '/core/helpers.php');

if (!isset($_SESSION['username']) || !isset($_SESSION['user_id'])) {
    header('Location: https://www.playst.click/free-gems/login');
}

?>
<html dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <title>PlayST</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="dist/css/style.css?v=<?= time() ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dist/css/sweetalert.css?v=<?=time()?>">
    <script src="assets/libs/jquery/dist/jquery-1.11.2.min.js?v=<?=time()?>"></script>
    <script src="dist/js/sweetalert.min.js?v=<?=time()?>"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<style>
    body {
        font-family: 'Roboto';
    }
</style>
<body>
    <nav class="navbar">
        <div class="logo"></div>
        <ul class="nav-links">
            <li><a href="#"><?= $_SESSION['username'] ?></a></li>
            <li><a href="logout.php">Đăng Xuất</a></li>
        </ul>
        <div class="hamburger">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </nav>
    <?php require_once 'includes/client/sidebar.php' ?>
    <?php
        $action = !empty($_GET['action']) ? xss($_GET['action']) : '';
        switch ($action) {
            case "vong_quay":
                include "includes/client/vong_quay.php";
                break;
            case "admin_page":
                include "includes/admin/admin_page.php";
                break;
            default:
            case "":
                include "includes/client/home.php";
                break;
        }
    ?>
    <script src="dist/js/navbar.js?v=<?=time()?>"></script>;
    <script src="dist/js/sidebar.js?v=<?=time()?>"></script>;
    <script src="dist/js/post.js?v=<?= time() ?>"></script>;
</body>
</html>