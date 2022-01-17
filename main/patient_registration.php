<?php include("../includes/session_start.php");?>
<?php include("../includes/global_content.php");?>

<?php
if(isset($_POST['submit'])){
//$rest = $_POST['submit'];
//ucwords() converts the first character of each word to uppercase in a string
//strtoupper(), converts all characters to uppercase
include('../includes/connection.php');
	$id=$_SESSION['id'];//track logged in id
	$pid=strtoupper($_POST['pid']);
	$other_pid=strtoupper($_POST['other_pid']);
	$study_code=$_POST['study_code'];
	$pinitials=$_POST['pinitials'];
	$name=ucwords(mysqli_real_escape_string($con, $_POST['name']));
	$gender=ucwords($_POST['gender']);
	$telephone=$_POST['telephone'];
	$village=ucwords(mysqli_real_escape_string($con, $_POST['village']));
	$subcounty=ucwords(mysqli_real_escape_string($con, $_POST['subcounty'])); 
	$district=$_POST['district'];
	
	if($subcounty==''){$subcounty='Not Provided';}
	//checking and preventing any kind of duplications in database
	$sq = "SELECT * FROM patients WHERE pid='$pid' AND study_code = '$study_code'";
	$qu = mysqli_query($con, $sq) or die("Error ".mysqli_error($con));
	$rows = mysqli_num_rows($qu);
	if($rows>0){
		while($patient=mysqli_fetch_array($qu,MYSQLI_ASSOC)){
			$pauto_id = $patient['id'];
		}
		echo "<h1 class='exists'>Patient with PID $pid STUDY $study_code Already exists<a href='samples_registration.php?pid=$pid&&other_pid=$other_pid&&s_code=$study_code&&pauto_id=$id'>Click here to Proceed To Sample Registration</a> </h1>";
	}else{
	
	$sql = "INSERT into patients (pid,other_pid,study_code,pinitials,name,gender,telephone,village,subcounty,district) VALUES('$pid','$other_pid','$study_code','$pinitials','$name','$gender','$telephone','$village','$subcounty','$district')";
	$query = mysqli_query($con, $sql) or die("Error ".mysqli_error($con));
	if($query){
		$pauto_id = "SELECT * FROM patients WHERE id=LAST_INSERT_ID()";
		$query_id = mysqli_query($con, $pauto_id) or die("Error ".mysqli_error($con));
		while($rpatient = mysqli_fetch_array($query_id, MYSQLI_ASSOC)){
			$pauto_id=$rpatient['id'];
			$name=$rpatient['name'];
			$study_code=$rpatient['study_code'];
		}
		echo "<script>
		alert('successfuly inserted');
		location.href='#';
		</script>";
		//header("location:samples_registration.php?pid=$pid&&other_pid=$$=&&study_code=$study_code&&pauto_id=$pauto_id");
		
	}else{
		echo "<script>
		alert('patient registration fails');
		location.href='';
		</script>".mysqli_error($con);
	}
	}//else of >0
	}
?>
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
	<?php include("../includes/headercontent.php"); ?>
	<?php include("../includes/headerbootstrapcontent.php"); ?>
