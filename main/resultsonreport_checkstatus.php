
<?php
@$labno=$_GET['findlabno'];
include("../includes/dbconfig.php");

$sql_fm="SELECT * FROM results_fm WHERE labno='$labno'";
$records_fm=mysqli_query($dbconnection,$sql_fm) or die("ERROR : " . mysqli_error($dbconnection));
$records_fm_count=mysqli_num_rows($records_fm);
$reportstatus_fm="";
if($records_fm_count=0){
	$reportstatus_fm="Final";
}
else{
	while ($record_fm = mysqli_fetch_array($records_fm,MYSQLI_ASSOC)) {
	$result_fm=$record_fm['result'];
	$resdate_fm=$record_fm['resdate'];
	
	if($result_fm==''){
		$reportstatus_fm=$reportstatus_fm."Preliminary";
	}
	else{
		$reportstatus_fm=$reportstatus_fm."Final";
	}
	
	}
}

if(strpos($reportstatus_fm, 'Preliminary') !== false){
	$reportstatus_fm="Preliminary";
}
else $reportstatus_fm="Final";
	
//echo "<br>Microscopy FM = ".$reportstatus_fm;


$sql_zn="SELECT * FROM results_zn WHERE labno='$labno'";
$records_zn=mysqli_query($dbconnection,$sql_zn) or die("ERROR : " . mysqli_error($dbconnection));
$records_zn_count=mysqli_num_rows($records_zn);
$reportstatus_zn="";
if($records_zn_count=0){
	$reportstatus_zn="Final";
}
else{
	while ($record_zn = mysqli_fetch_array($records_zn,MYSQLI_ASSOC)) {
	$result_zn=$record_zn['result'];
	$resdate_zn=$record_zn['resdate'];
	
	if($result_zn==''){
		$reportstatus_zn=$reportstatus_zn."Preliminary";
	}
	else{
		$reportstatus_zn=$reportstatus_zn."Final";
	}
	
	}
}

if(strpos($reportstatus_zn, 'Preliminary') !== false){
	$reportstatus_zn="Preliminary";
}
else $reportstatus_zn="Final";
	
//echo "<br>Microscopy ZN = ".$reportstatus_zn;


$sql_gx="SELECT * FROM results_genexpert WHERE labno='$labno'";
$records_gx=mysqli_query($dbconnection,$sql_gx) or die("ERROR : " . mysqli_error($dbconnection));
$records_gx_count=mysqli_num_rows($records_gx);
$reportstatus_gx="";
if($records_gx_count=0){
	$reportstatus_gx="Final";
}
else{
	while ($record_gx = mysqli_fetch_array($records_gx,MYSQLI_ASSOC)) {
	$result_gx=$record_gx['result'];
	$resdate_gx=$record_gx['resdate'];
	
	if($result_gx==''){
		$reportstatus_gx=$reportstatus_gx."Preliminary";
	}
	else{
		$reportstatus_gx=$reportstatus_gx."Final";
	}
	
	}
}

if(strpos($reportstatus_gx, 'Preliminary') !== false){
	$reportstatus_gx="Preliminary";
}
else $reportstatus_gx="Final";
	
//echo "<br>Genexpert = ".$reportstatus_gx;


$sql_id="SELECT * FROM results_identification WHERE labno='$labno'";
$records_id=mysqli_query($dbconnection,$sql_id) or die("ERROR : " . mysqli_error($dbconnection));
$records_id_count=mysqli_num_rows($records_id);
$reportstatus_id="";
if($records_id_count=0){
	$reportstatus_id="Final";
}
else{
	while ($record_id = mysqli_fetch_array($records_id,MYSQLI_ASSOC)) {
	$result_id=$record_id['result'];
	$resdate_id=$record_id['resdate'];
	
	if($result_id==''){
		$reportstatus_id=$reportstatus_id."Preliminary";
	}
	else{
		$reportstatus_id=$reportstatus_id."Final";
	}
	
	}
}

if(strpos($reportstatus_id, 'Preliminary') !== false){
	$reportstatus_id="Preliminary";
}
else $reportstatus_id="Final";
	
