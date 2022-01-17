<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); 
	  error_reporting(0);?>
	  
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<?php include("../includes/headercontent.php"); ?>
<?php include("../includes/headerbootstrapcontent.php"); ?>
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
			<div class="form-horizontal">
				<div class="form-group"> 
					<form name="microscopy" action="processing_worksheet.php" method="GET"  onsubmit=" return validateform()">
					<label class="col-md-1">Lab No From:</label>
					<div class="col-sm-2">
						<input class="form-control" type="number" name="labfrom" required  placeholder="Filter By Labno" />
					</div>
					<label class="col-md-1">Lab No To:</label>
					<div class="col-sm-2">
						<input class="form-control" type="number" name="labto" required placeholder="Filter By Labno" />
					</div>
					<div class="col-sm-1"> 
						<input type="submit" class="btn btn-success" name="downloadothers" />
					</div>
				</div>
			</div>
			</form>
			</div>
		</div>
			<?php 
				if(isset($_GET['labfrom'])){
					$labfrom=$_GET['labfrom'];
					$labto=$_GET['labto'];
				}	
				/*//name=downloadothers, this also works well, no wonder which is the best practice
				if(isset($_GET['downloadothers'])){
					$labfrom=$_GET['labfrom'];
					$labto=$_GET['labto'];
				}*/
			?>
			
		<legend align="center">
			<input type="button" value="BACK" class="btn btn-info" onclick="history.go(-1);return true;">
			ACCESSIONED SAMPLES PROCESS WORKSHEET
			<button class="btn btn-success" 
			onclick="location.href='processworksheet_downloads.php?labfrom=<?php echo $labfrom; ?>&&labto=<?php echo $labto; ?>'">Download</button>
		</legend>
		<div id="" style='font-size:0.8em; background-color:; border:; max-height:400px; width:; margin-right:; padding:; overflow:auto;'>
			<table class="table table-bordered" bgcolor='yellow;'><!--91B4DD-->
			<tr style='background-color:#91B4DD;'>
				<th>LAB NO</th>
				<th>STUDY</th>
				<th>APPEARANCE</th><th>VOLUME</th>
				<th>SPECTYPE</th><th>INTERVAL</th>
				<th>PROCESS DATE</th><th>PROCESS TIME</th><th>PROCESS TECH</th>
			</tr>
			<?php
				$today=date('Y-m-d', time());
				include("../includes/connection.php");
				if($labto!=""){
					//echo "success now";, the range of values captured from url by form is what we ask database to show
					$sql="SELECT * FROM samples WHERE (labno between '".$labfrom."' and '".$labto."')";
				}else {
					$sql="SELECT * FROM samples WHERE (recieved_date='$today')";
				}
				$samples=mysqli_query($con, $sql) or die("Error: ".mysqli_error($con));
				while($row=mysqli_fetch_array($samples)){
					$labno=$row['labno'];
					$pauto_id=$row['pauto_id'];
					$study=$row['study_code'];
					$recieved_date=date('d-M-y', strtotime($row['recieved_date']));
					if($recieved_date=='01-Jan-70'){$recieved_date='';}
					$recieved_time=$row['recieved_time'];
					$appearance=$row['appearance'];
					$spectype=$row['specimen_type'];
					$processdate=$row['process_date'];
					$processtime=$row['process_time'];
					$processtech=$row['process_tech'];	
					$colldate=$row['collection_date'];
					$spectype=$row['specimen_type'];
					$interval=$row['visit_interval'];
					$colltime=$row['collection_time'];
					$examination=$row['examination'];
					$reviewdate=$row['lastreviewer_time'];
					if($reviewdate=='0000-00-00 00:00:00'){
						$reviewdate='';
					}else{
						$reviewdate=date('d-M-y', strtotime($reviewdate));
					}
					$editdate=$row['lastedittime'];	
					if($editdate=='0000-00-00 00:00:00'){
						$editdate='';
					}
					if($editdate!=''){
						$editdate=date('d-M-y', strtotime($row['lastedittime']));
					}
					//Patients details
					$select_patient="SELECT * FROM patients WHERE id='$patient'";
					$query=mysqli_query($con, $select_patient) or die("Error".mysqli_error($con));
					while($row=mysqli_fetch_array($query)){
						$pid=$row['pid']; if($pid==''){$pid='NP';}
						$study=$row['study_code']; if($study==''){$study='NP';}
						$name=$row['name']; if($name==''){$name='NP';}
						$sex=$row['sex']; if($sex==''){$sex='NP';}
						$district=$row['district']; if($district==''){$district='NP';};
					}
				echo "<tr class='accessionrow' bgcolor='#fffbf6' align='left' title='$study-$labno'>
							<td>$labno</td>
							<td>$study</td>
							<td>$appearance</td>
							<td>$spectype</td>
							<td></td>
							<td></td>
							<td></td
					 </tr>";
				}
				
			?>
			</table>					
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