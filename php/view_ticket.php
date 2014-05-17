<div>
<ul data-role="listview" class="touch" data-role="listview" data-icon="false" data-split-icon="delete" data-split-theme="d">
<?php
	$table = "tickets";
	$name =$_GET['name'];
        $date = $_GET['date'];

	$total = 0;

        if(!isset($date)){
                $date = date('Y-m-d');
        }
	
	include("../php/connect.php");

	$sql= mysql_query("SELECT * FROM $table WHERE name LIKE \"$name\" AND date = \"$date\"");

	while($row = mysql_fetch_array($sql)){
		$id = $row["id"];
		$item = $row["item"];

		print "<li>";
		print "<a>$item</a>";
		print "<a href='remove_item.php?item=$id' class='delete'>Delete</a>";
		print "</li>";

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
