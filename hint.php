<?php
	function connect()
	{
    $conn = mysql_connect("127.0.0.1", "gindart_gindart", "trading08");
	mysql_query("set names ansi");
    mysql_select_db("gindart_gt3c");
    return $conn;
	}
	$conn = connect();
	$q='';
	if (isset($_GET["q"]))if(!empty($_GET["q"]))$q=$_GET["q"];
	$sql="select vendor_id, name from vendor where name like '%$q%' or vendor_id like '%$q%' ";
	$result = mysql_query($sql,$conn);
	$txt= '';
	$i=0;
	while ($row = mysql_fetch_array($result)){
    if($i==0)$txt.=''.$row['vendor_id'].','.$row['name'].';';
	else $txt.=''.$row['vendor_id'].','.$row['name'].';';
	$i++;
  	}
	$txt.= '';
if($txt == '')
  {
  $response="0,未查询到供应商;";
  }
else
  {
  $response=$txt;
  }
//输出响应
echo $response;
//if(strlen($q)>0)
//  {
//  $hint="";
//  for($i=0; $i<count($a); $i++)
//    {
//    if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
//      {
//      if ($hint=="")
//        {
//        $hint=$i.','.$a[$i];
//        }
//      else
//        {
//        $hint=$hint.";".$i.','.$a[$i];
//        }
//      }
//    }
//  }
//// 如果未找到提示，则把输出设置为 "no suggestion"
//// 否则设置为正确的值
//if($hint == "")
//  {
//  $response="no suggestion";
//  }
//else
//  {
//  $response=$hint;
//  }
////输出响应
//echo $response;
?>