
<?php
//	include("../headers/header1.php");

	$table = "tickets";
 
	$name = $_POST['name'];
	$item = $_POST['item'];
	$date = date('Y-m-d');

	$cid = $_POST['cid'];
	include('../php/connect.php');

	mysql_query("INSERT INTO $table (id, name, item, date, cid) VALUES (NULL, \"$name\", \"$item\", \"$date\", \"$cid\")") or die(mysql_error());

	echo "$item has been ordered!";	
?>
