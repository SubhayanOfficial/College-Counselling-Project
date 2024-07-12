<?php 
    require("config.php");
    require('checkSession.php');

    $fedid=$_GET['fedid'];
    $upd="UPDATE feedback SET status='Agree' WHERE fedid=$fedid";
    $res=mysqli_query($con, $upd)or die(mysqli_error($con));
    if($res==1){
        echo "User Feedback is Agree succesfully";
    }
    else{
        echo "User Feedback is not Agree succesfully";
    }
?>
