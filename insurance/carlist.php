<?php
session_start();
echo "<title>List Of Cars</title>";
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



?>



<!DOCTYPE html>
<html>
<head>
  <title>List Of Cars</title>

</head>
  <link href='tablestyle.css' rel='stylesheet' >
<body> <center><h1>List Of Cars</h1>
<table class="bordered">
    <thead>
         <br>         <br>

    <tr>
        <th>#</th>
         <th>PLATE No</th>
         <th>Make</th>
         <th>Model</th>
         <th>Year</th>
        <th>Color</th>
        <th>Modification</th>

    </tr>
    </thead>
    <?php
      $stid=oci_parse($conn,"SELECT * from all_car_view");
      oci_execute($stid);
      $counter=1;

     while (($row = oci_fetch_assoc($stid)) != false) {
     	  $PLATENO=$row['PLATENO'];
     	  $MAKE=$row['MAKE'];
     	  $MODEL=$row['MODEL'];
          $YEAR= $row['YEAR'];
          $COLOR   =$row['COLOR'];


        echo "
            <tr>
        <td><font size='3' color='black'>$counter</font></td>
        <td><font size='3' color='black'>$PLATENO</font></td>
        <td><font size='3' color='black'>$MAKE</font></td>
        <td><font size='3' color='black'>$MODEL</font></td>
        <td><font size='3' color='black'>$YEAR</font></td>
        <td><font size='3' color='black'>$COLOR</font></td>
        <td><a href='editcar.php?id=$PLATENO'><font size='3' color='black'>Edit</font></a></td>

           </tr>";
           $counter++;
     }




    ?>

   </table>

<br><br>


<br>


</body>
</html>
