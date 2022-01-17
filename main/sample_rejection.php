
<?php include("../includes/session_start.php");?>
<?php include("../includes/global_content.php");?>

<?php
	/*declaring variables defined in the url of sample_rejection file, so GET method is used*/
	if(isset($_GET["pid"])){
		//Handling values of pid,otherpid,study_code&pauto_id from URL
		$pid=$_GET["pid"];
		$other_pid=$_GET["other_pid"];
		$study_code=$_GET["study_code"];
		$pauto_id=$_GET["pauto_id"];//hidden field	
	}
	if(isset($_POST['submit'])){
		include("../includes/connection.php");
		$appearance=ucwords(mysqli_real_escape_string($con, $_POST['appearance']));
		$request_reason=$_POST['request_reason'];
		$reject_reasons=$_POST['reject_reasons'];
		$volume=$_POST['volume'];
		$collection_method=$_POST['collection_method'];
		@$requestor=$_POST['requestor'];
		@$collection_time=$_POST['collection_time'];
		@$coll_date=$_POST['coll_date'];
		@$request_date=$_POST['request_date'];
		@$recieved_time=$_POST['recieved_time'];
		@$recieved_date=$_POST['recieved_date'];
		$rejected_by=$_SESSION['name'];
		@$other_pid=$_POST['other_pid'];	
		//
		$sql="INSERT INTO rejected_samples (colldate,rejected_by,reject_reason,study_code,patient,requestreason,appearance,volume,
collmethod,colltime,requester,rctdate,rcttime)
		values ('$coll_date','$rejected_by','$reject_reasons','$study_code','$pauto_id','$request_reason','$appearance','$volume','$collection_method','$collection_time',
		'$requestor','$recieved_date','$recieved_time')";
		$query=mysqli_query($con, $sql) or die("Error ".mysqli_error($con));
		if($query){
			$select_labno="SELECT * FROM rejected_samples WHERE id=LAST_INSERT_ID()";
			$queryp=mysqli_query($con, $select_labno) or die("Error ".mysqli_error($con));
			while($row=mysqli_fetch_array($queryp)){
				$pname=$row['name'];
			}
			header("Location:patient_registration.php?msg=4&&rejected=1&&pid=$pid&&study-code=$study_code&&pname=$pname");
		}else{
			echo "Data failed to insert! ERROR".mysqli_error($con);
		}
	}
