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

<div class="col-md-2">
<b>SELECT AN OPTION</b>
<ul>
<li><a href="?action=fm">Microscopy Fm</a></li><br>
<li><a href="?action=zn">Microscopy Zn</a></li><br>
<li><a href="?action=genexpert">Genexpert</a></li><br>
<li><a href="?action=liquid">Liquid Culture</a></li><br>
<li><a href="?action=solid">Solid Culture</a></li><br>
<li><a href="?action=blood">Blood Culture</a></li><br>
<li><a href="?action=identification">Identification</a></li><br>
<li><a href="?action=others">Other Tests</a></li><br>
<li><a href="?action=dst1">DST 1</a></li><br>
<li><a href="?action=dst2">DST 2</a></li><br>
<li><a href="?action=acc">Accessioned Samples</a></li><br>
<li><a href="?action=label">Sample Labels</a></li><br>
<li><a href="?action=alldata">All Data </a></li><br>
<br>

</ul>
</div>
<div class="col-md-10">
<div style='text-align:center;'><b>DATA DOWNLOADS FOR SPECIFIC PERIODS</b></div>

<div style='float:left; width:; padding:0.5%;'>

<?php if(isset($_GET['action'])){ 
$action=$_GET['action']; ?>

<fieldset class="scheduler-border"><br>
<?php if($action=='others'){ ?>

<div class="form-horizontal">
<div class="form-group"> 

<form name="microscopy" action="reports_extract_process.php" method="GET" target="_blank" onsubmit=" return validateform()">

 
<label class="col-md-2">Download data from:</label>
<div class="col-sm-3"> 
	   
	  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input9" value="" name="fromdate"/>
				</div>
<label class="col-sm-1">	To</label>
<div class="col-sm-3">
				
				  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input10" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				
				<input type="hidden" id="dtp_input10" value="" name="todate"/>
			</div>
			</div>
			<div class="form-group">
			<label class="col-md-2">TEST NAME:</label>
  <div class="col-sm-3"> 
        <select name="testothers" required class="form-control" >
			<option value="">-Test Name-</option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM option_examination_others WHERE status='Active' ORDER BY name";
			$exam_others=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($exam = mysqli_fetch_array($exam_others,MYSQLI_ASSOC)) {
				$name = $exam['name'];
				$code = $exam['code'];
				
			echo "<option value='$code' style='background-color:#CCCCCC;'>$code - $name</option>";	
			}			
			?>
		</select>   
		</div>
				<div class="col-sm-3"> 
<input type="submit" class="btn btn-success"name="downloadothers" value="Download">
</div>
</div>
</div>
</form>
</fieldset>

<br>


<fieldset class="scheduler-border">
<div class="form-group">
<label class="col-md-12">OTHER TESTS PENDING:</label>
</div>
<form name="" action="reports_extract_process.php" method="GET" target="_blank" onsubmit=" return validateform()">
		<div class="form-group">
			<label class="col-md-2">TEST NAME:</label>
  <div class="col-sm-3"> 
        <select name="testothers" required class="form-control" >
			<option value="">-Test Name-</option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM option_examination_others WHERE status='Active' ORDER BY name";
			$exam_others=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($exam = mysqli_fetch_array($exam_others,MYSQLI_ASSOC)) {
				$name = $exam['name'];
				$code = $exam['code'];
				
			echo "<option value='$code' style='background-color:#CCCCCC;'>$code - $name</option>";	
			}			
			?>
		</select>   
		</div>
				<div class="col-sm-3"> 
<input type="submit" class="btn btn-success" name="notreportedothers" value="Download Data">
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
<div class="col-sm-2">	<b> FILTER BY LAB NO </b></div>
	<div class="col-sm-1">	<b>LAB NO FROM </b></div>
	
	<div class="col-sm-2"> 
        <input type="text" class="form-control"	name="labnofro" /> 
	</div>
	<div class="col-sm-1">	<b>LAB NO TO</b></div>
	
	<div class="col-sm-2"> 
        <input type="text" class="form-control" name="labnoto" /> 
	</div>
	
	
	
	<div class="col-sm-1"> 
		<input type="submit" class="btn btn-success" name="downloadalldata" value="Download">
	</div>
	<div class="col-sm-2"> 
		<input type="submit" class="btn btn-success" name="downloadalldatacustomfields" value="Next - Custom Fields">
	</div>

</div>
</div>
</form>

<?php if(isset($_GET['progress'])=='filter'){

echo "<form action='reports_extract_process.php' method='POST' target='_blank'>";

echo "<br><b>FILTERING FIELDS 
	<input type='submit' class='btn btn-success' name='downloadalldatacustomfieldsnext' value='Download - Custom Fields'>
	<br>";

$rows = mysqli_query($dbconnection,"SELECT * FROM alldatadownload_table") or die("ERROR : " . mysqli_error($dbconnection));

echo "<table border='1'>";
$i=0;
while ($i < mysqli_num_fields($rows)){
$fld = mysqli_fetch_field($rows);

if($i==0 OR $i%7==1){ echo "<tr>"; }
	echo "<td><label class=''><input type='checkbox' name='customfields[]' value='$fld->name'>
	$fld->name</label></td>";	

if(($i+1)==mysqli_num_fields($rows) OR $i%7==0){ echo "<tr>";}

$i = $i + 1;
}
echo "</table>";
echo "</form>";

}
?>

</fieldset>

<br><br>

<?php } ?>


<?php if($action=='label'){ ?>
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
<input type="submit" class="btn btn-success"name="downloadtolabelmaker" value="Download">
</div>
</div>
</div>
</form>
</fieldset>

<br>
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

<b>MICROSCOPY FM PENDING</b>
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

<b>IDENTIFICATION PENDING</b>
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

<b>MICROSCOPY ZN PENDING</b>
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

<b>BLOOD CULTURE RESULTS PENDING</b>
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

<b>GENEXPERT PENDING</b>
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

<b>LIQUID CULTURE PENDING</b>
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

<b>DST 1 RESULTS  PENDING</b>
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

<b>DST 2 RESULTS  PENDING</b>
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

<b>SOLID RESULTS  PENDING</b>
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