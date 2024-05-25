<?php
error_reporting(0);
include("connection/connect.php");



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant page</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script src="https://kit.fontawesome.com/5ad47112e7.js" crossorigin="anonymous"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/restaurantstyle.css">

</head>



	
<body>
    
<!-- header section starts      -->

<header>



    <a href="protect-this.php" class="Logo">ApaEat</a>

    <nav class="navbar">
        <a class="active" href="MainPage.php">Home</a>
        <a href="AboutUs.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="recipe.php">Recipe</a>
        <a href="fullrestaurant.php">Full Restaurant</a>
        <a href="Games.php">Game</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
       
    </div>

</header>

<!-- header section ends-->

<!-- search form  -->

<form action="searchrestaurant.php" method="GET" id="search-form">
    <input type="search" placeholder="search here..."  name="ssearch" required value="<?php if(isset($_GET['ssearch'])){echo $_GET['ssearch']; } ?>"  id="search-box">
	<button class="search-box"><i class="fas fa-search"></i></button>
    <i class="fas fa-times" id="close"></i>
</form>


<section class="sliderr" id="sliderr">

    <!--image slider start-->
    <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="images/restaur13.png" alt="">
        </div>
        <div class="slide">
          <img src="images/ra16.png" alt="">
        </div>
        <div class="slide">
          <img src="images/restaur1.png" alt="">
        </div>
        <div class="slide">
          <img src="images/rest4.png" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->
	</section>

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h3 class="sub-heading"> our restaurant </h3>
     <h1 class="heading"> ApaEat's Popular </h1>

    <div class="box-container">
<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='13'";
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
   
        <div class="box">
		     
                <img src="admin/img/<?php echo $image.$row['image']; ?>" alt="">
                
		   
            
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i><?php echo $area.$row['area']; ?></h3>
				<p style=" color: #192a56; font-size: 22px;"> <b><?php echo $resName.$row['resName']; ?></b> </p>
                <p>Authentic Pakistani and Mughal fusion Restaurant. Try our famous Mutton Biryani, live BBQ Kebabs and Naans fresh out of the Tandoor. Eat-in or call for pickup/delivery today!</p>
                
                <div class="price" style="margin-top: 1em; "><?php echo $pricerange.$row['pricerange']; ?></div>
                <a href="restaurant/r1.php" class="btn">Show Details</a>
		         
				<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
					<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
            </div>
        </div>

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='14'";
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
            <img src="admin/img/<?php echo $image.$row['image']; ?>" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $area.$row['area']; ?></h3>
					<p style=" color: #192a56; font-size: 22px;"> <b><?php echo $resName.$row['resName']; ?></b> </p>
                <p>Food wise. 4 stars out of 5. Most recommended with their new menu. Should try their Garlic Prawn rice. Thats very tasty. The Signature marmine chiken chop was so unqiue and worth try.</p>
              
                <div class="price" style="margin-top: 1em; "> <?php echo $pricerange.$row['pricerange']; ?></div>
                <a href="restaurant/r2.php" class="btn">Show Details</a>
						<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
					<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
            </div>
        </div>

        <div class="box">
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='15'";
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
            <img src="admin/img/<?php echo $image.$row['image']; ?>" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $area.$row['area']; ?> </h3>
					<p style=" color: #192a56; font-size: 22px;"> <b><?php echo $resName.$row['resName']; ?></b> </p>
                <p> Take a trip to the French Riviera during your holiday in Damansara Heights. Nizza offers flavorful French Italian cuisine alongside signature beverages and cocktails. This is a place to mingle with friends and enjoy a game of pétanque. 
						 </p>
              
                <div class="price"><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="restaurant/r3.php" class="btn">Show Details</a>
						<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
					<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
					
            </div>
        </div>

        <div class="box">
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='16'";
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
           
            <img src="admin/img/<?php echo $image.$row['image']; ?>" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $area.$row['area']; ?> </h3>
					<p style=" color: #192a56; font-size: 22px;"> <b><?php echo $resName.$row['resName']; ?></b> </p>
                <p>“Prime Grill. Prime Wine. Prime Time.” Savor fine cuts of Australian and Japanese beef at our award-winning restaurant. This culinary journey will redefine your understanding and appreciation of dry-aged beef. PRIME prides itself in serving only the finest halal certified imported beef, complemented with an exquisite wine selection. 
						 </p>
              
                <div class="price " style="margin-top: 1.2em;"><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="restaurant/r4.php" class="btn">Show Details</a>
		<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
				<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
            </div>
        </div>

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='17'";
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
            <img src="admin/img/<?php echo $image.$row['image']; ?>" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $area.$row['area']; ?> </h3>
				<p style=" color: #192a56; font-size: 22px;"> <b><?php echo $resName.$row['resName']; ?></b> </p>
                <p> From the same dynamic team that brought you the super popular L'Osteria, Scalini's and Nero Vivo, here in Langkawi we have opened now an even better restaurant. Nero is a stylish restaurant, elegant and cozy. Our specialties are organic salads, super fresh local sea-food, chilled air flown meat, fresh home made pasta and baked breads made by the magic hands of our pasta maker.
						</p>
               
                <div class="price"><?php echo $pricerange.$row['pricerange']; ?></div>
                <a href="restaurant/r5.php" class="btn">Show Details</a>
					<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
								<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
            </div>
        </div>

        <div class="box">
		
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
            <img src="admin/img/<?php echo $image.$row['image']; ?>" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $area.$row['area']; ?>  </h3>
				<p style=" color: #192a56; font-size: 22px;"> <b><?php echo $resName.$row['resName']; ?></b> </p>
                <p>Yuk Sou Hin, a typical Chinese Restaurant which is located at WEIL Hotel which it's a must for you to try! Master Chef Chung from Hong Kong makes every dish perfect which makes you think you are dining in a Hong Kong Restaurant. Our signature dish - Smoked Duck with Lychee Wood is just mouth-watering. Dim Sum, is also served in Yuk Sou Hin.
						</p>
             
                <div class="price" style="margin-top: 1.2em;" ><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="restaurant/r6.php" class="btn">Show Details</a>
			<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
							<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
				
            </div>
        </div>

    </div>

