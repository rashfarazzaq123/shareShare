<?php include "layouts/header.php"; ?>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}

.slideshow-container {
  width:100%;
  height:200px:
  position: relative;
  margin: auto;
}
.mySlides fade{
	width:100%;
	height:200px:
}
h1{
	 text-align: center;
	font-size:50px;
}
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}
img{
width: 100%;
height:590px;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


@media only screen and (max-width: 300px) {
  .text {font-size: 11px}

}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
  margin: 50px;
  text-align: center;
  font-family: arial;
  float:left;
  left-padding:10px;
  left:30%;
  
}
.card,img{
	
}
.price {
  color: grey;
  font-size: 15px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 10px;
}

.card button:hover {
  opacity: 0.7;
}
h4{
	 font-size: 20px;
}
.btn btn-default{
	padding:10px;
}
</style>
</head>
<body>


<div class="slideshow-container">

<div class="mySlides fade">
 
  <img src="images\slide2.jpg" >
  
</div>

<div class="mySlides fade">
  
  <img src="images\slide1.jpg" >

</div>

<div class="mySlides fade">
 
  <img src="images\slide3.jpg" >
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
 
 <h1>Welcome to shareShare<h1>
 <a href="login.php">
 <div class="card">
  <img src="images\slide8.jpg" alt="Denim Jeans" style="width:340px; height: 300px;">
  <h2>shareShare</h2>
  <p class="price">do you like to Make new friends ?</p>

</div>
</a>
<a href="login.php">
<div class="card">
  <img src="images\slide6.jpg" alt="Denim Jeans" style="width:340px; height: 300px;">
  <h2>e-Games</h2>
  <p class="price">do you like to play e games?</p>

</div>
</a>
<a href="login.php">
<div class="card">
  <img src="images\slide10.jpg" alt="Denim Jeans" style="width:340px; height: 300px;">
  <h2>e-books</h2>
  <p class="price">do ypu like to read books ?</p>
 
</div>
</div>
</a>
<div>
<h4>create a new account  and have the new expirence </h4>
<div class="container">

 
  <a href="register.php"><button type="button" class="btn btn-default">Signup</button></a>
</div>

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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<?php include "footer.php"; ?>
</body>
</html> 