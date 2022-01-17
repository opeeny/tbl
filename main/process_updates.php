<?php include("../includes/global_content.php"); ?>
<?php include("../includes/session_start.php"); ?>
<?php
ini_set('max_execution_time', 30000);

/*if(isset($_GET['downloadmicroscopy'])){
$fromdate= $_GET['fromdate']; $fromdate2=date('Y-m-d', strtotime($fromdate));
$todate= $_GET['todate']; $todate2=date('Y-m-d', strtotime($todate));
$sqlvalue="SELECT s.labno LABNO,s.studycode STUDYCODE,s.rctdate DATE_RECEIVED,r.result FM_RESULT,r.resdate FM_DATE FROM samples s,res_smear_fm r WHERE (r.resdate BETWEEN '$fromdate2' AND '$todate2') AND s.labno=r.labno ORDER BY s.labno";*/

include("../includes/dbconfig.php");
include("../includes/compatibility.php");
if(isset($_GET['downloadmicroscopy'])){
$fromdate= $_GET['fromdate']; $fromdate2=date('Y-m-d', strtotime($fromdate));
$todate= $_GET['todate']; $todate2=date('Y-m-d', strtotime($todate));
$sqlvalue="SELECT labno,result,comment from results_fm where resdate BETWEEN '$fromdate2' AND '$todate2'";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=Microscopy_$fromdate-to-$todate.xls");
}

if(isset($_GET['downloadmicroscopynotreported'])){
$now=date('d-m-Y', time());
/*$fromdate= $_GET['fromdate']; $fromdate2=date('Y-m-d', strtotime($fromdate));
$todate= $_GET['todate']; $todate2=date('Y-m-d', strtotime($todate));*/
$sqlvalue="SELECT s.labno LABNO,s.studycode STUDYCODE,s.rctdate DATE_RECEIVED,r.result FM_ZN_RESULT,r.resdate FM_ZN_DATE,CURDATE() TODAY FROM samples s,res_smear_fm r WHERE r.result='' AND s.labno=r.labno UNION SELECT s.labno LABNO,s.studycode STUDYCODE,s.rctdate DATE_RECEIVED,z.result FM_ZN_RESULT,z.resdate FM_ZN_DATE,CURDATE() TODAY FROM samples s,res_smear_zn z WHERE z.result='' AND s.labno=z.labno ORDER BY LABNO";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=Microscopy_Not_Reported_$now.xls");
}

if(isset($_GET['downloadgenexpert'])){
$fromdate= $_GET['fromdate']; $fromdate2=date('Y-m-d', strtotime($fromdate));
$todate= $_GET['todate']; $todate2=date('Y-m-d', strtotime($todate));
$sqlvalue="
SELECT s.labno LABNO,s.studycode STUDYCODE,s.rctdate DATE_RECEIVED,s.hcentre HCENTRE,p.age AGE,f.resdate FM_DATE,g.result GXP_RESULT,g.resdate GXP_DATE FROM samples s
LEFT OUTER JOIN patients p ON s.ntrlpno=p.ntrlpno  
LEFT OUTER JOIN res_genexpert g ON s.labno=g.labno 
LEFT OUTER JOIN res_smear_fm f ON s.labno=f.labno 
WHERE g.resdate BETWEEN '$fromdate2' AND '$todate2' 
ORDER BY s.labno";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=Genexpert_$fromdate-to-$todate.xls");
}

if(isset($_GET['downloadgenexpertnotreported'])){
$now=date('d-m-Y', time());
/*$fromdate= $_GET['fromdate']; $fromdate2=date('Y-m-d', strtotime($fromdate));
$todate= $_GET['todate']; $todate2=date('Y-m-d', strtotime($todate));*/
//select s.studycode,s.rctdate,g.* from samples s,res_genexpert g where g.result='' and s.studycode!='PS' and s.studycode!='PSP' and s.labno=g.labno
//$sqlvalue="SELECT s.labno,s.studycode,s.hcentre,s.rctdate,s.requestreason,r.result Genexpert from samples s LEFT OUTER JOIN res_genexpert r ON s.labno=r.labno WHERE (s.requestreason like '%enexpert%' OR s.hcentre='Lugoba HC IV') AND r.result='' ORDER BY s.labno";
$sqlvalue="SELECT s.labno,s.studycode,s.hcentre,s.rctdate,s.requestreason,g.result Genexpert from samples s LEFT OUTER JOIN res_genexpert g ON s.labno=g.labno WHERE (g.result='' and s.studycode!='PS' and s.studycode!='PSP') OR ((s.requestreason like '%enexpert%' OR s.hcentre='Lugoba HC IV') AND (g.result='' OR g.result IS NULL)) ORDER BY s.labno";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=Genexpert_Not_Reported_$now.xls");
}

if(isset($_GET['downloadljculture'])){
$fromdate= $_GET['fromdate']; $fromdate=date('Y-m-d', strtotime($fromdate));
$todate= $_GET['todate']; $todate=date('Y-m-d', strtotime($todate));
$sqlvalue="SELECT s.labno LABNO,s.studycode STUDYCODE,s.rctdate DATE_RECEIVED,r.result LJ_RESULT,r.resdate LJ_DATE,r.contdate CONT_DATE,r.comment LJ_COMMENT FROM samples s,res_culture_lj r WHERE (r.resdate BETWEEN '$fromdate' AND '$todate') AND s.labno=r.labno";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=LJculture_$fromdate-to-$todate.xls");
}

if(isset($_GET['downloadposljculture'])){
$fromdate= $_GET['fromdate']; $fromdate=date('Y-m-d', strtotime($fromdate));
$todate= $_GET['todate']; $todate=date('Y-m-d', strtotime($todate));
$sqlvalue="SELECT s.labno LABNO,s.studycode STUDYCODE,s.rctdate DATE_RECEIVED,r.result LJ_RESULT,i.result IDENT,r.resdate LJ_DATE,r.contdate CONT_DATE,r.comment LJ_COMMENT FROM samples s,res_culture_lj r,res_ident_antigentest i WHERE (r.resdate BETWEEN '$fromdate' AND '$todate') AND s.labno=r.labno AND r.result like 'POS%' AND s.labno=i.labno";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=POSITIVE-LJculture_$fromdate-to-$todate.xls");
}

if(isset($_GET['downloadljculturenotreported'])){
$now=date('d-m-Y', time());
/*$fromdate= $_GET['fromdate']; $fromdate=date('Y-m-d', strtotime($fromdate));
$todate= $_GET['todate']; $todate=date('Y-m-d', strtotime($todate));*/
$sqlvalue="SELECT s.labno LABNO,s.studycode STUDYCODE,s.rctdate DATE_RECEIVED,s.patcategory CATEGORY,s.requestreason REASON,r.result LJ_RESULT,r.resdate LJ_DATE,r.comment LJ_COMMENT,DATEDIFF(CURDATE(),s.rctdate) TAT FROM samples s,res_culture_lj r WHERE (r.result='') AND (DATEDIFF(CURDATE(),s.rctdate)>=63) AND s.labno=r.labno ORDER BY s.labno";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=LJculture_Not_Reported_$now.xls");
}

