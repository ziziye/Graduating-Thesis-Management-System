<?php
 //导入自定义的函数库
  require_once('register_regulation.php');
  $email=$_POST['email'];
  $username=$_POST['username'];
  $passwd=$_POST['passwd'];
  $passwd2=$_POST['passwd2'];
  // 开启会话
    // 调用函数检查表单是否填写
      if (!filled_out($_POST)) {
          echo'<script>alert("您的表单没有填写完，请继续填写");history.go(-1);</script>';
      }
      //过滤用户名
      elseif(!preg_match("/^[0-9]*$/",$username)){
          echo'<script>alert("用户名包含非法字符或长度错误，请重新输入");history.go(-1);</script>';
//          throw new Exception('用户名包含非法字符或长度错误，请重新输入！');
      }
      // 过滤密码
      elseif($passwd !== $passwd2) {
          echo'<script>alert("两次输入的密码不一致，请重新输入");history.go(-1);</script>';
//          throw new Exception('两次输入的密码不一致，请重新输入！');
      }
      elseif(!preg_match("/^[A-Za-z0-9]{6,16}+$/u",$passwd)){
          echo'<script>alert("密码包含非法字符或长度错误，请重新输入！");history.go(-1);</script>';
//          throw new Exception('密码包含非法字符或长度错误，请重新输入！');
      }
      elseif(!preg_match("/^[A-Za-z0-9]{6,16}+$/u",$passwd2)){
          echo'<script>alert("密码包含非法字符或长度错误，请重新输入！");history.go(-1);</script>';
//          throw new Exception('密码包含非法字符或长度错误，请重新输入！');
      }
      // 过滤邮件地址
      elseif(!valid_email($email)) {
          echo'<script>alert("这不是一个有效的邮件地址，请重新填写！");history.go(-1);</script>';
//      throw new Exception('这不是一个有效的邮件地址，请重新填写！');
      }
      else{
        // 调用自定义函数向数据库插入注册信息
        register($username, $email, $passwd);
        // 保存用户会话信息
        $_SESSION['valid_user'] = $username;
        do_html_header('Registration successful');
        echo'<script>alert("注册成功！开始你的征程吧！");history.go(-1);</script>';
    }

?>
