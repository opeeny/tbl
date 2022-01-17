<?php include('../includes/header_bootstrap_content.php'); 

if(isset($_POST['Submit'])=="Submit")
{
	
	$due_date =$_POST['due_date'];
    $due_date = date('Y-m-d',strtotime($due_date));
	
	//$due_date =$_POST['due_date'];
	//$due_date= date('Y-m-d',$due_date);
	echo $due_date;

    //$new_date = date('Y-m-d',strtotime($due_date));
		//echo "Start Date is $new_date ";
		
		//$due_date= new DateTime($due_date);
//echo $due_date->format('Y/m/d');
		/*
		$pdd =$_POST['pdd'];
		$date=date_create("15/03/2015");
		$date = date('Y/md',strtotime($date));
echo date_format($date,"Y-m-d");
    //$pdd = STR_TO_DATE('$pdd');
	//date('Y-m-d',strtotime($pdd));
		echo "End Date is $pdd";
		*/
}
		?>

<form method="POST" action="">
<div class="control-group"> 
					<label class="control-label" for="inputEmail">Future Date Disabled</label>
					<div class="controls">
					<input type="text"  class="w8em format-d-m-y highlight-days-67 range-high-today" name="due_date" id="sd" maxlength="10" style="border: 3px double #CCCCCC;" required/>
					</div>
			
    </div>
	<div class="control-group"> 
					<label class="control-label" for="inputEmail">Previous Dates Disabled</label>
					<div class="controls">
					<input type="text"  class="w8em format-d-m-y highlight-days-67 range-low-today" name="pdd" id="pdd" maxlength="10" style="border: 3px double #CCCCCC;" required/>
					</div>
			
    </div>
	 <button type="submit" name="Submit" >Save</button>
	</form>
<?php //include('footer.php') ?>