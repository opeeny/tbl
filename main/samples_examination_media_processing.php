<?php
	//SELECTION OF storage
	if(strpos($examination, 'storage') !== false) {
		//update storage column to 1
		mysqli_query($con, "UPDATE samples SET storage=1 WHERE labno=$labno") or die("Error ".mysqli_error($con));
		//echo "It would work";
	}else if(strpos($examination, 'storage') == false){
		mysqli_query($con, "UPDATE samples SET storage=0 WHERE labno=$labno") or die("Error ".mysqli_error($con));
	}
	
	
/*Selection of fm*/
//select all from resultsfm table
/*if rows in the results table are zero, then add or insert labno or id
//else if occurence of the test or fm is not found in examination variable, then check rows
//if the rows are greater than zero, then delete that record since its their without our knowledge*/
	
if(strpos($examination, 'fm')!==false){
	$fmt=mysqli_query($con, "SELECT * FROM results_fm WHERE labno=$labno") or die("Error ".mysqli_error($con));
	$count=mysqli_num_rows($fmt);
	if($count==0){
			//first time insertion and update as well
	mysqli_query($con, "INSERT INTO results_fm(labno) VALUES($labno)") or die("Error ".mysqli_error($con));
	}	
}else if(strpos($examination, 'fm') == false){
	$fmf=mysqli_query($con, "SELECT * FROM results_fm WHERE labno=$labno") or die("Error ".mysqli_error($con));
	$count=mysqli_num_rows($fmf);
	if($count>0){
	mysqli_query($con, "DELETE FROM results_fm WHERE labno=$labno") or die("Error ".mysqli_error($con));
	}
}
//Selection of Zn
if(strpos($examination, 'zn') !== false){
	$znt=mysqli_query($con, "SELECT * FROM results_zn WHERE labno=$labno") or die("Error ".mysqli_error($con));
	$count=mysqli_num_rows($znt);
	if($count==0){
	//add labno
	mysqli_query($con, "INSERT INTO results_zn(labno) VALUES('$labno')") or die("Error ".mysqli_query($con));
	}
	
}else if(strpos($examination, 'zn')== false){
	$znf=mysqli_query($con, "SELECT * FROM results_zn WHERE labno=$labno") or die("Error: ".mysqli_error($con));
	$count=mysqli_num_rows($znf);
	if($count>0){
	mysqli_query($con, "DELETE FROM results_zn WHERE labno=$labno") or die("Error ".mysqli_error($con));
	}
}
//selection of genexpert
if(strpos($examination, 'genexpert')!== false){
	//query results_genexpert table
	$genexpert=mysqli_query($con, "SELECT * FROM results_genexpert WHERE labno=$labno") or die("Error ".mysqli_query($con));
	//check rows
	$count=mysqli_num_rows($genexpert);
	if($count==0){
		//add this add id or labno
		mysqli_query($con, "INSERT INTO results_genexpert(labno) VALUES($labno)") or die("Error ".mysqli_error($con));
	}
}else if(strpos($examination, "genexpert")==false){
	//query table
	$genexpertf=mysqli_query($con,  "SELECT * FROM results_genexpert WHERE labno=$labno") or die("Error ".mysqli_error($con));
	$count=mysqli_num_rows($genexpertf);
	if($count>0){
		//delete that record if it already exists
		mysqli_query($con, "DELETE FROM results_genexpert WHERE labno=$labno")or die("Error:".mysqli_error($con));
	}
}
//selection of genexpert_ultra
if(strpos($examination, 'genexpertultra')!== false){
	//query results_genexpert_ultra table
	$gene_ultra=mysqli_query($con, "SELECT * FROM results_genexpert_ultra WHERE labno=$labno") or die("Error ".mysqli_query($con));
	//check rows
	$count=mysqli_num_rows($gene_ultra);
	if($count==0){
		//add this add id or labno
		mysqli_query($con, "INSERT INTO results_genexpert_ultra(labno,status) VALUES($labno,'Active')") or die("Error ".mysqli_error($con));
	}
}else if(strpos($examination, "genexpertultra")==false){
	//query table
	$gene_ultraf=mysqli_query($con,  "SELECT * FROM results_genexpert_ultra WHERE labno=$labno") or die("Error ".mysqli_error($con));
	$count=mysqli_num_rows($gene_ultraf);
	if($count>0){
		//delete that record if it already exists
		mysqli_query($con, "DELETE FROM results_genexpert_ultra WHERE labno=$labno")or die("Error:".mysqli_error($con));
	}
}
//selection identification
if(strpos($examination, 'identification') !== false){
	//query table
	$identy=mysqli_query($con, "SELECT * FROM results_identification") or die("Error ".mysqli_query($con));
	$count=mysqli_num_rows($identy);
	if($count==0){
		//add labno
		mysqli_query($con, "INSERT INTO results_identification(labno) VALUES($labno)") or die("Error ".mysqli_error($con));
	}
}else if(strpos($examination, 'identification')==false){
	//query
	$identf=mysqli_query($con, "SELECT * FROM results_identification WHERE labno=$labno") or die("Error ".mysqli_error($con));
	$count=mysqli_num_rows($identf);
	if($count>0){
		//delete 
		mysqli_query($con, "DELETE FROM results_identification WHERE labno=$labno") or die("Error ".mysqli_error($con));
	}
}
//selection of dst1	
if(strpos($examination, 'dst1') !== false){
	//query table
	$dst1=mysqli_query($con, "SELECT * FROM results_dst1") or die("Error ".mysqli_query($con));
	$count=mysqli_num_rows($dst1);
	if($count==0){
		//add labno
		mysqli_query($con, "INSERT INTO results_dst1(labno) VALUES($labno)") or die("Error ".mysqli_error($con));
	}
}else if(strpos($examination, 'dst1')==false){
	//query
	$dst1=mysqli_query($con, "SELECT * FROM results_dst1 WHERE labno=$labno") or die("Error ".mysqli_error($con));
	$count=mysqli_num_rows($dst1);
	if($count>0){
		//delete 
		mysqli_query($con, "DELETE FROM results_dst1 WHERE labno=$labno") or die("Error ".mysqli_error($con));
	}
}
//selection of dst2
if(strpos($examination, 'dst2') !== false){
	//query table
	$dst2=mysqli_query($con, "SELECT * FROM results_dst2") or die("Error ".mysqli_query($con));
	$count=mysqli_num_rows($dst2);
	if($count==0){
		//add labno
		mysqli_query($con, "INSERT INTO results_dst2(labno) VALUES($labno)") or die("Error ".mysqli_error($con));
	}
}else if(strpos($examination, 'dst2')==false){
	//query
	$dst2=mysqli_query($con, "SELECT * FROM results_dst2 WHERE labno=$labno") or die("Error ".mysqli_error($con));
	$count=mysqli_num_rows($dst2);
	if($count>0){
		//delete 
		mysqli_query($con, "DELETE FROM results_dst2 WHERE labno=$labno") or die("Error ".mysqli_error($con));
	}
}

	//Selection of liquid media
	$select_liquidmedia="SELECT * FROM option_media WHERE category='Liquid Culture'";
	$liquidmedias=mysqli_query($con,$select_liquidmedia) or die("ERROR Liq : " . mysqli_error($con));

	//converting selected media into an array for proper search
	$selectedliquidmedia = explode(',', $selectedliquidmedia);
	
	while ($liquidmedia = mysqli_fetch_array($liquidmedias,MYSQLI_ASSOC)){
		$liquidmediaid=$liquidmedia['id'];
		$liquidmediacode=$liquidmedia['code'];
		$liquidmedianame=$liquidmedia['name'];
		
		//For each liquid media
		//if(strpos($selectedliquidmedia, $liquidmediacode) !== false){
		if(in_array($liquidmediacode, $selectedliquidmedia)){
		$checkpresence=mysqli_query($con,"SELECT * FROM results_liquidculture WHERE labno=$labno and media='$liquidmediacode'") or die("ERROR : " . mysqli_error($con));
		$count=mysqli_num_rows($checkpresence);
		if($count==0){
			echo 'should insert at this point round '.mysqli_query($con);
		mysqli_query($con,"INSERT INTO results_liquidculture(labno,media) VALUES($labno,'$liquidmediacode')") or die("ERROR : " . mysqli_error($con));
		}}
		//else if(strpos($selectedliquidmedia, $liquidmediacode) == false){
		else{
		$checkpresence=mysqli_query($con,"SELECT * FROM results_liquidculture WHERE labno=$labno and media='$liquidmediacode'") or die("ERROR : " . mysqli_error($con));
		$count=mysqli_num_rows($checkpresence);
		if($count>0){
		mysqli_query($con,"DELETE FROM results_liquidculture WHERE labno=$labno and media='$liquidmediacode'") or die("ERROR : " . mysqli_error($con));
		}}
	}
	
	//Selection of solid media
	$select_solidmedia="SELECT * FROM option_media WHERE category='Solid Culture'";
	$solidmedias=mysqli_query($con,$select_solidmedia) or die("ERROR : " . mysqli_error($con));
	
	//converting selected media into an array for proper search to know their indexes since its from db
	$selectedsolidmedia = explode(',', $selectedsolidmedia);
	
	while ($solidmedia = mysqli_fetch_array($solidmedias,MYSQLI_ASSOC)){
	$solidmediaid=$solidmedia['id'];
	$solidmediacode=$solidmedia['code'];
	$solidmedianame=$solidmedia['name'];
	
		//For each solid media
		//if(strpos($selectedsolidmedia, $solidmediacode) !== false){
		if(in_array($solidmediacode, $selectedsolidmedia)){
		$checkpresence=mysqli_query($con,"SELECT * FROM results_solidculture WHERE labno=$labno and media='$solidmediacode'") or die("ERROR : " . mysqli_error($con));
		$count=mysqli_num_rows($checkpresence);
		if($count==0){
			echo 'could be ok'.mysqli_error($con);
			mysqli_query($con,"INSERT INTO results_solidculture(labno,media) VALUES($labno,'$solidmediacode')") or die("ERROR Sl : " . mysqli_error($con));
		}}
		//else if(strpos($selectedsolidmedia, $solidmediacode) == false){
		else{
		$checkpresence=mysqli_query($con,"SELECT * FROM results_solidculture WHERE labno=$labno and media='$solidmediacode'") or die("ERROR : " . mysqli_error($con));
		$count=mysqli_num_rows($checkpresence);
		if($count>0){
		mysqli_query($con,"DELETE FROM results_solidculture WHERE labno=$labno and media='$solidmediacode'") or die("ERROR : " . mysqli_error($con));
		}}
	}
	
	
	//Selection of blood media
	$select_bloodmedia="SELECT * FROM option_media WHERE category='Blood Culture'";
	$bloodmedias=mysqli_query($con,$select_bloodmedia) or die("ERROR : " . mysqli_error($con));

	//converting selected media into an array for proper search
	$selectedbloodmedia = explode(',', $selectedbloodmedia);
	
	while ($bloodmedia = mysqli_fetch_array($bloodmedias,MYSQLI_ASSOC)){
	$bloodmediaid=$bloodmedia['id'];
	$bloodmediacode=$bloodmedia['code'];
	$bloodmedianame=$bloodmedia['name'];
	
		//For each blood media
		//if(strpos($selectedbloodmedia, $bloodmediacode) !== false){
		if(in_array($bloodmediacode, $selectedbloodmedia)){
		$checkpresence=mysqli_query($con,"SELECT * FROM results_bloodculture WHERE labno=$labno and media='$bloodmediacode'") or die("ERROR : " . mysqli_error($con));
		@$count=mysqli_num_rows($checkpresence);
		if($count==0){
		mysqli_query($con,"INSERT INTO results_bloodculture(labno,media) VALUES($labno,'$bloodmediacode')") or die("ERROR Bl : " . mysqli_error($con));
		}}
		//else if(strpos($selectedbloodmedia, $bloodmediacode) == false){
		else{
		$checkpresence=mysqli_query($con,"SELECT * FROM results_bloodculture WHERE labno=$labno and media='$bloodmediacode'") or die("ERROR : " . mysqli_error($con));
		@$count=mysqli_num_rows($checkpresence);
		if($count>0){
		mysqli_query($con,"DELETE FROM results_bloodculture WHERE labno=$labno and media='$bloodmediacode'") or die("ERROR : " . mysqli_error($con));
		}}
	}
	
	
	//selection of other examination
$query_others=mysqli_query($con, "SELECT * FROM option_examination_others") or die("Error ".mysqli_error($con));
while($row=mysqli_fetch_array($query_others)){
	$othertestid=$row['id'];
	$othertestcode=$row['code'];
	$othertestname=$row['name'];
	echo ' Other test @selection option_examination_others '.$othertestcode;//check
	//Now selection for each other test
	if(strpos($other_examination, $othertestcode)!==false){
		$otherq=mysqli_query($con, "SELECT * FROM option_examination_others") or die("Error ".mysqli_error($con));
		$count = mysqli_num_rows($otherq);
		if($count==0){
			//add or insert
			mysqli_query($con, "INSERT INTO results_others(labno, test) VALUES('$labno', '$othertestcode')") or die("Error ".mysqli_error($con));
		}
	}else if(strpos($other_examination, $othertestcode)==false){
			$others=mysqli_query($con, "SELECT * FROM option_examination_others") or die("Error ".mysqli_error($con));
			$count=mysqli_num_rows($others);
			if($count>0){
				mysqli_query($con, "DELETE FROM results_others WHERE labno='$labno' and test='$othertestcode'");
			}
	}
}
 ?>