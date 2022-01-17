<div class="report-title" style="background-color:white; width=100%; font-size:;  margin:; padding-left:;"><center>
<b class="title1">
<?php echo $reporttitle1 ?>
<?php if($reporttitle2!='')
{echo "<br>$reporttitle2 "; }?>
<br>
</b> 
<BR>
</center></div>
<?php error_reporting(0);
$pat_id=$_GET['findlabno'];
include("../includes/dbconfig.php");

$sql3="SELECT * FROM patients WHERE pid='$pat_id'";
$patients=mysqli_query($dbconnection,$sql3) or die("ERROR : " . mysqli_error($dbconnection));
while ($patient = mysqli_fetch_array($patients,MYSQLI_ASSOC)) {
$pid=$patient['pid'];
$pat_id=$patient['id'];
$study=$patient['study'];
$name=$patient['name'];
$pinitials=$patient['pinitials'];
$district=$patient['district'];
$gender=$patient['gender'];
$telephone=$patient['telephone'];
$village=$patient['village'];
$subcounty=$patient['subcounty'];

}
?>
<div class="title1" style="background-color:white; width=100%;  margin:; padding-left:;"><center><b><?php if($reportstatus=='Preliminary'){ echo "PRELIMINARY  ";}else{
	echo "FINAL ";
} ?>IOM SMEAR RESULTS REPORT </b> </center><hr> </div>

<b>PATIENT DETAILS</b>
<table class="table table-condensed">
<tr valign='top'>
	<td>
	<b>FNAME:&emsp;</b></td>
	<td></td><td>
	<b>LNAME:&emsp;</b></td>
	<td></td><td>
	<b>OTHER ID:&emsp;</b></td>
	<td></td>
	
	
	</td>
	
</tr>
</table>
<hr>

<div id="printReady"  style="  width=100%; background-color:white; font-size:; ; margin:; padding:;">
<div id='format-print'>

<table class="table table-condensed">

<tr class="culturebold">
<td style="min-width:90px">PID</td>
<td class="max">LABNO</td>

<td>INTERVAL</td>
<td>TYPE </td>
<td>RECIEVE DATE</td>
<td>COLLECT DATE</td>
<td>RESULT</td>
</tr>

