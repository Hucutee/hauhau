<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<link rel="stylesheet" type="text/css" href="admin.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
  
<title>Trang quản lý website</title>

</head>
<?php
 session_start();
 if(!isset($_SESSION['dangnhap'])){
	 header('location:login.php');
 }
?>
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
<div class="header">
    	<h3>Trang admincp</h3>
    </div>

 <?php
	if(isset($_POST['logout'])){
		unset($_SESSION['dangnhap']);
		header('location:login.php');
	}
?>
<div class="menu">
    	<ul>
        	<li><a href="index.php?quanly=loaisp&ac=them">Quản lý loại sp</a></li>
            <li><a href="index.php?quanly=sanpham&ac=them">Quản lý sản phẩm</a></li>
            <li><a href="index.php?quanly=khachhang&ac=kh">Quản lý Khách hàng</a></li>
            <li><a href="index.php?quanly=chat&ac=u">Chat</a></li>
            <form action="" method="post" enctype="multipart/form-data"  style="text-align: right;">
            <input type="submit" name="logout" value="Đăng xuất" style="background:#06F;color:#fff;width:200px;height:40px;" />
            </form>
        </ul>
       
    </div>
 <form action="index.php?quanly=timkiem&ac=sp" method="post" enctype="multipart/form-data">
     <p><input type="text" name="masp" placeholder="Nhập mã sản phẩm..." id="timkiem" required="required" />
        <input type="submit" id="button_timkiem" name="timkiem" value="Tìm sản phẩm" />
        </p>
        </form>

 <div class="content">
        <div class="box_contains">
            <?php
                if(isset($_GET['quanly'])&&$_GET['ac']){
                    $tam=$_GET['quanly'];
                    $tam1=$_GET['ac'];
                    }else{
                        $tam='';
                    }if(($tam == 'loaisp')&&($tam1 == 'them')){
                        include('themm.php');
                    }if(($tam == 'chat')&&($tam1 == 'u')){
                        include('chat.php');
                    }elseif(($tam == 'xulyyy')&&($tam1 == 'gui')){
                        include('xulyyy.php');
                    }elseif(($tam == 'loaisp')&&($tam1 == 'lietke')){
                        
                        include('lietkee.php');
                    }elseif(($tam == 'loaisp')&&($tam1 == 'sua')){
                        
                        include('suaa.php');
                    }elseif(($tam == 'khachhang')&&($tam1 == 'kh')){
                        include('lietkeee.php');
                    }elseif(($tam == 'sanpham')&&($tam1 == 'them')){
                        
                        include('them.php');
                    }elseif(($tam == 'sanpham')&&($tam1 == 'lietke')){
                        
                        include('lietke.php');
                    }elseif(($tam == 'sanpham')&&($tam1 == 'sua')){
                        
                        include('sua.php');
                    }elseif(($tam == 'timkiem')&&($tam1 == 'sp')){
                        
                        include('timkiem.php');
                    }else{
                        include('lietkee.php');
                    }
            ?>
        
        </div>
    </div>
    <div class="clear"></div>
   
</div>
</body>
</html>