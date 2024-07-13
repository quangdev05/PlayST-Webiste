<?php 
$user_id = $_SESSION['user_id'];
$skin_url = getSkinURL($_SESSION['username']);
?>
 <title>Free Gems | PlayST</title>
 <meta property="og:title" content="Free Gems | PlayST"/>
 <meta name="twitter:title" content="Free Gems | PlayST"/>
<section class="main">
  <div class="text-center leading-7">
  <p>Vượt link sau để nhận lượt <a style="text-decoration:none;color:red;" href="/free-gems?action=vong_quay">vòng quay</a> (10 link -> 1 lượt): </p>
  <div id="linkContainer">
  </div>
  <p>Tổng link đã vượt: <?= freegemsUser($user_id, 'total') ?></p>
</section>


<script>
    function renderLink() {
        $.ajax({
            type: 'POST',
            url: 'api/link.php',
            data: {
                id: <?= $_SESSION['user_id']; ?>
            },
            success: function(response) {
                $("#linkContainer").html(response);
            },
        });
    };
    renderLink();
</script>
