
     <?php
  @session_start();
  
  if(isset($_SESSION['dangnhap' ])){

      echo '<div class="tieude">Đơn hàng của bạn</div>'; 
     $sqll="select * from ChiTietDatHang where SoDonDH='".$_SESSION['dangnhap']."'";
      $roww=mysql_query($sqll);
  ?>
  <?php
      while($dongg=mysql_fetch_array($roww)){  ?>
    <?php 
      $sqllll="select * from HangHoa where MSHH='".$dongg['MSHH']."'";
      $rowww=mysql_query($sqllll);
      $donggggg=mysql_fetch_array($rowww); 
      ?>        
                    
                <div>            <p><b> <?php echo $donggggg['TenHH'] ?></b></p> 
                            <p>Số lượng: <?php echo $dongg['SoLuong'] ?></p>
                            
                           </br>
                  </div>      

 <?php }     ?>
 <?php
      $sql="select * from DatHang where SoDonDH='".$_SESSION['dangnhap']."'";
      $row=mysql_query($sql);
      $dong=mysql_fetch_array($row);
       echo '  <table width="100%" border="1" style="border-collapse:collapse; margin:5px; text-align:center;">';
      echo'<tr>';
      echo'<td>Ngày đặt hàng: '.$dong['NgayDH'].'</td>';
      echo'<td>Ngày giao hàng dự kiến: '.$dong['NgayGH'].'</td>';
     echo '</tr>';
      
      
  echo'</table>';
  }
  
  ?>
  

  
  
 <form method="POST" action=""   enctype="multipart/form-data">
    <button type="submit"  name="xoadon">Click 2 lần để xóa đơn.</button>
  </form>

  <?php
      echo '
<p><a href="index.php" style="color:red; text-decoration:none; font-size:18px;margin:5px;">Tiếp tục mua hàng</a></p>';
  ?>

    <?php
  if(isset($_POST['xoadon'])){
    $aaa=$_SESSION['dangnhap'];
    $xoadonn=mysql_query("delete  from ChiTietDatHang where SoDonDH='$aaa'");
     $xoadonnn=mysql_query("delete  from DatHang where SoDonDH='$aaa'");

        

  } 
?>