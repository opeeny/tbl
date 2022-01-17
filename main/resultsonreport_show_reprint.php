
<?php error_reporting(0);
@$labno=$_GET['findlabno'];
include("../includes/dbconfig.php");

$sql="SELECT * FROM samples WHERE labno='$labno'";
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysql_error($dbconnection));
if (mysqli_num_rows($samples) > 0){
while ($sample = mysqli_fetch_array($samples,MYSQLI_ASSOC)) {
	$labno = $sample['labno'];
	$sample_id = $sample['sample_id'];
	$samplehierachy = $sample['samplehierachy'];
	if($samplehierachy==''){$samplehierachy='Not Provided';}
	$patient = $sample['patient'];
	$studycode = $sample['studycode'];
	$examination=$sample['examination'];
	$rctdate = $sample['rctdate'];
	$rcttime = $sample['rcttime'];
	$processdate = $sample['processdate'];
	$processtime = $sample['processtime'];
	$appearance = $sample['appearance'];
	$volume=$sample['volume']; if($volume=='' or $volume==0) $volume='NP';
	$age=$sample['ageyears'];
	$months=$sample['agemonths'];
	$reasonfr=$sample['requestreason']; if($reasonfr=='') $reasonfr='NP';
	$spectype=$sample['spectype'];
	$colldate=$sample['colldate'];
	$colltime=$sample['colltime'];
	$collector=$sample['collector'];
	$interval=$sample['visitinterval'];if($interval=='') $interval='NP';
	$consistency=$sample['consistency'];if($consistency=='') $consistency='NP';
	
	$examination=$sample['examination'];
	$samplecomment=$sample['comment'];
	$requester=$sample['requester'];
			if($requester==''){
				$reqname='NotProvided';
			}
			else{ 
			$select_req="SELECT * FROM requestors WHERE id='$requester'";
			$requestors=mysqli_query($dbconnection,$select_req) or die("ERROR : " . mysqli_error($dbconnection));
					while ($req = mysqli_fetch_array($requestors,MYSQLI_ASSOC)) {
								@$reqname=$req['name'];
								@$reqorg=$req['organisation'];
								@$reqtel=$req['telephone'];
								if($reqname==''){$reqname='NotProvided';}
					}
			}
$reviewer=$sample['lastreviewer'];

//Studycode Details
$select_studycode="SELECT * FROM studycodes WHERE code='$studycode'";
		$codes=mysqli_query($dbconnection,$select_studycode) or die("ERROR : " . mysqli_error($dbconnection));
					while ($code = mysqli_fetch_array($codes,MYSQLI_ASSOC)) {
								$projtitle=$code['projtitle'];
								$projsumm=$code['projsummary'];
								$contactperson=$code['contactperson1'];
								$cperson2=$code['contactperson2'];
								$phone=$code['phone1'];
					}
//Patient details
$select_patient="SELECT * FROM patients WHERE id='$patient'";
$patients=mysqli_query($dbconnection,$select_patient) or die("ERROR : " . mysqli_error($dbconnection));
					while ($patient = mysqli_fetch_array($patients,MYSQLI_ASSOC)) {
								$pid=$patient['pid']; if($pid=='') $pid='NP';
								$pid2=$patient['pid_other']; if($pid2=='') $pid2='NP';								
								$name=$patient['name']; if($name=='') $name='NP';
								$pinitials=$patient['pinitials']; if($pinitials==''){$pinitials='Not Provided';}								
								$gender=$patient['gender']; if($gender=='') $gender='Not Provided';
								$village=$patient['village'];
								$resdistrict=$patient['district']; 
								
					}
					
//Results details
$select_res_fm="SELECT * FROM results_fm WHERE labno='$labno'";
					$fms=mysqli_query($dbconnection,$select_res_fm) or die("ERROR : " . mysqli_error($dbconnection));
					$fmcount=mysqli_num_rows($fms);

					if($fmcount>0){
					while ($fm = mysqli_fetch_array($fms,MYSQLI_ASSOC)) {
								@$fmresult=$fm['result'];
								@$fminterpretation=$fm['interpretation'];
								$fmresdate=$fm['resdate'];
								@$fmcomment=$fm['comment'];								
								$fmreviewer=$fm['reviewer'];
								$fmreviewdate=$fm['reviewdate'];
						if($fmresult!=''&&$fmreviewer==''){$fmreviewstatus='notreviewed';}
					}
					}
$select_res_zn="SELECT * FROM results_zn WHERE labno='$labno'";
					$zns=mysqli_query($dbconnection,$select_res_zn) or die("ERROR : " . mysqli_error($dbconnection));
					$zncount=mysqli_num_rows($zns);

					if($zncount>0){
					while ($zn = mysqli_fetch_array($zns,MYSQLI_ASSOC)) {
								@$znresult=$zn['result'];
								@$zninterpretation=$zn['interpretation'];
								$znresdate=$zn['resdate'];
								@$zncomment=$zn['comment'];						
								$znreviewer=$zn['reviewer'];
								$znreviewdate=$zn['reviewdate'];
						if($znresult!=''&&$znreviewer==''){$znreviewstatus='notreviewed';}
					}
					}
					
$select_res_genexpert="SELECT * FROM results_genexpert WHERE labno='$labno'";
					$genexpert=mysqli_query($dbconnection,$select_res_genexpert) or die("ERROR : " . mysqli_error($dbconnection));
					$genexpertcount=mysqli_num_rows($genexpert);

					if($genexpertcount>0){
					while ($gnx = mysqli_fetch_array($genexpert,MYSQLI_ASSOC)) {
								@$gnxresult=$gnx['result'];
								@$gnxresdate=$gnx['resdate'];
								@$gnxcomment=$gnx['comment'];								
								@$gnxreviewer=$gnx['reviewer'];
								@$gnxreviewdate=$gnx['reviewdate'];
						if($gnxresult!=''&&$gnxreviewer==''){$gnxreviewstatus='notreviewed';}
					}
					}
					
$select_res_culture_interpretation="SELECT * FROM results_culture_interpretation WHERE labno='$labno'";
					$culture_interpretations=mysqli_query($dbconnection,$select_res_culture_interpretation) or die("ERROR : " . mysqli_error($dbconnection));
					$cultureinterpretationcount=mysqli_num_rows($culture_interpretations);

					if($cultureinterpretationcount>0){
					while ($culture_interpretation = mysqli_fetch_array($culture_interpretations,MYSQLI_ASSOC)) {
								@$culture_interpretation_result=$culture_interpretation['result'];
								@$culture_interpretation_date=$culture_interpretation['resdate'];
					}
					}
					
					//CATER FOR SMEAR Results
					$select_res_dfm="SELECT * FROM results_others WHERE labno='$labno'
					and (test='DFM' or test='dfm')";
					$dfm=mysqli_query($dbconnection,$select_res_dfm) or die("ERROR : " . mysqli_error($dbconnection));
					$dfmcount=mysqli_num_rows($dfm);

					if($dfmcount>0){
					while ($df = mysqli_fetch_array($dfm,MYSQLI_ASSOC)) {
								@$dfmresult=$df['result'];
								@$dfmresdate=$df['resdate'];
								@$dfmcomment=$df['comment'];								
								@$dfmreviewer=$df['reviewer'];
								@$dfmreviewdate=$df['reviewdate'];
						if($dfmresult!=''&&$dfmreviewer==''){$dfmreviewstatus='notreviewed';}
					}
					}
		$select_res_dzn="SELECT * FROM results_others WHERE labno='$labno' 
		and (test='DZN' OR test='dzn')";
					$dzn=mysqli_query($dbconnection,$select_res_dzn) or die("ERROR : " . mysqli_error($dbconnection));
					$dzncount=mysqli_num_rows($dzn);

					if($dzncount>0){
					while ($dz= mysqli_fetch_array($dzn,MYSQLI_ASSOC)) {
								@$dznresult=$dz['result'];
								@$dznresdate=$dz['resdate'];
								@$dzncomment=$dz['comment'];								
								@$dznreviewer=$dz['reviewer'];
								@$dznreviewdate=$dz['reviewdate'];
						if($dznresult!=''&&$dznreviewer==''){$dznreviewstatus='notreviewed';}
					}
					}
					
				
} /* Ending while */
} /* Ending if */

