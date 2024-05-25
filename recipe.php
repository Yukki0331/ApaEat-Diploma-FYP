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
    <title>Recipe page</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>



	
<body>
    
<!-- header section starts      -->

<header>



    <a href="protect-this.php" class="Logo">ApaEat</a>

    <nav class="navbar">
        <a class="active" href="MainPage.php">Home</a>
        <a href="AboutUs.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="fullrecipe.php">All Recipe</a>
        <a href="restaurant.php">Restaurant</a>
        <a href="Games.php">Games</a>
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

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
                <div class="content">
                    <span>our special recipe</span>
                    <h3>Tuna Noodle Casserole</h3>
                    <p>Combine fruity sundried tomatoes with tinned tomatoes to make this rich tomato soup with a homemade basil pesto – perfect for the depths of winter.</p>
                    <a href="recipe/r1.php" class="btn">show recipe</a>
                </div>
                <div class="image">
                    <img src="images/home-img-1.png" alt="">
                </div>
            </div>
			
			<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='15'";
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

            <div class="swiper-slide slide">
                <div class="content">
                    <span>our special recipe</span>
                    <h3><?php echo $title.$row1['title']; ?></h3>
                    <p><?php echo $disc.$row1['disc']; ?></p>
                    <a href="recipe/r2.php" class="btn">show recipe</a>
                </div>
                <div class="image">
                    <img src="admin/img/<?php echo $image.$row1['image'];?>" alt="">
                </div>
            </div>

<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='16'";
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
            <div class="swiper-slide slide">
                <div class="content">
                    <span>our special recipe</span>
                    <h3><?php echo $title.$row1['title']; ?></h3>
                    <p><?php echo $disc.$row1['disc']; ?></p>
                    <a href="recipe/r3.php" class="btn">show recipe</a>
                </div>
                <div class="image">
				  <img src="admin/img/<?php echo $image.$row1['image'];?>" alt="">
                    
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- home section ends -->

<!-- dishes section starts  -->

<section class="dishes" id="dishes">

    <h3 class="sub-heading"> Our Recipes </h3>
    <h1 class="heading"> Popular Recipes </h1>

    <div class="box-container">
	
	<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='17'";
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

            <div class="box">
            
			 
            <img src="admin/img/<?php echo $image.$row1['image'];?>" alt="">
			<h4 style="font-size: 22px; "><?php echo $title.$row['title']; ?></h4>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
			
            <span class="fas fa-clock" style="font-size: 18px; ">&nbsp;&nbsp;130 Minutes</span>
            <a href="recipe/poR1.php" class="btn">show recipe</a>
        </div>

	
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
		

        <div class="box">
		   <img src= "admin/img/<?php echo $image.$row1['image'];?> " >
		
       
            <h4 style="font-size: 22px; "><?php echo $title.$row1['title']; ?></h4>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span class="fas fa-clock"  style="font-size: 18px; ">&nbsp;&nbsp;80 Minutes</span>
            <a href="recipe/poR2.php" class="btn">show recipe</a>
        </div>

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='19'";
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
            
            <img src="admin/img/<?php echo $image.$row1['image'];?>" alt="">
            <h4 style="font-size: 22px; "><?php echo $title.$row1['title']; ?></h4>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span class="fas fa-clock"  style="font-size: 18px; ">&nbsp;&nbsp;110 Minutes</span>
            <a href="recipe/poR3.php" class="btn">show recipe</a>
        </div>

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='20'";
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
            
            <img src="admin/img/<?php echo $image.$row1['image'];?>" alt="">
            <h4 style="font-size: 21px; "><?php echo $title.$row1['title']; ?></h4>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span class="fas fa-clock" style="font-size: 18px; ">&nbsp;&nbsp;100 Minutes</span>
            <a href="recipe/poR4.php" class="btn">show recipe</a>
        </div>

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='21'";
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
          
            <img src="admin/img/<?php echo $image.$row1['image'];?>" alt="">
           <h4 style="font-size: 22px; "><?php echo $title.$row1['title']; ?></h4>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span class="fas fa-clock" style="font-size: 18px; ">&nbsp;&nbsp;70 Minutes</span>
            <a href="recipe/poR5.php" class="btn">show recipe</a>
        </div>
		
		   <div class="box">
		   
		   	<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='22'";
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
            
            <img src="admin/img/<?php echo $image.$row1['image'];?>" alt="">
            <h4 style="font-size: 22px; "><?php echo $title.$row1['title']; ?></h4>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span class="fas fa-clock" style="font-size: 18px; ">&nbsp;&nbsp;60 Minutes</span>
            <a href="recipe/poR6.php" class="btn">show recipe</a>
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
            
            <img src="admin/img/<?php echo $image.$row1['image'];?>" alt="">
             <h4 style="font-size: 22px; "><?php echo $title.$row1['title']; ?></h4>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span class="fas fa-clock" style="font-size: 18px; ">&nbsp;&nbsp;90 Minutes</span>
            <a href="recipe/poR7.php" class="btn">show recipe</a>
        </div>


        <div class="box">
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='24'";
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
		
            
            <img src="admin/img/<?php echo $image.$row1['image'];?>" alt="">
            <h4 style="font-size: 22px; "><?php echo $title.$row1['title']; ?></h4>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
          <span class="fas fa-clock" style="font-size: 18px; ">&nbsp;&nbsp;15 Minutes</span>
            <a href="recipe/poR8.php" class="btn">show recipe</a>
        </div>

    </div>

