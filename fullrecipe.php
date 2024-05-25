<?php
error_reporting(0);
include("connection/connect.php");
?>

<!DOCTYPE html>
<html class="no-js">

 <head>
        <title>Full Recipe</title>
        <!-- Bootstrap -->
        <link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="admin/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="css/fullrecipestyle.css" rel="stylesheet" media="screen">
		 
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="admin/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		 <link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="css/fullrecipestyle.css" rel="stylesheet" media="screen">
		
		  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

   

		
		    
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="admin/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
	
	
	
	
	<body>
	
	<header>



    <a href="protect-this.php" class="Logo">ApaEat</a>

    <center><nav class="navbar">
        <a class="active" href="MainPage.php">Home</a>
        <a href="aboutus.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="recipe.php">Recipe</a>
        <a href="restaurant.php">Restaurant</a>
        <a href="games.php">Game</a>
    </nav></center>

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

	
<br><br><br>

<center><table  class="table table-bordered" style=" width: 80%;">
						              <thead>
						                <tr>
						                   <th>Recipe Picture</th>
						                  <th>Recipe Name</th>
						                  <th>Description</th>
										
										   <th>Operation</th>
										   
						                </tr>
						              </thead>
						              <tbody></center>
									  
	<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM recipes ORDER BY rid DESC";
	 $result = mysqli_query($db, $sql);
while($row = mysqli_fetch_array($result))
{
	
       $rid =$row['rid'];
	    $rimage =$row['rimage'];
		 $rnames =$row['resname'];
		  $rtext =$row['rtext'];
		  		  $link =$row['link'];
				  
			
		  
									echo	'<tr>';
						               echo     " <td><img src='admin/img/$rimage'> </td>";
						             echo     " <td>".$rnames ."</td>";
						             echo    " <td>".$rtext ."</td>";
									
								
									echo	'   <td><a class="btn" href='.$link .'>Show recipe</a></td>';
									
									
									
						              echo  '</tr>';
	   
}
?>								  
									  
									  
									  
									  
						                
						                
										
										
										
										
										
										
						              </tbody>
						            </table>
									<script src="js/script.js"></script>
									</body>
									</html>