<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php
include("../includes/dbconfig.php");

include("../includes/dbconfig.php");
if(isset($_POST['rejectsubmit'])){
	$id=mysqli_real_escape_string($dbconnection,$_POST['id']);
	$reslabno=mysqli_real_escape_string($dbconnection,$_POST['reslabno']);
	$resmedia=mysqli_real_escape_string($dbconnection,$_POST['resmedia']);
	$entrant=mysqli_real_escape_string($dbconnection,$_POST['entrant']);
	$rejreason=mysqli_real_escape_string($dbconnection,$_POST['rejreason']);
$reviewer=$_SESSION['name'];
$reviewdate=date('Y-m-d', time());

$sql = "UPDATE results_liquidculture SET reviewer='$reviewer',rejreason='$rejreason',reviewdate='$reviewdate',status='Rejected'  WHERE id='$id'";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

$sql = "INSERT into results_rejections (rejreason,media,labno,entrant,test,reviewer)  values('$rejreason','$resmedia','$reslabno','$entrant','Blood Culture','$reviewer')";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$nextrows=mysqli_query($dbconnection,"SELECT * FROM results_liquidculture WHERE id>$id and restech!='' and reviewer=''  ORDER BY id LIMIT 1");
while ($nextrow = mysqli_fetch_array($nextrows,MYSQLI_ASSOC)) {
$newlabno = $nextrow['labno'];
$newmedia = $nextrow['media'];
}

header("location:?ressubmit=yes&&findlabno=".$newlabno."&&media=".$newmedia);
	
	}
	
	
	if(isset($_POST['ressubmit_liquidculture'])){
$id=mysqli_real_escape_string($dbconnection,$_POST['id']);
$reslabno=mysqli_real_escape_string($dbconnection,$_POST['reslabno']);
$reviewer=$_SESSION['name'];
$reviewdate=date('Y-m-d', time());
$sql = "UPDATE results_liquidculture SET reviewer='$reviewer',
reviewdate='$reviewdate', status='Accepted'  WHERE id='$id'";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));


$nextrows=mysqli_query($dbconnection,"SELECT * FROM results_liquidculture WHERE id>$id and restech!='' and reviewer=''  ORDER BY id LIMIT 1");
while ($nextrow = mysqli_fetch_array($nextrows,MYSQLI_ASSOC)) {
$newlabno = $nextrow['labno'];
$newmedia = $nextrow['media'];
}

header("location:?ressubmit=yes&&findlabno=".$newlabno."&&media=".$newmedia);
}


if(isset($_POST['ressubmit_liquidculture'])){
	
	$rescontdate=mysqli_real_escape_string($dbconnection,$_POST['rescontdate']); if ($rescontdate!=''){$rescontdate=date('Y-m-d', strtotime($rescontdate));}
$id=mysqli_real_escape_string($dbconnection,$_POST['id']);


$resdate=mysqli_real_escape_string($dbconnection,$_POST['resdate']); if ($resdate!=''){$resdate=date('Y-m-d', strtotime($resdate));}
$resmedia=mysqli_real_escape_string($dbconnection,$_POST['resmedia']);


$reslabno=mysqli_real_escape_string($dbconnection,$_POST['reslabno']);
$reviewer=$_SESSION['name'];
$reviewdate=date('Y-m-d', time());

$sql = "UPDATE results_liquidculture SET reviewer='$reviewer',
reviewdate='$reviewdate',status='Accepted' WHERE id='$id'";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));



$nextrows=mysqli_query($dbconnection,"SELECT * FROM results_liquidculture WHERE id>$id AND reviewer='' AND restech!='' ORDER BY id LIMIT 1");
while ($nextrow = mysqli_fetch_array($nextrows,MYSQLI_ASSOC)) {
$newlabno = $nextrow['labno'];
$newmedia = $nextrow['media'];
}

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
location.href='resultsreview_liquidculture.php'
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
	$tech=$sample['dtp_tech'];
	$entrant=$sample['entrant'];
	$interpretation=$sample['interpretation'];
	
	$entrytime=$sample['entrytime'];
	$reviewdate=$sample['reviewdate']; if($reviewdate=='0000-00-00'){$reviewdate='';} 
	else{$reviewdate=date('d-m-Y ',strtotime($reviewdate));}
	//if($entrydate=='0000-00-00'){echo '';} else echo date('d-m-Y H:i:s',strtotime($entrydate));
	$reviewer=$sample['reviewer']; if($reviewer=='0000-00-00'){$reviewer='';}
	$status=$sample['status'];
} 
}
else{
echo "<script>
alert('Lab No $labno is not registered for Liquid culture');
location.href='resultsreview_liquidculture.php'
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
echo "<div id='successmessage' style='border-radius:5px; box-shadow:0px 3px 7px 0px #1d3b53; background-color:green; border:1px green solid;position:absolute; z-index:20; top:0px; left:0px; margin:20px; padding:20px; min-height:;'><center><font color='white'>Results Review was Successsful</font></center></div>";
}
}
?>
<div class="col-md-7">
<fieldset class="scheduler-border"><legend  class="scheduler-border" ><b>LIQUID CULTURE  RESULTS REVIEW- SAMPLE SEARCH</b></legend>
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
<input type="button" value="<<PREVIOUS" class="form-control btn-success" onclick="location.href='resultsreview_liquidculture.php?findlabno=<?php echo @$prevlabno;?>&&media=<?php echo @$prevmedia;?>'">
</div>
<div class="col-md-2">
<input type="button"  value="NEXT>>" class="form-control btn-info" onclick="location.href='resultsreview_liquidculture.php?findlabno=<?php echo @$nextlabno;?>&&media=<?php echo @$nextmedia;?>'">
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
?><div style='background-color:white; '>
<fieldset class="scheduler-border"><legend class="scheduler-border"><b><font size='6em'>
 LAB NO <font color='red'><?php echo $studycode .' - '. @$labno;?></font></font></b></legend>


