<?php require_once "controllerUserData.php"; 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/loginstyle.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
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
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="pass"   placeholder="Password" required >
						&nbsp;&nbsp;<span> <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="togglePW()"></i></span>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="signup-user.php">Signup now</a></div>
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