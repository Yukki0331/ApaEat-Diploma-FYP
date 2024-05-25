<?php
error_reporting(0);
include("../connection/connect.php");




?>



					
			
			
	


<!doctype html>
<html>
<head>
  <!-- ... -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<script src="https://kit.fontawesome.com/5ad47112e7.js" crossorigin="anonymous"></script>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  <script
  async
  src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@16.1.0/dist/lazyload.min.js">
  </script>


  <style type="text/css">
	.pic_pos{
		float: left;
		height: 400px;
		width: 400px;
		margin-left: 7%;
		margin-top: 5%;

	}

	#recipe_heading{
		-ms-transform: rotate(55deg); 
		  -ms-transform-origin: 20% 40%; 
		  transform: rotate(-25deg);
		  transform-origin: 90% 65%;
	}

	.content_pos{
		float: right;
		margin-right: 30%;
		margin-top: 5%;

	}

	.background_color_matcher{
		background-color: #fff7d0;
	}

	.ingredients_box{
		margin-top: 5%;
		margin-right: 10%;
		float: right; 
		width: 49%;
		height: 300px;
		overflow: scroll;
		
	}
	.table {
	border-spacing: 0 15px;
}

i {
	font-size: 1rem !important;
}

.table tr {
	border-radius: 20px;
}

tr td:nth-child(n+5),
tr th:nth-child(n+5) {
	border-radius: 0 .625rem .625rem 0;
}

tr td:nth-child(1),
tr th:nth-child(1) {
	border-radius: .625rem 0 0 .625rem;
}



.arrow {
    position: absolute;
    top: 43%;
    transform: translateY(-50%);
    cursor: pointer;
    z-index: 100;
    background: none;
    border-radius: 50%;
   
}
.arrow img {
    width: 40px;
}

.l {
    left: 240px;
	outline: none;
}
.r {
    right: 830px;
	outline: none;
	border: none;
}
.KVjOc {
    border-color: var(--gray-80);
    border-width: 0 0 1px;
    margin: 16px 0;
}

.Z {
    border-style: solid;
}

.uUbEd {
    color: var(--gray-20);
    font-size: 12px;
    line-height: 19px;
    margin-bottom: 7px;
}

.b {
    font-weight: 700;
}

.DzMcu {
    padding: 5px 0;
}
.DzMcu .BPsyj, .DzMcu .vzATR {
    font-size: 14px;
    line-height: 19px;
}

.DzMcu .BPsyj {
    margin-left: 12px;
}



.DzMcu .vzATR {
    float: right;
}
:root{
	--orange:#ff7800;
    --black:#192a56;
    --light-color:#666;
    --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
}



body {
	min-height:100vh;
    overflow-x:hidden;
}



html{
	
    overflow-x: hidden;
    scroll-padding-top: 5.5rem;
    scroll-behavior: smooth;
 
	
}



.primary-color {
    color: #2563EB;
}

.primary-color:hover {
    color: #1D4ED8;
}

.profile {
    width: 45px;
    height: auto;
}

.font-black {
    font-family: 'Product Sans';
    font-weight: 900;
    font-style: normal;
}

.font-bold {
    font-family: 'Product Sans';
    font-weight: bold;
    font-style: normal;
}

.font-regular {
    font-family: 'Product Sans';
    font-weight: normal;
    font-style: normal;
}

.font-medium {
    font-family: 'Product Sans';
    font-weight: 500;
    font-style: normal;
}

.font-thin {
    font-family: 'Product Sans';
    font-weight: 100;
    font-style: normal;
}

.font-light {
    font-family: 'Product Sans';
    font-weight: 300;
    font-style: normal;
}

.modal {
    transition: opacity 0.25s ease;
  }

body.modal-active {
    overflow-x: hidden;
    overflow-y: visible !important;
}

@keyframes fadeInTop {
	from {
		transform: translate3d(0, -20%, 0);
	}
	to {
		transform: translate3d(0, 0, 0);
	}
}

