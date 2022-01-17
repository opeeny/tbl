var gAutoPrint = true; // Tells whether to automatically call the print function

function printSpecial(reporttype,studycode,labno)
{ 
if (document.getElementById != null)
{
var html = "<HTML>\n<HEAD>\n<title>"+studycode+"-"+labno+" - TBLIS Results Report</title>\n<style>@media print{@page { size: A4; margin: 10mm;} html, body {width: 1024px;} body {margin: 0 auto;} table{width:100%;} div#format-print{font-family:Arial Narrow,Arial,sans-serif; font-size:0.7em; color:;} td{font-family:Arial Narrow,Arial,sans-serif; font-size:0.7em;color:;}.table th, .table td { border-top: none !important; }}</style>";

if (document.getElementsByTagName != null)
{
var headTags = document.getElementsByTagName("head");
if (headTags.length > 0)
html += headTags[0].innerHTML;
}

html += "\n</HEAD>\n<BODY align=''>\n<div id='content'>";

html += "<div id='' style='background-color:white; padding-left:5px; padding-left:5px;'><center><b>Uganda-CWRU Research Collaboration Mycobacteriology Laboratory at the Joint Clinical Research Centre, Kampala, Uganda<br><table width='100%'><tr valign='bottom'><td align='right'><b>&emsp;&emsp;"+reporttype+" LABORATORY RESULTS REPORT</b></td><td align='right'><b>LAB No: "+studycode+"-"+labno+"&emsp;&emsp;</b></td></tr></table><hr></center>";

var printReadyElem = document.getElementById("printReady");

if (printReadyElem != null)
{
html += printReadyElem.innerHTML;
}
else
{
alert("Could not find the printReady function");
return;
}

html += "\n<img src='../images/footer-comments.gif'></div></BODY>\n</HTML>";

var printWin = window.open("","printSpecial");
printWin.document.open();
printWin.document.write(html);
printWin.document.close();
if (gAutoPrint){
printWin.print();
printWin.onfocus=function(){ printWin.close();}}
}
else
{
alert("The print ready feature is only available if you are using an browser. Please update your browswer.");
}
}