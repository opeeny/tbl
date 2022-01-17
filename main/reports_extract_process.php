<?php
ini_set('max_execution_time', 300000);
$today=date("d-m-Y");
  if(isset($_GET['fromdate'])){
  $fromdate2= $_GET['fromdate'];
   $todate2= $_GET['todate'];
  $fromdate=date('d-m-Y', strtotime($fromdate2));
$todate=date('d-m-Y', strtotime($todate2));
  }
  include("../includes/dbconfig.php");

 if(isset($_GET['downloaddst1'])){
$sqlvalue="SELECT  s.labno,p.pid,s.studycode,s.processdate,s.rctdate,s.collmethod,
s.colldate,s.visitinterval
,s.appearance,s.spectype as Type,s.consistency ,r.* from patients p, results_dst1 r ,
samples s where r.labno=s.labno and s.patient=p.id and  (resdate between '".$fromdate2."' and '".$todate2."')";
//$title="<h3><center>DST 1 RESULTS DATA FROM $fromdate TO $todate</center></h3>";
$filename="DST 1_$fromdate to $todate";
 }

  if(isset($_GET['notreporteddst1'])){
$sqlvalue="SELECT   s.labno,p.pid,s.studycode,s.processdate,s.rctdate,s.collmethod,
s.colldate,s.visitinterval
,s.appearance,s.spectype as Type,s.consistency ,r.* from patients p, results_dst1 r ,
samples s where r.labno=s.labno and s.patient=p.id  and r.restech='' ";
$filename="DST 1_ Not Reported $today";
 }
  if(isset($_GET['downloaddst2'])){
$sqlvalue="SELECT   s.labno,p.pid,s.studycode,s.processdate,s.rctdate,s.collmethod,
s.colldate,s.visitinterval
,s.appearance,s.spectype as Type,s.consistency ,r.* 
from patients p,results_dst2 r ,samples s where r.labno=s.labno and s.patient=p.id  and  (resdate between '".$fromdate2."' and '".$todate2."')";
//$title="<h3><center>DST 1 RESULTS DATA FROM $fromdate TO $todate</center></h3>";
$filename="DST 2_$fromdate to $todate";
 }
  if(isset($_GET['notreporteddst2'])){
$sqlvalue="SELECT   s.labno,p.pid,s.studycode,s.processdate,s.rctdate,s.collmethod,
s.colldate,s.visitinterval
,s.appearance,s.spectype as Type,s.consistency,r.* from patients p,results_dst2 r ,
samples s where r.labno=s.labno and s.patient=p.id and r.restech=''";
$filename="DST 2_ Not Reported $today";
 }
 if(isset($_GET['downloadothers'])){
	 $test=$_GET['testothers'];
$sqlvalue= "SELECT p.pid,r.labno,s.studycode,r.test,r.result,r.comment,r.resdate,
r.restech,r.entrant,r.entrytime,
r.reviewer,r.reviewdate,s.processdate,s.rctdate from patients p,
results_others r ,samples s where r.labno=s.labno and test='$test' and s.patient=p.id and  (resdate between '".$fromdate2."' and '".$todate2."')";
$title="<h3><center>$test RESULTS DATA FROM $fromdate TO $todate</center></h3>";
$filename="$test$fromdate to $todate";
}

 if(isset($_GET['downloadfm'])){

$sqlvalue= "SELECT  s.labno,p.pid,s.studycode,s.processdate,s.rctdate,s.collmethod,s.colldate,s.visitinterval
,s.appearance,s.spectype as Type,s.consistency ,r.result,r.interpretation,r.resdate,r.restech,r.comment,r.entrant,
r.entrytime ,r.reviewer,r.reviewdate from patients p, 
results_fm r ,samples s where r.labno=s.labno and s.patient=p.id and (resdate between '".$fromdate2."' and '".$todate2."')   ";
$title="<h3><center>MICROSCOPY FM RESULTS DATA FROM $fromdate TO $todate</center></h3>";
$filename="FM_$fromdate to $todate";
}
if(isset($_GET['downloadid'])){
$sqlvalue="SELECT   s.labno,p.pid,s.studycode,s.processdate,s.rctdate,s.collmethod,s.colldate,s.visitinterval
,s.appearance,s.spectype as Type,s.consistency ,r.* from patients p,
 results_identification r ,samples s where r.labno=s.labno and s.patient=p.id and  (resdate between '".$fromdate2."' and '".$todate2."')";
$title="<h3><center>IDENTIFICATION RESULTS DATA FROM $fromdate TO $todate</center></h3>";
$filename="Identification_$fromdate to $todate";
}

