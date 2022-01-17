<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php
include("../includes/dbconfig.php");
if(isset($_POST['rejectsubmit'])){
	$id=mysqli_real_escape_string($dbconnection,$_POST['id']);
	$reslabno=mysqli_real_escape_string($dbconnection,$_POST['reslabno']);
	$resmedia=mysqli_real_escape_string($dbconnection,$_POST['resmedia']);
	$entrant=mysqli_real_escape_string($dbconnection,$_POST['entrant']);
	$rejreason=mysqli_real_escape_string($dbconnection,$_POST['rejreason']);
$reviewer=$_SESSION['name'];
$reviewdate=date('Y-m-d', time());

$sql = "UPDATE results_solidculture SET reviewer='$reviewer',rejreason='$rejreason',reviewdate='$reviewdate',status='Rejected'  WHERE id='$id'";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

$sql = "INSERT into results_rejections (rejreason,media,labno,entrant,test,reviewer)  values('$rejreason','$resmedia','$reslabno','$entrant','SOLID Culture','$reviewer')";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$nextrows=mysqli_query($dbconnection,"SELECT * FROM results_solidculture WHERE id>$id and restech!='' and reviewer=''  ORDER BY id LIMIT 1");
while ($nextrow = mysqli_fetch_array($nextrows,MYSQLI_ASSOC)) {
$newlabno = $nextrow['labno'];
$newmedia = $nextrow['media'];
}

header("location:?ressubmit=yes&&findlabno=".$newlabno."&&media=".$newmedia);
	
	}
	
	
	if(isset($_POST['ressubmit_solidculture'])){
$id=mysqli_real_escape_string($dbconnection,$_POST['id']);
$reslabno=mysqli_real_escape_string($dbconnection,$_POST['reslabno']);
$reviewer=$_SESSION['name'];
$reviewdate=date('Y-m-d', time());
$sql = "UPDATE results_solidculture SET reviewer='$reviewer',reviewdate='$reviewdate', status='Accepted'  WHERE id='$id'";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));


$nextrows=mysqli_query($dbconnection,"SELECT * FROM results_solidculture WHERE id>$id and restech!='' and reviewer=''  ORDER BY id LIMIT 1");
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
location.href='resultsreview_solidculture.php'
</script> ";
}
if(isset($_GET['media'])){
@$media=$_GET['media'];
$sql="SELECT * FROM results_solidculture WHERE labno='$labno' and media='$media'";
}
else {
$sql="SELECT * FROM results_solidculture WHERE labno='$labno' ORDER BY id";
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
	$reviewdate=$sample['reviewdate']; if($reviewdate=='0000-00-00'){$reviewdate='';} 
	else{$reviewdate=date('d-m-Y ',strtotime($reviewdate));}
	//if($entrydate=='0000-00-00'){echo '';} else echo date('d-m-Y H:i:s',strtotime($entrydate));
	$reviewer=$sample['reviewer']; if($reviewer=='0000-00-00'){$reviewer='';}
	$status=$sample['status'];
	
} /* Ending while */
} /* Ending if */

else{
echo "<script>
alert('There is no Liquid Cultureresult for Lab No $labno.');
location.href='resultsreview_solidculture.php'
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
echo "<div id='successmessage' 
style='border-radius:5px; box-shadow:0px 3px 7px 0px #1d3b53;
 background-color:green; border:1px green solid;position:absolute; z-index:20; 
 top:0px; left:0px; margin:20px; padding:20px; min-height:;'><center><font color='white'>Results Review was Successsful</font></center></div>";
}
}
?>
<div class="col-md-7">

<fieldset class="scheduler-border"><legend  class="scheduler-border" ><b>SOLID CULTURE  RESULTS REVIEW- SAMPLE SEARCH</b></legend>
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
<input type="button" value="<<PREVIOUS" class="form-control btn-success" onclick="location.href='resultsreview_solidculture.php?findlabno=<?php echo @$prevlabno;?>&&media=<?php echo @$prevmedia;?>'">
</div>
<div class="col-md-2">
<input type="button" value="NEXT>>" class="form-control btn-info" onclick="location.href='resultsreview_solidculture.php?findlabno=<?php echo @$nextlabno;?>&&media=<?php echo @$nextmedia;?>'">
</div>
</div>
</div></form>
</fieldset>

