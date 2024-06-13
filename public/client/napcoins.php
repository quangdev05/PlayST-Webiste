<html>
<?php 
    require_once(__DIR__."/../head-header-footer/head.php");
    require_once(__DIR__."/../head-header-footer/header.php");
?>

<section class="main">
    <h1 class="title">Nạp Coins (Bank +30%)</h1>
    <form action="napcoins" method="POST" class="form-wrapper" id="form">
        <input type='hidden' name='_csrf' value='wvx0B2Ux-0w0D1wzEYH-TZcUbzu7791hSonA'>
                    <select class="form-control" name="name" id="bankSelect">
                        <option value="chonbank">Chọn Ngân Hàng</option>
                        <option value="VCB">Vietcombank</option>
                        <option value="MB">MBBank</option>
                        <!-- Thêm các ngân hàng khác nếu cần -->
                    </select>
                    
                  
                    <input type="text" class="form-control" name="stk" id="stkInput" required placeholder="Số tài khoản" readonly/>
                    
                    <input type="text" class="form-control" name="tentk" id="tentkInput" required placeholder="Chủ tài khoản" readonly/>
                
                    <input type="text" class="form-control" name="username" id="usernameInput" required placeholder="Tên nhân vật"/>
        
        <input type="number" name="money" id="money" required placeholder="Số tiền nạp" value="<?php echo isset($money) ? htmlspecialchars($money) : ''; ?>" />
        <span class="note">Tối thiểu 10.000đ | Không giới hạn | Bội 10.000đ</span>
        
                    <input type="text" class="form-control" name="nd" id="ndInput" required placeholder="Nội dung" readonly/>
        
        <input type="hidden" name="temp" value="compact">
        <button type="submit" id="submit" name="submit" class="btn-submit">Tạo QR Code</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
function check_string($data)
{
    return trim(htmlspecialchars(addslashes($data)));
}

// Mảng ánh xạ số tài khoản và tên chủ thẻ cố định cho từng ngân hàng
$fixed_info = array(
    "VCB" => array("stk" => "1041634490", "tentk" => "PHAM DUY QUANG"),
    "MB" => array("stk" => "5595595595", "tentk" => "PHAM DUY QUANG"),
    // Thêm các ngân hàng khác nếu cần thiết
);

$name = isset($_POST['name']) ? $_POST['name'] : ""; // Lấy giá trị ngân hàng nếu được submit

if(isset($_POST['submit'])) {
    $name   = check_string($_POST['name']);
    $stk    = isset($fixed_info[$name]) ? $fixed_info[$name]['stk'] : "";
    $money  = check_string($_POST['money']);
    $tentk  = urlencode(isset($fixed_info[$name]) ? $fixed_info[$name]['tentk'] : "");
    $nd     = urlencode(check_string($_POST['nd']));
    $temp   = check_string($_POST['temp']);
    if(!$name) {
        echo 'Bạn chưa chọn ngân hàng';
    } else if(!$stk) {
        echo 'Không có thông tin số tài khoản cho ngân hàng này';
    } else {
        // $url = "https://api.vietqr.io/$name/$stk/$money/$nd/vietqr_net_2.jpg";
        $url = "https://img.vietqr.io/image/$name-$stk-$temp.png?amount=$money&addInfo=$nd&accountName=$tentk";
    }
}
?>

<?php if(isset($url)) { ?>
    <center>
      <div class="col-md-1" style="text-align: center;">
    <img src="<?= $url; ?>" class="centered-image">
</div>

<style>
    .centered-image {
        display: block;
        margin-left: auto;
        margin-right: auto;
        max-width: 25%;
        height: auto;
    }
</style>

            <div class="form-group">
            </div>
        </div>
    </center>
<?php } ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1k/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('#bankSelect').change(function() {
            var selectedBank = $(this).val();
            var stk = '<?php echo isset($fixed_info["VCB"]) ? $fixed_info["VCB"]["stk"] : ""; ?>';
            var tentk = '<?php echo isset($fixed_info["VCB"]) ? urldecode($fixed_info["VCB"]["tentk"]) : ""; ?>';

            if (selectedBank === "MB") {
                stk = '<?php echo isset($fixed_info["MB"]) ? $fixed_info["MB"]["stk"] : ""; ?>';
                tentk = '<?php echo isset($fixed_info["MB"]) ? urldecode($fixed_info["MB"]["tentk"]) : ""; ?>';
            }

            $('#stkInput').val(stk);
            $('#tentkInput').val(tentk);
        });

        $('#usernameInput').on('input', function() {
            var username = $(this).val();
            var content = 'PlayST NapCoins ' + username;
            $('#ndInput').val(content);
        });
    });
</script>
<?php 
    require_once(__DIR__."/../head-header-footer/footer.php");
?>
</body>
</html>
