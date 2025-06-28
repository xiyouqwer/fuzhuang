<?php
// 数据库配置
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "fashion_db";

// 创建数据库连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接是否成功
if ($conn->connect_error) {
    die("数据库连接失败: " . $conn->connect_error);
}
?>