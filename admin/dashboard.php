<?php
error_reporting(0);
include("../connection/connect.php");
include("../controllerUserData.php");





?>

<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: ../reset-code.php');
            }
        }else{
            header('Location: ../user-otp.php');
        }
    }
}else{
    header('Location: ../login-user.php');
}
?>
                                                                   





<!DOCTYPE html>
<html class="no-js">

<style>




.search_wrap .search_box{
	position: relative;
	width: 150px;
	height: 18px;
}

.search_wrap .search_box .input{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	padding: 10px 20px;
	border-radius: 10px;
	font-size: 18px;
}

.search_wrap .search_box .button {
	
   height: 5px;
	
}



.search_wrap .search_box .button .fas{
	margin-top: 10px;
	margin-left: 145px;
	position: relative;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	color: black;
	font-size: 18px;
}



.search_wrap.search_wrap_1 .search_box .input{
	padding-right: 80px;
}

.image__overlay {
	position: absolute;
	top: 0;
	left: 0;
	width: 248px; 
	height: 190px;
	background: rgba(0, 0, 0, 0.6);
	color: #ffffff;
	font-family: 'Quicksand', sans-serif;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	opacity: 0;
	transition: opacity 0.25s;
}

.image__overlay--blur {
	backdrop-filter: blur(5px);
}

.image__overlay--primary {
	background: #f5c77e;
}

.image__overlay>* {
	transform: translateY(20px);
	transition: transform 0.25s;
}

.image__overlay:hover {
	opacity: 0.95;
}

.image__overlay:hover>* {
	transform: translateY(0);
}

.image__title {
	font-size: 2em;
	font-weight: bold;
}

.image__description {
	font-size: 1.25em;
	margin-top: 0.25em;
}


