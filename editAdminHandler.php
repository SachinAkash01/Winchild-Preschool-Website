<?php session_start();
		$email = $_POST["email"];
		$fname = $_POST["fname"];
		$phone = $_POST["phone"];
		$address = $_POST["address"];
		
		$con = mysqli_connect("localhost","root","","winchilddb","3308");
		
		if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
		
		$sql = "UPDATE `admin` SET `email`='".$email."',`adminName`= '".$fname."',`telephone`= ".$phone.",`address`= '".$address."' WHERE `email`= '".$email."';";
		
		if (mysqli_query($con, $sql) )
		{
				header('Location:adminDetails.php');
		}
		else
		{
			echo "Sorry!! We are facing a technical issue! try again later!";
		}
		
?>