//echo "<br>Identification = ".$reportstatus_id;


$sql_liquidculture="SELECT * FROM results_liquidculture WHERE labno='$labno'";
$records_liquidculture=mysqli_query($dbconnection,$sql_liquidculture) or die("ERROR : " . mysqli_error($dbconnection));
$records_liquidculture_count=mysqli_num_rows($records_liquidculture);
$reportstatus_liquidculture="";
if($records_liquidculture_count=0){
	$reportstatus_liquidculture="Final";
}
else{
	while ($record_liquidculture = mysqli_fetch_array($records_liquidculture,MYSQLI_ASSOC)) {
	$resdate_liquidculture=$record_liquidculture['resdate'];
	
	if($resdate_liquidculture=='0000-00-00'){
		$reportstatus_liquidculture=$reportstatus_liquidculture."Preliminary";
	}
	else{
		$reportstatus_liquidculture=$reportstatus_liquidculture."Final";
	}
	
	}
}
//echo "<br>Liquid Culture = ".$reportstatus_liquidculture;
if(strpos($reportstatus_liquidculture, 'Preliminary') !== false){
	$reportstatus_liquidculture="Preliminary";
}
else $reportstatus_liquidculture="Final";
	
//echo "<br>Liquid Culture = ".$reportstatus_liquidculture;


$sql_solidculture="SELECT * FROM results_solidculture WHERE labno='$labno'";
$records_solidculture=mysqli_query($dbconnection,$sql_solidculture) or die("ERROR : " . mysqli_error($dbconnection));
$records_solidculture_count=mysqli_num_rows($records_solidculture);
$reportstatus_solidculture="";
if($records_solidculture_count=0){
	$reportstatus_solidculture="Final";
}
else{
	while ($record_solidculture = mysqli_fetch_array($records_solidculture,MYSQLI_ASSOC)) {
	$resdate_solidculture=$record_solidculture['resdate'];
	
	if($resdate_solidculture=='0000-00-00'){
		$reportstatus_solidculture=$reportstatus_solidculture."Preliminary";
	}
	else{
		$reportstatus_solidculture=$reportstatus_solidculture."Final";
	}
	
	}
}
//echo "<br>Solid Culture = ".$reportstatus_solidculture;
if(strpos($reportstatus_solidculture, 'Preliminary') !== false){
	$reportstatus_solidculture="Preliminary";
}
else $reportstatus_solidculture="Final";
	
//echo "<br>Solid Culture = ".$reportstatus_solidculture;


$sql_bloodculture="SELECT * FROM results_bloodculture WHERE labno='$labno'";
$records_bloodculture=mysqli_query($dbconnection,$sql_bloodculture) or die("ERROR : " . mysqli_error($dbconnection));
$records_bloodculture_count=mysqli_num_rows($records_bloodculture);
$reportstatus_bloodculture="";
if($records_bloodculture_count=0){
	$reportstatus_bloodculture="Final";
}
else{
	while ($record_bloodculture = mysqli_fetch_array($records_bloodculture,MYSQLI_ASSOC)) {
	$resdate_bloodculture=$record_bloodculture['resdate'];
	
	if($resdate_bloodculture=='0000-00-00'){
		$reportstatus_bloodculture=$reportstatus_bloodculture."Preliminary";
	}
	else{
		$reportstatus_bloodculture=$reportstatus_bloodculture."Final";
	}
	
	}
}
//echo "<br>Blood Culture = ".$reportstatus_bloodculture;
if(strpos($reportstatus_bloodculture, 'Preliminary') !== false){
	$reportstatus_bloodculture="Preliminary";
}
else $reportstatus_bloodculture="Final";
	
//echo "<br>Blood Culture = ".$reportstatus_bloodculture;


