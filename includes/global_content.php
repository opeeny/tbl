<?php
date_default_timezone_set("Africa/Nairobi");
$then = strtotime('2022-12-31 00:00:00');
$now = time();
$remainingdays = floor( ($then-$now) / (60*60*24) );

if($remainingdays<60 && $remainingdays>0){
echo "<marquee behavior='alternate' scrollamount ='2' scrolldelay=''><font color='#d53939'>Today is ".date('d-M-Y').". This instance of TBLIS will expire in $remainingdays days.</font></marquee>";
}
else if($remainingdays<=0){
$daysback=0-$remainingdays;
echo "<marquee behavior='alternate' scrollamount ='2' scrolldelay=''><font color='#d53939'>Today is ".date('d-M-Y').". This instance of TBLIS expired $daysback days back.</font></marquee>";
exit();
}
?>

<?php $laboratoryname = "TBL Laboratory"; ?>

<?php $title = "TBL | ".$laboratoryname; ?>