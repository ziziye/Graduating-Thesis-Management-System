<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <title>教师界面</title>
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
    function do_html_header1($title) {
        ?>
        <title><?php echo $title;?></title>
        <?php
    }// 跳转页面的函数
    function do_html_URL1($url, $name) {
        ?>
        <h5 style="color: black"><a href="<?php echo $url;?>"><?php echo $name;?></a></h5>
    <?php }
    // 输出页脚的函数
    function do_html_footer1() {
    }
    //输出底部快捷菜单的函数
    function display_user_menu1() {
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
                                <a href="logout1.php" class=""><i class="mdi mdi-power text-danger"></i></a>
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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">学生文件</a></li>
                                    <li class="breadcrumb-item active">结果</li>
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
                            <li><a id="menu_1" onclick="show1()">发布论文题目</a></li>
                            <li><a id="menu_2" onclick="show2()">学生选题情况</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-book-open-page-variant"></i><span>学生文件</span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a id="menu_3" onclick="show3()">学生开题报告</a></li>
                            <li><a id="menu_4" onclick="show4()">学生论文过程稿</a></li>
                            <li><a id="menu_5" onclick="show5()">学生论文终稿</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-book-open-page-variant"></i><span>结果</span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a id="menu_time" onclick="time_show()">答辩时间和答辩小组查看</a></li>
                            <li><a id="menu_score" onclick="score_check()">上交学生材料</a></li>
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
            <h4 class="mt-0 header-title">发布论文题目</h4>
             <div class="row">
                 <div class="col-lg-6">
                       <form action="add.php" method="post">
                           <div class="form-group">
                                <label class="mt-0 header-title">年度</label>
                                <input class="form-control" type="text" id="example-text-input" name="year" >
                           </div>
                           <div class="form-group">
                                <label class="mt-0 header-title">论文题目</label>
                                 <input class="form-control" type="text" id="example-text-input" name="title">
                           </div>
                           <div class="form-group">
                               <label class="mt-0 header-title">院系</label>
                               <input class="form-control" type="text" id="example-text-input" name="department">
                           </div>
                           <div class="form-group">
                         <label class="mt-0 header-title">指导老师</label>
                           <input class="form-control" type="text" id="example-text-input" name="teacher">
                           </div>
                           <div class="form-group">
                         <label class="mt-0 header-title">职称</label>
                           <input class="form-control" type="text" id="example-text-input" name="job">
                           </div>
                           <div class="form-group">
                         <label class="mt-0 header-title">已选人数</label>
                           <input class="form-control" type="number" id="example-text-input" name="select_stu">
                           </div>
                           <div class="form-group">
                          <label class="mt-0 header-title">可报人数上限</label>
                          <input class="form-control" type="number" id="example-text-input" name="limit">
                           </div>
                        <button type="submit" class="btn btn-info px-4 align-self-center report-btn">提交</button>
                </table>
            </form>
         </div>
       </div>
      </div>
     </div>
    </div>
     </div>
    </div>


		<div id="mianInfo_2" ><!-- 提交开题报告和论文过程稿 -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
			                 <h4 class="mt-0 header-title">学生选题情况</h4>
                                 <table  class="table mb-0" id="my-table">
                                     <thead>
                                     <tr>
                                        <th >序号</th>
                                         <th >论文题目</th>
                                          <th >指导老师</th>
                                         <th >学生姓名</th>
                                         <th >删除选题</th>
                                        </tr>
                                     </thead>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "root";
                    $dbname = "paper_management";
                    if (isset($_SESSION['valid_user']))  {
                        $name=$_SESSION['valid_user'];
                    }
                    // 创建连接
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("连接失败: " . $conn->connect_error);
                    }

                    $sql = "SELECT id, title,teacher,student FROM select_title where teacher='$name'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // 输出数据
                        echo "<tbody>";
                        while($row = $result->fetch_assoc()) {
                            $id=$row["id"];$teacher=$row["teacher"];$title=$row["title"];$student=$row["student"];
                            echo "<tr><td>$id</td><td>$title</td><td>$teacher</td><td>$student</td><td><a href='delete_select.php?id=$row[id]'>删除</a></td></tr>";
                        }
                        echo "</tbody>";
                    } else { echo "0 结果"; }
                    $conn->close();
                    ?>
                                 </table><!--end table-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>

		<div id="mianInfo_3" >
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">上传学生开题报告</h4>
                            <form action="upload_file.php" method="post" enctype="multipart/form-data" >
                                <table id="datatable2" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <tr>
                                        <td><input type="file" id="customFile" name="myFile"/></td>
                                        <td><button type="submit"  class="btn btn-info px-4 align-self-center report-btn">上传文件</button></td>
                                    </tr>
                                </table>
                            </form>
                            <h4 class="mt-0 header-title">下载学生开题报告</h4>
                            <form action="download_file.php" method="get">
                                <table id="datatable2" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <tr>
                                        <td><input type="file" id="customFile" name="filename"></td>
                                        <td><button type="submit" class="btn btn-info px-4 align-self-center report-btn">下载文件</button></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div>
		  </div>


		<div id="mianInfo_4" ><!-- 提交开题报告和论文过程稿 -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">上传学生过程稿</h4>
                            <form action="upload_file.php" method="post" enctype="multipart/form-data" >
                                <table id="datatable2" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <tr>
                                        <td><input type="file" id="customFile" name="myFile"/></td>
                                        <td><button type="submit"  class="btn btn-info px-4 align-self-center report-btn">上传文件</button></td>
                                    </tr>
                                </table>
                            </form>
                            <h4 class="mt-0 header-title">下载学生过程稿</h4>
                            <form action="download_file.php" method="get">
                                <table id="datatable2" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <tr>
                                        <td><input type="file" id="customFile" name="filename"></td>
                                        <td><button type="submit" class="btn btn-info px-4 align-self-center report-btn">下载文件</button></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div>
		  </div>

		<div id="mianInfo_5" ><!-- 论文成绩查询 -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                             <h4 class="mt-0 header-title">上传学生论文终稿</h4>
                            <form action="upload_file.php" method="post" enctype="multipart/form-data" >
                                <table id="datatable2" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <tr>
                                        <td><input type="file" id="customFile" name="myFile"/></td>
                                        <td><button type="submit"  class="btn btn-info px-4 align-self-center report-btn">上传文件</button></td>
                                    </tr>
                                </table>
                            </form>
                               <h4 class="mt-0 header-title">填写成绩</h4>
                            <div class="form-group row">
                              <form action="add_grade.php" method="post" >
                                   <table>
                                       <tr>
                                        <th ><h4 class="mt-0 header-title">序号</h4></th>
                                       <th ><h4 class="mt-0 header-title">年度</h4></th>
                                       <th ><h4 class="mt-0 header-title">论文题目</h4></th>
                                       </tr>
                                       <tr>
                                           <td ><input class="form-control" type="text" id="example-text-input" name="id"></td>
                                           <td ><input class="form-control" type="text" id="example-text-input" name="year"></td>
                                           <td ><input class="form-control" type="text" id="example-text-input" name="title"></td>
                                       </tr>
                                       <tr>
                                       <th ><h4 class="mt-0 header-title">指导老师</h4></th>
                                       <th ><h4 class="mt-0 header-title">学生</h4></th>
                                       <th ><h4 class="mt-0 header-title">成绩</h4></th>
                                       </tr>
                                      <tr>
                                       <td><input class="form-control"  type="text" id="example-text-input" name="teacher"></td>
                                       <td ><input  class="form-control" type="text" id="example-text-input" name="student"></td>
                                      <td ><input  class="form-control" type="text" id="example-text-input" name="grade"></td>
                                      </tr>
                          <button type="submit" class="btn btn-info px-4 align-self-center report-btn">提交</button>
                </table>
            </form>
		</div>
       </div>
     </div>
     </div>
    </div>
  </div>

		<div id="time_info"  >
            <div class="row">
                <div class="col-lg-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="blog-card mb-3">
                                <div class="meta-box">
                                    <ul class="p-0 mt-4 list-inline">
                                        <li class="list-inline-item">26 April 2022</li>
                                        <li class="list-inline-item">by <a href="#">003123</a></li>
                                        <li class="list-inline-item"><a href="#">Time</a></li>
                                    </ul>
                                </div><!--end meta-box-->
                                <div class="content_info">
                     <?php
                     $servername = "localhost";
                     $username = "root";
                     $password = "root";
                     $dbname = "paper_management";
                     $conn = new mysqli($servername, $username, $password, $dbname);
                     mysqli_query($conn,"set names 'utf8'");
                     if ($conn->connect_error) {
                         die("连接失败" . $conn->connect_error);
                     }
                     $sql = "select title,content from file";
                     $result = $conn->query($sql);
                     if($row = $result->fetch_assoc()) {
                         $title=$row["title"];$content=$row["content"];
                         echo "<h4 class='mt-2'>$title</h4></br>";
                         echo "<p class='text-muted'>$content</p>";
                     }
                     $conn->close();
                     ?>
                                </div>
                                <div>
                                    <tr><a href="grouping_excel.php" style="margin-left: 60px">下载论文答辩分组</a></tr>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
        </div>


		  <div id="scorecheck" >
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
			                 <h4 class="mt-0 header-title">上交学生材料</h4>
                              <form action="upload_file.php" method="post" enctype="multipart/form-data" >
                                  <table id="datatable2" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                      <tr>
                                          <td><input type="file" id="customFile" name="myFile"/></td>
                                          <td><button type="submit"  class="btn btn-info px-4 align-self-center report-btn">上传文件</button></td>
                                      </tr>
                                  </table>
                              </form>
              <div id="filelist">
                  <h2 class="mt-0 header-title">云盘内文件:</h2>
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
</div><!-- end page-wrapper -->
                                <!-- jQuery  -->
        <script src="../../../js/教师界面.js"></script>
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
        <?php
    }
    ?>
