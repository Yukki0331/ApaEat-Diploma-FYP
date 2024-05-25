<?php
error_reporting(0);

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
							<center><form action="searchrestaurant.php" method="GET">
							
		<div class="search_wrap search_wrap_1">
			<div class="search_box">
				<input type="text" class="input" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" name="search"  placeholder="search...">
				<button class="button">
					<i class="fas fa-search"></i>
				</button>
			</div>
	
                                    
                                </form>
                          </center>
                          
                            
                       
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li >
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
						 <li  class="active">
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
                                <div class="muted pull-left">Recipes Table</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-bordered">
						              <thead>
						                <tr>
											 <th>Restauarnt ID </th>
						                  <th>Image</th>
										 
						                  <th>Restaurant Name</th>
										    <th>Area</th>
										  <th>Location</th>
						                
									
										  <th>Price Range</th>
										   <th>operation</th>
										   
										   <th>operation</th>
						                </tr>
						              </thead>
						              <tbody>
									  
                    
                          <?php 
                                    $con = mysqli_connect("localhost","root","","userform");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
										
										
                                        $query = "(SELECT * FROM restaurant WHERE CONCAT(resId, resName, area ) LIKE '%$filtervalues%' ) "; 
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
												?>
												<tr>
												
											
												
							
						                        <td><?= $row['resId']; ?></td>
												
												<td><img src="../admin/img/<?= $row['image']; ?>"></td>
												<td><?= $row['resName']; ?></td>
												<td><?= $row['area']; ?></td>
												<td><?= $row['location']; ?></td>
												<td><?= $row['pricerange']; ?></td>	
												
												<?php
										 echo	'   <td><a class="btn" href="editrestaurant.php?resId='.$row['resId'].'&resName='.$row['resName'].'&area='.$row['area'].'&location='.$row['location'].'&pricerange='.$row['pricerange'].'&resPage='.$row['resPage'].'&image='.$row['image'].'&iimage2='.$row['iimage2'].'&image3='.$row['image3'].'">Edit</a></td>';
									echo	'   <td><a class="btn btn-danger" href=restaurant.php?id='.$row['resId'].' style="color: red;"><i class="icon-remove icon-red"></i> Delete</a></td>';
									
									
								
	   
		
                                                
                                              
                                            }
                                        }
                                        else
                                        {
                                            
                                            echo'<td colspan="7"><center><b style=" font-size: 21px;">No Record Found</b></center></td>';
                                        }
                                    }
                                ?>
								</tr>
									
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                        
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