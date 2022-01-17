<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php
//$res_table='results_zn';


include("../includes/dbconfig.php");
if(isset($_POST['rejectsubmit'])){
	$reslabno=mysqli_real_escape_string($dbconnection,$_POST['reslabno']);
	$entrant=mysqli_real_escape_string($dbconnection,$_POST['entrant']);
	$rejreason=mysqli_real_escape_string($dbconnection,$_POST['rejreason']);
$reviewer=$_SESSION['name'];
$reviewdate=date('Y-m-d', time());

$sql = "UPDATE results_fm SET reviewer='$reviewer',rejreason='$rejreason',reviewdate='$reviewdate', status='Rejected' WHERE labno=$reslabno";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$sql = "INSERT into results_rejections (rejreason,labno,entrant,test,reviewer)  values('$rejreason','$reslabno','$entrant','Microscopy_FM','$reviewer')";

mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$nextrows=mysqli_query($dbconnection,"SELECT labno FROM results_fm WHERE labno>$reslabno AND result!='' AND status=''  ORDER BY labno LIMIT 1");
while ($nextrow = mysqli_fetch_array($nextrows,MYSQLI_ASSOC)) {
$newlabno = $nextrow['labno'];
}

header("location:?ressubmit=yes&&findlabno=".$newlabno);
	
	
	
	
}
if(isset($_POST['ressubmit_fm'])){
	$reslabno=mysqli_real_escape_string($dbconnection,$_POST['reslabno']);
$reviewer=$_SESSION['name'];
$reviewdate=date('Y-m-d', time());
$sql = "UPDATE results_fm SET reviewer='$reviewer',status='Accepted',reviewdate='$reviewdate' WHERE labno=$reslabno";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

$nextrows=mysqli_query($dbconnection,"SELECT labno FROM results_fm WHERE labno>$reslabno AND result!=''AND status='' ORDER BY labno LIMIT 1");
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
<div class="row">

<?PHP if(isset($_GET['findlabno'])){?> 
<?php
@$labno=$_GET['findlabno'];
include("../includes/dbconfig.php");
if($labno==''){
echo "<script>
alert('Lab No $labno is not registered in Microscopy FM.');
location.href='resultsreview_fm.php'
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
echo "<div id='successmessage' style='border-radius:5px; box-shadow:0px 3px 7px 0px #1d3b53; background-color:green; border:1px green solid;position:absolute; z-index:20; top:0px; left:0px; margin:20px; padding:20px; min-height:;'><center><font color='white'>Results Review was Successsful</font></center></div>";
}
}
?>
<div class="col-md-7">
<fieldset class="scheduler-border"><legend  class="scheduler-border" ><b>MICROSCOPY -FM  RESULTS REVIEW- SAMPLE SEARCH</b></legend>
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
<input type="submit"  name="findsample" class="form-control btn-primary" value="FIND" title="">
</div>
<div class="col-md-3">
<input type="button" value="<<PREVIOUS" class="form-control btn-success" onclick="location.href='resultsreview_fm.php?findlabno=<?php echo @$prevlabno;?>'">
</div>
<div class="col-md-2">
<input type="button" value="NEXT>>" class="form-control btn-info" onclick="location.href='resultsreview_fm.php?findlabno=<?php echo @$nextlabno;?>'">
</div>
</div>
</div></form>
</fieldset>
<?PHP if(isset($_GET['findlabno'])){?> 
<?php
@$labno=$_GET['findlabno'];
include("../includes/dbconfig.php");

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
	$result=$sample['result'];
	$date=$sample['resdate'];
	$comment=$sample['comment'];
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
alert('There is no Microscopy FM result for Lab No $labno.');
location.href='resultsreview_fm.php'
</script> ";
}


?>
 <div style='background-color:white; '>
 <fieldset class="scheduler-border"><legend class="scheduler-border"><b><font size='6em'>LAB NO <a href='#' title="Click to view request details" onclick="window.open('#showpatientandsample.php?labno=<?php echo $labno;?>','mywindow','left=10,top=10,resizable=no,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=no');"><font color='red'><u><?php echo  @$studycode.'-'.$labno ;?></u></font></a></font></b></legend>


<form action="" class="form-control" method="POST" id="example-1-form" onsubmit="leave()" autocomplete='off'>
<div class="form-horizontal">
<div class="form-group">

<b class="col-sm-6">MICROSCOPY FM</b>
</div>
<div class="form-group">
<input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
<input name="entrant" type="hidden" value="<?php echo $entrant;?>"/>

<label class="col-sm-2 control-label label-format" >RESULT:</label>
<div class="col-sm-8 control-label">
	
			<?php echo $result;?>
</div>
</div>
<div class="form-group">	
<label class="col-sm-2 control-label label-format">DATE:</label>
      <div class="col-sm-8 control-label"> 
	  <?php if($date=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($date));?> 
				</div>



</div>
<div class="form-group">
<label class="col-sm-2 control-label label-format">COMMENT:</label>
<div class="col-sm-8 control-label">
<?php echo $comment;?>
	
	</div>
	</div>
<div class="form-group">
<label class="col-sm-2 control-label label-format">TECH:</label>
<div class="col-sm-8 control-label">
	<?php echo $tech;?>
	</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label label-format">ENTRANT:</label> 
	<div class="col-sm-3 control-label"> <?php echo $entrant;?>
	</div>
	<label class="col-sm-3 control-label label-format">ENTRY DATE:</label> 
	<div class="col-sm-3 control-label"><?php if($entrydate=='0000-00-00'){echo '';} else echo date('d-m-Y H:i:s',strtotime($entrydate));?>
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
<input type="submit" class="btn btn-success" name="ressubmit_fm" <?php if($status=='Accepted'){?>value="RESULT PASSED REVIEW"<?php }
 if($status==''){?>value="REVIEW"<?php }  if($status=='Rejected'){?>value="REVIEW"<?php } ?>>
</div>
 
	
</div>
</div>
</form>
</div>

</fieldset>

<?php } ?>
</div>
<div class="col-md-5">

