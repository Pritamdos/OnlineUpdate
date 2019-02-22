<?php include './credentials.php'?>
<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    header("location:404-error.php");
} 

// User IMAGE UPLOAD
if(!empty($_FILES['picture']['name'])){

    //Get current user ID from session
    $email = $_POST['hide_email'];

	//Extract previous file name
    $sql_img = "SELECT * FROM `register_form_data` where email = '$email';";
	$result_img = $conn->query($sql_img);

	if ($result_img->num_rows > 0){
		$img_row = mysqli_fetch_array($result_img);
		$prev_path = $img_row['image_path'];
	}

    //File uplaod configuration
    $result = 0;
    $uploadDir = "user_assets/uploads/user_image/";
    $fileName = $_FILES['picture']['name'];
    $targetPath = $uploadDir.$fileName;

    $targetPrevPath = $uploadDir.$prev_path;

    //Upload file to server
    if(@move_uploaded_file($_FILES['picture']['tmp_name'], $targetPath)){
        
        //Update picture name in the database
        $sql = "UPDATE `register_form_data` SET `image_path` = '".$fileName."' WHERE email = '$email';";
   		$update = $conn->query($sql);

        //Update status
        if($update){
        	unlink($targetPrevPath);
            $result = 1;
        }
    }
    
    //Load JavaScript function to show the upload status
    echo '<script type="text/javascript">window.top.window.completeUpload(' . $result . ',\'' . $targetPath . '\');</script>';
}


//FOR SAVING DATA OF MINI ORDER DATABASE
if(isset($_POST['minisubmit'])){
	
	$email = $_POST['email'];
  	$subject = $_POST['subject'];
	$page_count = $_POST['pageNo'];
  	$temp_dat = $_POST['datepicker'];
	
	$date = date("Y-m-d H:i:s a", strtotime($temp_dat));
	
	$query = " SELECT id FROM `mini_form_data` ORDER BY timestamp DESC ";
	$result = $conn->query($query);
	if(!$result){
	  header("location:404-error.php");
	}
   
   if ($result->num_rows > 0) {
	   $row = mysqli_fetch_array($result);
	   $temp = $row['id'];
	   $prev_count = substr($temp, 15, 1);
       $curr_count = $prev_count + 1;
	   $constant = 'TMP';
	   $tmp1     = substr($date, 0, 10);
	   //$tmp2     = date("d-m-Y", strtotime($tmp1)); 
	   $datef     = str_replace("-",'', $tmp1);
	   $tmp3     = substr($subject, 0, 4);
	   $sub      = strtoupper($tmp3);
	   $id = $constant.$datef.$sub.$curr_count;
	      
   }
   else {
		$constant = 'TMP';
		$tmp1     = substr($date, 0, 10);
		//$tmp2     = date("d-m-Y", strtotime($tmp1)); 
		$datef     = str_replace("-",'', $tmp1);
		$tmp3     = substr($subject, 0, 4);
		$sub      = strtoupper($tmp3);
		$curr_count = 1;
		$id = $constant.$datef.$sub.$curr_count;
   }
   
	$sql = "INSERT INTO `mini_form_data`(`id`,`email`,`subject`,`date`,`page_count`) VALUES ('$id','$email','$subject','$date','$page_count');";
   
	if ($conn->query($sql) === TRUE) {

		// email send
			ini_set( 'display_errors', 1 );
			error_reporting( E_ALL );
			$from = "support@onlineassignmenthelp.com";
			$to = "imaniketsingh1@gmail.com";
			
			$subject = "New Mini Order Placed by ".$email." today ";
			
			$message = "
				Order 		: 	".$id."	
				
				Subject		: 	".$subject."
				
				Deadline	:	".$date."
				
				Pages   	:	".$page_count."
			";
			
			$headers = "From:" . $from . "\r\n" .
				"CC: sakshaynagpal@gmail.com";
			
			mail($to,$subject,$message, $headers);
		
		
		$modal_msg = 'continue';
		
		session_start();
		$_SESSION['sel_modal'] = $modal_msg;
		header("location:msg-modal.php");
	} 
	else {
		header("location:404-error.php");
	}
}

