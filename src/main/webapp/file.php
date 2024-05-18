<?php
header("Content-type: text/html;charset=utf-8");
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "paper_management";

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn,"set names 'utf8'");
$str=$_POST['area'];
$arr=explode("\n",$str);//以回车进行分割标题和内容
$title=current($arr);//以第一个换行分割出标题和内容,title为标题
array_shift($arr);
$str = implode('<br />',$arr);
$str1=nl2br($str);//回车换成换行

if ($conn->connect_error) {
    die("连接失败" . $conn->connect_error);
}
echo "链接成功";
$sql = "insert into file(title,content) values('$title','$str1')";
if ($conn->query($sql) == TRUE) {
    echo'<script>alert("文章发布成功");history.go(-1);</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>

