<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Winchild - Upcoming Events</title>
	<link rel = "icon" href ="Images/logo.png" type = "image/x-icon">
	<link href="CSS/style.css" type="text/css" rel="stylesheet">
	<style>
		@font-face{
			font-family: winchildFont;
			src: url("CSS/winchildFont.ttf");
		}

		nav label a.font{
			font-family: winchildFont;
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
		
		html {
		  box-sizing: border-box;
		}

		*, *:before, *:after {
		  box-sizing: inherit;
		}
		
		.column {
		  float: left;
		  width: 33.3%;
		  margin-bottom: 16px;
		  padding: 0 8px;
		}

		@media screen and (max-width: 650px) {
		  .column {
			width: 100%;
			display: block;
		  }
		}

		.card {
		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		}

		.container {
		  padding: 0 16px;
		}

		.container::after, .row::after {
		  content: "";
		  clear: both;
		  display: table;
		}
		
		.row{
		  box-sizing: border-box;
		  height: 550px;
		}
		
		.column{
		  box-sizing: border-box;
		  height: 550px;
		}
		
		.card{
		  box-sizing: border-box;
		  height: 550px;
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
			<li><a class="hover" href="Gallery.html">Gallery</a></li>
			<li><a class="hover" href="contactUs.php">Contact Us</a></li>
			<li><a class="hover" href="applyNow.php">Apply Now</a></li>
		</ul>
	</nav>
	</div>
	</header>
	<br><br><br><br><br><br><br>
	
	<ul class="breadcrumbs">
		<li class="breadcrumbs_item">
			<a href="home.html" class="breadcrumbs_link">Home</a>
		</li>
		<li class="breadcrumbs_item">
			<a href="adminAccount.php" class="breadcrumbs_link">My Account</a>
		</li>
		<li class="breadcrumbs_item">
			<a href="#" class="breadcrumbs_link breadcrumbs_link--active">View Events</a>
		</li>
	</ul>
	
	<?php
		$con = mysqli_connect("localhost","root","","winchilddb","3308");
		if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
	
		$sql = "SELECT * FROM `announcement`;";
	
		$result = mysqli_query($con, $sql);
	
		if (mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
	?>
	  <div class="row">
	  <div class="column">
		<div class="card">
		<p>
		  <img src="<?php echo $row["imagePath"]?>" style="width: 100%; height: 300px;">
		  <div class="container">
			<h2><?php echo $row["title"]?></h2><br>        
			<p><?php echo $row["description"]?></p><br>
			<p>Published by : <?php echo $row["email"]?> </p>  
			<p>Date : <?php echo $row["date"]?> </p> <br>
			 <p align="center">
				<a href="editEvent.php?id=<?php echo $row["announcementID"]; ?>">Edit</a>
				&nbsp;|&nbsp;
				<a href="deleteEvent.php?id=<?php echo $row["announcementID"]; ?>">Delete</a>
			</p><br>
		  </div>
		</p>
		</div>
		</div>
	<?php
	  		}
		}
		mysqli_close($con);
	?>
	
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
