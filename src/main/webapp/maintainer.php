<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="">
<head>
    <meta charset="utf-8">
    <title>后台管理员界面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by themesbrand" name="description" />
    <meta content="Mannatthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../../../images/favicon.ico">
    <!- DataTables -->
    <link href="../../../plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../../../plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="../../../plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../../css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../../../css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="../../../css/style1.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
function do_html_header3($title) {
    ?>
    <title><?php echo $title;?></title>
    <?php
}// 跳转页面的函数
function do_html_URL3($url, $name) {
    ?>
    <h5 style="color: black"><a href="<?php echo $url;?>"><?php echo $name;?></a></h5>
<?php }
// 输出页脚的函数
function do_html_footer3() {
}
//输出底部快捷菜单的函数
function display_user_menu3() {
?>
    <div class="topbar">
        <!-- Navbar -->
        <nav class="navbar-custom">
            <!-- LOGO -->
            <div class="topbar-left">
                <a href="#" class="logo">
                        <span>
                            <img src="../../../images/logo-sm.png" alt="logo-small" class="logo-sm">
                        </span>
                    <span>
                            <img src="../../../images/logo-dark.png" alt="logo-large" class="logo-lg">
                        </span>
                </a>
            </div>
            <ul class="list-unstyled topbar-nav float-right mb-0">
            </ul>

            <ul class="list-unstyled topbar-nav mb-0">
                <li>
                    <button class="button-menu-mobile nav-link waves-effect waves-light">
                        <i class="mdi mdi-menu nav-icon"></i>
                    </button>
                </li>
                <li class="hide-phone app-search">
                    <form role="search" class="">
                        <input type="text" placeholder="Search..." class="form-control">
                        <a href=""><i class="fas fa-search"></i></a>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- end navbar-->
    </div>
    <div class="page-wrapper-img">
        <div class="page-wrapper-img-inner">
            <div class="sidebar-user media" >
                <img src="../../../images/users/user-1.jpg" alt="user" class="rounded-circle img-thumbnail mb-1">
                <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
                <div class="media-body">
                    <ul class="list-unstyled list-inline mb-0 mt-2">
                        <li class="list-inline-item">
                            <a href="logout3.php" class=""><i class="mdi mdi-power text-danger"></i></a>
                        </li>
                        <?php
                        check_valid_user();
                        ?>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-right align-item-center mt-2">
                            <button class="btn btn-info px-4 align-self-center report-btn">Create Report</button>
                        </div>
                        <h4 class="page-title mb-2"><i class="mdi mdi-playlist-edit mr-2"></i>Information Editor</h4>
                        <div class="">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">MAIN</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">选题情况</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">登录注册信息</a></li>
                            </ol>
                        </div>
                    </div><!--end page title box-->
                </div><!--end col-->
            </div><!--end row-->
            <!-- end page title end breadcrumb -->
        </div><!--end page-wrapper-img-inner-->
    </div><!--end page-wrapper-img-->
<div class="page-wrapper">
    <div class="page-wrapper-inner">
        <div class="left-sidenav">
            <ul class="metismenu left-sidenav-menu" id="side-nav">
                <li class="menu-title">Main</li>
                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-clipboard-outline"></i><span>选题情况</span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a id="menu_1" onclick="show1()">学生选题情况</a></li>
                        <li><a id="menu_2" onclick="show2()">查看所有论文题目</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-book-open-page-variant"></i><span>登录注册信息</span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a id="menu_3" onclick="show3()">查看登录注册信息</a></li>
                    </ul>
                </li>
            </ul>
        </div>

<div class="page-content">
  <div class="container-fluid">
        <div id="mianInfo_1" >
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                          <h4 class="mt-0 header-title">学生选题情况</h4>
                           <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" >
                               <thead>
                               <tr>
                                   <th class="th_">序号</th>
                                   <th class="th_">论文题目</th>
                                   <th class="th_">指导老师</th>
                                   <th class="th_">学生名字</th>
                                </tr>
                               </thead>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "paper_management";
            // 创建连接
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("连接失败: " . $conn->connect_error);
            }
            mysqli_query($conn,"set names 'utf8'");
            $sql = "SELECT id, title,teacher,student FROM select_title";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // 输出数据
                echo "<tbody>";
                while($row = $result->fetch_assoc()) {
                    $id=$row["id"];$title=$row["title"];
                    $teacher=$row["teacher"];$student=$row["student"];
                    echo "<tr><td>$id</td><td>$title</td><td>$teacher</td><td>$student</td></tr>";
                }
                echo "</tbody>";
            } else { echo "0 结果"; }
            $conn->close();
            ?>
                          </table>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div>

        <div id="mianInfo_2" class="Info"><!-- 查看所有论文题目 -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                          <h4 class="header-title">查看所有论文题目</h4>
                            <div class="">
                             <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                 <thead>
                                 <tr>
                                   <th >序号</th>
                                   <th >年度</th>
                                   <th >论文题目</th>
                                   <th >院系</th>
                                   <th >指导老师</th>
                                   <th >职称</th>
                                   <th >已选人数</th>
                                   <th >可报人数上限</th>
                                  </tr>
                                 </thead>
            <?php

            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "paper_management";
            // 创建连接
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("连接失败: " . $conn->connect_error);
            }

            $sql = "SELECT id, year, title,department,job,teacher,choose_num,maxnum FROM alternative_title";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // 输出数据
                echo "<tbody>";
                while($row = $result->fetch_assoc()) {
                    $id=$row["id"];$year=$row["year"];$title=$row["title"];$department=$row["department"];
                    $teacher=$row["teacher"];$choose_num=$row["choose_num"];$maxnum=$row["maxnum"];$job=$row["job"];
                    echo "<tr><td>$id</td><td>$year</td><td>$title</td><td>$department</td><td>$teacher</td><td>$job</td><td>$choose_num</td><td>$maxnum</td></tr>";
                }
                echo "</tbody>";
            } else { echo "0 结果"; }
            $conn->close();
            ?>
            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->
        </div>

        <div id="mianInfo_3" class="Info"><!-- 查看所有人员登录注册信息 -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                           <h4 class="header-title">查看所有人员登录注册信息</h4>
                                 <table id="footable-3" class="table mb-0" data-paging="true" data-filtering="true" data-sorting="true">
                                   <thead>
                                     <tr>
                                     <th >学号/工号</th>
                                     <th >密码</th>
                                     <th >邮箱</th>
                                     </tr>
                                     </thead>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "paper_management";
            // 创建连接
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("连接失败: " . $conn->connect_error);
            }

            $sql = "SELECT username, passwd, email FROM user";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // 输出数据
                echo "<tbody>";
                while($row = $result->fetch_assoc()) {
                    $username=$row["username"];$passwd=$row["passwd"];$email=$row["email"];
                    echo "<tr><td>$username</td><td>$passwd</td><td>$email</td></tr>";
                }
                echo "</tbody>";
            } else { echo "0 结果"; }
            $conn->close();
            ?>
            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->

      <footer class="footer text-center text-sm-left">
      </footer>
  </div>
    <!-- end page content -->
</div>
        <!--end page-wrapper-inner -->
    </div>
    <!-- end page-wrapper -->
    <script src="../../../js/后台管理员界面.js"></script>
    <script src="../../../js/jquery.min.js"></script>
    <script src="../../../js/bootstrap.bundle.min.js"></script>
    <script src="../../../js/metisMenu.min.js"></script>
    <script src="../../../js/waves.min.js"></script>
    <script src="../../../js/jquery.slimscroll.min.js"></script>
    <!-- Required datatable js -->
    <script src="../../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="../../../plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="../../../plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="../../../plugins/datatables/jszip.min.js"></script>
    <script src="../../../plugins/datatables/pdfmake.min.js"></script>
    <script src="../../../plugins/datatables/vfs_fonts.js"></script>
    <script src="../../../plugins/datatables/buttons.html5.min.js"></script>
    <script src="../../../plugins/datatables/buttons.print.min.js"></script>
    <script src="../../../plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="../../../plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="../../../plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="../../../pages/jquery.datatable.init.js"></script>
    <!-- App js -->
    <script src="../../../js/app.js"></script>
</body>
</html>
    <?php
}
?>
