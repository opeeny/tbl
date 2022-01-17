<?php
$hint = "";
include("../includes/connection.php");
$query=mysqli_query($con, "SELECT * FROM requestors ORDER BY organisation") or die("Error ".mysqli_error($con));
$hint=$hint . "<option value='Not Provided'>-Select requester-</option>";
while($row=mysqli_fetch_array($query)){
	$rname=$row['name'];
	$organisation=$row['organisation'];
	$hint = $hint . "<option value='$rname' style='background-color:#CCCCCC'>$name</option>";
	$response = $hint;
	echo $response;
}
?>