<?php
$conn = oci_connect('INSURANCE', 'root', 'localhost:1521/XE');
/*if (!$conn) 
{
   die('Error while connecting');
}

oci_close($conn);*/

/*function insertIntoDB($sql)
	{
		$conn1 = oci_connect('INSURANCE', 'root', 'localhost:1521/XE');
		$stmt2 = oci_parse($conn1, $sql);
		oci_execute($stmt2) ;
		oci_close($conn1);
	}
*/
?>