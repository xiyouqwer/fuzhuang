<?php
// 包含数据库配置文件
require_once 'config.php';

// 检查用户是否已登录
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

// 删除用户
if (isset($_GET["delete"])) {
    $id = $_GET["delete"];
    $delete_sql = "DELETE FROM users WHERE id = $id";
    if ($conn->query($delete_sql) === TRUE) {
        $message = "用户删除成功。";
    } else {
        $message = "用户删除失败: " . $conn->error;
    }
}

// 修改用户信息
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $id = $_POST["id"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    $update_sql = "UPDATE users SET username = '$username', password = '$password', email = '$email' WHERE id = $id";
    if ($conn->query($update_sql) === TRUE) {
        $message = "用户信息修改成功。";
    } else {
        $message = "用户信息修改失败: " . $conn->error;
    }
}

// 查询所有用户信息
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>后台管理系统 - 服装设计主题网站</title>
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
  <header class="fixed top-0 left-0 right-0 bg-white shadow-md z-50">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">
      <div class="flex items-center">
        <i class="fa fa-scissors text-primary text-2xl mr-2"></i>
        <h1 class="text-xl font-bold text-primary">后台管理系统</h1>
      </div>
      
      <div class="flex items-center space-x-4">
        <a href="logout.php" class="text-gray-500 hover:text-primary transition-colors">
          <i class="fa fa-sign-out text-lg"></i> 退出登录
        </a>
      </div>
    </div>
  </header>

  <!-- 主内容区 -->
  <main class="container mx-auto px-4 pt-20 pb-20">
    <?php if (isset($message)): ?>
      <p class="text-green-500 text-center mb-4"><?php echo $message; ?></p>
    <?php endif; ?>
    <h2 class="text-xl font-bold mb-4">用户管理</h2>
    <table class="w-full border-collapse border border-gray-300">
      <thead>
        <tr>
          <th class="border border-gray-300 p-2">ID</th>
          <th class="border border-gray-300 p-2">用户名</th>
          <th class="border border-gray-300 p-2">密码</th>
          <th class="border border-gray-300 p-2">邮箱</th>
          <th class="border border-gray-300 p-2">创建时间</th>
          <th class="border border-gray-300 p-2">操作</th>
        </tr>
      </thead>
      <tbody>
        <?php if ($result->num_rows > 0): ?>
          <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
              <td class="border border-gray-300 p-2"><?php echo $row["id"]; ?></td>
              <td class="border border-gray-300 p-2"><?php echo $row["username"]; ?></td>
              <td class="border border-gray-300 p-2"><?php echo $row["password"]; ?></td>
              <td class="border border-gray-300 p-2"><?php echo $row["email"]; ?></td>
              <td class="border border-gray-300 p-2"><?php echo $row["created_at"]; ?></td>
              <td class="border border-gray-300 p-2">
                <a href="admin.php?delete=<?php echo $row["id"]; ?>" class="text-red-500 hover:underline">删除</a>
                <button onclick="showUpdateForm(<?php echo $row["id"]; ?>, '<?php echo $row["username"]; ?>', '<?php echo $row["password"]; ?>', '<?php echo $row["email"]; ?>')" class="text-blue-500 hover:underline ml-2">修改</button>
              </td>
            </tr>
          <?php endwhile; ?>
        <?php else: ?>
          <tr>
            <td colspan="6" class="border border-gray-300 p-2 text-center">暂无用户信息。</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>

    <!-- 修改用户信息表单 -->
    <div id="update-form" class="hidden bg-white p-8 rounded-xl shadow-lg w-full max-w-md mt-8 mx-auto">
      <h2 class="text-2xl font-bold text-primary text-center mb-6">修改用户信息</h2>
      <form class="space-y-4" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="hidden" id="update-id" name="id">
        <div>
          <label for="update-username" class="block text-sm text-gray-600 mb-1">用户名</label>
          <input type="text" id="update-username" name="username" class="w-full border border-gray-200 rounded-lg p-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
        </div>
        <div>
          <label for="update-password" class="block text-sm text-gray-600 mb-1">密码</label>
          <input type="password" id="update-password" name="password" class="w-full border border-gray-200 rounded-lg p-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
        </div>
        <div>
          <label for="update-email" class="block text-sm text-gray-600 mb-1">邮箱</label>
          <input type="email" id="update-email" name="email" class="w-full border border-gray-200 rounded-lg p-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/50">
        </div>
        <input type="hidden" name="update" value="1">
        <button type="submit" class="bg-primary text-white px-6 py-2 rounded-full font-medium hover:bg-secondary transition-colors w-full">保存修改</button>
      </form>
      <button onclick="hideUpdateForm()" class="bg-gray-300 text-gray-700 px-6 py-2 rounded-full font-medium hover:bg-gray-400 transition-colors w-full mt-4">取消</button>
    </div>
  </main>

  <script>
    function showUpdateForm(id, username, password, email) {
      document.getElementById('update-id').value = id;
      document.getElementById('update-username').value = username;
      document.getElementById('update-password').value = password;
      document.getElementById('update-email').value = email;
      document.getElementById('update-form').classList.remove('hidden');
    }

    function hideUpdateForm() {
      document.getElementById('update-form').classList.add('hidden');
    }
  </script>
</body>
</html>