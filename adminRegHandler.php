<?php session_start();
					if(isset($_POST["btnevent"]))
					{
						$email = $_POST["email"];
						$password = $_POST["pword"];
						$name = $_POST["fname"];
						$telephone = $_POST["phone"];
						$address = $_POST["address"];
						$alert = '';

						$con = mysqli_connect("localhost","root","","winchilddb","3308");

						if (!$con)
						{
							die("Sorry!!! We are facing technical issue..");
						}

						$sql = "INSERT INTO `admin`(`email`, `adminName`, `telephone`, `address`, `password`) VALUES ('".$email."' ,'".$name."', '".$telephone."', '".$address."', '".$password."');";

						if (mysqli_query($con, $sql) > 0)
						{
							header('Location:adminDetails.php');
						}
						else
						{
							echo('Oops! Something went Wrong! Try again!');
						}
					}
				?>