<?php
  require_once('register_regulation.php');
  session_start();
  do_html_header('更改密码');
  $old_passwd = $_POST['old_passwd'];
  $new_passwd = $_POST['new_passwd'];
  $new_passwd2 = $_POST['new_passwd2'];
  try {
       check_valid_user();
      if (!filled_out($_POST)) {
      throw new Exception('您没有填写完，请继续填写！');
      }
      if(!preg_match("/^[A-Za-z0-9]{6,16}+$/u",$old_passwd)){
          throw new Exception('旧密码中包含非法字符或长度错误，请重新输入！');
      }
      if ($new_passwd !== $new_passwd2) {
          throw new Exception('两次输入的密码不一致，请重新输入！');
      }
      if(!preg_match("/^[A-Za-z0-9]{6,16}+$/u",$new_passwd)){
          throw new Exception('密码包含非法字符或长度错误，请重新输入！');
      }
      if(!preg_match("/^[A-Za-z0-9]{6,16}+$/u",$new_passwd2)){
          throw new Exception('密码包含非法字符或长度错误，请重新输入！');
      }
      // attempt update
      change_password($_SESSION['valid_user'], $old_passwd, $new_passwd);
      echo '密码更改成功！';
  }
  catch (Exception $e) {
    echo $e->getMessage();
  }
  display_user_menu();
  do_html_footer();
?>
