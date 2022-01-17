<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>

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
<div class="row">

<div class="col-sm-2">
<b>SELECT AN OPTION</b>
<ul>
<li><a href="?action=specimens">Specimens</a></li><br>
<li><a href="?action=specimentypes">Specimen Types</a></li><br>


</ul>
</div>
<div class="col-sm-10 row">
<div style='text-align:center;'><b>CUSTOM REPORTS AND ANALYSIS FOR SPECIFIC PERIODS</b></div>

<div style='float:left; width:; padding:0.5%;'>

<?php
if(isset($_GET['action'])){
	$action=$_GET['action']; 
?>

<fieldset class="scheduler-border"><br>

<?php if($action=='specimens'){ ?>
<div class="form-horizontal">
<div class="form-group"> 
<form name="" action="reports_custom_process.php" method="GET" target="_blank" onsubmit=" return validateform()">
Specimens Received<br>
<label class="col-sm-1">From</label>
<div class="col-sm-4">
	<div class="input-group date form_date"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
    <input class="form-control" size="16" type="text" value="" readonly>
    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
	<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
	<input type="hidden" id="dtp_input9" value="" name="fromdate"/>
</div>
<label class="col-sm-1">To</label>
<div class="col-sm-4">
	<div class="input-group date form_date"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input10" data-link-format="yyyy-mm-dd">
	<input class="form-control" size="16" type="text" value="" readonly>
    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
	<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
	<input type="hidden" id="dtp_input10" value="" name="todate"/>
</div>
<div class="col-sm-2"> 
	<input type="submit" class="btn btn-success" name="specimens" value="Download">
</div>
</form>

</div>
</div>
</form>
</fieldset>

<?php } ?>

<?php if($action=='specimentypes'){ ?>
<div class="form-horizontal">
<div class="form-group"> 
<form name="" action="reports_custom_process.php" method="GET" target="_blank" onsubmit=" return validateform()">
Specimen Types Received<br>
<label class="col-sm-1">From</label>
<div class="col-sm-4">
	<div class="input-group date form_date"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
    <input class="form-control" size="16" type="text" value="" readonly>
    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
	<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
	<input type="hidden" id="dtp_input9" value="" name="fromdate"/>
</div>
<label class="col-sm-1">To</label>
<div class="col-sm-4">
	<div class="input-group date form_date"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input10" data-link-format="yyyy-mm-dd">
	<input class="form-control" size="16" type="text" value="" readonly>
    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
	<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
	<input type="hidden" id="dtp_input10" value="" name="todate"/>
</div>
<div class="col-sm-2"> 
	<input type="submit" class="btn btn-success" name="specimentypes" value="Download">
</div>
</form>

</div>
</div>
</form>
</fieldset>

<?php } ?>

<?php if($action=='alldata'){ ?>
<b>ALL DATA (PATIENT/PARTICIPANT, SAMPLE AND RESULTS DETAILS)</b><br><br>

<fieldset class="scheduler-border">
<form name="" action="reports_extract_process.php" method="GET" target="_blank" autocomplete="off" onsubmit=" return validateform()">
<div class="form-horizontal row col-sm-12">

<div class="form-group">

<div class="col-sm-2"> 
<b>Download All Data from</b>
</div>

<div class="col-sm-4">  
	<div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
	<input type="hidden" id="dtp_input9" value="" name="fromdate"/>
</div>

<div class="col-sm-1">	<b>To</b></div>

<div class="col-sm-4">
				
	<div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input10" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
	<input type="hidden" id="dtp_input10" value="" name="todate"/>
</div>

</div>

<div class="form-group">
	<div class="col-sm-3">	<b>FILTER BY STUDY CODE</b></div>
	
	<div class="col-sm-3"> 
        <select name="studycode" class="form-control" >
			<option value="">--Study Code--</option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM  studycodes WHERE status='Active' ORDER BY code";
			$studycodes=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($studycode = mysqli_fetch_array($studycodes,MYSQLI_ASSOC)) {
				$projtitle = $studycode['projtitle'];
				$code = $studycode['code'];
				
			echo "<option value='$code' style='background-color:#CCCCCC;'>$code - $projtitle</option>";	
			}			
			?>
		</select>   
	</div>
</div>

<div class="form-group">
	<div class="col-sm-3">	<b>FILTER BY LAB NO</b></div>
	
	<div class="col-sm-2"> 
        <input type="text" name="labno" /> 
	</div>
	
	<div class="col-sm-1"> </div>
	
	<div class="col-sm-2"> 
		<input type="submit" class="btn btn-success"name="downloadalldata" value="Download">
	</div>

</div>

</div>

</form>
</fieldset>

<br><br>

<?php } ?>

<?php if($action=='fm'){ ?>
<b>MICROSCOPY FM</b>
<fieldset class="scheduler-border">
<br>
<form name="microscopy" action="reports_extract_process.php" method="GET" target="_blank" onsubmit=" return validateform()">
<div class="form-horizontal">
<div class="form-group">
<div class="col-sm-2"> 
<b>Download data from </b>
</div>

<div class="col-sm-3"> 
	   
	  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input9" value="" name="fromdate"/>
				</div>
<div class="col-sm-1">	<b>To</b></div>
<div class="col-sm-3">
				
				  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input10" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				
				<input type="hidden" id="dtp_input10" value="" name="todate"/>
			</div>
				<div class="col-sm-2"> 
<input type="submit" class="btn btn-success"name="downloadfm" value="Download">
</div>
</div>
</div>
</form>
</fieldset>

<br><br>

<b>MICROSCOPY FM NOT REPORTED</b>
<fieldset>
<form name="microscopynotreported" action="reports_extract_process.php" method="GET" target="_blank" onsubmit=" return validateform()">

<input type="submit" class="btn btn-success"name="notreportedfm" value="Download Data">
</form>
</fieldset>
<?php } ?>



<?php if($action=='identification'){ ?>
<b>IDENTIFICATION</b>
<fieldset class="scheduler-border">
<br>
<form name="microscopy" action="reports_extract_process.php" method="GET" target="_blank" onsubmit=" return validateform()">
<div class="form-horizontal">
<div class="form-group">
<div class="col-sm-2"> 
<b>Download data from </b>
</div>

<div class="col-sm-3"> 
	   
	  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input9" value="" name="fromdate"/>
				</div>
<div class="col-sm-1">	<b>To</b></div>
<div class="col-sm-3">
				
				  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input10" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				
				<input type="hidden" id="dtp_input10" value="" name="todate"/>
			</div>
				<div class="col-sm-2"> 
<input type="submit" class="btn btn-success"name="downloadid" value="Download">
</div>
</div>
</div>
</form>
</fieldset>

<br><br>

<b>IDENTIFICATION NOT REPORTED</b>
<fieldset>
<form name="microscopynotreported" action="reports_extract_process.php" method="GET" target="_blank" onsubmit=" return validateform()">

<input type="submit" class="btn btn-success"name="notreportedid" value="Download Data">
</form>
</fieldset>
<?php } ?>


<?php if($action=='zn'){ ?>
<b>MICROSCOPY ZN</b>
<fieldset class="scheduler-border">
<br>
<form name="microscopy" action="reports_extract_process.php" method="GET" target="_blank" onsubmit=" return validateform()">
<div class="form-horizontal">
<div class="form-group">
<div class="col-sm-2"> 
<b>Download data from </b>
</div>

<div class="col-sm-3"> 
	   
	  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input9" value="" name="fromdate"/>
				</div>
<div class="col-sm-1">	<b>To</b></div>
<div class="col-sm-3">
				
				  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input10" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				
				<input type="hidden" id="dtp_input10" value="" name="todate"/>
			</div>
				<div class="col-sm-2"> 
<input type="submit" class="btn btn-success"name="downloadzn" value="Download">
</div>
</div>
</div>
</form>
</fieldset>

<br><br>

<b>MICROSCOPY ZN NOT REPORTED</b>
<fieldset>
<form name="microscopynotreported" action="reports_extract_process.php" method="GET" target="_blank" onsubmit=" return validateform()">

<input type="submit" class="btn btn-success"name="notreportedzn" value="Download Data">
</form>
</fieldset>
<?php } ?>

<?php if($action=='blood'){ ?>
<b>BLOOD CULTURE RESULTS DATA</b>
<fieldset class="scheduler-border">
<br>
<form name="microscopy" action="reports_extract_process.php" method="GET" target="_blank" onsubmit=" return validateform()">
<div class="form-horizontal">
<div class="form-group">
<div class="col-sm-2"> 
<b>Download data from </b>
</div>

<div class="col-sm-3"> 
	   
	  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input9" value="" name="fromdate"/>
				</div>
<div class="col-sm-1">	<b>To</b></div>
<div class="col-sm-3">
				
				  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input10" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				
				<input type="hidden" id="dtp_input10" value="" name="todate"/>
			</div>
				<div class="col-sm-2"> 
<input type="submit" class="btn btn-success"name="downloadblood" value="Download">
</div>
</div>
</div>
</form>
</fieldset>

<br><br>

<b>BLOOD CULTURE RESULTS NOT REPORTED</b>
<fieldset>
<form name="microscopynotreported" action="reports_extract_process.php" method="GET" target="_blank" onsubmit=" return validateform()">

<input type="submit" class="btn btn-success"name="notreportedblood" value="Download Data">
</form>
</fieldset>
<?php } ?>

<?php if($action=='genexpert'){ ?>
<b>GENEXPERT RESULTS</b>
<fieldset class="scheduler-border">
<br>
<form name="microscopy" action="reports_extract_process.php" method="GET" target="_blank" onsubmit=" return validateform()">
<div class="form-horizontal">
<div class="form-group">
<div class="col-sm-2"> 
<b>Download data from </b>
</div>

<div class="col-sm-3"> 
	   
	  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input9" value="" name="fromdate"/>
				</div>
<div class="col-sm-1">	<b>To</b></div>
<div class="col-sm-3">
				
				  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input10" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				
				<input type="hidden" id="dtp_input10" value="" name="todate"/>
			</div>
				<div class="col-sm-2"> 
<input type="submit" class="btn btn-success"name="downloadgnx" value="Download">
</div>
</div>
</div>
</form>
</fieldset>

<br><br>

<b>GENEXPERT NOT REPORTED</b>
<fieldset>
<form name="microscopynotreported" action="reports_extract_process.php" method="GET" target="_blank" onsubmit=" return validateform()">

<input type="submit" class="btn btn-success"name="notreportedgnx" value="Download Data">
</form>
</fieldset>
<?php } ?>

<?php if($action=='liquid'){ ?>
<b>LIQUID CULTURE RESULTS DATA</b>
<fieldset class="scheduler-border">
<br>
<form name="microscopy" action="reports_extract_process.php" method="GET" target="_blank" onsubmit=" return validateform()">
<div class="form-horizontal">
<div class="form-group">
<div class="col-sm-2"> 
<b>Download data from </b>
</div>

<div class="col-sm-3"> 
	   
	  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input9" value="" name="fromdate"/>
				</div>
<div class="col-sm-1">	<b>To</b></div>
<div class="col-sm-3">
				
				  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input10" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				
				<input type="hidden" id="dtp_input10" value="" name="todate"/>
			</div>
				<div class="col-sm-2"> 
<input type="submit" class="btn btn-success"name="downloadliquid" value="Download">
</div>
</div>
</div>
</form>
</fieldset>

<br><br>

<b>LIQUID CULTURE NOT REPORTED</b>
<fieldset>
<form name="microscopynotreported" action="reports_extract_process.php" method="GET" target="_blank" onsubmit=" return validateform()">

<input type="submit" class="btn btn-success"name="notreportedliquid" value="Download Data">
</form>
</fieldset>
<?php } ?>

<?php if($action=='dst1'){ ?>
<b>DST1  RESULTS DATA</b>
<fieldset class="scheduler-border">
<br>
<form name="microscopy" action="reports_extract_process.php" method="GET" target="_blank" onsubmit=" return validateform()">
<div class="form-horizontal">
<div class="form-group">
<div class="col-sm-2"> 
<b>Download data from </b>
</div>

<div class="col-sm-3"> 
	   
	  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input9" value="" name="fromdate"/>
				</div>
<div class="col-sm-1">	<b>To</b></div>
<div class="col-sm-3">
				
				  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input10" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				
				<input type="hidden" id="dtp_input10" value="" name="todate"/>
			</div>
				<div class="col-sm-2"> 
<input type="submit" class="btn btn-success"name="downloaddst1" value="Download">
</div>
</div>
</div>
</form>
</fieldset>

<br><br>

<b>DST 1 RESULTS  NOT REPORTED</b>
<fieldset>
<form name="microscopynotreported" action="reports_extract_process.php" method="GET" target="_blank" onsubmit=" return validateform()">

<input type="submit" class="btn btn-success"name="notreporteddst1" value="Download Data">
</form>
</fieldset>
<?php } ?>


<?php if($action=='dst2'){ ?>
<b>DST1  RESULTS DATA</b>
<fieldset class="scheduler-border">
<br>
<form name="microscopy" action="reports_extract_process.php" method="GET" target="_blank" onsubmit=" return validateform()">
<div class="form-horizontal">
<div class="form-group">
<div class="col-sm-2"> 
<b>Download data from </b>
</div>

<div class="col-sm-3"> 
	   
	  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input9" value="" name="fromdate"/>
				</div>
<div class="col-sm-1">	<b>To</b></div>
<div class="col-sm-3">
				
				  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input10" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				
				<input type="hidden" id="dtp_input10" value="" name="todate"/>
			</div>
				<div class="col-sm-2"> 
<input type="submit" class="btn btn-success"name="downloaddst2" value="Download">
</div>
</div>
</div>
</form>
</fieldset>

<br><br>

<b>DST 2 RESULTS  NOT REPORTED</b>
<fieldset>
<form name="microscopynotreported" action="reports_extract_process.php" method="GET" target="_blank" onsubmit=" return validateform()">

<input type="submit" class="btn btn-success"name="notreporteddst2" value="Download Data">
</form>
</fieldset>
<?php } ?>


<?php if($action=='solid'){ ?>
<b>SOLID  RESULTS DATA</b>
<fieldset class="scheduler-border">
<br>
<form name="microscopy" action="reports_extract_process.php" method="GET" target="_blank" onsubmit=" return validateform()">
<div class="form-horizontal">
<div class="form-group">
<div class="col-sm-2"> 
<b>Download data from </b>
</div>

<div class="col-sm-3"> 
	   
	  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input9" value="" name="fromdate"/>
				</div>
<div class="col-sm-1">	<b>To</b></div>
<div class="col-sm-3">
				
				  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input10" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				
				<input type="hidden" id="dtp_input10" value="" name="todate"/>
			</div>
				<div class="col-sm-2"> 
<input type="submit" class="btn btn-success"name="downloadsolid" value="Download">
</div>
</div>
</div>
</form>
</fieldset>

<br><br>

<b>SOLID RESULTS  NOT REPORTED</b>
<fieldset>
<form name="microscopynotreported" action="reports_extract_process.php" method="GET" target="_blank" onsubmit=" return validateform()">

<input type="submit" class="btn btn-success"name="notreportedsolid" value="Download Data">
</form>

</fieldset>
<?php } 
?><?php if($action=='acc'){ ?>
<b>Download Accessioned Samples Data </b>
<fieldset class="scheduler-border">
<br>
<form name="" action="accessioned_report.php" method="GET" target="_blank" onsubmit=" return validateform()">

<div class="form-horizontal row col-sm-12">

<div class="form-group">

<div class="col-sm-1"> 
<b>From </b>
</div>

<div class="col-sm-5">  
	<div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
	<input type="hidden" id="dtp_input9" value="" name="fromdate"/>
</div>

<div class="col-sm-1">	<b>To</b></div>

<div class="col-sm-5">
				
	<div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input10" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
	<input type="hidden" id="dtp_input10" value="" name="todate"/>
</div>

</div>

<div class="form-group">
	<div class="col-sm-3">	<b>FILTER BY STUDY CODE</b></div>
	
	<div class="col-sm-5"> 
        <select name="studycode" class="form-control" >
			<option value="">-SELECT STUDYCODE-</option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM  studycodes WHERE status='Active' ORDER BY code";
			$studycodes=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($studycode = mysqli_fetch_array($studycodes,MYSQLI_ASSOC)) {
				$projtitle = $studycode['projtitle'];
				$code = $studycode['code'];
				
			echo "<option value='$code' style='background-color:#CCCCCC;'>$code - $projtitle</option>";	
			}			
			?>
		</select>   
	</div>
	
	<div class="col-sm-2"> 
		<input type="submit" class="btn btn-success"name="downloadacc" value="Download">
	</div>

</div>

</div>

</form>
</fieldset>

<br><br>

<?php } 


} ?>
</div>


</div>



<?php  // stop checking for illegal login
} else echo "<center>Illegal Access Blocked. <br><a href='../index.php'>Login</a> to access the resources.</center>";?>
</div>
</div>
</div>
<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>
<script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>
</div>

</div>
</body>
</html>