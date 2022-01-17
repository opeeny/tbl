
<?php
@$labno=$_GET['findlabno'];
include("../includes/dbconfig.php");

$sql="SELECT * FROM samples WHERE labno='$labno'";
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysql_error($dbconnection));
if (mysqli_num_rows($samples) > 0){
while ($sample = mysqli_fetch_array($samples,MYSQLI_ASSOC)) {
	$labno = $sample['labno'];
	$sample_id = $sample['sample_id'];
	$samplehierachy = $sample['samplehierachy'];
	$patient = $sample['patient'];
	$studycode = $sample['studycode'];
	$examination=$sample['examination'];
	$sample_media=$sample['media'];
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
	$samplecomment=$sample['comment'];
	$requester=$sample['requester'];
			if($requester!=''){
			$select_req="SELECT * FROM requestors WHERE id=$requester";
			$requestors=mysqli_query($dbconnection,$select_req) or die("ERROR : " . mysqli_error($dbconnection));
					while ($req = mysqli_fetch_array($requestors,MYSQLI_ASSOC)) {
								@$reqtitle=$req['title'];
								@$reqname=$req['name'];
								@$reqorg=$req['organisation'];
								@$reqtel=$req['telephone'];
					}
			}
			else{ $reqname='NotProvided';
			}
$reviewer=$sample['lastreviewer'];

//Studycode Details
$select_studycode="SELECT * FROM studycodes WHERE code='$studycode'";
		$codes=mysqli_query($dbconnection,$select_studycode) or die("ERROR : " . mysqli_error($dbconnection));
					while ($code = mysqli_fetch_array($codes,MYSQLI_ASSOC)) {
								$projtitle=$code['projtitle'];
								$contactperson=$code['contactperson'];
								$phone=$code['phone'];
					}
//Patient details
$select_patient="SELECT * FROM patients WHERE id='$patient'";
$patients=mysqli_query($dbconnection,$select_patient) or die("ERROR : " . mysqli_error($dbconnection));
					while ($patient = mysqli_fetch_array($patients,MYSQLI_ASSOC)) {
								$pid=$patient['pid']; if($pid=='') $pid='NP';
								$pid2=$patient['pid_other']; if($pid2=='') $pid2='NP';								
								$name=$patient['name']; if($name=='') $name='NP';
								$pinitials=$patient['pinitials'];								
								$gender=$patient['gender']; if($gender=='') $gender='NP';
								$village=$patient['village']; if($village=='') $village='NP';
								$resdistrict=$patient['district']; if($resdistrict=='') $resdistrict='NP';
								
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
<div id="printReady"  style="  width=100%; background-color:white; font-size:; ; margin:; padding:;">

<div id='format-print'>

<div id="" style="background-color:white; width=100%; font-size:;  margin:; padding-left:;"><center>
<b><?php echo $laboratoryname; ?></b><br>
<b>SPECIMEN RECORD FORM (SRF)</b> &emsp;&emsp;&emsp;LAB No: <b><?php echo $studycode .'-'. $labno;?></b>
<hr>
</center></div>

<table class="table table-condensed">
<tr valign='top'>
	<td><b>LAB No: <?php echo $studycode .'-'. $labno;?></td>
	<td>Patient ID:&emsp;<?php echo $pid;?></td>
	<td>Patient ID 2:&emsp;<?php echo $pid2;?></td>
</tr>
<tr valign='top'>
	<td>Specimen ID:&emsp;<?php echo $sample_id;?></td>
	<td>Specimen Hierarchy:&emsp;<?php echo $samplehierachy;?></td>
	<td>Specimen Type:&emsp;<?php echo $spectype;?></td>
</tr>
<tr valign='top'>
	<td colspan='3'>Request:&emsp;&emsp;<?php echo $examination;?></td>
</tr>
<tr valign='top'>
	<td colspan='3'>Media:&emsp;&emsp;<?php echo $sample_media;?></td>
</tr>

</table>

<b>MICROSCOPY</b>
<table class="table-condensed" border='1'>
<tr align='center'>
	<td colspan='4' style="background-color:#CCCCCC;"><b>Microscopy FM</b></td>
	<td>&nbsp;</td>
	<td colspan='4' style="background-color:#CCCCCC;"><b>Microscopy ZN (Direct)</b></td>
</tr>

<tr><td>Result</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td>Result</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr><td>Date</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>Date</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
</tr>
<tr><td>Tech</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>Tech</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
</tr>
</table>

<?php if($fmcount>0 or $zncount>0){?>
<b>MICROSCOPY</b>
<table class="table-condensed" border='1'>
<tr><td></td><td>Result</td><td>Date</td><td>Tech</td></tr>

<?php if($fmcount>0){?>
<tr>
	<td>Auramine/FM</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<?php } ?>

<?php if($zncount>0){?>
<tr>
	<td>Microscopy ZN</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>

<?php } ?>

</table>
<?php } ?>

<?php if($genexpertcount>0){?>
<b>GENEXPERT</b>
<table class="table-condensed" border='1'>
<tr><td rowspan='2'>Genexpert</td><td>Result</td><td>Date</td><td>Tech</td></tr>
<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
</table>
<?php } ?>


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
<table class="table-condensed" border='1'>
<tr><td>Media</td><td>Days to Positive</td><td>ZN Culture</td><td>BAP</td><td>Date</td><td>Tech</td></tr>
			
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
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<?php 
}
echo "</table>";
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

<table class="table-condensed" border='1'>
<tr><td>Media</td><td>Semi-Quantitative</td><td>Quantitative</td><td>Qualitative</td><td>Date</td><td>Tech</td></tr>

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
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		</tr>
<?php 
}
echo "</table>";
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

<table class="table-condensed" border='1'>
<tr><td>Media</td><td>Semi-Quantitative</td><td>Quantitative</td><td>Qualitative</td><td>Date</td><td>Tech</td></tr>

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
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		</tr>
<?php 
}
echo "</table>";
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
<b>IDENTIFICATION</b>

