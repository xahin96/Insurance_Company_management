<?php
session_start();
echo "<title>List Of Insurance Com.</title>";
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
  <title>List Of Insurance Companies</title>

</head>
  <link href='tablestyle.css' rel='stylesheet' >
<body><center><h1>List Of Insurance Companies</h1>
<table class="bordered">
    <thead>
         <br>         <br>

    <tr>
        <th>#</th>
         <th>Insurance No.</th>
         <th>Name</th>
         <th>Phone</th>
         <th>Agent Name</th>
         <th>Modification</th>

    </tr>
    </thead>
    <?php
      $stid=oci_parse($conn,"SELECT * from all_insurancecomp_view ");
      oci_execute($stid);
      $counter=1;

     while (($row = oci_fetch_assoc($stid)) != false) {
     	  $INSURANCENO=$row['INSCOMPNO'];
     	  $NAME=$row['INSNAME'];
     	  $PHONE=$row['PHONE'];
          $AGENT= $row['AGENTNAME'];



        echo "
            <tr>
        <td><font size='3' color='black'>$counter</font></td>
        <td><font size='3' color='black'>$INSURANCENO</font></td>
        <td><font size='3' color='black'>$NAME</font></td>
        <td><font size='3' color='black'>$PHONE</font></td>
        <td><font size='3' color='black'>$AGENT</font></td>
                <td><a href='editinsurance.php?id=$INSURANCENO'><font size='3' color='black'>Edit</font></a></td>

           </tr>";
           $counter++;
     }




    ?>

   </table>

<br><br>


<br>


</body>
</html>
