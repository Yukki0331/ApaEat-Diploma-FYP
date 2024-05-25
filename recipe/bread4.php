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

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="../css/restyle.css" rel="stylesheet" type="text/css">
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


#instruction_table{
font-family: arial, sans-serif;
border-collapse: collapse;
width: 100%;
}

.instr_table_cont{
border: 1px solid #dddddd;
text-align: left;
padding: 8px;
}

</style>

</head>
<body class="bg-blue-50 overflow-x-hidden">

<!-- header section starts      -->

<header>



    <a href="../protect-this.php" class="Logo">ApaEat</a>

    <nav class="navbar">
        <a class="#" href="../MainPage.php">Home</a>
        <a href="#">About</a>
        <a href="../contact.php">Contact</a>
        <a href="../recipe.php">Recipe</a>
        <a href="#">Restaurant</a>
        <a href="#">Game</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
       
    </div>

</header>

<!-- header section ends-->

<!-- search form  -->

<form action="../search.php" method="GET" id="search-form">
    <input type="search" placeholder="search here..."  name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>"  id="search-box">
	<button class="search-box"><i class="fas fa-search"></i></button>
    <i class="fas fa-times" id="close"></i>
</form>

<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='70'";
	 $result = mysqli_query($db, $sql);
	 
while($row1 = mysqli_fetch_array($result))
{
	
       $id =$row1['id'];
	   $title =$row1['title'];
	   $image =$row1['image'];
	    $title_text =$row1['title_text'];
		 $ing_text =$row1['ing_text'];
		  $disc =$row1['disc'];
		  
		   


}
		
           

?>
   
<br><br><br>
    <!--Dish Details-->
	<div>
		<div class="flex pt-5 md:pt-12 justify-center">
			<div class="bg-white md:h-96 w-11/12 md:w-7/10 md:mx-8 md:flex md:max-w-5xl shadow-lg rounded-lg">
				<div class="md:w-1/2 h-64 rounded-t-lg md:rounded-t-none md:rounded-tl-lg md:rounded-bl-lg md:h-auto overflow-hidden">
					
					<div class="h-64 bg-cover lg:rounded-lg lg:h-full" style="background-image:url(../admin/img/<?php echo $image.$row1['image'];?>); width: 85%; "></div>
				</div>
				<div class="mb-4 pt-5 px-6 max-w-xl md:max-w-5xl md:w-1/2" style="overflow: scroll">
					<h2 id="dish-page-name" class="text-3xl font-medium text-black-600"><?php echo $title.$row1['title']; ?></h2>
					<span id="dish-page-prep-time" class="bg-yellow-400 text-gray-50 text-sm font-light rounded-md px-2 py-1">100 min</span>
					<span id="dish-page-cuisine-type" class="bg-yellow-400 text-gray-50 text-sm font-light rounded-md px-2 py-1">Hong Kong</span>
					<p id="dish-page-ingredients" class="mt-4 text-gray-600 text-base font-regular">
					
					    <span><li ><?php echo $ing_text.$row1['ing_text']; ?></li></span>
						
						
					</p>
				   
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
					<span class="bg-yellow-400 text-gray-50 text-sm font-light rounded-md px-2 py-1">Instructions</span>
					<span id="dish-page-video-present" class="hidden bg-green-400 text-gray-50 text-sm font-light rounded-md px-2 py-1">Video</span>
					 <p id="dish-page-direction-text" class="mt-4 font-regular text-base">
					     <?php echo $title_text.$row1['title_text']; ?>
						 </P>
	<!-- video section -->
	
					 
				<video id="dish-page-video" class="lazyloadvideo hidden mt-4 display-none" controls>
				  <!-- <source id="dish-page-video-source" src="http://localhost:8000/videos/JSSYOIwFsnT3msIYjLzYDLHoNiTzHycgybF01GdZ.mp4" type="video/mp4"> -->
				  Your browser does not support the video tag.
				</video>

				<div class="flex flex-row mt-8">
					
					<div class="w-8/12 md:w-10/12 ml-2">
						<h2 id="dish-page-owner-name" class="text-gray-800 text-lg font-medium mb-2 cursor-pointer"><b>Nutrition Facts</b></h2>
						<p id="dish-page-owner-caption" class="text-sm font-light text-gray-600 truncate overflow-ellipsis">Per Serving: 181 calories; fat 7.5g; saturated fat 3.1g; mono fat 3.2g; poly fat 2.1g; protein 18.4g; carbohydrates 16.6g; fiber 9g; cholesterol 99mg; iron 11mg; sodium 418mg; calcium 213mg.</p>
					</div>
				</div>

				<div class="mt-8 flex flex-row">
			
			
					
					<!-- <svg class="w-6 h-6 stroke-current text-pink-500 fill-current text-white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg> -->
				</div>

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
					
		
	
						
	             
	             $sql = "INSERT INTO commentbar(text, recipy_id) VALUES ('$text', '48')";
	             mysqli_query($db, $sql);
				 
			
				 
	
				
	
	
	
}




?>



		   
		  




					
				
			
<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM commentbar WHERE recipy_id='48'";
	 $result = mysqli_query($db, $sql);
	 
while($row1 = mysqli_fetch_array($result))
{
	
       $id =$row1['id'];
	    $text =$row1['text'];
		 $date_time =$row1['date_time'];
		  $recipy_id =$row1['recipy_id'];
		  
		   
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

    

</body>
</html>