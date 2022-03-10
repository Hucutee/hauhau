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

    $cart_idd="select * FROM KhachHang where Email='$name' limit 1";
    $ketqua=mysql_query($cart_idd);
    $AAAA=mysql_fetch_array($ketqua);
    ?>
    <div class="tieude">Tài khoản của bạn | <span>Xin chào bạn:<strong><em><?php echo $AAAA['HoTenKH']; ?></em></strong><a href="update_cart.php?thoat=1" style="text-decoration:underline;color:#fff; margin-left:10px;">Đăng Xuất</a></span></div>
  





<div class="dangky">
 
<form method="POST" action=""   enctype="multipart/form-data">
 <table width="100%" border="1" style="border-collapse:collapse;">
  <tr>
  <td>  Tên đăng nhập:</td><td><input type="text" name="username" id="username" value=<?PHP ECHO $AAAA['HoTenKH'] ?> /></td></tr>



<tr>   <td> Địa chỉ nhận hàng: </td><td><input type="text" name="tencongty" id="tencongty"  value=<?PHP ECHO $AAAA['DiaChi'] ?> /></td></tr>
<tr><td  >
    <button id="button" type="submit"  name="guii">Thay đổi</button></td>
    <td><button id="button" type="submit" ><a href="?quanly=cuatoi">quay lại</a> </button></td></tr></table> 
  </form>
</div>
 


  <?php
  @session_start();
  if(isset($_POST['guii'])){
    $name=$_SESSION['dangnhap'];
    $tenkh=$_POST['username']; 
    $diachi=$_POST['tencongty'];
    $sql_dangky=mysql_query("update KhachHang set HoTenKH='$tenkh', DiaChi='$diachi' where Email='$name'"); ?>
      
<?php      
 }
?>


