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
    <title>Halal Restaurant Page</title>

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
        <a href="../MainPage.php">Home</a>
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
     <h1 class="heading"> Halal Restaurant </h1>

    <div class="box-container">

        <div class="box">
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='31'";
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
                <p>Satay Zul satay is the best! Tasty and meaty and the peanut sauce is thick and delicious! Keep up the great taste. The price was good and the service was efficient.
					
					</p>
              
                    <div class="price" style="margin-top: 4.5em;" ><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="r19.php" class="btn">Show Details</a>
					<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
				<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
            </div>
        </div>

        <div class="box">
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='32'";
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
                <p>The food quality and variety is excellent. The staff is very pleasant and helpful. Breakfast has Asian, Malaysian and western food. Juices, teas, and variety of coffee is offered.	
						</p>
              
                    <div class="price"  style="margin-top: 4.6em;"><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="r20.php" class="btn">Show Details</a>
				<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
				<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
            </div>
        </div>

        <div class="box">
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='33'";
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
                <p>Winner of the Best Innovative Ethnic Restaurant for the 20th Malaysia Tourism Award 2018 A unique local homegrown restaurant set in the heart of Kuching city serving authentic Sarawakian food prepared by a team of enthusiastic and passionate food lovers.		
						</p>
              
                    <div class="price" style="margin-top: 1.2em;" ><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="r21.php" class="btn">Show Details</a>
				<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
				<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
            </div>
        </div>
           

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='34'";
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
                <p> An old and traditional recipe maintained by siblings. Probably the best Mee Rebus in Johor and Malaysia. Will always like the Mee Rebus.
						</p>
              
                    <div class="price" style="margin-top: 3.5em;" ><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="r22.php" class="btn">Show Details</a>
					<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
				<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
            </div>
        </div>

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='35'";
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
                <p> Unique twist to the usual chicken rice. Plenty of nyonya dishes to choose from too, if you are not a fan of chicken. Good SOP in place during COVID. Recommended!	
						</p>
              
                    <div class="price"  style="margin-top: 2.35em;"><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="r23.php" class="btn">Show Details</a>
				<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:100px;"></i> </span>
				<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
            </div>
        </div>

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM restaurant where resId='36'";
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
                <p> The view is fantastic but lots of stalls selling seafood and not sure which is better.. The service of the stall owner was good. But the food only so so.. Prefer Hai tien seafood, that this.		
						</p>
              
                    <div class="price" style="margin-top: 1.2em;" ><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="r24.php" class="btn">Show Details</a>
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