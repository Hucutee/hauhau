
<div class="button_themsp">
<a href="index.php?quanly=sanpham&ac=lietke">Liệt kê sp</a> 
</div>
<form action="xuly.php" method="post" enctype="multipart/form-data">
<table width="600" border="1">
  <tr>
    <td colspan="2" style="text-align:center;font-size:25px;">Thêm  sản phẩm</td>
  </tr>
  <tr>
    <td width="97">Tên sản phẫm</td>
    <td width="87"><input type="text" name="tensp"></td>
  </tr>
  <tr>
    <td>Mã SP</td>
    <td><input type="text" name="masp"></td>
  </tr>

  <tr>
    <td>Giá đề xuất</td>
    <td><input type="text" name="giadexuat"></td>
  </tr>
 
  <tr>
  <?php
  $sql_loaisp = "select * from LoaiHangHoa";
  $row_loaisp=mysql_query($sql_loaisp);
  ?>

  <tr>
    <td>Số lượng</td>
    <td><input type="text" name="soluong"></td>
  </tr>
    <td>Loại sản phẩm</td>
    <td><select name="loaisp">
    <?php
  while($dong_loaisp=mysql_fetch_array($row_loaisp)){
  ?>
      <option value="<?php echo $dong_loaisp['MaLoaiHang'] ?>"><?php echo $dong_loaisp['TenLoaiHang'] ?></option>
        <?php
  }
    ?>
    </select></td>
  </tr>
    <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh" /></td>
  </tr>
   <tr>
    <td>Nội dung</td>
    <td><textarea name="noidung" cols="40" rows="10"></textarea></td>
  </tr>


  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="them" value="Thêm sản phẩm">
    </div></td>
  </tr>
</table>
</form>