@keyframes fadeInRight {
	from {
		transform: translate3d(-20%, 0, 0);
	}
	to {
		transform: translate3d(0, 0, 0);
	}
}
.fadeInRight {
    -webkit-animation: fadeInRight 2s ease;
    animation: fadeInRight 2s ease;
}

@keyframes fadeInRotate {
	from {
		transform: rotate(-0.5turn);
	}
	to {
		transform: rotate(0turn);
	}
}

.fadeInRotate {
    -webkit-animation: fadeInRotate 2s ease;
    animation: fadeInRotate 2s ease;
}



@keyframes slideInBottom {
	0% {
		transform: translateY(100px);
	}
	100% {
		transform: translateY(0);
	}
}

 .fadeInTop {
    -webkit-animation: fadeInTop 2s ease;
    animation: fadeInTop 2s ease;
 }

 .slideInBottom {
     -webkit-animation: slideInBottom 2s ease;
     animation: slideInBottom 2s ease;
 }

 @keyframes slideUp {
     0%{
        transform: translateY(100px);
     }
     100%{
        transform: translateY(0);
     }
 }

 .slideUp {
    -webkit-animation: slideUp 2s ease;
    animation: slideUp 2s ease;
 }
 



.heading{
font-size: 62.5%;
    text-align: center;
    color:var(--black);

    padding-bottom: 2rem;
    text-transform: uppercase;
}

.btn{
    margin-top: 1rem;
    display: inline-block;
    font-size: 1rem;
    color:#fff;
    background: var(--orange);
    border-radius: .5rem;
    cursor: pointer;
    padding:.8rem 3rem;
}

.btn:hover{
    background: var(--orange);
    letter-spacing: .1rem;
}

header{
	font-size: 62.5%;
    position: fixed;
    top:0; left: 0; right:0;
    background: #fff;
    padding:0.4rem 7%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 100;
    box-shadow: var(--box-shadow);
}

header .Logo
{
	color:  #ff7800;
	text-decoration: none;
	font-size: 2.8em;
	font-weight: 700;
	letter-spacing: 0.1em;
}



header .navbar a{
    font-size: 1rem;
    border-radius: .5rem;
    padding:.4rem 1rem;
    color:var(--light-color);
	
}

header .navbar a.active,
header .navbar a:hover{
    color:#fff;
    background: var(--orange);
}

header .icons i,
header .icons a{
    cursor: pointer;
    margin-left: .5rem;
    height:3rem;
    line-height: 3rem;
    width:3rem;
    text-align: center;
    font-size: 0.9rem;
    color:var(--black);
    border-radius: 50%;
    background: #eee;
}

header .icons i:hover,
header .icons a:hover{
    color:#fff;
    background: var(--orange);
    transform: rotate(360deg);
}

header .icons #menu-bars{
    display: none;
}

#search-form{
    position: fixed;
    top:-110%; left:0; 
    height:100%; width:100%;
    z-index: 1004;
    background:rgba(0,0,0,.8);
    display: flex;
    align-items: center;
    justify-content: center;
    padding:0 1rem;
}

#search-form.active{
    top:0;
}

#search-form #search-box{
    width:20rem;
    border-bottom: .1rem solid #fff;
    padding:1rem 0;
    color:#fff;
    font-size: 1.5rem;
    text-transform: none;
    background:none;
}

#search-form #search-box::placeholder{
    color:#eee;
}

#search-form #search-box::-webkit-search-cancel-button{
    -webkit-appearance: none;
}

#search-form label{
    color:#fff;
    cursor:pointer;
    font-size: 1.5rem;
}

#search-form label:hover{
    color:var(--orange);
}

#search-form #close{
    position: absolute;
    color:#fff;
    cursor: pointer;
    top: 2rem; right:3rem;
    font-size: 10rem;
}


.footer{
    
    background: #fff;
}

.footer .box-container{
   padding:1.2rem 5%;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(10rem, 1fr));
    gap:1rem;
}

.footer .box-container .box h3{
    font-size: 1.2rem;
    color:var(--black);
    padding:0.8rem 0;
}

