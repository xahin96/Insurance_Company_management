<pre>
<?php
session_start();
include("config.php");
//print_r($GLOBALS);

	$towno=$_REQUEST['towno'];
	$towname=$_REQUEST['towname'];
	$towphone=$_REQUEST['towphone'];


//echo $password;
		$sql="begin addtowing($towno,'$towname','$towphone'); end;";
		$stid=oci_parse($conn,$sql);
        oci_execute($stid);

/*insertIntoDB("begin
addcars($platno,'$make','$model',$year,'$color');
end;");*/

header("location: towing.php");

?>

</pre>