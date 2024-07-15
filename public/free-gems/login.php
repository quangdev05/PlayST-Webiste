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
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
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
        <form id="login" class="login-form">
          <h1>Đăng nhập Free Gems</h1>
          <input name="user" type="text" placeholder="Tài khoản" required/>
          <input name="pass" type="password" placeholder="Mật khẩu" required/>
          <button type="submit">Đăng Nhập</button>
          <p class="message">Chưa có tài khoản? <a href="register">Đăng Kí</a></p>
        </form>
      </div>
    </div>
    <script src="dist/js/post.js?v=<?=time()?>"></script>
    <script src="https://code.jquery.com/jquery.min.js "></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js?v=<?=time()?> "></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js?v=<?=time()?> "></script>
</body>

</html>