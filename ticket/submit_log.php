
<?php
	include("../headers/header1.php");

	$table = "tickets";
 
	$name = $_POST['name'];
	$item = $_POST['item'];
	$date = date('Y-m-d');

	include('../php/connect.php');

	mysql_query("INSERT INTO $table (id, name, item, date) VALUES (NULL, \"$name\", \"$item\", \"$date\")") or die(mysql_error());
	
?>