else{
echo "<script>
alert('The Lab No $labno is not registered.');
location.href='".$_SERVER['PHP_SELF']."'
</script> ";
}
?>

<!-- ------------------------------------ START OF GENERIC REPORT FORMAT ----------------------------------------------------------------------    -->
<div class="report-title" style="background-color:white; width=100%; font-size:;  margin:; padding-left:;"><center>
<b class="title1"><b><?php echo $reporttitle1 ?>
<?php if($reporttitle2!=''){echo "<br>$reporttitle2 "; }?></b></b> 
<BR>
<b class="title2"></b>

</center></div>

<div class="title3" style="background-color:white; width=100%; font-size:;  margin:; padding-left:;"><center><b><?php if($reportstatus=='Preliminary'){ echo "PRELIMINARY  ";}else{
	echo "FINAL ";
} ?>REPRINTED LABORATORY RESULTS REPORT</b> &emsp;&emsp;&emsp;LAB No: <b><?php 
if($studycode=='BDM'){echo $labno;}else {echo $studycode .'-'. $labno; }?></b></center><hr> </div>

<div id="printReady"  style="  width=100%; background-color:white; font-size:; ; margin:; padding:;">
<div id='format-print'>
<br>
<?php if ($reviewer==''){ echo "<font color='red'><b>*** WARNING!! - PATIENT AND SAMPLE DETAILS WERE NOT REVIEWED ***</b></font><br>";} ?>

