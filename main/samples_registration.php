<?php include("../includes/global_content.php");?>
<?php include("../includes/session_start.php");?>
<?php 
	/*declaring variables defined in the url of sample_rejection file, so GET method is used*/
	if(isset($_GET["pid"])){
		//Handling values of pid,otherpid,study_code&pauto_id from URL
		$pid=$_GET["pid"];
		$other_pid=$_GET["other_pid"];
		$study_code=$_GET["study_code"];
		$pauto_id=$_GET["pauto_id"];//hidden field	
	}
	
	//post, form input handling
	if(isset($_POST['submit'])){
		include("../includes/connection.php");
		
		/**/
		$interval=$_POST['interval'];
		if($interval=='Month'){
			$monthoption=$_POST['monthoption'];
			$interval='Month'.$monthoption;
		}else if($interval=='Week'){
			$weekoption=$_POST['weekoption']; 
			$interval='Week'.$weekoption;
		}else if($interval=='Day'){
			$dayoption=$_POST['dayoption'];
			$interval='Day'.$dayoption;
		}else if($interval=='Others'){
			$otheroption=$_POST['otheroption'];
			$interval=$otheroption;
			$interval=$interval;
		}else {
			$interval=$interval;
		}
		
		$visit_interval=$interval;
		$recieved_date=$_POST['recieved_date'];
		$study_code=$_POST['study_code'];
		$pauto_id=$_POST['pauto_id'];
		$appearance=ucwords(mysqli_real_escape_string($con,$_POST['appearance']));
		$recieved_date=$_POST['recieved_date'];
		$sample_hierachy=$_POST['sample_hierachy'];
		$request_reason=$_POST['request_reason'];
		$age_years=$_POST['age_years'];
		$age_months=$_POST['age_months'];
		$specimen_type=$_POST['specimen_type'];
		$volume=$_POST['volume'];
		$sample_id=$_POST['sample_id'];
		$consistency=$_POST['consistency'];
		$hivstatus=$_POST['hivstatus'];
		$peripheral_results=$_POST['peripheral_results'];
		$collector=$_POST['collector'];
		$collection_method=$_POST['collection_method'];
		$technologist=$_POST['technologist'];
		$comment=$_POST['comment'];
		$transporter=$_POST['transporter'];
		@$examination=mysqli_real_escape_string($con,implode(',', $_POST['examination']));
		@$other_examination=mysqli_real_escape_string($con, implode(',', $_POST['other_examination']));
		@$storage=mysqli_real_escape_string($con, implode(',', $_POST['storage']));
		@$fullexamination=$examination.','.$other_examination.','.$storage;//examination combined with other_examination & storage
		
		print_r(array_merge($examination,$other_examination,$storage));
		
		@$selectedsolidmedia=mysqli_real_escape_string($con, implode(',', $_POST['solid_media']));
		@$selectedliquidmedia=mysqli_real_escape_string($con, implode(',', $_POST['liquid_media']));
		@$selectedbloodmedia=mysqli_real_escape_string($con, implode(',', $_POST['blood_media']));
		
		@$fullmedia=$selectedsolidmedia.','.$selectedliquidmedia.','.$selectedbloodmedia;//media combined
		@$specimen_storage=$_POST['specimen_storage'];
		@$requestor=$_POST['requestor'];
		
		@$collection_time=$_POST['collection_time']; @$collection_time=date('H:i:s', strtotime($collection_time));
		@$collection_date=$_POST['collection_date'];
		
		@$request_date=$_POST['request_date'];
		@$recieved_time=$_POST['recieved_time']; @$recieved_time=date('H:i:s', strtotime($recieved_time));
		
		@$process_date=$_POST['process_date'];
		@$process_time=$_POST['process_time']; @$process_time=date('H:i:s', strtotime($process_time));
		@$process_tech=$_POST['process_tech'];
		
		@$transport_date=$_POST['transport_date'];
		@$transport_time=$_POST['transport_time']; $transport_time=date('H:i:s', strtotime($transport_time));
		@$specimen_storage=$_POST['specimen_storage'];
		
		@$confirm=$_POST['confirm'];//b'se its captured from a form
		$accessionedby=$_SESSION['name'];//accession_tech
		@$other_pid=$_POST['other_pid'];//
		
		$sql="INSERT INTO samples(study_code,pauto_id,other_pid,sample_id,sample_hierachy,specimen_type,
		visit_interval,age_years,age_months,request_reason,request_date,requestor,collector,collection_method,
		hivstatus,collection_date,collection_time,peripheral_results,transporter,transport_date,recieved_date,
		recieved_time,technologist,appearance,volume,consistency,examination,media,process_date,process_time,
		process_tech,specimen_storage,comment,accession_tech,confirm)
		VALUES('$study_code','$pauto_id','$other_pid','$sample_id','$sample_hierachy','$specimen_type','$visit_interval',
		'$age_years','$age_months','$request_reason','$request_date','$requestor','$collector','$collection_method','$hivstatus',
		'$collection_date','$collection_time','$peripheral_results','$transporter','$transport_date','$recieved_date',
		'$recieved_time','$technologist','$appearance','$volume','$consistency','$fullexamination','$fullmedia',
		'$process_date','$process_time','$process_tech','$specimen_storage','$comment','$accessionedby','$confirm')";
		
		$query=mysqli_query($con, $sql) or die('Error back ..'.mysqli_error($con));
		if($query) {
			echo "Insertion ok";//insertion script here
			$sql_labno="SELECT * FROM samples WHERE labno=LAST_INSERT_ID()";
			$query_samples=mysqli_query($con, $sql_labno);
			while($samples=mysqli_fetch_array($query_samples)){
				$labno=$samples['labno'];//this labno 
				$pauto_id=$samples['pauto_id'];
				
				/*Now Inserting in the results tables
				 when samples are registered, it inserts in samples table and several results tables
				*/
				include("samples_examination_media_processing.php");
			}
			if($confirm=='complete'){
				$edittime=date('Y-m-d H:i:s');
				$update_sample=mysqli_query($con, "UPDATE samples SET confirm=1,lasteditby='$accessionedby',lastedittime='$edittime' WHERE labno='$labno'") or die("Error ".mysqli_error($con));
			}
			$sql_patient="SELECT * FROM patients WHERE id='$pauto_id'";
			$query_patient=mysqli_query($con, $sql_patient) or die("Error ".mysqli_error($con));
			while($patient=mysqli_fetch_array($query_patient)){
				//$pname=$_SESSION['name'];
				$pname=$patient['name'];
			}
			if(isset($_GET['rejection_no'])){
				$rejectid=$_GET['rejection_no'];
				$sql="UPDATE rejected_samples SET status='Sample later accessioned '$accessionedby' with Lab no '$labno' WHERE id='$rejectid'";
				mysql_query($con, $sql) or die("Error ".mysqli_error($con));
			}
			echo "<script type='text/javascript'>
				alert('successfully registered a sample');
			</script>";
			header("Location:patient_registration.php?savedsample=$labno&&pid=$pid&&study_code=$study_code&&name=$pname&&registered");
		}else{
			echo "Data failed to insert! Error: ".mysqli_error($con);
		}
	}
