<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width= device-width, initial-scale=1.0">
<title>Wheel Spin</title>
<link rel="stylesheet" type="text/css" href="css/GameStyle.css">
<link rel="stylesheet" type="text/css" href="css/wheel.css">

</head>
<style>

.boxx{
box-sizing: border-box;
width: 153px;
height: 153px;
border:2px solid black;;
box-shadow: -3px -3px 7px #ffffff73,
3px 3px 5px rgba(94,104,121,0.288);
border-radius: 50%;
background-color: #fff7ed;
margin-top: 50px;
border-radius: 5px;

width: 360px;
height: 600px;
transition: all 1s;
}


.boxx:hover img{
width: 100px;
height: 100px;
margin:20px 35% ;
}
hr{
width:500px;
line-height:20px;
margin:10px 10px 10px 10px;
}
.text,
.email,
input[type="password"] {
display: block;
box-sizing: border-box;
color: black;

padding: 4px;
width: 220px;
height: 32px;
border: none;
border-bottom: 2px solid black;
font-family: 'Roboto', sans-serif;
font-weight: 400;
font-size: 15px;
transition: 0.2s ease;
background: none;
}

.text:focus,
.email:focus,
input[type="password"]:focus {
border-bottom: 2px solid black;
border-bottom-right-radius:20px;
color: black;
transition: 0.2s ease;
background: #FFD580;
border-top: none;
}


.btn{
border:1px solid #3498db;
background-color: #DD571C;
color:white;
height: 30px;
width: 100px;
border-radius: 5px;
left:0;
margin:0px;
transition: all .3s;
}
.btn:hover{
transform: scale(1.1);
background-color: #566573;
}
input[type="file"]{
display:none;
}


label{
box-sizing: border-box;
width:40px;
height:20px;
background-color: #FFD580;
color:white;
border:1px solid black;

color:black;
padding: 4px;
border-radius: 2px;
}
label:hover{
background-color: #566573;
transform: scale(1.1);
}

.input {
	margin-top: 70px;
}


.box1 .span3 h5{
	position:absolute;
	top:18%;
	right:43%;
	transform:rotate(-90deg);
	text-align:center;
}
.box1 .span4 h5{
	position:absolute;
	top:23%;
	right:20%;
	transform:rotate(-45deg);
	text-align:center;
}
.box1 .span5 h5{
	position:absolute;
	top:39%;
	right:12%;
	transform:rotate(-15deg);
	text-align:center;
}

