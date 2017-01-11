<html>
<head>
	<title></title>
	<script type="text/javascript">
		function entryMode(choosedMode) {
			// body...
			
			var iselect = choosedMode;
//			var value = 'score'+iselect;

			if(iselect == 'utme'){
				document.getElementById('scoreutme').style.display = 'block';
				document.getElementById('scoreDE').style.display = 'none';
				document.getElementById('scoreijmb').style.display = 'none';
		}
			else if(iselect == 'DE'){
				document.getElementById('scoreutme').style.display = 'none';
				document.getElementById('scoreDE').style.display = 'block';
				document.getElementById('scoreijmb').style.display = 'none';
			}else if(iselect == 'ijmb') {
				document.getElementById('scoreutme').style.display = 'none';
				document.getElementById('scoreDE').style.display = 'none';
				document.getElementById('scoreijmb').style.display = 'block';
			}
			
			//$('.score'+iselect).addClass('hide');

			//alert(value);
		}

		function letmeEnterOlevel(){
			// body...
			//alert('');
				document.getElementById('basic').style.display = 'none';
				document.getElementById('olevel').style.display = 'block';
		}
	</script>
</head>
<body id="body"  align="left">
<h1 id="jamb"><strong>JAMB GRADING SYSTEM</strong></h1>
<nav>
		<ul>
			<li id="admin"><a href="admin.php" >ADMIN</a></li>
		</ul>
	</nav>
		<form action="calc.php" method="post" id="jamb" name="jamb">
		<div id="basic">
<table>
	<tr>
	<th valign="top">	<b>Jamb Registration No.:</b> &nbsp; <br /></th>
	<td>
		<input type ="text" name="jamb_no" id="" placeholder="Jamb Number" required="required"> <br />
	</td>
</tr>
</table>

		<fieldset>
				<legend align="left"  >Mode of Entry</legend>
				<table>
					<tr>
						<th>&nbsp;</th>
						<td>
							<input type="radio" name="mode" id="mode_utme" onChange="entryMode(this.value)" value="utme" required="required">
							<label for="mode_utme">&nbsp;&nbsp;&nbsp; UTME</label><br />

							<input type="radio" name="mode" id="mode_ijmb" value="ijmb" onChange="entryMode(this.value)" required="required">
							<label for="mode_ijmb">&nbsp;&nbsp;&nbsp; IJMB</label> <br />

							<input type="radio" name="mode" id="mode_de" value="DE" onChange="entryMode(this.value)" required="required">
							<label for="mode_de">&nbsp;&nbsp;&nbsp; National Diploma</label>
						</td>
					</tr>
				</table>
		</fieldset>
	</p>
	<div id="scoreutme">
		<fieldset>
				<legend align="left" >Enter Your Jamb Score</legend>
				<table>
					<tr>
						<th>&nbsp;</th>
						<td>
							<input type="number" name="scoreu" id="score" min="0" max="400" value="J_score"><br />
							<div></div>
						</td>
					</tr>
				</table>
		</fieldset>
	</div>
	<div id="scoreDE">
		<fieldset>
				<legend align="left">Diploma Grade</legend>
				<table>
					<tr>
						<th>&nbsp;</th>
						<td>
							<input type="radio" name="scorede" id="scored" value="5"><label for="scored"> Distinction</label><br />
							<input type="radio" name="scorede" id="scoreu" value="4"> <label for="scoreu">Upper Credit</label><br />
							<input type="radio" name="scorede" id="scorel" value="3"><label for="scorel"> Lower Credit</label><br />
							<input type="radio" name="scorede" id="scorep" value="2"> <label for="scorep">Pass</label><br />
							<input type="radio" name="scorede" id="scoref" value="1"> <label for="scoref">Fail</label><br />
							<div></div>
						</td>
					</tr>
				</table>
		</fieldset>
	</div>
	<div id="scoreijmb">
		<fieldset>
				<legend align="left">IJMB POINT</legend>
				<table>
					<tr>
						<th>&nbsp;</th>
						<td>
							<input type="number" name="scorei" id="score" value = 'J_score' min="0" max="15"><br />
							<div></div>
						</td>
					</tr>
				</table>
		</fieldset>
	</div>

	<!--<a href="#" onclick="letmeEnterOlevel()"><button class="" id="" onclick="letmeEnterOlevel()">NEXT</button></a>-->
