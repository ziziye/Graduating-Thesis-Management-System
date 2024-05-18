<?php
// 导入函数库

require_once('bm_functions2.php');
session_start();
$old_user = $_SESSION['valid_user'];

//注销会话
unset($_SESSION['valid_user']);
$result_dest = session_destroy();
do_html_header2('Logging Out');
if (!empty($old_user)) {
  if ($result_dest)  {
    echo '您已退出登录！<br />';
    do_html_url2('index.php', '点我登录');
  } else {
    echo '退出登录出错！<br />';
  }
} else {
  echo '您没有登录，不能退出登录！<br />';
  do_html_url2('index.php', '点我登录');
}
do_html_footer2();
?>
