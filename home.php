<!doctype html>
<html>
	
<head>
<link href="style.css" type="text/css" rel="stylesheet" >
<title> Homepage </title>
</head>

<body>

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
</div>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="new3.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="new4.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="new1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="new2.jpg" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 10000); // Change image every 2 seconds
}
</script>

</body>
</html>

</body>

</html>