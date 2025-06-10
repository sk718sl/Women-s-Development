<?php 
session_start();
include("./admin//admin_inc/db.php");
$id= $_SESSION['aid'];
$hid = $_POST['hid'];
$lot = $_POST['lot'];
$price = $_POST['price'];
$con->query("INSERT INTO cart SET user_id='$id',handicraft_id='$hid',lot_quantity='$lot',price='$price'");
$id = $con->insert_id;
header("location: cart.php");
?>