<?php 
    require_once(__DIR__."/head.php");
    require_once(__DIR__."/header.php");
?>

  
  <section class="main">
    <h1 class="title">Đăng nhập</h1>
<form action="/login" method="POST" class="form-wrapper" id="form">
  <input type='hidden' name='_csrf' value='aj7qJI83-pTU6Iu-37O4TxMtst1WKXwcLnck'>

  
  <input type="text" name="uid" id="uid" required placeholder="Tài khoản hoặc email"
    value="" @endif />

  <input type="password" name="password" id="password" required placeholder="Mật khẩu" />
  
  <button type="submit" id="btn-submit" class="btn-submit">Đăng nhập</button>
</form>

<div class="sub-form">
  <a href="/register" class="primary">Đăng ký tài khoản</a>
  <a href="/forgotpass" class="font-medium">Quên mật mã?</a>
</div>
</div>
  </section>

  
<?php 
    require_once(__DIR__."/footer.php");
?>