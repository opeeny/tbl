
function validateformfindsample(){
	if(document.formfindsample.findlabno.value.length < 1){
		alert('LAB No can not be Empty');
	}
 return false;   
}

function reloadRequestors(){
	
	 if(window.XMLHttpRequest){
		 // code for IE7+, Firefox, Chrome, Opera, Safari
		 xmlhttp=new XMLHttpRequest;
	 }else {
		 // code for IE6, IE5
		 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	 }
	 xmlhttp.onreadystatechange=function(){
		 if(xmlhttp.readyState==4 && xmlhttp.status==200){
			 document.getElementById("requestorsearch").innerHTML=xmlhttp.responseText;
		 }
	 }
	 xmlhttp.open("GET", "../main/ajax_reload_requestors.php", true);
	 xmlhttp.send();
}

function showRegisteredPatients(str){
	//alert('hello check on registered');
	if(str.length==0){
		document.getElementById("livesearch").innerHTML = "*Do Ultimate Search* or *Register a new Patient*";
		document.getElementById("livesearch").style.border="0px";
		return;
	}
	if(window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}else {
	//code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function() {
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
			document.getElementById("livesearch").style.border="5px solid #A5ACB2";
		}
	}
	xmlhttp.open("GET", "../main/ajax_get_registered_patients.php?q="+str, true);
	xmlhttp.send();
}
$(function leave() {
	$('#example-1-form').areYouSure();
});

