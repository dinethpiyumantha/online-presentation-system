<?php
	//Linking configuration file
	require 'phpinclude/db.connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>

	<!-- Import CSS Stylesheets -->
	<link rel="stylesheet" type="text/css" href="styles/user/layout.css">
	<link rel="stylesheet" type="text/css" href="styles/fonts.css">
	<link rel="stylesheet" type="text/css" href="styles/user/styling_variables.css">
	<link rel="stylesheet" type="text/css" href="styles/user/styles.css">
	<link rel="stylesheet" type="text/css" href="styles/user/forms.css">
	<link rel="stylesheet" type="text/css" href="styles/user/slider.css">

	<link rel="shortcut icon" href="images/favicon.png">

	<script src="js/user/master.js"></script>
</head>
<body>
	<div id="popupBG"></div>
	<div id="popup">
		<div id="popupTitle">Message</div>
		<div id="message"></div>
		<button id="closePop" class="send" onclick="contactUsHide();">OK</button>
	</div>

	<header>
		<div class="title-name">
			<img src="images/user/logo.png" alt="" class="logo" id="logo">
		</div>
		<div class="login">
			<a href="#"><img src="images/user/cart.svg" alt="" class="cart"></a>
			<button class="login-logout">Login</button>
		</div>

	</header>

	<nav>
		<div class="navigation-menu">
			<ul class="navigation">
				<li class="nbtn"><a href="index.php">Home</a></li>
				<li class="nbtn"><a href="index.php#aboutUs">About Us</a></li>
				<li class="nbtn"><a href="category.html">Catagories</a></li>
				<li class="nbtn"><a href="index.php#faq">FAQ</a></li>
				<li class="nbtn"><a href="index.php#contactUs">Contact Us</a></li>
				<li class="nbtn"><a href="administrator.php">Admin</a></li>
			</ul>
		</div>
		
		<div class="search">
			<input type="text" class="search-bar" id="searchF" placeholder="Search Templates">
			<button class="search-btn" onclick="searchCheck();"><img src="images/user/search.png" alt="slider 1" class="search-icon"></button>
		</div>
	</nav>

	<main class="home">
		<div class="slideshow">
			<p class="slider-text" id="popMessages">
				Presentation is intelligence made visible. <br>
				<span style="font-size:20px;margin-top:-200px;">Become a famous presentation template designer.</span>
				<a href="user_signup.html" class="signup" style="margin-top: 45px;">Sign Up</a>
			</p>


			<div class="slideshow middle">
				
				<div class="slides">
		
					<input type="radio" name="r" id="r1" checked>
					<input type="radio" name="r" id="r2">
					<input type="radio" name="r" id="r3">
					<input type="radio" name="r" id="r4">
					<input type="radio" name="r" id="r5">

					<div class="slide s1">
						<img src="images/user/slider/1.jpg" alt="">
					</div>
				<div class="slide">
						<img src="images/user/slider/2.jpg" alt="">
					</div>
					<div class="slide">
						<img src="images/user/slider/3.jpg" alt="">
					</div>
					<div class="slide">
						<img src="images/user/slider/4.jpg" alt="">
					</div>
					<div class="slide">
						<img src="images/user/slider/5.jpg" alt="">
					</div>
		
					<div class="slider-nav">
						<label for="r1" class="bar"></label>
						<label for="r2" class="bar"></label>
						<label for="r3" class="bar"></label>
						<label for="r4" class="bar"></label>
						<label for="r5" class="bar"></label>
					</div>
				</div>
			</div>
		</div>

		
		<div class="about-us" id="aboutUs">
			<h1 style="color: #232323;">About Us</h1>
			<p>Even if you attend to a business meeting, a school or a client try to find the presentation template you need for the final project. We make this happen. This online presentation system is for everyone from students to business executives. With many professionally designed templates, easy-to-use and also contains advanced features. The online presentation system we create called PREZ can help with this. </p>
		</div>

		<!-- CONTACT US Form ------------------------------------------------------------------------------------------- -->
		<div class="contact-us" id="contactUs">
			<h1>Contact Us</h1>
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" onsubmit="">
				<input class="text" type="text" name="name" id="contName" placeholder="Enter Your Name"><br>
				<input class="text" type="email" name="email" id="contEmail" placeholder="Email Address"><br>
				<textarea class="textarea" name="message" id="contMessage" cols="30" rows="5" placeholder="Enter Messege or Feedbacks"></textarea><br>
				<input class="send" type="submit" value="Send" name="btnSubmit" onclick="contactUs();">
			</form>



			<?php

				if(isset($_POST["btnSubmit"])){
					$name = $_POST["name"];
					$email = $_POST["email"];
					$msg = $_POST["message"];

					if(!($name=='' || $msg=='') && (strlen($email)>10)){

						$sql = ("INSERT INTO `feedback`(`name`, `masage`, `email`) VALUES ('$name', '$email', '$msg');");

						if($conn->query($sql)){
							echo "Sent successfully !";
						}
						else{
							echo "Error:".$conn->error;
						}
					}else{
						echo "All fields requred correctly !";
					}
				}

				$conn->close();
			?>
		</div>


		<div class="location-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7961008537295!2d79.97259044573906!3d6.914965066522972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sSri%20Lanka%20Institute%20of%20Information%20Technology!5e0!3m2!1sen!2slk!4v1583766740668!5m2!1sen!2slk" width="100%" height="300" frameborder="0" style="border:0; border-radius: 10px;" allowfullscreen=""></iframe>
		</div>
		<div class="faq" id="faq">
			<h1>FAQ</h1>
			<p>
				<li class="li-faq">How can I use the template?</li>
				<li class="li-ans">
				For Google Slides: Each template contains a preview where you can see all the slides and resources included. Click on the “Use a Google Slides Theme” button to download this presentation for Google Slides. If you click on “Copy the presentation”, it will be saved on your Google Drive, where you can customize it and use it whenever you want.
				<br> For PowerPoint: Click on the “Download a PowerPoint template” button located next to the template preview. The template will be saved on your computer, where you will be able to customize it.</li>
				<li class="li-faq">Is everything in the template editable?</li>
				<li class="li-ans">Most of the elements are editable to allow our users to customize the template as much as possible. However, there might be a resource that belongs to the design itself, and thus it cannot be modified from the slide. In such cases, you will find the resource in the master slides.</li>
				<li class="li-faq">Can I work as a designer for PREZ?</li>
				<li class="li-ans">If you are interested in working with us, please register in our site. Please include your personal details.</li>
			</p>
		</div>
	</main>

	<footer>
		<div class="footer-description">
			<h2>Description</h2>
			This online presentation system is for everyone from students to business executives. With many professionally designed templates, easy-to-use and also contains advanced features. The online presentation system we create called PREZ can help with this.</div>
		<div class="quick-links">
			<h2>Quick Links</h2>
			<ul class="footer-links">
				<li class="btn"><a href="index.html" class="footer">Home</a></li>
				<li class="btn"><a href="index.html#contactUs" class="footer">Contact Us</a></li>
				<li class="btn"><a href="terms_and_conditions.html" class="footer">Terms & Conditions</a></li>
				<li class="btn"><a href="privacy.html" class="footer">Privacy & Policy</a></li>
			</ul>
			<div class="social-media-icon facebook"></div>
			<div>
				<a href="#"><img src="images/user/facebook.svg" alt="" class="social-media"></a>
				<a href="#"><img src="images/user/twitter.svg" alt="" class="social-media"></a>
				<a href="#"><img src="images/user/instagram.svg" alt="" class="social-media"></a>
				<a href="#"><img src="images/user/linkedin.svg" alt="" class="social-media"></a>
			</div>
		</div>
		
		<div class="official-links">
			<div class="of-link-cont">
				<a href="#logo"><img src="images/user/top-button.png" alt="" style="width: 40px;"></a><br>
				<a href="#"><img src="images/user/playStore.png" alt="" class="app-store-links"></a>
				<a href="#"><img src="images/user/appStore.png" alt="" class="app-store-links"></a>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quod sit repellendus optio excepturi consequatur.
				<br><img src="images/user/payments.png" alt="" class="pay-icons-group">
			</div>
			<div class="angle-shape">
				<img src="images/user/footer-logo.png" alt="sliit logo" class="footer-logo">
			</div>
		</div>
		
	</footer>

	<div class="copyright">Copyright &copy; 2020 by MLB_01.02_10</div>
</body>
</html>
