<?php 
    require_once(__DIR__. '/../free-gems/core/db.php');
    require_once(__DIR__. '/../free-gems/core/helpers.php');
?>
<header>
    <div id="menu-btn">
      <button type="button" class="content">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12"></path>
        </svg>
        <span class="ml-2">MENU</span>
      </button>

      <button type="button" class="content opacity-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
        <span class="ml-2">&#272;&Oacute;NG</span>
      </button>
    </div>
    
    <nav id="menu-main" aria-label="Mobile Navigation" class="opacity-0">
      <ul class="content">
        <li><a href="https://www.playst.click/">Trang Chủ</a></li>
        <li><a href="https://discord.gg/nd5GHtr68k" target="_blank">Cộng Đồng</a></li>
        <li><a href="https://www.playst.click/terms">Điều Khoản</a></li>
        <li><a href="https://www.playst.click/free-gems/">Free Gems</a></li>
        <?php if (!isset($_SESSION['username'])) { ?>
            <li><a href='https://www.playst.click/login'>Tài khoản</a></li>
        <?php } else { ?>
            <li><a href='https://www.playst.click/profile'><?= $_SESSION['username'] ?></a></li>
        <?php } ?>
      </ul>
    </nav>

    
    <nav class="top-menu basis-3/5 hidden xl:block" aria-label="Main Navigation Left">
      <ul>
        <li><a href="https://www.playst.click/">Trang Chủ</a></li>
        <li><a href="https://discord.gg/nd5GHtr68k" target="_blank">Cộng Đồng</a></li>
        <li><a href="https://www.playst.click/terms">Điều Khoản</a></li>
      </ul>
    </nav>

    <a class="logo basis-1/5" href="https://www.playst.click/">
      <img src="https://i.imgur.com/Q5yVp7K.png" alt="PlayST">
    </a>

    <nav class="top-menu basis-3/5 hidden xl:block" aria-label="Main Navigation Right">
      <ul class="justify-end">
        <li><a href="https://www.playst.click/free-gems/">Free Gems</a></li>
        <li><a href="https://www.playst.click/download">Tải Game</a></li>
        <?php if (!isset($_SESSION['username'])) { ?>
            <li><a href='https://www.playst.click/login'>Tài khoản</a></li>
        <?php } else { ?>
            <li><a href='https://www.playst.click/profile'><?= $_SESSION['username'] ?></a></li>
        <?php } ?>
    </ul>
    </nav>
  </header>
  
  <section class="main">
<div class="home">