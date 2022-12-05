<?php session_start();
	if (isset($_POST["btnRegister"]))
	{
		$stname = $_POST["name"];
		$date = $_POST["date"];
		$age = $_POST["age"];
		$program = $_POST["program"];
		$address = $_POST["address"];
		
		$gname = $_POST["gname"];
		$email = $_POST["email"];
		$telephone = $_POST["telephone"];
		$occupation = $_POST["occupation"];
		$password = $_POST["pwd"];
		
		if ($_POST["rdoOption"])
		{
			$gender = "Male";
		}
		else
		{
			$gender = "Female";
		}
		
		$con = mysqli_connect("localhost","root","","winchilddb","3308");
		
		if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
		
		$sql = "INSERT INTO `student` (`studentID`, `studentName`, `DoB`, `age`, `gender`, `email`,  `programName`) VALUES(NULL, '".$stname."', '".$date."', '".$age."', '".$gender."', '".$email."', '".$program."');";
		
		$sql1 = "INSERT INTO `guardian` (`email`, `guardianName`, `telephone`, `occupation`, `address`, `password`) VALUES('".$email."', '".$gname."', '".$telephone."', '".$occupation."', '".$address."', '".$password."');";
		
		$sql2 = "SELECT `email` FROM `guardian` WHERE `email` = '".$email."';";+
		
		$result = mysqli_query($con, $sql2);
			
		if (mysqli_fetch_assoc($result))
		{
			mysqli_query($con, $sql);
		}
		else
		{
			mysqli_query($con, $sql);
			mysqli_query($con, $sql1);
		}
		
		header('Location:login.php');
	}
?>