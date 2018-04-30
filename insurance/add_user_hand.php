<pre>
<?php
session_start();
include("config.php");
//print_r($GLOBALS);

	$platno=$_REQUEST['PLATENO'];
	$make=$_REQUEST['MAKE'];
	$model=$_REQUEST['MODEL'];
	$year=$_REQUEST['YEAR'];
	$color=$_REQUEST['COLOR'];

//echo $password;

insertIntoDB("begin
adduser('$platno','$make','$model','$year','$color');
end;");

header("location: cars.php");

?>

</pre>