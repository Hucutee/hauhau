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
    if(isset($_SESSION['dangnhap'])){
	   $name=$_SESSION['dangnhap'];
    

		$cart_idd="select * FROM KhachHang where Email='$name' limit 1";
		$ketqua=mysql_query($cart_idd);
		$AAAA=mysql_fetch_array($ketqua);
		?>
		<div class="tieude">Tài khoản của bạn | <span>Xin chào bạn:<strong><em><?php echo $AAAA['HoTenKH']; ?></em></strong><a href="update_cart.php?thoat=1" style="text-decoration:underline;color:#fff; margin-left:10px;">Đăng Xuất</a></span></div>
		<div class="dangky"
<form action="" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="600" border="1">
 
  <tr>
    <td width="30%">Tên của bạn: </td>
    <td width="65%"><?php echo $AAAA['HoTenKH'] ?></td>
  </tr>
  <tr>
    <td>Mã:   </td>
    <td><?php echo $AAAA['MSKH'] ?></td>
  </tr>
  <tr>
    <td>Email: </td>
    <td><?php echo $AAAA['Email'] ?></td>
  </tr>
 
  <tr>
    <td>Địa chỉ nhận hàng:</td>
    <td><?php echo $AAAA['DiaChi'] ?></td>
  </tr><tr>
    <td>Đổi thông tin:</td>
<td><button id="button" type="submit" ><a href="?quanly=doithongtin">Tại đây</a> </button></td></td></tr>


</table>
</form> </div>






	

<?php

}else{ ?> <div class="tieude">Bạn chưa đăng nhập </div>
   <ul  class="control">
              <p><a href="index.php">Tiếp tục mua hàng</a></p>
                <p><a href="?quanly=dangkymoi">Đăng ký mới</a></p>
                <p><a href="?quanly=dangnhap">Bạn đã có tài khoản</a></p>
          </ul>
          <?php
}

?>