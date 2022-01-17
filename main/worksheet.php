<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<?php include("../includes/header_content.php"); ?>
<?php include("../includes/header_bootstrap_content.php"); ?>
<script type="text/javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
         //var popupWin = window.open('', '_blank', 'width=1400,height=1500');
        //popupWin.document.open();
       var popupWin = window.open();
        popupWin.document.write('<html><body onload="">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
		popupWin.print();
		popupWin.close();
    }
</script>

</head>
<style type="text/css">
   .left{float:left;}
.right{float:right;text-align:right;float:right;font-style: italic}
    
		table { width:100%;
  border-spacing: 0;
  border-collapse: collapse;
  margin-left:2%;
}
td,
th {
  padding: 0px;
}
td{font-size:15px;}
		
		 

 #prinReady{float:left; background-color:white;
		font-size:; width:100%;
		margin:; padding:10px;}
		.table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
  .table-responsive {
  min-height: .01%;
  overflow-x: auto;
}

    
    </style>
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

<div id="content" class="row">

<div id="left-content" class="col-md-2">
<b>SELECT AN OPTION</b>
<ul>
<!--<li><a href="?action=dfm">Direct  FM</a></li><br>-->
<li><a href="?action=cfm">Auramine</a></li><br>
<li><a href="?action=microscopyzn">Concentrated  ZN</a></li><br>
<li><a href="?action=dzn">Direct ZN</a></li><br>
<li><a href="?action=solid">Solid Culture</a></li><br>
<li><a href="?action=liquid">Liquid Culture</a></li><br>
</ul>

</div>

<div id="right-content" class="col-md-10">
<h4>DOWNLOADING WORKSHEETS FOR PENDING TESTS</h4>
<hr>
<?php 
include("../includes/dbconfig.php");

	//CHECK THE CURRENT SET REPORT TITLE
	