<table class="table-condensed" border='1'>
<tr><td>For</td><td>Method</td><td>Result</td><td>Date</td><td>Tech</td></tr>
					
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
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		</tr>
<?php 
}
echo "</table>";
}
?>
	

<table class="table-condensed">
<tr>

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
<b>1st LINE DST RESULTS</b>
		
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
		<table class="table-condensed" border='1'>
		<tr><td>Method/Date/Tech: </td></tr>
		<?php
		$drugs=mysqli_query($dbconnection,"SELECT * FROM option_dstdrugs1") or die("ERROR : " . mysqli_error($dbconnection));
		while ($drug = mysqli_fetch_array($drugs,MYSQLI_ASSOC)){
		$id = $drug['id'];
		$code = $drug['code'];
		$name = $drug['name']; $drugcolumn=strtolower($name);
		
		if($dst1[$drugcolumn] != ''){ echo "<tr><td>$name: </td></tr>"; }
		}
		echo "</table>";
		}
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
<b>2nd LINE DST RESULTS</b>

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
		<table class="table-condensed" border='1'>
		<tr><td>Method/Date/Tech: </td></tr>
		<?php
		$drugs=mysqli_query($dbconnection,"SELECT * FROM option_dstdrugs2") or die("ERROR : " . mysqli_error($dbconnection));
		while ($drug = mysqli_fetch_array($drugs,MYSQLI_ASSOC)){
		$id = $drug['id'];
		$code = $drug['code'];
		$name = $drug['name']; $drugcolumn=strtolower($name);
		
		if($dst2[$drugcolumn] != ''){ echo "<tr><td>$name: </td></tr>"; }
		}
		echo "</table>";
		}
}
?>
</td>

</tr></table>

<?php
require_once '../includes/dbconfig.php';
$select_othersexaminationresults="SELECT * FROM results_others where labno='$labno'";
$othersresults=mysqli_query($dbconnection,$select_othersexaminationresults) or die("ERROR : " . mysqli_error($dbconnection));
$othersresult_count=mysqli_num_rows($othersresults);

//$select_othersexaminationresults2="SELECT * FROM results_others where labno='$labno' and resdate!='0000-00-00'";
$select_othersexaminationresults2="SELECT * FROM results_others where labno='$labno'";
$othersresults2=mysqli_query($dbconnection,$select_othersexaminationresults2) or die("ERROR : " . mysqli_error($dbconnection));
$othersresult_count2=mysqli_num_rows($othersresults2);
                    
if($othersresult_count>0){ ?>
<b>OTHER RESULTS</b>

<table class="table-condensed" border='1'>
<tr><td>Examination</td><td>Result</td><td>Date</td><td>Tech</td></tr>

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
		<td></td>
		<td></td>
		<td></td>
	</tr>
<?php 
}
echo "</table>";
}
?>

<b>COMMENTS:</b>
<table class="table-condensed" border='1'>
<tr>
<td>
<br>
</td>

</tr>
</table>
<br>
Specimen completed by:<sub>................................................................................................</sub>&nbsp;&nbsp;&nbsp;&nbsp; 
Date:<sub>................................................</sub> &nbsp;&nbsp;
Print Date & Time: <?php date_default_timezone_set("Africa/Nairobi"); echo date('l, F d Y, h:i A'); ?> &nbsp;&nbsp; 

<div style="text-align: right;"><sup><i><b>Page 1 of 1</b></i></sup></div>
</div>
</div> <!-- End of printReady div --->