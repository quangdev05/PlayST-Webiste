<?php 
    require_once(__DIR__."/../head-header-footer/head.php");
    require_once(__DIR__."/../head-header-footer/header.php");
    require_once(__DIR__.'/core/db.php');
    require_once(__DIR__.'/core/helpers.php');
    if (isset($_SESSION['username']) && isset($_SESSION['user_id'])) {
          header('Location: /');
    }
?>
    <link rel="stylesheet" type="text/css" href="/dist/css/sweetalert.css?v=<?=time()?>">
    <script src="/assets/libs/jquery/dist/jquery-1.11.2.min.js?v=<?=time()?>"></script>
    <script src="/dist/js/sweetalert.min.js?v=<?=time()?>"></script>
  
  <section class="main">
    <h1 class="title">Đăng ký Free Gems</h1>
    </div>
<form class="form-wrapper" id="register">
  <input type='hidden' name='_csrf' value='aj7qJI83-pTU6Iu-37O4TxMtst1WKXwcLnck'>

  <input name="email" type="email" placeholder="Email"/>
  <input type="text" name="user" id="user" required placeholder="Tài khoản"
    value="" @endif />

  <input type="password" name="pass" id="password" required placeholder="Mật khẩu" />
  <input name="repass" type="password" placeholder="Nhập lại mật khẩu"/>
  
  <button type="submit" id="btn-submit" class="btn-submit">Đăng ký</button>
</form>

<div class="sub-form">
  <a href="https://www.playst.click/login" class="primary">Đăng nhập</a>
</div>
</div>
  </section>
    <script src="/dist/js/post.js?v=<?=time()?>"></script>
    <script src="/assets/libs/jquery/dist/jquery.min.js?v=<?=time()?> "></script>
    <script src="/assets/libs/popper.js/dist/umd/popper.min.js?v=<?=time()?> "></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js?v=<?=time()?> "></script>
  
<?php 
    require_once(__DIR__."/../head-header-footer/footer.php");
?>