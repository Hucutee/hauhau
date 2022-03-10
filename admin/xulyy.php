<?php
	$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='webb';
	$conn=mysql_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Không kết nối được');
	mysql_select_db($csdl,$conn);
?>


<?php
	$tenloaisp=$_POST['loaisp'];
	
	if(isset($_POST['themm'])){
		//them
		$maloai=("select MaLoaiHang from LoaiHangHoa ORDER BY MaLoaiHang DESC LIMIT 1");
		$maloaii=mysql_query($maloai);
		$maloaiii=mysql_fetch_array($maloaii);
		$iii=$maloaiii['MaLoaiHang']+1;
		$sql_them=("insert into LoaiHangHoa (MaLoaiHang,TenLoaiHang) value('$iii','$tenloaisp')");
		mysql_query($sql_them);
		header('location:index.php?quanly=loaisp&ac=lietke');
	}elseif(isset($_POST['suaa'])){
		//sua
		$sql_sua = "update MaLoaiHang set TenLoaiHang='$tenloaisp' where MaLoaiHang='$_GET[id]'";
		mysql_query($sql_sua);
		header('location:index.php?quanly=loaisp&ac=lietke');
	}else{
		$sql_xoa = "delete from LoaiHangHoa where MaLoaiHang = $_GET[id]";
		mysql_query($sql_xoa);
		header('location:index.php?quanly=loaisp&ac=lietke');
	}
?>
