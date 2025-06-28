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
  <title>视频 - 服装设计主题网站</title>
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
      <h1 class="text-xl font-bold text-primary">服装设计视频</h1>
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
    <!-- 视频分类标签 -->
    <section class="mb-4 overflow-x-auto">
      <div class="flex space-x-2 pb-2">
        <button class="bg-primary text-white px-4 py-2 rounded-full text-sm whitespace-nowrap">全部</button>
        <button class="bg-white text-gray-600 px-4 py-2 rounded-full text-sm whitespace-nowrap shadow-sm hover:bg-gray-50 transition-colors">设计技巧</button>
        <button class="bg-white text-gray-600 px-4 py-2 rounded-full text-sm whitespace-nowrap shadow-sm hover:bg-gray-50 transition-colors">搭配指南</button>
        <button class="bg-white text-gray-600 px-4 py-2 rounded-full text-sm whitespace-nowrap shadow-sm hover:bg-gray-50 transition-colors">时尚秀场</button>
        <button class="bg-white text-gray-600 px-4 py-2 rounded-full text-sm whitespace-nowrap shadow-sm hover:bg-gray-50 transition-colors">行业资讯</button>
        <button class="bg-white text-gray-600 px-4 py-2 rounded-full text-sm whitespace-nowrap shadow-sm hover:bg-gray-50 transition-colors">手工DIY</button>
      </div>
    </section>

    <!-- 视频列表 -->
    <section>
      <div class="grid grid-cols-1 gap-4">
        <!-- 视频卡片 1 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm">
          <div class="relative h-48">
            <img src="https://picsum.photos/seed/video1/600/400" alt="夏季服装搭配视频封面" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
              <button class="w-12 h-12 bg-white/80 rounded-full flex items-center justify-center">
                <i class="fa fa-play text-primary"></i>
              </button>
            </div>
            <div class="absolute bottom-2 right-2 bg-black/60 text-white text-xs px-2 py-1 rounded">
              12:34
            </div>
          </div>
          <div class="p-3">
            <h3 class="font-medium mb-1">夏季服装搭配技巧大公开</h3>
            <div class="flex items-center text-gray-500 text-sm">
              <span><i class="fa fa-user-circle mr-1"></i> 时尚搭配师</span>
              <span class="mx-2">•</span>
              <span><i class="fa fa-eye mr-1"></i> 12.5万</span>
            </div>
          </div>
        </div>
        
        <!-- 视频卡片 2 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm">
          <div class="relative h-48">
            <img src="https://picsum.photos/seed/video2/600/400" alt="服装设计基础教学视频封面" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
              <button class="w-12 h-12 bg-white/80 rounded-full flex items-center justify-center">
                <i class="fa fa-play text-primary"></i>
              </button>
            </div>
            <div class="absolute bottom-2 right-2 bg-black/60 text-white text-xs px-2 py-1 rounded">
              18:45
            </div>
          </div>
          <div class="p-3">
            <h3 class="font-medium mb-1">零基础学服装设计：从草图到成品</h3>
            <div class="flex items-center text-gray-500 text-sm">
              <span><i class="fa fa-user-circle mr-1"></i> 服装设计师李明</span>
              <span class="mx-2">•</span>
              <span><i class="fa fa-eye mr-1"></i> 8.3万</span>
            </div>
          </div>
        </div>
        
        <!-- 视频卡片 3 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm">
          <div class="relative h-48">
            <img src="https://picsum.photos/seed/video3/600/400" alt="2025秋季时装周视频封面" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
              <button class="w-12 h-12 bg-white/80 rounded-full flex items-center justify-center">
                <i class="fa fa-play text-primary"></i>
              </button>
            </div>
            <div class="absolute bottom-2 right-2 bg-black/60 text-white text-xs px-2 py-1 rounded">
              24:12
            </div>
          </div>
          <div class="p-3">
            <h3 class="font-medium mb-1">2025秋季时装周亮点回顾</h3>
            <div class="flex items-center text-gray-500 text-sm">
              <span><i class="fa fa-user-circle mr-1"></i> 时尚前沿</span>
              <span class="mx-2">•</span>
              <span><i class="fa fa-eye mr-1"></i> 23.7万</span>
            </div>
          </div>
        </div>
        
        <!-- 视频卡片 4 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm">
          <div class="relative h-48">
            <img src="https://picsum.photos/seed/video4/600/400" alt="手工缝制连衣裙视频封面" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
              <button class="w-12 h-12 bg-white/80 rounded-full flex items-center justify-center">
                <i class="fa fa-play text-primary"></i>
              </button>
            </div>
            <div class="absolute bottom-2 right-2 bg-black/60 text-white text-xs px-2 py-1 rounded">
              32:05
            </div>
          </div>
          <div class="p-3">
            <h3 class="font-medium mb-1">手工缝制：优雅连衣裙制作全过程</h3>
            <div class="flex items-center text-gray-500 text-sm">
              <span><i class="fa fa-user-circle mr-1"></i> 裁缝工坊</span>
              <span class="mx-2">•</span>
              <span><i class="fa fa-eye mr-1"></i> 5.8万</span>
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
      <a href="videos.php" class="flex flex-col items-center justify-center py-3 text-primary">
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
</body>
</html>