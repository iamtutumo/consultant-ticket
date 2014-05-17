<?php

	$id = $_GET['id'];
	$url="../index.php?id=$id";

	if(!isset($id)){
		header( 'Location: error.php' ) ;
	}

	$name = $_GET['name'];

        if(isset($name)){
                header( "Location: $url" ) ;
        }

?>
<!DOCTYPE html>
<html>
	<head>
                <?php include("../headers/header1.php");?>
		<script>
			$(document).ready(function(){

                                $("#title").html("Entering Contacts");

				$("#send").click(function(){
					send();
				});


				function send(){
					var url="submit_log.php";

					$.post(url, $( "#form1" ).serialize()
					).done(function( data ) {
						var url = "<?php echo $url;?>";
						$.mobile.changePage(url);
//						window.location.replace("done.php");	
					}).fail(function() {
						alert( "error - Unable to Send" );
					});

				}
			});
		</script>
	</head>
	<body>
		<div data-role="page" data-theme="a">
                        <div data-role="header" data-position="inline">
                                <h1 id="title">Enter New Contact</h1>
                                <a href="../index.php?id=<?php echo $id;?>" data-icon="home" class="ui-btn-left" data-ajax="false">Home</a>
<!--                               <a href="#" data-icon="gear" class="ui-btn-right">Options</a> -->
                        </div>
			<div data-role="content" data-theme="a">
                            <form id="form1">

				<label>Name:</label>
				<input type="text" id="name" name="name" placeholder="Enter Contact Name">
				<label>Phone:</label>
				<input type="tel" id="phone" name="phone" placeholder="Enter Phone Number">
				<label>Email:</label>
				<input type="email" id="email" name="email" placeholder="Enter Email Address">
				<label>Address:</label>
				<input type="text" id="address" name="address" placeholder="Enter Mailing Address">
				<label>Comments</label>
				<input type="text" id="comments" name="comments" form="form1">

				<div class="ui-grid-a">
					<div class="ui-block-a"><button id="send" data-theme="b">Submit</button></div>
				</div>
                            </form>
			</div>
		</div>
	</body>
</html>
