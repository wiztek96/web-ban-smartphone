<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Thông tin liên hệ</title>
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+'phải nhập địa chỉ email.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='-  sdt phải là số .\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' bắt buộc phải nhập.\n'; }
    } if (errors) alert('bạn phải thực hiện các yêu cầu:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
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
  
   <div id="centerlh" onfocus="MM_validateForm('hoten','','R','email','','RisEmail','sdt','','RisNum','mota','','R');return document.MM_returnValue">
   <form method="post">
         <table  bgcolor="#990000" style="margin-top:20px; color:white; width: 560px;font-size: 18px;">
         	<tr>
            	<th colspan="2"><h1>Thông tin liên hệ</h1></th>
			   
            </tr>
             <tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</tr>
              <tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</tr>
               <tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</tr>
              <tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</tr>
               <tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</tr>
              <tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</tr>
            <tr align="left">
            	<td>Họ và tên: </td>
       			<td><input name="hoten" type="text" id="hoten"  placeholder="Nhập họ tên"/>(*)</td>
                
            </tr>
         	<tr align="left">
            	<td>Email: </td>
                <td><input name="email" type="text" id="email"  placeholder="Nhập Email"/>(*)</td>	
            </tr>
            <tr align="left">
            	<td>Số điện thoại: </td>
                <td><input name="dienthoai" type="text" id="dienthoai"  /></td>
            </tr>
            <tr align="left">
            	<td>Thông tin liên hệ: </td>
                <td><textarea name="thongtinlh" cols="60" rows="6" id="thongtinlh" placeholder="Nhập thông tin liên hệ"></textarea> </td>
            </tr>
            <tr align="left">
            	<td></td>
            	<td>
                    <input type="submit" name="btnthemmoi" onclick="MM_validateForm('hoten','','R','email','','RisEmail','dienthoai','','RisNum','thongtinlh','','R');return document.MM_returnValue" value="Thêm mới"/> 
                    <input type="reset" name="btnnhaplai" value="Nhập lại"/>
                </td>
                
            </tr>
            
           
         </table>
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
		if(isset($_POST['btnthemmoi']))
		{
			$sql="insert into lienhe  values(N'".$_POST['hoten']."',N'".$_POST['email']."','".$_POST['dienthoai']."',N'".$_POST['thongtinlh']."')";
			mysqli_query($conn,$sql);
			echo "Thêm thành công!"; 
		}
	}
	 
	
        ?>     
   </div>

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