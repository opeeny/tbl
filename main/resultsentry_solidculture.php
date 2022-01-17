<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php
//$res_table='results_solidculture';

$test='CS';
include("../includes/dbconfig.php");
if(isset($_POST['ressubmit_solidculture'])){
$identific_test=mysqli_real_escape_string($dbconnection,$_POST['identific_test']);
$entrant=$_SESSION['name'];
$entrytime=date('Y-m-d H:i:s', time());

$id=mysqli_real_escape_string($dbconnection,$_POST['id']);
$reslabno=mysqli_real_escape_string($dbconnection,$_POST['reslabno']);
$resmedia=mysqli_real_escape_string($dbconnection,$_POST['resmedia']);
$resdate=mysqli_real_escape_string($dbconnection,$_POST['resdate']); if ($resdate!=''){$resdate=date('Y-m-d', strtotime($resdate));}
$rescontdate=mysqli_real_escape_string($dbconnection,$_POST['rescontdate']);
// if ($rescontdate!=''){$rescontdate=date('Y-m-d', strtotime($rescontdate));}
$rescomment=mysqli_real_escape_string($dbconnection,$_POST['rescomment']);
$res=mysqli_real_escape_string($dbconnection,$_POST['rescomment']);
$resql=mysqli_real_escape_string($dbconnection,$_POST['result_ql']);
$ressqt=mysqli_real_escape_string($dbconnection,$_POST['result_sqt']);
$resqt=mysqli_real_escape_string($dbconnection,$_POST['result_qt']);
$restech=mysqli_real_escape_string($dbconnection,$_POST['restech']);
$restech=strtoupper(mysqli_real_escape_string($dbconnection,$_POST['restech']));
$resinnoctime=mysqli_real_escape_string($dbconnection,$_POST['innoc_time']);
if($resinnoctime=='03:00:00' or $resinnoctime=='00:00:00'){$resinnoctime='';}
$resinnocdate=$_POST['innodate'];
//---IDENTIFICATION TEST HAS BEEN SHIFTED AS INDEPENDENT MODULE
/*
$idresult=mysqli_real_escape_string($dbconnection,$_POST['idresult']);
$idresdate=mysqli_real_escape_string($dbconnection,$_POST['idresdate']); 
$idrescomment=mysqli_real_escape_string($dbconnection,$_POST['idrescomment']);
$idmethod=mysqli_real_escape_string($dbconnection,$_POST['idmethod']);
$idrestech=strtoupper(mysqli_real_escape_string($dbconnection,$_POST['idrestech']));
*/
$entrytime=date('Y-m-d H:i:s', time());
$identrytime=date('Y-m-d H:i:s', time());

//================Handling Culture Results Interpretation=====================
$rescultureinterpretation=mysqli_real_escape_string($dbconnection,$_POST['rescultureinterpretation']);

$check_interpretation_presence=mysqli_query($dbconnection,"SELECT * FROM results_culture_interpretation WHERE labno=$reslabno") or die("ERROR : " . mysqli_error($dbconnection));
@$interpretation_count=mysqli_num_rows($check_interpretation_presence);

if($interpretation_count==0){
	mysqli_query($dbconnection,"INSERT INTO results_culture_interpretation(labno,result,entrant,entrytime) 
	VALUES('$reslabno','$rescultureinterpretation','$entrant','$entrytime')") or die("ERROR : " . mysqli_error($dbconnection));
}
else{
	mysqli_query($dbconnection,"UPDATE results_culture_interpretation
	SET result='$rescultureinterpretation', entrant='$entrant', entrytime='$entrytime' 
	WHERE labno='$reslabno'") or die("ERROR : " . mysqli_error($dbconnection));
}
//============================================================================

//=======HANDLING IF SOLID CULTURE TEST HAD BEN QUESTIONED
if(isset($_POST['qned'])){
	$qned=mysqli_real_escape_string($dbconnection,$_POST['qned']);
}
/*
if(isset($_POST['idqned'])){
	$idqned=mysqli_real_escape_string($dbconnection,$_POST['idqned']);
}
*/

//===CHECK IF LAB NO OF THE SAME TEST & MEDIA ALREAY EXISTS=======
$sql="SELECT * FROM results_solidculture WHERE labno='$reslabno' and media='$resmedia' and entrytime!='0000-00-00 00:00:00' ";
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
if (mysqli_num_rows($samples) > 0){
while ($sample = mysqli_fetch_array($samples)) {
$olddate=$sample['resdate'];
	$oldcomment=$sample['comment'];
	$oldcontdate=$sample['contdate'];
	$oldresql=$sample['result_ql'];
	$oldressqt=$sample['result_sqt'];
	$oldresqt=$sample['result_qt'];
	//$comment2=$sample['comment2'];
	$oldtech=$sample['restech'];
	//$oldtech=$sample['contdate'];
	$oldentrant=$sample['entrant'];
	$oldentrydate=$sample['entrytime'];
	$oldreviewer=$sample['reviewer'];
	$oldreviewdate=$sample['reviewdate'];
	
	if($resql!=$oldresql or $resqt!=$oldresqt or $ressqt!=$oldressqt or $resdate!=$olddate 
	/*or $comment!=$rescomment*/
	or $restech!=$oldtech){
		$entrycorrected='yes';
		}
	
	
} /* Ending while */

$sql_history ="INSERT into results_solidculture_hist  (labno,media,result_ql,result_qt,result_sqt,comment,resdate,restech,entrant,entrytime,reviewer,reviewdate,modified_time,contdate)
 values ('$reslabno','$resmedia','$oldresql','$oldresqt','$oldressqt','$oldcomment','$olddate','$oldtech','$oldentrant','$oldentrydate','$oldreviewer','$oldreviewdate','$entrytime','$oldcontdate')";
mysqli_query($dbconnection,$sql_history) or die("ERROR : " . mysqli_error($dbconnection));
}


//HERE >> Update results_solid culture here
if(@$qned=='yes' and @$entrycorrected=='yes'){
$sql = "UPDATE results_solidculture SET status='',result_ql='$resql',entrant='$entrant',result_sqt='$ressqt',result_qt='$resqt',comment='$rescomment',resdate='$resdate',restech='$restech',
entrant='$entrant',innoc_date='$resinnocdate',innoc_time='$resinnoctime',
entrytime='$entrytime',reviewer='',reviewdate='',status='' WHERE labno=$reslabno and media='$resmedia'";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
}
else{
$sql = "UPDATE results_solidculture SET interpretation='$rescultureinterpretation', innoc_date='$resinnocdate',innoc_time='$resinnoctime',result_ql='$resql',entrant='$entrant',
result_sqt='$ressqt',result_qt='$resqt',comment='$rescomment',resdate='$resdate',restech='$restech',
entrant='$entrant',entrytime='$entrytime',reviewer='',reviewdate='',status='' WHERE labno=$reslabno and media='$resmedia'";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
}

if(($ressqt=='Contaminated' OR $resqt=='Contaminated' ) AND $rescontdate=='0000-00-00')
{
mysqli_query($dbconnection,"UPDATE results_solidculture SET contdate='$resdate' WHERE 
labno=$reslabno and media='$resmedia'") or die("ERROR : " . mysqli_error($dbconnection));
}
//
/*=====CHECK IF USER SELECTED THAT ITEM NEEDS IDENTIFICATION  */
if($identific_test=='YES'){
	$sqlcheckpresence="SELECT * FROM results_identification WHERE labno='$reslabno' 
	and test='$test' and media='$resmedia' ";
$presence=mysqli_query($dbconnection,$sqlcheckpresence) or die("ERROR : " . mysqli_error($dbconnection));
if (mysqli_num_rows($presence)> 0){
	//if the labno already exists No action shd be taken
	/*$sql2 = "UPDATE results_identification SET mediathod='$idmethod',result='$idresult',comment='$idrescomment',
resdate='$idresdate',restech='$idrestech',media='$resmedia',entrant='$entrant',entrytime='$entrytime' WHERE labno=$reslabno and media='$resmedia' and test='$test'";
*/}else{
	mysqli_query($dbconnection,"INSERT INTO results_identification(test,labno,media,entrytime) 
VALUES('$test',$reslabno,'$resmedia','$identrytime')") 
or die("ERROR : " . mysqli_error($dbconnection));
}
}//end of YES
if($identific_test=='NO'){
	mysqli_query($dbconnection,"DELETE FROM results_identification WHERE test='$test' AND labno='$reslabno'
	AND media='$resmedia'") 
or die("ERROR : " . mysqli_error($dbconnection));
}
	

$nextrows=mysqli_query($dbconnection,"SELECT * FROM results_solidculture WHERE id>$id and resdate='0000-00-00'  ORDER BY id LIMIT 1");
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
var Privileges = jQuery('#privileges');
var select = this.value;
Privileges.change(function () {
    if ($(this).val() == 'custom') {
        $('.resources').show();
    }
    else $('.resources').hide();
});
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

$culture_interpretations = mysqli_query($dbconnection,"SELECT * FROM results_culture_interpretation WHERE labno='$labno'") or die("ERROR : " . mysqli_error($dbconnection));
while ($culture_interpretation = mysqli_fetch_array($culture_interpretations,MYSQLI_ASSOC)) {
				$culture_interpretation_result = $culture_interpretation['result'];	
}

if($labno==''){
echo "<script>
alert('Please Search A valid Lab No');
location.href='resultsentry_solidculture.php'
</script> ";
}
if(isset($_GET['media'])){
@$media=$_GET['media'];
$sql="SELECT * FROM results_solidculture WHERE labno='$labno' and media='$media'";
	}
else {
$sql="SELECT * FROM results_solidculture WHERE labno='$labno' ORDER BY id";
}
//$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

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
	$media=$sample['media'];
	$id = $sample['id'];
	
	$select_sc="SELECT * FROM samples WHERE labno=$labno";
			$scs=mysqli_query($dbconnection,$select_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($sc = mysqli_fetch_array($scs,MYSQLI_ASSOC)) {
				$studycode = $sc['studycode'];		
			}

$rejectreason=$sample['rejreason'];
	$result=$sample['restech'];
	
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
	$innoc_date=$sample['innoc_date'];
	$innoc_time=$sample['innoc_time'];
	if($innoc_time=='03:00:00' or $innoc_time=='00:00:00'){$innoc_time='';}
	
	



} /* Ending while */

	$sql_id="SELECT * FROM results_identification  WHERE labno='$labno' and media='$media' AND test='$test'";
$identification_check=mysqli_query($dbconnection,$sql_id) or die("ERROR : " . mysqli_error($dbconnection));
$countid=mysqli_num_rows($identification_check);
if ($countid>0){
while ($identification = mysqli_fetch_array($identification_check)) {
	@$idmethod = $identification['method'];
	@$idresult= $identification['result'];
	@$idcomment = $identification['comment'];
	@$idresdate = $identification['resdate'];
	@$idrestech = $identification['restech'];
	//$entrant= $identification['entrant'];
	//$entrytime = $identification['entrytime'];
}
}	
else{
	@$idmethod ='';
	@$idresult= '';
	@$idcomment ='';
	@$idresdate = '0000-00-00';
	@$idrestech ='';
	
}

} /* Ending if */

else{
echo "<script>
alert('There is no Solid Culture results for Lab No $labno.');
location.href='resultsentry_solidculture.php'
</script> ";
}


include("../includes/dbconfig.php");
if($multsample!='true'){
@$nextrows=mysqli_query($dbconnection,"SELECT * FROM results_solidculture WHERE id>$id ORDER BY id LIMIT 1");
while ($nextrow = mysqli_fetch_array($nextrows,MYSQLI_ASSOC)) {
@$nextlabno = $nextrow['labno'];
@$nextmedia = $nextrow['media'];
}

@$prevrows=mysqli_query($dbconnection,"SELECT * FROM results_solidculture WHERE id<$id ORDER BY id DESC LIMIT 1");
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
<div class="col-md-7">
<fieldset class="scheduler-border"><legend  class="scheduler-border" ><b>SOLID CULTURE  RESULTS ENTRY- SAMPLE SEARCH</b></legend>
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
<input type="button" value="<<PREVIOUS" class="form-control btn-success" onclick="location.href='resultsentry_solidculture.php?findlabno=<?php echo @$prevlabno;?>&&media=<?php echo @$prevmedia;?>'">
</div>
<div class="col-md-2">
<input type="button" value="NEXT>>" class="form-control btn-info" onclick="location.href='resultsentry_solidculture.php?findlabno=<?php echo @$nextlabno;?>&&media=<?php echo @$nextmedia;?>'">
</div>
</div>
</div></form>
</fieldset>

<?PHP if(isset($_GET['findlabno'])){?> 
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
	echo "<a href='?findlabno=$labno&&media=$media'><b>$media</b></a>&emsp;";
}
	//echo"am here sir";
	
}else{
?>
 
 <fieldset class="scheduler-border"><legend class="scheduler-border"><b>
 <font size='6em'>LAB NO <a href='#' title="Click to view request details" ><font color='red'><u><?php echo @$studycode .'-'.$labno ;?></u></font></a></font></b></legend>

<div style='background-color:white; '>
<form action="" class="form-control" method="POST"  id="example-1-form" onsubmit="leave()" autocomplete='off'>
<div class="form-horizontal">
<div class="row">
<div class="col-md-12">
<div class="form-group">

<b class="col-sm-6">SOLID CULTURE</b>
</div>

<input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
<input type="hidden" name="id" value="<?php echo $id;?>" />
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
<div class="form-group">
<input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>

<label class="col-sm-2 control-label label-format" >MEDIA:</label>
<div class="col-sm-4">
	<?php echo "<b>$media </b>";?> <input type='hidden' name='resmedia' value='<?php echo $media;?>'>
</div>
 <input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
   <label class="col-sm-2 control-label label-format" >RESULT QUALITATIVE:</label>
   <div class="col-sm-4">
   <select name="result_ql"  class="form-control">
			<option value="<?php echo $result_ql;?>"><?php echo $result_ql;?></option>
			<option value=""></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM resultsoptions_solidculture ORDER BY options";
			$options=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($option = mysqli_fetch_array($options,MYSQLI_ASSOC)) {
				$solidcultureoption = $option['options'];
				$solidculturecode= $option['code'];
				
			echo "<option value='$solidculturecode' style='background-color:#CCCCCC;'>$solidcultureoption</option>";	
			}			
			?>
	</select>
   
   </div>
</div>

<div class="form-group">
   
   <label class="col-sm-2 control-label label-format" >RESULT SEMI-QUANTITATIVE:
   <input name="reslabno" type="hidden" value="<?php echo $labno;?>"/></label>
  <div class="col-sm-4">
  <select name="result_sqt"  class="form-control">
			<option value="<?php echo $result_sqt;?>"><?php echo $result_sqt;?></option>
			<option value=""></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM resultsoptions_solidculture ORDER BY code";
			$options=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($option = mysqli_fetch_array($options,MYSQLI_ASSOC)) {
				$solidcultureoption = $option['options'];
				$solidculturecode= $option['code'];
				
			echo "<option value='$solidculturecode' style='background-color:#CCCCCC;'>$solidculturecode</option>";	
			}			
			?>
	</select>
  
   </div>
   
   <input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
   <label class="col-sm-2 control-label label-format" >RESULT QUANTITATIVE:</label>
  <div class="col-sm-4">
  <select name="result_qt"  class="form-control">
			<option value="<?php echo $result_qt;?>"><?php echo $result_qt;?></option>
			<option value=""></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM resultsoptions_solidculture ORDER BY options";
			$options=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($option = mysqli_fetch_array($options,MYSQLI_ASSOC)) {
				$solidcultureoption = $option['options'];
				$solidculturecode= $option['code'];
				
			echo "<option value='$solidculturecode' style='background-color:#CCCCCC;'>$solidculturecode</option>";	
			}			
			?>
	</select>
  
   </div>
</div>

<div class="form-group">	
<label class="col-sm-2 control-label label-format">DATE:</label>
      <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input14" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($date=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($date));?>"  readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input14" value="<?php if($date=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($date));?>"  name="resdate" />
				</div>
				<label class="col-sm-2 control-label label-format">COMMENT:</label>
<div class="col-sm-4">
<input type="text" value="<?php echo $comment;?>" class="form-control" name="rescomment" placeholder="Select or Type" list="commentslist" />
<datalist id="commentslist">
<select name="rescomment_options" class="form-control">
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
	</datalist>
	</div>



</div>

	
<div class="form-group">
<label class="col-sm-2 control-label label-format">TECH:</label>
<div class="col-sm-3">
	<select name="restech" class="form-control" REQUIRED>
			<option value="<?php echo $tech;?>" style='background-color:#CCCCCC;'><?php echo $tech;?></option>
			
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM techinitials where status='Active'  ORDER BY initial";
			$techs=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($tech = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
				$techinitial = $tech['initial'];
				$techname = $tech['name'];
			echo "<option value='$techinitial' style='background-color:#CCCCCC;'>$techinitial - $techname</option>";	
			}			
			?>
	</select>
	</div>
	<label class="col-sm-4 control-label label-format">OVERALL CULTURE INTERPRETATION:</label>
<div class="col-sm-3">
	<select name="rescultureinterpretation" class="form-control">
			<option value="<?php echo @$culture_interpretation_result; ?>"><?php echo @$culture_interpretation_result; ?></option>
			<option value=""></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM resultsoptions_interpretation where status='Active'
			";
			$techs=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($tech = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
				$interpretation = $tech['interpretation'];
				//$techname = $tech['name'];
			echo "<option value='$interpretation'>$interpretation</option>";	
			}
			?>
			<!--<option value="MTBC isolated">MTBC isolated</option>
			<option value="No growth ">No growth </option>
			<option value="MTBC NOT isolated">MTBC NOT isolated</option>
			<option value="MTBC isolated and culture contaminated">MTBC isolated and culture contaminated</option>
			<option value="NTM isolated ">NTM isolated </option>
			<option value="NTM isolated and culture contaminated ">NTM isolated and culture contaminated </option>
			<option value="Contaminated">Contaminated</option>
			-->
			





	</select>
</div>
</div>


<div class="form-group">

	<label class="col-sm-2 control-label label-format" >Innoculation Date:</label>
   <div class="col-sm-5"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input22" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($innoc_date=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($innoc_date));?>"  readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden"  name="innodate" id="dtp_input22" value="<?php if($innoc_date=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($innoc_date));?>" />
				</div>
	  <label class="col-sm-3 control-label label-format">Inoculation Time</label>
	  <div class="col-sm-2"> 
	   <input type="text" class="form-control defaultEntry" value="<?php echo $innoc_time ?>" name="innoc_time" size="">
	  
	</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label label-format">CONT DATE:</label>
<div class="col-sm-4">
<?php if($contdate=='0000-00-00'){echo '--';} else echo @date('d-m-Y',strtotime($contdate)); ?>
<input type="hidden" name="rescontdate" value="<?php echo $contdate;?>"  />
</div>
<label class="col-sm-2 control-label label-format">ENTRANT:</label> 
	<div class="col-sm-4"> <?php echo $entrant;?>
	</div>
</div>

	<div class="form-group">
	
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label label-format">ENTRY DATE:</label> 
	<div class="col-sm-3"><?php if($entrydate=='0000-00-00 00:00:00'){echo '';} else echo date('d-m-Y H:i:s',strtotime($entrydate));?>
	</div>
	<label class="col-sm-4 control-label label-format">Do you Require Identification?***</label>
<div class="col-sm-3"><?php 
include("../includes/dbconfig.php");
$sqlcheckpresence="SELECT * FROM results_identification WHERE labno='$labno'  and media='$media'
and test='$test'";
$presence=mysqli_query($dbconnection,$sqlcheckpresence) or die("ERROR : " . mysqli_error($dbconnection));

if (mysqli_num_rows($presence)> 0){
	
	$yesstate='checked';
	$nostate='';
	
}else{
$yesstate='';
	$nostate='checked';
	}	

	require_once 'identification_request.php';

?>
</div>
	</div>
	
<div class="form-group">

</div>
	<div class="form-group">
	<div class="col-sm-5"> 
	</div>
	 <div class="col-sm-2"> 
<input type="submit" class="btn btn-success" name="ressubmit_solidculture" value="SAVE" >
</div>
</div>


</div>
</div>
</div>

</form>
</div>

</fieldset>

<?php }
} ?>
</div>

<div class="col-md-5" style='background-color:white;'>

<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_solidculture WHERE restech='' order by labno asc";
$emptyresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalempty=mysqlI_num_rows($emptyresults);			
?>

<div id="" style='font-size:0.9em; max-height:150px;  overflow:scroll;'>
<h4><b>PENDING SOLID CULTURE RESULTS</b></h4>
This is a list of pending SOLID CULTURE results. [TOTAL = <?php echo $totalempty;?>]<br>

<?php
while ($emptyresult = mysqli_fetch_array($emptyresults,MYSQLI_ASSOC)) {
	$emptylabno = $emptyresult['labno'];
	$emptymedia = $emptyresult['media'];
	$select_empty_sc="SELECT * FROM samples WHERE labno=$emptylabno ";
			$empty_scs=mysqli_query($dbconnection,$select_empty_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($empty_sc = mysqli_fetch_array($empty_scs,MYSQLI_ASSOC)) {
				$emptystudycode = $empty_sc['studycode'];
			}
	echo "<a href='?findlabno=$emptylabno&&media=$emptymedia'>$emptystudycode-$emptylabno($emptymedia)</a>&emsp;";
}			
?>
</div>
<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_solidculture WHERE status='Rejected'";
$questionedresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalquestioned=mysqlI_num_rows($questionedresults);	
if($totalquestioned>0)	{		
?>
<div id="" style='font-size:0.9em;  border:; max-height:130px; width:; margin-right:; padding:; overflow:scroll;'>
<h4><b>QUESTIONED  SOLID CULTURE RESULTS</b></h4>
This is a list of Questioned  SOLID CULTURE results. [TOTAL = <?php echo $totalquestioned;?>]<br>

<?php
while ($questionedresult = mysqli_fetch_array($questionedresults,MYSQLI_ASSOC)) {
	$questioned_labno = $questionedresult['labno'];
	$questioned_media = $questionedresult['media'];
	$select_questioned_sc="SELECT * FROM samples WHERE labno=$questioned_labno";
			$questioned_scs=mysqli_query($dbconnection,$select_questioned_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($questioned_sc = mysqli_fetch_array($questioned_scs,MYSQLI_ASSOC)) {
				$questionablecode = $questioned_sc['studycode'];
			}
			
	echo "<a href='?qnd=yes&&findlabno=$questioned_labno&&media=$questioned_media''>$questionablecode-$questioned_labno ($questioned_media )&emsp;</a>";
		//echo "<a href='resultsreview_zn.php?findlabno=$emptylabno'>$emptylabno-$emptystudycode</br></a>";
}	echo "</div>";	
}	
?>

<?PHP if((isset($_GET['findlabno']))) {

@$media=$_GET['media'];
@$labno=$_GET['findlabno'];
if($media==''){
	$select_media="SELECT * FROM results_solidculture WHERE labno=$labno";
			$selectedmedia=mysqli_query($dbconnection,$select_media) or die("ERROR : " . mysqli_error($dbconnection));
			while ($labnomedia = mysqli_fetch_array($selectedmedia,MYSQLI_ASSOC)) {
				$media = $labnomedia['media'];
			}
			}

?>

<?php

include("../includes/dbconfig.php");

$sqlsolid="SELECT * FROM results_solidculture_hist where labno=$labno and media='$media' ORDER BY id DESC ";
$histssolid=mysqli_query($dbconnection,$sqlsolid) or die("ERROR : " . mysqli_error($dbconnection));
$hist_countsolid=mysqli_num_rows($histssolid);

if($hist_countsolid>0){ 
$select_hist_sc="SELECT * FROM samples WHERE labno=$labno";
$hist_scs=mysqli_query($dbconnection,$select_hist_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($hist_sc = mysqli_fetch_array($hist_scs,MYSQLI_ASSOC)) {
				$histcode = $hist_sc['studycode'];
			} ?>
	<div id="" style='font-size:0.9em; background-color:white; border:; max-height:300px; width:; margin-right:; padding:; overflow:scroll;'>
<h4><b>SOLID CULTURE RESULT EDIT HISTORY FOR LABNO <?php echo "$histcode-$labno  <font color='red'>[Total Edits=$hist_countsolid]</font>" ?></b></h4>
<div class="table-responsive">
<table  border="1" class="table">
<tr align='left'><th>Result Qt</th><th>Result Ql</th><th>Result Sqt</th><th>Resdate</th><th>Comment</th>
<th>Entrant</th>
<th>Res Tech</th>
<th>Entry Time</th><th>Modified Time </th>

</tr>

<?php

while ($histsolid = mysqli_fetch_array($histssolid,MYSQLI_ASSOC)) {
$histid = $histsolid['id'];
$histresql= $histsolid['result_ql'];
$histresqt= $histsolid['result_qt'];
$histressqt= $histsolid['result_sqt'];
$histcomment = $histsolid['comment'];
$histresdate = $histsolid['resdate'];
$histentrant = $histsolid['entrant'];
$histtech = $histsolid['restech'];
$histlabno= $histsolid['labno'];

$histentrytime=$histsolid['entrytime'];
if($histentrytime=='0000-00-00'){$histentrytime='';}
$histmodifiedtime=$histsolid['modified_time']; 
if($histmodifiedtime=='0000-00-00 00:00:00'){$histmodifiedtime='';}

//Inserting titles to tds		
echo "<tr class='accessionrow'  align='left' title='$histlabno '>

<td>$histresqt</td>
<td>$histresql</td>
<td>$histressqt</td>
<td>$histresdate</td>
<td>$histcomment</td>
<td>$histentrant</td>
<td>$histtech</td>
 
<td>$histentrytime</td>
<td>$histmodifiedtime</td>
</tr>";
}

echo "</table>";					
?>

</div>

</div>
<?PHP 
}
include("../includes/dbconfig.php");
?>

</div>

</div>
<?PHP }
 ?>


</div>
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>
</div>

<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>
<script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>

</div>

</div>

</body>
</html>