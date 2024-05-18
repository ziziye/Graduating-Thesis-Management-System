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
  <body link=blue vlink=purple leftmargin=0 topmargin=0>';//生成表格
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
$sql = "SELECT id, title,teacher,student FROM select_title";
$map=array('id','title','teacher','student');
$result = $conn->query($sql);//查询结果
if ($result->num_rows > 0) {//读取每一行数据
    // 输出数据
    $datal=array();//初始空数组
    while($row = $result->fetch_assoc()) {//从结果集中取出一行
        $id=$row["id"];$title=$row["title"];
        $teacher=$row["teacher"];$student=$row["student"];
        $datal1=array($id, $title,$teacher,$student);
        $alldata=array_push($datal,$datal1);//向数组尾部添加元素$datal1
    }
    $csv=new toExcel;
    $csv->toExcel($map,$datal,"student_select_title");//生成excel文件
}
?>
