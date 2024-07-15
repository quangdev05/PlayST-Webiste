<?php
require_once(__DIR__.'/core/db.php');
require_once(__DIR__.'/core/helpers.php');
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
</head>
    <style>
        body {
            font-family: 'Roboto';
        }
    </style>
<body style="background: linear-gradient(90deg, rgba(141,194,111,1) 0%, rgba(118,184,82,1) 50%)">
    <div class="login-page">
      <div class="form">
        <form id="register" class="login-form">
          <h1>ĐĂNG KÍ</h1>
          <input name="email" type="email" placeholder="Email"/>
          <input name="user" type="text" placeholder="Tài khoản"/>
          <input name="pass" type="password" placeholder="Mật khẩu"/>
          <input name="repass" type="password" placeholder="Nhập lại mật khẩu"/>
          <button type="submit">Đăng Kí</button>
          <p class="message">Đã có tài khoản? <a href="login">Đăng Nhập</a></p>
        </form>
        </div>
    </div>
    <script src="dist/js/post.js?v=<?=time()?>"></script>
    <script src="assets/libs/jquery/dist/jquery.min.js?v=<?=time()?> "></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js?v=<?=time()?> "></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js?v=<?=time()?> "></script>
</body>

</html>