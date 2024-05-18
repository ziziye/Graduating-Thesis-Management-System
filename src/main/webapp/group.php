<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "paper_management";
    $id=$_POST["id"];
    $year=$_POST["year"];
    $title=$_POST["title"];
    $teacher=$_POST["teacher"];
    $teacher_num=$_POST["teacher_num"];
    $student=$_POST["student"];
    $group_num=$_POST["group_num"];
// 创建连
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_query($conn,"set names 'utf8'");
// 检测连接

    if ($conn->connect_error) {
        die("连接失败" . $conn->connect_error);
    }
    $sql = "insert into `grouping`(id,year,title,teacher,teacher_num,student,group_num) values('$id','$year','$title','$teacher','$teacher_num','$student','$group_num')";

    if ($conn->query($sql) == TRUE) {
        echo'<script>alert("分组成功");history.go(-1);</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>