</div>

	<div>
		<fieldset>
			<legend align="left">Number of Sitting Result type</legend>
			<p  required="required" align="left">
			<input type="radio" name="sitting" value="1"> 1 Sitting<br />
			<input type="radio" name="sitting" value="2"> 2 Sittings
		</p>
		<p align="left">
			O Level 5 Subjects with Grade
			<br />
			<fieldset>
				<table>
					<tr>
						<th width="125">SUBJECT</th>
						<th width="113">GRADE</th>
					</tr>
					<tr>
						<td height="35">
							<select name="course[]" required="required">
								<option value="">Select Subject</option>
								<option value="MATHEMATICS">MATHEMATICS</option>
								<option value="ENGLISH">ENGLISH</option>
								<option value="PHYSICS">PHYSICS</option>
								<option value="CHEMISTRY">CHEMISTRY</option>
								<option value="BIOLOGY">BIOLOGY</option>
								<option value="GOVERMENT">GOVERMENT</option>
								<option value="LIT-IN-ENGLISH">LITERATURE</option>
								<option value="COMMERCE">COMMERCE</option>						
								<option value="ECONOMICS">ECONOMICS</option>
								<option value="ACCOUNTING">ACCOUNTING</option>
							</select>
					  </td>
						<td>
							<select name="grade[]" required="required" >
								<option value="">Select Grade</option>
								<option value="A">A1</option>
								<option value="B">B2</option>
								<option value="B">B3</option>
								<option value="C">C4</option>
								<option value="C">C5</option>
								<option value="C">C6</option>
								<option value="D">D7</option>
								<option value="E">E8</option>						
								<option value="F">F9</option>
							</select>
						</td>
					</tr>
					<tr>
						<td height="35">
							<select name="course[]" required="required">
								<option value="">Select Subject</option>
								<option value="MATHEMATICS">MATHEMATICS</option>
								<option value="ENGLISH">ENGLISH</option>
								<option value="PHYSICS">PHYSICS</option>
								<option value="CHEMISTRY">CHEMISTRY</option>
								<option value="BIOLOGY">BIOLOGY</option>
								<option value="GOVERMENT">GOVERMENT</option>
								<option value="LIT-IN-ENGLISH">LITERATURE</option>
								<option value="COMMERCE">COMMERCE</option>						
								<option value="ECONOMICS">ECONOMICS</option>
								<option value="ACCOUNTING">ACCOUNTING</option>
							</select>
					  </td>
						<td>
							<select name="grade[]" required="required" >
								<option value="">Select Grade</option>
								<option value="A">A1</option>
								<option value="B">B2</option>
								<option value="B">B3</option>
								<option value="C">C4</option>
								<option value="C">C5</option>
								<option value="C">C6</option>
								<option value="D">D7</option>
								<option value="E">E8</option>						
								<option value="F">F9</option>
							</select>
						</td>
					</tr>
					<tr>
						<td height="35">
							<select name="course[]" required="required">
								<option value="">Select Subject</option>
								<option value="MATHEMATICS">MATHEMATICS</option>
								<option value="ENGLISH">ENGLISH</option>
								<option value="PHYSICS">PHYSICS</option>
								<option value="CHEMISTRY">CHEMISTRY</option>
								<option value="BIOLOGY">BIOLOGY</option>
								<option value="GOVERMENT">GOVERMENT</option>
								<option value="LIT-IN-ENGLISH">LITERATURE</option>
								<option value="COMMERCE">COMMERCE</option>						
								<option value="ECONOMICS">ECONOMICS</option>
								<option value="ACCOUNTING">ACCOUNTING</option>
							</select>
					  </td>
						<td>
							<select name="grade[]" required="required" >
								<option value="">Select Grade</option>
								<option value="A">A1</option>
								<option value="B">B2</option>
								<option value="B">B3</option>
								<option value="C">C4</option>
								<option value="C">C5</option>
								<option value="C">C6</option>
								<option value="D">D7</option>
								<option value="E">E8</option>						
								<option value="F">F9</option>
							</select>
						</td>
					</tr>
					<tr>
						<td height="35">
							<select name="course[]" required="required">
								<option value="">Select Subject</option>
								<option value="MATHEMATICS">MATHEMATICS</option>
								<option value="ENGLISH">ENGLISH</option>
								<option value="PHYSICS">PHYSICS</option>
								<option value="CHEMISTRY">CHEMISTRY</option>
								<option value="BIOLOGY">BIOLOGY</option>
								<option value="GOVERMENT">GOVERMENT</option>
								<option value="LIT-IN-ENGLISH">LITERATURE</option>
								<option value="COMMERCE">COMMERCE</option>						
								<option value="ECONOMICS">ECONOMICS</option>
								<option value="ACCOUNTING">ACCOUNTING</option>
							</select>
					  </td>
						<td>
							<select name="grade[]" required="required" >
								<option value="">Select Grade</option>
								<option value="A">A1</option>
								<option value="B">B2</option>
								<option value="B">B3</option>
								<option value="C">C4</option>
								<option value="C">C5</option>
								<option value="C">C6</option>
								<option value="D">D7</option>
								<option value="E">E8</option>						
								<option value="F">F9</option>
							</select>
						</td>
					</tr>
					<tr>
						<td height="35">
							<select name="course[]" required="required">
								<option value="">Select Subject</option>
								<option value="MATHEMATICS">MATHEMATICS</option>
								<option value="ENGLISH">ENGLISH</option>
								<option value="PHYSICS">PHYSICS</option>
								<option value="CHEMISTRY">CHEMISTRY</option>
								<option value="BIOLOGY">BIOLOGY</option>
								<option value="GOVERMENT">GOVERMENT</option>
								<option value="LIT-IN-ENGLISH">LITERATURE</option>
								<option value="COMMERCE">COMMERCE</option>						
								<option value="ECONOMICS">ECONOMICS</option>
								<option value="ACCOUNTING">ACCOUNTING</option>
							</select>
						</td>
						<td>
							<select name="grade[]" required="required" >
								<option value="">Select Grade</option>
								<option value="A">A1</option>
								<option value="B">B2</option>
								<option value="B">B3</option>
								<option value="C">C4</option>
								<option value="C">C5</option>
								<option value="C">C6</option>
								<option value="D">D7</option>
								<option value="E">E8</option>						
								<option value="F">F9</option>
							</select>
						</td>
					</tr>
				</table>
			</fieldset>
		</p>
		</fieldset>


	</div>
	<div><center><button class="" type="submit" name="calculate" id="submit">SUBMIT</button></center>
	</div>
	</form>
	<hr />
	<center>
	<?php
	echo "<p>Copyright &copy;2016-" . date("Y") 
	?>
	</center>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</body>
</html>