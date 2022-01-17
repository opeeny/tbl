<?php include("../includes/compatibility.php"); ?>
<?php
ini_set('max_execution_time', 30000);

$conn=mysql_connect("localhost","root","") or die("ERROR : " . mysql_error());

mysql_select_db("tblis_jcrc") or die("ERROR : " . mysql_error());



$sqlvalue= "SELECT r.*,s.processdate,s.studycode,s.rctdate from results_bloodculture r ,
samples s where r.labno=s.labno";


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

?>


<br><br>
ONE TABLE WILL BE HERE<br>

<?php

$mediavalues = mysql_query("SELECT DISTINCT media from results_bloodculture order by id") or die("ERROR : " . mysql_error());

echo "MEDIAS INCLUDE ";
/*while ($mediavalue = mysql_fetch_array($mediavalues)){

    $media=$mediavalue['media'];
    echo "$media, ";
}*/

echo "<br><br>";

$sqlvalue= "SELECT labno, count(*) CB_media";

while ($mediavalue = mysql_fetch_array($mediavalues)){
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

$sqlvalue = $sqlvalue . "
 FROM 
    results_bloodculture 
GROUP BY 
    labno";

echo $sqlvalue;

$create_view_sql = "CREATE VIEW tblis_jcrc.results_bloodculture_view AS $sqlvalue";

echo "<br><br>$create_view_sql";


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

?>


<br><br>
ANOTHER ONE TABLE WILL BE HERE<br>

<?php

$mediavalues = mysql_query("SELECT DISTINCT media from results_bloodculture") or die("ERROR : " . mysql_error());

echo "MEDIAS INCLUDE ";
while ($mediavalue = mysql_fetch_array($mediavalues)){

    $media=$mediavalue['media'];
    echo "$media, ";
}

$sqlvalue= "SELECT labno, count(*),
SUM(CASE WHEN (media = 'MGIT') THEN result_dtp  ELSE 'NA' END) AS MGIT_dtp,
SUM(CASE WHEN (media = 'MGIT') THEN result_znc  ELSE 'NA' END) AS MGIT_znc,
SUM(CASE WHEN (media = '12B') THEN result_dtp  ELSE 'NA' END) AS 12B_dtp,
SUM(CASE WHEN (media = '12B') THEN result_znc  ELSE 'NA' END) AS 12B_znc

FROM 
    results_liquidculture 
GROUP BY 
    labno";


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

?>





<?php
/*
SELECT 
    labno, 
    sum( if( media = 'MGIT', result_znc, 555 ) ) AS MGIT,  
    sum( if( itemname = '12B', result_znc, 555 ) ) AS 12B 
FROM 
    results_liquidculture 
GROUP BY 
    labno;


 SELECT 
    labno, 
    max( if( media = 'MGIT', result_znc, 0 ) ) AS MGIT_znc,  
    max( if( media = '12B', result_znc, 0 ) ) AS 12B_znc 
FROM 
    results_liquidculture 
GROUP BY 
    labno;



  SELECT 
    labno,
    max( if( media = 'MGIT', result_dtp, 'N/A' ) ) AS MGIT_dtp,  
    max( if( media = '12B', result_dtp, 'N/A' ) ) AS 12B_dtp, 
    max( if( media = 'MGIT', result_znc, 'N/A' ) ) AS MGIT_znc,  
    max( if( media = '12B', result_znc, 'N/A' ) ) AS 12B_znc 
FROM 
    results_liquidculture 
GROUP BY 
    labno;


//For each media
//For each column
    SELECT 
    labno,

    max( if( media = 'MGIT', result_dtp, 'N/A' ) ) AS MGIT_dtp,  
    max( if( media = 'MGIT', result_znc, 'N/A' ) ) AS MGIT_znc,
    
    max( if( media = '12B', result_dtp, 'N/A' ) ) AS 12B_dtp,   
    max( if( media = '12B', result_znc, 'N/A' ) ) AS 12B_znc 
FROM 
    results_liquidculture 
GROUP BY 
    labno

*/

?>