<?PHP if(isset($_GET['findlabno'])){
 
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
 <div style='background-color:white;  text-align:left; ' >
 <fieldset class="scheduler-border"><legend class="scheduler-border"><b>
 <font size='6em'>LAB NO <a href='#' title="Click to view request details"><font color='red'><u><?php echo @$studycode .'-'.$labno ;?></u></font></a></font></b></legend>


<form action="" class="form-control" method="POST" id="example-1-form" onsubmit="leave()" autocomplete='off'>
<div class="form-horizontal">
<div class="form-group">

<b class="col-sm-6">SOLID CULTURE</b>
</div>

<input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
<input type="hidden" name="id" value="<?php echo $id;?>" />
<div class="form-group">
<input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>

<label class="col-sm-4 control-label label-format" >MEDIA:</label>
<div class="col-sm-8 control-label">
	<?php echo $media;?> <input type='hidden' name='resmedia' value='<?php echo $media;?>'>
</div>
</div>
<div class="form-group">
   <input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
   <label class="col-sm-4 control-label label-format" >RESULT QUALITATIVE:</label>
   <div class="col-sm-8 control-label">
   <?php echo $result_ql;?>
   </div>
</div>
<div class="form-group">
   <input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
   <label class="col-sm-4 control-label label-format" >RESULT SEMI-QUANTITATIVE:</label>
  <div class="col-sm-8 control-label">
  <?php echo $result_sqt;?>
  
   </div>
</div>
<div class="form-group">
   <input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
   <label class="col-sm-4 control-label label-format" >RESULT QUANTITATIVE:</label>
  <div class="col-sm-8 control-label">
  <?php echo $result_qt;?>
  
   </div>
</div>


<div class="form-group">	
<label class="col-sm-4 control-label label-format">DATE:</label>
      <div class="col-sm-8 control-label"> 
	  <?php if($date=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($date));?>
	  </div>
</div>
<div class="form-group">
<label class="col-sm-4 control-label label-format">COMMENT:</label>
<div class="col-sm-8 control-label">
<?php echo $comment;?>

	</div>
	</div>
	
<div class="form-group">
<label class="col-sm-4 control-label label-format">TECH:</label>
<div class="col-sm-8 control-label">
<?php echo $tech;?>
	</div>
	</div>
<div class="form-group">
<label class="col-sm-4 control-label label-format">CONT DATE:</label>
<div class="col-sm-8 control-label">
<?php if($contdate=='0000-00-00'){echo '--';} else echo @date('d-m-Y',strtotime($contdate)); ?>
<input type="hidden" name="rescontdate" value="<?php echo $contdate;?>"  />
</div>
</div>

	<div class="form-group">
	<label class="col-sm-2 control-label label-format">ENTRANT:</label> 
	<div class="col-sm-3 control-label"> <?php echo $entrant;?>
	</div>
	<label class="col-sm-3 control-label label-format">ENTRY DATE:</label> 
	<div class="col-sm-3 control-label"><?php if($entrydate=='0000-00-00 00:00:00'){echo '';} else echo date('d-m-Y H:i:s',strtotime($entrydate));?>
	</div>
	</div>	<div class="form-group">
	<label class="col-sm-2 control-label label-format">Reviewer:</label> 
	<div class="col-sm-3 control-label"> <?php echo $reviewer;?>
	</div>
	<label class="col-sm-3 control-label label-format">Review Date:</label> 
	<div class="col-sm-3 control-label"><?php echo $reviewdate;?>
	</div>
	</div>
<div class="form-group">
	<div class="col-sm-3"> 
<?php if($status=='Rejected' or $status=='Accepted'){?>
<input type="submit" class="btn btn-danger" name="rejectsubmit" <?php if($status=='Rejected'){?>value="RESULT QUESTIONED"<?php  echo "disabled >";}
 
 if($status=='Accepted'){?>value="QUESTION?"<?php echo "disabled"; } ?>><?php  }?> 

<?php if($status==''){?> <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">QUESTION?</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" contact="dialog">
<?php  require_once 'rejreason.php'; ?>
    </div>
<?php }?>
</div>
		 <div class="col-sm-3"> 
<input type="submit" class="btn btn-success" name="ressubmit_solidculture" <?php if($status=='Accepted'){?>value="RESULT PASSED REVIEW"<?php }
 if($status==''){?>value="REVIEW"<?php }  if($status=='Rejected'){?>value="REVIEW"<?php } ?>>
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
<div class="col-md-5">

<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_solidculture WHERE restech!=''  and status='' order by labno asc";
$emptyresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalempty=mysqlI_num_rows($emptyresults);			
?>
<div id="" style='font-size:0.9em;background-color:white;   max-height:130px; width:; margin-right:; padding:; overflow:scroll;'>

<b>PENDING SOLID CULTURE RESULTS REVIEW</b><br>
This is a list of pending SOLID CULTURE results Review. [TOTAL = <?php echo $totalempty;?>]<br>

<?php
while ($emptyresult = mysqli_fetch_array($emptyresults,MYSQLI_ASSOC)) {
	$emptylabno = $emptyresult['labno'];
	$emptymedia = $emptyresult['media'];
	$select_empty_sc="SELECT * FROM samples WHERE labno=$emptylabno ";
			$empty_scs=mysqli_query($dbconnection,$select_empty_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($empty_sc = mysqli_fetch_array($empty_scs,MYSQLI_ASSOC)) {
				$emptystudycode = $empty_sc['studycode'];
			}
	echo "<a href='?findlabno=$emptylabno&&media=$emptymedia'>$emptystudycode-$emptylabno($emptymedia)&emsp;</a>";
}			
?>
<br>
</div>
<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_solidculture WHERE status='Rejected'";
$questionedresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalquestioned=mysqlI_num_rows($questionedresults);			
?>		

<div id="" style='font-size:0.9em;background-color:white;   max-height:130px; width:; margin-right:; padding:; overflow:scroll;'>

<b>QUESTIONED  SOLID CULTURE RESULTS</b><br>
This is a list of Questioned SOLID Culture Results Review. [TOTAL = <?php echo $totalquestioned;?>]<br>

<?php
while ($questionedresult = mysqli_fetch_array($questionedresults,MYSQLI_ASSOC)) {
	$questioned_labno = $questionedresult['labno'];
	$questionedmedia = $questionedresult['media'];
	$select_questioned_sc="SELECT * FROM samples WHERE labno=$questioned_labno";
			$questioned_scs=mysqli_query($dbconnection,$select_questioned_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($questioned_sc = mysqli_fetch_array($questioned_scs,MYSQLI_ASSOC)) {
				$questionablecode = $questioned_sc['studycode'];
			}
	echo "<a href='?findlabno=$questioned_labno&&media=$questionedmedia'>$questionablecode-$questioned_labno ($questionedmedia )&emsp;</a>";
		//echo "<a href='resultsreview_zn.php?findlabno=$emptylabno'>$emptylabno-$emptystudycode</br></a>";
}			
?>
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
<script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>
</div>

</body>
</html>