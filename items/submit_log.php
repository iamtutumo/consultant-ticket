<?php
//	include("../headers/header1.php");

	$table = "items";
 
	$cid = $_POST['cid'];
	$item = $_POST['item'];
	$price = $_POST['price'];

        if (strpos($price,'$') == false) {
        	$price = "$$price";
        }


	echo "$item has been added!";

	include('../php/connect.php');

	mysql_query("INSERT INTO $table (`id`, `item`, `price`, `cid`) VALUES (NULL, \"$item\", \"$price\", \"$cid\")") or die(mysql_error());
	
?>
