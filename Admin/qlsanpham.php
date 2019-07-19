<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<title>Quản trị ITPlus</title>
</head>

<body>
<div id="wrapper">
     <div id="banner">
     <?php 
	$conn=mysqli_connect("localhost","root","","qldidong");
	mysqli_query($conn,"SET NAMES UTF8");
	if(!$conn)
	{
		echo"Lỗi kết nối SQL";	
	}
	else
	{
		 $sql="select * from banner";
    $result=mysqli_query($conn,$sql);
	$query=mysqli_fetch_array($result);
	}
	?>
     <img src="../Images/<?php echo $query['anh'];?>"alt="LOADING" width="760" height="150" >
     </div>
     <div id="menutop">
     <ul>
          <li><a href="../Index.php">Trang Chủ   |</a></li>
          <li><a href="../welcome.php">Giới Thiệu   |</a></li>
          <li><a href="../home.php?page=1">Sản Phẩm   |</a></li>
          <li><a href="../contact.php">Liên Hệ</a></li>
       </ul>
     </div>
     <div id="chao">
 <?php 
	$conn=mysqli_connect("localhost","root","","qldidong");
	mysqli_query($conn,"SET NAMES UTF8");
	if(!$conn)
	{
		echo"Lỗi kết nối SQL";	
	}
	else
	{
		 $sql="select * from chu";
    $result=mysqli_query($conn,$sql);
	$query=mysqli_fetch_array($result);
	}
	?>
  <p><strong><marquee direction="right"><?php echo $query['text'];?></marquee></strong></p>
    </div>
     <div id="left">
     <p style="text-align:center; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:#FFF; background: url(../Images/tt1.gif); padding:5px"><strong>Danh mục quản trị</strong></p>
          <div id="danhmucsp">
<ul>
        <li><a href="configbanner.php">Banner</a></li>
        <li><a href="configchay.php">Dòng chữ chạy</a></li>
        <li><a href="qlsanpham.php">Quản lý sản phẩm</a></li>
        <li><a href="configlh.php">Liên hệ</a></li>
        <li><a href="configgt.php">Giới thiệu</a></li>
        <li><a href="configfo.php">Footer</a></li>
</ul>
          </div>
     
  </div>
  <div id="right">
   <!-- code content -->
   
   <form action="" method="POST">
			
					<p style="margin: 30px" align="center">Tên điện thoại :
					<input type="text" name="product_name" id="product_name" placeholder="Nhập tên điện thoại" size="52px" required>
					</p>
				
					<p align="center">Loại điện thoại :
					<select name="category" id="category">
						<option label="Samsung">1</option>
						<option label="Iphone">2</option>
						<option label="Nokia">3</option>
					</select>
					</p>
					<p align="center" style="margin: 36px">Giá :
					<input type="text" name="qty" id="qty" placeholder="Nhập giá tiền" required>
					</p>
					<p style="padding: 30px" >
					<textarea name="content" id="content" cols="70" rows="8" placeholder="Nhập mô tả"></textarea>
				    </p>
		
					<p align="center">Hình sản phẩm :
					<input type="file" name="image" id="image">
				    </p>
					<p style="margin: 30px " align="center">
					<button type="submit" name="btnok" id="insert_product">Thêm mới</button>&nbsp;&nbsp;&nbsp;
					<button type="reset" name="reset" id="reset">Nhập lại</button>
					</p>
			</form>
			<?php
			$conn=mysqli_connect("localhost","root","","qldidong");
		mysqli_query($conn,"SET NAMES UTF8");
		if(!$conn)
		{
			echo"Lỗi kết nối SQL";	
		}
		else
		{
		if(isset($_POST['btnok']))
		{
			$sql="insert into sanpham values ('".$_POST['category']."','".$_POST['product_name']."','".$_POST['qty']."','".$_POST['content']."','".$_POST['image']."')";
			mysqli_query($conn,$sql);
			header("location:../home.php?page=1");
		}
		}
	  ?>
	</div>
     <div id="footer">
     	<?php 
	$conn=mysqli_connect("localhost","root","","qldidong");
	mysqli_query($conn,"SET NAMES UTF8");
	if(!$conn)
	{
		echo"Lỗi kết nối SQL";	
	}
	else
	{
		 $sql="select * from footer";
    $result=mysqli_query($conn,$sql);
	$query=mysqli_fetch_array($result);
	}
	?>
    	<p><?php echo $query['tencty'];?></p>
        <p>Add: <?php echo $query['diachi'];?></p>	
        <p>Website: <?php echo $query['web'];?>; Email: <?php echo $query['email'];?></p>
     </div>
</div>
</body>
</html>