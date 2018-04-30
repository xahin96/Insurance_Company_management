<pre>
<?php
session_start();
include("config.php");
//print_r($GLOBALS);

	$badgeno=$_REQUEST['badgeno'];
	$offname=$_REQUEST['offname'];
	$dept=$_REQUEST['dept'];
	$phone=$_REQUEST['phone'];
	$otherinfo=$_REQUEST['otherinfo'];


//echo $password;
		$sql="begin addpolice($badgeno,'$offname','$dept',$phone,'$otherinfo'); end;";
		$stid=oci_parse($conn,$sql);
        oci_execute($stid);

/*insertIntoDB("begin
addcars($platno,'$make','$model',$year,'$color');
end;");*/

header("location: police.php");

?>

</pre>