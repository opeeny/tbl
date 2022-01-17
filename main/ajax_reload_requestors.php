<?php
$hint="";

include("../includes/dbconfig.php");

$sql="SELECT * FROM requestors ORDER BY organisation";

$requestors=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

$hint=$hint . "<option value='Not Provided'>-Select requester-</option>";

	while ($requestor = mysqli_fetch_array($requestors,MYSQLI_ASSOC)) {
		$rname = $requestor['name'];
		$r_id = $requestor['id'];
		$organisation = $requestor['organisation'];
		
		$hint=$hint . "<option value='$rname' style='background-color:#CCCCCC;'>$rname-$organisation </option>";	
	}
$response=$hint;

echo $response;
?>