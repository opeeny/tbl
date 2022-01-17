<?php
ini_set('max_execution_time', 30000);
$today=date("d-m-Y");
  if(isset($_GET['fromdate'])){
  $fromdate2= $_GET['fromdate']; 
  $fromdate=date('d-m-Y', strtotime($fromdate2));
$todate2= $_GET['todate'];
 $todate=date('d-m-Y', strtotime($todate2));
  }
  



$conn=mysql_connect("localhost","root","") or die("ERROR : " . mysql_error());

mysql_select_db("tblis_jcrc") or die("ERROR : " . mysql_error());

 if(isset($_GET['downloaddst1'])){
$sqlvalue="SELECT r.*,s.processdate,s.studycode,s.rctdate from results_dst1 r ,samples s where r.labno=s.labno and  (resdate between '".$fromdate2."' and '".$todate2."')";
//$title="<h3><center>DST 1 RESULTS DATA FROM $fromdate TO $todate</center></h3>";
$filename="DST 1_$fromdate to $todate";
 }
  if(isset($_GET['notreporteddst1'])){
$sqlvalue="SELECT r.*,s.processdate,s.studycode,s.rctdate from results_dst1 r ,samples s where r.labno=s.labno and r.resdate!='0000-00-00'";
$filename="DST 1_ Not Reported $today";
 }
  if(isset($_GET['downloaddst2'])){
$sqlvalue="SELECT r.*,s.processdate,s.studycode,s.rctdate from results_dst2 r ,samples s where r.labno=s.labno and  (resdate between '".$fromdate2."' and '".$todate2."')";
//$title="<h3><center>DST 1 RESULTS DATA FROM $fromdate TO $todate</center></h3>";
$filename="DST 2_$fromdate to $todate";
 }
  if(isset($_GET['notreporteddst2'])){
$sqlvalue="SELECT r.*,s.processdate,s.studycode,s.rctdate from results_dst2 r ,samples s where r.labno=s.labno and r.resdate!='0000-00-00'";
$filename="DST 2_ Not Reported $today";
 }
 if(isset($_GET['downloadothers'])){
	 $test=$_GET['testothers'];

$sqlvalue= "SELECT r.*,s.processdate,s.studycode,s.rctdate from results_others r ,samples s where r.labno=s.labno and test='$test' and  (resdate between '".$fromdate2."' and '".$todate2."')";
$title="<h3><center>$test RESULTS DATA FROM $fromdate TO $todate</center></h3>";
$filename="$test$fromdate to $todate";
}

 if(isset($_GET['downloadfm'])){

$sqlvalue= "SELECT r.*,s.processdate,s.studycode,s.rctdate from results_fm r ,samples s where r.labno=s.labno and  (resdate between '".$fromdate2."' and '".$todate2."')   ";
$title="<h3><center>MICROSCOPY FM RESULTS DATA FROM $fromdate TO $todate</center></h3>";
$filename="FM_$fromdate to $todate";
}

