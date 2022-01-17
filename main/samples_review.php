<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php
if(isset($_POST['review_sample'])){
	include("../includes/dbconfig.php");
	$interval=$_POST['interval'];
	
if($interval=='Month'){
		$monthoption=$_POST['monthoption'];
		$interval='Month'.$monthoption;
	}
	elseif($interval=='Week'){
		$weekoption=$_POST['weekoption'];
		$interval='Week'.$weekoption;
	}
	elseif($interval=='Day'){
		$dayoption=$_POST['dayoption'];
		$interval='Day'.$dayoption;
	}
	elseif($interval=='Others'){
		$otheroption=$_POST['otheroption'];
		$interval=$otheroption;
		$interval=$interval;
	}else{
		$interval=$interval;
	}
$visit_interval=$interval;
		$name=ucwords(mysqli_real_escape_string($dbconnection,$_POST['surname']));
	$patient_initials=ucwords(mysqli_real_escape_string($dbconnection,$_POST['patient_initials']));
	
$village=ucwords(mysqli_real_escape_string($dbconnection,$_POST['village']));
	$subcounty=ucwords(mysqli_real_escape_string($dbconnection,$_POST['subcounty']));
$pid=(mysqli_real_escape_string($dbconnection,$_POST['pid']));
$sampleid=(mysqli_real_escape_string($dbconnection,$_POST['sampleid']));
$otherpid=(mysqli_real_escape_string($dbconnection,$_POST['otherpid']));
   $gender=(mysqli_real_escape_string($dbconnection,$_POST['gender']));
   $s_code=(mysqli_real_escape_string($dbconnection,$_POST['study_code']));
   $s_codep=(mysqli_real_escape_string($dbconnection,$_POST['study_code']));
	$tel=(mysqli_real_escape_string($dbconnection,$_POST['tel']));
	$district=(mysqli_real_escape_string($dbconnection,$_POST['district']));
	
	@$appearance=ucwords(mysqli_real_escape_string($dbconnection,$_POST['appearance']));
   @$request_reason=(mysqli_real_escape_string($dbconnection,$_POST['request_reason']));
  // @$visit_interval=(mysqli_real_escape_string($dbconnection,$_POST['visit_interval']));
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
	@$requester=(mysqli_real_escape_string($dbconnection,$_POST['requester']));
	
	@$collection_date=(mysqli_real_escape_string($dbconnection,$_POST['collection_date']));
	@$request_date=(mysqli_real_escape_string($dbconnection,$_POST['request_date']));
	@$collection_time=$_POST['collection_time'];
	$collection_time= date('H:i:s',strtotime($collection_time));
	if($collection_time=='03:00:00' or $collection_time=='00:00:00'){$collection_time='';}
	@$collection_date=$_POST['collection_date'];
	
	@$recieved_time=$_POST['recieved_time'];
	$recieved_time= date('H:i:s',strtotime($recieved_time));
	if($recieved_time=='03:00:00' or $recieved_time=='00:00:00'){$recieved_time='';}
	
	@$recieved_date=(mysqli_real_escape_string($dbconnection,$_POST['recieved_date']));
	@$process_date=(mysqli_real_escape_string($dbconnection,$_POST['process_date']));
	@$process_time=$_POST['process_time'];
	$process_time= date('H:i:s',strtotime($process_time));
	if($process_time=='03:00:00' or $process_time=='00:00:00'){$process_time='';}
	@$process_tech=(mysqli_real_escape_string($dbconnection,$_POST['process_tech']));
	@$transport_date=(mysqli_real_escape_string($dbconnection,$_POST['transport_date']));
	
	@$transport_time=$_POST['transport_time'];
	$transport_time= date('H:i:s',strtotime($transport_time));
	if($transport_time=='03:00:00' or $transport_time=='00:00:00'){$transport_time='';}
	@$labno=(mysqli_real_escape_string($dbconnection,$_POST['labno']));
	@$pauto_id=(mysqli_real_escape_string($dbconnection,$_POST['pauto_id']));
	
	@$reviewby=$_SESSION['name'];
	$lastreviewtime=date('Y-m-d H:i', time());

	//+++++++++++FIRST UPDATE PATIENTS TABLE+++++++++++++++++
	$sql2="SELECT * FROM patients WHERE pid='$pid' ";
$patients=mysqli_query($dbconnection,$sql2) or die("ERROR : " . mysqli_error($dbconnection));

if (mysqli_num_rows($patients) > 0){
$updatepatient=mysqli_query($dbconnection,"UPDATE  patients SET pid_other='$otherpid',
study='$s_codep',pid='$pid',pinitials='$patient_initials',
name='$name',gender='$gender',telephone='$tel',village='$village',subcounty='$subcounty',district='$district' WHERE id='$pauto_id' ") or die("ERROR : " . mysqli_error($dbconnection));
}else{
$updatepatient=mysqli_query($dbconnection,"INSERT INTO patients (pid_other,study,pid,pinitials,name,gender,telephone,village,
subcounty,district) VALUES (
'$otherpid','$s_codep','$pid','$patient_initials',
'$name','$gender','$tel','$village','$subcounty','$district')") or die("ERROR : " . mysqli_error($dbconnection));

$select_pautoid="SELECT * FROM patients WHERE id=LAST_INSERT_ID()";
$pautoid=mysqli_query($dbconnection,$select_pautoid) or die("ERROR : " . mysqli_error($dbconnection));

while ($pauto = mysqli_fetch_array($pautoid,MYSQLI_ASSOC)) {
$pauto_id = $pauto['id'];	
}
}

///=====end of updating patients table==============
	$sql="SELECT * FROM samples WHERE labno='$labno' ";
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

if (mysqli_num_rows($samples) > 0){
while ($sample = mysqli_fetch_array($samples)) {
	$oldlabno = $sample['labno'];

	$oldspectype=$sample['spectype'];
	$oldappearance=$sample['appearance'];
	$oldcollmethod=$sample['collmethod'];
	$oldcolldate=$sample['colldate'];
	$oldexamination=$sample['examination'];
	$oldaccessiontime=$sample['accessiontime'];
	//$oldentrydate=$sample['entrytime'];
} /* Ending while */
$sql_history = "INSERT into samples_hist  (labno,spectype,appearance,collmethod,colldate,examination,accessiontime)
 values ('$oldlabno','$oldspectype','$oldappearance','$oldcollmethod','$oldcolldate','$oldexamination','$oldaccessiontime')";
mysqli_query($dbconnection,$sql_history) or die("ERROR : " . mysqli_error($dbconnection));
}	

$updatesample=mysqli_query($dbconnection,"UPDATE samples SET hivstatus='$hivstatus',sample_id='$sampleid',studycode='$s_code',patient='$pauto_id',ageyears='$years',
agemonths='$months',visitinterval='$visit_interval',samplehierachy='$samplehierachy',requestreason='$request_reason',spectype='$specimen_type',
appearance='$appearance',volume='$volume',consistency='$consistency',collector='$collector',collmethod='$collection_method',
colldate='$collection_date',colltime='$collection_time',rcttech='$technologist',rctdate='$recieved_date',rcttime='$recieved_time',
requester='$$requester',requestdate='$request_date',examination='$fullexamination',media='$fullmedia',specstorage='$specimen_storage',
comment='$comment',transporter='$transporter',processtime='$process_time',processdate='$process_date',processtech='$process_tech',
transporttime='$transport_time', transportdate='$transport_date',lastreviewer='$reviewby', 
lastreviewtime='$lastreviewtime' where labno='$labno' "); 


include("samples_examination_media_processing.php");

$nextfindlabno=$labno+1;
//echo "<h1> lab no is $labno  by $reviewby time $lastreviewtime </h1>";
header("location:samples_review.php?findlabno=".$nextfindlabno."&scode=".$studycode."&edited=".$labno);

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

    $(document).ready(function(){
        $("select.interval").change(function(){
            var selectedinterval = $(".interval option:selected").val();
            $.ajax({
                type: "POST",
                url: "process_interval.php",
                data: { interval : selectedinterval } 
            }).done(function(data){
                $("#response").html(data);
            });
        });
		 });
		
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
$sql="SELECT * FROM samples WHERE lastreviewer=''";
$unreviewed=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalunreviewed=mysqli_num_rows($unreviewed);	
	
$sql_10="SELECT * FROM samples WHERE lastreviewer='' limit 0,10";
$unrevieweds_10=mysqli_query($dbconnection,$sql_10) or die("ERROR : " . mysql_error($dbconnection));	
?>
<?php
if(isset($_GET['edited'])){
@$scode=$_GET['scode'];
$edited=$_GET['edited'];

echo "<div id='successmessage'
 <center>Sample $edited - $scode Reviewed was Successsful!</div>";
}

@$labno=$_GET['findlabno'];
$prevlabno=$labno-1;
$nextlabno=$labno+1;

?><fieldset class="scheduler-border"> <legend  class="scheduler-border"><b>SEARCHING SAMPLE FOR REVIEWING</b></legend>
<form action="samples_review.php" method="GET" name="formfindsample"   autocomplete="off">
<div class="form-horizontal">
<div class="form-group"> 
<label class="col-sm-1 control-label label-format">LAB NO:</label>
<div class="col-sm-4"> 
        <input type="text" class="form-control" name="findlabno" type="text" placeholder="Search LAB NO" autofocus />
      </div>
<!--<input name="findlabno" type="text" placeholder="Search LAB NO" style="height:20px; width:200px; background-color:;" autofocus/>-->
<div class="col-sm-1"> 
<input type="submit" name="findsample" value="FIND" class="form-control btn-primary" title="" style="height:30px; width:100px; background-color:;">
</div>
<div class="col-sm-2"> 
<input type="button" value="<<PREVIOUS" class="form-control btn-success" onclick="location.href='samples_review.php?findlabno=<?php echo $prevlabno;?>'">
</div>
<div class="col-sm-1"> 
<input type="button" value="NEXT>>" class="form-control btn-info" onclick="location.href='samples_review.php?findlabno=<?php echo $nextlabno;?>'">
</div>
</div>
</form> <font color='red'>** There are <?php echo $totalunreviewed ?> records whose details are not yet reviewed**</font> 
<!--<button style="height: 30px; width: 100px" onclick="location.href='editsample.php?findlabno=<?php echo $prevlabno;?>'" title="">PREVIOUS</button>
<button style="height: 30px; width: 100px" onclick="location.href='editsample.php?findlabno=<?php echo $nextlabno;?>'" title="">NEXT</button>
<a href="editsample.php?findlabno=<?php echo $prevlabno;?>">PREVIOUS</a>
<a href="editsample.php?findlabno=<?php echo $nextlabno;?>">NEXT</a>-->
<br><b>FIRST 10 INCLUDE: </b>
<?php
while ($unrevieweds_10s = mysqli_fetch_array($unrevieweds_10,MYSQLI_ASSOC)) {
	$labno_10 = $unrevieweds_10s['labno'];
	$select_studycode_10="SELECT * FROM samples WHERE labno=$labno_10";
			$scs_10=mysqlI_query($dbconnection,$select_studycode_10) or die("ERROR : " . mysql_error($dbconnection));
			while ($sc_10 = mysqli_fetch_array($scs_10,MYSQLI_ASSOC)) {
				$studycode_10 = $sc_10['studycode'];
			}
	echo "<a href='?findlabno=$labno_10'>$studycode_10-$labno_10</a> &emsp;";
		//echo "<a href='resultsentry_fm.php?findlabno=$emptylabno'>$emptylabno-$emptystudycode</br></a>";
}
?></fieldset>
<br>

<?PHP if(isset($_GET['findlabno'])){
include("../includes/dbconfig.php");

$sql="SELECT * FROM samples WHERE labno='$labno'";
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

if (mysqli_num_rows($samples) > 0){
while ($sample = mysqli_fetch_array($samples,MYSQLI_ASSOC)) {
	$labno = $sample['labno'];
	$pauto_id = $sample['patient'];
	@$requester=$sample['requester']; 
	@$requester=$req['name'];
	
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
$editedby= $sample['lasteditby'];
$editdate= $sample['lastedittime'];
$reviewer= $sample['lastreviewer'];
$reviewdate= $sample['lastreviewtime'];
	$sampleid = $sample['sample_id'];
	$examination=$sample['examination'];
	$rctdate = $sample['rctdate'];
	
	$rcttech = $sample['rcttech'];
	$processtech = $sample['processtech'];
	$processdate = $sample['processdate'];
	
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

$colltime=@date('H:i',strtotime($colltime));
$collector=$sample['collector'];
$specstorage=$sample['specstorage'];
$collmethod=$sample['collmethod'];
$requestdate=$sample['requestdate'];
$examination=$sample['examination'];
$media=$sample['media'];

$transportdate=$sample['transportdate'];
$processtime = $sample['processtime'];
	if($processtime=='03:00:00' or $processtime=='00:00:00'){$processtime='';}
$colltime=$sample['colltime'];
if($colltime=='03:00:00' or $colltime=='00:00:00'){$colltime='';}

$rcttime = $sample['rcttime'];
	if($rcttime=='03:00:00' or $rcttime=='00:00:00'){$rcttime='';}
$transporttime=$sample['transporttime'];

if($transporttime=='03:00:00' or $transporttime=='00:00:00'){$transporttime='';}
//$transporttime=@date('H:i',strtotime($transporttime));
$transportdate=$sample['transportdate'];


} //ending while
}// ending if

else{
echo "<script>
alert('The Lab No $labno is not registered.');
location.href='samples_review.php'
</script> ";
}
if ($editedby==''){
echo "<script>
alert('The Lab No $labno is not yet updated. 1st data entry has to be complete before reviewing is done!');
location.href='samples_review.php'
</script> ";
}
// echo "<font color='red'><b><center> $requestor_reg_aborted</center></b></font>"; ?>

<fieldset class="scheduler-border">
<legend class="scheduler-border" align="">REVIEWING DETAILS FOR SAMPLE  <font color='blue'><?php echo "$s_code-$labno" ; if($name!=''){ echo "( $name )"; }?></font>

<?php $sql_edithist="SELECT * FROM samples_hist where labno=$labno ORDER BY id DESC";
$hists=mysqli_query($dbconnection,$sql_edithist) or die("ERROR : " . mysqli_error($dbconnection));
$hist_count=mysqlI_num_rows($hists);
if($hist_count>0){ ?><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">View Edit History</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
<?php require_once 'sample_edit_history.php'; ?>
</div> <?php } ?></legend>

<table width='100%'><tr>
<td align='left'>
<?php
echo "<font color='blue'><b>Last Edited on $editdate by $editedby.</b></font> | ";
if ($reviewer!=''){
echo "<font color='blue'><b>Last Reviewed on $reviewdate by $reviewer.</b></font>";
}
?> 
</td>
<td align='right'>
<input type="button" class="btn btn-primary" value="BACK" style="height:3em; width:; background-color:;" onclick="history.go(-1);return true;">
<!--<input type="submit" name="review_sample"  class="btn btn-success" value="REVIEW / SAVE CHANGES" title="" style="height:3em; width:; background-color:;">
--></td>
</tr></table>

<form action="" method="post" id="example-1-form" autocomplete="off" onsubmit="leave()">
<input type="hidden"  value="<?php echo $editedby ?>" name="lasteditby" />

<div class="form-horizontal">
  
<?php include("samples_edit_review_extract.php"); ?>
	  
<div class="form-group">
    <div class="col-sm-6"> 
	</div>
	<div class="col-sm-1">
	<input type="button" name=""  class="btn btn-primary"size="" value="<< BACK" title="" style="height:3em; width:; background-color:;" onclick="history.go(-1);return true;"/>
     </div>
	 <div class="col-sm-1"> 
        <button type="Submit" name="review_sample" class="btn btn-success">Review Sample</button>
      </div>
		  
</div>

</div>
</form>
</fieldset>
<?php } ?> 


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