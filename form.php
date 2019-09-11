<?php
include("connection.php");
$surname = $firstname = $regno = $department = $level = $genotype = $bloodgroup = "";
if (isset($_POST["submit"])){
		$surname = htmlentities($_POST['surname']);
		$firstname = htmlentities($_POST['firstname']);
		$regno = htmlentities($_POST['regno']);
		$department = htmlentities($_POST['department']);
		$level = htmlentities($_POST['level']);
		$genotype = htmlentities($_POST['genotype']);
		$bloodgroup = htmlentities($_POST['bloodgroup']);
		if(!empty($surname) && !empty($firstname) && !empty($regno) && 
		!empty($department) && !empty($level) && !empty($genotype) && !empty($bloodgroup)){
		$insert = "INSERT INTO info(surname,firstname,regno,department,lev,genotype,bloodgroup)
		 VALUES('$surname', '$firstname', '$regno', '$department', '$level', '$genotype', '$bloodgroup')";
		 $run_query = mysqli_query($con,$insert);
		 if($run_query){
			 echo "<script>alert('Inserted!')</script>";
		 }else{
			 echo "Error".mysqli_error($con);
		 }
		}else {
			echo "<script>alert('Fill in all the fields')</script>";
		}
}
?>

<!doctype html>
<html>
	
<head>
<link href="style.css" type="text/css" rel="stylesheet">
<title> Registration </title>
</head>

<body>
	<header id ="main-header">
	<div class="container">
	<h1 style="text-align:center; color:black; background-color: #40ee6a; font-family:Times New Roman; ">Medical Care</h1>	
	</div>
</header>
<nav id="navbar">
<div class="container">
	<ul>
		<li><a href="home.php">Home</a></li>
		<li><a href="form.php">Register</a></li>
		<li><a href="verify.php">Verify</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
</nav>
</div>
<h2 style="color: brown; font-family: Bookman Old Style; "> Registration </h2>

<div id ="main"> 
	<form action="form.php" method="POST">
		<fieldset><legend style="text-align: center;">Fill in your details</legend> 
			<p>Surname: <input type="text" name="surname"></p>
			<p>Firstname: <input type="text" name="firstname"></p>
			<p>Reg No: <input type="text" name="regno"></p>
			<p>Department: <input type="text" name="department"></p>
			<p>Level: 
				<select name ="level">
					<option value ="value1">Select</option>
					<option value ="100">100</option>
					<option value ="200">200</option>
					<option value ="300">300</option>
					<option value ="400">400</option>
					<option value ="500">500</option>
					<option value ="600">600</option>
					<option value ="EXT">EXT</option>
				</select>
			</p>

			<p>Genotype: 
				<select name ="genotype">
					<option value ="value1">Select</option>
					<option value ="AA">AA</option>
					<option value ="AS">AS</option>
					<option value ="SS">SS</option>
					<option value ="AC">AC</option>
				</select>
			</p>
			<p>Bloodgroup: 
				<select name ="bloodgroup">
					<option value ="value1">Select</option>
					<option value ="A-">A-</option>
					<option value ="A+">A+</option>
					<option value ="B-">B-</option>
					<option value ="B+">B+</option>
					<option value ="AB-">AB-</option>
					<option value ="AB+">AB+</option>
					<option value ="O-">O-</option>
					<option value ="O+">O+</option>
				</select>
			</p>
			<p>
				<div>
					<div style="align: left">
						<img src="" height="150" width="150" id="leftThumb" style="border: 1px solid black">
						<input name = "leftThumbPrint" type="button" value="Scan Left Thumb" id="left-thumb">
					</div>
					<div style="align: right">
						<img src="" height="150" width="150" id="rightThumb" style="border: 1px solid black">
						<input name = "rightThumbPrint" type="button" value="Scan right Thumb" id="right-thumb">
					</div>
				</div>
			</p>
			<input name = "submit" type="submit" value="Submit">
		</fieldset>
	</form>
</div>

<script src="./assets/jquery.js" type="text/javascript"></script>
<script>
	
	$(document).ready(function(){

		$("#left-thumb").click(function(){

			// console.log("left");
			$.get("https://localhost:5070/fingerprint/scan/left", function(result){
				
				$("#leftThumb").attr('src',`data:img/png;base64,${result}`);
			});
		});

		$("#right-thumb").click(function(){

			// console.log("right");
			$.get("https://localhost:5070/fingerprint/scan/right", function(result){
				
				$("#rightThumb").attr('src',`data:img/png;base64,${result}`);
			});
		});
	});
</script>

</body>
</html>