if(isset($_GET['downloadzn'])){

$sqlvalue= "SELECT  s.labno,p.pid,s.studycode,s.processdate,s.rctdate,s.collmethod,s.colldate,s.visitinterval
,s.appearance,s.spectype as Type,s.consistency ,r.result,r.interpretation,r.resdate,r.restech,r.comment,r.entrant,
r.entrytime ,r.reviewer,r.reviewdate from patients p, results_zn r ,samples s 
where r.labno=s.labno and s.patient=p.id  and  (resdate between '".$fromdate2."' and '".$todate2."')  ";
$title="<h3><center>MICROSCOPY ZN RESULTS DATA FROM $fromdate TO $todate</center></h3>";
$filename="ZN_$fromdate to $todate";
}
 if(isset($_GET['downloadgnx'])){

$sqlvalue="SELECT  s.labno,p.pid,s.studycode,s.processdate,s.rctdate,s.collmethod,s.colldate,s.visitinterval
,s.appearance,s.spectype as Type,s.consistency ,r.result,r.resdate,r.restech,r.comment,r.entrant,
r.entrytime ,r.reviewer,r.reviewdate from patients p, 
results_genexpert r ,samples s where r.labno=s.labno and s.patient=p.id and  (resdate between '".$fromdate2."' and '".$todate2."')  ";
$title="<h3><center>GENEXPERT  RESULTS DATA FROM $fromdate TO $todate</center></h3>";
$filename="Genexpert_$fromdate to $todate";
}

 if(isset($_GET['downloadblood'])){

$sqlvalue= "SELECT  s.labno,p.pid,s.studycode,s.processdate,s.rctdate,s.collmethod,
s.colldate,s.visitinterval
,s.appearance,s.spectype as Type,s.consistency ,r.* from patients p, 
results_bloodculture r ,samples s where r.labno=s.labno and s.patient=p.id and  (resdate between '".$fromdate2."' and '".$todate2."')  ";
$title="<h3><center>BLOOD CULTURE RESULTS DATA FROM $fromdate TO $todate</center></h3>";
$filename="Blood_Culture_$fromdate to $todate";
$table='results_bloodculture';
}
 if(isset($_GET['downloadliquid'])){
if($fromdate=='01-01-1970' or $todate=='01-01-1970'){
	
		$sqlvalue="SELECT s.labno,p.pid,s.studycode,s.processdate,s.rctdate,s.collmethod,
s.colldate,s.visitinterval
,s.appearance,s.spectype as Type,s.consistency,r.media,r.result_dtp,r.dtp_tech,r.result_znc,r.znc_tech,
r.result_bap,r.bap_tech,
r.interpretation,r.comment,r.resdate,r.entrant,r.entrytime,r.reviewer,r.reviewdate  from patients p, 
results_liquidculture r ,samples s where r.labno=s.labno and s.patient=p.id ";
$title="<h3><center>SOLID CULTURE RESULTS DATA FROM $fromdate TO $todate</center></h3>"; 
$filename="Liquid_Culture_All_$fromdate to $todate";
	 
 
 
}
else{
$sqlvalue= "SELECT  s.labno,p.pid,s.studycode,s.processdate,s.rctdate,s.collmethod,
s.colldate,s.visitinterval
,s.appearance,s.spectype as Type,s.consistency ,r.media,r.result_dtp,r.dtp_tech,r.result_znc,r.znc_tech,
r.result_bap,r.bap_tech,
r.interpretation,r.comment,r.resdate,r.entrant,r.entrytime,r.reviewer,r.reviewdate from patients p, 
results_liquidculture r ,samples s where r.labno=s.labno and s.patient=p.id and  (r.resdate between '".$fromdate2."' and '".$todate2."')  ";
$title="<h3><center>LIQUID CULTURE RESULTS DATA FROM $fromdate TO $todate</center></h3>";
$filename="Liquid_Culture_$fromdate to $todate";
$table='results_liquidculture';
}
 }
 if(isset($_GET['downloadsolid'])){
 if($fromdate=='01-01-1970' or $todate=='01-01-1970'){
	$sqlvalue="SELECT s.labno,p.pid,s.studycode,s.processdate,s.rctdate,s.collmethod,
s.colldate,s.visitinterval
,s.appearance,s.spectype as Type,s.consistency,r.media,r.result_ql,r.result_qt,r.result_sqt,
r.interpretation,r.comment,r.resdate,r.restech,r.entrant,r.entrytime,r.reviewer,r.reviewdate  from patients p, 
results_solidculture r ,samples s where r.labno=s.labno and s.patient=p.id ";
$title="<h3><center>SOLID CULTURE RESULTS DATA FROM $fromdate TO $todate</center></h3>"; 
$filename="Solid_Culture_All_$fromdate to $todate";
	 
 }else{
$sqlvalue="SELECT s.labno,p.pid,s.studycode,s.processdate,s.rctdate,s.collmethod,
s.colldate,s.visitinterval
,s.appearance,s.spectype as Type,s.consistency,r.media,r.result_ql,r.result_qt,r.result_sqt,
r.interpretation,r.comment,r.resdate,r.restech,r.entrant,r.entrytime,r.reviewer,r.reviewdate from patients p, 
results_solidculture r ,samples s where r.labno=s.labno and s.patient=p.id  and  (r.resdate between '".$fromdate2."' and '".$todate2."')";
$title="<h3><center>SOLID CULTURE RESULTS DATA FROM $fromdate TO $todate</center></h3>";
$filename="Solid_Culture_$fromdate to $todate";
$table='results_solidculture';
}
 }
	    if(isset($_GET['notreportedothers'])){
			$test=$_GET['testothers'];

$sqlvalue="SELECT s.labno,p.pid,s.studycode,s.processdate,s.rctdate,s.collmethod,
s.colldate,s.visitinterval
,s.appearance,s.spectype as Type,s.consistency ,r.test,r.result,r.resdate,r.restech,r.comment,r.entrant,
r.entrytime ,r.reviewer,r.reviewdate from patients p, results_others r ,samples s 

 where r.labno=s.labno and r.result=''  and s.patient=p.id and test='$test' ";
$title="<h3><center>$test RESULTS DATA NOT REPORTED </center></h3>";
$filename="$test Not_Reported $today";
}
	  if(isset($_GET['notreportedfm'])){
$sqlvalue="SELECT  s.labno,p.pid,s.studycode,s.processdate,s.rctdate,s.collmethod,s.colldate,s.visitinterval
,s.appearance,s.spectype as Type,s.consistency ,r.result,r.interpretation,r.resdate,r.restech,r.comment,r.entrant,
r.entrytime ,r.reviewer,r.reviewdate from patients p, results_fm r ,
samples s where r.labno=s.labno and s.patient=p.id  and r.result='' ";
$title="<h3><center>MICROSCOPY FM RESULTS DATA NOT REPORTED </center></h3>";
$filename="FM_Not_Reported $today";
}
 if(isset($_GET['notreportedid'])){

$sqlvalue= "SELECT  s.labno,p.pid,s.studycode,s.processdate,s.rctdate,s.collmethod,
s.colldate,s.visitinterval
,s.appearance,s.spectype as Type,s.consistency ,r.* from patients p, 
results_identification r ,samples s where r.labno=s.labno and s.patient=p.id and r.result='' ";
$title="<h3><center>IDENTIFICATION RESULTS DATA NOT REPORTED </center></h3>";
$filename="Identification_Not_Reported $today";
}
  if(isset($_GET['notreportedzn'])){

$sqlvalue="SELECT  s.labno,p.pid,s.studycode,s.processdate,s.rctdate,s.collmethod,s.colldate,s.visitinterval
,s.appearance,s.spectype as Type,s.consistency ,r.result,r.interpretation,r.resdate,r.restech,r.comment,r.entrant,
r.entrytime ,r.reviewer,r.reviewdate from patients p, results_zn r ,
samples s where r.labno=s.labno and s.patient=p.id and r.result='' ";
$title="<h3><center>MICROSCOPY ZN RESULTS DATA NOT REPORTED </center></h3>";
$filename="ZN_Not_Reported $today";
}
 if(isset($_GET['notreportedgnx'])){

$sqlvalue="SELECT  s.labno,p.pid,s.studycode,s.processdate,s.rctdate,s.collmethod,s.colldate,s.visitinterval
,s.appearance,s.spectype as Type,s.consistency ,r.result,r.resdate,r.restech,r.comment,r.entrant,
r.entrytime ,r.reviewer,r.reviewdate from patients p, 
results_genexpert r ,samples s where r.labno=s.labno and s.patient=p.id  and  r.result='' ";
$title="<h3><center>GENEXPERT  RESULTS DATA NOT REPORTED</center></h3>";
$filename="Genexpert_Not_Reported $today";
}

 if(isset($_GET['notreportedblood'])){

$sqlvalue="SELECT  s.labno,p.pid,s.studycode,s.processdate,s.rctdate,s.collmethod,s.colldate,s.visitinterval
,s.appearance,s.spectype as Type,s.consistency,r.* from patients p,
 results_bloodculture r ,samples s where r.labno=s.labno and  r.result_ql='' and r.result_qt='' and r.result_sqt=''";
$title="<h3><center>BLOOD CULTURE RESULTS DATA NOT REPORTED</center></h3>";
$filename="Blood_Culture_Not_Reported $today";
$table='results_bloodculture';
}
 if(isset($_GET['notreportedliquid'])){
	 
$sqlvalue="SELECT s.labno,p.pid,s.studycode,s.processdate,s.rctdate,s.collmethod,
s.colldate,s.visitinterval,s.appearance,s.spectype as Type,s.consistency ,r.* from patients p, 
results_liquidculture r ,samples s where r.labno=s.labno and s.patient=p.id and r.result_bap='' and r.result_znc='' and r.result_dtp=''";
$title="<h3><center>LIQUID CULTURE RESULTS DATA NOT REPORTED</center></h3>";
$filename="Liquid_Culture_Not_Reported $today";
$table='results_liquidculture';
}

 if(isset($_GET['notreportedsolid'])){
$sqlvalue= "SELECT  s.labno,p.pid,s.studycode,s.processdate,s.rctdate,s.collmethod,
s.colldate,s.visitinterval
,s.appearance,s.spectype as Type,s.consistency ,r.* from patients p, results_solidculture r ,samples s where r.labno=s.labno 
and s.patient=p.id and  r.result_ql='' and r.result_qt='' and r.result_sqt='' ";
$title="<h3><center>SOLID CULTURE RESULTS DATA NOT REPORTED</center></h3>";
$filename="Solid_Culture_Not_Reported $today";
$table='results_solidculture';
}

