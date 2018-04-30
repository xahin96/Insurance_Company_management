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
	var_dump($platno);
		var_dump($make);

			var_dump($model);

				var_dump($year);

					var_dump($color);

//echo $password;
		$sql="begin addcars($platno,'$make','$model',$year,'$color'); end;";
		$stid=oci_parse($conn,$sql);
        oci_execute($stid);

/*insertIntoDB("begin
addcars($platno,'$make','$model',$year,'$color');
end;");*/

header("location: cars.php");

?>

</pre>