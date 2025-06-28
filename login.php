<?php
// 包含数据库配置文件
require_once 'config.php';

// 检查用户是否提交了登录表单
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // 查询数据库，检查用户名和密码是否匹配
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // 登录成功，跳转到首页
        session_start();
        $_SESSION["username"] = $username;
        header("Location: index.php");
        exit();
    } else {
        // 登录失败，显示错误信息
        $error = "用户名或密码错误，请重试。";
    }
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>用户登录 - 服装设计主题网站</title>
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
<body class="bg-gradient-to-r from-primary to-secondary flex items-center justify-center min-h-screen">
  <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
    <h1 class="text-2xl font-bold text-primary text-center mb-6">用户登录</h1>
    <?php if (isset($error)): ?>
      <p class="text-red-500 text-center mb-4"><?php echo $error; ?></p>
    <?php endif; ?>
    <form class="space-y-4" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div>
        <label for="username" class="block text-sm text-gray-600 mb-1">用户名</label>
        <input type="text" id="username" name="username" class="w-full border border-gray-200 rounded-lg p-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
      </div>
      <div>
        <label for="password" class="block text-sm text-gray-600 mb-1">密码</label>
        <input type="password" id="password" name="password" class="w-full border border-gray-200 rounded-lg p-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
      </div>
      <button type="submit" class="bg-primary text-white px-6 py-2 rounded-full font-medium hover:bg-secondary transition-colors w-full">登录</button>
    </form>
    <div class="flex justify-between mt-4">
      <a href="#" class="text-primary text-sm hover:underline">忘记密码?</a>
      <a href="register.php" class="text-primary text-sm hover:underline">注册新用户</a>
    </div>
  </div>
</body>
</html>