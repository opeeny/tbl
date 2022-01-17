<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php
@$labno=$_GET['findlabno'];
?>
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
<!--<script type="text/javascript" src="../scripts/print_srf.js"></script>-->

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
<fieldset class="scheduler-border"> <legend  class="scheduler-border"><b>SPECIMEN RECORD FORM (SRF)</b></legend>
<div class="form-horizontal">
<form action="" method="GET" name="formfindreport" onsubmit="return validateformfindreport();"  autocomplete="off" onload="srf_printSpecial('<?php echo $labno;?>')">

<div class="form-group"> 
<label class="col-sm-1 control-label label-format">LAB NO:</label>
<div class="col-sm-2"> 
    <input type="text" class="form-control" name="findlabno" placeholder="Search LAB NO" autofocus />
</div>
<div class="col-sm-1"> 
<input type="submit" name="findreport" value="FIND"  class="form-control btn-primary" title="" style="height:; width:; background-color:;">
</div>

<?php if(isset($_GET['findlabno'])){?>
<div class="col-sm-2">
<input type="button" value="<<PREVIOUS" class="form-control btn-success" onclick="location.href='report_srf.php?findlabno=<?php echo $prevlabno;?>'">
</div>
<div class="col-sm-1"> 
<input type="button"  href="view_students4.php" class="form-control btn btn-primary btn-responsive" 
onclick="PrintDiv()" 
value="PRINT WORKSHEET" >
</div>
<div class="col-sm-1"> 
<input type="button" value="NEXT>>" class="form-control btn-info" onclick="location.href='report_srf.php?findlabno=<?php echo $nextlabno;?>'">
</div>

<div class="col-sm-1"> 
<input type="button" name=""  value="CLOSE" class="form-control btn btn-danger btn-responsive" onClick="window.close();">
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
<?php if(isset($_GET['findlabno'])){?>
<br>


<?php include("report_srf_show.php"); ?>
</div>
<?php
}

?>
<br><br>
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