</section>

<!-- packages section ends -->

<!-- category section starts  -->

<section class="category">

    <a href="restaurant/vegan.php" class="box">
        <img src="images/cat-1.png" alt="">
        <h3>Vegan</h3>
    </a>

    <a href="restaurant/halal.php" class="box">
        <img src="images/halal.png" alt="">
        <h3>Halal</h3>
    </a>

    <a href="restaurant/budgetsaving.php" class="box">
        <img src="images/budget-saving.png"  alt="">
        <h3>Budget-Saving</h3>
    </a>

    <a href="restaurant/finedining.php" class="box">
        <img src="images/finedining.png" alt="">
        <h3>Fine Dining</h3>
    </a>

   

</section>


<!-- category section ends -->




<!-- packages section starts  -->

<section class="packages" id="packages">

    <h3 class="sub-heading"> our restaurant </h3>
     <h1 class="heading"> ApaEat's Specials </h1>

    <div class="box-container">

        <div class="box">
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='19'";
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
            <img src="admin/img/<?php echo $image.$row['image']; ?>" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $area.$row['area']; ?> </h3>
					<p style=" color: #192a56; font-size: 22px;"> <b><?php echo $resName.$row['resName']; ?></b> </p>
                <p>An innovative all-day-dining restaurant designed with an "al fresco" urban park feel. Impressive buffet showcase with choice selection of Asian and international favourites.
						</p>
              
                    <div class="price" style="margin-top: 1.2em;" ><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="restaurant/r7.php" class="btn">Show Details</a>
				<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
				<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
            </div>
        </div>

        <div class="box">
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='20'";
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
            <img src="admin/img/<?php echo $image.$row['image']; ?>" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $area.$row['area']; ?> </h3>
					<p style=" color: #192a56; font-size: 22px;"> <b><?php echo $resName.$row['resName']; ?></b> </p>
                <p>Situated just next to Jonker Street, offering mouth-watering delights such as poh piah, rojak, laksa and nonya dumpling. Very Tradisional food and dessert which is cheap and signature at the same time.
							
						</p>
              
                    <div class="price"  ><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="restaurant/r8.php" class="btn">Show Details</a>
				<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
				<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
            </div>
        </div>

        <div class="box">
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='21'";
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
              <img src="admin/img/<?php echo $image.$row['image']; ?>" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $area.$row['area']; ?> </h3>
					<p style=" color: #192a56; font-size: 22px;"> <b><?php echo $resName.$row['resName']; ?></b> </p>
                <p>Awesome food and nice hosts. Very authentic Malaysian menu with plenty of other offerings. Was best food (flavours) that we experienced in Penang!
								
						</p>
              
                    <div class="price" style="margin-top: 1.2em;" ><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="restaurant/r9.php" class="btn">Show Details</a>
					<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
				<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
            </div>
        </div>
           

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='22'";
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
            <img src="admin/img/<?php echo $image.$row['image']; ?>" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $area.$row['area']; ?> </h3>
					<p style=" color: #192a56; font-size: 22px;"> <b><?php echo $resName.$row['resName']; ?></b> </p>
                <p>  Excellent barbecue pork and crispy duck. Both were good but next time we would get just the bbq pork--it was so good. We love fatty pork though. Friendly and helpful staff. Good price.		
						</p>
              
                    <div class="price" style="margin-top: 4.6em;" ><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="restaurant/r10.php" class="btn">Show Details</a>
			<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
				<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
            </div>
        </div>

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='23'";
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
             <img src="images/resta20.png" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $area.$row['area']; ?> </h3>
					<p style=" color: #192a56; font-size: 22px;"> <b><?php echo $resName.$row['resName']; ?></b> </p>
                <p> The old style of using banana leaf as a plate and piling up your food as you go along eating. The menu is mainly Indian cuisine. And when i say pack, i mean you can put as much food on your banana leaf plate and the place is usually pack with people. So, do come here if you’re in the mood for this type of food.
							
						</p>
              
                    <div class="price"  style="margin-top: 1.1em;"><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="restaurant/r11.php" class="btn">Show Details</a>
					<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
				<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
            </div>
        </div>

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='24'";
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
            <img src="admin/img/<?php echo $image.$row['image']; ?>" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $area.$row['area']; ?> </h3>
					<p style=" color: #192a56; font-size: 22px;"> <b><?php echo $resName.$row['resName']; ?></b> </p>
                <p> Nice food, reasonable priced. Ordered steam prawn, it was amazing! The Tom Yam Seafood soup is nice too. Must try the Special Tofu, yummy! The lady boss is nice. No worry about being hassled by street sellers here, they will just come and ask you nicely if you would like buy their stuff, and leave if you are not interested.
								
						</p>
              
                    <div class="price"  ><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="restaurant/r12.php" class="btn">Show Details</a>
			<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
				<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
            </div>
        </div>

    </div>