?>

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

			<?php if(isset($_GET['registered'])){
			$registered=$_GET['registered']; 
			$scode=$_GET['scode'];
			echo "<div id='successmessage'
			<center>Sample Registration successsful!</div>";
			} ?>
			<?php // echo "<font color='red'><b><center> $requestor_reg_aborted</center></b></font>"; ?>
			<fieldset class="scheduler-border"> <legend  class="scheduler-border"><b class="form_head">Rejecting Sample</b></legend>
			<form action="" method="POST" id="example-1-form" autocomplete="off" onsubmit="leave()">
			<table width='100%' class="table"><tr>
			<td align='left'><input type="button" value="BACK" class="btn btn-info" style="height:50px; width:; background-color:;" onclick="history.go(-1);return true;"></td>
			<td align='right'><button type="submit" name="submit" class="btn btn-success">Reject Sample</button></td>
			</tr></table>


			<div class="form-horizontal">
			<div class="form-group"> 
			<label class="col-sm-2 control-label label-format">Study Code</label>
			<div class="col-sm-1"> 
			<input type="text" id="" value="<?php echo $study_code ?>" readonly  style="color: red;
			text-transform: capitalize;"class="form-control" name="study_code" />
			</div>

			<label class="col-sm-1 control-label label-format">PID</label>
			<div class="col-sm-2"> 
			<input type="text" id="" value="<?php echo $pid ?>" readonly  style="color: red;
			text-transform: capitalize;"class="form-control" placeholder="Patient ID" name="pid" />
			</div>
			<label class="col-sm-1 control-label label-format">Other PID</label>
			<div class="col-sm-2"> 
			<input type="text" id="" value="<?php echo $other_pid ?>" readonly   style="color: red;
			text-transform: capitalize;"class="form-control" placeholder="PID2" name="other_pid" />
			</div>
			</div>


			<div class="form-group"> 
			<label class="col-sm-2 control-label label-format">Appearance</label>
			<div class="col-sm-4"> 
			<select name="appearance" class="form-control" >
			<option value="">-Appearance-</option>
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

			<label  class="col-sm-1 control-label label-format">Volume</label>
			<div class="col-sm-4"> 
			<input type="text" style="color: #222;
			"class="form-control" placeholder="Volume" name="volume" />
			</div>
			</div>
			<div class="form-group"> 
			<label  class="col-sm-2 control-label label-format">Request Reason</label>
			<div class="col-sm-4"> 
			<input type="text" style="color: #222;
			"class="form-control" placeholder="Request Reason" name="request_reason" />
			</div>

			<label  class="col-sm-1 control-label label-format">Requester</label>
			<div class="col-sm-5"> 
			<select name="requestor" class="form-control" <?php if($study_code=='PV'){echo 'required';} ?> onclick="reloadRequestors();" id="requestorsearch">
				<option value="">-Select requester-</option>
			</select>
			<span onclick="reloadRequestors();" style="cursor: pointer; color:blue;">Reload</span> &nbsp;&nbsp;&nbsp;
			<span onclick="window.open('new_requester.php')" style="cursor: pointer; color:blue;">New Requester</span>
			</div>
			</div>

			<div class="form-group"> 
			<label  class="col-sm-2 control-label label-format">Collection Method</label>
			<div class="col-sm-4"> 
			<select name="collection_method" class="form-control" >
			<option value="">-Collection Method-</option>
			<?php
			include("../includes/connection.php");
			$sql="SELECT * FROM option_collmethod where status='Active' ORDER BY name";
			$collmethods_names=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

			while ($collmethod_name = mysqli_fetch_array($collmethods_names,MYSQLI_ASSOC)) {
				$name = $collmethod_name['name'];
				$code = $collmethod_name['code'];

				echo "<option value='$name' style='background-color:#CCCCCC;'>$code - $name</option>";	
			}			
			?>
			</select></div>

			<label for="dtp_input3" class="col-sm-2 control-label label-format">Collection Time</label>
			<div class="col-sm-4"> 
			<input type="text" class="form-control" name="collection_time" pattern="^([0-1]?[0-9]|2[0-3]):[0-5][0-9]$" placeholder="hh:mm (24hr format)" />
			</div>
			</div>

			<div class="form-group"> 
				<label class="col-sm-2 control-label label-format">Received Date</label>
				<div class="col-sm-4"> 
				<div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input1" data-link-format="yyyy-mm-dd">
				<input class="form-control" size="16" type="text" value="" readonly>
				<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
				</div>
				<input type="hidden" id="dtp_input1" value="" name="recieved_date"/>
				</div>
				<label  class="col-sm-2 control-label label-format">Received Time</label>
				<div class="col-sm-4"> 
				<input type="text" class="form-control" name="recieved_time" pattern="^([0-1]?[0-9]|2[0-3]):[0-5][0-9]$" placeholder="hh:mm (24hr format)" />
				</div>
			</div>
			
			<div class="form-group"> 
				<label class="col-sm-2 control-label label-format">Collection Date</label>
				<div class="col-sm-4"> 
					<div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input15" data-link-format="yyyy-mm-dd">
					<input class="form-control" size="16" type="text" value="" readonly>
					<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
					</div>
					<input type="hidden" id="dtp_input15" value="" name="coll_date"/>
				</div>
				<label  class="col-sm-2 control-label label-format">Rejection Reason</label>
				<div class="col-sm-4"> 
					<select name="reject_reasons" class="form-control" required >
					<option value="">-Rejection Reason-</option>
					<?php
					include("../includes/connection.php");
					$sql="SELECT * FROM rejection_reason where status='Active' ORDER BY reason";
					$reject_reasons=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

					while ($reject_reason = mysqli_fetch_array($reject_reasons,MYSQLI_ASSOC)) {
					$name = $reject_reason['reason'];
					$code= $reject_reason['id'];

					echo "<option value='$name' style='background-color:#CCCCCC;'>$name</option>";	
					}			
					?>
					</select>
				</div>
			</div>
			<div class="form-group"> 

			<div class="col-sm-8"> 
				<button type="submit" name="submit" class="btn btn-success">Reject Sample</button>
			</div>

			</div>


			</div>
			</form>
			</div>
			</fieldset>
			<script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>
		</div>

		<?php  // stop checking for illegal login
		} else echo "<center>Illegal Access Blocked. <br><a href='index.php'>Login</a> to access the resources.</center>";?>
		</div>

		<div id="footer" class='row'> 
		<?php include("../includes/footer.php"); ?>
		</div>
	</div>
</body>
</html>