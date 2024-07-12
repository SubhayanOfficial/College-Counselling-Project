<?php 
    require("config.php");
    require('checkSession.php');
    $fid=$_GET['fid'];
    $del="DELETE FROM collegefacilities WHERE fid=$fid";
    $res=mysqli_query($con, $del)or die (mysqli_error($con));
    if($res==1){
        header('location:manage_colf.php?msg=Delete Successfull.');
        // echo "Delete Successfull.";
    }else{
        header('location:manage_colf.php?msg=Delete Unsuccessfull.');
        // echo "Delete Unsuccessfull.";
    }
?>