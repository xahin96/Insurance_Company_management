<?php
session_start();
$type=$_GET['id'];

require 'config.php';
require 'header.php';



?>



<!DOCTYPE html>
<html>
<head>
  <title>Select Accident</title>
</head>
 <link href='tablestyle.css' rel='stylesheet' >
<body>
<center><h1><a href="owner.php"><font size="3" color="red">Back</font><a/></h1></center>
<center><h1>List Accidents of Owner ID = <?php echo $type;?> </h1><a href="add.php"><font size="3" color="red">"If Accident Not Exist Click here"</font><a/></center>
<table class="bordered">
    <thead>

    <tr>
        <th>#</th>
         <th>Accident Number</th>
         <th>Owner ID</th>
         <th>Accident Owner Name</th>
         <th>Date</th>

    </tr>
    </thead>
    <?php
      $stid=oci_parse($conn,"select a.ACCNO,a.ACCDATE,a.OWNERID,p.NAME from accident a , person p where a.OWNERID=$type and p.PID=$type order by ACCNO asc");
      oci_execute($stid);
      $counter=1;
      $date="Not Avaliable";
     while (($row = oci_fetch_assoc($stid)) != false) {
     	  $accno=$row['ACCNO'];
     	  $ownerid=$row['OWNERID'];
     	  $ownername=$row['NAME'];
     	  $date=$row['ACCDATE'];

        echo "
            <tr>
        <td><a href='list.php?id=$accno'><font size='3' color='black'>$counter</font></a></td>
        <td><a href='list.php?id=$accno'><font size='3' color='black'>$accno</font></a></td>
        <td><a href='list.php?id=$accno'><font size='3' color='black'>$ownerid</font></a></td>
        <td><a href='list.php?id=$accno'><font size='3' color='black'>$ownername</font></a></td>
        <td><a href='list.php?id=$accno'><font size='3' color='black'>$date</font></a></td>
           </tr>";
           $counter++;
     }




    ?>

   </table>

<br><br>


<br>


</body>
</html>
