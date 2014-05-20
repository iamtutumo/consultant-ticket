
<?php
	include("../headers/header1.php");

	$table = "contacts";
 
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$comments = $_POST['comments'];

	$cid = $_POST['cid'];

	include('../php/connect.php');

	mysql_query("INSERT INTO $table (id, name, phone, email, address, comments, cid) VALUES (NULL, \"$name\", \"$phone\", \"$email\", \"$address\", \"$comments\", \"$cid\")") or die(mysql_error());
	
?>
