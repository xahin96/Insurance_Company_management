<?php
session_start();
require 'config.php';
require 'style.php';
 $id=$_GET['id'];
 if(isset($_SESSION['username']))
      {
        $username=$_SESSION['username'];
      	$stid=oci_parse($conn,"SELECT * FROM USERS where ALLOW=1 and USERNAME='$username'");
        oci_execute($stid);


while (($row = oci_fetch_assoc($stid)) != false) {
           $type=$row['TYPE'];
         if ($type == 2 )
         {
         header("Location: login.php");
         }
      	}
      	}
    else
header("Location: login.php");
?>
<br />
<link rel="stylesheet" href="css/jquery-ui.css">
  <script src="css/jquery-1.9.1.js"></script>
  <script src="css/jquery-ui.js"></script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>

            function validation()
            {


                var Check1 = document.forms['Addnew']['location'].value;



                var n= Check1.length;

                if (n>30)
                {
                  alert('Location name is more than 50 characters It Is not Allowed');
                   return false;
                }


                return true;
            }



        </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Location</title>
<link rel="shortcut icon" href="image/icon.ico" />
<?php
require 'style.php';

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
		<div class="menu"><img src="images/q1.jpg" alt="" align="middle" /><a href="logout.php">Logout</a><img src="images/q1.jpg" alt="" align="middle" /><a href="Secretary.php">Back</a></div></td>
	  </tr>
	  <tr>

		<td valign="top" width="455" class="m2bg">

			<table width="438" border="0" cellspacing="0" cellpadding="0">
			 <form  id="Addnew" method="post" action="">
	    <h1>Edit Location</h1>
	<fieldset id="inputs">
          <?php
      $stid=oci_parse($conn,"SELECT * from LOCATIONS where ID=$id");
      oci_execute($stid);
      $counter=1;

     while (($row = oci_fetch_assoc($stid)) != false) {
     	  $LOCATIONNAME=$row['LOCATION_NAME'];
          $ID=$row['ID'];
          echo"
		<fieldset>Location Name </br><input value='$LOCATIONNAME' type='text' name='location' required='required' /></fieldset></br>  ";
		}?>

                               <fieldset id="actions">
        <input class="myButton" name="add" onclick="if(!validation())return false;" type="submit" value="Confirm" />
    </fieldset>
</form>
			</table>
			<?php
			 if(isset($_POST['add'])){
     $location=$_POST['location'];
       $sql="UPDATE LOCATIONS SET LOCATION_NAME='$location' WHERE ID=$id";
$result=oci_parse($conn,$sql);
oci_execute($result);
 echo "<center><h1 style=#55555>Location Has been Updated Successfully</h1></center>";
    }



			?>
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