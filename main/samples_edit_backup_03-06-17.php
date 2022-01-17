<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php

	
if(isset($_POST['edit_sample']))
{
include("../includes/dbconfig.php");	
	$name=ucwords(mysqli_real_escape_string($dbconnection,$_POST['surname']));
	$patient_initials=ucwords(mysqli_real_escape_string($dbconnection,$_POST['patient_initials']));
	
$village=ucwords(mysqli_real_escape_string($dbconnection,$_POST['village']));
	$subcounty=ucwords(mysqli_real_escape_string($dbconnection,$_POST['subcounty']));
$pid=(mysqli_real_escape_string($dbconnection,$_POST['pid']));
$sampleid=(mysqli_real_escape_string($dbconnection,$_POST['sampleid']));
$otherpid=(mysqli_real_escape_string($dbconnection,$_POST['otherpid']));
   $gender=(mysqli_real_escape_string($dbconnection,$_POST['gender']));
   $s_code=(mysqli_real_escape_string($dbconnection,$_POST['study_code']));
   $s_codep=(mysqli_real_escape_string($dbconnection,$_POST['study_codep']));
	$tel=(mysqli_real_escape_string($dbconnection,$_POST['tel']));
	$district=(mysqli_real_escape_string($dbconnection,$_POST['district']));
	
	@$appearance=ucwords(mysqli_real_escape_string($dbconnection,$_POST['appearance']));
   @$request_reason=(mysqli_real_escape_string($dbconnection,$_POST['request_reason']));
   @$visit_interval=(mysqli_real_escape_string($dbconnection,$_POST['visit_interval']));
   @$samplehierachy=(mysqli_real_escape_string($dbconnection,$_POST['samplehierachy']));
	//$study_code=$_POST['study_code'];
	//$pid=$_POST['pid'];
	@$years=(mysqli_real_escape_string($dbconnection,$_POST['years']));
	@$months=(mysqli_real_escape_string($dbconnection,$_POST['months']));
	@$specimen_type=(mysqli_real_escape_string($dbconnection,$_POST['specimen_type']));
	@$volume=(mysqli_real_escape_string($dbconnection,$_POST['volume']));
	@$consistency=(mysqli_real_escape_string($dbconnection,$_POST['consistency']));
	@$hivstatus=(mysqli_real_escape_string($dbconnection,$_POST['hivstatus']));
	@$peripheralresults=(mysqli_real_escape_string($dbconnection,$_POST['peripheralresults']));
	@$collector=(mysqli_real_escape_string($dbconnection,$_POST['collector']));
	@$collection_method=(mysqli_real_escape_string($dbconnection,$_POST['collection_method']));
	
	@$technologist=(mysqli_real_escape_string($dbconnection,$_POST['technologist']));
	@$comment=(mysqli_real_escape_string($dbconnection,$_POST['comment']));
	@$transporter=(mysqli_real_escape_string($dbconnection,$_POST['transporter']));
	@$examination=mysqli_real_escape_string($dbconnection,implode(',', $_POST['examination']));
	@$otherexamination=mysqli_real_escape_string($dbconnection,implode(',', $_POST['otherexamination']));
	@$fullexamination=$examination.','.$otherexamination;
	@$selectedsolidmedia=mysqli_real_escape_string($dbconnection,implode(',', $_POST['solidmedia']));
	@$selectedliquidmedia=mysqli_real_escape_string($dbconnection,implode(',', $_POST['liquidmedia']));
	@$selectedbloodmedia=mysqli_real_escape_string($dbconnection,implode(',', $_POST['bloodmedia']));
	@$fullmedia=$selectedsolidmedia.','.$selectedliquidmedia.','.$selectedbloodmedia;
	@$specimen_storage=(mysqli_real_escape_string($dbconnection,$_POST['specimen_storage']));
	@$requestor=(mysqli_real_escape_string($dbconnection,$_POST['requestor']));
	@$collection_time=(mysqli_real_escape_string($dbconnection,$_POST['collection_time'])); $collection_time= date('H:i:s',strtotime($collection_time));
	@$collection_date=(mysqli_real_escape_string($dbconnection,$_POST['collection_date']));
	@$request_date=(mysqli_real_escape_string($dbconnection,$_POST['request_date']));
	@$recieved_time=(mysqli_real_escape_string($dbconnection,$_POST['recieved_time'])); $recieved_time= date('H:i:s',strtotime($recieved_time));
	@$recieved_date=(mysqli_real_escape_string($dbconnection,$_POST['recieved_date']));
	@$process_date=(mysqli_real_escape_string($dbconnection,$_POST['process_date']));
	@$process_time=(mysqli_real_escape_string($dbconnection,$_POST['process_time'])); $process_time= date('H:i:s',strtotime($process_time));
	@$process_tech=(mysqli_real_escape_string($dbconnection,$_POST['process_tech']));
	@$transport_date=(mysqli_real_escape_string($dbconnection,$_POST['transport_date']));
	@$transport_time=(mysqli_real_escape_string($dbconnection,$_POST['transport_time'])); $transport_time= date('H:i:s',strtotime($transport_time));
	@$innoc_time=$_POST['innoc_time']; $innoc_time= date('H:i:s',strtotime($innoc_time));
	@$innoc_date=$_POST['innoc_date'];
	@$labno=(mysqli_real_escape_string($dbconnection,$_POST['labno']));
	@$pauto_id=(mysqli_real_escape_string($dbconnection,$_POST['pauto_id']));
	$editedby=$_SESSION['name'];
	$lastedittime=date('Y-m-d H:i', time());
	
	$sql="SELECT * FROM samples WHERE labno='$labno' ";
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

if (mysqli_num_rows($samples) > 0){
while ($sample = mysqli_fetch_array($samples)) {
	$oldlabno = $sample['labno'];

	$oldspectype=$sample['spectype'];
	$oldvolume=$sample['volume'];
	$oldappearance=$sample['appearance'];
	$oldcollmethod=$sample['collmethod'];
	$oldcolldate=$sample['colldate'];
	$oldstudycode=$sample['studycode'];
	$oldexamination=$sample['examination'];
	$oldaccessiontime=$sample['accessiontime'];
	//$oldentrydate=$sample['entrytime'];
} /* Ending while */
$sql_history = "INSERT into samples_hist  (volume,studycode,labno,spectype,appearance,collmethod,colldate,examination,accessiontime)
 values ('$oldvolume','$oldstudycode','$oldlabno','$oldspectype','$oldappearance','$oldcollmethod','$oldcolldate','$oldexamination','$oldaccessiontime')";
mysqli_query($dbconnection,$sql_history) or die("ERROR : " . mysqli_error($dbconnection));
}	
//echo "<h1>date is $innoc_date";

$updatesample=mysqli_query($dbconnection,"UPDATE samples SET inoculationtime='$innoc_time',inoculationdate='$innoc_date',sample_id='$sampleid',studycode='$s_code',patient='$pauto_id',ageyears='$years',
agemonths='$months',visitinterval='$visit_interval',samplehierachy='$samplehierachy',requestreason='$request_reason',spectype='$specimen_type',
appearance='$appearance',volume='$volume',consistency='$consistency',peripheralres='$peripheralresults',hivstatus='$hivstatus',collector='$collector',collmethod='$collection_method',
colldate='$collection_date',colltime='$collection_time',rcttech='$technologist',rctdate='$recieved_date',rcttime='$recieved_time',
requester='$requestor',requestdate='$request_date',examination='$fullexamination',media='$fullmedia',specstorage='$specimen_storage',
comment='$comment',transporter='$transporter',processtime='$process_time',processdate='$process_date',processtech='$process_tech',
transporttime='$transport_time', transportdate='$transport_date',lasteditby='$editedby',lastedittime='$lastedittime' where labno='$labno' ") or die("ERROR : " . mysqli_error($dbconnection));

$updatepatient=mysqli_query($dbconnection,"UPDATE  patients SET pid_other='$otherpid',study='$s_codep',pid='$pid',pinitials='$patient_initials',
name='$name',gender='$gender',telephone='$tel',village='$village',subcounty='$subcounty',district='$district' WHERE id='$pauto_id' ") or die("ERROR : " . mysqli_error($dbconnection));

include("samples_examination_media_processing.php");

$nextfindlabno=$labno+1;

header("location:samples_edit.php?findlabno=".$nextfindlabno."&scode=".$studycode."&edited=".$labno);
//echo "<h1>receivd is $recieved_date</h1>";
}
?>
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>

<?php include("../includes/header_content.php"); ?>
<?php include("../includes/header_bootstrap_content.php"); ?>
</head>
 
<script type="text/javascript">
setTimeout(function() {
    $('#successmessage').fadeOut('slow');
}, 2000); // <-- time in milliseconds
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

<div class="col-md-12"> 


<div class="searchsample">
<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM samples WHERE lasteditby=''";
$unediteds=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalunedited=mysqli_num_rows($unediteds);			
?>
<?php
if(isset($_GET['edited'])){
@$scode=$_GET['scode'];
$edited=$_GET['edited'];

echo "<div id='successmessage'
 <center>Sample $edited Update was Successsful!</div>";
}

@$labno=$_GET['findlabno'];
$prevlabno=$labno-1;
$nextlabno=$labno+1;

?>
<fieldset class="scheduler-border"> <legend  class="scheduler-border"><b>SEARCHING SAMPLE FOR EDITING</b></legend>
<div class="form-horizontal">
<form action="samples_edit.php" method="GET" name="formfindsample" onsubmit="return validateformfindsample();" autocomplete="off">

<div class="form-group"> 
<label class="col-sm-1 control-label label-format">LAB NO:</label>
<div class="col-sm-3"> 
    <input type="text" class="form-control" name="findlabno" type="text" placeholder="Search LAB NO" autofocus />
</div>
<div class="col-sm-1"> 
<input type="submit" name="findsample" value="FIND" class="form-control btn-primary" title="" style="height:30px; width:100px; background-color:;">
</div>
<div class="col-md-2">
<input type="button" value="<<PREVIOUS" class="form-control btn-success" onclick="location.href='samples_edit.php?findlabno=<?php echo $prevlabno;?>'">
</div>
<div class="col-sm-1"> 
<input type="button" value="NEXT>>" class="form-control btn-info"onclick="location.href='samples_edit.php?findlabno=<?php echo $nextlabno;?>'">
</div>
</div>

</form>
</div>
<font color='red'>** There are <?php echo $totalunedited ?> records whose details are not updated**</font> 
<br><b>FIRST 10 INCLUDE: </b>
<?php
while ($unediteds_10s = mysqli_fetch_array($unediteds,MYSQLI_ASSOC)) {
	$labno_10 = $unediteds_10s['labno'];
	$select_studycode_10="SELECT * FROM samples WHERE labno=$labno_10";
			$scs_10=mysqlI_query($dbconnection,$select_studycode_10) or die("ERROR : " . mysql_error($dbconnection));
			while ($sc_10 = mysqli_fetch_array($scs_10,MYSQLI_ASSOC)) {
				$studycode_10 = $sc_10['studycode'];
			}
	echo "<a href='?findlabno=$labno_10'>$studycode_10-$labno_10</a> &emsp;";
		//echo "<a href='resultsentry_fm.php?findlabno=$emptylabno'>$emptylabno-$emptystudycode</br></a>";
}
?></br>
</fieldset>

<br>

<?php
if(isset($_GET['findlabno'])){	
?>
<?php 
include("../includes/dbconfig.php");

$sql="SELECT * FROM samples WHERE labno='$labno'";
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

if (mysqli_num_rows($samples) > 0){
while ($sample = mysqli_fetch_array($samples,MYSQLI_ASSOC)) {
	$labno = $sample['labno'];
	$pauto_id = $sample['patient'];
	$requester=$sample['requester'];
$select_hcpno="SELECT * FROM patients WHERE id=$pauto_id";
					$patients=mysqli_query($dbconnection,$select_hcpno) or die("ERROR : " . mysql_error($dbconnection));

					while ($patient = mysqli_fetch_array($patients,MYSQLI_ASSOC)) {
								@$study=$patient['study'];
								@$pid=$patient['pid'];
								@$otherpid=$patient['pid_other'];
								@$name=$patient['name'];
								@$subcounty=$patient['subcounty'];
								@$pinitials=$patient['pinitials'];
								@$gender=$patient['gender'];
								@$gender=$patient['gender'];
								@$village=$patient['village'];
								@$telephone=$patient['telephone'];
								@$district=$patient['district'];
								
					}
					if($requester!=''){
					$select_requester="SELECT * FROM requestors WHERE id=$requester";
					$reqs=mysqli_query($dbconnection,$select_requester) or die("ERROR : " . mysql_error($dbconnection));

					while ($req = mysqli_fetch_array($reqs,MYSQLI_ASSOC)) {
								@$reqname=$req['name'];
								//@$req=$req['id'];
					}		
								
					}
	$s_code = $sample['studycode'];
	$innoc_date = $sample['inoculationdate'];
	$innoc_time = $sample['inoculationtime'];
	 $innoc_time=@date('H:i',strtotime($innoc_time));
	$sampleid = $sample['sample_id'];
	$examination=$sample['examination'];
	$rctdate = $sample['rctdate'];
	$rcttime = $sample['rcttime'];
	 $rcttime=@date('H:i',strtotime($rcttime));
	$rcttech = $sample['rcttech'];
	$processtech = $sample['processtech'];
	$processdate = $sample['processdate'];
	$processtime = $sample['processtime'];
	 $processtime=@date('H:i',strtotime($processtime));
	$appearance = $sample['appearance'];
	$volume=$sample['volume']; if ($volume==0){$volume='';}
	$transporter=$sample['transporter'];
	$comment=$sample['comment'];
	$labno=$sample['labno'];
$ageyears=$sample['ageyears'];if ($ageyears==0){$ageyears='';}
$agemonths=$sample['agemonths']; if ($agemonths==0){$agemonths='';}
$patient=$sample['patient'];
$samplehierachy=$sample['samplehierachy'];
$visitinterval=$sample['visitinterval'];
$requestreason=$sample['requestreason'];
$appearance=$sample['appearance'];
$spectype=$sample['spectype'];
//$volume=$sample['volume'];
$consistency=$sample['consistency'];
$peripheralresults=$sample['peripheralres'];
$hivstatus=$sample['hivstatus'];
$colldate=$sample['colldate'];
$colltime=$sample['colltime'];
$colltime=@date('H:i',strtotime($colltime));
$collector=$sample['collector'];
$specstorage=$sample['specstorage'];
$collmethod=$sample['collmethod'];
$requestdate=$sample['requestdate'];
$examination=$sample['examination'];
$media=$sample['media'];
$transporttime=$sample['transporttime'];
$transporttime=@date('H:i',strtotime($transporttime));
$transportdate=$sample['transportdate'];

} //ending while
}// ending if
else{
echo "<script>
alert('The Lab No $labno is not registered.');
location.href='samples_edit.php'
</script> ";
}

// echo "<font color='red'><b><center> $requestor_reg_aborted</center></b></font>"; ?>
<fieldset class="scheduler-border">
<legend  class="scheduler-border" align="">EDITING DETAILS FOR SAMPLE <font color='blue'><?php echo "$s_code-$labno" ; if($name!=''){ echo "( $name )"; }?></font>

<?php $sql_edithist="SELECT * FROM samples_hist where labno=$labno ORDER BY id DESC";
$hists=mysqli_query($dbconnection,$sql_edithist) or die("ERROR : " . mysqli_error($dbconnection));
$hist_count=mysqlI_num_rows($hists);

if($hist_count>0){
	?><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">View Edit History</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
<?php require_once 'sample_edit_history.php'; ?>
</div> <?php } ?>
</legend>

<form action="" method="post"  id="example-1-form" autocomplete="off" onsubmit="leave()" title="<?php echo "$s_code-$labno" ; if($name!=''){ echo "( $name )"; }?>">
  
  <div class="form-horizontal">
  <div class="form-group"> 
  <label  class="col-sm-1 control-label label-format">PID#</label>
      <div class="col-sm-3"> 
	  <input type="text" class="form-control" value="<?php echo $pid; ?>" 
	 placeholder="Patient ID" onkeyup="showRegisteredPatients_name(this.value)"name="patient_id" id="fname" />
      </div>
      <label  class="col-sm-1 control-label label-format">Telephone</label>
      <div class="col-sm-3"> 
        <input type="number" class="form-control" value="<?php echo $telephone; ?>"  placeholder="Enter tel in format 256785643123" name="tel" id="fname" />
      </div>
	  
<label  class="col-sm-1 control-label label-format">Name</label>
      <div class="col-sm-3"> 
        <input type="text" class="form-control" placeholder="Name eg Kibuuka James" value="<?php echo $name; ?>"  name="surname" id="surname" 
onkeyup="showRegisteredPatients_name(this.value)" />
      </div>
	  </div>
	  <div class="form-group"> 
      <label for="Village" class="col-sm-1 control-label label-format">Village</label>
      <div class="col-sm-3"> 
            <input type="text" class="form-control"  value="<?php echo $village; ?>" placeholder="Enter village name" name="village" id="village" />
       </div>
	  
	<label  class="col-sm-1 control-label label-format">Study </label>
      <div class="col-sm-3"> 
<select name="study_codep" class="form-control" required>
			<option value="<?php echo $study; ?>"><?php echo $study; ?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM studycodes where status='Active' ORDER BY status";
			$study_codes=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection ));

			while ($study_code = mysqli_fetch_array($study_codes,MYSQLI_ASSOC)) {
				$ptitle = $study_code['projtitle'];
				$code = $study_code['code'];
				
			echo "<option value='$code' style='background-color:#CCCCCC;'>$code - $ptitle</option>";	
			}			
			?>
		</select></div>
		
	        <label for="Type of sample" class="col-sm-1 control-label label-format">District</label>
      <div class="col-sm-3"> 
	  <select name="district" class="form-control"  >
			<option value="<?php echo $district; ?>"><?php echo $district; ?></option>
			<option value="">N/A</option>
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
<label  class="col-sm-1 control-label label-format">Patient Initials</label>
      <div class="col-sm-3"> 
        <input type="text" style="color: #222;
text-transform: capitalize;"class="form-control"  value="<?php echo $pinitials; ?>" placeholder="Patient Initials" name="patient_initials" id="fname"/>
      </div>
<label  class="col-sm-1 control-label label-format">Subcounty</label>
      <div class="col-sm-3"> 
          <input type="text"  class="form-control"  value="<?php echo $subcounty; ?>"placeholder="Enter Subcounty name" name="subcounty" id="subcounty"/>
         </div>	  
  
<label  class="col-sm-1 control-label label-format">Gender</label>
      <div class="col-sm-3"> 
        <select class="form-control" name="gender">
	<option value="<?php echo $gender; ?>" ><?php echo $gender; ?></option>
		<option value="Not Provided">Not Provided</option>
		<option value="Male">Male</option>
		<option value="Female">Female</option>
		</select>
      </div>

		  
    </div>
 </div>
  

<div class="form-horizontal">
<div class="form-group"> 
<input name="labno" type="hidden" value="<?php echo $labno; ?>"/>
<input name="pauto_id" type="hidden" value="<?php echo $pauto_id; ?>"/>
      <label class="col-sm-1 control-label label-format">Study Code</label>
      <div class="col-sm-2"> 
	  <select name="study_code" class="form-control">
			<option value="<?php echo $s_code;?>"><?php echo $s_code;?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM studycodes WHERE status='Active' ORDER BY code";
			$scs=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysql_error($dbconnection));

			while ($sc = mysqli_fetch_array($scs,MYSQLI_ASSOC)) {
				$code = $sc['code'];
				$ptitle = $sc['projtitle'];
			echo "<option value='$code' style='background-color:#CCCCCC;'>$code - $ptitle</option>";	
			}			
			?>
