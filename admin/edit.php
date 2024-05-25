


<!DOCTYPE html>
<html>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<title>Edit Profile Page</title>

</head>
<style>
body{
background-color:#FFD580;
}
*:focus{
outline: none;
}
.box{
box-sizing: border-box;
width: 153px;
height: 153px;
border:2px solid black;;
box-shadow: -3px -3px 7px #ffffff73,
3px 3px 5px rgba(94,104,121,0.288);
border-radius: 50%;
background-color: #fff7ed;
margin-top: 50px;
border-radius: 5px;

width: 360px;
height: 600px;
transition: all 1s;
}

img{
box-sizing: border-box;
width:149px;
height:149px;
border-radius:50%;
margin:0;
border:5px solid #0082e6;
padding: 3px;
background-color: white;
overflow: hidden;
transition: all 1s;

}
.box:hover img{
width: 100px;
height: 100px;
margin:20px 35% ;
}
hr{
width:500px;
line-height:20px;
margin:10px 10px 10px 10px;
}
input[type="text"],
input[type="email"],
input[type="password"] {
display: block;
box-sizing: border-box;
color: black;

padding: 4px;
width: 220px;
height: 32px;
border: none;
border-bottom: 2px solid black;
font-family: 'Roboto', sans-serif;
font-weight: 400;
font-size: 15px;
transition: 0.2s ease;
background: none;
}
input[type="text"]{
margin-top: 25px;
}
input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus {
border-bottom: 2px solid black;
border-bottom-right-radius:20px;
color: black;
transition: 0.2s ease;
background: #FFD580;
border-top: none;
}


.btn{
border:1px solid #3498db;
background-color: #DD571C;
color:white;
height: 30px;
width: 100px;
border-radius: 5px;
left:0;
margin:0px;
transition: all .3s;
}
.btn:hover{
transform: scale(1.1);
background-color: #566573;
}
input[type="file"]{
display:none;
}
label{
box-sizing: border-box;
width:40px;
height:20px;
background-color: #FFD580;
color:white;
border:1px solid black;

color:black;
padding: 4px;
border-radius: 2px;
}
label:hover{
background-color: #566573;
transform: scale(1.1);
}
</style>
<body>

<center><div class="box">

<form action="edit.php" method="POST" autocomplete="">
<center><label for="file">Profile</label></center>

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



<br><br><br>
<br><br><br>
<br><br>
<center><b><p>Name: </p></b></center>
<center><input type="text"name='name' id='txtname' value="<?php echo $row['name'] ?>" ></center>
<center><b><p>Email: </p></b></center>
<center><input type="email" name='email' id='txtemail' value="	<?php echo $row['email'] ?>  " disabled></center>
<center><b><p>Password: </p></b></center>
<center><input type="password" name='password' id='txtpwd' value="<?php echo $row['password'] ?>" id="pwd2" ></center>
<span style=" margin-right:195px;"> <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="togglePW()"></i></span>


<br><br><br>
	   	    <center><button class="btn " style=" width:70px; color:black; text-decoration: none;" name="save"><b>UPDATE</b></button></center>
		<br>
		<center><button class="btn"  name="submit2"><b><a href="profile.php" style="color:black; text-decoration: none;">PROFILE</a></b></button></center>
        

</div></center>




<?php

//edit function
// Attempt update query execution
if(isset($_POST['save'])){   
    $newname= $_POST['name'];
    $newpwd= $_POST['password'];
    $mysqli = new mysqli("localhost","root","","userform");
    $sql = "UPDATE usertable SET name='$newname', password='$newpwd' WHERE email='$email'";
    if ($mysqli->query($sql) === TRUE) {
		
        echo "<script>
        alert('Record updated successfully!');
        </script>";
      
                
               
        

    } else {
        echo "<script>
        alert('Record not updated!');
        </script>";
        echo "Error updating record: " . $mysqli->error;
    }
}



?>


<script >
                     
                     function togglePW() {
						 
						 var password = document.querySelector('[name=password]');
						 
						 
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