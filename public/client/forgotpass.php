<?php 
    require_once(__DIR__."/head.php");
    require_once(__DIR__."/header.php");
?>

  
  <section class="main">
    <h1 class="title">Khôi phục mật khẩu</h1>
<form action="/reset-password" method="POST" class="form-wrapper" id="form">
  <input type='hidden' name='_csrf' value='meyS7MIb-jBInUfr2uMWlGcnG2hX9w45ymUk'>

  
  <input type="email" name="email" id="email" required placeholder="Email của tài khoản"
    value="" @endif />

  <button type="submit" id="btn-submit" class="btn-submit">Xác nhận thông tin</button>
</form>
  </section>
    </div>
  
<?php 
    require_once(__DIR__."/footer.php");
?>