</select>
      
  </div>
  <label class="col-sm-1 control-label label-format">Sample ID</label>
      <div class="col-sm-2"> 
       <input type="text" id="disabledInput" value="<?php echo $sampleid ?>"   style="color: red;
text-transform: capitalize;"class="form-control" name="sampleid" />
  </div>
  <label class="col-sm-1 control-label label-format">PID</label>
      <div class="col-sm-3"> 
        <input type="text" id="disabledInput" value="<?php echo $pid ?>"  style="color: red;"
		class="form-control" placeholder="Patient ID" name="pid" />
      </div>
</div>
	  
	  <div class="form-group"> 
	  
	   <label class="col-sm-1 control-label label-format">Other PID</label>
      <div class="col-sm-2"> 
        <input type="text" id="disabledInput" value="<?php echo $otherpid ?>"  style="color: red;
text-transform: capitalize;"class="form-control" placeholder="PID2" name="otherpid" />
      </div>
	  
	  <label for="" class="col-sm-1 control-label label-format">Age-Years</label>
      <div class="col-sm-2"> 
        <input type="number" class="form-control" placeholder="" value="<?php echo $ageyears; ?>"  name="years"/>
      </div>
	  <label for="" class="col-sm-1 control-label label-format">Months</label>
      <div class="col-sm-3"> 
        <input type="number" class="form-control" placeholder="" value="<?php echo $agemonths; ?>"  name="months" />
      </div>
    </div>
	
	<div class="form-group " > 
      <label class="col-sm-1 control-label label-format">Visit Interval</label>
      <div class="col-sm-2"> 
	  <select class="form-control" name="visit_interval" >
			<option value="<?php echo $visitinterval; ?>"><?php echo $visitinterval; ?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM visitinterval WHERE status='Active' ORDER BY name";
			$techs=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($tech = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
				$name = $tech['name'];
				
				
			echo "<option value='$name' style='background-color:#CCCCCC;'>$name</option>";	
			}			
			?>
		</select>
        
      </div>
	  <label class="col-sm-1 control-label label-format">Hierachy</label>
      <div class="col-sm-3"> 
	    <input type="text" class="form-control" value="<?php echo $samplehierachy; ?>"  name="samplehierachy" list="samplehierachy"/>

	  <datalist id="samplehierachy">
	  	<select  class="form-control">
	<option  class="form-control" >N/A </option>
		<option value="Specimen 1">Specimen 1</option>
		<option value="Specimen 2">Specimen 2</option>
		<option value="Specimen 3">Specimen 3</option>
		</select>
		</datalist>
        
      </div>
	 
      <label class="col-sm-1 control-label label-format">Specimen Type</label>
      <div class="col-sm-3" > 
        <select name="specimen_type" class="form-control" >
			<option value="<?php echo $spectype; ?>"><?php echo $spectype; ?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM option_spectype where status='Active' ORDER BY name";
			$specimen_types=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($specimen_type = mysqli_fetch_array($specimen_types,MYSQLI_ASSOC)) {
				$type = $specimen_type['name'];
				$code = $specimen_type['code'];
				
			echo "<option value='$code' style='background-color:#CCCCCC;'>$code - $type</option>";	
			}			
			?>
		</select>   
		</div>
		
		</div>
		<div class="form-group"> 
	  <label class="col-sm-1 control-label label-format">Appearance</label>
       <div class="col-sm-3"> 
                <select name="appearance" class="form-control" >
			<option value="<?php echo $appearance; ?>"><?php echo $appearance; ?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM option_appearance where status='Active' ORDER BY name";
			$appearances_check=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($appearance = mysqli_fetch_array($appearances_check,MYSQLI_ASSOC)) {
				$name = $appearance['name'];
				$code = $appearance['code'];
				
			echo "<option value='$name' style='background-color:#CCCCCC;'>$code - $name</option>";	
			}			
			?>
		</select></div>
	  
	  <label  class="col-sm-1 control-label label-format">Volume</label>
      <div class="col-sm-3"> 
        <input type="number" name="volume" class="form-control" placeholder="Volume" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" value="<?php echo $volume; ?>" />
      </div>
	   <label  class="col-sm-1 control-label label-format">Request Reason</label>
      <div class="col-sm-3"> 
        <input type="text" class="form-control" placeholder="Request Reason" value="<?php echo $requestreason; ?>"name="request_reason" />
      </div>
	  
    </div>
	
	<div class="form-group"> 
      <label class="col-sm-1 control-label label-format">Consistency</label>
     <div class="col-sm-3"> 
        <input type="text" class="form-control" placeholder="Consistency" value="<?php echo $consistency; ?>" name="consistency" />
      </div>
	  <label class="col-sm-1 control-label label-format">Collector</label>
      <div class="col-sm-3"> 
        <input type="text" class="form-control" placeholder="Collector" value="<?php echo $collector; ?>" name="collector" />
      </div>
	  <label class="col-sm-1 control-label label-format">Collection Date</label>
	  <div class="col-sm-3"> 
	   
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($colldate=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($colldate));?>" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input9" value="<?php if($colldate=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($colldate));?>"  name="collection_date"/>
				
	</div></div>
				<div class="form-group"> 
	  
    
	  <label  class="col-sm-1 control-label label-format">Collection Method</label>
       <div class="col-sm-3"> 
	   <select name="collection_method" class="form-control" >
			<option value="<?php echo $collmethod; ?>"><?php echo $collmethod; ?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM option_collmethod where status='Active' ORDER BY name";
			$collmethods_names=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($collmethod_name = mysqli_fetch_array($collmethods_names,MYSQLI_ASSOC)) {
				$name = $collmethod_name['name'];
				$code = $collmethod_name['code'];
				
			echo "<option value='$code' style='background-color:#CCCCCC;'>$code($name)</option>";	
			}			
			?>
		</select></div>
		
	  <label for="dtp_input3" class="col-sm-2 control-label label-format">Collection Time</label>
	  
       <div class="col-sm-2"> 
		<input type="text" class="form-control defaultEntry" value="<?php echo $colltime; ?>" name="collection_time" />
	</div>
	  <label  class="col-sm-2 control-label label-format">Recieving Technologist</label>
      <div class="col-sm-2"> 
	   <select  class="form-control" name="technologist" >
			<option value="<?php echo $rcttech ?>"><?php echo $rcttech ?></option>
			<option value=""></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM techinitials WHERE status='Active' ORDER BY name";
			$techs=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

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
	  <label  class="col-sm-1 control-label label-format">Transporter</label>
      <div class="col-sm-3"> 
	   <select class="form-control" name="transporter" >
			<option value="<?php echo $transporter ?>"><?php echo $transporter ?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM transporters WHERE status='Active' ORDER BY name";
			$techs=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($tech = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
				$name = $tech['name'];
				
			echo "<option value='$name' style='background-color:#CCCCCC;'>$name</option>";	
			}			
			?>
		</select>
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
      <div class="col-sm-3"> 
		<input type="text" class="form-control defaultEntry" name="transport_time" value="<?php echo $transporttime ?>" />
	</div>
	  </div>
	  <div class="form-group"> 
	 <label class="col-sm-1 control-label label-format">Innoculation Date</label>
      <div class="col-sm-3"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input16" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($innoc_date=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($innoc_date));?>" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input16" value="<?php if($innoc_date=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($innoc_date));?>"  name="innoc_date" />
				</div>
	  <label class="col-sm-1 control-label label-format">Innoculation Time</label>
	  <div class="col-sm-3"> 
		<!--<input type="text" class="form-control" value="<?php echo $innoc_time ?>" name="innoc_time" pattern="^([0-1]?[0-9]|2[0-3]):[0-5][0-9]$" placeholder="hh:mm (24hr format)" />
		--><input type="text" class="form-control defaultEntry" name="innoc_time" value="<?php echo $innoc_time ?>" size="">
	</div>
 </div>
		<div class="form-group"> 
		<label class="col-sm-1 control-label label-format">Request Date</label>
	  <div class="col-sm-3"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input12" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($requestdate=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($requestdate));?>" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input12" value="<?php if($requestdate=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($requestdate));?>" name="request_date" />
				</div>
     <label class="col-sm-1 control-label label-format">Processing Date</label>
	  <div class="col-sm-3"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input7" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($processdate=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($processdate));?>"readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input7" value="<?php if($processdate=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($processdate));?>"  name="process_date" />
				</div>
	  <label class="col-sm-1 control-label label-format">Processing Time</label>
	  	  <div class="col-sm-3"> 
		<input type="text" class="form-control defaultEntry" value="<?php echo $processtime ?>" name="process_time" />
	</div>
     
	  </div>
	<div class="form-group"> 
      <label class="col-sm-1 control-label label-format">Received Date</label>
	  <div class="col-sm-3"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input1" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($rctdate=='0000-00-00'){echo '';} else echo @date('d F Y',strtotime($rctdate));?>" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input1" value="<?php if($rctdate=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($rctdate));?>" name="recieved_date"/>
				</div>
    
	  <label class="col-sm-2 control-label label-format">Received Time</label>
	  <div class="col-sm-2"> 
		<input type="text" class="form-control defaultEntry" name="recieved_time" value="<?php echo $rcttime ?>" />
	</div>

	
	  <label  class="col-sm-1 control-label label-format">Requester</label>
      <div class="col-sm-3"> 
        <select name="requestor" class="form-control" onclick="" id="requestorsearch">
			<option value="<?php echo $requester; ?>"><?php if($requester!=''){echo $reqname;} ?></option>
			<option value=""></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM requestors ORDER BY name";
			$requestors=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($requestor = mysqli_fetch_array($requestors,MYSQLI_ASSOC)) {
				$rname = $requestor['name'];
				$r_id = $requestor['id'];
				$organisation = $requestor['organisation'];
			echo "<option value='$r_id' style='background-color:#CCCCCC;'>$rname($organisation)</option>";	
			}			
			?>
		</select>
		<span onclick="reloadRequestors();" style="cursor: pointer; color:blue;">Reload</span> &nbsp;&nbsp;&nbsp;
		<span onclick="window.open('new_requester.php')" style="cursor: pointer; color:blue;">New Requester</span>
  </div>
 
	  </div>
	 
	 <?php include("samples_examination_media_selection.php"); ?>
	 
	
	  <div class="form-group"> 
	<label  class="col-sm-1 control-label label-format">Processing Technologist</label>
      <div class="col-sm-3"> 
	  <select class="form-control" name="process_tech" >
			<option value="<?php echo $processtech; ?>"><?php echo $processtech; ?></option>
			<option value=""></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM techinitials WHERE status='Active' ORDER BY name";
			$techs=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($tech = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
				$name = $tech['name'];
				$initial = $tech['initial'];
				
			echo "<option value='$initial' style='background-color:#CCCCCC;'>$name</option>";	
			}			
			?>
		</select>
     </div>
	  
	<label class="col-sm-2 control-label label-format">Specimen Storage</label>
      <div class="col-sm-2"> 
	   <select class="form-control" name="specimen_storage" >
			<option value="<?php echo $specstorage; ?>"><?php echo $specstorage; ?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM specimen_storage WHERE status='Active' ORDER BY specimenstorage";
			$techs=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($tech = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
				$storage = $tech['specimenstorage'];
				
			echo "<option value='$storage' style='background-color:#CCCCCC;'>$storage</option>";	
			}			
			?>
		</select>
        
      </div>
	
	
      
	  <label class="col-sm-1 control-label label-format">Comment</label>
      <div class="col-sm-3"> 
        <input type="text" class="form-control" placeholder="Comment" value="<?php echo $comment; ?>"name="comment" />
      </div>
	  </div>
	
	<div class="form-group">
	<label class="col-sm-1 control-label label-format">HIV Status</label>
		<div class="col-sm-2"> 
		<select name="hivstatus" class="form-control" >
			<option value="<php echo $hivstatus; ?>"><?php echo $hivstatus; ?></option>
			<option value="Not Provided">Not Provided</option>
			<option value="Negative">Ct2 - Negative</option>
			<option value="Not Known">Not Known</option>
			<option value="Positive">Ct1 - Positive</option>
		</select>
      </div>
	  <label  class="col-sm-1 control-label label-format">Peripheral Results</label>
      <div class="col-sm-2"> 
	  <input type="text" name="peripheralresults" value="<?php echo $peripheralresults; ?>" style="" class="form-control" placeholder="" />     
      </div>
	</div>
	<div class="form-group">
    <div class="col-sm-6"> 
	</div>
	<div class="col-sm-1">
	<input type="button" name=""  class="btn btn-primary"size="" value="<< BACK" title="" style="height:3em; width:; background-color:;" onclick="history.go(-1);return true;"/>
     </div>
	 <div class="col-sm-1"> 
        <button type="Submit" name="edit_sample" class="btn btn-success">Update Sample</button>
      </div>
		  
    </div>
	 </div>
  </fieldset>
<?php } ?> 
</form>


<script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>
</div>
 </div>
 </div>
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='index.php'>Login</a> to access the resources.</center>";?>


</div>
<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>





</body>
</html>