<?php
	$sql_loaisp="select * from HangHoa where HangHoa.MaLoaiHang='$_GET[id]'";
	$num_loaisp=mysql_query($sql_loaisp);
	$count=mysql_num_rows($num_loaisp);
	
?>
<?php
	$sql_tenloaisp="select TenLoaiHang from LoaiHangHoa where MaLoaiHang='$_GET[id]' ";
	$row=mysql_query($sql_tenloaisp);
	$dong=mysql_fetch_array($row);
?>
	<div class="tieude"><?php echo $dong['TenLoaiHang'] ?></div>
                	<ul class="product">
                     <?php
					 if($count>0){
						while($dong_loaisp=mysql_fetch_array($num_loaisp)){
						?>
                    	<li><a href="?quanly=chitietsp&id=<?php echo $dong_loaisp['MSHH'] ?>&idloaisp=<?php echo $dong_loaisp['MaLoaiHang'] ?> ">
                       
                       
                        	<img src="../admin/uploads/<?php echo $dong_loaisp['HinhAnh'] ?>" width="150" height="150" />
                            <p><?php echo $dong_loaisp['TenHH'] ?></p>
                            <p><?php echo $dong_loaisp['Gia'] ?></p>
                            
                        	<p>Chi tiết</p>
                        </a></li>
                       <?php
						}
	}else{
		echo 'Hiện chưa có sản phẩm...';
	}
					   ?>
                    </ul>
                
            
            </div>