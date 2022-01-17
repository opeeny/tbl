<?php include("../includes/compatibility.php"); ?>
<?php
ini_set('max_execution_time', 300000000);

include("../includes/dbconfig.php");

//============================== DROPPING PREVIOUSLY CREATED VIEWS ======================================
mysqli_query($dbconnection,"DROP VIEW IF EXISTS results_liquidculture_view") 
or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"DROP VIEW IF EXISTS results_solidculture_view") 
or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"DROP VIEW IF EXISTS results_bloodculture_view") 
or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"DROP VIEW IF EXISTS results_identification_view") 
or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"DROP VIEW IF EXISTS results_dst1_view") 
or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"DROP VIEW IF EXISTS results_dst2_view") 
or die("ERROR : " . mysqli_error($dbconnection));
mysqli_query($dbconnection,"DROP VIEW IF EXISTS results_others_view") 
or die("ERROR : " . mysqli_error($dbconnection));

?>

<?php
//=============================== LIQUID CULTURE ========================================================

$mediavalues = mysqli_query($dbconnection,"SELECT DISTINCT media from results_liquidculture 
    order by id") or die("ERROR : " . mysqli_error($dbconnection));

$sqlvalue= "SELECT labno CL_labno, count(*) CL_media ";


while ($mediavalue = mysqli_fetch_array($mediavalues,MYSQLI_ASSOC)){
    $media=$mediavalue['media'];

$sqlvalue = $sqlvalue . "
,max( if( media = '$media', innoc_date, '' ) ) AS CL_".$media."_innocdate

,max( if( media = '$media', result_dtp, '' ) ) AS CL_".$media."_dtp
,max( if( media = '$media', dtp_date, '' ) ) AS CL_".$media."_dtpdate

,max( if( media = '$media', result_znc, '') ) AS CL_".$media."_znc
,max( if( media = '$media', znc_date, '') ) AS CL_".$media."_zncdate

,max( if( media = '$media', result_bap, '') ) AS CL_".$media."_bap
,max( if( media = '$media', bap_date, '') ) AS CL_".$media."_bapdate
";
}
if($fromdate2!='' or $todate2!=''){
$sqlvalue = $sqlvalue . " FROM results_liquidculture where resdate between '".$fromdate2."' and '".$todate2."' GROUP BY labno";
}
if($fromdate2=='' or $todate2==''){
$sqlvalue = $sqlvalue . " FROM results_liquidculture  GROUP BY labno";

}
//echo $sqlvalue;

$create_view_sql = "CREATE OR REPLACE VIEW results_liquidculture_view AS $sqlvalue";
mysqli_query($dbconnection, $create_view_sql) or die("ERROR: " . mysqli_error($dbconnection));

?>

<?php
//=============================== SOLID CULTURE ========================================================

$mediavalues = mysqli_query($dbconnection,"SELECT DISTINCT media from results_solidculture 
    order by id") or die("ERROR : " . mysqli_error($dbconnection));

$sqlvalue= "SELECT labno CS_labno, count(*) CS_media";

while ($mediavalue = mysqli_fetch_array($mediavalues,MYSQLI_ASSOC)){
    $media=$mediavalue['media'];

$sqlvalue = $sqlvalue . "
,max( if( media = '$media', result_ql, '' ) ) AS CS_".$media."_ql
,max( if( media = '$media', result_sqt, '') ) AS CS_".$media."_sqt
,max( if( media = '$media', result_qt, '') ) AS CS_".$media."_qt
,max( if( media = '$media', resdate, '') ) AS CS_".$media."_date
,max( if( media = '$media', restech, '') ) AS CS_".$media."_tech
,max( if( media = '$media', contdate, '') ) AS CS_".$media."_contdate
";

}
if($fromdate2!='' or $todate2!=''){
$sqlvalue = $sqlvalue . " FROM results_solidculture where resdate between '".$fromdate2."' and '".$todate2."' GROUP BY labno";
}
if($fromdate2=='' or $todate2==''){
$sqlvalue = $sqlvalue . " FROM results_solidculture GROUP BY labno";
}
//echo $sqlvalue;

$create_view_sql = "CREATE OR REPLACE VIEW results_solidculture_view AS $sqlvalue";
mysqli_query($dbconnection,$create_view_sql) or die("ERROR : " . mysqli_error($dbconnection));

?>

<?php
//=============================== BLOOD CULTURE ========================================================

$mediavalues = mysqli_query($dbconnection,"SELECT DISTINCT media from results_bloodculture 
    order by id") or die("ERROR : " . mysqli_error($dbconnection));

$sqlvalue= "SELECT labno CB_labno, count(*) CB_media";

while ($mediavalue = mysqli_fetch_array($mediavalues,MYSQLI_ASSOC)){
    $media=$mediavalue['media'];

$sqlvalue = $sqlvalue . "
,max( if( media = '$media', result_ql, '' ) ) AS CB_".$media."_ql
,max( if( media = '$media', result_sqt, '') ) AS CB_".$media."_sqt
,max( if( media = '$media', result_qt, '') ) AS CB_".$media."_qt
,max( if( media = '$media', resdate, '') ) AS CB_".$media."_date
,max( if( media = '$media', restech, '') ) AS CB_".$media."_tech
,max( if( media = '$media', contdate, '') ) AS CB_".$media."_contdate
";

}
if($fromdate2!='' or $todate2!=''){
$sqlvalue = $sqlvalue . " FROM results_bloodculture where resdate between '".$fromdate2."' and '".$todate2."' GROUP BY labno";
}
if($fromdate2=='' or $todate2==''){
$sqlvalue = $sqlvalue . " FROM results_bloodculture  GROUP BY labno";
}
//echo $sqlvalue;

$create_view_sql = "CREATE  OR REPLACE VIEW results_bloodculture_view AS $sqlvalue";
mysqli_query($dbconnection,$create_view_sql) or die("ERROR : " . mysqli_error($dbconnection));

?>

<?php
//=============================== IDENTIFICATION ========================================================

$sqlvalue= "SELECT labno ID_labno, count(*) ID_count";

$testvalues = mysqli_query($dbconnection,"SELECT DISTINCT test from results_identification 
    order by id") or die("ERROR : " . mysqli_error($dbconnection));

while ($testvalue = mysqli_fetch_array($testvalues,MYSQLI_ASSOC)){
    $test=$testvalue['test'];

$mediavalues = mysqli_query($dbconnection,"SELECT DISTINCT media from results_identification WHERE test='$test' 
    order by id") or die("ERROR : " . mysqli_error($dbconnection));

while ($mediavalue = mysqli_fetch_array($mediavalues,MYSQLI_ASSOC)){
    $media=$mediavalue['media'];

$sqlvalue = $sqlvalue . "
,max( if( media = '$media', method, '' ) ) AS ID_".$test."_".$media."_method
,max( if( media = '$media', result, '') ) AS ID_".$test."_".$media."_result
,max( if( media = '$media', comment, '') ) AS ID_".$test."_".$media."_comment
,max( if( media = '$media', resdate, '') ) AS ID_".$test."_".$media."_date
,max( if( media = '$media', restech, '') ) AS ID_".$test."_".$media."_tech
";

}
}

if($fromdate2!='' or $todate2!=''){
$sqlvalue = $sqlvalue . " FROM results_identification where resdate between '".$fromdate2."' and '".$todate2."' GROUP BY labno";
}
if($fromdate2=='' or $todate2==''){
$sqlvalue = $sqlvalue . " FROM results_identification GROUP BY labno";
}
//echo $sqlvalue;

$create_view_sql = "CREATE OR REPLACE VIEW results_identification_view AS $sqlvalue";
mysqli_query($dbconnection,$create_view_sql) or die("ERROR : " . mysqli_error($dbconnection));
?>

<?php
//=============================== DST1 ========================================================

$methodvalues = mysqli_query($dbconnection,"SELECT DISTINCT method from results_dst1 
    order by id") or die("ERROR : " . mysqli_error($dbconnection));

	
$sqlvalue= "SELECT labno dst1_labno, count(*) dst1_count";

while ($methodvalue = mysqli_fetch_array($methodvalues,MYSQLI_ASSOC)){
    $method=$methodvalue['method'];

    $dst1 = mysqli_query($dbconnection,"SELECT * from results_dst1") 
    or die("ERROR : " . mysqli_error($dbconnection));

    
    $i=0;  
    while ($i < mysqli_num_fields($dst1)){
    $fld = mysqli_fetch_field($dst1);
        
        $columnname = $fld->name;
        $unwantedcolumns= array("id","labno","method","entrant","entrytime","reviewer","reviewdate","status","modified_time","rejreason");
      if (in_array($columnname, $unwantedcolumns)){}
        else{
        $sqlvalue = $sqlvalue . "
        ,max( if( method = '$method', $columnname, '' ) ) AS dst1_".$method."_".$columnname;
        }

    $i = $i + 1;
    }

}
if($fromdate2!='' or $todate2!=''){
$sqlvalue = $sqlvalue . " FROM results_dst1 where resdate between '".$fromdate2."' and '".$todate2."' GROUP BY labno";
}
if($fromdate2=='' or $todate2==''){
$sqlvalue = $sqlvalue . " FROM results_dst1  GROUP BY labno";
}
//echo $sqlvalue;

$create_view_sql = "CREATE OR REPLACE VIEW results_dst1_view AS $sqlvalue";
mysqli_query($dbconnection,$create_view_sql) or die("ERROR : " . mysqli_error($dbconnection));

?>

<?php
//=============================== DST2 ========================================================

$methodvalues = mysqli_query($dbconnection,"SELECT DISTINCT method from results_dst2 
    order by id") or die("ERROR : " . mysqli_error($dbconnection));

$sqlvalue= "SELECT labno dst2_labno, count(*) dst2_count";

while ($methodvalue = mysqli_fetch_array($methodvalues,MYSQLI_ASSOC)){
    $method=$methodvalue['method'];

    $dst2 = mysqli_query($dbconnection,"SELECT * from results_dst2") 
    or die("ERROR : " . mysqli_error($dbconnection));

    $i=0;
    while ($i < mysqli_num_fields($dst2)){
    $fld = mysqli_fetch_field($dst2);
    $columnname = $fld->name;
    
    $unwantedcolumns= array("id","labno","method","entrant","entrytime","reviewer","reviewdate","status","modified_time","rejreason");

    if (in_array($columnname, $unwantedcolumns)){}
    else{
        $sqlvalue = $sqlvalue . "
    ,max( if( method = '$method', $columnname, '' ) ) AS dst2_".$method."_".$columnname;
    }

    $i = $i + 1;
    }

}

if($fromdate2!='' or $todate2!=''){
$sqlvalue = $sqlvalue . " FROM results_dst2 where resdate between '".$fromdate2."' and '".$todate2."' GROUP BY labno";
}
if($fromdate2=='' or $todate2==''){
$sqlvalue = $sqlvalue . " FROM results_dst2  GROUP BY labno";
}
//$sqlvalue = $sqlvalue . " FROM results_dst2 GROUP BY labno";
//echo $sqlvalue;

$create_view_sql = "CREATE OR REPLACE VIEW results_dst2_view AS $sqlvalue";
mysqli_query($dbconnection,$create_view_sql) or die("ERROR : " . mysqli_error($dbconnection));

?>

<?php
//=============================== OTHER TESTS ========================================================

$sqlvalue= "SELECT labno othertest_labno, count(*) othertest_count";

$testvalues = mysqli_query($dbconnection,"SELECT DISTINCT test from results_others 
    order by id") or die("ERROR : " . mysqli_error($dbconnection));

while ($testvalue = mysqli_fetch_array($testvalues,MYSQLI_ASSOC)){
    $test=$testvalue['test'];

	$sqlvalue = $sqlvalue . "
,max( if( test = '$test', result, '') ) AS `".$test."_result`
,max( if( test = '$test', comment, '') ) AS `".$test."_comment`
,max( if( test = '$test', resdate, '') ) AS `".$test."_date`
,max( if( test = '$test', restech, '') ) AS `".$test."_tech`
";


}

if($fromdate2!='' or $todate2!=''){
$sqlvalue = $sqlvalue . " FROM results_others where resdate between '".$fromdate2."' and '".$todate2."' GROUP BY labno";
}
if($fromdate2=='' or $todate2==''){
$sqlvalue = $sqlvalue . " FROM results_others GROUP BY labno";
}
//echo $sqlvalue;

$create_view_sql = "CREATE OR REPLACE VIEW results_others_view AS $sqlvalue";
mysqli_query($dbconnection,$create_view_sql) or die("ERROR : " . mysqli_error($dbconnection));
?>