<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

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
<form name="microscopy" action="accessioned_info.php" method="GET"  onsubmit=" return validateform()">
<div class="col-sm-2"><input class="form-control" type="number" name="lab" placeholder="Filter By Labno">
 </div>
<label class="col-md-1">Download data from:</label>
<div class="col-sm-3"> 
	   
	  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input9" value="" name="fromdate"/>
				</div>
<label class="col-sm-1">	To  </label>
<div class="col-sm-3">
				
				  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input10" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				
				<input type="hidden" id="dtp_input10" value="" name="todate"/>
			</div>
			
			<div class="col-sm-1"> 
<input type="submit" class="btn btn-success"name="downloadothers" value="Submit">
</div>
			<!--<div class="form-group">
			<label class="col-md-2">TEST NAME:</label>
  <div class="col-sm-3"> 
        <select name="testothers" required class="form-control" >
			<option value="">-Test Name-</option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM option_examination_others WHERE status='Active' ORDER BY name";
			$exam_others=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($exam = mysqli_fetch_array($exam_others,MYSQLI_ASSOC)) {
				$name = $exam['name'];
				$code = $exam['code'];
				
			echo "<option value='$code' style='background-color:#CCCCCC;'>$code - $name</option>";	
			}			
			?>
		</select>   
		</div>
				
</div>-->
</form>
</div>
</div>

<legend align="center">
<input type="button" value="BACK" class="btn btn-info" onclick="history.go(-1);return true;">ACCESSIONED SAMPLES DETAILS (LATEST 1000 SAMPLES ONLY)<<<button onclick="location.href='<?php $_SERVER['PHP_SELF']?>'">REFRESH</button>>></legend>

<div id="" style='font-size:0.8em; background-color:; border:; max-height:400px; width:; margin-right:; padding:; overflow:auto;'>

<table class="table table-bordered" bgcolor='91B4DD'>
<tr bgcolor='#fffbf6'><th>LAB NO</th><th>STUDY</th><th>PID</th><th>NAME</th><th>SEX</th>
<th>APPEARANCE</th><th>VOLUME</th><th>SPECTYPE</th><th>INTERVAL</th><th>DISTRICT</th><th>RCT DATE</th><th>RCT TIME</th>
<th>REVIEW TIME</th><th>EDIT TIME</th></tr>

<?php error_reporting(0);
  if(isset($_GET['fromdate'])){
	  $lab= $_GET['lab'];
  $fromdate2= $_GET['fromdate'];
   $todate2= $_GET['todate'];
  $fromdate=date('d-m-Y', strtotime($fromdate2));
$todate=date('d-m-Y', strtotime($todate2));
  }
include("../includes/dbconfig.php");
if($fromdate2!='' and $lab!=''){
$sql="SELECT * FROM samples where labno='$lab' AND (rctdate between '".$fromdate2."' and '".$todate2."')";
}else if($fromdate2!='' and $lab==''){
$sql="SELECT * FROM samples where (rctdate between '".$fromdate2."' and '".$todate2."')";
	

}else if($fromdate2=='' and $lab!=''){
$sql="SELECT * FROM samples where labno='$lab'";
	
}else{
$sql="SELECT * FROM samples ORDER BY labno DESC LIMIT 1000";

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
<td>$pid</td>

<td>$name</td>
<td>$sex</td>
<td>$appearance</td>
<td>$volume</td>
<td>$spectype</td>
<td>$interval</td>
<td>$district</td>
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
</div>

<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
<script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>

</div>

</body>
</html>