if(isset($_GET['downloadid'])){

$sqlvalue="SELECT r.*,s.processdate,s.studycode,s.rctdate from results_identification r ,samples s where r.labno=s.labno and  (resdate between '".$fromdate2."' and '".$todate2."')";
$title="<h3><center>IDENTIFICATION RESULTS DATA FROM $fromdate TO $todate</center></h3>";
$filename="Identification_$fromdate to $todate";
}
 if(isset($_GET['downloadzn'])){

$sqlvalue= "SELECT r.*,s.processdate,s.studycode,s.rctdate from results_zn r ,samples s where r.labno=s.labno and  (resdate between '".$fromdate2."' and '".$todate2."')  ";
$title="<h3><center>MICROSCOPY ZN RESULTS DATA FROM $fromdate TO $todate</center></h3>";
$filename="ZN_$fromdate to $todate";
}
 if(isset($_GET['downloadgnx'])){

$sqlvalue="SELECT r.*,s.processdate,s.studycode,s.rctdate from results_genexpert r ,samples s where r.labno=s.labno and  (resdate between '".$fromdate2."' and '".$todate2."')  ";
$title="<h3><center>GENEXPERT  RESULTS DATA FROM $fromdate TO $todate</center></h3>";
$filename="Genexpert_$fromdate to $todate";
}

 if(isset($_GET['downloadblood'])){

$sqlvalue= "SELECT r.*,s.processdate,s.studycode,s.rctdate from results_bloodculture r ,samples s where r.labno=s.labno and  (resdate between '".$fromdate2."' and '".$todate2."')  ";
$title="<h3><center>BLOOD CULTURE RESULTS DATA FROM $fromdate TO $todate</center></h3>";
$filename="Blood_Culture_$fromdate to $todate";
$table='results_bloodculture';
}
 if(isset($_GET['downloadliquid'])){

$sqlvalue= "SELECT r.*,s.processdate,s.studycode,s.rctdate from results_liquidculture r ,samples s where r.labno=s.labno and  (resdate between '".$fromdate2."' and '".$todate2."')  ";
$title="<h3><center>LIQUID CULTURE RESULTS DATA FROM $fromdate TO $todate</center></h3>";
$filename="Liquid_Culture_$fromdate to $todate";
$table='results_liquidculture';
}
 if(isset($_GET['downloadsolid'])){

$sqlvalue="SELECT r.*,s.processdate,s.studycode,s.rctdate from results_solidculture r ,samples s where r.labno=s.labno and  (resdate between '".$fromdate2."' and '".$todate2."')";
$title="<h3><center>SOLID CULTURE RESULTS DATA FROM $fromdate TO $todate</center></h3>";
$filename="Solid_Culture_$fromdate to $todate";
$table='results_solidculture';
}
  
	    if(isset($_GET['notreportedothers'])){
			$test=$_GET['testothers'];

$sqlvalue="SELECT r.*,s.processdate,s.studycode,s.rctdate from results_others r ,samples s where r.labno=s.labno and r.result='' and test='$test' ";
$title="<h3><center>$test RESULTS DATA NOT REPORTED </center></h3>";
$filename="$test Not_Reported $today";
}
	  if(isset($_GET['notreportedfm'])){
$sqlvalue="SELECT r.*,s.processdate,s.studycode,s.rctdate from results_fm r ,samples s where r.labno=s.labno and r.result='' ";
$title="<h3><center>MICROSCOPY FM RESULTS DATA NOT REPORTED </center></h3>";
$filename="FM_Not_Reported $today";
}
 if(isset($_GET['notreportedid'])){

$sqlvalue= "SELECT r.*,s.processdate,s.studycode,s.rctdate from results_identification r ,samples s where r.labno=s.labno and r.result='' ";
$title="<h3><center>IDENTIFICATION RESULTS DATA NOT REPORTED </center></h3>";
$filename="Identification_Not_Reported $today";
}
  if(isset($_GET['notreportedzn'])){

$sqlvalue="SELECT r.*,s.processdate,s.studycode,s.rctdate from results_zn r ,samples s where r.labno=s.labno and r.result='' ";
$title="<h3><center>MICROSCOPY ZN RESULTS DATA NOT REPORTED </center></h3>";
$filename="ZN_Not_Reported $today";
}
 if(isset($_GET['notreportedgnx'])){

$sqlvalue="SELECT r.*,s.processdate,s.studycode,s.rctdate from results_genexpert r ,samples s where r.labno=s.labno and  r.result='' ";
$title="<h3><center>GENEXPERT  RESULTS DATA NOT REPORTED</center></h3>";
$filename="Genexpert_Not_Reported $today";
}

 if(isset($_GET['notreportedblood'])){

$sqlvalue="SELECT r.*,s.processdate,s.studycode,s.rctdate from results_bloodculture r ,samples s where r.labno=s.labno and  r.result_ql='' and r.result_qt='' and r.result_sqt=''";
$title="<h3><center>BLOOD CULTURE RESULTS DATA NOT REPORTED</center></h3>";
$filename="Blood_Culture_Not_Reported $today";
$table='results_bloodculture';
}
 if(isset($_GET['notreportedliquid'])){
	 
$sqlvalue="SELECT r.*,s.processdate,s.studycode,s.rctdate from results_liquidculture r ,samples s where r.labno=s.labno and r.result_bap='' and r.result_znc='' and r.result_dtp=''";
$title="<h3><center>LIQUID CULTURE RESULTS DATA NOT REPORTED</center></h3>";
$filename="Liquid_Culture_Not_Reported $today";
$table='results_liquidculture';
}
 if(isset($_GET['notreportedsolid'])){

$sqlvalue= "SELECT r.*,s.processdate,s.studycode,s.rctdate from results_solidculture r ,samples s where r.labno=s.labno and  r.result_ql='' and r.result_qt='' and r.result_sqt='' ";
$title="<h3><center>SOLID CULTURE RESULTS DATA NOT REPORTED</center></h3>";
$filename="Solid_Culture_Not_Reported $today";
$table='results_solidculture';
}
if(isset($_GET['downloadalldata'])){
$fromdate= $_GET['fromdate']; $fromdate2=date('Y-m-d', strtotime($fromdate));
$todate= $_GET['todate']; $todate2=date('Y-m-d', strtotime($todate));
$filename="alldata_$fromdate to $todate";
$now=date('d-m-Y', time());

$sqlvalue="SELECT s.*,
f.result fm_res,f.comment fm_comment,f.restech fm_tech,f.resdate fm_date,
z.result zn_res,z.comment zn_comment,z.restech zn_tech,z.resdate zn_date,
g.result gx_res,g.comment gx_comment,g.restech gx_tech,g.resdate gx_date,
b.media blood_med,b.result_ql blood_res_ql ,b.result_qt blood_res_qt,b.result_sqt blood_res_sqt,b.restech blood_tech,b.resdate blood_date,
d.media sol_med,d.result_ql sol_res_ql ,d.result_qt sol_res_qt,d.result_sqt sol_res_sqt,d.restech sol_tech,d.resdate sol_date,
l.media liq_med,l.result_bap liq_res_bap ,l.result_znc liq_res_znc,l.restech liq_tech,l.resdate liq_date,
 t.test other_test,t.result,t.comment other_test_comment,t.restech other_test_tech,t.resdate other_test_date,
 i.method id_method,i.result id_res,i.comment id_comment,i.restech id_tech,i.resdate id_date,
  i.method id_method,i.result id_res,i.comment id_comment,i.restech id_tech,i.resdate id_date,
   
   r.*,
   q.*
 FROM samples s
LEFT OUTER JOIN results_bloodculture b ON s.labno = b.labno
LEFT OUTER JOIN results_solidculture d ON s.labno = d.labno
LEFT OUTER JOIN results_liquidculture l ON s.labno = l.labno
LEFT OUTER JOIN results_dst1 r ON s.labno = r.labno
LEFT OUTER JOIN results_dst2 q ON s.labno = q.labno
LEFT OUTER JOIN results_fm f ON s.labno = f.labno
LEFT OUTER JOIN results_zn z ON s.labno = z.labno
LEFT OUTER JOIN results_identification i ON s.labno = i.labno
LEFT OUTER JOIN results_others t ON s.labno = t.labno
LEFT OUTER JOIN results_genexpert g ON s.labno = g.labno";


header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=NTRL-LIS-AllData_$fromdate-to-$todate.xls");

}
  

//header("Content-type: application/vnd.ms-excel");
//header("Content-Disposition: attachment;Filename=$filename.xls");


echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body style='font-family: Arial; font-size: 10px;'>";


	$rows = mysql_query($sqlvalue) or die("ERROR : " . mysql_error());

	echo "<table border='1' cellpadding='5' cellspacing='1' bgcolor='91B4DD'>
	<!--<tr bgcolor='#ffffff'></tr><tr bgcolor='#ffffff'></tr>--><tr bgcolor='#fffbf6' align='left'>";
	$i=0;
while ($i < mysql_num_fields($rows)){
$fld = mysql_fetch_field($rows, $i);
echo "<th>$fld->name</th>";
$i = $i + 1;
}
echo "</tr>";
	
	
	while ($row = mysql_fetch_array($rows)) {
echo "<tr align='left' bgcolor='#ffffff'>";

$i=0;
while ($i < mysql_num_fields($rows)){
$fld = mysql_fetch_field($rows, $i) or die("ERROR : " . mysql_error());
$col=$fld->name;
echo "<td>$row[$col]</td>";
$i = $i + 1;
}

echo "</tr>";
	}
	echo "</table>";
	
	
echo "</body>";
echo "</html>";



//include("../includes/dbconfig.php");

