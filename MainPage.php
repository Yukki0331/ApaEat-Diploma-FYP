
<?php
error_reporting(0);
include("connection/connect.php");



?>



<!DOCTYPE html>
<html>
<head>
<title>FYP Project</title>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/MainStyle.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<script src="https://kit.fontawesome.com/5ad47112e7.js" crossorigin="anonymous"></script>

</head>
<body>
<header>

<a href="protect-this.php" class="logo">ApaEat</a>
<ul>
<li><a href="recipe.php">Recipe</a></li>
<li><a href="restaurant.php">Restaurant</a></li>
<li><a href="Games.php">Games</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</header>

<style>
.packages .box-container{
	
  display: flex;
  flex-wrap: wrap;
  gap:2rem;
}

.packages .box-container .box{
  flex:1 1 30rem;
  border-radius: .5rem;
  overflow: hidden;
  box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
}

.packages .box-container .box img{
  height: 25rem;
  width:100%;
  object-fit: cover;
}

.packages .box-container .box .content{
	  text-align: left;
  padding:2rem;
}

.packages .box-container .box .content h3{
  font-size:2rem;

  color:#333;
}

.packages .box-container .box .content h3 i{
  color:var(--orange);
}

.packages .box-container .box .content p{
  font-size:1.5rem;
  text-align: justify;
  color:#666;
  padding:1rem 0;
}

.packages .box-container .box .content .stars i{
  font-size:1.7rem;
  color:var(--orange);
}

.packages .box-container .box .content .price{
  font-size: 2rem;
  color:#333;
  padding-top: 1rem;
}

.packages .box-container .box .content .price span{
  color:#666;
  font-size: 1.5rem;
  text-decoration: line-through;
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

.menu .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.menu .box-container .box{
    background: #fff;
    border:.1rem solid rgba(0,0,0,.2);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);    
}

.menu .box-container .box .image{
    height: 25rem;
    width: 100%;
    padding:1.5rem;
    overflow: hidden;
    position: relative;
}

.menu .box-container .box .image img{
    height: 100%;
    width: 100%;
    border-radius: .5rem;
    object-fit: cover;
}

.menu .box-container .box .image .fa-heart{
    position: absolute;
    top:2.5rem; right: 2.5rem;
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    text-align: center;
    font-size: 2rem;
    background: #fff;
    border-radius: 50%;
    color:var(--black);
}

.menu .box-container .box .image .fa-heart:hover{
    background-color: var(--green);
    color:#fff;
}

.menu .box-container .box .content{
    padding:2rem;
	text-align: left;
    padding-top: 0;
}

.menu .box-container .box .content .stars{
    padding-bottom: 1rem;
}

.menu .box-container .box .content .stars i{
   font-size: 1.7rem;
   color:var(--green);
}

.menu .box-container .box .content h3{
    color:var(--black);
    font-size: 2.5rem;
}

.menu .box-container .box .content p{
    color:var(--light-color);
    font-size: 1.6rem;
    padding:.5rem 0;
    line-height: 1.5;
}

