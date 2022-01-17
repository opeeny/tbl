<?php
//If the word or name interval is coming from a form, do the following
	if(isset($_POST['interval'])){
		$interval=$_POST['interval'];
		if($interval==='Month'){
			?>
			<div class="col-sm-5">
				<label class="col-sm-1 control-label label-format">Month Choices</label>
			</div>
			<div class="col-sm-7">
				<select class="form-control" name="monthoption" required>
					<option value="">-Month-</option>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="22">22</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
					<option value="32">32</option>
					<option value="33">33</option>
					<option value="34">34</option>
					<option value="35">35</option>
					<option value="36">36</option>
					<option value="37">37</option>
					<option value="38">38</option>
					<option value="39">39</option>
					<option value="40">40</option>
					<option value="41">41</option>
					<option value="42">42</option>
					<option value="43">43</option>
					<option value="44">44</option>
					<option value="45">45</option>
					<option value="46">46</option>
					<option value="47">47</option>
					<option value="48">48</option>
					<option value="49">49</option>
				</select>
		<?php } 
	}
?></div>
<!-- WEEK --->
<?php
//If the word or name interval is coming from a form, do the following, and if the word set is 'Day'
	if(isset($_POST["interval"])){
		$interval = $_POST["interval"];
		if($interval=='Week'){?>
			<div class="col-sm-5">
				<label  class="control-label label-format">Week Choice-></label>
			</div>
			<div class="col-sm-7">
			   <select class="form-control" name="weekoption" required>
				   <option value="0">00</option>
				   <option value="01">01</option>
				   <option value="02">02</option>
				   <option value="03">03</option>
				   <option value="04">04</option>
				   <option value="05">05</option>
				   <option value="06">06</option>
				   <option value="07">07</option>
				   <option value="08">08</option>
				   <option value="09">09</option>
				   <option value="10">10</option>
				   <option value="11">11</option>
				   <option value="12">12</option>
				   <option value="13">13</option>
				   <option value="14">14</option>
				   <option value="15">15</option>
				   <option value="16">16</option>
					<option value="17">17</option>
				   <option value="18">18</option>
				   <option value="19">19</option>
				   <option value="20">20</option>
				   <option value="22">22</option>
				   <option value="22">22</option>
				   <option value="23">23</option>
					<option value="24">24</option>
				   <option value="25">25</option>
				   <option value="26">26</option>
					<option value="27">27</option>
				   <option value="28">28</option>
				   <option value="29">29</option>
					<option value="30">30</option>
				   <option value="31">31</option>
				   <option value="32">32</option>
					<option value="33">33</option>
				   <option value="34">34</option>
				   <option value="35">35</option>
					<option value="36">36</option>
				   <option value="37">37</option>
				   <option value="38">38</option>
					<option value="39">39</option>
				   <option value="40">40</option>
				   <option value="41">41</option>
					<option value="42">42</option>
				   <option value="43">43</option>
				   <option value="44">44</option>
					<option value="45">45</option>
				   <option value="46">46</option>
				   <option value="47">47</option>
					<option value="48">48</option>
				   <option value="49">49</option>	
				</select>
			</div>
		<?php	
		}
	}?>
	
<!-- DAY --->
<?php
//If the word or name interval is coming from a form, do the following, and if the word set is 'Day'
	if(isset($_POST['interval'])){
		$interval=$_POST['interval'];
		if($interval=='Day'){
		?>
			<div class="col-sm-5">
				<label class="control-label label-format">Day options-></label>
			</div>
			<div class="col-sm-7">
				<select class="form-control" name="dayoption">
				   <option value="">-Select </option>
				   <option value="0">00</option>
				   <option value="01">01</option>
				   <option value="02">02</option>
				   <option value="03">03</option>
					<option value="04">04</option>
				   <option value="05">05</option>
				   <option value="06">06</option>
					<option value="07">07</option>
				   <option value="08">08</option>
				   <option value="09">09</option>
				   <option value="10">10</option>
				   <option value="11">11</option>
				   <option value="12">12</option>
				   <option value="13">13</option>
					<option value="14">14</option>
				   <option value="15">15</option>
				   <option value="16">16</option>
					<option value="17">17</option>
				   <option value="18">18</option>
				   <option value="19">19</option>
				   <option value="20">20</option>
				   <option value="22">22</option>
				   <option value="22">22</option>
				   <option value="23">23</option>
					<option value="24">24</option>
				   <option value="25">25</option>
				   <option value="26">26</option>
					<option value="27">27</option>
				   <option value="28">28</option>
				   <option value="29">29</option>
					<option value="30">30</option>
				   <option value="31">31</option>
				  <option value="32">32</option>
					<option value="33">33</option>
				   <option value="34">34</option>
				   <option value="35">35</option>
					<option value="36">36</option>
				   <option value="37">37</option>
				   <option value="38">38</option>
					<option value="39">39</option>
				   <option value="40">40</option>
				   <option value="41">41</option>
					<option value="42">42</option>
				   <option value="43">43</option>
				   <option value="44">44</option>
					<option value="45">45</option>
				   <option value="46">46</option>
				   <option value="47">47</option>
					<option value="48">48</option>
				   <option value="49">49</option>
				</select>
			</div>
		<?php
		}
	}
?>
<!-- OTHER --->

<?php
	if($_POST['interval']){
		$interval=$_POST['interval'];
		if($interval=='Others'){
		?>
		<div class="col-sm-4">
			<label class="control-label label-format">Select Custom</label>
		</div>
		<div class="col-sm-8">
			<input type="text" class="form-control" name="otheroption" list="otheroption" />
			<datalist id="otheroption">
				<option value="">-Select Visit Interval-</option>
				<?php
					include("../includes/connection.php");
					$sql="SELECT * FROM visitinterval WHERE status='Active' ORDER BY name";
					$query=mysqli_query($con, $sql) or die("Error ".mysqli_error($con));
					while($row=mysqli_fetch_array($query)){
						$name=$row['name'];
						$code=$row['code'];
						echo "<option value='$name' style='background-color:#CCCCCC;'>$name</option>";
					}
				?>
			</datalist>
		</div>
		<?php
		}
	}
?>
