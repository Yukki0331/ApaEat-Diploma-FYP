<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link href="../styles/main.css" rel="stylesheet" type="text/css">
  <link href="../public/styles.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>


html {
        scroll-behavior: smooth;    
    }
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;  
  background-color: white;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a:hover{
	color: orange;
}


/* Set the size of the div element that contains the map */
#map {
  height: 400px;
  /* The height is 400 pixels */
  width: 100%;
  /* The width is the width of the web page */
}

</style>


</head>
<body class="bg-blue-50">
    <!-- Header Navigation Section -->
    <header>
        <nav class="bg-white shadow-lg fadeInTop">
			<div class="max-w-6xl mx-auto px-4">
				<div class="flex justify-between">
					<div class="flex space-x-7">
						<div>
							<!-- Website Logo -->
							<a href="protect-this.php" class="flex items-center py-4 px-2" style="font-size: 1.8em; font-weight: 700; text-decoration: none; color: #ff7800; border-radius: 20px; font-size: 28px;">ApaEat</a>
								
							
						</div>
					</div>
					<!-- Secondary Navbar items -->
					<div class="hidden md:flex items-center space-x-3 ">
                        <a href="MainPage.php" class="py-4 px-2 text-base font-regular primary-color">Home</a>
						<a href="contact.php" class="py-4 px-2 text-base font-regular primary-color">Contact Us</a>
						 <a href="recipe.php" class="py-4 px-2 text-base font-regular primary-color">Recipe</a>
						<a href="restaurant.php" class="py-4 px-2 text-base font-regular primary-color">Restaurant</a>
						 <a href="games.php" class="py-4 px-2 text-base font-regular primary-color">Game</a>
						<a href="aboutus.php" class="py-4 px-2 text-base font-regular primary-color">About Us</a>
						
					</div>
					
				</div>
			</div>
		
		</nav>
    </header>

    <script type="text/javascript" src='../scripts/loginHandler.js'></script>


	<div class="relative flex items-top justify-center min-h-screen bg-blue dark:bg-blue-500 sm:items-down sm:pt-0" style="margin-top: 50px;">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6 mr-2 bg-blue-50 dark:bg-500 sm:rounded-lg">
                        <h1 class="text-4xl sm:text-5xl text-orange-500 dark:text-white font-extrabold tracking-tight">
                            Get in touch
                        </h1>
                        <p class="bg-gradient-to-r from-yellow-400 to-yellow-500 ...,text-normal text-lg sm:text-2xl font-medium text-white-500 dark:text-white-500 mt-2">
                            Fill in the form to start a conversation
                        </p>


                        <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <div class="ml-4 text-md tracking-wide font-semibold w-40"style="margin-left: 34px;">
                            <a href="https://goo.gl/maps/9yPngvtT1GUxQmK19" target="_blank">Sunway College</a>
                            </div>
                        </div>

                        <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <div class="ml-4 text-md tracking-wide font-semibold w-40">
                               <a href="https://chatwith.io/s/apaeat" target="_blank" class="ml-4 text-md tracking-wide font-semibold w-40" style="margin-right: 20px;" >+6018-3294883 </a>
						
                            </div>
                        </div>

                        <div class="flex items-center mt-2 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <div class="ml-4 text-md tracking-wide font-semibold w-40" style="margin-left: 34px;">
                             <a href="mailto:apaeat888@gmail.com" target="_blank">apaeat888@gmail.com</a>
                            </div>
                        </div>
                    </div>

                    <form class="p-6 flex flex-col justify-center" action="process.php" method="post">
                        <div class="flex flex-col">
                            <label for="name" class="hidden">Full Name</label>
                            <input type="name" name="name" id="name" placeholder="Full Name" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                        </div>

                        <div class="flex flex-col mt-2">
                            <label for="email" class="hidden">Email</label>
                            <input type="email" name="email" id="email" placeholder="Email" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                        </div>

                        <div class="flex flex-col mt-2">
                            <label for="Note" class="hidden">Note</label>
                            <textarea type="Note" name="Note" id="Note" placeholder="Add a note" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none"></textarea>
                        </div>

                        <button name="btn-send" type="submit" action="process.php" class="bg-gradient-to-r from-yellow-400 to-yellow-500 hover:from-yellow-500 hover:to-yellow-500 ...,md:w-32 bg-indigo-600 hover:bg-blue-dark text-white font-bold py-3 px-6 rounded-lg mt-3 hover:bg-indigo-500 transition ease-in-out duration-300">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
	<br><br><br>
    <span style="float: left;margin-left: 20%;margin-top: -20%;margin-bottom: 100px">
     <div class="card w-96 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105 ...">
  <img class="h-52 object-cover" src="Cheryssa.jpeg" alt="Cheryssa" style="width:100%">
  <h1 class="font-medium">Cheryssa Wong Kai Ying</h1>
  <p class="title font-regular">Creator</p>
  <p class="font-light mx-3">We started ApaEat as a Final Year Project to learn something new and let this project to help somebody in need. Thank you</p>
  <div style="margin: 24px 0;">
    <a class = "mx-4 text-yellow-600" href="https://github.com/cheryssa"><i class="fa fa-github"></i></a>
    <a class = "mx-4 text-yellow-600" href="https://www.twitter.com""><i class="fa fa-twitter"></i></a> 
    <a class = "mx-4 text-yellow-600" href="https://www.linkedIn.com""><i class="fa fa-linkedin"></i></a>  
    <a class = "mx-4 text-yellow-600" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a> 
  </div>
</div>
</span>
<span style="float: right;margin-right: 20%;margin-top: -20%;margin-bottom: 100px">
	<div class="card w-96 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105 ...">
  <img class="h-52 object-cover" src="Yukki.jpeg" alt="Yukki" style="width:100%">
  <h1 class="font-medium">Khoo Yukki</h1>
  <p class="title font-regular">Creator</p>
  <p class="font-light mx-3">ApaEat taught us many things not just about tech, but also about business model and marketing. Looking forward to grow it.</p>
  <div style="margin: 24px 0;">
    <a class = "mx-4 text-yellow-600" href="https://github.com/Yukki0331"><i class="fa fa-github"></i></a>
    <a class = "mx-4 text-yellow-600" href="https://www.twitter.com""><i class="fa fa-twitter"></i></a> 
    <a class = "mx-4 text-yellow-600" href="https://www.linkedIn.com""><i class="fa fa-linkedin"></i></a>  
    <a class = "mx-4 text-yellow-600" href="https://www.facebook.com/profile.php?id=100014335158483"><i class="fa fa-facebook"></i></a> 
	

  </div>
</div>

</span>








<!-- success msg after filling up contact us page -->


<!-- end of success msg code -->

<br><br><br>
<br><br><br>
<br><br><br>
<br>

<!-- Foooter -->
<section class="bg-yellow-600">
    <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
        <div class="flex justify-center mt-8 space-x-6">
            <a href="https://www.facebook.com/laymanbrother.19/" class="text-gray-50 hover:text-white">
                <span class="sr-only">Facebook</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="https://twitter.com/ashutosh_1919" class="text-gray-50 hover:text-white">
                <span class="sr-only">Twitter</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                </svg>
            </a>
            <a href="https://github.com/ashutosh1919" class="text-gray-50 hover:text-white">
                <span class="sr-only">GitHub</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                </svg>
            </a>
           
        </div>
        <p class="mt-8 text-base leading-6 text-center text-gray-50">
            © 2022 ApaEat, Inc. All rights reserved.
        </p>
    
</section>


</body>
</html>