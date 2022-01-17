<?php echo 'media here';?>
<div class="form-group"> 
		<label class="col-sm-1 control-label label-format label-format">Examination</label>
		<div class="col-sm-5" style="max-height:100px; overflow:auto;"> 
			<?php
			include("../includes/connection.php");
			$sql="SELECT * FROM option_examination WHERE status='Active'";
			$appearances_check=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

			while ($appearance = mysqli_fetch_array($appearances_check,MYSQLI_ASSOC)) {
			$code = $appearance['code'];
			$name = $appearance['name'];

			$resultstable='results_'.$code;//this is results table
			$testcheckpresence=mysqli_query($con,"SELECT * FROM $resultstable WHERE labno=$labno") or die("ERROR : " . mysqli_error($con));
			$testcount=mysqli_num_rows($testcheckpresence);
			?>
			<label class="checkbox-inline"><input type="checkbox" name="examination[]" value="<?php echo $code; ?>"
			<?php if($testcount != 0){echo "checked";} ?> > <?php echo $name; ?></label> &nbsp;&nbsp;
			<!--<?php if(strpos($examination, $code) !== false){echo "checked";} ?> ><?php echo $name; ?></label> &nbsp;&nbsp;-->
			<?php
			}			
			?>

			<?php
			include("../includes/connection.php");
			$sql="SELECT * FROM option_examination_others WHERE status='Active'";
			$othertests=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

			while ($othertest = mysqli_fetch_array($othertests,MYSQLI_ASSOC)) {
			$code = $othertest['code'];
			$name = $othertest['name'];

			$resultstable='results_others';//
			$testcheckpresence=mysqli_query($con,"SELECT * FROM $resultstable WHERE labno=$labno and test='$code'") or die("ERROR : " . mysqli_error($dbconnection));
			$testcount=mysqli_num_rows($testcheckpresence);

			?>
			<label class="checkbox-inline">
			<input type="checkbox" name="otherexamination[]" value="<?php echo $code; ?>"
			<?php if($testcount != 0){echo "checked";} ?> ><?php echo $name; ?></label> &nbsp;&nbsp;
			<!--<?php if(strpos($examination, $code) !== false){echo "checked";} ?> ><?php echo $name; ?></label> &nbsp;&nbsp;-->
			<?php
			}			
			?>
			<?php
			include("../includes/connection.php");
			$sql="SELECT * FROM samples WHERE labno='$labno'";
			$storages=mysqli_query($con,$sql) or die("ERROR : " . mysqli_error($con));

			while ($storage = mysqli_fetch_array($storages,MYSQLI_ASSOC)) {
			$storageoption = $storage['storage'];

			}
			if($storageoption == 1){
			?>
			<label class='checkbox-inline'><input type="checkbox" name="storage[]" value="storage" 
			<?php if($storageoption == 1){echo "checked";} ?>>Storage</label>

			<?php } ?>
		</div>
		<label  class="col-sm-1 control-label label-format">Media</label>
		<div class="col-sm-5" style="max-height:100px; overflow:auto;"> 
		<?php
		include("../includes/connection.php");
		$solidsql="SELECT * FROM option_media WHERE status='Active' and category='Solid Culture'";
		$solidmedias=mysqli_query($con,$solidsql) or die("ERROR : " . mysqli_error($con));

		while ($solidmedia = mysqli_fetch_array($solidmedias,MYSQLI_ASSOC)) {
		$code = $solidmedia['code'];
		$name = $solidmedia['name'];

		$resultstable='results_solidculture';
		$testcheckpresence=mysqli_query($con,"SELECT * FROM $resultstable WHERE labno=$labno AND media='$code'") or die("ERROR : " . mysqli_error($con));
		$testcount=mysqli_num_rows($testcheckpresence);

		?>

		<label class="checkbox-inline" title="Media for Solid Culture"><input type="checkbox" name="solidmedia[]" value="<?php echo $code; ?>"
		<?php if($testcount != 0){echo "checked";} ?> ><?php echo $name; ?></label> &nbsp;&nbsp;
		<!--<?php if(strpos($media, $code) !== false){echo "checked";} ?> ><?php echo $name; ?></label> &nbsp;&nbsp;-->
		<?php
		}
		echo " || ";			
		?>

		<?php
		include("../includes/connection.php");
		$liquidsql="SELECT * FROM option_media WHERE status='Active' and category='Liquid Culture'";
		$liquidmedias=mysqli_query($con,$liquidsql) or die("ERROR : " . mysqli_error($con));

		while ($liquidmedia = mysqli_fetch_array($liquidmedias,MYSQLI_ASSOC)) {
		$code = $liquidmedia['code'];
		$name = $liquidmedia['name'];

		$resultstable='results_liquidculture';
		$testcheckpresence=mysqli_query($con,"SELECT * FROM $resultstable WHERE labno=$labno AND media='$code'") or die("ERROR : " . mysqli_error($con));
		$testcount=mysqli_num_rows($testcheckpresence);

		?>

		<label class="checkbox-inline" title="Media for Liquid Culture"><input type="checkbox" name="liquidmedia[]" value="<?php echo $code; ?>"
		<?php if($testcount != 0){echo "checked";} ?> ><?php echo $name; ?></label> &nbsp;&nbsp
		<!--<?php if(strpos($media, $code) !== false){echo "checked";} ?> ><?php echo $name; ?></label> &nbsp;&nbsp;-->
		<?php
		}
		echo " || ";			
		?>

		<?php
		include("../includes/connection.php");
		$bloodsql="SELECT * FROM option_media WHERE status='Active' and category='Blood Culture'";
		$bloodmedias=mysqli_query($con,$bloodsql) or die("ERROR : " . mysqli_error($con));

		while ($bloodmedia = mysqli_fetch_array($bloodmedias,MYSQLI_ASSOC)) {
		$code = $bloodmedia['code'];
		$name = $bloodmedia['name'];

		$resultstable='results_bloodculture';
		$testcheckpresence=mysqli_query($con,"SELECT * FROM $resultstable WHERE labno=$labno AND media='$code'") or die("ERROR : " . mysqli_error($con));
		$testcount=mysqli_num_rows($testcheckpresence);

		?>

		<label class="checkbox-inline" title="Media for Blood Culture"><input type="checkbox" name="bloodmedia[]" value="<?php echo $code; ?>"
		<?php if($testcount != 0){echo "checked";} ?> ><?php echo $name; ?></label> &nbsp;&nbsp;
		<!--<?php if(strpos($media, $code) !== false){echo "checked";} ?> ><?php echo $name; ?></label> &nbsp;&nbsp;-->
		<?php
		}			
		?>
		</div>
	  
    </div>