<?php 
    $pageTitle = "Reset Password | PlayST Network";
    require_once(__DIR__."/includes/head.php");
    require_once(__DIR__."/includes/header.php");
?>

   <body class="bg-global_0">
   <title>Khôi Phục Mật Khẩu | PlayST</title>
   <meta property="og:title" content="Khôi Phục Mật Khẩu | PlayST"/>
   <meta name="twitter:title" content="Khôi Phục Mật Khẩu | PlayST"/>
  <section class="main">
    <h1 class="title">Hướng Dẫn Khôi Phục Mật Khẩu</h1>
<div class="static-page">
  <p class="mb-8">
    1. Bạn phi vô server và nhập lệnh /email recover [email](Email tài khoản). Ví dụ: /email recover quangdev05@gmail.com
  <br>
    2. Bạn vô hòm thư Email của bạn tìm thư có tên là PlayST Account. Nếu trong thư mục Chính và Cập nhật không có, thì hãy thử tìm trong thư Rác nhé.
  <br>
    3. Trong thư có 1 dòng lệnh /email code ... có hiệu lực trong 4 giờ, bạn copy lệnh và dùng nó trong server. Ví dụ: /email code 78f85784
  <br>
    4. Sau đó bạn dùng lệnh /email setpassword [mật khẩu mới]: Để đặt mật khẩu mới sau khi nhập lệnh Email Code. Ví dụ: /email setpassword Gangu123

  

    </div>
  
<?php 
    require_once(__DIR__."/includes/footer.php");
?>