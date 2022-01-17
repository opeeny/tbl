      <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="http://code.jquery.com/jquery.js">    </script>
<script type="text/javascript">
    $(document).ready(function(){
        $("select.freezer").change(function(){
            var selectedfreezer = $(".freezer option:selected").val();
            $.ajax({
                type: "POST",
                url: "process_request.php",
                data: { freezer : selectedfreezer } 
            }).done(function(data){
                $("#response").html(data);
            });
        });
		 });
		 $(document).ready(function(){
		   $("select.freezer2").change(function(){
            var selectedfreezer = $(".freezer option:selected").val();
            $.ajax({
                type: "POST",
                url: "process_request.php",
                data: { freezer2 : selectedfreezer } 
            }).done(function(data){
                $("#response2").html(data);
            });
        });
		
    });
</script>

</head>
<body>
    <form>
        <table>
            <tr>
			<td>
                    <label>Freezer:</label>
					<select name="freezer" class="form-control freezer" required>
		<option value="Select">-- Select Freezer --</option>
			<?php
			include("../includes/dbconfig.php");
			$sql="SELECT * FROM storage_freezers";
			$freezers=mysqli_query($dbconnection,$sql) or die("ERROR : " . mysqli_error($dbconnection ));

			while ($freezer = mysqli_fetch_array($freezers,MYSQLI_ASSOC)) {
				$freezer_id = $freezer['id'];
				$freezer_number = $freezer['number'];
				$freezer_name = $freezer['name'];
				$freezer_make = $freezer['make'];
				$freezer_location = $freezer['location'];
				
				echo "<option value='$freezer_number' style='background-color:#CCCCCC;'>Freezer # $freezer_number (Make:$freezer_make, Location:$freezer_location)</option>";	
			}			
			?>
	</select>
                        <!--<select class="country">
                            <option>Select</option>
                            <option value="1">United States</option>
                            <option value="2">India</option>
                            <option value="3">United Kingdom</option>
                        </select>-->
                </td>
                <td id="response"></td>
				<td id="response2"></td>
            </tr>
        </table>
     </form>
</body> 
</html>