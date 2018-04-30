<?php
 $id=$_GET['id'];
require 'config.php';
require 'style.php';
 if(isset($_POST['add'])){
      $accno=$_POST['accno'];
      $Witnessid=$_POST['Witnessid'];
       $sql="insert into WITNESACCIDENT (ACCNO,WID)VALUES
($accno,$Witnessid)";
$result=oci_parse($conn,$sql);
oci_execute($result);

    }

?>
<br />
<link rel="stylesheet" href="css/jquery-ui.css">
  <script src="css/jquery-1.9.1.js"></script>
  <script src="css/jquery-ui.js"></script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Witness</title>
<link rel="shortcut icon" href="image/icon.ico" />
<?php
require 'style.php';
require 'header.php';
?>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%">&nbsp;</td>
    <td width="766" valign="top">
	<table width="766" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td colspan="2" class="top" height="69" valign="top">
		<div class="menu"><img src="images/q1.jpg" alt="" align="middle" /><a href="logout.php">Logout</a><img src="images/q1.jpg" alt="" align="middle" /><a href="add.php">Back</a><img src="images/q1.jpg" alt="" align="middle" /><a href="supervisor.php">Main</a></div></td>
	  </tr>
	  <tr>

		<td valign="top" width="455" class="m2bg">

			<table width="438" border="0" cellspacing="0" cellpadding="0">
			 <form  method="post" action="">
	    <h1>Add Witness</h1>

	<fieldset id="inputs">
	Accident Number <br>
	   <select name="accno">

		<?php
		  $stid=oci_parse($conn,"SELECT PID,NAME,AccNo,OWNERID from person ,accident WHERE PID=OWNERID and ACCNO=$id");
          oci_execute($stid);
		while (($row = oci_fetch_assoc($stid)) != false) {
	        $accno=$row['ACCNO'];
            $name=$row['NAME'];
            $PID=$row['PID'];
          echo "<option value='$accno'>AccNo is:$accno | Owner is: $name having ID:$PID</option>";          	}


//}

		 ?>
                               </select></fieldset>

    <fieldset>
	Witness ID <font size="3" color="red">"If ID Not Exist Click On Add Persons Above"</font><br>
	   <select name="Witnessid">

		<?php
		  $stid=oci_parse($conn,"SELECT PID,NAME from person");
      oci_execute($stid);
		while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
	$id=$row['PID'];
    $name=$row['NAME'];
  	echo "<option value='$id'>$id $name</option>";

}

		 ?>
                               </select></fieldset> <br>

                               </fieldset><fieldset id="actions">
        <input class="myButton" name="add" type="submit" value="Add Witness" />
    </fieldset>
</form>
			</table>
		</td>
	  </tr>

	  <tr>
		<td colspan="2" height="268" valign="top" class="bottom">
		<div style="padding:13px 0 0 50px; width:250px;"><div style="padding-left:110px;"><br /></div></div>
		<div class="copy">&copy; 2014 | <a href="#">Privacy Policy</a><br />

</div></td>
	  </tr>
	</table>
	</td>
    <td width="50%">&nbsp;</td>
  </tr>
</table>
</body>
</html>