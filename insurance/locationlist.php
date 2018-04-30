<?php
session_start();
echo "<title>List Of Locations</title>";
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
  <title>List Of Locations</title>

</head>
  <link href='tablestyle.css' rel='stylesheet' >
<body>  <center><h1>List Of Locations</h1>
<table class="bordered">
    <thead>
         <br>         <br>

    <tr>
        <th>#</th>
         <th>Location Name</th>
        <th>Modification</th>

    </tr>
    </thead>
    <?php
	      //$stid=oci_parse($conn,"open c_locations ");

      $stid=oci_parse($conn,"SELECT * from LOCATIONS");
      oci_execute($stid);
      $counter=1;

     while (($row = oci_fetch_assoc($stid)) != false) {
     	  $LOCATIONNAME=$row['LOCATION_NAME'];
          $ID=$row['ID'];



        echo "
            <tr>
        <td><font size='3' color='black'>$counter</font></td>
        <td><font size='3' color='black'>$LOCATIONNAME</font></td>
             <td><a href='editlocation.php?id=$ID'><font size='3' color='black'>Edit</font></a></td>

           </tr>";
           $counter++;
     }




    ?>

   </table>

<br><br>


<br>


</body>
</html>
