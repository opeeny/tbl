<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php
error_reporting(0);
if(isset($_GET['pid'])){
	@$pid=$_GET['pid'];
	@$otherpid=$_GET['otherpid'];
	@$s_code=$_GET['s_code'];
	@$pauto_id=$_GET['pauto_id'];
}
	

if(isset($_POST['Submit'])){
	include("../includes/dbconfig.php");	
	
	//if($recieved_date==''){ echo "<h2>Received Date is Madatory</h2>";
	//exit();
		
	//}
	@$recieved_date=$_POST['recieved_date'];
	@$s_code=$_POST['study_code'];
	@$pauto_id=$_POST['pauto_id'];
	$appearance=ucwords(mysqli_real_escape_string($dbconnection,$_POST['appearance']));
    $request_reason=$_POST['request_reason'];
	$visit_interval=$_POST['visit_interval'];
	$sample_hierachy=$_POST['sample_hierachy'];
	$years=$_POST['years'];
	$months=$_POST['months'];
	$specimen_type=$_POST['specimen_type'];
	$volume=$_POST['volume'];
	$sample_id=$_POST['sample_id'];
	$consistency=$_POST['consistency'];
	$hivstatus=$_POST['hivstatus'];
	$peripheralresults=$_POST['peripheralresults'];
	$collector=$_POST['collector'];
	$collection_method=$_POST['collection_method'];
	$technologist=$_POST['technologist'];
	$comment=$_POST['comment'];
	$transporter=$_POST['transporter'];
	//$innoc_time=$_POST['innoc_time']; $innoc_time= date('H:i:s',strtotime($innoc_time));
	//$innoc_date=$_POST['innoc_date'];
    @$examination=mysqli_real_escape_string($dbconnection,implode(',', $_POST['examination']));
	@$otherexamination=mysqli_real_escape_string($dbconnection,implode(',', $_POST['otherexamination']));
	@$fullexamination=$examination.','.$otherexamination;
	//@$fullexamination = implode(",", array_merge($examination,$otherexamination));
	
	print_r(array_merge($examination,$otherexamination));
	
	@$selectedsolidmedia=mysqli_real_escape_string($dbconnection,implode(',', $_POST['solidmedia']));
	@$selectedliquidmedia=mysqli_real_escape_string($dbconnection,implode(',', $_POST['liquidmedia']));
	@$selectedbloodmedia=mysqli_real_escape_string($dbconnection,implode(',', $_POST['bloodmedia']));
	@$fullmedia=$selectedsolidmedia.','.$selectedliquidmedia.','.$selectedbloodmedia;
	@$specimen_storage=$_POST['specimen_storage'];
	@$requestor=$_POST['requestor'];
	@$collection_time=$_POST['collection_time']; $collection_time= date('H:i:s',strtotime($collection_time));
	@$collection_date=$_POST['collection_date'];
	@$request_date=$_POST['request_date'];
	@$recieved_time=$_POST['recieved_time']; $recieved_time= date('H:i:s',strtotime($recieved_time));
	
	@$process_date=$_POST['process_date'];
	@$process_time=$_POST['process_time']; $process_time= date('H:i:s',strtotime($process_time));
	@$process_tech=$_POST['process_tech'];
	@$transport_date=$_POST['transport_date'];
	@$transport_time=$_POST['transport_time']; $transport_time= date('H:i:s',strtotime($transport_time));
	@$comfirm='incomplete';
	$accessionedby=$_SESSION['name'];
	@$otherpid=$_POST['otherpid'];
	//@$sampleid=$_POST['sampleid'];
	
$insertsql="insert into samples (sample_id,accessiontech,studycode,patient,ageyears,agemonths,visitinterval,
samplehierachy,requestreason,spectype,appearance,volume,consistency,hivstatus,peripheralres,collector,collmethod,colldate,
colltime,rcttech,rctdate,rcttime,requester,requestdate,examination,
media,specstorage,comment,transporter,processtime,processdate,processtech,transporttime,transportdate)
		values ('$sample_id','$accessionedby','$s_code','$pauto_id','$years','$months','$visit_interval','$sample_hierachy','$request_reason','$specimen_type',
		'$appearance','$volume','$consistency','$hivstatus','$peripheralresults','$collector','$collection_method','$collection_date','$collection_time',
		'$technologist','$recieved_date','$recieved_time','$requestor','$request_date','$fullexamination','$fullmedia',
		'$specimen_storage','$comment','$transporter','$process_time','$process_date',
		'$process_tech','$transport_time','$transport_date')";
