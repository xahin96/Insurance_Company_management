<?php
session_start();
require 'config.php';
require 'style.php';

if(isset($_POST['login'])){

$admin_username=$_POST['txtName'];
$admin_password=$_POST['txtPassword'];

$admin_username = stripslashes($admin_username);
$admin_password = stripslashes($admin_password);
//$admin_username = mysql_real_escape_string($admin_username);
//$admin_password = mysql_real_escape_string($admin_password);
$stid=oci_parse($conn,"SELECT * FROM USERS where ALLOW=1");
oci_execute($stid);


while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {

    $pass=$row['PASSWORD'];
    $type=$row['TYPE'];
    $name=$row['NAME'];
    $username=$row['USERNAME'];

    if($admin_username==$username and $admin_password==$pass){
     if($type==1){
 $_SESSION['username']=$username;
     $_SESSION['types']=$type;
 header("location:admin.php");}

 else if ($type==2)
 {
  $_SESSION['types']=$type;
 $_SESSION['username']=$username;
 header("location:supervisor.php");
 }
else if ($type==3)
 {
 $_SESSION['types']=$type;
 $_SESSION['username']=$username;
 header("location:Secretary.php");
 }

}


       // break;

}
echo "<center><h1 style=#55555>Wrong Username or Password</h1></center>";



}



?>
<br />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link rel="shortcut icon" href="image/icon.ico" />
<?php require 'style.php';?>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%">&nbsp;</td>
    <td width="766" valign="top">
	<table width="766" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td colspan="2" class="top" height="69" valign="top">
		<div class="menu"><img src="image/q1.jpg" alt="" align="middle" /><a href="index.php">Home Page</a><img src="image/q1.jpg" alt="" align="middle" /><a href="aboutus.php">About Us</a></div></td>
	  </tr>
	  <tr>
		<td valign="top" width="311" class="m1bg">
		<div class="left"><img src="image/c1.jpg" alt="" style="padding-bottom:11px; " /><br /><div id="content"></div>
						<img src="image/c2.jpg" alt="" /><br />
						<img src="image/c3.jpg" alt="" style="padding-top:10px; " /></div></td>
		<td valign="top" width="455" class="m2bg">

			<table width="438" border="0" cellspacing="0" cellpadding="0">
			 <form id="login" name="login" method="post" action="login.php">
	    <h1>Log In</h1>
	<fieldset id="inputs">
    	<input id="username" type="text" name="txtName" placeholder="Username" autofocus="autofocus" required="required" />
		<input id="password" type="password" name="txtPassword" placeholder="Password" autofocus="autofocus" required="required" /></br>

    </fieldset>
    <fieldset id="actions">
        <input id="submit" name="login" type="submit" value="Log In" />
    </fieldset>
</form>
			</table>
		</td>
	  </tr>

	  <tr>
		<td colspan="2" height="268" valign="top" class="bottom">
		<div style="padding:13px 0 0 50px; width:250px;"><div style="padding-left:110px;"><br /></div></div>
		<div class="copy">&copy; 2018 | <a href="#">Privacy Policy</a><br />

</div></td>
	  </tr>
	</table>
	</td>
    <td width="50%">&nbsp;</td>
  </tr>
</table>
</body>
</html>