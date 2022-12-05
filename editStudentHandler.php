<?php session_start();
		$stname = $_POST["name"];
		$DoB = $_POST["date"];
		$age = $_POST["age"];
		$program = $_POST["program"];

		$address = $_POST["address"];
		$gname = $_POST["gname"];
		$email = $_POST["email"];
		$telephone = $_POST["telephone"];
		$occupation = $_POST["occupation"];
		$password = $_POST["pwd"];
		
		$con = mysqli_connect("localhost","root","","winchilddb","3308");
		
		if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
		
		$sql = "UPDATE `student` SET `studentName` = '".$stname."', `DoB` = '".$DoB."', `age` = '".$age."', `programName` = '".$program."' WHERE 
		`email` = '".$email."';";

		$sql1 = "UPDATE `guardian` SET `guardianName`= '".$gname."',`telephone`= ".$telephone.",`occupation`= '".$occupation."',`address`= '".$address."',`password`= '".$password."' WHERE `email`= '".$email."';";
		
		if (mysqli_query($con, $sql) && mysqli_query($con, $sql1))
		{
				header('Location:studentDetails.php');
		}
		else
		{
			echo "Sorry!! We are facing a technical issue! try again later!";
		}
		
?>