$insert=mysqli_query($dbconnection,$insertsql) or die("ERROR : " . mysqli_error($dbconnection)); 

if ($insert){
$select_labno="SELECT * FROM samples WHERE labno=LAST_INSERT_ID()";
$samples=mysqli_query($dbconnection,$select_labno) or die("ERROR : " . mysqli_error($dbconnection));

while ($sample = mysqli_fetch_array($samples,MYSQLI_ASSOC)) {
$labno = $sample['labno'];
$patient=$sample['patient'];
/*$id = $sample['id_auto'];
$studycode=$sample['studycode'];

$currentyear=date('Y', time());
$labno=sprintf("%05d",$id);
$labno=$currentyear.$labno;
	$updatesample=mysqli_query($dbconnection,"UPDATE samples SET labno='$labno'
	where id_auto='$id' ");	
	*/

include("samples_examination_media_processing.php");

}
if($comfirm=='complete'){
	$edittime=date('Y-m-d H:i:s');
	$updatesample=mysqli_query($dbconnection,"UPDATE samples SET lasteditby='$accessionedby',lastedittime='$edittime' where labno='$labno' ");	
}

$select_pname="SELECT * FROM patients WHERE id=$patient";
					$patients=mysqli_query($dbconnection,$select_pname) or die("ERROR : " . mysqli_error($dbconnection));

					while ($patient = mysqli_fetch_array($patients,MYSQLI_ASSOC)) {
					$pname=$patient['name'];	
					}
					
if(isset($_GET['rejection_no'])){
$rejectid=$_GET['rejection_no'];
$sql = "UPDATE rejected_samples SET status='Sample later accesioned by $accessionedby with labno $labno ' WHERE id=$rejectid";
mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
}
//$innoc_time = DATE("g:i a", STRTOTIME("$innoc_time"));
//$innoc_time = date("H:i:s", $innoc_time);

//echo "<h2>timr is i $innoc_time</h2>";
header("Location:patient_registration.php?savedsample=$labno&&pid=$pid&&scode=$s_code&&pname=$pname");

}

else{
echo "Data failed to insert! ERROR: ".mysqli_error($dbconnection);
}

}
?>
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>

<?php include("../includes/header_content.php"); ?>
<?php include("../includes/header_bootstrap_content.php"); ?>	

</head>

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

<?php if(isset($_GET['registered'])){
$registered=$_GET['registered']; 
$scode=$_GET['scode'];
echo "<div id='successmessage'
 <center>Sample Registration successsful!</div>";
} ?>
<!--onsubmit="leave()" -->
<fieldset class="scheduler-border"> <legend  class="scheduler-border"><b class="form_head">REGISTERING SAMPLE DETAILS </b></legend>
<form action="" method="post"  id="example-1-form" name="regform" autocomplete="off" onsubmit="return validateForm()">


<table width='100%' class=""><tr>
<td align='left'><input type="button" value="BACK" class="btn btn-info" onclick="history.go(-1);return true;"></td>
<td align='center'><input type="button" value="REJECT SAMPLE" class="btn btn-danger" onclick="location.href='sample_rejection.php?pid=<?php echo $pid; ?>&&otherpid=<?php echo $otherpid ?>&&s_code=<?php echo $s_code; ?>&&pauto_id=<?php echo $pauto_id; ?>'"></td>
<td align='right'><button type="Submit" name="Submit" class="btn btn-success">REGISTER SAMPLE</button></td>
</tr></table> <br>

