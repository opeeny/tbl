<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); 
error_reporting(0);?>

<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<?php include("../includes/header_content.php"); ?>
<?php include("../includes/header_bootstrap_content.php"); ?>

 
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
<div class="form-horizontal">
<div class="form-group"> 
<form name="microscopy" action="processing_worksheet.php" method="GET"  onsubmit=" return validateform()">

<label class="col-md-1">Lab No From:</label>
<div class="col-sm-2"><input class="form-control" type="number" name="labfrom"required  placeholder="Filter By Labno">
 </div>
<label class="col-md-1">Lab No To:</label>
<div class="col-sm-2"><input class="form-control" type="number" name="labto" required placeholder="Filter By Labno">
 </div>

			
			<div class="col-sm-1"> 
<input type="submit" class="btn btn-success"name="downloadothers" value="Submit">
</div>
			
			
		</div>
				
</div>
</form>
</div>
</div>
<?php 
 if(isset($_GET['labfrom'])){
	  $labfrom= $_GET['labfrom'];
  $labto= $_GET['labto'];
   
  }?>
<legend align="center">
<input type="button" value="BACK" class="btn btn-info" onclick="history.go(-1);return true;">
ACCESSIONED SAMPLES PROCESS WORKSHEET
<button class="btn btn-success" 
onclick="location.href='processworksheet_downloads.php?labfrom=<?php echo $labfrom?>&&labto=<?php echo $labto ?>'">Download</button>
</legend>



<div id="" style='font-size:0.8em; background-color:; border:; max-height:400px; width:; margin-right:; padding:; overflow:auto;'>

<table class="table table-bordered" bgcolor='91B4DD'>
<tr bgcolor='#fffbf6'><th>LAB NO</th>
<th>STUDY</th>
<th>APPEARANCE</th><th>VOLUME</th>
<th>SPECTYPE</th><th>INTERVAL</th>
<th>PROCESS DATE</th><th>PROCESS TIME</th><th>PROCESS TECH</th>

</tr>

<?php 
 
  $today=date('Y-m-d', time());
include("../includes/dbconfig.php");
if($labto!=''){
$sql="SELECT * FROM samples where (labno between '".$labfrom."' and '".$labto."')";
}else{
$sql="SELECT * FROM samples where (rctdate='$today')";	
}

$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

while ($sample = mysqli_fetch_array($samples,MYSQLI_ASSOC)) {
$labno = $sample['labno'];
$patient= $sample['patient'];
$studycode = $sample['studycode'];

$rctdate = date('d-M-y',strtotime($sample['rctdate']));
if($rctdate=='01-Jan-70'){$rctdate='';}
$rcttime = $sample['rcttime'];
$appearance = $sample['appearance'];
$volume=$sample['volume'];
$colldate=$sample['colldate'];
$spectype=$sample['spectype'];
$interval=$sample['visitinterval'];
$colltime=$sample['colltime'];
$examination=$sample['examination'];
$reviewdate=$sample['lastreviewtime'];
if($reviewdate=='0000-00-00 00:00:00'){$reviewdate='';}else{
$reviewdate = date('d-M-y H:i:s',strtotime($reviewdate));}
$editdate=$sample['lastedittime'];
$editdate=$sample['lastedittime'];if($editdate=='0000-00-00 00:00:00'){$editdate='';}
if($editdate!=''){$editdate = date('d-M-y H:i:s',strtotime($editdate));}

//Patient details
$select_patient="SELECT * FROM patients WHERE id='$patient'";
	$patients=mysqli_query($dbconnection,$select_patient) or die("ERROR : " . mysqli_error($dbconnection));
	while ($patient = mysqli_fetch_array($patients,MYSQLI_ASSOC)) {
		$pid=$patient['pid']; if($pid=='') $pid='NP';
		$study=$patient['study']; if($study=='') $study='NP';
		$name=$patient['name']; if($name=='') $name='NP';
		$sex=$patient['gender']; if($sex=='') $sex='NP';
		$district=$patient['district']; if($district=='') $sex='NP';
		//$age=$patient['age']; if($age==0) $age='NP';
		}
//Inserting titles to tds		
echo "<tr class='accessionrow' bgcolor='#fffbf6' align='left' title='$studycode-$labno'>
<td>$labno</td>
<td>$studycode</td>

<td>$appearance</td>
<td>$volume</td>
<td>$spectype</td>
<td>$interval</td>
<td></td>
<td></td>
<td></td>
</tr>";

}
echo "</table>";					
?>

</div>
</div>
</div>
 
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>
</div>
</div>

<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
<script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>

</div>

</body>
</html>