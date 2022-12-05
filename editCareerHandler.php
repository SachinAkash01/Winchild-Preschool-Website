<?php session_start();
		$position = $_POST["position1"];
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
		
		if (isset($_POST["chkPublish"]))
		{
			$status = 1;
		}
		else
		{
			$status = 0;
		}
		
		$con = mysqli_connect("localhost","root","","winchilddb","3308");
		
		if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
		
		$sql = "UPDATE `career` SET `position`= '".$position."', `description`= '".$description."', `publish`= ".$status.", `imagePath`= '".$image."', `date`= '".$date."' WHERE `careerID` = ".$_SESSION["id"].";";
		
		if (mysqli_query($con, $sql))
		{
				header('Location: adminCareers.php');
		}
		else
		{
			echo "Sorry!! We are facing a technical issue! try again later!";
		}
		
?>