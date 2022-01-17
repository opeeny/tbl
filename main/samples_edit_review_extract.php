<?php echo "Malware checks here ";?>
<div class="form-group">
	<label  class="col-sm-1 control-label label-format">PID#</label>
	<div class="col-sm-3"> 
		<input type="text" class="form-control" value="<?php echo $pid; ?>" 
	placeholder="Patient ID" name="pid"  />
	</div>
	<label class="col-sm-1 control-label label-format">Other PID</label>
	<div class="col-sm-2"> 
		<input type="text" id="disabledInput" value="<?php echo $otherpid ?>"  style="color: red;
	text-transform: capitalize;"class="form-control" placeholder="PID2" name="otherpid" />
	</div>
	<label  class="col-sm-1 control-label label-format">Telephone</label>
	<div class="col-sm-2"> 
		<input type="number" class="form-control" value="<?php echo $telephone; ?>"  placeholder="Enter tel in format 256785643123" name="tel" id="fname"/>
	</div>
</div>
<div class="form-group">
	<label  class="col-sm-1 control-label label-format">Name</label>
	<div class="col-sm-3"> 
		<input type="text" class="form-control" placeholder="Name e.g Opeeny Godfrey" value="<?php echo $name; ?>"  name="name" id="surname" 
		onkeyup="showRegisteredPatients_name(this.value)" />
	</div>
	<label  class="col-sm-1 control-label label-format">Patient Initials</label>
	<div class="col-sm-2"> 
		<input type="text" style="color: #222;
		text-transform: capitalize;"class="form-control"  value="<?php echo $pinitials; ?>" placeholder="Patient Initials" name="patient_initials" id="fname" />
	</div>
	<label  class="col-sm-1 control-label label-format">Gender</label>
	<div class="col-sm-2"> 
	<select class="form-control" name="gender">
		<option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
		<option value="Not Provided">Not Provided</option>
		<option value="Male">Male</option>
		<option value="Female">Female</option>
	</select>
	</div>
</div>
<div class="form-group">
	<label for="Village" class="col-sm-1 control-label label-format">Village</label>
	<div class="col-sm-3"> 
		<input type="text" class="form-control"  value="<?php echo $village; ?>" placeholder="Enter village name" name="village" id="village" />
	</div>
	<label  class="col-sm-1 control-label label-format">Subcounty</label>
	<div class="col-sm-2"> 
		<input type="text"  class="form-control"  value="<?php echo $subcounty; ?>"placeholder="Enter Subcounty name" name="subcounty" id="subcounty"/>
	</div>	  
	<label for="Type of sample" class="col-sm-1 control-label label-format">District</label>
	<div class="col-sm-2"> 
		<select name="district" class="form-control"  >
		<option value="<?php echo $district; ?>"><?php echo $district; ?></option>
		<?php 
		include("..includes/connection.php");
		$sql="SELECT * FROM districts ORDER BY name";
		$query=mysqli_query($con, $sql) or die("Error ".mysqli_error($con));
			while($district=mysqli_fetch_array($query)){
				
				$dname=$district['name'];
				echo "<option value='$dname'>$dname</option>";
			}	
		?>
	</select>
	</div>
