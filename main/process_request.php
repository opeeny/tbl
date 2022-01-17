<?php
if(isset($_POST["freezer"])){
$freezer = $_POST["freezer"];

if($freezer !==''){
       
		echo "<div class='col-sm-2'>";
        echo "<select class='form-control' name='chest' REQUIRED>";
       
       include("../includes/dbconfig.php");
			$sql6="SELECT distinct chest FROM storage_records 
			where freezer='$freezer' AND status=''";
			$chests=mysqli_query($dbconnection,$sql6) or die("ERROR : " . mysqli_error($dbconnection ));
echo "<option value=''>Select Compartment</option>";
			while ($chst = mysqli_fetch_array($chests,MYSQLI_ASSOC)) {
				
				$comp = $chst['chest'];
				
				echo "<option value='$comp' style='background-color:#CCCCCC;'>Compart # $comp</option>";	
						
        }
		echo "</select>";
		echo "</div";
        
    }
}
if(isset($_POST["freezer"])){
$freezer = $_POST["freezer"];

if($freezer !== ''){
       
		echo "<div class='col-sm-2'>";
        echo "<select class='form-control' name='drawer' REQUIRED> ";
       
       include("../includes/dbconfig.php");
			$sql5="SELECT distinct drawer FROM storage_records 
			where freezer='$freezer' AND status=''";
			$drawers=mysqli_query($dbconnection,$sql5) or die("ERROR : " . mysqli_error($dbconnection ));
echo "<option value=''>Select Drawer</option>";
			while ($drawer = mysqli_fetch_array($drawers,MYSQLI_ASSOC)) {
				
				$draw = $drawer['drawer'];
				
				echo "<option value='$draw' style='background-color:#CCCCCC;'>Drawer # $draw</option>";	
						
        }
		echo "</select>";
		echo "</div";
        
    }
}
if(isset($_POST["freezer"])){
$freezer = $_POST["freezer"];

if($freezer !== ''){
	echo "<div class='col-sm-1'>";
        echo "<label>Racker : </label>
		
		</div>";
		echo "<div class='col-sm-2'>";
        echo "<select class='form-control freezer' name='rack' REQUIRED>";
       include("../includes/dbconfig.php");
			$sql="SELECT distinct rack FROM storage_records where freezer='$freezer'";
			$freezers=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection ));
//echo "<option value='select'>Select Racker</option>";
			while ($freezer = mysqli_fetch_array($freezers,MYSQLI_ASSOC)) {
				
				$rack = $freezer['rack'];
				
				echo "<option value='$rack ' style='background-color:#CCCCCC;'>Racker # $rack </option>";	
						
        }
		echo "</select>
		</div>";
        
}
}


if(isset($_POST["freezer"])){
$freezer = $_POST["freezer"];

if($freezer !== ''){
		echo "<div class='col-sm-2'>";
        echo "<select class='form-control' name='boxlabel' REQUIRED>";
       include("../includes/dbconfig.php");
			$sql2="SELECT distinct boxlabel FROM storage_records where freezer='$freezer'";
			$boxs=mysqli_query($dbconnection,$sql2) or die("ERROR : " . mysqli_error($dbconnection ));
echo "<option value=''>Select Box Label</option>";
			while ($boxnof = mysqli_fetch_array($boxs,MYSQLI_ASSOC)) {
				
				$boxlabel = $boxnof['boxlabel'];
				
				echo "<option value='$boxlabel' style='background-color:#CCCCCC;'>Box Label # $boxlabel </option>";	
						
        }
		echo "</select>";
		
      	echo "</div";  
    }
}

if(isset($_POST["freezer"])){
$freezer = $_POST["freezer"];

if($freezer !== ''){
     
		echo "<div class='col-sm-2'>";
        echo "<select class='form-control' name='boxposition' REQUIRED>";
       
       include("../includes/dbconfig.php");
			$sql3="SELECT distinct boxposition FROM storage_records 
			where freezer='$freezer' AND status=''";
			$boxss=mysqli_query($dbconnection,$sql3) or die("ERROR : " . mysqli_error($dbconnection ));
echo "<option value=''>Select Box Pos</option>";
			while ($boxnofs = mysqli_fetch_array($boxss,MYSQLI_ASSOC)) {
				
				$boxpos = $boxnofs['boxposition'];
				
				echo "<option value='$boxpos' style='background-color:#CCCCCC;'>Box Pos # $boxpos </option>";	
						
        }
		echo "</select>";
		echo "</div";
        
    }
}


?>