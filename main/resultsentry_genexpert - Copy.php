<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php
//$res_table='results_genexpert';


include("../includes/dbconfig.php");
if(isset($_POST['ressubmit_genexpert'])){
$reslabno=mysqli_real_escape_string($dbconnection,$_POST['reslabno']);
$probed=mysqli_real_escape_string($dbconnection,$_POST['probed']);
$probec=mysqli_real_escape_string($dbconnection,$_POST['probec']);
$probee=mysqli_real_escape_string($dbconnection,$_POST['probee']);
$spc=mysqli_real_escape_string($dbconnection,$_POST['spc']);
$qc1=mysqli_real_escape_string($dbconnection,$_POST['qc1']);
$qc2=mysqli_real_escape_string($dbconnection,$_POST['qc2']);
$probeb=mysqli_real_escape_string($dbconnection,$_POST['probeb']);
$probea=mysqli_real_escape_string($dbconnection,$_POST['probea']);
$resresult=mysqli_real_escape_string($dbconnection,$_POST['resresult']);
$resdate=mysqli_real_escape_string($dbconnection,$_POST['resdate']); if ($resdate!=''){$resdate=date('Y-m-d', strtotime($resdate));}
$rescomment=mysqli_real_escape_string($dbconnection,$_POST['rescomment']);
$restech=strtoupper(mysqli_real_escape_string($dbconnection,$_POST['restech']));
$entrant=$_SESSION['name'];
$entrydate=date('Y-m-d H:i:s', time());
$qned=mysqli_real_escape_string($dbconnection,$_POST['qned']);

$sql="SELECT * FROM results_genexpert WHERE labno='$reslabno' and entrytime!='0000-00-00' ";
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
	$date=$sample['resdate'];
	$comment=$sample['comment'];
	//$comment2=$sample['comment2'];
	$tech=$sample['restech'];
	$oldprobea=$sample['probea'];
	$oldprobeb=$sample['probeb'];
	$oldprobec=$sample['probec'];
	$oldprobed=$sample['probed'];
	$oldprobee=$sample['probee'];
	$oldspc=$sample['spc'];
	$oldqc1=$sample['qc1'];
	$oldqc2=$sample['qc2'];
	$oldentrant=$sample['entrant'];
	$oldentrydate=$sample['entrytime'];
	if($result!=$resresult or $date!=$resdate or $comment!=$rescomment or $tech!=$restech or $oldprobea!=$probea
	or $oldprobeb!=$probeb or $oldprobec!=$probec  or $oldprobed!=$probed or $oldprobee!=$probee or 
	$oldspc!=$spc or $oldqc1!=$qc1 or $oldqc2!=$qc2){
		$entrycorrected='yes';
	}
} /* Ending while */

$sql_history = "INSERT into results_genexpert_hist(probea,probeb,probec,probed,probee,spc,qc1,qc2,labno,result,comment,resdate,restech,entrant,entrytime)
 values ('$oldprobea','$oldprobeb','$oldprobec','$oldprobed','$oldprobee','$oldspc','$oldqc1','$oldqc2',
 '$reslabno','$result','$comment','$date','$tech','$oldentrant','$oldentrydate')";
mysqli_query($dbconnection,$sql_history) or die("ERROR : " . mysqli_error($dbconnection));
}
if($qned=='yes' and $entrycorrected=='yes'){
$sql = "UPDATE results_genexpert SET status='',probea='$probea',probeb='$probeb',probec='$probec',probed='$probed',probee='$probee',spc='$spc',
qc1='$qc1',qc2='$qc2',result='$resresult',comment='$rescomment',resdate='$resdate',restech='$restech',
entrant='$entrant',entrytime='$entrydate',reviewer='',reviewdate='' WHERE labno=$reslabno";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
}
else{
$sql = "UPDATE results_genexpert SET probea='$probea',probeb='$probeb',probec='$probec',probed='$probed',probee='$probee',spc='$spc',
qc1='$qc1',qc2='$qc2',result='$resresult',comment='$rescomment',resdate='$resdate',restech='$restech',
entrant='$entrant',entrytime='$entrydate',reviewer='',reviewdate='' WHERE labno=$reslabno";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));	
}
$nextrows=mysqli_query($dbconnection,"SELECT labno FROM results_genexpert WHERE labno>$reslabno AND result='' ORDER BY labno LIMIT 1");
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
alert('Lab No $labno is not registered in GENEXPERT.');
location.href='resultsentry_genexpert.php'
</script> ";
}

include("../includes/dbconfig.php");
@$nextrows=mysqli_query($dbconnection,"SELECT labno FROM results_genexpert WHERE labno>$labno ORDER BY labno LIMIT 1");
while ($nextrow = mysqli_fetch_array($nextrows,MYSQLI_ASSOC)) {
@$nextlabno = $nextrow['labno'];
}

