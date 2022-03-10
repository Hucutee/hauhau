
<div class="tieude">
	Bạn có thể đăng nhập tại đây.
</div>
<p style="font-size:18px; color:red;margin:5px;">Các mục dấu * là bắt buộc.</p>
<div class="dangky">
  
  <form action="" method="post" enctype="multipart/form-data">
	<table width="100%" border="1" style="border-collapse:collapse;">
  <tr>
    <td width="40%">Email : <strong style="color:red;"> (*)</strong></td>
    <td width="60%"><input type="text" name="email" size="50"></td>
  </tr>
    <td>Mật khẩu : <strong style="color:red;"> (*)</strong></td>
   <td width="60%"><input type="password" name="pass" size="50"></td>
  </tr>
  <tr>
    <td colspan="2">
    	 
           <p><input id="button" type="submit" name="dangnhap" value="Đăng nhập" /></p>
       
         
    </td>
    </tr>
</table>
</form>

</div>

 <?php
	@session_start();
	if(isset($_POST['dangnhap'])){
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$sql=mysql_query("select * from KhachHang where Email='$email' and MatKhau=md5('$pass') limit 1");
		$count=mysql_num_rows($sql);
		if($count>0){
			$tendangnhap=$_SESSION['dangnhap']=$email;
			echo '<p style="text-align:center;width:auto;padding:30px;background:skyblue;color:#fff;font-size:20px;">Bạn đã đăng nhập thành công.</p>';
			echo '<a href="index.php?quanly=dathang" style="font-size:20px;">Quay lại để thanh toán</a>';
		}else{ 
			echo '<p style="text-align:center;width:auto;padding:30px;background:skyblue;color:#fff;font-size:20px;">Email và Tài khoản bị sai</p>';
		}
	}
?>



