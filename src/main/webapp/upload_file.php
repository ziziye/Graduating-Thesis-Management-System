<?php
session_start();
//上传文档
$imgname = $_FILES['myFile']['name'];
$tmp = $_FILES['myFile']['tmp_name'];
$error=$_FILES['myFile']['error'];

move_uploaded_file($tmp,"../../../upload/".iconv("UTF-8", "UTF-8",$imgname));

if ($error==0) {
    echo'<script>alert("上传成功");history.go(-1);</script>';
}

?>
