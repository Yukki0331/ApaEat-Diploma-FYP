<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width= device-width, initial-scale=1.0">
<title>About Us</title>

<link rel="stylesheet" type="text/css" href="css/GameStyle.css">
<link rel="stylesheet" type="text/css" href="css/about.css">
<script src="https://kit.fontawesome.com/da922b8830.js" crossorigin="anonymous"></script>
</head>

<body>
<header>
<a href="#" class="Logo">ApaEat</a>
<div class="group">
<ul class="navigation">
<li><a href="MainPage.php" >Home</a></li>
<li><a href="recipe.php">Recipe</a></li>
<li><a href="restaurant.php">Restaurant</a></li>
<li><a href="Games.php">Games</a></li>
<li><a href="contact.php">Contact</a></li>
<li> <a href="AboutUs.php">About</a></li>
</ul>
</div>
</header>
<section>
    <div class="img"></div>
	<div class="img-text">
	    <h1>ABOUT US</h1>
	</div>
    <div id="effect">
	<div class="about-1">
	    <h1>Our Story</h1>
		<p align="justify">ApaEat was established in 2022 by 2 young and enthusiastic developers. ApaEat was created to help 
		indecisive people to make a decision on what to eat in a fun an engaging way.We realised that people
		always find it so difficult to decide on what or where to eat, especially Malaysians as we love to eat. 
		Thus, this website was created to reduce the tediousness of food selection. What makes this fun? 
		You can spin the wheel and let it decide your meal for the day! Besides that, you can also look for recipes
		to cook yourself a meal at home or restaurants nearby.
        </p>
    </div>
		<div id="about-2">
		    <div class="content-box-lg">
			    <div class="container">
				    <div class="row2">
				       <div class="col-md-4">
					      <div class="about-item text-center">
						   <h3><i class="fa-solid fa-book"></i>&nbsp;&nbsp;&nbsp;&nbsp;MISSION</h3>							 
							 <p align="justify">Our aim is to provide a fun and engaging platform where our customers can decide their meals for the day.</p>
						  </div>
					   </div>
					   <div class="col-md-4">
					      <div class="about-item text-center">
						     <h3><i class="fa-solid fa-earth-asia"></i>&nbsp;&nbsp;&nbsp;&nbsp;VISION</h3>
							 <p align="justify">To be able to cater to customers around the world and enhance their decision making skills.</p>
						  </div>
					   </div>
				    </div>
				</div>
			</div>
		</div>
</div>
</section>	
	
	<script type="text/javascript">
	     window.onload = function(){
			 const EFFECT = document.querySelector("#effect");
			 
			 window.addEventListener('scroll', scrollEffect);
			 
			 function scrollEffect(){
				 if(window.scrollY>=500){
					 EFFECT.style.opacity = '1';
					 EFFECT.style.transform = 'translateX(0px)';
					 EFFECT.style.transition = '1s ease-in-out';
				 }
				 else{
					 EFFECT.style.opacity = '0';
					 EFFECT.style.transform = 'translateX(-50px)';
				 }
			 }
			 scrollEffect();
		 }
	</script>
</body>
</html> 