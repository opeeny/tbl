<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php
//$res_table='results_liquidculture';

$test='CL';
include("../includes/dbconfig.php");
if(isset($_POST['ressubmit_liquidculture'])){
$identific_test=mysqli_real_escape_string($dbconnection,$_POST['identific_test']);
$entrant=$_SESSION['name'];
$entrytime=date('Y-m-d H:i:s', time());

$id=mysqli_real_escape_string($dbconnection,$_POST['id']);
$reslabno=mysqli_real_escape_string($dbconnection,$_POST['reslabno']);
$resmedia=mysqli_real_escape_string($dbconnection,$_POST['resmedia']);
$resinnocdate=$_POST['innodate'];
$resinnoctime=mysqli_real_escape_string($dbconnection,$_POST['innoc_time']);
$rescontdate=mysqli_real_escape_string($dbconnection,$_POST['rescontdate']);
$rescomment=mysqli_real_escape_string($dbconnection,$_POST['rescomment']);

$zncresult=mysqli_real_escape_string($dbconnection,$_POST['zncresult']);
$zncdate=mysqli_real_escape_string($dbconnection,$_POST['zncdate']);
$znctech=strtoupper(mysqli_real_escape_string($dbconnection,$_POST['znctech']));
$bapresult=mysqli_real_escape_string($dbconnection,$_POST['bapresult']);
$bapdate=mysqli_real_escape_string($dbconnection,$_POST['bapdate']);
$baptech=strtoupper(mysqli_real_escape_string($dbconnection,$_POST['baptech']));
$dtpresult=mysqli_real_escape_string($dbconnection,$_POST['dtpresult']);
$dtpdate=mysqli_real_escape_string($dbconnection,$_POST['dtpdate']);
$dtptech=strtoupper(mysqli_real_escape_string($dbconnection,$_POST['dtptech']));
$resdate=mysqli_real_escape_string($dbconnection,$_POST['resdate']); if ($resdate!=''){$resdate=date('Y-m-d', strtotime($resdate));}

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

if(isset($_POST['qned'])){
	$qned=mysqli_real_escape_string($dbconnection,$_POST['qned']);
}
if(isset($_POST['idqned'])){
	$idqned=mysqli_real_escape_string($dbconnection,$_POST['idqned']);
}


//HERE >> Update results_solid culture here
if(@$qned=='yes' and @$entrycorrected=='yes'){/*
$sql = "UPDATE results_liquidculture SET status='',result_znc='$resznc',entrant='$entrant',result_bap='$resbap',result_dtp='$resdtp',comment='$rescomment',resdate='$resdate',restech='$restech',
entrant='$entrant',entrytime='$entrytime',reviewer='',reviewdate='' WHERE labno=$reslabno and media='$resmedia'";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));*/
}
else{
$sql = "UPDATE results_liquidculture SET interpretation='$rescultureinterpretation',resdate='$resdate',innoc_date='$resinnocdate',innoc_time='$resinnoctime',result_znc='$zncresult',result_bap='$bapresult',result_dtp='$dtpresult',
znc_date='$zncdate',znc_tech='$znctech',bap_date='$bapdate',bap_tech='$baptech',dtp_date='$dtpdate',dtp_tech='$dtptech',
comment='$rescomment',entrant='$entrant',entrytime='$entrytime',reviewer='',reviewdate=''
,status='' WHERE labno=$reslabno and media='$resmedia'";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
}

if(($bapresult=='Contaminated' OR $zncresult=='Contaminated' ) AND $rescontdate=='0000-00-00')
{
mysqli_query($dbconnection,"UPDATE results_liquidculture SET contdate='$resdate' WHERE 
labno=$reslabno and media='$resmedia'") or die("ERROR : " . mysqli_error($dbconnection));
}
//====IF SAMPLE REQUIRES IDENTIFICATION=====

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


//IF SAMPLE DOESNOT REQUIRE IDENTIFICATION , DELETE ANY EXISTING IDENTIFICATION
if($identific_test=='NO'){
	mysqli_query($dbconnection,"DELETE FROM results_identification WHERE test='$test' AND labno='$reslabno'
	AND media='$resmedia'") 
or die("ERROR : " . mysqli_error($dbconnection));
}

//

$nextrows=mysqli_query($dbconnection,"SELECT * FROM results_liquidculture WHERE id>$id and resdate='0000-00-00'  ORDER BY id LIMIT 1");
while ($nextrow = mysqli_fetch_array($nextrows,MYSQLI_ASSOC)) {
$newlabno = $nextrow['labno'];
$newmedia = $nextrow['media'];

}
//echo "innoc date was $resinnocdate ";
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
location.href='resultsentry_liquidculture.php'
</script> ";
}
if(isset($_GET['media'])){
@$media=$_GET['media'];
$sql="SELECT * FROM results_liquidculture WHERE labno='$labno' and media='$media'";
	}
else {
$sql="SELECT * FROM results_liquidculture WHERE labno='$labno' ORDER BY id";
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

	$zncresult=$sample['result_znc'];
	$zncdate=$sample['znc_date'];
	$znctech=$sample['znc_tech'];
	$bapresult=$sample['result_bap'];
	$bapdate=$sample['bap_date'];
	$baptech=$sample['bap_tech'];
	$dtpresult=$sample['result_dtp'];
	$dtpdate=$sample['dtp_date'];
	$dtptech=$sample['dtp_tech'];
	$innoc_date=$sample['innoc_date'];
	$innoc_time=$sample['innoc_time'];
	if($innoc_time=='03:00:00' or $innoc_time=='00:00:00'){$innoc_time='';}
	
	$result=$sample['restech'];
	$rejectreason=$sample['rejreason'];
	$date=$sample['resdate'];
	$comment=$sample['comment'];
	$contdate=$sample['contdate'];
	$result_znc=$sample['result_znc'];
	$result_bap=$sample['result_bap'];
	$result_dtp=$sample['result_dtp'];
	//$comment2=$sample['comment2'];
	$tech=$sample['restech'];
	$entrant=$sample['entrant'];
	$entrydate=$sample['entrytime'];
	
	



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
alert('There is no Liquid Culture results for Lab No $labno.');
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
<div class="col-md-8">

<fieldset class="scheduler-border"><legend  class="scheduler-border" ><b>LIQUID CULTURE  RESULTS ENTRY- SAMPLE SEARCH</b></legend>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" name="formfindsample" onsubmit="return validateformfindsample();" autocomplete="off">
<div class="form-horizontal">
<div class="form-group"> 
<div class="col-md-2">
<label><b>LAB NO</b></label>:
</div>
<div class="col-md-3">
<input name="findlabno" class="form-control" type="text" placeholder="Search LAB NO" style="height:; width:150px; background-color:;"/>
</div>
<div class="col-md-2">
<input type="submit"  name="findsample" class="form-control btn-primary" value="FIND" title="" style="height:30px; width:100px; background-color:;">
</div>
<div class="col-md-2">
<input type="button" value="<<PREVIOUS" class="form-control btn-success" onclick="location.href='resultsentry_liquidculture.php?findlabno=<?php echo @$prevlabno;?>&&media=<?php echo @$prevmedia;?>'" style="height:30px; width:100px; background-color:;">
</div>
<div class="col-md-2">
<input type="button" value="NEXT>>" class="form-control btn-info" onclick="location.href='resultsentry_liquidculture.php?findlabno=<?php echo @$nextlabno;?>&&media=<?php echo @$nextmedia;?>'" style="height:30px; width:100px; background-color:;">
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
 <font size='5em'>LIQUID CULTURE - LAB NO <a href='#' title="Click to view request details" ><font color='red'><u><?php echo @$studycode .'-'.$labno ;?></u></font></a></font></b></legend>


<form action="" class="form-control" method="POST"  id="example-1-form" onsubmit="leave()" autocomplete='off'>
<div class="form-horizontal">
<input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>

<input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
<input type="hidden" name="id" value="<?php echo $id;?>" />
<?php if(isset($_GET['qnd'])){
	$qnd=$_GET['qnd']; 
	?>
<input name="qned" type="hidden" value="<?php echo $qnd;?>"/>
<div class="form-group">
<label class="col-sm-3 control-label label-format">REJECTION REASON:</label>
<div class="col-sm-4">
 <?php echo '<b>'.'<font color="red">'.$rejectreason.'</font>'.'</b>';
 ?>
</div>

</div>
<?php }  ?>

<div class="form-group" style='background-color:white;'>
<label class="col-sm-2 control-label label-format">MEDIA:</label>
<div class="col-sm-8">
<?php echo "<b>$media </b>";?> <input type='hidden' name='resmedia' value='<?php echo $media;?>'>
</div>
	<div class="col-sm-2"> 
	<input type="submit" class="btn btn-success" name="ressubmit_liquidculture" value="SAVE" >
	</div>
</div>
<div class="form-group">
   <label class="col-sm-1 control-label label-format" >RESULT DTP:</label>
   <div class="col-sm-3"> 
	  <input type="text" class="form-control" name="dtpresult" value="<?php echo $dtpresult;?>" list="dtpresult" placeholder="Double-Click for Options"/>
		<datalist id="dtpresult">
		<select  class="form-control">
			<option value="<?php echo $dtpresult;?>"><?php echo $dtpresult;?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM resultsoptions_bap ORDER BY options";
			$options=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($option = mysqli_fetch_array($options,MYSQLI_ASSOC)) {
				$bapoption = $option['options'];
				$bapcode= $option['code'];
				
			echo "<option value='$bapoption' style='background-color:#CCCCCC;'>$bapoption</option>";	
			}			
			?>
		</select>
		</datalist>
        
    </div>
   
   <label class="col-sm-1 control-label label-format" >DTP DATE:</label>
   <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input16" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($dtpdate=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($dtpdate));?>"  readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden"  name="dtpdate" id="dtp_input16" value="<?php if($dtpdate=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($dtpdate));?>" />
				</div>
	
	<label class="col-sm-1 control-label label-format">DTP TECH:</label>
	<div class="col-sm-2">
	<select name="dtptech" class="form-control">
			<option value="<?php echo $dtptech;?>" style='background-color:#CCCCCC;'><?php echo $dtptech;?></option>
			
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
   
</div>
<div class="form-group">
  
   <label class="col-sm-1 control-label label-format">RESULT ZNC:</label>
   <div class="col-sm-3">
   <select name="zncresult"  class="form-control">
			<option value="<?php echo $zncresult;?>"><?php echo $zncresult;?></option>
			<option value=""></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM resultsoptions_zn";
			$options=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($option = mysqli_fetch_array($options,MYSQLI_ASSOC)) {
				$znoption = $option['options'];
				$zncode= $option['code'];
				
			echo "<option value='$znoption' style='background-color:#CCCCCC;'>$znoption</option>";	
			}			
			?>
	</select>
   </div>
   
   <label class="col-sm-1 control-label label-format" >ZNC DATE:</label>
   <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input14" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($zncdate=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($zncdate));?>"  readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden"  name="zncdate" id="dtp_input14" value="<?php if($zncdate=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($zncdate));?>" />
				</div>
	
	<label class="col-sm-1 control-label label-format">ZNC TECH:</label>
	<div class="col-sm-2">
	<select name="znctech" class="form-control">
			<option value="<?php echo $znctech;?>" style='background-color:#CCCCCC;'><?php echo $znctech;?></option>
			
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
   
</div>

<div class="form-group">
   <label class="col-sm-1 control-label label-format" >RESULT BAP:</label>
   <div class="col-sm-3">
   <select name="bapresult"  class="form-control">
			<option value="<?php echo $bapresult;?>"><?php echo $bapresult;?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM resultsoptions_bap ORDER BY options";
			$options=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($option = mysqli_fetch_array($options,MYSQLI_ASSOC)) {
				$bapoption = $option['options'];
				$bapcode= $option['code'];
				
			echo "<option value='$bapoption' style='background-color:#CCCCCC;'>$bapoption</option>";	
			}			
			?>		
	</select>
   </div>
   
   <label class="col-sm-1 control-label label-format" >BAP DATE:</label>
   <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input15" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($bapdate=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($bapdate));?>"  readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden"  name="bapdate" id="dtp_input15" value="<?php if($bapdate=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($bapdate));?>" />
				</div>
	
	<label class="col-sm-1 control-label label-format">BAP TECH:</label>
	<div class="col-sm-2">
	<select name="baptech" class="form-control">
			<option value="<?php echo $baptech;?>" style='background-color:#CCCCCC;'><?php echo $baptech;?></option>
			
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
   
</div>

<div class="form-group">
<label class="col-sm-1 control-label label-format">COMMENT:</label>
<div class="col-sm-3">
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
	   <label class="col-sm-1 control-label label-format" >Innoculation Date:</label>
   <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input22" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($innoc_date=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($innoc_date));?>"  readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden"  name="innodate" id="dtp_input22" value="<?php if($innoc_date=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($innoc_date));?>" />
				</div>
	
	  <label class="col-sm-1 control-label label-format">Inoculation Time</label>
	  <div class="col-sm-2"> 
	   <input type="text" class="form-control defaultEntry" value="<?php echo $innoc_time ?>" name="innoc_time" size="">
	  
	</div>
</div>
 <div class="form-group"> 
	 
 </div>

<div class="form-group">
<label class="col-sm-2 control-label label-format" >FINAL DATE:</label>
   <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input30" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($date=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($date));?>"  readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden"  name="resdate" id="dtp_input30" value="<?php if($date=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($date));?>" />
				</div>
				

<label class="col-sm-3 control-label label-format">OVERALL CULTURE INTERPRETATION:</label>
<div class="col-sm-3">
	<select name="rescultureinterpretation" class="form-control">
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
	
	<label class="col-sm-5 control-label label-format">DO YOU REQUIRE IDENTIFICATION?***</label>
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
<label class="col-sm-2 control-label label-format">CONT DATE:</label>
<div class="col-sm-2">
<?php if($contdate=='0000-00-00'){echo '--';} else echo @date('d-m-Y',strtotime($contdate)); ?>
<input type="hidden" name="rescontdate" value="<?php echo $contdate;?>"  />
</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label label-format">ENTRANT:</label> 
	<div class="col-sm-3"> <?php echo $entrant;?>
	</div>
	<label class="col-sm-2 control-label label-format">ENTRY TIME:</label> 
	<div class="col-sm-3"><?php if($entrydate=='0000-00-00 00:00:00'){echo '';} else echo date('d-m-Y H:i:s',strtotime($entrydate));?>
	</div>
	<div class="col-sm-2"> 
	<input type="submit" class="btn btn-success" name="ressubmit_liquidculture" value="SAVE" >
	</div>
</div>

</div>
</form><br><br>


</fieldset>

<?php }
} ?>
</div>

<div class="col-md-4" style='background-color:white;'>

<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_liquidculture WHERE result_znc='' AND result_bap='' AND result_dtp='' order by labno asc";
$emptyresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalempty=mysqlI_num_rows($emptyresults);			
?>

<div id="" style='font-size:0.9em; max-height:130px;  overflow:scroll;'>
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
	echo "<a href='?findlabno=$emptylabno&&media=$emptymedia'>$emptystudycode-$emptylabno($emptymedia)</a>&emsp;";
}			
?>
</div>
<?php
include("../includes/dbconfig.php");
	