</div>
<div class="form-group">
	<input name="labno" type="hidden" value="<?php echo $labno; ?>"/>
	<input name="pauto_id" type="hidden" value="<?php echo $pauto_id; ?>"/>
	<label class="col-sm-1 control-label label-format">Study Code</label>
	<div class="col-sm-2">
		<select name="study_code" class="form-control">
			<option value="<?php echo $studycode;?>"><?php echo $studycode; ?></option>
			<?php 
				include("../includes/connection.php");
				$sql="SELECT * FROM studycodes WHERE status='Active' ORDER BY code";
				$query=mysqli_query($con, $sql) or die("Error ".mysqli_error($con));
				while($row=mysqli_fetch_array($query)){
					$code=$row['code'];
					$ptitle=$row['projtitle'];
					echo "<option value='$code'>$code-$ptitle</option>";
				}
			?>
		</select>
	</div>

	<label class="col-sm-1 control-label label-format">Sample ID</label>
	<div class="col-sm-2"> 
	 <input type="text" id="disabledInput" value="<?php echo $sampleid ?>"   style="color: red;
	text-transform: capitalize;"class="form-control" name="sampleid" />
	</div>
	<label class="col-sm-1 control-label label-format">Sample Hierachy</label>
	<div class="col-sm-3"> 
	<input type="text" class="form-control" value="<?php echo $samplehierachy; ?>"  name="sample_hierachy" list="sample_hierachy"/>
	<datalist id="sample_hierachy">
	<select  class="form-control">
	<option  class="form-control" value="N/A">N/A </option>
	<option value="Specimen 1">Specimen 1</option>
	<option value="Specimen 2">Specimen 2</option>
	<option value="Specimen 3">Specimen 3</option>
	</select>
	</datalist>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-1 control-label label-format">Visit Interval</label>
	<div class="col-sm-2"> 
	<select name="interval" class="form-control interval" REQUIRED>
	<option value="<?php echo "$visit_interval" ?>"><?php echo " $visit_interval"; ?></option>
	<option value="Month">Month</option>
	<option value="Week">Week</option>
	<option value="Day">Day</option>
	<option value="Others">Other Options</option>
	</select>	
	</div>
	<label for="" class="col-sm-1 control-label label-format">Age: Years</label>
	<div class="col-sm-1"> 
		<input type="number" class="form-control" placeholder="" value="<?php echo $ageyears; ?>"  name="years"/>
	</div>
	<label for="" class="col-sm-1 control-label label-format">Months</label>
	<div class="col-sm-1"> 
		<input type="number" class="form-control" placeholder="" value="<?php echo $agemonths; ?>"  name="months" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-1 control-label label-format">Specimen Type</label>
	<div class="col-sm-2" > 
	<select name="specimen_type" class="form-control" >
		<option value="<?php echo $specimen_type; ?>"><?php echo $specimen_type; ?></option>
		<?php
		include("../includes/connection.php");
		$sql="SELECT * FROM option_spectype where status='Active' ORDER BY name";
		$specimen_types=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

		while ($specimen_type = mysqli_fetch_array($specimen_types,MYSQLI_ASSOC)) {
			$type = $specimen_type['name'];
			$code = $specimen_type['code'];
			echo "<option value='$code' style='background-color:#CCCCCC;'>$code - $type</option>";	
		}			
		?>
	</select>   
	</div>
	<label  class="col-sm-1 control-label label-format">Request Reason</label>
	 <div class="col-sm-2"> 
		<input type="text" class="form-control" placeholder="Request Reason" value="<?php echo $request_reason; ?>"name="request_reason" />
	 </div>
	 <label class="col-sm-1 control-label label-format">Request Date</label>
	<div class="col-sm-2"> 
	<div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input12" data-link-format="yyyy-mm-dd">
		<input class="form-control" size="16" type="text" value="<?php if($requestdate=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($requestdate));?>" readonly>
		<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
		<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
     </div>
		<input type="hidden" id="dtp_input12" value="<?php if($requestdate=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($requestdate));?>" name="request_date" />
	</div>
	<label  class="col-sm-1 control-label label-format">Requester</label>
      <div class="col-sm-2"> 
        <select name="requestor" class="form-control" <?php if($studycode=='PV'){echo 'required';} ?> onclick="" id="requestorsearch" >
			<option value="<?php echo $requestor; ?>"><?php if($requestor!=''){echo $reqname;} ?></option>
			<option value=""></option>
			<?php
			include("../includes/connection.php");
			$sql="SELECT * FROM requestors ORDER BY name";
			$requestors=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

			while ($requestor = mysqli_fetch_array($requestors,MYSQLI_ASSOC)) {
				$rname = $requestor['name'];
				$r_id = $requestor['id'];
				$organisation = $requestor['organisation'];
			echo "<option value='$r_id' style='background-color:#CCCCCC;'>$organisation - $rname</option>";	
			}			
			?>
		</select>
		<span onclick="reloadRequestors();" style="cursor: pointer; color:blue;">Reload</span> &nbsp;&nbsp;&nbsp;
		<span onclick="window.open('new_requester.php')" style="cursor: pointer; color:blue;">New Requester</span>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-1 control-label label-format">Collector</label>
	<div class="col-sm-3"> 
	<select name="collector" class="form-control"  onclick="" id="collectorsearch">
	<option value="<?php echo $collector; ?>"><?php echo $collector; ?></option>

	<?php
	include("../includes/connection.php");
	$sql="SELECT * FROM collectors WHERE status='Active' ORDER BY name";
	$collector_check=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

	while ($collector = mysqli_fetch_array($collector_check,MYSQLI_ASSOC)) {
	$name = $collector['name'];
	$initials = $collector['initials'];
	//$code = $appearance['code'];

	echo "<option value='$initials' style='background-color:#CCCCCC;'>$initials-$name</option>";	
	}
	?>
	</select>
	<span onclick="reloadCollectors();" style="cursor: pointer; color:blue;">Reload</span> &nbsp;&nbsp;&nbsp;
	<span onclick="window.open('new_collector.php')" style="cursor: pointer; color:blue;">New Collector</span>

	<!-- <select name="collector" class="form-control" >
	<option value="<?php echo $collector; ?>"><?php echo $collector; ?></option>
	<?php
	include("../includes/connection.php");
	$sql="SELECT * FROM collectors WHERE status='Active' ORDER BY name";
	$collector_check=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

	while ($collector = mysqli_fetch_array($collector_check,MYSQLI_ASSOC)) {
	$name = $collector['name'];
	//$code = $appearance['code'];

	echo "<option value='$name' style='background-color:#CCCCCC;'>$name</option>";	
	}			
	?>
	</select>-->

	</div>
	<label  class="col-sm-1 control-label label-format">Collection Method</label>
	<div class="col-sm-2"> 
	<select name="collection_method" class="form-control" >
	<option value="<?php echo $collection_method; ?>"><?php echo $collection_method; ?></option>
	<?php
	include("../includes/connection.php");
	$sql="SELECT * FROM option_collmethod where status='Active' ORDER BY name";
	$collmethods_names=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

	while ($collmethod_name = mysqli_fetch_array($collmethods_names,MYSQLI_ASSOC)) {
	$name = $collmethod_name['name'];
	$code = $collmethod_name['code'];

	echo "<option value='$name' style='background-color:#CCCCCC;'>$code($name)</option>";	
	}			
	?>
	</select></div>
	<label class="col-sm-1 control-label label-format">HIV Status</label>
	<div class="col-sm-2"> 
	<select name="hivstatus" class="form-control" >
	<option value="<?php echo $hivstatus; ?>"><?php echo $hivstatus; ?></option>
	<option value="Not Provided">Not Provided</option>
	<option value="Negative">Ct2 - Negative</option>
	<option value="Not Known">Not Known</option>
	<option value="Positive">Ct1 - Positive</option>
	</select>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-1 control-label label-format">Collection Date</label>
	<div class="col-sm-3">    
	<div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
	<input class="form-control" size="16" type="text" value="<?php if($collection_date=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($collection_date));?>" readonly>
	<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
	<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	</div>
	<input type="hidden" id="dtp_input9" value="<?php if($collection_date=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($collection_date));?>"  name="collection_date"/>				
	</div>
	<label for="dtp_input3" class="col-sm-1 control-label label-format">Collection Time</label>

	<div class="col-sm-2"> 
	<input type="text" class="form-control defaultEntry" value="<?php echo $collection_time; ?>" name="collection_time" />
	</div>
	<label  class="col-sm-1 control-label label-format">Peripheral Results</label>
	<div class="col-sm-2"> 
	<input type="text" name="peripheral_results" value="<?php echo $peripheral_results; ?>" style="" class="form-control" placeholder="" />     
	</div>