</section>



<!-- dishes section ends -->


<!-- category section starts  -->

<section class="category">

    <a href="recipe/vegan.php" class="box">
        <img src="images/cat-1.png" alt="">
        <h3>Vegan</h3>
    </a>

    <a href="recipe/dessert.php" class="box">
        <img src="images/cat-2.png" alt="">
        <h3>Dessert</h3>
    </a>

    <a href="recipe/soup.php" class="box">
        <img src="images/cat-3.png" alt="">
        <h3>Soup</h3>
    </a>

    <a href="recipe/breakfast.php" class="box">
        <img src="images/cat-4.png" alt="">
        <h3>Breakfast</h3>
    </a>

    <a href="recipe/lunch.php" class="box">
        <img src="images/cat-5.png" alt="">
        <h3>Lunch</h3>
    </a>

    <a href="recipe/dinner.php" class="box">
        <img src="images/cat-6.png" alt="">
        <h3>Dinner</h3>
    </a>

</section>

<section class="category" style="background: #fff;  padding-top: 1px;" >

    <a href="recipe/airfryer.php" class="box">
        <img src="images/cat-7.png" alt="">
        <h3>Air Fryer</h3>
    </a>

    <a href="recipe/easy.php" class="box">
        <img src="images/cat-8.png" alt="">
        <h3>Quick & Easy</h3>
    </a>

    <a href="recipe/appetizer.php" class="box">
        <img src="images/cat-9.png" alt="">
        <h3>Appetizer</h3>
    </a>

    <a href="recipe/healthy.php" class="box">
        <img src="images/cat-10.png" alt="">
        <h3>Healthy</h3>
    </a>

    <a href="recipe/beverage.php" class="box">
        <img src="images/cat-11.png" alt="">
        <h3>Beverage</h3>
    </a>

    <a href="recipe/breads.php"class="box">
        <img src="images/cat-12.png" alt="">
        <h3>Breads</h3>
    </a>

</section>
<!-- category section ends -->





<!-- menu section starts  -->

<section class="menu" id="menu">

    <h3 class="sub-heading"> Our Menu </h3>
    <h1 class="heading"> ApaEat's Specials </h1>

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
                <p><?php echo $disc.$row1['disc']; ?></p>
				<br>
				
				<br>
			<span class="fas fa-clock" style="font-size: 18px; margin-top: 0.45em; ">&nbsp;&nbsp;120 Minutes</span>
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
				<span class="fas fa-clock" style="font-size: 18px; margin-top: 1.25em;">&nbsp;&nbsp;45 Minutes</span>
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
				<span class="fas fa-clock" style="font-size: 18px;  margin-top: 1.25em;">&nbsp;&nbsp;60 Minutes</span>
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
				<span class="fas fa-clock" style="font-size: 18px; margin-top: 1.25em; ">&nbsp;&nbsp;240 Minutes</span>
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
				<span class="fas fa-clock" style="font-size: 18px; margin-top: 1.25em; ">&nbsp;&nbsp;55 Minutes</span>
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
				<span class="fas fa-clock" style="font-size: 18px; margin-top: 1.25em; ">&nbsp;&nbsp;200 Minutes</span>
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
				<span class="fas fa-clock" style="font-size: 18px; margin-top: 1.25em;">&nbsp;&nbsp;30 Minutes</span>
				<br>
            <a href="recipe/menu7.php" class="btn">show recipe</a>
            </div>
        </div>

        <div class="box">
		
		<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM full_recipy where id='32'";
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
				<span class="fas fa-clock" style="font-size: 18px; margin-top: 1.25em;">&nbsp;&nbsp;140 Minutes</span>
				<br>
            <a href="recipe/menu8.php" class="btn">show recipe</a>
            </div>
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
            <a href="mailto:apaeat888@gmail.com" target="_blank" class="links"> <i class="fas fa-envelope"></i> apaeat888@gmail.com </a>
            <a href=="https://goo.gl/maps/9yPngvtT1GUxQmK19" target="_blank" class="links"> <i class="fas fa-map-marker-alt"></i> Subang, Malaysia - 47000 </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="MainPage.php" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="games.php" class="links"> <i class="fas fa-arrow-right"></i> game </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> recipe </a>
            <a href="fullrecipe.php" class="links"> <i class="fas fa-arrow-right"></i> fullrecipe </a>
            <a href="restaurant.php" class="links"> <i class="fas fa-arrow-right"></i> restaurant </a>
			<a href="fullrestaurant.php" class="links"> <i class="fas fa-arrow-right"></i> fullrestaurant </a>
		    <a href="aboutus.php" class="links"> <i class="fas fa-arrow-right"></i> about us </a>
            <a href="contact.php" class="links"> <i class="fas fa-arrow-right"></i> contact </a>
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
<script src="js/script.js"></script>

</body>
</html>