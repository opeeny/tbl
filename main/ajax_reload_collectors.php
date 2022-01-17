<?php
$hint="";

include("../includes/dbconfig.php");

$sql="SELECT * FROM collectors ORDER BY name";

$collectors=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

$hint=$hint . "<option value='Not Provided'>-Select Collector-</option>";

	while ($collector = mysqli_fetch_array($collectors,MYSQLI_ASSOC)) {
		$cname = $collector['name'];
		$cinitials = $collector['initials'];
		//$r_id = $requestor['id'];
		//$organisation = $requestor['organisation'];
		
		$hint=$hint . "<option value='$cinitials' style='background-color:#CCCCCC;'>$cinitials-$cname</option>";	
	}
$response=$hint;

echo $response;
?>