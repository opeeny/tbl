<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

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
<form action="" method="post" id="patient" autocomplete="off">
<div class="col-md-12"> 
  <div class="form-group"> 
  <label  class="col-sm-2 control-label label-format">SERACH TERM:</label>
      <div class="col-sm-7"> 
        <input type="text" style="color: #222;
text-transform: capitalize;"class="form-control" placeholder="Search Using Patient Name, PID , PID 2 OR STUDY CODE" 
onkeyup="showRejectedPatients_name(this.value)"name="patient_id"  />
      </div>  
    </div>
	</div>
	 <div id="livesearch" style='font-size:0.8em;background-color:; border:; max-height:300px; width:; margin-right:; padding:; overflow:auto;'></div>
	</form>
	<div class="col-md-12">

<?php if(isset($_GET['fromdate'])){
$fromdate=$_GET['fromdate']; 
$todate=$_GET['todate']; 

} ?>
<?php // echo "<font color='red'><b><center> $requestor_reg_aborted</center></b></font>"; ?>

<fieldset class="scheduler-border"> <legend  class="scheduler-border">
<button class="btn btn-success" onclick="location.href='rejections_downloads.php?fromdate=<?php echo $fromdate?>&&todate=<?php echo $todate ?>'">Download</button>REJECTED SAMPLES(LATEST 1000 SAMPLES ONLY)<<<button class="btn btn-info" onclick="location.href='<?php $_SERVER['PHP_SELF']?>'">REFRESH</button>>></legend>


<div id="" style='font-size:0.9em; background-color:; border:; max-height:700px; width:; margin-right:; padding:; overflow:scroll;'>

<?php 
include("../includes/dbconfig.php");
if($fromdate!=''){
$sql="SELECT * FROM rejected_samples where rctdate between '".$fromdate."' and '".$todate."' ORDER BY id DESC LIMIT 1000";	
}else
{
	$sql="SELECT * FROM rejected_samples ORDER BY id DESC LIMIT 1000";
}
$rejects=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$countrejected=mysqli_num_rows($rejects);
if($countrejected>0){
?>
<div class="table-responsive">
<table  border="1" class="table">
<tr align='left'><th>STUDY</th><th>PID</th><th>NAME</th><th>SEX</th>
<th>COLL TIME</th><th>COLL DATE</th><th>APPEARANCE</th><th>VOLUME</th><th>RCT DATE</th><th>RCT TIME</th><th>REASON</th><th>REJECTED BY</th></tr>

<?php




while ($reject = mysqli_fetch_array($rejects,MYSQLI_ASSOC)) {
$id = $reject['id'];
$patient= $reject['patient'];
$studycode = $reject['studycode'];

$rctdate = $reject['rctdate'];
$colldate = $reject['colldate'];
$rcttime = $reject['rcttime'];
$appearance = $reject['appearance'];
$volume=$reject['volume'];

$colltime=$reject['colltime'];
$rejectionreason=$reject['reject_reason'];
$rejected_by=$reject['rejected_by'];
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
		if($colltime='00:00:00'){$colltime='';}
		if($colldate='0000:00:00'){$colldate='';};
if($rctime='00:00:00'){$rcttime='';}
		if($rctdate='0000:00:00'){$rctdate='';};
		}
		$select_rejectreason="SELECT * FROM rejection_reason WHERE id='$rejectionreason' ";
	$reason_reject=mysqli_query($dbconnection,$select_rejectreason) or die("ERROR : " . mysqli_error($dbconnection));
	while ($reason = mysqli_fetch_array($reason_reject,MYSQLI_ASSOC)) {
		$rejectionreason=$reason['reason'];
		
		}
//Inserting titles to tds		
echo "<tr class='accessionrow'  align='left' title='$name '>

<td>$study</td>
<td>$pid</td>

<td>$name</td>
 <td>$sex</td>
<td>$colltime</td>
<td>$colldate</td>
<td>$appearance</td>
<td>$volume</td>
<td>$rctdate</td>
<td>$rcttime</td>
<td title='$rejectionreason'><a href=''>point here</a></td><td>$rejected_by</td>
<td>
<button class='btn btn-success' onclick=\"location.href='samples_registration.php?pid=". $pid."&&otherpid=$pid_other"."&&rejection_no=".$reject_id."&&s_code=".$study."&&pauto_id=". $id . "'\",\"mywindow\",\"fullscreen=yes,resizable=no,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=no\");'>Sample Reg</button></td></tr>";
}
echo "</table>";	
}				
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