<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_fm WHERE result!=''  and status=''";
$emptyresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalempty=mysqlI_num_rows($emptyresults);			
?>
<div id="" style='font-size:0.9em;background-color:white;   max-height:130px; width:; margin-right:; padding:; overflow:scroll;'>

<b>PENDING MICROSCOPY FM RESULTS REVIEW</b><br>
This is a list of pending MICROSCOPY FM results Review. [TOTAL = <?php echo $totalempty;?>]<br>

<?php
while ($emptyresult = mysqli_fetch_array($emptyresults,MYSQLI_ASSOC)) {
	$emptylabno = $emptyresult['labno'];
	$select_empty_sc="SELECT * FROM samples WHERE labno=$emptylabno";
			$empty_scs=mysqli_query($dbconnection,$select_empty_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($empty_sc = mysqli_fetch_array($empty_scs,MYSQLI_ASSOC)) {
				$emptystudycode = $empty_sc['studycode'];
			}
	echo "<a href='?findlabno=$emptylabno'>$emptystudycode-$emptylabno &emsp;</a>";
		//echo "<a href='resultsreview_fm.php?findlabno=$emptylabno'>$emptylabno-$emptystudycode</br></a>";
}			
?>

</div>
<br>

<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_fm WHERE status='Rejected'";
$questionedresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalquestioned=mysqlI_num_rows($questionedresults);			
?>		

<div id="" style='font-size:0.9em;background-color:white;   max-height:130px; width:; margin-right:; padding:; overflow:scroll;'>

<b>QUESTIONED  MICROSCOPY FM RESULTS</b><br>
This is a list of pending MICROSCOPY FM results Review. [TOTAL = <?php echo $totalquestioned;?>]<br>

<?php
while ($questionedresult = mysqli_fetch_array($questionedresults,MYSQLI_ASSOC)) {
	$questioned_labno = $questionedresult['labno'];
	$select_questioned_sc="SELECT * FROM samples WHERE labno=$questioned_labno";
			$questioned_scs=mysqli_query($dbconnection,$select_questioned_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($questioned_sc = mysqli_fetch_array($questioned_scs,MYSQLI_ASSOC)) {
				$questionablecode = $questioned_sc['studycode'];
			}
	echo "<a href='?findlabno=$questioned_labno'>$questionablecode-$questioned_labno &emsp;</a>";
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