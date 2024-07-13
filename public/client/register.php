
<?php
error_reporting(E_ALL);

require '../../authme/AuthMeController.php';

// Start the session
session_start();
// Trước khi hiển thị thông báo, xóa thông báo cũ (nếu có) từ session
if (isset($_SESSION['register_success'])) {
    unset($_SESSION['register_success']);
}

if (isset($_SESSION['error_message'])) {
    unset($_SESSION['error_message']);
}

// Change this to the file of the hash encryption you need, e.g. Bcrypt.php or Sha256.php
require '../../authme/Sha256.php';
// The class name must correspond to the file you have in require above! e.g. require 'Sha256.php'; and new Sha256();
$authme_controller = new Sha256();

$action = get_from_post_or_empty('action');
$user = get_from_post_or_empty('username');
$pass = get_from_post_or_empty('password');
$email = get_from_post_or_empty('email');

$was_successful = false;
$register_success = false;
$error_message = '';

if ($action && $user && $pass) {
    if ($action === 'Log in') {
        $was_successful = process_login($user, $pass, $authme_controller);
    } else if ($action === 'Register') {
        $was_successful = process_register($user, $pass, $email, $authme_controller, $register_success, $error_message);
    }
}

// Display the registration form
?>
     <title>Đăng Ký | PlayST</title>
     <meta property="og:title" content="Đăng Ký | PlayST"/>
     <meta name="twitter:title" content="Đăng Ký | PlayST"/>
    <style>
        .notice {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            border-radius: 5px;
            color: #333;
            font-size: 14px;
        }
        .success {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #4CAF50;
            background-color: #dff0d8;
            border-radius: 5px;
            color: #3c763d;
            font-size: 14px;
        }
        .error {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #f44336;
            background-color: #f2dede;
            border-radius: 5px;
            color: #a94442;
            font-size: 14px;
        }
    </style>
<body>
<?php 
    require_once(__DIR__."/../head-header-footer/head.php");
    require_once(__DIR__."/../head-header-footer/header.php");
?>

<section class="main">
    <h1 class="title">Đăng ký</h1>
    <?php if (isset($_SESSION['register_success'])): ?>
        <div class="success">
            Đăng ký thành công! Chào mừng, <?php echo htmlspecialchars($_SESSION['user']); ?>!
        </div>
        <?php unset($_SESSION['register_success']); ?>
    <?php elseif (isset($_SESSION['error_message'])): ?>
        <div class="error">
            <?php echo $_SESSION['error_message']; ?>
        </div>
        <?php unset($_SESSION['error_message']); ?>
    <?php endif; ?>
    <form action="" method="POST" class="form-wrapper" id="form">
        <input type='hidden' name='_csrf' value='wvx0B2Ux-0w0D1wzEYH-TZcUbzu7791hSonA'>
        <input type="text" name="email" id="email" required placeholder="Địa chỉ email"
               value="<?php echo htmlspecialchars($email); ?>" />
        <input type="text" name="username" id="username" required placeholder="Tên nhân vật"
               value="<?php echo htmlspecialchars($user); ?>" minlength="6" maxlength="16" />
        <input type="password" name="password" id="password" required placeholder="Mật khẩu" minlength="5" />
                <input type="password" name="password_confirmation" id="password_confirmation" required placeholder="Nhập lại mật khẩu" minlength="5" />
        <div class="tos">

            <input type="checkbox" id="term" name="term" required value="accept">
            <label for="term">Đồng ý với <a href="/terms" target="_blank" class="text-blue-500">Điều khoản</a> của PlayST</label><br>
        </div>
        <button type="submit" name="action" value="Register" id="btn-submit" class="btn-submit">Đăng ký</button>
    </form>
  <div class="sub-form">
  <a href="/register" class="primary">Đăng nhập</a> 
  </div>
    <div class="sub-form !block">
        Vui lòng đọc và tuân thủ theo <a href="/terms" target="_blank" class="text-blue-500">Điều khoản dịch vụ</a> của PlayST. Chúng tôi sẽ khoá tài khoản của bạn nếu bạn có các hành vi không phù hợp và sẽ không giải quyết bất kỳ các khiếu nại nào có liên quan.
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
    require_once(__DIR__."/../head-header-footer/footer.php");
?>

<?php

function get_from_post_or_empty($index_name) {
    return trim(
        filter_input(INPUT_POST, $index_name, FILTER_UNSAFE_RAW, FILTER_REQUIRE_SCALAR | FILTER_FLAG_STRIP_LOW)
            ?: '');
}

// Login logic
function process_login($user, $pass, AuthMeController $controller) {
    if ($controller->checkPassword($user, $pass)) {
        printf('<h1>Hello, %s!</h1>', htmlspecialchars($user));
        echo 'Successful login. Nice to have you back!'
            . '<br /><a href="index.php">Back to form</a>';
        return true;
    } else {
        echo '<h1>Error</h1> Sai Username hoặc Mật Khẩu.';
    }
    return false;
}

// Register logic
function process_register($user, $pass, $email, AuthMeController $controller, &$register_success, &$error_message) {
    // Kiểm tra xem người dùng đã tồn tại hay không
    if ($controller->isUserRegistered($user)) {
        $error_message = 'Người dùng này đã tồn tại.';
        $_SESSION['error_message'] = $error_message;
        return false;
    } 
    // Kiểm tra xem email đã tồn tại hay không
    elseif ($controller->isEmailRegistered($email)) {
        $error_message = 'Email này đã tồn tại.';
        $_SESSION['error_message'] = $error_message;
        return false;
    }
    // Kiểm tra tính hợp lệ của email
    elseif (!is_email_valid($email)) {
        $error_message = 'Email không hợp lệ.';
        $_SESSION['error_message'] = $error_message;
        return false;
    } 
    // Kiểm tra tính hợp lệ của mật khẩu nhập lại
    elseif ($pass !== $_POST['password_confirmation']) {
        $error_message = 'Mật khẩu nhập lại không khớp.';
        $_SESSION['error_message'] = $error_message;
        return false;
    } else {
    // Nếu tất cả các điều kiện đều đúng, thực hiện đăng ký
        $register_success = $controller->register($user, $pass, $email);
        if ($register_success) {
            $_SESSION['register_success'] = true;
            $_SESSION['user'] = $user;
            header("refresh:1;url=/profile");
            return true;
        } else {
            $error_message = 'Đã xảy ra lỗi trong quá trình đăng ký.';
            $_SESSION['error_message'] = $error_message;
            return false;
        }
    }
}




function is_email_valid($email) {
    return trim($email) === ''
        ? true // accept no email
        : filter_var($email, FILTER_VALIDATE_EMAIL);
}
?>
</body>
</html>
