<?php include './session_check.php'?>
<!DOCTYPE HTML>
<html>
	<head>
         <?php include './html_head.php'?>
	</head>

    <body>	
      	<div class="page-container">	
  			<div class="left-content">
	  			<div class="mother-grid-inner">
                 	<!--header start here-->
                 		<?php include './user_head.php'?>
                 	<!--header end here-->

                    <!--inner block start here-->

                    <div class="form-gap">
					</div>
					<div class="container">  	
						<div class="row">
							<div class="col-md-4 col-md-offset-4">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="text-center">
											<h3><i class="fa fa-lock fa-2x"></i></h3>
											<h2 class="text-center">Change Password?</h2>
											<p>You can reset your password here.</p>
											<div class="panel-body">

												<!-- Loading image -->
						                        <div class="uploadProcessPsw" style="display: none;">
						                            <div class="overlay-content-psw">
						                                <img src="https://media.giphy.com/media/byyKsRAasws5RF9SdT/giphy.gif"/>
						                            </div>
						                        </div>
						                        <!-- Loading image ended -->

												<form action="connection.php" method="post" id="updatepass" target="uploadTargetPsw">
													<div class="form-group">	
														
														<div class="input-group">
														  	<span class="input-group-addon">
														  		<i class="fa fa-lock"></i>
														 	</span>
														  	<input id="old_pass" name="old_pass" placeholder="Enter Old Password" 
														  	class="form-control" type="password" 
														  	required="required">
														</div>
														
														<div class="input-group">
														  	<span class="input-group-addon">
														  		<i class="fa fa-lock"></i>
														 	</span>
														 	<input id="new_pass" name="new_pass" placeholder="Enter New Password" class="form-control" type="password" required="required">
														</div>
														
														<div class="input-group">
														  	<span class="input-group-addon">
														  		<i class="fa fa-lock"></i>
														  	</span>
														  	<input id="conf_pass" name="conf_pass" placeholder="Confirm Password" class="form-control" type="password" required="required">
														</div>

														<input type = "hidden" id="passvalidate" name="passvalidate" 
														value = "<?php echo $_SESSION['email']; ?>" /> 
													</div>
											
													<div class="form-group">
														<input class="btn btn-lg btn-primary btn-block" onclick="passwordupdate()" 
														type="submit" id="updatepassword" name="updatepassword"
														value="Reset Password">
													</div>   
											
												</form>

												<iframe id="uploadTargetPsw" name="uploadTargetPsw" src="#" 
													style="width:0;height:0;border:0px solid #fff;">
												</iframe>

												<!-- Success Modal message -->
												<div class="modalbox success col-sm-8 col-md-6 col-lg-5 animate" id="updatemodal">
													<div class="icon">
														<i class="glyphicon glyphicon-ok" aria-hidden="true"></i>
													</div>
													<!--/.icon-->
													<h1>Updated!</h1>
													<p>Password Updated Successfully.
													<button type="button" class="redo btn" id="closemodal">Ok</button>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
						      	<div class="aro-pswd_info">
						        	<div id="pswd_info">
						          		<h4>Password must be requirements</h4>
						          		<ul>
								            <li id="letter" class="invalid">At least <strong>one letter</strong></li>
								            <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
								            <li id="number" class="invalid">At least <strong>one number</strong></li>
								            <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
								            <li id="space" class="invalid">be<strong> use [~,!,@,#,$,%,^,&,*,-,=,.,;,']</strong></li>
						         		</ul>
						        	</div>
						      	</div>
						    </div>
						</div>
					</div>

                    <!--inner block end here-->

	  			    <!-- copy rights start here -->
					<div class="copyrights">
						<p> © 2019 Online Assignment Help. All Rights Reserved | Design by  <a href="#" target="_blank">Ashish Gupta</a> </p>
					</div>	
					<!--copy rights end here -->
	  			</div>
	  		</div>
	  		<?php include './side_bar.php'?>
	  	</div>	
      
        <!--slide bar menu end here-->
		<script>
		var toggle = true;
		            
		$(".sidebar-icon").click(function() {                
			if (toggle)
			  	{
				    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
				    $("#menu span").css({"position":"absolute"});
			 	}
			else
			  	{
				    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
				    setTimeout(function() {
				      $("#menu span").css({"position":"relative"});
				    }, 400);
			  	}               
			toggle = !toggle;
		});
		</script>
		<!--scrolling js-->
		<script src="user_assets/js/jquery.nicescroll.js"></script>
		<script src="user_assets/js/scripts.js"></script>

		<!--//scrolling js-->
		<script src="user_assets/js/bootstrap.js"> </script>
		<!-- mother grid end here-->
    </body>


	<?php

		$temp_email = $_SESSION['email'];

		$sql   = "SELECT * FROM `register_form_data` where email = '$temp_email';";
		$result = $conn->query($sql);

		if ($result->num_rows > 0){
			$row = mysqli_fetch_array($result);
			  	$password = $row['password'];
		   }

	 ?>

	<script>

		$(function(){ // this will be called when the DOM is ready
		  	$('#old_pass').keyup(function() {
		   		var old_pass = document.querySelector("#old_pass");
				var database_pass = <?php echo $password; ?> ;
				
				if (old_pass.value != database_pass ) {
					old_pass.setCustomValidity("Please Enter correct old Password");
				} 
				else {
					old_pass.setCustomValidity(""); // be sure to leave this empty!
				}
		  	});
		});

		$(function(){ // this will be called when the DOM is ready
		  	$('#conf_pass').keyup(function() {
		    	var con_pass = document.querySelector("#conf_pass");
				var new_pass = document.getElementById("new_pass").value;
				
				if (con_pass.value != new_pass ) {
					con_pass.setCustomValidity("Password didn't match");
				} 
				else {
					con_pass.setCustomValidity(""); // be sure to leave this empty!
				}
		  	});
		});

	</script>

	<script type="text/javascript">
	
	  	$(document).ready(function(){
		  	$('#new_pass').keyup(function() {
		   	 	var pswd = $(this).val();

		   	 	//var pass_msg;

			    //validate letter
			    if ( pswd.match(/[A-z]/) ) {
			      $('#letter').removeClass('invalid').addClass('valid');
			    } 
			    else {
			      $('#letter').removeClass('valid').addClass('invalid');
			      //pass_msg = "Enter atleast 1 letter";
			      //validPasscode(pass_msg);
			    }

			    //validate capital letter
			    if ( pswd.match(/[A-Z]/) ) {
			      $('#capital').removeClass('invalid').addClass('valid');
			    } 
			    else {
			      $('#capital').removeClass('valid').addClass('invalid');
			     // pass_msg = "Enter atleast 1 capital letter";
			      //validPasscode(pass_msg);
			    }

			    //validate number
			    if ( pswd.match(/\d/) ) {
			      $('#number').removeClass('invalid').addClass('valid');
			    } 
			    else {
			      $('#number').removeClass('valid').addClass('invalid');
			     // pass_msg = "Enter atleast 1 number";
			      //validPasscode(pass_msg);
			    }
			    
			    //validate space
			    if ( pswd.match(/[^a-zA-Z0-9\-\/]/) ) {
			      $('#space').removeClass('invalid').addClass('valid'); 	
			    } 
			    else {
			      $('#space').removeClass('valid').addClass('invalid');
			     // pass_msg = "Enter atleast 1 special character";
			      //validPasscode(pass_msg);
			    }

			    //validate the length
			    if ( pswd.length < 8 ) {
			      $('#length').removeClass('valid').addClass('invalid');   
			      //pass_msg = "Enter atleast 8 characters";
			     // validPasscode(pass_msg); 
			    } 
			    else {
			      $('#length').removeClass('invalid').addClass('valid'); 
			     // pass_msg = "";	 
			     // validPasscode(pass_msg); 
			    }
			    
			 	}).focus(function() {
			   		$('#pswd_info').show();
			  	}).blur(function() {
			    	$('#pswd_info').hide();
			});
		});

		//function validPasscode(pass_msg) {
		//	var passmsg = pass_msg;
			//new_pass.setCustomValidity(passmsg);
		//}

	</script>

	<script>

		// Get the button that close the modal
		var btn = document.getElementById("closemodal");

		// When the user clicks the button, open the modal 
		btn.onclick = function() {
		  	$("#updatemodal").modal('hide');

		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		  if (event.target == modal) {
		    modal.style.display = "none";
		  }
		}

		//On Click of Save button for Profile update
	    function passwordupdate(){
	    	//if(){

    		//$('.uploadProcessPsw').show();
    		//$( "#updatepass" ).submit();   

	    }

	    //After completion of image upload process
	    function completeUpdate(pass_update){
	    	if(pass_update == 1){
	    	
		    	$('.uploadProcessPsw').hide();
		    	$("#updatemodal").modal('show');

				document.getElementById("old_pass").value = "";
			   	document.getElementById("new_pass").value = "";
			   	document.getElementById("conf_pass").value = "";

	    	}

	    	else{
	    		$('.uploadProcessPsw').hide();
	    	}
	    	return true;
	    }
	</script>
</html>

