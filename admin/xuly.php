<?php
	$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='webb';
	$conn=mysql_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Không kết nối được');
	mysql_select_db($csdl,$conn);
?>


<?php
	$tensp=$_POST['tensp'];
	$masp=$_POST['masp'];
	$hinhanh=$_FILES['hinhanh']['name'];
	$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	$giadexuat=$_POST['giadexuat'];
	$soluong=$_POST['soluong'];
	$noidung=$_POST['noidung'];
	$loaisp=$_POST['loaisp'];
	$trang=$_GET['trang'];
	
	if(isset($_POST['them'])){
	
 $sql_them=("INSERT INTO `HangHoa` (`MSHH`,`TenHH`, `HinhAnh`, `Gia`, `SoLuongHang`, `MaLoaiHang`,`GhiChu`) VALUES
('$masp','$tensp', '$hinhanh', '$giadexuat','$soluong', '$loaisp', 'đẹp')");


		mysql_query($sql_them);
		header('location:index.php?quanly=sanpham&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua

	 $sql_sua = "update HangHoa set TenHH='$tensp',MSHH='$masp',HinhAnh='$hinhanh',Gia='$giadexuat',SoLuongHang='$soluong',GhiChu='$noidung'where MSHH='$_GET[id]'";



		mysql_query($sql_sua);
		header('location:index.php?quanly=sanpham&ac=lietke');
	}else{
		$sql_xoa = "delete from HangHoa where MSHH = $_GET[id]";
		mysql_query($sql_xoa);
		header('location:index.php?quanly=sanpham&ac=lietke');
	}
?>


