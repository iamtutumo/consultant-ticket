<?php

	$name = $_GET['name'];

	if(!isset($name)){
		header( 'Location: error.php' ) ;
	}

?>
<!DOCTYPE html>
<html>
	<head>
                <?php include("../headers/header1.php");?>

			<script>
			$(document).ready(function(){

                                $("#title").html("Ticket for <?php echo $name; ?>");

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
					send();
				});

			});
		</script>
	</head>
	<body>
		<div data-role="page" data-theme="a">
                        <div data-role="header" data-position="inline">
                                <h1 id="title">Ticket for <?php echo $name;?></h1>
<!--                                <a data-icon="back" class="ui-btn-left" data-ajax="false" data-rel="back">Back</a>
                               <a href="#" data-icon="gear" class="ui-btn-right">Options</a> -->
                        </div>

			<div data-role="content" data-theme="a">
                            <form id="form1">

				<?php 
					include('../php/customer_ticket.php');
				?>

				<div id="subtotal">Subtotal = $<?php echo $subtotal;?></div>
				<div id="tax">Tax = $<?php echo $tax;?></div>
				<div id="total">Total = $<?php echo $total;?></div>

                            </form>
			</div>
		</div>

	</body>
</html>
