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


header("Content-Disposition: attachment; filename=sample_rejection_Report$date.xls");
 
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
<tr align='left'><th>STUDY</th><th>PID</th><th>NAME</th><th>VILLAGE</th><th>SUBCOUNTY</th><th>DISTRICT</th>
<th>SEX</th><th>TEL </th>
<th>COLL TIME</th><th>COLL DATE</th><th>APPEARANCE</th><th>VOLUME</th><th>RCT DATE</th><th>RCT TIME</th><th>REASON</th><th>REJECTED BY</th></tr>

<?php

include("../includes/dbconfig.php");

include("../includes/dbconfig.php");
 if(isset($_GET['fromdate'])){
$fromdate=$_GET['fromdate']; 
$todate=$_GET['todate']; 

} 
include("../includes/dbconfig.php");
if($fromdate!=''){
$sql="SELECT * FROM rejected_samples where rctdate between '".$fromdate."' and '".$todate."' ORDER BY id DESC LIMIT 1000";	
}else
{
	$sql="SELECT * FROM rejected_samples ORDER BY id DESC LIMIT 1000";
}
$rejects=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$countrejected=mysqli_num_rows($rejects);




while ($reject = mysqli_fetch_array($rejects,MYSQLI_ASSOC)) {
$id = $reject['id'];
$patient= $reject['patient'];
$studycode = $reject['studycode'];
$rctdate = date('d-M-y',strtotime($reject['rctdate']));
$colldate = date('d-M-y',strtotime($reject['colldate']));
$rcttime = $reject['rcttime'];
$appearance = $reject['appearance'];
$volume=$reject['volume'];

$colltime=$reject['colltime'];
$rejectionreason=$reject['reject_reason'];
$rejected_by=$reject['rejected_by'];

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
		$rejectionreason=$reason['reason']; if($rejectionreason=='') $rejectionreason='NP';
		}
//Inserting titles to tds		
echo "<tr class='accessionrow'  align='left' title='$name '>
<td>$study</td>
<td>$pid</td>
<td>$name</td>
<td>$village</td>
<td>$subcounty</td>
<td>$district</td> 
<td>$sex</td>
<td>$tel</td>

<td>$colltime</td>
<td>$colldate</td>
<td>$appearance</td>
<td>$volume</td>
<td>$rctdate</td>
<td>$rcttime</td>
<td>$rejectionreason</td>

<td>$rejected_by</td>
<td></tr>";
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