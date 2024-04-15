<?php session_start();
if (!isset($_SESSION["username"]))
{
	header('Location:login.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Winchild - Admin Details</title>
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
			top: 54%;
			left: 50%;
			transform: translate(-50%,-50%);
			background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3));
			width: 500px;
			padding: 50px 30px;
			border-radius: 10px;
			box-shadow: 7px 7px 20px #000;
		}
		
		h1{
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
		
		label{
			font-style: normal;
		}
		
		table{
			border-collapse: separate;
			width: 70%;
			color: #C40C64;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
			border-color: black;
			position: absolute;
			left: 15%;
			background-color: white;
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
			top: 100%;
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
			<a href="#" class="breadcrumbs_link breadcrumbs_link--active">Admin Details</a>
		</li>
	</ul>
		
	<h1 style="color: #323445">- Admin Details -</h1>
		<table class="tblAdmin" id="tblAdmin">
			<tr>
				<th>Email</th>
				<th>Admin Name</th>
				<th>Telephone</th>
				<th>Address</th>
				<th>Modify</th>
			</tr>
			<?php
			$con = mysqli_connect("localhost","root","","winchilddb","3308");
			
			if (!$con)
				{
					die("Sorry!!! We are facing technical issue..");
				}
			$sql = "SELECT email, adminName, telephone, address FROM admin";
			
			$result = mysqli_query($con, $sql);
			
			if (mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					echo "<tr><td>".$row["email"]."</td><td>".$row["adminName"]."</td><td>".$row["telephone"]."</td><td>".$row["address"]."</td><td><a href='editAdmin.php?email=".$row["email"]."'>Edit</a>|<a href='deleteAdmin.php?email=".$row["email"]."'>Delete</a></td></tr>";
				}
				echo "</table>";
			}
			else
			{
				echo "0 Results in the table!!";
			}
			
			mysqli_close($con);
			?>
		</table>
		
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
