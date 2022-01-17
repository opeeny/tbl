<?php
/*======THIS CODE HAS BEEN TESTED WELL====HOWEVER DUE TO REGULAR TESTINGS  CODES FROM LINE 52 TO 77 
HAVE BEEN COMMENTED SO THAT THEY DONOT DELETE ALL DATA FROM THE DATABASE FOR FULL FUNCTIONALITY
OF THIS CODE , REMOVE THE COMMENTS====================
*/
 include("../includes/global_content.php"); 
 include("../includes/session_start.php"); 
if(isset($_POST['delete_sample'])){
	include("../includes/dbconfig.php");
	$timestamp=time(); 
$datedeleted=date("Y-m-d", $timestamp);
@$examination=mysqli_real_escape_string($dbconnection,implode(',', $_POST['examination']));
@$otherexamination=mysqli_real_escape_string($dbconnection,implode(',', $_POST['otherexamination']));
	@$fullexamination=$examination.','.$otherexamination;		
	@$labno=(mysqli_real_escape_string($dbconnection,$_POST['labno']));
$studycode=(mysqli_real_escape_string($dbconnection,$_POST['studycode']));	
@$appearance=ucwords(mysqli_real_escape_string($dbconnection,$_POST['appearance']));
@$request_reason=(mysqli_real_escape_string($dbconnection,$_POST['request_reason']));
 @$visit_interval=(mysqli_real_escape_string($dbconnection,$_POST['visit_interval']));
 @$samplehierachy=(mysqli_real_escape_string($dbconnection,$_POST['samplehierachy']));
 	
   @$rejection_reason=(mysqli_real_escape_string($dbconnection,$_POST['rejection_reason']));
   @$visit_interval=(mysqli_real_escape_string($dbconnection,$_POST['visit_interval']));
  	$name=ucwords(mysqli_real_escape_string($dbconnection,$_POST['surname']));
	$patient_initials=ucwords(mysqli_real_escape_string($dbconnection,$_POST['patient_initials']));
@$requestor=(mysqli_real_escape_string($dbconnection,$_POST['requestor']));
@$specimen_type=(mysqli_real_escape_string($dbconnection,$_POST['specimen_type']));
@$volume=(mysqli_real_escape_string($dbconnection,$_POST['volume']));
@$comment=(mysqli_real_escape_string($dbconnection,$_POST['comment']));
@$colldate=(mysqli_real_escape_string($dbconnection,$_POST['colldate']));
@$collector=(mysqli_real_escape_string($dbconnection,$_POST['collector']));
@$rctdate=(mysqli_real_escape_string($dbconnection,$_POST['rctdate']));
@$collection_method=(mysqli_real_escape_string($dbconnection,$_POST['collection_method']));
@$patient_id=(mysqli_real_escape_string($dbconnection,$_POST['patient_id']));
	
	
$rejectedby=$_SESSION['name'];	
$insertsql="insert into rejected_samples (colldate,rejected_by,reject_reason,
studycode,patient,requestreason,appearance,volume,
collmethod,colltime,requester,rctdate,rcttime)
		values ('$coll_date','$rejectedby','$rejection_reason',
		'$studycode','$patient_id','$request_reason','$appearance','$volume',
		'$collection_method','',
		'$requestor','$rctdate','')";
$insert=mysqli_query($dbconnection,$insertsql) or die("ERROR : " . mysqli_error($dbconnection)); 
/*
	$insertsql="insert into deleted_samples (labno,accessiontech,studycode,patient,
rejectionreason,spectype,appearance,volume,collector,collmethod,colldate,
rctdate,requester,requestdate,examination,specstorage,comment,deletiondate)
values 
('$labno','','$studycode','$patient_id','$rejection_reason','$specimen_type',
		'$appearance','$volume','$collector','$collection_method','$colldate',
		'$rctdate','$requestor','$request_date','$fullexamination',
		'$specimen_storage','$comment','$datedeleted')";
		
$insert=mysqli_query($dbconnection,$insertsql) or die("ERROR : " . mysqli_error($dbconnection)); 
	*/
	$delete=mysqli_query($dbconnection,"Delete from samples where labno=$labno"); 
	$delete=mysqli_query($dbconnection,"Delete from rejected_samples where labno=$labno"); 
	
	$delete=mysqli_query($dbconnection,"Delete from results_bloodculture where labno=$labno");
	$delete=mysqli_query($dbconnection,"Delete from results_solidculture where labno=$labno");
	$delete=mysqli_query($dbconnection,"Delete from results_liquidculture where labno=$labno");
	$delete=mysqli_query($dbconnection,"Delete from results_identification where labno=$labno");
	$delete=mysqli_query($dbconnection,"Delete from results_fm where labno=$labno");
	$delete=mysqli_query($dbconnection,"Delete from results_zn where labno=$labno");
	$delete=mysqli_query($dbconnection,"Delete from results_dst1 where labno=$labno");
	$delete=mysqli_query($dbconnection,"Delete from results_dst2 where labno=$labno");
	$delete=mysqli_query($dbconnection,"Delete from results_genexpert where labno=$labno");
	$delete=mysqli_query($dbconnection,"Delete from results_others where labno=$labno");
	
	
	$delete=mysqli_query($dbconnection,"Delete from results_bloodculture_hist where labno=$labno");
	$delete=mysqli_query($dbconnection,"Delete from results_solidculture_hist where labno=$labno");
	$delete=mysqli_query($dbconnection,"Delete from results_liquidculture_hist where labno=$labno");
	$delete=mysqli_query($dbconnection,"Delete from results_identification_hist where labno=$labno");
	$delete=mysqli_query($dbconnection,"Delete from results_fm_hist where labno=$labno");
	$delete=mysqli_query($dbconnection,"Delete from results_zn_hist where labno=$labno");
	$delete=mysqli_query($dbconnection,"Delete from results_dst1_hist where labno=$labno");
	$delete=mysqli_query($dbconnection,"Delete from results_dst2_hist where labno=$labno");
	$delete=mysqli_query($dbconnection,"Delete from results_genexpert_hist where labno=$labno");
	$delete=mysqli_query($dbconnection,"Delete from results_others_hist where labno=$labno");
	
	
	header("location:sample_deletion.php?scode=".$studycode."&deleted=".$labno);
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
if(isset($_GET['deleted'])){
@$scode=$_GET['scode'];
$deleted=$_GET['deleted'];

echo "<div id='successmessage'>
 <center>Sample $deleted - $scode Rejection was successful!</div>";
}

