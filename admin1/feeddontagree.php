<?php 
    require("config.php");
    require('checkSession.php');

    $fedid=$_GET['fedid'];
    $upd="UPDATE feedback SET status='Dontagree' WHERE fedid=$fedid";
    $res=mysqli_query($con, $upd)or die(mysqli_error($con));
    if($res==1){
        echo "USer Feedback is Don't Agree succesfully";
    }
    else{
        echo "USer Feedback is not Don't Agree succesfully";
    }
?>