<div class="form-horizontal">
<div class="form-group">
	<label class="col-sm-1 control-label label-format">Study</label>
	<div class="col-sm-2">
	<input type="text" name="study_code" value="<?php echo $s_code ?>" readonly  style="text-transform: capitalize;" class="form-control" />
	</div>
 	
	<label class="col-sm-1 control-label label-format">PID<?php echo'<font color="red">'. "**".'</font>';?></label>
    <div class="col-sm-3"> 
    <input type="text" name="pid" value="<?php echo $pid ?>" readonly  style="color: red; text-transform: capitalize;"class="form-control" placeholder="PID" />
	<input type="hidden" name="pauto_id" value="<?php echo $pauto_id ?>" />
    </div>
	
	<label class="col-sm-1 control-label label-format">Other PID</label>
    <div class="col-sm-2">
	<input type="text" name="otherpid" value="<?php echo $otherpid ?>" readonly  style="color: red; text-transform: capitalize;"class="form-control" placeholder="Other PID" />
    </div>
</div>
	  <div class="form-group"> 
	   <label class="col-sm-1 control-label label-format">Sample ID</label>
    <div class="col-sm-2"> 
    <input type="text" id="disabledInput" value=""   style="color: red; text-transform: capitalize;"class="form-control" name="sample_id" />
	</div>
	<!--
	<label class="col-sm-1 control-label label-format">Sample Hierachy</label>
      <div class="col-sm-3"> 
	  <input type="text" class="form-control" name="sample_hierachy" list="sample_hierachy"/>

	  <datalist id="sample_hierachy">
	  	<select name="designtn" class="form-control">
	<option value="N/A" class="form-control" >N/A</option>
		<option value="Specimen 1">Specimen 1</option>
		<option value="Specimen 2">Specimen 2</option>
		<option value="Specimen 3">Specimen 3</option>
		</select>
		</datalist>
        
      </div>
	  -->
	 
      <label class="col-sm-1 control-label label-format">Specimen Type<?php echo'<font color="red">'. "**".'</font>';?></label>
      <div class="col-sm-2"> 
        <select name="specimen_type" class="form-control" >
			<option value="">-Specimen Type-</option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM option_spectype WHERE status='Active' ORDER BY name";
			$specimen_types=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($specimen_type = mysqli_fetch_array($specimen_types,MYSQLI_ASSOC)) {
				$type = $specimen_type['name'];
				$code = $specimen_type['code'];
				
			echo "<option value='$type' style='background-color:#CCCCCC;'>$type</option>";	
			}			
			?>
		</select>   
		</div>
		<label class="col-sm-1 control-label label-format">Visit Interval<?php echo'<font color="red">'. "**".'</font>';?></label>
      <div class="col-sm-3"> 
	   <select class="form-control" name="visit_interval"  >
			<option value="">-Select  Visit Interval-</option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM visitinterval WHERE status='Active' ORDER BY name";
			$techs=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($tech = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
				$name = $tech['name'];
				$code = $tech['code'];
				
				
			echo "<option value='$name' style='background-color:#CCCCCC;'>$code - $name</option>";	
			}			
			?>
		</select>
    
      </div>
    </div>
	
	<div class="form-group"> 
      
	  <!--
	  <label for="First Name" class="col-sm-1 control-label label-format">Age-Years</label>
      <div class="col-sm-2"> 
        <input type="number" style="color: #222;
		"class="form-control" placeholder="" min="0" max="150" name="years"/>
      </div>
	  <label for="First Name" class="col-sm-1 control-label label-format">Age-Months</label>
      <div class="col-sm-2"> 
        <input type="number"  min="0" max="11" style="color: #222;
