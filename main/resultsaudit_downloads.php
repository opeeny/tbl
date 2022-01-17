<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>


</head>
<?php if(isset($_SESSION['username']) and isset($_SESSION['password'])){ ?>
<?php

// The function header by sending raw excel
header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
$date=date("d-m-Y");


header("Content-Disposition: attachment; filename=All_audits$date.xls");
 
// Add data table
//include 'view_yap_members_exc.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<!--<link rel="stylesheet" type="text/css" href="style.css" />-->
</head>


<body>

<div class="form_head"><h1><center>LIST OF RESULTS AUDIT</center></h1> </div>



<?php

include("../includes/dbconfig.php");  
 $query=mysqli_query($dbconnection,"select * from studycodes  ORDER BY id desc"); 
  $display="Displaying System Users";
  $anddisplay="";
  ?>
  <div class="table-responsive">
<table class="table table-condensed">
<tr><?php echo "<th>ALL CHANGES</th>"; 
 

 ?>
</tr>
<?php
$sql="SELECT * FROM samples ";
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
	$volume=$sample['volume']; if($volume=='' or $volume==0) $volume='NP';
	$age=$sample['ageyears'];
	$months=$sample['agemonths'];
	$reasonfr=$sample['requestreason']; if($reasonfr=='') $reasonfr='NP';
	$spectype=$sample['spectype'];
	$colldate=$sample['colldate'];
	//$colldate=$sample['collector'];
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
								$contactperson=$code['contactperson1'];
								$phone=$code['phone1'];
								$phone2=$code['phone2'];
								$projsumm=$code['projsummary'];
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
$select_res_fm="SELECT * FROM results_fm_hist WHERE labno='$labno'";
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
$select_res_zn="SELECT * FROM results_zn_hist WHERE labno='$labno'";
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
					
$select_res_genexpert="SELECT * FROM results_genexpert_hist WHERE labno='$labno'";
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
					$select_res_dfm="SELECT * FROM results_others_hist WHERE labno='$labno'
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
		$select_res_liquid="SELECT * FROM results_liquidculture_hist WHERE labno='$labno' ";
					$liquid=mysqli_query($dbconnection,$select_res_liquid) or die("ERROR : " . mysqli_error($dbconnection));
					$liquidcount=mysqli_num_rows($liquid);

					if($liquidcount>0){
					while ($lq= mysqli_fetch_array($liquid,MYSQLI_ASSOC)) {
								@$lqresult=$lq['result'];
								@$lqresdate=$lq['resdate'];
								@$lqcomment=$lq['comment'];								
								@$lqreviewer=$lq['reviewer'];
								@$lqreviewdate=$lq['reviewdate'];
						if($lqresult!=''&&$lqreviewer==''){$lqreviewstatus='notreviewed';}
					}
					}
		
		$select_res_dzn="SELECT * FROM results_others_hist WHERE labno='$labno' and test='dzn' ";
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
					$select_solid="SELECT * FROM results_solidculture_hist WHERE labno='$labno' ";
					$solid=mysqli_query($dbconnection,$select_solid) or die("ERROR : " . mysqli_error($dbconnection));
					$solidcount=mysqli_num_rows($solid);

					if($solidcount>0){
					while ($sol= mysqli_fetch_array($solid,MYSQLI_ASSOC)) {
								@$solresult=$sol['result'];
								@$solresdate=$sol['resdate'];
								@$solcomment=$sol['comment'];								
								@$solreviewer=$sol['reviewer'];
								@$solreviewdate=$sol['reviewdate'];
						if($solresult!=''&&$solreviewer==''){$solreviewstatus='notreviewed';}
					}
					}
					$select_liquid="SELECT * FROM results_liquidculture_hist WHERE labno='$labno' ";
					$liquid=mysqli_query($dbconnection,$select_liquid) or die("ERROR : " . mysqli_error($dbconnection));
					$liquidcount=mysqli_num_rows($liquid);
					
					$select_dst2="SELECT * FROM results_dst2_hist WHERE labno='$labno' ";
					$dst2=mysqli_query($dbconnection,$select_dst2) or die("ERROR : " . mysqli_error($dbconnection));
					$dst2count=mysqli_num_rows($dst2);

	?>

<tr><?php if($fmcount>0)echo "<td><a href='fullaudit_view.php?audit=1&&cfm=$labno'>CFM-$labno-$fmcount</a></td>"; 
if($zncount>0){echo "<td><a href='fullaudit_view.php?audit=1&&czn=$labno'>CZN-$labno-$zncount</a></td>";}
if($dfmcount>0){echo "<td><a href='fullaudit_view.php?audit=1&&dfm=$labno'>DFM-$labno-$dfmcount</a></td>";}
if($dzncount>0){echo "<td><a href='fullaudit_view.php?audit=1&&dzn=$labno'>DZN-$labno-$dzncount</a></td>";} 
if($genexpertcount>0){echo "<td><a href=''>$genexpertcount</a></td>";}
if($solidcount>0){echo "<td><a href='fullaudit_view.php?audit=1&&cs=$labno'>SC-$labno-$solidcount</a></td>";}
if($liquidcount>0){echo "<td><a href='fullaudit_view.php?audit=1&&cl=$labno'>LC-$labno-$liquidcount</a></td>";}
if($dst2count>0){echo "<td><a href='fullaudit_view.php?audit=1&&dst2=$labno'>DSY2-$labno-$dst2count</a></td>";}
?>

</tr>

<?php	
					
				
					
				
} /* Ending while */
} /* Ending if */

else{
echo "<script>
alert('No Modification was Made to Labno $labno');
location.href='".$_SERVER['PHP_SELF']."'
</script> ";
}
?>
</table>


<div class="title3" style="background-color:white; width=100%; font-size:;  margin:; padding-left:;"><center><b><?php if($reportstatus=='Preliminary'){ echo "PRELIMINARY  ";}else{
	
} ?> <b>SUMMARY AUDIT REPORT</b></center><hr> </div>

<div id="printReady"  style="  width=100%; background-color:white; font-size:; ; margin:; padding:;">
<div id='format-print'>



<tr><?php if($fmcount>0)echo "<td>CFM-$fmcount</a></td>"; 
if($zncount>0){echo "<td>CZN-$zncount</td>";}
if($dfmcount>0){echo "<td>DFM-$dfmcount</td>";}
if($dzncount>0){echo "<td>DZN-$dzncount</td>";} 
if($genexpertcount>0){echo "<td>GXP-$genexpertcount</a></td>";}
if($solidcount>0){echo "<td>CS-$solidcount</td>";}
if($liquidcount>0){echo "<td>CL-$liquidcount</td>";}
if($dst2count>0){echo "<td>$dst2count</td>";}
?>

</tr>
</table>

</div>
</div>
</div>
<div ="col-md-2">
<div style="float:left;  padding-left:0.5%;">

</div>
</div>


</div>
 
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='index.php'>Login</a> to access the resources.</center>";?>
</div>
</div>
<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>
</div>

</body>
</html>