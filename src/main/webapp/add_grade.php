<?php

function putin(){
    header("Content-type: text/html;charset=utf-8");
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "paper_management";
    $id=$_POST["id"];
    $year=$_POST["year"];
    $title=$_POST["title"];
    $teacher=$_POST["teacher"];
    $student=$_POST["student"];
    $grade=$_POST["grade"];
// 创建连
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_query($conn,"set names 'utf8'");
// 检测连接

    if ($conn->connect_error) {
        die("连接失败" . $conn->connect_error);
    }
      echo "链接成功";
    $sql = "insert into grade(id,year,title,teacher,student,grade) values('$id','$year','$title','$teacher','$student','$grade')";

    if ($conn->query($sql) == TRUE) {
        echo "新记录插入成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    putin();
}

?>