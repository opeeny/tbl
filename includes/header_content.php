<title><?php echo $title; ?></title>
<link rel="icon" href="../images/favicon.ico">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="TBLIS is a state-of-the-art database system that is customised for Tuberculosis laboratories to handle input, analysis, reporting and security of data for patients, specimen and test results">
<meta name="author" content="Landsat ICT Solutions Ltd | www.licts.co.ug">
<meta http-equiv="refresh" content="1100;URL=logout.php"> <?php //this code will redirect the user to the logout script after 10 minutes of inactivity ?>
<script src="../scripts/jquery-1.7.2.min.js"></script>
<script src="../scripts/jquery.min.js"></script>
<link rel="stylesheet" href="../scripts/custom_style.css">
<script type="text/javascript" src="../scripts/functions.js"></script>
<script src="../jquery/jquery_ui.js"></script>
<script src="../jquery/jquery.are-you-sure.js"></script>
<script src="../jquery/ays-beforeunload-shim.js"></script>
<!-- calendar-->
<link href="../scripts/jscal2.css" rel="stylesheet" media="screen">
<script src="../scripts/jscal2.js"></script>
<script src="../scripts/lang/en.js"></script>
<script type="text/javascript" src="../scripts/datepicker.js"></script>
<link href="../scripts/datepicker.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="../scripts/print_resultsreport.js"></script>

<script>
function validateForm() {
	
	 var x = document.forms["regform"]["study_code"].value;
    if (x == "") {
        alert("Study Code Cannot be empty");
        return false;
    }
	var x = document.forms["regform"]["specimenh_type"].value;
    if (x == "") {
        alert("Specimen Type Cannot be empty");
        return false;
    }
	var x = document.forms["regform"]["visit_interval"].value;
    if (x == "") {
        alert("Visit Interval Cannot be empty");
        return false;
    }
	 var x = document.forms["regform"]["request_date"].value;
    if (x == "") {
        alert("Sample Request Date Cannot be empty");
        return false;
    }
	var x = document.forms["regform"]["collection_time"].value;
    if (x == "") {
        alert("Sample Collection Time Cannot be empty");
        return false;
    }
	var x = document.forms["regform"]["collection_date"].value;
    if (x == "") {
        alert("Sample Collection Date Cannot be empty");
        return false;
    }
    var y = document.forms["regform"]["recieved_date"].value;
    if (y == "") {
        alert("Sample Recieved Date Cannot be empty");
        return false;
    }
	var x = document.forms["regform"]["recieved_time"].value;
    if (x == "") {
        alert("Sample Recieved Time Cannot be empty");
        return false;
    }
	
	var t = document.forms["regform"]["process_date"].value;
    if (t == "") {
        alert("Process Date Cannot be empty");
        return false;
    }
	if(t<y){
	alert("Process Date Greater than or Equal to Received Date");
        return false;	
	}
	
	var x = document.forms["regform"]["technologist"].value;
    if (x == "") {
        alert("Sample Receiving Technologist Cannot be empty");
        return false;
    }
	var x = document.forms["regform"]["freezer"].value;
    if (x == "") {
        alert("Select Corressponding freezer ");
        return false;
    }
	var x = document.forms["regform"]["rack"].value;
    if (x == "") {
        alert("Select Corressponding Racker ");
        return false;
    }
}
</script>
<!-----TIME PICKER BY VINCENT ON 20 MAY 17----->
<link href="../timepicker/jquery.timeentry.css" rel="stylesheet">
<!--<script type="text/javascript" src="jquery.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<script src="../timepicker/jquery.plugin.js"></script>
<script src="../timepicker/jquery.timeentry.js"></script>
<script>
$(function () {
	$('.defaultEntry').timeEntry();
});
</script>
<!----------------------------->




    