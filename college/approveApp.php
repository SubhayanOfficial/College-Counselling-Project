<?php 
    require("config.php");
    require('checkSession.php');

    $apid=$_GET['apid'];
    $up_date=date("d-M-Y");
    $upd="UPDATE applystudent SET up_date='$up_date', status='Approve' WHERE apid=$apid";
    $res=mysqli_query($con, $upd)or die(mysqli_error($con));
    if($res==1){
        echo "Student application is approve succesfully";
    }
    else{
        echo "Student application is not approve succesfully";
    }
?>
