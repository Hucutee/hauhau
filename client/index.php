<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<link rel="stylesheet" type="text/css" href="webdttt.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Website phụ kiện điện thoại</title>

</head>
<body>
	<div class="wrapper">

		<?php
	$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='webb';
	$conn=mysql_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Không kết nối được');
	mysql_select_db($csdl,$conn);
?>
    	<?php
			include('header.php');
		?>    


      
        </div>
</body>
</html>