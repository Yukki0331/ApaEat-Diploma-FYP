<?php 


$errors = array(); ?>

<?php
        
         session_start();
         $mysqli = new mysqli("localhost","root","","userform");

          //Get     
            $email=$_SESSION['email'];
          
            $stmt = $mysqli->prepare('SELECT * FROM usertable WHERE email=?');
            $stmt->bind_param('s', $_SESSION['email']);
            $stmt->execute();
            $result = $stmt->get_result();
            foreach ($result as $row) {
                $name= $row['name'];
                $password= $row['password'];
            }
        ?>


<?php 
if(isset($_POST['submittt'])){
	if ($_POST['pass']== $password) 
{ header('Location: edit.php');}


 else {
 $errors['password'] = "Passwords not matched!";
	
	
}}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Password Protect </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	 <script src=https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../css/loginstyle.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="edit-validate.php" method="POST" autocomplete="">
                    <h2 class="text-center" style="font-size:20px;" >Please key in your existing passsword to edit.</h2>
				
                     <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                  
                    <div class="form-group">
                        <input class="form-control" type="password" name="pass"  id="pwd2"  placeholder="Password" required>
						&nbsp;&nbsp;<span> <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="togglePW()" aria-hidden="true"></i></span>
                    </div>
                   
                    <div class="form-group">
                       <center> <input type="submit" value="submit" name="submittt"></center>
					    <center><button class="btn"  name="submit2"><b><a href="dashboard.php" style="color:black; text-decoration: none;">HOME</a></b></button></center>
                    </div>
             
                </form>
            </div>
        </div>
    </div>
	
	<script >
                     
                     function togglePW() {
						 
						 var password = document.querySelector('[name=pass]');
						 
						 
                      if(password.getAttribute('type')==='password') {
                     	
                     	 password.setAttribute("type", "text");
                     	 document.getElementById ("font").style.color='black';
                     	 
                      }
                      else {
                     	
                     	  password.setAttribute('type','password');
                     	  document.getElementById ("font").style.
						  color='white';
                     	  
                      }
                     }
                  </script>
    
</body>
</html>
