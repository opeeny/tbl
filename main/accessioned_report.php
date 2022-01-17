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


header("Content-Disposition: attachment; filename=Accessioned_Samples$date.xls");
 
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
<table border="1">
<tr><th>LAB NO</th><th>STUDY</th><th>PID</th><th>NAME</th><th>SEX</th><th>DISTRICT</th>
<th>APPEARANCE</th><th>VOLUME</th><th>SPECTYPE</th><th>INTERVAL</th><th>TESTS REQUESTED</th><th>RCT TIME</th><th>REVIEW TIME</th>
<th>REVIEW TIME</th><th>EDIT TIME</th></tr>

<?php
include("../includes/dbconfig.php");

	$studycode= $_GET['studycode'];
	$fromdate= $_GET['fromdate'];
	$todate= $_GET['todate'];
	if($fromdate=='' or $todate==''){$date='';}
	if($studycode!='' and $date==''){
$sql="SELECT * FROM samples where studycode='$studycode' ORDER BY labno DESC ";
	}
	if($studycode=='' and $date!=''){
$sql="SELECT * FROM samples where rctdate between '".$fromdate."' and '".$todate."' ORDER BY labno DESC ";
	}
	if($studycode!='' and $date!=''){
$sql="SELECT * FROM samples where studycode='$studycode' and  (rctdate between '".$fromdate."' and '".$todate."') ORDER BY labno DESC ";
	}
	if($studycode=='' and $date=='' ){
$sql="SELECT * FROM samples ORDER BY labno DESC ";
	}
//Sample details rctdate BETWEEN DATEADD(DAY, -3, @rctdate) AND @rctdate datediff(d,SubmissionDate,GETDATE())

$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

while ($sample = mysqli_fetch_array($samples,MYSQLI_ASSOC)) {
$labno = $sample['labno'];
$patient= $sample['patient'];
$studycode = $sample['studycode'];
$rctdate = $sample['rctdate'];
if($rctdate=='0000-00-00'){$rctdate='';}
$rcttime = $sample['rcttime'];
$appearance = $sample['appearance'];
$volume=$sample['volume'];
$colldate=$sample['colldate'];
$spectype=$sample['spectype'];
$interval=$sample['visitinterval'];
$colltime=$sample['colltime'];
$examination=$sample['examination'];
$reviewdate=$sample['lastreviewtime'];
if($reviewdate=='0000-00-00 00:00:00'){$reviewdate='';}
$editdate=$sample['lastedittime'];
if($editdate=='0000-00-00 00:00:00'){$editdate='';}
//Patient details
$select_patient="SELECT * FROM patients WHERE id='$patient'";
	$patients=mysqli_query($dbconnection,$select_patient) or die("ERROR : " . mysqli_error($dbconnection));
	while ($patient = mysqli_fetch_array($patients,MYSQLI_ASSOC)) {
		$pid=$patient['pid']; if($pid=='') $pid='NP';
		$study=$patient['study']; if($study=='') $study='NP';
		$name=$patient['name']; if($name=='') $name='NP';
		$sex=$patient['gender']; if($sex=='') $sex='NP';
		$district=$patient['district']; if($district=='') $sex='NP';
		}
//Inserting titles to tds		
echo "<tr class='accessionrow' bgcolor='#fffbf6' align='left' title='$labno-$studycode'>
<td>$labno</td>
<td>$studycode</td>
<td>$pid</td>

<td>$name</td>
<td>$sex</td>
<td>$district</td>
<td>$appearance</td>
<td>$volume</td>
<td>$spectype</td>
<td>$interval</td>
<td>$examination</td>

<td>$rctdate</td>
<td>$rcttime</td>
<td>$reviewdate</td>
<td>$editdate</td></tr>";
}
echo "</table>";					
?>

</div>
</div>
</div>
 
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>
</div>

<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>

</body>
</html>