@$labno=$_GET['findlabno'];
$prevlabno=$labno-1;
$nextlabno=$labno+1;

?><fieldset class="scheduler-border"> <legend  class="scheduler-border"><b>SEARCHING SAMPLE FOR REJECTION</b></legend>
<form action="sample_deletion.php" method="GET" name="formfindsample"   autocomplete="off">
<div class="form-horizontal">
<div class="form-group"> 
<label class="col-sm-1 control-label label-format">LAB NO:</label>
<div class="col-sm-4"> 
        <input type="text"  class="form-control" name="findlabno" type="hidden"  placeholder="Search LAB NO" autofocus />
      </div>
<!--<input name="findlabno" type="hidden"  placeholder="Search LAB NO" style="height:20px; width:200px; background-color:;" autofocus/>-->
<div class="col-sm-1"> 
<input type="submit" name="findsample" value="FIND" class="form-control btn-primary" title="" style="height:30px; width:100px; background-color:;">
</div>

</div>
</form>  
<!--<button style="height: 30px; width: 100px" onclick="location.href='editsample.php?findlabno=<?php echo $prevlabno;?>'" title="">PREVIOUS</button>
<button style="height: 30px; width: 100px" onclick="location.href='editsample.php?findlabno=<?php echo $nextlabno;?>'" title="">NEXT</button>
<a href="editsample.php?findlabno=<?php echo $prevlabno;?>">PREVIOUS</a>
<a href="editsample.php?findlabno=<?php echo $nextlabno;?>">NEXT</a>-->

<?php
/*while ($unrevieweds_10s = mysqli_fetch_array($unrevieweds_10,MYSQLI_ASSOC)) {
	$labno_10 = $unrevieweds_10s['labno'];
	$select_studycode_10="SELECT * FROM samples WHERE labno=$labno_10";
			$scs_10=mysqlI_query($dbconnection,$select_studycode_10) or die("ERROR : " . mysql_error($dbconnection));
			while ($sc_10 = mysqli_fetch_array($scs_10,MYSQLI_ASSOC)) {
				$studycode_10 = $sc_10['studycode'];
			}
	echo "<a href='?findlabno=$labno_10'>$studycode_10-$labno_10</a> &emsp;";
echo "<a href='resultsentry_fm.php?findlabno=$emptylabno'>$emptylabno-$emptystudycode</br></a>";

}*/
?></fieldset>
<br>

