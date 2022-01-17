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

<br>
<div class="row">
<div class="col-md-2"> 
<form action="results_rejection_report.php" method="GET">
<div class="form-horizontal">
<div class="form-group">
<input type="hidden" id="" value="" name="fromdate"/>
<input type="hidden" id="" value="" name="todate"/>
				<div class="col-sm-2"> 
<input type="submit" class="btn btn-danger"name="downloadfm" value="View All Rejected Results">
</div>
</div>
</div>

</form>
</div>
<div class="col-md-10">

<h3>FILTER USING RESULTS REJECTION DATE</h3>


<div class="row">
<div class="col-md-1"> 
</div>
<div class="col-md-11"> 

<form action="results_rejection_report.php" method="GET">
<div class="form-horizontal">
<div class="form-group">
<div class="col-sm-2"> 
<b>Date From </b>
</div>

<div class="col-sm-3"> 
	   
	  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input9" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input9" value="" name="fromdate"/>
				</div>
<div class="col-sm-1">	<b>Date To</b></div>
<div class="col-sm-3">
				
				  <div class="input-group date form_date col-md-12"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input10" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				
				<input type="hidden" id="dtp_input10" value="" name="todate"/>
			</div>
				<div class="col-sm-2"> 
<input type="submit" class="btn btn-success"name="downloadfm" value="Submit">
</div>
</div>
</div>
</form>

</div>

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