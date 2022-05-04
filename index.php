<html>
    <head>
        <title> My First Project </title>
		<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>
	<!--HEADER--!>
	<?php include('templates/header.php');	?>
	


	
	<!--MENU--!>
	<?php include('templates/menu.php'); ?>
	
	<!--CONTENT--!>
	<div class='house'>
	<pre> T h e   n e w   w a y   i n   d e v e l o p i n g   h o u s e s </pre>
    </div>
	<h1> TESTIMONIALS </h1>
	<center> <small>Donec vitae orci sed dolor rutrum auctor. Nam pretium turpis et arcu. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim. </small> </center>
	
	<div class="slideshow-container">

<div class="mySlides">
  <p><img src="images\quotes.png" alt="quotation mark"/>Donec vitae orci sed dolor rutrum auctor. Nam pretium turpis et arcu.
Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor,
a pretium mi sem ut ipsum. In enim justo, rhoncus ut, imperdiet a,
venenatis vitae, justo. Donec posuere vulputate arcu.</p>
  <p class="author">- John Smith, Director</p>
</div>

<div class="mySlides">
  <p><img src="images\quotes.png" alt="quotation mark"/>Test was really challenging</p>
  <p class="author">- Faryal Hassan, Director</p>
</div>

<div class="mySlides">
  <p><img src="images\quotes.png" alt="quotation mark"/>I have not failed. I've just found 10,000 ways that won't work.</p>
  <p class="author">- Thomas A. Edison</p>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
	
	<!--FOOTER-->
	<?php include('templates/footer.php'); ?>
</body>
</html>
