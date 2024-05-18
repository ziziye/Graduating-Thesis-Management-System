<?php
//导入函数库

$username = $_POST['username'];
$passwd = $_POST['passwd'];
if ($username && $passwd) {
      //      进入学生界面
      if(preg_match("/^001[0-9]*$/u",$username) && preg_match("/^[A-Za-z0-9]{6,16}+$/u",$passwd)){
          require_once('register_regulation.php');
          //创建新的会话
          session_start();
          header("Cache-control: private");
          //验证用户信息
          login($username, $passwd);
          //将用户信息存入会话
          $_SESSION['valid_user'] = $username;
          //登陆成功后
          do_html_header('Home');
         //验证会话注册信息
          check_valid_user();
         //输出页面底部的快捷菜单
          display_user_menu();
      }
      //      进入教师界面
      else if(preg_match("/^002[0-9]*$/u",$username) && preg_match("/^[A-Za-z0-9]{6,16}+$/u",$passwd)){
          require_once('bm_functions1.php');
          session_start();
          header("Cache-control: private");
          //验证用户信息
          login($username, $passwd);
          //将用户信息存入会话
          $_SESSION['valid_user'] = $username;
          //登陆成功后
          do_html_header1('Home');
          //验证会话注册信息
          check_valid_user();
          //输出页面底部的快捷菜单
          display_user_menu1();
      }
      //      进入学院管理员界面
      else if(preg_match("/^003[0-9]*$/u",$username) && preg_match("/^[A-Za-z0-9]{6,16}+$/u",$passwd)){
          require_once('bm_functions2.php');
          session_start();
          header("Cache-control: private");
          //验证用户信息
          login($username, $passwd);
          //将用户信息存入会话
          $_SESSION['valid_user'] = $username;
          //登陆成功后
          do_html_header2('Home');
          //验证会话注册信息
          check_valid_user();
          //输出页面底部的快捷菜单
          display_user_menu2();
      }
      //      进入后台维护人员界面
      else if(preg_match("/^004[0-9]*$/u",$username) && preg_match("/^[A-Za-z0-9]{6,16}+$/u",$passwd)){
          require_once('bm_functions3.php');
          session_start();
          header("Cache-control: private");
          //验证用户信息
          login($username, $passwd);
          //将用户信息存入会话
          $_SESSION['valid_user'] = $username;
          //登陆成功后
          do_html_header3('Home');
          //验证会话注册信息
          check_valid_user();
          //输出页面底部的快捷菜单
          display_user_menu3();
      }
      else{
          echo '<script>alert("密码/用户名有问题");history.go(-1);</script>';
          exit;
//          throw new Exception('用户名包含非法字符或长度错误/密码包含非法字符或长度错误，请重新输入！');
      }
}
?>
