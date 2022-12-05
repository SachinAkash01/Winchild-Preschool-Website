<?php session_start();
	if (isset($_POST["btnlogin"]))
	{
		$username = $_POST["txtEmail"];
		$password = $_POST["txtpwd"];
		
		$con = mysqli_connect("localhost","root","","winchilddb","3308");
		
		if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
		
		$sql = "SELECT * FROM `admin` WHERE `email`='".$username."' AND `password`='".$password."'";
		$sql1 = "SELECT * FROM `guardian` WHERE `email`='".$username."' AND `password`='".$password."'";
		
		$result = mysqli_query($con,$sql);
		$result1 = mysqli_query($con,$sql1);
		
		if (mysqli_num_rows($result) > 0)
		{
			$_SESSION["username"] = $username;
			header('Location: adminAccount.php');
		}
		else if (mysqli_num_rows($result1) > 0)
		{
			$_SESSION["regularUser"] = $username;
			header('Location: userAccount.php');
		}
		else
		{
			header('Location: login.php');
		}
	}
?>