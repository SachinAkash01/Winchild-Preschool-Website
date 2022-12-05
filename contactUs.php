<?php include 'sendemail.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Winchild - Contact Us</title>
	<link rel = "icon" href ="Images/logo.png" type = "image/x-icon">
	<link href="CSS/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="CSS/contact.css" type="text/css">
	<link href="CSS/footerStyle.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
	<style>
		@font-face{
			font-family: winchildFont;
			src: url("CSS/winchildFont.ttf");
		}

		nav label a.font{
			font-family: winchildFont;
		}
		.imagefit{
			background: url("Images/background.jpg") no-repeat center fixed;
			background-position: center;
			background-size: cover;
			display: block;
		}
		
		.form-container{
			position: absolute;
			top: 60%;
			left: 50%;
			transform: translate(-50%,-50%);
			background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3));
			width: 1300px;
			padding: 50px 30px;
			border-radius: 10px;
			box-shadow: 7px 7px 20px #000;
		}
		
		.contact-form h2{
		  font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif";
		}
		
		.breadcrumbs{
			padding: 10px;
			font-family: sans-serif;
		}
		
		.breadcrumbs_item{
			display: inline-block;
		}
		
		.breadcrumbs_item:not(:last-of-type)::after{
			content: '\203a\203a';
			margin: 0 5px;
			color: #3F51AC;
		}
		
		.breadcrumbs_link{
			text-decoration: none;
			color: #3F51AC;
		}
		
		.breadcrumbs_link:hover{
			text-decoration: underline;
		}
		
		.breadcrumbs_link--active{
			color: #D7066F;
		}
		
		input#btnactivity{
			background-color: #C40C64;
			display: block;
			margin: 0px 0px 0px 10px;
			text-align: center;
			border-radius: 12px;
			border: thin;
			padding: 10px 40px;
			outline: none;
			color: white;
			cursor: pointer;
			transition: .5s;
			text-transform: uppercase;
			width: 170px;
			height: 40px;
		}

		input#btnactivity:hover{
			background-color: white;
			color: #C40C64;
			font-weight: bold;
			text-align: center;
			transition: .5s;
			box-shadow: 0 1px 4px rgba(0,0,0,0.3), 0 0 40px rgba(0,0,0,0.1) inset;
		}
	</style>
</head>
<body>
	<header>
	<div>
	<nav class="location">
		<a href="https://www.facebook.com/profile.php?id=100064209064843"><img class="img" src="Images/facebook.png" alt="" height="44px"></a>
		<label class="navContact"><img src="Images/male_user_50px.png" alt="" height="26px"/><a class="login" href="adminAccount.php"> My Account</a></label>
		<label class="navContact"><img src="Images/telephone.png" alt="" height="26px"/>+94714512189</label>
		<label class="navContact"><img src="Images/222-2226601_email-icon-e-mail-white-icon-png.png" alt="" height="18px"/> winchild@gmail.com</label>
		<label class="navContact"><img src="Images/Maps_icon.png" alt="" height="23px"/> Piliyandala</label>
	</nav>
	<nav class="navigation">
		<label class="logo"><img src="Images/logo.png" alt="" height="73px"/><a class="font" href="home.html" style="color: #C40C64"> Winchild</a></label> 
		<ul>
			<li><a class="hover"  href="home.html">Home</a></li>
			<li><a class="hover" href="aboutUs.html">About Us</a></li>
			<li><a class="hover" href="programs.html">Programs</a></li>
			<li><a class="hover" href="upcomingEvents.php">Upcoming Events</a></li>
			<li><a class="hover" href="Gallery.php">Gallery</a></li>
			<li><a class="active" href="#">Contact Us</a></li>
			<li><a class="hover" href="applyNow.php">Apply Now</a></li>
		</ul>
	</nav>
	</div>
	</header>
	<br><br><br><br><br><br><br>
	<div class="imagefit">
	<ul class="breadcrumbs">
		<li class="breadcrumbs_item">
			<a href="home.html" class="breadcrumbs_link">Home</a>
		</li>
		<li class="breadcrumbs_item">
			<a href="#" class="breadcrumbs_link breadcrumbs_link--active">Contact Us</a>
		</li>
	</ul>
	<br><br><br><br>
		
<form class="newBody" method="post">
	<?php echo $alert; ?>
	<div class="form-container">
    <div class="contact-section">
      <div class="contact-info">
		  <div><i class="fas fa-map-marker-alt"></i>301/D, Thumbowila, Piliyandala</div>
		  <div><i class="fas fa-envelope"></i>winchild@gmail.com</div>
		  <div><i class="fas fa-phone"></i>+94714512189</div>
		  <div><i class="fas fa-clock"></i>Mon - Fri 6:30 AM to 6:00 PM</div>
      </div>
      <div class="contact-form">
        <h2>Contact Us!</h2>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" id="btnactivity" class="send-btn" value="Send">
        </form>
      </div>
    </div>
	</div>
	
	<script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
</form>
</div>
	
<!--	footer-->
	<form class="form3">
		<div class="footer">
		<div class="footer-content">
			<div class="footer-section about">
				<label><h1 style="font-family: winchildFont; font-weight: bold;"><img src="Images/logo.png" alt="" height="73px"> Winchild</h1></label><br><br>
				<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;301/D, Thumbowila, Piliyandala</div><br>
        		<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-envelope"></i>&nbsp;&nbsp;winchild@gmail.com</div><br>
        		<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-phone"></i>&nbsp;&nbsp;+94714512189</div><br>
        		<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-clock"></i>&nbsp;&nbsp;Mon - Fri 6:30 AM to 6:00 PM</div>
			</div>
			<div class="footer-section programs">
				<br><br><br><a href="programs.html"><h2 style="font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', 'serif';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Programs</h2></a><br>
				<ul>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Play Group</li><br>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lower Nursery</li><br>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upper Nursery</li><br>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;After School Care</li>
				</ul>
			</div>
			<div class="footer-section-links">
				<br><br><br><h2 style="font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', 'serif';">Links</h2><br>
				<ul class="links">
					<li>&nbsp;&nbsp;<a href="home.html">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contactUs.php">Contact US</a></li><br>
					<li>&nbsp;&nbsp;<a href="aboutUs.html">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="applyNow.php">Apply Now</a></li><br>
					<li>&nbsp;&nbsp;<a href="programs.html">Programs</a></li><br>
					<li>&nbsp;&nbsp;<a href="upcomingEvents.php">Upcoming Events</a></li><br>
					<li>&nbsp;&nbsp;<a href="Gallery.php">Gallery</a></li>
				</ul>
			</div>
		</div>
		<div class="footer-bottom">
			&copy; Winchild Pvt Ltd. | Designed by Sachin Akash - IT21351372 | SLIITA PROJECT
		</div>
	</div>
	</form>
	
	<script>
		const body = document.body;
		let lastScroll = 0;

		window.addEventListener('scroll', () => {
			const currentScroll = window.pageYOffset

			if (currentScroll <= 0){
				body.classList.remove("scroll-up")
			}
			
			if (currentScroll > lastScroll && !body.classList.contains("scroll-down") && lastScroll > 130){
				body.classList.remove("scroll-up")
				body.classList.add("scroll-down")
			}
			
			if (currentScroll < lastScroll && body.classList.contains("scroll-down")){
				body.classList.remove("scroll-down")
				body.classList.add("scroll-up")
			}

			lastScroll = currentScroll;
		})
	</script>
</body>
</html>
