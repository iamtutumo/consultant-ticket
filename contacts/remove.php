
<?php
//	include("../headers/header1.php");

	$cid = $_GET['id'];
	$contact = $_GET['contact'];
	$table = "contacts";
	 
	include('../php/connect.php');

	mysql_query("UPDATE $table SET cid=\"D$cid\" WHERE id = \"$contact\"") or die(mysql_error());

?>
	<body>
		<div data-role="page" data-theme="a">
                        <div data-role="header" data-position="inline">
                                <h1 id="title">Contact Removed</h1>
                                <a data-icon="back" class="ui-btn-left" data-ajax="false" href="view.php?id=<?php echo $cid;?>">Back</a>
<!--                               <a href="#" data-icon="gear" class="ui-btn-right">Options</a> -->

                    </div>
	<h2>
<?php echo "Contact removed.";?>
  </h2>
 	</div>
	</body>
