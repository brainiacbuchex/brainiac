<?php
include("connection.php");
$fullname = $email = $regno = $department = $complaint = "";
if (isset($_POST["submit"])){
		$fullname = htmlentities($_POST['fullname']);
		$email = htmlentities($_POST['email']);
		$regno = htmlentities($_POST['regno']);
		$department = htmlentities($_POST['department']);
		$complaint = htmlentities($_POST['complaint']);
		if(!empty($fullname) && !empty($email) && !empty($regno) && !empty($department) && !empty($complaint)){
		$insert = "INSERT INTO contact(fullname,email,regno,department,complaint)
		 VALUES('$fullname', '$email', '$regno', '$department', '$complaint')";
		 $run_query = mysqli_query($con,$insert);
		 if($run_query){
			 echo"Sent";
		 }else{
			 echo"Error".mysqli_error($con);
		 }
		}else {
			echo 'Fill in all the fields';
}
}
?>

<!doctype html>
<html>
	
<head>
<link href="style.css" type="text/css" rel="stylesheet" >
<title> Contact page </title>
</head>

<body>
<header id ="main-header">
	<div class="container">
	<h1 style="text-align:center; color:black; background-color: #40ee6a; font-family: Bookman Old Style; "> Medical Care</h1>
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

<div id ="main"> 
	<form action="contact.php" method="post">
	<fieldset><legend style="text-align:center; color: green;">Contact Us</legend> 
	<p>Fullname: <input type="text" name="name" placeholder="Enter your fullname"></p>
	<p>Email: <input type="text" name="Email" placeholder="Enter your email address"></p>
	<p>Reg No: <input type="text" name="dept" placeholder="Enter your reg no"></p>
	<p>Department: <input type="text" name="dept" placeholder="Enter your department"></p>
	<p>Message: <textarea rows="5" cols="30" name="textarea" placeholder="Enter your message"></textarea></p>
	<input type="submit" value="Send">
	</fieldset>
	</form>
	</div>

	<div id ="footer">
		<footer style="color:red;"> Copyright &copy; 2019 </footer>
		</div>
</body>

</html>