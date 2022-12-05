<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Winchild - My Profile</title>
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
			background: url("Images/add.jpg") no-repeat center fixed;
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
		
		button#btnEvent{
			width: 200px;
			height: 40px;
			font-size: 16px;
		}
		
		body{;
			color: #FFFFFF;
		}
		
		section{
			position: relative;
			height: 100vh;
			width: 100%;
			background-size: cover;
			background-position: center center;
		}
		
		.form-container{
			position: absolute;
			top: 45%;
			left: 50%;
			transform: translate(-50%,-50%);
			background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3));
			width: 500px;
			padding: 50px 30px;
			border-radius: 10px;
			box-shadow: 7px 7px 20px #000;
		}
		
		.header1{
			text-transform: uppercase;
			font-size: 2em;
			text-align: center;
			margin-bottom: 2em;
		}
		
		.control input{
			width: 100%;
			display: block;
			padding: 10px;
			color: #222;
			border: none;
			outline: none;
			margin: 1em 0;
		}
		
		input#btnevent{
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

		input#btnevent:hover{
			background-color: white;
			color: #C40C64;
			font-weight: bold;
			text-align: center;
			transition: .5s;
			box-shadow: 0 1px 4px rgba(0,0,0,0.3), 0 0 40px rgba(0,0,0,0.1) inset;
		}
		
		input{
			border-radius: 8px;
			background-color: white;
		}
		
		input:focus{
			background-color: #d2d9dd;
		}
		
		textarea{
			border-radius: 8px;
			width: 440px;
			height: 100px;
			border: none;
			font-size: 14px;
			background-color: white;
			outline: none;
			display: block;
		}
		
		textarea:focus{
			background-color: #d2d9dd;
		}
		
		label#chkpublish{
			display: flex;
			
		}
		
		input[type=checkbox]{
			vertical-align: middle;
		}
		
		input{
			text-align: center;
			font-size: 18px
		}
		
		label{
			font-style: normal;
		}
		
		table{
			border-collapse: separate;
			border-radius: 5px;
			width: 100%;
			color: #C40C64;
			font-family: monospace;
			font-size: 30px;
			text-align: center;
			border-color: black;
			left: 40%;
			background-color: white;
			font-weight: bold;
		}
		
		th{
			background-color: #C40C64;
			color: white;
			text-align: center;
		}
		
		tr:nth-child(odd){
			background-color: #EDEDED;
		}
		
		.form3{
			position: absolute;
			width: 100%;
			top: 123%;
		}
	</style>
</head>

<body>
	<div class="imagefit">
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
			<li><a class="hover" href="contactUs.php">Contact Us</a></li>
			<li><a class="hover" href="applyNow.php">Apply Now</a></li>
		</ul>
	</nav>
	</div>
	</header>	
		
	<?php
		$con = mysqli_connect("localhost","root","","winchilddb","3308");
		if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
	
		$sql2 = "SELECT * FROM `student` WHERE `email`='".$_SESSION["regularUser"]."';";
		$result2 = mysqli_query($con, $sql2);
		$row = mysqli_fetch_assoc($result2);
	
		$sql1 = "SELECT * FROM `guardian` WHERE `email` = '".$_SESSION["regularUser"]."';";
		$result1 = mysqli_query($con, $sql1);
		$row1 = mysqli_fetch_assoc($result1);
	?>
	
	<br><br><br><br><br><br><br>
	<ul class="breadcrumbs">
		<li class="breadcrumbs_item">
			<a href="home.html" class="breadcrumbs_link">Home</a>
		</li>
		<li class="breadcrumbs_item">
			<a href="adminAccount.php" class="breadcrumbs_link">My Account</a>
		</li>
		<li class="breadcrumbs_item">
			<a href="#" class="breadcrumbs_link breadcrumbs_link--active">My Profile</a>
		</li>
	</ul>
         
	<section>
		<div class="form-container">
			<h1 class="header1" style="font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', 'serif'">- Personal Details -</h1>
			<form>
				<table>
					<tr>
						<td><label style="font-size: 18px" for="sid">Student ID: </label></td>
						<td><input type="text" name="sid" id="sid" value="<?php echo $row["studentID"]; ?>" readonly><br></td>
					</tr>
					<tr>
						<td><label style="font-size: 18px" for="name1">Student Name: </label></td>
						<td><input type="text" name="name1" id="name1" value="<?php echo $row["studentName"]; ?>" readonly><br></td>
					</tr>
					<tr>
						<td><label style="font-size: 18px" for="dob">DoB: </label></td>
						<td><input type="text" name="dob" id="dob" value="<?php echo $row["DoB"]; ?>" readonly><br></td>
					</tr>
					<tr>
						<td><label style="font-size: 18px" for="age">Age: </label></td>
						<td><input type="text" name="age" id="age" value="<?php echo $row["age"]; ?>" readonly><br></td>
					</tr>
					<tr>
						<td><label style="font-size: 18px" for="gender">Gender: </label></td>
						<td><input type="text" name="gender" id="gender" value="<?php echo $row["gender"]; ?>" readonly><br></td>
					</tr>
					<tr>
						<td><label style="font-size: 18px" for="email">Email: </label></td>
						<td><input type="text" name="email" id="email" value="<?php echo $row["email"]; ?>" readonly><br></td>
					</tr>
					<tr>
						<td><label style="font-size: 18px" for="program">Program: </label></td>
						<td><input type="text" name="program" id="program" value="<?php echo $row["programName"]; ?>" readonly><br></td>
					</tr>
					<tr>
						<td><label style="font-size: 18px" for="guardian">Guardian Name: </label></td>
						<td><input type="text" name="guardian" id="guardian" value="<?php echo $row1["guardianName"]; ?>" readonly><br></td>
					</tr>
					<tr>
						<td><label style="font-size: 18px" for="telephone">Telephone: </label></td>
						<td><input type="text" name="telephone" id="telephone" value="<?php echo $row1["telephone"]; ?>" readonly><br></td>
					</tr>
					<tr>
						<td><label style="font-size: 18px" for="occupation">Occupation: </label></td>
						<td><input type="text" name="occupation" id="occupation" value="<?php echo $row1["occupation"]; ?>" readonly><br></td>
					</tr>
					<tr>
						<td><label style="font-size: 18px" for="address">Address: </label></td>
						<td><input type="text" name="address" id="address" value="<?php echo $row1["address"]; ?>" readonly><br></td>
					</tr>
				</table>
			</form>
		</div>
	</section>
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