<input type="hidden" name="identific_test" id="" value="YES">
	<br>
	<br>
	  <label class="col-sm-12 control-label label-format" >IDENTIFICATION TEST:</label>


<div class="form-group">
   <input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
   <label class="col-sm-4 control-label label-format" >Method:</label>
   <?php if(isset($_GET['idqnd'])){
	$idqnd=$_GET['idqnd']; 
	
	?>
<input name="idqned" type="hidden" value="<?php echo $idqnd;?>"/>
<?php }  ?>
   <div class="col-sm-8">
   <select name="idmethod"  class="form-control">
			<option value="<?php echo $idmethod; ?>"><?php echo $idmethod; ?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM identification_method";
			$methods=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($method = mysqli_fetch_array($methods,MYSQLI_ASSOC)) {
				$idmethod = $method['name'];
				
				
			echo "<option value='$idmethod' style='background-color:#CCCCCC;'>$idmethod</option>";	
			}			
			?>
	</select>
   
   </div>
</div>
<div class="form-group">
   <input name="reslabno" type="hidden" value="<?php echo $labno;?>"/>
   <label class="col-sm-4 control-label label-format" >Ident Result:</label>
  <div class="col-sm-8">
  <select name="idresult"  class="form-control">
			<option value="<?php echo $idresult; ?>"><?php echo $idresult; ?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM resultsoptions_identification ORDER BY options";
			$idresults=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($idresult = mysqli_fetch_array($idresults,MYSQLI_ASSOC)) {
				$idresultoption = $idresult['options'];
				$idresultcode= $idresult ['code'];
				
			echo "<option value='$idresultoption' style='background-color:#CCCCCC;'>$idresultoption</option>";	
			}			
			?>
	</select>
  
   </div>
</div>

<div class="form-group">	
<label class="col-sm-4 control-label label-format">Date:</label>
      <div class="col-sm-8"> 
	  <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input19" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="<?php if($idresdate=='0000-00-00'){echo '';} else echo @date('d-m-Y',strtotime($idresdate));?>" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input19" value="<?php if($idresdate=='0000-00-00'){echo '';} else echo @date('Y-m-d',strtotime($idresdate));?>" name="idresdate" />
				</div>
				</div>
<div class="form-group">
<label class="col-sm-4 control-label label-format">Comment:</label>
<div class="col-sm-8">
<select name="idrescomment" class="form-control">
			<option value="<?php echo $idcomment ?>"><?php echo $idcomment ?></option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM comments ORDER BY comment";
			$comments=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($comment = mysqli_fetch_array($comments,MYSQLI_ASSOC)) {
				$commentname = $comment['comment'];
			echo "<option value='$commentname' style='background-color:#CCCCCC;'>$commentname</option>";	
			}			
			?>
	</select>
	</div>
	</div>
	<div class="form-group">
<label class="col-sm-4 control-label label-format">Tech:</label>
<div class="col-sm-8">
	<select name="idrestech" class="form-control">
		<option value="<?php echo $idrestech ?>"><?php echo $idrestech ?></option>	
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM techinitials where status='Active' ORDER BY initial";
			$techs=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection));

			while ($tech = mysqli_fetch_array($techs,MYSQLI_ASSOC)) {
				$techinitial = $tech['initial'];
				$techname = $tech['name'];
			echo "<option value='$techinitial' style='background-color:#CCCCCC;'>$techinitial - $techname</option>";	
			}			
			?>
	</select>
	</div>
	</div>