<?php if($studycode=='B'){ ?>
<b class="contact"> <?php echo @$projsumm;?> &emsp;&emsp; CONTACT:
<?php echo @$reqname.' - '.@$reqorg.' - '.@$reqtel;?></b><hr>
<?php }
else{ ?>
<b class="contact"> <?php echo @$projsumm;?> &emsp;&emsp; CONTACT: 
<?php echo @$contactperson.','.@$cperson2.' - '.@$phone;?></b><hr>
<?php } ?>

<b>PATIENT DETAILS</b>
<table class="table table-condensed">
<tr valign='top'>
	<td>
	Patient ID:&emsp;<?php echo $pid;?>
	<?php if($name!='NP'){ ?><b><br>Patient Name:&emsp;<?php echo $name; }?></b>
	<?php if ($age!='0' and $age!=''){?><br>Age: <?php echo $age;?> Years <?php if ($months!=0){echo " $months Months";} }?>
	<?php if ($gender!='Not Provided'){?><br>Gender:&emsp;<?php echo $gender; }?>
	</td>
	<td>
	<?php if ($pid2!='NP'){?><b>Patient ID 2:&emsp;<?php echo $pid2; }?></b>
	Patient Initials:&emsp;<?php echo $pinitials;?>
	<?php if ($resdistrict!=''){?><br>District of Residence:&emsp;<?php  echo $resdistrict;}?>
	<?php if ($village!=''){?> <br>LC1/Zone:&emsp;<?php echo $village;}?>
	</td>
</tr>
</table>

<hr>

<b>SPECIMEN DETAILS</b>

<table class="table table-condensed">
<tr valign='top'>
	<td>
	Specimen Type:&emsp;<?php echo $spectype;?><br>
	Consistency:&emsp;<?php echo $consistency;?><br>
	Hierachy:&emsp;<?php echo $samplehierachy;?><br>
	Interval:&emsp;<?php echo $interval;?><br>
	Appearance:&emsp;<?php echo $appearance;?><br>
	
	</td>
	<td>
	Date Collected:&emsp;<?php if($colldate=='0000-00-00'){echo '';} else echo @date('d-M-y',strtotime($colldate));?>&emsp;<?php if($colltime!='00:00:00'){echo date('h:i A',strtotime($colltime));}?><br>
	Date Received:&emsp;<?php if($rctdate=='0000-00-00'){echo '';} else echo @date('d-M-y',strtotime($rctdate));?>&emsp;<?php if($rcttime!='00:00:00'){echo date('h:i A',strtotime($rcttime));}?><br>
	Processed:&emsp;<?php if($processdate=='0000-00-00'){echo '';} else echo @date('d-M-y',strtotime($processdate));?><br>
	Volume:&emsp;<?php echo $volume;?> <?php if($volume!='NP'){echo " ml";} ?><br>
<?php if($reqname!='NotProvided'){ ?><b>Requested by:&emsp;</b>
	<?php echo @$reqtitle.' '.@$reqname.' - '.@$reqorg.' - '.@$reqtel; }?>  </b>
	</td>
</tr>

</table>
<hr>

