<?php
session_start();
require 'config.php';
require 'header.php';
if(isset($_SESSION['username']))
      {

        $username=$_SESSION['username'];
      	$stid=oci_parse($conn,"SELECT * FROM USERS where ALLOW=1 and USERNAME='$username'");
        oci_execute($stid);


while (($row = oci_fetch_assoc($stid)) != false) {
           $type=$row['TYPE'];

           	if($type==2)
      	{
          $path="supervisor.php";
      	}
      	elseif ($type==3)
      	{
           $path="Secretary.php";
      	}

      	}


      	}
    else
header("Location: index.php");
require 'config.php';
require 'style.php';


if(isset($_POST['search'])){	$date1=$_POST['date1'];
	$date2=$_POST['date2'];
	$_SESSION['date1']=$date1;
	$_SESSION['date2']=$date2;
	header("location:date2date.php");

}



?>
<br />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Date</title>
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
	  </tr>
	  <tr>

		<td valign="top" width="455" class="m2bg">

			<table width="438" border="0" cellspacing="0" cellpadding="0">
			 <form id="login" name="login" method="post" action="">
	    <h1>Select Accidents </h1>
	<fieldset id="inputs" class="myButton">
    	</br><fieldset class="myButton"> date1 </br><textarea name="date1"  /></textarea></fieldset></br>
    </fieldset> <h3>BETWEEN</h3>
    <fieldset id="inputs" class="myButton">
         </br><fieldset class="myButton"> date2 </br><textarea name="date2"  /></textarea></fieldset></br>
   </fieldset><br><br> <fieldset id="actions">
        <input id="submit" name="search" type="submit" value="Search" />
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