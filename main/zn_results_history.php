<?php include("../includes/global_content.php"); ?>
<?php include("../includes/header_content.php"); ?>
<?php include("../includes/header_bootstrap_content.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
<scrnipt type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<scrinpt type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.js"></script>
<style type="text/css">
    * {font-family:Calibri}
    .data {width:100px;border:1px solid #000;display:none}
    .cell {width:200px;border:1px solid #ddd}
</style>
<script type="text/javascript">
    $(function () {
        $(".cell").hover(
            function () {
                var $td = $(this);
                var divId = '#div-' + this.id.split('-')[1];
                //show it first or it doesn't position right
                $(divId).show();                
                $(divId).position({
                    my: 'left center',
                    at: 'right center',
                    of: $td,
                    collision: 'none'
                });
            },
            function () {
                var divId = '#div-' + this.id.split('-')[1];
                $(divId).hide();
            }
        );
    });
    </script>
</head>
<body>
    <table>
        <tr><td id="td-1" class="cell">Data</td></tr>
        <tr><td id="td-2" class="cell">Data</td></tr>
        <tr><td id="td-3" class="cell">Data</td></tr>
        <tr><td id="td-4" class="cell">Data</td></tr>
        <tr><td id="td-5" class="cell">Data</td></tr>
        <tr><td id="td-6" class="cell">Data</td></tr>
    </table>
    <div id="div-1" class="data">
	<?php
include("../includes/dbconfig.php");
$sql="SELECT * FROM results_zn WHERE status='Rejected'";
$questionedresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));
$totalquestioned=mysqlI_num_rows($questionedresults);			
?>		


<b>QUESTIONED  MICROSCOPY ZN RESULTS</b><br>
This is a list of pending MICROSCOPY ZN results Review. [TOTAL = <?php echo $totalquestioned;?>]<br>

<?php
while ($questionedresult = mysqli_fetch_array($questionedresults,MYSQLI_ASSOC)) {
	$questioned_labno = $questionedresult['labno'];
	$select_questioned_sc="SELECT * FROM samples WHERE labno=$questioned_labno";
			$questioned_scs=mysqli_query($dbconnection,$select_questioned_sc) or die("ERROR : " . mysqli_error($dbconnection));
			while ($questioned_sc = mysqli_fetch_array($questioned_scs,MYSQLI_ASSOC)) {
				$questionablecode = $questioned_sc['studycode'];
			}
	echo "<a href='?findlabno=$questioned_labno'>$questionablecode-$questioned_labno &emsp;</a>";
		//echo "<a href='resultsreview_zn.php?findlabno=$emptylabno'>$emptylabno-$emptystudycode</br></a>";
}			
?></div>
    <div id="div-2" class="data">div-2</div>
    <div id="div-3" class="data">div-3</div>
    <div id="div-4" class="data">div-4</div>
    <div id="div-5" class="data">div-5</div>
    <div id="div-6" class="data">div-6</div> 
</body>
</html>