<?php if($fmcount>0 or $zncount>0 or $dzncount>0 or $dfmcount>0){?>
<b>MICROSCOPY RESULTS</b><br>
<table class="table table-condensed">

<?php if($fmcount>0&&@$fmresult!=''){?>
<tr>
<td>Concentrated FM</td>
<td><?php echo @$fmresult;?> <?php //if($fminterpretation!=''){echo "($fminterpretation)";} ?></td>
<td><?php if($fmresdate=='0000-00-00'){echo '';} else echo @date('d-M-y',strtotime($fmresdate));?> 
<?php if(@$fmreviewstatus){ echo "<font color='red'>  >>Results Entry was not Reviewed</font>";}?></td>

<?php 
}
if($fmcount>0&&@$fmresult==''){
	echo "<p>Concentrated FM is Pending</p>";
}
?></tr></table><br>
<?php if($dfmcount>0 && $dfmresult!=''){ ?>
<table class="table table-condensed">
<tr>
<td>Direct FM</td>
<td><?php echo @$dfmresult;?></td>
<td><?php if($dfmresdate=='0000-00-00'){echo '';} else echo @date('d-M-y',strtotime($dfmresdate));?>
<?php if(@$dfmreviewstatus){ echo "<font color='red'>  >>Results Entry was not Reviewed</font>";}?></td></tr>
<?php

}
if($dfmcount>0&&@$dfmresult==''){
	echo "<p> Direct FM  Pending</p>";
}
//else echo "<p>Direct FM Pending</p>";
echo "</table>";
echo "<hr>";
//} ?>

<?php if($zncount>0&&@$znresult!==''){?>
<table class="table table-condensed">
<tr>
<td>Concentrated ZN</td>
<td><?php echo @$znresult;?> <?php if($zninterpretation!=''){echo "($zninterpretation)";} ?></td>
<td><?php if($znresdate=='0000-00-00'){echo '';} else echo @date('d-M-y',strtotime($znresdate));?> 
<?php if(@$znreviewstatus){ echo "<font color='red'>  >>Results Entry was not Reviewed</font>";}?></td>
</tr>
<?php 
}
if($zncount>0&&@$znresult==''){
	echo "<p> Concentrated ZN is Pending</p>";
}
?></table><br>
<?php if($dzncount>0&&@$dznresult!==''){?>
<table class="table table-condensed">
<tr>
<td>Direct ZN</td>
<td><?php echo @$dznresult;?> <?php if($dzninterpretation!=''){echo "($dzninterpretation)";} ?></td>
<td><?php if($dznresdate=='0000-00-00'){echo '';} else echo @date('d-M-y',strtotime($dznresdate));?> 
<?php if(@$dznreviewstatus){ echo "<font color='red'>  >>Results Entry was not Reviewed</font>";}?></td>

<?php 
}
if($dzncount>0&&@$dznresult==''){
	echo "<p> Direct ZN is Pending</p>";
}
?></tr>

</table>
<hr>
<?php }?>

<?php if($genexpertcount>0){?>
<b>GENEXPERT RESULTS</b><br>

<?php if($genexpertcount>0 && $gnxresult!=''){ ?>
<table class="table table-condensed">
<tr>
<td>Genexpert</td>
<td><?php echo @$gnxresult;?></td>
<td><?php if($gnxresdate=='0000-00-00'){echo '';} else echo @date('d-M-y',strtotime($gnxresdate));?>
<?php if(@$gnxreviewstatus){ echo "<font color='red'>  >>Results Entry was not Reviewed</font>";}?></td></tr>
<?php
echo "</table>";
}
else echo "<p>Genexpert Pending</p>";
echo "<hr>";
}
?>


<?php
require_once '../includes/dbconfig.php'; 
$select_liquidculture="SELECT * FROM results_liquidculture where labno='$labno' ";
$liquidcultures=mysqli_query($dbconnection,$select_liquidculture) or die("ERROR : " . mysqli_error($dbconnection));
$liquidcultures_count=mysqli_num_rows($liquidcultures);

$select_liquidculture2="SELECT * FROM results_liquidculture where labno='$labno' and resdate!='0000-00-00'";
$liquidcultures2=mysqli_query($dbconnection,$select_liquidculture2) or die("ERROR : " . mysqli_error($dbconnection));
$liquidcultures_count2=mysqli_num_rows($liquidcultures2);
                    
if($liquidcultures_count>0){ ?>
<b>LIQUID CULTURE</b>

<?php if($liquidcultures_count2>0){ ?>
<table class="table table-condensed">
<tr><td>Media</td><td>Days to Positive</td><td>ZN Culture</td><td>BAP</td><td>Date</td></tr>
			
	<?php 
	$liquidcomment = "";
	while ($liquidculture= mysqli_fetch_array($liquidcultures,MYSQLI_ASSOC)) {
	$liquidculture_media=$liquidculture['media'];	
    $liquidculture_resdate=$liquidculture['resdate'];
		if($liquidculture_resdate=='0000-00-00'){ $liquidculture_resdate=''; }
		else { $liquidculture_resdate=date('d-M-Y',strtotime($liquidculture_resdate)); }
	$liquidculture_resdtp=$liquidculture['result_dtp'];	
    $liquidculture_resznc=$liquidculture['result_znc'];
	$liquidculture_resbap=$liquidculture['result_bap'];
    $liquidreviewer=$liquidculture['reviewer'];
	
	if($liquidcomment!=''){ $liquidcomments = $liquidcomments .'; '. $liquidcomment; }
	
	if($liquidculture_resdate!=''&&$liquidreviewer==''){$liquidreviewstatus='notreviewed';} else $liquidreviewstatus='reviewed';
	?>
	<tr>
	<td><?php echo $liquidculture_media;?></td>
	<td><?php echo $liquidculture_resdtp;?></td>
	<td><?php echo $liquidculture_resznc;?></td>
	<td><?php echo $liquidculture_resbap;?></td>
	<td><?php echo $liquidculture_resdate?> <?php if($liquidreviewstatus=="notreviewed"){ echo "<font color='red'>  >>Results Entry was not Reviewed</font>"; }?></td>
	</tr>
<?php 
}
echo "</table>";
}
else echo "<br>Pending";
echo "<hr>";
}
?>


