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
    $stt=$iii;
    $sql_dangkyy=mysql_query("insert into Chat (MSKH,stt,NoiDung,ChucVu) value('$ma','$iii','$noidung','khachhang')"); ?>
    <?php

     header('location:index.php?quanly=chat');
      }

?>
