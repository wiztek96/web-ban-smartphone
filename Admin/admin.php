<?php
session_start();
if(empty($_SESSION['username'])){
header("location: index.php");
die();
}
?>
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
     <img src="../Images/Banner_smart_mobi.gif" width="760" height="150" ></div>
     <div id="menutop">
     <ul>
          <li><a href="../index.php">Trang Chủ   |</a></li>
          <li><a href="../welcome.php">Giới Thiệu   |</a></li>
          <li><a href="../home.php?page=1">Sản Phẩm   |</a></li>
          <li><a href="../contact.php">Liên Hệ</a></li>
       </ul>
     </div>
     <div id="chao">
  <p><strong><marquee direction="right">Chào mừng bạn đến với Công ty điện tử ITPlus</marquee></strong></p></div>
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