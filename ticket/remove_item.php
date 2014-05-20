
<?php
//	include("../headers/header1.php");

	$table = "tickets";
 
	$item = $_GET['item'];

	include('../php/connect.php');

	mysql_query("DELETE FROM $table WHERE id = \"$item\"") or die(mysql_error());

?>
<script>
	$(document).ready(function(){
		$.mobile.back();
	});
</script>

	<body>
		<div data-role="page" data-theme="a">
                        <div data-role="header" data-position="inline">
                                <h1 id="title">Item Has Been Removed</h1>
                                <a data-icon="back" class="ui-btn-left" data-ajax="false" data-rel="back" data-ajax="false">Back</a>
<!--                               <a href="#" data-icon="gear" class="ui-btn-right">Options</a> -->

                    </div>
	<h2>
<?php echo "Item has been removed.";?>
  </h2>
 	</div>
	</body>
