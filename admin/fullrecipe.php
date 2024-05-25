<?php
error_reporting(0);
include("../connection/connect.php");
?>

<!DOCTYPE html>
<html class="no-js">

 <head>
        <title>Admin Home Page</title>
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
        <link href="assets/styles.css" rel="stylesheet" media="screen">
		
		    
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
	
	<style>
	
	table {
		
		font-size: 15px;
		
	}
	</style>
	
	
	<body>
	


<table class="table table-bordered">
						              <thead>
						                <tr>
						                   <th>recipe ID </th>
						                  <th>Image</th>
						                  <th>Recipe Name</th>
						                  <th>Discription</th>
										
										   <th>operation</th>
										   
						                </tr>
						              </thead>
						              <tbody>
									  
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
						             echo    " <td>".$rid ."</td>";
						             echo     " <td>".$rimage ."</td>";
						             echo     " <td>".$rnames ."</td>";
						             echo    " <td>".$rtext ."</td>";
								
									echo	'   <td><a class="btn" href='.$link .'>Show recipe</a></td>';
									
									
									
						              echo  '</tr>';
	   
}
?>								  
									  
									  
									  
									  
						                
						                
										
										
										
										
										
										
						              </tbody>
						            </table>
									</body>
									</html>