//FOR SAVING DATA OF MINI ORDER ON MODAL INTO DATABASE
if(isset($_POST['minisubmit-modal'])){
	
	$email = $_POST['email-modal'];
  	$subject = $_POST['subject-modal'];
	$page_count = $_POST['pageNo-modal'];
  	$temp_dat = $_POST['datetime-ind'];
	
	$date = date("Y-m-d H:i:s a", strtotime($temp_dat));
	
	$query = " SELECT id FROM `mini_form_data` ORDER BY timestamp DESC ";
	$result = $conn->query($query);
	if(!$result){
	   header("location:404-error.php");
	}
   
   if ($result->num_rows > 0) {
	   $row = mysqli_fetch_array($result);
	   $temp = $row['id'];
	   $prev_count = substr($temp, 15, 1);
       $curr_count = $prev_count + 1;
	   $constant = 'TMP';
	   $tmp1     = substr($date, 0, 10);
	   //$tmp2     = date("d-m-Y", strtotime($tmp1)); 
	   $datef     = str_replace("-",'', $tmp1);
	   $tmp3     = substr($subject, 0, 4);
	   $sub      = strtoupper($tmp3);
	   $id = $constant.$datef.$sub.$curr_count;
	      
   }
   else {
		$constant = 'TMP';
		$tmp1     = substr($date, 0, 10);
		//$tmp2     = date("d-m-Y", strtotime($tmp1)); 
		$datef     = str_replace("-",'', $tmp1);
		$tmp3     = substr($subject, 0, 4);
		$sub      = strtoupper($tmp3);
		$curr_count = 1;
		$id = $constant.$datef.$sub.$curr_count;
   }
   
	$sql = "INSERT INTO `mini_form_data`(`id`,`email`,`subject`,`date`,`page_count`) VALUES ('$id','$email','$subject','$date','$page_count');";
   
	if ($conn->query($sql) === TRUE) {
		
		// email send
			ini_set( 'display_errors', 1 );
			error_reporting( E_ALL );
			$from = "support@onlineassignmenthelp.com";
			$to = "imaniketsingh1@gmail.com";
			
			$subject = "New Mini Order Placed by ".$email." today ";
			
			$message = "
				Order 		: 	".$id."	
				
				Subject		: 	".$subject."
				
				Deadline	:	".$date."
				
				Pages   	:	".$page_count."
			";
			
			$headers = "From:" . $from . "\r\n" .
				"CC: sakshaynagpal@gmail.com";
			
			mail($to,$subject,$message, $headers);
			
		$modal_msg = 'continue';
		
		session_start();
		$_SESSION['sel_modal'] = $modal_msg;
		header("location:msg-modal.php");
	} 
	else {
		header("location:404-error.php");
	}
}

//FOR SAVING CALL BACK REQUEST OF USER INTO DATABASE
if(isset($_POST['callsubmit'])){
 	
 	$country_code = $_POST['caller_timezone'];
	$phone = $_POST['call_phone'];
	$type = $_POST['call_type'];
	$reason = $_POST['call_reason'];
	$temp_dat = $_POST['call_time'];
	
	$time = date("Y-m-d H:i:s a", strtotime($temp_dat));

	$query = "SELECT id FROM `callback_form_data` ORDER BY timestamp DESC";
    $result = $conn->query($query);
    if(!$result){
	  header("location:404-error.php");
    }
	
	if ($result->num_rows > 0) {
	   $row = mysqli_fetch_array($result);
	   $temp = $row['id'];
	   $prev_count = substr($temp, 10, 1);
       $curr_count = $prev_count + 1;
	   $constant = 'TMP';
	   $mob      = substr($phone, 0 ,4);
	   $typ      = substr($type, 0 ,3);
	   $id = $constant.$mob.$typ.$curr_count;
	      
   }
   else {
	   $constant = 'TMP';
	   $mob      = substr($phone, 0 ,4);
	   $typ      = substr($type, 0 ,3);
       $curr_count = 1;
       $id = $constant.$mob.$typ.$curr_count;
   }
	
   $sql = "INSERT INTO `callback_form_data` (`id`,`timezone`,`phone`,`order_type`,`reason`,`contact_time`) 
											VALUES ('$id','$country_code','$phone','$type','$reason','$time');";

	if ($conn->query($sql) === TRUE) {
		
		// email send
			ini_set( 'display_errors', 1 );
			error_reporting( E_ALL );
			$from = "support@onlineassignmenthelp.com";
			$to = "imaniketsingh1@gmail.com";
			
			$subject = "New Caller Request ";
			
			$message = "Hi User, We have received your call back Request, We will connect you very soon";
			
			$headers = "From:" . $from . "\r\n" .
				"CC: sakshaynagpal@gmail.com";
			
			mail($to,$subject,$message, $headers);
		
		$modal_msg = 'call_success';
		session_start();
		$_SESSION['sel_modal'] = $modal_msg;
		header("location:msg-modal.php");
	} 
	else {
		header("location:404-error.php");
	}
}