$rtitlecheck=mysqli_query($dbconnection,"SELECT * FROM reporttitle  
") or die("ERROR : " . mysqli_error($dbconnection));
while ($title=mysqli_fetch_array($rtitlecheck,MYSQLI_ASSOC)) {
								$reporttitle1=$title['title1'];
								$reporttitle2=$title['title2'];
								}
								
								
//CHECK THE REPORT CONTACT NUMBERS AS SET IN THE DATABASE
/*$rcontactcheck=mysqli_query($dbconnection,"SELECT * FROM reportcontacts  
") or die("ERROR : " . mysqli_error($dbconnection));
while ($cont=mysqli_fetch_array($rcontactcheck,MYSQLI_ASSOC)) {
								@$reportcontact=$cont['contact'];
								}
								*/
								?>

<?php if(isset($_GET['action'])){ $action=$_GET['action']; ?>


<?php if($action=='dfm'){ ?>

<h4>Worksheet for Direct Microscopy FM</h4>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" autocomplete="off">
<input type="hidden" name="action" value="dfm">

<div class="form-horizontal">

<div class="form-group"> 
<label class="col-sm-2 control-label label-format">Study/Project:</label>
<div class="col-sm-3">
<select name="studycode" class="form-control" >
		<option value="">- All Studies/Projects -</option>
		<?php
		include("../includes/dbconfig.php");
		$sql="SELECT * FROM studycodes";
		$studycodes=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection ));
			while ($studycode = mysqli_fetch_array($studycodes,MYSQLI_ASSOC)) {
				$title = $studycode['projtitle'];
				$code = $studycode['code'];
				echo "<option value='$code' style='background-color:#CCCCCC;'>$code - $title</option>";	
			}			
			?>
</select>
</div>

<div class="col-md-2">
<input type="submit" name="submit_dfm" value="Download" class="form-control btn-primary">
</div>

</div>

</div></form>
<hr>

<?php
if(isset($_GET['submit_dfm'])){
include("../includes/dbconfig.php");
?>
<input type="button" name="printMe" class="form-control btn btn-primary btn-responsive" 
onclick="PrintDiv('PRELIMINARY','','')" 
value="PRINT WORKSHEET"  ><br>

<div id="divToPrint" >
<style type="text/css">
    @media print    {
		.table tr th.maxff{min-width:2px;
max-width:10px;}

		table { width:99%; 
		border-collapse: collapse; 
		border-spacing: 0;
		margin-left:2%;
		}
td,
th {
  padding: 12px;
}
#prinReady{float:left; background-color:white;
		font-size:18px; width:100%;
		margin:; padding:10px;}
		.table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {  height:55px;}
  .table  .table td{font-size:22px;}
  .title1{ 
   font-size:25px;font-weight:800; }

.title2
{ font-size:25px;font-weight:800;		
}

  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
  .table-responsive {
  min-height: .01%;
  overflow-x: auto;
}
.left{float:left;}
.right{float:right;text-align:right;float:right;font-style: italic}

	
	.left1{float:left;width:30%;background-color:white;font-size:17px;}
.right1{float:left;width:70%; background-color:white; font-size:17px;}
.leftfm{float:left; font-size:16px;width:65%;}
.rightfm{float:left;text-align:right;width:35%;font-style: italic;font-size:10px;}
#printReady{background-color:white;}
}
.left1{float:left;width:50%;background-color:white;font-size:17px;}
.right1{float:right;width:50%; background-color:white; font-size:17px;}
.smearhead{background-color:red;color:blue;}
.leftfm{float:left; font-size:23px; font-weight:600;}
.rightfm{float:right;text-align:right;float:right;font-style: italic;font-size:17px;}
#printReady{background-color:white;}

    </style>
	<div class="report-title" style="background-color:white; width=100%; font-size:;  margin:; padding-left:;"><center>
<b class="title1"><?php echo $reporttitle1 ?></b>
<?php if($reporttitle2!=''){echo "<br><b class='title2'>$reporttitle2 </b>"; }?> 
<BR>


</center></div><br>
	<div class="leftfm">DIRECT MICROSCOPY FM WORKSHEET</div>
<div class="rightfm">Print time: <?php echo date("d-M-Y h:i:sa"); ?></div>
<div id="printReady" style="">
<br>

<br>

<div class="left1"> 

Positive Control Result:

_________________________<br>


 Positive Smear Lot# 
____________________________<br>
Negative Control Result 
_________________________<br>
Negative Smear Lot#
___________________________
</div>
<div class="right1">
 Lot # Auramine O /Exp Date:  
 __________________________<br>
 Lot#Acid Alcahol Solution /Exp Date: 
____________________<br>


Lot# Potassium Permanganate Exp Date :
_________________<br>
Microcope Used :
________________________
</div>
<br><br>
<div class="row"><br><p>
<table border="1" class="table">
<tr><th>STUDY</th><th>LAB NO</th>
<th class="max">PROCESSED</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
RESULT&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>INITIAL/DATE</th><th>COMMENTS</th>
</tr>
<!--
<tr><th>STUDY</th><th>LAB NO</th><th>PROCESSED</th>
<th>SLIDE</th><th>RESULT</th><th>INITIAL/DATE</th><th>COMMENTS</th>
</tr>-->

<?php
$studycode=$_GET['studycode'];

if($studycode!=''){
	$sql="SELECT * FROM results_others dfm,samples s WHERE s.labno=dfm.labno AND dfm.test='DFM' AND s.studycode='$studycode' AND (dfm.result='' OR dfm.resdate='0000-00-00')";
}
else{
	$sql="SELECT * FROM results_others dfm ,samples s WHERE s.labno=dfm.labno AND dfm.test='DFM' AND (dfm.result='' OR dfm.resdate='0000-00-00')";
}


$records=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

while ($record = mysqli_fetch_array($records,MYSQLI_ASSOC)) {
				$labno = $record['labno'];
				$studycode = $record['studycode'];
				$processdate = $record['processdate'];
				if($processdate!='0000-00-00'){ $processdate=date('d-M-y',strtotime($processdate)); }
				else $processdate='';
	echo "<tr style='padding:1em'>
			<td>$studycode</td>
			<td>$labno</td>
			
			<td>$processdate</td>
			<td>&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;</td>
			
			</tr>";	
			
			/*echo "<tr style='padding:0.5em'><td>$studycode</td>
			<td>$labno</td><td>$processdate</td>
			<td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td></tr>";
*/			
}
?>
</table><br><br><br>
<div class="left">
Reviewed By........................................................
</div><div class="right">Date...............................................................
</div>
</div>

__________________________________________________________________________________________________________________
<br>
FO-MYC-P009-A  &nbsp; &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; Rev.No.05  
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  Effective Date: 31 JULY 2017 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Supersedes Rev No:04</div>
<br><br>

<?php } ?>
<?php } ?>

<?php if($action=='cfm'){ ?>


<h4>Worksheet for Auramine</h4>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" autocomplete="off">
<input type="hidden" name="action" value="cfm">

<div class="form-horizontal">

<div class="form-group"> 
<label class="col-sm-2 control-label label-format">Study/Project:</label>
<div class="col-sm-3">
<select name="studycode" class="form-control" >
		<option value="">- All Studies/Projects -</option>
		<?php
		include("../includes/dbconfig.php");
		$sql="SELECT * FROM studycodes";
		$studycodes=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection ));
			while ($studycode = mysqli_fetch_array($studycodes,MYSQLI_ASSOC)) {
				$title = $studycode['projtitle'];
				$code = $studycode['code'];
				echo "<option value='$code' style='background-color:#CCCCCC;'>$code - $title</option>";	
			}			
			?>
