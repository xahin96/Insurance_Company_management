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
$id=$_GET['id'];
$city= "Not Available";
$ownstreetname= "Not Available";
$ownstreetno = "Not Available";
$ownhomephone= "Not Available";
$ownworkphone = "Not Available";
$vehiclemake  = "Not Available";
$vehiclmodel = "Not Available";
$vehiclyear  = "Not Available";
$vehiclcolor  = "Not Available";
$licplateno   = "Not Available";
$inscompno= "Not Available";
$inscomp     = "Not Available";
$agentname   = "Not Available";
$agentphone   = "Not Available";
$othcity      = "Not Available";
$othdriverstreetname     = "Not Available";
$othdriverstreetno   = "Not Available";
$othdriverhomephone   = "Not Available";
$othdriverworkphone  = "Not Available";
?>
<br />
   <title>Insurance company</title>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='tablestyle.css' rel='stylesheet' >
<link rel="shortcut icon" href="image/icon.ico" />

</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%">&nbsp;</td>
    <td width="766" valign="top">
	<table width="766" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td colspan="2" class="top" height="69" valign="top">
		<center><div class="menu"><a href="logout.php"><font size="3" color="red">Logout</font></a><h1><?php echo"<a href='$path'>";?><font size="3" color="red">Back</font><a/></h1></div></center></td>
	  </tr>
	  <tr>

		<td valign="top" width="455" class="m2bg">

			<table width="438" border="0" cellspacing="0" cellpadding="0">
			 <form id="login" name="login" method="post" action="login.php">
			 <?php
      $stid=oci_parse($conn,"SELECT * from Accident where AccNo=$id");
      oci_execute($stid);
      $sketch="default.png";
		while (($row = oci_fetch_assoc($stid)) != false) {

         if (is_null($row["ACCDATE"]))
         $date= "Not Available";
          else
          $date=$row['ACCDATE'];


          if (is_null($row["ACCDET"]))
         $accdet= "Not Available";
          else
          $accdet=$row['ACCDET'];

          if (is_null($row["MYCARDAMAGE"]))
         $damage= "Not Available";
          else
          $damage=$row['MYCARDAMAGE'];
          if (is_null($row["SCKETCH"]))
         $sketch= "default.png";
          else
          $sketch=$row['SCKETCH'];
			}
        $stid=oci_parse($conn,"SELECT * from Accident ,WEATHERS w,ROAD_CONDITIONS r,LOCATIONS l where AccNo=$id and WETHCOND_ID=w.ID");
      oci_execute($stid);
      		while (($row = oci_fetch_assoc($stid)) != false) {            if (is_null($row["WETHCOND_ID"]))
         $weather= "Not Available";
          else
          $weather=$row['WEATHER_NAME'];

		}
		 $stid=oci_parse($conn,"SELECT * from Accident, ROAD_CONDITIONS r where AccNo=$id and ROADCOND_ID=r.ID");
      oci_execute($stid);
      		while (($row = oci_fetch_assoc($stid)) != false) {

          if (is_null($row["ROADCOND_ID"]))
         $road= "Not Available";
          else
          $road=$row['CONDITION_NAME'];

		}
		 $stid=oci_parse($conn,"SELECT * from Accident ,LOCATIONS l where AccNo=$id and LOCATION_ID=l.ID");
      oci_execute($stid);
      		while (($row = oci_fetch_assoc($stid)) != false) {

          if (is_null($row["LOCATION_ID"]))
         $location= "Not Available";
          else
          $location=$row['LOCATION_NAME'];
		}

             echo"   <h1>Accident Details</h1>

         <table class='bordered'>
    <thead>

    <tr>
        <th>Date</th>
         <th>Weather Conditions</th>
         <th>Road Conditions</th>
         <th>Location</th>



    </tr>
    </thead>
    <tr>
         <td>$date</td>
         <td>$weather</td>
         <td>$road</td>
         <td>$location</td>

    </tr>
    </table>


		Accident Details<br><textarea rows='10' cols='50' type='text' name='accdetails'  autofocus='autofocus' value='$accdet'>$accdet</textarea></br>
    </fieldset>";

        $stid2=oci_parse($conn,"SELECT * from TOWINGCOMP where TNO=(SELECT MYTCOMNO from accident where AccNo=$id)");
      oci_execute($stid2);
        $mytowname= "Not Available";
        $mytowphone="Not Available";
		while (($row = oci_fetch_assoc($stid2)) != false) {
            if (is_null($row["TCOMPNAME"]))
         $mytowname= "Not Available";
          else
          $mytowname=$row['TCOMPNAME'];
          if (is_null($row["PHONENO"]))
         $mytowphone= "Not Available";
          else
          $mytowphone=$row['PHONENO'];

		}
		$stid2=oci_parse($conn,"SELECT * from TOWINGCOMP where TNO=(SELECT OTHERTCOMNO from accident where AccNo=$id)");
      oci_execute($stid2);
        $othtowname= "Not Available";
        $othtowphone= "Not Available";
		while (($row = oci_fetch_assoc($stid2)) != false) {
            if (is_null($row["TCOMPNAME"]))
         $othtowname= "Not Available";
          else
          $othtowname=$row['TCOMPNAME'];
         if (is_null($row["PHONENO"]))
         $othtowphone= "Not Available";
          else
          $othtowphone=$row['PHONENO'];
		}
      echo"
  <h1>Damage Descriptions</h1>
	<fieldset id='inputs'><fieldset>
	Damage Description<br><textarea rows='10' cols='50' type='text' name='accdetails'  autofocus='autofocus' value='$accdet'>$damage</textarea></br>
	    <h3>Your Vehicle</h3>
    	Towing Company Name <br><input  type='text' name='utcompany' autofocus='autofocus' value='$mytowname' /></br>
		Phone <br><input  type='text' name='utphone' autofocus='autofocus' value='$mytowphone'  /></fieldset></br>
		<fieldset><h3>Other Vehicle</h3>
		Towing Company Name <br><input  type='text' name='otcompany' autofocus='autofocus' value='$othtowname' /></br>
		Phone <br><input  type='text' name='otphone' autofocus='autofocus' value='$othtowphone' /></fieldset></br>
    </fieldset>";

       $stid2=oci_parse($conn,"SELECT * from person where PID=(SELECT OWNERID from accident where AccNo=$id)");
      oci_execute($stid2);

    	while (($row = oci_fetch_assoc($stid2)) != false) {
    	$ownername=$row['NAME'];
    	if (is_null($row["CITY"]))
         $city= "Not Available";
          else
          $city=$row['CITY'];
          if (is_null($row["STREETNAME"]))
         $ownstreetname= "Not Available";
          else
          $ownstreetname=$row['STREETNAME'];
          if (is_null($row["STREETNO"]))
         $ownstreetno= "Not Available";
          else
          $ownstreetno=$row['STREETNO'];
          if (is_null($row["HOMEPHONE"]))
         $ownhomephone= "Not Available";
          else
          $ownhomephone=$row['HOMEPHONE'];
          if (is_null($row["WORKPHONE"]))
         $ownworkphone= "Not Available";
          else
          $ownworkphone=$row['WORKPHONE'];


        		}
      $stid2=oci_parse($conn,"SELECT * from CAR where PLATENO=(SELECT MYCARPN from accident where AccNo=$id)");
      oci_execute($stid2);

    	while (($row = oci_fetch_assoc($stid2)) != false) {
    		if (is_null($row["PLATENO"]))
         $licplateno= "Not Available";
          else
          $licplateno=$row['PLATENO'];
           if (is_null($row["MAKE"]))
         $vehiclemake= "Not Available";
          else
          $vehiclemake=$row['MAKE'];
          if (is_null($row["MODEL"]))
         $vehiclmodel= "Not Available";
          else
          $vehiclmodel=$row['MODEL'];
          if (is_null($row["YEAR"]))
         $vehiclyear= "Not Available";
          else
          $vehiclyear=$row['YEAR'];
          if (is_null($row["COLOR"]))
         $vehiclcolor= "Not Available";
          else
          $vehiclcolor=$row['COLOR'];

    	}
        $stid2=oci_parse($conn,"SELECT * from INSURANCECOMP where INSCOMPNO=(SELECT INSCOMPNO from accident where AccNo=$id)");
      oci_execute($stid2);

        while (($row = oci_fetch_assoc($stid2)) != false) {
         if (is_null($row["INSCOMPNO"]))
         $inscompno= "Not Available";
          else
         $inscompno=$row['INSCOMPNO'];
             if (is_null($row["INSNAME"]))
         $inscomp= "Not Available";
          else
          $inscomp=$row['INSNAME'];
          if (is_null($row["AGENTNAME"]))
         $agentname= "Not Available";
          else
          $agentname=$row['AGENTNAME'];
          if (is_null($row["PHONE"]))
         $agentphone= "Not Available";
          else
          $agentphone=$row['PHONE'];
    		}
              $stid2=oci_parse($conn,"SELECT * from person where PID=(SELECT OTHERDRIVERID from accident where AccNo=$id)");
      oci_execute($stid2);

    	while (($row = oci_fetch_assoc($stid2)) != false) {
    	$othownername=$row['NAME'];
         if (is_null($row["CITY"]))
         $othcity= "Not Available";
          else
          $othcity=$row['CITY'];
          if (is_null($row["STREETNAME"]))
         $othdriverstreetname= "Not Available";
          else
          $othdriverstreetname=$row['STREETNAME'];
          if (is_null($row["STREETNO"]))
         $othdriverstreetno= "Not Available";
          else
          $othdriverstreetno=$row['STREETNO'];
          if (is_null($row["HOMEPHONE"]))
         $othdriverhomephone= "Not Available";
          else
          $othdriverhomephone=$row['HOMEPHONE'];
          if (is_null($row["WORKPHONE"]))
         $othdriverworkphone= "Not Available";
          else
          $othdriverworkphone=$row['WORKPHONE'];


        		}
        echo"<h1>Owner Driver Information</h1>
        <table class='bordered'>
    <thead>

    <tr>
        <th>Name</th>
         <th>City</th>
         <th>Street Name</th>
         <th>Street No.</th>
         <th>Home Phone</th>
         <th>Work Phone</th>


    </tr>
    </thead>
    <tr>
         <td>$ownername</td>
         <td>$city</td>
         <td>$ownstreetname</td>
         <td>$ownstreetno</td>
         <td>$ownhomephone</td>
         <td>$ownworkphone</td>
    </tr>

    </table>
	</br> <h1>Vehicle Information</h1>
	     <table class='bordered'>
    <thead>

    <tr>
        <th>Make</th>
         <th>Model</th>
         <th>Year</th>
         <th>Color</th>
         <th>Plate Number</th>



    </tr>
    </thead>
    <tr>
         <td>$vehiclemake</td>
         <td>$vehiclmodel</td>
         <td>$vehiclyear</td>
         <td>$vehiclcolor</td>
         <td>$licplateno</td>

    </tr>
    </table>
       </br>
       <h1>Insurance Company Information</h1>
	     <table class='bordered'>
    <thead>

    <tr>
        <th>Number</th>
         <th>Name</th>
         <th>Agent Name</th>
         <th>Agent phone</th>




    </tr>
    </thead>
    <tr>
         <td>$inscompno</td>
         <td>$inscomp</td>
         <td>$agentname</td>
         <td>$agentphone</td>


    </tr>
    </table>
        </br>
        <h1>Other Driver Information</h1>
        <table class='bordered'>
    <thead>

    <tr>
        <th>Name</th>
         <th>City</th>
         <th>Street Name</th>
         <th>Street No.</th>
         <th>Home Phone</th>
         <th>Work Phone</th>


    </tr>
    </thead>
    <tr>
         <td>$othownername</td>
         <td>$othcity</td>
         <td>$othdriverstreetname</td>
         <td>$othdriverstreetno</td>
         <td>$othdriverhomephone</td>
         <td>$othdriverworkphone</td>
    </tr>

    </table>
     "
			 ?>



    </fieldset>



    </fieldset></fieldset>
    <br>
    <?php
      $stid2=oci_parse($conn,"SELECT * from police where POLBADGENO=(SELECT POLBADGENO from accident where AccNo=$id)");
      oci_execute($stid2);
         $offname= "Not Available";
         $dep= "Not Available";
         $phonepolice= "Not Available";
         $badgeno= "Not Available";
         $otherinf = "Not Available";
    	while (($row = oci_fetch_assoc($stid2)) != false) {
    	if (is_null($row["OFFNAME"]))
         $offname= "Not Available";
          else
          $offname=$row['OFFNAME'];
          if (is_null($row["DEPT"]))
         $dep= "Not Available";
          else
          $dep=$row['DEPT'];
          if (is_null($row["PHONE"]))
         $phonepolice= "Not Available";
          else
          $phonepolice=$row['PHONE'];
          if (is_null($row["POLBADGENO"]))
         $badgeno= "Not Available";
          else
          $badgeno=$row['POLBADGENO'];
          if (is_null($row["OTHERINF"]))
         $otherinf= "Not Available";
          else
          $otherinf=$row['OTHERINF'];
          echo"<h1>Police Information</h1><fieldset id='inputs'>
        Officer Name <br><input  type='text' name='officename' autofocus='autofocus'  value='$offname'/></br>
		Department <br><input type='text' name='department' ' autofocus='autofocus'  value='$dep'/></br>
		Phone <br><input  type='text' name='policephone' autofocus='autofocus'  value='$phonepolice'/></br>
		Badge Number <br><input  type='text' name='policebadge'  autofocus='autofocus' value='$badgeno' /></br>
		Other Info <br><input  type='text' name='policeinform'  autofocus='autofocus' value='$otherinf' /></br></fieldset>
     ";
    	}

    ?> </fieldset>
    

   </fieldset></fieldset>
    <br>


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