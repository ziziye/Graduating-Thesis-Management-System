<?php
session_start();
/***下载文档*/
header("Content-Type:text/html;charset=utf8");
$file_name = $_GET['filename'];
$download_path = "../../../upload/";
if(!file_exists($download_path.$file_name)){
    echo "文件不存在!</br>";
    exit;}
else{
    $file=fopen($download_path.$file_name,"r");
    header('Content-Typr:application/octet-stream');
    header("Accept-Ranges: bytes");
    header("Content-Disposition:attachment;filename=".$file_name);
    header('Content-length:'.filesize($download_path.$file_name));
    readfile($download_path.$file_name);
} ?>