</select>
</div>

<div class="col-md-2">
<input type="submit" name="submit_microscopyfm" value="Download" class="form-control btn-primary">
</div>

</div>

</div></form>
<hr>

<?php
if(isset($_GET['submit_microscopyfm'])){
include("../includes/dbconfig.php");
?>
<input type="button" name="printMe" class="form-control btn btn-primary btn-responsive" 
onclick="PrintDiv('PRELIMINARY','','')" 
value="PRINT WORKSHEET"  ><br>

<div id="divToPrint" >
<style type="text/css">
.table tr th.maxff{min-width:2px;
max-width:10px;}

		table { width:99%; 
		border-collapse: collapse; 
		border-spacing: 0;
		margin-left:2%;
		}
td,
th {
  padding: 12px;
}
#prinReady{float:left; background-color:white;
		font-size:16px; width:100%;
		margin:; padding:10px;}
		.table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {  height:20px;}
  .table  .table td{font-size:22px;}
  .title1{ 
   font-size:25px;font-weight:800; }

.title2
{ font-size:20px;font-weight:600;		
}

  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
  .table-responsive {
  min-height: .01%;
  overflow-x: auto;
}
.left{float:left;}
.right{float:right;text-align:right;float:right;font-style: italic}

	
	.left1{float:left;width:65%;background-color:white;font-size:17px;}
.right1{float:left;width:35%; background-color:white; font-size:17px;}
.leftfm{float:left; font-size:16px;width:65%;}
.rightfm{float:left;text-align:right;width:35%;font-style: italic;font-size:10px;}
#printReady{background-color:white;}

    @media print    {
		.table tr th.maxff{min-width:2px;
max-width:10px;}

		table { width:99%; 
		border-collapse: collapse; 
		border-spacing: 0;
		margin-left:2%;
		}
td,
th {
  padding: 12px;
}
#prinReady{float:left; background-color:white;
		font-size:11px; width:100%;
		margin:; padding:10px;}
		.table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {  height:11px;}
  .table  .table td{font-size:12px;}
  .title1{ 
   font-size:19px;font-weight:800; }

.title2
{ font-size:17px;font-weight:700;		
}

  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
  .table-responsive {
  min-height: .01%;
  overflow-x: auto;
}
.left{float:left;}
.right{float:right;text-align:right;float:right;font-style: italic}
.left1{float:left;width:65%;background-color:white;font-size:17px;}
.right1{float:left;width:35%; background-color:white; font-size:17px;}
.leftfm{float:left; font-size:16px;width:65%;}
.rightfm{float:left;text-align:right;width:35%;font-style: italic;font-size:10px;}
#printReady{background-color:white;}
}
.boxed {width:20%; height:3%;
  border: 1px solid black ;float:left;
}
	.left2{float:left;width:20%;background-color:white;font-size:14px;}
.right2{float:left;width:80%; background-color:white; font-size:14px;}

.smearhead{background-color:red;color:blue;}
.leftfm{float:left; font-size:15px; font-weight:600;}
.rightfm{float:right;text-align:right;float:right;font-style: italic;font-size:14px;}
#printReady{background-color:white;}

    </style>
	<div class="report-title" style="background-color:white; width=100%; font-size:;  margin:; padding-left:;"><center>
<b class="title2"><?php echo $reporttitle1 ?></b>
<?php if($reporttitle2!=''){echo "<br><b class='title2'>$reporttitle2 </b>"; }?> <BR>


</center></div>
	<div class="leftfm">AURAMINE WORKSHEET</div>
<div class="rightfm">Print time: <?php echo date("d-M-Y h:i:sa"); ?></div>
<div id="printReady" style="">
<br>

<br>

<div class="left2"> 

Postive Control:
<br><br><br>


 Negative Control 
</div>
<div class="right2">
 <div class="boxed">
  
</div><div class="boxed">
  
</div>
<div class="boxed">
  
</div><br>
 <br>
 <div class="boxed">
  
</div>
 <div class="boxed">
  
</div><div class="boxed">
  
</div>

</div>
<!--
--><br>
<div class="row">
<table border="1" class="table table-responsive">
<tr><th>STUDY</th><th>LAB NO</th><th>PROCESSED</th>
<th>INTERVAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th>RESULT</th><th>Comp</th><th>SRF</th></tr>
<?php
$studycode=$_GET['studycode'];