</style>

    
    <head>
        <title>Admin Home Page</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
		   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script src="https://kit.fontawesome.com/5ad47112e7.js" crossorigin="anonymous"></script>

		
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i><?php echo $fetch_info['name'] ?><i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="profile.php">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="../logout-user.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="#">Dashboard</a>
                            </li>
							
							 </ul>
							
                          
                            
                       
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active">
                            <a href="dashboard.php"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="recipes.php"><i class="icon-chevron-right"></i> Recipes</a>
                        </li>
						<li>
                            <a href="editrecipe.php"><i class="icon-chevron-right"></i>Edit Recipes</a>
                        </li>
                         <li>
                            <a href="detail.php"><i class="icon-chevron-right"></i>Detail Recipes</a>
                        </li>
						 <li >
                            <a href="editdetailrecipy.php"><i class="icon-chevron-right"></i>Edit Detail Recipes</a>
                        </li>
						 <li>
                            <a href="restaurant.php"><i class="icon-chevron-right"></i>Restaurant</a>
                        </li>
						 <li>
                            <a href="editrestaurant.php"><i class="icon-chevron-right"></i>Edit Restaurant</a>
                        </li>
						<li>
                            <a href="comment.php"><i class="icon-chevron-right"></i>Recipes Comments</a>
                        </li>
						<li>
                            <a href="restaurantcomment.php"><i class="icon-chevron-right"></i>Restaurants Comments</a>
                        </li>
                       
                       
                    </ul>
                </div>
                
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">
                        <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Success</h4>
                        	your'e  successfully Login to Main Frame Account.</div>
                        	<div class="navbar">
                            	<div class="navbar-inner">
	                                <ul class="breadcrumb">
	                                    <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
	                                    <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
	                                    <li>
	                                        <a href="#">Dashboard</a> 
	                                    </li>
	                                    
	                                </ul>
                            	</div>
                        	</div>
                    	</div>
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Statistics</div>
                                <div class="pull-right">

                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span3">
                                    <div class="chart" data-percent="73">73%</div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Visitors</span>

                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="chart" data-percent="53">53%</div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Page Views</span>

                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="chart" data-percent="83">83%</div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Users</span>

                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="chart" data-percent="66">66%</div>
                                    <div class="chart-bottom-heading"><span class="label label-info">Recipes</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                   
                        
                 
                       
                      
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Gallery</div>
                                <div class="pull-right">

                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="row-fluid padd-bottom" >
                                  <div class="span3" style="position: relative;">
                                      <a href="#" class="thumbnail">
                                        <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src='../images/A1.png'/>
										
									 </a>
									 <div class="image__overlay image__overlay--primary">
									 <div class="image__title">Breakfast</div>
									 <p class="image__description">
										A1.png
									 </p>
									 </div>
									
										
                                  </div>
                                  <div class="span3" style="position: relative;">
                                      <a href="#" class="thumbnail">
                                          <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src='../images/A2.png'/>
										
									
									</a>
									 <div class="image__overlay image__overlay--primary">
									 <div class="image__title">Breakfast</div>
									 <p class="image__description">
											A2.png
									 </p>
									 </div>

                                  </div>
                                  <div class="span3" style="position: relative;">
                                      <a href="#" class="thumbnail">
                                          <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src='../images/A4.png'/>
										
									 </a>
									 <div class="image__overlay image__overlay--primary">
									 <div class="image__title">Breakfast</div>
									 <p class="image__description">
											A4.png
									 </p>
									 </div>
                                  </div>
                                  <div class="span3" style="position: relative;">
                                      <a href="#" class="thumbnail">
                                          <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src='../images/bread1.png'/>
										
									  </a>
									   <div class="image__overlay image__overlay--primary">
									 <div class="image__title">Bread</div>
									 <p class="image__description">
										bread1.png
									 </p>
									 </div>
                                  </div>
                                </div>

                                <div class="row-fluid padd-bottom">
                                  <div class="span3" style="position: relative;">
                                      <a href="#" class="thumbnail">
                                          <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src='../images/bread2.png'/>
										
									  </a>
									   <div class="image__overlay image__overlay--primary">
									 <div class="image__title">Bread</div>
									 <p class="image__description">
										bread2.png
									 </p>
									 </div>
                                  </div>
                                  <div class="span3" style="position: relative;">
                                      <a href="#" class="thumbnail">
                                          <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src='../images/bread3.png'/>
										
									 </a>
									  <div class="image__overlay image__overlay--primary">
									 <div class="image__title">Bread</div>
									 <p class="image__description">
										bread3.png
									 </p>
									 </div>
                                  </div>
                                  <div class="span3" style="position: relative;">
                                      <a href="#" class="thumbnail">
                                          <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src='images/jannis-brandt-107231-2-260x180.jpg'/>
									 
								   </a>
								    <div class="image__overlay image__overlay--primary">
									 <div class="image__title">Healthy</div>
									 <p class="image__description">
									  pokebowl.png
									 </p>
									 </div>
                                  </div>
                                  <div class="span3" style="position: relative;">
                                      <a href="#" class="thumbnail">
                                          <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src='images/images (1).jpg'/>
										 
									  </a>
									   <div class="image__overlay image__overlay--primary">
									 <div class="image__title">Lunch</div>
									 <p class="image__description">
										nasilemak.png
									 </p>
									 </div>
                                  </div>
                                </div>
								
								<div class="row-fluid padd-bottom">
                                  <div class="span3" style="position: relative;">
                                      <a href="#" class="thumbnail">
                                          <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src='../images/D3.png'/>
										
									  </a>
									   <div class="image__overlay image__overlay--primary">
									 <div class="image__title">Dinner</div>
									 <p class="image__description">
										D3.png
									 </p>
									 </div>
                                  </div>
                                  <div class="span3" style="position: relative;">
                                      <a href="#" class="thumbnail">
                                          <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src='../images/D4.png'/>
										
									 </a>
									  <div class="image__overlay image__overlay--primary">
									 <div class="image__title">Dinner</div>
									 <p class="image__description">
										D4.png
									 </p>
									 </div>
                                  </div>
                                  <div class="span3" style="position: relative;">
                                      <a href="#" class="thumbnail">
                                          <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src='../images/curry.png'/>
									 
								   </a>
								    <div class="image__overlay image__overlay--primary">
									 <div class="image__title">Vegan</div>
									 <p class="image__description">
										curry.png
									 </p>
									 </div>
                                  </div>
                                  <div class="span3" style="position: relative;">
                                      <a href="#" class="thumbnail">
                                          <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src='../images/H2.png'/>
										 
									  </a>
									   <div class="image__overlay image__overlay--primary">
									 <div class="image__title">Healthy</div>
									 <p class="image__description">
										H2.png
									 </p>
									 </div>
                                  </div>
                                </div>

                                <div class="row-fluid padd-bottom">
                                  <div class="span3" style="position: relative;">
                                      <a href="#" class="thumbnail">
                                          <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src='../images/H3.png'/>
										 
									 </a>
									  <div class="image__overlay image__overlay--primary">
									 <div class="image__title">Healthy</div>
									 <p class="image__description">
										H3.png
									 </p>
									 </div>
                                  </div>
                                  <div class="span3" style="position: relative;">
                                      <a href="#" class="thumbnail">
                                          <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src='../images/H4.png'/>
										
									  </a>
									   <div class="image__overlay image__overlay--primary">
									 <div class="image__title">Healthy</div>
									 <p class="image__description">
										H4.png
									 </p>
									 </div>
                                  </div>
                                  <div class="span3" style="position: relative;">
                                      <a href="#" class="thumbnail">
                                          <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src='../images/r4.png'/>
										 
									  </a>
									   <div class="image__overlay image__overlay--primary">
									 <div class="image__title">Restaurant</div>
									 <p class="image__description">
										r4.png
									 </p>
									 </div>
                                  </div>
                                  <div class="span3" style="position: relative;">
                                      <a href="#" class="thumbnail">
                                          <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src='../images/r16.png'/>
										  
									 </a>
									  <div class="image__overlay image__overlay--primary">
									 <div class="image__title">Restaurant</div>
									 <p class="image__description">
										r16.png
									 </p>
									 </div>
                                  </div>
                                </div>
								
								   <div class="row-fluid padd-bottom">
                                  <div class="span3" style="position: relative;">
                                      <a href="#" class="thumbnail">
                                          <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src='../images/r7.png'/>
										 
									 </a>
									  <div class="image__overlay image__overlay--primary">
									 <div class="image__title">Restaurant</div>
									 <p class="image__description">
										r7.png
									 </p>
									 </div>
                                  </div>
                                  <div class="span3" style="position: relative;">
                                      <a href="#" class="thumbnail">
                                          <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src='../images/r18.png'/>
										
									  </a>
									   <div class="image__overlay image__overlay--primary">
									 <div class="image__title">Restaurant</div>
									 <p class="image__description">
										r18.png
									 </p>
									 </div>
                                  </div>
                                  <div class="span3" style="position: relative;">
                                      <a href="#" class="thumbnail">
                                          <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src='../images/ra2.png'/>
										 
									  </a>
									   <div class="image__overlay image__overlay--primary">
									 <div class="image__title">Restaurant</div>
									 <p class="image__description">
										ra2.png
									 </p>
									 </div>
                                  </div>
                                  <div class="span3" style="position: relative;">
                                      <a href="#" class="thumbnail">
                                          <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src='../images/ra10.png'/>
										  
									 </a>
									  <div class="image__overlay image__overlay--primary">
									 <div class="image__title">Restaurant</div>
									 <p class="image__description">
										ra10.png
									 </p>
									 </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
            <hr>
          
        </div>
        <!--/.fluid-container-->
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="assets/scripts.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
    </body>

</html>