<?php
require_once '../includes/dbconfig.php'; 
$select_solidculture="SELECT * FROM results_solidculture where labno='$labno' ";
$solidcultures=mysqli_query($dbconnection,$select_solidculture) or die("ERROR : " . mysqli_error($dbconnection));
$solidcultures_count=mysqli_num_rows($solidcultures);

$select_solidculture2="SELECT * FROM results_solidculture where labno='$labno' and resdate!='0000-00-00'";
$solidcultures2=mysqli_query($dbconnection,$select_solidculture2) or die("ERROR : " . mysqli_error($dbconnection));
$solidcultures_count2=mysqli_num_rows($solidcultures2);
                    
if($solidcultures_count>0){?>
<b>SOLID CULTURE</b>

<?php if($solidcultures_count2>0){?>
<table class="table table-condensed">
<tr><td>Media</td><td>Semi-Quantitative</td><td>Quantitative</td><td>Qualitative</td><td>Date</td></tr>
		
	
<?php
$solidcomment = "";
while ($solidculture= mysqli_fetch_array($solidcultures,MYSQLI_ASSOC)) {
		$solidculture_media=$solidculture['media'];	
        $solidculture_resdate=$solidculture['resdate'];
			if($solidculture_resdate=='0000-00-00'){ $solidculture_resdate=''; }
			else { $solidculture_resdate=date('d-M-Y',strtotime($solidculture_resdate)); }
		$solidculture_resql=$solidculture['result_ql'];	
        $solidculture_ressqt=$solidculture['result_sqt'];
		$solidculture_resqt=$solidculture['result_qt'];
        $solidreviewer=$solidculture['reviewer'];
		
		if($solidcomment!=''){ $solidcomments = $solidcomments .'; '. $solidcomment; }
		
		if($solidculture_resdate!='' && $solidreviewer==''){$solidreviewstatus='notreviewed';} else $solidreviewstatus='reviewed';
		?>	
	<tr>
		<td><?php echo $solidculture_media;?></td>
		<td><?php echo $solidculture_ressqt;?></td>
		<td><?php echo $solidculture_resqt;?></td>
		<td><?php echo $solidculture_resql;?></td>
		<td><?php echo $solidculture_resdate?> <?php if($solidreviewstatus=="notreviewed"){ echo "<font color='red'>  >>Results Entry was not Reviewed</font>"; }?></td>
		</tr>
<?php 
}
echo "</table>";
}
else echo "<br>Pending";
echo "<hr>";
}
?>


<?php
require_once '../includes/dbconfig.php'; 
$select_bloodculture="SELECT * FROM results_bloodculture where labno='$labno' ";
$bloodcultures=mysqli_query($dbconnection,$select_bloodculture) or die("ERROR : " . mysqli_error($dbconnection));
$bloodcultures_count=mysqli_num_rows($bloodcultures);

$select_bloodculture2="SELECT * FROM results_bloodculture where labno='$labno' and resdate!='0000-00-00'";
$bloodcultures2=mysqli_query($dbconnection,$select_bloodculture2) or die("ERROR : " . mysqli_error($dbconnection));
$bloodcultures_count2=mysqli_num_rows($bloodcultures2);
                    
if($bloodcultures_count>0){?>
<b>BLOOD CULTURE</b>

<?php if($bloodcultures_count2>0){?>
<table class="table table-condensed">
<tr><td>Media</td><td>Semi-Quantitative</td><td>Quantitative</td><td>Qualitative</td><td>Date</td></tr>

<?php
$bloodcomments = "";
while ($bloodculture= mysqli_fetch_array($bloodcultures,MYSQLI_ASSOC)) {
		$bloodculture_media=$bloodculture['media'];	
        $bloodculture_resdate=$bloodculture['resdate'];
			if($bloodculture_resdate=='0000-00-00'){ $bloodculture_resdate=''; }
			else { $bloodculture_resdate=date('d-M-Y',strtotime($bloodculture_resdate)); }
		$bloodculture_resql=$bloodculture['result_ql'];	
        $bloodculture_ressqt=$bloodculture['result_sqt'];
		$bloodculture_resqt=$bloodculture['result_qt'];
		$bloodcomment=$bloodculture['comment'];
        $bloodreviewer=$bloodculture['reviewer'];
		
		if($bloodcomment!=''){ $bloodcomments = $bloodcomments .'; '. $bloodcomment; }
		
		if($bloodculture_resdate!='' && $bloodreviewer==''){$bloodreviewstatus='notreviewed';} else $bloodreviewstatus='reviewed';
		?>		
		<tr>
		<td><?php echo $bloodculture_media;?></td>
		<td><?php echo $bloodculture_ressqt;?></td>
		<td><?php echo $bloodculture_resqt;?></td>
		<td><?php echo $bloodculture_resql;?></td>
		<td><?php echo $bloodculture_resdate?> <?php if($bloodreviewstatus=="notreviewed"){ echo "<font color='red'>  >>Results Entry was not Reviewed</font>"; }?></td>
		</tr>
<?php 
}
echo "</table>";
}
else echo "<br>Pending";
echo "<hr>";
}
?>

