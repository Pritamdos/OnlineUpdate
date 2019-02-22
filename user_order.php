<?php include './session_check.php'?>
<!DOCTYPE HTML>
<html>
	<head>
         <?php include './html_head.php'?>
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		 
		<style>
		
		.table tr:not(.row_exp) {
		  display: none;
		}
		
		</style>
		 
		<script>
			/* API method to get paging information */
			'use strict';
			var $ = jQuery;
			$.getScript("https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js", function(){
			   
					$('#example').DataTable( {
						"paging":   true,
						"ordering": true,
						"info":     true
					} );
			});
		</script>
		
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
			$(document).ready(function() {
			  //Fixing jQuery Click Events for the iPad
			  var ua = navigator.userAgent,
				event = (ua.match(/iPad/i)) ? "touchstart" : "click";
			  if ($('.table').length > 0) {
				$('.table .header').on(event, function() {
				  $(this).toggleClass("active", "").nextUntil('.header').css('display', function(i, v) {
					return this.style.display === 'table-row' ? 'none' : 'table-row';
				  });
				});
			  }
			})
		</script>

		<style>
		
		.form-gap2{
			padding-bottom: 100px;
		}
		
		.content_page{
			height:650px;
			overflow-y: auto;
		}
		</style>
		
	</head>

    <body>	
      	<div class="page-container">	
  			<div class="left-content">
	  			<div class="mother-grid-inner">
                 	<!--header start here-->
                 		<?php include './user_head.php'?>
                 	<!--header end here-->

					<!--content main table page start here-->
					<div class="content_page">

						<?php

							$temp_email = $_SESSION['email'];
							
							$ord_sql = "SELECT * FROM `order_form_data` where email = '$temp_email';";
							$ord_result = $conn->query($ord_sql);
							
							if(!$ord_result){
								die ('SQL Error: ' . mysql_error($conn));
							}
						?>

						<!--inner block start here-->
						<div class="form-gap2">
						</div>
						<h2 style="color: #448aff;text-align: center;"> Order History Detail </h2>
						<div>
							<table id="example" class="table table-striped display">
								<div class="dropdown">
								  	<a id="orderhis_excel" class="btn-top" style="margin-right: 15px;" href="#" 
								  	class="btn btn-primary btn-success pull-right">
								  		<i class="fa fa-file-excel-o" aria-hidden="true"></i> 
								  		Export to Excel 
								  	</a>
									<br><br>
								</div>
								<thead>
									<tr class="row-name row_exp">
										<th>Unique Id</th>
										<th>Higher Education</th>
										<th>Number of Pages</th>
										<th>Style</th>
										<th>Description</th>
										<th>Deadline</th>
										<th>Uploaded File</th>
										<th>Creation Date</th>
									</tr>
								</thead>   
								<tbody>

								<?php
									while ($row = mysqli_fetch_array($ord_result))
									{
										$files_field = $row['filepath'];
										$files_show = "Uploads/$files_field";

										$pname = $row['name'];
										$pemail = $row['email'];
										$pphone = $row['phone'];
										$odeadline = $row['deadline'];
										$odescription = $row['description'];
										$opagecount = $row['page_count'];


							echo   '<tr class="row-content row_exp header">
										<td>
											<a style="font-weight: bold; text-decoration: underline;" 
												href="#order_modal" data-backdrop="" data-toggle="modal" 
												data-id="'.$row['orderid'].'">
												'.$row['orderid'].'
											</a>
										</td>
										<td>
											'.$row['study_level'].'
										</td>
										<td>
											'.$row['page_count'].'
										</td>
										<td>
											'.$row['style'].'
										</td>
										<td>
											'.$row['description'].'
										</td>
										<td>
											'.date('F d, Y',strtotime($row['deadline'])).'
										</td>
										<td>
											<a style="font-weight: bold; text-decoration: underline;" href='.$files_show.'>
												'.$files_field.'
											</a>
										</td>
										<td>
											'.$row['timestamp'].'
										</td>
									</tr>';
									}
								?>
								</tbody>
							</table>
						</div>                    
						<!--inner block end here-->

						<!-- The Detail Modal -->
						<div id="order_modal" class="w3-modal-order">
							<div class="w3-modal-content w3-card-4 w3-animate-zoom">
							  	<header class="w3-container w3-green"> 
							   		<span onclick="modal_close();" class="w3-button w3-blue w3-large w3-display-topright">
							   			&times;
							   		</span>
									<h4>
									Order Detail of Order Id #<div id="fetched-data" style="display: inline;" class="fetched-data"></div>
									</h4>
							  	</header>

							  	<div class="w3-bar w3-border-bottom">
							   		<button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'review')">
							   			Order Review
							   		</button>
							   		<button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'comments')">
							   			Send/Chat With Us 
							   		</button>
							   		<button class="tablink w3-bar-item w3-button"> <!-- onclick="openCity(event, 'payment')">-->
							   			Payment
							   		</button>
							   		<button class="tablink w3-bar-item w3-button"> <!-- onclick="openCity(event, 'receipt')">-->
							   			Download receipt
							   		</button>
							  	</div>

								<div id="review" class="w3-container city">
							  	    <div class="panel panel-info">
								  		<div class="panel-heading">
						                    <span class="glyphicon glyphicon-shopping-cart"></span> 
						                    Order Detail
						                </div>
								        
								        <div class="panel-body">
											<table style="width:100%">
											  	<tr>
											    	<td style="margin-top:10px;">
											    		<div class="form-group">
											              	<label class="col-md-3 control-label" for="name">Name</label>
											              	<div class="col-md-9">
											                	<input id="pname" name="pname" class="form-control" required="true" type="text" disabled="disabled">
											              	</div>
											            </div>
											    	</td>
											    	
											    	<td style="margin-top:10px;"> 
											    		<div class="form-group">
											              	<label class="col-md-3 control-label" for="name">Phone No.</label>
											              	<div class="col-md-9">
											                	<input id="pphone" name="pphone" class="form-control" required="true"  type="text" disabled="disabled">
											              	</div>
											            </div>
											    	</td> 
											  	</tr>

											  	<tr>
											    	<td style="margin-top:10px;">
											    		<div class="form-group">
											              	<label class="col-md-3 control-label" for="name">Deadline</label>
											              	<div class="col-md-9">
											                	<input id="odeadline" name="odeadline" class="form-control" required="true" type="date" disabled="disabled">
											              	</div>
											            </div>
											    	</td>
											    	
											    	<td style="margin-top:10px;">
											    		<div class="form-group">
											              	<label class="col-md-3 control-label" for="name">Higher Education</label>
											              	<div class="col-md-9">
											                	<select class="selectpicker form-control">
					                                                <option>High School</option>
					                                                <option>Inter Mediate School</option>
					                                                <option>Graduation</option>
					                                                <option>Post Graduation</option>
					                                            </select>
											              	</div>
											            </div>
											    	</td> 
											  	</tr>

											  	<tr>
											    	<td style="margin-top:10px;">
											    		<div class="form-group">
											              	<label class="col-md-3 control-label" for="name">Email</label>
											              	<div class="col-md-9">
											                	<input id="pemail" readonly="readonly" name="pemail" class="form-control" required="true" type="text">
											              	</div>
											            </div>
											    	</td>
											    	
											    	<td style="margin-top:10px;">
											    		<div class="form-group">
											              	<label class="col-md-3 control-label" for="name">Page Count</label>
											              	<div class="col-md-9">
											                	<input id="opagecount" name="opagecount" class="form-control" required="true" type="number" disabled="disabled">
											              	</div>
											            </div>
											    	</td> 
											  	</tr>

											  	<tr>
											    	<td style="margin-top:10px;">
											    		<div class="form-group">
											              	<label class="col-md-3 control-label" for="name">Message</label>
											              	<div class="col-md-9">
											                	<textarea id="odescription" name="odescription" class="form-control" required="true" type="text" disabled="disabled">
					                                            </textarea>
											              	</div>
											            </div>
											    	</td>

											    	<td style="margin-top:10px;">
											    		<div class="form-group">
											              	<label class="col-md-3 control-label" for="name">Style</label>
											              	<div class="col-md-9">
											                	<select class="selectpicker form-control">
					                                                <option>Style 1</option>
					                                                <option>Style 2</option>
					                                                <option>Style 3</option>
					                                                <option>Style 4</option>
					                                            </select>
											              	</div>
											            </div>
										    		</td> 
											  	</tr>
											</table>

								          	<div class="row">
									            <div>
									              	<div class="col-xs-3">
									                	<h4 class="text-left">Add Files</h4>
									              	</div>
									              	<div class="controls">
										              	<div class="entry input-group">
										                	<input class="btn btn-warning" style="width:270px" name="fields[]" 
										                	type="file">
										                	<span class="input-group-btn">
									              				<button class="btn-addfile btn-success btn-add" type="button">
									                            	<span class="glyphicon glyphicon-plus"></span>
										                		</button>
										                	</span>
										              	</div>
										          	</div>
									            </div>
								          	</div>
								        </div>
								       
								        <div class="panel-footer">
								          <div class="row text-center">
								          	<div class="col-xs-3">
								              	<button onclick="makeedit();" type="button" class="btn btn-info btn-block">
								                	Edit
								              	</button>
								            </div>
								            <div class="col-xs-3">
								              	<button type="button" class="btn btn-success btn-block">
								                	Proceed
								              	</button>
								            </div>
								          </div>
								        </div>
								    </div>
							  	</div>

							  	<div id="comments" class="w3-container city">
							  		<div class="panel panel-primary">
								  		<div class="panel-heading">
						                    <span class="glyphicon glyphicon-comment"></span> 
						                    Chat
						                    <div class="btn-group pull-right">
						                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
						                            <span class="glyphicon glyphicon-chevron-down"></span>
						                        </button>
						                        <ul class="dropdown-menu slidedown">
						                            <li>
						                            	<a href="">
						                            		<span class="glyphicon glyphicon-refresh"></span>
						                            		Refresh
						                            	</a>
						                            </li>
						                        </ul>
						                    </div>
						                </div>
								  		<div class="messaging">
										  	<div class="inbox_msg">
										    	<div class="mesgs">
										      		<div id="msg_history" class="msg_history">

										      	<?php 

										      		$getid_sql = "SELECT * FROM `get_orderid`;";
													$getid_res = $conn->query($getid_sql);
													$getid_row = mysqli_fetch_array($getid_res);
													$idord = $getid_row['orderid'];

													$chat_sql = "SELECT * FROM `order_chat` where orderid = '$idord';";
													$chat_result = $conn->query($chat_sql);
													
													if(!$chat_result OR !$getid_res){
														die ('SQL Error: ' . mysql_error($conn));
													}

													while ($chat_row = mysqli_fetch_array($chat_result))
													{
														$temp_date = strtotime($chat_row['time']);
														$create_date = date('F j, Y', $temp_date);

														if( $chat_row['author'] == 'Admin' )
														{
								        
										        echo   '<div class="incoming_msg">
										          			<div class="incoming_msg_img"> 
										          				<img src="https://ptetutorials.com/images/user-profile.png" alt="admin"> 
											          		</div>
											          		<div class="received_msg">
											            		<div class="received_withd_msg">
											                		<p>
											                			'.$chat_row['message'].'
											                		</p>
											                		<span class="time_date"> '.$create_date.' </span>
											            		</div>
											          		</div>
										        		</div>';
									        			}	
										        		else
										        		{
											        echo   '<div class="outgoing_msg">
											       			  	<div class="sent_msg">
														            <p>
														            	'.$chat_row['message'].'
														            </p>
													            <span class="time_date"> '.$create_date.' </span> </div>
											        		</div>';
										        		}
										        	}
										        ?>

										      		</div>
										      		<div class="type_msg">
										        		<div class="input_msg_write">
										        			<form method="POST" id="insert_msg">
											        			<input type="hidden" id="hide_orderid" name="hide_orderid">
											          			<input type="text" id="msg_send" name="msg_send" class="write_msg" 
											          				placeholder="Type a message" />	
											          			<button class="msg_send_btn" name="msginsert" id="msginsert" type="submit">
											          				<i class="fa fa-paper-plane-o" aria-hidden="true"></i>
											          			</button>
										          			</form>
										        		</div>
										      		</div>
										    	</div>
										 	</div>
										</div>
									</div>
								</div>

								<div id="payment" class="w3-container city">
						            <div class="panel-pay">
						                <div class="panel-heading">
						                    <h3 class="panel-title">
						                        Payment Details
						                    </h3>
						                    <div class="checkbox pull-right">
						                        <label>
						                            <input type="checkbox" />
						                            Remember
						                        </label>
						                    </div>
						                </div>
	                					<div class="panel-body">
						                    <form role="form">
							                    <div class="form-group">
							                        <label for="cardNumber">
							                            CARD NUMBER</label>
							                        <div class="input-group">
							                            <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
							                                required autofocus />
							                            <span class="input-group-addon">
							                            	<span class="glyphicon glyphicon-lock"></span>
							                        	</span>
							                        </div>
							                    </div>
							                    <div class="form-group">
							                        <label for="cardNumber">
							                            EXPIRY DATE
							                        </label>
							                        <div class="input-group">
							                            <input type="date" class="form-control" id="cardNumber" placeholder="Expiry Date"
							                                required autofocus />
							                            <span class="input-group-addon">
							                            	<span class="glyphicon glyphicon-lock"></span>
							                        	</span>
							                        </div>
							                    </div>
						                    </form>
						                </div>
						            </div>
	            					
	            					<a href="#" style="float: right; margin-right: 60%; margin-bottom: 10px" class="btn btn-success btn-lg btn-block" role="button">Pay</a>

	            					<script>

										function makeedit(){									   
									  		$("#pname").attr('disabled', !$("#pname").attr('disabled'));
									  		$("#pphone").attr('disabled', !$("#pphone").attr('disabled'));
									  		$("#odeadline").attr('disabled', !$("#odeadline").attr('disabled'));
									  		$("#pemail").attr('disabled', !$("#pemail").attr('disabled'));
									  		$("#opagecount").attr('disabled', !$("#opagecount").attr('disabled'));
									  		$("#odescription").attr('disabled', !$("#odescription").attr('disabled'));
										}

									</script>

								</div>
							</div>
						</div>
					</div>
					<!--content main table page end here-->
					
					<!-- copy rights start here -->
						<div class="copyrights-order">
							<p> © 2019 Online Assignment Help. All Rights Reserved | Design by  <a href="#" target="_blank">Ashish Gupta</a> </p>
						</div>	
					<!--copy rights end here -->
	  			</div>
	  		</div>
	  		<?php include './side_bar.php'?>
	  	</div>	


	  	<script type="text/javascript">

			$(function()
			{
			    $(document).on('click', '.btn-add', function(e)
			    {
			        e.preventDefault();

			        var controlForm = $('.controls:first'),
			            currentEntry = $(this).parents('.entry:first'),
			            newEntry = $(currentEntry.clone()).appendTo(controlForm);

			        newEntry.find('input').val('');
			        controlForm.find('.entry:not(:last) .btn-add')
			            .removeClass('btn-add').addClass('btn-remove')
			            .removeClass('btn-success').addClass('btn-danger')
			            .html('<span class="glyphicon glyphicon-minus"></span>');
			    }).on('click', '.btn-remove', function(e)
			    {
			      $(this).parents('.entry:first').remove();

			    e.preventDefault();
			    return false;
			  });
			});

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

		</script>
		
		<!--scrolling js-->
		<script src="user_assets/js/jquery.nicescroll.js"></script>
		<script src="user_assets/js/scripts.js"></script>
		<!--//scrolling js-->

		<script src="user_assets/js/bootstrap.js"> </script>
		<!-- mother grid end here-->

		<script>
			document.getElementsByClassName("tablink")[0].click();

			function openCity(evt, cityName) {
			  var i, x, tablinks;
			  x = document.getElementsByClassName("city");
			  for (i = 0; i < x.length; i++) {
			    x[i].style.display = "none";
			  }
			  tablinks = document.getElementsByClassName("tablink");
			  for (i = 0; i < x.length; i++) {
			    tablinks[i].classList.remove("w3-light-grey");
			  }
			  document.getElementById(cityName).style.display = "block";
			  evt.currentTarget.classList.add("w3-light-grey");
			}

			function modal_close(){
				document.getElementById('order_modal').style.display='none';
			}

		</script>


		<script>
			
		    window.onload=function(){
			    $('#order_modal').on('show.bs.modal', function (e) {
			      	var rowid = $(e.relatedTarget).attr('data-id');
                    $.ajax({
                      	method : 'POST',
                      	url : 'connection.php', //Here you will fetch records 
                      	data :  'rowid='+ rowid, //Pass rowid
                      	dataType: 'json',
                      	success : function(data)
	                    {
	                    	$('#pname').val(data.name);
	                    	$('#pphone').val(data.phone);
	                    	$('#pemail').val(data.email);
	                    	$('#odeadline').val(data.deadline);
	                    	$('#opagecount').val(data.page_count);
	                    	$('#hide_orderid').val(data.orderid);

	                    	$('.fetched-data').html(data.orderid);
	                    	document.getElementById("odescription").innerHTML= data.description;

	                    }
                 	});
			    });  
		    }

		    $(document).ready(function(){

		    	$('#insert_msg').on('submit', function(){
		    		event.preventDefault();
		    		if($('#msg_send').val() == '')
		    		{
		    			alert("Fill the field");
		    		}
		    		else
		    		{
		    			$.ajax({
		    				url:"connection.php",
		    				method:"POST",
		    				data:$('#insert_msg').serialize(),
		    				success:function(data)
		    				{
		    					$('#insert_msg')[0].reset();
		    					$("#comments").load(" #comments");
		    				}
		    			});
		    		}
		    	});
		    });

		</script>

		<script type="text/javascript" src="user_assets/js/tableExport.js"></script>
		<script type="text/javascript" src="user_assets/js/jquery.base64.js"></script>

		<script type="text/javascript">

	        $(document).ready(function(e){
				$("#orderhis_excel").click(function(e){
					$("#example").tableExport({
						type: 'excel',
						escape: 'false'
					});
				});
			});

		</script>	

    </body>
</html>
