<?php
session_start();
include("./admin//admin_inc/db.php");
if(isset($_POST['login'])){
    $e=$_POST['email'];
    $p=$_POST['password'];
    $sel="SELECT * FROM users WHERE email='$e' AND password='$p'";
    $rs=$con->query($sel);
    print_r($rs);
    if($rs->num_rows>0){
        $row=$rs->fetch_assoc();
        $_SESSION['aid']=$row['user_id'];
        $_SESSION['aemail']=$row['email'];
        $_SESSION['aname']=$row['name'];
        header("location:index.php");
    }else{
        $err="Ivalid Login";
    }
}
if(isset($_POST['sign-up'])){
    $n=$_POST['name'];
    $e=$_POST['email'];
    $p=$_POST['password'];
    $phone = $_POST['phone'];
    $sel="INSERT INTO users SET name='$n', email='$e' , password='$p' , phone='$phone'";
    $con->query($sel);
    header("location:index.php");
}
?>
