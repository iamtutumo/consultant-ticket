
<?php
        $date = $_GET['date'];

        if(!isset($date)){
                $date = date('Y-m-d');
        }


	$table = "contacts";
	$name =$_GET['name'];

function get_tiny_url($url)  {  
	$ch = curl_init();  
	$timeout = 5;  
	curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url);  
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);  
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);  
	$data = curl_exec($ch);  
	curl_close($ch);  
	return $data;  
}



	include("../php/connect.php");

	$sql= mysql_query("SELECT * FROM $table WHERE name = \"$name\"");
	//$sql= mysql_query("SELECT * FROM `lowes` WHERE name LIKE \"%$qname%\"") AND ("WHERE date BETWEEN STR_TO_DATE('$startDate','%d-%m-%Y') AND STR_TO_DATE('$endDate','%d-%m-%Y')");

	while($row = mysql_fetch_array($sql)){
		$id = $row["id"];
		$name = $row["name"];
		$email = $row["email"];
		$phone = $row["phone"];

		$name2 = str_replace(" ","+", $name);
	        $url = "http://filmsbykris.com/scripts/ticket/ticket/customer_ticket.php?name=$name2&date=$date";
//		echo $url;
		$url = get_tiny_url($url);

		$mail = $mail . "mailto:";
		$mail = $mail . "$email";
		$mail = $mail . "?subject=Thank You For Your Business";
		$mail = $mail . "&body=";
		$mail = $mail . "Thank you for order today.  Your receipt can be viewed here%0D%0A";
		$mail = $mail . "$url";
	};

	echo "<a href=\"$mail\" rel=\"external\" data-ajax='false' data-role=\"button\">";
	echo "Email $email";
        echo '</a>';
?>
