<?php 
ob_start();
include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php
//$res_table='results_bloodculture';

include("../includes/dbconfig.php");
if(isset($_POST['ressubmit_bloodculture'])){
$id=mysqli_real_escape_string($dbconnection,$_POST['id']);
$reslabno=mysqli_real_escape_string($dbconnection,$_POST['reslabno']);
$resmedia=mysqli_real_escape_string($dbconnection,$_POST['resmedia']);
$resdate=mysqli_real_escape_string($dbconnection,$_POST['resdate']); if ($resdate!=''){$resdate=date('Y-m-d', strtotime($resdate));}
$rescontdate=mysqli_real_escape_string($dbconnection,$_POST['rescontdate']); if ($rescontdate!=''){$rescontdate=date('Y-m-d', strtotime($rescontdate));}
$rescomment=mysqli_real_escape_string($dbconnection,$_POST['rescomment']);
$res=mysqli_real_escape_string($dbconnection,$_POST['rescomment']);
$resql=mysqli_real_escape_string($dbconnection,$_POST['result_ql']);
$ressqt=mysqli_real_escape_string($dbconnection,$_POST['result_sqt']);
$resqt=mysqli_real_escape_string($dbconnection,$_POST['result_qt']);
$qned=mysqli_real_escape_string($dbconnection,$_POST['qned']);
$restech=mysqli_real_escape_string($dbconnection,$_POST['restech']);
$restech=strtoupper(mysqli_real_escape_string($dbconnection,$_POST['restech']));
$entrant=$_SESSION['name'];
//date_default_timezone_set("Africa/Nairobi");
$entrydate=date('Y-m-d H:i:s', time());

//================Handling Culture Results Interpretation=====================
$rescultureinterpretation=mysqli_real_escape_string($dbconnection,$_POST['rescultureinterpretation']);

$check_interpretation_presence=mysqli_query($dbconnection,"SELECT * FROM results_culture_interpretation WHERE labno=$reslabno") or die("ERROR : " . mysqli_error($dbconnection));
@$interpretation_count=mysqli_num_rows($check_interpretation_presence);

if($interpretation_count==0){
	mysqli_query($dbconnection,"INSERT INTO results_culture_interpretation(labno,result,entrant,entrytime) 
	VALUES('$reslabno','$rescultureinterpretation','$entrant','$entrytime')") or die("ERROR : " . mysqli_error($dbconnection));
}
else{
	mysqli_query($dbconnection,"UPDATE results_culture_interpretation SET result='$rescultureinterpretation', entrant='$entrant', entrytime='$entrytime' 
	WHERE labno='$reslabno'") or die("ERROR : " . mysqli_error($dbconnection));
}
//============================================================================

$sql="SELECT * FROM results_bloodculture WHERE id='$id'  and entrytime!='0000-00-00 00:00:00' ";
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

if (mysqli_num_rows($samples) > 0){
while ($sample = mysqli_fetch_array($samples)) {
$date=$sample['resdate'];
	$comment=$sample['comment'];
	$contdate=$sample['contdate'];
	$result_ql=$sample['result_ql'];
	$result_sqt=$sample['result_sqt'];
	$result_qt=$sample['result_qt'];
	//$comment2=$sample['comment2'];
	$tech=$sample['restech'];
	$oldentrant=$sample['entrant'];
	$oldentrydate=$sample['entrytime'];
	
if($result_ql!=$resql or $result_qt!=$resqt or $result_sqt!=$ressqt or $date!=$resdate or $comment!=$rescomment or $tech!=$restech){
		$entrycorrected='yes';
		}
} /* Ending while */

$sql_history = "INSERT into results_bloodculture_hist  (labno,media,result_ql,result_qt,result_sqt,comment,resdate,restech,entrant,entrytime)
 values ('$reslabno','$resmedia','$result_ql','$result_qt','$result_sqt','$comment','$date','$tech','$oldentrant','$oldentrydate')";
mysqli_query($dbconnection,$sql_history) or die("ERROR : " . mysqli_error($dbconnection));
}
if(@$qned=='yes' and @$entrycorrected=='yes'){
$sql = "UPDATE results_bloodculture SET status='',result_ql='$resql',result_sqt='$ressqt',result_qt='$resqt',comment='$rescomment',resdate='$resdate',restech='$restech',
entrant='$entrant',entrytime='$entrydate',reviewer='',reviewdate='',status='' WHERE labno=$reslabno and media='$resmedia'";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
}
else{
	$sql = "UPDATE results_bloodculture SET result_ql='$resql',result_sqt='$ressqt',result_qt='$resqt',comment='$rescomment',resdate='$resdate',restech='$restech',
entrant='$entrant',entrytime='$entrydate',reviewer='',reviewdate='' WHERE labno=$reslabno and media='$resmedia'";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

}
if(($ressqt=='Contaminated' OR $resqt=='Contaminated' ) AND $rescontdate==''){
mysql_query("UPDATE results_bloodculture SET contdate='$resdate' WHERE labno=$reslabno and media='$resmedia'") or die("ERROR : " . mysql_error());
}

$nextrows=mysqli_query($dbconnection,"SELECT * FROM results_bloodculture WHERE id>$id and restech=''  ORDER BY id LIMIT 1");
while ($nextrow = mysqli_fetch_array($nextrows,MYSQLI_ASSOC)) {
$newlabno = $nextrow['labno'];
$newmedia = $nextrow['media'];
}
header("location:?ressubmit=yes&&findlabno=".$newlabno."&&media=".$newmedia);
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
<div class="row">

<?PHP if(isset($_GET['findlabno'])){?> 
<?php
@$labno=$_GET['findlabno'];
include("../includes/dbconfig.php");
if($labno==''){
echo "<script>
alert('Please Search A valid Lab No');
location.href='resultsentry_bloodculture.php'
</script> ";
}
if(isset($_GET['media'])){
@$media=$_GET['media'];
$sql="SELECT * FROM results_bloodculture WHERE labno='$labno' and media='$media'";
}
else {
$sql="SELECT * FROM results_bloodculture WHERE labno='$labno' ORDER BY id";
}
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$countsamples=mysqli_num_rows($samples);
if ($countsamples>1){
	@$multsample='true';

	$select_sc="SELECT * FROM samples WHERE labno=$labno";
			$scs=mysqli_query($dbconnection,$select_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($sc = mysqli_fetch_array($scs,MYSQLI_ASSOC)) {
				$studycode = $sc['studycode'];	
			}
}else if ($countsamples==1){
	@$multsample='false';	
while ($sample = mysqli_fetch_array($samples)) {
	$labno = $sample['labno'];
	$id = $sample['id'];
	$select_sc="SELECT * FROM samples WHERE labno=$labno";
			$scs=mysqli_query($dbconnection,$select_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($sc = mysqli_fetch_array($scs,MYSQLI_ASSOC)) {
				$studycode = $sc['studycode'];		
			}
			//$rejectreason=$sample['rejreason'];
	$result=$sample['restech'];
	$media=$sample['media'];
	$date=$sample['resdate'];
	$comment=$sample['comment'];
	$contdate=$sample['contdate'];
	$result_ql=$sample['result_ql'];
	$result_sqt=$sample['result_sqt'];
	$result_qt=$sample['result_qt'];
	//$comment2=$sample['comment2'];
	$tech=$sample['restech'];
	$entrant=$sample['entrant'];
	$entrydate=$sample['entrytime'];
} /* Ending while */
} /* Ending if */

else{
echo "<script>
alert('There is no Liquid Cultureresult for Lab No $labno.');
location.href='resultsentry_bloodculture.php'
</script> ";
}


include("../includes/dbconfig.php");
if($multsample!='true'){
@$nextrows=mysqli_query($dbconnection,"SELECT * FROM results_bloodculture WHERE id>$id ORDER BY id LIMIT 1");
while ($nextrow = mysqli_fetch_array($nextrows,MYSQLI_ASSOC)) {
@$nextlabno = $nextrow['labno'];
@$nextmedia = $nextrow['media'];
}

@$prevrows=mysqli_query($dbconnection,"SELECT * FROM results_bloodculture WHERE id<$id ORDER BY id DESC LIMIT 1");
while ($prevrow = mysqli_fetch_array($prevrows,MYSQLI_ASSOC)) {
@$prevlabno = $prevrow['labno'];
@$prevmedia = $prevrow['media'];

}
}
}
?>
<?php
if(isset($_GET['ressubmit'])){
if($_GET['ressubmit']=='yes'){ 
echo "<div id='successmessage' style='border-radius:5px; box-shadow:0px 3px 7px 0px #1d3b53; background-color:green; border:1px green solid;position:absolute; z-index:20; top:0px; left:0px; margin:20px; padding:20px; min-height:;'><center><font color='white'>Results Entry was Successsful</font></center></div>";
}
}
?>
<div class="col-md-6">

<fieldset class="scheduler-border"><legend  class="scheduler-border" ><b>BLOOD CULTURE  RESULTS ENTRY- SAMPLE SEARCH</b></legend>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" name="formfindsample" onsubmit="return validateformfindsample();" autocomplete="off">
<div class="form-horizontal">
<div class="form-group"> 
<div class="col-md-2">
<label>LAB NO</label>:
</div>
<div class="col-md-3">
<input name="findlabno" class="form-control" type="text" placeholder="Search LAB NO" />
</div>
<div class="col-md-2">
<input type="submit"  name="findsample" class="form-control btn-primary" value="FIND" title="" style="height:30px; width:100px; background-color:;">
</div>
<div class="col-md-3">
<input type="button" value="<<PREVIOUS" class="form-control btn-success" onclick="location.href='resultsentry_bloodculture.php?findlabno=<?php echo @$prevlabno;?>&&media=<?php echo @$prevmedia;?>'">
</div>
<div class="col-md-2">
<input type="button" value="NEXT>>" class="form-control btn-info" onclick="location.href='resultsentry_bloodculture.php?findlabno=<?php echo @$nextlabno;?>&&media=<?php echo @$nextmedia;?>'">
</div>
</div>
</div></form>
</fieldset>

<?PHP if(isset($_GET['findlabno'])){
	
$culture_interpretations = mysqli_query($dbconnection,"SELECT * FROM results_culture_interpretation WHERE labno='$labno'") or die("ERROR : " . mysqli_error($dbconnection));
while ($culture_interpretation = mysqli_fetch_array($culture_interpretations,MYSQLI_ASSOC)) {
				$culture_interpretation_result = $culture_interpretation['result'];	
}
 
if($multsample=='true'){
		echo "<h3><b>"."SEARCH RESULTS FOR LAB NO $studycode-$labno"."</b></h2>"."<br>";
echo "<b>MEDIA </b>:&emsp;";
		while ($sample = mysqli_fetch_array($samples)) {
	$labno = $sample['labno'];
	$id = $sample['id'];
	$select_sc="SELECT * FROM samples WHERE labno=$labno";
			$scs=mysqli_query($dbconnection,$select_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($sc = mysqli_fetch_array($scs,MYSQLI_ASSOC)) {
				$studycode = $sc['studycode'];		
				
			}
	$result=$sample['labno'];
	$media=$sample['media'];
	echo "<a href='?findlabno=$labno&&media=$media'>$media&emsp;</a>";
}
	//echo"am here sir";
	
}
else{


?>
 
 <fieldset class="scheduler-border"><legend class="scheduler-border"><b>
 <font size='6em'>LAB NO <a href='#' title="Click to view request details"><font color='red'><u><?php echo @$studycode .'-'.$labno ;?></u></font></a></font></b></legend>

<div style='background-color:white; '>
<form action="" class="form-control" method="POST" id="example-1-form" onsubmit="leave()" autocomplete='off'>
<div class="form-horizontal">
<div class="form-group">

<b class="col-sm-6">BLOOD CULTURE</b>
</div>

<input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
<input type="hidden" name="id" value="<?php echo $id;?>" />
<div class="form-group">
<input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
<?php if(isset($_GET['qnd'])){
	$qnd=$_GET['qnd']; 
	?>
<input name="qned" type="hidden" value="<?php echo $qnd;?>"/>
<div class="form-group">
<label class="col-sm-3 control-label label-format" >REJECTION REASON:</label>
<div class="col-sm-4">
 <?php echo '<b>'.'<font color="red">'.$rejectreason.'</font>'.'</b>';
 ?>
</div>

</div>
<?php }  ?>

<label class="col-sm-4 control-label label-format" >MEDIA:</label>
<div class="col-sm-8">
	<?php echo $media;?> <input type='hidden' name='resmedia' value='<?php echo $media;?>'>
</div>
</div>
<div class="form-group">
   <input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
   <label class="col-sm-4 control-label label-format" >RESULT QUALITATIVE:</label>
   <div class="col-sm-8">
   <select name="result_ql"  class="form-control">
			<option value="<?php echo $result_sqt;?>"><?php echo $result_ql;?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM resultsoptions_bloodculture ORDER BY options";
			$options=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($option = mysqli_fetch_array($options,MYSQLI_ASSOC)) {
				$bloodcultureoption = $option['options'];
				$bloodculturecode= $option['code'];
				
			echo "<option value='$bloodculturecode' style='background-color:#CCCCCC;'>$bloodcultureoption</option>";	
			}			
			?>
	</select>
   
   </div>
</div>
<div class="form-group">
   <input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
   <label class="col-sm-4 control-label label-format" >RESULT SEMI-QUANTITATIVE:</label>
  <div class="col-sm-8">
  <select name="result_sqt"  class="form-control">
			<option value="<?php echo $result_sqt;?>"><?php echo $result_sqt;?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM resultsoptions_bloodculture ORDER BY options";
			$options=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($option = mysqli_fetch_array($options,MYSQLI_ASSOC)) {
				$bloodcultureoption = $option['options'];
				$bloodculturecode= $option['code'];
				
			echo "<option value='$bloodculturecode' style='background-color:#CCCCCC;'>$bloodcultureoption</option>";	
			}			
			?>
	</select>
  
   </div>
</div>
<div class="form-group">
   <input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
   <label class="col-sm-4 control-label label-format" >RESULT QUANTITATIVE:</label>
  <div class="col-sm-8">
  <select name="result_qt"  class="form-control">
			<option value="<?php echo $result_qt;?>"><?php echo $result_qt;?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM resultsoptions_bloodculture ORDER BY options";
			$options=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($option = mysqli_fetch_array($options,MYSQLI_ASSOC)) {
				$bloodcultureoption = $option['options'];
				$bloodculturecode= $option['code'];
				
			echo "<option value='$bloodculturecode' style='background-color:#CCCCCC;'>$bloodcultureoption</option>";	
			}			
			?>
	</select>
  
   </div>
</div>


<div class="form-group">	
<label class="col-sm-4 control-label label-format">DATE:</label>
      <div class="col-sm-8"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input14" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($date=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($date));?>" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input14" value="<?php if($date=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($date));?>" name="resdate" />
				</div>



</div>
<div class="form-group">
<label class="col-sm-4 control-label label-format">COMMENT:</label>
<div class="col-sm-8">
<select name="rescomment" class="form-control">
			<option value="<?php echo $comment;?>"><?php echo $comment;?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM comments ORDER BY comment";
			$comments=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($comment = mysqli_fetch_array($comments,MYSQLI_ASSOC)) {
				$commentname = $comment['comment'];
			echo "<option value='$commentname' style='background-color:#CCCCCC;'>$commentname</option>";	
			}			
			?>
	</select>
	</div>
	</div>
	
<div class="form-group">
<label class="col-sm-4 control-label label-format">TECH:</label>
<div class="col-sm-8">
	<select name="restech" class="form-control">
			<option value="<?php echo $tech;?>" style='background-color:#CCCCCC;'><?php echo $tech;?></option>
			
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM techinitials ORDER BY initial";
			$techs=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($tech = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
				$techinitial = $tech['initial'];
				$techname = $tech['name'];
			echo "<option value='$techinitial' style='background-color:#CCCCCC;'>$techinitial - $techname</option>";	
			}			

			?>
	</select>
	</div>
</div>

<div class="form-group">
<label class="col-sm-6 control-label label-format">OVERALL CULTURE INTERPRETATION:</label>
<div class="col-sm-6">
	<select name="rescultureinterpretation" class="form-control">
			<option value="<?php echo @$culture_interpretation_result; ?>"><?php echo @$culture_interpretation_result; ?></option>
			<option value=""></option>
			<option value="Negative">Negative</option>
			<option value="Positive">Positive</option>
	</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label label-format">CONT DATE:</label>
<div class="col-sm-8">
<?php if($contdate=='0000-00-00'){echo '--';} else echo @date('d-m-Y',strtotime($contdate)); ?>
<input type="hidden" name="rescontdate" value="<?php echo $contdate;?>"  />
</div>
</div>

	<div class="form-group">
	<label class="col-sm-2 control-label label-format">ENTRANT:</label> 
	<div class="col-sm-3"> <?php echo $entrant;?>
	</div>
	<label class="col-sm-3 control-label label-format">ENTRY DATE:</label> 
	<div class="col-sm-3"><?php if($entrydate=='0000-00-00'){echo '';} else echo date('d-m-Y H:i:s',strtotime($entrydate));?>
	</div>
	</div>
	<div class="form-group">
	<div class="col-sm-5"> 
	</div>
	 <div class="col-sm-2"> 
<input type="submit" class="btn btn-success" name="ressubmit_bloodculture" value="SAVE" >
</div>
</div>
</div>
</form>
</div>

</fieldset>

<?php } 
}
?>
</div>
<div class="col-md-6" style='background-color:white;'>

<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_bloodculture WHERE restech=''  order by labno asc";
$emptyresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalempty=mysqlI_num_rows($emptyresults);		

?>
<div id="" style='font-size:0.9em;  max-height:100px; width:; margin-right:; padding:; overflow:scroll;'>
<h4><b>PENDING BLOOD CULTURE RESULTS</b></h4>
This is a list of pending BLOOD CULTURE results. [TOTAL = <?php echo $totalempty;?>]<br>

<?php
while ($emptyresult = mysqli_fetch_array($emptyresults,MYSQLI_ASSOC)) {
	$emptylabno = $emptyresult['labno'];
	$emptymedia = $emptyresult['media'];
	$select_empty_sc="SELECT * FROM samples WHERE labno=$emptylabno";
			$empty_scs=mysqli_query($dbconnection,$select_empty_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($empty_sc = mysqli_fetch_array($empty_scs,MYSQLI_ASSOC)) {
				$emptystudycode = $empty_sc['studycode'];
			}
			echo "<a href='?findlabno=$emptylabno&&media=$emptymedia'>$emptystudycode-$emptylabno ($emptymedia)&emsp;</a>";
	//echo "<a href='?findlabno=$emptylabno'>$emptystudycode-$emptylabno &emsp;</a>";
		//echo "<a href='resultsentry_zn.php?findlabno=$emptylabno'>$emptylabno-$emptystudycode</br></a>";
} ?></div>
<br>
<?php

include("../includes/dbconfig.php");
$sql="SELECT * FROM results_bloodculture WHERE status='Rejected'";
$questionedresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalquestioned=mysqlI_num_rows($questionedresults);	
if($totalquestioned>0)	{		
?>		
<h4><b>QUESTIONED  BLOOD CULTURE RESULTS</b></h4>
<div id="" style='font-size:0.9em;  border:; max-height:100px; width:; margin-right:; padding:; overflow:scroll;'>

This is a list of Questioned  BLOOD CULTURE results. [TOTAL = <?php echo $totalquestioned;?>]<br>

<?php
while ($questionedresult = mysqli_fetch_array($questionedresults,MYSQLI_ASSOC)) {
	$questioned_labno = $questionedresult['labno'];
	$questioned_media = $questionedresult['media'];
	$select_questioned_sc="SELECT * FROM samples WHERE labno=$questioned_labno";
			$questioned_scs=mysqli_query($dbconnection,$select_questioned_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($questioned_sc = mysqli_fetch_array($questioned_scs,MYSQLI_ASSOC)) {
				$questionablecode = $questioned_sc['studycode'];
			}
	echo "<a href='?qnd=yes&&findlabno=$questioned_labno&&media=$questioned_media'>$questionablecode-$questioned_labno($questioned_media ) &emsp;</a>";		
	//echo "<a href='?findlabno=$questioned_labno'>$questionablecode-$questioned_labno &emsp;</a>";
		//echo "<a href='resultsreview_zn.php?findlabno=$emptylabno'>$emptylabno-$emptystudycode</br></a>";
}
?> </div> <?php		
}	
?>


<?PHP if((isset($_GET['findlabno'])) ) {

@$media=$_GET['media'];
@$labno=$_GET['findlabno'];

include("../includes/dbconfig.php");

$sql="SELECT * FROM results_bloodculture_hist where labno=$labno ORDER BY id DESC ";
$hists=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$hist_count=mysqlI_num_rows($hists);
if($hist_count>0){ 
$select_hist_sc="SELECT * FROM samples WHERE labno=$labno";
$hist_scs=mysqli_query($dbconnection,$select_hist_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($hist_sc = mysqli_fetch_array($hist_scs,MYSQLI_ASSOC)) {
				$histcode = $hist_sc['studycode'];
			} ?>
	<div id="" style='font-size:0.9em; background-color:white; border:; max-height:200px; width:; margin-right:; padding:; overflow:scroll;'>
<h4><b>RESULT EDIT HISTORY FOR LABNO <?php echo "$histcode-$labno" ?></b></h4>
<div class="table-responsive">
<table  border="1" class="table">
<tr align='left'><th>Labno</th><th>Result_Ql</th><th>Result_Sqt</th><th>Result_Qt</th><th>Resdate</th><th>Comment</th><th>Entrant</th>
<th>Res Tech</th>
<th>Entry Time</th><th>Modified Time </th>

</tr>

<?php

while ($hist = mysqli_fetch_array($hists,MYSQLI_ASSOC)) {
$histid = $hist['id'];
$histlabno= $hist['labno'];
$histresult_ql=$hist['result_ql'];
	$histresult_sqt=$hist['result_sqt'];
	$histresult_qt=$hist['result_qt'];
$histcomment = $hist['comment'];
$histresdate = $hist['resdate'];
$histentrant = $hist['entrant'];
$histtech = $hist['restech'];


$histentrytime=$hist['entrytime'];
$histmodifiedtime=$hist['modified_time'];

//Inserting titles to tds		
echo "<tr class='accessionrow'  align='left' title='$histlabno '>
<td>$histlabno</td>
<td>$histresult_qt</td>
<td>$histresult_sqt</td>
<td>$histresult_ql</td>
<td>$histresdate</td>
<td>$histentrant</td>
<td>$histtech</td>
<td>$histentrant</td> 
<td>$histentrytime</td>
<td>$histmodifiedtime</td>
</tr>";
}
echo "</table>";					
?>
</div>
</div>
<?php  
}
}
?>

</div>


</div>
</div>
 </div>
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>


<div id="footer" class='row'> 
<?php include("../includes/footer.php"); 
ob_end_flush();?>
</div>
<script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>
</div>

</body>
</html>