<?php session_start();
					if(isset($_POST["btnevent"]))
					{
						$position = $_POST["position"];
						$description = $_POST["desc"];
						$date = $_POST["date"];

						$image = "Uploads/".basename($_FILES["image"]["name"]);
						move_uploaded_file($_FILES["image"]["tmp_name"],$image);

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

						$sql = "INSERT INTO `career` (`careerID`, `position`, `description`, `publish`, `imagePath`, `date`, `email`) VALUES (NULL, '".$position."', '".$description."', ".$status.", '".$image."', '".$date."', '".$_SESSION["username"]."');";

						if (mysqli_query($con, $sql) > 0)
						{
							header('Location:adminCareers.php');
						}
						else
						{
							echo "Oops!! Something went wrong, please select the file again!";
						}
					}
				?>