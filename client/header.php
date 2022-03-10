<div class="header">
	<img src="../admin/imgs/avt.jpg" height="200px" width="100%" />
	<h1><marquee>Website phụ kiện điện thoại</marquee></h1>
</div>
   <div class="menu">
        	<ul>
            	<li><a href="index.php">Trang chủ</a></li>
             <li><a href="?quanly=vitri">Bản đồ </a></li>
                <li><a href="?quanly=dangkymoi">Đăng ký</a></li>
                 <li><a href="?quanly=dangnhap">Đăng nhập</a></li>
                 <li><a href="?quanly=dathang">Giỏ hàng</a></li>
                 <li><a href="?quanly=cuatoi">Tài khoản </a></li>
                  <li><a href="?quanly=chat">Chat
                   </a></li>



            </ul>
        </div>




 <form action="index.php?quanly=timkiemm" method="post" enctype="multipart/form-data">
     <p><input type="text" name="masp" placeholder="Nhập tên  sản phẩm..." id="timkiem" required="required" />
        <input type="submit" id="button_timkiem" name="timkiemm" value="Tìm sản phẩm" />
        </p>
        </form>
<div>
<?php
    if(isset($_POST['timkiemm'])){
    $search=$_POST['masp'];
    echo 'Mã tìm kiếm :<strong>'.' '.$search.'</strong><br/>';
    $sql_timkiem="select * from HangHoa where TenHH='".$search."'";
    $row_timkiem=mysql_query($sql_timkiem);
    $count=mysql_num_rows($row_timkiem);
    if($count>0){
    
?>
<h3>Đã tìm thấy sản phẩm.</h3>

<table width="100%" border="1">
  
  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_timkiem)){
$i=2;

  ?> 

  <a href="index.php?quanly=sanphammm&idloaisp=<?php echo $dong['MaLoaiHang'] ?>&id=<?php echo $dong['MSHH'] ?>">Ấn vào đây để xem chi tiết.</a>
<?php break; ?>
  <?php    
  }  
    }else { echo'Không tìm thấy sản phẩm.';}
  }
  ?>
</table>















   <div class="content">
            <div class="content_left">
                <?php
    $sql_loai="select * from LoaiHangHoa order by MaLoaiHang asc";
    $row_loai=mysql_query($sql_loai);
?>
<div class="box_list">
            <div class="tieude">
                <h3>Loại phụ kiện</h3>
            </div>
                <ul class="list">
                <?php
                while($dong_loai=mysql_fetch_array($row_loai)){
                ?>
                    <li><a href="index.php?quanly=loaisp&id=<?php echo $dong_loai['MaLoaiHang'] ?>"><?php echo $dong_loai['TenLoaiHang'] ?></a></li>
                  <?php
                }
                  ?>
                </ul>
                </div>
 <div class="box_list">
                 
                   <div class="tieude">
                <h3>Hàng bán chạy</h3>
                    </div>
                    <?php
                    $sql_banchay=mysql_query("select * from HangHoa order by MSHH desc limit 2");
                    
                    ?>
                <ul class="hangbanchay">    
                <?php
                while($dong_banchay=mysql_fetch_array($sql_banchay)){
                ?>
                    <li><a href="?quanly=chitietsp&idloaisp=<?php echo $dong_banchay['LoaiHangHoa'] ?>&id=<?php echo $dong_banchay['MSHH'] ?>">
                        <img src="../admin/uploads/<?php echo $dong_banchay['HinhAnh'] ?>" width="150" height="150" />
                        <p><?php echo $dong_banchay['TenHH'] ?></p>
                        <p style="color:red;"><?php echo number_format($dong_banchay['Gia']).' '.'VNĐ' ?></p>
                    </a></li>
                    <?php
                }
                    ?>
                </ul>
                </div>
    
            </div>
            <div class="content_right">
            <?php
                if(isset($_GET['quanly'])&&($_GET['quanly'])!=''){
                    $tam= $_GET['quanly'];
                }else{
                    $tam ='';
                }if($tam == 'chitietsp'){
                    include('chitietsp.php');
                }elseif($tam == 'loaisp'){
                    include('loaisp.php');
                }elseif($tam == 'dathang'){
                    include('dathang.php');
                }elseif($tam == 'dangkymoi'){
                    include('dangkymoi.php');
                }elseif($tam == 'dangnhap'){
                    include('dangnhap.php');
                }elseif($tam == 'xulygiohang'){
                    include('xulygiohang.php');   
                }
                elseif($tam == 'doithongtin'){
                    include('thongtinkh.php');
                }elseif($tam =='sanphammm'){
                         include('chitietsp.php');
                }elseif($tam == 'ttkh'){
                          include('thongtinkh.php');
                }elseif($tam == 'chat'){
                          include('chat.php');
                }elseif($tam == 'cuatoi'){
                          include('toi.php');






                }elseif($tam == 'camon'){
                        
                
                include('chitietdathang.php');
                }elseif($tam=='vitri'){
                          echo '  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.91037130844!2d105.76507895455715!3d10.02425486884225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0883a675f746f%3A0x77e4a5b42a7ff5e0!2zRGkgxJDhu5luZyBUaMO0bmcgTWluaA!5e0!3m2!1svi!2s!4v1620028495991!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> ';
                }else{
                     $tam='aaaaa';
                }
            ?>
        


