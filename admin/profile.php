<?php require_once "../controllerUserData.php"; ?>

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
<html>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <script src=https://kit.fontawesome.com/a076d05399.js"></script>
<head>
<title>Profile Page</title>

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
.text,
.email,
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

.text:focus,
.email:focus,
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
<center>
<div class="box">


<label for="file">Profile</label>



<br><br><br>
<br><br><br>
<br><br>
<b><p>Name: </p></b>
<p class="text"><?php echo $fetch_info['name'] ?></p>

<b><p>Email: </p></b>
<p class="email"><?php echo $fetch_info['email'] ?></p>

<b><p>Password: </p></b>

<center><input type="password" value="<?php echo $fetch_info['password'] ?>" disabled ></center>



<br>
	    <button class="btn"  name="submit1"><b><a href="edit-validate.php" style="color:black; text-decoration: none;">EDIT</a></b></button>
		<br><br>
		<button class="btn"  name="submit2"><b><a href="dashboard.php" style="color:black; text-decoration: none;">DASHBOARD</a></b></button>
        

</div>


</center>



</body>
</html>