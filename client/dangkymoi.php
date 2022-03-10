


<div class="tieude">
  Bạn có thể đăng ký tại đây.
</div>
 <p style="font-size:18px; color:red;margin:5px;">Các mục dấu * là bắt buộc.</p>
<div class="dangky">
 
<form method="POST" action="#" onsubmit="return kiem_tra()"  enctype="multipart/form-data">
 <table width="100%" border="1" style="border-collapse:collapse;">
  <tr>
  <td>  Tên đăng nhập(*):</td><td><input type="text" name="username" id="username"/></td></tr>
<tr>   <td> Password(*):</td><td><input type="password" name="password" id="password" /></td></tr>
<tr>   <td> Nhập lại password(*):</td><td><input type="password" name="repassword" id="repassword" /></td></tr>
<tr>    <td>Email(*):</td><td><input type="text" name="email" id="email" /></td></tr>
<tr>   <td> Số điện thoại(*):</td><td><input type="text" name="phone_number" id="phone_number"/></td></tr>
<tr>   <td> Địa chỉ(*):</td><td><input type="text" name="tencongty" id="tencongty" /></td></tr>
<tr><td colspan="2" >
    <button id="button" type="submit" onclick="kiem_tra()" name="gui">Đăng ký</button></td></tr></table>
  </form>
</div>
    
  <script>
      var error = document.getElementById("error"); 
    function kiem_tra(){
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      var repassword = document.getElementById("repassword").value;
      var last_name = document.getElementById("tencongty").value;
      var email = document.getElementById("email").value;
      var phone_number = document.getElementById("phone_number").value;   
      if( username.trim()==="" || password.trim()==="" || repassword.trim()==="" || last_name.trim()==="" ||
          email.trim()==="" || phone_number.trim()===""

      ){
        alert('Dữ liệu không được để  trống');
      }   
      if(/[a-zA-Z]/.test[username[0]] || username.indexOf(' ') >= 0){
        alert('Tên đăng nhập không có khoảng trống, bắt đầu bằng kí tự!')
        return false;
      }

      if(repassword != password){
        alert('Hai trường mật khẩu phải giống nhau!')
        return false;     
      }

      if(!/(@gmail\.com)$/.test(email)){
        alert('Email phải có dạng user@gmail.com')
        return false;
      }
  
      
      if((phone_number.length !=10) || (/\D/.test(phone_number))){
        alert('Số điện thoại phải gồm 10 ký số')
        return false;
      } 
      alert('Đăng ký thành công!');
    return true;
    }
  </script>

  <?php
  if(isset($_POST['gui'])){
    $tenkh=$_POST['username'];
    $email=$_POST['email'];
    $diachi=$_POST['tencongty'];
    $pass=$_POST['password'];
    $dienthoai=$_POST['phone_number'];
     $makh=("select MSKH from KhachHang ORDER BY MSKH DESC LIMIT 1");
    $maloaii=mysql_query($makh); 
    $maloaiii=mysql_fetch_array($maloaii); 
    $iii=$maloaiii['MSKH']+1; 
    $sql_dangky=mysql_query("insert into KhachHang (MSKH,HoTenKH,Email,MatKhau,SoDienThoai,Diachi) value('$iii','$tenkh','$email',md5('$pass'),'$dienthoai','$diachi')");
        
  if($sql_dangky){
    echo '<h3 style="margin-left:5px;">Bạn đã đăng ký thành công</h3>';
    echo '<a href="?quanly=dangnhap" style="margin:20px;text-decoration:none;">Quay lại để đăng nhập mua hàng</a>';
  }
  }
?>
