<?php
$hint2="";

include("../includes/dbconfig.php");

$sql="SELECT * FROM transporters ORDER BY name";

$transporters=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

$hint2=$hint2 . "<option value='Not Provided'>-Select Transporter-</option>";

	while ($transporter = mysqli_fetch_array($transporters,MYSQLI_ASSOC)) {
		$cname = $transporter['name'];
		$cinitials = $transporter['initials'];
		//$r_id = $requestor['id'];
		//$organisation = $requestor['organisation'];
		
		$hint2=$hint2 . "<option value='$cinitials' style='background-color:#CCCCCC;'>$cinitials-$cname</option>";	
	}
$response2=$hint2;

echo $response2;
?>