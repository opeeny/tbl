<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

<?php	
if(isset($_POST['edit_sample']))
{
include("../includes/dbconfig.php");	
	@$labno=(mysqli_real_escape_string($dbconnection,$_POST['labno']));
	@$process_date=(mysqli_real_escape_string($dbconnection,$_POST['process_date']));
	@$process_time=$_POST['process_time'];
	$process_time= date('H:i:s',strtotime($process_time));
	if($process_time=='03:00:00' or $process_time=='00:00:00'){$process_time='';}
	@$process_tech=(mysqli_real_escape_string($dbconnection,$_POST['process_tech']));
	$editedby=$_SESSION['name'];
	$lastedittime=date('Y-m-d H:i', time());

$updatesample=mysqli_query($dbconnection,"UPDATE samples SET 
processtime='$process_time',processdate='$process_date',processtech='$process_tech',
lasteditby='$editedby',lastedittime='$lastedittime' where labno='$labno' ") or die("ERROR : " . mysqli_error($dbconnection));

$nextfindlabno=$labno+1;

header("location:process_edit.php?findlabno=".$nextfindlabno."&scode=".$studycode."&edited=".$labno);
//echo "<h1>receivd is $recieved_date</h1>";
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

<div class="col-md-12"> 


<div class="searchsample">
<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM samples WHERE processtech='' or processdate='0000-00-00' or processtime='00:00:00' ";
$unediteds=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalunedited=mysqli_num_rows($unediteds);	

$sqlu10="SELECT * FROM samples WHERE processtech='' or processdate='0000-00-00' or processtime='00:00:00' limit 0,10 ";
$unediteds_10=mysqli_query($dbconnection,$sqlu10) or die("ERROR : " . mysqli_error($dbconnection));

		
?>
<?php
if(isset($_GET['edited'])){
@$scode=$_GET['scode'];
$edited=$_GET['edited'];

echo "<div id='successmessage'
 <center>Sample $edited Update was Successsful!</div>";
}

@$labno=$_GET['findlabno'];
$prevlabno=$labno-1;
$nextlabno=$labno+1;

?>
<fieldset class="scheduler-border"> <legend  class="scheduler-border"><b>SAMPLE PROCESSING DATA ENTRY</b></legend>
<div class="form-horizontal">
<form action="process_edit.php" method="GET" name="formfindsample" onsubmit="return validateformfindsample();" autocomplete="off">

<div class="form-group"> 
<label class="col-sm-1 control-label label-format">LAB NO:</label>
<div class="col-sm-3"> 
    <input type="text" class="form-control" name="findlabno" type="text" placeholder="Search LAB NO" autofocus />
</div>
<div class="col-sm-1"> 
<input type="submit" name="findsample" value="FIND" class="form-control btn-primary" title="" style="height:30px; width:100px; background-color:;">
</div>
<div class="col-md-2">
<input type="button" value="<<PREVIOUS" class="form-control btn-success" onclick="location.href='process_edit.php?findlabno=<?php echo $prevlabno;?>'">
</div>
<div class="col-sm-1"> 
<input type="button" value="NEXT>>" class="form-control btn-info"onclick="location.href='process_edit.php?findlabno=<?php echo $nextlabno;?>'">
</div>
</div>

</form>
</div>
<font color='red'>** There are <?php echo $totalunedited ?> records whose details are Missing Processing Data*</font> 
<br><b>FIRST 10 INCLUDE: </b>
<?php
while ($unediteds_10s = mysqli_fetch_array($unediteds_10,MYSQLI_ASSOC)) {
	$labno_10 = $unediteds_10s['labno'];
	$select_studycode_10="SELECT * FROM samples WHERE labno=$labno_10";
			$scs_10=mysqlI_query($dbconnection,$select_studycode_10) or die("ERROR : " . mysql_error($dbconnection));
			while ($sc_10 = mysqli_fetch_array($scs_10,MYSQLI_ASSOC)) {
				$studycode_10 = $sc_10['studycode'];
			}
	echo "<a href='?findlabno=$labno_10'>$studycode_10-$labno_10</a> &emsp;";
		//echo "<a href='resultsentry_fm.php?findlabno=$emptylabno'>$emptylabno-$emptystudycode</br></a>";
}
?></br>
</fieldset>

<br>

<?php
if(isset($_GET['findlabno'])){	
?>
<?php 
include("../includes/dbconfig.php");

$sql="SELECT * FROM samples WHERE labno='$labno'";
$samples=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

if (mysqli_num_rows($samples) > 0){
while ($sample = mysqli_fetch_array($samples,MYSQLI_ASSOC)) {
	$labno = $sample['labno'];
$s_code = $sample['studycode'];
//	@$requester=$req['name'];
	

	$processtech = $sample['processtech'];
	$processdate = $sample['processdate'];
	

$processtime = $sample['processtime'];
	if($processtime=='03:00:00' or $processtime=='00:00:00'){$processtime='';}


} //ending while
}// ending if
else{
echo "<script>
alert('The Lab No $labno is not registered.');
location.href='process_edit.php'
</script> ";
}

//echo "<font color='red'><b><center><h1>App $appearance</h1></center></b></font>"; ?>
<fieldset class="scheduler-border">
<legend  class="scheduler-border" align="">EDITING PROCESING DETAILS FOR SAMPLE <font color='blue'><?php echo "$s_code-$labno" ; ?></font>


</legend>

<form action="" method="post"  id="example-1-form" autocomplete="off" onsubmit="leave()" title="<?php echo "$s_code-$labno" ;?>">
<div class="form-horizontal">
<input name="labno" type="hidden" value="<?php echo $labno; ?>"/>
<div class="form-group">
<label class="col-sm-1 control-label label-format">Processing Date</label>
	  <div class="col-sm-3"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input7" data-link-format="yyyy-mm-dd" >
                    <input class="form-control" size="16" type="text" value="<?php if($processdate=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($processdate));?>"readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input7" value="<?php if($processdate=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($processdate));?>"  name="process_date" />
				</div>
	  <label class="col-sm-1 control-label label-format">Processing Time</label>
	  	  <div class="col-sm-2"> 
		<input type="text" class="form-control defaultEntry" value="<?php echo $processtime ?>" name="process_time" placeholder="24hour format"/>
	</div>
<label  class="col-sm-1 control-label label-format">Processing Technologist</label>
      <div class="col-sm-2"> 
    <select class="form-control" name="process_tech" >
			<option value="<?php echo $processtech; ?>"><?php echo $processtech; ?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM techinitials WHERE status='Active' ORDER BY name";
			$techs=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($tech = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
				$name = $tech['name'];
				$initial = $tech['initial'];
				
			echo "<option value='$initial' style='background-color:#CCCCCC;'>$name</option>";	
			}			
			?>
		</select>
		</div>
</div>

<div class="form-group">
    <div class="col-sm-6"> 
	</div>
	<div class="col-sm-1">
	<input type="button" name=""  class="btn btn-primary"size="" value="<< BACK" title="" style="height:3em; width:; background-color:;" onclick="history.go(-1);return true;"/>
     </div>
	 <div class="col-sm-1"> 
        <button type="Submit" name="edit_sample" class="btn btn-success">Update Sample</button>
      </div>
		  
</div>
</div>
<?php } ?> 
</form>
  </fieldset>

<script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>
</div>
 </div>
 </div>
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='index.php'>Login</a> to access the resources.</center>";?>


</div>
<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>





</body>
</html>