if(isset($_GET['downloadmgitculture'])){
$fromdate= $_GET['fromdate']; $fromdate=date('Y-m-d', strtotime($fromdate));
$todate= $_GET['todate']; $todate=date('Y-m-d', strtotime($todate));
$sqlvalue="SELECT s.labno LABNO,s.studycode STUDYCODE,s.rctdate DATE_RECEIVED,r.result MGIT_RESULT,r.resdate MGIT_DATE,r.comment MGIT_COMMENT FROM samples s,res_culture_mgit r WHERE (r.resdate BETWEEN '$fromdate' AND '$todate') AND s.labno=r.labno";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=MGITculture_$fromdate-to-$todate.xls");
}

if(isset($_GET['downloadmgitculturenotreported'])){
$now=date('d-m-Y', time());
/*$fromdate= $_GET['fromdate']; $fromdate=date('Y-m-d', strtotime($fromdate));
$todate= $_GET['todate']; $todate=date('Y-m-d', strtotime($todate));*/
//$sqlvalue="SELECT s.labno LABNO,s.studycode STUDYCODE,s.rctdate DATE_RECEIVED,s.patcategory,r.result MGIT_RESULT,r.resdate MGIT_DATE,CURDATE() TODAY FROM samples s,res_culture_mgit r WHERE (r.result='' OR r.result='Contaminated') AND s.labno=r.labno";

$sqlvalue="SELECT s.labno LABNO,s.studycode STUDYCODE,s.rctdate DATE_RECEIVED,s.patcategory,r.result MGIT_RESULT,r.resdate MGIT_DATE,CURDATE() TODAY FROM samples s,res_culture_mgit r WHERE r.result='' AND s.labno=r.labno";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=MGITculture_Not_Reported_$now.xls");
}

if(isset($_GET['downloaddstlpa'])){
$fromdate= $_GET['fromdate']; $fromdate2=date('Y-m-d', strtotime($fromdate));
$todate= $_GET['todate']; $todate2=date('Y-m-d', strtotime($todate));
$sqlvalue="
SELECT s.labno LABNO,s.studycode STUDYCODE,s.rctdate DATE_RECEIVED,s.hcentre HCENTRE,l1.resdate LPA1_DATE,l1.rifampicin,l1.isoniazid,l2.resdate LPA2_DATE FROM samples s 
LEFT OUTER JOIN res_lpa1 l1 ON s.labno=l1.labno 
LEFT OUTER JOIN res_lpa2 l2 ON s.labno=l2.labno 
WHERE l1.resdate BETWEEN '$fromdate2' AND '$todate2' 
OR l2.resdate BETWEEN '$fromdate2' AND '$todate2' 
ORDER BY s.labno";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=LPA_$fromdate-to-$todate.xls");
}

if(isset($_GET['downloaddstlj'])){
$fromdate= $_GET['fromdate']; $fromdate2=date('Y-m-d', strtotime($fromdate));
$todate= $_GET['todate']; $todate2=date('Y-m-d', strtotime($todate));
$sqlvalue="
SELECT s.labno LABNO,s.studycode STUDYCODE,s.rctdate DATE_RECEIVED,lj.resdate LJC_DATE,l1.resdate LJDST1_DATE,l2.resdate LJDST2_DATE FROM samples s 
LEFT OUTER JOIN res_ljdst1 l1 ON s.labno=l1.labno 
LEFT OUTER JOIN res_ljdst2 l2 ON s.labno=l2.labno 
LEFT OUTER JOIN res_culture_lj lj ON s.labno=lj.labno 
WHERE l1.resdate BETWEEN '$fromdate2' AND '$todate2' 
OR l2.resdate BETWEEN '$fromdate2' AND '$todate2' 
ORDER BY s.labno";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=LJ_DST_$fromdate-to-$todate.xls");
}

//LJDST NOT REPORTED
if(isset($_GET['downloaddstljnotreported'])){
$now=date('d-m-Y', time());
/*$fromdate= $_GET['fromdate']; $fromdate=date('Y-m-d', strtotime($fromdate));
$todate= $_GET['todate']; $todate=date('Y-m-d', strtotime($todate));*/
$sqlvalue="
SELECT s.labno LABNO, s.studycode STUDY, s.rctdate RECEIVED, s.patcategory, l.result LJC, i.result ID,l.resdate LJC_DATE, g.result GXP, p.rifampicin LPA_Rif, ld1.resdate LJDST1_Date, ld2.resdate LJDST2_Date
FROM samples s 
LEFT OUTER JOIN res_culture_lj l ON s.labno = l.labno 
LEFT OUTER JOIN res_ident_antigentest i ON s.labno = i.labno 
LEFT OUTER JOIN res_genexpert g ON s.labno = g.labno 
LEFT OUTER JOIN res_lpa1 p ON s.labno = p.labno 
LEFT OUTER JOIN res_ljdst1 ld1 ON s.labno = ld1.labno 
LEFT OUTER JOIN res_ljdst2 ld2 ON s.labno = ld2.labno 
WHERE (l.result LIKE 'POS%' AND i.result NOT LIKE '%other than%') 
AND ((g.result LIKE '%Resistant%') OR (p.rifampicin = 'Resistant') OR (s.studycode = 'PS')) AND ((ld1.resdate = '0000-00-00') OR (ld1.resdate IS NULL))";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=LJDST_Not_Reported_$now.xls");
}


if(isset($_GET['downloaddstmgit'])){
$fromdate= $_GET['fromdate']; $fromdate2=date('Y-m-d', strtotime($fromdate));
$todate= $_GET['todate']; $todate2=date('Y-m-d', strtotime($todate));
$sqlvalue="
SELECT s.labno LABNO,s.studycode STUDYCODE,s.rctdate DATE_RECEIVED,s.hcentre HCENTRE,m1.resdate MGITDST1_DATE,m2.resdate MGITDST2_DATE FROM samples s 
LEFT OUTER JOIN res_mgitdst1 m1 ON s.labno=m1.labno 
LEFT OUTER JOIN res_mgitdst2 m2 ON s.labno=m2.labno 
WHERE m1.resdate BETWEEN '$fromdate2' AND '$todate2' 
OR m2.resdate BETWEEN '$fromdate2' AND '$todate2' 
ORDER BY s.labno";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=MGIT_DST_$fromdate-to-$todate.xls");
}

if(isset($_GET['downloadmicroscopyVmgitculture'])){
$fromdate= $_GET['fromdate']; $fromdate2=date('Y-m-d', strtotime($fromdate));
$todate= $_GET['todate']; $todate2=date('Y-m-d', strtotime($todate));

/*$sqlvalue="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE FROM samples s,res_smear_fm f, res_culture_lj l,res_genexpert g WHERE s.labno=f.labno AND s.labno=l.labno AND s.labno=g.labno AND (l.resdate BETWEEN '$fromdate2' AND '$todate2') ORDER BY s.labno";*/

$sqlvalue="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,m.result MGIT,m.resdate MGIT_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_mgit m on s.labno=m.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE m.resdate BETWEEN '$fromdate2' AND '$todate2' 
ORDER BY s.labno";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=SmearVsMGITculture_$fromdate-to-$todate.xls");
}

