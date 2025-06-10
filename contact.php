<?php
session_start();
include("./admin//admin_inc/db.php");
?>
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
				<div class="col-md-8 map">
					<h3>How to find us</h3>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.182370726!2d-0.10159865000000001!3d51.52864165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sin!4v1433744055746" frameborder="0" style="border:0"></iframe>
				</div>
				<div class="col-md-4 address">
					<h3>Contact info</h3>
					<p class="cnt-p">Empowering women through inclusive growth and development initiatives, enhancing opportunities and support systems for equality and progress in all areas of life. </p>
					<p>Women’s Progress Initiative</p>
					<p>9560 St Dolor,London</p>
					<p>Telephone : +2 800 544 6035</p>
					<p>FAX : +1 800 889 4444</p>
					<p>Email : <a href="mailto:womensdevelopment@mail.com">womensdevelopment@mail.com</a></p>
				</div>									
				<div class="clearfix"> </div>	
			</div>
			<div class=" contact-form">
				<h3>Contact form</h3>
				<form>
					<div class="col-md-6 form-grids">
						<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
					</div>
					<div class="col-md-6 form-grids">
						<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>	
						<button class="btn btn-1 btn-1d"> Submit </button>
					</div>
					<div class="clearfix"> </div>					
				</form>
			</div>
		</div>		
	</div>
	<!--//contact-->
	<!--footer-->
	<?php include('inc/footer.php');  ?>