<?php
$sql="SELECT * FROM samples  WHERE patient='$pat_id'";
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysql_error($dbconnection));
if (mysqli_num_rows($samples) > 0){
while ($sample = mysqli_fetch_array($samples,MYSQLI_ASSOC)) {
	$labno = $sample['labno'];
	$sample_id = $sample['sample_id'];
	$samplehierachy = $sample['samplehierachy'];
	$patient = $sample['patient'];
	$studycode = $sample['studycode'];
	$examination=$sample['examination'];
	$rctdate = $sample['rctdate'];
	$rcttime = $sample['rcttime'];
	$processdate = $sample['processdate'];
	$processtime = $sample['processtime'];
	$appearance = $sample['appearance'];
	$volume=$sample['volume']; if($volume=='' or $volume==0) $volume='Not Provided';
	$age=$sample['ageyears'];
	$months=$sample['agemonths'];
	$reasonfr=$sample['requestreason']; if($reasonfr=='') $reasonfr='Not Provided';
	$spectype=$sample['spectype'];
	$interval=$sample['visitinterval'];
	/*if($interval!='') {
$selectinterval="SELECT * FROM visitinterval WHERE name='$interval'";
$selinterval=mysqli_query($dbconnection,$selectinterval) or die("ERROR : " . mysqli_error($dbconnection));
					while ($sinterval = mysqli_fetch_array($selinterval,MYSQLI_ASSOC)) {
					$interval=$sinterval['code']; 
           }
	}
	*/
	
	
/*	$countspectype=strlen($spectype);
	
	if($spectype=='PS' or $spectype=='Pus'){
		$spectype='PS';
	}else{
	if($countspectype>2){
$selectspectype="SELECT * FROM option_spectype WHERE name='$spectype'";
$specs=mysqli_query($dbconnection,$selectspectype) or die("ERROR : " . mysqli_error($dbconnection));
					while ($spec = mysqli_fetch_array($specs,MYSQLI_ASSOC)) {
					$spectype=$spec['code']; 
           }
	}else{
		$spectype=$spectype;
	}
	}*/
	
	$colldate=$sample['colldate'];
	$collmtd=$sample['collmethod'];
	$colltime=$sample['colltime'];
	$collector=$sample['collector'];
	
	$consistency=$sample['consistency'];if($consistency=='') $consistency='Not Provided';
	$examination=$sample['examination'];
	$samplecomment=$sample['comment'];
	$requester=$sample['requester'];
			if($requester==''){
				$reqname='Not Provided';
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
								$contactperson=$code['contactperson1'];
								$phone=$code['phone1'];
								$phone2=$code['phone2'];
								$projsumm=$code['projsummary'];
					}
//Patient details
$select_patient="SELECT * FROM patients WHERE id='$patient'";
$patients=mysqli_query($dbconnection,$select_patient) or die("ERROR : " . mysqli_error($dbconnection));
					while ($patient = mysqli_fetch_array($patients,MYSQLI_ASSOC)) {
								$pid=$patient['pid']; if($pid=='') $pid='Not Provided';
								$pid2=$patient['pid_other']; if($pid2=='') $pid2='Not Provided';								
								$name=$patient['name']; if($name=='') $name='Not Provided';
								$pinitials=$patient['pinitials'];								
								$gender=$patient['gender']; if($gender=='') $gender='Not Provided';
								$village=$patient['village']; if($village=='') $village='Not Provided';
								$resdistrict=$patient['district']; if($resdistrict=='') $resdistrict='Not Provided';
								
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
								$fmtech=$fm['restech'];
						if($fmresult!=''&&$fmreviewer==''){$fmreviewstatus='notreviewed';}
						if($fmresult!=''){
					$select_res_fmcode="SELECT * FROM resultsoptions_fm WHERE options='$fmresult'";
					$fms_codes=mysqli_query($dbconnection,$select_res_fmcode) or die("ERROR : " . mysqli_error($dbconnection));

					while ($fmcode = mysqli_fetch_array($fms_codes,MYSQLI_ASSOC)) {
								@$fm_smearcode=$fmcode['code'];
					}
						}else{
						@$fm_smearcode='Pending';	
						}

					///==CHECKING HIDDEN OPTIONAL FIELDS========//
			$checkdisabledfields="SELECT * FROM reportsetting WHERE study='$studycode'";
					$disabled=mysqli_query($dbconnection,$checkdisabledfields) or die("ERROR : " . mysqli_error($dbconnection));
					$disabledcount=mysqli_num_rows($disabled);

					if($disabledcount>0){
					while ($dis=mysqli_fetch_array($disabled,MYSQLI_ASSOC)) {
								@$showid=$dis['showid'];
								@$showsolid=$dis['soliddetails'];
								$showtech=$dis['techdetails'];
								@$showliquid=$dis['liquiddetails'];								
					}
					}
				
					
				

?>

<!-- ------------------------------------ START OF GENERIC REPORT FORMAT ----------------------------------------------------------------------    -->
<tr>
<td style="min-width:90px"><?php echo $pid ?></td>
<td class="max"><?php echo $labno; ?></td>
<td><?php  echo $interval; ?> </td>
<td><?php echo $spectype;  ?> </td>
<td><?php if($rctdate=='0000-00-00'){echo '';} else echo @date('d-M-y',strtotime($rctdate));?> </td>
<td><?php if($colldate=='0000-00-00'){echo '';} else echo @date('d-M-y',strtotime($colldate));?></td>
<td><?php  echo $fm_smearcode; ?> </td>
<td><?php if(@$fmreviewstatus){ echo "<font color='red'>  >>Results not Reviewed</font>";}?></td>
</tr>

<?php 

//echo "<hr>";

	
					}	}
} /* Ending while */
?>
</table>
<?php
} /* Ending if */

else{
echo "<script>
alert('The Patient with ID $pat_id doesnot exist');
location.href='".$_SERVER['PHP_SELF']."'
</script> ";
}
?>




<!--<img src="../images/footer-comments.gif" width="70%" >-->
<!--<div style="text-align: right;"><sup><i><b>Page 1 of 1</b></i></sup></div>-->
</div>
</div> <!-- End of printReady div --->