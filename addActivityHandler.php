<?php session_start();
			if(isset($_POST["btnactivity"]))
			{
				$activitytitle = $_POST["title1"];
				$program = $_POST["program"];
				$description = $_POST["desc"];
				$date = $_POST["date"];

				$image = "Uploads/".basename($_FILES["image"]["name"]);
				move_uploaded_file($_FILES["image"]["tmp_name"],$image);

				$con = mysqli_connect("localhost","root","","winchilddb","3308");

				if (!$con)
				{
					die("Sorry!!! We are facing technical issue..");
				}

				$sql = "INSERT INTO `homework` (`homeworkID`, `title`, `description`, `imagePath`, `programName`, `date`, `email`) VALUES (NULL, '".$activitytitle."', '".$description."', '".$image."', '".$program."', '".$date."', '".$_SESSION["username"]."');";

				if (mysqli_query($con, $sql) > 0)
				{
					header('Location: viewAdminActivities.php');
				}
				else
				{
					echo "Oops!! Something went wrong, please select the file again!";
				}
			}
?>