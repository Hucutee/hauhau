		<?php
	$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='webb';
	$conn=mysql_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Không kết nối được');
	mysql_select_db($csdl,$conn);
?>
<?php
	session_start();
	
	
	//
	if(isset($_GET['thoat'])&&$_GET['thoat']==1){
		unset($_SESSION['dangnhap']);
		header('location:index.php?quanly=dathang');
	}
	//tru sp
	if(isset($_GET['tru'])){
		$id=$_GET['tru'];
		foreach($_SESSION['product'] as $cart_item){
			if($id!=$cart_item['id']){
				
				$product[]=array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']);
				$_SESSION['product']=$product;
			}else{
				$giam=$cart_item['soluong']-1;
				if($cart_item['soluong']>1){
				$product[]=array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$giam,'gia'=>$cart_item['gia']);
				
				}else{
					$giam=1;
					$product[]=array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$giam,'gia'=>$cart_item['gia']);
				}
				$_SESSION['product']=$product;
			}

			header('location:index.php?quanly=dathang');
		}
		
	}
	//cong them sp
	if(isset($_GET['cong'])){
		 $cart_det=mysql_query("insert into ChiTietDatHang (SoDonDH,MSHH,SoLuong,GiaDatHang,GiamGia) values(5,4,4,4,0)");
		$id=$_GET['cong'];
		foreach($_SESSION['product'] as $cart_item){
		
			if($id!=$cart_item['id']){
				
				$product[]=array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']);
				$_SESSION['product']=$product;
			}else{
				$tang=$cart_item['soluong']+1;
				if($cart_item['soluong']<9){
				
				$product[]=array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$tang,'gia'=>$cart_item['gia']);
				
			}else{
				
				$product[]=array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']);
			}
			$_SESSION['product']=$product;
			}
			
			header('location:index.php?quanly=dathang');
		}
		
	}
	//xoa san pham
	if(isset($_SESSION['product'])&&isset($_GET['xoa'])){
		$id=$_GET['xoa'];
		foreach($_SESSION['product'] as $cart_item){
			if($cart_item['id']!= $id){
				$product[]=array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']);
			}
		$_SESSION['product']=$product;
		header('location:index.php?quanly=dathang');
		}
	}
	//xoa toan bo giohang
	if(isset($_GET['xoatoanbo'])&&$_GET['xoatoanbo']==1){
		session_destroy();
		header('location:index.php?quanly=dathang');
	}
	//them giohang
	if(isset($_POST['add_to_cart'])){
		$id=$_GET['id'];
		$soluong=$_POST['soluong'];
		$sql="select * from HangHoa where MSHH='$id' limit 1";
		$row=mysql_query($sql);
		$dong=mysql_fetch_array($row);
		if($dong){
			$new_product=array(array('tensp'=>$dong['TenHH'],'id'=>$id,'soluong'=>$soluong,'gia'=>$dong['Gia']));
			if(isset($_SESSION['product'])){
				$found=false;
				foreach($_SESSION['product'] as $cart_item){
					if($cart_item['id'] == $id){
						$product[]=array('tensp'=>$cart_item['TenHH'],'id'=>$cart_item['id'],'soluong'=>$soluong,'gia'=>$cart_item['Gia']);
						$found=true;
					}else{
						$product[]=array('tensp'=>$cart_item['TenHH'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['Gia']);
					}
					
				}if($found==false){
					$_SESSION['product']=array_merge($product,$new_product);
				}else{
					$_SESSION['product']=$product;
				}
			}else{
				$_SESSION['product']=$new_product;
			}
		}
		header('location:index.php?quanly=dathang');
	}
?>

