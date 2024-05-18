<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="">
	<head>
        <meta charset="utf-8">
        <title>学校管理员界面</title>
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
    function do_html_header2($title) {
        ?>
        <title><?php echo $title;?></title>
        <?php
    }// 跳转页面的函数
    function do_html_URL2($url, $name) {
        ?>
        <h5 style="color: black"><a href="<?php echo $url;?>"><?php echo $name;?></a></h5>
    <?php }
    // 输出页脚的函数
    function do_html_footer2() {
    }
    //输出底部快捷菜单的函数
    function display_user_menu2() {
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
                                <a href="logout2.php" class=""><i class="mdi mdi-power text-danger"></i></a>
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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">消息公布</a></li>
                                    <li class="breadcrumb-item active">相关文件</li>
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
                            <li><a id="menu_1" onclick="show1()">老师发布题目情况</a></li>
                            <li><a id="menu_2" onclick="show2()">查看选题结果</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-book-open-page-variant"></i><span>消息公布</span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a id="menu_3" onclick="show3()">消息公布</a></li>
                            <li><a id="menu_4" onclick="show4()">评选老师和答辩小组划分</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-book-open-page-variant"></i><span>相关文件</span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a id="menu_5" onclick="show5()">下载文件</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

<div class="page-content">
  <div class="container-fluid">
   <div id="mianInfo_1" ><!-- 选题界面 -->
    <div class="row">
     <div class="col-lg-12">
      <div class="card">
       <div class="card-body">
          <h4 class="mt-0 header-title">老师发布题目情况</h4>
           <table class="table mb-0" id="my-table" >
                   <thead>
                   <tr>
                        <th class="th_">序号</th>
                        <th class="th_">年度</th>
                        <th class="th_">论文题目</th>
                        <th class="th_">院系</th>
                        <th class="th_">指导老师</th>
                        <th class="th_">职称</th>
                        <th class="th_">已选人数</th>
                        <th class="th_">可报人数上限</th>
                        <th class="th_">删除题目</th>
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
                                echo "<tr><td>$id</td><td>$year</td><td>$title</td><td>$department</td><td>$teacher</td><td>$job</td><td>$choose_num</td><td>$maxnum</td><td><a href='delete.php?id=$row[id]'>删除</a></td></tr>";
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

<div id="mianInfo_2" class="Info">
 <div class="row">
  <div class="col-lg-12">
   <div class="card">
    <div class="card-body">
		<h4 class="mt-0 header-title">查看选题结果</h4>
        <div class="table-rep-plugin">
          <div class="table-responsive mb-0" data-pattern="priority-columns">
            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <a href="academicteacher_excel.php" style="margin-left: 60px;text-decoration: underline;color: whitesmoke">下载为excel文件</a>
                <thead>
                <tr>
                    <th class="th_">序号</th>
                    <th class="th_">论文题目</th>
                    <th class="th_">指导老师</th>
                    <th class="th_">学生</th>
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
            //直接用头部信息输出excel格式文件，内容以表格形式展示。
            $conn->close();
            ?>
        </table>
        </div>
    </div>
   </div>
 </div> <!-- end col -->
</div> <!-- end row -->
</div><!-- container -->
</div>

<div id="mianInfo_3" class="Info"><!-- 提交论文终稿 -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <h4 class="mt-0 header-title">消息公布</h4>
               <form action="file.php" method="post" >
                <textarea id="elm1" name="area" cols="70" rows="8"></textarea>
                   <button type="submit" class="btn btn-info px-4 align-self-center report-btn">提交</button>
              </form>

                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->
</div>
      <!-- 论文答辩时间
           本次论文答辩将于2022年5月23日于重庆市南岸区南山校区四教楼的第三层和第四层的所有教室开展，请同学们做好答辩准备，并下载相关答辩分组文件。
           2021/2/12
      -->
<div id="mianInfo_4" class="Info">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                          <h4 class="mt-0 header-title">评选老师和答辩小组划分</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                 <form action="group.php" method="post" style="margin: 10px">
                                     <div class="form-group">
                                   <label class="mt-0 header-title">序号</label>
                                   <input class="form-control" type="text" id="example-text-input" name="id">
                                     </div>
                                     <div class="form-group">
                                  <label class="mt-0 header-title">年度</label>
                                  <input class="form-control" type="text" id="example-text-input" name="year">
                                     </div>
                                     <div class="form-group">
                                  <label class="mt-0 header-title">论文题目</label>
                                  <input class="form-control" type="text" id="example-text-input" name="title">
                                     </div>
                                     <div class="form-group">
                                 <label class="mt-0 header-title">指导老师</label>
                                   <input class="form-control" type="text" id="example-text-input" name="teacher">
                                     </div>
                                     <div class="form-group">
                                 <label class="mt-0 header-title">老师组号</label>
                                 <input class="form-control" type="text" id="example-text-input" name="teacher_num">
                                     </div>
                                     <div class="form-group">
                                <label class="mt-0 header-title">学生</label>
                                 <input class="form-control" type="text" id="example-text-input" name="student">
                                     </div>
                                     <div class="form-group">
                                <label class="mt-0 header-title">学生组号</label>
                                <input class="form-control" type="text" id="example-text-input" name="group_num">
                                     </div>
                                     <button type="submit" class="btn btn-info px-4 align-self-center report-btn">提交</button>
                               </table>
                              </form>
                                </div>
                            </div>
                <h4 class="mt-0 header-title">分组结果查看</h4>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th >序号</th>
                        <th >年度</th>
                        <th >论文名称</th>
                        <th >指导老师</th>
                        <th >老师组号</th>
                        <th >学生</th>
                        <th >学生组号</th>
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

                        $sql = "SELECT id, year,title,teacher,teacher_num,student,group_num FROM grouping ";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // 输出数据
                            echo "<tbody>";
                            while($row = $result->fetch_assoc()) {
                                $id=$row["id"];$teacher=$row["teacher"];$title=$row["title"];$year=$row["year"];
                                $student=$row["student"];$teacher_num=$row["teacher_num"];$group_num=$row["group_num"];
                                echo "<tr><td>$id</td><td>$year</td><td>$title</td><td>$teacher</td><td>$teacher_num</td><td>$student</td><td>$group_num</td></tr>";
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
       </div>

		<div id="mianInfo_5" class="Info">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                          <h4 class="mt-0 header-title">下载所有文件</h4>
                             <form action="download_file.php" method="get" >
                            <table id="datatable2" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <tr>
                            <td><input type="file" id="customFile" name="filename"></td>
                            <td><button type="submit" class="btn btn-info px-4 align-self-center report-btn">下载文件</button></td>
                            </tr>
                           </table>
                             </form>
            <div id="filelist">
                <h2 class="mt-0 header-title">云盘内文件显示:</h2>
                <hr width="100%" align="left">

                <?php    ///查询目录下文件列表
                function getDirContent($path){
                    if(!is_dir($path)){
                        return false;
                    }
                    $arr = array();
                    $data = scandir($path);
                    foreach ($data as $value){
                        if($value != '.' && $value != '..'){
                            $arr[] = $value;
                        }
                    }
                    return $arr;
                }
                $file =getDirContent("../../../upload/");
                $arrlength=count($file);
                ?>
                <ul>
                    <?php
                    for($x=0;$x<$arrlength;$x++) {    //将目录下所有文件输出
                        echo "<li><a href=\"javascript:changeText('$file[$x]')\";".">$file[$x]</a></li>";
                    }
                    ?>
                </ul>
                  </div>
		          </div>
		         </div>
                </div>
            </div>
        </div>

              <footer class="footer text-center text-sm-left">
             </footer>
           </div>
            <!-- end page content -->
      </div>
            <!--end page-wrapper-inner -->
   </div>
        <!-- end page-wrapper -->
        <!-- jQuery  -->
        <script src="../../../js/学院管理员界面.js"></script>
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