if($studycode!=''){
	$sql="SELECT * FROM results_fm fm,samples s WHERE s.labno=fm.labno AND s.studycode='$studycode' AND (fm.result='' OR fm.resdate='0000-00-00')";
}
else{
	$sql="SELECT * FROM results_fm fm,samples s WHERE s.labno=fm.labno AND (fm.result='' OR fm.resdate='0000-00-00')";
}

$records=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

while ($record = mysqli_fetch_array($records,MYSQLI_ASSOC)) {
				$labno = $record['labno'];
				$studycode = $record['studycode'];
				$processdate = $record['processdate'];
				$interval = $record['visitinterval'];
				if($interval!=''){
				$sqlint="SELECT * FROM visitinterval where name='$interval' and status='Active'";
$recordsint=mysqli_query($dbconnection,$sqlint) or die("ERROR : " . mysqli_error($dbconnection));

while ($recordint = mysqli_fetch_array($recordsint,MYSQLI_ASSOC)) {
				$intervalcode = $recordint['code'];
}
				}else{ $intervalcode='Not sure';}
				
		
if($processdate!='0000-00-00'){ $processdate=date('d-M-y',strtotime($processdate)); }
				else $processdate='';
				

			echo "<tr style='padding:0.7em'>
			<td>$studycode</td>
			<td>$labno</td>
			
			<td>$processdate</td>
			
			<td>$interval</td>
			<td>&nbsp;&nbsp;</td>
			<td><input type='checkbox'> </td>
			<td><input type='checkbox'> </td>
			</tr>";	
}
?>
</table>
<br><br>
<b>
<div class="left1"> 

Lot # Auramine 

________________________<br><p>


 Lot#TB Decolorizer TM 

________________<br><p>
Lot# TB Potassium Permanganate
_____________


<!--Negative Control Result 

________________________<br>
Negative Smear Lot#

__________________________-->
</div>
<div class="right1">
 Exp Date:  
 _______________<br><p>
 Exp Date: 
_______________<br><p>

 Exp Date :
____________<br><p>

</div></b>
<br><br><br><br>
<div class="row">
<div class="left">
Stained By...........................................................................
</div><div class="right">Date...............................................................
</div>
</div>
<br><br>
<div class="row">
<div class="left">
Examined By............................................................................
</div><div class="right">Date...............................................................
</div></div>
<br><br>
<div class="row">
<div class="left">
Reviewed By............................................................................
</div>
<div class="right">Date...............................................................
</div></div>
<br><br>
<div class="row">
<div class="left">
Entered By...........................................................................
</div><div class="right">Date...............................................................
</div>
</div>
<br><br>
<div class="row">

</div>



<?php } ?>
<?php } 
 if($action=='solid'){ ?>
 
<h4>Worksheet for SOLID CULTURE</h4>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" autocomplete="off">
<input type="hidden" name="action" value="solid">

<div class="form-horizontal">

<div class="form-group"> 
<label class="col-sm-2 control-label label-format">Study/Project:</label>
<div class="col-sm-3">
<select name="studycode" class="form-control" >
		<option value="">- All Studies/Projects -</option>
		<?php
		include("../includes/dbconfig.php");
		$sql="SELECT * FROM studycodes";
		$studycodes=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection ));
			while ($studycode = mysqli_fetch_array($studycodes,MYSQLI_ASSOC)) {
				$title = $studycode['projtitle'];
				$code = $studycode['code'];
				echo "<option value='$code' style='background-color:#CCCCCC;'>$code - $title</option>";	
			}			
			?>
</select>
</div>

<div class="col-md-2">
<input type="submit" name="submit_solid" value="Download" class="form-control btn-primary">
</div>

</div>

</div></form>
<hr>
<?php
if(isset($_GET['submit_solid'])){
include("../includes/dbconfig.php");
?>
<input type="button" name="printMe" class="form-control btn btn-primary btn-responsive" 
onclick="PrintDiv('PRELIMINARY','','')" 
value="PRINT WORKSHEET"  ><br>

<div id="divToPrint" >
<style type="text/css">
    @media print
    {
		
		.table td,
  .table th {height:55px;}
   .table td{font-size:22px;}
  
		.table th {  height:55px;}
  .title1{ 
   font-size:25px;font-weight:800; }
.contact
	{ 
font-size:15px;font-weight:400; }
.title2
{ font-size:25px;font-weight:800;		
}
 .table td{font-size:22px;}
	table { width:99%; 
		border-collapse: collapse; 
		border-spacing: 0;
		margin-left:2%;
		}
td,
th {
  padding: 2px;
}
td{font-size:15px;}
		
		 

 #prinReady{float:left; background-color:white;
		font-size:; width:100%;
		margin:; padding:10px;}
		.table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
  .table-responsive {
  min-height: .01%;
  overflow-x: auto;
}
.left{float:left;}
.right{float:right;text-align:right;float:right;font-style: italic}
}

    </style>
