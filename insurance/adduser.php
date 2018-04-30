<?php
require 'config.php';

require 'style.php';
 if(isset($_POST['add'])){
      $name=$_POST['name'];
      $username= $_POST['username'];
      $password= $_POST['password'];
      $type=$_POST['type'];


 $sql="insert into USERS (NAME,USERNAME,PASSWORD,TYPE,ALLOW)VALUES
('$name','$username','$password',$type,1)";
$result=oci_parse($conn,$sql);
oci_execute($result);
echo "<center><h1 style=#55555>User Created</h1></center>";
    }

?>
 <script>

            function validation()
            {

                var check1=document.forms['Addnew']['name'].value;
                var Check2 = document.forms['Addnew']['username'].value;

                var n = check1.length;
                var n2 =Check2.length;
                if (n>50)
                {                  alert('Name is more than 50 characters It Is not Allowed');
                   return false;
                }

                if (n2>30)
                {
                  alert('Username is more than 30 characters It Is not Allowed');
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
<title>Add User</title>
<link rel="shortcut icon" href="image/icon.ico" />
<?php require 'style.php';

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
		<div class="menu"><img src="images/q1.jpg" alt="" align="middle" /><a href="logout.php">Logout</a><img src="images/q1.jpg" alt="" align="middle" /><a href="admin.php">Back</a></div></td>
	  </tr>
	  <tr>

		<td valign="top" width="455" class="m2bg">

			<table width="438" border="0" cellspacing="0" cellpadding="0">
			 <form  id="Addnew" method="post" action="">
	    <h1>Add User</h1>
	<fieldset id="inputs">
	   	<fieldset>Name </br><input  type="text" name="name" required="required"/></fieldset></br>
		<fieldset>Username </br><input type="text" name="username" required="required" /></fieldset></br>
        <fieldset>Password </br><input type="text" name="password" required="required"/></fieldset></br>
       <fieldset> User Type </br><select name="type">
           <option value='2'>Supervisor</option>
           <option value='3'>Secretary</option>
          </select></fieldset>

           <fieldset id="actions">
        <input class="myButton" name="add" onclick="if(!validation())return false;" type="submit" value="Add User" />
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