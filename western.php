<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width= device-width, initial-scale=1.0">
<title>Wheel Spin</title>
<link rel="stylesheet" type="text/css" href="css/GameStyle.css">
<link rel="stylesheet" type="text/css" href="css/wheel.css">

</head>
<style>
#sidebar{
	width: 350%;
	margin-top: 140px;
	margin-left:-200px;
	background-color: #FFCC7C;
}
#sidebar li{
	font-size: 20px;
	padding: 20px;
	border: 1px solid black;
	text-align: center;
}
#sidebar ul{
	list-style-type: none;
}
#sidebar a{
	color: black;
	text-decoration:none;
}

#sidebar.active{
	left: 0;
}
#sidebar li:hover >a{
	color: orange;
}
.cat{
	margin-top: -290px;
	margin-left: -185px;
}
.box1 .span1 h5{
	position:absolute;
	top:39%;
	right:67%;
	transform:rotate(195deg);
	text-align:center;
}
.box1 .span2 h5{
	position:absolute;
	top:27%;
	right:60%;
	transform:rotate(-130deg);
	text-align:center;
}
.box1 .span3 h5{
	position:absolute;
	top:18%;
	right:37%;
	transform:rotate(-90deg);
	text-align:center;
}
.box1 .span5 h5{
	position:absolute;
	top:39%;
	right:10%;
	transform:rotate(-15deg);
	text-align:center;
}
.box2 .span1 h5{
	position:absolute;
	top:39%;
	right:70%;
	transform:rotate(200deg);
	text-align:center;
}
.box2 .span2 h5{
	position:absolute;
	top:24%;
	right:56%;
	transform:rotate(-130deg);
	text-align:center;
}
</style>
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
<div class="cat"> 
<h2>Categories</h2>
</div>
</section>
<section>
     <div id="sidebar">
		    <ul>
		       <li><a href="WheelSpin.php">Malaysian favourites</a></li>
		       <li><a href="chinese.php">Chinese</a></li>
			   <li><a href="malay.php">Malay</a></li>
			   <li><a href="indian.php">Indian</a></li>
			   <li><a href="japanese.php">Japanese</a></li>
			   <li><a href="korean.php">Korean</a></li>
			   <li><a href="western.php">Western</a></li>
			   <li><a href="ownlistspin.php">Create Own List</a></li>
		    </ul> 
	  </div>
</section>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <div class="mainbox" id="mainbox">
	      <div class="box" id="box">
               <div class="box1">
			       <span class="font span1"><h5>Fried Chicken</h5></span>
				   <span class="font span2"><h5>Pizza</h5></span>
				   <span class="font span3"><h5>Fish & Chips</h5></span>
				   <span class="font span4"><h5>Chicken Chop</h5></span>
				   <span class="font span5"><h5>Taco Bell</h5></span>
			   </div>
               <div class="box2">
                   <span class="font span1"><h5>Pasta</h5></span>
                   <span class="font span2"><h5>Mac n Cheese</h5></span>			   
                   <span class="font span3"><h5>Hamburger</h5></span>			   
                   <span class="font span4"><h5>Steak</h5></span>			   
                   <span class="font span5"><h5>Wrap</h5></span>			   
			   </div> 
		  </div>
		  <button class="spin" onclick="spin()">SPIN</button>
	  </div>

	  <audio controls="controls" id="wheel" src="wheelsound.mp3" type="audio/mp3"></audio>
	  
	  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	  <script src="js/WesWheel.js"></script>
	  
</body>
</html>