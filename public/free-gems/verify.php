<?php
require_once(__DIR__."/../head-header-footer/head.php");
require_once(__DIR__."/../head-header-footer/header.php");
require_once(__DIR__.'/core/db.php');
require_once(__DIR__.'/core/helpers.php');

if (!isset($_SESSION['username']) || isset($_SESSION['user_id'])) {
  header('Location: /login');
}

?>

<html dir="ltr">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="dist/css/style.css?v=<?= time() ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/dist/css/sweetalert.css?v=<?=time()?>">
    <script src="/assets/libs/jquery/dist/jquery-1.11.2.min.js"></script>
    <script src="/dist/js/sweetalert.min.js?v=<?=time()?>"></script>
    <style>
        body {
            font-family: 'Roboto';
        }
    </style>
  <section class="main">
    <div class="text-center leading-7">
    	<form class="form-wrapper" id="verify">
      	  <input type='hidden' name='_csrf' value='aj7qJI83-pTU6Iu-37O4TxMtst1WKXwcLnck'>
          <h1 class="title">Đăng ký Free Gems</h1>
          <p class="message" style="padding-bottom:15px;"><b>Hãy Xác Minh Tài Khoản Bằng Cách Đăng Nhập Vào Server Bằng Tài Khoản Vừa Đăng Kí</b></p>
          <input name="user" type="hidden" placeholder="Tài khoản" value="<?= $_SESSION['username'] ?>"/>
          <button type="submit" id="btn-submit" class="btn-submit">Xác Minh</button>
    	</form>
    </div>
    <script src="dist/js/post.js?v=<?=time()?>"></script>
    <script src="/assets/libs/jquery/dist/jquery.min.js?v=<?=time()?> "></script>
    <script src="/assets/libs/popper.js/dist/umd/popper.min.js?v=<?=time()?> "></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js?v=<?=time()?> "></script>
  </div>
</body>
<?php 
    require_once(__DIR__."/../head-header-footer/footer.php");
?>
</html>