?>

<?PHP if((isset($_GET['findlabno']))) {

@$media=$_GET['media'];
@$labno=$_GET['findlabno'];
if($media==''){
	$select_media="SELECT * FROM results_liquidculture WHERE labno=$labno";
			$selectedmedia=mysqli_query($dbconnection,$select_media) or die("ERROR : " . mysqli_error($dbconnection));
			while ($labnomedia = mysqli_fetch_array($selectedmedia,MYSQLI_ASSOC)) {
				$media = $labnomedia['media'];
			}
			}

?>

<?php

include("../includes/dbconfig.php");

$sqlliquid="SELECT * FROM results_solidculture_hist where labno=$labno and media='$media' ORDER BY id DESC ";
$histsliquid=mysqli_query($dbconnection,$sqlliquid) or die("ERROR : " . mysqli_error($dbconnection));
$hist_countsolid=mysqli_num_rows($histsliquid);

if($hist_countsolid>0){ 
$select_hist_sc="SELECT * FROM samples WHERE labno=$labno";
$hist_scs=mysqli_query($dbconnection,$select_hist_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($hist_sc = mysqli_fetch_array($hist_scs,MYSQLI_ASSOC)) {
				$histcode = $hist_sc['studycode'];
			} ?>
	<div id="" style='font-size:0.9em; background-color:white; border:; max-height:200px; width:; margin-right:; padding:; overflow:scroll;'>
<h4><b>LIQUID CULTURE RESULT EDIT HISTORY FOR LABNO <?php echo "$histcode-$labno  <font color='red'>[Total Edits=$hist_countsolid]</font>" ?></b></h4>
<div class="table-responsive">
<table  border="1" class="table">
<tr align='left'><th>Result Qt</th><th>Result Ql</th><th>Result Sqt</th><th>Resdate</th><th>Comment</th><th>Entrant</th>
<th>Res Tech</th>
<th>Entry Time</th><th>Modified Time </th>

</tr>

<?php

while ($histliquid = mysqli_fetch_array($histsliquid,MYSQLI_ASSOC)) {
$histid = $histliquid['id'];
$histresznc= $histliquid['result_znc'];
$histresdtp= $histliquid['result_dtp'];
$histresbap= $histliquid['result_bap'];
$histcomment = $histliquid['comment'];
$histresdate = $histliquid['resdate'];
$histentrant = $histliquid['entrant'];
$histtech = $histliquid['restech'];
$histlabno= $histliquid['labno'];

$histentrytime=$histliquid['entrytime'];
if($histentrytime=='0000-00-00'){$histentrytime='';}
$histmodifiedtime=$histliquid['modified_time']; 
if($histmodifiedtime=='0000-00-00 00:00:00'){$histmodifiedtime='';}

//Inserting titles to tds		
echo "<tr class='accessionrow'  align='left' title='$histlabno '>

<td>$histresdtp</td>
<td>$histresznc</td>
<td>$histresbap</td>
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
<?PHP 
}
}
?>
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