<html>
<?php 
    require_once(__DIR__."/../head-header-footer/head.php");
    require_once(__DIR__."/../head-header-footer/header.php");
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
?>
   <title>Nạp Thẻ | PlayST</title>
   <meta name="twitter:title" content="Nạp Thẻ | PlayST"/>
   <meta property="og:title" content="Nạp Thẻ | PlayST"/>
<link rel="stylesheet" type="text/css" href="/dist/css/sweetalert.css?v=<?=time()?>">
<script src="/assets/libs/jquery/dist/jquery-1.11.2.min.js?v=<?=time()?>"></script>
<script src="/dist/js/sweetalert.min.js?v=<?=time()?>"></script>
<section class="main">
<button class="tab rounded-tl-lg tab-selected">Nạp thẻ</button>
<button class="tab" onclick="window.location.href='https://www.playst.click/nap-gems/bank'">Ngân hàng</button>
<button class="tab rounded-tr-lg" onclick="window.location.href='https://thesieuviet.net/recharge/gems-playst'">Thẻ Siêu Việt</button>

    </div>
    <form class="form-wrapper" id="napThe">
        <input type='hidden' name='_csrf' value='wvx0B2Ux-0w0D1wzEYH-TZcUbzu7791hSonA'>
      
                    <select class="form-control" name="card_type" id="cardSelect">
                        <option>Chọn loại thẻ</option>
                        <option value="VIETTEL">Viettel</option>
                        <option value="VINAPHONE">Vinaphone</option>
                        <option value="MOBIFONE">Mobifone</option>
                        <option value="VNMOBI">Vietnamobile</option>
                        <option value="ZING">Zing</option>
                        <option value="GATE">Gate</option>
                        <option value="GARENA">Garena</option>
                        <option value="VCOIN">Vcoin</option>
                    </select>
                    
                    <select class="form-control" name="amount" id="amountSelect">
                        <option>Chọn mệnh giá (sai mất thẻ)</option>
                        <option value="10000">10.000đ</option>
                        <option value="20000">20.000đ </option>
                        <option value="30000">30.000đ</option>
                        <option value="50000">50.000đ</option>
                        <option value="100000">100.000đ</option>
                        <option value="200000">200.000đ</option>
                        <option value="300000">300.000đ</option>
                        <option value="500000">500.000đ</option>
                        <option value="1000000">1.000.000đ</option>
      				</select>
                      <input type="number" class="form-control" name="gems" id="gems" required placeholder="Gems" readonly/>
      				<input type="text" class="form-control" name="username" id="username" value="<?= $username ?>" required placeholder="Tên nhân vật (Vui Lòng Đăng Nhập)" readonly onclick="redirectToLoginIfEmpty()"/>
                    <input type="number" class="form-control" name="code" id="code" required placeholder="Mã thẻ"/>
                    <input type="number" class="form-control" name="seri" id="seri" required placeholder="Seri thẻ"/>
                    
        
        <button type="submit" id="btn-submit" class="btn-submit">Nạp Thẻ</button>
  </form>
  <div class="sub-form">
  <a href="/profile" class="primary">Lịch sử nạp</a>
      <div class="text-center leading-7">
    <div style="color: #FFFF00;" </div>
        GHI CHÚ
    <div class="flex-grow px-2 text-xs text-gray-400" style="color: #ff0000;"> 
           NGƯỜI CHƠI PHẢI ĐĂNG NHẬP GAME LẦN ĐẦU TRƯỚC KHI NẠP.
        </div>
         </div>
    </div>
  
<script src="/dist/js/post.js?v=<?= time() ?>"></script>
    <script>
function redirectToLoginIfEmpty() {
    var usernameInput = document.getElementById('username').value;
    if (!usernameInput || usernameInput.trim() === '') {
        window.location.href = '/login';
    }
}
</script>
  </div>
  <?php
  $fixed_info = array(
    "10000" => array("gems" => "10"),
    "20000" => array("gems" => "20"),
    "30000" => array("gems" => "30"),
    "50000" => array("gems" => "50"),
    "100000" => array("gems" => "100"),
    "200000" => array("gems" => "200"),
    "300000" => array("gems" => "300"),
    "500000" => array("gems" => "500"),
    "1000000" => array("gems" => "1000"),
    // Thêm các ngân hàng khác nếu cần thiết
);
  ?>
  <script>
$(document).ready(function() {
    $('#amountSelect').change(function() {
        var selectedAmount = $(this).val();
        var gems = '';

        switch (selectedAmount) {
            case '10000':
                gems = '<?php echo isset($fixed_info["10000"]) ? $fixed_info["10000"]["gems"] : ""; ?>';
                break;
            case '20000':
                gems = '<?php echo isset($fixed_info["20000"]) ? $fixed_info["20000"]["gems"] : ""; ?>';
                break;
            case '30000':
                gems = '<?php echo isset($fixed_info["30000"]) ? $fixed_info["30000"]["gems"] : ""; ?>';
                break;
            case '50000':
                gems = '<?php echo isset($fixed_info["50000"]) ? $fixed_info["50000"]["gems"] : ""; ?>';
                break;
            case '100000':
                gems = '<?php echo isset($fixed_info["100000"]) ? $fixed_info["100000"]["gems"] : ""; ?>';
                break;
            case '200000':
                gems = '<?php echo isset($fixed_info["200000"]) ? $fixed_info["200000"]["gems"] : ""; ?>';
                break;
            case '300000':
                gems = '<?php echo isset($fixed_info["300000"]) ? $fixed_info["300000"]["gems"] : ""; ?>';
                break;
            case '500000':
                gems = '<?php echo isset($fixed_info["500000"]) ? $fixed_info["500000"]["gems"] : ""; ?>';
                break;
            case '1000000':
                gems = '<?php echo isset($fixed_info["1000000"]) ? $fixed_info["1000000"]["gems"] : ""; ?>';
                break;
            // Thêm các trường hợp khác nếu cần thiết
            default:
                break;
        }

        // Đặt giá trị gems vào input readonly
        $('#gems').val(gems);
    });
});

    </script>
<?php 
    require_once(__DIR__."/../head-header-footer/footer.php");
?>
</body>
</html>
