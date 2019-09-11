<!doctype html>
<html>
<head>
<title> Verification </title>
<link href="style.css" type="text/css" rel="stylesheet" >
</head>
	<header id ="main-header">
	<div class="container">
	<h1 style="text-align:center; color:black; background-color: #40ee6a; font-family:Times New Roman; "> Medical Care</h1>
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

<body>
<h2 style="color:brown; font-family:Bookman Old Style; "> Verification </h2>

<div id ="main"> 
<form action="verify.php" method="POST" />
<fieldset><legend style="text-align:center;">Enter your details</legend> 
<p>Reg No: <input type="text" name="reg no" /></p>
<p>Fingerprint: <input type="text" name="fingerprint" /></p>
<input type="submit" value="Verify" />
</fieldset>
</form>
</div>
<div id ="footer">
	<footer style="color:red;"> Copyright &copy; 2019 </footer>
</div>
</body>

</html>