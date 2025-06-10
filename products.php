<?php
session_start();
if(!isset($_SESSION['aid'])){
header("location:index.php");
}
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
	<!--gallery-->
	<div class="gallery">
		<div class="container">
			<h3>Our Handicrafts</h3>
			<!--light-box-js -->
			<script src="js/jquery.chocolat.js"></script>
			<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all" charset="utf-8" />
			<!--light-box-files -->
			<script type="text/javascript" charset="utf-8">
			$(function() {
				$('.moments-bottom a').Chocolat();
			});
			</script> 
			<!--//end-gallery js-->
			<div class="row gallery-info">	
				
			<?php 
			include('admin/admin_inc/db.php');
			$res = $con->query("SELECT * FROM  handicrafts");
			while($row = $res -> fetch_assoc() ) { ?> 
			
			<div class="col-sm-6 col-md-4 gallery-grids ">
				<div class="thumbnail moments-bottom">
					 <a href="./admin/himage/<?php echo $row['image']; ?>" title="<?php echo $row['h_name']; ?>">
            <img src="./admin/himage/<?php echo $row['image']; ?>" class="img-responsive zoom-img" alt="<?php echo $row['h_name']; ?>">				
        </a>							
				</div>
				<div class="caption gallery-caption">
					<h5><a href="#"> <?php echo $row['h_name']; ?> </a></h5>
					<p><b>Made By Whom : </b><?php echo $row['made_by_whom']; ?></p>
					<p><b>Contact No :</b><?php echo $row['contact']; ?></p>	
					<p><b>Rs.</b> <?php echo $row['price']; ?></p></b>
					<p><b>BATCH LOT :</b> <?php echo $row['lot']; ?></p>
					<p><b>Description:</b><?php echo $row['description']; ?></p>
					
					<form action="submit.php" method="post" >
					<p><input type="hidden" name="hid" value="<?php echo $row['hid']; ?>" ></p>
					<p><input type="hidden" name="price" value="<?php echo $row['price']; ?>" ></p>
					<p><input type="number" name="lot" name="lot" min="1" placeholder="Lot" ></p><br>
					
					<p><input type="submit" value="Add To My Cart" class="btn btn-warning" ></p>	
					</form>			
				</div>
			</div>
			
			<?php } ?>

			

				
				<div class="clearfix"> </div>
			</div>			
		</div>
	</div>
	<!--//gallery-->
	<!--footer-->
	<?php include('inc/footer.php');  ?>