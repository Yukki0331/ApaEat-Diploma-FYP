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
    <title>Vegan Restaurant Page</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<script src="https://kit.fontawesome.com/5ad47112e7.js" crossorigin="anonymous"></script>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/restaurantstyle.css">

</head>



	
<body>
    
<!-- header section starts      -->

<header>



    <a href="../protect-this.php" class="Logo">ApaEat</a>

    <nav class="navbar">
        <a  href="../MainPage.php">Home</a>
        <a href=".../AboutUs.php">About</a>
        <a href="../contact.php">Contact</a>
        <a href="../recipe.php">Recipe</a>
        <a href="../restaurant.php">Restaurant</a>
        <a href=".../Games.php">Game</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
       
    </div>

</header>

<!-- header section ends-->

<!-- search form  -->
<form action="../searchrestaurant.php" method="GET" id="search-form">
    <input type="search" placeholder="search here..."  name="ssearch" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>"  id="search-box">
	<button class="search-box"><i class="fas fa-search"></i></button>
    <i class="fas fa-times" id="close"></i>
</form>





<!-- packages section starts  -->

<section class="packages" id="packages">

    <h3 class="sub-heading"> our restaurant </h3>
     <h1 class="heading"> Vegan Restaurant </h1>

    <div class="box-container">

        <div class="box">
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='25'";
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
            <img src="../admin/img/<?php echo $image.$row['image']; ?>" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $area.$row['area']; ?> </h3>
					<p style=" color: #192a56; font-size: 22px;"> <b><?php echo $resName.$row['resName']; ?></b> </p>
                <p>Hi there, enjoy our clean, healthy and delicious variety of Poke Bowls. You can customize your own Poke Bowls with multiple add-ons according to your choice. We are Fitlicious because we serve food that will help you keep "Fit" and "Delicious" because all of our natural ingredients. So what are you waiting for? Come now to our shop and have a have a bowl of goodness from us.	
						</p>
              
                    <div class="price" style="margin-top: 1.2em;" ><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="r13.php" class="btn">Show Details</a>
				<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
				<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
            </div>
        </div>

        <div class="box">
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='26'";
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
            <img src="../admin/img/<?php echo $image.$row['image']; ?>" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $area.$row['area']; ?> </h3>
					<p style=" color: #192a56; font-size: 22px;"> <b><?php echo $resName.$row['resName']; ?></b> </p>
                <p>Very cheap and tasty buffet lunch. Twenty different types of food. Alacarte for dinner. Can be expensive according to order. Honest workers who returned handbag accidentaly left...intact.
							
						</p>
              
                    <div class="price"  style="margin-top: 5.9em;"><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="r14.php" class="btn">Show Details</a>
				<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
				<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
            </div>
        </div>

        <div class="box">
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='27'";
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
              <img src="../admin/img/<?php echo $image.$row['image']; ?>" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $area.$row['area']; ?> </h3>
					<p style=" color: #192a56; font-size: 22px;"> <b><?php echo $resName.$row['resName']; ?></b> </p>
                <p>A new decent vegetarian place in Selayang to go for if you're looking for home cooked cuisine and affordable vegetarian meals. Their bak kut Teh with rice is quite popular among local customers too.	
							
						</p>
              
                    <div class="price" style="margin-top: 6.2em;" ><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="r15.php" class="btn">Show Details</a>
				<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
				<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
            </div>
        </div>
           

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='28'";
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
            <img src="../admin/img/<?php echo $image.$row['image']; ?>" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $area.$row['area']; ?> </h3>
					<p style=" color: #192a56; font-size: 22px;"> <b><?php echo $resName.$row['resName']; ?></b> </p>
                <p> Traditionally, research into vegetarianism focused mainly on potential nutritional deficiencies, but in recent years, the pendulum has swung the other way, and studies are confirming the health benefits of meat-free eating.
						
						</p>
              
                    <div class="price" style="margin-top: 6.6em;" ><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="r16.php" class="btn">Show Details</a>
				<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
				<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
				</div>
        </div>

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='29'";
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
             <img src="../admin/img/<?php echo $image.$row['image']; ?>"" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $area.$row['area']; ?> </h3>
					<p style=" color: #192a56; font-size: 22px;"> <b><?php echo $resName.$row['resName']; ?></b> </p>
                <p> SUPE strivings in providing the best and sincerest Japanese Vegan Cuisine in town. We hope SUPE will always be the place where you seek your best comfort with love.
						
						</p>
              
                    <div class="price"  style="margin-top: 9.1em;"><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="r17.php" class="btn">Show Details</a>
				<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
				<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
            </div>
        </div>

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='30'";
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
            <img src="../admin/img/<?php echo $image.$row['image']; ?>" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $area.$row['area']; ?> </h3>
					<p style=" color: #192a56; font-size: 22px;"> <b><?php echo $resName.$row['resName']; ?></b> </p>
                <p> Situated along the main street of terengganu's chinatown, this is a convenient location for tourists visiting the islands from shahbandar jetty. Reasonably priced, generous portions, clean and friendly staff, it is a great place to have some local eats. For those of you wanting to take some home for fellow vegetarians back home, you can place a request to take away the nasi kerabu and they will happily oblige and pack it nicely for you. I even asked is i could get then to keep it for me when i went wandering around kuala Terengganu and they said yes.
								
						</p>
              
                    <div class="price"  ><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="r18.php" class="btn">Show Details</a>
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
            <a href="#" class="links"> <i class="fas fa-envelope"></i> apaeat888@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Subang, Malaysia - 47000 </a>
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
            <input type="email" name="email" id="email" placeholder="your email" class="email" style=" background: white; ">
			
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