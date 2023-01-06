<?php
session_start();
	
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Farmer Buddy</title>
       
        <link rel="stylesheet" href="style.css">
		<script src="index.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
		<script src="index.js"></script>
		<style>
		p{
			letter-spacing: 1.5px;
			text-align:center;
		}
		h4{
			padding-left: 40px;
		}
		</style>
		
		
    </head>
    <body>
        <header>
		<nav class="navbar navbar-expand-lg navbar-light text-white" >
            <a class="navbar-brand h1">FARMER BUDDY</a>
              <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div id="my-nav"  class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto ">
                  <li class="nav-item active">
                    <a class="nav-link text-white" href="farmer_view.php">HOME </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="about1.php">ABOUT US</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link text-white" href="#" onclick="func_logout()" >LOG OUT</a>
                  </li>
                </ul>
              </div>
            </nav>
        </header>
		<br>
		<p><b>
			Sugarcane is the world's largest crop by production quantity , with 1.8 billion tones produced in 2017,
	with Brazil <br> accounting for 40% of the world war. The Food and Agriculture organization estimated
	it was cultivated on about 26 million hecters<br> in more than 90 countries.
	In our India also there are lot of Farmers are cultivate the sugarcane. So we are here to
	provide the services for<br> the farmers  and keep trying to get a good price for their products.
	so for joining us please contact us following mail or phone number...
		</b></p>
		<br>
		<br>
		<br>
		<h4>
		Contact us:<br>
		Kharade Harshal : +91 8805173117<br>
		Inamdar Mohsin : +91 7875788366<br>
		</h4>
    </body>
</html>