<?PHP if(isset($_GET['findlabno'])){
	
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
					$patients=mysqli_query($dbconnection,$select_hcpno) or die("ERROR : " . mysqli_error($dbconnection));

					while ($patient = mysqli_fetch_array($patients,MYSQLI_ASSOC)) {
								@$study=$patient['study'];
								@$pid=$patient['pid'];
								@$otherpid=$patient['pid_other'];
								@$name=$patient['name'];
								@$subcounty=$patient['subcounty'];
								@$pinitials=$patient['pinitials'];
								@$gender=$patient['gender'];
								//@$gender=$patient['gender'];
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
	$innoc_date = $sample['innocdate'];
	$innoc_time = $sample['innoctime'];
	 $innoc_time=@date('H:i',strtotime($innoc_time));
	$sampleid = $sample['sample_id'];
	$examination=$sample['examination'];
	$rctdate = $sample['rctdate'];
	$rcttime = $sample['rcttime'];
	 $rcttime=@date('H:i',strtotime($rctime));
	$rcttech = $sample['rcttech'];
	$processtech = $sample['processtech'];
	$processdate = $sample['processdate'];
	$processtime = $sample['processtime'];
	 $processtime=@date('H:i',strtotime($processtime));
	//$appearance = $sample['appearance'];
	$volume=$sample['volume'];
	$transporter=$sample['transporter'];
	$comment=$sample['comment'];
	$labno=$sample['labno'];
$ageyears=$sample['ageyears'];
$agemonths=$sample['agemonths'];
$patient=$sample['patient'];
$samplehierachy=$sample['samplehierachy'];
$visitinterval=$sample['visitinterval'];
$requestreason=$sample['requestreason'];
$appearance=$sample['appearance'];
$spectype=$sample['spectype'];
$volume=$sample['volume'];
$consistency=$sample['consistency'];
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
$reviewedby=$_SESSION['name'];
$editedby=$sample['lasteditby'];
$reviewer=$sample['lastreviewer'];
$editdate=$sample['lastedittime']; $editdate=date('d-m-Y H:i:s',strtotime($editdate));
$reviewdate=$sample['lastreviewtime']; $reviewdate=date('d-m-Y H:i:s',strtotime($reviewdate));

}
} //ending while

else{
echo "<script>
alert('The Lab No $labno is not registered.');
location.href='sample_deletion.php'
</script> ";
}

// echo "<font color='red'><b><center> $requestor_reg_aborted</center></b></font>"; ?>



<fieldset>
<form action="" method="post" id="example-1-form" autocomplete="off">
<div class="form-horizontal">
  <div class="form-group"> 
  
      <div class="col-sm-3"> 
	  <input type="hidden"  class="form-control" value="<?php echo $pid; ?>" 
	 placeholder="Patient ID" name="patient_id"  />
	 <input type="hidden"   value="<?php echo $pauto_id; ?>" 
	 placeholder="Patient ID" name="patient_id"  />
	 
     
  <input type="hidden" value="<?php echo $telephone; ?>" name="tel"/>
      	 </div>
    
      <div class="col-sm-3"> 
      </div>
	  <input type="hidden"  value="<?php echo $editedby ?>" name="lasteditby" />

      <div class="col-sm-3"> 
        <input type="hidden"  class="form-control"  value="<?php echo $name; ?>"  name="surname"  
onkeyup="showRegisteredPatients_name(this.value)" />
      </div>
	  </div>
	  <div class="form-group"> 
     <div class="col-sm-3"> 
            <input type="hidden"  class="form-control"  value="<?php echo $village; ?>" placeholder="Enter village name" name="village" id="village" />
       </div>
	        <input type="hidden"  class="form-control"value="<?php echo $s_code; ?>"name="studycode" />

    
      <div class="col-sm-3"> 
	 
			<input type="hidden" value="<?php echo $district; ?>" name="district">			
          </div>
    </div>
	
	<div class="form-group">

      <div class="col-sm-3"> 
        <input type="hidden"  style="color: #222;
"class="form-control"  value="<?php echo $pinitials; ?>" placeholder="Patient Initials" name="patient_initials" id="fname" />
      </div>

      <div class="col-sm-3"> 
          <input type="hidden"   class="form-control"  value="<?php echo $subcounty; ?>"placeholder="Enter Subcounty name" name="subcounty" id="subcounty"/>
         </div>	  
  
      <div class="col-sm-3"> 
        
	<input type="hidden" value="<?php echo $gender; ?>" >
      </div>

		  
    </div>
 </div>
  

</fieldset>
<fieldset class="scheduler-border"> <legend  class="scheduler-border" align="">DELETING   SAMPLE <?php echo "$s_code-$labno" ?></legend>

  
  <div class="form-horizontal">
<div class="form-group"> 
 <label class="col-sm-3 control-label label-format">Deletion Reason</label>
<div class="col-sm-8"> 
	 
			<input type="text"  class="form-control" name="rejection_reason">			
          </div>
		  </div>
		  <div class="col-sm-1"> 
		  <input name="volume" type="hidden" value="<?php echo $volume; ?>"/>
	  <input name="pauto_id" type="hidden" value="<?php echo $pauto_id; ?>"/>
	   <input type="hidden"   value="<?php echo $sampleid ?>"name="sampleid" />
	      <input type="hidden"   value="<?php echo $colldate ?>"name="colldate" />
	   <input type="hidden"   value="<?php echo $appearance ?>" name="appearance" />
	  <input name="labno" type="hidden"  class="form-control" value="<?php echo $labno; ?>"/>    
	     <input type="hidden" value="<?php echo $pid ?>" name="pid" />
		 <input type="hidden"  name="specimen_type"  value="<?php echo $spectype ?>"  >
<input type="hidden"  value="<?php  echo $requestdate;?>" name="request_date" />
<input type="hidden"  value="<?php  echo $rctdate;?>" name="rctdate" />
		     </div>

<div class="form-group">
    
	
	 <div class="col-sm-1"> 
        <button type="Submit" name="delete_sample" class="btn btn-danger">DELETE SAMPLE</button>
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