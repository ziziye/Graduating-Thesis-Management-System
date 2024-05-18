<?php
class toExcel{
 public $link = null;
 function __construct(){
 }
 public function toExcel($mapping,$datalist,$fileName) {
  header("Content-type:application/vnd.ms-excel");
  header("Content-Disposition:filename=".iconv('utf-8', 'gb2312', $fileName).".xls");
  echo'<html xmlns:o="urn:schemas-microsoft-com:office:office" 
  xmlns:x="urn:schemas-microsoft-com:office:excel" 
  xmlns="[url=http://www.w3.org/TR/REC-html40]http://www.w3.org/TR/REC-html40[/url]"> 
  <head> 
  <meta http-equiv="expires" content="Mon, 06 Jan 1999 00:00:01 GMT"> 
  <meta http-equiv=Content-Type content="text/html; charset=UTF-8"> 
  <!--[if gte mso 9]><xml> 
  <x:ExcelWorkbook> 
  <x:ExcelWorksheets> 
  <x:ExcelWorksheet> 
  <x:Name></x:Name> 
  <x:WorksheetOptions> 
  <x:DisplayGridlines/> 
  </x:WorksheetOptions> 
  </x:ExcelWorksheet> 
  </x:ExcelWorksheets> 
  </x:ExcelWorkbook> 
  </xml><![endif]--> 
  </head> 
  <body link=blue vlink=purple leftmargin=0 topmargin=0>';
  echo'<table border="0" cellspacing="0" cellpadding="0">';
  echo'<tr>';
  if(is_array($mapping)) {
   foreach($mapping as $key=>$val)
   echo"<td style='background-color:#09F;font-weight:bold;'>".$val."</td>";
  }
  echo'</tr>';
  foreach($datalist as $k=>$v){
   echo'<tr>';
   foreach($v as $key=>$val){
    if(is_numeric($val) && strlen($val)>=14){
     echo"<td style='vnd.ms-excel.numberformat:@'>".$val."</td>"; //大于14位的数字转换成字符串输出(如身份证)
    }else{
     echo"<td>".$val."</td>";
    }
   }
   echo'</tr>';
  }
  echo'</table>';
  echo'</body>';
  echo'</html>';
 }
}
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "paper_management";
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT id, year,title,teacher,teacher_num,student,group_num FROM grouping";
$map=array('id','year','title','teacher','teacher_num','student','group_num');
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // 输出数据
     $datal=array();
    while($row = $result->fetch_assoc()) {
        $id=$row["id"];$title=$row["title"];$year=$row["year"];$teacher_num=$row["teacher_num"];
        $teacher=$row["teacher"];$student=$row["student"];$group_num=$row["group_num"];
        $datal1=array($id, $year,$title,$teacher,$teacher_num,$student,$group_num);
        $alldata=array_push($datal,$datal1);
    }
    $csv=new toExcel;
    $csv->toExcel($map,$datal,"student_grouping");
}
?>