<?php
$select_res_identification="SELECT * FROM results_identification WHERE labno='$labno'";
$identification=mysqli_query($dbconnection,$select_res_identification) or die("ERROR : " . mysqli_error($dbconnection));
$identificationcount=mysqli_num_rows($identification);
					
$select_res_identification2="SELECT * FROM results_identification WHERE labno='$labno' and resdate!='0000-00-00'";
$identification2=mysqli_query($dbconnection,$select_res_identification2) or die("ERROR : " . mysqli_error($dbconnection));
$identificationcount2=mysqli_num_rows($identification2);
					
if($identificationcount>0){ ?>
<b>IDENTIFICATION FOR CULTURE RESULTS</b>

<?php if($identificationcount2>0){?>
<table class="table table-condensed">
<tr><td>For</td><td>Method</td><td>Result</td><td>Date</td></tr>
					
<?php
$identifycomments = "";
while ($identify = mysqli_fetch_array($identification,MYSQLI_ASSOC)) {
	@$identifyculture=$identify ['test'];
	@$identifymedia=$identify ['media'];
	@$identifymethod=$identify ['method'];
	@$identifyresult=$identify ['result'];
	@$identifyresdate=$identify ['resdate'];
		if($identifyresdate=='0000-00-00'){ $identifyresdate=''; }
		else { $identifyresdate=date('d-M-Y',strtotime($identifyresdate)); }
	@$identifycomment=$identify ['comment'];
	@$identifyreviewer=$identify ['reviewer'];
	@$identifyreviewdate=$identify ['reviewdate'];
	
	if($identifycomment!=''){ $identifycomments = $identifycomments .'; '. $identifycomment; }
						
	if($identifyresult!=''&&$identifyreviewer==''){$identifyreviewstatus='notreviewed';} else $identifyreviewstatus='reviewed';
	?>
	<tr>
		<td><?php echo $identifyculture.'-'.$identifymedia;?></td>
		<td><?php echo $identifymethod;?></td>
		<td><?php echo $identifyresult;?></td>
		<td><?php echo $identifyresdate?> <?php if($identifyreviewstatus=="notreviewed"){ echo "<font color='red'>  >>Results Entry was not Reviewed</font>"; }?></td>
		</tr>
<?php 
}
echo "</table>";
}
echo "<hr>";
}
?>

<?php if($cultureinterpretationcount>0){?>
<b>CULTURE RESULTS INTERPRETATION:</b>&nbsp;&nbsp;&nbsp;<?php echo @$culture_interpretation_result; ?>
<hr>
<?php } ?>
	

<table class="table table-condensed"><tr>

<td>
<?php
require_once '../includes/dbconfig.php';
$select_res_dst1="SELECT * FROM results_dst1 WHERE labno='$labno'";
$dst1s=mysqli_query($dbconnection,$select_res_dst1) or die("ERROR : " . mysqli_error($dbconnection));
$dst1count=mysqli_num_rows($dst1s);

$select_res_dst12="SELECT * FROM results_dst1 WHERE labno='$labno' and resdate!='0000-00-00'";
$dst1s2=mysqli_query($dbconnection,$select_res_dst12) or die("ERROR : " . mysqli_error($dbconnection));
$dst1count2=mysqli_num_rows($dst1s2);

