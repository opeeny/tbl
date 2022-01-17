<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php

//$res_table='results_zn';

include("../includes/dbconfig.php");
if(isset($_POST['rejectsubmit'])){
	$reslabno=mysqli_real_escape_string($dbconnection,$_POST['labno']);
	$entrant=mysqli_real_escape_string($dbconnection,$_POST['entrant']);
	$rejreason=mysqli_real_escape_string($dbconnection,$_POST['rejreason']);
$reviewer=$_SESSION['name'];
$reviewdate=date('Y-m-d', time());

$sql = "UPDATE results_dst2 SET reviewer='$reviewer',rejreason='$rejreason',reviewdate='$reviewdate', status='Rejected' WHERE labno=$reslabno";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$sql = "INSERT into results_rejections (rejreason,labno,entrant,test,reviewer)  values('$rejreason','$reslabno','$entrant','DST 1','$reviewer')";

mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$nextrows=mysqli_query($dbconnection,"SELECT labno FROM results_others WHERE labno>$reslabno AND result!='' AND status=''  ORDER BY labno LIMIT 1");
while ($nextrow = mysqli_fetch_array($nextrows,MYSQLI_ASSOC)) {
$newlabno = $nextrow['labno'];
}

header("location:?ressubmit=yes&&findlabno=".$newlabno);	
}
if(isset($_POST['ressubmit_dst2'])){
	$reslabno=mysqli_real_escape_string($dbconnection,$_POST['labno']);
	$entrant=mysqli_real_escape_string($dbconnection,$_POST['entrant']);
$reviewer=$_SESSION['name'];
$reviewdate=date('Y-m-d', time());

$sql = "UPDATE results_dst2 SET reviewer='$reviewer',status='Accepted',reviewdate='$reviewdate' WHERE labno=$reslabno";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

$nextrows=mysqli_query($dbconnection,"SELECT labno FROM results_dst2 WHERE labno>$reslabno AND result!=''AND status='' ORDER BY labno LIMIT 1");
while ($nextrow = mysqli_fetch_array($nextrows,MYSQLI_ASSOC)) {
$newlabno = $nextrow['labno'];
}

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

<div class="col-md-7">
<h3>RESULTS REVIEW - DST 2nd LINE</h3>
<?php
if(isset($_GET['findlabno'])){
@$labno=$_GET['findlabno'];

if($labno==''){
echo "<script>
alert('Lab No $labno is not registered in LJ DST 1st LINE.');
location.href='resultsreview_dst2.php'
</script> ";
}

include("../includes/dbconfig.php");
@$nextrows=mysqli_query($dbconnection,"SELECT labno FROM results_dst2 WHERE labno>$labno ORDER BY labno LIMIT 1") or die("ERROR : " . mysqli_error($dbconnection));
while ($nextrow = mysqli_fetch_array($nextrows,MYSQLI_ASSOC)) {
@$nextlabno = $nextrow['labno'];
}

@$prevrows=mysqli_query($dbconnection,"SELECT labno FROM results_dst2 WHERE labno<$labno ORDER BY labno DESC LIMIT 1") or die("ERROR : " . mysqli_error($dbconnection));
while ($prevrow = mysqli_fetch_array($prevrows,MYSQLI_ASSOC)) {
@$prevlabno = $prevrow['labno'];
}
}
?>

<?php
if(isset($_GET['resultsubmit'])){
if($_GET['resultsubmit']=='yes'){ 
echo "<div id='successmessage' style='border-radius:5px; box-shadow:0px 3px 7px 0px #1d3b53; background-color:green; border:1px green solid;position:absolute; z-index:20; top:0px; left:0px; margin:20px; padding:20px; min-height:;'><center><font color='white'>Results Entry was Successsful</font></center></div>";
}
}

?>
 
<fieldset class="scheduler-border"><legend  class="scheduler-border" ><b>DST 2 RESULTS ENTRY- SAMPLE SEARCH</b></legend>
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
<input type="submit"  name="findsample" value="FIND" class="form-control btn-primary" title="" style="height:30px; width:100px; background-color:;">
</div>
<div class="col-md-3">
<input type="button"value="<<PREVIOUS" class="form-control btn btn-success" onclick="location.href='resultsreview_dst2.php?findlabno=<?php echo @$prevlabno;?>'">
</div>
<div class="col-md-2">
<input type="button" value="NEXT>>" class="form-control btn-info" onclick="location.href='resultsreview_dst2.php?findlabno=<?php echo @$nextlabno;?>'">
</div>
</div>
</div></form>
</fieldset>
<!--
<b>SAMPLE SEARCH</b>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" name="formfindsample" onsubmit="leave()" autocomplete="off">
<label>LAB NO</label>:<input name="findlabno"  class="form-control" type="text" placeholder="Search LAB NO" style="height:; width:; background-color:;"/>
<input type="submit" name="findsample" value="FIND" title="" style="height:30px; width:100px; background-color:;">
<input type="button" value="PREVIOUS" style="height:30px; width:100px; background-color:;" onclick="location.href='?findlabno=<?php echo @$prevlabno;?>'">
<input type="button" value="NEXT" style="height:30px; width:100px; background-color:;" onclick="location.href='?findlabno=<?php echo @$nextlabno;?>'">
</form>
<br>-->


<?php if(isset($_GET['findlabno'])){?> 

<!---   SELECTING CURRENT VALUES FROM RESULTS TABLE ----- -->
<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_dst2 WHERE labno='$labno'";
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

if (mysqli_num_rows($samples) > 0){
while ($sample = mysqli_fetch_array($samples,MYSQLI_ASSOC)) {
	$labno = $sample['labno'];
	
	$contdate= $sample['contdate'];
	$method = $sample['method'];
	$date=$sample['resdate'];
	$comment=$sample['comment'];
	$tech=$sample['restech'];
	$entrant=$sample['entrant'];
	$entrytime=$sample['entrytime'];
	$reviewdate=$sample['reviewdate']; if($reviewdate=='0000-00-00'){$reviewdate='';} 
	else{$reviewdate=date('d-m-Y ',strtotime($reviewdate));}
	//if($entrydate=='0000-00-00'){echo '';} else echo date('d-m-Y H:i:s',strtotime($entrydate));
	$reviewer=$sample['reviewer']; if($reviewer=='0000-00-00'){$reviewer='';}
	$status=$sample['status'];
	$select_sc="SELECT * FROM samples WHERE labno=$labno";
			$scs=mysqli_query($dbconnection,$select_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($sc = mysqli_fetch_array($scs,MYSQLI_ASSOC)) {
				$studycode = $sc['studycode'];		
			}
?>	
<div style='background-color:white; '>
  <fieldset class="scheduler-border"><legend class="scheduler-border"><b><font size='6em'>LAB NO <a href='#'>
 <font color='red'><u><?php echo  @$studycode.'-'.$labno ;?></u></font></a></font></b></legend>


<form action="" class="form-control" method="POST"  autocomplete='off'>
<div class="form-horizontal">
<input type="hidden" name="labno" value='<?php echo $labno; ?>'  />
<input type="hidden" name="entrant" value='<?php echo $entrant; ?>'  />

<div class="col-sm-6">

<!-- Dynamically generating an entry field for each drug -->
<?php
include("../includes/dbconfig.php");
$drugs=mysqli_query($dbconnection,"SELECT * FROM option_dstdrugs2") or die("ERROR : " . mysqli_error($dbconnection));

while ($drug = mysqli_fetch_array($drugs,MYSQLI_ASSOC)){
	$id = $drug['id'];
	$code = $drug['code'];
	$name = $drug['name'];
	
	$drugcolumn=strtolower($name);
?>	
	<div class="form-group">  
	<label for="" class="col-sm-4 control-label label-format"><?php echo $name; ?></label>
    <div class="col-sm-8"> <?php echo $sample[$drugcolumn]; ?>
        
    </div>
	</div>
<?php } ?>
</div>


<div class="col-sm-6">

<div class="form-group">  
	<label for="" class="col-sm-4 control-label label-format">Method:</label>
	<div class="col-sm-8"> <?php echo $method; ?>
		
	</div>
</div>

<div class="form-group">  
	<label for="" class="col-sm-2 control-label label-format">Date</label>
	<div class="col-sm-10">
	<?php if($date=='0000-00-00'){echo '';} else echo date('d-m-Y',strtotime($date));?>
	</div>
</div>

<div class="form-group">  
	<label for="" class="col-sm-4 control-label label-format">Comment</label>
	<div class="col-sm-8"><?php echo $comment;?>
		
	</div>
</div>

<div class="form-group">  
	<label for="" class="col-sm-4 control-label label-format">Tech</label>
	<div class="col-sm-8"><?php echo $tech;?>
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
	<label for="" class="col-sm-4 control-label label-format">Entrant</label>
	<div class="col-sm-8">
		<?php echo $entrant;?>
	</div>
</div>

<div class="form-group">  
	<label for="" class="col-sm-4 control-label label-format">Entry Time</label>
	<div class="col-sm-8">
		<?php if($entrytime=='0000-00-00 00:00:00'){echo '';} else echo date('d-m-Y h:i a',strtotime($entrytime));?>
	</div>
</div>

<div class="form-group">
	<div class="col-sm-3"> 
<?php if($status=='Rejected' or $status=='Accepted'){?>
<input type="submit" class="btn btn-danger" name="rejectsubmit" <?php if($status=='Rejected'){?>value="RESULT QUESTIONED"<?php  echo "disabled >";}
 if($status=='Accepted'){?>value="QUESTION?"<?php echo "disabled"; } ?>><?php  }?> 
 
<?php if($status==''){?> 
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">QUESTION?</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" contact="dialog">
<?php  require_once 'rejreason.php'; ?>
    </div>
<?php }?>
</div>
		 <div class="col-sm-3"> 
<input type="submit" class="btn btn-success" name="ressubmit_dst2" <?php if($status=='Accepted'){?>value="RESULT PASSED REVIEW"<?php }
 if($status==''){?>value="REVIEW"<?php }  if($status=='Rejected'){?>value="REVIEW"<?php } ?>>
</div>
 
	
</div>

</div>	
</form>

</fieldset>
</div>


<?php 
}
}
else{
echo "<script>
alert('Lab No $labno is not registered in DST 1st Line.');
</script> ";
}

}
?>
</div>


<div class="col-md-5">
<br>
<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_dst2 WHERE reviewer=''";
$emptyresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection ));
$totalempty=mysqli_num_rows($emptyresults);			
?>
<div id="" style='font-size:0.9em;background-color:white;   max-height:130px; width:; margin-right:; padding:; overflow:scroll;'>