</head>
    <script src="../jquery/jquery.are-you-sure.js"></script>
    <script src="../jquery/ays-beforeunload-shim.js"></script>
	<script type="text/javascript">
		function showpatient(){
			alert('its us');
		}
	</script>
	<style type="text/css">
		h1.exists a{color:white; font-size:26px;margin-top:30px;margin-bottom:30px; background-color:green; 
		border-radius:25px;height:45px;text-align:center;}
		h1{font-size:24px;color:red;text-align:center;font-weight:60;}
	</style>
	<body>
		<div id="wrapper" class="container">
			<div id="banner" class="row">
				<?php include("../includes/banner.php");?>
			</div>
			<div id="middle" class="row">
				<?php //start checking for illegal login
					if(isset($_SESSION['username']) and isset($_SESSION['password'])) {
					//echo $_SESSION['username'];
				?>
				<div id="welcome">
					<?php include("../includes/welcomediv.php");?>
				</div>
				<div id="content">
					<div class="col-md-12">
					<?php if(isset($_GET['registered'])){
						$registered = $_GET['registered'];
						echo "<div id='successmessage'>;
						<center>Sample registration successfuly!</center>;
						</div>";
					}?>
					
						<div class="form_head" >Patient Registration</div>
						
							<form action="" method="post" id="patient" autocomplete="off">
							<div class="form-horizontal">
							<!-- Row 1-->
							<div class="form-group">
								<label  class="col-sm-1 control-label label-format">PID#<?php echo '<font color="#0000A0">'."***".'</font>';?></label>
								<div class="col-sm-2">
									<input type="text" onkeyup="showRegisteredPatients(this.value)" class="form-control" style ="color: #222;text-transformation: capitalize;" name="pid" placeholder="PID#" required autofocus>
								</div>
								<label  class="col-sm-1 control-label label-format">Other PID#</label>
								<div class="col-sm-2">
									<input type="text" onkeyup="showRegisteredPatients(this.value)" class="form-control" style ="color: #222;text-transformation: capitalize;" name="other_pid" placeholder="PID# /NTLO NO NIN" required>
								</div>
								<label class="col-sm-1 control-label label-format">Telephone.</label>
								<div class="col-sm-3">
									<input type="number"  class="form-control" style ="color: #222;text-transformation: capitalize;" name="telephone" placeholder="Enter Tel. in the format 256785121200" >
								</div>	
							</div>
							<!-- Row 2-->
							<div class="form-group">
								<label  class="col-sm-2 control-label label-format">Name</label>
								<div class="col-sm-3">
									<input type="text" onkeyup="showRegisteredPatients(this.value)" class="form-control" style ="color: #222;text-transformation: capitalize;" name="name" id="surname" placeholder="Name e.g Opeeny Godfrey">
								</div>
								<label for="Village" class="col-sm-2 control-label label-format">Village</label>
								<div class="col-sm-3">
									<input type="text"  class="form-control" style ="color: #222;text-transformation: capitalize;" name="village" placeholder="Enter village" >
								</div>
								
							</div>
							<!-- Row 3-->
							<div class="form-group">
								<label  class="col-sm-2 control-label label-format">Study<?php echo "<font>".'***'."</font>";?></label>
								<div class="col-sm-3">
									<select class="form-control" name="study_code">
										<option value="">-Study-</option>
										<?php include("../includes/connection.php");?>
											
										<?php 
										$user_id = $_SESSION['id'];//id tracks specific user but doesn't help extract all options for user selction
										//I think the similarity is in the status, //why not use id here, not right
										//$sql = "SELECT * FROM studycodes ORDER BY projtitle";//works
										$sql = "SELECT * FROM studycodes WHERE status='Active'";//also works
										$query=mysqli_query($con, $sql) or die("Error ".mysqli_error($con));
										while($study=mysqli_fetch_array($query, MYSQLI_ASSOC)){
											$projtitle=$study['projtitle'];
											$code=$study['code'];
											echo "<option value='$code'>$code->$projtitle</option>";//value can be any file, link or variable on selecting based onchange event-handler
										}
										?>
									</select>
								</div>
								<label for="District" class="col-sm-2 control-label label-format">District</label>
								<div class="col-sm-3">
									<select name="district" class="form-control">
										<option value="Not Provided">-Not Provided-</option>
										<?php 
										//district_id tracks specific user but doesn't help extract all options for user selction
											//$district_id = $_SESSION['id'];//no need of sessions here
											$sql = "SELECT * FROM districts ORDER BY name";
											$query=mysqli_query($con, $sql) or die("Error ".mysqli_error($con));
											while($district=mysqli_fetch_array($query)){
												$name=$district['name'];
												$d = $district['id'];
												echo "<option value='$name'>$d->$name</option>";
											}
										?>
									</select>
								</div>
							</div>
							<!-- Row 4-->
							<div class="form-group">
								<label  class="col-sm-2 control-label label-format">Patient Initials</label>
								<div class="col-sm-3">
									<input type="text" name="pinitials" style ="color: #222;text-transformation: capitalize;" class="form-control" id="fname" placeholder="Patient Initials">
								</div>
								<label for="District" class="col-sm-2 control-label label-format">Sub-County</label>
								<div class="col-sm-3">
									<input type="text" name="subcounty" style ="color: #222;text-transformation: capitalize;" class="form-control" id="subcounty" placeholder="Enter Subcounty name">
								</div>
							</div>
							<!-- Row 5-->
							<div class="form-group">
								<label  class="col-sm-2 control-label label-format">Gender</label>
								<div class="col-sm-3">
									<select name="gender" class="form-control" onchange="">
										<option value="Not Provided">Select Gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										<option value="Other">Other</option>
									</select>
								</div>
								<div class="col-sm-6">
									<input type="submit" value="Register Patient" class="btn btn-primary"  name="submit"> 
								</div>
							</div>
							<div id="livesearch" style="style='font-size:0.8em;background-color:; border:; max-height:300px; width:; margin-right:; padding:; overflow:auto;'">*If a patient is already registered, do the search usig PID or name*</div>
							</div>
						</form>
					</div>
				</div>
				<?php }else {echo "<cente>Illegal Access Blocked.<br><a href='../index.php'>Login</a>to acess the resources.</center>";}?>
			</div>
			<div id="footer" class="row">
				<?php include('../includes/footer.php');?>
			</div>
		</div>
	</body>
</html>
