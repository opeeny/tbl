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


header("Content-Disposition: attachment; filename=overduesamples$date.xls");
 
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

<?php 
 if(isset($_GET['action'])){ $action=$_GET['action']; 
$code=$action;
//$title=$title;
include("../includes/dbconfig.php");
	 $code=$code;
  $fromdate=$_GET['fromdate']; 
   $todate=$_GET['todate']; 
if($code=='overdueothers'){ 
 $code=$_GET['testname'];
 
$title=$code.' '.'OVERDUE SAMPLES ';
 $testentry='others';
$newtest=$code;
$select_tat="SELECT * FROM  option_examination_others where code='$code'";
	$tats=mysqli_query($dbconnection,$select_tat) or die("ERROR : " . mysqli_error($dbconnection));
	while ($tat = mysqli_fetch_array($tats,MYSQLI_ASSOC)) {
		$tatfm=$tat['tat']; 
		}
		if ($fromdate=='' or $todate==''){
		$sql="SELECT s.*,f.* from samples s,results_others f where s.labno=f.labno and f.result='' 
and f.test='$code'";
	
}else{
		
$sql="SELECT s.*,f.* from samples s,results_others f where s.labno=f.labno and f.result='' 
and  (s.rctdate between '".$fromdate."' and '".$todate."') and f.test='$code'";
}
}
if($code=='dst2'){ 
$title='DST 2  OVERDUE SAMPLES';
  $testentry='dst2';
$code=$code;
	
$select_tat="SELECT * FROM  option_examination where code='$code'";
	$tats=mysqli_query($dbconnection,$select_tat) or die("ERROR : " . mysqli_error($dbconnection));
	while ($tat = mysqli_fetch_array($tats,MYSQLI_ASSOC)) {
		$tatfm=$tat['tat']; 
		}
		if ($fromdate=='' or $todate==''){
	$sql="SELECT s.*,f.* from samples s,results_dst2 f where s.labno=f.labno 
and resdate='0000-00-00'";
	
	}else{
$sql="SELECT s.*,f.* from samples s,results_dst2 f where s.labno=f.labno 
and resdate='0000-00-00' and  (s.rctdate between '".$fromdate."' and '".$todate."')";
}
}
if($code=='dst1'){ 
$title='DST 1  OVERDUE SAMPLES';
  $testentry='dst1';
$code=$code;
$select_tat="SELECT * FROM  option_examination where code='$code'";
	$tats=mysqli_query($dbconnection,$select_tat) or die("ERROR : " . mysqli_error($dbconnection));
	while ($tat = mysqli_fetch_array($tats,MYSQLI_ASSOC)) {
		$tatfm=$tat['tat']; 
		}
if ($fromdate=='' or $todate==''){
	$sql="SELECT s.*,f.* from samples s,results_dst1 f where s.labno=f.labno 
and resdate='0000-00-00'";
}else{
		$sql="SELECT s.*,f.* from samples s,results_dst1 f where s.labno=f.labno 
and resdate='0000-00-00' and  (s.rctdate between '".$fromdate."' and '".$todate."')";

}
}
if($code=='bloodculture'){ 
$title='BLOOD CULTURE OVERDUE SAMPLES';
  $testentry='bloodculture';
$code=$code;
$select_tat="SELECT * FROM  option_examination where code='$code'";
	$tats=mysqli_query($dbconnection,$select_tat) or die("ERROR : " . mysqli_error($dbconnection));
	while ($tat = mysqli_fetch_array($tats,MYSQLI_ASSOC)) {
		$tatfm=$tat['tat']; 
		}
		
$sql="SELECT s.*,f.* from samples s,results_bloodculture f where s.labno=f.labno and  (s.rctdate between '".$fromdate."' and '".$todate."')";
}
if($code=='solidculture'){ 
$title='SOLID CULTURE OVERDUE SAMPLES';
  $testentry='solidculture';
$code=$code;
$select_tat="SELECT * FROM  option_examination where code='$code'";
	$tats=mysqli_query($dbconnection,$select_tat) or die("ERROR : " . mysqli_error($dbconnection));
	while ($tat = mysqli_fetch_array($tats,MYSQLI_ASSOC)) {
		$tatfm=$tat['tat']; 
		}
if ($fromdate=='' or $todate==''){
$sql="SELECT s.*,f.* from samples s,results_solidculture f where s.labno=f.labno and resdate='0000-00-00'";
}else{
$sql="SELECT s.*,f.* from samples s,results_solidculture f where s.labno=f.labno
and resdate='0000-00-00' and  (s.rctdate between '".$fromdate."' and '".$todate."')";
	
}
}
if($code=='liquidculture'){ 
$title='LIQUID CULTURE OVERDUE SAMPLES';
 $testentry='liquidculture';
$code=$code;
$select_tat="SELECT * FROM  option_examination where code='$code'";
	$tats=mysqli_query($dbconnection,$select_tat) or die("ERROR : " . mysqli_error($dbconnection));
	while ($tat = mysqli_fetch_array($tats,MYSQLI_ASSOC)) {
		$tatfm=$tat['tat']; 
		}
		if ($fromdate=='' or $todate==''){
$sql="SELECT s.*,f.* from samples s,results_liquidculture f where s.labno=f.labno and resdate='0000-00-00'";

		}else{
		$sql="SELECT s.*,f.* from samples s,results_liquidculture f where s.labno=f.labno
and resdate='0000-00-00' and  (s.rctdate between '".$fromdate."' and '".$todate."')";
	
		}

}
if($code=='genexpert'){ 
$title='GENEXPERT OVERDUE SAMPLES';
 $testentry='genexpert';
$code=$code;
$select_tat="SELECT * FROM  option_examination where code='$code'";
	$tats=mysqli_query($dbconnection,$select_tat) or die("ERROR : " . mysqli_error($dbconnection));
	while ($tat = mysqli_fetch_array($tats,MYSQLI_ASSOC)) {
		$tatfm=$tat['tat']; 
		}
if ($fromdate=='' or $todate==''){
$sql="SELECT s.*,f.* from samples s,results_genexpert f where s.labno=f.labno
 and f.result=''";
}else{
$sql="SELECT s.*,f.* from samples s,results_genexpert f where s.labno=f.labno
 and f.result='' and  (s.rctdate between '".$fromdate."' and '".$todate."')";
} 
}
if($code=='fm'){ 
$title='MICROSCOPY FM OVERDUE SAMPLES';
$testentry='fm'; 
$code=$code;
$select_tat="SELECT * FROM  option_examination where code='$code' ";
	$tats=mysqli_query($dbconnection,$select_tat) or die("ERROR : " . mysqli_error($dbconnection));
	while ($tat = mysqli_fetch_array($tats,MYSQLI_ASSOC)) {
		$tatfm=$tat['tat']; 
		}
if ($fromdate=='' or $todate==''){
$sql="SELECT s.*,f.* from samples s,results_fm f where s.labno=f.labno and f.result=''";
} else{
	
$sql="SELECT s.*,f.* from samples s,results_fm f where s.labno=f.labno and f.result='' and  (s.rctdate between '".$fromdate."' and '".$todate."')";
	
}
}
if($code=='zn'){ 
$title='MICROSCOPY ZN OVERDUE SAMPLES';
 $testentry='zn';
$code=$code;
$select_tat="SELECT * FROM  option_examination where code='$code'";
	$tats=mysqli_query($dbconnection,$select_tat) or die("ERROR : " . mysqli_error($dbconnection));
	while ($tat = mysqli_fetch_array($tats,MYSQLI_ASSOC)) {
		$tatfm=$tat['tat']; 
		}
	if ($fromdate=='' or $todate==''){
	$sql="SELECT s.*,f.* from samples s,results_zn f where s.labno=f.labno 
and f.result=''";	
	}else{		
$sql="SELECT s.*,f.* from samples s,results_zn f where s.labno=f.labno 
and f.result='' and  (s.rctdate between '".$fromdate."' and '".$todate."')";
} 

}

?><br>
<?php echo "<h2><b><center>$title </center></b></h2>"; 
?>

<table class=" table" bgcolor='91B4DD' border="1">
<tr bgcolor='#fffbf6'><th>LAB NO</th><th>STUDY</th><th>PID</th>
<th>Recived</th><th>Processed</th><?php if($code=='solidculture'){?>
<td>Liquid <br>Culture</td> <td>Liquid <br>TTD</td><?php } ?>
<?php if($code=='liquidculture'){?><th>Smear(CFM)</th><?php } ?>
<th>Date Today</th>
<th>Duration</th><th>TAT</th><th>Status</th></tr>

<?php
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

while ($sample = mysqli_fetch_array($samples,MYSQLI_ASSOC)) {
$labno = $sample['labno'];
$patient= $sample['patient'];
$studycode = $sample['studycode'];
$examination=$sample['examination'];
$accessiontime=$sample['accessiontime'];
$rctdate=$sample['rctdate'];
$processdate=$sample['processdate'];
$processdate = date('d-M-y',strtotime($processdate));
$rcttime=$sample['rcttime'];
$media=$sample['media'];
$rctdatetime=$rctdate.' '.$rcttime;
$today=date('Y-m-d H:i:s', time());
$date1=date_create("$rctdatetime");
$date2=date_create("$today");
$diff=date_diff($date1,$date2);
$timespent=$diff->format("%R%a");
//if($rctdatetime=='0000-00-00 00:00:00'){$rctdatetime='';}else{
$rctdatetime = date('d-M-y H:i:s',strtotime($rctdatetime));
//}

$todaycoverted=date('d-m-Y H:i:s', time());

$liquidsmear="SELECT * FROM  results_fm where labno='$labno'";
	$lsmears=mysqli_query($dbconnection,$liquidsmear) or die("ERROR : " . mysqli_error($dbconnection));
	while ($lsmear = mysqli_fetch_array($lsmears,MYSQLI_ASSOC)) {
		$lfm=$lsmear['result']; 
		}
$liquidsolid="SELECT * FROM  results_liquidculture where labno='$labno'";
	$lsolids=mysqli_query($dbconnection,$liquidsolid) or die("ERROR : " . mysqli_error($dbconnection));
	while ($lsolid = mysqli_fetch_array($lsolids,MYSQLI_ASSOC)) {
		$lsolidttd=$lsolid['result_dtp']; 
		$lsolidinterpret=$lsolid['interpretation']; 
		}
//Patient details
$select_patient="SELECT * FROM patients WHERE id='$patient'";
	$patients=mysqli_query($dbconnection,$select_patient) or die("ERROR : " . mysqli_error($dbconnection));
	while ($patient = mysqli_fetch_array($patients,MYSQLI_ASSOC)) {
		$pid=$patient['pid']; if($pid=='') $pid='NP';
		$study=$patient['study']; if($study=='') $study='NP';
		
		//$age=$patient['age']; if($age==0) $age='NP';
		}
		if($tatfm<$timespent){
			$status='Sample Overdue';
		}else{
			$status='';
			
		}
?>		

<tr class='accessionrow' bgcolor='#fffbf6' align='left' title='$studycode-$labno'>
<td><?php echo $labno ?></td>
<td><?php echo $studycode ?></td>
<td><?php echo$pid ?></td>
<td><?php echo$rctdatetime ?></td>
<td><?php echo$processdate ?></td>
<?php if($code=='liquidculture'){echo "<td>$lfm</td>"; } ?>
<?php if($code=='solidculture'){echo "<td>$lsolidinterpret</td> <td>$lsolidttd</td>"; } ?>
<td><?php echo $todaycoverted ?></td>
<td><?php echo$timespent ?></td>
<td><?php echo$tatfm ?></td>
<td><?php echo$status ?></td>
</tr>
<?php 		
}

echo "</table>";					
 ?>


<?php 
}
?></div>
</div>
</div>
<?php


 // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>
</div>
</div>


<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>

<script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>
</div>
</body>
</html>