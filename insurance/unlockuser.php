<?php
session_start();
require 'config.php';
if(isset($_SESSION['username']))
      {
      	$nothing="nothing";
 	}
    else
header("Location: index.php");



?>



<!DOCTYPE html>
<html>
<head>
  <title>Unlock User</title>

</head>
  <link href='tablestyle.css' rel='stylesheet' >
<body>
<center><h1><a href='admin.php'><font size="3" color="red">Back</font><a/></h1></center>

<table class="bordered">
    <thead>

    <tr>
        <th>#</th>
         <th>Name</th>
         <th>Edit</th>



    </tr>
    </thead>
    <?php
      $stid=oci_parse($conn,"SELECT * FROM USERS WHERE ALLOW = 0 and TYPE !=1");
      oci_execute($stid);
      $counter=1;

     while (($row = oci_fetch_assoc($stid)) != false) {
     	  $id=$row['USERNO'];
     	  $name=$row['NAME'];


        echo "
            <tr>
        <td><font size='3' color='black'>$counter</font></td>
        <td><font size='3' color='black'>$name</font></td>
        <td><a href='unlock.php?id=$id'><font size='3' color='black'>unlock</font></a></td>

           </tr>";
           $counter++;
     }




    ?>

   </table>

<br><br>


<br>


</body>
</html>
