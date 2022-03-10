		<?php
	$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='webb';
	$conn=mysql_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Không kết nối được');
	mysql_select_db($csdl,$conn);
?>
 

	


<div id="wrapperr"  >
  <div id="menuu">
        <p class="welcomee"> <b>Trả lời </b></p>
        <div style="clear:both"></div>
    </div>
     
    <div id="chatboxx">
         <?php
         $u=$_GET['id'];
      $sql="select * from Chat where MSKH='$u'";
      $row=mysql_query($sql);
      while($dong=mysql_fetch_array($row)){
        
       echo '  <table id="uuu" width="100%" border="0" style="border-collapse:collapse; margin:5px; text-align:right;">';
       if($dong['ChucVu']=='admin'){
      echo'<tr>';
      
     
      echo'<td width=50%>.... '.$dong['NoiDung'].' </div></td>';
     echo'<td> </td>';
     echo '</tr>';
   }else{
  echo'<tr>';
      
     echo'<td> </td>';
      echo'<td width=70%> '.$dong['NoiDung'].' </div></td>';
     
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
$ma= $_GET['id'];
    $maloai=("select * from Chat where MSKH='$ma' ORDER BY stt DESC LIMIT 1");
    $maloaii=mysql_query($maloai); 
    $maloaiii=mysql_fetch_array($maloaii); 
    $iii=$maloaiii['stt']+1;
    $maa=$_GET['id'];
    $noidung=$_POST['usermsgg']; 
    $sql_dangkyy=mysql_query("insert into Chat (MSKH,stt,NoiDung,ChucVu) value('$ma','$iii','$noidung','admin')"); ?>
    <?php

  }
?>
