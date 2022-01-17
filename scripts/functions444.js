function redirecttoqc(value){
if(value=="naoh"){
document.location = "qc_sodium_hydro_nitrate.php";
}
if(value=="7h10s"){
document.location = "qc_7h10s.php";
}
if(value=="phos"){
document.location = "qc_phosphatebuffer.php";
}
if(value=="pat"){
document.location = "patient_registration.php";
}

}
function storage_showPatientprofileby_name(str){
if (str.length==0)
  { 
  document.getElementById("livesearch").innerHTML="";
  document.getElementById("livesearch").style.border="0px";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
xmlhttp.open("GET","storage_ajax_get_profiles_registered_patients_name.php?q="+str,true);
xmlhttp.send();
}

$(function lmeave() {
$('#example-1-form').areYouSure();
});

function redirecttoresultsmgt(value){
if(value=="SR"){
document.location = "report_soft.php";
}
}

function redirecttoadmin(value){
if(value=="mediaopt"){
document.location = "admin_media.php";
}
if(value=="rsettings"){
document.location = "admin_report.php";
}
if(value=="collectors"){
document.location = "admin_collectors.php";
}
if(value=="idmtd"){
document.location = "admin_idmethods.php";
}
if(value=="user"){
document.location = "admin_users.php";
}
if(value=="const"){
document.location = "admin_consistency.php";
}
if(value=="transporter"){
document.location = "admin_transporters.php";
}
if(value=="visit"){
document.location = "admin_visitinterval.php";
}
if(value=="log"){
document.location = "userlogreport_select.php";
}
if(value=="spectype"){
document.location = "admin_spectype.php";
}
if(value=="res_comm"){
document.location = "admin_rescomments.php";
}
if(value=="collmtd"){
document.location = "admin_collmethod.php";
}
if(value=="tech"){
document.location = "admin_tech.php";
}
if(value=="appearance"){
document.location = "admin_appearance.php";
}
if(value=="drugs"){
document.location = "admin_drugs.php";
}
if(value=="study"){
document.location = "admin_study.php";
}
if(value=="delsample"){
document.location = "sample_deletion.php";
}
if(value=="tests"){
document.location = "admin_tests.php";
}
if(value=="storage"){
document.location = "specimen_storage.php";
}

else if(value=="options"){
document.location = "results_options_select.php";
}
else if(value=="dstn"){
document.location = "admin_dst_methods.php";
}
else if(value=="rej"){
document.location = "rej_reason.php";
}
}

function redirecttosamples(value){
if(value=="re"){
document.location = "samples_review.php";
}
if(value=="srf"){
document.location = "report_srf.php";
}
if(value=="rejected"){
document.location = "rejectedsamples_select.php";
}
if(value=="pat"){
document.location = "patient_registration.php";
}

if(value=="ed"){
document.location = "samples_edit.php";
}
if(value=="accessioned"){
document.location = "accessioned_info.php";
}
if(value=="profile"){
document.location = "profiles.php";
}
else if(value=="deleted"){
document.location = "deletedsamples_select.php";
}
else if(value=="options"){
document.location = "results_options_select.php";
}

}

function redirecttoresultreview(value){
if(value=="FM"){
document.location = "resultsreview_fm.php";
}

if(value=="questioned"){
document.location = "questionedresults_select.php";
}


if(value=="SL"){
document.location = "resultsreview_solidculture.php";
}

else if(value=="ZN"){
document.location = "resultsreview_zn.php";
}
else if(value=="BC"){
document.location = "resultsreview_bloodculture.php";
}

else if(value=="GENEXPERT"){
document.location = "resultsreview_genexpert.php";
}
else if(value=="ID"){
document.location = "resultsreview_identification.php";
}


else if(value=="LC"){
document.location = "resultsreview_liquidculture.php";
}
else if(value=="others"){
document.location = "resultsreview_others.php";
}
else if(value=="dst1"){
document.location = "resultsreview_dst1.php";
}
else if(value=="dst2"){
document.location = "resultsreview_dst2.php";
}
else if(value=="SC"){
document.location = "resultsreview_solidculture.php";
}
else if(value=="ID"){
document.location = "resultsreview_identification.php";
}
}

function redirecttoresultsentry(value){
if(value=="FM"){
document.location = "resultsentry_fm.php";
}else
if(value=="dst1"){
document.location = "resultsentry_dst1.php";
}
if(value=="dst2"){
document.location = "resultsentry_dst2.php";
}
else if(value=="ZN"){
document.location = "resultsentry_zn.php";
}

else if(value=="GENEXPERT"){
document.location = "resultsentry_genexpert.php";
}

else if(value=="LC"){
document.location = "resultsentry_liquidculture.php";
}
else if(value=="BC"){
document.location = "resultsentry_bloodculture.php";
}
else if(value=="others"){
document.location = "resultsentry_others.php";
}
else if(value=="SC"){
document.location = "resultsentry_solidculture.php";
}

else if(value=="LC"){
document.location = "resultsentry_liquidculture.php";
}
else if(value=="ID"){
document.location = "resultsentry_identification.php";
}
}

function profiles_showPatientprofile(str){
if (str.length==0)
  { 
  document.getElementById("livesearch").innerHTML="";
  document.getElementById("livesearch").style.border="0px";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
xmlhttp.open("GET","../main/ajax_get_profiles_patients.php?q="+str,true);
xmlhttp.send();
}

function showRejectedPatients(str){
if (str.length==0)
  { 
  document.getElementById("livesearch").innerHTML="";
  document.getElementById("livesearch").style.border="0px";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
xmlhttp.open("GET","../main/ajax_get_rejected_patients.php?q="+str,true);
xmlhttp.send();
}

function showRegisteredPatients(str){
if (str.length==0)
  { 
  document.getElementById("livesearch").innerHTML="";
  document.getElementById("livesearch").style.border="0px";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
xmlhttp.open("GET","../main/ajax_get_registered_patients.php?q="+str,true);
xmlhttp.send();
}

function validateformfindsample() {
if (document.formfindsample.findlabno.value.length < 1) {
alert("LAB No can not be Empty.");
return false;
}
}

//Function To Display Popup
function div_show() {
document.getElementById('popupdiv').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('popupdiv').style.display = "none";
}

function reloadRequestors(){
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
xmlhttp.onreadystatechange=function(){
if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("requestorsearch").innerHTML=xmlhttp.responseText;
    }
}  
    xmlhttp.open("GET","../main/ajax_reload_requestors.php",true);
	xmlhttp.send();
}