.menu .box-container .box .content .price{
    color:var(--green);
    margin-left: 1rem;
    font-size: 2.5rem;
}
.hea {
background: linear-gradient(#F38701, #eae2b7);
}


</style>

<section class="hea">
<img src="images/sun.png"  id="sun" class="sun" >
<img src="images/cloud.png" id="cloud" class="cloud">
<img src="images/cloud2.png" id="cloud2">
<img src="images/cloud3.png" id="cloud3">
<img src="images/cloud4.png" id="cloud4">
<img src="images/food.png" id="foodd">
<img src="images/hotpot.png" id="hotpot">
<img src="images/spaghettie.png" id="spaghettie">
<img src="images/nasilemak.png" id="nasilemak">
<img src="images/burger.png" id="burger">
<h5 id="text">Welcome</h5>
<a href="#features" id="btn" style="color:#130f40;">Explore</a>
<img src="images/restaurant.png" id="restaurant">

<script src="./move.js"></script>
</section>

<!-- features section starts  -->
    <section class="features" id="features"  >
    <br><br><br>

    <h1 class="heading"> Our <span class="span">Features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/game.png" >
            <h3>Games</h3>
            <p>Find out what to eat while having Fun at the same time!</p>
            <a href="Games.php" class="btn">Play Games!</a>
        </div>

        <div class="box">
            <img src="images/recipe.png" alt="">
            <h3>Recipe</h3>
            <p>Wanna stay at home to cook for yourself?<br> We provide up to hundred recipes!</p>
            <a href="recipe.php" class="btn">Find Recipe!</a>
        </div>

        <div class="box">
            <img src="images/restoran.png" alt="">
            <h3>Restaurant</h3>
            <p>Wanna eat out?<br> We provide restaurant details and reviews!</p>
            <a href="restaurant.php" class="btn">Find Restaurant!</a>
        </div>

    </div>

	<br><br><br><br><br><br>
	

	<!-- packages section starts  -->

<section class="packages" id="packages">

   <h1 class="heading"> Our Popular <span class="span">Restaurant</span> </h1>
   
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
		         
				<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:130px;"></i> </span>
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
						<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:130px;"></i> </span>
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
						<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:130px;"></i> </span>
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
		<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:130px;"></i> </span>
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
					<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:130px;"></i> </span>
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
             
                <div class="price" style="margin-top: 0.2em;" ><?php echo $pricerange.$row['pricerange']; ?> </div>
                <a href="restaurant/r6.php" class="btn">Show Details</a>
			<i class="fa-brands fa-whatsapp" style=" color: #F94001; font-size: 18px; margin-left:130px;"></i> </span>
							<a href="https://api.whatsapp.com/send?phone=60183294883" class="BPsyj" style="  font-size: 12px;">Book Now</a>
				
            </div>
        </div>

    </div>

</section>





	<br><br><br><br><br><br>
	


   
 <!-- menu section starts  -->

<section class="menu" id="menu">
        <h1 class="heading"> Our Popular <span class="span">Recipe</span> </h1>
    

    <div class="box-container">

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='25'";
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
                <img src="admin/img/<?php echo $image.$row1['image'];?>" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
               
				  <h3 style="font-size: 22px; "><?php echo $title.$row1['title']; ?></h3>
                <p align="left"><?php echo $disc.$row1['disc']; ?></p>
				<br>
				
				<br>
			<span class="fas fa-clock" style="font-size: 18px; margin-top: 0.45em; "><b>&nbsp;&nbsp;120 Minutes</b></span>
			<br>
            <a href="recipe/menu1.php" class="btn" style="align:right;">show recipe</a>
			
               
            </div>
        </div>

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='26'";
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
                <img src="admin/img/<?php echo $image.$row1['image'];?>" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
              
                <h3 style="font-size: 20px; "><?php echo $title.$row1['title']; ?></h3>
                <p><?php echo $disc.$row1['disc']; ?></p>
				<br>
				<span class="fas fa-clock" style="font-size: 18px; margin-top: 1.45em;"><b>&nbsp;&nbsp;45 Minutes</b></span>
				<br>
            <a href="recipe/menu2.php" class="btn">show recipe</a>
			
			
            </div>
        </div>

        <div class="box">
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='27'";
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
                <img src="admin/img/<?php echo $image.$row1['image'];?>" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
               
                 <h3 style="font-size: 22px; "><?php echo $title.$row1['title']; ?></h3>
                <p><?php echo $disc.$row1['disc']; ?></p>
				<br>
				<span class="fas fa-clock" style="font-size: 18px;  margin-top: 2.6em;"><b>&nbsp;&nbsp;60 Minutes</b></span>
				<br>
            <a href="recipe/menu3.php" class="btn">show recipe</a>
            </div>
        </div>

        <div class="box">
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='28'";
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
                <img src="admin/img/<?php echo $image.$row1['image'];?>" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
               
                 <h3 style="font-size: 22px; "><?php echo $title.$row1['title']; ?></h3>
                <p><?php echo $disc.$row1['disc']; ?></p>
				<br>
				<span class="fas fa-clock" style="font-size: 18px; margin-top: 2.75em; "><b>&nbsp;&nbsp;240 Minutes</b></span>
				<br>
            <a href="recipe/menu4.php" class="btn">show recipe</a>
            </div>
        </div>

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='29'";
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
                <img src="admin/img/<?php echo $image.$row1['image'];?>" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
              
               <h3 style="font-size: 22px; "><?php echo $title.$row1['title']; ?></h3>
                <p><?php echo $disc.$row1['disc']; ?></p>
				<br>
				<span class="fas fa-clock" style="font-size: 18px; margin-top: 2.75em; "><b>&nbsp;&nbsp;55 Minutes</b></span>
				<br>
            <a href="recipe/menu5.php" class="btn">show recipe</a>
            </div>
        </div>

        <div class="box">
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='30'";
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
                <img src="admin/img/<?php echo $image.$row1['image'];?>" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
               
               <h3 style="font-size: 22px; "><?php echo $title.$row1['title']; ?></h3>
                <p><?php echo $disc.$row1['disc']; ?></p>
				<br>
				<span class="fas fa-clock" style="font-size: 18px; margin-top: 1.25em; "><b>&nbsp;&nbsp;200 Minutes</b></span>
				<br>
            <a href="recipe/menu6.php" class="btn">show recipe</a>
            </div>
        </div>

     

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='31'";
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
                <img src="admin/img/<?php echo $image.$row1['image'];?>" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
              
                 <h3 style="font-size: 22px; "><?php echo $title.$row1['title']; ?></h3>
                <p><?php echo $disc.$row1['disc']; ?></p>
				<br>
				<span class="fas fa-clock" style="font-size: 18px; margin-top: 1.25em;  "><b>&nbsp;&nbsp;30 Minutes</b></span>
				<br>
            <a href="recipe/menu7.php" class="btn">show recipe</a>
            </div>
        </div>

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='33'";
	 $result = mysqli_query($db, $sql);
	 
	 
	 
while($row1 = mysqli_fetch_array($result))
{
	
       $id =$row1['id'];
	   
	   $title =$row1['title'];
	    $title_text =$row1['title_text'];
		$image =$row1['image'];
		 $ing_text =$row1['ing_text'];
		  $disc =$row1['disc'];
		  
		   


}
		
	 

?>
            <div class="image">
                <img src="admin/img/<?php echo $image.$row1['image'];?>" >
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <h3 style="font-size: 22px; "><?php echo $title.$row1['title']; ?></h3>
                <p><?php echo $disc.$row1['disc']; ?></p>
				<br>
				<span class="fas fa-clock" style="font-size: 18px; margin-top: 3.45em; "><b>&nbsp;&nbsp;140 Minutes</b></span>
				<br>
            <a href="recipe/menu8.php" class="btn">show recipe</a>
            </div>
        </div>

    </div>    

</section>

<!-- menu section ends -->



<br><br><br><br><br><br><br><br><br><br><br>
<!-- review section starts  -->


<h1 class="heading"> Our <span class="span">Reviews</span> </h1>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
 <div class="wrap">

            <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
            <span id="left-arrow" class="arrow left fa fa-chevron-left"></span>

            <ul class="dots" id="testim-dots">
                <li class="dot active"></li>
                <li class="dot"></li>
                <li class="dot"></li>
                <li class="dot"></li>
                <li class="dot"></li>
            </ul>

            <div class="cont" id="testim-content">

                <div class="active">
                    <div class="img"><img src="images/p.png"></div>
                    <h2>Gabriel Hans</h2>
                    <p>ApaEat gives users the opportunity to search and view the different restaurants in one place. The service is provided for free and it works without require to login
					or registerm wherein the user can easily view the website and search a restaurant or food by playing game. I have redeem few offers in the restaurant
					that can be found in ApaEat. </p>
                </div>
                
                <div>
                    <div class="img"><img src="images/pe.png"></div>
                    <h2>Harry Potter Den</h2>
                    <p>A very good website which allow me to choose out what to eat daily efficiently. Personally, I think the games is very useful
					  to pick out a selection. The only drawbacks is not so much restaurants provided.</p>
                </div>
                
                <div>
                    <div class="img"><img src="images/peo.png"></div>
                    <h2>Riahan Rings</h2>
                    <p>I've been using ApaEat for almost 3 months. I find it very useful especially with family or friends. The process finding food
					   was become so much easier and fun! Like the function which it doesn't require me to sign up and login. This help me save up a lot of times.</p>
                </div>
                
                <div>
                    <div class="img"><img src="images/peop.png"></div>
                    <h2>Victoria Secret</h2>
                    <p>A new user to ApaEat, recommended by a friend and find it very useful. Love the comment method in which no need to show who is commenting so
					   everyone can express their own feelings and thoughts. </p>
                </div>
                
                <div>
                    <div class="img"><img src="images/peopl.png"></div>
                    <h2>Florence Then</h2>
                    <p> I would say that I'm a big fan of Apaeat. Attract by the design and love the function. Only cons is that its only applicable to Malaysian.</p>
                </div>
            </div>
        <script src="./review.js"></script>

        </div>




</section>



<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> ApaEat <i class="fas fa-shopping-basket"></i> </h3>
            <p>ApaEat is a website that provide suggestions for FOOD! </p>
            <div class="share">
                <a href="www.facebook.com" class="fab fa-facebook-f"></a>
                <a href="www.twitter.com" class="fab fa-twitter"></a>
                <a href="www.instagram.com" class="fab fa-instagram"></a>
                <a href="www.linkedIn.com" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="https://chatwith.io/s/apaeat" class="links"> <i class="fas fa-phone"></i> +6018-3293885</a>
            <a href="https://chatwith.io/s/apaeat" class="links"> <i class="fas fa-phone"></i> +6012-2769234 </a>
            <a href="mailto:apaeat888@gmail.com" target="_blank" class="links"> <i class="fas fa-envelope"></i> apaeat888@gmail.com </a>
            <a href=="https://goo.gl/maps/9yPngvtT1GUxQmK19" target="_blank" class="links"> <i class="fas fa-map-marker-alt"></i> Subang, Malaysia - 47000 </a>
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








</body>
</html>

