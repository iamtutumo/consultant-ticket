<?php

	$id = $_GET['id'];
	$url="../index.php?id=$id";

	$cid = $id;

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

				$("#send").click(function(){
					send();
				});


				function send(){
                                        var item = $("#item").val();
                                        var price = $("#price").val();
                                        var cid = <?php echo $cid;?>;   

                                        var url="submit_log.php";
                                        $.post(url, { 
                                                price: price, 
                                                item: item,
                                                cid : cid
                                        }).done(function( data ) {
                                        	alert(data);
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
                                <h1 id="title">Enter New Item</h1>
                                <a href="../index.php?id=<?php echo $id;?>" data-icon="home" class="ui-btn-left" data-ajax="false">Home</a>
<!--                               <a href="#" data-icon="gear" class="ui-btn-right">Options</a> -->
                        </div>
			<div data-role="content" data-theme="a">
                            <form id="form1">

				<label>Item:</label>
				<input type="text" id="item" name="item" placeholder="Enter Item Name">
				<label>Price:</label>
				<input type="number" id="price" name="price" placeholder="Enter Item Price">

				<div class="ui-grid-a">
					<div class="ui-block-a"><button id="send" data-theme="b">Submit</button></div>
				</div>
                            </form>
			</div>
		</div>
	</body>
</html>
