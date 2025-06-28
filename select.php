<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>选衣 - 服装设计主题网站</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#9c66d4',
            secondary: '#c872d2',
            accent: '#ff9eaa',
            dark: '#333333',
            light: '#f8f8f8'
          },
          fontFamily: {
            sans: ['PingFang SC', 'Microsoft YaHei', 'sans-serif'],
          },
        },
      }
    }
  </script>
</head>
<body class="bg-light text-dark">
  <!-- 顶部导航栏 -->
  <header class="fixed top-0 left-0 right-0 bg-white shadow-md z-50">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">
      <button onclick="history.back()" class="text-gray-500 hover:text-primary transition-colors">
        <i class="fa fa-angle-left text-xl"></i>
      </button>
      <h1 class="text-xl font-bold text-primary">智能选衣</h1>
      <div class="flex items-center space-x-4">
        <button class="text-gray-500 hover:text-primary transition-colors">
          <i class="fa fa-filter text-lg"></i>
        </button>
        <button class="text-gray-500 hover:text-primary transition-colors">
          <i class="fa fa-search text-lg"></i>
        </button>
      </div>
    </div>
  </header>

  <!-- 主内容区 -->
  <main class="container mx-auto px-4 pt-20 pb-20">
    <!-- 筛选条件 -->
    <section class="mb-4 bg-white p-3 rounded-lg shadow-sm">
      <div class="grid grid-cols-3 gap-2">
        <select class="border border-gray-200 rounded-lg p-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
          <option>全部品类</option>
          <option>上衣</option>
          <option>裤装</option>
          <option>裙装</option>
          <option>外套</option>
        </select>
        <select class="border border-gray-200 rounded-lg p-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
          <option>全部风格</option>
          <option>休闲</option>
          <option>商务</option>
          <option>运动</option>
          <option>时尚</option>
        </select>
        <select class="border border-gray-200 rounded-lg p-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
          <option>全部价格</option>
          <option>0-199</option>
          <option>200-499</option>
          <option>500-999</option>
          <option>1000+</option>
        </select>
      </div>
    </section>

    <!-- 服装列表 -->
    <section>
      <div class="grid grid-cols-2 gap-4">
        <!-- 服装卡片 1 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm card-hover">
          <div class="relative h-48 overflow-hidden">
            <img src="https://picsum.photos/seed/select1/400/600" alt="夏季连衣裙" class="w-full h-full object-cover">
            <div class="absolute top-2 right-2 bg-accent text-white text-xs px-2 py-1 rounded">
              热销
            </div>
          </div>
          <div class="p-3">
            <h3 class="font-medium text-sm mb-1">优雅气质连衣裙</h3>
            <div class="flex justify-between items-center">
              <span class="text-primary font-bold">¥399</span>
              <button class="text-gray-400 hover:text-primary transition-colors">
                <i class="fa fa-shopping-cart"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- 服装卡片 2 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm card-hover">
          <div class="relative h-48 overflow-hidden">
            <img src="https://picsum.photos/seed/select2/400/600" alt="休闲牛仔裤" class="w-full h-full object-cover">
          </div>
          <div class="p-3">
            <h3 class="font-medium text-sm mb-1">弹力修身牛仔裤</h3>
            <div class="flex justify-between items-center">
              <span class="text-primary font-bold">¥259</span>
              <button class="text-gray-400 hover:text-primary transition-colors">
                <i class="fa fa-shopping-cart"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- 服装卡片 3 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm card-hover">
          <div class="relative h-48 overflow-hidden">
            <img src="https://picsum.photos/seed/select3/400/600" alt="夏季T恤" class="w-full h-full object-cover">
            <div class="absolute top-2 right-2 bg-primary text-white text-xs px-2 py-1 rounded">
              新品
            </div>
          </div>
          <div class="p-3">
            <h3 class="font-medium text-sm mb-1">纯棉宽松T恤</h3>
            <div class="flex justify-between items-center">
              <span class="text-primary font-bold">¥129</span>
              <button class="text-gray-400 hover:text-primary transition-colors">
                <i class="fa fa-shopping-cart"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- 服装卡片 4 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm card-hover">
          <div class="relative h-48 overflow-hidden">
            <img src="https://picsum.photos/seed/select4/400/600" alt="时尚外套" class="w-full h-full object-cover">
            <div class="absolute top-2 right-2 bg-secondary text-white text-xs px-2 py-1 rounded">
              折扣
            </div>
          </div>
          <div class="p-3">
            <h3 class="font-medium text-sm mb-1">休闲百搭外套</h3>
            <div class="flex justify-between items-center">
              <span class="text-primary font-bold">¥499</span>
              <button class="text-gray-400 hover:text-primary transition-colors">
                <i class="fa fa-shopping-cart"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- 服装卡片 5 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm card-hover">
          <div class="relative h-48 overflow-hidden">
            <img src="https://picsum.photos/seed/select5/400/600" alt="夏季短裙" class="w-full h-full object-cover">
          </div>
          <div class="p-3">
            <h3 class="font-medium text-sm mb-1">高腰显瘦短裙</h3>
            <div class="flex justify-between items-center">
              <span class="text-primary font-bold">¥199</span>
              <button class="text-gray-400 hover:text-primary transition-colors">
                <i class="fa fa-shopping-cart"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- 服装卡片 6 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm card-hover">
          <div class="relative h-48 overflow-hidden">
            <img src="https://picsum.photos/seed/select6/400/600" alt="休闲衬衫" class="w-full h-full object-cover">
            <div class="absolute top-2 right-2 bg-accent text-white text-xs px-2 py-1 rounded">
              热销
            </div>
          </div>
          <div class="p-3">
            <h3 class="font-medium text-sm mb-1">复古条纹衬衫</h3>
            <div class="flex justify-between items-center">
              <span class="text-primary font-bold">¥229</span>
              <button class="text-gray-400 hover:text-primary transition-colors">
                <i class="fa fa-shopping-cart"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- 底部导航（重点修复：确保每个页面的底部导航链接正确） -->
  <nav class="fixed bottom-0 left-0 right-0 bg-white shadow-[0_-2px_10px_rgba(0,0,0,0.05)] z-40">
    <div class="grid grid-cols-5 gap-1">
      <a href="index.php" class="flex flex-col items-center justify-center py-3 text-gray-400 hover:text-primary transition-colors">
        <i class="fa fa-home text-xl mb-1"></i>
        <span class="text-xs">首页</span>
      </a>
      <a href="videos.php" class="flex flex-col items-center justify-center py-3 text-gray-400 hover:text-primary transition-colors">
        <i class="fa fa-play-circle text-xl mb-1"></i>
        <span class="text-xs">视频</span>
      </a>
      <a href="select.php" class="flex flex-col items-center justify-center py-3 text-primary">
        <i class="fa fa-shopping-bag text-xl mb-1"></i>
        <span class="text-xs">选衣</span>
      </a>
      <a href="vote.php" class="flex flex-col items-center justify-center py-3 text-gray-400 hover:text-primary transition-colors">
        <i class="fa fa-thumbs-up text-xl mb-1"></i>
        <span class="text-xs">投票</span>
      </a>
      <a href="profile.php" class="flex flex-col items-center justify-center py-3 text-gray-400 hover:text-primary transition-colors">
        <i class="fa fa-user text-xl mb-1"></i>
        <span class="text-xs">我的</span>
      </a>
    </div>
  </nav>
</body>
</html>