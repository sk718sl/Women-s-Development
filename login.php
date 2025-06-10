<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE php>
<php>
<head>
<title>Women's Development Frontend</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="css/component.css" rel="stylesheet" type="text/css"  />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<meta name="keywords" content="Women's Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<script src="js/modernizr.custom.js"></script>
<!-- //js -->
</head>
<body class="cbp-spmenu-push">
	<!--new-banner-->
	<div class="new-banner abt-bnr">
		<!--header-->		
		<?php include('inc/header.php');  ?>
		<!--//header-->
	</div>
	<!--//new-banner-->
	<!--contact-->
	<div class="contact">
		<div class="container">				
			<div class="contact-grids">
				
				
			<div class=" contact-form">
				<div class="col-md-6 address"  >
					<h3>Log In</h3>
				<form method="post" action="register.php">
					
						<p>Email</p>
						<input type="email" name="email" class="form-control" placeholder="email.." >
						<p>Password</p>
						<input type="password" name="password" class="form-control"  >
						<button type="submit" name="login" class="btn btn-success btn-1d"  style="margin-top: 30px;"> Login </button>	
							
				</form>
				</div>
				<div class="col-md-6 address">
					<h3>Sign Up</h3>
					<form method="post" action="register.php" style="border-left: 3px solid black;padding-left: 15px;">
					
						<p>Name</p>
						<input type="text" name="name"  class="form-control" placeholder="your name..">
						<p>Email</p>
						<input type="email" name="email"  class="form-control" placeholder="email..." >
						<p>Password</p>
						<input type="password" name="password" class="form-control"  ><br>
						<p>Phone</p>
						<input type="text" name="phone" class="form-control" >
						<button type="submit" name="sign-up" class="btn btn-warning btn-1d"  style="margin-top: 30px;"> Signup </button>	
						
				</form>
				</div>									
				<div class="clearfix"> </div>	
			</div>
			</div>
		</div>		
	</div>
	<!--//contact-->
	<!--footer-->
	<?php include('inc/footer.php');  ?>