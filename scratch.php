<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" type="text/css" href="css/GameStyle.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700italic,700' rel='stylesheet' type='text/css'>
  
  <title>Scratch Card</title>
  <style type="text/css">
 html {
  box-sizing: border-box;
}
*, *:before, *:after {
  box-sizing: inherit;
}
.scratchpad{
  width: 350px;
  height: 345px;
  border: solid 10px #FFFFFF;
  margin-top: 20%;
}

#promo{
	margin-top:10%;
}
.scratch{
	position:fixed;
}
.scratch-container {
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  width:100%;
}
.promo-container {
	background:#FFF;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	width:450px;
	padding:20px;
	text-align:center;
	font-family:'Open Sans', Arial,Sans-serif;
	color:#333;
	font-size:16px;
	margin-top:120%;
}
.btn {
  background:#56CFD2;
  color:#FFF;
  padding:10px 25px;
  display:inline-block;
  margin-top:15px;
  text-decoration:none;
  font-weight:600;
  text-transform:uppercase;
  border-radius:3px;
  -moz-border-radius:3px;
  -webkit-border-radiuss:3px;
}
@media only screen and (max-width : 480px) {
  .scratchpad {width:400px;height:396px;}
  .scratch-container {width:400px !important;}
}
@media only screen and (max-width : 320px) {
  .scratchpad {width:290px;height:287px;}
  .scratch-container {width:290px !important;}
}

</style>
 
</head>
<body>
<header>
<a href="#" class="Logo">ApaEat</a>
<div class="group">
<ul class="navigation">
<li><a href="MainPage.php" >Home</a></li>
<li><a href="recipe.php">Recipe</a></li>
<li><a href="restaurant.php">Restaurant</a></li>
<li><a href="Games.php">Games</a></li>
<li><a href="contact.php">Contact</a></li>
<li> <a href="AboutUs.php">About</a></li>
</ul>
</div>
</header>

<section class="scratch">
<div class="scratch-container">
  <div id="promo" class="scratchpad"></div>
</div>
</section>
<section class="promobox">
<div class="promo-container" style="display:none;">
  <div class="promo-code"></div>
  <div class="promo-code2"></div>
  <a href="restaurant.php" class="btn">Go To Restaurant</a>
</div>
</section>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://jennamolby.com/scratch-and-win/js/wScratchPad.min.js"></script>
 
<script type="text/javascript">
 
var promoCode = '';
var bg1 = 'images/10.png';
var bg2 = 'images/15.png';
var bg3 = 'images/noluck.jpg';
var bg4 = 'images/20.png';
var bgArray= [ bg1, bg2, bg3, bg4 ],
selectBG = bgArray[Math.floor(Math.random() * bgArray.length)];
if (selectBG == bg1) {
    promoCode = 'AET10';
  } else if (selectBG == bg2) {
    promoCode = 'AET15';
  }else if (selectBG == bg3) {
    promoCode = '';
  } if (selectBG == bg4) {
    var promoCode = 'AET20';
  }
$('#promo').wScratchPad({
    // the size of the eraser
    size        : 70,    
    // the randomized scratch image   
    bg:  selectBG,
    // give real-time updates
    realtime    : true, 
    // The overlay image
    fg: 'images/frontv.jpg',
    // The cursor (coin) image
    'cursor': 'pointer',
    
    scratchMove: function (e, percent) {
        // Show the plain-text promo code and call-to-action when the scratch area is 50% scratched
        if ((percent > 50) && (promoCode != '')) {
          $('.promo-container').show();
          $('body').removeClass('not-selectable');
          $('.promo-code').html('Your promo code is: ' + promoCode);
		  $('.promo-code2').html('**This voucher is only applicable for dine in**');
        }
      }
 });
</script>
      
 
</body>
</html>