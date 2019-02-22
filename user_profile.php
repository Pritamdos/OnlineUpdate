<?php include './session_check.php'?>

<!DOCTYPE HTML>
<html>
	<head>
        <?php include './html_head.php'?>	
		
		<style>
			.form-gap1{
			  padding-top:35px;
			}
		</style>

	</head>
	
    <body>	
      	<div class="page-container" id="mainpage">	
  			<div class="left-content">
	  			<div class="mother-grid-inner">
                 	<!--header start here-->
                 		<?php include './user_head.php'?>
                 	<!--header end here-->

                    <!--inner block start here-->

					<div class="form-gap1">
					</div>
					<div class="container emp-profile">
						
						<?php

							$temp_email = $_SESSION['email'];
						
							$sql   = "SELECT * FROM `register_form_data` where email = '$temp_email';";
							$result = $conn->query($sql);

							if ($result->num_rows > 0){
								$row = mysqli_fetch_array($result);
								  	$name = $row['name'];
								  	$email = $row['email'];
								  	$phone = $row['phone'];
								  	$education = $row['education'];  

									//User profile picture
				                    $userPicture = !empty($row['image_path'])?$row['image_path']:'no-image.jpg';
				                    $userPictureURL = 'user_assets/uploads/user_image/'.$userPicture;

							   }

							$ord_sql = "SELECT * FROM `order_status` where email = '$temp_email';";
							$ord_result = $conn->query($ord_sql);

							if ($ord_result->num_rows > 0){
								$ord_row = mysqli_fetch_array($ord_result);
									$total_count = $ord_row['total_count'];
								  	$success_count = $ord_row['success_count']; 
								  	$pending_count = $ord_row['pending_count']; 
								  	$fail_count = $ord_row['fail_count']; 
							}
							else{
								$total_count = 0;
							  	$success_count = 0; 
							  	$pending_count = 0; 
							  	$fail_count = 0; 
							}

							$activity_sql = "SELECT * FROM `user_activity_log` where email = '$temp_email';";
							$activity_result = $conn->query($activity_sql);

							if(!$ord_result || !$result || !$activity_result){
								die ('SQL Error: ' . mysql_error($conn));
							}

						?>


						<div class="row">
							<div class="col-md-4">
								<div class="profile-img">
									<div class="user-box">
					                    <div class="img-relative">
					                        <!-- Loading image -->
					                        <div class="uploadProcess" style="display: none;">
					                            <div class="overlay-content">
					                                <img src="https://media.giphy.com/media/byyKsRAasws5RF9SdT/giphy.gif"/>
					                            </div>
					                        </div>

											<!-- Hidden upload form -->
											<form method="post" action="connection.php" enctype="multipart/form-data" id="picUploadForm" target="uploadTarget">
											    <input type="file" name="picture" id="fileInput"  style="display:none"/>
											    <input type="hidden" name="hide_email" id="hide_email" value="<?php echo $temp_email; ?>">
											</form>
											<iframe id="uploadTarget" name="uploadTarget" src="#" style="width:0;height:0;border:0px solid #fff;">
											</iframe>
											<!-- Image update link -->
											<a class="editLink" href="javascript:void(0);">
												<i class="fa fa-pencil fa-2x"></i>
											</a>
											<!-- Profile image -->
											<img src="<?php echo $userPictureURL; ?>" id="imagePreview">

					                    </div>
					                </div>
								</div>
							</div>

					<?php

					echo	'<div class="col-md-6">
								<div class="profile-head">
									<h3>
										'.$name.'
									</h3>
									<h4>
										'.$education.'
									</h4>

									</br>
								
									<ul class="nav nav-tabs">
										<li class="active">
											<a data-toggle="tab" href="#info">
												Profile Info
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#timeline">
												Time Line
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="profile-work">
								    <br>
									<br>
									<ul class="list-group">
										<li class="list-group-item text-muted">Website</li>
									    <li class="list-group-item text-left">
									    	<a href="www.OnlineAssignmentHelp.com"> OnlineAssignmentHelp.com </a>
									    <li> 
									</ul>
									<ul class="list-group">
										<li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
										<li class="list-group-item text-right">
											<span class="pull-left">
												<strong>Order Created</strong>
											</span> 
											'.$total_count.'
										</li>
										
										<li class="list-group-item text-right">
											<span class="pull-left">
												<strong>Successfully Paid</strong>
											</span> 
											'.$success_count.'
										</li>
										
										<li class="list-group-item text-right">	
											<span class="pull-left">
												<strong>Pending Orders</strong>
											</span> 
											'.$pending_count.'
										</li>
										
										<li class="list-group-item text-right">
											<span class="pull-left">	
												<strong>Failed Orders</strong>
											</span> 
											'.$fail_count.'
										</li>
									</ul> 	
								</div>
							</div>';

					?>
							
							<div class="col-md-8">
								<div class="tab-content">
									<div class="tab-pane active" id="info">

										<!-- Loading image -->
				                        <div class="uploadProcessPro" style="display: none;">
				                            <div class="overlay-content-pro">
				                                <img src="https://media.giphy.com/media/byyKsRAasws5RF9SdT/giphy.gif"/>
				                            </div>
				                        </div>
				                        <!-- Loading image ended -->

										<form class="form" action="connection.php" method="post" id="updatedetail" target="uploadTargetPro">
											<div class="form-group">
												<div class="col-xs-6">
														<label for="name"><h4>Name </h4></label>
														<input type="text" class="form-control" name="pname" id="pname" disabled="disabled">
												</div>
											</div>
											<div class="form-group">
												<div class="col-xs-6">
													<label for="email"><h4>E-Mail Id </h4></label>
													<input type="text" class="form-control" name="pemail" id="pemail" readonly>
												</div>
											</div>
											<div class="form-group">													
												<div class="col-xs-6">
													<label for="phone"><h4>Phone No. </h4></label>
													<input type="text" class="form-control" name="pphone" id="pphone" disabled="disabled">
												</div>
											</div>
											<div class="form-group">
												<div class="col-xs-6">
													<label for="education"><h4>Higher Education</h4></label>
													<input type="text" class="form-control" name="peducation" id="peducation" disabled="disabled">
												</div>
											</div>

											<div class="form-group">
												<div class="col-xs-6">
													<label for="location"><h4>Address</h4></label>
													<input type="text" class="form-control" name="plocation" id="plocation" disabled="disabled">
												</div>
											</div>

											<input type="hidden" name="pro_update" id="pro_update">

											<div class="form-group">
												<div class="col-xs-12">
													<br>
													<button class="btn btn-lg btn-success" onclick="profileupdate()" type="button" 
													id="updateprofile" name="updateprofile">
														Save
													</button>
													<button class="btn btn-lg btn-danger" type="button" id="editbtn" >
														Edit
													</button>
												</div>
											</div>
										</form>

										<iframe id="uploadTargetPro" name="uploadTargetPro" src="#" style="width:0;height:0;border:0px solid #fff;">
										</iframe>

										<!-- Success Modal message -->
										<div class="modalbox success col-sm-8 col-md-6 col-lg-5 animate" id="updatemodal">
											<div class="icon">
												<i class="glyphicon glyphicon-ok" aria-hidden="true"></i>
											</div>
											<!--/.icon-->
											<h1>Updated!</h1>
											<p>Profile Updated Successfully.
											<button type="button" class="redo btn" id="closemodal">Ok</button>
										</div>

									</div>

									<div class="tab-pane" id="timeline">
									    <div id="messages">
											<div class="message">
												<div class="container">
													<div class="row">
														<h4>Time Line of All the Activities Done! </h4>
														<br>
													</div>
													<div class="qa-message-list" id="wallmessages">

													<?php 
														while ($activity_row = mysqli_fetch_array($activity_result)){
														$temp_date = strtotime($activity_row['date']);
														$create_date = date('F j, Y', $temp_date);
												
												echo   '<div class="message-item" id="m16">
															<div class="message-inner">
																<div class="message-head clearfix">
																	<div class="avatar pull-left">
																		<a href="user_index.php">
																		<img class="time_img" src="user_assets/images/user_icon.png">
																		</a>
																	</div>
																	
																	<div class="user-detail">
																		<h5 class="handle">
																			'.$activity_row['name'].'
																		</h5>
																		<div class="post-meta">
																			<div class="asker-meta">
																				<span class="qa-message-what">
																				</span>
																				<span class="qa-message-when">
																					<span class="qa-message-when-data">
																						'.$create_date.'
																					</span>
																				</span>
																				<span class="qa-message-who">
																					<span class="qa-message-who-pad">
																						by 
																					</span>
																					<span class="qa-message-who-data">
																						<a href="user_index.php">
																							'.$activity_row['email'].'
																						</a>
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="qa-message-content">
																	'.$activity_row['activity'].'
																</div>
															</div>
														</div>';	
														}
													?>

													</div>
												</div>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
                    <!--inner block end here-->

	  			    <!-- copy rights start here -->
					<div class="copyrights">
						 <p>
						 	 © 2019 Online Assignment Help. All Rights Reserved | Design by  
						 	 	<a href="#" target="_blank">
						 	 		Ashish Gupta
						 	 	</a> 
						 	 	
						 </p>
					</div>	
					<!--copy rights end here -->
	  			</div>
	  		</div>
	  		<?php include './side_bar.php'?>
	  	</div>	

	<script>

		var modal = document.getElementById('updatemodal');
		
		// Get the button that close the modal
		var btn = document.getElementById("closemodal");

		// When the user clicks the button, open the modal 
		btn.onclick = function() {
		  	$("#updatemodal").modal('hide');

		  	$("#pname").attr('disabled', !$("#pname").attr('disabled'));
	  		$("#pphone").attr('disabled', !$("#pphone").attr('disabled'));
	  		$("#peducation").attr('disabled', !$("#peducation").attr('disabled'));
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		  if (event.target == modal) {
		    modal.style.display = "none";
		  }
		}

	</script>

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
	
	$(function(){
		$(window).scroll(function(){
			$('.year').each(function(){
				var year = $(this).find('h2').first().text();
				if($(this).offset().top < $(document).scrollTop() +100){
					$(this).find('.date').addClass('activeYear');
					$('#dataYear').html(year);
				}else{
					$(this).find('.date').removeClass('activeYear');
				}
			});
		});
	});

	$(document).ready(function(){
	  var year = $('.year').find('h2').first().text();
		$('#dataYear').html(year); 
	  $('.year').first().find('.date').addClass('activeYear');
	});

	</script>
	<!--scrolling js-->
			<script src="user_assets/js/jquery.nicescroll.js"></script>
			<script src="user_assets/js/scripts.js"></script>
			<!--//scrolling js-->
	<script src="user_assets/js/bootstrap.js"> </script>
	<!-- mother grid end here-->

    </body>

	<script type="text/javascript">
	    $(document).ready(function () {
	        //If image edit link is clicked
	        $(".editLink").on('click', function(e){
	            e.preventDefault();
	            $("#fileInput:hidden").trigger('click');
	        });

	        //On select file to upload
	        $("#fileInput").on('change', function(){
	            var image = $('#fileInput').val();
	            var img_ex = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
	            
	            //validate file type
	            if(!img_ex.exec(image)){
	                alert('Please upload only .jpg/.jpeg/.png/.gif file.');
	                $('#fileInput').val('');
	                return false;
	            }
	            else
	            {
	                $('.uploadProcess').show();
	                $( "#picUploadForm" ).submit();
	            }
	        });
	    });

	    //After completion of image upload process
	    function completeUpload(success, fileName) {
	        if(success == 1){
	            $('#imagePreview').attr("src", "");
	            $('#imagePreview').attr("src", fileName);
	            $('#fileInput').attr("value", fileName);
	            $('.uploadProcess').hide();
	        }else{
	            $('.uploadProcess').hide();
	            alert('There was an error during file upload!');
	        }
	        return true;
	    }

	    //On Click of Save button for Profile update
	    function profileupdate(){
	    	//if(){

	    		$('.uploadProcessPro').show();
	            $( "#updatedetail" ).submit();
	    	//}	
	    	//else{

	    	//}    	
	    }

	    //After completion of image upload process
	    function completeUpdate(res_update){
	    	if(res_update == 1){
		    	$('.uploadProcessPro').hide();
				$("#updatemodal").modal('show');
	    	}

	    	else{
	    		$('.uploadProcessPro').hide();
	    	}
	    	return true;
	    }


	</script>


    <script type="text/javascript">    
	    $(document).ready(() => {
		  let url = location.href.replace(/\/$/, "");
		 
		  if (location.hash) {
		    const hash = url.split("#");
		    $('a[href="#'+hash[1]+'"]').tab("show");
		    url = location.href.replace(/\/#/, "#");
		    history.replaceState(null, null, url);
		    setTimeout(() => {
		      $(window).scrollTop(0);
		    }, 400);
		  } 
		   
		  $('a[data-toggle="tab"]').on("click", function() {
		    let newUrl;
		    const hash = $(this).attr("href");
		    if(hash == "#info") {
		      newUrl = url.split("#")[0];
		    } else {
		      newUrl = url.split("#")[0] + hash;
		    }
		    history.replaceState(null, null, newUrl);
		  });
		});
    </script>

</html>

<script>
   	
   	document.getElementById("pname").value = "<?php echo $name; ?>";
   	document.getElementById("pemail").value = "<?php echo $email; ?>";
   	document.getElementById("pphone").value = "<?php echo $phone; ?>";
   	document.getElementById("peducation").value = "<?php echo $education; ?>";


   	$("#editbtn").click(function() {
  		$("#pname").attr('disabled', !$("#pname").attr('disabled'));
  		$("#pphone").attr('disabled', !$("#pphone").attr('disabled'));
  		$("#peducation").attr('disabled', !$("#peducation").attr('disabled'));
	});

</script>

