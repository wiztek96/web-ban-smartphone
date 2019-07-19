<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Sản phẩm chính</title>
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
      <img src="Images/<?php echo $query['anh'];?>"alt="LOADING" width="760" height="150" ></div>
     <div id="menutop">
     <ul>
          <li><a href="Index.php">Trang Chủ   |</a></li>
          <li><a href="welcome.php">Giới Thiệu   |</a></li>
          <li><a href="home.php?page=1">Sản Phẩm   |</a></li>
          <li><a href="contact.php">Liên Hệ</a></li>
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
     <p style="text-align:center; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color:#FFF; background: url(Images/tt1.gif); padding:5px"><strong>Danh mục sản phẩm</strong></p>
          <div id="danhmucsp">
          
          <form method="post">
          <table class="table-category" >
    <?php
				$conn=mysqli_connect("localhost","root","","qldidong");
				mysqli_query($conn,"SET NAMES UTF8");
				$code=mysqli_query($conn,"select * from hangdt");
				
				while($row=mysqli_fetch_row($code))
				{
					echo"<tr align='left'>
							<th style='color:blue'>
							<a href=\"danhmucsp.php?id=".$row[0]."\" >
							 &nbsp;<img src=\"Images/check.jpg\" style=\"width:10px;height:10px\" /> ".$row[1]."</a>
						 </tr>
						";
				}
			  
			  echo '<tr> <td>&nbsp;<img src="Images/check.jpg" style="width:10px;height:10px" /><a href="baohanh.php"> Dịch vụ bảo hành</a></td></tr>';
				echo" </table></form>";
			 
				?>
        
            </div>
<p style="text-align:center; color:#FFF;font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; background: url(Images/Back_title_menu_left.png); font-size:17px ; padding:10px;">          
<strong>Sản phẩm nổi bật</strong></p> 
       <p style="padding:10px; magrin:10px;"><img src="Images/iphone4.jpg" width="127" height="127" ></p>
       <p style="padding:10px; magrin:10px;"><img src="Images/Nk1.jpg" width="127" height="127"></p>

	</div>
  <div id="right">
   <!-- code content -->
     <ul>
    	
        <?php 
			$query = mysqli_query($conn, "select * from sanpham where idsanpham=". $_GET["id"]."");
			while($sp = mysqli_fetch_assoc($query)){
		?>
        <li>
        	<p style="box-shadow: 4px 4px 8px black;
	margin:5px;"><img src="Images/<?php echo $sp['idhang'] ?>" style="width:127px; height:127px;" /></p>
			<p style="padding: 3px"><?php echo $sp['tensanpham'] ?></p>
            <p style=" color: blue;font-family: Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif" >Giá: <?php echo $sp['gia'] ?> VNĐ</p>
        </li>
        <?php } ?>
    </ul> 
     
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