if(isset($_GET['downloadmicroscopyVljculture'])){
$fromdate= $_GET['fromdate']; $fromdate2=date('Y-m-d', strtotime($fromdate));
$todate= $_GET['todate']; $todate2=date('Y-m-d', strtotime($todate));

/*$sqlvalue="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE FROM samples s,res_smear_fm f, res_culture_lj l,res_genexpert g WHERE s.labno=f.labno AND s.labno=l.labno AND s.labno=g.labno AND (l.resdate BETWEEN '$fromdate2' AND '$todate2') ORDER BY s.labno";*/

$sqlvalue="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM_ZN,f.resdate FM_ZN_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM res_smear_fm f 
LEFT OUTER join samples s on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' ORDER BY s.labno";

//Culture Analysis
$sql1="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%1+%' 
AND f.result LIKE '%1+%' 
ORDER BY s.labno";

$sql2="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%1+%' 
AND f.result LIKE '%2+%' 
ORDER BY s.labno";

$sql3="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%1+%' 
AND f.result LIKE '%3+%' 
ORDER BY s.labno";

$sql4="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%1+%' 
AND f.result LIKE '%NEG%' 
ORDER BY s.labno";

$sql5="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%1+%' 
AND f.result LIKE '%Length%' 
ORDER BY s.labno";

$sql6="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%2+%' 
AND f.result LIKE '%1+%' 
ORDER BY s.labno";

$sql7="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%2+%' 
AND f.result LIKE '%2+%' 
ORDER BY s.labno";

$sql8="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%2+%' 
AND f.result LIKE '%3+%' 
ORDER BY s.labno";

$sql9="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%2+%' 
AND f.result LIKE '%NEG%' 
ORDER BY s.labno";

$sql10="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%2+%' 
AND f.result LIKE '%Length%' 
ORDER BY s.labno";

$sql11="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%3+%' 
AND f.result LIKE '%1+%' 
ORDER BY s.labno";

$sql12="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%3+%' 
AND f.result LIKE '%2+%' 
ORDER BY s.labno";

$sql13="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%3+%' 
AND f.result LIKE '%3+%' 
ORDER BY s.labno";

$sql14="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%3+%' 
AND f.result LIKE '%NEG%' 
ORDER BY s.labno";

$sql15="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%3+%' 
AND f.result LIKE '%Length%' 
ORDER BY s.labno";

$sql16="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%4+%' 
AND f.result LIKE '%1+%' 
ORDER BY s.labno";

$sql17="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%4+%' 
AND f.result LIKE '%2+%' 
ORDER BY s.labno";

$sql18="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%4+%' 
AND f.result LIKE '%3+%' 
ORDER BY s.labno";

$sql19="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%4+%' 
AND f.result LIKE '%NEG%' 
ORDER BY s.labno";

$sql20="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%4+%' 
AND f.result LIKE '%Length%' 
ORDER BY s.labno";

$sql21="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%Colon%' AND l.result NOT LIKE '%+%' 
AND f.result LIKE '%1+%' 
ORDER BY s.labno";

$sql22="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%Colon%' AND l.result NOT LIKE '%+%' 
AND f.result LIKE '%2+%' 
ORDER BY s.labno";

$sql23="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%Colon%' AND l.result NOT LIKE '%+%' 
AND f.result LIKE '%3+%' 
ORDER BY s.labno";

$sql24="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%Colon%' AND l.result NOT LIKE '%+%' 
AND f.result LIKE '%NEG%' 
ORDER BY s.labno";

$sql25="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%Colon%' AND l.result NOT LIKE '%+%' 
AND f.result LIKE '%Length%' 
ORDER BY s.labno";

$sql26="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%CONT%' 
AND f.result LIKE '%1+%' 
ORDER BY s.labno";

$sql27="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%CONT%' 
AND f.result LIKE '%2+%' 
ORDER BY s.labno";

$sql28="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%CONT%' 
AND f.result LIKE '%3+%' 
ORDER BY s.labno";

$sql29="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%CONT%' 
AND f.result LIKE '%NEG%' 
ORDER BY s.labno";

$sql30="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%CONT%' 
AND f.result LIKE '%Length%' 
ORDER BY s.labno";

$sql31="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%NEG%' 
AND f.result LIKE '%1+%' 
ORDER BY s.labno";

$sql32="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%NEG%' 
AND f.result LIKE '%2+%' 
ORDER BY s.labno";

$sql33="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%NEG%' 
AND f.result LIKE '%3+%' 
ORDER BY s.labno";

$sql34="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%NEG%' 
AND f.result LIKE '%NEG%' 
ORDER BY s.labno";

$sql35="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%NEG%' 
AND f.result LIKE '%Length%' 
ORDER BY s.labno";

/*
$sql101="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%1+%' 
AND f.result='' OR f.result=NULL 
ORDER BY s.labno";

$sql102="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%2+%' 
AND f.result='' OR f.result=NULL 
ORDER BY s.labno";

$sql103="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%3+%' 
AND f.result='' OR f.result=NULL 
ORDER BY s.labno";

$sql104="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%4+%' 
AND f.result='' OR f.result=NULL 
ORDER BY s.labno";

$sql105="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%Colon%' AND l.result NOT LIKE '%+%' 
AND f.result='' OR f.result=NULL 
ORDER BY s.labno";

$sql106="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%CONT%' 
AND f.result='' OR f.result=NULL 
ORDER BY s.labno";

$sql107="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_fm f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%NEG%' 
AND f.result='' OR f.result=NULL 
ORDER BY s.labno";
*/

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=SmearFmVsLJculture_$fromdate-to-$todate.xls");
}

if(isset($_GET['downloadtsrs'])){
$fromdate= $_GET['fromdate']; $fromdate2=date('Y-m-d', strtotime($fromdate));
$todate= $_GET['todate']; $todate2=date('Y-m-d', strtotime($todate));

$sqlvalue="SELECT s.labno LABNO,s.studycode STUDYCODE,s.ntrlpno NTRL_PATIENT,hcentre HCENTRE,hcdistrict HC_DISTRICT,tbzone TB_ZONE,hub HUB,patcategory CATEGORY,requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,requester REQUESTER,requestercontact REQUESTER_PHONE,collector COLLECTOR,collectorcontact COLLECTOR_PHONE FROM samples s WHERE s.rctdate BETWEEN '$fromdate2' AND '$todate2' ORDER BY s.labno";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=TSRS_$fromdate-to-$todate.xls");
}