//FOR REGISTRAION OF NEW USER
if(isset($_POST['registersubmit'])){
	
	$name = $_POST['reg_name'];
	$email = $_POST['reg_email'];
	$phone = $_POST['reg_phone'];
	$education = $_POST['reg_education'];
	$password = $_POST['reg_password'];
   
	$sql = "INSERT INTO `register_form_data` (`name`,`email`,`phone`,`education`,`password`) 
											VALUES ('$name','$email','$phone','$education','$password');";

	if ($conn->query($sql) === TRUE) {

		//INSERT A ACTIVITY OF USER 
		$activity = "Hi, You have created a User Account with email id: ".$email." successfully ";
		$activity_sql = "INSERT INTO `user_activity_log` (`name`,`email`,`activity`) 
                    		VALUES ('$name','$email','$activity');";
    	$activity_result = $conn->query($activity_sql);
	    
	    if(!$activity_result){
		   header("location:404-error.php");
	    }    

		// email send
			ini_set( 'display_errors', 1 );
			error_reporting( E_ALL );
			$from = "support@onlineassignmenthelp.com";
			$to = $email;
			
			$subject = "Registration Successful ";
			
			$message = "Hi ".$name.", We have registered successfully, login with ".$email." to continue";
			
			$headers = "From:" . $from . "\r\n" .
				"CC: sakshaynagpal@gmail.com";
			
			mail($to,$subject,$message, $headers);
		
		
		$modal_msg = 'reg_continue';
		session_start();
		$_SESSION['sel_modal'] = $modal_msg;
		header("location:msg-modal.php");
	} 
	else {
		header("location:404-error.php");
	}
}

//FOR INSERTING CHAT MESSAGE OF USER REGARING ORDER ID INTO DATABASE
if(isset($_POST['hide_orderid'])){
	
	$orderid = $_POST['hide_orderid'];
	$msg_send = $_POST['msg_send'];
   
   	$msg_sql = "INSERT INTO `order_chat` (`orderid`,`author`,`message`) 
                    VALUES ('$orderid','user','$msg_send');";

	if ($conn->query($msg_sql) === TRUE) {
		 echo $msg_send;
	} 
	else {
		header("location:404-error.php");
	}
}


//UPDATE USERPROFILE INTO DATABASE
if(isset($_POST['pro_update'])){
	
	$email = $_POST['pemail'];
    $name = $_POST['pname'];
    $phone = $_POST['pphone'];
    $education = $_POST['peducation'];

    $res_update = 0;
   
    $sql_archive = "SELECT phone FROM `register_form_data` where email = '$email'; ";
    $result_archive = $conn->query($sql_archive);
    if(!$result_archive){
	   header("location:404-error.php");
	   exit;
    }

    if ($result_archive->num_rows > 0) {
	  	$row_archive = mysqli_fetch_array($result_archive);

	    if($row_archive['phone'] != $phone )
	    {
	    	$archive_phone = $row_archive['phone'];
	    	$sql_phone = "INSERT INTO `user_archive_data` (`email`,`phone`) 
	                    	VALUES ('$email','$archive_phone');";
	        $result_phone = $conn->query($sql_phone);
	    }
	}

    $sql = "UPDATE `register_form_data` SET `name` = '$name', `phone` = '$phone', `education` = '$education' 
    		 WHERE email = '$email';";
    $result = $conn->query($sql);
   
    if($result){
		$res_update = 1;
	}
	else{
		header("location:404-error.php");
	}

    //Load JavaScript function to show the upload status
    echo   '<script type="text/javascript">
    			window.top.window.completeUpdate('.$res_update.');
    		</script>';

}