<div id="printReady" style="">
<div class="report-title" style="background-color:white; width=100%; font-size:;  margin:; padding-left:;"><center>
<b class="title1"><?php echo $reporttitle1 ?></b>
<?php if($reporttitle2!=''){echo "<br><b class='title2'>$reporttitle2 </b>"; }?> <BR>


</center></div>

<h3 class="left">SOLID CULTURE RESULTS WORKSHEET</h3>
<h3 class="right">Print time: <?php echo date("d-M-Y h:i:sa"); ?></h3>


<table border="1" class="table table-responsive">
<tr><th>STUDY</th><th>LAB NO</th><th>MEDIA</th><th>PROCESSED</th><th>SLANT/PLATE NO.1</th>
<th>SLANT/PLATE NO.2</th><th>LOT NO</th><th>TECH INITIAL</th></tr>

<?php
$studycode=$_GET['studycode'];

if($studycode!=''){
	$sql="SELECT *,c.media culturemedia FROM results_solidculture c,samples s WHERE s.labno=c.labno AND s.studycode='$studycode' AND (c.result_ql='' OR c.result_qt=''  OR
c.result_sqt='' OR	c.resdate='0000-00-00')";
}
else{
	$sql="SELECT *,c.media culturemedia FROM results_solidculture c,samples s WHERE s.labno=c.labno AND (c.result_sqt='' OR c.result_ql='' OR c.result_qt=''  OR c.resdate='0000-00-00')";
}

$records=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

while ($record = mysqli_fetch_array($records,MYSQLI_ASSOC)) {
				$labno = $record['labno'];
				$media = $record['culturemedia'];
				$studycode = $record['studycode'];
				$processdate = $record['processdate'];
				if($processdate!='0000-00-00'){ $processdate=date('d-M-y',strtotime($processdate)); }
				else $processdate='';
				
			echo "<tr'><td>$studycode</td>
			<td>$labno</td>
			<td>$media</td>
			<td>$processdate</td>
			<td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td>
			
			</tr>";	
}

?>
</table><br><br><br>
<div class="left">Reviewed By................................................</DIV>
<div class="right">Date........................................................</div></div>

__________________________________________________________________________________________________________________
<br>
FO-MYC-P009-A  &nbsp; &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; Rev.No.04  
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  Effective Date: 30 APRL 2015 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Supersedes Rev No:03</div>
<br><br>
</div>
<br><br>

<?php } ?>
<?php } 
if($action=='liquid'){ ?>

<h4>Worksheet for LIQUID CULTURE</h4>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" autocomplete="off">
<input type="hidden" name="action" value="liquid">

<div class="form-horizontal">

<div class="form-group"> 
<label class="col-sm-2 control-label label-format">Study/Project:</label>
<div class="col-sm-3">
<select name="studycode" class="form-control" >
		<option value="">- All Studies/Projects -</option>
		<?php
		include("../includes/dbconfig.php");
		$sql="SELECT * FROM studycodes";
		$studycodes=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection ));
			while ($studycode = mysqli_fetch_array($studycodes,MYSQLI_ASSOC)) {
				$title = $studycode['projtitle'];
				$code = $studycode['code'];
				echo "<option value='$code' style='background-color:#CCCCCC;'>$code - $title</option>";	
			}			
			?>
</select>
</div>

<div class="col-md-2">
<input type="submit" name="submit_liquid" value="Download" class="form-control btn-primary">
</div>

</div>

</div></form>
<hr>
<?php
if(isset($_GET['submit_liquid'])){
include("../includes/dbconfig.php");
?>
<input type="button" name="printMe" class="form-control btn btn-primary btn-responsive" 
onclick="PrintDiv('PRELIMINARY','','')" 
value="PRINT WORKSHEET"  ><br>

<div id="divToPrint" >
<style type="text/css">
    @media print
    {.table td,
  .table th {  height:55px;}
   .table td{font-size:22px;}
 table { width:99%; 
		border-collapse: collapse; 
		border-spacing: 0;
		margin-left:2%;
		}
td,
th {
  padding: 2px;
}
td{font-size:15px;}
 #prinReady{float:left; background-color:white;
		font-size:; width:100%;
		margin:; padding:10px;}
		.table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
  .table-responsive {
  min-height: .01%;
  overflow-x: auto;
}
.left{float:left;}
.right{float:right;text-align:right;float:right;font-style: italic}
.title1{ 
   font-size:25px;font-weight:800; }

.title2
{ font-size:25px;font-weight:800;		
}
}

    </style>
