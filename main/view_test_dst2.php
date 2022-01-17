<?php include("../includes/compatibility.php"); ?>
<?php
ini_set('max_execution_time', 30000);

$conn=mysql_connect("localhost","root","") or die("ERROR : " . mysql_error());

mysql_select_db("tblis_jcrc") or die("ERROR : " . mysql_error());



$sqlvalue= "SELECT r.*,s.processdate,s.studycode,s.rctdate from results_dst2 r ,
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

$methodvalues = mysql_query("SELECT DISTINCT method from results_dst2 order by id") or die("ERROR : " . mysql_error());

echo "METHODS INCLUDE ";
/*while ($methodvalue = mysql_fetch_array($methodvalues)){

    $method=$methodvalue['method'];
    echo "$method, ";
}*/

echo "<br><br>";

//Can we rename all results labnos and also pay attention to their names when joining the views

$sqlvalue= "SELECT labno, count(*) dst2_methods";

while ($methodvalue = mysql_fetch_array($methodvalues)){
    $method=$methodvalue['method'];

    

    $dst1 = mysql_query("SELECT * from results_dst2") or die("ERROR : " . mysql_error());

    $i=0;
    
    while ($i < mysql_num_fields($dst1)){
    $fld = mysql_fetch_field($dst1, $i);
    
    //echo "$fld->name   ";

    $columnname = $fld->name;

   // if(($columnname!=entrant) or ($columnname!=entrytime)){
    //if($columnname!='entrytime'){

    $unwantedcolumns= array("id","labno","method","entrant","entrytime","reviewer","reviewdate","status","modified_time");

    if (in_array($columnname, $unwantedcolumns)){

    }
    else{
        $sqlvalue = $sqlvalue . "
    ,max( if( method = '$method', $columnname, '' ) ) AS dst2_".$method."_".$columnname;
    }

    $i = $i + 1;
    }

}

$sqlvalue = $sqlvalue . "
 FROM 
    results_dst2 
GROUP BY 
    labno";

echo $sqlvalue;

$create_view_sql = "CREATE VIEW tblis_jcrc.results_dst2_view AS $sqlvalue";

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