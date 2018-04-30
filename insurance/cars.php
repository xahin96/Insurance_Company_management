<?php
session_start();

require 'config.php';
require 'style.php';
 /*if(isset($_POST['add'])){
     $platno=$_POST['platno'];
     $make=$_POST['make'];
     if(isset($_POST['model'])){
       $model=$_POST['model']; }
       else
       {
       	$model="NULL";
       	}
       	if(isset($_POST['year'])){
       $year=$_POST['year']; }
       else
       {
       	$year="NULL";
       	}
       if(isset($_POST['color'])){
       $color=$_POST['color']; }
       else
       {
       	$color="NULL";
       	}

 $sql="insert into CAR (PLATENO,MAKE,MODEL,YEAR,COLOR) VALUES ($platno,'$make','$model','$year','$color')";
$result=oci_parse($conn,$sql);
oci_execute($result);

    }*/

?>
<br />
<link rel="stylesheet" href="css/jquery-ui.css">
  <script src="css/jquery-1.9.1.js"></script>
  <script src="css/jquery-ui.js"></script>
 <script>

            function validation()
            {

                var x=document.forms['Addnew']['platno'].value;
                var Check1 = document.forms['Addnew']['platno'].value;
                var Check2 = document.forms['Addnew']['year'].value;

                var n = x.length;
                var year=Check2.length;
               if(Check1 != Check1 / 1)
                  {
                   alert("Plate Number Must be numbers not characters\n")
                    return false;
                  }
                if(Check2 != Check2 / 1)
                  {
                   alert("Year Must be numbers not characters\n")
                    return false;
                  }
                if (n>2)
                {
                  alert('Plate Number is more than 8 Numbers Is not Allowed');
                   return false;
                }
                 if (n<2)
                {
                  alert('Plate Number Must be 8 Numbers!');
                   return false;
                }
                 if (year>4)
                {
                  alert('Year is more than 4 Numbers Is not Allowed');
                   return false;
                }


                return true;
            }



        </script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Cars</title>
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
			 <form name='cars' id="Addnew" method="post" action="add_cars_handler.php">
	    <h1>Add Car</h1>
	<fieldset id="inputs">
	   	<fieldset>Plate Number </br><input  type="text" name="platno" required="required"/></fieldset></br>
		<fieldset>Make </br><input type="text" name="make"  required="required"/></fieldset></br>
        <fieldset>Model </br><input type="text" name="model"  /></fieldset></br>
        <fieldset>Year </br><input type="text" name="year"  /></fieldset></br>
        <fieldset>Color</br><input type="text" name="color"  /></fieldset></br>
           <fieldset id="actions">
        <input class="myButton" name="add" onclick="if(!validation())return false;" type="submit" value="Add Car" />
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