<div id="printReady" style="">
<div class="report-title" style="background-color:white; width=100%; font-size:;  margin:; padding-left:;"><center>
<b class="title1"><?php echo $reporttitle1 ?></b>
<?php if($reporttitle2!=''){echo "<br><b class='title2'>$reporttitle2 </b>"; }?> <BR>


</center></div>

<h3 class="left">LIQUID CULTURE RESULTS WORKSHEET</h3>
<h3 class="right">Print time: <?php echo date("d-M-Y h:i:sa"); ?></h3>


<table border="1" class="table table-responsive">
<tr><th>STUDY</th><th>LAB NO</th><th>INNOC DATE</th><th>MEDIA</th><th>PURITY</th>
<th>&nbsp;S&nbsp;&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;I&nbsp;</th>
<th>&nbsp;&nbsp;R&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;E&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;PZA</th><th>COMMENT</th><th>INITIALS</th></tr>

<?php
$studycode=$_GET['studycode'];

if($studycode!=''){
	$sql="SELECT *,c.media culturemedia FROM results_liquidculture c,samples s WHERE s.labno=c.labno AND s.studycode='$studycode' AND (c.result_dtp='' OR c.result_bap=''  OR
c.result_znc='' OR	c.resdate='0000-00-00')";
}
else{
	$sql="SELECT *,c.media culturemedia FROM results_liquidculture c,samples s WHERE s.labno=c.labno AND (c.result_znc='' OR c.result_dtp='' OR c.result_bap=''  OR c.resdate='0000-00-00')";
}

$records=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

while ($record = mysqli_fetch_array($records,MYSQLI_ASSOC)) {
				$labno = $record['labno'];
				$media = $record['culturemedia'];
				$studycode = $record['studycode'];
				$processdate = $record['processdate'];
				if($processdate!='0000-00-00'){ $processdate=date('d-M-y',strtotime($processdate)); }
				else $processdate='';
				
			echo "<tr'><td>$studycode</td>
			<td>$labno</td>
			<td>&nbsp;&nbsp;</td>
			<td>$media</td>
			<td></td>
			<td>&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;</td>
			
			
			</tr>";	
}

?>
</table><br><br><br>
<div class="left">Reviewed By................................................</div>
<div class="right">Date........................................................</div>
</div>
</div>
<br><br>

<?php } ?>
<?php } ?>

<?php if($action=='dzn'){ ?>


<h4>Direct ZN</h4>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" autocomplete="off">
<input type="hidden" name="action" value="dzn">

<div class="form-horizontal">

<div class="form-group"> 
<label class="col-sm-2 control-label label-format">Study/Project:</label>
<div class="col-sm-3">
<select name="studycode" class="form-control" >
		<option value="">- All Studies/Projects -</option>
		<?php
		include("../includes/dbconfig.php");
		$sql="SELECT * FROM studycodes";
		$studycodes=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection ));
			while ($studycode = mysqli_fetch_array($studycodes,MYSQLI_ASSOC)) {
				$title = $studycode['projtitle'];
				$code = $studycode['code'];
				echo "<option value='$code' style='background-color:#CCCCCC;'>$code - $title</option>";	
			}			
			?>
</select>
</div>

<div class="col-md-2">
<input type="submit" name="submit_dzn" value="Download" class="form-control btn-primary">
</div>

</div>

</div></form>
<hr>
<?php
if(isset($_GET['submit_dzn'])){
include("../includes/dbconfig.php");
?>
<input type="button" name="printMe" class="form-control btn btn-primary btn-responsive" 
onclick="PrintDiv('PRELIMINARY','','')" 
value="PRINT WORKSHEET"  ><br>

<div id="divToPrint" >
<style type="text/css">
    @media print
    {
		.title1{ 
   font-size:25px;font-weight:800; }

.title2
{ font-size:25px;font-weight:800;		
}
		.table td,
  .table th {  height:55px;}
   .table td{font-size:22px;}
		table { width:97%;
  border-spacing: 0;
  border-collapse: collapse;
  margin-left:2%;
}
td,
th {
  padding: 2px;
}
td{font-size:15px;}
		
		 

 #prinReady{float:left; background-color:white;
		font-size:; width:100%;
		margin:; padding:10px;}
		.table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
  .table-responsive {
  min-height: .01%;
  overflow-x: auto;
}
.left{float:left;}
.right{float:right;text-align:right;float:right;font-style: italic}

	
	.left1{float:left;width:30%;background-color:white;font-size:17px;}
.right1{float:left;width:70%; background-color:white; font-size:17px;}
.leftfm{float:left; font-size:20px;width:65%;}
.rightfm{float:left;text-align:right;width:35%;font-style: italic;font-size:10px;}
#printReady{background-color:white;}
}
.left1{float:left;width:50%;background-color:white;font-size:17px;}
.right1{float:right;width:50%; background-color:white; font-size:17px;}
.smearhead{background-color:red;color:blue;}
.leftfm{float:left; font-size:24px;}
.rightfm{float:right;text-align:right;float:right;font-style: italic;font-size:20px;}
#printReady{background-color:white;}

    </style>
	<div class="report-title" style="background-color:white; width=100%; font-size:;  margin:; padding-left:;"><center>
