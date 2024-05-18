<?php
  require_once("register_regulation.php");
  do_html_header("重置密码");
  $username = $_POST['username'];

  try {
      if(!preg_match("/^[0-9]*$/u",$username)){
          throw new Exception('用户名包含非法字符或长度错误，请重新输入！');
      }
      $password = reset_password($username);
      echo '<script>alert("修改成功");</script>';
      echo "新密码为$password";
  }
  catch (Exception $e) {
    echo '您的密码更改时出现错误，请重试！';
    echo $e->getMessage();
  }
  do_html_url('index.php', '重新登陆');
  do_html_footer();
?>
