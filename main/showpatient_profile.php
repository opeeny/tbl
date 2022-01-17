<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

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
<div class="row">
<?php 
$pat_id=$_GET['patient'];
include("../includes/dbconfig.php");

$sql="SELECT * FROM patients WHERE id='$pat_id'";
$patients=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
while ($patient = mysqli_fetch_array($patients,MYSQLI_ASSOC)) {
$pid=$patient['pid'];
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
<center><b>PATIENT PROFILE FOR  (<?php echo $name ?>)</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="btn btn-success" onClick="printSpecial()">PRINT</button>&nbsp;&nbsp;
<button class="btn btn-danger" onclick="window.close()">CLOSE</button>
<hr></center>


<div id="printReady" style='background-color:; border:; max-height:;  padding:;'>
<div id="" style="background-color:white; border:1px solid  black; ">

<center><b><?php echo $laboratoryname; ?></b><br>

<b>PATIENT PROFILE FOR<?phpif($name!=''){ echo $name }?></b><hr></center>
<b>PATIENT DETAILS</b><br>

<label>NAME:</label><?php echo $name; ?><br><br>

<label>GENDER:</label> <?php echo $gender; ?> &emsp;
<label>CONTACT TEL No:</label> <?php echo $telephone; ?> &emsp;
 <br><br>

<label>LC1 / VILLAGE:</label> <?php echo $village; ?> &emsp;
<label>SUBCOUNTY:</label> <?php echo $subcounty; ?> &emsp;
<label> DISTRICT:</label> <?php echo $district; ?> <br><br>


<?php
$sql2="SELECT * FROM samples WHERE patient='$pat_id'";
$samples=mysqli_query($dbconnection,$sql2) or die("ERROR : " . mysqli_error($dbconnection));
$count=mysqli_num_rows($samples);

echo"<hr>
<b>SAMPLES REFERED (TOTAL = $count)</b><br>
<table class='table' border='' cellpadding='5' cellspacing='1' bgcolor='91B4DD'>
";
while ($sample = mysqli_fetch_array($samples,MYSQLI_ASSOC)) {
$labno=$sample['labno'];
$studycode = $sample['studycode'];
$rctdate = $sample['rctdate']; if($rctdate!='0000-00-00'){ $rctdate=date('d-M-y',strtotime($rctdate));} else $rctdate='';
$reasonfr=$sample['requestreason'];
$spectype=$sample['spectype'];
$appearance=$sample['appearance'];
$visitinterval=$sample['visitinterval'];
$colldate=$sample['colldate']; if($colldate!='0000-00-00'){ $colldate=date('d-M-y',strtotime($colldate));} else $colldate='';

//Results details
$select_res_fm="SELECT * FROM results_fm WHERE labno='$labno'";
					$fms=mysqli_query($dbconnection,$select_res_fm) or die("ERROR : " . mysqlI_error($dbconnection));
					$fmcount=mysqli_num_rows($fms);

					if($fmcount>0){
					while ($fm = mysqli_fetch_array($fms,MYSQLI_ASSOC)) {
								@$fmresult=$fm['result'];
								$fmresdate=$fm['resdate']; if($fmresdate!='0000-00-00'){ $fmresdate=date('d-M-y',strtotime($fmresdate));} else $fmresdate='';
								@$fmcomment=$fm['comment'];
								
					}
					}
					else{		@$fmresult='';
								$fmresdate='';
								@$fmcomment='';
								
						}
$select_res_zn="SELECT * FROM results_zn WHERE labno='$labno'";
					$zns=mysqli_query($dbconnection,$select_res_zn) or die("ERROR : " . mysqli_error($dbconnection));
					$zncount=mysqli_num_rows($zns);

					if($zncount>0){
					while ($zn = mysqli_fetch_array($zns,MYSQLI_ASSOC)) {
								@$znresult=$zn['result'];
								$znresdate=$zn['resdate']; if($znresdate!='0000-00-00'){ $znresdate=date('d-M-y',strtotime($znresdate));} else $znresdate='';
								@$zncomment=$zn['comment'];
								
								
					}}
					else{
								@$znresult='';
								$znresdate='';
								@$zncomment='';
							
								
					}

$select_res_genexpert="SELECT * FROM results_genexpert WHERE labno='$labno'";
					$gns=mysqli_query($dbconnection,$select_res_genexpert) or die("ERROR : " . mysqli_error($dbconnection));
					$gncount=mysqli_num_rows($gns);
					
					if($gncount>0){
					while ($gn = mysqli_fetch_array($gns,MYSQLI_ASSOC)) {
								$gnresult=$gn['result'];
								$gnresdate=$gn['resdate']; if($gnresdate!='0000-00-00'){ $gnresdate=date('d-M-y',strtotime($gnresdate));} else $gnresdate='';
								@$gncomment=$gn['comment'];
								
					}
					}
					else{		$gnresult='';
								$gnresdate='';
								@$gncomment='';
						}		
				
$select_res_identification="SELECT * FROM results_identification WHERE labno='$labno'";
					$identifications=mysqli_query($dbconnection,$select_res_identification) or die("ERROR : " . mysqli_error($dbconnection));
					$identificationcount=mysqli_num_rows($identifications);

					if($identificationcount>0){
					while ($identification = mysqli_fetch_array($identifications,MYSQLI_ASSOC)) {
								$identificationresult=$identification['result'];
								$identificationresdate=$identification['resdate']; if($identificationresdate!='0000-00-00'){ $identificationresdate=date('d-M-y',strtotime($identificationresdate));} else $identificationresdate='';
								@$identificationcomment=$identification['comment'];
								
					}
					}
					else{		$identificationresult='';
								$identificationresdate='';
								@$identificationcomment='';
					}
					
$select_res_identification="SELECT * FROM results_identification WHERE labno='$labno'";
					$identifications=mysqli_query($dbconnection,$select_res_identification) or die("ERROR : " . mysqli_error($dbconnection));
					$identificationcount=mysqli_num_rows($identifications);

					if($identificationcount>0){
					while ($identification = mysqli_fetch_array($identifications,MYSQLI_ASSOC)) {
								$identificationresult=$identification['result'];
								$identificationresdate=$identification['resdate']; if($identificationresdate!='0000-00-00'){ $identificationresdate=date('d-M-y',strtotime($identificationresdate));} else $identificationresdate='';
								@$identificationcomment=$identification['comment'];
								
					}
					}
					else{		$identificationresult='';
								$identificationresdate='';
								@$identificationcomment='';
					}

echo "
<tr bgcolor='#fffbbbf6' align='left' valign='top' class=' table accessionrow'>
<td rowspan=''><b>LAB NO<br><br>$labno - $studycode</b><br><br>$spectype</td>
	<td rowspan=''><b>Collected</b><br>$colldate</td> <td rowspan=''><b>Received</b><br>$rctdate</td> 
	<td rowspan=''><b>Visit Interval</b><br>$visitinterval</td> 
<td>
<table class='table' cellpaddifng='5' cellfspacing='1' bgcolor='91bbbB4DD'>
<tr bgcolor='#ffbbfbf6' align='leftn' valign='top' class=''>
<td><b>Microscopy Fm</b><br>$fmresult <br>$fmresdate
<td><b>Microscopy Zn</b><br> $znresult<br>$znresdate</td> 
<td><b>Genexpert</b><br>$gnresult<br>$gnresdate</td> 

<td><b>IDENTIFICATION</b><br>$identificationresult<br>$identificationresdate</td> <td>";
require_once '../includes/dbconfig.php'; 
                   $select_liquidculture="SELECT * FROM results_liquidculture where labno='$labno' ";
					$liquidcultures=mysqli_query($dbconnection,$select_liquidculture) or die("ERROR : " . mysqli_error($dbconnection));
					$liquidcultures_count=mysqli_num_rows($liquidcultures);
                    
					if($liquidcultures_count>0){ ?>
					<b>LIQUID CULTURE</b><br>
					
					<?php 
					while ($liquidculture= mysqli_fetch_array($liquidcultures,MYSQLI_ASSOC)) {
								$liquidculture_media=$liquidculture['media'];	
                                 $liquidculture_resdate=$liquidculture['resdate'];
								 $liquidculture_resdtp=$liquidculture['result_dtp'];	
                                 $liquidculture_resznc=$liquidculture['result_znc'];
								 $liquidculture_resbap=$liquidculture['result_bap'];
                                  $liquidreviewer=$liquidculture['reviewer'];								 

								 echo "<b>Media:</b> $liquidculture_media  <b>Res Znc</b>:$liquidculture_resdtp
								 <b>Res Qt</b>:$liquidculture_resbap <b>Res Bap</b>:$liquidculture_resznc   Date: "?>
<?php if($liquidculture_resdate=='0000-00-00'){echo '';} else echo date('d-m-Y',strtotime($liquidculture_resdate)); ?><?php
								 
								 
					}
					}
						
 ?></td>
  <td>


<?php
require_once '../includes/dbconfig.php'; 
                    $select_solidculture="SELECT * FROM results_solidculture where labno='$labno' ";
					$solidcultures=mysqli_query($dbconnection,$select_solidculture) or die("ERROR : " . mysqli_error($dbconnection));
					$solidcultures_count=mysqli_num_rows($solidcultures);
                    
					if($solidcultures_count>0){?>
					SOLID CULTURE<br><?php
					while ($solidculture= mysqli_fetch_array($solidcultures,MYSQLI_ASSOC)) {
								$solidculture_media=$solidculture['media'];	
                                 $solidculture_resdate=$solidculture['resdate'];
								 $solidculture_resql=$solidculture['result_ql'];	
                                 $solidculture_ressqt=$solidculture['result_sqt'];
								 $solidculture_resqt=$solidculture['result_qt'];
                                 $solidreviewer=$solidculture['reviewer'];								 
 
								  echo "<b>Media:</b> $solidculture_media  <b>Res Ql</b>:$solidculture_resql
								  <b>Res Qt</b>:$solidculture_resqt <b>Res Sqt</b>:$solidculture_ressqt   "; ?><br>
<?php
								 }
					} ?></td>
 <td>


<?php
require_once '../includes/dbconfig.php'; 
                    $select_bloodculture="SELECT * FROM results_bloodculture where labno='$labno' ";
					$bloodcultures=mysqli_query($dbconnection,$select_bloodculture) or die("ERROR : " . mysqli_error($dbconnection));
					$bloodcultures_count=mysqli_num_rows($bloodcultures);
                    
					if($bloodcultures_count>0){?>
					BLOOD CULTURE<br><?php
					while ($bloodculture= mysqli_fetch_array($bloodcultures,MYSQLI_ASSOC)) {
								$bloodculture_media=$bloodculture['media'];	
                                 $bloodculture_resdate=$bloodculture['resdate'];
								 $bloodculture_resql=$bloodculture['result_ql'];	
                                 $bloodculture_ressqt=$bloodculture['result_sqt'];
								 $bloodculture_resqt=$bloodculture['result_qt'];
                                 $bloodreviewer=$bloodculture['reviewer'];								 
 
								  echo "<b>Media:</b> $bloodculture_media  <b>Res Ql</b>:$bloodculture_resql
								  <b>Res Qt</b>:$bloodculture_resqt <b>Res Sqt</b>:$bloodculture_ressqt   "; ?><br>
<?php
								 }
					} ?></td>
					<td>
					<?php
require_once '../includes/dbconfig.php';

$select_res_dst1="SELECT * FROM results_dst1 WHERE labno='$labno'";
$dst1s=mysqli_query($dbconnection,$select_res_dst1) or die("ERROR : " . mysqli_error($dbconnection));
$dst1count=mysqli_num_rows($dst1s);

if($dst1count>0){
		while ($dst1 = mysqli_fetch_array($dst1s,MYSQLI_ASSOC)){
		$dst1method = $dst1['method'];
		$dst1comment = $dst1['comment'];
		$dst1restech = $dst1['restech'];
		$dst1resdate = $dst1['resdate'];
		$dst1entrant = $dst1['entrant'];
		$dst1entrytime = $dst1['entrytime'];
		$dst1reviewer = $dst1['reviewer'];
		$dst1reviewdate = $dst1['reviewdate'];
		
		echo "<b>DST 1st LINE : $dst1method &nbsp;&nbsp&nbsp;Date:"; if($dst1resdate=='0000-00-00'){echo '';} else echo @date('d-M-y',strtotime($dst1resdate)); echo "</b> <br>";
		$drugs=mysqli_query($dbconnection,"SELECT * FROM option_dstdrugs1") or die("ERROR : " . mysqli_error($dbconnection));
		while ($drug = mysqli_fetch_array($drugs,MYSQLI_ASSOC)){
		$id = $drug['id'];
		$code = $drug['code'];
		$name = $drug['name'];
	
		$drugcolumn=strtolower($name);
		
		if($dst1[$drugcolumn] != ''){ echo "$name : $dst1[$drugcolumn] <br>"; }
		
		}
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

if($dst2count>0){
		while ($dst2 = mysqli_fetch_array($dst2s,MYSQLI_ASSOC)){
		$dst2method = $dst2['method'];
		$dst2comment = $dst2['comment'];
		$dst2restech = $dst2['restech'];
		$dst2resdate = $dst2['resdate'];
		$dst2entrant = $dst2['entrant'];
		$dst2entrytime = $dst2['entrytime'];
		$dst2reviewer = $dst2['reviewer'];
		$dst2reviewdate = $dst2['reviewdate'];
		
		echo "<b>DST 2nd LINE : $dst2method &nbsp;&nbsp&nbsp;"; if($dst2resdate=='0000-00-00'){echo '';} else echo @date('d-M-y',strtotime($dst2resdate)); echo "</b> <br>";
		$drugs=mysqli_query($dbconnection,"SELECT * FROM option_dstdrugs2") or die("ERROR : " . mysqli_error($dbconnection));
		while ($drug = mysqli_fetch_array($drugs,MYSQLI_ASSOC)){
		$id = $drug['id'];
		$code = $drug['code'];
		$name = $drug['name'];
	
		$drugcolumn=strtolower($name);
		
		if($dst2[$drugcolumn] != ''){ echo "$name : $dst2[$drugcolumn] <br>"; }
		
		}
		}
}
?></td>
<td>
<?php 

require_once '../includes/dbconfig.php';

$select_othersexaminationresults="SELECT * FROM results_others where labno='$labno'";
					$othersresults=mysqli_query($dbconnection,$select_othersexaminationresults) or die("ERROR : " . mysqli_error($dbconnection));
					$othersresult_count=mysqli_num_rows($othersresults);
                    
					if($othersresult_count>0){ echo "<b>OTHER TESTS <br></b>";

		while ($othertest = mysqli_fetch_array($othersresults,MYSQLI_ASSOC)){
		$othertestname = $othertest['test'];
		$othertestresult = $othertest['result'];
		$othertestcomment = $othertest['comment'];
		$othertestresdate = $othertest['resdate'];
		$othertestentrant = $othertest['entrant'];
		$othertestentrytime = $othertest['entrytime'];
		$othertestreviewer = $othertest['reviewer'];
		$othertestreviewdate = $othertest['reviewdate'];
		
         $examothers=mysqli_query($dbconnection,"SELECT * FROM option_examination_others where code='$othertestname'") or die("ERROR : " . mysqli_error($dbconnection));
		while ($exam = mysqli_fetch_array($examothers,MYSQLI_ASSOC)){
			$code = $exam['code'];
		    $res_option=$exam['name'];
		
		
		 if($othertestresdate=='0000-00-00'){echo '';} else echo @date('d-M-y',strtotime($othertestresdate)); echo "</b> ";
		$code = $exam['code'];
       $drugcolumn=strtolower($name);
		
		
		
		
		}
		}
}
?></td>
					<?php echo"
</tr>


</table>

";
}
?></tr>
</table>
</div>
</div>
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