if(isset($_GET['downloadalldata']) OR isset($_GET['downloadalldatacustomfields'])) {
	$studycode= $_GET['studycode'];
	$fromdate= $_GET['fromdate'];
	$todate= $_GET['todate'];
	$labnofro= $_GET['labnofro'];
	$labnoto= $_GET['labnoto'];

$now=date('d-m-Y', time());	
$filename="TBLIS_ALLDATA_$now";

//======= CATERING FOR A REARRANGEMENT OF PATIENTS AND SAMPLES TABLES ================
mysqli_query($dbconnection,"DROP TABLE IF EXISTS samples_patients") or die("ERROR : " . mysqli_error($dbconnection));

$samples_patients=mysqli_query($dbconnection,"
CREATE TABLE samples_patients AS (SELECT s.labno s_labno,s.studycode s_studycode,p.id pid_auto,p.*,s.* FROM samples s LEFT OUTER JOIN patients p ON s.patient = p.id)") or die("ERROR : " . mysqli_error($dbconnection));

mysqli_query($dbconnection,"ALTER TABLE samples_patients DROP COLUMN id") or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"ALTER TABLE samples_patients DROP COLUMN study") or die("ERROR : " . mysqli_error($dbconnection));
//mysqli_query($dbconnection,"ALTER TABLE samples_patients DROP COLUMN id_auto") or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"ALTER TABLE samples_patients DROP COLUMN labno") or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"ALTER TABLE samples_patients DROP COLUMN studycode") or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"ALTER TABLE samples_patients DROP COLUMN patient") or die("ERROR : " . mysqli_error($dbconnection));

mysqli_query($dbconnection,"ALTER TABLE samples_patients CHANGE s_labno labno int(200)") or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"ALTER TABLE samples_patients CHANGE s_studycode studycode varchar(10)") or die("ERROR : " . mysqli_error($dbconnection));

