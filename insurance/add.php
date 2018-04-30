<?php
session_start();
require 'config.php';
    if(isset($_SESSION['username']))
      {
        $username=$_SESSION['username'];
      	$stid=oci_parse($conn,"SELECT * FROM USERS where ALLOW=1 and USERNAME='$username'");
        oci_execute($stid);


while (($row = oci_fetch_assoc($stid)) != false) {
           $type=$row['TYPE'];
         if ($type == 3 )
         {
         header("Location: login.php");
         }
      	}
      	}
    else
header("Location: login.php");

require 'style.php'; ?>
 <script>

            function validation()
            {

                var check1=document.forms['addnew']['driverid'].value;
                var check2=document.forms['addnew']['othdriverid'].value;
                if (check1 == check2)
                    {
                    var r = confirm("Driver Id  identical with Other Driver ID");
                    if (r == true) {
                    return true;
                     } else {
                 return false;
                        }


                }

                return true;
            }



        </script>

     <?php
         require 'header.php';
$stid=oci_parse($conn,"SELECT PID,NAME from person");
oci_execute($stid);


?>
<br />
<link rel="stylesheet" href="css/jquery-ui.css">
  <script src="css/jquery-1.9.1.js"></script>
  <script src="css/jquery-ui.js"></script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Accident</title>
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

			<table  width="438" border="0" cellspacing="0" cellpadding="0">
			 <form    id="addnew" method="post" action="add_handler.php" enctype="multipart/form-data">
	    <h1>New Accident</h1>
		
	</br><fieldset class="myButton"> date </br><textarea name="date"  /></textarea></fieldset></br>

	   	Fillup the form below </br></fieldset></br>
		
		</br><fieldset class="myButton">Owenr ID <font size="3" color="red">"If ID Not Exist Click On Add Persons Above"</font></br>
		<select required name="ownerid">
		<?php
		while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
	$id=$row['PID'];
	$name=$row['NAME'];
  	echo "<option value='$id'>$name</option>";

}
$stid=oci_parse($conn,"SELECT PID,NAME from person");
      oci_execute($stid);
      ;
		 ?>
		</select></fieldset></br>
        </br><fieldset class="myButton">Driver ID <font size="3" color="red">"If ID Not Exist Click On Add Persons Above"</font></br>
        <select name="driverid">
		<?php
		while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
	$id=$row['PID'];
    $name=$row['NAME'];
  	echo "<option value='$id'>$name</option>";

}

		 ?>
		</select></fieldset></br>
        </br><fieldset class="myButton">My Plate Number <font size="3" color="red">"If Plate Number Not Exist Click On Add Cars Above"</font></br> <select name="myplatno">
         <option value="NULL">NULL</option>
		<?php
		$stid=oci_parse($conn,"SELECT PLATENO from car");
      oci_execute($stid);
		while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
	$id=$row['PLATENO'];
  	echo "<option value='$id'>$id</option>";

}

		 ?>
		</select></fieldset></br>
       </br><fieldset class="myButton"> My Towing Company Name <font size="2" color="red">"If Towing Number Not Exist Click On Add Towing Above"</font></br> <select name="mytowcom">
        <option value="NULL">NULL</option>
		<?php
		$stid=oci_parse($conn,"SELECT TNO,TCOMPNAME from TOWINGCOMP");
      oci_execute($stid);
		while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
	$id=$row['TNO'];
	$towname=$row['TCOMPNAME'];
  	echo "<option value='$id'>$towname</option>";

}

		 ?>
		</select></fieldset></br>
        </br><fieldset class="myButton">Other Owenr ID <font size="3" color="red">"If ID Not Exist Click On Add Persons Above"</font></br><select name="othownerid">
		<?php
		$stid=oci_parse($conn,"SELECT PID,NAME from person");
      oci_execute($stid);
		while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
	$id=$row['PID'];
	$name=$row['NAME'];
  	echo "<option value='$id'>$name</option>";

}

		 ?>
		</select></fieldset></br>
        </br><fieldset class="myButton">Other Driver ID <font size="3" color="red">"If ID Not Exist Click On Add Persons Above"</font></br><select name="othdriverid">
		<?php
		$stid=oci_parse($conn,"SELECT PID,NAME from person");
      oci_execute($stid);
		while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
	$id=$row['PID'];
	$name=$row['NAME'];
  	echo "<option value='$id'>$name</option>";

}

		 ?>
		</select></fieldset></br>
        </br><fieldset class="myButton">Other Car Plate Number <font size="3" color="red">"If Plate Number Not Exist Click On Add Cars Above"</font></br><select name="othplatno">
        <option value="NULL">NULL</option>
		<?php
		$stid=oci_parse($conn,"SELECT PLATENO from car");
      oci_execute($stid);
		while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
	$id=$row['PLATENO'];
  	echo "<option value='$id'>$id</option>";

}

		 ?>
		</select></fieldset></br>
        </br><fieldset class="myButton">Other Towing Company Name <font size="2" color="red">"If Towing Number Not Exist Click On Add Towing Above"</font></br><select name="othtowcom">
        <option value="NULL">NULL</option>
		<?php
		$stid=oci_parse($conn,"SELECT TNO,TCOMPNAME from TOWINGCOMP");
      oci_execute($stid);
		while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
	$id=$row['TNO'];
	$towname=$row['TCOMPNAME'];
  	echo "<option value='$id'>$towname</option>";

}

		 ?>
		</select></fieldset></br>
        </br><fieldset class="myButton">Insurance Company Name <font size="3" color="red">"If Insurance Number Not Exist Click On Add Insurance Above"</font></br><select name="insno">
        <option value="NULL">NULL</option>
		<?php
		$stid=oci_parse($conn,"SELECT INSCOMPNO,INSNAME from INSURANCECOMP");
      oci_execute($stid);
		while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
	$id=$row['INSCOMPNO'];
	$insname=$row['INSNAME'];
  	echo "<option value='$id'>$insname</option>";

}

		 ?>
		</select></fieldset></br>
        </br><fieldset class="myButton">Police name <font size="3" color="red">"If Badge Number Not Exist Click On Add Police Above"</font></br><select name="policeno">
        <option value="NULL">NULL</option>
		<?php
		$stid=oci_parse($conn,"SELECT POLBADGENO,OFFNAME from police");
      oci_execute($stid);
		while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
	$id=$row['POLBADGENO'];
	$policename=$row['OFFNAME'];
  	echo "<option value='$id'>$policename</option>";

}

		 ?>
		</select></fieldset></br>
		</br><fieldset class="myButton">Location </br><select name="location">

              <?php
		$stid=oci_parse($conn,"SELECT * from LOCATIONS");
      oci_execute($stid);
		while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
	$id=$row['ID'];
	$location=$row['LOCATION_NAME'];
  	echo "<option value='$id'>$location</option>";

}

		 ?>
           </select></fieldset></br>
        </br><fieldset class="myButton">Weather Condition </br><select name="weather">
           <option value="NULL">Not Available</option>
            <?php
		$stid=oci_parse($conn,"SELECT * from WEATHERS");
      oci_execute($stid);
		while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
	$id=$row['ID'];
	$weather=$row['WEATHER_NAME'];
  	echo "<option value='$id'>$weather</option>";

}

		 ?>

                          </select></fieldset></br>
        </br><fieldset class="myButton">Road Condition </br><select name="road">
           <option value="NULL">Not Available</option>
                <?php
		$stid=oci_parse($conn,"SELECT * from ROAD_CONDITIONS");
      oci_execute($stid);
		while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
	$id=$row['ID'];
	$road_condition=$row['CONDITION_NAME'];
  	echo "<option value='$id'>$road_condition</option>";

}

		 ?>
                          </select></fieldset></br>
        </br><fieldset class="myButton">My Car Damage </br><textarea rows="10" cols="50"  name="damage"  /></textarea></fieldset></br>
       </br><fieldset class="myButton"> Accident Details </br><textarea rows="15" cols="50"  name="details"  /></textarea></fieldset></br>
        </br>
    </fieldset>

    <center><fieldset id="actions">
        <input class="myButton" name="add" onclick="if(!validation())return false;" type="submit" value="Add Accident" />
    </fieldset></center>
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
<?php /*
if(isset($_POST['add'])){
 	$date=$_POST['date'];
 	//$TIME   =$_POST['time'];
    $ownerid=$_POST['ownerid'];
    $driverid=$_POST['driverid'];
    $myplatno=$_POST['myplatno'];
    $mytowcom=$_POST['mytowcom'];
    $othownerid=$_POST['othownerid'];
    $othdriverid=$_POST['othdriverid'];
    $othplatno=$_POST['othplatno'];
    $othtowcom=$_POST['othtowcom'];
    $insno=$_POST['insno'];
    $policeno=$_POST['policeno'];
    $location=$_POST['location'];
    $weather=$_POST['weather'];
      if($weather!="NULL")
      $weather="'$weather'";
    $road=$_POST['road'];
     if($road!="NULL")
      $road="'$road'";
    $damage=$_POST['damage'];
    $details=$_POST['details'];

  $sql="insert into accident (Accdate,Ownerid,Driverid,Mycarpn,Mytcomno,Mycardamage,Otherownerid,Otherdriverid,Othercarpn,Othertcomno,Inscompno,Wethcond_id,Roadcond_id,Accdet,Polbadgeno,Location_id)VALUES
(to_date('$date','mm-dd-yyyy'),'$ownerid','$driverid','$myplatno','$mytowcom','$damage','$othownerid','$othdriverid','$othplatno','$othtowcom','$insno','$weather','$road','$details','$policeno','$location')";
$result=oci_parse($conn,$sql);
oci_execute($result);
}
*/
    ?>