<b class="title1"><?php echo $reporttitle1 ?></b>
<?php if($reporttitle2!=''){echo "<br><b class='title2'>$reporttitle2 </b>"; }?> <BR>


</center></div>
	<div class="leftfm">DIRECT ZN Worksheet </div>
<div class="rightfm">Print time: <?php echo date("d-M-Y h:i:sa"); ?></div>
<div id="printReady" style="">
<br>

<br>

<div class="left1"> 

Positive Control Result:

____________________________<br>


 Positive Smear Lot# 
______________________________<br>
Negative Control Result 
____________________________<br>
Negative Smear Lot#
______________________________
</div>
<div class="right1">
 Lot # Carbol Fuchsin /Exp Date: 
 ______________________<br>
Lot#decolorising solution /Exp Date:
 _________________<br>

Lot# Methylene Blue Solution Exp Date :
 _______________<br>
Microcope Used :
 _________________________________
</div>
<br>
<table border="1" class="table table-responsive">
<tr><th>STUDY</th><th>LAB NO</th>
<th>PROCESSED</th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
RESULT&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th>INITIAL/DATE</th><th>COMMENTS</th>
</tr>
<!--
<tr><th>STUDY</th><th>LAB NO</th><th>PROCESSED</th><th>SLIDE</th>
<th>RESULT</th><th>INITIAL/DATE</th><th>COMMENTS</th>
</tr>
-->
<?php
$studycode=$_GET['studycode'];

if($studycode!=''){
	$sql="SELECT * FROM results_others dzn,samples s WHERE s.labno=dzn.labno AND dzn.test='DZN' AND s.studycode='$studycode' AND (dzn.result='' OR dzn.resdate='0000-00-00')";
}
else{
	$sql="SELECT * FROM results_others dzn ,samples s WHERE s.labno=dzn.labno AND dzn.test='DZN' AND (dzn.result='' OR dzn.resdate='0000-00-00')";
}

$records=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

while ($record = mysqli_fetch_array($records,MYSQLI_ASSOC)) {
				$labno = $record['labno'];
				$studycode = $record['studycode'];
				$processdate = $record['processdate'];
				if($processdate!='0000-00-00'){ $processdate=date('d-M-y',strtotime($processdate)); }
				else $processdate='';
			
echo "<tr style='padding:1em'>
			<td>$studycode</td>
			<td>$labno</td>
			
			<td>$processdate</td>
			<td>&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;</td>
			
			</tr>";	
/*			
			echo "<tr'><td>$studycode</td><td>$labno</td><td>$processdate</td>
			<td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td>
			
			</tr>
			";	*/
}

?>
</table><br><br><br>
<div class="left">Reviewed By................................................</div>
<div class="right">Date........................................................</div></div>
__________________________________________________________________________________________________________________
<br>
FO-MYC-P005-A  &nbsp; &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; Rev.No.04  
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  Effective Date: 31 JULY 2017 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Supersedes Rev No:03</div>
<br><br>

<br>
</div>

<?php } ?>


<?php } ?>
<?php if($action=='microscopyzn'){ ?>


<h4>Worksheet for Concentrated Microscopy ZN</h4>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" autocomplete="off">
<input type="hidden" name="action" value="microscopyzn">

<div class="form-horizontal">

<div class="form-group"> 
<label class="col-sm-2 control-label label-format">Study/Project:</label>
<div class="col-sm-3">
<select name="studycode" class="form-control" >
		<option value="">- All Studies/Projects -</option>
		<?php
		include("../includes/dbconfig.php");
		$sql="SELECT * FROM studycodes";
		$studycodes=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection ));
			while ($studycode = mysqli_fetch_array($studycodes,MYSQLI_ASSOC)) {
				$title = $studycode['projtitle'];
				$code = $studycode['code'];
				echo "<option value='$code' style='background-color:#CCCCCC;'>$code - $title</option>";	
			}			
			?>
</select>
</div>

<div class="col-md-2">
<input type="submit" name="submit_microscopyzn" value="Download" class="form-control btn-primary">
</div>

</div>

