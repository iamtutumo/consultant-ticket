<div>
<ul data-role="listview" class="touch" data-role="listview" data-icon="false" data-split-icon="delete" data-split-theme="d">
<?php
	$table = "tickets";
	$name =$_GET['name'];
        $date = $_GET['date'];
	$cid = $_GET['id'];

	$total = 0;

        if(!isset($date)){
                $date = date('Y-m-d');
        }
	
	include("../php/connect.php");

	$sql= mysql_query("SELECT * FROM $table WHERE name LIKE \"$name\" AND date = \"$date\" AND cid = \"$cid\"");

	while($row = mysql_fetch_array($sql)){
		$id = $row["id"];
		$item = $row["item"];

		print "<li>\n";
		print "<a>$item</a>\n";
		print "<a href='remove_item.php?item=$id' class='delete'>Delete</a>\n";
		print "</li>\n";

		$price = explode("$", $item);

		$total += $price[1];
	};

	$subtotal = sprintf("%1\$.2f",$total);
	$tax = $total *.06;
	$tax = sprintf("%1\$.2f",$tax);
	$total = $total * 1.06;
	$total = sprintf("%1\$.2f",$total);

?>
</ul>
</div>
<br><br>
