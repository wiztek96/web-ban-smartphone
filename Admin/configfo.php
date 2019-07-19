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
   <tr align="center">
   <form method="post" enctype="multipart/form-data">
   <table width="590" height="auto"    bgcolor="#990000" style="margin-top:20px; color:white;">
            	<tr>
            	<th colspan="2">Thông tin cần update</th>
            
            </tr>
     			
                	<tr align="left">
            	<td width="98" height="41">Tên công ty:</td>
                <td width="480"><input name="txttencty" type="text" id="txttencty" alt="tên công ty" size="50"  placeholder="Nhập tên công ty"/></td>
            </tr>      
                <tr align="left">
                      <td height="41">Địa chỉ: </td>
                      <td><input name="txtad" type="text" id="txtad" size="60"  placeholder="Nhập địa chỉ "/></td>
          </tr>
                <tr align="left">
                      <td height="41">Website:</td>
                      <td><input name="txtweb" type="text" id="txtweb" size="50"  placeholder="Nhập Website bán hàng "/></td>
          </tr>
              <tr align="left">
            	<td height="38">Email: </td>
                <td><input name="txtemail" type="text" id="txtemail" size="50"  placeholder="Nhập Email công ty "/></td>
          </tr>
            
              <tr align="left" >
              <td> </td>
              <td height="38" valign="middle">
                <input name="btnok" type="submit" onClick="MM_validateForm('txttencty','','R','txtad','','R','txtweb','','R','txtemail','','RisEmail');return document.MM_returnValue" value="<Sửa>"/> 
              </td>
               
        </table>
      </form>
           <a href=
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
			$sql="update footer set tencty='".$_POST['txttencty']."',diachi='".$_POST['txtad']."',web='".$_POST['txtweb']."',email='".$_POST['txtemail']."'where id=1";
			mysqli_query($conn,$sql);
				
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