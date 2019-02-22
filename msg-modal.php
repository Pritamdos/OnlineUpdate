<!DOCTYPE html>
<html lang="en">
<head>
 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="./assets/css/custom.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<!-- Modal Continue -->
<div id="continue" class="modal fade banner-modal">
	<div class="modal-dialog modal-continue">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i onClick="parent.location='modal-sub.php'" class="material-icons">&#xE876;</i>
				</div>
				<button type="button" onClick="parent.location='index.php'"  class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body text-center">
				<h4>Hi User</h4>	
				<p>Welcome to Online Assignment Help. </p>
				<button class="btn btn-success" onClick="parent.location='login.php'"  data-dismiss="modal"><span>Click to Continue</span> <i class="material-icons">&#xE5C8;</i></button>
			</div>
		</div>
	</div>
</div> 

<!-- Modal Continue -->
<div id="reg_continue" class="modal fade banner-modal">
	<div class="modal-dialog modal-continue">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i onClick="parent.location='modal-sub.php'" class="material-icons">&#xE876;</i>
				</div>
				<button type="button" onClick="parent.location='login.php'"  class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body text-center">
				<h4>Hi User </h4>	
				<p> You have been registered Successfully. </p>
				<button class="btn btn-success" onClick="parent.location='login.php'"  data-dismiss="modal"><span>Please Login to Continue </span> <i class="material-icons">&#xE5C8;</i></button>
			</div>
		</div>
	</div>
</div>
    

<!-- Modal Confirm -->
<div id="confirm" class="modal fade banner-modal">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>				
				<h4 class="modal-title">Are you sure?</h4>	
				<button type="button" class="close" onClick="parent.location='index.php'"  data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to delete these records? This process cannot be undone.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
				<button type="button" onClick="parent.location='index.php'" class="btn btn-danger">Delete</button>
			</div>
		</div>
	</div>
</div>    

<!-- Modal Success -->
<div id="call_success" class="modal fade banner-modal">
	<div class="modal-dialog modal-success">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>				
				<h4 class="modal-title" onClick="parent.location='index.php'">Accepted!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">
					Hi Sir/Ma'am, We have accepted your call Request! 
				</p>
				<br>
				<p class="text-center">
					<b>Our Agent will call your very Soon!</b> 
				</p>
				<br><br>
				 
				<p class="text-center">
					Thank You for calling <b>onlineassignmenthelp.com</b>
				</p>
			
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" onClick="parent.location='index.php'" data-dismiss="modal">Proceed</button>
			</div>
		</div>
	</div>
</div>  

<!-- Modal Success for Subscribing -->
<div id="sub_success" class="modal fade banner-modal">
	<div class="modal-dialog modal-success">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>				
				<h4 class="modal-title" onClick="parent.location='index.php'">Subscribed!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">
					Hi Sir/Madam, You have been subscribed successfully!
				</p>
				
				<p class="text-center">
					<b>We will keep sending you exiting offers and updates from our bucket.</b>
				</p>
				
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" onClick="parent.location='index.php'" data-dismiss="modal">Proceed</button>
			</div>
		</div>
	</div>
</div>     

<!-- Modal Success for Order Placed -->
<div id="ord_success" class="modal fade banner-modal">
	<div class="modal-dialog modal-success">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>				
				<h4 class="modal-title" onClick="parent.location='index.php'">Order Placed!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">
					<b>Hi Sir/Ma'am, Your order has been placed successfully!</b>
				</p>
				
				<p class="text-center">
					Please Visit your User Dashboard to Review it.
				</p>
				
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" onClick="parent.location='user_index.php'" data-dismiss="modal">Proceed</button>
			</div>
		</div>
	</div>
</div> 

<?php

	session_start();
	if($_SESSION['sel_modal']){
		
		$selected = $_SESSION['sel_modal'];
		
		if( $selected == 'continue' ){
			echo 	"<script>
						$(window).on('load',function(){
							$('#continue').modal({
								backdrop: 'static'
							});
							$('#continue').modal('show');
						});
					</script>";
		}
		elseif( $selected == 'call_success' ){
			echo 	"<script>
						$(window).on('load',function(){
							$('#call_success').modal({
								backdrop: 'static'
							});
							$('#call_success').modal('show');
						});
					</script>";
		}
		elseif( $selected == 'sub_success' ){
			echo 	"<script>
						$(window).on('load',function(){
							$('#sub_success').modal({
								backdrop: 'static'
							});
							$('#sub_success').modal('show');
						});
					</script>";
		}
		elseif( $selected == 'reg_continue' ){
			echo 	"<script>
						$(window).on('load',function(){
							$('#reg_continue').modal({
								backdrop: 'static'
							});
							$('#reg_continue').modal('show');
						});
					</script>";
		}
		elseif( $selected == 'ord_success' ){
			echo 	"<script>
						$(window).on('load',function(){
							$('#ord_success').modal({
								backdrop: 'static'
							});
							$('#ord_success').modal('show');
						});
					</script>";
		}
		else{
			header("location: 404-error.php");
		}
	}
	else{
	  header("location: 404-error.php");
    }
?>

