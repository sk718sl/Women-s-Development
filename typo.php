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
		<?php include('inc/header.php'); ?>
		<!--//header-->
	</div>
	<!--//new-banner-->
	<!--typography-page -->
	<div class="typo">
		<div class="container">
			<h3 class="typo-title">Typography</h3>
			<div class="grid_3 grid_4">
				<h3>Headings</h3>
				<div class="bs-example">
					<table class="table">
						<tbody>
							<tr>
								<td><h1 id="h1.-bootstrap-heading">h1. Bootstrap heading<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h1></td>
								<td class="type-info">Semibold 36px</td>
							</tr>
							<tr>
								<td><h2 id="h2.-bootstrap-heading">h2. Bootstrap heading<a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2></td>
								<td class="type-info">Semibold 30px</td>
							</tr>
							<tr>
								<td><h3 id="h3.-bootstrap-heading">h3. Bootstrap heading<a class="anchorjs-link" href="#h3.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h3></td>
								<td class="type-info">Semibold 24px</td>
							</tr>
							<tr>
								<td><h4 id="h4.-bootstrap-heading">h4. Bootstrap heading<a class="anchorjs-link" href="#h4.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
								<td class="type-info">Semibold 18px</td>
							</tr>
							<tr>
								<td><h5 id="h5.-bootstrap-heading">h5. Bootstrap heading<a class="anchorjs-link" href="#h5.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h5></td>
								<td class="type-info">Semibold 14px</td>
							</tr>
							<tr>
								<td><h6>h6. Bootstrap heading</h6></td>
								<td class="type-info">Semibold 12px</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="grid_3 grid_5">
				<h3>Buttons</h3>
				<h1>
					<a href="#"><span class="label label-default">Default</span></a>
					<a href="#"><span class="label label-primary">Primary</span></a>
					<a href="#"><span class="label label-success">Success</span></a>
					<a href="#"><span class="label label-info">Info</span></a>
					<a href="#"><span class="label label-warning">Warning</span></a>
					<a href="#"><span class="label label-danger">Danger</span></a>
				</h1>
				<h2>
					<a href="#"><span class="label label-default">Default</span></a>
					<a href="#"><span class="label label-primary">Primary</span></a>
					<a href="#"><span class="label label-success">Success</span></a>
					<a href="#"><span class="label label-info">Info</span></a>
					<a href="#"><span class="label label-warning">Warning</span></a>
					<a href="#"><span class="label label-danger">Danger</span></a>
				</h2>
				<h3>
					<a href="#"><span class="label label-default">Default</span></a>
					<a href="#"><span class="label label-primary">Primary</span></a>
					<a href="#"><span class="label label-success">Success</span></a>
					<a href="#"><span class="label label-info">Info</span></a>
					<a href="#"><span class="label label-warning">Warning</span></a>
					<a href="#"><span class="label label-danger">Danger</span></a>
				</h3>
				<h4>
					<a href="#"><span class="label label-default">Default</span></a>
					<a href="#"><span class="label label-primary">Primary</span></a>
					<a href="#"><span class="label label-success">Success</span></a>
					<a href="#"><span class="label label-info">Info</span></a>
					<a href="#"><span class="label label-warning">Warning</span></a>
					<a href="#"><span class="label label-danger">Danger</span></a>
				</h4>
				<h5>
					<a href="#"><span class="label label-default">Default</span></a>
					<a href="#"><span class="label label-primary">Primary</span></a>
					<a href="#"><span class="label label-success">Success</span></a>
					<a href="#"><span class="label label-info">Info</span></a>
					<a href="#"><span class="label label-warning">Warning</span></a>
					<a href="#"><span class="label label-danger">Danger</span></a>
				</h5>
				<h6>
					<a href="#"><span class="label label-default">Default</span></a>
					<a href="#"><span class="label label-primary">Primary</span></a>
					<a href="#"><span class="label label-success">Success</span></a>
					<a href="#"><span class="label label-info">Info</span></a>
					<a href="#"><span class="label label-warning">Warning</span></a>
					<a href="#"><span class="label label-danger">Danger</span></a>
				</h6>
			</div>			   
			<div class="grid_3 grid_5">
				<h3>Progress Bars</h3>
				<div class="tab-content">
					<div class="tab-pane active" id="domprogress">
						<div class="progress">    
							<div class="progress-bar progress-bar-primary" style="width: 20%"></div>
						</div>
						<p>Info with <code>progress-bar-info</code> class.</p>
						<div class="progress">    
							<div class="progress-bar progress-bar-info" style="width: 60%"></div>
						</div>
						<p>Success with <code>progress-bar-success</code> class.</p>
						<div class="progress">
							<div class="progress-bar progress-bar-success" style="width: 30%"></div>
						</div>
						<p>Warning with <code>progress-bar-warning</code> class.</p>
						<div class="progress">
							<div class="progress-bar progress-bar-warning" style="width: 70%"></div>
						</div>
						<p>Danger with <code>progress-bar-danger</code> class.</p>
						<div class="progress">
							<div class="progress-bar progress-bar-danger" style="width: 50%"></div>
						</div>
						<p>Inverse with <code>progress-bar-inverse</code> class.</p>
						<div class="progress">
							<div class="progress-bar progress-bar-inverse" style="width: 40%"></div>
						</div>
						<p>Inverse with <code>progress-bar-inverse</code> class.</p>
						<div class="progress">
							<div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span></div>
							<div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span></div>
							<div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="grid_3 grid_5">
				<h3>Alerts</h3>
				<div class="alert alert-success" role="alert">
					<strong>Well done!</strong> You successfully read this important alert message.
				</div>
				<div class="alert alert-info" role="alert">
					<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
				</div>
				<div class="alert alert-warning" role="alert">
					<strong>Warning!</strong> Best check yo self, you're not looking too good.
				</div>
				<div class="alert alert-danger" role="alert">
					<strong>Oh snap!</strong> Change a few things up and try submitting again.
				</div>
			</div>
			<div class="grid_3 grid_5">
				<h3>Pagination</h3>
				<div class="col-md-6">
					<nav>
						<ul class="pagination pagination-lg">
							<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
						</ul>
					</nav>
					<nav>
						<ul class="pagination">
							<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
						</ul>
					</nav>
					<nav>
						<ul class="pagination pagination-sm">
							<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
						</ul>
					</nav>
				</div>
				<div class="col-md-6">
					<ul class="pagination pagination-lg">
						<li class="disabled"><a href="#"><i class="fa fa-angle-left">«</i></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#"><i class="fa fa-angle-right">»</i></a></li>
					</ul>
					<nav>
						<ul class="pagination">
							<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
							<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
						</ul>
					</nav>
					<ul class="pagination pagination-sm">
						<li class="disabled"><a href="#"><i class="fa fa-angle-left">«</i></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#"><i class="fa fa-angle-right">»</i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="grid_3 grid_5">
				<h3>Breadcrumbs</h3>
				<ol class="breadcrumb">
					<li class="active">Home</li>
				</ol>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Library</li>
				</ol>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Library</a></li>
					<li class="active">Data</li>
				</ol>
			</div>
			<div class="grid_3 grid_5">
				<h3>Badges</h3>
				<div class="col-md-6">
					<p>Add modifier classes to change the appearance of a badge.</p>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th width="50%">Classes</th>
								<th width="50%">Badges</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>No modifiers</td>
								<td><span class="badge">42</span></td>
							</tr>
							<tr>
								<td><code>.badge-primary</code></td>
								<td><span class="badge badge-primary">1</span></td>
							</tr>
							<tr>
								<td><code>.badge-success</code></td>
								<td><span class="badge badge-success">22</span></td>
							</tr>
							<tr>
								<td><code>.badge-info</code></td>
								<td><span class="badge badge-info">30</span></td>
							</tr>
							<tr>
								<td><code>.badge-warning</code></td>
								<td><span class="badge badge-warning">412</span></td>
							</tr>
							<tr>
								<td><code>.badge-danger</code></td>
								<td><span class="badge badge-danger">999</span></td>
							</tr>
						</tbody>
					</table>                    
				</div>
				<div class="col-md-6">
					<p>Easily highlight new or unread items with the <code>.badge</code> class</p>
					<div class="list-group list-group-alternate"> 
						<a href="#" class="list-group-item"><span class="badge">201</span> <i class="ti ti-email"></i> Inbox </a> 
						<a href="#" class="list-group-item"><span class="badge badge-primary">5021</span> <i class="ti ti-eye"></i> Profile visits </a> 
						<a href="#" class="list-group-item"><span class="badge">14</span> <i class="ti ti-headphone-alt"></i> Call </a> 
						<a href="#" class="list-group-item"><span class="badge">20</span> <i class="ti ti-comments"></i> Messages </a> 
						<a href="#" class="list-group-item"><span class="badge badge-warning">14</span> <i class="ti ti-bookmark"></i> Bookmarks </a> 
						<a href="#" class="list-group-item"><span class="badge badge-danger">30</span> <i class="ti ti-bell"></i> Notifications </a> 
					</div>
				</div>
			   <div class="clearfix"> </div>
			</div>	 
			<div class="grid_3 grid_5">
				<h3>Wells</h3>
				<div class="well">
					There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
				</div>
				<div class="well">
					It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here
				</div>
				<div class="well">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
				</div>
			</div>
		</div>
	</div>
	<!-- //typography-page -->
	<!--footer-->
<?php include('inc/footer.php');  ?>