"class="form-control" placeholder="" name="months" />
      </div>
	  
	  </div>
		<div class="form-group"> 
	  
	   <label  class="col-sm-1 control-label label-format">Request Reason</label>
      <div class="col-sm-3"> 
        <input type="text" style="color: #222;
		"class="form-control" placeholder="Request Reason" name="request_reason" />
      </div>
	  
	  <label class="col-sm-1 control-label label-format">Request Date</label>
	  <div class="col-sm-3"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input12" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input12" value="" name="request_date" />
				</div>
	<label  class="col-sm-1 control-label label-format">Requester</label>
    <div class="col-sm-3"> 
        <select name="requestor" class="form-control" <?php if($s_code=='PV'){echo 'required';} ?> onclick="" id="requestorsearch">
			<option value="">-Select requester-</option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM requestors ORDER BY name";
			$requestors=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($requestor = mysqli_fetch_array($requestors,MYSQLI_ASSOC)) {
			$rname = $requestor['name'];
			$r_id = $requestor['id'];
			$organisation = $requestor['organisation'];
			echo "<option value='$r_id' style='background-color:#CCCCCC;'>$organisation - $rname</option>";
			}
			?>
		</select>
		<span onclick="reloadRequestors();" style="cursor: pointer; color:blue;">Reload</span> &nbsp;&nbsp;&nbsp;
		<span onclick="window.open('new_requester.php')" style="cursor: pointer; color:blue;">New Requester</span>
	</div>
	  
    </div>
	
	
	<div class="form-group"> 
      
	  <label class="col-sm-1 control-label label-format">Collector</label>
      <div class="col-sm-3"> 
        <input type="text" name="collector" style="color: #222; text-transform: capitalize;" class="form-control" placeholder="Collector" />
      </div>

     <label  class="col-sm-2 control-label label-format">Collection Method</label>
       <div class="col-sm-2"> 
	   <select name="collection_method" class="form-control" >
			<option value="">-Collection Method-</option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM option_collmethod WHERE status='Active' ORDER BY name";
			$collmethods_names=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($collmethod_name = mysqli_fetch_array($collmethods_names,MYSQLI_ASSOC)) {
				$name = $collmethod_name['name'];
				$code = $collmethod_name['code'];
				
			echo "<option value='$name' style='background-color:#CCCCCC;'>$name</option>";	
			}			
			?>
		</select></div>
		
		<label class="col-sm-1 control-label label-format">HIV Status</label>
		<div class="col-sm-2"> 
		<select name="hivstatus" class="form-control" >
			<option value="Not Provided">Not Provided</option>
			<option value="Negative">Ct2 - Negative</option>
			<option value="Not Known">Not Known</option>
			<option value="Positive">Ct1 - Positive</option>
		</select>
      </div>
		
	</div>
	
	<div class="form-group">
	
	<label class="col-sm-1 control-label label-format">Collection Date</label>
	  <div class="col-sm-3">  
	  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input9" value="" name="collection_date"/>
		</div>
		