@$prevrows=mysqli_query($dbconnection,"SELECT labno FROM results_genexpert WHERE labno<$labno ORDER BY labno DESC LIMIT 1");
while ($prevrow = mysqli_fetch_array($prevrows,MYSQLI_ASSOC)) {
@$prevlabno = $prevrow['labno'];
}
}
?>
<?php
if(isset($_GET['ressubmit'])){
if($_GET['ressubmit']=='yes'){ 
echo "<div id='successmessage' style='border-radius:5px; box-shadow:0px 3px 7px 0px #1d3b53; background-color:green;
 border:1px green solid;position:absolute; z-index:20; top:0px; left:0px; margin:20px; padding:20px; min-height:;'><center><font color='white'>Results Entry was Successsful</font></center></div>";
}
}
?>
<div class="col-md-7">
<fieldset class="scheduler-border"><legend  class="scheduler-border" ><b>GENEXPERT  RESULTS ENTRY- SAMPLE SEARCH</b></legend>
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
<input type="submit"  name="findsample" class="form-control btn-primary" value="FIND">
</div>
<div class="col-md-3">
<input type="button" value="<<PREVIOUS" class="form-control btn-success" onclick="location.href='resultsentry_genexpert.php?findlabno=<?php echo @$prevlabno;?>'">
</div>
<div class="col-md-2">
<input type="button" value="NEXT>>" class="form-control btn-info" onclick="location.href='resultsentry_genexpert.php?findlabno=<?php echo @$nextlabno;?>'">
</div>
</div>
</div></form>
</fieldset>
<?PHP if(isset($_GET['findlabno'])){?> 
<?php
@$labno=$_GET['findlabno'];
include("../includes/dbconfig.php");

$sql="SELECT * FROM results_genexpert WHERE labno='$labno' ";
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

if (mysqli_num_rows($samples) > 0){
while ($sample = mysqli_fetch_array($samples)) {
	$labno = $sample['labno'];
	$select_sc="SELECT * FROM samples WHERE labno=$labno";
			$scs=mysqli_query($dbconnection,$select_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($sc = mysqli_fetch_array($scs,MYSQLI_ASSOC)) {
				$studycode = $sc['studycode'];		
			}
	$probea=$sample['probea'];
	$probeb=$sample['probeb'];
	$probec=$sample['probec'];
	$probed=$sample['probed'];
	$probee=$sample['probee'];
	$spc=$sample['spc'];
	$qc1=$sample['qc1'];
	$qc2=$sample['qc2'];
	
	$result=$sample['result'];
	$date=$sample['resdate'];
	$comment=$sample['comment'];
	
	//$comment2=$sample['comment2'];
	$tech=$sample['restech'];
	$entrant=$sample['entrant'];
	$entrydate=$sample['entrytime'];
} /* Ending while */
} /* Ending if */

else{
echo "<script>
alert('There is no GENEXPERT results for Lab No $labno.');
location.href='resultsentry_genexpert.php'
</script> ";
}


?>
 
 <fieldset class="scheduler-border"><legend class="scheduler-border"><b><font size='6em'>LAB NO <a href='#' title="Click to view request details" ><font color='red'><u><?php echo  @$studycode.'-'.$labno;?></u></font></a></font></b></legend>

<div style='background-color:white; '>
<form action="" class="form-control" method="POST"  id="example-1-form" onsubmit="leave()" autocomplete='off'>
<div class="form-horizontal">
<div class="form-group">

<b class="col-sm-6">GENEXPERT</b>
</div>
<div class="form-group">
<input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
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

<label class="col-sm-2 control-label label-format" >RESULT:</label>
<div class="col-sm-8">
	<select name="resresult"  class="form-control">
			<option value="<?php echo $result;?>"><?php echo $result;?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM resultsoptions_genexpert ORDER BY options";
			$options=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($option = mysqli_fetch_array($options,MYSQLI_ASSOC)) {
				$genexpertoption = $option['options'];
				$code= $option['code'];
				
			echo "<option value='$genexpertoption' style='background-color:#CCCCCC;'>$genexpertoption</option>";	
			}			
			?>
	</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label label-format">COMMENT:</label>
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
<label class="col-sm-3 control-label label-format">RESULT DATE:</label>
      <div class="col-sm-6"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input14" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($date=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($date));?>"  readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input14" value="<?php if($date=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($date));?>"  name="resdate" />
				</div>
				</div>
				<div class="form-group">
<label class="col-sm-1 control-label label-format">TECH:</label>
<div class="col-sm-5">
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
	<label class="col-sm-2 control-label label-format">ENTRANT:</label> 
	<div class="col-sm-3"> <?php echo $entrant;?>
	</div>
	<label class="col-sm-3 control-label label-format">ENTRY DATE:</label> 
	<div class="col-sm-3"><?php if($entrydate=='0000-00-00 00:00:00'){echo '';} else echo date('d-m-Y H:i:s',strtotime($entrydate));?>
	</div>
	</div>
	<div class="form-group">
	<div class="col-sm-4"></div>
	<label class="col-sm-2 control-label label-format">CT VALUES</label> 
	<div class="col-sm-4"></div>
	</div>
	<div class="form-group"> 
<label  class="col-sm-2 control-label label-format">PROBE D</label>
      <div class="col-sm-2"> 
        <input type="text" class="form-control" value="<?php echo $probed;?>" name="probed"  />
      </div>
      <label for="Village" class="col-sm-2 control-label label-format">PROBE C</label>
      <div class="col-sm-2"> 
            <input type="text" class="form-control" value="<?php echo $probec;?>"  name="probec"  />
       </div>
	    <label for="Village" class="col-sm-2 control-label label-format">PROBE E</label>
      <div class="col-sm-2"> 
            <input type="text" class="form-control" value="<?php echo $probee;?>" name="probee" />
       </div>
	  
	  
    </div>
	<div class="form-group"> 
<label  class="col-sm-2 control-label label-format">PROBE B</label>
      <div class="col-sm-2"> 
        <input type="text" class="form-control"  value="<?php echo $probeb;?>" name="probeb" id="probeb" 
onkeyup="showRegisteredPatients_name(this.value)" />
      </div>
      <label for="Village" class="col-sm-2 control-label label-format">SPC </label>
      <div class="col-sm-2"> 
            <input type="text" class="form-control"  value="<?php echo $spc;?>"name="spc" />
       </div>
	    <label for="Village" class="col-sm-2 control-label label-format">PROBE A</label>
      <div class="col-sm-2"> 
            <input type="text" class="form-control"  value="<?php echo $probea;?>" name="probea" />
       </div>
	  
    </div>
	<div class="form-group"> 
<label  class="col-sm-2 control-label label-format">QC-1</label>
      <div class="col-sm-2"> 
        <input type="text" class="form-control"  value="<?php echo $qc1;?>" name="qc1" id="surname" 
onkeyup="showRegisteredPatients_name(this.value)" />
      </div>
      <label for="Village" class="col-sm-2 control-label label-format">QC-2 </label>
      <div class="col-sm-2"> 
            <input type="text" class="form-control" value="<?php echo $qc2;?>" name="qc2" />
       </div>
	  
	  
    </div>
	<div class="form-group">
	<div class="col-sm-5"> 
	</div>
	 <div class="col-sm-2"> 
<input type="submit" class="btn btn-success" name="ressubmit_genexpert" value="SAVE" >
</div>
</div>
</div>
</form>
</div>

</fieldset>

<?php } ?>
</div>
<div class="col-md-5" style='background-color:white;'>

<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_genexpert WHERE result=''";
$emptyresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalempty=mysqlI_num_rows($emptyresults);			
?>
<div id="" style='font-size:0.9em;  max-height:130px; width:; margin-right:; padding:; overflow:scroll;'>
<h4><b>PENDING GENEXPERT RESULTS</b></h4>

This is a list of pending GENEXPERT results. [TOTAL = <?php echo $totalempty;?>]<br>

<?php
while ($emptyresult = mysqli_fetch_array($emptyresults,MYSQLI_ASSOC)) {
	$emptylabno = $emptyresult['labno'];
	$select_empty_sc="SELECT * FROM samples WHERE labno=$emptylabno";
			$empty_scs=mysqli_query($dbconnection,$select_empty_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($empty_sc = mysqli_fetch_array($empty_scs,MYSQLI_ASSOC)) {
				$emptystudycode = $empty_sc['studycode'];
			}
	echo "<a href='?findlabno=$emptylabno'>$emptystudycode-$emptylabno &emsp;</a>";
		//echo "<a href='resultsentry_genexpert.php?findlabno=$emptylabno'>$emptylabno-$emptystudycode</br></a>";
}			
?>


</div>
<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_genexpert WHERE status='Rejected'";
$questionedresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalquestioned=mysqlI_num_rows($questionedresults);	
if($totalquestioned>0)	{		
?>		

<div id="" style='font-size:0.9em;  border:; max-height:130px; width:; margin-right:; padding:; overflow:scroll;'>
<h4><b>QUESTIONED  GENEXPERT RESULTS</b></h4>
This is a list of Questioned  MICROSCOPY ZN results. [TOTAL = <?php echo $totalquestioned;?>]<br>

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
} echo "</div>";		
}	
?>

<?PHP if(isset($_GET['findlabno'])){

@$labno=$_GET['findlabno'];
?>

<?php

include("../includes/dbconfig.php");

$sql="SELECT * FROM results_genexpert_hist where labno=$labno ORDER BY id DESC ";
$hists=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$hist_count=mysqli_num_rows($hists);

if($hist_count>0){ 
//echo "<h2>lab is $labno</h2>";
$select_hist_sc="SELECT * FROM samples WHERE labno=$labno";
$hist_scs=mysqli_query($dbconnection,$select_hist_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($hist_sc = mysqli_fetch_array($hist_scs,MYSQLI_ASSOC)) {
				$histcode = $hist_sc['studycode'];
			} ?>
	<div id="" style='font-size:0.9em; background-color:white; border:; max-height:250px; width:; margin-right:; padding:; overflow:scroll;'>
<h4><b>RESULT EDIT HISTORY FOR LABNO <?php echo "$histcode-$labno <font color='red'>[Total Edits=$hist_count]</font>" ?></b></h4>
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