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
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' không được bỏ trống.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
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
     <img src="../Images/<?php echo $query['anh'];?>"alt="LOADING" width="760" height="150" >
	</div>
     <div id="menutop">
     <ul>
          <li><a href="../index.php">Trang Chủ   |</a></li>
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
  <p><strong><marquee direction="right"><?php echo $query['text'];?></marquee></strong></p></div>
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
     <tr align="center">
   <form method="post" enctype="multipart/form-data">
   <table bgcolor="#990000" style="margin-top:20px; color:white;">
            	<tr>
					<p style="padding: 30px;font-size: 18px;"><center><th colspan="2">Thông tin cần update</th></center></p>
            
            </tr>              	
              <td width="189" height="41">Nhập chữ chạy</td>
               <td width="498"><input name="chu" type="text" id="chu" size="60"  placeholder="Nhập chữ cần chạy "/></td>
            
                </textarea> </td>
                
                <tr align="center" >
              <td height="38" valign="middle"> 
               <center> <input name="btnok" type="submit" onClick="MM_validateForm('chu','','R');return document.MM_returnValue" value="Thay"/> 
              </td>
               </table>
      </form>
            </tr>
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
			$sql="update chu set text='".$_POST['chu']."' where id =1";
			mysqli_query($conn,$sql);
			header("location:configchay.php");
		}
		}
	
			?>
	</div>
    
    <!-- end content -->
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