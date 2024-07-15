<aside>
    <div class="sidebar" id="sidebar">
          <div class="sidebar-header">
            <h3>Menu Chính</h3>
          </div>
          <ul>
            <li><a href="/freecoins/">Trang Chủ</a></li>
            <li><a href="/freecoins/index.php?action=vong_quay">Vòng Quay</a></li>
            <?php if(isset($_SESSION['username']) && $getUser['admin']==1):?>
            <li><a href="/freecoins/index.php?action=admin_page">Trang Quản Trị</a></li>
            <?php endif;?>
          </ul>
        </div>
    
        <div class="toggle-btn" onclick="toggleSidebar()">
          <div class="toggle-icon"></div>
    </div>
</aside>