.box2 .span2 h5{
    position:absolute;
	top:24%;
	right:58%;
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

<br><br><br><br><br><br>
<section class="input">
    <div class="boxx">

<form action="ownlistspin.php" method="GET" autocomplete="">
<label for="file">Create ur Own List!</label>
<center><b><p style="margin-top: 10px;">Your Choice 1: </p></b>
<input type="text"name='name' id='txtname'  >
<b><p>Your Choice 2: </p></b>
<input type="text" name='n' id='txtemail' >
<b><p>Your Choice 3: </p></b>
<input type="text" name='na' id='txtemail' >
<b><p>Your Choice 4:  </p></b>
<input type="text" name='nam' id='txtemail' >
<b><p>Your Choice 5:  </p></b>
<input type="text" name='c' id='txtemail'>
<b><p>Your Choice 6:  </p></b>
<input type="text" name='ch' id='txtemail' >
<b><p>Your Choice 7:  </p></b>
<input type="text" name='cho' id='txtemail' >
<b><p>Your Choice 8:  </p></b>
<input type="text" name='choi' id='txtemail'>
<b><p>Your Choice 9:  </p></b>
<input type="text" name='choic' id='txtemail' >
<b><p>Your Choice 10:  </p></b>
<input type="text" name='choice' id='txtemail' ><br><br>
<button class="btn " style=" width:70px; color:black; text-decoration: none;"><b>UPDATE</b></button></center>

</div>

</form>

</section>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <div class="mainbox" id="mainbox">
	      <div class="box" id="box">
               <div class="box1">
			       <span class="font span1"><h5><?php if(isset($_GET['name'])){echo $_GET['name']; } ?></h5></span>
				   <span class="font span2"><h5><?php if(isset($_GET['n'])){echo $_GET['n']; } ?></h5></span>
				   <span class="font span3" ><h5><?php if(isset($_GET['na'])){echo $_GET['na']; } ?></h5></span>
				   <span class="font span4" ><h5><?php if(isset($_GET['nam'])){echo $_GET['nam']; } ?></h5></span>
				   <span class="font span5"><h5><?php if(isset($_GET['c'])){echo $_GET['c']; } ?></h5></span>
			   </div>
               <div class="box2">
                   <span class="font span1"><h5><?php if(isset($_GET['ch'])){echo $_GET['ch']; } ?></h5></span>
                   <span class="font span2"><h5><?php if(isset($_GET['cho'])){echo $_GET['cho']; } ?></h5></span>			   
                   <span class="font span3"><h5><?php if(isset($_GET['choi'])){echo $_GET['choi']; } ?></h5></span>			   
                   <span class="font span4"><h5><?php if(isset($_GET['choic'])){echo $_GET['choic']; } ?></h5></span>			   
                   <span class="font span5"><h5><?php if(isset($_GET['choice'])){echo $_GET['choice']; } ?></h5></span>			   
			   </div> 
		  </div>
		  <button class="spin" onclick="spin()">SPIN</button>
	  </div>
	  <audio controls="controls" id="clapping" src="clapping.mp3" type="audio/mp3"></audio>
	  <audio controls="controls" id="wheel" src="wheelsound.mp3" type="audio/mp3"></audio>
	  
	  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	  <script >
	  function shuffle(array){
	var currentIndex = array.length, randomIndex;
	
	//while there remains elements to shuffle
	while(0 !== currentIndex){
		
		//pick a remaining element
		randomIndex = Math.floor(Math.random()*currentIndex);
		currentIndex--;
		//swap with current element
		[array[currentIndex], array[randomIndex]] =[
		     array[randomIndex],
			 array[currentIndex],
		];
	}
	return array;
}

function spin(){
	wheel.play();
	const box = document.getElementById("box");
	const element = document.getElementById("mainbox");
	let SelectItem = "";
	
	let MG = shuffle([1890, 2250, 2610]);
	let WM = shuffle([1850, 2210, 2570]);
	let Laksa = shuffle([1770, 2130, 2490]);
	let CKT = shuffle([1810, 2170, 2530]);
	let Tomyam = shuffle([1750, 2110, 2470]);
	let NK = shuffle([1630, 1990, 2350]);
	let Roti = shuffle([1570, 1930, 2290]);
	

	
	let results = shuffle([
	     MG[0],
		 WM[0],
		 Laksa[0],
		 CKT[0],
		 Tomyam[0],
		 NK[0],
		 Roti[0],
		 
	]);
	
	if(MG.includes(results[0]))SelectedItem = "<?php echo $_GET["na"] ?>";
	if(WM.includes(results[0]))SelectedItem = "<?php echo $_GET["nam"] ?>";
	if(Laksa.includes(results[0]))SelectedItem = "<?php echo $_GET["ch"] ?>";
	if(CKT.includes(results[0]))SelectedItem = "<?php echo $_GET["c"] ?>";
	if(Tomyam.includes(results[0]))SelectedItem = "<?php echo $_GET["cho"] ?>";
	if(NK.includes(results[0]))SelectedItem = "<?php echo $_GET["choice"] ?>";
	if(Roti.includes(results[0]))SelectedItem = "<?php echo $_GET["n"] ?>";

	box.style.setProperty("transition", "all ease 5s");
	box.style.transform = "rotate(" + results[0] + "deg)";
	element.classList.remove("animate");
	setTimeout(function(){
		element.classList.add("animate");
	}, 5000);
	
	setTimeout(function(){
		Swal.fire({
			title: 'Woohoo! Lets eat!',
			html: 'Your suggested food is ' + SelectedItem + ' ! ',
			});
	}, 5500);
	
	setTimeout(function(){
		box.style.setProperty("transition", "initial");
		box.style.transform = "rotate(90deg)";
	}, 6000);
}
	  
	  
	  </script>
	  
	  
</body>
</html>