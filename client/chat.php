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
		<div class="tieude">Tài khoản của bạn | <span>Xin chào bạn:<strong><em><?php echo $AAAA['HoTenKH']; ?></em></strong><a href="update_cart.php?thoat=1&quanly=chat&ac=u" style="text-decoration:underline;color:#fff; margin-left:10px;">Đăng Xuất</a></span></div>
		




<div id="wrapperr"  >
  <div id="menuu">
        <p class="welcomee"> <b>Hãy đặt câu hỏi</b></p>
        <div style="clear:both"></div>
    </div>
     
    <div id="chatboxx">
         <?php
      $sql="select * from Chat where MSKH='".$AAAA['MSKH']."'";
      $row=mysql_query($sql);
      while($dong=mysql_fetch_array($row)){
        
       echo '  <table width="100%" border="0" style="border-collapse:collapse; margin:5px; text-align:right;">';
       if($dong['ChucVu']=='khachhang'){
      echo'<tr>';
      echo'<td> </td>';
     
      echo'<td width=70%> '.$dong['NoiDung'].' </div></td>';
     
     echo '</tr>';
   }else{
   echo'<tr>';
     
      echo'<td width=50%> '.$dong['NoiDung'].' </div></td>';
           echo'<td> </td>';

     echo '</tr>';
}   
  echo'</table>';

  }
  
  ?>
    </div>
     
    <form name="messagee" method="POST" action=""   enctype="multipart/form-data">
        <input name="usermsgg" type="text" id="usermsgg" size="63" />
        <input name="submitmsgg" type="submit"  id="submitmsgg" value="Send" />
    </form>
</div>

  <?php
  @session_start();
    if(isset($_POST['submitmsgg'])){ 

  $name=$_SESSION['dangnhap'];  
  $cart_idd="select * FROM KhachHang where Email='$name' limit 1";
    $ketqua=mysql_query($cart_idd);
    $AAAA=mysql_fetch_array($ketqua);
$ma= $AAAA['MSKH'];

    $maloai=("select stt from Chat where MSKH='$ma' ORDER BY stt DESC LIMIT 1");
    $maloaii=mysql_query($maloai); 
    $maloaiii=mysql_fetch_array($maloaii); 
    $iii=$maloaiii['stt']+1;

    $ma=$AAAA['MSKH']; 
    $noidung=$_POST['usermsgg']; 
    $sql_dangkyy=mysql_query("insert into Chat (MSKH,stt,NoiDung,ChucVu) value('$ma','$iii','$noidung','khachhang')"); ?>

    <?php

  } ;

?>

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