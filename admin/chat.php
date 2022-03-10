<?php
	$sql_lietkesp="select * from KhachHang ";
	$row_lietkesp=mysql_query($sql_lietkesp);

?>


<table width="400px" border="1">
  <tr >

    <td  colspan="4" style="text-align:center";>Khách hàng  </td>
  </tr>
  <tr>
    <td>Tên khách hàng:</td>
        <td>Mã số:</td>
                <td>Địa chỉ:</td>


    <td  style="text-align:center";>Rep </td>
  </tr>
  <?php
  while($dong=mysql_fetch_array($row_lietkesp)){

  ?>
  <tr>
    <td><?php echo $dong['HoTenKH']?></td>
    <td><?php echo $dong['MSKH'] ?></td>
        <td><?php echo $dong['DiaChi'] ?></td>

    <td><a href="?quanly=xulyyy&ac=gui&id=<?php echo $dong['MSKH']?>" class="delete_link"><center><img src="imgs/edit.png" width="30" height="30" /></center></a></td>
  </tr>
  <?php
  }
  ?>
</table>

