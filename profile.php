<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

// 处理退出登录请求
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>个人主页 - 服装设计主题网站</title>
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
      <h1 class="text-xl font-bold text-primary">我的主页</h1>
      <div class="flex items-center space-x-4">
        <button class="text-gray-500 hover:text-primary transition-colors">
          <i class="fa fa-cog text-lg"></i>
        </button>
        <!-- 退出登录按钮 -->
        <a href="?logout=1" class="text-gray-500 hover:text-primary transition-colors">
          <i class="fa fa-sign-out text-lg"></i>
        </a>
      </div>
    </div>
  </header>

  <!-- 主内容区 -->
  <main class="container mx-auto px-4 pt-20 pb-20">
    <!-- 个人信息卡片 -->
    <section class="mb-6 bg-white p-4 rounded-lg shadow-sm flex items-center">
      <div class="w-16 h-16 overflow-hidden rounded-full mr-4">
        <img src="https://picsum.photos/seed/avatar/100/100" alt="头像" class="w-full h-full object-cover">
      </div>
      <div>
        <h2 class="font-medium text-sm mb-1">用户名</h2>
        <p class="text-xs text-gray-500">会员等级：普通会员</p>
      </div>
    </section>

    <!-- 功能入口 -->
    <section class="mb-6 grid grid-cols-2 gap-2">
      <a href="#" class="bg-white p-3 rounded-lg shadow-sm flex items-center justify-center flex-col hover:shadow-md transition-shadow">
        <i class="fa fa-heart text-primary text-xl mb-2"></i>
        <span class="text-xs">我的收藏</span>
      </a>
      <a href="#" class="bg-white p-3 rounded-lg shadow-sm flex items-center justify-center flex-col hover:shadow-md transition-shadow">
        <i class="fa fa-trophy text-primary text-xl mb-2"></i>
        <span class="text-xs">我的投票</span>
      </a>
      <a href="#" class="bg-white p-3 rounded-lg shadow-sm flex items-center justify-center flex-col hover:shadow-md transition-shadow">
        <i class="fa fa-star text-primary text-xl mb-2"></i>
        <span class="text-xs">我的评价</span>
      </a>
      <a href="#" class="bg-white p-3 rounded-lg shadow-sm flex items-center justify-center flex-col hover:shadow-md transition-shadow">
        <i class="fa fa-credit-card text-primary text-xl mb-2"></i>
        <span class="text-xs">我的订单</span>
      </a>
    </section>

    <!-- 密码修改 -->
    <section class="mb-6 bg-white p-4 rounded-lg shadow-sm">
      <h3 class="font-medium text-sm mb-3">修改密码</h3>
      <form class="space-y-2">
        <div>
          <label class="block text-xs text-gray-500 mb-1" for="oldPwd">原密码</label>
          <input type="password" id="oldPwd" class="w-full border border-gray-200 rounded-lg p-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
        </div>
        <div>
          <label class="block text-xs text-gray-500 mb-1" for="newPwd">新密码</label>
          <input type="password" id="newPwd" class="w-full border border-gray-200 rounded-lg p-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
        </div>
        <div>
          <label class="block text-xs text-gray-500 mb-1" for="confirmPwd">确认新密码</label>
          <input type="password" id="confirmPwd" class="w-full border border-gray-200 rounded-lg p-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
        </div>
        <button type="submit" class="bg-primary text-white px-4 py-2 rounded-full text-sm hover:bg-secondary transition-colors w-full">
          确认修改
        </button>
      </form>
    </section>
  </main>

  <!-- 底部导航 -->
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
      <a href="select.php" class="flex flex-col items-center justify-center py-3 text-gray-400 hover:text-primary transition-colors">
        <i class="fa fa-shopping-bag text-xl mb-1"></i>
        <span class="text-xs">选衣</span>
      </a>
      <a href="vote.php" class="flex flex-col items-center justify-center py-3 text-gray-400 hover:text-primary transition-colors">
        <i class="fa fa-thumbs-up text-xl mb-1"></i>
        <span class="text-xs">投票</span>
      </a>
      <a href="profile.php" class="flex flex-col items-center justify-center py-3 text-primary">
        <i class="fa fa-user text-xl mb-1"></i>
        <span class="text-xs">我的</span>
      </a>
    </div>
  </nav>
</body>
</html>