<?php
	$sql="select * from HangHoa where MSHH='$_GET[id]'";
	$num=mysql_query($sql);
	$dong=mysql_fetch_array($num);
?>
	<div class="tieude">Chi tiết sản phẩm</div>
   
                	<div class="box_chitietsp">
                    	<div class="box_hinhanh">
                        	<img src="../admin/uploads/<?php echo $dong['HinhAnh'] ?>" data-zoom-image="imgs/op-lung-sony-z3-pelosi-50.jpg"  width="200" height="200" />
                      
                            
                        </div>
                        <div class="box_info">
                         <form action="update_cart.php?id=<?php echo $dong['MSHH'] ?>" method="post" onsubmit="return kiemtrasoluong()" enctype="multipart/form-data">
                        	<p>
                            	<strong>Tên sản phẫm: </strong><em style="color:red"><?php echo $dong['TenHH'] ?></em></p>

                          <p>
                              <strong>Mã sản phẩm:</strong>  <em style="color:red">  <?php echo $dong['MSHH'] ?> </em></p>

                          <p>
                              <strong>Giá bán:</strong> <span style="color:red;"> <?php echo number_format($dong['Gia']).' '.'VNĐ'?></span></p> 

                          <p>
                              <strong> Tình trạng:</strong><em style="color:red"> Còn hàng </em></p> 
                                          
                           <p>
                              <strong>Số lượng:</strong><input type="text" name="soluong" id="soluong" size="3" value="1" /></p>
                            
                            <input type="submit" name="add_to_cart" value="Mua hàng" onclick="kiemtrasoluong()" style="margin:10px;width:100px;height:40px;background:#87CEFA;color:#000;font-size:18px;border-radius:8px;" />
                                             
                           </form>              
                                       
                           
                        </div><!-- Ket thuc box box_info -->
                    
                    </div><!-- Ket thuc box chitiet sp -->

  <script>
      var error = document.getElementById("error"); 
    function kiemtrasoluong(){
      var sl = document.getElementById("soluong").value;
  
      if( sl.trim()===""  ){
        alert('Dữ liệu không được để  trống'); return false
      }   
      if((/\D/.test(sl))){
        alert('Số lượng là số nguyên!');
        return false;     
      }     
      if(sl>100){alert('Không đủ hàng hóa'); return false;}
    return true;
    }
  </script>

     		
                      <div class="tabs_panel">
                     
                        <?php
          $sql_thongtinsp=mysql_query("select * from binhluan where MSHH='$_GET[id]'");
          $count_thongtinsp=mysql_num_rows($sql_thongtinsp);
          
          $dong_thongtinsp=mysql_fetch_array($sql_thongtinsp);
          
        ?>
<div id="wrapperr"  >
  <div id="menuu">  <p class="welcomee"> <b>Bình luận của khách hàng</b></p>
        <div style="clear:both"></div>
    </div>
     
    <div id="chatboxx">
         <?php
      $sql="select * from binhluan where MSHH='".$dong['MSHH']."'";
      $row=mysql_query($sql);
      while($dongg=mysql_fetch_array($row)){
        
      echo '<table>'; 
      echo'<tr>';
     
      echo'<td>- '.$dongg['NOIDUNG'].' </div></td> <hr>' ;
     
     echo '</tr>';
 
   
  echo'</table>';

  }
  
  ?>
    </div>
     
    <form name="messageee" method="POST" action=""   enctype="multipart/form-data">
        <input name="usermsggg" type="text" id="usermsggg" size="63" />
        <input name="submitmsggg" type="submit"  id="submitmsggg" value="Send" />
    </form>
</div> 

              
                          
                    </div>
                   <?php
            $sql_lienquan="select * from HangHoa where MaLoaiHang='$_GET[idloaisp]' and HangHoa.MSHH<>$_GET[id] ";
          $row_lienquan=mysql_query($sql_lienquan);
          $count_lienquan=mysql_num_rows($row_lienquan);
          if($count_lienquan>0){
           ?>
                    <div class="sanphamlienquan">
                    <div class="tieude">Sản phẩm liên quan</div>
                      <ul>
                        <?php
            
            while($dong_lienquan=mysql_fetch_array($row_lienquan)){
            ?>
                             <li><a href="?quanly=chitietsp&idloaisp=<?php echo $dong_lienquan['MaLoaiHang'] ?>&id=<?php echo $dong_lienquan['MSHH'] ?>">
                          <img src="../admin/uploads/<?php echo $dong_lienquan['HinhAnh'] ?>" width="150" height="150" />
                            <p>Tên sp : <?php echo $dong_lienquan['TenHH'] ?></p>
                            <p style="color:red;">Giá : <?php echo number_format($dong_lienquan['Gia']).' '.'VNĐ' ?></p>
                            
                          
                        </a></li>
                        <?php
            }
          ?>
                        </ul>
                    </div><!-- Ket thuc box sp liên quan -->
            <?php
          }else{
            echo'<div class="tieude">Sản phẩm liên quan</div>';
            echo '<p style="padding:30px;">Hiện chưa có thêm sản phẩm nào</p>';
          }
      ?>
            <div class="clear"></div>
          
          


  <?php
  @session_start();
    if(isset($_POST['submitmsggg'])){ 
  
    $maloai=("select STT from binhluan where MSHH='$_GET[id]' ORDER BY STT DESC LIMIT 1");
    $maloaii=mysql_query($maloai); 
    $maloaiii=mysql_fetch_array($maloaii); 
    $iii=$maloaiii['STT']+1;
    $ma=$_GET['id'];
    $noidung=$_POST['usermsggg']; 
    $stt=$iii;
    $sql_dangkyy=mysql_query("insert into binhluan (MSHH,STT,NOIDUNG) value('$ma','$iii','$noidung')"); ?>
    <?php

  }
?>

