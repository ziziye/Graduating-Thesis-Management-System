<?php
header("Content-type: text/html;charset=utf-8");
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "paper_management";
// 处理选择作的页面
require "student.php";
// 连接mysql
$link = @mysqli_connect($servername,$username,$password) or die("提示：数据库连接失败！");
// 选择数据库
mysqli_select_db($link,$dbname);
// 编码设置
mysqli_set_charset($link,'utf8');
$name=$_GET["name"];
mysqli_query($link,"insert into select_title(id,title,teacher,student) values(NULL,'$_GET[title]','$_GET[teacher]','$name')") or die('选择题目出错：'.mysqli_error($link));
// 跳转到主页
echo'<script>alert("选择成功");history.go(-1);</script>';
?>
