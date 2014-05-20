<form>
    <input data-type="search" id="filterControlgroup-input">
</form>
<div id="item" data-role="controlgroup" data-filter="true" data-input="#filterControlgroup-input" data-filter-reveal="true">
<?php

	$table = "items";
	$cid = $_GET['id'];
	include("../php/connect.php");

	$sql= mysql_query("SELECT * FROM $table WHERE cid = \"$cid\" ORDER BY item");
	//$sql= mysql_query("SELECT * FROM `lowes` WHERE name LIKE \"%$qname%\"") AND ("WHERE date BETWEEN STR_TO_DATE('$startDate','%d-%m-%Y') AND STR_TO_DATE('$endDate','%d-%m-%Y')");

	while($row = mysql_fetch_array($sql)){
		$item = $row["item"];
		$price = $row["price"];
		print "<a href=\"#\" class=\"item ui-btn ui-shadow ui-corner-all\">$item $price</a>\n";
	};



?>
</div>