//UPDATE USERPASSWORD INTO DATABASE
if(isset($_POST['passvalidate'])){
	
    $old_pass = $_POST['old_pass'];
    $new_pass = $_POST['new_pass'];
    $conf_pass = $_POST['conf_pass'];
    $passvalidate = $_POST['passvalidate'];
   
    $pass_update = 0;

    $sql = "UPDATE `register_form_data` SET `password` = '$new_pass' WHERE email = '$passvalidate';";
    $result = $conn->query($sql);
   
    if($result){
		$pass_update = 1;
	}
	else{
		header("location:404-error.php");
	}
    
	 //Load JavaScript function to show the upload status
    echo   '<script type="text/javascript">
    			window.top.window.completeUpdate('.$pass_update.');
    		</script>';

}

//FOR LOGGING INTO USERPAGE
if(isset($_POST['signuserid'])){
	
   $email    = $_POST['signuserid'];
   $password = $_POST['signpassword'];
     
   $sql = "SELECT email, password FROM `register_form_data` WHERE email='$email' AND password = '$password';";
   $result = $conn->query($sql);
   $row = mysqli_fetch_array($result);
       
   if ($result->num_rows > 0) {
		if(isset($_POST['remember'])){
			   setcookie('email', $email, time()+60*60*7);
			   setcookie('pass', $password, time()+60*60*7);
		}
		session_start();
		$_SESSION['email'] = $email;	
		
	 if($row['email'] == 'admin@gmail.com' && $row['password'] == 'admin'){
			echo 2;
		}
		else{
			echo 3;
		}			
   }
   else{
	    echo 1;
	} 
}

