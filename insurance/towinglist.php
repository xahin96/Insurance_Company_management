<?php
session_start();
echo "<title>List Of Towing</title>";
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


</head>
  <link href='tablestyle.css' rel='stylesheet' >
<body>  <center><h1>List of Towing Companies</h1>
<table class="bordered">
    <thead>
         <br>         <br>

    <tr>
        <th>#</th>
         <th>Towing No</th>
         <th>Name</th>
         <th>Phone</th>
         <th>Modification</th>
    </tr>
    </thead>
    <?php
      $stid=oci_parse($conn,"SELECT * from all_towingcomp_view ");
      oci_execute($stid);
      $counter=1;

     while (($row = oci_fetch_assoc($stid)) != false) {
     	  $TOWINGNO=$row['TNO'];
     	  $NAME=$row['TCOMPNAME'];
     	  $PHONE=$row['PHONENO'];



        echo "
            <tr>
        <td><font size='3' color='black'>$counter</font></td>
        <td><font size='3' color='black'>$TOWINGNO</font></td>
        <td><font size='3' color='black'>$NAME</font></td>

        <td><font size='3' color='black'>$PHONE</font></td>
                     <td><a href='edittowing.php?id=$TOWINGNO'><font size='3' color='black'>Edit</font></a></td>

           </tr>";
           $counter++;
     }




    ?>

   </table>

<br><br>


<br>


</body>
</html>