if($dst1count>0){ ?>
<b>1st LINE DST RESULTS</b><br>

<?php if($dst1count2>0){?>	
		
		<?php
		$dst1comments = "";
		while ($dst1 = mysqli_fetch_array($dst1s,MYSQLI_ASSOC)){
		$dst1method = $dst1['method'];
			$select_method="SELECT * FROM option_dstmethods WHERE code='$dst1method'";
			$methods=mysqli_query($dbconnection,$select_method) or die("ERROR : " . mysqli_error($dbconnection));
					while ($method = mysqli_fetch_array($methods,MYSQLI_ASSOC)) {
								@$dst1methodtype=$method['type'];
					}
		$dst1comment = $dst1['comment'];
		$dst1restech = $dst1['restech'];
		$dst1resdate = $dst1['resdate'];
			if($dst1resdate=='0000-00-00'){ $dst1resdate=''; }
			else { $dst1resdate=date('d-M-Y',strtotime($dst1resdate)); }
		$dst1entrant = $dst1['entrant'];
		$dst1entrytime = $dst1['entrytime'];
		$dst1reviewer = $dst1['reviewer'];
		$dst1reviewdate = $dst1['reviewdate'];
		
		if($dst1comment!=''){ $dst1comments = $dst1comments .'; '. $dst1comment; }
		
		if($dst1reviewdate!=''&&$dst1reviewer==''){$dst1reviewstatus='notreviewed';} else $dst1reviewstatus='reviewed';
		?>
		Method: <?php echo "$dst1method ($dst1methodtype)"; ?> &nbsp;&nbsp; Date: <?php echo $dst1resdate; ?> 
		<?php if($dst1reviewstatus=="notreviewed"){ echo "<font color='red'>  >>Results Entry was not Reviewed</font>"; }?><br>
		
		<?php
		$drugs=mysqli_query($dbconnection,"SELECT * FROM option_dstdrugs1") or die("ERROR : " . mysqli_error($dbconnection));
		while ($drug = mysqli_fetch_array($drugs,MYSQLI_ASSOC)){
		$id = $drug['id'];
		$code = $drug['code'];
		$name = $drug['name']; $drugcolumn=strtolower($name);
		
		if($dst1[$drugcolumn] != ''){ echo "$name - $dst1[$drugcolumn] <br>"; }
		}
		echo "<br>";
		}
}
else echo "Pending";
}
?>
</td>

<td>
<?php
require_once '../includes/dbconfig.php';
$select_res_dst2="SELECT * FROM results_dst2 WHERE labno='$labno'";
$dst2s=mysqli_query($dbconnection,$select_res_dst2) or die("ERROR : " . mysqli_error($dbconnection));
$dst2count=mysqli_num_rows($dst2s);

$select_res_dst22="SELECT * FROM results_dst2 WHERE labno='$labno' and resdate!='0000-00-00'";
$dst2s2=mysqli_query($dbconnection,$select_res_dst22) or die("ERROR : " . mysqli_error($dbconnection));
$dst2count2=mysqli_num_rows($dst2s2);

if($dst2count>0){ ?>
<b>2nd LINE DST RESULTS</b><br>

<?php if($dst2count2>0){?>	
		
		<?php
		$dst2comments = "";
		while ($dst2 = mysqli_fetch_array($dst2s,MYSQLI_ASSOC)){
		$dst2method = $dst2['method'];
			$select_method="SELECT * FROM option_dstmethods WHERE code='$dst2method'";
			$methods=mysqli_query($dbconnection,$select_method) or die("ERROR : " . mysqli_error($dbconnection));
					while ($method = mysqli_fetch_array($methods,MYSQLI_ASSOC)) {
								@$dst2methodtype=$method['type'];
					}
		$dst2comment = $dst2['comment'];
		$dst2restech = $dst2['restech'];
		$dst2resdate = $dst2['resdate'];
			if($dst2resdate=='0000-00-00'){ $dst2resdate=''; }
			else { $dst2resdate=date('d-M-Y',strtotime($dst2resdate)); }
		$dst2entrant = $dst2['entrant'];
		$dst2entrytime = $dst2['entrytime'];
		$dst2reviewer = $dst2['reviewer'];
		$dst2reviewdate = $dst2['reviewdate'];
		
		if($dst2comment!=''){ $dst2comments = $dst2comments .'; '. $dst2comment; }
		
		if($dst2reviewdate!=''&&$dst2reviewer==''){$dst2reviewstatus='notreviewed';} else $dst2reviewstatus='reviewed';
		?>
		Method: <?php echo "$dst2method ($dst2methodtype)"; ?> &nbsp;&nbsp; Date: <?php echo $dst2resdate; ?> 
		<?php if($dst2reviewstatus=="notreviewed"){ echo "<font color='red'>  >>Results Entry was not Reviewed</font>"; }?><br>
		
		<?php
		$drugs=mysqli_query($dbconnection,"SELECT * FROM option_dstdrugs2") or die("ERROR : " . mysqli_error($dbconnection));
		while ($drug = mysqli_fetch_array($drugs,MYSQLI_ASSOC)){
		$id = $drug['id'];
		$code = $drug['code'];
		$name = $drug['name']; $drugcolumn=strtolower($name);
		
		if($dst2[$drugcolumn] != ''){ echo "$name - $dst2[$drugcolumn] <br>"; }
		}
		echo "<br>";
		}
}
else echo "Pending";
}
?>
</td>

