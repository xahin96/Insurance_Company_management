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
  <title>List Of Persons</title>

</head>
  <link href='tablestyle.css' rel='stylesheet' >
<body><center><h1>List Of Persons</h1>
<table class="bordered">
    <thead>
         <br>         <br>

    <tr>
        <th>#</th>
         <th>ID</th>
         <th>Name</th>
         <th>City</th>
         <th>Street Name</th>
        <th>Street No</th>
        <th>Home Phone</th>
        <th>Work Phone</th>
        <th>Modification</th>
    </tr>
    </thead>
    <?php
      $stid=oci_parse($conn,"SELECT * from all_person_view ");
      oci_execute($stid);
      $counter=1;

     while (($row = oci_fetch_assoc($stid)) != false) {
     	  $PID=$row['PID'];
     	  $NAME=$row['NAME'];
     	  $CITY=$row['CITY'];
          $STREETNAME= $row['STREETNAME'];
          $STREETNO   =$row['STREETNO'];
          $HOMEPHONE = $row['HOMEPHONE'];
          $WORKPHONE =  $row['WORKPHONE'];

        echo "
            <tr>
        <td><font size='3' color='black'>$counter</font></td>
        <td><font size='3' color='black'>$PID</font></td>
        <td><font size='3' color='black'>$NAME</font></td>
        <td><font size='3' color='black'>$CITY</font></td>
        <td><font size='3' color='black'>$STREETNAME</font></td>
        <td><font size='3' color='black'>$STREETNO</font></td>
        <td><font size='3' color='black'>$HOMEPHONE</font></td>
        <td><font size='3' color='black'>$WORKPHONE</font></td>
                <td><a href='editperson.php?id=$PID'><font size='3' color='black'>Edit</font></a></td>

           </tr>";
           $counter++;
     }




    ?>

   </table>

<br><br>


<br>


</body>
</html>
