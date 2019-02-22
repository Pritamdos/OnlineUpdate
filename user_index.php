<?php include './session_check.php'?>
<!DOCTYPE HTML>
<html>
	<head>
		<title> Your Account </title>
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
						<div class="inner-block">
						<!--market updates updates-->

						<?php

							$temp_email = $_SESSION['email'];

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

							$ord_detail_sql = "SELECT * FROM `order_form_data` where email = '$temp_email';";
							$ord_detail_result = $conn->query($ord_detail_sql);
							
							if(!$ord_result || !$ord_detail_sql ){
								die ('SQL Error: ' . mysql_error($conn));
							}

						?>

							<div class="market-updates">
								<div class="col-md-4 market-update-gd">
									<div class="market-update-block clr-block-1">
										<div class="col-md-8 market-update-left">
											<h3><?php echo $success_count; ?></h3>
											<h4>Order Cleared</h4>
												<span style="color:white">19.. More to go!</span>
										</div>
										<div class="col-md-4 market-update-right">
											<i class="fa fa-file-text-o"> </i>
										</div>
									  <div class="clearfix"> </div>
									</div>
								</div>
								<div class="col-md-4 market-update-gd">
									<div class="market-update-block clr-block-2">
									 <div class="col-md-8 market-update-left">
										<h3><?php echo $pending_count; ?></h3>
										<h4>Order Still Pending</h4>
											<span style="color:white">Clear the pay</span>
									  </div>
										<div class="col-md-4 market-update-right">
											<i class="fa fa-eye"> </i>
										</div>
									  <div class="clearfix"> </div>
									</div>
								</div>
								<div class="col-md-4 market-update-gd">
									<div class="market-update-block clr-block-3">
										<div class="col-md-8 market-update-left">
											<h3><?php echo $fail_count; ?></h3>
											<h4>Alas! That's bad. </h4>
											 <span style="color:white">Order Again!</span>
										</div>
										<div class="col-md-4 market-update-right">
											<i class="fa fa-thumbs-down"> </i>
										</div>
									  <div class="clearfix"> </div>
									</div>
								</div>
							   	<div class="clearfix"> </div>
							</div>
						<!--market updates end here-->
			
						<!--mainpage chit-chating starts here-->
							<div class="chit-chat-layer1">
								<div class="col-md-6 chit-chat-layer1-left">
							        <div class="work-progres">
							            <div class="chit-chat-heading">
							                  Recently placed Orders
							            </div>
							            <div class="table-responsive">
											<table class="table table-hover">
							                    <thead>
							                       	<tr>
							                            <th>Order Id</th>
							                        	<th>Page Count</th>
							                            <th>Deadline</th>                                                                 
							                            <th>Pay Status</th>
							                            <th>Progress</th>
							                     	</tr>
							              		</thead>
							              		<tbody>
							              			<?php
											            
											            if ($ord_detail_result->num_rows > 0){
															while ($ord_detail_row = mysqli_fetch_array($ord_detail_result))
															{
															
															$pay_status = $ord_detail_row['pay_status'];

															echo 	'<tr>
											                            <td>'.$ord_detail_row['orderid'].'</td>
											                            <td>'.$ord_detail_row['page_count'].'</td>
											                            <td>'.$ord_detail_row['deadline'].'</td>';

											                            if ( $pay_status == 1 )
											                            {
											                            	echo '<td><span class="label label-warning">In Progress</span></td>';
											                            }
											                            elseif( $pay_status == 2 )
											                            {
											                            	echo '<td><span class="label label-success">Completed</span></td>';
											                            }
											                            else{
											                            	echo '<td><span class="label label-danger">Failed</span></td>';
											                            } 

											                            if( $pay_status == 1 )
											                            {
											                            	echo '<td><span class="badge badge-warning">50%</span></td>';
											                            }
											                            elseif( $pay_status == 2)
											                            {
											                            	echo '<td><span class="badge badge-success">100%</span></td>';
											                            }
											                            else{
											                            	echo '<td><span class="badge badge-info">0%</span></td>';
											                            } 

										                    echo	'</tr>';

															}
														}	
													?>
							         			</tbody>
							      			</table>
							  			</div>
									</div>
							    </div>


							    <div class="col-md-6 chit-chat-layer1-rit">    
							    	
							    	<div id="quicknav">
								        <ul class="nav nav-tabs">
								            <li>
								            	<a href="#10percent" data-toggle="tab" class="btn btn-danger">
								            		10% Off
								            	</a>
								            </li>
								            <li>
								            	<a href="#20percent" data-toggle="tab" class="btn btn-success">
								            		20% Off
								            	</a>
								            </li>
								            <li>
								            	<a href="#30percent" data-toggle="tab" class="btn btn-info">
								            		30% Off
								            	</a>
								            </li>
								            <li>
								            	<a href="#40percent" data-toggle="tab" class="btn btn-warning">
								            		50% Off
								            	</a>
								            </li>
								        </ul>
								    </div>
								    <br>

								    <!--- 10% OFF  -->

									<div class="tab-content">
									    <div class="panel panel-danger coupon tab-pane active" id="10percent">
							              	<div class="panel-heading" id="head">
								                <div class="panel-title" id="title">
								                    <i class="fa fa-gift fa-2x"></i>
								                    <span class="hidden-xs">10% off on First Order</span>
								                </div>
							             	</div>
							              	<div class="panel-body">
							                	<img src="./user_assets/images/10percent.jpg" class="coupon-img img-rounded">
								                <div class="col-md-12 well well-sm">
								                    <div id="business-info">
								                        <ul>
								                            <li>
								                            	<span style="float: left ">
								                            		<i class="fa fa-user"></i> 
								                            			Coroline Agusta
								                            	</span>
								                            </li>
								                            <li>
								                            	<span style="float: right">
								                            		<i class="fa fa-graduation-cap"></i>
								                            		   History
								                            	</span>
								                            </li>
								                        </ul>
								                    </div>
								                </div>
								                <div class="col-md-9">
								                    <ul class="items">
								                        <li>Efficient in Modern History</li>
								                        <li>On Time Work Completion</li>  
								                    </ul>
								                </div>
								                <div class="col-md-12">
								                    <p class="disclosure">
								                    	I believe in efficient, quality and on time work. I am 
								                    	also available for offline support via onlineassignment.com.
								                    	Choose the Best!  
													</p>
								                </div>
							              	</div>
							              	<div class="panel-footer">
								                <div class="coupon-code">
								                    Code: HER87
								                    <span class="print">
								                        <a href="#" class="btn btn-link">
								                        	<i class="fa fa-lg fa-print"></i> 
								                        	Copy Coupon
								                        </a>
								                    </span>
								                </div>
							               		<div class="exp">Expires: Mar 10, 2019</div>
							             	</div>
							            </div>

							            <!--- 20% OFF  -->

							            <div class="panel panel-danger coupon tab-pane" id="20percent">
							              	<div class="panel-heading" id="head">
								                <div class="panel-title" id="title">
								                    <i class="fa fa-gift fa-2x"></i>
								                    <span class="hidden-xs">20% off on First Order</span>
								                </div>
							             	</div>
							              	<div class="panel-body">
							                	<img src="./user_assets/images/20percent.jpg" class="coupon-img img-rounded">
								                <div class="col-md-12 well well-sm">
								                    <div id="business-info">
								                        <ul>
								                            <li>
								                            	<span style="float: left ">
								                            		<i class="fa fa-user"></i> 
								                            			Coroline Agusta
								                            	</span>
								                            </li>
								                            <li>
								                            	<span style="float: right">
								                            		<i class="fa fa-graduation-cap"></i>
								                            		   History
								                            	</span>
								                            </li>
								                        </ul>
								                    </div>
								                </div>
								                <div class="col-md-9">
								                    <ul class="items">
								                        <li>Efficient in Modern History</li>
								                        <li>On Time Work Completion</li>  
								                    </ul>
								                </div>
								                <div class="col-md-12">
								                    <p class="disclosure">
								                    	I believe in efficient, quality and on time work. I am 
								                    	also available for offline support via onlineassignment.com.
								                    	Choose the Best!  
													</p>
								                </div>
							              	</div>
							              	<div class="panel-footer">
								                <div class="coupon-code">
								                    Code: HER87
								                    <span class="print">
								                        <a href="#" class="btn btn-link">
								                        	<i class="fa fa-lg fa-print"></i> 
								                        	Copy Coupon
								                        </a>
								                    </span>
								                </div>
							               		<div class="exp">Expires: Mar 10, 2019</div>
							             	</div>
							            </div>

							            <!--- 30% OFF  -->

							            <div class="panel panel-danger coupon tab-pane" id="30percent">
							              	<div class="panel-heading" id="head">
								                <div class="panel-title" id="title">
								                    <i class="fa fa-gift fa-2x"></i>
								                    <span class="hidden-xs">30% off on First Order</span>
								                </div>
							             	</div>
							              	<div class="panel-body">
							                	<img src="./user_assets/images/30percent.jpg" class="coupon-img img-rounded">
								                <div class="col-md-12 well well-sm">
								                    <div id="business-info">
								                        <ul>
								                            <li>
								                            	<span style="float: left ">
								                            		<i class="fa fa-user"></i> 
								                            			Coroline Agusta
								                            	</span>
								                            </li>
								                            <li>
								                            	<span style="float: right">
								                            		<i class="fa fa-graduation-cap"></i>
								                            		   History
								                            	</span>
								                            </li>
								                        </ul>
								                    </div>
								                </div>
								                <div class="col-md-9">
								                    <ul class="items">
								                        <li>Efficient in Modern History</li>
								                        <li>On Time Work Completion</li>  
								                    </ul>
								                </div>
								                <div class="col-md-12">
								                    <p class="disclosure">
								                    	I believe in efficient, quality and on time work. I am 
								                    	also available for offline support via onlineassignment.com.
								                    	Choose the Best!  
													</p>
								                </div>
							              	</div>
							              	<div class="panel-footer">
								                <div class="coupon-code">
								                    Code: HER87
								                    <span class="print">
								                        <a href="#" class="btn btn-link">
								                        	<i class="fa fa-lg fa-print"></i> 
								                        	Copy Coupon
								                        </a>
								                    </span>
								                </div>
							               		<div class="exp">Expires: Mar 10, 2019</div>
							             	</div>
							            </div>

							            <!--- 40% OFF  -->

							            <div class="panel panel-danger coupon tab-pane" id="40percent">
							              	<div class="panel-heading" id="head">
								                <div class="panel-title" id="title">
								                    <i class="fa fa-gift fa-2x"></i>
								                    <span class="hidden-xs">50% off on First Order</span>
								                </div>
							             	</div>
							              	<div class="panel-body">
							                	<img src="./user_assets/images/40percent.jpg" class="coupon-img img-rounded">
								                <div class="col-md-12 well well-sm">
								                    <div id="business-info">
								                        <ul>
								                            <li>
								                            	<span style="float: left ">
								                            		<i class="fa fa-user"></i> 
								                            			Coroline Agusta
								                            	</span>
								                            </li>
								                            <li>
								                            	<span style="float: right">
								                            		<i class="fa fa-graduation-cap"></i>
								                            		   History
								                            	</span>
								                            </li>
								                        </ul>
								                    </div>
								                </div>
								                <div class="col-md-9">
								                    <ul class="items">
								                        <li>Efficient in Modern History</li>
								                        <li>On Time Work Completion</li>  
								                    </ul>
								                </div>
								                <div class="col-md-12">
								                    <p class="disclosure">
								                    	I believe in efficient, quality and on time work. I am 
								                    	also available for offline support via onlineassignment.com.
								                    	Choose the Best!  
													</p>
								                </div>
							              	</div>
							              	<div class="panel-footer">
								                <div class="coupon-code">
								                    Code: HER87
								                    <span class="print">
								                        <a href="#" class="btn btn-link">
								                        	<i class="fa fa-lg fa-print"></i> 
								                        	Copy Coupon
								                        </a>
								                    </span>
								                </div>
							               		<div class="exp">Expires: Mar 10, 2019</div>
							             	</div>
							            </div>
						        	</div>    

								</div>
							    <div class="clearfix"> </div>
							</div>
						<!--mainpage chit-chating ends here-->
						</div>
					<!--inner block end here-->

					<!--copy rights start here-->
						<div class="copyrights">
							 <p> © 2019 Online Assignment Help, All Rights Reserved | Design by <a href="#" target="_blank">Ashish Gupta</a> </p>
						</div>	
					<!--COPY rights end here-->
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
</html>                     