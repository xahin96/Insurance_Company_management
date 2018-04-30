<?php
session_start();
 $id=$_GET['id'];
require 'config.php';
require 'style.php';
 if(isset($_POST['add'])){
           $badgeno=$_POST['badgeno'];
           $offname=$_POST['offname'];

       if(isset($_POST['dept'])){
       $department=$_POST['dept']; }
       else
       {
       	$department="NULL";
       	}
       if(isset($_POST['phone'])){
       $phone=$_POST['phone']; }
       else
       {
       	$phone="NULL";
       	}
         if(isset($_POST['otherinfo'])){
       $otherinfo=$_POST['otherinfo']; }
       else
       {
       	$otherinfo="NULL";
       	}

           $sql="UPDATE POLICE SET  OFFNAME='$offname',DEPT='$department',PHONE='$phone' where  POLBADGENO=$id";

$result=oci_parse($conn,$sql);
oci_execute($result);

    }

?>
<br />


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Police</title>
<link rel="shortcut icon" href="image/icon.ico" />
<?php require 'style.php';
require 'header.php';
?>
 <script>

            function validation()
            {

                var x=document.forms['Addnew']['badgeno'].value;
                var Check1 = document.forms['Addnew']['badgeno'].value;
                var Check2 = document.forms['Addnew']['offname'].value;
                var Check3 = document.forms['Addnew']['otherinfo'].value;
                var n = x.length;
                var n2= Check2.length;
                var n3= Check3.length;
                if (n>8)
                {
                  alert('Badge Number is more than 8 Numbers Is not Allowed');
                   return false;
                }

                if(Check1 != Check1 / 1)
                  {
                   alert("Badge Number Must be numbers not characters\n")
                    return false;
                  }
                if (n2>50)
                {
                  alert('Police Name is more than 50 characters It Is not Allowed');
                   return false;
                }
                if (n3>100)
                {
                  alert('Other Information is more than 100 characters It Is not Allowed');
                   return false;
                }
                return true;
            }



        </script>
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
	    <h1>Edit Police</h1>
	<fieldset id="inputs">
	<?php
      $stid=oci_parse($conn,"SELECT * from POLICE WHERE POLBADGENO=$id");
      oci_execute($stid);
      $counter=1;

     while (($row = oci_fetch_assoc($stid)) != false) {
     	  $BADGE=$row['POLBADGENO'];
     	  $NAME=$row['OFFNAME'];
     	  $DEPT=$row['DEPT'];
          $PHONE= $row['PHONE'];
          echo"
	   	<fieldset>Badge Number</br><input  value='$BADGE' type='text' name='badgeno' readonly required='required'/></fieldset></br>
		<fieldset>Officer Name </br><input  value='$NAME' type='text' name='offname' required='required' /></fieldset></br>
        <fieldset>Department </br><input  value='$DEPT' type='text' name='dept'  /></fieldset></br>
        <fieldset>Phone </br><input  value='$PHONE' type='text' name='phone'  /></fieldset></br>  ";
        }
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