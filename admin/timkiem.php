
<?php
	if(isset($_POST['timkiem'])){
	$search=$_POST['masp'];
	echo 'Mã tìm kiếm :<strong>'.' '.$search.'</strong><br/>';
	$sql_timkiem="select * from HangHoa where MSHH='".$search."'";
	$row_timkiem=mysql_query($sql_timkiem);
	$count=mysql_num_rows($row_timkiem);
	if($count>0){
	
  
?>
<h3>Kết quả tìm kiếm</h3>

<table width="100%" border="1">
  <tr>
    <td>Mã số </td>
    <td>Tên sản phẩm</td>
    <td>Hình ảnh</td>
    <td>Giá đề xuất</td>
    <td>Số lượng</td>
    <td>Loại hàng</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_timkiem)){

  ?>
  <tr>
    <td><?php echo $dong['MSHH'] ?></td>
    <td><?php echo $dong['TenHH'] ?></td>
    <td><img src="uploads/<?php echo $dong['HinhAnh'] ?>" width="80" height="80" /></td>
    <td><?php echo $dong['Gia'] ?></td>
    <td><?php echo $dong['SoLuongHang'] ?></td>
    <td><?php echo $dong['MaLoaiHang'] ?></td>

    <td><a href="index.php?quanly=sanpham&ac=sua&id=<?php echo $dong['MSHH'] ?>"><center><img src="imgs/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlysanpham/xuly.php?id=<?php echo $dong['MSHH']?>"><center><img src="imgs/delete.png" width="30" height="30" /></center></a></td>
  </tr>
  <?php
  $i++;
  }
	}else{
	  echo 'Không tìm thấy kết quả';
  }
  }
  ?>
</table>
