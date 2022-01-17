<?php
include("../includes/dbconfig.php");
$did  = $_GET['did'];
//remove a section from the database
mysqli_query($dbconnection,"delete from sections where section_id='$did'")or die(mysql_error($dbconnection));
header("location:manage_sections.php");
?>