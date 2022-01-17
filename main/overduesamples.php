<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?><?php
include("../includes/dbconfig.php");	
?>

<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<?php include("../includes/header_content.php"); ?>
<?php include("../includes/header_bootstrap_content.php"); ?>
</head>

 
<body>

<div id="wrapper" class='container'>

<div id="banner" class='row'>
<?php include("../includes/banner.php"); ?>
</div>

<div id="middle" class='row'>
<?php  // start checking for illegal login
if(isset($_SESSION['username']) and isset($_SESSION['password'])){ ?>
 
<div id="welcome">
<?php include("../includes/welcomediv.php"); ?>
</div>

<div id="content">


<div class="col-md-12"> 
<legend align="center">MICROSCOPY FM OVERDUE SAMPLES</legend>

<div id="" style='font-size:0.8em; background-color:; border:; max-height:400px; width:; margin-right:; padding:; overflow:auto;'>

<table class=" table" bgcolor='91B4DD'>
<tr bgcolfor='#fffbf6'><th>LAB NO</th><th>STUDY</th><th>PID</th><th>Accession Date</th><th>Date Today</th>
<th>Duration</th><th>TAT</th></tr>

<?php
include("../includes/dbconfig.php");
//check for turn around time
$select_tat="SELECT * FROM  option_examination where code='fm'";
	$tats=mysqli_query($dbconnection,$select_tat) or die("ERROR : " . mysqli_error($dbconnection));
	while ($tat = mysqli_fetch_array($tats,MYSQLI_ASSOC)) {
		$tatfm=$tat['tat']; 
		}
		//echo "<h1>tat is $tatfm";
		
//Sample details rctdate BETWEEN DATEADD(DAY, -3, @rctdate) AND @rctdate datediff(d,SubmissionDate,GETDATE())
$sql="SELECT s.*,f.* from samples s,results_fm f where s.labno=f.labno and f.result=''";
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

while ($sample = mysqli_fetch_array($samples,MYSQLI_ASSOC)) {
$labno = $sample['labno'];
$patient= $sample['patient'];
$studycode = $sample['studycode'];
$examination=$sample['examination'];
$accessiontime=$sample['accessiontime'];
$today=date('Y-m-d H:i:s', time());
$date1=date_create("$accessiontime");
$date2=date_create("$today");
$diff=date_diff($date1,$date2);
$timespent=$diff->format("%R%a");
if($accessiontime=='0000-00-00 00:00:00'){$$accessiontime='';}else{
$accessiontime = date('d-M-y H:i:s',strtotime($accessiontime));}

$todaycoverted=date('d-m-Y H:i:s', time());


//Patient details
$select_patient="SELECT * FROM patients WHERE id='$patient'";
	$patients=mysqli_query($dbconnection,$select_patient) or die("ERROR : " . mysqli_error($dbconnection));
	while ($patient = mysqli_fetch_array($patients,MYSQLI_ASSOC)) {
		$pid=$patient['pid']; if($pid=='') $pid='NP';
		$study=$patient['study']; if($study=='') $study='NP';
		
		//$age=$patient['age']; if($age==0) $age='NP';
		}
		if($tatfm<$timespent){
//Inserting titles to tds		
echo "<tr class='accessionrow' bgcolor='#fffbf6' align='left' title='$studycode-$labno'>
<td>$labno</td>
<td>$studycode</td>
<td>$pid</td>
<td>$accessiontime</td>
<td>$todaycoverted</td>
<td>$timespent</td>
<td>$tatfm</td>
</tr>";
		}
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