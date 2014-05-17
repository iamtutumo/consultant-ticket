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


				$(".item").bind('click',function(){
					var name = $("#name").val();
					var item = $(this).html();
			
					var msg = item + " has been ordered for " + name;

					var url="submit_log.php";
                                        $.post(url, { 
						name: name, 
						item: item 
					}).done(function( data ) {
                                        }).fail(function() {
                                                alert( "error - Unable to Send" );
                                        });

					
					alert(msg);

				});

				$("#goto").click(function(){
					var name = $("#name").val();
					var id = "<?php echo $id;?>";
					var url = "view_ticket.php?name=" + name + "&id=" + id;

					$.mobile.changePage(url);	
				});

			});
		</script>
	</head>
	<body>
		<div data-role="page" data-theme="a">
			<div data-role="header" data-position="inline">
                                <h1 id="title">Ticket</h1>
				<a href="../index.php?id=<?php echo $id;?>" data-icon="home" class="ui-btn-left" data-ajax="false">Home</a>
<!--                               <a href="#" data-icon="gear" class="ui-btn-right">Options</a> -->
                        </div>
			<div data-role="content" data-theme="a">
                            <form id="form1">

				<?php 
					include('../php/contacts.php');
					include('../php/items.php');
				?>

				<button id="goto">View Ticket</button>
                            </form>
			</div>

	</div>
	</body>
</html>
