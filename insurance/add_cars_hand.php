<pre>
<?php
session_start();
include("config.php");
//print_r($GLOBALS);

	$platno=$_REQUEST['platno'];
	$make=$_REQUEST['make'];
	$model=$_REQUEST['model'];
	$year=$_REQUEST['year'];
	$color=$_REQUEST['color'];

//echo $password;

insertIntoDB("begin
addcars('$platno','$make','$model','$year','$color');
end;");

header("location: cars.php");

?>

</pre>