<?php
$dbconnection = mysqli_connect("localhost","root","","tblis_jcrc");

if (mysqli_connect_errno()){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>