</div>

<div class="form-group">
	<label  class="col-sm-1 control-label label-format">Transporter</label>
	<div class="col-sm-3"> 
	<select name="transporter" class="form-control"  onclick="" id="transportersearch">
	<option value="<?php echo $transporter; ?>"><?php echo $transporter; ?></option>
	<option value=""></option>
	<?php
	include("../includes/connection.php");
	$sql="SELECT * FROM transporters ORDER BY name";
	$transporters=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

	while ($transporter = mysqli_fetch_array($transporters,MYSQLI_ASSOC)) {
	$name= $transporter['name'];
	$initials= $transporter['initials'];
	//$organisation = $requestor['organisation'];
	echo "<option value='$initials' style='background-color:#CCCCCC;'>$initials-$name</option>";	
	}			
	?>
	</select>
	<span onclick="reloadTransporters();" style="cursor: pointer; color:blue;">Reload</span> &nbsp;&nbsp;&nbsp;
	<span onclick="window.open('new_transporter.php')" style="cursor: pointer; color:blue;">New Transporter</span>

	<!-- <input type="text" name="transporter" value="<?php echo $transporter; ?>" style="" class="form-control" placeholder="" />     

	<select class="form-control" name="transporter" >
	<option value="<?php echo $transporter ?>"><?php echo $transporter ?></option>
	<?php
	include("../includes/connection.php");
	$sql="SELECT * FROM transporters WHERE status='Active' ORDER BY name";
	$techs=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

	while ($tech = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
	$name = $tech['name'];

	echo "<option value='$name' style='background-color:#CCCCCC;'>$name</option>";	
	}			
	?>
	</select>--> 
	</div>
	<label class="col-sm-1 control-label label-format">Transport Date</label>
	<div class="col-sm-3"> 
	<div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input14" data-link-format="yyyy-mm-dd">
	<input class="form-control" size="16" type="text" value="<?php if($transportdate=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($transportdate));?>" readonly>
	<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
	<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	</div>
	<input type="hidden" id="dtp_input14" value="<?php if($transportdate=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($transportdate));?>"  name="transport_date" />
	</div>
	<label class="col-sm-1 control-label label-format">Transport Time</label>
	<div class="col-sm-2"> 
	<input type="text" class="form-control defaultEntry" name="transport_time" 
	value="<?php  echo $transporttime ?>" />
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-1 control-label label-format">Received Date</label>
	<div class="col-sm-3"> 
	<div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input1" data-link-format="yyyy-mm-dd">
	<input class="form-control" size="16" type="text" value="<?php if($recieved_date=='0000-00-00'){echo '';} else echo @date('d F Y',strtotime($recieved_date));?>" readonly>
	<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
	<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	</div>
	<input type="hidden" id="dtp_input1" value="<?php if($recieved_date=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($recieved_date));?>" name="recieved_date"/>
	</div>

	<label class="col-sm-1 control-label label-format">Received Time</label>
	<div class="col-sm-2"> 
	<input type="text" class="form-control defaultEntry" name="recieved_time" value="<?php echo $recieved_time ?>" />
	</div>
	<label  class="col-sm-1 control-label label-format">Recieving Technologist</label>
	<div class="col-sm-2"> 
	<select  class="form-control" name="technologist" >
	<option value="<?php echo $technologist ?>"><?php echo $technologist; ?></option>
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
<div class="form-group"> 
	<label class="col-sm-1 control-label label-format">Appearance</label>
	<div class="col-sm-2"> 
	<select name="appearance" class="form-control" >
	<option value="<?php echo $appearance; ?>"><?php echo $appearance; ?></option>
	<?php
	include("../includes/connection.php");
	$sql="SELECT * FROM option_appearance where status='Active' ORDER BY name";
	$appearances_check=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

	while ($appearance = mysqli_fetch_array($appearances_check,MYSQLI_ASSOC)) {
	$name = $appearance['name'];
	$code = $appearance['code'];

	echo "<option value='$name' style='background-color:#CCCCCC;'>$code - $name</option>";	
	}			
	?>
	</select></div>
	<div class="col-sm-1">
	</div>

	<label  class="col-sm-1 control-label label-format">Volume</label>
	<div class="col-sm-2"> 
	<input type="number" name="volume" class="form-control" placeholder="Volume" value="<?php echo $volume; ?>" pattern="[0-9]+([\.,][0-9]+)?" step="0.01"/>
	</div>
	<label class="col-sm-1 control-label label-format">Consistency</label>
	<div class="col-sm-3"> 
		<select name="consistency" class="form-control" >
		<option value="<?php echo $consistency; ?>"><?php echo $consistency; ?></option>
		<?php
		include("../includes/connection.php");
		$sql="SELECT * FROM option_consistency WHERE status='Active' ORDER BY name";
		$appearances_check=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

		while ($appearance = mysqli_fetch_array($appearances_check,MYSQLI_ASSOC)) {
		$name = $appearance['name'];
		echo "<option value='$name' style='background-color:#CCCCCC;'>$name</option>";	
		}			
		?>
		</select>
	</div>	
