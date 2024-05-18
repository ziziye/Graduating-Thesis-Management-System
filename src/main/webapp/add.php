<?php

function putin(){
    header("Content-type: text/html;charset=utf-8");
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "paper_management";
    $year=$_POST["year"];
    $title=$_POST["title"];
    $department=$_POST["department"];
    $teacher=$_POST["teacher"];
    $job=$_POST["job"];
    $select_stu=$_POST["select_stu"];
    $limit=$_POST["limit"];
// 创建连
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_query($conn,"set names 'utf8'");
// 检测连接

    if ($conn->connect_error) {
        die("连接失败" . $conn->connect_error);
    }
      echo "链接成功";
    $sql = "insert into alternative_title(year,title,department,job,teacher,choose_num,maxnum) values('$year','$title','$department','$job','$teacher','$select_stu','$limit')";

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