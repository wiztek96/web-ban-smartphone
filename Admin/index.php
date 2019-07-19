<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng nhập</title>
</head>

<body>
<div id="center">
<br /><br /><br /><br /><br /><br /><br /><br />

<form method="post">
         <table width="360" height="160"  align="center" bgcolor="#13F701" style="margin-top: 20px; color:#000000; font-weight: bold;">
         <tr align="center">
         	<td height="59" colspan="2"><h1>ĐĂNG NHẬP</h1></td>
         </tr>
   		<tr>
            <td width="299" height="48" align="center"> <a>Tài khoản : </a><input name="txtten" type="text" id="txtten" autofocus="autofocus" required="required"/></td>
        </tr>
        <tr>
                <td height="60" align="center"><a>Mật khẩu  : </a><input name="txtmk" type="password" id="txtmk" required="required" autocomplete="off"/></td>
              
        </tr>
        <tr align="center">
        	<td height="52"><input type="submit" name="ok" value="Đăng nhập" />  
       	    <input type="reset" name="clear" value="Nhập lại" /></td>
            <td width="1">&nbsp;</td>
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
		if(isset($_POST['ok']))
		{
			$username=$_POST['txtten'];
			$password=$_POST['txtmk'];
			$username = stripslashes($username);
			$password = stripslashes($password);
			
 $sql="select * from admin where username='$username' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
			if($count==1){
	
	session_start();			
	$_SESSION["username"] = true;
   header("location:admin.php");
}
else {
echo "<script>alert('Tên tài khoản hoặc mật khẩu sai. Mời bạn nhập lại!');</script>";
}
		}
	}
  ?>
    
</div>
</body>
</html>