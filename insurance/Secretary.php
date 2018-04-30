<?php
    session_start();
    echo"<title>Secretary</title>";
    require 'header.php';
    if(!isset($_SESSION['username']))
    {
     header("location:index.php");
    }

    if(isset($_POST['list'])){

    header("location:date.php");

    }

    elseif(isset($_POST['owner'])){

   header("location:owner.php");

    }
     elseif(isset($_POST['location'])){

   header("location:location.php");

    }
     elseif(isset($_POST['road'])){

   header("location:road.php");

    }
     elseif(isset($_POST['weather'])){

   header("location:weather.php");

    }

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<?php require 'style.php';?>
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
			<form id="login" name="login" method="post" >
			  <tr>

				<input class="myButton" id="submit" name="list" type="submit" value="List of reports from date to date" /><br /><br />
				<input class="myButton" id="submit" name="owner" type="submit" value="List of reports for one car owner" /><br /><br />
				<input id="submit" name="location" type="submit" value="Add New Location" /><br />
				<input  id="submit" name="road" type="submit" value="Add New Road Condition" /><br />
				<input  id="submit" name="weather" type="submit" value="Add New Weather Condition" />
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