if(isset($_GET['downloadPSmicroscopyVljculture'])){
$fromdate= $_GET['fromdate']; $fromdate2=date('Y-m-d', strtotime($fromdate));
$todate= $_GET['todate']; $todate2=date('Y-m-d', strtotime($todate));

/*$sqlvalue="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE FROM samples s,res_smear_fm f, res_culture_lj l,res_genexpert g WHERE s.labno=f.labno AND s.labno=l.labno AND s.labno=g.labno AND (l.resdate BETWEEN '$fromdate2' AND '$todate2') ORDER BY s.labno";*/

$sqlvalue="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM_ZN,f.resdate FM_ZN_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE (l.resdate BETWEEN '$fromdate2' AND '$todate2') and (s.studycode='PS') ORDER BY s.labno";

//Culture Analysis
$sql1="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%1+%' 
AND f.result LIKE '%1+%' 
ORDER BY s.labno";

$sql2="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%1+%' 
AND f.result LIKE '%2+%' 
ORDER BY s.labno";

$sql3="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%1+%' 
AND f.result LIKE '%3+%' 
ORDER BY s.labno";

$sql4="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%1+%' 
AND f.result LIKE '%NEG%' 
ORDER BY s.labno";

$sql5="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%1+%' 
AND f.result LIKE '%/%' 
ORDER BY s.labno";

$sql6="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%2+%' 
AND f.result LIKE '%1+%' 
ORDER BY s.labno";

$sql7="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%2+%' 
AND f.result LIKE '%2+%' 
ORDER BY s.labno";

$sql8="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%2+%' 
AND f.result LIKE '%3+%' 
ORDER BY s.labno";

$sql9="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%2+%' 
AND f.result LIKE '%NEG%' 
ORDER BY s.labno";

$sql10="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%2+%' 
AND f.result LIKE '%/%' 
ORDER BY s.labno";

$sql11="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%3+%' 
AND f.result LIKE '%1+%' 
ORDER BY s.labno";

$sql12="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%3+%' 
AND f.result LIKE '%2+%' 
ORDER BY s.labno";

$sql13="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%3+%' 
AND f.result LIKE '%3+%' 
ORDER BY s.labno";

$sql14="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%3+%' 
AND f.result LIKE '%NEG%' 
ORDER BY s.labno";

$sql15="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%3+%' 
AND f.result LIKE '%/%' 
ORDER BY s.labno";

$sql16="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%4+%' 
AND f.result LIKE '%1+%' 
ORDER BY s.labno";

$sql17="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%4+%' 
AND f.result LIKE '%2+%' 
ORDER BY s.labno";

$sql18="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%4+%' 
AND f.result LIKE '%3+%' 
ORDER BY s.labno";

$sql19="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%4+%' 
AND f.result LIKE '%NEG%' 
ORDER BY s.labno";

$sql20="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%4+%' 
AND f.result LIKE '%/%' 
ORDER BY s.labno";

$sql21="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND (l.result LIKE '%Colon%' AND l.result NOT LIKE '%+%') 
AND f.result LIKE '%1+%' 
ORDER BY s.labno";

$sql22="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND (l.result LIKE '%Colon%' AND l.result NOT LIKE '%+%') 
AND f.result LIKE '%2+%' 
ORDER BY s.labno";

$sql23="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND (l.result LIKE '%Colon%' AND l.result NOT LIKE '%+%') 
AND f.result LIKE '%3+%' 
ORDER BY s.labno";

$sql24="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND (l.result LIKE '%Colon%' AND l.result NOT LIKE '%+%') 
AND f.result LIKE '%NEG%' 
ORDER BY s.labno";

$sql25="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND (l.result LIKE '%Colon%' AND l.result NOT LIKE '%+%') 
AND f.result LIKE '%/%' 
ORDER BY s.labno";

$sql26="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%CONT%' 
AND f.result LIKE '%1+%' 
ORDER BY s.labno";

$sql27="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%CONT%' 
AND f.result LIKE '%2+%' 
ORDER BY s.labno";

$sql28="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%CONT%' 
AND f.result LIKE '%3+%' 
ORDER BY s.labno";

$sql29="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%CONT%' 
AND f.result LIKE '%NEG%' 
ORDER BY s.labno";

$sql30="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%CONT%' 
AND f.result LIKE '%/%' 
ORDER BY s.labno";

$sql31="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%NEG%' 
AND f.result LIKE '%1+%' 
ORDER BY s.labno";

$sql32="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%NEG%' 
AND f.result LIKE '%2+%' 
ORDER BY s.labno";

$sql33="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%NEG%' 
AND f.result LIKE '%3+%' 
ORDER BY s.labno";

$sql34="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%NEG%' 
AND f.result LIKE '%NEG%' 
ORDER BY s.labno";

$sql35="SELECT s.labno LABNO,s.studycode STUDYCODE,s.patcategory CATEGORY,s.requestreason REASON,colldate DATE_COLLECTED,rctdate DATE_RECEIVED,f.result FM,f.resdate FM_DATE,l.result LJ,l.resdate LJ_DATE,g.result GXP,g.resdate GXP_DATE 
FROM samples s 
left outer join res_smear_zn f on s.labno=f.labno 
left outer join res_culture_lj l on s.labno=l.labno 
left outer join res_genexpert g on s.labno=g.labno 
WHERE l.resdate BETWEEN '$fromdate2' AND '$todate2' 
AND l.result LIKE '%NEG%' 
AND f.result LIKE '%/%' 
ORDER BY s.labno";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=ZNsmearVsLJculture_$fromdate-to-$todate.xls");
}

if(isset($_GET['downloadtbor'])){
//$fromdate= $_GET['fromdate']; $fromdate2=date('Y-m-d', strtotime($fromdate));
//$todate= $_GET['todate']; $todate2=date('Y-m-d', strtotime($todate));
$now=date('d-m-Y', time());

/*
$sqlvalue="select s.labno,p.hcpno pin,p.nin serialno,s.colldate collectiondate, s.rctdate receiptdate,s.spectype sputum,p.name,p.sex,p.age,p.village,z.result zn,g.result genexpert,l.result lj_culture,i.result ident,lj1.streptomycin,lj1.isoniazid,lj1.rifampicin,lj1.ethambutol,lj2.ofloxacin,lj2.kanamycin,lj2.capreomycin,lj2.amikacin from samples s, patients p,res_smear_zn z,res_genexpert g,res_culture_lj l,res_ident_antigentest i,res_ljdst1 lj1,res_ljdst2 lj2 where s.ntrlpno=p.ntrlpno and s.labno=z.labno and s.labno=g.labno and s.labno=l.labno and s.labno=i.labno and s.labno=lj1.labno and s.labno=lj2.labno and s.studycode='PS' ORDER BY s.labno";
*/
$sqlvalue="
SELECT s.labno,p.hcpno pid,p.name name,s.hcentre hfacility,s.colldate collectiondate, s.rctdate receiptdate,s.appearance appearance,m.result mgit_culture,m.resdate mgitdate,l.result lj_culture,i.result ident,l.resdate ljdate FROM samples s 
LEFT OUTER JOIN patients p ON s.ntrlpno=p.ntrlpno 
LEFT OUTER JOIN res_culture_mgit m ON s.labno=m.labno  
LEFT OUTER JOIN res_culture_lj l ON s.labno=l.labno 
LEFT OUTER JOIN res_ident_antigentest i ON s.labno=i.labno 
WHERE s.studycode='OR' ORDER BY s.labno";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=TBOR-LabData-$now.xls");
}


