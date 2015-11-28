<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>测试</title>
</head>

<body>
<?
	$test='';
	if(isset($_POST['test'])) $test=$_POST['test'];
	echo $test;
?>
</body>
</html>