//INSERT DATA OF ORDER CREATION INTO DATABASE
if(isset($_POST['ordersubmit'])){

 //VARIABLE DECLARATION	
	$name = $_POST['ord_user'];
	$date = $_POST['datepicker'];
	$pagecount = $_POST['pageNo'];
	$phone = $_POST['ord_phone'];
	$education = $_POST['ord_education'];
	$email = $_POST['ord_email'];
	$style = $_POST['ord_style'];
	$reason = $_POST['ord_reason'];
	$ovalidate = $_POST['ovalidate'];
		
  	//FILE UPLOADING	
  	if (isset($_FILES["file"]["name"])) {
	    $filename = $_FILES["file"]["name"];
	    $tmp_name = $_FILES['file']['tmp_name'];
	    $error = $_FILES['file']['error'];

	    if (!empty($filename)) {
	        $location = 'user_assets/uploads/user_doc/';
	        if  (move_uploaded_file($tmp_name, $location.$filename)){
	        }
	    }  
	  	else{
	       $message = "Please upload correct file!";
	       echo "<script type='text/javascript'>alert('$message');</script>"; 
	    }
	}
	
   //UNIQUE ID CREATION	
	
	$clnt_query = "SELECT id FROM `register_form_data` WHERE email = '$ovalidate';";
   	$clnt_result = $conn->query($clnt_query);
   
   	$ope_query = "SELECT ope_no FROM `order_form_data` WHERE email = '$ovalidate' ORDER BY timestamp DESC ;";
   	$ope_result = $conn->query($ope_query);
   
   	$seq_query = "SELECT seq_no FROM `order_form_data` ORDER BY timestamp DESC ;";
   	$seq_result = $conn->query($seq_query);
   
  	$status_query = "SELECT * FROM `order_status` WHERE email = '$email';";
   	$status_result = $conn->query($status_query); 
   
   	if(!$clnt_result OR !$ope_result OR !$seq_result){
	   header("location:404-error.php");
   	}
   
   	$clnt_row = mysqli_fetch_array($clnt_result);
   	$ope_row = mysqli_fetch_array($ope_result);
   	$seq_row = mysqli_fetch_array($seq_result);

   	if ($clnt_result->num_rows > 0 && $ope_result->num_rows > 0 && $seq_result->num_rows > 0) {
	   $tmp1 = $date;
	   $tmp2 = date("d-m-Y", strtotime($tmp1)); 
	   $datef = str_replace("-",'', $tmp2);
	   $clnt_id = $clnt_row['id'];
	   $temp5 = $ope_row['ope_no'];
	   $ope_id = $temp5 + 1;
	   $temp4 = $seq_row['seq_no'];
	   $seq_id = $temp4 + 1;
	   $id = $datef.$clnt_id.$ope_id.$seq_id; 
   	}
   	elseif($clnt_result->num_rows > 0 && $seq_result->num_rows > 0){
	   $tmp1 = $date;
	   $tmp2 = date("d-m-Y", strtotime($tmp1)); 
	   $datef = str_replace("-",'', $tmp2);
	   $clnt_id = $clnt_row['id'];
	   $ope_id = 1;
	   $temp4 = $seq_row['seq_no'];
	   $seq_id = $temp4 + 1;
	   $id = $datef.$clnt_id.$ope_id.$seq_id;
   	}
   	else{
	   $tmp1 = $date;
	   $tmp2 = date("d-m-Y", strtotime($tmp1)); 
	   $datef = str_replace("-",'', $tmp2);
	   $clnt_id = $clnt_row['id'];
	   $ope_id = 1;
	   $seq_id = 1;
	   $id = $datef.$clnt_id.$ope_id.$seq_id;
   	}
   
   	if($ope_result->num_rows > 0){
		$temp3 = $ope_row['ope_no']; 
      	$ope_no = $temp3 + 1;
   	}
   	else{
		$ope_no = 1;
   	}
   
   $sql = "INSERT INTO `order_form_data` (`orderid`,`ope_no`,`seq_no`,`name`,`phone`,`deadline`,`study_level`,`page_count`,`email`,`style`,`description`,`pay_status`,`filepath`) 
                           VALUES ('$id','$ope_no','$seq_id','$name','$phone','$date','$education','$pagecount','$email','$style','$reason',
                           '1','$filename');";

	if ($conn->query($sql) === TRUE) {
		if ($status_result->num_rows > 0)
		{
			$status_row = mysqli_fetch_array($status_result);

			$user_email = $status_row['email'];
			$total_count = $status_row['total_count'] + 1;
			$pending_count = $status_row['pending_count'] + 1;

			$upstatus_sql = "UPDATE `order_status` SET `total_count` = '$total_count', 
							`pending_count` = '$pending_count' WHERE email = '$user_email';";
			$upstatus_result = $conn->query($upstatus_sql);

		}
		else
		{

			$instatus_sql = "INSERT INTO `order_status` (`email`,`total_count`,`success_count`,`pending_count`,`fail_count`) 
                     			VALUES ('$email','1','0','1','0');";
            $instatus_result = $conn->query($instatus_sql);        			

		}

	//Insert a message in chat from Admin for User

		$chatmsg = "Hi Sir/Ma'am, Please Enter your query suggestion. We will revert back to you soon."; 
			
		$chatmsg_sql = "INSERT INTO `order_chat` (`orderid`,`author`,`message`) 
                 		VALUES ('$id','Admin','$chatmsg');";
        $chatmsg_result = $conn->query($chatmsg_sql);   


		$activity = "Hi, You have placed an Order with Order id: ".$id." successfully. ";
 
		$activity_sql = "INSERT INTO `user_activity_log` (`name`,`email`,`activity`) 
                    VALUES ('$name','$email','$activity');";
        $activity_result = $conn->query($activity_sql);         

       	// email send
			ini_set( 'display_errors', 1 );
			error_reporting( E_ALL );
			$from = "support@onlineassignmenthelp.com";
			$to = $email;
			
			$subject = "New Order Placed by ".$name." today ";
			
			$message = "
				Order 		: 	".$id."	
				
				Style		: 	".$style."
				
				Reason     	:	".$reason."
				
				Deadline	:	".$date."
				
				Pages   	:	".$page_count."
			";
			
			$headers = "From:" . $from . "\r\n" .
				"CC: sakshaynagpal@gmail.com";
			
			mail($to,$subject,$message, $headers);
			
			
		$modal_msg = 'ord_success';
		session_start();
		$_SESSION['sel_modal'] = $modal_msg;
		header("location:msg-modal.php");

	} 
	else {
		header("location:404-error.php");
	}

}

//INSERT SUBSCRIBER INFO INTO DATABASE
if(isset($_POST['subscribesubmit'])){
	
	$email = $_POST['sub_email'];

   $sql = "INSERT INTO `subscriber_list`(`email`) VALUES ('$email');";
   
	if ($conn->query($sql) === TRUE) {
		$modal_msg = 'sub_success';
		session_start();
		$_SESSION['sel_modal'] = $modal_msg;
		header("location:msg-modal.php");
	} 
	else {
		header("location:404-error.php");
	}
}

//TO CHECK IF USER ALREADY EXIST
if(isset($_POST['user_email']))
{
 	$email=$_POST['user_email'];
 	$checkdata = " SELECT email FROM `register_form_data` WHERE email = '$email' ";
 	$result = $conn->query($checkdata);
 
	if ($result->num_rows > 0)
	{
	  	echo "Email Already Exist";
	}
	else
	{
	  	echo "";
	}
	 exit();
}