if(isset($_GET['downloadtbprevalencesurvey'])){
//$fromdate= $_GET['fromdate']; $fromdate2=date('Y-m-d', strtotime($fromdate));
//$todate= $_GET['todate']; $todate2=date('Y-m-d', strtotime($todate));
$now=date('d-m-Y', time());

/*
$sqlvalue="select s.labno,p.hcpno pin,p.nin serialno,s.colldate collectiondate, s.rctdate receiptdate,s.spectype sputum,p.name,p.sex,p.age,p.village,z.result zn,g.result genexpert,l.result lj_culture,i.result ident,lj1.streptomycin,lj1.isoniazid,lj1.rifampicin,lj1.ethambutol,lj2.ofloxacin,lj2.kanamycin,lj2.capreomycin,lj2.amikacin from samples s, patients p,res_smear_zn z,res_genexpert g,res_culture_lj l,res_ident_antigentest i,res_ljdst1 lj1,res_ljdst2 lj2 where s.ntrlpno=p.ntrlpno and s.labno=z.labno and s.labno=g.labno and s.labno=l.labno and s.labno=i.labno and s.labno=lj1.labno and s.labno=lj2.labno and s.studycode='PS' ORDER BY s.labno";
*/
$sqlvalue="
SELECT s.labno,p.hcpno pin,p.nin serialno,s.colldate collectiondate, s.rctdate receiptdate,s.spectype sputum,p.name,p.sex,p.age,p.village,z.result zn,z.resdate zndate,g.result genexpert,g.resdate gxdate,l.result lj_culture,l.resdate ljdate,i.result ident,lj1.resdate dstdate,lj1.streptomycin,lj1.isoniazid,lj1.rifampicin,lj1.ethambutol,lj2.ofloxacin,lj2.kanamycin,lj2.capreomycin,lj2.amikacin FROM samples s 
LEFT OUTER JOIN patients p ON s.ntrlpno=p.ntrlpno 
LEFT OUTER JOIN res_smear_zn z ON s.labno=z.labno 
LEFT OUTER JOIN res_genexpert g ON s.labno=g.labno 
LEFT OUTER JOIN res_culture_lj l ON s.labno=l.labno 
LEFT OUTER JOIN res_ident_antigentest i ON s.labno=i.labno 
LEFT OUTER JOIN res_ljdst1 lj1 ON s.labno=lj1.labno 
LEFT OUTER JOIN res_ljdst2 lj2 ON s.labno=lj2.labno 
WHERE s.studycode='PS' ORDER BY s.labno";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=TB-Prevalence-Survey-LabData-$now.xls");
}

if(isset($_GET['downloadtbprevalencesurveypos'])){
//$fromdate= $_GET['fromdate']; $fromdate2=date('Y-m-d', strtotime($fromdate));
//$todate= $_GET['todate']; $todate2=date('Y-m-d', strtotime($todate));
$now=date('d-m-Y', time());

/*$sqlvalue="
select s.labno,s.studycode study,p.ntrlpno NtrlPNo,p.hcpno pin,p.nin serialno,s.colldate collectiondate, s.rctdate receiptdate,s.spectype sputum,p.name,p.sex,p.age,p.village,
z.result zn,g.result genexpert,l.result lj_culture,i.result ident,lj1.streptomycin,lj1.isoniazid,lj1.rifampicin,lj1.ethambutol,lj2.ofloxacin,lj2.kanamycin,lj2.capreomycin,
lj2.amikacin FROM samples s 
LEFT OUTER JOIN patients p ON s.ntrlpno=p.ntrlpno 
LEFT OUTER JOIN res_smear_zn z ON s.labno=z.labno 
LEFT OUTER JOIN res_genexpert g ON s.labno=g.labno 
LEFT OUTER JOIN res_culture_lj l ON s.labno=l.labno 
LEFT OUTER JOIN res_ident_antigentest i ON i.labno=g.labno 
LEFT OUTER JOIN res_ljdst1 lj1 ON s.labno=lj1.labno 
LEFT OUTER JOIN res_ljdst2 lj2 ON s.labno=lj2.labno where s.ntrlpno in (select s.ntrlpno from samples s left outer join patients p on s.ntrlpno=p.ntrlpno left outer join 
res_smear_zn z on s.labno=z.labno left outer join res_culture_lj l on s.labno=l.labno 
where (studycode='PS') and (z.result like '%POS%' or l.result like '%POS%')) order by p.ntrlpno
";*/

$sqlvalue="select s.labno,s.studycode study,p.ntrlpno NtrlPNo,p.hcpno pin,p.nin serialno,s.colldate collectiondate, s.rctdate receiptdate,s.spectype sputum,p.name,p.sex,p.age,p.village,
z.result zn,g.result genexpert,l.result lj_culture,i.result ident,lj1.streptomycin,lj1.isoniazid,lj1.rifampicin,lj1.ethambutol,lj2.ofloxacin,lj2.kanamycin,lj2.capreomycin,
lj2.amikacin FROM samples s 
LEFT OUTER JOIN patients p ON s.ntrlpno=p.ntrlpno 
LEFT OUTER JOIN res_smear_zn z ON s.labno=z.labno 
LEFT OUTER JOIN res_genexpert g ON s.labno=g.labno 
LEFT OUTER JOIN res_culture_lj l ON s.labno=l.labno 
LEFT OUTER JOIN res_ident_antigentest i ON i.labno=s.labno 
LEFT OUTER JOIN res_ljdst1 lj1 ON s.labno=lj1.labno 
LEFT OUTER JOIN res_ljdst2 lj2 ON s.labno=lj2.labno where p.ntrlpno in (select ntrlpno from (select s.ntrlpno from samples s 
left outer join res_smear_zn z on s.labno=z.labno left outer join res_culture_lj l on s.labno=l.labno 
where (studycode='PS') and (z.result like '%POS%' or l.result like '%POS%')) as temp) order by p.ntrlpno
";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=TB-Prevalence-Survey-Positives-$now.xls");
}

if(isset($_GET['downloadtbprevalencesurveycontljall'])){
$now=date('d-m-Y', time());

$sqlvalue="
SELECT s.labno, s.studycode study, p.ntrlpno NtrlPNo, p.hcpno pin, p.nin serialno, s.colldate collectiondate, s.rctdate receiptdate, s.spectype sputum, p.name, p.sex, p.age, l.result lj_culture, g.result genexpert
FROM samples s
LEFT OUTER JOIN patients p ON s.ntrlpno = p.ntrlpno
LEFT OUTER JOIN res_genexpert g ON s.labno = g.labno
LEFT OUTER JOIN res_culture_lj l ON s.labno = l.labno
WHERE p.hcpno
IN (

SELECT p.hcpno
FROM samples s
LEFT OUTER JOIN patients p ON s.ntrlpno = p.ntrlpno
LEFT OUTER JOIN res_culture_lj l ON s.labno = l.labno
WHERE studycode = 'PS'
AND (
l.result LIKE '%CONT%'
)
)
ORDER BY p.hcpno
";

header("Content-type: application/vnd.ms-excel");
//header("Content-Disposition: attachment;Filename=TB-Prevalence-Survey-CONT-LJ-$now.xls");
header("Content-Disposition: attachment;Filename=TB-Prevalence-Survey-CONT-LJ_Upto_$now.xls");
}