<?php
while($tam=='aaaaa'){ ?>


    <?php
    $sql_moinhat="select * from HangHoa order by MSHH desc limit 0,6";
    $row_moinhat=mysql_query($sql_moinhat);
    
?>
    <div class="tieude">Sản phẩm mới nhất</div>
                    <ul class="product">
                    <?php
                    while($dong_moinhat=mysql_fetch_array($row_moinhat)){
                    ?>
                        <li><a href="?quanly=chitietsp&idloaisp=<?php echo $dong_moinhat['MaLoaiHang'] ?>&id=<?php echo $dong_moinhat['MSHH'] ?>">
                            <img src="../admin/uploads/<?php echo $dong_moinhat['HinhAnh'] ?>" width="150" height="150" />
                            <p style="color:skyblue"><?php echo $dong_moinhat['TenHH'] ?></p>
                            <p style="color:skyblue;font-weight:bold; border:1px solid #d9d9d9; width:150px;
                            height:30px; line-height:30px;margin-left:35px;margin-bottom:5px;"><?php echo number_format($dong_moinhat['Gia']).' '.'VNĐ'?></p>
                            
                            
                        </a></li>
                      <?php
                    }
                      ?>
                    </ul>
                 <div class="clear"></div>
                 
 <?php
    $sql_loai=mysql_query("select * from LoaiHangHoa ");
    
    while($dong_loai=mysql_fetch_array($sql_loai)){
        
    echo '<div class="tieude">'.$dong_loai['TenLoaiHang'].'</div>';
    $sql_loaisp="select * from LoaiHangHoa inner join HangHoa on HangHoa.MaLoaiHang=LoaiHangHoa.MaLoaiHang where HangHoa.MaLoaiHang='".$dong_loai['MaLoaiHang']."'";
    $row=mysql_query($sql_loaisp);
    $count=mysql_num_rows($row);
    if($count>0){
    ?>
   
                 
         
                    <ul class="product">
                     <?php
            
            while($dong=mysql_fetch_array($row)){
                    
                ?>
                        <li><a href="?quanly=chitietsp&idloaisp=<?php echo $dong['MaLoaiHang'] ?>&id=<?php echo $dong['MSHH'] ?>">
                            <img src="../admin/uploads/<?php echo $dong['HinhAnh'] ?>" width="150" height="150" />
                            <p style="color:skyblue"><?php echo $dong['TenHH']?></p>
                            <p style="color:red;font-weight:bold; border:1px solid #d9d9d9; width:150px;
                            height:30px; line-height:30px;margin-left:35px;margin-bottom:5px;"><?php echo number_format($dong['Gia']).' '.'VNĐ' ?></p>
                            
                            
                        </a></li>
                        <?php
            }
    }else{
        echo '<h3 style="margin:5px;font-style:italic;color:#000">Hiện chưa có sản phẩm...</h3>';
    }
            
            
                        ?>
                    </ul>
                     <div class="clear"></div>
                <?php
    
    
    }
    
    
                ?>
          


<?php $tam = ''; } ?> </div>

<div>
    
    <table width="100%" border="1" >
        
    </style>
        <tr>


  <td
  align="left" 
     style="line-height:20px; font-size:15px;">
     <b> Gọi Mua Hàng:18001060  (7:00-22:00) </b>

    </td>
    <td
    align="left"
     style="line-height:20px; font-size:15px;">
     <b> Giới Thiệu Công Ty </b>
</td>
<td align="left"
    style="line-height:20px; font-size:15px;">
    <b> Lịch Sử Mua Hàng </b>
    </td>
</tr>
<tr>
    <td 
    align="left"
    style="line-height:20px; font-size:15px;">
    <b> Gọi Khiếu Nại:18001062  (7:00-22:00) </b>
    
    </td>
    <td align="left"
     style=" line-height:20px; font-size:15px;">
     <b> Tuyển Dụng </b>
    </td>
    <td align="left"
     style="line-height:20px; font-size:15px;">
     <b> Đăng Kí Làm Đại Lý </b>
    </td>
    <tr>
        <td align="left"
     style=" 
     ; line-height:20px; font-size:15px;">
     <b>Gọi Bảo Hành:18001064 (7:00-22:00)</b>
    </td>
        <td 
        align="left" style="
     ; line-height:20px; font-size:15px;">
      <b> Gửi Góp Ý Khiếu Nại </b>
    </td>
<td
    align="left" style="line-height:20px; font-size: 15px"> <b> Tìm Hiểu Về Mua Trả Góp </b>
</td>

</tr>
    <tr>
        <td 
        align="left" style="line-height:20px; font-size: 15px"> <b> Kĩ Thuật 18001066 (7:00-22:00) </b>
    </td>
    <td 
    align="left" style="line-height:20px; font-size: 15px"> <b> Chính Sách Bảo Hành </b>
    </td>
     <td align="left" style="line-height:20px; font-size: 15px"> <b> Chính Sách Đổi Trả </b>
    </td>
</tr>
<tr>
    <td>
        <a href="http://online.gov.vn/Home/WebDetails/20090 
        "target="_blank"> <img src="imgs/BCT.jpg" height="40" width="23%"> </a>
</td>
<td>
    </td>
    <td>
        </td>
</tr>


</table>
        
</div>
    