<form action="" class="form-control" method="POST" id="example-1-form" onsubmit="leave()" autocomplete='off'>
<input type="hidden" name="id" value="<?php echo $id;?>" />

<div class="form-horizontal">
<div class="form-group">

<b class="col-sm-6">LIQUID CULTURE</b>
</div>

<input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>


<div class="form-group">
<input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>

<label class="col-sm-4 control-label label-format" >MEDIA:</label>
<div class="col-sm-8 control-label">
<input type="hidden" name="resmedia" value="<?php echo $media;?>">
			
<?php echo $media;?>
</div>
</div>
<div class="form-group">
   <input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
   <label class="col-sm-4 control-label label-format" >DAYS TO POSITIVE:</label>
   <div class="col-sm-8 control-label">
   <?php echo $result_dtp;?>
   
   
   </div>
</div>
<div class="form-group">
   <input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
   <label class="col-sm-4 control-label label-format" >ZN CULTURE:</label>
  <div class="col-sm-8 control-label">
  
			<?php echo $result_znc;?>
		
   </div>
</div>
<div class="form-group">
   <input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
   <label class="col-sm-4 control-label label-format" >BLOOD AGAR PLATE:</label>
  <div class="col-sm-8 control-label">
 <?php echo $result_bap;?>
  
   </div>
</div>


<div class="form-group">	
<label class="col-sm-4 control-label label-format">DATE:</label>
      <div class="col-sm-8 control-label"> <input type="hidden" name="resdate" value="<?php echo $date;?>" />
	  <?php if($date=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($date));?>
				</div>


</div>
<div class="form-group">
<label class="col-sm-4 control-label label-format">COMMENT:</label>
<div class="col-sm-8 control-label">
<?php echo $comment;?>
	</div>
	</div>
	<div class="form-group">
<label class="col-sm-4 control-label label-format">INTERPRETATION:</label>
<div class="col-sm-8 control-label">
<?php echo $interpretation;?>
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
	<label class="col-sm-3 control-label label-format">Entry Date:</label> 
	<div class="col-sm-3 control-label"><?php if($entrytime=='0000-00-00'){echo '';} else echo date('d-m-Y',strtotime($entrytime));?>
	</div>
	</div>
		<div class="form-group">
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
<input type="submit" class="btn btn-danger" name="rejectsubmit" <?php if($status=='Rejected'){?>value="RESULT QUESTIONED"<?php  echo "disabled";
}if($status=='Accepted'){?>value="QUESTION?"<?php echo "disabled"; } ?><?php  }?> >
 
<?php if($status==''){?> <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">QUESTION?</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" contact="dialog">
<?php  require_once 'rejreason.php'; ?>
    </div>
<?php }?>
</div>
		 <div class="col-sm-3"> 
<input type="submit" class="btn btn-success" name="ressubmit_liquidculture" <?php if($status=='Accepted'){?>value="PASSED REVIEW"<?php echo "disabled"; }
 if($status==''){?>value="REVIEW"<?php }  if($status=='Rejected'){?>value="REVIEW"<?php } ?>>
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

<div class="col-md-5">

<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_liquidculture WHERE resdate!='0000-00-00' and status='' ";
$emptyresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalempty=mysqlI_num_rows($emptyresults);			
?>
<div id="" style='font-size:0.9em;background-color:white;   max-height:130px; width:; margin-right:; padding:; overflow:scroll;'>

<b>PENDING LIQUID CULTURE RESULTS REVIEW</b><br>
This is a list of pending LIQUID CULTURE results Review. [TOTAL = <?php echo $totalempty;?>]<br>

<?php
while ($emptyresult = mysqli_fetch_array($emptyresults,MYSQLI_ASSOC)) {
	$emptylabno = $emptyresult['labno'];
	$emptymedia = $emptyresult['media'];
	$select_empty_sc="SELECT * FROM samples WHERE labno=$emptylabno ";
			$empty_scs=mysqli_query($dbconnection,$select_empty_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($empty_sc = mysqli_fetch_array($empty_scs,MYSQLI_ASSOC)) {
				$emptystudycode = $empty_sc['studycode'];
			}
	echo "<a href='?findlabno=$emptylabno&&media=$emptymedia'>$emptystudycode-$emptylabno($emptymedia)</a> &emsp;";
}			
?>
<br>
</div>
<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_liquidculture WHERE status='Rejected'";
$questionedresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalquestioned=mysqlI_num_rows($questionedresults);			
?>		

<div id="" style='font-size:0.9em;background-color:white;   max-height:130px; width:; margin-right:; padding:; overflow:scroll;'>

<b>QUESTIONED  LIQUID CULTURE RESULTS</b><br>
This is a list of Questioned LIQUID Culture Results Review. [TOTAL = <?php echo $totalquestioned;?>]<br>

<?php
while ($questionedresult = mysqli_fetch_array($questionedresults,MYSQLI_ASSOC)) {
	$questioned_labno = $questionedresult['labno'];
	$questionedmedia = $questionedresult['media'];
	$select_questioned_sc="SELECT * FROM samples WHERE labno=$questioned_labno";
			$questioned_scs=mysqli_query($dbconnection,$select_questioned_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($questioned_sc = mysqli_fetch_array($questioned_scs,MYSQLI_ASSOC)) {
				$questionablecode = $questioned_sc['studycode'];
			}
	echo "<a href='?findlabno=$questioned_labno&&media=$questionedmedia'>$questionablecode-$questioned_labno($questionedmedia ) &emsp;</a>";
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