</div>
<?php include("samples_examination_media_selection.php");?>

<div class="form-group">
	<label class="col-sm-1 control-label label-format">Processing Date</label>
	<div class="col-sm-3"> 
		<div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input7" data-link-format="yyyy-mm-dd" >
			<input class="form-control" size="16" type="text" value="<?php if($processdate=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($processdate));?>"readonly>
			<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
			<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		</div>
		<input type="hidden" id="dtp_input7" value="<?php if($processdate=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($processdate));?>"  name="process_date" />
	</div>
	<label class="col-sm-1 control-label label-format">Processing Time</label>
	<div class="col-sm-2"> 
	<input type="text" class="form-control defaultEntry" value="<?php echo $processtime ?>" name="process_time" />
	</div>
	<label  class="col-sm-1 control-label label-format">Processing Technologist</label>
	<div class="col-sm-2"> 
	<select class="form-control" name="process_tech" >
	<option value="<?php echo $processtech; ?>"><?php echo $processtech; ?></option>
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

<div class="form-group"> 
	<label class="col-sm-1 control-label label-format">Specimen Storage</label>
	<div class="col-sm-3"> 
	<select class="form-control" name="specimen_storage" >
	<option value="<?php echo $specimen_storage; ?>"><?php echo $specimen_storage; ?></option>
	<?php
	include("../includes/connection.php");
	$sql="SELECT * FROM specimen_storage WHERE status='Active' ORDER BY temperature";
	$techs=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

	while ($tech = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
	$storage_temp = $tech['temperature'];

	echo "<option value='$storage_temp' style='background-color:#CCCCCC;'>$storage_temp</option>";	
	}			
	?>
	</select>

	</div>
	<label class="col-sm-2 control-label label-format">Comment on Sample</label>
	<div class="col-sm-6"> 
		<input type="text" class="form-control" placeholder="Comment" value="<?php echo $comment; ?>"name="comment" />
	</div>
</div>	


	