.footer .box-container .box h3 i{
    color:var(--orange);
}

.footer .box-container .box .links{
    display: block;
    font-size: 0.75rem;
    color:var(--light-color);
    padding:0.8rem 0;
}

.footer .box-container .box .links i{
    color:var(--orange);
    padding-right: .2.5rem;
}

.footer .box-container .box .links:hover i{
    padding-right: 2rem;
}


.footer .box-container .box p{
    line-height: 1.8;
    font-size: 0.85rem;
    color:var(--light-color);
    padding:1rem 0;
}

.footer .box-container .box .share a{
    height:2rem;
    width:2rem;
    line-height:2rem;
    border-radius: .2.5rem;
    font-size: 1rem;
    color:var(--black);
    margin-right: .2rem;
    background: #eee;
    text-align: center;
}

.footer .box-container .box .share a:hover{
    background: var(--orange);
    color: #fff;
}

.footer .box-container .box .email{
    width: 100%;
    margin:.3.5rem 0;
    padding:1rem;
    border-radius: .5rem;
    background: #eee;
    font-size: 0.8rem;
    color:var(--black);
    text-transform: none;
}

.footer .box-container .box .payment-img{
    margin-top: 2rem;
    height: 1.5rem;
    display: block;
}

.footer .credit{
    text-align: center;
    margin-top: 2rem;
    padding:1rem;
    padding-top: 2.5rem;
    font-size: 1rem;
    color:var(--black);
    border-top: var(--border);
}

.footer .credit span{
    color:var(--orange);
}

#search-form #search-box{
    width:50rem;
    border-bottom: .1rem solid #fff;
    padding:1rem 0;
	color:#fff;
    font-size: 3rem;
    text-transform: none;
    background:none;
}

#search-form #search-box::placeholder{
    color:#eee;
}

#search-form #search-box::-webkit-search-cancel-button{
    -webkit-appearance: none;
}

#search-form i{
    color:var(--orange);
    cursor:pointer;
    font-size: 3rem;
}

#search-form i:hover{
    color:var(--orange);
}








</style>

</head>
<body class="bg-blue-50 overflow-x-hidden">

<!-- header section starts      -->

<header>



    <a href="../protect-this.php" class="Logo">ApaEat</a>

    <nav class="navbar">
        <a class="#" href="../MainPage.php">Home</a>
        <a href="../AboutUs.php">About</a>
        <a href="../contact.php">Contact</a>
        <a href="../recipe.php">Recipe</a>
        <a href="../restaurant.php">Restaurant</a>
        <a href="../Games.php">Game</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
       
    </div>

</header>

<!-- header section ends-->

<!-- search form  -->

<form action="../searchrestaurant.php" method="GET" id="search-form">
    <input type="search" placeholder="search here..."  name="ssearch" required value="<?php if(isset($_GET['ssearch'])){echo $_GET['ssearch']; } ?>"  id="search-box">
	<button class="search-box"><i class="fas fa-search"></i></button>
    <i class="fas fa-times" id="close"></i>
	
</form>

<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='18'";
	 $result = mysqli_query($db, $sql);
	 
while($row = mysqli_fetch_array($result))
{
	
 $resId =$row['resId'];
	   $image =$row['image'];
	     $iimage2 =$row['iimage2'];
		  $image3 =$row['image3'];
	    $resName =$row['resName'];
		 $area =$row['area'];
		  $location =$row['location'];
		  $pricerange =$row['pricerange'];
		  		  $resPage =$row['resPage'];
				 
		  
		   


}
		
           

?>
   
