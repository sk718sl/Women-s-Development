<?php
session_start();
include("./admin//admin_inc/db.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Women's Development Frontend</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="css/component.css" rel="stylesheet" type="text/css"  />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
	<!--about-->
	<div class="about">
		<div class="container">			
			<div class="about-info">
				<div class="col-md-6 about-grids">	
					<h3>Who We Are </h3>
					<img src="images\about.jpg" alt=""/>
					<h5>Women's development empowers communities through education, equal opportunity, and inclusive growth across all sectors.</h5>
					<p>Women's development is essential in building a progressive society. Investing in education and skills empowers women to lead. Through equal opportunities and inclusive policies, 
						women can thrive and contribute meaningfully to national growth.</p>
					<a href="single.html" class="btn btn-1 btn-1d"> Read More </a>
				</div>				
				<div class="col-md-6 about-grids">
					<h3>Our Speacials</h3>
					<h5>Women's development enhances empowerment and fosters sustainable growth.</h5>
					<p>Women's development plays a vital role in shaping a progressive society. Through education, empowerment, and equal opportunities, women contribute significantly to all aspects of life. Initiatives supporting women's growth continue to drive positive change across communities.</p>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="">
										Empowerment
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true">
								<div class="panel-body">
									Women's development initiatives promote equality, uplift communities, and create opportunities for a better quality of life across all sectors.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Equality
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
								<div class="panel-body">
									Women's development focuses on empowerment, education, and equality, enabling women to lead fulfilling lives and make impactful contributions to society.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Women's Empowerment
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
								<div class="panel-body">
									Women's development focuses on empowerment, education, and equality, enabling women to lead fulfilling lives and make impactful contributions to society.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFour">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									Gender Progress
									</a>
								</h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" aria-expanded="false">
								<div class="panel-body">
									Women's development focuses on empowerment, education, and equality, enabling women to lead fulfilling lives and make impactful contributions to society.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFive">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									Inclusive Growth
									</a>
								</h4>
							</div>
							<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" aria-expanded="false">
								<div class="panel-body">
									Women's development focuses on empowerment, education, and equality, enabling women to lead fulfilling lives and make impactful contributions to society.
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!--team-->
			<div class="team">
				<h3>Our Team Members</h3>
				<div class="team-info">
					<div class="col-md-3 team-grids">
						<a href="#">
							<img class="img-responsive" src="images/img3.jpg" alt="">
							<div class="captn">
								<h4>Tincidun</h4>
								<p>Aenean pulvinar ac enimet posuere tincidunt velit Utin tincidunt</p>
							</div>
						</a>
					</div>					
					<div class="col-md-3 team-grids">
						<a href="#">
							<img class="img-responsive" src="images/img4.jpg" alt="">
							<div class="captn">
								<h4>Velit uti</h4>
								<p>Aenean pulvinar ac enimet posuere tincidunt velit Utin tincidunt</p>
							</div>
						</a>
					</div>
					<div class="col-md-3 team-grids">
						<a href="#">
							<img class="img-responsive" src="images/img5.jpg" alt="">
							<div class="captn">
								<h4>Posuere</h4>
								<p>Aenean pulvinar ac enimet posuere tincidunt velit Utin tincidunt</p>
							</div>
						</a>
					</div>
					<div class="col-md-3 team-grids">
						<a href="#">
							<img class="img-responsive" src="images/img6.jpg" alt="">
							<div class="captn">
								<h4>Augc sfe</h4>
								<p>Aenean pulvinar ac enimet posuere tincidunt velit Utin tincidunt</p>
							</div>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!--//team-->
		</div>
	</div>
	<!--about-->
	<!--footer-->
	<?php include('inc/footer.php');  ?>