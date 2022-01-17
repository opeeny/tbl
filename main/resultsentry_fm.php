<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php
include("../includes/dbconfig.php");
if(isset($_POST['ressubmit_fm'])){
$reslabno=mysqli_real_escape_string($dbconnection,$_POST['reslabno']);
$resresult=mysqli_real_escape_string($dbconnection,$_POST['resresult']);
$resinterpretation=mysqli_real_escape_string($dbconnection,$_POST['resinterpretation']);
$resdate=mysqli_real_escape_string($dbconnection,$_POST['resdate']); if ($resdate!=''){$resdate=date('Y-m-d', strtotime($resdate));}
$rescomment=mysqli_real_escape_string($dbconnection,$_POST['rescomment']);
$qned=mysqli_real_escape_string($dbconnection,$_POST['qned']);
$restech=strtoupper(mysqli_real_escape_string($dbconnection,$_POST['restech']));
$resentrant=$_SESSION['name'];


$entrytime=date('Y-m-d H:i:s', time());
$sql="SELECT * FROM results_fm WHERE labno='$reslabno' and entrytime!='0000-00-00' ";
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

if (mysqli_num_rows($samples) > 0){
while ($sample = mysqli_fetch_array($samples)) {
	$labno = $sample['labno'];
	$result=$sample['result'];
	$interpretation=$sample['interpretation'];
	$date=$sample['resdate'];
	$comment=$sample['comment'];
	$tech=$sample['restech'];
	$oldentrant=$sample['entrant'];
	$oldentrydate=$sample['entrytime'];
	
	if($result!=$resresult or $date!=$resdate or $comment!=$rescomment or $tech!=$restech){
		$entrycorrected='yes';
	}
} /* Ending while */

$sql_history = "INSERT into results_fm_hist  (labno,result,interpretation,comment,resdate,restech,entrant,entrytime)
 values ('$reslabno','$result','$interpretation','$comment','$date','$tech','$oldentrant','$oldentrydate')";
mysqli_query($dbconnection,$sql_history) or die("ERROR : " . mysqli_error($dbconnection));
}
if($qned=='yes' and $entrycorrected=='yes'){
$sql = "UPDATE results_fm SET status='',result='$resresult',interpretation='$interpretation',comment='$rescomment',resdate='$resdate',restech='$restech',
entrant='$resentrant',entrytime='$entrytime',reviewer='',reviewdate='' WHERE labno=$reslabno";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
}else{
	$sql = "UPDATE results_fm SET result='$resresult',interpretation='$resinterpretation',comment='$rescomment',resdate='$resdate',restech='$restech',
entrant='$resentrant',entrytime='$entrytime',reviewer='',reviewdate='',status='' WHERE labno=$reslabno";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

}
$nextrows=mysqli_query($dbconnection,"SELECT labno FROM results_fm WHERE labno>$reslabno AND result='' ORDER BY labno LIMIT 1");
while ($nextrow = mysqli_fetch_array($nextrows,MYSQLI_ASSOC)) {
$newlabno = $nextrow['labno'];
}
//echo "<h1>$result</h1>";
header("location:?ressubmit=yes&&findlabno=".$newlabno);
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
alert('Lab No $labno is not registered in MICROSCOPY FM.');
location.href='resultsentry_fm.php'
</script> ";
}

include("../includes/dbconfig.php");
@$nextrows=mysqli_query($dbconnection,"SELECT labno FROM results_fm WHERE labno>$labno ORDER BY labno LIMIT 1");
while ($nextrow = mysqli_fetch_array($nextrows,MYSQLI_ASSOC)) {
@$nextlabno = $nextrow['labno'];
}

