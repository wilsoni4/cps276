<?php
session_start();
	if($_SESSION['access'] !== "accessGranted"){
	  header('location: index.php?page=login');
	}
?>