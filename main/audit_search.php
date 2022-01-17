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

<div class="col-md-12"> 
<div class="searchsample">
<?php
include("../includes/dbconfig.php");


@$labno=$_GET['findlabno'];
$prevlabno=$labno-1;
$nextlabno=$labno+1;

?>
<fieldset class="scheduler-border"> <legend  class="scheduler-border"><b>SEARCHING RESULTS REPORT (Simplified)</b></legend>
<div class="form-horizontal">
<form action="" method="GET" name="formfindreport" onsubmit="return validateformfindreport();"  autocomplete="off">

<div class="form-group"> 
<label class="col-sm-1 control-label label-format">LAB NO:</label>
<div class="col-sm-3"> 
    <input type="text" class="form-control" name="findlabno" placeholder="Search LAB NO" autofocus />
</div>
<div class="col-sm-1"> 
<input type="submit" name="findreport" value="FIND"  class="form-control btn-primary" title="" style="height:30px; width:100px; background-color:;">
</div>
<?php if(isset($_GET['findlabno'])){?>
<div class="col-md-2">
<input type="button" value="<<PREVIOUS" class="form-control btn-success" onclick="location.href='report_soft.php?findlabno=<?php echo $prevlabno;?>'">
</div>
<div class="col-sm-1"> 
<input type="button" value="NEXT>>" class="form-control btn-info" onclick="location.href='report_soft.php?findlabno=<?php echo $nextlabno;?>'">
</div>
<?php } ?>
</div>

</form>
</div>

</fieldset>
</div>
</div>

<div class="row">
<div class="col-md-10"> 
<div id="divToPrint" >
 <style type="text/css">
 td{align:left;}
#resultsfooter{
background-color:white;
 vertical-align: sub;
    font-size: smaller;
	}
.col-sm-6left{position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
  float: left;
  width:37%;
    }
	
.col-sm-6right{position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
  float: left;
  width:50%;
    }
   
.table tr td.max{min-widith:130px;
max-width:230px;}
.table tr td.lbmin{min-widith:2550%;
color:red; background-color:blue;
}

    @media print
    {
		.table tr td.max{max-width:200px;}
		
		p{font-size:14px;}
		.title1
			{ 
            font-size:19px;font-weight:800; }
			.contact
			{ 
            font-size:15px;font-weight:400; }
				.title2
			{ font-size:19px;font-weight:800;		
				}
				.title3
			{ font-size:15px;font-weight:900;		
				}
		#printableheight{
		min-height:1060px;
		margin-left:35px;
		
		font-weight: bold;
		}
		b{font-size:14px;}
       
		#resultsfooter{
	background-color:white;
font-size: smaller;
margin-left:35px;
}
table{width:100%;
		} 
div#format-print{font-family:Arial Narrow,Arial,sans-serif; font-size:0.7em; color:;}

 .smallfont td{font-family:Arial Narrow,Arial,sans-serif; font-size:0.8em;color:;}
 .table th, 
 table td { border-top: none !important;
 }
 table .smallfont{
fonct-size:10px; }
 
		
		
		
        #divToPrint { display: block; }
		.report-title{
			background-color:white; padding-left:5px; padding-left:5px;
			
		}
		th {font-size:9px;
  padding: 0;
}
		.row #resultsfooter{
background-color:white;
 vertical-align: sub;
    font-size: smaller;
}
.col-sm-6left{
position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
  float: left;
  width:40%;
font-size:10px;
    }
	
.col-sm-6right{
position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
  float: left;
  width:48%;
  font-size:10px;
    }
	
	}
    </style>
<?php if(isset($_GET['findlabno'])){?>
<div id="printableheight">
<?php include("resultsonreport_checkstatus.php"); ?>
<?php include("results_audit.php"); ?>
</div>
<?php
}

	//footer retrieve
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line1' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l1=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line2' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l2=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line3' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l3=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line4' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l4=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line5' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l5=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line6' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l6=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line7' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l7=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line8' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l8=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line9' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l9=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line10' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l10=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line11' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l11=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line12' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l12=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line13' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l13=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line14' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l14=$foot['content'];
								}
	$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line15' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l15=$foot['content'];
								}
	$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line16' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l16=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line17' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l17=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line18' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l18=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line19' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l19=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line20' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l20=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line21' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l21=$foot['content'];
								}
	$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line22' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l22=$foot['content'];
								}
								
								
			$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line23' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l23=$foot['content'];
								}
	$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line24' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l24=$foot['content'];
								}
	$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line25' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l25=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line26' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l26=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line27' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l27=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line28' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l28=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line29' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l29=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line30' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l30=$foot['content'];
								}
	$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line31' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l31=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line32' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l32=$foot['content'];
								}
$footers=mysqli_query($dbconnection,"SELECT * FROM footersettings WHERE type='line33' 
and align='left'") or die("ERROR : " . mysqli_error($dbconnection));
while ($foot=mysqli_fetch_array($footers,MYSQLI_ASSOC)) {
								@$l33=$foot['content'];
								}
				?>
<br>


</div>

<br><br>
</div>
<div ="col-md-2">
<div style="float:left;  padding-left:0.5%;">
<form action="report_soft.php" method="GET" name="formfindreport" onsubmit="return validateformfindreport();" autocomplete="off">

<?php if(isset($_GET['findlabno'])){?>
<input type="button" value="PREVIOUS" class="form-control btn btn-info btn-responsive"  onclick="location.href='report_soft_simplified.php?findlabno=<?php echo $prevlabno;?>'"><br>
<input type="button" value="NEXT" class="form-control btn btn-warning btn-responsive" onclick="location.href='report_soft_simplified.php?findlabno=<?php echo $nextlabno;?>'"><br>

<input type="button" name="printMe" class="form-control btn btn-success btn-responsive" 
onclick="PrintDiv()('FINAL','<?php echo $studycode;?>','<?php echo $labno;?>')" 
value="PRINT FINAL" <?php if($reportstatus=='Preliminary'){ echo "disabled"; }?> ><br>
<!--
<input type="button" name="printMe" class="form-control btn btn-success btn-responsive" 
onClick="printSpecial('FINAL','<?php echo $studycode;?>','<?php echo $labno;?>')" 
value="PRINT FINAL" <?php if($reportstatus=='Preliminary'){ echo "disabled"; }?> ><br>
-->
<input type="button" name="printMe" class="form-control btn btn-primary btn-responsive" 
onclick="PrintDiv('PRELIMINARY','<?php echo $studycode;?>','<?php echo $labno;?>')" 
value="PRINT PRELIMINARY" <?php if($reportstatus=='Final'){ echo "disabled"; }?> ><br>

<!--<input type="button" name="printMe" class="form-control btn btn-primary btn-responsive" 
onClick="printSpecial('PRELIMINARY','<?php echo $studycode;?>','<?php echo $labno;?>')" 
value="PRINT PRELIMINARY" <?php if($reportstatus=='Final'){ echo "disabled"; }?> ><br>
-->
<input type="button" class="form-control btn btn-primary btn-responsive"
onClick="PrintDiv('CORRECTED','<?php echo $studycode;?>','<?php echo $labno;?>')" 
value="PRINT CORRECTED">
<?php } ?>
</form>
</div>
</div>


</div>
 
<?php 
} // stop checking for illegal login
else echo "<center>Illegal Access Blocked. <br><a href='index.php'>Login</a> to access the resources.</center>";?>
</div>



<div id="footer" class='row'> 
<?php include("../includes/footer.php"); ?>
</div>

<script type="text/javascript" src="../date_timepickers/cal_language.js" charset="UTF-8"></script>

</div>

</body>
</html>