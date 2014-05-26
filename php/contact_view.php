<div data-role="content">  
	<fieldset data-role="controlgroup" id="myGroup" data-filter="true" data-icon="false">  
<?php
	$table = "contacts";
//	$name =$_GET['name'];

	$total = 0;

        if(!isset($date)){
                $date = date('Y-m-d');
        }
	
	include("../php/connect.php");

	$sql= mysql_query("SELECT * FROM $table where cid = \"$cid\"");

	while($row = mysql_fetch_array($sql)){
		$id = $row["id"];
		$name = $row["name"];
		$phone = $row["phone"];
		$email = $row["email"];
		$address = $row["address"];
		$comments = $row["comments"];

		print "<a href='view_a.php?id=$cid&contact=$id' ";
		print "class=\"ui-btn ui-shadow ui-corner-all\">$name</a>";
		
//                print "<a href='remove.php?id=$cid&contact=$id' class='item delete ui-btn ui-shadow ui-corner-all'></a>\n";	
	};

?>

	</fieldset>
</div>
<br><br>
