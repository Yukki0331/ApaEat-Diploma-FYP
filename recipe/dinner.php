<?php
error_reporting(0);
include("../connection/connect.php");




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinner Page</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

</head>



	
<body>
    
<!-- header section starts      -->

<header>



    <a href="../protect-this.php" class="Logo">ApaEat</a>

    <nav class="navbar">
         <a href="../MainPage.php">Home</a>
        <a href="../aboutus.php">About</a>
        <a href="../contact.php">Contact</a>
        <a href="../recipe.php">Recipe</a>
        <a href="../restaurant.php">Restaurant</a>
        <a href="../games.php">Game</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
       
    </div>

</header>

<!-- header section ends-->

<!-- search form  -->

<form action="search.php" method="GET" id="search-form">
    <input type="search" placeholder="search here..."  name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>"  id="search-box">
	<button class="search-box"><i class="fas fa-search"></i></button>
    <i class="fas fa-times" id="close"></i>
</form>







<!-- menu section starts  -->

<section class="menu" id="menu">
  
    <h3 class="sub-heading"> our recipe </h3>
    <h1 class="heading"> Dinner </h1>

    <div class="box-container">

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='18'";
	 $result = mysqli_query($db, $sql);
	 
while($row1 = mysqli_fetch_array($result))
{
	
       $id =$row1['id'];
	   $image =$row1['image'];
	   $title =$row1['title'];
	    $title_text =$row1['title_text'];
		 $ing_text =$row1['ing_text'];
		  $disc =$row1['disc'];
		  
		   


}
		
 

?>
		
            <div class="image">
                <img src="../admin/img/<?php echo $image.$row1['image'];?>" alt="">
              
            </div>
            <div class="content">
               
				  <h3 style="font-size: 22px; "><?php echo $title.$row1['title']; ?></h3>
                <p><?php echo $disc.$row1['disc']; ?></p>
				<br>
				
				<br>
			<span class="fas fa-clock" style="font-size: 18px; margin-top: 1.5em; ">&nbsp;&nbsp;80 Minutes</span>
			<br>
            <a href="poR2.php" class="btn" style="align:right;">show recipe</a>
			
               
            </div>
        </div>

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='23'";
	 $result = mysqli_query($db, $sql);
	 
while($row1 = mysqli_fetch_array($result))
{
	
       $id =$row1['id'];
	   $image =$row1['image'];
	   $title =$row1['title'];
	    $title_text =$row1['title_text'];
		 $ing_text =$row1['ing_text'];
		  $disc =$row1['disc'];
		  
		   


}
		
 

?>
		
            <div class="image">
                <img src="../admin/img/<?php echo $image.$row1['image'];?>" alt="">
                
            </div>
            <div class="content">
              
                <h3 style="font-size: 20px; "><?php echo $title.$row1['title']; ?></h3>
                <p><?php echo $disc.$row1['disc']; ?></p>
				<br>
				<span class="fas fa-clock" style="font-size: 18px; margin-top: 2.5em;  ">&nbsp;&nbsp;90 Minutes</span>
				<br>
            <a href="poR7.php" class="btn">show recipe</a>
			
			
            </div>
        </div>

        <div class="box">
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='50'";
	 $result = mysqli_query($db, $sql);
	 
while($row1 = mysqli_fetch_array($result))
{
	
       $id =$row1['id'];
	   $image =$row1['image'];
	   $title =$row1['title'];
	    $title_text =$row1['title_text'];
		 $ing_text =$row1['ing_text'];
		  $disc =$row1['disc'];
		  
		   


}
		
 

?>
		
            <div class="image">
                <img src="../admin/img/<?php echo $image.$row1['image'];?>" alt="">
              
            </div>
            <div class="content">
               
                 <h3 style="font-size: 22px; "><?php echo $title.$row1['title']; ?></h3>
                <p><?php echo $disc.$row1['disc']; ?></p>
				<br>
				<span class="fas fa-clock" style="font-size: 18px;  margin-top: 5.1em;  ">&nbsp;&nbsp;160 Minutes</span>
				<br>
            <a href="Dinner3.php" class="btn">show recipe</a>
            </div>
        </div>

        <div class="box">
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='51'";
	 $result = mysqli_query($db, $sql);
	 
while($row1 = mysqli_fetch_array($result))
{
	
       $id =$row1['id'];
	   $image =$row1['image'];
	   $title =$row1['title'];
	    $title_text =$row1['title_text'];
		 $ing_text =$row1['ing_text'];
		  $disc =$row1['disc'];
		  
		   


}
		
 

?>
		
            <div class="image">
                <img src="../admin/img/<?php echo $image.$row1['image'];?>" alt="">
               
            </div>
            <div class="content">
               
                 <h3 style="font-size: 22px; "><?php echo $title.$row1['title']; ?></h3>
                <p><?php echo $disc.$row1['disc']; ?></p>
				<br>
				<span class="fas fa-clock" style="font-size: 18px;  margin-top: 2.3em;  ">&nbsp;&nbsp;200 Minutes</span>
				<br>
            <a href="Dinner4.php" class="btn">show recipe</a>
            </div>
        </div>

        

</section>

<!-- menu section ends -->



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
            <a href="mailto:apaeat888@gmail.com" class="links" target="_blank"> <i class="fas fa-envelope"></i> apaeat888@gmail.com </a>
            <a href="https://goo.gl/maps/9yPngvtT1GUxQmK19" class="links" target="_blank"> <i class="fas fa-map-marker-alt"></i> Subang, Malaysia - 47000 </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="../MainPage.php" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="../Games.php" class="links"> <i class="fas fa-arrow-right"></i> game </a>
            <a href="../recipe.php" class="links"> <i class="fas fa-arrow-right"></i> recipe </a>
            <a href="../fullrecipe.php" class="links"> <i class="fas fa-arrow-right"></i> fullrecipe </a>
            <a href="../restaurant.php" class="links"> <i class="fas fa-arrow-right"></i> restaurant </a>
					<a href="../fullrestaurant.php" class="links"> <i class="fas fa-arrow-right"></i> fullrestaurant </a>
            <a href="../contact.php" class="links"> <i class="fas fa-arrow-right"></i> contact </a>
			<a href="../AboutUs.php" class="links"> <i class="fas fa-arrow-right"></i> about us </a>
        </div>

         <form  action="subsribe.php" method="post">
        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" name="email" id="email" placeholder="your email" class="email">
			
            <input type="submit" name="btn-send" value="subscribe" action="../subsribe.php" class="btn" style="font-size: 15px;">
            <img src="image/payment.png" class="payment-img" alt="">
        </div>
		</form>

    </div>



</section>

<!-- footer section ends -->

















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="../js/script.js"></script>

</body>
</html>