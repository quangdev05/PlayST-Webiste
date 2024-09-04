<html>
<?php 
    require_once(__DIR__.  '/../head-header-footer/head.php');
    require_once(__DIR__.  '/../head-header-footer/header-free_gems.php');
    require_once(__DIR__ . '/core/db.php');
    require_once(__DIR__ . '/core/rcon.php');
    require_once(__DIR__ . '/core/helpers.php');
    
    if (!isset($_SESSION['username']) || !isset($_SESSION['user_id'])) {
    	header('Location: /login');
        $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
}
?>
 
  
    <link rel="stylesheet" type="text/css" href="/dist/css/sweetalert.css?v=<?=time()?>">
    <script src="/assets/libs/jquery/dist/jquery-1.11.2.min.js?v=<?=time()?>"></script>
    <script src="/dist/js/sweetalert.min.js?v=<?=time()?>"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

                    <?php
        $action = !empty($_GET['action']) ? xss($_GET['action']) : '';
        switch ($action) {
            case "vong_quay":
                include "includes/client/vong_quay.php";
                break;
            case "admin_page":
                include "includes/admin/admin_page.php";
                break;
            case "profile":
                include "includes/client/profile.php";
                break;
            default:
            case "":
                include "includes/client/home.php";
                break;
        }
    ?>
    <script src="/dist/js/post.js?v=<?= time() ?>"></script>
  </div>
<?php 
    require_once(__DIR__."/../head-header-footer/footer.php");
?>
  </body>
</html>
