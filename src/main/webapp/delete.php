<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "paper_management";
// 处理删除操作的页面
require "manager.php";
// 连接mysql
$link = @mysqli_connect($servername,$username,$password) or die("提示：数据库连接失败！");
// 选择数据库
mysqli_select_db($link,$dbname);
// 编码设置
mysqli_set_charset($link,'utf8');
$id = $_GET['id'];
//删除指定数据
mysqli_query($link,"DELETE FROM alternative_title WHERE id={$id}") or die('删除数据出错：'.mysqli_error($link));
// 删除完跳转到新闻页
echo'<script>alert("删除成功");history.go(-1);</script>';
?>