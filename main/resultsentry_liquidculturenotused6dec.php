<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php
include("../includes/dbconfig.php");

if(isset($_POST['ressubmit_liquidculture'])){
	$test='CS';
$rescontdate=mysqli_real_escape_string($dbconnection,$_POST['rescontdate']); 
//if ($rescontdate!=''){$rescontdate=date('Y-m-d', strtotime($rescontdate));}
$id=mysqli_real_escape_string($dbconnection,$_POST['id']);
$reslabno=mysqli_real_escape_string($dbconnection,$_POST['reslabno']);
$resmedia=mysqli_real_escape_string($dbconnection,$_POST['resmedia']);
$resdtp=mysqli_real_escape_string($dbconnection,$_POST['result_dtp']);
$resznc=mysqli_real_escape_string($dbconnection,$_POST['result_znc']);
$resbap=mysqli_real_escape_string($dbconnection,$_POST['result_bap']);
$resdate=mysqli_real_escape_string($dbconnection,$_POST['resdate']); if ($resdate!=''){$resdate=date('Y-m-d', strtotime($resdate));}
$rescomment=mysqli_real_escape_string($dbconnection,$_POST['rescomment']);
$qned=mysqli_real_escape_string($dbconnection,$_POST['qned']);
$restech=strtoupper(mysqli_real_escape_string($dbconnection,$_POST['restech']));
$entrant=$_SESSION['name'];
$entrytime=date('Y-m-d H:i:s', time());

$sql="SELECT * FROM results_liquidculture WHERE labno='$reslabno' and media='$resmedia' and entrytime!='0000-00-00' ";
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

if (mysqli_num_rows($samples) > 0){
while ($sample = mysqli_fetch_array($samples)) {
$date=$sample['resdate'];
	$comment=$sample['comment'];
	$contdate=$sample['contdate'];
	$result_znc=$sample['result_znc'];
	$result_dtp=$sample['result_dtp'];
	$result_bap=$sample['result_bap'];
	//$comment2=$sample['comment2'];
	$tech=$sample['restech'];
	$oldentrant=$sample['entrant'];
	$oldentrydate=$sample['entrytime'];
	
	if($result_znc!=$resznc or $result_dtp!=$resdtp or $result_bap!=$resbap or $date!=$resdate 
	/*or $comment!=$rescomment*/
	or $tech!=$restech){
		$entrycorrected='yes';
		}
} /* Ending while */
$sql_history = "INSERT into results_liquidculture_hist  (labno,media,result_bap,result_znc,result_dtp,comment,resdate,restech,entrant,entrytime)
 values ('$reslabno','$resmedia','$resbap','$resznc','$resdtp','$comment','$date','$tech','$oldentrant','$oldentrydate')";
mysqli_query($dbconnection,$sql_history) or die("ERROR : " . mysqli_error($dbconnection));

}
if($qned=='yes' and $entrycorrected=='yes'){
$sql = "UPDATE results_liquidculture SET status='',result_dtp='$resdtp',result_znc='$resznc',result_bap='$resbap',comment='$rescomment',resdate='$resdate',restech='$restech',
entrant='$entrant',entrytime='$entrytime',reviewer='',reviewdate='' WHERE labno=$reslabno and media='$resmedia'";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
}
else{
	$sql = "UPDATE results_liquidculture SET result_dtp='$resdtp',result_znc='$resznc',result_bap='$resbap',comment='$rescomment',resdate='$resdate',restech='$restech',
entrant='$entrant',entrytime='$entrytime',reviewer='',reviewdate='' WHERE labno=$reslabno and media='$resmedia'";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

}
if(($resdtp=='Contaminated' OR $resznc=='Contaminated' OR $resbap=='Contaminated' ) AND $rescontdate=='0000-00-00'){
mysqli_query($dbconnection,"UPDATE results_liquidculture SET contdate='$resdate' WHERE labno=$reslabno and media='$resmedia'") or die("ERROR : " . mysql_error());
}

$nextrows=mysqli_query($dbconnection,"SELECT * FROM results_liquidculture WHERE id>$id and restech='' ORDER BY id LIMIT 1");
while ($nextrow = mysqli_fetch_array($nextrows,MYSQLI_ASSOC)) {
$newlabno = $nextrow['labno'];
$newmedia = $nextrow['media'];
}
//echo "corrected is $entrycorrected and qned is $qned";
header("location:?ressubmit=yes&&findlabno=".$newlabno."&&findmedia=".$newmedia);
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

<?php
if(isset($_GET['findlabno'])){
@$labno=$_GET['findlabno'];

include("../includes/dbconfig.php");

if($labno==''){
echo "<script>
alert('Please search a valid Lab No');
location.href='resultsentry_liquidculture.php'
</script> ";
}

if(isset($_GET['media'])){
@$media=$_GET['media'];
$sql="SELECT * FROM results_liquidculture WHERE labno='$labno' and media='$media'";
}
else {
$sql="SELECT * FROM results_liquidculture WHERE labno='$labno'";
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
	$id = $sample['id'];
	$labno = $sample['labno'];
	$select_sc="SELECT * FROM samples WHERE labno=$labno";
			$scs=mysqli_query($dbconnection,$select_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($sc = mysqli_fetch_array($scs,MYSQLI_ASSOC)) {
				$studycode = $sc['studycode'];		
			}
			$contdate=$sample['contdate'];
	$result=$sample['restech'];
	$media=$sample['media'];
	$date=$sample['resdate'];
	$comment=$sample['comment'];
	$result_dtp=$sample['result_dtp'];
	$result_znc=$sample['result_znc'];
	$result_bap=$sample['result_bap'];
	$tech=$sample['restech'];
	$entrant=$sample['entrant'];
	$entrytime=$sample['entrytime'];
} 
}
else{
echo "<script>
alert('Lab No $labno is not registered for Liquid culture');
location.href='resultsentry_liquidculture.php'
</script> ";
}
include("../includes/dbconfig.php");

if($multsample!='true'){
@$nextrows=mysqli_query($dbconnection,"SELECT * FROM results_liquidculture WHERE id>$id ORDER BY id LIMIT 1");
while ($nextrow = mysqli_fetch_array($nextrows,MYSQLI_ASSOC)) {
@$nextlabno = $nextrow['labno'];
@$nextmedia = $nextrow['media'];
}

@$prevrows=mysqli_query($dbconnection,"SELECT * FROM results_liquidculture WHERE id<$id ORDER BY id DESC LIMIT 1");
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
<fieldset class="scheduler-border"><legend  class="scheduler-border" ><b>LIQUID CULTURE  RESULTS ENTRY- SAMPLE SEARCH</b></legend>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" name="formfindsample"  autocomplete="off">
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
<input type="button" value="<<PREVIOUS" class="form-control btn-success" onclick="location.href='resultsentry_liquidculture.php?findlabno=<?php echo @$prevlabno;?>&&media=<?php echo @$prevmedia;?>'">
</div>
<div class="col-md-2">
<input type="button"  value="NEXT>>" class="form-control btn-info" onclick="location.href='resultsentry_liquidculture.php?findlabno=<?php echo @$nextlabno;?>&&media=<?php echo @$nextmedia;?>'">
</div>
</div>
</div></form>
</fieldset>

<?php if(isset($_GET['findlabno'])){ ?>
<?php
if($multsample=='true'){
		echo "<h3><b>"."SEARCH RESULTS FOR LAB NO $studycode-$labno"."</b></h2>"."<br>";
         echo "<b>Media</b>&emsp;&emsp;";
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
	echo "<a href='?findlabno=$labno&&media=$media'><b> $media </b>&emsp;</a>";
	//echo "<a href='?findlabno=$labno&&media=$media'><b>Lab No:$studycode-$labno Media:$media </b>&emsp;</a>";
}
	//echo"am here sir";
	
}else{
?>
<fieldset class="scheduler-border"><legend class="scheduler-border"><b><font size='6em'>
 LAB NO <font color='red'><?php echo $studycode .' - '. @$labno;?></font></font></b></legend>

<div style='background-color:white; '>
<form action="" class="form-control" method="POST" id="example-1-form" onsubmit="leave()" autocomplete='off'>
<input type="hidden" name="id" value="<?php echo $id;?>" />

<div class="form-horizontal">
<div class="form-group">

<b class="col-sm-6">LIQUID CULTURE</b>
</div>

<input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>


<div class="form-group">
<input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
<?php if(isset($_GET['qnd'])){
	$qnd=$_GET['qnd']; 
	?>
<input name="qned" type="hidden" value="<?php echo $qnd;?>"/>
<?php }  ?>

<label class="col-sm-4 control-label label-format" >MEDIA:</label>
<div class="col-sm-8">
	<select name="resmedia"  class="form-control">
			<option value="<?php echo $media;?>"><?php echo $media;?></option>
	</select>
</div>
</div>
<div class="form-group">
   <input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
   <label class="col-sm-4 control-label label-format" >DAYS TO POSITIVE:</label>
   <div class="col-sm-8">
   <input type="text" name="result_dtp" list="res_dtp_list" value="<?php echo $result_dtp;?>" class="form-control">
   <datalist id="res_dtp_list">
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM resultsoptions_liquidculture ORDER BY options";
			$options=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($option = mysqli_fetch_array($options,MYSQLI_ASSOC)) {
				$liquidcultureoption = $option['options'];
				$liquidculturecode= $option['code'];
				
			echo "<option value='$liquidculturecode' style='background-color:#CCCCCC;'>$liquidcultureoption</option>";	
			}			
			?>
	</datalist>

   
   </div>
</div>
<div class="form-group">
   <input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
   <label class="col-sm-4 control-label label-format" >ZN CULTURE:</label>
  <div class="col-sm-8">
  <select name="result_znc"  class="form-control">
			<option value="<?php echo $result_znc;?>"><?php echo $result_znc;?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM resultsoptions_liquidculture ORDER BY options";
			$options=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($option = mysqli_fetch_array($options,MYSQLI_ASSOC)) {
				$liquidcultureoption = $option['options'];
				$liquidculturecode= $option['code'];
				
			echo "<option value='$liquidculturecode' style='background-color:#CCCCCC;'>$liquidcultureoption</option>";	
			}			
			?>
	</select>
  
   </div>
</div>
<div class="form-group">
   <input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
   <label class="col-sm-4 control-label label-format" >BLOOD AGAR PLATE:</label>
  <div class="col-sm-8">
  <select name="result_bap"  class="form-control">
			<option value="<?php echo $result_bap;?>"><?php echo $result_bap;?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM resultsoptions_liquidculture ORDER BY options";
			$options=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($option = mysqli_fetch_array($options,MYSQLI_ASSOC)) {
				$liquidcultureoption = $option['options'];
				$liquidculturecode= $option['code'];
				
			echo "<option value='$liquidculturecode' style='background-color:#CCCCCC;'>$liquidcultureoption</option>";	
			}			
			?>
	</select>
  
   </div>
</div>


<div class="form-group">	
<label class="col-sm-4 control-label label-format">DATE:</label>
      <div class="col-sm-8"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input14" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($date=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($date));?>"  readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input14" value="<?php if($date=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($date));?>"  name="resdate" />
				</div>



</div>
<div class="form-group">
<label class="col-sm-4 control-label label-format">COMMENT:</label>
<div class="col-sm-8">
<input type="text" list="rescomment" value="<?php echo $comment;?>" name="rescomment" class="form-control">
<datalist id="rescomment">
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM comments ORDER BY comment";
			$comments=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($comment = mysqli_fetch_array($comments,MYSQLI_ASSOC)) {
				$commentname = $comment['comment'];
			echo "<option value='$commentname' style='background-color:#CCCCCC;'>$commentname</option>";	
			}			
			?>
</datalist>
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
<label class="col-sm-4 control-label label-format">CONT DATE:</label>
<div class="col-sm-8 control-label">
<?php if($contdate=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($contdate)); ?>
<input type="hidden" name="rescontdate" value="<?php echo $contdate;?>"  />
</div>
</div>
	<div class="form-group">
	<label class="col-sm-2 control-label label-format">ENTRANT:</label> 
	<div class="col-sm-3"> <?php echo $entrant;?>
	</div>
	<label class="col-sm-3 control-label label-format">ENTRY TIME:</label> 
	<div class="col-sm-3"><?php if($entrytime=='0000-00-00'){echo '';} else echo date('d-m-Y H:i:s',strtotime($entrytime));?>
	</div>
	</div>
	<?php 
include("../includes/dbconfig.php");
$sqlcheckpresence="SELECT * FROM results_identification WHERE labno='$labno' and test='LS' and media='$media' and entrytime!='0000-00-00 00:00:00'";
$presence=mysqli_query($dbconnection,$sqlcheckpresence) or die("ERROR : " . mysqli_error($dbconnection));

if (mysqli_num_rows($presence)> 0){
require_once 'identification_exists.php';
}
else{
	require_once 'identification_request.php';
}
?>

	<div class="form-group">
	<div class="col-sm-5"> 
	</div>
	 <div class="col-sm-2"> 
<input type="submit" class="btn btn-success" name="ressubmit_liquidculture" value="SAVE" >
</div>
</div>
</div>
</form>
</div>

</fieldset>
<?php } 
}?>

<br>
</div>

<div class="col-md-6" style='background-color:white;'>

<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_liquidculture WHERE restech=''";
$emptyresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalempty=mysqlI_num_rows($emptyresults);	
if($totalempty>0){		
?>
<div id="" style='font-size:0.9em;  border:; max-height:100px; width:; margin-right:; padding:; overflow:scroll;'>
<h4><b>PENDING LIQUID CULTURE RESULTS</b></h4>

This is a list of pending LIQUID CULTURE results. [TOTAL = <?php echo $totalempty;?>]<br>

<?php
while ($emptyresult = mysqli_fetch_array($emptyresults,MYSQLI_ASSOC)) {
	$emptylabno = $emptyresult['labno'];
	$emptymedia = $emptyresult['media'];
	$select_empty_sc="SELECT * FROM samples WHERE labno=$emptylabno ";
			$empty_scs=mysqli_query($dbconnection,$select_empty_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($empty_sc = mysqli_fetch_array($empty_scs,MYSQLI_ASSOC)) {
				$emptystudycode = $empty_sc['studycode'];
			}
	echo "<a href='?findlabno=$emptylabno&&media=$emptymedia'>$emptystudycode-$emptylabno</a> &emsp;";
}
?></div>
<?php
}			
?>

<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_liquidculture WHERE status='Rejected'";
$questionedresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalquestioned=mysqlI_num_rows($questionedresults);	
if($totalquestioned>0)	{		
?>
<div id="" style='font-size:0.9em;  border:; max-height:100px; width:; margin-right:; padding:; overflow:scroll;'>
<h4><b>QUESTIONED  LIQUID CULTURE RESULTS</b></h4>
This is a list of Questioned  LIQUID CULTURE results. [TOTAL = <?php echo $totalquestioned;?>]<br>

<?php
while ($questionedresult = mysqli_fetch_array($questionedresults,MYSQLI_ASSOC)) {
	$questioned_labno = $questionedresult['labno'];
	$questioned_media = $questionedresult['media'];
	$select_questioned_sc="SELECT * FROM samples WHERE labno=$questioned_labno";
			$questioned_scs=mysqli_query($dbconnection,$select_questioned_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($questioned_sc = mysqli_fetch_array($questioned_scs,MYSQLI_ASSOC)) {
				$questionablecode = $questioned_sc['studycode'];
			}
	echo "<a href='?qnd=yes&&findlabno=$questioned_labno&&media=$questioned_media'>$questionablecode-$questioned_labno &emsp;</a>";
		//echo "<a href='resultsreview_zn.php?findlabno=$emptylabno'>$emptylabno-$emptystudycode</br></a>";
}?>
</div><?php		
}	
?>


<?PHP if((isset($_GET['findlabno'])) and (isset($_GET['media']))) {

@$media=$_GET['media'];
@$labno=$_GET['findlabno'];
?>

<?php

include("../includes/dbconfig.php");

$sql="SELECT * FROM results_liquidculture_hist where labno=$labno and media='$media' ORDER BY id DESC ";
$hists=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$hist_count=mysqlI_num_rows($hists);
if($hist_count>0){ 
$select_hist_sc="SELECT * FROM samples WHERE labno=$labno";
$hist_scs=mysqli_query($dbconnection,$select_hist_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($hist_sc = mysqli_fetch_array($hist_scs,MYSQLI_ASSOC)) {
				$histcode = $hist_sc['studycode'];
			} ?>
			<h4><b>RESULT EDIT HISTORY FOR LABNO <?php echo "$histcode-$labno  <font color='red'>[Total Edits=$hist_count]</font>" ?></b></h4>

	<div id="" style='font-size:0.9em; background-color:white; border:; max-height:200px; width:; margin-right:; padding:; overflow:scroll;'>

<div class="table-responsive">
<table  border="1" class="table">
<tr align='left'><th>Result BAP</th><th>Result ZNC</th><th>Result DTP</th><th>Resdate</th><th>Comment</th><th>Entrant</th>
<th>Res Tech</th>
<th>Entry Time</th><th>Modified Time </th>

</tr>

<?php

while ($hist = mysqli_fetch_array($hists,MYSQLI_ASSOC)) {
$histid = $hist['id'];
$histresbap= $hist['result_bap'];
$histresznc= $hist['result_znc'];
$histresdtp= $hist['result_dtp'];
$histcomment = $hist['comment'];
$histresdate = $hist['resdate'];
$histentrant = $hist['entrant'];
$histtech = $hist['restech'];
$histlabno= $hist['labno'];
$histentrytime=$hist['entrytime'];
$histmodifiedtime=$hist['modified_time'];

//Inserting titles to tds		
echo "<tr class='accessionrow'  align='left' title='$histlabno '>

<td>$histresbap</td>
<td>$histresznc</td>
<td>$histresdtp</td>
<td>$histresdate</td>
<td>$histcomment</td>
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
<?PHP }
} ?>

</div>

</div>
</div>
 
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>
</div>

<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>
<script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>
</div>

</body>
</html>