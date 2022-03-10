
<?php
	$sql = "select * from HangHoa where MSHH='$_GET[id]' ";
	$row=mysql_query($sql);
	$dong=mysql_fetch_array($row);
 ?>
<div class="button_themsp">
<a href="index.php?quanly=sanpham&ac=lietke">Liệt kê sp</a> 
</div>
<form action="xuly.php?id=<?php echo $dong['MSHH'] ?>" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="600" border="1">
  <tr>
    <td colspan="2" style="text-align:center;font-size:25px;">Sửa sản phẩm</td>
  </tr>
  <tr>
    <td width="97">Tên sản phẫm</td>
    <td width="87"><input type="text" name="tensp" value="<?php echo $dong['TenHH'] ?>"></td>
  </tr>
  <tr>
    <td>Mã SP</td>
    <td><input type="text" name="masp" value="<?php echo $dong['MSHH'] ?>"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh" /><img src="uploads/<?php echo $dong['HinhAnh'] ?>" width="80" height="80"></td>
  </tr>
  <tr>
    <td>Giá đề xuất</td>
    <td><input type="text" name="giadexuat" value="<?php echo $dong['Gia'] ?>"></td>
  </tr>
  <tr>
    <td>Nội dung</td>
    <td><textarea name="noidung" cols="40" rows="10"><?php echo $dong['GhiChu'] ?></textarea></td>
  </tr>
  <tr>
    <td>Số lượng</td>
    <td><input type="text" name="soluong" value="<?php echo $dong['SoLuongHang'] ?>"></td>
  </tr>
  <tr>
  <?php
  $sql_loaisp = "select * from LoaiHangHoa";
  $row_loaisp=mysql_query($sql_loaisp);
  ?>
    <td>Loại sản phẩm</td>
    <td><select name="loaisp">
     <?php
	while($dong_loaisp=mysql_fetch_array($row_loaisp)){
		if($dong['MaLoaiHang']==$dong_loaisp['MaLoaiHang']){
	?>
    	<option selected="selected" value="<?php echo $dong_loaisp['MaLoaiHang'] ?>"><?php echo $dong_loaisp['TenLoaiHang'] ?></option>
        <?php
	}else{
		?>
       <option value="<?php echo $dong_loaisp['MaLoaiHang'] ?>"><?php echo $dong_loaisp['TenLoaiHang'] ?></option>
        <?php
	}
	}
  
		?>
    </select></td>
  </tr>

  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" value="Sửa sản phẩm">
    </div></td>
  </tr>
</table>
</form>


