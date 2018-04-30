<?php
session_start();
require 'config.php';

require 'style.php';
 if(isset($_POST['add'])){
       $id=$_POST['personid'];
       $name=$_POST['name'];
       if(isset($_POST['city'])){
       $city=$_POST['city']; }
       else
       {       	$city="NULL";       	}
       if(isset($_POST['streetno'])){
       $streetno=$_POST['streetno']; }
       else
       {
       $streetno="NULL";
       	}
       if(isset($_POST['streetname'])){
       $streetname=$_POST['streetname']; }
       else
       {
       $streetname="NULL";
       	}
       if(isset($_POST['homephone'])){
       $homephone=$_POST['homephone']; }
       else
       {
       $homephone="NULL";
       	}
       	 if(isset($_POST['workphone'])){
       $workphone=$_POST['workphone']; }
       else
       {
       $workphone="NULL";
       	}



       $sql="insert into person (PID,NAME,CITY,STREETNAME,STREETNO,HOMEPHONE,WORKPHONE)VALUES
($id,'$name','$city','$streetname','$streetno','$homephone','$workphone')";
$result=oci_parse($conn,$sql);
oci_execute($result);

    }

?>
 <script>

            function validation()
            {

                var x=document.forms['Addnew']['personid'].value;
                var Check1 = document.forms['Addnew']['personid'].value;
                var Check2 = document.forms['Addnew']['name'].value;

                var n = x.length;
                var n2 =Check2.length;
                if (n>10)
                {                  alert('Person ID is more than 10 Numbers Is not Allowed');
                   return false;
                }
                 if (n<10)
                {
                  alert('Person ID Must be 10 Numbers!');
                   return false;
                }
                if(Check1 != Check1 / 1)
                  {
                   alert("Person Id Must be numbers not characters\n")
                    return false;
                  }
                if (n2>50)
                {
                  alert('Person Name is more than 50 characters It Is not Allowed');
                   return false;
                }
                return true;
            }



        </script>
<br />
<link rel="stylesheet" href="css/jquery-ui.css">
  <script src="css/jquery-1.9.1.js"></script>
  <script src="css/jquery-ui.js"></script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Person</title>
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
	    <h1>Add Person</h1>
	<fieldset id="inputs">
	   	<fieldset>Person ID </br><input  type="text" name="personid" required="required"/></fieldset></br>
		<fieldset>Name </br><input type="text" name="name" required="required" /></fieldset></br>
        <fieldset>City </br><input type="text" name="city" /></fieldset></br>
        <fieldset>Street Number </br><input type="text" value="" name="streetno"   /></fieldset></br>
        <fieldset>Street Name </br><input type="text" value="" name="streetname"   /></fieldset></br>
        <fieldset>Home Phone </br><input type="texts" value="" name="homephone"   /></fieldset></br>
        <fieldset>Work Phone</br><input type="text" value="" name="workphone"   /></fieldset></br>
           <fieldset id="actions">
        <input class="myButton" name="add" onclick="if(!validation())return false;" type="submit" value="Add Person" />
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