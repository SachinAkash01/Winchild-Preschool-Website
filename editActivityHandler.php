<?php session_start();
		$title = $_POST["title1"];
		$program = $_POST["program"];
		$description = $_POST["desc"];
		$date = $_POST["date"];
		
		if (!file_exists($_FILES['image']['tmp_name']) ||
		   !is_uploaded_file($_FILES['image']['tmp_name']))
			{
				$image = $_SESSION["image"];
			}
			else
			{
				$image = "Uploads/".basename($_FILES["image"]["name"]);
				move_uploaded_file($_FILES["image"]["tmp_name"],$image);
			}
		
		$con = mysqli_connect("localhost","root","","winchilddb","3308");
		
		if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
		
		$sql = "UPDATE `homework` SET `title`='".$title."',`description`= '".$description."',`imagePath`= '".$image."',`programName`='".$program."',`date`= '".$date."' WHERE `homeworkID`= ".$_SESSION["id"].";";
		
		if (mysqli_query($con, $sql) )
		{
				header('Location:viewAdminActivities.php');
		}
		else
		{
			echo "Sorry!! We are facing a technical issue! try again later!";
		}
		
?>