<?php
// 包含数据库配置文件
require_once 'config.php';

// 初始化错误消息
$error = '';
$showSuccessModal = false;

// 检查用户是否提交了注册表单
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // 检查用户名和邮箱是否已存在
    $check_sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        $error = "用户名或邮箱已存在，请选择其他的。";
    } else {
        // 插入新用户信息
        $insert_sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
        if ($conn->query($insert_sql) === TRUE) {
            // 注册成功，设置成功标志
            $showSuccessModal = true;
        } else {
            $error = "注册失败: " . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>用户注册 - 服装设计主题网站</title>
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
    <h1 class="text-2xl font-bold text-primary text-center mb-6">用户注册</h1>
    <?php if (!empty($error)): ?>
      <p class="text-red-500 text-center mb-4"><?php echo $error; ?></p>
    <?php endif; ?>
    <form id="register-form" class="space-y-4" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div>
        <label for="username" class="block text-sm text-gray-600 mb-1">用户名</label>
        <input type="text" id="username" name="username" class="w-full border border-gray-200 rounded-lg p-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
      </div>
      <div>
        <label for="password" class="block text-sm text-gray-600 mb-1">密码</label>
        <input type="password" id="password" name="password" class="w-full border border-gray-200 rounded-lg p-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
      </div>
      <div>
        <label for="email" class="block text-sm text-gray-600 mb-1">邮箱</label>
        <input type="email" id="email" name="email" class="w-full border border-gray-200 rounded-lg p-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
      </div>
      <button type="submit" class="bg-primary text-white px-6 py-2 rounded-full font-medium hover:bg-secondary transition-colors w-full">注册</button>
    </form>
    <div class="flex justify-center mt-4">
      <a href="login.php" class="text-primary text-sm hover:underline">已有账户？立即登录</a>
    </div>
  </div>

  <!-- 注册成功弹窗 -->
  <div id="success-modal" class="fixed inset-0 flex items-center justify-center z-50 bg-black/50 opacity-0 pointer-events-none transition-opacity duration-300">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md mx-4 transform transition-transform duration-300 scale-95">
      <div class="text-center">
        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fa fa-check text-green-500 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-2">注册成功</h3>
        <p class="text-gray-600 mb-6">您已成功注册账号，可以前往登录页面进行登录。</p>
        <button id="login-btn" class="bg-primary text-white px-6 py-2 rounded-full font-medium hover:bg-secondary transition-colors w-full">
          确定
        </button>
      </div>
    </div>
  </div>

  <script src="register.js"></script>
  <script>
    // 页面加载后检查是否需要显示成功弹窗
    document.addEventListener('DOMContentLoaded', function() {
      <?php if ($showSuccessModal): ?>
        showSuccessModal();
        clearFormFields();
      <?php endif; ?>
    });
  </script>
</body>
</html>