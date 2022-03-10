		<?php
	$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='webb';
	$conn=mysql_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Không kết nối được');
	mysql_select_db($csdl,$conn);
?>


<?php
	@session_start();

		$name=$_SESSION['dangnhap'];	
		$cart_id="select MSKH FROM KhachHang where Email='$name' limit 1";

		$cart_idd="select * FROM KhachHang where Email='$name' limit 1";
		$ketqua=mysql_query($cart_idd);
		$AAAA=mysql_fetch_array($ketqua);
		echo $AAAA['MSKH'];
		if($ketqua){
			$u=1;
			for($i=0;$i<count($_SESSION['product']);$i++){
			
			$product_id=$_SESSION['product'][$i]['id'];
			$quantity=$_SESSION['product'][$i]['soluong'];
			$price=$_SESSION['product'][$i]['gia'];
			$kiemtra="select MSHH FROM ChiTietDatHang where MSHH='$product_id' limit 1";
				$countt=mysql_query($kiemtra);
				$maskhh=mysql_fetch_array($countt);

          $counttt=mysql_num_rows($countt);
          	  $cart_d=mysql_query("insert into `DatHang` (`SoDonDH`, `MSKH`, `MSNV`, `NgayDH`, `NgayGH`) VALUES('".$name."','".$AAAA['MSKH']."', 1, curdate(),curdate()+7 )");
	if($counttt>0){
				 $sql_det = "update ChiTietHoaDon set SoLuong='$quantity' where MSHH='$product_id'";


		mysql_query($sql_det);
				}else{

			  $cart_det=mysql_query("insert into ChiTietDatHang (SoDonDH,MSHH,SoLuong,GiaDatHang,GiamGia) values('".$name."','".$product_id."','".$quantity."','".$price."',0)");
			
		
			  	}

		}
		
	}	
	unset($_SESSION['product']);
		
		header('location:index.php?quanly=camon');

				
?>

