
<?php
	if(isset($_GET['trang'])){
		$trang=$_GET['trang'];
	}else{
		$trang='';
	}
	if($trang =='' || $trang =='1'){
		$trang1=0;
	}else{
		$trang1=($trang*5)-5;
	}
	$sql_lietkesp="select * from KhachHang order by MSKH desc limit $trang1,5 ";
	$row_lietkesp=mysql_query($sql_lietkesp);

?>



<table width="100%" border="1">
  <tr>
    <td>MSKH</td>
    <td>Tên</td>
    <td>Email</td>
    <td>Địa chỉ</td>
     <td > <center>Xóa tài khoản</center></td>
  </tr>
  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_lietkesp)){

  ?>
  <tr>
  	
    <td><?php  echo $dong['MSKH'];?></td>
    <td><?php echo $dong['HoTenKH'] ?></td>
    <td><?php echo $dong['Email'] ?></td>
    <td><?php echo $dong['DiaChi'] ?></td>
    <td><a href="?quanly=khachhang&ac=kh&id=<?php echo $dong['MSKH']?>" class="delete_link"><center><img src="imgs/delete.png" width="30" height="30" /> </center></a></td> 
  </tr>
  </tr>
  <?php 
  $i++;
  }
  ?>
</table>
<div class="trang">
	Trang :
    <?php
	$sql_trang=mysql_query("select * from KhachHang");
	$count_trang=mysql_num_rows($sql_trang);
	$a=ceil($count_trang/5);
	for($b=1;$b<=$a;$b++){
		
		if($trang==$b){
		
		echo '<a href="index.php?quanly=khachhang&ac=kh&trang='.$b.'" style="text-decoration:underline;color:red;">'.$b.' ' .'</a>';
        
	}else{
		echo '<a href="index.php?quanly=khachhang&ac=kh&trang='.$b.'" style="text-decoration:none;color:#000;">'.$b.' ' .'</a>';
	}
	}
	?>
</div>

<?php  
  if(isset($_GET['id'])){ 
  $sql_xoa = "delete from KhachHang where MSKH = $_GET[id]";
    mysql_query($sql_xoa);
    header('location:index.php?quanly=khachhang&ac=kh');
}
?>