//TO CHECK IF PHONE NUMBER CORRECT OR NOT
if(isset($_POST['user_phone']))
{
 	$phone=$_POST['user_phone'];
 	$result = preg_match('/^[0-9]{10}+$/', $phone);
 	if (!$result)
 	{
  		echo "Invalid Phone No. ";
 	}
 	else
 	{
  		echo "";
 	}
 	exit();
}

//TO ADD REVIEW DATA OF USER
if(isset($_POST['reviewsubmit'])){
	
  //VARIABLE DECLARATION	
	$rev_header = $_POST['rev_header'];
	$rev_scount = $_POST['rev_scount'];
	$rev_pcount = $_POST['rev_pcount'];
	$rev_dcount = $_POST['rev_dcount'];
	$rev_review = $_POST['rev_review'];
	$rev_userid = $_POST['rev_userid'];
	$rev_country = $_POST['rev_country'];
	
  //FILE UPLOADING	
  if (isset($_FILES["file"]["name"])){
    $filename = $_FILES["file"]["name"];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];

    if (!empty($filename)) {
        $location = 'Image_Source/';
        if  (move_uploaded_file($tmp_name, $location.$filename)){
        }
      }  
		else{
		   $message = "Please upload correct file!";
		   echo "<script type='text/javascript'>alert('$message');</script>"; 
		}
	}
	
   $sql = "INSERT INTO `user_review_data` (`header`,`starcount`,`pagecount`,`daycount`,`review`,`userid`,`country`,`image_path`) 
                             VALUES ('$rev_header','$rev_scount','$rev_pcount','$rev_dcount','$rev_review','$rev_userid','$rev_country','$filename');";

	if ($conn->query($sql) === TRUE) {
		$message = "Review is Added";
      	echo "<script type='text/javascript'>alert('$message');</script>";   
	  	echo "<script>setTimeout(\"location.href = 'admindashboard.php';\",50);</script>";
	} 
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

//TO ADD EXPERT DATA OF USER INTO DATABASE
if(isset($_POST['expertsubmit'])){
	
  //VARIABLE DECLARATION	
	$exp_name = $_POST['exp_name'];
	$exp_specialization = $_POST['exp_specialization'];
	$exp_client_rating = $_POST['exp_client_rating'];
	$exp_location = $_POST['exp_location'];
	$exp_order_c = $_POST['exp_order_c'];
	$exp_status = $_POST['exp_status'];
	
  //FILE UPLOADING	
  if (isset($_FILES["file"]["name"])){
    $filename = $_FILES["file"]["name"];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];

    if (!empty($filename)) {
        $location = 'Image_Source/';
        if  (move_uploaded_file($tmp_name, $location.$filename)){
        }
      }  
		else{
		   $message = "Please upload correct file!";
		   echo "<script type='text/javascript'>alert('$message');</script>"; 
		}
	}
	
   $sql = "INSERT INTO `expert_data`(`name`,`specialization`,`client_rating`,`location`,`order_c`,`status`,`image_path` ) 
                             VALUES ('$exp_name','$exp_specialization','$exp_client_rating','$exp_location','$exp_order_c','$exp_status','$filename');";

	if ($conn->query($sql) === TRUE) {
		$message = "Review is Added";
      echo "<script type='text/javascript'>alert('$message');</script>";   
	   echo "<script>setTimeout(\"location.href = 'admindashboard.php';\",50);</script>";
	} 
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

// FETCH DATA FROM DATABASE TO SHOW IN ORDER MODAL

if(isset($_POST['rowid'])) 
{
    $orderid = $_POST['rowid']; //escape string

    //UPDATE GET_ORDERID FIELD ON EACH CLICK

 	$postid_sql = "UPDATE `get_orderid` SET `orderid` = '$orderid';";
    $postid_res = $conn->query($postid_sql);
    
    $ord_detail = "SELECT * FROM `order_form_data` where orderid = '$orderid';";
	$ord_res = $conn->query($ord_detail);

	if(!$ord_res || !$postid_res){
		die ('SQL Error: ' .mysql_error($conn));
	}

	$row_detail = mysqli_fetch_array($ord_res);

	echo json_encode($row_detail);

 }

$conn->close();
?>
