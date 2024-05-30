<?php 
    require_once(__DIR__."/public/client/head.php");
    require_once(__DIR__."/public/client/header.php");
?>
  
 

  
  <div class="basis-1/4">
    <a class="btn-0" href="download">
      <span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"></path>
        </svg>
      </span>
      <span>
        <span class="name">Tải Game</span>
        <span class="desc">Legacy Launcher</span></span>
      </span>
    </a>

    <a class="btn-0" href="account">
      <span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"></path>
        </svg>
      </span>
      <span>
        <span class="name">Tài Khoản</span>
        <span class="desc">Đăng Ký - Đăng Nhập</span>
      </span>
    </a>

    <a class="btn-0" href="napgame">
      <span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2 7h20v10H2z M4 9h16v2H4z"></path>
        </svg>
      </span>
      <span>
        <span class="name">Nạp Game</span>
        <span class="desc">Thẻ Cào - Ngân Hàng</span>
      </span>
    </a>

    <h2 class="heading-1 relative">Tình Trạng Máy Chủ
      <span class="absolute top-1 ml-2 cursor-pointer transition-opacity" id="server-status-refresh-btn">
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor" class="w-5 h-5">
          <path fill-rule="evenodd" d="M15.312 11.424a5.5 5.5 0 01-9.201 2.466l-.312-.311h2.433a.75.75 0 000-1.5H3.989a.75.75 0 00-.75.75v4.242a.75.75 0 001.5 0v-2.43l.31.31a7 7 0 0011.712-3.138.75.75 0 00-1.449-.39zm1.23-3.723a.75.75 0 00.219-.53V2.929a.75.75 0 00-1.5 0V5.36l-.31-.31A7 7 0 003.239 8.188a.75.75 0 101.448.389A5.5 5.5 0 0113.89 6.11l.311.31h-2.432a.75.75 0 000 1.5h4.243a.75.75 0 00.53-.219z" clip-rule="evenodd"></path>
        </svg>
      </span>
    </h2>

    <div class="card-flex">
      <span class="server-status-dot">
        <span class="server-status-ping ping"></span>
        <span class="server-status-ping dot"></span>
      </span>
      <span class="font-medium ml-1">playst.click</span>
      <span class="flex-grow text-right text-sm" id="server-status">...</span>
    </div>

    <h2 class="heading-1">Hoạt Động</h2>
    <div class="card-grid grid-cols-2">
      <span>Đang Cập Nhật</span><span class="text-right">...</span>
    </div>
  </div>

  
  <div class="basis-2/4">
    
    <video class="banner lazy" autoplay muted loop playsinline poster="https://saigonmc.com/assets/images/banner-1-20.1abf8ab1.jpg">
      <source data-src="https://saigonmc.com/assets/images/trailer-1-20.6fbe6fa3.webm" type="video/webm">
      <source data-src="https://saigonmc.com/assets/images/trailer-1-20.c0b78adf.mp4" type="video/mp4">
    </source></source></video>

    <div class="mt-8">
      <div class="flex">
        <button id="tab-news" class="tab rounded-tl-lg tab-selected">Tin Tức</button>
        <button id="tab-event" class="tab">Sự Kiện</button>
        <button id="tab-feature" class="tab rounded-tr-lg">Tính Năng</button>
        <span class="grow"></span>
        <a class="tab-more" href="https://discord.gg/nd5GHtr68k" target="_blank">Xem Thêm +</a>
      </div>

      <div class="px-3 py-4 bg-blue-950 rounded-b-lg rounded-tr-lg h-96">
        <div id="content-news" class="tab-content hidden tab-content-selected"><ul class="list-square ml-6 mr-2 text-sm">

  <li class="mb-2 font-medium">

    <div class="flex">
      <a class="grow" href="#" target="_blank">Đang Cập Nhật</span>
    </div>


  </li>

</ul>

        </div>

        <div id="content-event" class="tab-content hidden"><ul class="list-square ml-6 mr-2 text-sm">

  <li class="mb-2 font-medium">

    <div class="flex">
      <a class="grow" href="#" target="_blank">Đang Cập Nhật</span>
    </div>
  </li>
</ul>
        </div>

        <div id="content-feature" class="tab-content hidden"><ul class="list-square ml-6 mr-2 text-sm">

  <li class="mb-2 font-medium">

    <div class="flex">
      <a class="grow" href="#" target="_blank">Đang Cập Nhật</span>
    </div>

    <div class="flex mt-1 mb-4 pr-2 font-normal">
      <span></span>
    </div>

  </li>

</ul>

        </div>
      </div>
    </div>
  </div>

  
  <div class="basis-1/4">

    <h2 class="heading-0">Bảo Trì Định Kỳ</h2>
    <div class="card text-center">
      <div class="text-xl font-bold">Comming Soon</div>
      <div class="text-sm">Hàng Ngày</div>
    </div>

    

    <h2 class="heading-1">Vote Nhận Quà Hàng Ngày</h2>
    <a class="btn-1" href="#" target="_blank">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9"></path>
        </svg>
      </div>
      <div>
        <span class="font-medium">#1</span>
      </div>
    </a>
    <a class="btn-1" href="#" target="_blank">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9"></path>
        </svg>
      </div>
      <div>
        <span class="font-medium">#2</span>
      </div>
    </a>
    <a class="btn-1" href="#" target="_blank">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9"></path>
        </svg>
      </div>
      <div>
        <span class="font-medium">#3</span>
      </div>
    </a>
    <a class="btn-1" href="#" target="_blank">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9"></path>
        </svg>
      </div>
      <div>
        <span class="font-medium">#4</span>
      </div>
    </a>
    <a class="btn-1" href="#" target="_blank">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9"></path>
        </svg>
      </div>
      <div>
        <span class="font-medium">#5</span>
      </div>
    </a>

    <div class="max-w-xs flex flex-row items-center mt-12 mx-auto">
      <div class="min-w-fit p-1">
        <div class="py-1 text-center text-2xl font-black text-black bg-gray-50">13<sup>+</sup></div>
        <div class="mt-1 text-[0.5rem] text-gray-50">NPH Xếp Loại</div>
      </div>
      <div class="flex-grow px-2 text-xs text-gray-400">
        Chơi quá 180 phút một ngày sẽ ảnh hưởng xấu đến sức khỏe
      </div>
    </div>

  </div>
</div>
  </section>

  
<?php 
    require_once(__DIR__."/public/client/footer.php");
?>
