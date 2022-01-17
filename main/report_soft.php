<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
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
<fieldset class="scheduler-border"> <legend  class="scheduler-border"><b>SEARCHING SOFT RESULTS REPORT</b></legend>
<div class="form-horizontal">
<form action="report_soft.php" method="GET" name="formfindreport" onsubmit="return validateformfindreport();"  autocomplete="off">

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

     </div>
     <br/>
    
	 
<div class="row">
<div class="col-md-10"> 
 <div id="divToPrint" >
 <style type="text/css">
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
   

    @media print
    {p{font-size:14px;}
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
		
		font-weight: bold;
		}
		b{font-size:14px;}
       
		#resultsfooter{
	background-color:white;
font-size: smaller;
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
<?php if(isset($_GET['findlabno'])){
	//CHECK THE CURRENT SET REPORT TITLE
$rtitlecheck=mysqli_query($dbconnection,"SELECT * FROM reporttitle  
") or die("ERROR : " . mysqli_error($dbconnection));
while ($title=mysqli_fetch_array($rtitlecheck,MYSQLI_ASSOC)) {
								@$reporttitle1=$title['title1'];
								@$reporttitle2=$title['title2'];
								}
								
//CHECK THE REPORT CONTACT NUMBERS AS SET IN THE DATABASE
$rcontactcheck=mysqli_query($dbconnection,"SELECT * FROM reportcontacts  
") or die("ERROR : " . mysqli_error($dbconnection));
while ($cont=mysqli_fetch_array($rcontactcheck,MYSQLI_ASSOC)) {
								@$reportcontact=$cont['contact'];
								}
								?>
<div id="printableheight">

<?php include("resultsonreport_checkstatus.php"); ?>

<?php include("resultsonreport_show.php"); ?>
</div>
<?php
}

?>
<div class="row" id="resultsfooter">

<div class="col-sm-6left" >
<b><u>AFB Smear</u></b><br>
Qualitative AFB smearAuramine-Rhodamine stain at 200 X<br>
No AFB seen = 0 AFB per 30 fields. <br>
Actual No. = 1-29 AFB per 30 fields 
<br>
1+ = 30-299 AFB per 30 fields<br>
2+ = 10-100 AFB per field<br>
3+ = > 100 AFB per field<br>
Ziehl Neelsen Ziehl Neelsen stain at 100 X<br>
AFB Present or No AFB Seen<br>
Quantitative AFB smearAuramine-Rhodamine stain at 400 X log AFB/mL sputum<br>
<b><u>Cultures</u></b><br>
LJ or 7H10 selective and non-selective media <br>
Qualitative: Quantitative:<br>
Growth or No growth after Eight weeksLog CFU(colony forming units) / mL 
<br>Semi-quantitative:<br>
No growth after six weeks or:  
None = No growth<br>
1-9 colonies = actual number<br>
10 - 100 colonies = 1+<br>
>100-200 colonies = 2+<br>
>200 colonies (Confluent) = 3+<br>
<b><u>Genexpert</u></b><br>
MTB DETECTED (VERY LOW/LOW/MEDIUM/HIGH) = M. tuberculosis Complex<br>
MTB NOT DETECTED= M. tuberculosis Complex, Negative<br>
Rif Resistance DETECTED= Resistance to Rifampicin<br>
Rif Resistance NOT DETECTED= No Resistance to Rifampicin<br>
Rif Resistance INDETERMINATE=No Result<br>
<b><u>MGIT 960 System</u></b><br>
Days to detection of growth or no growth

</div>
<div class="col-sm-6right" >

<u><b>Susceptibility Testing</u></b> MGIT 960<br>
Drug susceptibility testing of MTB, on the MGIT 960 System, is based on the modified proportion method. If 1% or more of a test population of tubercle bacilli are resistant to a drug, the culture is considered “resistant”.
If not, "sensitive."
Critical drug concentrations compared:
<table class="smallfont">
<tr>
<th>Drug (ug/mL)</th><th>MGIT</th><th>LJ</th><th>7H10</th></tr>
<tr>
<td>Streptomycin</td><td>1.0</td><td>4.0</td><td>2.0</td></tr>
<tr>
<td>Isoniazid</td><td>0.1</td><td>0.2</td><td>0.2</td></tr>
<tr>
<td>Rifampin</td><td>1.0</td><td>40.0</td><td>1.0</td></tr>
<td>Ethambutol</td><td>5.0</td></td><td>2.0</td><td>5.0</td></tr>
<td>
Pyrazinamide</td><td>100.0</td><td></td><td></td></tr>
</table><br>
 <b><u>Blood Agar Culture</u></b><br>
No growth = Not contaminated with organisms able to grow on blood agar
Contaminated = Growth of organisms other than mycobacteria
MOTT = Contaminated with rapid growing mycobacteria, not MTB<br>
<b><u>Identification</u></b> TB Ag MPT 64<br>
Identification methods differentiate M. tuberculosis (MTB) complex <br>
(M. tuberculosis, M. bovis, M. africanum, M. microti) <br>
from Mycobacteria Other Than Tuberculosis (MOTT).<br> Positve = MTB; Negative = MOTT<br>
<b><u>BACTEC 9120 (Blood Culture)</u></b> <br>
Days to detection of Growth or No Growth after Six weeks

</div>
</div></div>

<br><br>
</div>

<div ="col-md-2">
<div style="float:left;  padding-left:0.5%;">
<form action="report_soft.php" method="GET" name="formfindreport" onsubmit="return validateformfindreport();" autocomplete="off">

<?php if(isset($_GET['findlabno'])){?>
<input type="button" value="PREVIOUS" class="form-control btn btn-info btn-responsive"  onclick="location.href='report_soft.php?findlabno=<?php echo $prevlabno;?>'"><br>
<input type="button" value="NEXT" class="form-control btn btn-warning btn-responsive" onclick="location.href='report_soft.php?findlabno=<?php echo $nextlabno;?>'"><br>

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