//=====================

include("view_test_all.php");

$sqlvalue="SELECT s.*,
f.result fm_res,f.interpretation fm_interpretation,f.comment fm_comment,f.restech fm_tech,f.resdate fm_date,
z.result zn_res,z.interpretation zn_interpretation,z.comment zn_comment,z.restech zn_tech,z.resdate zn_date,
g.result gx_res,g.comment gx_comment,g.restech gx_tech,g.resdate gx_date,
c.result culture_interpretation,
lcv.*,scv.*,bcv.*,idv.*,dst1.*,dst2.*,othertest.*
FROM samples_patients s
LEFT OUTER JOIN results_fm f ON s.labno = f.labno
LEFT OUTER JOIN results_zn z ON s.labno = z.labno
LEFT OUTER JOIN results_genexpert g ON s.labno = g.labno
LEFT OUTER JOIN results_culture_interpretation c ON s.labno = c.labno
LEFT OUTER JOIN results_liquidculture_view lcv ON s.labno = lcv.CL_labno
LEFT OUTER JOIN results_solidculture_view scv ON s.labno = scv.CS_labno
LEFT OUTER JOIN results_bloodculture_view bcv ON s.labno = bcv.CB_labno
LEFT OUTER JOIN results_identification_view idv ON s.labno = idv.ID_labno
LEFT OUTER JOIN results_dst1_view dst1 ON s.labno = dst1.dst1_labno
LEFT OUTER JOIN results_dst2_view dst2 ON s.labno = dst2.dst2_labno
LEFT OUTER JOIN results_others_view othertest ON s.labno = othertest.othertest_labno 
WHERE 1";

