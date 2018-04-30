<?php
session_start();
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
  <title>Select Owner</title>

</head>
  <link href='tablestyle.css' rel='stylesheet' >
<body>
<center><h1>Select Person</h1><a href="add.php"><font size="3" color="red">"If Accident Not Exist Click here"</font><a/></center>
<table class="bordered">
    <thead>

    <tr>
        <th>#</th>
         <th>Owner ID</th>
         <th>Name</th>



    </tr>
    </thead>
    <?php
      $stid=oci_parse($conn,"SELECT PID,NAME from person p,accident a where a.OWNERID=p.PID GROUP by (PID,NAME)");
      oci_execute($stid);
      $counter=1;

     while (($row = oci_fetch_assoc($stid)) != false) {
     	  $ownerid=$row['PID'];
     	  $ownername=$row['NAME'];


        echo "
            <tr>
        <td><a href='allowneracc.php?id=$ownerid'><font size='3' color='black'>$counter</font></a></td>
        <td><a href='allowneracc.php?id=$ownerid'><font size='3' color='black'>$ownerid</font></a></td>
        <td><a href='allowneracc.php?id=$ownerid'><font size='3' color='black'>$ownername</font></a></td>

           </tr>";
           $counter++;
     }




    ?>

   </table>

<br><br>


<br>


</body>
</html>
