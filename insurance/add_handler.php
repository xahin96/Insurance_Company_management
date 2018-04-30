<pre>
<?php
session_start();
include("config.php");
//print_r($GLOBALS);

	$date=$_REQUEST['date'];
    $ownerid=$_REQUEST['ownerid'];
    $driverid=$_REQUEST['driverid'];
    $myplatno=$_REQUEST['myplatno'];
    $mytowcom=$_REQUEST['mytowcom'];
	$damage=$_REQUEST['damage'];
    $othownerid=$_REQUEST['othownerid'];
    $othdriverid=$_REQUEST['othdriverid'];
    $othplatno=$_REQUEST['othplatno'];
    $othtowcom=$_REQUEST['othtowcom'];
    $insno=$_REQUEST['insno'];
    $weather=$_REQUEST['weather'];
    $road=$_REQUEST['road'];
	$details=$_REQUEST['details'];
	$policeno=$_REQUEST['policeno'];
	$location=$_REQUEST['location'];

//echo $password;
		$sql="begin addinfo('$date','$ownerid','$driverid','$myplatno','$mytowcom','$damage','$othownerid',
		'$othdriverid','$othplatno','$othtowcom','$insno','$weather','$road','$details','$policeno','$location'); end;";
		$stid=oci_parse($conn,$sql);
        oci_execute($stid);

/*insertIntoDB("begin
addcars($platno,'$make','$model',$year,'$color');
end;");*/

//header("location: add.php");

?>

</pre>