?>

<html lang="en" oncontextmenu="return false">
<head>
	<?php include("../includes/headercontent.php");?>
	<?php include("../includes/headerbootstrapcontent.php");?>
	<script type="text/javascript">
		$(document).ready(function(){
			$("select.interval").change(function(){
				var selected_interval=$(".interval option:selected").val();
				$.ajax({
					type: "POST",
					url: "process_interval.php",
					data: {interval : selected_interval}
				}).done(function(data){
					$("#response").html(data);
				});
			});
		});
	</script>
</head>
<body>
	<div id="wrapper" class="context">
		<div id="banner" class="row">
			<?php include("../includes/banner.php"); ?>
		</div>
		<div id="middle" class="row">
			<?php if(isset($_SESSION['username']) and isset($_SESSION['password'])){ ?>
			<div id="welcome">
				<?php include("../includes/welcomediv.php"); ?>
			</div>
			<div id="content">
				<div class="col-md-12">
					<fieldset class="scheduler-border"> <legend  class="scheduler-border"><b class="form_head">Registering Sample Details</b></legend>
					<form action="" method="post" id="example-1-form" name="regform" autocomplete="off" onsubmit="return validateForm()">
					<table width="100%" class="">
						<tr align="left">
							<td align="left"><input type="button" value="BACK" class="btn btn-info" onclick="history.go(-1);return true;"></td>
							<td align="center"><input type="button" value="Reject Sample" class="btn btn-danger" onclick="location.href='sample_rejection.php?pid=<?php echo $pid;?>&&other_pid=<?php echo $other_pid;?>&&study_code=<?php echo $study_code;?>&&pauto_id=<?php echo $pauto_id;?>'"></td>
							<td align="right"><button type="submit" name="submit" class="btn btn-success">Register Sample</button></td>
						</tr>
					</table>
					<div class="form-horizontal">
						<br/>
						<!--- Row 1 -->
						<div class="form-group">
							<label class="col-sm-1 control-label label-format">Study</label>
							<div class="col-sm-2">
								<input type="text" name="study_code" class="form-control" value="<?php echo $study_code;?>" style="text-transform: capitalize;" readonly />
							</div>
							<label class="col-sm-1 control-label label-format">PID</label>
							<div class="col-sm-3">
								<input type="text" name="pid" class="form-control" value="<?php echo $pid;?>" style="text-transform: capitalize;" readonly />
								<input type="hidden" name="pauto_id" class="form-control" value="<?php echo $pauto_id;?>" style="text-transform: capitalize;" />
							</div>
							<label class="col-sm-1 control-label label-format">Other PID</label>
							<div class="col-sm-2">
								<input type="text" name="other_pid" class="form-control" value="<?php echo $other_pid;?>" style="text-transform: capitalize;" readonly />
							</div>
						</div>
						<!-- Row 2--->
						<div class="form-group">
							<label class="col-sm-1 control-label label-format">Sample ID</label>
							<div class="col-sm-2">
								<input type="text" name="sample_id" class="form-control" value="" style="text-transform: capitalize;" />
							</div>
							
							<label class="col-sm-1 control-label label-format">Sample Hierachy</label>
							<div class="col-sm-3">
								<input list="sample_hierachy" name="sample_hierachy" placeholder="Start Typing.." class="form-control"/>
								<datalist id="sample_hierachy" ><!-- list & id, connected -->
									<option value="N/A">N/A</option>
									<option value="Specimen 1">Specimen 1</option>
									<option value="Specimen 2">Specimen 2</option>
									<option value="Specimen 3">Specimen 3</option>
								</datalist>
							</div>
							
							<label class="col-sm-1 control-label label-format">Specimen Type</label>
							<div class="col-sm-3">
								<input list="specimen_type" name="specimen_type" placeholder="Start Typing for Options.." class="form-control" title="Please fill out this field"/>
								<datalist id="specimen_type">
									<option value="A">-Specimen Type-</option>
									<?php include("../includes/connection.php");?>
									<?php 
										$sql="SELECT * FROM option_spectype WHERE status='Active' ORDER BY name";
										$query=mysqli_query($con, $sql) or die("Error ".mysqli_error($con));
										while($row=mysqli_fetch_array($query)){
											$name=$row['name'];
											$code=$row['code'];
											 echo "<option value='$name'>$name</option>";
										}
									?>	
								</datalist>
							</div>
						</div>
						<!-- Row 3 --->
						<div class="form-group">
							<label class="col-sm-1 control-label label-format">Visit Interval:<?php echo'<font color="red">'."***".'</font>';?></label>
							<div class="col-sm-2">
								<select name="interval" class="form-control interval" required>
									<option value="">-Select-</option>
									<option value="Month">Month</option>
									<option value="Week">Week</option>
									<option value="Day">Day</option>
									<option value="Others">Others</option>
								</select>
							</div>
							<div class="col-sm-3" id="response">
								<!--- Options Dynamically fall here after Query & Ajax call to process_interval.php using call to #response as id--->
								Here
							</div>
							<label for="Age in years" class="col-sm-1 control-label label-format">Age-Years</label>
							<div class="col-sm-2">
								<input type="number" style="color:#222;" class="form-control" placeholder="" min="0" max="150" name="age_years" />
							</div>
							<label for="Age in months" class="col-sm-1 control-label label-format">Age-Months</label>
							<div class="col-sm-2"> 
							<input type="number"  min="0" max="11" style="color: #222;" class="form-control" placeholder="" name="age_months" />
							</div>
						</div>
						<!-- Row 4 --->
						<div class="form-group">
						 <label  class="col-sm-1 control-label label-format">Request Reason</label>
						 <div class="col-sm-3">
							<input type="text" style="color:#222;" class="form-control" placeholder="Request Reason" name="request_reason" />
						 </div>
						 <label class="col-sm-1 control-label label-format">Request Date</label>
						 <div class="col-sm-3">
							<div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input12" data-link-format="yyyy-mm-dd">
								<input class="form-control" size="16" type="text" name="" value="" readonly>
								<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
						    </div>
							<input type="hidden" id="dtp_input12" value="" name="request_date">
						 </div>
						 <label class="col-sm-1 control-label label-format">Requested By</label>
						 <div class="col-sm-3">
							<input type="text" class="form-control" name="requestor" list="requestor" placeholder="Start Typing for Options" <?php if($code=='PV'){echo "required";}?> />
							<datalist id="requestor">
								<option value="Select Requestor">
								<?php 
									include("../includes/connection.php");
									$sql="SELECT * FROM requestors ORDER BY name";
									$query = mysqli_query($con, $sql) or die("Error ".mysqli_error($con));
									while($row=mysqli_fetch_array($query)){
										$name=$row['name'];
										echo "<option value='$name' />";	
									}	
								?>
							</datalist>
							<span onclick="reloadRequestors();" style="cursor: pointer; color:blue;">Reload</span> &nbsp;&nbsp;&nbsp;
							<span onclick="window.open('new_requester.php')" style="cursor: pointer; color:blue;">New Requester</span>
						 </div>
						 <label class="col-sm-1 control-label label-format"></label>
						</div>
						<!---  Row 5 -->
						<div class="form-group">
							<label class="col-sm-1 control-label label-format">Collected By<?php echo'<font color="red">'."**".'</font>';?></label>
							<div class="col-sm-3">
								<input type="text" placeholder="Start Typing for Options" name="collector" list="collector" class="form-control" required />
								<datalist id="collector">
									<option value="-Select Collectors-"/>
									
									<?php 
									$sqt="SELECT * FROM collectors WHERE status='Active' ORDER BY name";
									$qu=mysqli_query($con, $sqt) or die("Error ".mysqli_error($con));
									while($row=mysqli_fetch_array($qu)){
										$name=$row['name'];
										echo "<option value='$name' style='background-color:#CCCCCC;'/>";
									}
									?>
								</datalist>
								<span onclick="reloadCollectors();" style="cursor: pointer; color: blue;">Reload</span>&nbsp;&nbsp;&nbsp;
								<span onclick="window.open('new_collector.php')" style="cursor: pointer; color: blue;" >New Collector</span>
							</div>
							
							<label class="col-sm-1 control-label label-format">Collection Method</label>
							<div class="col-sm-2">
								<select name="collection_method" class="form-control">
									<option value="Not Provided">Not Provided</option>
									<?php 
										$sqm="SELECT * FROM option_collmethod WHERE status='Active' ORDER BY code";
										$qm=mysqli_query($con, $sqm) or die("Error ".mysqli_error($con));
										while($row=mysqli_fetch_array($qm)){
											$code=$row['code'];
											echo "<option value='$name' style='background-color:#CCCCCC;' >$code</option>";
										}	
									?>
								</select>
							</div>
							<label class="col-sm-1 control-label label-format">HIV Status</label>
							<div class="col-sm-2">
								<select name="hivstatus" class="form-control">
									<option value="Not Provided">Not Provided</option>
									<option value="Negative">Ct2-Negative</option>
									<option value="Not Known">Not Known</option>
									<option value="Positive">CTI-Positive</option>
								</select>
							</div>
						</div>
						<!-- Row 6--->
						<div class="form-group">
							<label class="col-sm-1 control-label label-format">Collection Date</label>
							  <div class="col-sm-3">  
							  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
								<input class="form-control" size="16" type="text" value="" readonly>
								<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							   </div>
								<input type="hidden" id="dtp_input9" value="" name="collection_date"/>
							 </div>
								
							<label for="dtp_input3" class="col-sm-2 control-label label-format">Collection Time(24hr format)</label>
							  <div class="col-sm-2"> 
								<input type="text" class="form-control defaultEntry" placeholder="Start Typing.. e.g 17:00" name="collection_time" />
							</div>
							
							  <label  class="col-sm-1 control-label label-format">Peripheral Results</label>
							  <div class="col-sm-2"> 
							  <input type="text" name="peripheral_results" style="" class="form-control" placeholder="" />     
							  </div>
						</div>
						<!-- Row 7 --->
						<div class="form-group"> 
							<label  class="col-sm-1 control-label label-format">Transporter</label>
							<div class="col-sm-3"> 
							<select name="transporter" class="form-control" onclick="" id="transportersearch" >
							<option value="">-Choose a Transporter-</option>

							<?php
							include("../includes/connection.php");
							$sql="SELECT * FROM transporters ORDER BY name";
							$transporters=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

							while ($transporter = mysqli_fetch_array($transporters,MYSQLI_ASSOC)) {
								$name= $transporter['name'];
								$initials= $transporter['initials'];
								
							echo "<option value='$initials' style='background-color:#CCCCCC;'>$initials-$name</option>";	
							}			
							?>
							</select>
							<span onclick="reloadTransporters();" style="cursor: pointer; color:blue;">Reload</span> &nbsp;&nbsp;&nbsp;
							<span onclick="window.open('new_transporter.php')" style="cursor: pointer; color:blue;">New Transporter</span>
							</div>
							
							<!---  Don't display this on UI
							<?php
							include("../includes/connection.php");
							$sql="SELECT * FROM transporters WHERE status='Active' ";
							$techs=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

							while ($tech = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
							$name = $tech['name'];

							echo "<option value='$name' style='background-color:#CCCCCC;'>$name</option>";	
							}			
							?>
							--->
							
							<label class="col-sm-1 control-label label-format">Transport Date</label>
							<div class="col-sm-3"> 
								<div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input14" data-link-format="yyyy-mm-dd">
								<input class="form-control" size="16" type="text" value="" readonly>
								<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
								</div>
								<input type="hidden" id="dtp_input14" value="" name="transport_date" />
							</div>
							<label class="col-sm-1 control-label label-format">Transport Time</label>
							<div class="col-sm-2"> 
							<input type="text" class="form-control defaultEntry" placeholder="24 hour format" name="transport_time"  />
							</div>
						</div>
						
						<!--Row 8 -->
						<div class="form-group"> 
							<label class="col-sm-1 control-label label-format">Received Date<?php echo'<font color="red">'. "**".'</font>';?></label>
							<div class="col-sm-3"> 
								<div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input1" required data-link-format="yyyy-mm-dd">
									<input type="text" class="form-control" size="16"  value="" readonly required />
									<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
									<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
								</div>
								<input type="hidden" id="dtp_input1" name="recieved_date"  required />
							</div>

							<label  class="col-sm-2 control-label label-format">Received Time
							<?php echo'<font color="red">'. "**".'</font>';?></label>
							<div class="col-sm-2"> 
								<input type="text" name="recieved_time" placeholder="24 hour format" class="form-control defaultEntry" required />
							</div>

							<label  class="col-sm-1 control-label label-format">Recieving Technologist</label>
							<div class="col-sm-3"> 
								<select  class="form-control" name="technologist" >
									<option value="">-Select Technologist-</option>
									<?php
									include("../includes/connection.php");
									$sqi="SELECT * FROM tech_initials WHERE status='Active' ORDER BY name";
									$techs=mysqli_query($con,$sqi) or die("ERROR : " . mysqli_error($con));

									while ($row = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
									$name = $row['name'];
									$initial = $row['initial'];

									echo "<option value='$initial' style='background-color:#CCCCCC;'>$name</option>";	
									}			
									?>
								</select>
							</div>
						</div>
						
						<!--Row 9 -->
						<div class="form-group">
							<label class="col-sm-1 control-label label-format">Appearance</label>
							<div class="col-sm-3"> 
								<input type="text" class="form-control" placeholder="Start Typing for options" name="appearance" list="appearance"/>
								<datalist id="appearance">
									<option value="-Select Appearance-">
									<?php
									include("../includes/connection.php");
									$sqa="SELECT * FROM option_appearance WHERE status='Active' ORDER BY name";
									$qa=mysqli_query($con,$sqa) or die("Error : " .mysqli_error($con));

									while ($rowa = mysqli_fetch_array($qa)) {
									$name = $rowa['name'];
									$code = $rowa['code'];

									echo "<option value='$name' style='background-color:#CCCCCC;'>";	
									}?>
								</datalist>
							</div>

							<label  class="col-sm-1 control-label label-format">Volume</label>
							<div class="col-sm-3"> 
							<input type="number" name="volume" style="color: #222;
							"class="form-control" placeholder="Volume" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" width="10%" />
							</div>

							<label class="col-sm-1 control-label label-format">Consistency</label>
							<div class="col-sm-3"> 
								<select name="consistency" class="form-control" >
									<option value="">-Choose Consistency-</option>
									<?php
									include("../includes/connection.php");
									$sqc="SELECT * FROM option_consistency WHERE status='Active' ORDER BY name";
									$qc=mysqli_query($con, $sql) or die("ERROR : " . mysqli_error($con));

									while ($appearance = mysqli_fetch_array($qc, MYSQLI_ASSOC)) {
										$name = $appearance['name'];
										//$code = $appearance['code'];

										echo "<option value='$name' style='background-color:#CCCCCC;'>$name</option>";	
									}			
								?>
								</select>
							</div>
						</div>
						
						<!--Row 10 -->
						<div class="form-group">
							<label class="col-sm-1 control-label label-format label-format">Examination</label>
							<div class="col-sm-5" style="max-height:100px; overflow:auto;">
								<?php include("../includes/connection.php");?>
								<?php 
									$sqex="SELECT * FROM option_examination WHERE status='Active'";
									$qex = mysqli_query($con, $sqex) or die("Error ".mysqli_error($con));
									while($rowex=mysqli_fetch_array($qex)) {
										$code=$rowex['code'];
										$name=$rowex['name'];
										echo "<label class='checkbox-inline'><input type='checkbox' name='examination[]' value='$code' />$name</label>&nbsp;&nbsp;";
									}
								?>
								<!--  Storage shares same table, ensuring that storage is also an array, other_examination[] --->
								<!--<label class='checkbox-inline'><input type='checkbox'  name='other_examination[]' value='storage' />Storage</label> -->
								<label class='checkbox-inline  control-label label-format label-format'>Other</label>
								<!--- Other Examinations--->
								<?php include("../includes/connection.php");?>
								<?php 
									$sql="SELECT * FROM option_examination_others WHERE status='Active'";
									$query=mysqli_query($con, $sql) or die("Error ".mysqli_error($con));
									while($othertest=mysqli_fetch_array($query)){
										$name=$othertest['name'];
										$code=$othertest['code'];
										echo "<label class='checkbox-inline'><input type='checkbox' value='$code' name='other_examination[]' title='Other test' />$name</label>&nbsp;&nbsp;";
									}
								?>
							</div>
							<label class="col-sm-1 control-label label-format label-format">Media</label>
							<div class='col-sm-5'>
								<?php 
								include("../includes/connection.php");
								$sqs="SELECT * FROM option_media WHERE status='Active' and category='Solid Culture'";
								$qms=mysqli_query($con, $sqs) or die("Error ".mysqli_error($con));
								while($solid_media=mysqli_fetch_array($qms)){
									$name=$solid_media['name'];
									$code=$solid_media['code'];
									echo "<label class='checkbox-inline'><input type='checkbox' name='solid_media[]' value='$code' title='Media for Solid Culture'/>$name</label>";
								}
									echo ' || <br/>';?>
									
								<?php
									include("../includes/connection.php");
								$sql="SELECT * FROM option_media WHERE status='Active' and category='Liquid Culture'";
								$qml=mysqli_query($con, $sql) or die("Error ".mysqli_error($con));
								while($liquid_media=mysqli_fetch_array($qml)){
									$name=$liquid_media['name'];
									$code=$liquid_media['code'];
									echo "<label class='checkbox-inline'><input type='checkbox' name='liquid_media[]' value='$code' title='Media for Liquid Culture'/>$name</label>";
								}
								?>
							</div>
						</div>
						<!--- Row 11 -->
						<div class="form-group">
							<label class="col-sm-1 control-label label-format">Processing Date<?php echo'<font color="red">'. "**".'</font>';?></label>
							<div class="col-sm-3"> 
								<div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input7" data-link-format="yyyy-mm-dd" required>
									<input class="form-control" size="16" type="text" value="" readonly required>
									<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
									<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
								</div>
								<input type="hidden" id="dtp_input7" value="" name="process_date" required />
							</div>

							<label class="col-sm-1 control-label label-format">Processing Time</label>
							<div class="col-sm-2"> 
								<input type="text" class="form-control defaultEntry" name="process_time"  />
							</div>

							<label  class="col-sm-2 control-label label-format">Processing Technologist</label>
							<div class="col-sm-2"> 
								<select class="form-control" name="process_tech" >
								<option value="">-Select Technologist-</option>
								<?php
								include("../includes/connection.php");
								$sql="SELECT * FROM tech_initials WHERE status='Active' ORDER BY name";
								$techs=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

								while ($tech = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
									$name = $tech['name'];
									$initial = $tech['initial'];
									echo "<option value='$initial' style='background-color:#CCCCCC;'>$name</option>";	
								}			
								?>
								</select>  
							</div>
						</div>
						<!---Row 12 --->
						<div class="form-group"> 

							<label class="col-sm-2 control-label label-format">Specimen Storage</label>
							<div class="col-sm-2"> 
								<select class="form-control" name="specimen_storage" >
								<option value="">-Select Specimen Storage-</option>
								<?php
								include("../includes/connection.php");
								$sql="SELECT * FROM specimen_storage WHERE status='Active' ORDER BY temperature";
								$qs=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

								while ($specimen = mysqli_fetch_array($qs, MYSQLI_ASSOC)) {
									$temp = $specimen['temperature'];

								echo "<option value='$temp' style='background-color:#CCCCCC;'>$temp</option>";	
								}			
								?>
								</select>

							</div>
							<label class="col-sm-2 control-label label-format">Comment on Sample</label>
							<div class="col-sm-6"> 
							<input type="text" style="color: #222;
							text-transform: capitalize;"class="form-control" placeholder="Comment" name="comment" />
							</div>
						</div>
						
						<!-- Row 13 --->
							<div class="form-group"> 
								<label class="col-sm-2 control-label label-format">Confirm Completeness<?php echo'<font color="red">'. "**".'</font>';?></label>
								<div class="col-sm-5"> 
									<div class="radio-inline">
										<label>
											<input type="radio" class="btn-warning" name="confirm" value="incomplete" required />
											Few details entered
										</label>
									</div>
									<div class="radio-inline">
										<label>
											<input type="radio" class="btn-success" name="confirm" value="complete" required />
											All necessary details entered
										</label>
									</div>
								</div>
								<div class="col-sm-2"> 
									<button type="submit" name="submit" class="btn btn-success">Register Sample</button>
								</div>
							</div>
						</div>
					</form>
					</fieldset>
					<script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>
				</div>
			</div>
			<?php 
			//Stop checking for illegal login
			}else{
				echo "<center>Illegal Access Blocked. <br><a href='index.php'>Login</a> to access the resources.</center>";
			}
			?>
		</div>
	</div>
	<div id="footer" class="row">
		<?php include("../includes/footer.php"); ?>
	</div>
</body>
</html>