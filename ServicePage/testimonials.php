<?php include '../../credentials.php'?>
<div class="dash-cont how-work-testimonials h-online">
    <div class="wrapper">
        <div class="dashboard-inner-wraper">
            <div class="card-outer-work-testimonial">
                <div class="header-sections">
                    <span class="world-abouts-orders">
						<h3 class="text-uppercase "> Student Testimonials </h3>	<br>
					<span class="heading-divider-span"></span>
                    </span>
                    <span class="sub0-heads">
                        We don’t take pride for nothing. We have helped more than 200,000 land the grades they dream of! Read what they have to say
                        about us-
                    </span>
                </div>
                <div class="card-inner-section-work-test  animatable fadeInLeft">
                    <div class="lead-testimonial-cont">
                        <div class="lead-tstmnl-slider">
                            <div class="main-gallery">     
								<?php
									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);

									// Check connection
									if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
									} 
									
									$port_sql   = "SELECT * FROM `portfolio_data`;";
									$port_result = $conn->query($port_sql);
							
								while ($port_row = mysqli_fetch_array($port_result)){
								   	$img_field = $port_row['image_path'];
							      	$img_src = "../../assets/images/UserDataImage/$img_field";
								      	
						echo    '<div class="gallery-cell">
										<div class="testimonial">
											<div class="lead-tstmnl-slide item">
												<div class="testimonail-outers-images">
													<div class="lead-tstmnl-img">
														<img src='.$img_src.' />
													</div>
												</div>
												<div class="lead-tstmnl-text-cont">
													<span class="lead-tstmnl-comment-sec">
														'.$port_row['name'].'
													</span>
													<div class="hr-r">
														<span class="line">
														</span>
													</div>
													<ul class="lead-tstmnl-nm-dsg-rating">
														<li>';
														 for($scount = 1; $scount <= $port_row['rating']; $scount++){
															echo '<i class="fa fa-star stars animatable zoomIn swing" aria-hidden="true"></i>';
														   };  		
												echo    '</li>
														
													</ul>
												</div>
												<div class="lead-tstmnl-text-cont">
													<span class="lead-tstmnl-comment">
														'.$port_row['message'].'
													</span>
												</div>
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



<script type="text/javascript">
  
	$(document).ready(function () {
		var flkty = new Flickity('.main-gallery', {
			cellAlign: 'left',
			contain: true,
			wrapAround: true,
			prevNextButtons: true,
			autoPlay: 5000
		});
	}); 

</script>