<?php 
    require_once(__DIR__."/head.php");
    require_once(__DIR__."/header.php");
?>

  
  <section class="main">
    <h1 class="title">Đăng ký</h1>
<form action="/register" method="POST" class="form-wrapper" id="form">
  <input type='hidden' name='_csrf' value='wvx0B2Ux-0w0D1wzEYH-TZcUbzu7791hSonA'>

  
  <input type="text" name="email" id="email" required placeholder="Địa chỉ email"
    value="" @endif />

  <input type="text" name="username" id="username" required placeholder="Tên nhân vật"
    value="" @endif minlength="6" maxlength="16" />

  <input type="password" name="password" id="password" required placeholder="Mật khẩu" minlength="5" />

  <input type="password" name="password_confirmation" id="password-confirmation" required placeholder="Nhập lại mật mã"
    minlength="5" />

  <input type="text" name="birthday" id="birthday" required placeholder="Ngày tháng năm sinh" />

  <div class="tos">
    <input type="checkbox" id="term" name="term" required value="accept">
    <label for="term">Đồng ý với <a href="/terms" target="_blank" class="text-blue-500">
        Điều khoản</a> của PlayST</label><br>
  </div>

  

  
  <button type="submit" id="btn-submit" class="btn-submit">Đăng ký</button>
</form>

<div class="sub-form !block">
  Vui lòng đọc và tuân thủ theo <a href="/terms" target="_blank" class="text-blue-500">Điều khoản dịch vụ</a> của
  PlayST. Chúng tôi sẽ khoá tài khoản của bạn nếu bạn có các hành vi không phù hợp và sẽ không giải quyết bất kỳ các
  khiếu nại nào có liên quan.
</div>

<div class="max-w-xs flex flex-row items-center mt-12 mx-auto">
  <div class="min-w-fit p-1">
    <div class="py-1 text-center text-2xl font-black text-black bg-gray-50">13<sup>+</sup></div>
    <div class="mt-1 text-[0.5rem] text-gray-50">NPH XẾP LOẠI</div>
  </div>
  <div class="flex-grow px-2 text-xs text-gray-400">
    Chỉ tham gia nếu bạn từ đủ 13 tuổi trở lên<br>
    Chơi quá 180 phút một ngày sẽ ảnh hưởng xấu đến sức khỏe
  </div>
</div>
</div>
  </section>

  
<?php 
    require_once(__DIR__."/footer.php");
?>