if($labnofro!==''){
	$sqlvalue = $sqlvalue. " AND  s.labno>='$labnofro' AND s.labno<='$labnoto'";
	$filename=$filename=$filename."_LabNo_".$labno;	
}
else{

if(($fromdate!=='') and ($todate!=='')){
	$sqlvalue = $sqlvalue. " AND s.rctdate>='$fromdate' AND s.rctdate<='$todate' ";
	$filename="TBLIS_ALLDATA_".$fromdate."_to_".$todate;
}

if($studycode!==''){
	$sqlvalue = $sqlvalue. " AND s.studycode='$studycode'";
	$filename=$filename."_".$studycode;
}

}

$sqlvalue = $sqlvalue. " ORDER BY s.labno";

//==== Handle all data table with no repeat Lab nos
mysqli_query($dbconnection,"DROP TABLE IF EXISTS alldatadownload_table") or die("ERROR : " . mysqli_error($dbconnection));

$alldatadownload_table=mysqli_query($dbconnection,"CREATE TABLE alldatadownload_table AS $sqlvalue") or die("ERROR : " . mysqli_error($dbconnection));

mysqli_query($dbconnection,"ALTER TABLE alldatadownload_table DROP COLUMN CL_labno") or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"ALTER TABLE alldatadownload_table DROP COLUMN CS_labno") or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"ALTER TABLE alldatadownload_table DROP COLUMN CB_labno") or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"ALTER TABLE alldatadownload_table DROP COLUMN ID_labno") or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"ALTER TABLE alldatadownload_table DROP COLUMN dst1_labno") or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"ALTER TABLE alldatadownload_table DROP COLUMN dst2_labno") or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"ALTER TABLE alldatadownload_table DROP COLUMN othertest_labno") or die("ERROR : " . mysqli_error($dbconnection));

