<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php");
error_reporting(0) ?>

<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<?php include("../includes/header_content.php"); ?>
<?php include("../includes/header_bootstrap_content.php"); ?>
</head>

<body>
<style>
.red{color:red; font-weight:900; text-align:center;}
</style>

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


<div class="col-md-2">
<b>SELECT AN OPTION</b>
<ul>
<li><a href="?action=fm">Microscopy Fm</a></li><br>
<li><a href="?action=zn">Microscopy Zn</a></li><br>

<li><a href="?action=genexpert">Genexpert</a></li><br>
<li><a href="?action=liquidculture">Liquid Culture</a></li><br>
<li><a href="?action=solidculture">Solid Culture</a></li><br>
<li><a href="?action=bloodculture">Blood Culture</a></li><br>


<li><a href="?action=dst1">DST 1</a></li><br>
<li><a href="?action=dst2">DST 2</a></li><br>
<li><a href="?actionothers=others">Other Tests</a></li><br>

</ul>
</div>
<div class="col-md-10">
<h3 class="red">To view All overdue Samples , Simply Click on test on left side menu,then Download Button</h3>
<div class="row">
<div id="" style='font-size:0.8em; background-color:; border:; max-height:400px; width:; margin-right:; padding:; overflow:auto;'>

<?php 
if(isset($_GET['actionothers'])){
?>


<br>
<br>

<form  action="" method="GET"  onsubmit=" return validateform()">
<div class="form-horizontal">
 
	<div class="form-group">
			<label class="col-md-2">TEST NAME:</label>
			<input type="hidden" value="overdueothers" name="code" >
  <div class="col-sm-3"> 
        <select name="testname" required class="form-control" >
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
				<div class="col-sm-3"> 
<input type="submit" class="btn btn-success" name="othertests" value="Submit">
</div>
</div>
<div class="form-group">

 
<label class="col-md-2">Download data from:</label>
<div class="col-sm-3"> 
	  
	  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input9" value="" name="fromdate"/>
				</div>
<label class="col-sm-1">	To</label>
<div class="col-sm-3">
				
				  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input10" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				
				<input type="hidden" id="dtp_input10" value="" name="todate"/>
			</div>
			
			<input type="submit" class="btn btn-success"name="downloadothers" value="Download">
			</div>
</form>

</div>
<?php
}

 if(isset($_GET['action'])){ $action=$_GET['action']; 
$code=$action;
?>

<form  action="" method="GET"  onsubmit=" return validateform()">

 
<label class="col-md-2">Download data from:</label>
<div class="col-sm-3"> 
	<input type="hidden" id="code" value="<?php echo $code; ?>" name="code"/>   
	  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value=""  required readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input9" value=""  name="fromdate"/>
				</div>
<label class="col-sm-1">	To</label>
<div class="col-sm-3">
				
				  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input10" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				
				<input type="hidden" id="dtp_input10" value="" name="todate"/>
			</div>
			
			<input type="submit" class="btn btn-success"name="downloadothers" value="Download">
			</div>
			</form>
			<?php
			
 }

include("../includes/dbconfig.php");
?>


<?php

 if(isset($_GET['code'])){ $code=$_GET['code']; 
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
		$sql="SELECT s.*,f.* from samples s,results_others f 
		where s.labno=f.labno and f.result='' and f.test='$code'";
	
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
$sql="SELECT s.*,f.* from samples s,results_solidculture f where s.labno=f.labno 
and resdate='0000-00-00' ";
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
$sql="SELECT s.*,f.* from samples s,results_liquidculture f where s.labno=f.labno 
and resdate='0000-00-00'";

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
<button class="btn btn-success" onclick="location.href='download_overduesamples.php?action=<?php echo $code?>&&fromdate=<?php echo $fromdate ?>&&todate=<?php echo $todate ?>'">Download</button>OVERDUE SAMPLES

<button class="btn btn-info" onclick="location.href='download_overduesamples.php?action=<?php echo $code?>&&fromdate=<?php echo $fromdate ?>&&todate=<?php echo $todate ?>''"><?php echo "<h4><b><center>$title </center></b>";
 ?><?php $today=date('Y-m-d H:i:s', time());  echo "AS ON $today </h4>"; ?></button>>></legend>


<table class=" table" bgcolor='91B4DD'>
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
<td><a href='resultsentry_<?php echo $testentry?>.php?findlabno=<?php echo "$labno&&newtest=$newtest&&media=$media"?>'><?php echo $labno ?></a></td>
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