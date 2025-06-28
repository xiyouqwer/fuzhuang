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
  <title>投票 - 服装设计主题网站</title>
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
      <h1 class="text-xl font-bold text-primary">时尚投票</h1>
      <div class="flex items-center space-x-4">
        <button class="text-gray-500 hover:text-primary transition-colors">
          <i class="fa fa-filter text-lg"></i>
        </button>
        <button class="text-gray-500 hover:text-primary transition-colors">
          <i class="fa fa-calendar text-lg"></i>
        </button>
      </div>
    </div>
  </header>

  <!-- 主内容区 -->
  <main class="container mx-auto px-4 pt-20 pb-20">
    <!-- 投票分类标签 -->
    <section class="mb-4 overflow-x-auto">
      <div class="flex space-x-2 pb-2">
        <button class="bg-primary text-white px-4 py-2 rounded-full text-sm whitespace-nowrap">进行中</button>
        <button class="bg-white text-gray-600 px-4 py-2 rounded-full text-sm whitespace-nowrap shadow-sm hover:bg-gray-50 transition-colors">已结束</button>
        <button class="bg-white text-gray-600 px-4 py-2 rounded-full text-sm whitespace-nowrap shadow-sm hover:bg-gray-50 transition-colors">热门投票</button>
        <button class="bg-white text-gray-600 px-4 py-2 rounded-full text-sm whitespace-nowrap shadow-sm hover:bg-gray-50 transition-colors">即将开始</button>
      </div>
    </section>

    <!-- 投票列表 -->
    <section>
      <!-- 投票卡片 1 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-sm mb-4">
        <div class="p-4">
          <div class="flex justify-between items-center mb-3">
            <h3 class="font-medium">最受欢迎的夏季连衣裙设计</h3>
            <span class="text-xs bg-accent/20 text-accent px-2 py-1 rounded-full">进行中</span>
          </div>
          
          <div class="grid grid-cols-2 gap-3 mb-4">
            <div class="relative">
              <img src="https://picsum.photos/seed/vote1/300/400" alt="夏季连衣裙设计1" class="w-full h-40 object-cover rounded-lg">
              <div class="absolute inset-0 bg-primary/10 rounded-lg border-2 border-primary flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                <span class="text-primary font-medium">选择</span>
              </div>
              <div class="absolute bottom-1 right-1 bg-white/80 text-xs px-2 py-1 rounded-full">
                32%
              </div>
            </div>
            <div class="relative">
              <img src="https://picsum.photos/seed/vote2/300/400" alt="夏季连衣裙设计2" class="w-full h-40 object-cover rounded-lg">
              <div class="absolute inset-0 bg-primary/10 rounded-lg border-2 border-primary flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                <span class="text-primary font-medium">选择</span>
              </div>
              <div class="absolute bottom-1 right-1 bg-white/80 text-xs px-2 py-1 rounded-full">
                28%
              </div>
            </div>
            <div class="relative">
              <img src="https://picsum.photos/seed/vote3/300/400" alt="夏季连衣裙设计3" class="w-full h-40 object-cover rounded-lg">
              <div class="absolute inset-0 bg-primary/10 rounded-lg border-2 border-primary flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                <span class="text-primary font-medium">选择</span>
              </div>
              <div class="absolute bottom-1 right-1 bg-white/80 text-xs px-2 py-1 rounded-full">
                24%
              </div>
            </div>
            <div class="relative">
              <img src="https://picsum.photos/seed/vote4/300/400" alt="夏季连衣裙设计4" class="w-full h-40 object-cover rounded-lg">
              <div class="absolute inset-0 bg-primary/10 rounded-lg border-2 border-primary flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                <span class="text-primary font-medium">选择</span>
              </div>
              <div class="absolute bottom-1 right-1 bg-white/80 text-xs px-2 py-1 rounded-full">
                16%
              </div>
            </div>
          </div>
          
          <div class="flex justify-between items-center text-sm text-gray-500">
            <span><i class="fa fa-user mr-1"></i> 时尚设计大赛</span>
            <span><i class="fa fa-clock-o mr-1"></i> 剩余2天</span>
            <button class="text-primary">查看详情</button>
          </div>
        </div>
      </div>
      
      <!-- 投票卡片 2 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-sm mb-4">
        <div class="p-4">
          <div class="flex justify-between items-center mb-3">
            <h3 class="font-medium">你最喜欢的面料材质</h3>
            <span class="text-xs bg-accent/20 text-accent px-2 py-1 rounded-full">进行中</span>
          </div>
          
          <div class="space-y-3 mb-4">
            <div class="bg-gray-50 p-3 rounded-lg flex justify-between items-center">
              <div class="flex items-center">
                <input type="radio" id="fabric1" name="fabric" class="mr-2">
                <label for="fabric1" class="text-sm">纯棉面料</label>
              </div>
              <div class="flex items-center">
                <span class="text-xs mr-2">45%</span>
                <div class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="h-full bg-primary" style="width: 45%"></div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 p-3 rounded-lg flex justify-between items-center">
              <div class="flex items-center">
                <input type="radio" id="fabric2" name="fabric" class="mr-2">
                <label for="fabric2" class="text-sm">丝绸面料</label>
              </div>
              <div class="flex items-center">
                <span class="text-xs mr-2">28%</span>
                <div class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="h-full bg-primary" style="width: 28%"></div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 p-3 rounded-lg flex justify-between items-center">
              <div class="flex items-center">
                <input type="radio" id="fabric3" name="fabric" class="mr-2">
                <label for="fabric3" class="text-sm">麻质面料</label>
              </div>
              <div class="flex items-center">
                <span class="text-xs mr-2">17%</span>
                <div class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="h-full bg-primary" style="width: 17%"></div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 p-3 rounded-lg flex justify-between items-center">
              <div class="flex items-center">
                <input type="radio" id="fabric4" name="fabric" class="mr-2">
                <label for="fabric4" class="text-sm">牛仔面料</label>
              </div>
              <div class="flex items-center">
                <span class="text-xs mr-2">10%</span>
                <div class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="h-full bg-primary" style="width: 10%"></div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="flex justify-between items-center text-sm text-gray-500">
            <span><i class="fa fa-user mr-1"></i> 面料研究中心</span>
            <span><i class="fa fa-clock-o mr-1"></i> 剩余5天</span>
            <button class="text-primary">查看详情</button>
          </div>
        </div>
      </div>
      
      <!-- 投票卡片 3 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-sm">
        <div class="p-4">
          <div class="flex justify-between items-center mb-3">
            <h3 class="font-medium">最具潜力的新锐设计师</h3>
            <span class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded-full">已结束</span>
          </div>
          
          <div class="space-y-3 mb-4">
            <div class="bg-gray-50 p-3 rounded-lg flex justify-between items-center">
              <div class="flex items-center">
                <div class="w-8 h-8 rounded-full overflow-hidden mr-2">
                  <img src="https://picsum.photos/seed/designer1/100/100" alt="设计师张明" class="w-full h-full object-cover">
                </div>
                <label class="text-sm">张明 - 极简主义风格</label>
              </div>
              <div class="flex items-center">
                <span class="text-xs mr-2">38%</span>
                <div class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="h-full bg-primary" style="width: 38%"></div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 p-3 rounded-lg flex justify-between items-center">
              <div class="flex items-center">
                <div class="w-8 h-8 rounded-full overflow-hidden mr-2">
                  <img src="https://picsum.photos/seed/designer2/100/100" alt="设计师李婷" class="w-full h-full object-cover">
                </div>
                <label class="text-sm">李婷 - 自然环保理念</label>
              </div>
              <div class="flex items-center">
                <span class="text-xs mr-2">25%</span>
                <div class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="h-full bg-primary" style="width: 25%"></div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 p-3 rounded-lg flex justify-between items-center">
              <div class="flex items-center">
                <div class="w-8 h-8 rounded-full overflow-hidden mr-2">
                  <img src="https://picsum.photos/seed/designer3/100/100" alt="设计师王浩" class="w-full h-full object-cover">
                </div>
                <label class="text-sm">王浩 - 未来主义设计</label>
              </div>
              <div class="flex items-center">
                <span class="text-xs mr-2">22%</span>
                <div class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="h-full bg-primary" style="width: 22%"></div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 p-3 rounded-lg flex justify-between items-center">
              <div class="flex items-center">
                <div class="w-8 h-8 rounded-full overflow-hidden mr-2">
                  <img src="https://picsum.photos/seed/designer4/100/100" alt="设计师陈雨" class="w-full h-full object-cover">
                </div>
                <label class="text-sm">陈雨 - 民族风融合</label>
              </div>
              <div class="flex items-center">
                <span class="text-xs mr-2">15%</span>
                <div class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                  <div class="h-full bg-primary" style="width: 15%"></div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="flex justify-between items-center text-sm text-gray-500">
            <span><i class="fa fa-user mr-1"></i> 时尚杂志</span>
            <span><i class="fa fa-check-circle mr-1"></i> 已结束</span>
            <button class="text-primary">查看结果</button>
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
      <a href="select.php" class="flex flex-col items-center justify-center py-3 text-gray-400 hover:text-primary transition-colors">
        <i class="fa fa-shopping-bag text-xl mb-1"></i>
        <span class="text-xs">选衣</span>
      </a>
      <a href="vote.php" class="flex flex-col items-center justify-center py-3 text-primary">
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