</div></form>
<hr>
<?php
if(isset($_GET['submit_microscopyzn'])){
include("../includes/dbconfig.php");
?>
<input type="button" name="printMe" class="form-control btn btn-primary btn-responsive" 
onclick="PrintDiv('PRELIMINARY','','')" 
value="PRINT WORKSHEET"  ><br>

<div id="divToPrint" >
<style type="text/css">
.slide{min-width:200px;}
th .proc{max-width:12px;}
    @media print
    {
		.title1{ 
   font-size:25px;font-weight:800; }

.title2
{ font-size:25px;font-weight:800;		
}
		.table td,
  .table th {  height:55px;}
   .table td{font-size:22px;}
		table { width:97%;
  border-spacing: 0;
  border-collapse: collapse;
  margin-left:2%;
}
td,
th {
  padding: 2px;
}
td{font-size:15px;}
		
		 

 #prinReady{float:left; background-color:white;
		font-size:; width:100%;
		margin:; padding:10px;}
		.table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
  .table-responsive {
  min-height: .01%;
  overflow-x: auto;
}
.left{float:left;}
.right{float:right;text-align:right;float:right;font-style: italic}

	
	.left1{float:left;width:30%;background-color:white;font-size:17px;}
.right1{float:left;width:70%; background-color:white; font-size:17px;}
.leftfm{float:left; font-size:20px;width:65%;}
.rightfm{float:left;text-align:right;width:35%;font-style: italic;font-size:10px;}
#printReady{background-color:white;}
}
.left1{float:left;width:50%;background-color:white;font-size:17px;}
.right1{float:right;width:50%; background-color:white; font-size:17px;}
.smearhead{background-color:red;color:blue;}
.leftfm{float:left; font-size:24px;}
.rightfm{float:right;text-align:right;float:right;font-style: italic;font-size:20px;}
#printReady{background-color:white;}

    </style>
	<div class="report-title" style="background-color:white; width=100%; font-size:;  margin:; padding-left:;"><center>
<b class="title1"><?php echo $reporttitle1 ?></b>
<?php if($reporttitle2!=''){echo "<br><b class='title2'>$reporttitle2 </b>"; }?> <BR>


</center></div>
	<div class="leftfm">CONCENTRATED ZN WORKSHEET </div>
<div class="rightfm">Print time: <?php echo date("d-M-Y h:i:sa"); ?></div>
<div id="printReady" style="">
<br>

<br>

<div class="left1"> 

Positive Control Result:

________________________<br>


 Positive Smear Lot# 
____________________________<br>
Negative Control Result 
________________________<br>
Negative Smear Lot#
________________________
</div>
<div class="right1">
 Lot # Carbol Fuchsin /Exp Date: 
 ___________________<br>
Lot#decolorising solution /Exp Date:
 ___________________<br>

Lot# Methylene Blue Solution Exp Date :
 _______________<br>
Microcope Used :
___________________________________
</div>
<br>
<table border="1" class="table table-responsive">
<!--<tr><th>STUDY</th><th>LAB NO</th><th class="proc">PROCESSED</th>
<th class="slide">SLIDE</th><th>RESULT</th><th>INITIAL/DATE</th><th>COMMENTS</th>
</tr>-->
<tr><th>STUDY</th><th>LAB NO</th>
<th>PROCESSED</th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
RESULT&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th>INITIAL/DATE</th><th>COMMENTS</th>
</tr>

<?php
$studycode=$_GET['studycode'];

if($studycode!=''){
	$sql="SELECT * FROM results_zn zn,samples s WHERE s.labno=zn.labno AND s.studycode='$studycode' AND (zn.result='' OR zn.resdate='0000-00-00')";
}
else{
	$sql="SELECT * FROM results_zn zn,samples s WHERE s.labno=zn.labno AND (zn.result='' OR zn.resdate='0000-00-00')";
}

$records=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

while ($record = mysqli_fetch_array($records,MYSQLI_ASSOC)) {
				$labno = $record['labno'];
				$studycode = $record['studycode'];
				$processdate = $record['processdate'];
				if($processdate!='0000-00-00'){ $processdate=date('d-M-y',strtotime($processdate)); }
				else $processdate='';
				
			echo "<tr style='padding:1em'>
			<td>$studycode</td>
			<td>$labno</td>
			
			<td>$processdate</td>
			<td>&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;</td>
			
			</tr>";	
			/*echo "<tr'><td>$studycode</td><td>$labno</td>
			<td>$processdate</td>
			<td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td>
			
			</tr>
			";	*/
}

?>
</table><br><br><br>
<div class="left">Reviewed By................................................</div>
<div class="right">Date........................................................</div></div>
__________________________________________________________________________________________________________________
<br>
FO-MYC-P005-A  &nbsp; &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; Rev.No.03  
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  Effective Date: 30 APRL 2015 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Supersedes Rev No:02</div>
<br><br>

<br>
</div>

<?php } ?>


<?php } ?>


<?php } ?>

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