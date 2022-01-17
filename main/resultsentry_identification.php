<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php
include("../includes/dbconfig.php");
if(isset($_POST['ressubmit_others'])){
$id=mysqli_real_escape_string($dbconnection,$_POST['id']);
$reslabno=mysqli_real_escape_string($dbconnection,$_POST['reslabno']);
$resresult=mysqli_real_escape_string($dbconnection,$_POST['resresult']);
$resdate=mysqli_real_escape_string($dbconnection,$_POST['resdate']); if ($resdate!=''){$resdate=date('Y-m-d', strtotime($resdate));}
$rescomment=mysqli_real_escape_string($dbconnection,$_POST['rescomment']);
$resmethod=mysqli_real_escape_string($dbconnection,$_POST['method']);
$resexam=mysqli_real_escape_string($dbconnection,$_POST['resexam']);
$restech=strtoupper(mysqli_real_escape_string($dbconnection,$_POST['restech']));
if(isset($_POST['idqned'])){
	
$qned=mysqli_real_escape_string($dbconnection,$_POST['idqned']);
}else{
	$qned='';
}
$entrant=$_SESSION['name'];
$entrydate=date('Y-m-d', time());

$sql="SELECT * FROM results_identification WHERE id='$id' and entrytime!='0000-00-00' ";
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

if (mysqli_num_rows($samples) > 0){
while ($sample = mysqli_fetch_array($samples)) {
	$labno = $sample['labno'];
	$select_sc="SELECT * FROM samples WHERE labno=$labno ";
			$scs=mysqli_query($dbconnection,$select_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($sc = mysqli_fetch_array($scs,MYSQLI_ASSOC)) {
				$studycode = $sc['studycode'];		
			}
			$rejectreason=$sample['rejreason'];
	$result=$sample['result'];
	$test=$sample['test'];
	$media=$sample['media'];
	$date=$sample['resdate'];
	$comment=$sample['comment'];
	$tech=strtoupper($sample['restech']);
	$oldentrant=$sample['entrant'];
	$oldentrydate=$sample['entrytime'];
	
	if($result!=$resresult or $date!=$resdate or $comment!=$rescomment or $tech!=$restech){
		$entrycorrected='yes';
	}
} /* Ending while */



$sql_history = "INSERT into results_identification_hist  (media,test,labno,result,comment,resdate,restech,entrant,entrytime)
 values ('$media','$test','$reslabno','$result','$comment','$date','$tech','$oldentrant','$oldentrydate')";
mysqli_query($dbconnection,$sql_history) or die("ERROR : " . mysqli_error($dbconnection));
}


if($qned=='yes' and $entrycorrected=='yes'){
$sql = "UPDATE results_identification SET status='',result='$resresult',comment='$rescomment',resdate='$resdate',restech='$restech',
entrant='$entrant',method='$resmethod',entrytime='$entrydate',reviewer='',reviewdate=''
,status='' WHERE id=$id ";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
}
else{
	$sql = "UPDATE results_identification SET result='$resresult',comment='$rescomment',resdate='$resdate',restech='$restech',
entrant='$entrant',entrytime='$entrydate',method='$resmethod',reviewer='',reviewdate='' WHERE id=$id ";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

}
$nextrows=mysqli_query($dbconnection,"SELECT * FROM results_identification WHERE id>$id AND result='' ORDER BY id LIMIT 1");
while ($nextrow = mysqli_fetch_array($nextrows,MYSQLI_ASSOC)) {
$newlabno = $nextrow['labno'];
$newtest = $nextrow['test'];
$newmedia = $nextrow['media'];
}
//echo "<h1>qned is $qned </h1>";
header("location:?ressubmit=yes&&findlabno=".$newlabno."&&newtest=".$newtest."&&newmedia=".$newmedia);
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
alert('Lab No $labno is not registered in IDENTIFICATION TESTS.');
location.href='resultsentry_identification.php'
</script> ";
}

include("../includes/dbconfig.php");
@$nextrows=mysqli_query($dbconnection,"SELECT labno FROM results_identification WHERE labno>$labno ORDER BY labno LIMIT 1");
while ($nextrow = mysqli_fetch_array($nextrows,MYSQLI_ASSOC)) {
@$nextlabno = $nextrow['labno'];
}

@$prevrows=mysqli_query($dbconnection,"SELECT labno FROM results_identification WHERE labno<$labno ORDER BY labno DESC LIMIT 1");
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
<fieldset class="scheduler-border"><legend  class="scheduler-border" ><b>IDENTIFICATION TESTS  RESULTS ENTRY- SAMPLE SEARCH</b></legend>
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
<input type="submit"  name="findsample" value="FIND" title="" class="form-control btn-primary">
</div>
<div class="col-md-3">
<input type="button" value="<<PREVIOUS" class="form-control btn-success" onclick="location.href='resultsentry_identification.php?findlabno=<?php echo @$prevlabno;?>'">
</div>
<div class="col-md-2">
<input type="button" value="NEXT>>" class="form-control btn-info" onclick="location.href='resultsentry_identification.php?findlabno=<?php echo @$nextlabno;?>'">
</div>
</div>
</div></form>
</fieldset>
<?PHP if(isset($_GET['findlabno'])){?> 
<?php
@$labno=$_GET['findlabno'];
//@$newtest=$_GET['newtest'];
include("../includes/dbconfig.php");
if(isset($_GET['newtest'])){
@$newtest=$_GET['newtest'];
@$newmedia=$_GET['newmedia'];
$sql="SELECT * FROM results_identification WHERE labno='$labno' and test='$newtest'
 and media='$newmedia' ";
	}
else {
$sql="SELECT * FROM results_identification WHERE labno='$labno' ORDER BY id";
}


$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$countsamples=mysqli_num_rows($samples);
if ($countsamples>1){
	@$multsample='true';
	$select_sc="SELECT * FROM samples WHERE labno=$labno";
			$scs=mysqli_query($dbconnection,$select_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($sc = mysqli_fetch_array($scs,MYSQLI_ASSOC)) {
				$studycode = $sc['studycode'];	
//$rejectreason=$sample['rejreason'];				
			}

}else if ($countsamples==1){

	@$multsample='false';

while ($sample = mysqli_fetch_array($samples)) {
	$labno = $sample['labno'];
	$select_sc="SELECT * FROM samples WHERE labno=$labno";
			$scs=mysqli_query($dbconnection,$select_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($sc = mysqli_fetch_array($scs,MYSQLI_ASSOC)) {
				$studycode = $sc['studycode'];		
			}
			$rejectreason=$sample['rejreason'];
			$id=$sample['id'];
	$result=$sample['result'];
	$date=$sample['resdate'];
	$comment=$sample['comment'];
	$examination=$sample['test'];
	$media=$sample['media'];
	$method=$sample['method'];
	$tech=$sample['restech'];
	$entrant=$sample['entrant'];
	$entrydate=$sample['entrytime'];
} /* Ending while */
}
 /* Ending if */

else{
echo "<script>
alert('There is no  result for Lab No $labno.');
location.href='resultsentry_identification.php'
</script> ";
}


?>
 <?PHP if(isset($_GET['findlabno'])){?> 
<?php
if($multsample=='true'){
		echo "<h3><b>"."SEARCH RESULTS FOR LAB NO $studycode-$labno"."</b></h2>"."<br>";
echo "<b>Test:</b>&emsp;&emsp;";
		while ($sample = mysqli_fetch_array($samples)) {
	$labno = $sample['labno'];
	$id = $sample['id'];
	$newtest = $sample['test'];
	$newmedia = $sample['media'];
	$result=$sample['labno'];
	//$media=$sample['media'];
	echo "<a href='?findlabno=$labno&&newtest=$newtest&&newmedia=$newmedia'><b>$newmedia-$newtest</b></a>&emsp;";
}
	//echo"am here sir";
	
}else{ ?>
 <fieldset class="scheduler-border"><legend class="scheduler-border"><b><font size='6em'>LAB NO <a href='#' title="Click to view request details" ><font color='red'><u><?php echo @$studycode .'-'.$labno ;?></u></font></a></font></b></legend>

<div style='background-color:white; '>
<form action="" class="form-control" method="POST" id="form_others" id="example-1-form" onsubmit="leave()" autocomplete='off'>
<div class="form-horizontal">
<div class="form-group">

<b class="col-sm-4 control-label">TEST NAME:
	<?php echo strtoupper("$examination");
?>
			
</b> 
</div>

<div class="form-group">
<input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>

<label class="col-sm-2 control-label label-format" >EXAMINATION NAME:</label>
<div class="col-sm-4">
<input type="hidden" name="id" value="<?php echo $id;?>" />

	<select name="resexam"  class="form-control">
			<option value="<?php echo $examination;?>"><?php echo $examination;?></option>
			
	</select>
</div>
<label class="col-sm-1 control-label label-format" >MEDIA:</label>
<div class="col-sm-4">
<input type="hidden" name="id" value="<?php echo $id;?>" />

	<select name="resexam"  class="form-control">
			<option value="<?php echo $media;?>"><?php echo $media;?></option>
			
	</select>
</div>
</div>

<div class="form-group">
<input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
<?php if(isset($_GET['qnd'])){
	$qnd=$_GET['qnd']; ?>
	<input name="qnd" type="hidden" value="<?php echo $qnd;?>"/>
	<div class="form-group">
<label class="col-sm-3 control-label label-format" >REJECTION REASON:</label>
<div class="col-sm-4">
 <?php echo '<b>'.'<font color="red">'.$rejectreason.'</font>'.'</b>';
 ?>
</div>

</div>
<?php }  ?>

<label class="col-sm-2 control-label label-format">Method:</label>
   <?php if(isset($_GET['idqnd'])){
	$idqnd=$_GET['idqnd']; 
	
	?>
<input name="idqned" type="hidden" value="<?php echo $idqnd;?>"/>
<?php }  ?>
   <div class="col-sm-4">
   <select name="method"  class="form-control">
			<option value="<?php echo $method; ?>"><?php echo $method; ?></option>
			<option value=""></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM identification_method";
			$methods=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($method = mysqli_fetch_array($methods,MYSQLI_ASSOC)) {
				$idmethod = $method['name'];
				
				
			echo "<option value='$idmethod' style='background-color:#CCCCCC;'>$idmethod</option>";	
			}			
			?>
	</select>
   
   </div>

	
<label class="col-sm-2 control-label label-format" >RESULT:</label>
<div class="col-sm-4">
	<select name="resresult"  class="form-control">
			<option value="<?php echo $result;?>"><?php echo $result;?></option>
			<option value=""></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM resultsoptions_identification ORDER BY options";
			$options=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($option = mysqli_fetch_array($options,MYSQLI_ASSOC)) {
				$othersoption = $option['options'];
				$code= $option['code'];
				
			echo "<option value='$code' style='background-color:#CCCCCC;'>$othersoption</option>";	
			}			
			?>
	</select>
</div>

</div>

<div class="form-group">
<label class="col-sm-1 control-label label-format">DATE:</label>
      <div class="col-sm-4"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input14" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($date=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($date));?>" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input14" value="<?php if($date=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($date));?>" name="resdate" />
				</div>
<label class="col-sm-2 control-label label-format">COMMENT:</label>
<div class="col-sm-5">
<select name="rescomment" class="form-control">
			<option value="<?php echo $comment;?>"><?php echo $comment;?></option>
			<option value=""></option>
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
<div class="col-sm-4">
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
	<label class="col-sm-2 control-label label-format">ENTRANT:</label> 
	<div class="col-sm-3"> <?php echo $entrant;?>
	</div>
	</div>
	<div class="form-group">
	
	<label class="col-sm-3 control-label label-format">ENTRY DATE:</label> 
	<div class="col-sm-3"><?php if($entrydate=='0000-00-00 00:00:00'){echo '';} else echo date('d-m-Y',strtotime($entrydate));?>
	</div>
	<div class="col-sm-2"> 
<input type="submit" class="btn btn-success" name="ressubmit_others" value="SAVE" >
</div>
	</div>
	
</div>
</form>
</div>

</fieldset>

<?php }
 }
} ?>
</div>
<div class="col-md-5" style='background-color:white;'>

<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_identification WHERE result='' ";
$emptyresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalempty=mysqlI_num_rows($emptyresults);			
?>
<h4><b>PENDING IDENTIFICATION TESTS RESULTS</b></h4>
<div id="" style='font-size:0.9em;  max-height:120px; width:; margin-right:; padding:; overflow:scroll;'>
This is a list of pending IDENTIFICATION TESTS results. [TOTAL = <?php echo $totalempty;?>]<br>

<?php
while ($emptyresult = mysqli_fetch_array($emptyresults,MYSQLI_ASSOC)) {
	$emptylabno = $emptyresult['labno'];
	$ntest = $emptyresult['test'];
	$nmedia = $emptyresult['media'];
	$select_empty_sc="SELECT * FROM samples WHERE labno=$emptylabno";
			$empty_scs=mysqli_query($dbconnection,$select_empty_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($empty_sc = mysqli_fetch_array($empty_scs,MYSQLI_ASSOC)) {
				$emptystudycode = $empty_sc['studycode'];
			}
	echo "<a href='?newtest=$ntest&&findlabno=$emptylabno&&newmedia=$nmedia'>$emptystudycode-$emptylabno($nmedia-$ntest )</a>&emsp;";
		//echo "<a href='resultsentry_identification.php?findlabno=$emptylabno'>$emptylabno-$emptystudycode</br></a>";
}			
?>
</div>
<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_identification WHERE status='Rejected'";
$questionedresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalquestioned=mysqlI_num_rows($questionedresults);	
if($totalquestioned>0)	{		
?>		

<div id="" style='font-size:0.9em;  border:; max-height:100px; width:; margin-right:; padding:; overflow:scroll;'>
<h4><b>QUESTIONED  IDENTIFICATION TESTS RESULTS</b></h4>
This is a list of Questioned  IDENTIFICATION TESTS results. [TOTAL = <?php echo $totalquestioned;?>]<br>

<?php
while ($questionedresult = mysqli_fetch_array($questionedresults,MYSQLI_ASSOC)) {
	$questioned_labno = $questionedresult['labno'];
	$questioned_test= $questionedresult['test'];
	$questioned_media= $questionedresult['media'];
	$select_questioned_sc="SELECT * FROM samples WHERE labno=$questioned_labno";
			$questioned_scs=mysqli_query($dbconnection,$select_questioned_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($questioned_sc = mysqli_fetch_array($questioned_scs,MYSQLI_ASSOC)) {
				$questionablecode = $questioned_sc['studycode'];
			}
	echo "<a href='?qnd=yes&&findlabno=$questioned_labno&&newtest=$questioned_test&&newmedia=$questioned_media'>$questionablecode-$questioned_labno($questioned_media-$questioned_test)</a>&emsp;";
		//echo "<a href='resultsreview_zn.php?findlabno=$emptylabno'>$emptylabno-$emptystudycode</br></a>";
}	echo "</div>";	
}	
?>

<?PHP if((isset($_GET['findlabno'])) and (isset($_GET['newtest']))) {
@$newtest=$_GET['newtest'];
$newmedia=$_GET['newmedia'];
@$labno=$_GET['findlabno'];
?>

<?php

include("../includes/dbconfig.php");

$sql="SELECT * FROM results_identification_hist where labno=$labno and test='$newtest' 
and media='$newmedia' ORDER BY id DESC ";
$hists=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$hist_count=mysqlI_num_rows($hists);
if($hist_count>0){ 
$select_hist_sc="SELECT * FROM samples WHERE labno=$labno";
$hist_scs=mysqli_query($dbconnection,$select_hist_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($hist_sc = mysqli_fetch_array($hist_scs,MYSQLI_ASSOC)) {
				$histcode = $hist_sc['studycode'];
			} ?>
			<h4><b>RESULT EDIT HISTORY FOR LABNO <?php echo "$histcode-$labno" ?></b></h4>
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