<b>PENDING LJ DST 1st LINE</b><br>
This is a list of pending LJ DST 1st Line results. [TOTAL = <?php echo $totalempty;?>]<br>

<?php 
while ($emptyresult = mysqli_fetch_array($emptyresults,MYSQLI_ASSOC)) {
	$emptylabno = $emptyresult['labno'];
	$select_empty_sc="SELECT * FROM samples WHERE labno=$emptylabno";
			$empty_scs=mysqli_query($dbconnection,$select_empty_sc) or die("ERROR : " . mysqli_error($dbconnection ));
			while ($empty_sc = mysqli_fetch_array($empty_scs,MYSQLI_ASSOC)) {
				$emptystudycode = $empty_sc['studycode'];
			}
	echo "<a href='?findlabno=$emptylabno'>$emptystudycode-$emptylabno</a>&emsp;";
}
?>
</div>
<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_dst2 WHERE status='Rejected'";
$questionedresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalquestioned=mysqlI_num_rows($questionedresults);			
?>
<br>
<div id="" style='font-size:0.9em;background-color:white;   max-height:130px; width:; margin-right:; padding:; overflow:scroll;'>

<b>QUESTIONED  RESULTS DST 1 RESULTS</b><br>
This is a list of Questioned DST 1 Results Review. [TOTAL = <?php echo $totalquestioned;?>]<br>

<?php
while ($questionedresult = mysqli_fetch_array($questionedresults,MYSQLI_ASSOC)) {
	$questioned_labno = $questionedresult['labno'];
	$questionedmethod = $questionedresult['method'];
	$select_questioned_sc="SELECT * FROM samples WHERE labno=$questioned_labno";
			$questioned_scs=mysqli_query($dbconnection,$select_questioned_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($questioned_sc = mysqli_fetch_array($questioned_scs,MYSQLI_ASSOC)) {
				$questionablecode = $questioned_sc['studycode'];
			}
	echo "<a href='?findlabno=$questioned_labno&&method=$questionedmethod '>$questionablecode-$questioned_labno &emsp;</a>";
		//echo "<a href='resultsreview_zn.php?findlabno=$emptylabno'>$emptylabno-$emptystudycode</br></a>";
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