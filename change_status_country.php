<?php
include "connection.php";
session_start();

if (!isset($_SESSION['id'])){

	header("Location: index.php");
}

$idnum=$_GET['id'];

$change_status_query="UPDATE countries SET status = !status WHERE id = $idnum;";
if (mysqli_query($conn,$change_status_query))
	{
	
		header("Location: /loagma/country.php");
	}


?>
