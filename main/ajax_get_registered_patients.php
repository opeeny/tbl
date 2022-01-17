<script type="text/javascript">
	function showpatient(){
		alert("This iss the p");
	}
</script>
<style type="text/css">
	.accessionrow:hover { background-color: #CCCCCC; font-weight: ;}
</style>
<?php
$q = $_GET['q'];
//lookup for all the links from the xml file if length of q>0
include("../includes/connection.php");
if(strlen($q>0)){
	$hint = "";//if other coming content is dynamic, content later builds
	$sql = "SELECT * FROM patients WHERE pid like '%$q%' or other_pid like '%$q%' or name like '%$$q%'";
	$query = mysqli_query($con, $sql) or die("Error ".mysqli_error($con));
	$count=mysqli_num_rows($query);
	if($count!=0){
		
		echo "<font color='green' size='5'><u>Suggested names of registered patients</u></font>";
		$hint = "
		<div class='table-responsive'>
			<table border='2' class='table' cellpadding='5' cellspacing='1' bgcolor='91B4DD'>
				<tr bgcolor='#fffbf6' align='left'>
					<th>PID#</th>
					<th>Initials</th>
					<th>Name</th>
					<th>Study</th>
					<th>Telephone</th>
					<th>LC 1 / Village</th>
					<th>Res. District</th>
					<th>Options</th>
				</tr>";
			while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				$other_pid = $row['other_pid'];
				$hint=$hint. "
				<tr bgcolor='#fffbf6' align='left' class='accessionrow' title='Please ensure that ** Details match those on the request form** '>'
				<td>".$row['pid']."</td>
				<td>".$row['pinitials']."</td>
				<td><a title='Register a sample for ".$row['name'] . "' href='samples_registration.php?pid=". $row['pid']."&&other_pid=$other_pid".
				"&&study_code=". $row['study_code']."&&pauto_id=". $row['id']."'>" . $row['name'] . "</a></td>
				<td>".$row['study_code']."</td>
				<td>".$row['telephone']."</td>
				<td>".$row['village']."</td>
				<td>".$row['district']."</td>
				<td>
				<button class='btn btn-success' onclick=\"location.href='samples_registration.php?pid=". $row['pid']."&&other_pid=$other_pid"."&&study_code=". $row['study_code']."&&pauto_id=". $row['id'] . "'\",\"mywindow\",\"fullscreen=yes,resizable=no,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=no\");'>Sample Reg</button></button>
				<button class='btn btn-info' onclick=\"location.href='showpatient.php?patient=". $row['id'] . "'\",\"mywindow\",\"fullscreen=yes,resizable=no,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=no\");'>More Details</button>
				<button class='btn btn-danger' onclick=\"location.href='sample_rejection.php?pid=". $row['pid']."&&other_pid=$other_pid"."&&study_code=". $row['study_code']."&&pauto_id=". $row['id'] . "'\",\"mywindow\",\"fullscreen=yes,resizable=no,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=no\");'>Reject Sample</button>
				</td>
				</tr>";
			}
		$hint=$hint."</table></div>";
		$response=$hint;//here
	}else {
		$response = "<font color='red' size='5'> >>> There's no suggestion from the database </font>";	
	}
	echo $response;
	echo "<br><br>";
}
?>