$sqlvalue = "SELECT * FROM alldatadownload_table ORDER BY labno";
//==========


//======Try to create one view for all data downloadalldata====
if(isset($_GET['downloadalldatacustomfields'])){

header("location:reports_extract.php?action=alldata&&progress=filter");
}
//======

}

if(isset($_POST['downloadalldatacustomfieldsnext'])){
	$customfields=mysqli_real_escape_string($dbconnection,implode(',', $_POST['customfields']));
	$filename="TBLIS_DATA_DOWNLOAD-CUSTOM_FIELDS_$today";
	
	$sqlvalue= "SELECT $customfields FROM alldatadownload_table";
}

if(isset($_GET['downloadtolabelmaker'])){
	$fromdate= $_GET['fromdate'];
	$todate= $_GET['todate'];
$sqlvalue= "SELECT s.labno,s.studycode,p.pid_other,p.pid,p.pinitials,'' fname,s.visitinterval,i.code visitinterval_code, s.processdate from samples s,patients p,visitinterval i where 
s.patient=p.id and s.visitinterval=i.name ";

$title="<h3><center>SAMPLES FOR LABEL MAKER</center></h3>";
$filename="ALL_SAMPLES_FOR_LABELMAKER";

if(($fromdate!=='') and ($todate!=='')){
	$sqlvalue = $sqlvalue. " AND s.rctdate>='$fromdate' AND s.rctdate<='$todate' ";
	$filename="SAMPLES_FOR_LABELMAKER_".$fromdate."_to_".$todate;
}
}


header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=$filename.xls");


echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body style='font-family: Arial; font-size: 10px;'>";
//echo $sqlvalue;
	$rows = mysqli_query($dbconnection,$sqlvalue) or die("ERROR : " . mysqli_error($dbconnection));

	echo "<table border='1' cellpadding='5' cellspacing='1' bgcolor='91B4DD'>
	<!--<tr bgcolor='#ffffff'></tr><tr bgcolor='#ffffff'></tr>--><tr bgcolor='#fffbf6' align='left'>";
	
	$i=0;
while ($i < mysqli_num_fields($rows)){
$fld = mysqli_fetch_field($rows);
$fldname=$fld->name;
/*$drugs=mysqli_query($dbconnection,"SELECT * FROM option_dstdrugs1 where code='$fldname' ") or die("ERROR : " . mysqli_error($dbconnection));
$countd=mysql_num_rows($drugs);
if($countd>0){
while ($drug = mysqli_fetch_array($drugs,MYSQLI_ASSOC)){
	$id = $drug['id'];
	$code = $drug['code'];
	$fldname= $drug['name'];
}	
}else{
	
}*/
echo "<th>$fldname</th>";
$i = $i + 1;
}
echo "</tr>";
while ($row = mysqli_fetch_array($rows,MYSQLI_ASSOC)) {
echo "<tr align='left' bgcolor='#ffffff'>";

foreach($row as $column => $value) {
	
if($value=='00:00:00'){$value='';}
		if($value=='0000-00-00'){$value='';} if($value=='0000-00-00 00:00:00'){$value='';} echo "<td> $value</td>";
 }

echo "</tr>";
	}

	
	echo "</table>";
	
	
echo "</body>";
echo "</html>";