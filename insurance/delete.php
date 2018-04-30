<?php
require 'config.php';
$id=$_GET['id'];
$sql="DELETE FROM USERS WHERE USERNO=$id";
$result=oci_parse($conn,$sql);
oci_execute($result);
header("Location: deleteuser.php");

?>