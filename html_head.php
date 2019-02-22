
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Online Assignment Help" />

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="user_assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

<!-- jQuery (necessary for responsive table) -->
<link href="user_assets/css/datatables.min.css" rel="stylesheet" type="text/css" media="all"/>

<!-- Custom Theme files -->
<link href="user_assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>

<!--js-->
<script src="user_assets/js/bootstrap.min.js"></script>
<script src="user_assets/js/jquery-2.1.1.min.js"></script> 

<!--icons-css-->
<link href="user_assets/css/font-awesome.css" rel="stylesheet"> 

<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300|Montserrat' rel='stylesheet' type='text/css'>

<?php include './credentials.php'?>

<?php

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
?>