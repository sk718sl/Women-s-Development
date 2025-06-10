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
			<?php 
			$sid= $_SESSION['aid'];
			$sel = "SELECT enrollment.* , users.* , trainings.* FROM enrollment JOIN users ON enrollment.user_id = users.user_id JOIN trainings ON trainings.tid=enrollment.training_id WHERE users.user_id='$sid';";
			$res = $con -> query($sel);
			while( $row = $res -> fetch_assoc()){ ?>
			<?php if($row['status']==1) { ?>
			<p style="color: blue; font-size: 20px;font-weight: bold;" >Congratulations <?php echo $row['name']; ?>..Your enrollment for 
			<mark style=""><?php echo $row['tr_name']; ?></mark>
			has been accepted . Our co-ordinator will connect to you shortly . </p>
			<?php } ?>
			<?php if($row['status']==0) { ?>
			<p style="color: red; font-size: 20px;font-weight: bold;" >We are extremely sorry to you <?php echo $row['name']; ?>..Your enrollment for 
			<mark style=""><?php echo $row['tr_name']; ?></mark>
			has been rejected . You can try again after six months from current appealing . </p>
			<?php } ?>

			<?php if($row['status']==-1) { ?>
			<p style="color: green; font-size: 20px;font-weight: bold;" >Please Wait . <?php echo $row['name']; ?> your enrollment is under pending approval. We will notify you shortly . </p>
			<?php } ?>


			<?php }	?>
			<hr>
			<h3>Our Trainings</h3>
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
			$res = $con->query("SELECT * FROM  trainings");
			while($row = $res -> fetch_assoc() ) { ?> 
			
			<div class="col-sm-6 col-md-4 gallery-grids ">
				<div class="thumbnail moments-bottom">
  <a href="./admin/trimg/<?php echo $row['img']; ?>" title="<?php echo $row['tr_name']; ?>">
            <img src="./admin/trimg/<?php echo $row['img']; ?>" class="img-responsive zoom-img" alt="<?php echo $row['tr_name']; ?>">				
        </a>							
				</div>
				<div class="caption gallery-caption">
					<h5><a href="#"> <?php echo $row['tr_name']; ?> </a></h5>
					<p><?php echo $row['duration']; ?></p>
					
					<p><a href="./admin/trpdf/<?php echo $row['pdf']; ?>" target="_blank"> <?php echo $row['pdf']; ?> </a></p>
					<p><?php echo $row['description']; ?></p>
					<p><?php echo $row['trainer']; ?></p>	
					<a href="enroll_now.php?training_id=<?php echo $row['tid']; ?>" class="btn btn-success btn-1d">Enroll Now</a> 			
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