@$prevrows=mysqli_query($dbconnection,"SELECT labno FROM results_fm WHERE labno<$labno ORDER BY labno DESC LIMIT 1");
while ($prevrow = mysqli_fetch_array($prevrows,MYSQLI_ASSOC)) {
@$prevlabno = $prevrow['labno'];
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
<fieldset class="scheduler-border"><legend  class="scheduler-border" ><b>MICROSCOPY FM  RESULTS ENTRY- SAMPLE SEARCH</b></legend>
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
<input type="submit"  name="findsample" value="FIND" class="form-control btn-primary" title="" style="height:30px; width:100px; background-color:;">
</div>
<div class="col-md-3">
<input type="button"value="<<PREVIOUS" class="form-control btn btn-success" onclick="location.href='resultsentry_fm.php?findlabno=<?php echo @$prevlabno;?>'">
</div>
<div class="col-md-2">
<input type="button" value="NEXT>>" class="form-control btn-info" onclick="location.href='resultsentry_fm.php?findlabno=<?php echo @$nextlabno;?>'">
</div>
</div>
</div></form>
</fieldset>
<?PHP if(isset($_GET['findlabno'])){?> 
<?php
@$labno=$_GET['findlabno'];
include("../includes/dbconfig.php");

//checking sample results details in the results table
$sql="SELECT * FROM results_fm WHERE labno='$labno' ";
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

if (mysqli_num_rows($samples) > 0){
while ($sample = mysqli_fetch_array($samples)) {
	$labno = $sample['labno'];
	$select_sc="SELECT * FROM samples WHERE labno=$labno";
			$scs=mysqli_query($dbconnection,$select_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($sc = mysqli_fetch_array($scs,MYSQLI_ASSOC)) {
				$studycode = $sc['studycode'];		
			}
			$rejectreason=$sample['rejreason'];
	$result=$sample['result'];
	$interpretation=$sample['interpretation'];
	$date=$sample['resdate'];
	$comment=$sample['comment'];
	$tech=$sample['restech'];
	$entrant=$sample['entrant'];
	$entrytime=$sample['entrytime'];
} /* Ending while */

} /* Ending if */


else{
echo "<script>
alert('There is no MICROSCOPY FM results for Lab No $labno.');
location.href='resultsentry_fm.php'
</script> ";
}


?>
 
 <fieldset class="scheduler-border"><legend class="scheduler-border"><b><font size='6em'>LAB NO <a href='#' title="Click to view request details" <font color='red'><u><?php echo @$studycode .'-'.$labno ;?></u></font></a></font></b></legend>

<div style='background-color:white; '>
<form action="" class="form-control" method="POST" id="example-1-form" onsubmit="leave()" autocomplete='off'>
<div class="form-horizontal">
<div class="form-group">

<b class="col-sm-6">MICROSCOPY FM</b>
</div>

<input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
<?php if(isset($_GET['qnd'])){
	$qnd=$_GET['qnd']; 
	?>
<input name="qned" type="hidden" value="<?php echo $qnd;?>"/>

<div class="form-group">
<label class="col-sm-3 control-label label-format" >REJECTION REASON:</label>
<div class="col-sm-7">
 <?php echo '<b>'.'<font color="red">'.$rejectreason.'</font>'.'</b>';
 ?>
</div>

</div>
<?php }  ?>
<div class="form-group">
<label class="col-sm-2 control-label label-format" >RESULT:</label>
<div class="col-sm-7">
	<select name="resresult"  class="form-control">
			<option value="<?php echo $result;?>"><?php echo $result;?></option>
			<option value=""></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM resultsoptions_fm ORDER BY options";
			$options=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($option = mysqli_fetch_array($options,MYSQLI_ASSOC)) {
				$fmoption = $option['options'];
				$code= $option['code'];
				
			echo "<option value='$fmoption' style='background-color:#CCCCCC;'>$fmoption</option>";	
			}			
			?>
	</select>
</div>

</div>

<div class="form-group">
<label class="col-sm-2 control-label label-format" >INTERPRETATION:</label>
<div class="col-sm-4">
	<select name="resinterpretation"  class="form-control">
			<option value="<?php echo $interpretation;?>"><?php echo $interpretation;?></option>
			
			<option value=""></option>
			<option value="MTBC isolated">MTBC isolated</option>
			<option value="MTBC NOT isolated">MTBC NOT isolated</option>
			<option value="MTBC isolated and culture contaminated">MTBC isolated and culture contaminated</option>
			<option value="NTM isolated ">NTM isolated </option>
			<option value="NTM isolated and culture contaminated ">NTM isolated and culture contaminated </option>
			<option value="Contaminated">Contaminated</option>
	</select>
</div>

</div>

<div class="form-group">	
<label class="col-sm-2 control-label label-format">DATE:</label>
      <div class="col-sm-7"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input14" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($date=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($date));?>"  readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input14" value="<?php if($date=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($date));?>"  name="resdate" />
				</div>



</div>

<!--<div class="form-group">

<label class="col-sm-2 control-label label-format">DATE:</label>

      <div class="col-sm-4"> 
<!--<input type="text"  class="w8em format-d-m-y highlight-days-67 range-high-today form-control" value="<?php if($date=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($date));?>" name="resdate" id="resdate"
required/>-->
	
<!--	<div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input14" data-link-format="yyyy-mm-dd">

 required/>
	 <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input14" data-link-format="yyyy-mm-dd">

                    <input class="form-control" size="16" type="text" value="<?php if($date=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($date));?>" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input14" value="<?php if($date=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($date));?>"  name="resdate" />
				
				</div>-->



<!--</div>-->
<div class="form-group">
<label class="col-sm-2 control-label label-format">COMMENT:</label>
<div class="col-sm-7">
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
<label class="col-sm-2 control-label label-format">TECH:</label>
<div class="col-sm-7">
	<select name="restech" class="form-control">
			<option value="<?php echo $tech;?>" style='background-color:#CCCCCC;'><?php echo $tech;?></option>
			
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM techinitials where status='Active' ORDER BY initial";
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
	<label class="col-sm-2 control-label label-format">ENTRANT:</label> 
	<div class="col-sm-3"> <?php echo $entrant;?>
	<input name="resentrant" type="hidden" value="<?php echo $entrant;?>"/>
	</div>
	<label class="col-sm-3 control-label label-format">ENTRY DATE:</label> 
	<div class="col-sm-3"><?php if($entrytime=='0000-00-00 00:00:00'){echo '';} else echo date('d-m-Y H:i:s',strtotime($entrytime));?>
	</div>
	</div>
	<div class="form-group">
	<div class="col-sm-5"> 
	</div>
	 <div class="col-sm-2"> 
<input type="submit" class="btn btn-success" name="ressubmit_fm" value="SAVE" >
</div>
</div>



</fieldset>

<?php } ?>
</div>

<div class="col-md-5" style='background-color:white;'>

<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_fm WHERE result=''";
$emptyresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalempty=mysqlI_num_rows($emptyresults);	
	
		
?>
<div id="" style='font-size:0.9em;  max-height:130px; width:; margin-right:; padding:; overflow:scroll;'>

<b>PENDING MICROSCOPY FM RESULTS</b><br>
This is a list of pending MICROSCOPY FM results. [TOTAL = <?php echo $totalempty;?>]<br>

<?php
while ($emptyresult = mysqli_fetch_array($emptyresults,MYSQLI_ASSOC)) {
	$emptylabno = $emptyresult['labno'];
	$select_empty_sc="SELECT * FROM samples WHERE labno=$emptylabno";
			$empty_scs=mysqli_query($dbconnection,$select_empty_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($empty_sc = mysqli_fetch_array($empty_scs,MYSQLI_ASSOC)) {
				$emptystudycode = $empty_sc['studycode'];
			}
	echo "<a href='?findlabno=$emptylabno'>$emptystudycode-$emptylabno</a>&emsp;";
		//echo "<a href='resultsentry_fm.php?findlabno=$emptylabno'>$emptylabno-$emptystudycode</br></a>";
}
		
?>
</div>
<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_fm WHERE status='Rejected'";
$questionedresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalquestioned=mysqlI_num_rows($questionedresults);	
if($totalquestioned>0)	{		
?>	
<div id="" style='font-size:0.9em;  border:; max-height:100px; width:; margin-right:; padding:; overflow:scroll;'>
<h4><b>QUESTIONED  MICROSCOPY FM RESULTS</b></h4>
This is a list of Questioned  MICROSCOPY FM results. [TOTAL = <?php echo $totalquestioned;?>]<br>

<?php
while ($questionedresult = mysqli_fetch_array($questionedresults,MYSQLI_ASSOC)) {
	$questioned_labno = $questionedresult['labno'];
	$select_questioned_sc="SELECT * FROM samples WHERE labno=$questioned_labno";
			$questioned_scs=mysqli_query($dbconnection,$select_questioned_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($questioned_sc = mysqli_fetch_array($questioned_scs,MYSQLI_ASSOC)) {
				$questionablecode = $questioned_sc['studycode'];
			}
	echo "<a href='?qnd=yes&&findlabno=$questioned_labno'>$questionablecode-$questioned_labno &emsp;</a>";
		//echo "<a href='resultsreview_zn.php?findlabno=$emptylabno'>$emptylabno-$emptystudycode</br></a>";
}	?></div><?php	
}	
?>


<?PHP if(isset($_GET['findlabno'])){

@$labno=$_GET['findlabno'];
?>

<?php

include("../includes/dbconfig.php");

$sql="SELECT * FROM results_fm_hist where labno=$labno ORDER BY id DESC ";
$hists=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$hist_count=mysqlI_num_rows($hists);
if($hist_count>0){ $select_hist_sc="SELECT * FROM samples WHERE labno=$labno";
$hist_scs=mysqli_query($dbconnection,$select_hist_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($hist_sc = mysqli_fetch_array($hist_scs,MYSQLI_ASSOC)) {
				$histcode = $hist_sc['studycode'];
			} ?>
			
<h4><b>RESULT EDIT HISTORY FOR LABNO <?php echo "$histcode-$labno <font color='red'>[Total Edits=$hist_count]</font>" ?></b></h4>
	<div id="" style='font-size:0.9em; background-color:white; border:; max-height:200px; width:; margin-right:; padding:; overflow:scroll;'>

<div class="table-responsive">
<table  border="1" class="table">
<tr align='left'><th>Labno</th><th>Result</th><th>Resdate</th><th>Comment</th><th>Entrant</th>
<th>Res Tech</th>
<th>Entry Time</th><th>Modified Time </th>

</tr>

<?php

while ($hist = mysqli_fetch_array($hists,MYSQLI_ASSOC)) {
$histid = $hist['id'];
$histlabno= $hist['labno'];
$histresult = $hist['result'];
$histcomment = $hist['comment'];
$histresdate = $hist['resdate'];
$histentrant = $hist['entrant'];
$histtech = $hist['restech'];
$histentrytime=$hist['entrytime'];
$histmodifiedtime=$hist['modified_time'];

//Inserting titles to tds		
echo "<tr class='accessionrow'  align='left' title='$histlabno '>
<td>$histlabno</td>
<td>$histresult</td>
<td>$histresdate</td>
<td>$histcomment</td>
<td>$histentrant</td>
<td>$histtech</td>

<td>$histentrytime</td>
<td>$histmodifiedtime</td>
</tr>";
}
echo "</table>";					
 
}
?>
</div>
</div>
<?php 
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