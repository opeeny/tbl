<?php
//Selection of storage
	if(strpos($storage, 'storage') == true){
	mysqli_query($dbconnection,"UPDATE samples SET storage='1' WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	}
	else if(strpos($storage, 'storage') == false){
	mysqli_query($dbconnection,"UPDATE samples SET storage='0' WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	}

//Selection of storage
/*	if(strpos($examination, 'storage') !== false){
	$checkpresence=mysqli_query($dbconnection,"SELECT * FROM storage_records WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	@$count=mysqli_num_rows($checkpresence);
	if($count==0){
	mysqli_query($dbconnection,"UPDATE samples SET storage='1' WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	mysqli_query($dbconnection,"INSERT INTO storage_records(labno) VALUES($labno)") or die("ERROR : " . mysqli_error($dbconnection));
	}}
	else if(strpos($examination, 'storage') == false){
	$checkpresence=mysqli_query($dbconnection,"SELECT * FROM storage_records WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	@$count=mysqli_num_rows($checkpresence);
	if($count>0){
	mysqli_query($dbconnection,"UPDATE samples SET storage='0' WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	mysqli_query($dbconnection,"DELETE FROM storage_records WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	}}*/
	
	
//Selection of fm
	if(strpos($examination, 'fm') !== false){
	$checkpresence=mysqli_query($dbconnection,"SELECT * FROM results_fm WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	@$count=mysqli_num_rows($checkpresence);
	if($count==0){
	mysqli_query($dbconnection,"INSERT INTO results_fm(labno) VALUES($labno)") or die("ERROR : " . mysqli_error($dbconnection));
	}}
	else if(strpos($examination, 'fm') == false){
	$checkpresence=mysqli_query($dbconnection,"SELECT * FROM results_fm WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	@$count=mysqli_num_rows($checkpresence);
	if($count>0){
	mysqli_query($dbconnection,"DELETE FROM results_fm WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	}}
	
//Selection of zn
	if(strpos($examination, 'zn') !== false){
	$checkpresence=mysqli_query($dbconnection,"SELECT * FROM results_zn WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	@$count=mysqli_num_rows($checkpresence);
	if($count==0){
	mysqli_query($dbconnection,"INSERT INTO results_zn(labno) VALUES($labno)") or die("ERROR : " . mysqli_error($dbconnection));
	}}
	else if(strpos($examination, 'zn') == false){
	$checkpresence=mysqli_query($dbconnection,"SELECT * FROM results_zn WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	@$count=mysqli_num_rows($checkpresence);
	if($count>0){
	mysqli_query($dbconnection,"DELETE FROM results_zn WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	}}
	
	//Selection of genexpert
	if(strpos($examination, 'genexpert') !== false){
	$checkpresence=mysqli_query($dbconnection,"SELECT * FROM results_genexpert WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	@$count=mysqli_num_rows($checkpresence);
	if($count==0){
	mysqli_query($dbconnection,"INSERT INTO results_genexpert(labno) VALUES($labno)") or die("ERROR : " . mysqli_error($dbconnection));
	}}
	else if(strpos($examination, 'genexpert') == false){
	$checkpresence=mysqli_query($dbconnection,"SELECT * FROM results_genexpert WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	@$count=mysqli_num_rows($checkpresence);
	if($count>0){
	mysqli_query($dbconnection,"DELETE FROM results_genexpert WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	}}
	
	//Selection of identification
	/*if(strpos($examination, 'identification') !== false){
	$checkpresence=mysqli_query($dbconnection,"SELECT * FROM results_identification WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	@$count=mysqli_num_rows($checkpresence);
	if($count==0){
	mysqli_query($dbconnection,"INSERT INTO results_identification(labno) VALUES($labno)") or die("ERROR : " . mysqli_error($dbconnection));
	}}
	else if(strpos($examination, 'identification') == false){
	$checkpresence=mysqli_query($dbconnection,"SELECT * FROM results_identification WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	@$count=mysqli_num_rows($checkpresence);
	if($count>0){
	mysqli_query($dbconnection,"DELETE FROM results_identification WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	}}*/
	
	//Selection of dst1
	if(strpos($examination, 'dst1') !== false){
	$checkpresence=mysqli_query($dbconnection,"SELECT * FROM results_dst1 WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	@$count=mysqli_num_rows($checkpresence);
	if($count==0){
	mysqli_query($dbconnection,"INSERT INTO results_dst1(labno) VALUES($labno)") or die("ERROR : " . mysqli_error($dbconnection));
	}}
	else if(strpos($examination, 'dst1') == false){
	$checkpresence=mysqli_query($dbconnection,"SELECT * FROM results_dst1 WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	@$count=mysqli_num_rows($checkpresence);
	if($count>0){
	mysqli_query($dbconnection,"DELETE FROM results_dst1 WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	}}
	
	//Selection of dst2
	if(strpos($examination, 'dst2') !== false){
	$checkpresence=mysqli_query($dbconnection,"SELECT * FROM results_dst2 WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	@$count=mysqli_num_rows($checkpresence);
	if($count==0){
	mysqli_query($dbconnection,"INSERT INTO results_dst2(labno) VALUES($labno)") or die("ERROR : " . mysqli_error($dbconnection));
	}}
	else if(strpos($examination, 'dst2') == false){
	$checkpresence=mysqli_query($dbconnection,"SELECT * FROM results_dst2 WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	@$count=mysqli_num_rows($checkpresence);
	if($count>0){
	mysqli_query($dbconnection,"DELETE FROM results_dst2 WHERE labno=$labno") or die("ERROR : " . mysqli_error($dbconnection));
	}}
	
	//Selection of other examinations
	$select_othertest="SELECT * FROM option_examination_others";
	$othertests=mysqli_query($dbconnection,$select_othertest) or die("ERROR : " . mysqli_error($dbconnection));

	while ($othertest = mysqli_fetch_array($othertests,MYSQLI_ASSOC)){
	$othertestid=$othertest['id'];
	$othertestcode=$othertest['code'];
	$othertestname=$othertest['name'];
	
		//For each othertest
		if(strpos($otherexamination, $othertestcode) !== false){
		$checkpresence=mysqli_query($dbconnection,"SELECT * FROM results_others WHERE labno=$labno and test='$othertestcode'") or die("ERROR : " . mysqli_error($dbconnection));
		@$count=mysqli_num_rows($checkpresence);
		if($count==0){
		mysqli_query($dbconnection,"INSERT INTO results_others(labno,test) VALUES($labno,'$othertestcode')") or die("ERROR : " . mysqli_error($dbconnection));
		}}
		else if(strpos($otherexamination, $othertestcode) == false){
		$checkpresence=mysqli_query($dbconnection,"SELECT * FROM results_others WHERE labno=$labno and test='$othertestcode'") or die("ERROR : " . mysqli_error($dbconnection));
		@$count=mysqli_num_rows($checkpresence);
		if($count>0){
		mysqli_query($dbconnection,"DELETE FROM results_others WHERE labno=$labno and test='$othertestcode'") or die("ERROR : " . mysqli_error($dbconnection));
		}}
	}

	//Selection of solid media
	$select_solidmedia="SELECT * FROM option_media WHERE category='Solid Culture'";
	$solidmedias=mysqli_query($dbconnection,$select_solidmedia) or die("ERROR : " . mysqli_error($dbconnection));
	
	//converting selected media into an array for proper search
	$selectedsolidmedia = explode(',', $selectedsolidmedia);
	
	while ($solidmedia = mysqli_fetch_array($solidmedias,MYSQLI_ASSOC)){
	$solidmediaid=$solidmedia['id'];
	$solidmediacode=$solidmedia['code'];
	$solidmedianame=$solidmedia['name'];
	
		//For each solid media
		//if(strpos($selectedsolidmedia, $solidmediacode) !== false){
		if(in_array($solidmediacode, $selectedsolidmedia)){
		$checkpresence=mysqli_query($dbconnection,"SELECT * FROM results_solidculture WHERE labno=$labno and media='$solidmediacode'") or die("ERROR : " . mysqli_error($dbconnection));
		@$count=mysqli_num_rows($checkpresence);
		if($count==0){
		mysqli_query($dbconnection,"INSERT INTO results_solidculture(labno,media) VALUES($labno,'$solidmediacode')") or die("ERROR : " . mysqli_error($dbconnection));
		}}
		//else if(strpos($selectedsolidmedia, $solidmediacode) == false){
		else{
		$checkpresence=mysqli_query($dbconnection,"SELECT * FROM results_solidculture WHERE labno=$labno and media='$solidmediacode'") or die("ERROR : " . mysqli_error($dbconnection));
		@$count=mysqli_num_rows($checkpresence);
		if($count>0){
		mysqli_query($dbconnection,"DELETE FROM results_solidculture WHERE labno=$labno and media='$solidmediacode'") or die("ERROR : " . mysqli_error($dbconnection));
		}}
	}
	
	//Selection of liquid media
	$select_liquidmedia="SELECT * FROM option_media WHERE category='Liquid Culture'";
	$liquidmedias=mysqli_query($dbconnection,$select_liquidmedia) or die("ERROR : " . mysqli_error($dbconnection));

	//converting selected media into an array for proper search
	$selectedliquidmedia = explode(',', $selectedliquidmedia);
	
	while ($liquidmedia = mysqli_fetch_array($liquidmedias,MYSQLI_ASSOC)){
	$liquidmediaid=$liquidmedia['id'];
	$liquidmediacode=$liquidmedia['code'];
	$liquidmedianame=$liquidmedia['name'];
	
		//For each liquid media
		//if(strpos($selectedliquidmedia, $liquidmediacode) !== false){
		if(in_array($liquidmediacode, $selectedliquidmedia)){
		$checkpresence=mysqli_query($dbconnection,"SELECT * FROM results_liquidculture WHERE labno=$labno and media='$liquidmediacode'") or die("ERROR : " . mysqli_error($dbconnection));
		@$count=mysqli_num_rows($checkpresence);
		if($count==0){
		mysqli_query($dbconnection,"INSERT INTO results_liquidculture(labno,media) VALUES($labno,'$liquidmediacode')") or die("ERROR : " . mysqli_error($dbconnection));
		}}
		//else if(strpos($selectedliquidmedia, $liquidmediacode) == false){
		else{
		$checkpresence=mysqli_query($dbconnection,"SELECT * FROM results_liquidculture WHERE labno=$labno and media='$liquidmediacode'") or die("ERROR : " . mysqli_error($dbconnection));
		@$count=mysqli_num_rows($checkpresence);
		if($count>0){
		mysqli_query($dbconnection,"DELETE FROM results_liquidculture WHERE labno=$labno and media='$liquidmediacode'") or die("ERROR : " . mysqli_error($dbconnection));
		}}
	}
	
	//Selection of blood media
	$select_bloodmedia="SELECT * FROM option_media WHERE category='Blood Culture'";
	$bloodmedias=mysqli_query($dbconnection,$select_bloodmedia) or die("ERROR : " . mysqli_error($dbconnection));

	//converting selected media into an array for proper search
	$selectedbloodmedia = explode(',', $selectedbloodmedia);
	
	while ($bloodmedia = mysqli_fetch_array($bloodmedias,MYSQLI_ASSOC)){
	$bloodmediaid=$bloodmedia['id'];
	$bloodmediacode=$bloodmedia['code'];
	$bloodmedianame=$bloodmedia['name'];
	
		//For each blood media
		//if(strpos($selectedbloodmedia, $bloodmediacode) !== false){
		if(in_array($bloodmediacode, $selectedbloodmedia)){
		$checkpresence=mysqli_query($dbconnection,"SELECT * FROM results_bloodculture WHERE labno=$labno and media='$bloodmediacode'") or die("ERROR : " . mysqli_error($dbconnection));
		@$count=mysqli_num_rows($checkpresence);
		if($count==0){
		mysqli_query($dbconnection,"INSERT INTO results_bloodculture(labno,media) VALUES($labno,'$bloodmediacode')") or die("ERROR : " . mysqli_error($dbconnection));
		}}
		//else if(strpos($selectedbloodmedia, $bloodmediacode) == false){
		else{
		$checkpresence=mysqli_query($dbconnection,"SELECT * FROM results_bloodculture WHERE labno=$labno and media='$bloodmediacode'") or die("ERROR : " . mysqli_error($dbconnection));
		@$count=mysqli_num_rows($checkpresence);
		if($count>0){
		mysqli_query($dbconnection,"DELETE FROM results_bloodculture WHERE labno=$labno and media='$bloodmediacode'") or die("ERROR : " . mysqli_error($dbconnection));
		}}
	}
	?>