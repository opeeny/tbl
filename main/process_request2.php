<?php

if(isset($_POST["freezer"])){
$freezer = $_POST["freezer"];

if($freezer !== ''){
	
		echo "<div class='col-sm-2'>";
        echo "<select class='form-control freezer' name='rack' REQUIRED>";
       include("../includes/dbconfig.php");
			$sql="SELECT distinct rack FROM storage_records where freezer='$freezer'";
			$freezers=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection ));
echo "<option value='select'>Select Racker</option>";
			while ($freezer = mysqli_fetch_array($freezers,MYSQLI_ASSOC)) {
				
				$rack = $freezer['rack'];
				
				echo "<option value='$rack ' style='background-color:#CCCCCC;'>$rack </option>";	
						
        }
		echo "</select>
		</div>";
        
}
}
if(isset($_POST["freezer"])){
$freezer = $_POST["freezer"];

if($freezer !== ''){
      
		echo "<div class='col-sm-2'>";
        echo "<select class='form-control' name='box' REQUIRED>";
       include("../includes/dbconfig.php");
			$sql2="SELECT distinct boxlabel FROM storage_records where freezer='$freezer'";
			$boxs=mysqli_query($dbconnection,$sql2) or die("ERROR : " . mysqli_error($dbconnection ));
echo "<option value=''>Box No</option>";
			while ($boxnof = mysqli_fetch_array($boxs,MYSQLI_ASSOC)) {
				
				$boxlabel = $boxnof['boxlabel'];
				
				echo "<option value='$boxlabel' style='background-color:#CCCCCC;'> $boxlabel </option>";	
						
        }
		echo "</select>";
		
        
    }
}echo "</div";

if(isset($_POST["freezer"])){
$freezer = $_POST["freezer"];

if($freezer !== ''){
       echo "<div class='col-sm-1'>";
        echo "<label> </label>
		
		</div>";
		echo "<div class='col-sm-2'>";
        echo "<select class='form-control' name='pos2' REQUIRED>";
       
       include("../includes/dbconfig.php");
			$sql3="SELECT distinct boxposition FROM storage_records where freezer='$freezer' AND status=''";
			$boxss=mysqli_query($dbconnection,$sql3) or die("ERROR : " . mysqli_error($dbconnection ));
echo "<option value=''>Pos from</option>";
			while ($boxnofs = mysqli_fetch_array($boxss,MYSQLI_ASSOC)) {
				
				$boxpos = $boxnofs['boxposition'];
				
				echo "<option value='$boxpos' style='background-color:#CCCCCC;'> $boxpos </option>";	
						
        }
		echo "</select>";
		echo "</div";
        
    }
}


if(isset($_POST["freezer"])){
$freezer = $_POST["freezer"];

if($freezer !== ''){
       echo "<div class='col-sm-1'>";
        echo "<label> </label>
		
		</div>";
		echo "<div class='col-sm-2'>";
        echo "<select class='form-control' name='pos2' REQUIRED>";
       
       include("../includes/dbconfig.php");
			$sql3="SELECT distinct boxposition FROM storage_records where freezer='$freezer' AND status=''";
			$boxss=mysqli_query($dbconnection,$sql3) or die("ERROR : " . mysqli_error($dbconnection ));
echo "<option value=''>Pos To</option>";
			while ($boxnofs = mysqli_fetch_array($boxss,MYSQLI_ASSOC)) {
				
				$boxpos = $boxnofs['boxposition'];
				
				echo "<option value='$boxpos' style='background-color:#CCCCCC;'>Box Pos # $boxpos </option>";	
						
        }
		echo "</select>";
		echo "</div";
        
    }
}

?>