if(isset($_GET['downloadtbprevalencesurveycontlj'])){
$fromdate= $_GET['fromdate']; $fromdate2=date('Y-m-d', strtotime($fromdate));
$todate= $_GET['todate']; $todate2=date('Y-m-d', strtotime($todate));
$now=date('d-m-Y', time());

/*$sqlvalue="
select s.labno,s.studycode study,p.ntrlpno NtrlPNo,p.hcpno pin,p.nin serialno,s.colldate collectiondate, s.rctdate receiptdate,s.spectype sputum,p.name,p.sex,p.age,l.result lj_culture FROM samples s 
LEFT OUTER JOIN patients p ON s.ntrlpno=p.ntrlpno 
LEFT OUTER JOIN res_culture_lj l ON s.labno=l.labno 
where s.ntrlpno in (select s.ntrlpno from samples s left outer join patients p on s.ntrlpno=p.ntrlpno left outer join res_culture_lj l on s.labno=l.labno where (studycode='PS' or studycode='PSP') and (l.result='CONTAMINATED') and (l.resdate between '$fromdate2' and '$todate2')) order by p.ntrlpno
";*/

$sqlvalue="
SELECT s.labno, s.studycode study, p.ntrlpno NtrlPNo, p.hcpno pin, p.nin serialno, s.colldate collectiondate, s.rctdate receiptdate, s.spectype sputum, p.name, p.sex, p.age, g.result genexpert, l.result lj_culture
FROM samples s
LEFT OUTER JOIN patients p ON s.ntrlpno = p.ntrlpno
LEFT OUTER JOIN res_genexpert g ON s.labno = g.labno
LEFT OUTER JOIN res_culture_lj l ON s.labno = l.labno
WHERE p.ntrlpno
IN (
SELECT s.ntrlpno
FROM res_culture_lj l, samples s
WHERE s.labno = l.labno
AND l.result LIKE 'CONT%'
AND (l.resdate BETWEEN '$fromdate2' and '$todate2') 
AND s.studycode = 'PS'
)
ORDER BY p.hcpno
";

header("Content-type: application/vnd.ms-excel");
//header("Content-Disposition: attachment;Filename=TB-Prevalence-Survey-CONT-LJ-$now.xls");
header("Content-Disposition: attachment;Filename=TB-Prevalence-Survey-CONT-LJ_$fromdate-to-$todate.xls");
}

if(isset($_GET['downloadalldata'])){
$fromdate= $_GET['fromdate']; $fromdate2=date('Y-m-d', strtotime($fromdate));
$todate= $_GET['todate']; $todate2=date('Y-m-d', strtotime($todate));
$now=date('d-m-Y', time());

$sqlvalue="SELECT s.labno,s.studycode,s.ntrlpno,p.hcpno,p.nin,p.name,p.sex,p.age,p.village,p.resdistrict,s.hcentre,s.hcdistrict,s.hub HUB,s.tbzone,s.patcategory,s.requestreason,s.spectype,s.appearance,s.volume,s.followup,s.peripheralres,s.colldate,s.colltime,s.rctdate,s.rcttime,s.requester,s.requestercontact,s.collector,s.collectorcontact,s.examination,s.reviewer,s.reviewdate,s.editedby,s.editdate,f.result fm_res,f.comment fm_comment,f.comment2 fm_comment2,f.restech fm_tech,f.resdate fm_date,z.result zn_res,z.comment zn_comment,z.comment2 zn_comment2,z.restech zn_tech,z.resdate zn_date,g.result gx_res,g.comment gx_comment,g.restech gx_tech,g.resdate gx_date,l.result lj_res,l.comment lj_comment,l.restech lj_tech,l.resdate lj_date,l.contdate lj_cont_date,m.result mgit_res,m.comment mgit_comment,m.restech mgit_tech,m.resdate mgit_date,i.result id_res,i.comment id_comment,i.restech id_tech,i.resdate id_date,lpa1.rifampicin lpa1_rif,lpa1.isoniazid lpa1_iso,lpa1.comment lpa1_comment,lpa1.restech lpa1_tech,lpa1.resdate lpa1_date,lpa2.ofloxacin lpa2_ofloxacin,lpa2.moxifloxacin lpa2_moxifloxacin,lpa2.kanamycin lpa2_kanamycin,lpa2.amikacin lpa2_amikacin,lpa2.capreomycin lpa2_capreomycin,lpa2.ethambutol lpa2_ethambutol,lpa2.comment lpa2_comment,lpa2.restech lpa2_tech,lpa2.resdate lpa2_date,ljdst1.streptomycin ljdst1_streptomycin,ljdst1.isoniazid ljdst1_isoniazid,ljdst1.rifampicin ljdst1_rifampicin,ljdst1.ethambutol ljdst1_ethambutol,ljdst1.comment ljdst1_comment,ljdst1.restech ljdst1_tech,ljdst1.resdate ljdst1_date,ljdst2.kanamycin ljdst2_kanamycin,ljdst2.ofloxacin ljdst2_ofloxacin,ljdst2.comment ljdst2_comment,ljdst2.restech ljdst2_tech,ljdst2.resdate ljdst2_date,mgitdst1.streptomycin mgitdst1_streptomycin,mgitdst1.isoniazid mgitdst1_isoniazid,mgitdst1.rifampicin mgitdst1_rifampicin,mgitdst1.ethambutol mgitdst1_ethambutol,mgitdst1.pyrazinamide mgitdst1_pyrazinamide,mgitdst1.comment mgitdst1_comment,mgitdst1.restech mgitdst1_tech,mgitdst1.resdate mgitdst1_date,mgitdst2.ofloxacin mgitdst2_ofloxacin,mgitdst2.kanamycin mgitdst2_kanamycin,mgitdst2.capreomycin mgitdst2_capreomycin,mgitdst2.amikacin mgitdst2_amikacin,mgitdst2.eithanomide mgitdst2_eithanomide,mgitdst2.pas mgitdst2_pas,mgitdst2.comment mgitdst2_comment,mgitdst2.restech mgitdst2_tech,mgitdst2.resdate mgitdst2_date FROM samples s
LEFT OUTER JOIN patients p ON s.ntrlpno = p.ntrlpno
LEFT OUTER JOIN res_smear_fm f ON s.labno = f.labno
LEFT OUTER JOIN res_smear_zn z ON s.labno = z.labno
LEFT OUTER JOIN res_genexpert g ON s.labno = g.labno
LEFT OUTER JOIN res_culture_lj l ON s.labno = l.labno
LEFT OUTER JOIN res_culture_mgit m ON s.labno = m.labno
LEFT OUTER JOIN res_ident_antigentest i ON s.labno = i.labno
LEFT OUTER JOIN res_lpa1 lpa1 ON s.labno = lpa1.labno
LEFT OUTER JOIN res_lpa2 lpa2 ON s.labno = lpa2.labno
LEFT OUTER JOIN res_ljdst1 ljdst1 ON s.labno = ljdst1.labno
LEFT OUTER JOIN res_ljdst2 ljdst2 ON s.labno = ljdst2.labno
LEFT OUTER JOIN res_mgitdst1 mgitdst1 ON s.labno = mgitdst1.labno
LEFT OUTER JOIN res_mgitdst2 mgitdst2 ON s.labno = mgitdst2.labno
WHERE s.rctdate BETWEEN '$fromdate2' AND '$todate2' ORDER BY s.labno";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=NTRL-LIS-AllData_$fromdate-to-$todate.xls");
}

