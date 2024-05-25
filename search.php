
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <title>Search Recipe</title>
</head>
<style>

.box {
	width: 40%;
	margin: auto;
}


</style>

<body>

   <header>



    <a href="protect-this.php" class="Logo">ApaEat</a>

      <nav class="navbar">
        <a class="#" href="MainPage.php">Home</a>
        <a href="AboutUs.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="recipe.php">Recipe</a>
        <a href="restaurant.php">Restaurant</a>
        <a href="Games.php">Game</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
       
    </div>

</header>


<!-- search form  -->

<form action="search.php" method="GET" id="search-form">
    <input type="search" placeholder="search here..."  name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>"  id="search-box">
	<button class="search-box"><i class="fas fa-search"></i></button>
    <i class="fas fa-times" id="close"></i>
	
</form>

                                <?php 
                                    $con = mysqli_connect("localhost","root","","userform");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM recipes WHERE CONCAT(resname) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
												<br><br>
												<section class="menu" id="menu">
                                                <div class="box-container">
							<div class="box">
		
		
            <br><br>
            <div class="content">
                 <div class="image">
                <img src="admin/img/<?php echo $items['rimage'];?>" >
               
            </div>
                 <h3 style="font-size: 22px; "><?= $items['resname']; ?></h3>
                <p><?= $items['rtext']; ?></p>
				<br>
			
				
            <a href="<?= $items['link']; ?>" class="btn">show recipe</a>
            </div>
        </div>
		</div>
		</section>
		
                                                
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <section class="menu" id="menu">

                                                <div class="box-container">

        <div class="box">
            
            <div class="content" >
               
                <p ><b>No Record Found</b></p>
              
				
				
        </div>
		</div>
		</section>
                                            <?php
                                        }
                                    }
                                ?>
                            
               
<script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>