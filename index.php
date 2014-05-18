<?php

	$id = $_GET['id'];

	if(!isset($id)){
		header( 'Location: error.php' ) ;
	}

?>
<!DOCTYPE html>
<html>
	<head>
                <?php include("headers/header.php");?>
	</head>
	<body>
		<div data-role="page" data-theme="a">
                        <div data-role="header" data-position="inline">
                                <h1 id="title">Main Menu</h1>
 <!--                                <a href="../" data-icon="home" class="ui-btn-left" data-ajax="false">Home</a>
                               <a href="#" data-icon="gear" class="ui-btn-right">Options</a> -->
                        </div>
			<div data-role="content" data-theme="a">
				<ul data-role="listview" data-filter="false" data-filter-placeholder="Find" data-filter-theme="a" data-inset="true">
					<li><a href="ticket?id=<?php echo $id;?>" data-ajax="false">Today's Ticket</a></li>
					<li><a href="contacts?id=<?php echo $id;?>" data-ajax="false">New Contact</a></li>
				</ul>
			</div>
		</div>
		<script>
			$(document).ready(function(){
	

			});
		</script>

	</body>
</html>
