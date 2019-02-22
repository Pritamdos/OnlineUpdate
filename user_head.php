<?php

// time ago function implementation
	function get_time_ago( $time )
	{
	    $time_difference = time() - $time;

	    if( $time_difference < 1 ) { return 'few seconds ago'; }
	    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
	                30 * 24 * 60 * 60       =>  'month',
	                24 * 60 * 60            =>  'day',
	                60 * 60                 =>  'hour',
	                60                      =>  'minute',
	                1                       =>  'second'
	    );

	    foreach( $condition as $secs => $str )
	    {
	        $d = $time_difference / $secs;

	        if( $d >= 1 )
	        {
	            $t = round( $d );
	            return 'about ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
	        }
	    }
	}

 ?>

<!--header start here-->
<div class="header-main fixed">
	<div class="header-left">
		<div class="logo-name">
			<a href="index.php">
				<img src="./assets/images/WebDataImage/logo.png" class="logg" alt='Logo' />
			</a>								
		</div>
		<!--search-box-->
		<div class="search-box">
			<form>
				<input type="text" placeholder="Search your Order..." required="">	
				<input type="submit" value="">					
			</form>
		</div>
		<!--//end-search-box-->
		<div class="clearfix"> </div>
	</div>
	<div class="header-right">
		<div class="profile_details_left"><!--notifications of menu start -->
			<ul class="nofitications-dropdown">
				<li class="dropdown head-dpdn">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<i class="fa fa-bell" style="font-size:20px"></i>
						<span class="badge blue">3</span>
					</a>

				<?php

					$temp_email = $_SESSION['email'];

					$notify_sql = "SELECT * FROM `user_activity_log` where email = '$temp_email';";
					$notify_result = $conn->query($notify_sql);

					if(!$notify_result){
						die ('SQL Error: ' . mysql_error($conn));
					}

					$rowcount = mysqli_num_rows($notify_result);

			echo   '<ul class="dropdown-menu">
						<li>
							<div class="notification_header">
								<h3>You have '.$rowcount.' new notification</h3>
							</div>
						</li>';
					
					while ($notify_row = mysqli_fetch_array($notify_result))
					{	
						$notification = substr($notify_row['activity'],0,18).'...';
						$time_ago = get_time_ago( strtotime($notify_row['date']) );

				echo   '<li>
							<a href="user_profile.php#timeline">
								<div class="user_img">
									<img src="user_assets/images/user_icon.png" alt="img">
								</div>
							  	<div class="notification_desc">
									<p>
										'.$notification.'
									</p>
									<p>
										<span>
											'.$time_ago.'
										</span>
									</p>
								</div>
							  	<div class="clearfix"></div>	
							</a>
						</li>';
					}
				?>
						<li>
							<div class="notification_bottom">
								<a href="user_profile.php">
									See all notifications
								</a>
							</div> 
						</li>
					</ul>
				</li>
				<li class="dropdown head-dpdn">
					<a href="order.php" class="dropdown-toggle" aria-expanded="false">
						<i class="fa fa-shopping-cart" style="font-size:20px"></i>
						<span class="badge-order blue1">Order Now</span>
					</a>
				</li>	
			</ul>
		<div class="clearfix"></div>
		</div>
			
		<!--notification menu end -->
		<div class="profile_details">	

			<?php

				$temp_email = $_SESSION['email'];
			
				$sql   = "SELECT * FROM `register_form_data` where email = '$temp_email';";
				$result = $conn->query($sql);

				if ($result->num_rows > 0){
					$row = mysqli_fetch_array($result);
					  	$temp_name = $row['name'];
					  	$name = explode(' ',trim($temp_name));

						//User profile picture
	                    $userPicture = !empty($row['image_path'])?$row['image_path']:'no-image.jpg';
	                    $userPictureURL = 'user_assets/uploads/user_image/'.$userPicture;

				   }
			?>

			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<div class="profile_img">	
							<span class="prfil-img">
								<img src="<?php echo $userPictureURL; ?>" alt="Pic" height="50" width="50"> 
							</span> 
							<div class="user-name">
								<p><?php echo $name[0]; ?></p>
								<span>User Account</span>
							</div>
							<i class="fa fa-angle-down lnr"></i>
							<i class="fa fa-angle-up lnr"></i>
							<div class="clearfix"></div>	
						</div>	
					</a>
					<ul class="dropdown-menu drp-mnu">
						<li> <a href="user_profile.php"><i class="fa fa-user"></i> Profile</a> </li> 
						<li> <a href="change_pass.php"><i class="fa fa-cog"></i> Change Password </a> </li> 
						<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>				
	</div>
	<div class="clearfix"> </div>	
</div>
<!--heder end here-->

<!-- script-for sticky-nav -->
<script>
$(document).ready(function() {
 var navoffeset=$(".header-main").offset().top;
 $(window).scroll(function(){
	var scrollpos=$(window).scrollTop(); 
	if(scrollpos >=navoffeset){
		$(".header-main").addClass("fixed");
	}else{
		$(".header-main").removeClass("fixed");
	}
 });
 
});
</script>
<!-- /script-for sticky-nav -->
		