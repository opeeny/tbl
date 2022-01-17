<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php
if(isset($_POST['saveresultsdst1'])){
include("../includes/dbconfig.php");

$row_id=mysqli_real_escape_string($dbconnection,$_POST['row_id']);
/*mysqli_query($dbconnection,"INSERT INTO results_dst1_hist 
SELECT 'NULL',h.*  FROM results_dst1 h WHERE h.id=$row_id") or die("ERROR : " . mysqli_error($dbconnection));
*/
$labno=mysqli_real_escape_string($dbconnection,$_POST['labno']);
$method=mysqli_real_escape_string($dbconnection,$_POST['method']);
$resdate=mysqli_real_escape_string($dbconnection,$_POST['resdate']); if ($resdate!=''){$resdate=date('Y-m-d', strtotime($resdate));}
$comment=mysqli_real_escape_string($dbconnection,$_POST['rescomment']);
$tech=mysqli_real_escape_string($dbconnection,$_POST['restech']);
$tech=mysqli_real_escape_string($dbconnection,$_POST['restech']);
$entrant=$_SESSION['name'];
$entrytime=date('Y-m-d H:i', time());

$drugs=mysqli_query($dbconnection,"SELECT * FROM `option_dstdrugs1`") or die("ERROR : " . mysqli_error($dbconnection));
while ($drug = mysqli_fetch_array($drugs,MYSQLI_ASSOC)){
	$id = $drug['id'];
	$code = $drug['code'];
	$name = $drug['name'];
	$drugcolumn=strtolower($code);
// capture the result of each drug	
//$drugcolumn=preg_replace('#\.#', '_', $drugcolumn);
//$drugcolumn=$_POST[$drugcolumn];

	$drugresult=mysqli_real_escape_string($dbconnection,$_POST[$drugcolumn]);
	//$drugresult=$_POST[$drugcolumn];
	 //echo "<h1>$drugcolumn  ggg $drugresult</h1>";
// Individual update for the result of each drug
//$drugcolumn=preg_replace('#\_#', '.', $drugcolumn);
	mysqli_query($dbconnection,"UPDATE results_dst1 SET `$drugcolumn`='$drugresult' WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"INSERT INTO  results_dst1_hist ( $drugcolumn) VALUES ('$drugresult') ") or die("ERROR : " . mysqli_error($dbconnection));

	if($drugresult=='Contaminated'){
mysqli_query($dbconnection,"UPDATE results_dst1 SET contdate='$resdate' WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
}
	}

// One update for all other variables
mysqli_query($dbconnection,"UPDATE results_dst1 SET method='$method',
resdate='$resdate',comment='$comment',restech='$tech',entrant='$entrant',
entrytime='$entrytime' WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));

$nextrows=mysqli_query($dbconnection,"SELECT labno FROM results_dst1 WHERE labno>$labno AND
 resdate='0000-00-00' ORDER BY labno LIMIT 1");
while ($nextrow = mysqli_fetch_array($nextrows,MYSQLI_ASSOC)) {
$newlabno = $nextrow['labno'];
}

header("location:?resultsubmit=yes&findlabno=".$newlabno);
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

<div class="col-md-6">
<h3>RESULTS ENTRY - DST 1st LINE</h3>
<?php
if(isset($_GET['findlabno'])){
@$labno=$_GET['findlabno'];

if($labno==''){
echo "<script>
alert('Lab No $labno is not registered in LJ DST 1st LINE.');
location.href='resultsentry_dst1.php'
</script> ";
}

include("../includes/dbconfig.php");
@$nextrows=mysqli_query($dbconnection,"SELECT labno FROM results_dst1 WHERE labno>$labno ORDER BY labno LIMIT 1") or die("ERROR : " . mysqli_error($dbconnection));
while ($nextrow = mysqli_fetch_array($nextrows,MYSQLI_ASSOC)) {
@$nextlabno = $nextrow['labno'];
}

@$prevrows=mysqli_query($dbconnection,"SELECT labno FROM results_dst1 WHERE labno<$labno ORDER BY labno DESC LIMIT 1") or die("ERROR : " . mysqli_error($dbconnection));
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
<fieldset class="scheduler-border"><legend  class="scheduler-border" ><b>DST 1 RESULTS ENTRY- SAMPLE SEARCH</b></legend>
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
<input type="button"value="<<PREVIOUS" class="form-control btn btn-success" onclick="location.href='resultsentry_dst1.php?findlabno=<?php echo @$prevlabno;?>'">
</div>
<div class="col-md-2">
<input type="button" value="NEXT>>" class="form-control btn-info" onclick="location.href='resultsentry_dst1.php?findlabno=<?php echo @$nextlabno;?>'">
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
$sql="SELECT * FROM results_dst1 WHERE labno='$labno'";
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

if (mysqli_num_rows($samples) > 0){
while ($sample = mysqli_fetch_array($samples,MYSQLI_ASSOC)) {
	$rejectreason=$sample['rejreason'];
	$row_id = $sample['id'];
	$labno = $sample['labno'];
	$contdate= $sample['contdate'];
	$method = $sample['method'];
	$date=$sample['resdate'];
	$comment=$sample['comment'];
	$tech=$sample['restech'];
	$entrant=$sample['entrant'];
	$entrytime=$sample['entrytime'];
	$select_sc="SELECT * FROM samples WHERE labno=$labno";
			$scs=mysqli_query($dbconnection,$select_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($sc = mysqli_fetch_array($scs,MYSQLI_ASSOC)) {
				$studycode = $sc['studycode'];		
			}
?>	

<div class="form-horizontal">


<form action="<?php echo $_SERVER['PHP_SELF']; ?>"  id="example-1-form" onsubmit="leave()"  method="POST" name="resultsentry-dst1" autocomplete='off'>

<?php if(isset($_GET['qnd'])){
	$qnd=$_GET['qnd']; 
	?>

<div class="form-group">
<label class="col-sm-4 control-label label-format" >REJECTION REASON:</label>
<div class="col-sm-7">
 <?php echo '<b>'.'<font color="red">'.$rejectreason.'</font>'.'</b>';
 ?>
</div>



</div>
<?php }  ?>
<div class="form-group">
<div class="col-sm-4">
<label class="col-sm-7 control-label label-format" >LAB NO:</label> 
<?php echo  '<b>'.'<font color="red">'.$studycode.'-'.$labno.'</font>'.'</b>'; ?>
</div>
</div>
<input type="hidden" name="labno" value='<?php echo $labno; ?>' class="form-control" placeholder="" />
<input type="hidden" name="row_id" value='<?php echo $row_id; ?>'/>

<div class="col-sm-6">
<!-- Dynamically generating an entry field for each drug -->
<?php
include("../includes/dbconfig.php");
$drugs=mysqli_query($dbconnection,"SELECT id,code,`name` FROM `option_dstdrugs1`") or die("ERROR : " . mysqli_error($dbconnection));

while ($drug = mysqli_fetch_array($drugs,MYSQLI_ASSOC)){
	$id = $drug['id'];
	$code = $drug['code'];
	$name = $drug['name'];
	
	$drugcolumn=strtolower($code);
?>	
	<div class="form-group">  
	<label for="" class="col-sm-4 control-label"><?php echo $name; ?></label>
    <div class="col-sm-8"> 
        <select name="<?php echo $drugcolumn; ?>" class="form-control" >
		<option value="<?php echo $sample[$drugcolumn]; ?>"> <?php echo $sample[$drugcolumn]; ?></option>
		<?php
		include("../includes/dbconfig.php");
		$sql="SELECT * FROM resultsoptions_dst1";
		$options=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection ));
		while ($option = mysqli_fetch_array($options,MYSQLI_ASSOC)) {
			$id = $option['id'];
			$code = $option['code'];
			$name = $option['options'];
				
			echo "<option value='$name' style='background-color:#CCCCCC;'>$name</option>";	
		}			
		?>
		</select>
    </div>
	</div>
<?php } ?>
</div>

<div class="col-sm-6">

<div class="form-group">  
	<label for="" class="col-sm-4 control-label">Method</label>
	<div class="col-sm-8">
		<select name="method" class="form-control">
		<option value="<?php echo $method; ?>"> <?php echo $method; ?></option>
		<option value=""></option>
		<?php
		include("../includes/dbconfig.php");
		$sql="SELECT * FROM option_dstmethods WHERE category='dst1'";
		$options=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection ));
		while ($option = mysqli_fetch_array($options,MYSQLI_ASSOC)) {
			$id = $option['id'];
			$code = $option['code'];
			$name = $option['name'];
			$category = $option['category'];
				$type = $option['type'];
			echo "<option value='$code' style='background-color:#CCCCCC;'>$code - $name ($type)</option>";	
		}			
		?>
		</select>
	</div>
</div>

<div class="form-group">  
	<label for="" class="col-sm-3 control-label">Date</label>
	<div class="col-sm-9">
		<div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input14" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($date=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($date));?>" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
        </div>
		<input type="hidden" id="dtp_input14" value="<?php if($date=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($date));?>" name="resdate" />
	</div>
</div>

<div class="form-group">  
	<label for="" class="col-sm-4 control-label">Comment</label>
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
	<label for="" class="col-sm-4 control-label">Tech</label>
	<div class="col-sm-8">
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
<div class="form-group">
<label class="col-sm-4 control-label label-format">CONT DATE:</label>
<div class="col-sm-8">
<?php if($contdate=='0000-00-00'){echo '--';} else echo @date('d-m-Y',strtotime($contdate)); ?>
<input type="hidden" name="rescontdate" value="<?php echo $contdate;?>"  />
</div>
</div>

<div class="form-group">  
	<label for="" class="col-sm-4 control-label">Entrant</label>
	<div class="col-sm-8">
		<?php echo $entrant;?>
	</div>
</div>

<div class="form-group">  
	<label for="" class="col-sm-4 control-label">Entry Time</label>
	<div class="col-sm-8">
		<?php if($entrytime=='0000-00-00 00:00:00'){echo '';} else echo date('d-m-Y h:i a',strtotime($entrytime));?>
	</div>
</div>

<div class="form-group">  
	<div class="col-sm-4"> 
		<input type="submit" name='saveresultsdst1' class="btn btn-success" value='SAVE' class="form-control" placeholder=""/>
    </div>
	<div class="col-sm-8">
		<button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
	</div>
	
</div>

</div>


	
	
</form>
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
</div>


<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_dst1 WHERE resdate='0000-00-00'";
$emptyresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection ));
$totalempty=mysqli_num_rows($emptyresults);			
?>

<div class="col-md-6" style='background-color:white;'>

<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_dst1 WHERE restech=''";
$emptyresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalempty=mysqlI_num_rows($emptyresults);	
	if($totalempty>0){	
?>
<div id="" style='font-size:0.9em;  border:; max-height:100px; width:; margin-right:; padding:; overflow:scroll;'>
<h4><b>PENDING DST 1 RESULTS</b></h4>

This is a list of pending DST1  results. [TOTAL = <?php echo $totalempty;?>]<br>

<?php
while ($emptyresult = mysqli_fetch_array($emptyresults,MYSQLI_ASSOC)) {
	$emptylabno = $emptyresult['labno'];
	$emptymethod = $emptyresult['method'];
	$select_empty_sc="SELECT * FROM samples WHERE labno=$emptylabno ";
			$empty_scs=mysqli_query($dbconnection,$select_empty_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($empty_sc = mysqli_fetch_array($empty_scs,MYSQLI_ASSOC)) {
				$emptystudycode = $empty_sc['studycode'];
			}
	echo "<a href='?findlabno=$emptylabno&&method=$emptymethod'>$emptystudycode-$emptylabno</a> &emsp;";
}	
			
?>
</div>
<?php

	}
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_dst1 WHERE status='Rejected'";
$questionedresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalquestioned=mysqlI_num_rows($questionedresults);	
if($totalquestioned>0)	{		
?>
<div id="" style='font-size:0.9em;  border:; max-height:100px; width:; margin-right:; padding:; overflow:scroll;'>
<h4><b>QUESTIONED  DST1  RESULTS</b></h4>
This is a list of Questioned  DST 1 results. [TOTAL = <?php echo $totalquestioned;?>]<br>

<?php
while ($questionedresult = mysqli_fetch_array($questionedresults,MYSQLI_ASSOC)) {
	$questioned_labno = $questionedresult['labno'];
	$questioned_method = $questionedresult['method'];
	$select_questioned_sc="SELECT * FROM samples WHERE labno=$questioned_labno";
			$questioned_scs=mysqli_query($dbconnection,$select_questioned_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($questioned_sc = mysqli_fetch_array($questioned_scs,MYSQLI_ASSOC)) {
				$questionablecode = $questioned_sc['studycode'];
			}
	echo "<a href='?findlabno=$questioned_labno&&qnd=yes&&method=$questioned_method'>$questionablecode-$questioned_labno &emsp;</a>";
		//echo "<a href='resultsreview_zn.php?findlabno=$emptylabno'>$emptylabno-$emptystudycode</br></a>";
}	
echo "</div>";	
}	
?>


<?PHP if((isset($_GET['findlabno'])) ) {

@$labno=$_GET['findlabno'];
?>

<?php

include("../includes/dbconfig.php");
//echo $labno;
$sql="SELECT * FROM results_dst1_hist  where labno=$labno  ";
$hists=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$hist_count=mysqlI_num_rows($hists);
if($hist_count>0){ 
$select_hist_sc="SELECT * FROM samples WHERE labno=$labno";
$hist_scs=mysqli_query($dbconnection,$select_hist_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($hist_sc = mysqli_fetch_array($hist_scs,MYSQLI_ASSOC)) {
				$histcode = $hist_sc['studycode'];
			} ?>
<h4><b>RESULT EDIT HISTORY FOR LABNO <?php echo "$histcode-$labno <font color='red'>[Total Edits=$hist_count]</font>" ?></b></h4>

<div class="table-responsive">
<table  border="1" class="table">
<?php
	//echo "<table border='1' cellpadding='5' cellspacing='1' bgcolor='91B4DD'>";
	
	
	$i=0;
while ($i < mysqli_num_fields($hists)){
$fld = mysqli_fetch_field($hists);
echo "<th>$fld->name</th>";
$i = $i + 1;
}
echo "</tr>";
while ($hist = mysqli_fetch_array($hists,MYSQLI_ASSOC)) {
echo "<tr align='left' bgcolor='#ffffff'>";

foreach($hist as $column => $value) {
		echo "<td> $value </td>";
}

echo "</tr>";
	}
	echo "</table>";
	echo "</div>";
}
	

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

</body>
</html>