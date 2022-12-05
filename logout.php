<?php
session_start();

if ($_SESSION["username"])
{
	unset($_SESSION["username"]);
	header('Location: login.php');
}
else if ($_SESSION["regularUser"])
{
	unset($_SESSION["regularUser"]);
	header('Location: login.php');
}
?>