$sql_dst1="SELECT * FROM results_dst1 WHERE labno='$labno'";
$records_dst1=mysqli_query($dbconnection,$sql_dst1) or die("ERROR : " . mysqli_error($dbconnection));
$records_dst1_count=mysqli_num_rows($records_dst1);
$reportstatus_dst1="";
if($records_dst1_count=0){
	$reportstatus_dst1="Final";
}
else{
	while ($record_dst1 = mysqli_fetch_array($records_dst1,MYSQLI_ASSOC)) {
	$resdate_dst1=$record_dst1['resdate'];
	
	if($resdate_dst1=='0000-00-00'){
		$reportstatus_dst1=$reportstatus_dst1."Preliminary";
	}
	else{
		$reportstatus_dst1=$reportstatus_dst1."Final";
	}
	
	}
}
//echo "<br>DST1 = ".$reportstatus_dst1;
if(strpos($reportstatus_dst1, 'Preliminary') !== false){
	$reportstatus_dst1="Preliminary";
}
else $reportstatus_dst1="Final";
	
//echo "<br>DST1 = ".$reportstatus_dst1;


$sql_dst2="SELECT * FROM results_dst2 WHERE labno='$labno'";
$records_dst2=mysqli_query($dbconnection,$sql_dst2) or die("ERROR : " . mysqli_error($dbconnection));
$records_dst2_count=mysqli_num_rows($records_dst2);
$reportstatus_dst2="";
if($records_dst2_count=0){
	$reportstatus_dst2="Final";
}
else{
	while ($record_dst2 = mysqli_fetch_array($records_dst2,MYSQLI_ASSOC)) {
	$resdate_dst2=$record_dst2['resdate'];
	
	if($resdate_dst2=='0000-00-00'){
		$reportstatus_dst2=$reportstatus_dst2."Preliminary";
	}
	else{
		$reportstatus_dst2=$reportstatus_dst2."Final";
	}
	
	}
}
//echo "<br>DST2 = ".$reportstatus_dst2;
if(strpos($reportstatus_dst2, 'Preliminary') !== false){
	$reportstatus_dst2="Preliminary";
}
else $reportstatus_dst2="Final";
	
//echo "<br>DST2 = ".$reportstatus_dst2;


$sql_others="SELECT * FROM results_others WHERE labno='$labno'";
$records_others=mysqli_query($dbconnection,$sql_others) or die("ERROR : " . mysqli_error($dbconnection));
$records_others_count=mysqli_num_rows($records_others);
$reportstatus_others="";
if($records_others_count=0){
	$reportstatus_others="Final";
}
else{
	while ($record_others = mysqli_fetch_array($records_others,MYSQLI_ASSOC)) {
	$result_others=$record_others['result'];
	$resdate_others=$record_others['resdate'];
	
	if($result_others==''){
		$reportstatus_others=$reportstatus_others."Preliminary";
	}
	else{
		$reportstatus_others=$reportstatus_others."Final";
	}
	
	}
}
//echo "<br>Others = ".$reportstatus_others;
if(strpos($reportstatus_others, 'Preliminary') !== false){
	$reportstatus_others="Preliminary";
}
else $reportstatus_others="Final";
	
//echo "<br>Others = ".$reportstatus_others;


if ($reportstatus_fm=='Preliminary' OR $reportstatus_zn=='Preliminary' OR $reportstatus_gx=='Preliminary' OR $reportstatus_liquidculture=='Preliminary' OR 
$reportstatus_solidculture=='Preliminary' OR $reportstatus_bloodculture=='Preliminary' OR $reportstatus_id=='Preliminary' OR $reportstatus_dst1=='Preliminary' OR 
$reportstatus_dst2=='Preliminary' OR $reportstatus_others=='Preliminary'){
	$reportstatus='Preliminary';
}

if ($reportstatus_fm=='Final' AND $reportstatus_zn=='Final' AND $reportstatus_gx=='Final' AND $reportstatus_liquidculture=='Final' AND 
$reportstatus_solidculture=='Final' AND $reportstatus_bloodculture=='Final' AND $reportstatus_id=='Final' AND $reportstatus_dst1=='Final' AND 
$reportstatus_dst2=='Final' AND $reportstatus_others=='Final'){
	$reportstatus='Final';
}

//echo "<br><br>REPORT: $reportstatus";
