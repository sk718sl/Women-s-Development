<?php 
session_start();
include("./admin//admin_inc/db.php");
if(isset($_POST['enroll'])){
    $training_id=$_POST['training_id'];
    $sid= $_SESSION['aid'];
    $a=$_POST['address'];
    $e=$_POST['enrollment_program'];
    $p=$_POST['phone'];
    $fn = $_FILES['idproof']['name'];
   $fn = time().$fn;
   $b = $_FILES['idproof']['tmp_name'];
   $arr = explode(".",$fn);
   $xy= count($arr);
   if( $arr[$xy-1]=="jpg" || $arr[$xy-1]=="png" || $arr[$xy-1]=="jpeg") {

    move_uploaded_file($b,"store_user_id/".$fn);
   }

    $sel="INSERT INTO enrollment SET address='$a' , identityproof='$fn' ,enrollment_program='$e', training_id='$training_id',user_id='$sid',phone='$p'";
    $con->query($sel);
    header("location:index.php");
}
?>