if(isset($_GET['downloadmdrdata'])){
//$fromdate= $_GET['fromdate']; $fromdate2=date('Y-m-d', strtotime($fromdate));
//$todate= $_GET['todate']; $todate2=date('Y-m-d', strtotime($todate));
$now=date('d-m-Y', time());

/*
$sqlvalue="select s.labno,p.hcpno pin,p.nin serialno,s.colldate collectiondate, s.rctdate receiptdate,s.spectype sputum,p.name,p.sex,p.age,p.village,z.result zn,g.result genexpert,l.result lj_culture,i.result ident,lj1.streptomycin,lj1.isoniazid,lj1.rifampicin,lj1.ethambutol,lj2.ofloxacin,lj2.kanamycin,lj2.capreomycin,lj2.amikacin from samples s, patients p,res_smear_zn z,res_genexpert g,res_culture_lj l,res_ident_antigentest i,res_ljdst1 lj1,res_ljdst2 lj2 where s.ntrlpno=p.ntrlpno and s.labno=z.labno and s.labno=g.labno and s.labno=l.labno and s.labno=i.labno and s.labno=lj1.labno and s.labno=lj2.labno and s.studycode='PS' ORDER BY s.labno";
*/
$sqlvalue="
select s.hcentre,s.labno,s.studycode,s.ntrlpno,p.hcpno,p.name,s.patcategory,s.requestreason,s.colldate,s.rctdate,f.result fm,f.resdate fm_date,g.result xpert,lj.result ljc,lj1.streptomycin,lj1.isoniazid,lj1.rifampicin,lj1.ethambutol,lj2.kanamycin,lj2.ofloxacin,lj1.resdate FROM samples s LEFT OUTER JOIN patients p ON s.ntrlpno=p.ntrlpno LEFT OUTER JOIN res_smear_fm f ON s.labno=f.labno LEFT OUTER JOIN res_genexpert g ON s.labno=g.labno LEFT OUTER JOIN res_culture_lj lj ON s.labno=lj.labno LEFT OUTER JOIN res_ljdst1 lj1 ON s.labno=lj1.labno LEFT OUTER JOIN res_ljdst2 lj2 ON s.labno=lj2.labno WHERE s.studycode='TC' and (s.patcategory like '%MDR%' OR g.result='MTB Detected - Rifampicin Resistant') order by s.hcentre,p.name,s.labno";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=MDR_Data-$now.xls");
}



echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body style='font-family: Arial; font-size: 10px;'>";


include("../includes/dbconfig.php");

	$rows = mysqli_query($dbconnection,$sqlvalue) or die("ERROR : " . mysqli_error($dbconnection));

	echo "<table border='1' cellpadding='5' cellspacing='1' bgcolor='91B4DD'>
	<!--<tr bgcolor='#ffffff'></tr><tr bgcolor='#ffffff'></tr>--><tr bgcolor='#fffbf6' align='left'>";
	$i=0;
while ($i < mysqli_num_fields($rows)){
$fld = mysqli_fetch_field($rows,$i);
echo "<th>$fld->name</th>";
$i = $i + 1;
}
echo "</tr>";
	
	
	while ($row = mysqli_fetch_array($rows,MYSQLI_ASSOC)) {
echo "<tr align='left' bgcolor='#ffffff'>";

$i=0;
while ($i < mysqli_num_fields($rows)){
$fld = mysqli_fetch_field($rows, $i) or die("ERROR : " . mysqli_error($dbconnection));
$col=$fld->name;
echo "<td>$row[$col]</td>";
$i = $i + 1;
}

echo "</tr>";
	}
	echo "</table>";
	
if(isset($_GET['downloadmicroscopyVljculture'])){
$analysis1=mysql_num_rows(mysql_query($sql1));
$analysis2=mysql_num_rows(mysql_query($sql2));
$analysis3=mysql_num_rows(mysql_query($sql3));
$analysis4=mysql_num_rows(mysql_query($sql4));
$analysis5=mysql_num_rows(mysql_query($sql5));
$analysis6=mysql_num_rows(mysql_query($sql6));
$analysis7=mysql_num_rows(mysql_query($sql7));
$analysis8=mysql_num_rows(mysql_query($sql8));
$analysis9=mysql_num_rows(mysql_query($sql9));
$analysis10=mysql_num_rows(mysql_query($sql10));
$analysis11=mysql_num_rows(mysql_query($sql11));
$analysis12=mysql_num_rows(mysql_query($sql12));
$analysis13=mysql_num_rows(mysql_query($sql13));
$analysis14=mysql_num_rows(mysql_query($sql14));
$analysis15=mysql_num_rows(mysql_query($sql15));
$analysis16=mysql_num_rows(mysql_query($sql16));
$analysis17=mysql_num_rows(mysql_query($sql17));
$analysis18=mysql_num_rows(mysql_query($sql18));
$analysis19=mysql_num_rows(mysql_query($sql19));
$analysis20=mysql_num_rows(mysql_query($sql20));
$analysis21=mysql_num_rows(mysql_query($sql21));
$analysis22=mysql_num_rows(mysql_query($sql22));
$analysis23=mysql_num_rows(mysql_query($sql23));
$analysis24=mysql_num_rows(mysql_query($sql24));
$analysis25=mysql_num_rows(mysql_query($sql25));
$analysis26=mysql_num_rows(mysql_query($sql26));
$analysis27=mysql_num_rows(mysql_query($sql27));
$analysis28=mysql_num_rows(mysql_query($sql28));
$analysis29=mysql_num_rows(mysql_query($sql29));
$analysis30=mysql_num_rows(mysql_query($sql30));
$analysis31=mysql_num_rows(mysql_query($sql31));
$analysis32=mysql_num_rows(mysql_query($sql32));
$analysis33=mysql_num_rows(mysql_query($sql33));
$analysis34=mysql_num_rows(mysql_query($sql34));
$analysis35=mysql_num_rows(mysql_query($sql35));
/*$analysis101=mysql_num_rows(mysql_query($sql101));
$analysis102=mysql_num_rows(mysql_query($sql102));
$analysis103=mysql_num_rows(mysql_query($sql103));
$analysis104=mysql_num_rows(mysql_query($sql104));
$analysis105=mysql_num_rows(mysql_query($sql105));
$analysis106=mysql_num_rows(mysql_query($sql106));
$analysis107=mysql_num_rows(mysql_query($sql107));

<tr align='center'><td colspan='7'><b>MICROSCOPY</b></td></tr>
<tr align='center'><th valign='top' rowspan='8'>CULTURE</th><th></th><th>1+</th><th>2+</th><th>3+</th><th>NEG</th><th>SCANTY</th></tr>
<tr align='center'><td><b>1+</b></td><td>$analysis1</td><td>$analysis2</td><td>$analysis3</td><td>$analysis4</td><td>$analysis5</td></tr>
<tr align='center'><td><b>2+</b></td><td>$analysis6</td><td>$analysis7</td><td>$analysis8</td><td>$analysis9</td><td>$analysis10</td></tr>
<tr align='center'><td><b>3+</b></td><td>$analysis11</td><td>$analysis12</td><td>$analysis13</td><td>$analysis14</td><td>$analysis15</td></tr>
<tr align='center'><td><b>4+</b></td><td>$analysis16</td><td>$analysis17</td><td>$analysis18</td><td>$analysis19</td><td>$analysis20</td></tr>
<tr align='center'><td><b>ACTUAL</b></td><td>$analysis21</td><td>$analysis22</td><td>$analysis23</td><td>$analysis24</td><td>$analysis25</td></tr>
<tr align='center'><td><b>CONT</b></td><td>$analysis26</td><td>$analysis27</td><td>$analysis28</td><td>$analysis29</td><td>$analysis30</td></tr>
<tr align='center'><td><b>NO GROWTH</b></td><td>$analysis31</td><td>$analysis32</td><td>$analysis33</td><td>$analysis34</td><td>$analysis35</td></tr>
*/

echo"
<br><br>
<b>CROSS TABULATION</b>
<table border='1'>
<tr align='center'><td colspan='9'><b>LJ CULTURE</b></td></tr>
<tr align='center'><th valign='top' rowspan='6'>MICROSCOPY</th><th></th><th>1+</th><th>2+</th><th>3+</th><th>4+</th><th>ACTUAL</th><th>CONT</th><th>NO GROWTH</th></tr>
<tr align='center'><td><b>1+</b></td><td>$analysis1</td><td>$analysis6</td><td>$analysis11</td><td>$analysis16</td><td>$analysis21</td><td>$analysis26</td><td>$analysis31</td></tr>
<tr align='center'><td><b>2+</b></td><td>$analysis2</td><td>$analysis7</td><td>$analysis12</td><td>$analysis17</td><td>$analysis22</td><td>$analysis27</td><td>$analysis32</td></tr>
<tr align='center'><td><b>3+</b></td><td>$analysis3</td><td>$analysis8</td><td>$analysis13</td><td>$analysis18</td><td>$analysis23</td><td>$analysis28</td><td>$analysis33</td></tr>
<tr align='center'><td><b>NEG</b></td><td>$analysis4</td><td>$analysis9</td><td>$analysis14</td><td>$analysis19</td><td>$analysis24</td><td>$analysis29</td><td>$analysis34</td></tr>
<tr align='center'><td><b>SCANTY</b></td><td>$analysis5</td><td>$analysis10</td><td>$analysis15</td><td>$analysis20</td><td>$analysis25</td><td>$analysis30</td><td>$analysis35</td></tr>
</table>
";
}

