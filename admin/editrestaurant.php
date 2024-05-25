<?php 

include("../connection/connect.php");
error_reporting(0);



$resId = $GET['resId'];
$resName = $GET['resName'];
$area = $GET['area'];
$location = $GET['location'];
$pricerange = $GET['pricerange'];
$resPage = $GET['resPage'];
$image = $GET['image'];
$iimage2 = $GET['iimage2'];
$image3 = $GET['image3'];
?>






<?php
error_reporting(0);

   $mysqli = new mysqli("localhost","root","","userform");


if(isset($_POST['ssubmit'])){  



	   
		$resId = mysqli_real_escape_string($mysqli, $_POST['resId']);
		$resPage = mysqli_real_escape_string($mysqli, $_POST['resPage']);
		$location = mysqli_real_escape_string($mysqli, $_POST['location']);
		 $resName = mysqli_real_escape_string($mysqli, $_POST['resName']);
        $area = mysqli_real_escape_string($mysqli, $_POST['area']);
		 $pricerange = mysqli_real_escape_string($mysqli, $_POST['pricerange']);

 
  
	
if(!$resName=''||!$area==''||!$fnew==''||!$resPage==''||!$location==''||!$fnew2==''||!$fnew3==''||!$resId==''||!$pricerange=='')
		{	
										$sec= 	'<div class="alert alert-error alert-block">
													<a class="close" data-dismiss="alert" href="#">&times;</a>
													<h4 class="alert-heading">Error!</h4>
												All fields must be required
									
												</div>';
									
		
								
		}
	else
		{
		                         	
								
								$fname = $_FILES['file']['name'];
								$temp = $_FILES['file']['tmp_name'];
								$fsize = $_FILES['file']['size'];
								$fname2 = $_FILES['file2']['name'];
								$temp2 = $_FILES['file2']['tmp_name'];
								$fsize2 = $_FILES['file2']['size'];
								$fname3 = $_FILES['file3']['name'];
								$temp3 = $_FILES['file3']['tmp_name'];
								$fsize3 = $_FILES['file3']['size'];
								$extension = explode('.',$fname);
								$extension2 = explode('.',$fname2);
								$extension3 = explode('.',$fname3);
								$extension = strtolower(end($extension));  
								$extension2 = strtolower(end($extension2));  
								$extension3 = strtolower(end($extension3));  
								$fnew3 = uniqid().'.'.$extension3;
								$fnew2 = uniqid().'.'.$extension2;
								$fnew = uniqid().'.'.$extension;
   
								$store = "img/".basename($fnew);                      // the path to store the upload image
								$store2 = "img/".basename($fnew2);  
									$store3 = "img/".basename($fnew3); 
	
					if($extension == 'jpg'||$extension == 'png'||$extension == 'gif'||$extension2 == 'jpg'||$extension2 == 'png'||$extension2 == 'gif'||$extension3 == 'jpg'||$extension3 == 'png'||$extension3 == 'gif' )
					{        
									if($fsize&&$fsize2>=1000000)
										{
		
		
												$first= 	'<div class="alert alert-error alert-block">
															<a class="close" data-dismiss="alert" href="#">&times;</a>
															<h4 class="alert-heading">Error!</h4>
														Maximum upload size is 1Mb 
									
															</div>';
	   
										}		
									else
										{
											
												 
												
												
												move_uploaded_file($temp, $store);
												move_uploaded_file($temp2, $store2);
												move_uploaded_file($temp3, $store3);
				
				                                 $sql = "UPDATE restaurant SET image='$fnew',iimage2='$fnew2',image3='$fnew3', resName='$resName', area='$area', location='$location',  resPage='$resPage', pricerange='$pricerange' WHERE resId='$resId'";
	                                             mysqli_query($mysqli, $sql); 
	                                           
				
											
			  
												$q=	'<div class="alert alert-success">
													<button type="button" class="close" data-dismiss="alert">&times;</button>
														<h4>Success</h4>
															The Record Inserted successfully
							
													</div>';
                
			   
			
			
			 
					
				
	   
		
	
										}
					}
						
	    }



	
	
	

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
        <title>Admin Edit Restaurant Page</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
				 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		 		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
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
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i><i class="caret"></i>

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
				<input type="text" class="input" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" name="search"  placeholder="search restaurant">
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
                        <li >
                            <a href="recipes.php"><i class="icon-chevron-right"></i> Recipes</a>
                        </li>
						<li >
                            <a href="editrecipe.php"><i class="icon-chevron-right"></i>Edit Recipes</a>
                        </li>
                        <li>
                            <a href="detail.php"><i class="icon-chevron-right"></i>Detail Recipes</a>
                        </li>
						
						 <li >
                            <a href="editdetailrecipy.php"><i class="icon-chevron-right"></i>Edit Detail Recipes</a>
                        </li>
						 <li >
                            <a href="restaurant.php"><i class="icon-chevron-right"></i>Restaurant</a>
                        </li>
						<li class="active">
                            <a href="editrestaurant.php"><i class="icon-chevron-right"></i>Edit Restaurant</a>
                        </li>
						<li>
                            <a href="comment.php"><i class="icon-chevron-right"></i>Recipes Comments</a>
                        </li>
						<li>
                            <a href="restaurantcomment.php"><i class="icon-chevron-right"></i>Restaurant Comments</a>
                        </li>
                       
                    </ul>
                </div>
                
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">
					
					  <?php 
				    echo  $first;
					 echo  $sec;
					 echo  $th;
					
					
				   
					echo   $q;
					 
				  
				  ?>
                        
                        	<div class="navbar">
                            	<div class="navbar-inner">
	                                <ul class="breadcrumb">
	                                    <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
	                                    <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
	                                    <li>
	                                        <a href="#">Dashboard</a> <span class="divider">/</span>	
	                                    </li>
	                                    <li class="active">
	                                        <a href="#">Edit Restaurant</a>
	                                    </li>
	                                   
	                                    
	                                </ul>
                            	</div>
                        	</div>
                    	</div>
                    <div class="row-fluid">
					
					
					     <div class="row-fluid">
                        
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Restaurant</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
								
                                    <form class="form-horizontal" action='' method='post'  enctype="multipart/form-data">
                                      <fieldset>
                                        <legend>EDIT Restaurant  </legend>
										
										
										   <div class="control-group">
                                          <label class="control-label" for="fileInput"  >Restaurant Photo 1</label>
                                          <div class="controls">
										  
										  
										  <img src="../admin/img/<?php echo $_GET['image'] ?>" style="width:150px; height: 150px;" alt="">
										  <input class="input-file uniform_on" id="fileInput"  type="file"   name="file" >
                                           
                                          
										  </div>
                                        </div>
										
										 <div class="control-group">
                                          <label class="control-label" for="fileInput"  >Restaurant Photo 2</label>
                                          <div class="controls">
										  
										  
										  <img src="../admin/img/<?php echo $_GET['iimage2'] ?>" style="width:150px; height: 150px;" alt="">
										  <input class="input-file uniform_on" id="fileInput" type="file"   name="file2" >
                                           
                                          
										  </div>
                                        </div>
										
										

										<div class="control-group">
                                          <label class="control-label" for="fileInput"  >Restaurant Photo 3</label>
                                          <div class="controls">
										  
										  
										  <img src="../admin/img/<?php echo $_GET['image3'] ?>" style="width:150px; height: 150px;" alt="">
										  <input class="input-file uniform_on" id="fileInput" type="file"   name="file3" >
                                           
                                          
										  </div>
                                        </div>


										
										
										   <label class="control-label" >Restaurant ID </label>
                                          <div class="controls">
										  
                                            <input type="text"  name="resId" class="span6" id="typeahead" value="<?php echo $_GET['resId'] ?> " data-provide="typeahead"  data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' >
                                             
                                          </div>
										  
										  <br>

										
                                        <div class="control-group">
                                          <label class="control-label" >Restaurant Name </label>
                                          <div class="controls">
										  
                                            <input type="text"  name="resName" class="span6" id="typeahead" value="<?php echo $_GET['resName'] ?> " data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                             
                                          </div>
                                        </div>
										
										 <div class="control-group">
                                          <label class="control-label" >Area</label>
                                          <div class="controls">
										  
                                            <input type="text"  name="area" class="span6" id="typeahead" value="<?php echo $_GET['area'] ?> " data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                             
                                          </div>
                                        </div>
										
										
										 <div class="control-group">
                                          <label class="control-label" >Location</label>
                                          <div class="controls">
										  
                                            <input type="text"  name="location" class="span6" id="typeahead" value="<?php echo $_GET['location'] ?> " data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                             
                                          </div>
                                        </div>
										
                                       
                                      
										 <div class="control-group">
                                          <label class="control-label" >Restaurant Page </label>
                                          <div class="controls">
										  
                                            <input type="text"  name="resPage" class="span6" id="typeahead" value="<?php echo $_GET['resPage'] ?> "  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                             
                                          </div>
                                        </div>
										
										 <div class="control-group">
                                          <label class="control-label" >Price Range</label>
                                          <div class="controls">
										  
                                            <input type="text"  name="pricerange" class="span6" id="typeahead" value="<?php echo $_GET['pricerange'] ?> " data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                             
                                          </div>
                                        </div>
										
                                        <div class="form-actions">
                                         <input type='submit' name='ssubmit' value='Edit'class="btn btn-primary"/>
                                          <button type="reset" class="btn">Cancel</button>
                                        </div>
										
										
									
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
                       
            </div>
            <hr>
            
        </div>
       
		
		 <!--/.fluid-container-->
        <link href="vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

        <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/jquery.uniform.min.js"></script>
        <script src="vendors/chosen.jquery.min.js"></script>
        <script src="vendors/bootstrap-datepicker.js"></script>

        <script src="vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

	<script type="text/javascript" src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="assets/form-validation.js"></script>
        
	<script src="assets/scripts.js"></script>
        <script>

	jQuery(document).ready(function() {   
	   FormValidation.init();
	});
	

        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
		
    </body>

</html>