<br><br><br>
    <!--Dish Details-->
		<div class="arrow l" onclick="prev()">
            <img src="../images/l.png" alt="l">
                   </div>
				   
				   <div class="arrow r" onclick="next()">
            <img src="../images/r.png" alt="r">
        </div>
	<div>

		<div class="flex pt-5 md:pt-12 justify-center">
		
			<div class="bg-white md:h-96 w-11/12 md:w-7/10 md:mx-8 md:flex md:max-w-5xl shadow-lg rounded-lg">
			
			
				   
				<div class="md:w-1/2 h-64 rounded-t-lg md:rounded-t-none md:rounded-tl-lg md:rounded-bl-lg md:h-auto overflow-hidden">
					  
					<div class=" slide h-64 bg-cover lg:rounded-lg lg:h-full" style="background-image:url(../admin/img/<?php echo $image.$row['image'];?>); width: 85%; "></div>
					<div class=" slide h-64 bg-cover lg:rounded-lg lg:h-full" style="background-image:url(../admin/img/<?php echo $iimage2.$row['iimage2'];?>); width: 85%; "></div>
					<div class=" slide h-64 bg-cover lg:rounded-lg lg:h-full" style="background-image:url(../admin/img/<?php echo $image3.$row['image3'];?>); width: 85%; "></div>
					
				</div>
				<div class="mb-4 pt-5 px-6 max-w-xl md:max-w-5xl md:w-1/2" style="overflow: scroll">
					<h2 id="dish-page-name" class="text-3xl font-medium text-black-600"><?php echo $resName.$row['resName']; ?></h2>
					<span id="dish-page-prep-time" class="bg-yellow-400 text-gray-50 text-sm font-light rounded-md px-2 py-1"><?php echo $area.$row['area']; ?></span>
					<span id="dish-page-cuisine-type" class="bg-yellow-400 text-gray-50 text-sm font-light rounded-md px-2 py-1">Chinese</span>
					<br><br>
					<center>
					<span class="vzATR"> 
					<i class="fa-solid fa-computer" style=" color: #F94001;"></i> </span>
					<a class="BPsyj" href="http://www.weilhotel.com/dine">Website</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<i class="fa-solid fa-phone" style=" color: #F94001;"></i> </span>
					<span class="BPsyj">+605- 2082103</span>
					</center>
					<br>
					<div class="uUbEd b" style="font-size: 15px;">
					<b>Price Range : </b>
					<span class="BPsyj"><?php echo $pricerange.$row['pricerange'];?></span>
					</div>
					
					<div class="KVjOc Z"> </div>
					<div class="uUbEd b" >
					RATINGS
					</div>
					<div class="DzMcu"> 

				   <i class="fa-solid fa-utensils" style=" color: #F94001;"></i>
					
					<span class="BPsyj">Food</span>
					<span class="vzATR"> 
					<i class="fa-solid fa-circle" style=" color: #FFA500;"></i>
					<i class="fa-solid fa-circle" style=" color: #FFA500;"></i>
					<i class="fa-solid fa-circle" style=" color: #FFA500;"></i>
					<i class="fa-solid fa-circle" style=" color: #FFA500;"></i>
				    <i class="fa-solid fa-circle-half-stroke" style=" color: #FFA500;"></i>
			
					
					
					</span>
					</div>
					<div class="DzMcu"> 
                    
					<i class="fa-solid fa-bell-concierge"  style=" color: #F94001;"></i>

					<span class="BPsyj">Service</span>
					<span class="vzATR"> 
					<i class="fa-solid fa-circle" style=" color: #FFA500;"></i>
					<i class="fa-solid fa-circle" style=" color: #FFA500;"></i>
					<i class="fa-solid fa-circle" style=" color: #FFA500;"></i>
					<i class="fa-solid fa-circle" style=" color: #FFA500;"></i>
					<i class="fa-solid fa-circle-half-stroke" style=" color: #FFA500;"></i>
					
					
					
					
					</span>
					</div>
					
					<div class="DzMcu"> 
                    
					<i class="fa-solid fa-wallet" style=" color: #F94001;"></i>
					<span class="BPsyj">Value</span>
					<span class="vzATR"> 
					<i class="fa-solid fa-circle" style=" color: #FFA500;"></i>
					<i class="fa-solid fa-circle" style=" color: #FFA500;"></i>
					<i class="fa-solid fa-circle" style=" color: #FFA500;"></i>
			       <i class="fa-solid fa-circle" style=" color: #FFA500;"></i>
				   <i class="fa-regular fa-circle" style=" color: #FFA500;"></i>
					</span>
					</div>
					<div class="KVjOc Z"> </div>
					<div class="uUbEd b" >
					ABOUT
					</div>
					 <p id="dish-page-direction-text" class="mt-4 font-regular text-base">
					    Yuk Sou Hin, a typical Chinese Restaurant which is located at WEIL Hotel which it's a must for you to try! Master Chef Chung from Hong Kong makes every dish perfect which makes you think you are dining in a Hong Kong Restaurant. Our signature dish - Smoked Duck with Lychee Wood is just mouth-watering. Dim Sum, is also served in Yuk Sou Hin.
						
						</P>
				</div>
			</div>
		</div> 
	</div>
	
	<!-- end of ingredients box-->
	
	<!-- start of dish directions box -->
	
	<div>
		<div class="py-5 flex justify-center">
			<div class="bg-white w-11/12 md:w-7/10 md:mx-8 md:flex md:max-w-5xl shadow-lg rounded-lg">
				<div class="pt-5 px-6 max-w-xl lg:max-w-5xl mb-4">
					<h1 class="text-2xl font-medium text-black-600" style="font-size:27px;">Directions<span class="text-indigo-600"></span></h1>
					<span class="bg-yellow-400 text-gray-50 text-sm font-light rounded-md px-2 py-1">Location to the Shop</span>
					<span id="dish-page-video-present" class="hidden bg-green-400 text-gray-50 text-sm font-light rounded-md px-2 py-1">Video</span>
					 <p id="dish-page-direction-text" class="mt-4 font-regular text-base" >
					 
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.995922382222!2d101.08788591443093!3d4.594751996661974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31caedbf978c6575%3A0x272cab4f2ac04f7e!2sYuk%20Sou%20Hin!5e0!3m2!1sen!2smy!4v1669479456226!5m2!1sen!2smy" width="970" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</P></center>

				</div>

				<!--Like button-->
			</div>
		</div> 
	</div>
	
	
		
	
	<!--  Dish Table -->
	<!--
	<div class=" bg-gray-900">
		<div class="col-span-12">
			<div class="overflow-auto lg:overflow-visible " style="margin-left: 30%">
				<table class="table text-gray-400 border-separate space-y-6 text-sm">
					<thead class="bg-gray-800 text-gray-500">
						<tr>
							<th class="p-3 text-left">User</th>
							<th class="p-3 text-left">Dish Name</th>
							<th class="p-3 text-left">Cuisine</th>
							<th class="p-3 text-left">Prep Time</th>
							<th class="p-3 text-left">Action</th>
							
							
						</tr>
					</thead>
					<tbody>
						<tr class="bg-gray-800">
							<td class="p-3">
								<div class="flex align-items-center">
									<img class="rounded-full h-12 w-12  object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
									<div class="ml-3">
										<div class="">James</div>
										<div class="text-gray-500">Novice</div>
									</div>
								</div>
							</td>
							<td class="p-3">
								Butter Chicken
							</td>
							<td class="p-3 font-bold">
								Indian
							</td>
							<td class="p-3">
								<span class="bg-green-400 text-gray-50 rounded-md px-2">30 min</span>
							</td>
							<td class="p-3 ">
								<a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
									<i class="material-icons-outlined text-base">star</i>
								</a>
								<a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
									<i class="material-icons-outlined text-base">share</i>
								</a>
								
							</td>
						</tr>
					</tbody>
				</table>
				-->
	<!-- </div>
		</div> -->
	


	<!--Comments-->
	<div class="py-5 flex justify-center">
	<div class="w-11/12 md:w-7/10 md:mx-8 md:flex md:max-w-5xl shadow-lg rounded-lg">
		<form class="w-full bg-white rounded-lg px-4 pt-2" method="post">
		   <div class="flex flex-wrap -mx-3 mb-6">
			  <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg font-medium">Add a new comment</h2>
			  <div class="w-full md:w-full px-3 mb-2 mt-2">
				 <textarea id="dish-new-comment-text" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-regular placeholder-gray-700 focus:outline-none focus:bg-white" name="text" placeholder='Type Your Comment' required></textarea>
			  </div>
			  <div class="w-full md:w-full flex items-start md:w-full px-3">
				 <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
					<svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">
					   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
					</svg>
					<p class="text-xs md:text-sm pt-px">Your comment will be post anonymous.</p>
				 </div>
				 <div class="-mr-1">
					<input type="submit" name="submit" class="bg-yellow-600 text-white font-medium py-1 px-4 border rounded-lg tracking-wide mr-1 hover:bg-blue-700 cursor-pointer" value='Post Comment'>
				 </div>
			  </div>
		   </form>
		   
		  <?php


	
	
