<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>


</head>
<?php if(isset($_SESSION['username']) and isset($_SESSION['password'])){ ?>
<?php

// The function header by sending raw excel
header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
$date=date("d-m-Y");


header("Content-Disposition: attachment; filename=deleted_sample_Report$date.xls");
 
// Add data table
//include 'view_yap_members_exc.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<!--<link rel="stylesheet" type="text/css" href="style.css" />-->
</head>


<body>
<table  border="1" class="table">
<tr align='left'><th>LABNO</th><th>STUDY</th><th>PID</th><th>NAME</th><th>VILLAGE</th><th>SUBCOUNTY</th><th>DISTRICT</th>
<th>SEX</th><th>TEL </th>
<th>SPEC TYPE</th><th>APPEARANCE</th><th>VOLUME</th><th>RCT DATE</th><th>COLL DATE</th><th>ACCESSION TECH</th>
<th>DELETION DATE</th><th>REASON</th></tr>
<?php

include("../includes/dbconfig.php");

include("../includes/dbconfig.php");
 if(isset($_GET['fromdate'])){
$fromdate=$_GET['fromdate']; 
$todate=$_GET['todate']; 

} 
include("../includes/dbconfig.php");
if($fromdate!=''){
$sql="SELECT * FROM deleted_samples where deletiondate between '".$fromdate."' and '".$todate."' ORDER BY id DESC ";	
}else
{
	$sql="SELECT * FROM deleted_samples ORDER BY id DESC LIMIT 1000";
}
$rejects=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$countrejected=mysqli_num_rows($rejects);

while ($reject = mysqli_fetch_array($rejects,MYSQLI_ASSOC)) {
$id = $reject['id'];
$patient= $reject['patient'];
$labno=$reject['labno'];
$studycode = $reject['studycode'];
$rctdate = $reject['rctdate'];
//$colldate = $reject['colldate'];

$appearance = $reject['appearance'];
$volume=$reject['volume'];
$colldate=$reject['colldate'];
$accessiontech=$reject['accessiontech'];
$deletiondate=$reject['deletiondate'];
$rejectionreason=$reject['rejectionreason'];
$spectype=$reject['spectype'];
//$rejected_by=$reject['rejected_by'];
$reject_id=$reject['id'];

//Patient details
$select_patient="SELECT * FROM patients WHERE id='$patient'";
	$patients=mysqli_query($dbconnection,$select_patient) or die("ERROR : " . mysqli_error($dbconnection));
	while ($patient = mysqli_fetch_array($patients,MYSQLI_ASSOC)) {
		$pid_other=$patient['pid_other'];if($pid_other=='') $pid_other='NP';
		$pid=$patient['pid']; if($pid=='') $pid='NP';
		$id=$patient['id'];
		$study=$patient['study']; if($study=='') $study='NP';
		//$pid_other=$patient['p'];
		$tel=$patient['telephone']; if($tel=='') $tel='NP';
		$village=$patient['village']; if($village=='') $village='NP';
		$district=$patient['district']; if($district=='') $district='NP';
		$subcounty=$patient['subcounty']; if($subcounty=='') $subcounty='NP';
		$name=$patient['name']; if($name=='') $name='NP';
		$sex=$patient['gender']; if($sex=='') $sex='NP';
		$pinitials=$patient['pinitials']; if($pinitials=='') $initials='NP';

		}
		$select_rejectreason="SELECT * FROM rejection_reason WHERE id='$rejectionreason' ";
	$reason_reject=mysqli_query($dbconnection,$select_rejectreason) or die("ERROR : " . mysqli_error($dbconnection));
	while ($reason = mysqli_fetch_array($reason_reject,MYSQLI_ASSOC)) {
		$rejectionreason=$reason['reason'];
		
		}
//Inserting titles to tds		
echo "<tr class='accessionrow'  align='left' title='$name '>
<td>$labno</td>
<td>$study</td>
<td>$pid</td>
<td>$name</td>
<td>$village</td>
<td>$subcounty</td>
<td>$district</td> 
<td>$sex</td>
<td>$tel</td>
<td>$spectype</td>
<td>$appearance</td>
<td>$volume</td>
<td>$rctdate</td>
<td>$colldate</td>
<td>$accessiontech</td>
<td>$deletiondate</td>
<td>$rejectionreason</td>

</tr>";
}	
echo "</table>";	
			
			
?>
</div>
</div>
</fieldset>
<script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>
</div>
 
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='index.php'>Login</a> to access the resources.</center>";?>
</div>
</div>
<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>
</div>

</body>
</html>