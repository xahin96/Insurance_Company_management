<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
     header("location:index.php");
    }




    if(isset($_POST['adduser'])){

    header("location:adduser.php");

    }
    elseif(isset($_POST['lockuser'])){

    header("location:lockuser.php");

    }
    elseif(isset($_POST['delete'])){

   header("location:deleteuser.php");

    }
    elseif
    (isset($_POST['unlockuser'])){

    header("location:unlockuser.php");

    }

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Insurance company</title>
<?php require 'style.php';
       require 'header.php';?>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%">&nbsp;</td>
    <td width="766" valign="top">
	<table width="800" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td colspan="2" class="top" height="69" valign="top">
	  </tr>
	  <tr>
		<td valign="top" width="311" class="m1bg">
		<div class="left"><img src="image/c1.jpg" alt="" style="padding-bottom:11px; " /><br /><div id="content"></div>
						<img src="image/c2.jpg" alt="" /><br />
						<img src="image/c3.jpg" alt="" style="padding-top:10px; " /></div></td>
		<td valign="top" width="455" class="m2bg">
			<table width="438" border="0" cellspacing="0" cellpadding="0" style="margin-top:30px; ">
			  <tr>

			  </tr>
			</table><br />
			<table width="438" border="0" cellspacing="0" cellpadding="0">
			<form id="login" name="login" method="post" action="admin.php">
			  <tr>
				<input class="myButton" id="submit" name="adduser" type="submit" value="New User" />
				<input class="myButton" id="submit" name="lockuser" type="submit" value="Locking User" /><br /><br />
				<input class="myButton" id="submit" name="unlockuser" type="submit" value="Unlocking User" />
				<input class="myButton" id="submit" name="delete" type="submit" value="Delete User" />

			  </tr>
			  <tr>
			  <td colspan="2" height="4"></td>
			  </tr>
			  <tr>

			  </tr>
			</form></table>
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
