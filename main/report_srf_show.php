

<div id="divToPrint" >
<style type="text/css">
    @media print
    {
		b{font-weight:600; }
table { width:100%;
  border-spacing: 0;
  border-collapse: collapse;
}
td,
th {
  padding: 2px;
}
td{font-size:15px;}
		
		 

 #prinReady{float:left; background-color:white;
		font-size:; width:100%;
		margin:; padding:10px;}
		.table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
  .table-responsive {
  min-height: .01%;
  overflow-x: auto;
}
	}

    </style>
<?php
@$labno=$_GET['findlabno'];
include("../includes/dbconfig.php");
//$labno=78342;
$sql="SELECT * FROM samples WHERE labno='$labno'";
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysql_error($dbconnection));
if (mysqli_num_rows($samples) > 0){
while ($sample = mysqli_fetch_array($samples,MYSQLI_ASSOC)) {
	$labno = $sample['labno'];
	$sample_id = $sample['sample_id'];
	$visitinterval = $sample['visitinterval'];
	$samplehierachy = $sample['samplehierachy'];
	$patient = $sample['patient'];
	$studycode = $sample['studycode'];
	$examination=$sample['examination'];
	$sample_media=$sample['media'];
	$rctdate = $sample['rctdate']; if($rctdate=='0000-00-00' OR $rctdate==''){$rctdate='';} 
		else {$rctdate = date('d-M-y',strtotime($rctdate));}
	$rcttime = $sample['rcttime']; if($rcttime=='00:00:00' OR $rcttime==''){$rcttime='';} 
		else {$rcttime = date('H:i a',strtotime($rcttime));}
	$processdate = $sample['processdate']; if($processdate=='0000-00-00' OR $processdate==''){$processdate='';} 
		else {$processdate = date('d-M-y',strtotime($processdate));}
	$processtime = $sample['processtime']; if($processtime=='00:00:00' OR $processtime==''){$processtime='';} 
		else {$processtime = date('H:i a',strtotime($processtime));}
	$appearance = $sample['appearance'];
	$volume=$sample['volume']; if($volume=='' or $volume==0) $volume='NP';
	$age=$sample['ageyears'];
	$months=$sample['agemonths'];
	$reasonfr=$sample['requestreason']; if($reasonfr=='') $reasonfr='NP';
	$spectype=$sample['spectype'];
	$colldate=$sample['colldate']; if($colldate=='0000-00-00' OR $colldate==''){$colldate='';} 
		else {$colldate = date('d-M-y',strtotime($colldate));}
	$colltime=$sample['colltime']; if($colltime=='00:00:00' OR $colltime==''){$colltime='';} 
		else {$colltime = date('H:i a',strtotime($colltime));}
	$collector=$sample['collector'];
	$collmtd=$sample['collmethod'];
	$volume=$sample['volume'];
	$appearance=$sample['appearance'];
	$samplecomment=$sample['comment'];
	
	
	
	$requester=$sample['requester'];
			if($requester!=''){
			$select_req="SELECT * FROM requestors WHERE id='$requester'";
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
								//$contactperson=$code['contactperson1'];
								//$phone=$code['phone1'];
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
					$select_res_fm="SELECT * FROM results_fm WHERE labno='$labno'";
					$fms=mysqli_query($dbconnection,$select_res_fm) or die("ERROR : " . mysqli_error($dbconnection));
					$fmcount=mysqli_num_rows($fms);

					if($fmcount>0){
					while ($fm = mysqli_fetch_array($fms,MYSQLI_ASSOC)) {
								@$fmresult=$fm['result'];
								$fmtech=$fm['restech'];
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
								$zntech=$zn['restech'];
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
					while ($culture_interpretation = mysqli_fetch_array($culture_interpretations,MYSQLI_ASSOC)) 
					{
								@$culture_interpretation_result=$culture_interpretation['result'];
								@$culture_interpretation_date=$culture_interpretation['resdate'];
					}
					}
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
		$select_res_dzn="SELECT * FROM results_others WHERE labno='$labno' and (test='DZN' or test='dzn')";
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
/*
if($interval!='') {
$selectinterval="SELECT * FROM visitinterval WHERE name='$interval'";
$selinterval=mysqli_query($dbconnection,$selectinterval) or die("ERROR : " . mysqli_error($dbconnection));
					while ($sinterval = mysqli_fetch_array($selinterval,MYSQLI_ASSOC)) {
					$visitinterval=$sinterval['code']; 
           }
	}
	else{
		
		$visitinterval=$interval;
	}
	if($visitinterval==''){$visitinterval=$interval;};
	*/
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

<!--<div id="" style="background-color:white; width=100%; font-size:;  margin:; padding-left:;">
<center><b>SPECIMEN RECORD | LAB NO <?php echo $studycode .'-'. $labno;?> | <?php echo $laboratoryname; ?></b></center></div>-->
<table width='90%'><tr>
<td align='left'><b>SPECIMEN RECORD</b></td><td align='center'><b><?php
$rtitlecheck=mysqli_query($dbconnection,"SELECT * FROM reporttitle  
") or die("ERROR : " . mysqli_error($dbconnection));
while ($title=mysqli_fetch_array($rtitlecheck,MYSQLI_ASSOC)) {
								@$reporttitle1=$title['title1'];
								@$reporttitle2=$title['title2'];
								echo "$reporttitle1<br>$reporttitle2";
								}
								
								?>
								<?php //echo $laboratoryname; ?></b></td>
<td style="text-align: right;"></td>
</tr></table>
<hr>

<table class="table table-condensed">

<tr valign='top'>
	<td><b>LAB No: <?php echo $studycode .'-'. $labno;?></b></td>
	<td><b>Patient ID:&emsp;</b><?php echo $pid;?></td>
	<td><b>Visit Interval: </b><?php echo $visitinterval;?></b></td>
</tr>
<tr valign='top'>
	
	<td><b>Specimen Type:&emsp;</b><?php echo $spectype;?></td>
	<td><b>Coll Date/Time:&emsp;<?php echo $colldate;?> <?php echo $colltime;?></td>
	<td><b>Rec Date/Time:&emsp;<?php echo $rctdate;?> <?php echo $rcttime;?></td>
</tr>
<tr valign='top'>
	<td><b>Process Date:&emsp;</b><?php echo $processdate;?></td>
	<td><b>Volume:&emsp;</b><?php echo $volume;?>Ml</td>
	<td><b>Appearance:&emsp;</b><?php echo $appearance;?></td>
	<td><b>Collection Method:&emsp;</b><?php echo $collmtd;?></td>
	
</tr>


</table>

<table class="table-condensed" border='1'>
<tr align='center' style="background-color:#CCCCCC;" class='colouredrowCCCCCC'>
	<?php if($fmcount>0){?><td colspan='2' ><b>MICROSCOPY FM</b></td><?php } ?>
	<td colspan='2' width='50%'><b>MICROSCOPY ZN (Direct)</b></td>
</tr>

<!--<tr>
	<?php if($fmcount>0){?><td>Result</td>
	<td></td>
<?php } ?>
<?php if($zncount>0){?><td>Result</td> <?php  } ?>
<td></td>
	
</tr>
<tr>
	<?php if($fmcount>0){?><td>Tech / Date</td>
	<td></td><?php } ?>
	<?php if($zncount>0){?><td>Tech / Date</td>
	<td></td><?php } ?>
</tr>-->

<tr>
<td width='15%'>Result</td><td>&nbsp;</td>
<td width='15%'>Result</td><td>&nbsp;</td>	
</tr>
<tr>
<td>Tech / Date</td><td></td>
<td>Tech / Date</td><td></td>
</tr>
</table>

<table class="table-condensed" border='1'>
<tr align='center'  class='colouredrowCCCCCC'><td colspan='9' style="background-color:#CCCCCC;"><b>LIQUID CULTURE</b></td></tr>
<tr><td>MEDIA</td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>Tech / Date</td><td rowspan='4'></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>Tech / Date</td><td rowspan='4'></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>Tech / Date</td>
</tr>
<tr><td>DTP</td>
	<td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr><td>ZN</td>
	<td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr><td>BAP</td>
	<td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td>
</tr>
</table>

<table class="table-condensed" border='1'>
<tr align='center'  class='colouredrowCCCCCC'>
<td colspan='7' style="background-color:#CCCCCC;">
<b>SOLID CULTURE</b></td></tr>
<tr>
<td width='20%'>Media</td>
<td width='16%'>LJ</td>
<td width='16%'>7H11S</td>
				<td width='16%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td width='16%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</tr>
<tr><td>Semi-Quantitative</td><td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td>Quantitative</td><td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td>Qualitative</td><td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td>Tech / Date</td><td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td></tr>
</table>

<?php
require_once '../includes/dbconfig.php'; 
$select_bloodculture="SELECT * FROM results_bloodculture where labno='$labno' ";
$bloodcultures=mysqli_query($dbconnection,$select_bloodculture) or die("ERROR : " . mysqli_error($dbconnection));
$bloodcultures_count=mysqli_num_rows($bloodcultures);

$select_bloodculture2="SELECT * FROM results_bloodculture where labno='$labno' and resdate!='0000-00-00'";
$bloodcultures2=mysqli_query($dbconnection,$select_bloodculture2) or die("ERROR : " . mysqli_error($dbconnection));
$bloodcultures_count2=mysqli_num_rows($bloodcultures2);
                    
if($bloodcultures_count>0){?>
<table class="table-condensed" border='1'>
<tr align='center'  class='colouredrowCCCCCC'><td colspan='5' style="background-color:#CCCCCC;"><b>BLOOD CULTURE</b></td></tr>
<tr><td>Media</td><td>Semi-Quantitative</td><td>Quantitative</td><td>Qualitative</td><td>Tech / Date</td></tr>

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
		</tr>
<?php 
}
echo "</table>";
}
?>

				
<table class="table-condensed" border='1'>
<tr align='center'  class='colouredrowCCCCCC'><td colspan='5' style="background-color:#CCCCCC;"><b>IDENTIFICATION FOR CULTURE</b></td></tr>
<tr>
	<td width='20%'>For (Culture/Media)</td>
	<td  width='20%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td  width='20%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td  width='20%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td  width='20%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
	<td>Method</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>Result</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>Tech / Date</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
</table>

<table class="table-condensed" border='1'>
<tr align='center'  class='colouredrowCCCCCC'><td colspan='3' style="background-color:#CCCCCC;"><b>GENEXPERT</b></td></tr>
<tr><td>Result</td><td>Tech / Date</td><td>Comment</td></tr>
<tr>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
</table>

<table class="table-condensed">
<tr align='center'  class='colouredrowCCCCCC'>
	<td colspan='' style="background-color:#CCCCCC;"><b>1st LINE DST RESULTS</b></td>
	<td colspan='' style="background-color:#CCCCCC;"><b>2nd LINE DST RESULTS</b></td>
</tr>
<tr valign='top'>

<td>
		<table class="table-condensed" border='1'>
		<tr>
		<td colspan=''>Date</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		</tr>
		<tr>
		<td colspan=''>Tech</td>
		<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
		<td colspan=''>Method</td>
		<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<?php
		$drugs=mysqli_query($dbconnection,"SELECT * FROM option_dstdrugs1") or die("ERROR : " . mysqli_error($dbconnection));
		while ($drug = mysqli_fetch_array($drugs,MYSQLI_ASSOC)){
		$id = $drug['id'];
		$code = $drug['code'];
		$name = $drug['name']; $drugcolumn=strtolower($name);
		
		echo "
		<tr><td>$name</td>
			<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
			
		</tr>";
		}
		echo "</table>";
		?>
</td>

<td>
		<table class="table-condensed" border='1'>
		<tr>
		<td colspan=''>Date</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		</tr>
		<tr>
		<td colspan=''>Tech</td>
		<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<tr>
		<td colspan=''>Method</td>
		<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
		</tr>
		<?php
		$drugs=mysqli_query($dbconnection,"SELECT * FROM option_dstdrugs2") or die("ERROR : " . mysqli_error($dbconnection));
		while ($drug = mysqli_fetch_array($drugs,MYSQLI_ASSOC)){
		$id = $drug['id'];
		$code = $drug['code'];
		$name = $drug['name']; $drugcolumn=strtolower($name);
		
		echo "
		<tr><td>$name</td>
			<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
			
		</tr>";
		}
		echo "</table>";
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
<table class="table-condensed" border='1'>
<tr align='center'  class='colouredrowCCCCCC'><td colspan='3' style="background-color:#CCCCCC;"><b>OTHER EXAMINATIONS</b></td></tr>
<tr><td>Examination</td><td>Result</td><td>Tech / Date</td></tr>

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
	</tr>
<?php 
}
echo "</table>";
}
?>

<span style="background-color:#CCCCCC;"><b>COMMENTS:</b></span>

<br>
Analysis completed by:<sub>................................................................................................</sub>&nbsp;&nbsp;&nbsp;&nbsp; 
Date:<sub>................................................</sub> &nbsp;&nbsp;
Print Date & Time: <?php date_default_timezone_set("Africa/Nairobi"); echo date('l, F d Y, h:i A'); ?> &nbsp;&nbsp; 

<div style="text-align: right;"><sup><i><b>Page 1 of 1</b></i></sup></div>
</div>
</div>
</div> <!-- End of printReady div --->