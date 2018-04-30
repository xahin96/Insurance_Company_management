<?php
require 'config.php';
$id=$_GET['id'];
$sql="UPDATE USERS SET ALLOW =0 WHERE USERNO=$id";
$result=oci_parse($conn,$sql);
oci_execute($result);
header("Location: lockuser.php");

?>