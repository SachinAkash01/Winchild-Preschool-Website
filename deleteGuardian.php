<?php session_start();
	$con = mysqli_connect("localhost","root","","winchilddb","3308");
	if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
	$sql = "DELETE FROM `guardian` WHERE `email` = '".$_GET["email"]."';";

	if (mysqli_query($con, $sql))
	{
		header('Location: studentDetails.php');
	}
?>