<label for="dtp_input3" class="col-sm-2 control-label label-format">Collection Time</label>
	  <div class="col-sm-2"> 
	<!--	<input type="text" class="form-control time_picker" name="collection_time"  />
		<input type="text" class="form-control defaultEntry" name="collection_time" />
	</div>
	
		<label for="dtp_input3" class="col-sm-2 control-label label-format">Collection Time</label>
                <div class="input-group date form_time col-sm-2" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                    <input class="form-control" size="" type="text" value="">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                </div>
				<input type="hidden" id="dtp_input3" value="" name="collection_time"/>

      
	  <label  class="col-sm-1 control-label label-format">Peripheral Results</label>
      <div class="col-sm-2"> 
	  <input type="text" name="peripheralresults" style="" class="form-control" placeholder="" />     
      </div>
	  
    </div>
		
 <div class="form-group"> 
	  <label  class="col-sm-1 control-label label-format">Transporter</label>
      <div class="col-sm-3"> 
	  <input type="text" name="transporter" style="color: #222;" class="form-control" placeholder="" />     
      </div>
	    
      <label class="col-sm-1 control-label label-format">Transport Date</label>
      <div class="col-sm-3"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input14" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input14" value="" name="transport_date" />
				</div>
	  <label class="col-sm-1 control-label label-format">Transport Time</label>
	  <div class="col-sm-2"> 
		<input type="text" class="form-control defaultEntry" name="transport_time"  />
	</div>

      
	  
	  </div>
 -->
 
	<div class="form-group"> 
      <label class="col-sm-1 control-label label-format">Received Date<?php echo'<font color="red">'. "**".'</font>';?></label>
	  <div class="col-sm-3"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input1" required data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly required >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input1" value="" name="recieved_date"  required />
				</div>
    
	<label  class="col-sm-2 control-label label-format">Received Time<?php echo'<font color="red">'. "**".'</font>';?></label>
	<div class="col-sm-2"> 
		<input type="text" name="recieved_time" class="form-control defaultEntry" required />
	</div>
	
	<label  class="col-sm-1 control-label label-format">Recieving Technologist</label>
      <div class="col-sm-3"> 
	     <select  class="form-control" name="technologist" >
			<option value="">-Select Technologist-</option>
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
	<!--
	<div class="form-group">
	<label class="col-sm-1 control-label label-format">Appearance</label>
       <div class="col-sm-3"> 
                <select name="appearance" class="form-control" >
			<option value="">-Appearance-</option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM option_appearance WHERE status='Active' ORDER BY name";
			$appearances_check=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($appearance = mysqli_fetch_array($appearances_check,MYSQLI_ASSOC)) {
				$name = $appearance['name'];
				$code = $appearance['code'];
				
			echo "<option value='$name' style='background-color:#CCCCCC;'>$code - $name</option>";	
			}			
			?>
		</select></div>
	  
	  <label  class="col-sm-1 control-label label-format">Volume</label>
      <div class="col-sm-3"> 
        <input type="number" name="volume" style="color: #222;
		"class="form-control" placeholder="Volume" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" width="10%" />
      </div>
	  
	  <label class="col-sm-1 control-label label-format">Consistency</label>
     <div class="col-sm-3"> 
        <input type="text" style="color: #222;
