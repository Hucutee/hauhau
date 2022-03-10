
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
	$sql_lietkesp="select * from HangHoa,LoaiHangHoa where LoaiHangHoa.MaLoaiHang=HangHoa.MaLoaiHang order by HangHoa.MaLoaiHang desc limit $trang1,5 ";
	$row_lietkesp=mysql_query($sql_lietkesp);

?>
<div class="button_themsp">
<a href="index.php?quanly=sanpham&ac=them">Thêm Mới</a> 
</div>

<table width="100%" border="1">
  <tr>
    <td>STT</td>
    <td>Tên sản phẩm</td>
    <td>Mã sp</td>
    <td>Hình ảnh</td>
    <td>Giá đề xuất</td>
    <td>Số lượng</td>
    <td>Loại hàng</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_lietkesp)){

  ?>
  <tr>
  	
    <td><?php  echo $i;?></td>
    <td><?php echo $dong['TenHH'] ?></td>
    <td><?php echo $dong['MSHH'] ?></td>
    <td><img src="uploads/<?php echo $dong['HinhAnh'] ?>" width="80" height="80" />
    </td>
    <td><?php echo number_format($dong['Gia']) ?></td>
    <td><?php echo $dong['SoLuongHang'] ?></td>
    <td><?php echo $dong['TenLoaiHang'] ?></td>
 
    <td><a href="index.php?quanly=sanpham&ac=sua&id=<?php echo $dong['MSHH'] ?>" ><center><img src="imgs/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="xuly.php?id=<?php echo $dong['MSHH']?>" class="delete_link"><center><img src="imgs/delete.png" width="30" height="30"   /></center></a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
<div class="trang">
	Trang :
    <?php
	$sql_trang=mysql_query("select * from HangHoa");
	$count_trang=mysql_num_rows($sql_trang);
	$a=ceil($count_trang/5);
	for($b=1;$b<=$a;$b++){
		
		if($trang==$b){
		
		echo '<a href="index.php?quanly=sanpham&ac=lietke&trang='.$b.'" style="text-decoration:underline;color:red;">'.$b.' ' .'</a>';
        
	}else{
		echo '<a href="index.php?quanly=sanpham&ac=lietke&trang='.$b.'" style="text-decoration:none;color:#000;">'.$b.' ' .'</a>';
	}
	}
	?>
</div>