if(isset($_GET['downloadPSmicroscopyVljculture'])){
$analysis1=mysql_num_rows(mysql_query($sql1));
$analysis2=mysql_num_rows(mysql_query($sql2));
$analysis3=mysql_num_rows(mysql_query($sql3));
$analysis4=mysql_num_rows(mysql_query($sql4));
$analysis5=mysql_num_rows(mysql_query($sql5));
$analysis6=mysql_num_rows(mysql_query($sql6));
$analysis7=mysql_num_rows(mysql_query($sql7));
$analysis8=mysql_num_rows(mysql_query($sql8));
$analysis9=mysql_num_rows(mysql_query($sql9));
$analysis10=mysql_num_rows(mysql_query($sql10));
$analysis11=mysql_num_rows(mysql_query($sql11));
$analysis12=mysql_num_rows(mysql_query($sql12));
$analysis13=mysql_num_rows(mysql_query($sql13));
$analysis14=mysql_num_rows(mysql_query($sql14));
$analysis15=mysql_num_rows(mysql_query($sql15));
$analysis16=mysql_num_rows(mysql_query($sql16));
$analysis17=mysql_num_rows(mysql_query($sql17));
$analysis18=mysql_num_rows(mysql_query($sql18));
$analysis19=mysql_num_rows(mysql_query($sql19));
$analysis20=mysql_num_rows(mysql_query($sql20));
$analysis21=mysql_num_rows(mysql_query($sql21));
$analysis22=mysql_num_rows(mysql_query($sql22));
$analysis23=mysql_num_rows(mysql_query($sql23));
$analysis24=mysql_num_rows(mysql_query($sql24));
$analysis25=mysql_num_rows(mysql_query($sql25));
$analysis26=mysql_num_rows(mysql_query($sql26));
$analysis27=mysql_num_rows(mysql_query($sql27));
$analysis28=mysql_num_rows(mysql_query($sql28));
$analysis29=mysql_num_rows(mysql_query($sql29));
$analysis30=mysql_num_rows(mysql_query($sql30));
$analysis31=mysql_num_rows(mysql_query($sql31));
$analysis32=mysql_num_rows(mysql_query($sql32));
$analysis33=mysql_num_rows(mysql_query($sql33));
$analysis34=mysql_num_rows(mysql_query($sql34));
$analysis35=mysql_num_rows(mysql_query($sql35));
/*$analysis101=mysql_num_rows(mysql_query($sql101));
$analysis102=mysql_num_rows(mysql_query($sql102));
$analysis103=mysql_num_rows(mysql_query($sql103));
$analysis104=mysql_num_rows(mysql_query($sql104));
$analysis105=mysql_num_rows(mysql_query($sql105));
$analysis106=mysql_num_rows(mysql_query($sql106));
$analysis107=mysql_num_rows(mysql_query($sql107));

<tr align='center'><td colspan='7'><b>MICROSCOPY</b></td></tr>
<tr align='center'><th valign='top' rowspan='8'>CULTURE</th><th></th><th>1+</th><th>2+</th><th>3+</th><th>NEG</th><th>SCANTY</th></tr>
<tr align='center'><td><b>1+</b></td><td>$analysis1</td><td>$analysis2</td><td>$analysis3</td><td>$analysis4</td><td>$analysis5</td></tr>
<tr align='center'><td><b>2+</b></td><td>$analysis6</td><td>$analysis7</td><td>$analysis8</td><td>$analysis9</td><td>$analysis10</td></tr>
<tr align='center'><td><b>3+</b></td><td>$analysis11</td><td>$analysis12</td><td>$analysis13</td><td>$analysis14</td><td>$analysis15</td></tr>
<tr align='center'><td><b>4+</b></td><td>$analysis16</td><td>$analysis17</td><td>$analysis18</td><td>$analysis19</td><td>$analysis20</td></tr>
<tr align='center'><td><b>ACTUAL</b></td><td>$analysis21</td><td>$analysis22</td><td>$analysis23</td><td>$analysis24</td><td>$analysis25</td></tr>
<tr align='center'><td><b>CONT</b></td><td>$analysis26</td><td>$analysis27</td><td>$analysis28</td><td>$analysis29</td><td>$analysis30</td></tr>
<tr align='center'><td><b>NO GROWTH</b></td><td>$analysis31</td><td>$analysis32</td><td>$analysis33</td><td>$analysis34</td><td>$analysis35</td></tr>
*/

echo"
<br><br>
<b>CROSS TABULATION</b>
<table border='1'>
<tr align='center'><td colspan='9'><b>LJ CULTURE</b></td></tr>
<tr align='center'><th valign='top' rowspan='6'>MICROSCOPY</th><th></th><th>1+</th><th>2+</th><th>3+</th><th>4+</th><th>ACTUAL</th><th>CONT</th><th>NO GROWTH</th></tr>
<tr align='center'><td><b>1+</b></td><td>$analysis1</td><td>$analysis6</td><td>$analysis11</td><td>$analysis16</td><td>$analysis21</td><td>$analysis26</td><td>$analysis31</td></tr>
<tr align='center'><td><b>2+</b></td><td>$analysis2</td><td>$analysis7</td><td>$analysis12</td><td>$analysis17</td><td>$analysis22</td><td>$analysis27</td><td>$analysis32</td></tr>
<tr align='center'><td><b>3+</b></td><td>$analysis3</td><td>$analysis8</td><td>$analysis13</td><td>$analysis18</td><td>$analysis23</td><td>$analysis28</td><td>$analysis33</td></tr>
<tr align='center'><td><b>NEG</b></td><td>$analysis4</td><td>$analysis9</td><td>$analysis14</td><td>$analysis19</td><td>$analysis24</td><td>$analysis29</td><td>$analysis34</td></tr>
<tr align='center'><td><b>SCANTY</b></td><td>$analysis5</td><td>$analysis10</td><td>$analysis15</td><td>$analysis20</td><td>$analysis25</td><td>$analysis30</td><td>$analysis35</td></tr>
</table>
";
}
	
echo "</body>";
echo "</html>";
?>