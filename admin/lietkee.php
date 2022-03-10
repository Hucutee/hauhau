<?php
	$sql_lietkesp="select * from LoaiHangHoa order by MaLoaiHang desc ";
	$row_lietkesp=mysql_query($sql_lietkesp);

?>
<div class="button_themsp">
<a href="index.php?quanly=loaisp&ac=them">Thêm Mới</a> 
</div>

<table width="100%" border="1">
  <tr>
    <td>ID</td>
    <td>Tên loại sản phẩm</td>
    <td colspan="2" style="text-align:center";>Xóa </td>
  </tr>
  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_lietkesp)){


  ?>
  <tr>
    <td><?php  echo $i;?></td>
    <td><?php echo $dong['TenLoaiHang'] ?></td>
    <td><a href="xulyy.php?id=<?php echo $dong['MaLoaiHang']?>" class="delete_link"><center><img src="imgs/delete.png" width="30" height="30" /></center></a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
