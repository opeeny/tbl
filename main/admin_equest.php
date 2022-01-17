<?php
if(isset($_POST['Submit'])=="Submit")
{
	include("../includes/dbconfig.php");	
	
	
	$name=ucwords(mysqli_real_escape_string($dbconnection,$_POST['surname']));
	$patient_initials=ucwords(mysqli_real_escape_string($dbconnection,$_POST['patient_initials']));
	
	$village=ucwords(mysqli_real_escape_string($dbconnection,$_POST['village']));
	$subcounty=ucwords(mysqli_real_escape_string($dbconnection,$_POST['subcounty']));
    $pid=strtoupper($_POST['patient_id']);
	$pid2=strtoupper($_POST['patient_id2']);
   $gender=ucwords($_POST['gender']);
   $study_code=$_POST['study_code'];
	$tel=$_POST['tel'];
	$district=$_POST['district'];

/*
$checkduplication1=mysqli_query("select * from cluster_type where cluster_type='$cluster_type' ");
$row=mysqli_fetch_array($checkduplication1);

if(mysqli_num_rows($checkduplication1) <1)
{*/
	$insert=mysqli_query($dbconnection,"insert into patients (pid_other,study,pid,pinitials,name,gender,telephone,village,subcounty,district)
		values ('$pid2','$study_code','$pid','$patient_initials','$name','$gender','$tel','$village','$subcounty','$district')"); 
if ($insert){
	$pauto_no="SELECT * FROM patients WHERE id=LAST_INSERT_ID()";
$patients=mysqli_query($dbconnection,$pauto_no) or die("ERROR : " . mysqli_error($dbconnection));

while ($patient = mysqli_fetch_array($patients,MYSQLI_ASSOC)) {
			$pauto_id = $patient['id'];
						
}
	//header("Location:cluster_cont.php?cname=$c_name&&sub=$c_subcounty&&dist=$c_district&&date=$dob");
	header("location:samples_registration.php?pid=$pid&&otherpid=$pid2&&s_code=$study_code&&pauto_id=$pauto_id");
	//$patient_reg_success="Patient $surname $othername has been registered";
	
// User friendly notification to be developed
}
else{
echo "Data failed to insert: ".mysqli_error($dbconnection);

}	
}
?>
<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<?php include("../includes/header_content.php"); ?>
<?php include("../includes/header_bootstrap_content.php"); ?>
</head>

    <script src="../jquery/jquery.are-you-sure.js"></script>
    <script src="../jquery/ays-beforeunload-shim.js"></script>
<script type="text/javascript">
  $(function() {

        // Example 1 - ... in one line of code
        $('#Patient').areYouSure();
</script>
 
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
<div class="col-md-2"> 
</div>

<div class="col-md-10"> 
<?php if(isset($_GET['registered'])){
$registered=$_GET['registered']; 

echo "<div id='successmessage'
 <center>Sample Registration successsful!</div>";
} ?>
<?php if(isset($_GET['savedsample'])){
$savedsample=$_GET['savedsample'];
$scode=$_GET['scode'];
//$ntrlpno=$_GET['ntrlpno']; 
$pname=$_GET['pname'];
echo "<div style='border:1px red solid;'><center><b>Sample with LAB NO <font color='red' size='5'>";if($scode!=''){echo "$scode-$savedsample";} else{echo $savedsample;} echo "</font></b> "; if($pname!=''){echo "has been registered for Patient <b>$pname"; } echo "</center></div><br>";
} ?>
<?php if(isset($_GET['rejected'])){
$savedsample=$_GET['rejected'];
$scode=$_GET['scode'];
//$ntrlpno=$_GET['ntrlpno']; 
$pname=$_GET['pname'];
echo "<div style='border:1px red solid;'><center><b>Sample for  <font color='red' size='5'>";if($pname!=''){echo "$pname";} else{echo "";} echo "</font>  has been rejected</b> "; echo "</center></div><br>";
} ?>
<div class="form_head"> PATIENT REGISTRATION  </div>

<?php // echo "<font color='blue'><b><center> $patient_reg_success</center></b></font>"; 
?>
  <form action="" method="post" id="patient" autocomplete="off"><div class="form-horizontal">
  <div class="form-group"> 
  <label  class="col-sm-1 control-label label-format">PID1#</label>
      <div class="col-sm-2"> 
        <input type="text" style="color: #222;
text-transform: capitalize;"class="form-control" placeholder="Patient ID1" 
name="patient_id"  />
      </div>
	  <label  class="col-sm-1 control-label label-format">PID2#</label>
      <div class="col-sm-2"> 
        <input type="text" style="color: #222;
text-transform: capitalize;"class="form-control" placeholder="Patient ID 2" 
onkeyup="showRegisteredPatients_pid2(this.value)"name="patient_id2"  />
      </div>
      <label  class="col-sm-2 control-label label-format">Telephone</label>
      <div class="col-sm-4"> 
        <input type="number"  
		class="form-control" placeholder="Enter tel in format 256785643123" name="tel" id="fname" />
      </div>
	  
    </div>
	
<div class="form-group"> 
<label  class="col-sm-2 control-label label-format">Name</label>
      <div class="col-sm-4"> 
        <input type="text" style="color: #222;
text-transform: capitalize;"class="form-control" placeholder="Name eg Kibuuka James" name="surname" id="surname" 
onkeyup="showRegisteredPatients_name(this.value)" />
      </div>
      <label for="Village" class="col-sm-2 control-label label-format">Village</label>
      <div class="col-sm-4"> 
            <input type="text" class="form-control" placeholder="Enter village name" name="village" id="village" />
       </div>
	  
    </div>
	
	<div class="form-group"> 
	<label  class="col-sm-2 control-label label-format">Study </label>
      <div class="col-sm-4"> 
<select name="study_code" required class="form-control" >
			<option value="">- Study -</option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM studycodes WHERE status='Active'";
			$study_codes=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection ));

			while ($study_code = mysqli_fetch_array($study_codes,MYSQLI_ASSOC)) {
				$ptitle = $study_code['projtitle'];
				$code = $study_code['code'];
				
			echo "<option value='$code' style='background-color:#CCCCCC;'>$code - $ptitle</option>";	
			}			
			?>
		</select></div>
	        <label for="Type of sample" class="col-sm-2 control-label label-format">Particular</label>
      <div class="col-sm-4"> 
	  <select name="particular" class="form-control" >
			<option value="">-Not Provided-</option>
			
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM districts ORDER BY name";
			$districts=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($district = mysqli_fetch_array ($districts,MYSQLI_ASSOC)) {
				$dname = $district['name'];
				$dist_id = $district['id'];
			echo "<option value='$dname' style='background-color:#CCCCCC;'>$dname</option>";	
			}			
			?>
		</select>
          </div>
      
	  
    </div>
	
	<div class="form-group">
<label  class="col-sm-2 control-label label-format">Patient Initials</label>
      <div class="col-sm-4"> 
        <input type="text" style="color: #222;
text-transform: capitalize;"class="form-control" placeholder="Patient Initials" name="patient_initials" id="fname" />
      </div>
<label  class="col-sm-2 control-label label-format">Subcounty</label>
      <div class="col-sm-4"> 
          <input type="text"  
		  class="form-control" placeholder="Enter Subcounty name" name="subcounty" id="subcounty" />
         </div>	  
      
	  
    </div>
	<div class="form-group"> 
<label  class="col-sm-2 control-label label-format">Gender</label>
      <div class="col-sm-4"> 
        <select class="form-control" name="gender" required >
	<option value="" >Select Gender</option>
		<option value="Male">Male</option>
		<option value="Female">Female</option>
		<option value="Not Provided">Not Provided</option>
		
		</select>
      </div>
		  <div class="col-sm-6"> 
        <button type="Submit" name="Submit" class="btn btn-primary">Register Patient</button>
      </div>
		  
    </div>
	 <div id="livesearch" style='font-size:0.8em;background-color:; border:; max-height:300px; width:; margin-right:; padding:; overflow:auto;'></div>

    
    
   </div>
  </form>
  
 
  </div>

</div>
 
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>
</div>

<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>

</div>

</body>
</html>