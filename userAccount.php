<?php session_start();
if (isset($_SESSION["regularUser"]))
{
	
}
else if (isset($_SESSION["username"]))
{
	header('Location: adminAccount.php');
}
else
{
	header('Location: login.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Winchild - Student</title>
	<link rel = "icon" href ="Images/logo.png" type = "image/x-icon">
	<link href="CSS/style.css" type="text/css" rel="stylesheet">
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
			background: url("Images/books1.jpg") no-repeat center fixed;
			background-position: center;
			background-size: cover;
			display: block;
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
		
		.form3{
			position: absolute;
			width: 100%;
			top: 115%;
		}
	</style>
</head>

<body>
	<div class="imagefit">
	<header>
	<div>
	<nav class="location">
		<a href="https://www.facebook.com/profile.php?id=100064209064843"><img class="img" src="Images/facebook.png" alt="" height="44px"></a>
		<label class="navContact"><img src="Images/male_user_50px.png" alt="" height="26px"/><a class="login" href="#"> My Account</a></label>
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
			<li><a class="hover" href="contactUs.php">Contact Us</a></li>
			<li><a class="hover" href="applyNow.php">Apply Now</a></li>
		</ul>
	</nav>
	</div>
	</header>
	<br><br><br><br><br><br><br>
	
	<div>
	<ul class="breadcrumbs">
		<li class="breadcrumbs_item">
			<a href="home.html" class="breadcrumbs_link">Home</a>
		</li>
		<li class="breadcrumbs_item">
			<a href="#" class="breadcrumbs_link breadcrumbs_link--active">My Account</a>
		</li>
	</ul>
	<div>	
		<a href="logout.php" style="float: right; position: absolute; right: 20px; top: 19%"><button id="btnRead" >Logout</button></a>
	</div>
	</div>
	
	<div align="center">
		<table width="1400" height="225" align="center" style="background: transparent;">
			<tr>
			  <td width="900"><div class="main-section">
			  <div class="dashbord">
				<div class="icon-section"> <br />
				  <img src="images/profile.jpg" alt="" width="87" height="90" />
				  <p>&nbsp;</p>
				</div>
				<div class="detail-section"> <a href="userProf.php">My Profile    <br> </a> </div>
			  </div>
			  <div class="dashbord dashbord-orange">
				<div class="icon-section"> <br />
				  <img src="images/viewAll.png" alt="" width="87" height="90" />
				  <p>&nbsp;</p>
				</div>
				<div class="detail-section"> <a href="viewActivities.php">Activities/Homework </a> </div>
			  </div>
			  <div class="dashbord dashbord-red">
				<div class="icon-section"> <br />
				  <img src="Images/ecareers.png" alt="" width="87" height="90" />
				  <p>&nbsp;</p>
				</div>
				<div class="detail-section"> <a href="userCareers.php">Winchild Careers </a> </div>
			  </div>
				<div><br><br><br></div>
			</div></td>
			</tr>
			<br><br><br><br><br><br>
		</table>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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