<?php
session_start();
include("./admin/admin_inc/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Women's Development Frontend</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/component.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Women's Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
        Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar() { window.scrollTo(0, 1); }
    </script>
    <script src="js/jquery-1.11.1.min.js"></script> 
    <script src="js/modernizr.custom.js"></script>
</head>
<body class="cbp-spmenu-push">
    <!-- Banner -->
    <div class="new-banner abt-bnr">
        <!-- Header -->		
        <?php include('inc/header.php'); ?>
        <!-- //Header -->
    </div>
    
    <!-- Contact -->
    <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Enroll</h3>
            <div class="contact-list-grid">
                <form action="enroll_check.php" method="post" enctype="multipart/form-data">
                    <div class="agile-wls-contact-mid">

                        <div class="form-group contact-forms">
                            <b>ID Proof:</b>
                            <input class="form-control" type="file" name="idproof" required placeholder="ID Proof" />
                        </div>

                        <div class="form-group contact-forms">
                            <b>Select Enrollment</b>
                            <select class="form-control" name="enrollment_program" required>
                                <option value="">-- Select Program --</option>
                                <option value="Leadership Empowerment Program">Leadership Empowerment Program</option>
                                <option value="Advanced Skills & Entrepreneurship Program">Advanced Skills & Entrepreneurship Program</option>
                                <option value="Foundational Skills Development Program">Foundational Skills Development Program</option>                        
                            </select>
                        </div>

                        <input type="hidden" name="training_id" value="<?php echo $_GET['training_id'] ?? ''; ?>">

                        <div class="form-group contact-forms">
                            <textarea class="form-control" name="address" placeholder="Address" required rows="4"></textarea>
                            <br>
                            <p><input type="text" name="phone" id="phone" placeholder="Phone Number"
       required pattern="\d{10}" minlength="10" maxlength="10"
       inputmode="numeric" title="Please enter exactly 10 digits"></p>
                        </div>

                        <button type="submit" class="btn btn-block sent-butnn" name="enroll">Request For Enrollment</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script>
  document.getElementById("phone").addEventListener("input", function () {
    this.value = this.value.replace(/\D/g, ''); // Remove non-digits
  });
</script>


    <!-- Footer -->
    <?php include('inc/footer.php'); ?>
</body>
</html>
