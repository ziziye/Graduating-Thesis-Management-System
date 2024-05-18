<?php
require_once('student.php');
function db_connect() {
    $result = new mysqli('localhost', 'root', 'root', 'paper_management');
    if (!$result) {
        echo'<script>alert("不能连接到数据库！");history.go(-1);</script>';
        exit;
//        throw new Exception('不能连接到数据库！');
    } else {
        return $result;
    }
}

//检查表单是否填写函数
function filled_out($form_vars) {

    foreach ($form_vars as $key => $value) {
        if ((!isset($key)) || ($value == '')) {
            echo'<script>alert("表单未填写完整");</script>';
            exit;
        }
    }
    return true;
}
// 检查邮件地址是否有效函数
function valid_email($address) {
    if (preg_match('^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$^', $address)) {
        return true;
    } else {
        echo'<script>alert("不是有效邮箱地址");</script>';
        exit;
    }
}

//向数据库注册用户信息函数
function register($username, $email, $password) {
    $conn = db_connect();
    $result = $conn->query("select * from user where username='".$username."'");
    if (!$result) {
        echo'<script>alert("无法执行查询，请重试！");history.go(-1);</script>';
        exit;
    }
    elseif ($result->num_rows>0) {
        echo'<script>alert("用户名已存在，请重新填写！");history.go(-1);</script>';
        exit;
    }
    else{
        $result = $conn->query("insert into user values('".$username."', sha1('".$password."'), '".$email."')");
        return true;
    }
}


//登录时验证用户信息函数
function login($username, $password) {
    $conn = db_connect();
    $result = $conn->query("select * from user where username='".$username."' and passwd = sha1('".$password."')");
    if (!$result) {
        echo'<script>alert("账户或密码错误，请重新输入！");history.go(-1);</script>';
        exit;
//        throw new Exception('账户或密码错误，请重新输入！');
    }
    elseif ($result->num_rows>0) {
        return true;
    }
    else {
        echo'<script>alert("账户或密码错误，请重新输入！");history.go(-1);</script>';
        exit;
//        throw new Exception('账户或密码错误，请重新输入！');
    }
}

//检查用户会话信息函数
function
check_valid_user() {
    if (isset($_SESSION['valid_user']))  {
        echo "<h3 style='color: white;font-size: small'>尊敬的: ".$_SESSION['valid_user']." 您好</h3>"."<br />";
    } else {
        echo '<h1>Problem !</h1>';
        echo '你没有登录.<br />';
        do_html_url('index.php', '重新登陆');
        exit;
    }
}


//向数据库更新更改的密码的函数
function change_password($username, $old_password, $new_password) {
    login($username, $old_password);
    $conn = db_connect();
    $result = $conn->query("update user set passwd = sha1('".$new_password."')where username = '".$username."'");
    if (!$result) {
        echo'<script>alert("密码更改出错！");history.go(-1);</script>';
        exit;
//        throw new Exception('密码更改出错！');
    } else {
        return true;
    }
}


//生成随机密码的函数
function get_random_word($min_length, $max_length) {
// grab a random word from dictionary between the two lengths
// and return it

    // generate a random word
    $word = '';
    // remember to change this path to suit your system
    $dictionary = 'C:\\phpStudy\\PHPTutorial\\words';  // the ispell dictionary
    $fp = @fopen($dictionary, 'r');
    if(!$fp) {
        return false;
    }
    $size = filesize($dictionary);

    // go to a random location in dictionary
    $rand_location = rand(0, $size);
    fseek($fp, $rand_location);

    // get the next whole word of the right length in the file
    while ((strlen($word) < $min_length) || (strlen($word)>$max_length) || (strstr($word, "'"))) {
        if (feof($fp)) {
            fseek($fp, 0);        // if at end, go to start
        }
        $word = fgets($fp, 80);  // skip first word as it could be partial
        $word = fgets($fp, 80);  // the potential password
    }
    $word = trim($word); // trim the trailing \n from fgets
    return $word;
}

//向数据库更新随机生成的密码的函数
function reset_password($username) {
// set password for username to a random value
// return the new password or false on failure
    // get a random dictionary word b/w 6 and 13 chars in length
    $new_password = get_random_word(6, 13);

    if($new_password == false) {
        throw new Exception('Could not generate new password.');
    }

    // add a number  between 0 and 999 to it
    // to make it a slightly better password
    $rand_number = rand(0, 999);
    $new_password .= $rand_number;

    // set user's password to this in database or return false
    $conn = db_connect();
    $result = $conn->query("update user set passwd = sha1('".$new_password."')where username = '".$username."'");
    if (!$result) {
        throw new Exception('Could not change password.');  // not changed
    } else {
        return $new_password;  // changed successfully
    }
}




?>