text-transform: capitalize;"class="form-control" placeholder="Consistency" name="consistency" />
      </div>
	  
	  </div>-->
	 
	
	<div class="form-group"> 
		<label class="col-sm-1 control-label label-format label-format">Examination</label>
		<div class="col-sm-5" style="max-height:100px; overflow:auto;"> 
	 <?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM option_examination WHERE status='Active'";
			$appearances_check=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($appearance = mysqli_fetch_array($appearances_check,MYSQLI_ASSOC)) {
				$code = $appearance['code'];
				$name = $appearance['name'];
				echo "<label class='checkbox-inline'><input type='checkbox' name='examination[]' value='$code'>$name</label> &nbsp;&nbsp;";
			}
			?>
			
	<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM option_examination_others WHERE status='Active'";
			$othertests=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($othertest = mysqli_fetch_array($othertests,MYSQLI_ASSOC)) {
				$code = $othertest['code'];
				$name = $othertest['name'];
				echo "<label class='checkbox-inline'><input type='checkbox' name='otherexamination[]' value='$code'>$name</label> &nbsp;&nbsp;";
			}			
			?>
		<label class='checkbox-inline'><input type='checkbox' name='otherexamination[]' value='storage'>Storage</label>
	  
    </div>
		<label  class="col-sm-1 control-label label-format">Media</label>
    <div class="col-sm-5" style="max-height:100px; overflow:auto;"> 
			<?php
			include("../includes/dbconfig.php");
			$solidsql="SELECT * FROM option_media WHERE status='Active' and category='Solid Culture'";
			$solidmedias=mysqli_query($dbconnection,$solidsql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($solidmedia = mysqli_fetch_array($solidmedias,MYSQLI_ASSOC)) {
				$code = $solidmedia['code'];
				$name = $solidmedia['name'];
				echo "<label class='checkbox-inline' title='Media for Solid Culture'><input type='checkbox' name='solidmedia[]' value='$code'>$name</label> &nbsp;&nbsp;";
				
			}
			echo " || ";	
			?>
			
			<?php
			include("../includes/dbconfig.php");
			$liquidsql="SELECT * FROM option_media WHERE status='Active' and category='Liquid Culture'";
			$liquidmedias=mysqli_query($dbconnection,$liquidsql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($liquidmedia = mysqli_fetch_array($liquidmedias,MYSQLI_ASSOC)) {
				$code = $liquidmedia['code'];
				$name = $liquidmedia['name'];
				echo "<label class='checkbox-inline' title='Media for Liquid Culture'><input type='checkbox' name='liquidmedia[]' value='$code'>$name</label> &nbsp;&nbsp;";
			
			}
			echo " || ";			
			?>
			
			<?php
			include("../includes/dbconfig.php");
			$bloodsql="SELECT * FROM option_media WHERE status='Active' and category='Blood Culture'";
			$bloodmedias=mysqli_query($dbconnection,$bloodsql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($bloodmedia = mysqli_fetch_array($bloodmedias,MYSQLI_ASSOC)) {
				$code = $bloodmedia['code'];
				$name = $bloodmedia['name'];
				echo "<label class='checkbox-inline' title='Media for Blood Culture'><input type='checkbox' name='bloodmedia[]' value='$code'>$name</label> &nbsp;&nbsp;";
			
			}
			?>
	</div>
	  
    </div>
	
	<div class="form-group"> 
  <!--   <label class="col-sm-1 control-label label-format">Processing Date<?php echo'<font color="red">'. "**".'</font>';?></label>
	  <div class="col-sm-3"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input7" data-link-format="yyyy-mm-dd" required>
                    <input class="form-control" size="16" type="text" value="" readonly required>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input7" value="" name="process_date" required />
				</div>

	 <label class="col-sm-1 control-label label-format">Processing Time</label>
	  <div class="col-sm-2"> 
		<input type="text" class="form-control defaultEntry" name="process_time"  />
	</div>
	
                <label for="dtp_input3" class="col-md-2 control-label">Transport Time</label>
                <div class="input-group date form_time col-md-5" data-date="" data-date-format="hh:ii" data-link-field="dtp_input23" data-link-format="hh:ii">
                    <input class="form-control" size="16" type="text"  value="" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                </div>
				<input type="hidden" id="dtp_input23" value="" name="transport_time" /><br/>
            -->

      <label  class="col-sm-2 control-label label-format">Processing Technologist</label>
      <div class="col-sm-2"> 
	    <select class="form-control" name="process_tech" >
			<option value="">-Select Technologist-</option>
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
	   <div class="col-sm-2"> 
        <button type="Submit" name="Submit" class="btn btn-success">REGISTER SAMPLE</button>
      </div>
	  
</div>
	<!--
	 <div class="form-group"> 
	
	<label class="col-sm-2 control-label label-format">Specimen Storage</label>
      <div class="col-sm-2"> 
	   <select class="form-control" name="specimen_storage" >
			<option value="">-Select Specimen Storage-</option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM specimen_storage WHERE status='Active' ORDER BY specimenstorage";
			$techs=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($tech = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
				$storage = $tech['specimenstorage'];
				
			echo "<option value='$storage' style='background-color:#CCCCCC;'>$storage</option>";	
			}			
			?>
		</select>
      
      </div>
	  <label class="col-sm-2 control-label label-format">Comment on Sample</label>
      <div class="col-sm-6"> 
        <input type="text" style="color: #222;
text-transform: capitalize;"class="form-control" placeholder="Comment" name="comment" />
      </div>
</div>

-->
	 <div class="form-group"> 
	 <!--
	<label class="col-sm-2 control-label label-format">Confirm Completeness<?php echo'<font color="red">'. "**".'</font>';?></label>
    <div class="col-sm-5"> 
	<div class="radio-inline">
      <label>
        <input type="radio" class="btn-warning" name="comfirm" value="incomplete" required>
        Few details entered
      </label>
    </div>
    <div class="radio-inline">
      <label>
        <input type="radio" class="btn-success" name="comfirm" value="complete" required>
        All necessary details entered
      </label>
    </div>
	</div>
      <div class="col-sm-2"> 
        <button type="Submit" name="Submit" class="btn btn-success">REGISTER SAMPLE</button>
      </div>
		-->  
    </div>

</div>    
</form>
</fieldset>
<script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>
</div>
 
<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='index.php'>Login</a> to access the resources.</center>";?>
</div>
</div>
<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>





</body>
</html>