</section>

<!-- packages section ends -->




<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> ApaEat <i class="fas fa-shopping-basket"></i> </h3>
            <p>ApaEat is a website that provide rondom solution for FOOD! </p>
            <div class="share">
                 <a href="https://www.facebook.com" class="fab fa-facebook-f"></a>
                <a href="https://www.twitter.com" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com" class="fab fa-instagram"></a>
                <a href="https://www.linkedIn.com" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="https://chatwith.io/s/apaeat" class="links"> <i class="fas fa-phone"></i> +6018-3293885</a>
            <a href="https://chatwith.io/s/apaeat" class="links"> <i class="fas fa-phone"></i> +6012-2769234 </a>
            <a href="mailto:apaeat888@gmail.com" target="_blank" class="links"> <i class="fas fa-envelope"></i> apaeat888@gmail.com </a>
            <a href="https://goo.gl/maps/9yPngvtT1GUxQmK19" target="_blank" class="links"> <i class="fas fa-map-marker-alt"></i> Subang, Malaysia - 47000 </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="MainPage.php" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="Games.php" class="links"> <i class="fas fa-arrow-right"></i> game </a>
            <a href="recipe.php" class="links"> <i class="fas fa-arrow-right"></i> recipe </a>
            <a href="fullrecipe.php" class="links"> <i class="fas fa-arrow-right"></i> fullrecipe </a>
            <a href="restaurant.php" class="links"> <i class="fas fa-arrow-right"></i> restaurant </a>
			<a href="fullrestaurant.php" class="links"> <i class="fas fa-arrow-right"></i> fullrestaurant </a>
            <a href="contact.php" class="links"> <i class="fas fa-arrow-right"></i> contact </a>
			<a href="AboutUs.php" class="links"> <i class="fas fa-arrow-right"></i> about us </a>
        </div>

         <form  action="subsribe.php" method="post">
        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" name="email" id="email" placeholder="your email" class="email">
			
            <input type="submit" name="btn-send" value="subscribe" action="subsribe.php" class="btn" style="font-size: 15px;">
            <img src="image/payment.png" class="payment-img" alt="">
        </div>
		</form>

    </div>



</section>

<!-- footer section ends -->



















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->

  <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 4000);
    </script>
	<script src="js/script2.js"></script>

</body>
</html>