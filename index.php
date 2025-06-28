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
  <title>服装设计主题网站</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
  <!-- 自定义Tailwind配置 -->
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
  
  <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
      .text-shadow {
        text-shadow: 0 2px 4px rgba(0,0,0,0.1);
      }
      .card-hover {
        transition: all 0.3s ease;
      }
      .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
      }
    }
  </style>
</head>
<body class="bg-light text-dark">
  <!-- 顶部导航栏 -->
  <header class="fixed top-0 left-0 right-0 bg-white shadow-md z-50 transition-all duration-300" id="navbar">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">
      <div class="flex items-center">
        <i class="fa fa-scissors text-primary text-2xl mr-2"></i>
        <h1 class="text-xl font-bold text-primary">服装美学</h1>
      </div>
      
      <div class="flex items-center space-x-4">
        <button class="text-gray-500 hover:text-primary transition-colors">
          <i class="fa fa-search text-lg"></i>
        </button>
        <button class="text-gray-500 hover:text-primary transition-colors">
          <i class="fa fa-bell text-lg"></i>
        </button>
        <a href="profile.php" class="text-gray-500 hover:text-primary transition-colors">
          <i class="fa fa-user text-lg"></i>
        </a>
      </div>
    </div>
  </header>

  <!-- 主内容区 -->
  <main class="container mx-auto px-4 pt-20 pb-20">
    <!-- 轮播图 -->
    <section class="relative h-48 md:h-64 overflow-hidden rounded-xl mb-8">
      <div class="absolute inset-0 bg-gradient-to-r from-primary to-secondary opacity-90"></div>
      <div class="relative h-full flex items-center justify-center">
        <div class="text-center text-white p-4">
          <h2 class="text-[clamp(1.5rem,3vw,2.5rem)] font-bold mb-2 text-shadow">2025春夏新品发布</h2>
          <p class="text-[clamp(0.9rem,2vw,1.2rem)] opacity-90 mb-4">探索时尚与艺术的完美融合</p>
          <button class="bg-white text-primary px-6 py-2 rounded-full font-medium hover:bg-gray-100 transition-colors">
            立即探索
          </button>
        </div>
      </div>
    </section>

    <!-- 分类导航 -->
    <section class="mb-8">
      <div class="grid grid-cols-4 gap-2 text-center">
        <a href="#" class="bg-white p-3 rounded-lg shadow-sm hover:shadow-md transition-shadow">
          <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-2">
            <i class="fa fa-tshirt text-primary text-xl"></i>
          </div>
          <span class="text-sm">上衣</span>
        </a>
        <a href="#" class="bg-white p-3 rounded-lg shadow-sm hover:shadow-md transition-shadow">
          <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-2">
            <i class="fa fa-archive text-primary text-xl"></i>
          </div>
          <span class="text-sm">裤装</span>
        </a>
        <a href="#" class="bg-white p-3 rounded-lg shadow-sm hover:shadow-md transition-shadow">
          <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-2">
            <i class="fa fa-dress text-primary text-xl"></i>
          </div>
          <span class="text-sm">裙装</span>
        </a>
        <a href="#" class="bg-white p-3 rounded-lg shadow-sm hover:shadow-md transition-shadow">
          <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-2">
            <i class="fa fa-shopping-bag text-primary text-xl"></i>
          </div>
          <span class="text-sm">配饰</span>
        </a>
      </div>
    </section>

    <!-- 热门推荐 -->
    <section class="mb-10">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">热门推荐</h2>
        <a href="#" class="text-primary text-sm flex items-center">
          查看更多 <i class="fa fa-angle-right ml-1"></i>
        </a>
      </div>
      
      <div class="grid grid-cols-2 gap-4">
        <!-- 服装卡片 1 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm card-hover">
          <div class="relative h-48 overflow-hidden">
            <img src="https://picsum.photos/seed/fashion1/400/600" alt="时尚连衣裙" class="w-full h-full object-cover">
            <div class="absolute top-2 right-2 bg-accent text-white text-xs px-2 py-1 rounded">
              新品
            </div>
          </div>
          <div class="p-3">
            <h3 class="font-medium text-sm mb-1">优雅气质连衣裙</h3>
            <div class="flex justify-between items-center">
              <span class="text-primary font-bold">¥399</span>
              <button class="text-gray-400 hover:text-primary transition-colors">
                <i class="fa fa-heart-o"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- 服装卡片 2 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm card-hover">
          <div class="relative h-48 overflow-hidden">
            <img src="https://picsum.photos/seed/fashion2/400/600" alt="休闲牛仔裤" class="w-full h-full object-cover">
            <div class="absolute top-2 right-2 bg-primary text-white text-xs px-2 py-1 rounded">
              热销
            </div>
          </div>
          <div class="p-3">
            <h3 class="font-medium text-sm mb-1">弹力修身牛仔裤</h3>
            <div class="flex justify-between items-center">
              <span class="text-primary font-bold">¥259</span>
              <button class="text-gray-400 hover:text-primary transition-colors">
                <i class="fa fa-heart-o"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- 服装卡片 3 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm card-hover">
          <div class="relative h-48 overflow-hidden">
            <img src="https://picsum.photos/seed/fashion3/400/600" alt="夏季T恤" class="w-full h-full object-cover">
          </div>
          <div class="p-3">
            <h3 class="font-medium text-sm mb-1">纯棉宽松T恤</h3>
            <div class="flex justify-between items-center">
              <span class="text-primary font-bold">¥129</span>
              <button class="text-gray-400 hover:text-primary transition-colors">
                <i class="fa fa-heart-o"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- 服装卡片 4 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm card-hover">
          <div class="relative h-48 overflow-hidden">
            <img src="https://picsum.photos/seed/fashion4/400/600" alt="时尚外套" class="w-full h-full object-cover">
            <div class="absolute top-2 right-2 bg-secondary text-white text-xs px-2 py-1 rounded">
              折扣
            </div>
          </div>
          <div class="p-3">
            <h3 class="font-medium text-sm mb-1">休闲百搭外套</h3>
            <div class="flex justify-between items-center">
              <span class="text-primary font-bold">¥499</span>
              <button class="text-gray-400 hover:text-primary transition-colors">
                <i class="fa fa-heart-o"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 设计师专区 -->
    <section>
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">设计师专区</h2>
        <a href="#" class="text-primary text-sm flex items-center">
          查看更多 <i class="fa fa-angle-right ml-1"></i>
        </a>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="bg-white rounded-xl overflow-hidden shadow-sm flex card-hover">
          <div class="w-24 h-24 overflow-hidden">
            <img src="https://picsum.photos/seed/designer1/200/200" alt="设计师张明" class="w-full h-full object-cover">
          </div>
          <div class="p-3 flex-1">
            <h3 class="font-medium">张明 - 极简主义</h3>
            <p class="text-xs text-gray-500 mb-2">专注于简约设计，追求极致美感</p>
            <a href="#" class="text-primary text-xs">查看作品</a>
          </div>
        </div>
        
        <div class="bg-white rounded-xl overflow-hidden shadow-sm flex card-hover">
          <div class="w-24 h-24 overflow-hidden">
            <img src="https://picsum.photos/seed/designer2/200/200" alt="设计师李婷" class="w-full h-full object-cover">
          </div>
          <div class="p-3 flex-1">
            <h3 class="font-medium">李婷 - 自然主义</h3>
            <p class="text-xs text-gray-500 mb-2">融合自然元素，创造舒适体验</p>
            <a href="#" class="text-primary text-xs">查看作品</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- 底部导航 -->
  <nav class="fixed bottom-0 left-0 right-0 bg-white shadow-[0_-2px_10px_rgba(0,0,0,0.05)] z-40">
    <div class="grid grid-cols-5 gap-1">
      <a href="index.php" class="flex flex-col items-center justify-center py-3 text-primary">
        <i class="fa fa-home text-xl mb-1"></i>
        <span class="text-xs">首页</span>
      </a>
      <a href="videos.php" class="flex flex-col items-center justify-center py-3 text-gray-400 hover:text-primary transition-colors">
        <i class="fa fa-play-circle text-xl mb-1"></i>
        <span class="text-xs">视频</span>
      </a>
      <a href="select.php" class="flex flex-col items-center justify-center py-3 text-gray-400 hover:text-primary transition-colors">
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

  <script>
    // 导航栏滚动效果
    window.addEventListener('scroll', function() {
      const navbar = document.getElementById('navbar');
      if (window.scrollY > 10) {
        navbar.classList.add('py-2');
      } else {
        navbar.classList.remove('py-2');
      }
    });
  </script>
</body>
</html>