
<?php
session_start();
 $id=$_GET['id'];
require 'config.php';
require 'style.php';
 if(isset($_POST['add'])){
        $ins=$_POST['insno'];
        $name=$_POST['name'];
        if(isset($_POST['phone'])){
       $phone=$_POST['phone']; }
       else
       {
       	$phone="NULL";
       	}
       	if(isset($_POST['agent'])){
       $agent=$_POST['agent']; }
       else
       {
       	$agent="NULL";
       	}

          $sql="UPDATE INSURANCECOMP SET INSNAME='$name',PHONE='$phone',AGENTNAME='$agent' WHERE INSCOMPNO=$id";
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
<script>

            function validation()
            {

                var x=document.forms['Addnew']['insno'].value;
                var Check1 = document.forms['Addnew']['insno'].value;
                var Check2 = document.forms['Addnew']['name'].value;

                var n = x.length;
                var n2= Check2.length;

                if (n>10)
                {
                  alert('Insurance Number is more than 10 Numbers Is not Allowed');
                   return false;
                }

                if(Check1 != Check1 / 1)
                  {
                   alert("Insurance Number  Must be numbers not characters\n")
                    return false;
                  }
                if (n2>50)
                {
                  alert('Insurance Name is more than 50 characters It Is not Allowed');
                   return false;
                }

                return true;
            }



        </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insurance</title>
<link rel="shortcut icon" href="image/icon.ico" />
<?php require 'style.php';
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
	  </tr>
	  <tr>

		<td valign="top" width="455" class="m2bg">

			<table width="438" border="0" cellspacing="0" cellpadding="0">
			 <form  id="Addnew" method="post" action="">
	    <h1>Edit Insurance Company</h1>
	<fieldset id="inputs">
	<?php
	$stid=oci_parse($conn,"SELECT * from INSURANCECOMP where INSCOMPNO=$id");
      oci_execute($stid);
      $counter=1;

     while (($row = oci_fetch_assoc($stid)) != false) {
     	  $INSURANCENO=$row['INSCOMPNO'];
     	  $NAME=$row['INSNAME'];
     	  $PHONE=$row['PHONE'];
          $AGENT= $row['AGENTNAME'];
          }
          echo"
	   	<fieldset>Insurance Number </br><input value='$INSURANCENO' type='text' name='insno' readonly required='required' /></fieldset></br>
		<fieldset>Name </br><input type='text'  value='$NAME' name='name' required='required' /></fieldset></br>
        <fieldset>Phone </br><input type='text'  value='$PHONE' name='phone'  /></fieldset></br>
        <fieldset>Agent Name </br><input type='text' value='$AGENT'  name='agent' /></fieldset></br>  ";
        ?>
     <fieldset id="actions">
        <input class="myButton" name="add" onclick="if(!validation())return false;" type="submit" value="Confirm" />
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