if(isset($_POST['submit']))                  //if post btn is pressed
{   
				
					$text =  $_POST['text']; 
					
		
	
						
	             
	             $sql = "INSERT INTO restaurantcomment(text, restaurantId) VALUES ('$text', '6')";
	             mysqli_query($db, $sql);
				 
			
				 
	
				
	
	
	
}




?>



		   
		  




					
				
			
<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurantcomment WHERE restaurantId='6'";
	 $result = mysqli_query($db, $sql);
	 
while($row1 = mysqli_fetch_array($result))
{
	
       $id =$row1['id'];
	    $text =$row1['text'];
		 
		  $restaurantId =$row1['restaurantId'];
		  
		   
		   									echo	'<div id="dish-comments" class="w-full px-4 pt-2 pb-2 mt-4">';
											echo	'<div class="flex flex-row w-full p-2">';
											echo	'<div class="ml-2">';
											echo	"<p>" .$text . "</p>";
											echo	'</div>';
											echo	'</div>';
											echo	'</div>';
											
						            
										 
		
		  
									
	  

}
		
           

?>	
									    
									  
									  
				
	</div>
	</div>
	</div>

		   <!--Previously added comments-->
		
		
    <br><br>
	<!-- footer section starts  -->

<section class="bg-yellow-600">
    <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
        <div class="flex justify-center mt-8 space-x-6">
            <a href="https://www.facebook.com/laymanbrother.19/" class="text-gray-50 hover:text-white">
                <span class="sr-only">Facebook</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="https://twitter.com/ashutosh_1919" class="text-gray-50 hover:text-white">
                <span class="sr-only">Twitter</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                </svg>
            </a>
            <a href="https://github.com/ashutosh1919" class="text-gray-50 hover:text-white">
                <span class="sr-only">GitHub</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                </svg>
            </a>
           
        </div>
        <p class="mt-8 text-base leading-6 text-center text-gray-50">
            © 2022 ApaEat, Inc. All rights reserved.
        </p>
    
</section>
<!-- footer section ends -->


   
<!-- custom js file link  -->
<script src="../js/script.js"></script>

  <script>
        let slide = document.querySelectorAll('.slide');
        var current = 0;

        function cls(){
            for(let i = 0; i < slide.length; i++){
                  slide[i].style.display = 'none';
            }
        }

        function next(){
            cls();
            if(current === slide.length-1) current = -1;
            current++;

            slide[current].style.display = 'block';
            slide[current].style.opacity = 0.4;

            var x = 0.4;
            var intX = setInterval(function(){
                x+=0.1;
                slide[current].style.opacity = x;
                if(x >= 1) {
                    clearInterval(intX);
                    x = 0.4;
                }
            }, 100);

        }

        function prev(){
            cls();
            if(current === 0) current = slide.length;
            current--;

            slide[current].style.display = 'block';
            slide[current].style.opacity = 0.4;

            var x = 0.4;
            var intX = setInterval(function(){
                x+=0.1;
                slide[current].style.opacity = x;
                if(x >= 1) {
                    clearInterval(intX);
                    x = 0.4;
                }
            }, 100);

        }

        function start(){
            cls();
            slide[current].style.display = 'block';
        }
        start();
    </script>

    

</body>
</html>