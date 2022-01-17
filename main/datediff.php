<!DOCTYPE html>
<html>
<body>

<?php
$date1=date_create("2013-03-15 00:00:00");
$date2=date_create("2013-12-12");
$diff=date_diff($date1,$date2);
$diff=$diff->format("%R%a");
echo $diff;
if($diff==272){
	echo "yes"; 
	
}
?>

</body>
</html>