</tr></table>

<hr>

<?php
require_once '../includes/dbconfig.php';
$select_othersexaminationresults="SELECT * FROM results_others where labno='$labno' 
and test!='dzn'and test!='dfm'";
$othersresults=mysqli_query($dbconnection,$select_othersexaminationresults) or die("ERROR : " . mysqli_error($dbconnection));
$othersresult_count=mysqli_num_rows($othersresults);

//$select_othersexaminationresults2="SELECT * FROM results_others where labno='$labno' and resdate!='0000-00-00'";
$select_othersexaminationresults2="SELECT * FROM results_others where labno='$labno'
and test!='dzn'and test!='dfm'";
$othersresults2=mysqli_query($dbconnection,$select_othersexaminationresults2) or die("ERROR : " . mysqli_error($dbconnection));
$othersresult_count2=mysqli_num_rows($othersresults2);
                    
if($othersresult_count>0){ ?>
<b>OTHER RESULTS</b>

<?php if($othersresult_count2>0){?>
<table class="table table-condensed">
<tr><td>Examination</td><td>Result</td><td>Date</td></tr>

<?php
		$othertestcomments = "";
		while ($othertest = mysqli_fetch_array($othersresults,MYSQLI_ASSOC)){
		$othertestcode = $othertest['test'];
		$othertestresult = $othertest['result'];
		$othertestcomment = $othertest['comment'];
		$othertestresdate = $othertest['resdate'];
			if($othertestresdate=='0000-00-00'){ $othertestresdate=''; }
			else { $othertestresdate=date('d-M-Y',strtotime($othertestresdate)); }
		$othertestentrant = $othertest['entrant'];
		$othertestentrytime = $othertest['entrytime'];
		$othertestreviewer = $othertest['reviewer'];
		$othertestreviewdate = $othertest['reviewdate'];
		
		if($othertestcomment!=''){ $othertestcomments = $othertestcomments .'; '. $othertestcomment; }
		
		if($othertestreviewdate!=''&&$othertestreviewer==''){$othertestreviewstatus='notreviewed';} else $othertestreviewstatus='reviewed';
		
        $examothers=mysqli_query($dbconnection,"SELECT * FROM option_examination_others where code='$othertestcode'") or die("ERROR : " . mysqli_error($dbconnection));
		while ($exam = mysqli_fetch_array($examothers,MYSQLI_ASSOC)){
			$code = $exam['code'];
		    $othertestname=$exam['name'];
		}		
		?>
	
	<tr>
		<td><?php echo $othertestname;?></td>
		<td><?php if($othertestresult=='') echo "(Pending)"; else echo $othertestresult;?></td>
		<td><?php echo $othertestresdate?> <?php if($othertestreviewstatus=="notreviewed" and $othertestresult!==''){ echo "<font color='red'>  >>Results Entry was not Reviewed</font>"; }?></td>
		</tr>
<?php 
}
echo "</table>";
}
echo "<hr>";
}
?>


<b>COMMENTS:</b>
<?php
if(@$samplecomment!=''){echo "&emsp;$samplecomment; ";}
if(@$fmcomment!=''){echo "&emsp;$fmcomment; ";}
if(@$zncomment!=''){echo "&emsp;$zncomment; ";}
if(@$gnxcomment!=''){echo "&emsp;$gnxcomment; ";}
if(@$liquidcomments!=''){echo "$liquidcomments ";}
if(@$solidcomments!=''){echo "$solidcomments ";}
if(@$bloodcomments!=''){echo "$bloodcomments ";}
if(@$identifycomments!=''){echo "$identifycomment ";}
if(@$dst1comments!=''){echo "$dst1comments ";}
if(@$dst2comments!=''){echo "$dst2comments ";}
if(@$othertestcomments!=''){echo "$othertestcomments ";}
?>

<hr>
<br>

<br>
Print Date & Time: <?php date_default_timezone_set("Africa/Nairobi"); echo date('l, F d Y, h:i A'); ?> &nbsp;&nbsp; 
Results Authorised &nbsp;&nbsp;&nbsp;&nbsp;Sign:<sub>.......................................................................</sub>&nbsp;&nbsp;&nbsp;&nbsp; 
Date:<sub>................................................</sub><br>

For Questions Concerning this report,Contact lab at 0414201148 or 0392176979
 
"Testing was done on a research basis"

</div>
</div> <!-- End of printReady div --->
